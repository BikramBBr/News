<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
public function __construct()
    {
        parent::__construct();
  
        $this->load->library('session');
      	$this->load->database(); 
        $this->load->helper('url');
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url');
	    if($this->input->post('email'))
		{
		    
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			
		$login_query = $this->db->query("select * from tbl_adminlogin where email = '".$email."' and password = '".$password."'");
			
			if($login_query->num_rows() > 0)
			{
				$user_row = $login_query->row();
				
		 		$this->session->set_userdata('admin_id', $user_row->id);
				$this->session->set_userdata('admin_email', $user_row->email);
		 		redirect('admin/dashboard');
			}
			else
			{
				// unsuccessfull login
				$data['error_message'] = 'Email Or Password was wrong';
			}
		}
		$this->load->view('admin/login');
	}

	public function dashboard()
	{
		if($this->input->post())
		{
			

			if(is_uploaded_file($_FILES['filepdf']['tmp_name']))
			{
  				$filepdf=rand(0,9999).$_FILES['filepdf']['name'];
				move_uploaded_file($_FILES['filepdf']['tmp_name'],'uploads/pdf/'.$filepdf);
				}else{
				$filepdf="";
		    }
			$headline = $this->input->post('headline');
			$details = $this->input->post('details');
	
			$data = array(
					'filepdf'=>$filepdf,
			        'headline'=>$headline,
			        'details'=>$details
			        
			        
					);
			$this->db->insert('tbl_artical',$data);
			}



		$this->load->view('admin/dashboard');
	}
}