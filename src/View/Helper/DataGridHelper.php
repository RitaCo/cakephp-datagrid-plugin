<?php

namespace DataGrid\View\Helper;

use Cake\View\Helper;
use Cake\Utility\Hash;


class DataGridHelper extends Helper {

    public static $instance = null;

	public function __construct($View = null, $options = array()) {
		$options = Hash::merge(array('engine' => 'Tools.Number'), $options);
		parent::__construct($View, $options);
	}

}
