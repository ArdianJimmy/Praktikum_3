<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class pages extends CI_Controller
{
    private $aData = array();
    function __construct()
    {
        # code...
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library('parser');
        $this->aData = array(
            'surl'=>site_url()
        );
    }

    function index(){
        $this->parser->parse('header',$this->aData);
        $this->parser->parse('home', $this->aData);
        $this->parser->parse('footer', $this->aData);
    }
}