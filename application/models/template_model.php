<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Template_model extends CI_Model
{
	
	public $shortcodes = array();
	protected $filepath;
	protected $filename;
	
	function __construct() 
    {
        parent::__construct();
    }

	
	function template_dir()
	{
		
	}
	
	function opentemplate()
	{
		$this->load->config('edm_config', TRUE );
		$data = $this->config->item('edm_template', 'edm_config');
		
		var_dump($data);
		
	}

	
	function set_shortcode($arr=array())
	{
		$this->shortcodes = $arr;
		return $this;
	}
	
	
	function get_shortcode()
	{
		return $this->shortcodes;
	}
		

}