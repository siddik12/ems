<?php

class HomeController extends BaseController {

	protected $data = array();

	public function index()
	{
		$this->data['title'] = 'Home page';
		return View::make('hello',$this->data);
	}

}
