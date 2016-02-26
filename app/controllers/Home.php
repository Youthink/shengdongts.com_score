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
        $this->load->library('form_validation');
        $this->load->model('score_model');
    }


    public function admin($page = 'index')
    {

        $data['score'] = $this->score_model->get_score($key=NULL);
        $data['score_items'] = $this->score_model->get_score($key);

        if (!file_exists(APPPATH.'/views/index.php'))
        {
            show_404();
        }
            
        $this->load->view($page,$data); 
    }

    public function show($page = 'comeinfo')
    {
        $info['info'] = $this->score_model->get_info($key=NULL);
        $info['info_items'] = $this->score_model->get_info($key);

        if (!file_exists(APPPATH.'/views/comeinfo.php'))
        {
            show_404();
        }
            
        $this->load->view($page,$info); 
    }

      public function addScore()
    {
        
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('score', 'score', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('addscore');

        }else{

            $this->score_model->M_addscore();
            redirect(site_url());

        }


    }


     public function addInfo()
    {
        
        $this->form_validation->set_rules('username', 'username', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('addinfo');

        }else{

            $this->score_model->M_addinfo();
            redirect(site_url().'/home/show/comeinfo');

        }


    }

}
