<?php

//namespace site;	

class Product extends ActiveRecord\Model {

	static $has_many = array(
		array('option_keys', 'class_name' => 'Option_key')
	);

	/**
	 * Fetches all or 1 products/product from the database. Uses lazy loading approach.
	 *
	 * @return void
	 */
	function get_products($id = NULL)
	{
		if ($id) // if an id is passed. get 1 product by id
			return Product::find_by_id($id);
		else // if no id is passed. get all products!
			return Product::all();

			// eagear load
			// return Product::find('all', array('include' => array('option_keys' => array('option_values'))));
	}

}

/* End of file Product.php */
/* Location: ./application/models/Product.php */
