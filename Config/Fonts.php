<?php
namespace Dfe\Typography\Config;
use Df\Config\Table;
class Fonts extends Table {
	/**
	 * 2015-12-15
	 * @override
	 * @see \Magento\Config\Block\System\Config\Form\Field\FieldArray\AbstractFieldArray::_construct()
	 * @return void
	 */
	protected function _construct() {
		parent::_construct();
		$this->addColumn('column1', ['label' => 'код', 'style' => 'width:3em']);
		$this->addColumn('column2', ['label' => 'код', 'style' => 'width:3em']);
		$this->_addAfter = false;
	}
}