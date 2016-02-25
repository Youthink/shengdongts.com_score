<?php
/**
 * Created by PhpStorm.
 * User: vic
 * Blog: hufangyun.com
 * Date: 8/24/15
 * Time: 6:27 PM
 */
defined('BASEPATH') OR exit ('No direct script access allowed');
/*防止直接访问页面，安全防护*/
class Home extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url','form');
    }


    public function admin($page = 'index')
    {

        $this->load->view($page);
    }

      public function addScore()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('sdutnum', 'sdutnum', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('addscore');

        }else{

            $this->users_model->adduser();
            $this->admin('index');

        }


    }

}
