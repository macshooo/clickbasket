<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__).'/TCPDF/TCPDF.php';


class pdf extends TCPDF
{
	
	function __construct()
	{
		parent::__construct();
	}
}
	
?>