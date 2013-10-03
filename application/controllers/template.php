<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template extends MY_Controller 
{
	
	public function index($renderData="")
	{	
		$this->Template_model->opentemplate();	
	}
	
	
	
}