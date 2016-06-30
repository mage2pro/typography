<?php
namespace Dfe\Typography\Config;
use Df\Framework\Form\Element\Table;
class Fonts extends Table {
	/**
	 * 2015-12-16
	 * @override
	 * @see \Df\Framework\Form\Element\Table::columns()
	 * @used-by \Df\Framework\Form\Element\Table::onFormInitialized()
	 * @return string[]
	 */
	protected function columns() {return ['Column 1', 'Column 2', 'Column 3'];}
}