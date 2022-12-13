<?php

 /**
 * Author: Amirul Momenin
 * Desc:Account_emailaddress Controller
 *
 */
class Account_emailaddress extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('url'); 
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->library('pagination');
		$this->load->library('Customlib');
		$this->load->helper(array('cookie', 'url')); 
		$this->load->database();  
		$this->load->model('Account_emailaddress_model');
		if(! $this->session->userdata('validated')){
				redirect('admin/login/index');
		}  
    } 
	
    /**
	 * Index Page for this controller.
	 *@param $start - Starting of account_emailaddress table's index to get query
	 *
	 */
    function index($start=0){
		$limit = 10;
        $data['account_emailaddress'] = $this->Account_emailaddress_model->get_limit_account_emailaddress($limit,$start);
		//pagination
		$config['base_url'] = site_url('admin/account_emailaddress/index');
		$config['total_rows'] = $this->Account_emailaddress_model->get_count_account_emailaddress();
		$config['per_page'] = 10;
		//Bootstrap 4 Pagination fix
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close']   = '<span aria-hidden="true"></span></span></li>';
		$config['next_tag_close']   = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close']   = '</span></li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tag_close']  = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close']   = '</span></li>';		
		$this->pagination->initialize($config);
        $data['link'] =$this->pagination->create_links();
		
        $data['_view'] = 'admin/account_emailaddress/index';
        $this->load->view('layouts/admin/body',$data);
    }
	
	 /**
     * Save account_emailaddress
	 *@param $id - primary key to update
	 *
     */
    function save($id=-1){   
		 
		
		
		$params = array(
					 'email' => html_escape($this->input->post('email')),
'verified' => html_escape($this->input->post('verified')),
'primary' => html_escape($this->input->post('primary')),
'users_id' => html_escape($this->input->post('users_id')),

				);
		 
		 
		$data['id'] = $id;
		//update		
        if(isset($id) && $id>0){
			$data['account_emailaddress'] = $this->Account_emailaddress_model->get_account_emailaddress($id);
            if(isset($_POST) && count($_POST) > 0){   
                $this->Account_emailaddress_model->update_account_emailaddress($id,$params);
				$this->session->set_flashdata('msg','Account_emailaddress has been updated successfully');
                redirect('admin/account_emailaddress/index');
            }else{
                $data['_view'] = 'admin/account_emailaddress/form';
                $this->load->view('layouts/admin/body',$data);
            }
        } //save
		else{
			if(isset($_POST) && count($_POST) > 0){   
                $account_emailaddress_id = $this->Account_emailaddress_model->add_account_emailaddress($params);
				$this->session->set_flashdata('msg','Account_emailaddress has been saved successfully');
                redirect('admin/account_emailaddress/index');
            }else{  
			    $data['account_emailaddress'] = $this->Account_emailaddress_model->get_account_emailaddress(0);
                $data['_view'] = 'admin/account_emailaddress/form';
                $this->load->view('layouts/admin/body',$data);
            }
		}
        
    } 
	
	/**
     * Details account_emailaddress
	 * @param $id - primary key to get record
	 *
     */
	function details($id){
        $data['account_emailaddress'] = $this->Account_emailaddress_model->get_account_emailaddress($id);
		$data['id'] = $id;
        $data['_view'] = 'admin/account_emailaddress/details';
        $this->load->view('layouts/admin/body',$data);
	}
	
    /**
     * Deleting account_emailaddress
	 * @param $id - primary key to delete record
	 *
     */
    function remove($id){
        $account_emailaddress = $this->Account_emailaddress_model->get_account_emailaddress($id);

        // check if the account_emailaddress exists before trying to delete it
        if(isset($account_emailaddress['id'])){
            $this->Account_emailaddress_model->delete_account_emailaddress($id);
			$this->session->set_flashdata('msg','Account_emailaddress has been deleted successfully');
            redirect('admin/account_emailaddress/index');
        }
        else
            show_error('The account_emailaddress you are trying to delete does not exist.');
    }
	
	/**
     * Search account_emailaddress
	 * @param $start - Starting of account_emailaddress table's index to get query
     */
	function search($start=0){
		if(!empty($this->input->post('key'))){
			$key =$this->input->post('key');
			$_SESSION['key'] = $key;
		}else{
			$key = $_SESSION['key'];
		}
		
		$limit = 10;		
		$this->db->like('id', $key, 'both');
$this->db->or_like('email', $key, 'both');
$this->db->or_like('verified', $key, 'both');
$this->db->or_like('primary', $key, 'both');
$this->db->or_like('users_id', $key, 'both');


		$this->db->order_by('id', 'desc');
		
        $this->db->limit($limit,$start);
        $data['account_emailaddress'] = $this->db->get('account_emailaddress')->result_array();
		$db_error = $this->db->error();
		if (!empty($db_error['code'])){
			echo 'Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
			exit;
		}
		
		//pagination
		$config['base_url'] = site_url('admin/account_emailaddress/search');
		$this->db->reset_query();		
		$this->db->like('id', $key, 'both');
$this->db->or_like('email', $key, 'both');
$this->db->or_like('verified', $key, 'both');
$this->db->or_like('primary', $key, 'both');
$this->db->or_like('users_id', $key, 'both');

		$config['total_rows'] = $this->db->from("account_emailaddress")->count_all_results();
		$db_error = $this->db->error();
		if (!empty($db_error['code'])){
			echo 'Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message'];
			exit;
		}
		$config['per_page'] = 10;
		// Bootstrap 4 Pagination fix
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close']   = '<span aria-hidden="true"></span></span></li>';
		$config['next_tag_close']   = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close']   = '</span></li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tag_close']  = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close']   = '</span></li>';
		$this->pagination->initialize($config);
        $data['link'] =$this->pagination->create_links();
		
		$data['key'] = $key;
		$data['_view'] = 'admin/account_emailaddress/index';
        $this->load->view('layouts/admin/body',$data);
	}
	
    /**
     * Export account_emailaddress
	 * @param $export_type - CSV or PDF type 
     */
	function export($export_type='CSV'){
	  if($export_type=='CSV'){	
		   // file name 
		   $filename = 'account_emailaddress_'.date('Ymd').'.csv'; 
		   header("Content-Description: File Transfer"); 
		   header("Content-Disposition: attachment; filename=$filename"); 
		   header("Content-Type: application/csv; ");
		   // get data 
		   $this->db->order_by('id', 'desc');
		   $account_emailaddressData = $this->Account_emailaddress_model->get_all_account_emailaddress();
		   // file creation 
		   $file = fopen('php://output', 'w');
		   $header = array("Id","Email","Verified","Primary","Users Id"); 
		   fputcsv($file, $header);
		   foreach ($account_emailaddressData as $key=>$line){ 
			 fputcsv($file,$line); 
		   }
		   fclose($file); 
		   exit; 
	  }else if($export_type=='Pdf'){
		    $this->db->order_by('id', 'desc');
		    $account_emailaddress = $this->db->get('account_emailaddress')->result_array();
		   // get the HTML
			ob_start();
			include(APPPATH.'views/admin/account_emailaddress/print_template.php');
			$html = ob_get_clean();
			require_once FCPATH.'vendor/autoload.php';			
			$mpdf = new \Mpdf\Mpdf();
			$mpdf->WriteHTML($html);
			$mpdf->Output();
			exit;
	  }
	   
	}
}
//End of Account_emailaddress controller