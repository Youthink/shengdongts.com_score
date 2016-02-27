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
        
        $this->form_validation->set_rules('username', 'username', 'required',
            array('required' => '姓名不能为空'));
        $this->form_validation->set_rules('score', 'score', 'required',
            array('required' => '分数不能为空'));

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
        
        $this->form_validation->set_rules('username', 'username', 'required',
            array('required' => '姓名不能为空'));
        $this->form_validation->set_rules('rank', 'rank', 'required',
            array('required' => '等级不能为空'));
        $this->form_validation->set_rules('phone', 'phone', 'required',
            array('required' => '电话不能为空'));
        $this->form_validation->set_rules('addtime', 'addtime', 'required',
            array('required' => '报名时间不能为空'));

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('addinfo');

        }else{

            $this->score_model->M_addinfo();
            redirect(site_url().'/home/show/comeinfo');

        }


    }

     public function Search()
    {
        
        $this->form_validation->set_rules('username', 'username', 'required',
            array('required' => '姓名不能为空'));
        $this->form_validation->set_rules('phone', 'phone', 'required',
            array('required' => '电话不能为空'));

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('search');

        }else{

            $username = $this->input->post('username');
            $phone = $this->input->post('phone');
            $result['result'] = $this->score_model->search_info($username,$phone);

            $this->load->view('reasult',$result); 

        }


    }

    public function deleteScore($id){

        $this->score_model->M_deletescore($id);
        redirect(site_url());

    }

    public function deleteInfo($infoid){

        $this->score_model->M_deleteinfo($infoid);
        redirect(site_url().'/home/show/comeinfo');

    }

     public function updateInfo($infoid)
    {
        $info['info'] = $this->score_model->get_info($infoid);

        $this->load->view('updateinfo',$info); 

    }

    public function dealInfo()
    {
        $this->score_model->M_updateinfo();
        redirect(site_url().'/home/show/comeinfo');

    }

     public function updateScore($id)
    {
        $score['score'] = $this->score_model->get_score($id);

        $this->load->view('updatescore',$score); 

    }

    public function dealScore()
    {
        $this->score_model->M_updatescore();
        redirect(site_url());

    }

      public function viewInfo($infoid)
    {

        $result['result'] = $this->score_model->get_info($infoid);

        $this->load->view('reasult',$result); 



    }

}
