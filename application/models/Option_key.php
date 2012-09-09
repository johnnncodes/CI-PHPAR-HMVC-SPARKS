<?php

class Option_key extends ActiveRecord\Model {

	static $belongs_to = array(
		array('product')
	);

	static $has_many = array(
		array('option_values', 'class_name' => 'Option_value')
	);

}

/* End of file Option_key.php */
/* Location: ./application/models/Option_key.php */