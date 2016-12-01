<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Indexhome extends CI_Controller {
      public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->load->helper(array('form', 'url'));
        $this->load->model('index_model');
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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{ 
        
        $data = array('bigimg' =>$this->index_model->load_index_img(), 'minimg' => $this->index_model->load_index_minimg());
        // print_r($data);
		$this->load->view('index/index',$data);
	}
		public function uploadcenter()
	{
        if(isset($_SESSION['logged_in'])){
        if($_SESSION['logged_in']==true){
        $this->load->view('adminup');
		$this->load->view('manage/uploadcenter', array('error' => ' ' ));
        $this->load->view('admindown');
        }
        }
        else{
           
            redirect('login', 'refresh');
        }

	}
	    public function upload_index_bigimg()
    {   
        // create the data object
		

        $targetDir =  $_POST['imgtype'];
        if (!file_exists('./uploads/'.$targetDir)) {
        @mkdir('./uploads/'.$targetDir);
    }

        $config['upload_path']      = './uploads/'.$targetDir;
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']         = 5000;
        $config['max_width']        = 2560;
        $config['max_height']       = 1600;
        $config['file_name']        = time();
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('manage/uploadcenter', $error);
        }
        else
        {   
            
            $imgtype = $targetDir;
			$filename    =$this->upload->data('file_name'); 
			$imgtitle =$_POST['imgtitle'];
			$imgintro= $_POST['imgintro'];
            $imgtypemark = $_POST['imgtypemark'];
            // 如果上传成功
            if ($this->index_model->upload_index_img($imgtype, $filename,$imgtitle,$imgintro,$imgtypemark)) {
				
			$data = array('upload_data' => $this->upload->data());

            $this->load->view('manage/upload_success', $data);
				
			} else{
               $data->error = '读写数据时发生错误';
               $this->load->view('manage/uploadcenter', $data);
            }
        
        }


    }
}
