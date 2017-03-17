<?php if ( ! defined('BASE_PATH')) exit('No direct script access allowed');

/**
 * Base Model Class
 * @author	Arun Verma
 */

class Model
{
	//protected $db = NULL;
	function __construct() {
		//$this->load->database() = $this->database();
	}
	function __destruct() {
		//disconnect database
	}
	
	protected function load_database()
	{
		//load the database class
		$this->db= load_class("DB", 'database');
	}
}