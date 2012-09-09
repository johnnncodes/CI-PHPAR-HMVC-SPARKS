<?php

class Blog extends MX_Controller {
	
	function index()
	{
		echo 'hi';
		
		$this->output->enable_profiler(TRUE);
		// get all the products
		$data['products'] = Product::get_products();

		// render the view
		$this->load->view('home', $data);
	}
}