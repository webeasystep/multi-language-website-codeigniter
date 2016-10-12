<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');


class Back_end extends MX_Controller {

     /**
     * count num of unreaded messages
     *
     * @var integer
     * 
     */
    function __construct() {
        parent::__construct();        

    }

    /**
     *
     * @param string $main_containt
     * @param array $data 
     */
    protected function view($main_containt, $data = null) {
        $this->load->view('admin/header');
        $this->load->view($main_containt, $data);
        $this->load->view('admin/footer');
    }

    /**
     * give it the right string and it will 
     *
     * @param string $right
     * @return void
     */
    protected function check_right($right, $path = '') {
        if ($path) {
            $this->auth->check($right, $path);
        } else {
            $this->auth->check($right, 'admin/dashboard');
        }
    }

}