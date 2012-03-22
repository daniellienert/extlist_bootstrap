<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2012 Nico de Haen <mail@ndh-websolutions.de>
*  All rights reserved
*
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

/**
 * Repository for existing Extbase Extensions
 *
 * @package ExtensionBuilder
 */
class Tx_ExtensionBuilder_Domain_Repository_ExtensionRepository extends Tx_Extbase_Persistence_Repository {


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

	public function findAll() {
		$result = array();
		$extensionDirectoryHandle = opendir(PATH_typo3conf . 'ext/');
		while (FALSE !== ($singleExtensionDirectory = readdir($extensionDirectoryHandle))) {
			if ($singleExtensionDirectory[0] == '.') {
				continue;
			}
			$extensionBuilderConfiguration = $this->configurationManager->getExtensionBuilderConfiguration($singleExtensionDirectory);
			t3lib_div::devlog('Modeler Configuration: '.$singleExtensionDirectory,'extension_builder',0,$extensionBuilderConfiguration);
			if ($extensionBuilderConfiguration !== NULL) {
				$result[] = array(
					'name' => $singleExtensionDirectory,
					'working' => json_encode($extensionBuilderConfiguration)
				);
			}
		}
		closedir($extensionDirectoryHandle);

		return array('result' => $result, 'error' => NULL);
	}
}

?>