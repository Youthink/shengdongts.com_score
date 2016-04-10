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
            'score' => $this->input->post('score'),
            'facelink' => $this->input->post('facelink')


        );

        return $this->db->insert('user_score', $data);

    }


     public function get_score($id)
    {
        if($id=='')
        {
              $this->db->order_by('score', 'DESC');
              $query = $this->db->get('user_score');

              return $query->result_array();

        }else{
        
              $query = $this->db->get_where('user_score', array('id' => $id));

              return $query->row_array();
        }
    }

    public function M_deletescore($id)
    {

        $query = $this->db->delete('user_score', array('id' => $id));
        return  $query;  

    }

    public function M_updatescore()
    {


        $data = array(

             'username' => $this->input->post('username'),
             'remark' => $this->input->post('remark'),
             'score' => $this->input->post('score'),
             'id' => $this->input->post('id'),
             'facelink' => $this->input->post('facelink')
        );

        $this->db->where('id', $data['id']);

        return $this->db->update('user_score', $data);

    }


    /* 会员信息部分*/

      public function M_addinfo()
    {


        $data = array(

            'username' => $this->input->post('username'),
            'phone' => $this->input->post('phone'),
            'school' => $this->input->post('school'),
            'studyplace' => $this->input->post('studyplace'),
            'grade' => $this->input->post('grade'),
            'addtime' => $this->input->post('addtime'),
            'moneytime' => $this->input->post('moneytime'),
            'remark' => $this->input->post('remark')
        );

        return $this->db->insert('user_info', $data);

    }


     public function get_info($infoid)
    {
        if($infoid=='')
        {
              $this->db->order_by('moneytime', 'DESC');
              $query = $this->db->get('user_info');

              return $query->result_array();

        }else{
        
              $query = $this->db->get_where('user_info', array('infoid' => $infoid));

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


      public function M_updateinfo()
    {


        $data = array(

            'username' => $this->input->post('username'),
            'phone' => $this->input->post('phone'),
            'school' => $this->input->post('school'),
            'studyplace' => $this->input->post('studyplace'),
            'grade' => $this->input->post('grade'),
            'addtime' => $this->input->post('addtime'),
            'moneytime' => $this->input->post('moneytime'),
            'remark' => $this->input->post('remark'),
            'infoid' => $this->input->post('infoid')
        );

        $this->db->where('infoid', $data['infoid']);

        return $this->db->update('user_info', $data);

    }


    

/*等级信息*/

 public function M_addrank()
    {


        $data = array(

            'username' => $this->input->post('username'),
            'rank' => $this->input->post('rank'),
            'testtime' => $this->input->post('testtime'),
            'onejump' => $this->input->post('onejump'),
            'twojump' => $this->input->post('twojump'),
            'threejump' => $this->input->post('threejump'),
            'link' => $this->input->post('link'),
            'facelink' => $this->input->post('facelink')


        );

        return $this->db->insert('user_rank', $data);

    }


     public function get_rank($rankid)
    {
        if($rankid=='')
        {
              $this->db->order_by('rank', 'DESC');
              $query = $this->db->get('user_rank');

              return $query->result_array();

        }else{
        
              $query = $this->db->get_where('user_rank', array('rankid' => $rankid));

              return $query->row_array();
        }
    }

    public function M_deleterank($rankid)
    {

        $query = $this->db->delete('user_rank', array('rankid' => $rankid));
        return  $query;  

    }

    public function M_updaterank()
    {


        $data = array(

            'username' => $this->input->post('username'),
            'rank' => $this->input->post('rank'),
            'testtime' => $this->input->post('testtime'),
            'onejump' => $this->input->post('onejump'),
            'twojump' => $this->input->post('twojump'),
            'threejump' => $this->input->post('threejump'),
            'link' => $this->input->post('link'),
            'rankid' => $this->input->post('rankid'),
            'facelink' => $this->input->post('facelink')
        );

        $this->db->where('rankid', $data['rankid']);

        return $this->db->update('user_rank', $data);

    }
}