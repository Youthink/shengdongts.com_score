<?php  
class Score_model extends CI_Model
{
    public function __construct()
    {
        $this ->load->database();
        $this->load->helper('url');
    }

    public function M_addscore()
    {


        $data = array(

            'username' => $this->input->post('username'),
            'remark' => $this->input->post('remark'),
            'score' => $this->input->post('score')


        );

        return $this->db->insert('user_score', $data);

    }


     public function get_score($username)
    {
        if($username=='')
        {
              $this->db->order_by('score', 'DESC');
              $query = $this->db->get('user_score');

              return $query->result_array();

        }else{
        
              $query = $this->db->get_where('user_score', array('$username' => $username));

              return $query->row_array();
        }
    }

    public function M_deletescore($id)
    {

        $query = $this->db->delete('user_score', array('id' => $id));
        return  $query;  

    }


    /* 客户信息部分*/

      public function M_addinfo()
    {


        $data = array(

            'username' => $this->input->post('username'),
            'link' => $this->input->post('link'),
            'phone' => $this->input->post('phone'),
            'addtime' => $this->input->post('addtime'),
            'rank' => $this->input->post('rank')


        );

        return $this->db->insert('user_info', $data);

    }


     public function get_info($username)
    {
        if($username=='')
        {
              $query = $this->db->get('user_info');

              return $query->result_array();

        }else{
        
              $query = $this->db->get_where('user_info', array('$username' => $username));

              return $query->row_array();
        }
    }


        public function search_info($username,$phone)
    {
        
          $this->db->where('username', $username);
          $this->db->where('phone', $phone);
          $query = $this->db->get('user_info');

          return $query->row_array();
    }

      public function M_deleteinfo($infoid)
    {

        $query = $this->db->delete('user_info', array('infoid' => $infoid));
        return  $query;  

    }



}
