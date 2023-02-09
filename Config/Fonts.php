<?php
namespace Dfe\Typography\Config;
# 2015-12-16
/** @final Unable to use the PHP «final» keyword here because of the M2 code generation. */
class Fonts extends \Df\Framework\Form\Element\Table {
	/**
	 * 2015-12-16
	 * @override
	 * @see \Df\Framework\Form\Element\Table::columns()
	 * @used-by \Df\Framework\Form\Element\Table::onFormInitialized()
	 * @return string[]
	 */
	final protected function columns():array {return ['Column 1', 'Column 2', 'Column 3'];}
}