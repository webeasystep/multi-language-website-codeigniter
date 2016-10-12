<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * @property CI_Config $config
 * @property CI_Session $session
 */

class Front_end extends CI_Controller {

    /***
     * pages of site in menu
     */

    function __construct() {
        parent::__construct();
        $this->load_lang();
    }

    /**
     * return module language file
     */
    protected function load_lang() {

        if ($this->uri->segment(1) == 'en' ||
            $this->uri->segment(1) == 'fr'||
            $this->uri->segment(1) == 'es'
        ) {
            $this->session->set_userdata("lang", $this->uri->segment(1));
            redirect($this->session->flashdata('redirectToCurrent'));
        }

        if ($this->session->userdata('lang') == "es") {
            $lang = "spanish";
            $this->config->set_item('language',$lang);
            $this->session->set_userdata("lang",'es');
        } elseif ($this->session->userdata('lang') == "fr") {
            $lang = "french";
            $this->config->set_item('language',$lang);
            $this->session->set_userdata("lang",'fr');
        }else {
            $lang = "english";
            $this->config->set_item('language',$lang);
            $this->session->set_userdata("lang",'en');
        }

        //  $this->lang->load($moduleName, $lang);
    }



    /**
     * present master page includes header and footer
     * @param string $main_containt
     * @param array $data 
     */
     function view($main_containt, $data = null) {
        $this->load->view('theme/header');
        $this->load->view($main_containt, $data);
        $this->load->view('theme/footer');
    }



}