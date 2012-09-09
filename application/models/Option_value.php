<?php

class Option_value extends ActiveRecord\Model {

	static $belongs_to = array(
		array('option_key', 'class_name' => 'Option_value')
	);

	/**
     * Fetches an option_value in the database that is associated w/ an option_key
     *
     * @param (string) $option_key_id -The id of the option_key
     * @param (string) $option_value -The option value
     * @return (object)
     * @author John Kevin M. Basco
     */
	function get_option_value($option_key_id, $option_value)
	{
		return Option_value::find_by_option_key_id_and_name($option_key_id, $option_value);
	}

}

/* End of file Option_value.php */
/* Location: ./application/models/Option_value.php */