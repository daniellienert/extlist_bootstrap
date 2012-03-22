<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) ###YEAR### John Doe <mail@typo3.com>, TYPO3
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 *
 *
 * @package test_extension
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Tx_TestExtension_Domain_Model_Main extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * This is not required
	 *
	 * @var string
	 */
	protected $name;

	/**
	 * This is required
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $identifier;

	/**
	 * This is a 1:1 relation
	 *
	 * @var Tx_TestExtension_Domain_Model_Child1
	 */
	protected $child1;

	/**
	 * This is a 1:n relation
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_TestExtension_Domain_Model_Child2>
	 */
	protected $children2;

	/**
	 * This is a n:1 relation
	 *
	 * @var Tx_TestExtension_Domain_Model_Child3
	 */
	protected $child3;

	/**
	 * This is a m:n relation
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_TestExtension_Domain_Model_Child4>
	 */
	protected $children4;

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all Tx_Extbase_Persistence_ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->children2 = new Tx_Extbase_Persistence_ObjectStorage();

		$this->children4 = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Returns the name
	 *
	 * @return string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the identifier
	 *
	 * @return string $identifier
	 */
	public function getIdentifier() {
		return $this->identifier;
	}

	/**
	 * Sets the identifier
	 *
	 * @param string $identifier
	 * @return void
	 */
	public function setIdentifier($identifier) {
		$this->identifier = $identifier;
	}

	/**
	 * Returns the child1
	 *
	 * @return Tx_TestExtension_Domain_Model_Child1 $child1
	 */
	public function getChild1() {
		return $this->child1;
	}

	/**
	 * Sets the child1
	 *
	 * @param Tx_TestExtension_Domain_Model_Child1 $child1
	 * @return void
	 */
	public function setChild1(Tx_TestExtension_Domain_Model_Child1 $child1) {
		$this->child1 = $child1;
	}

	/**
	 * Adds a Child2
	 *
	 * @param Tx_TestExtension_Domain_Model_Child2 $children2
	 * @return void
	 */
	public function addChildren2(Tx_TestExtension_Domain_Model_Child2 $children2) {
		$this->children2->attach($children2);
	}

	/**
	 * Removes a Child2
	 *
	 * @param Tx_TestExtension_Domain_Model_Child2 $children2ToRemove The Child2 to be removed
	 * @return void
	 */
	public function removeChildren2(Tx_TestExtension_Domain_Model_Child2 $children2ToRemove) {
		$this->children2->detach($children2ToRemove);
	}

	/**
	 * Returns the children2
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_TestExtension_Domain_Model_Child2> $children2
	 */
	public function getChildren2() {
		return $this->children2;
	}

	/**
	 * Sets the children2
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_TestExtension_Domain_Model_Child2> $children2
	 * @return void
	 */
	public function setChildren2(Tx_Extbase_Persistence_ObjectStorage $children2) {
		$this->children2 = $children2;
	}

	/**
	 * Returns the child3
	 *
	 * @return Tx_TestExtension_Domain_Model_Child3 $child3
	 */
	public function getChild3() {
		return $this->child3;
	}

	/**
	 * Sets the child3
	 *
	 * @param Tx_TestExtension_Domain_Model_Child3 $child3
	 * @return void
	 */
	public function setChild3(Tx_TestExtension_Domain_Model_Child3 $child3) {
		$this->child3 = $child3;
	}

	/**
	 * Adds a Child4
	 *
	 * @param Tx_TestExtension_Domain_Model_Child4 $children4
	 * @return void
	 */
	public function addChildren4(Tx_TestExtension_Domain_Model_Child4 $children4) {
		$this->children4->attach($children4);
	}

	/**
	 * Removes a Child4
	 *
	 * @param Tx_TestExtension_Domain_Model_Child4 $children4ToRemove The Child4 to be removed
	 * @return void
	 */
	public function removeChildren4(Tx_TestExtension_Domain_Model_Child4 $children4ToRemove) {
		$this->children4->detach($children4ToRemove);
	}

	/**
	 * Returns the children4
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_TestExtension_Domain_Model_Child4> $children4
	 */
	public function getChildren4() {
		return $this->children4;
	}

	/**
	 * Sets the children4
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_TestExtension_Domain_Model_Child4> $children4
	 * @return void
	 */
	public function setChildren4(Tx_Extbase_Persistence_ObjectStorage $children4) {
		$this->children4 = $children4;
	}

}
?>