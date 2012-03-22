<?php
/***************************************************************
 *  Copyright notice
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

class Tx_ExtensionBuilder_ViewHelpers_MappingViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {

	/**
	 * @var Tx_ExtensionBuilder_Configuration_ConfigurationManager
	 */
	protected $configurationManager;

	/**
	 * @param Tx_ExtensionBuilder_Configuration_ConfigurationManager $configurationManager
	 * @return void
	 */
	public function injectConfigurationManager(Tx_ExtensionBuilder_Configuration_ConfigurationManager $configurationManager) {
		$this->configurationManager = $configurationManager;
	}

	/**
	 * Helper function to verify various conditions around possible mapping/inheritance configurations
	 * @param Tx_ExtensionBuilder_Domain_Model_DomainObject $domainObject
	 * @param string $renderCondition
	 * @return string
	 */
	public function render(Tx_ExtensionBuilder_Domain_Model_DomainObject $domainObject, $renderCondition) {
		$content = '';
		$extensionPrefix = 'Tx_' . t3lib_div::underscoredToUpperCamelCase($domainObject->getExtension()->getExtensionKey());

		// an external table should have a loadable TCA configuration and the column definitions
		// for external tables have to be declared in ext_tables.php
		$isMappedToExternalTable = FALSE;

		// table name is only set, if the model is mapped to a table or if the domain object extends a class
		$tableName = $domainObject->getMapToTable();

		if ($tableName && strpos($tableName, strtolower($extensionPrefix) . '_domain_model_') === FALSE) {
			$isMappedToExternalTable = TRUE;
		}

		switch ($renderCondition) {

			case 'isMappedToInternalTable'	:
				if (!$isMappedToExternalTable) {
					$content = $this->renderChildren();
				}
				break;

			case 'isMappedToExternalTable'	:
				if ($isMappedToExternalTable) {
					$content = $this->renderChildren();
				}
				break;

			case 'needsTypeField'			:
				if ($this->needsTypeField($domainObject, $isMappedToExternalTable)) {
					$content = $this->renderChildren();
				}
				break;
		}

		return $content;
	}

	/**
	 * Do we have to create a typefield in database and configuration?
	 * @param string $tableName
	 * @param string $parentClass
	 * @param bool $isMappedToExternalTable
	 * @return bool
	 */
	protected function needsTypeField(Tx_ExtensionBuilder_Domain_Model_DomainObject $domainObject, $isMappedToExternalTable) {
		$needsTypeField = FALSE;
		if ($domainObject->getChildObjects() || ($domainObject->getParentClass() && $isMappedToExternalTable)) {
			$tableName = $domainObject->getDatabaseTableName();
			//t3lib_div::devlog('TCA: '.$tableName,'extension_builder',0,$GLOBALS['TCA'][$tableName]['ctrl']);
			if (!isset($GLOBALS['TCA'][$tableName]['ctrl']['type']) || $GLOBALS['TCA'][$tableName]['ctrl']['type'] == 'tx_extbase_type') {
				/**
				 * if the type field is set but equals the default extbase record type field name it might
				 * have been defined by the current extension and thus has to be defined again when rewriting TCA definitions
				 * this might result in duplicate definition, but the type field definition is always wrapped in a condition
				 * "if(!isset($TCA[table][ctrl][type]){ ..."
				 */
				$needsTypeField = TRUE;
			}
		}
		return $needsTypeField;
	}

}

?>