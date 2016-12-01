<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Picshow extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // $this->load->helper('url');
        $this->load->helper(array('form', 'url'));
        $this->load->model('picshow_model');
    }

    public function index(){
        $this->load->view('index/picshow.html');
    }

    // public function uploadpicshowpage()
    // {
    //     $this->load->view('manage/uploadpicshow',array('error' => ' ' ));
    // }


    //上传展示页图片
    public function uploadpicshow()
    {
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
            if ($this->picshow_model->upload_picshow($imgtype, $filename,$imgtitle,$imgintro,$imgtypemark)) {
				
			$data = array('upload_data' => $this->upload->data());

            $this->load->view('manage/upload_success', $data);
				
			} else{
               $data->error = '读写数据时发生错误';
               $this->load->view('manage/uploadcenter', $data);
            }
        
        }
    }

    // 读取默认展示页图片
    public function loadpicshow()
    {
       $data = $this->picshow_model->load_picshow();
     $this->output->set_output(json_encode($data));
    }

        // 读取滚动展示页图片
    public function scroll_load()
    {
     $skip =$this->input->post('skip');
     $data = $this->picshow_model->load_picshow_scroll($skip);
     $this->output->set_output(json_encode($data));
    }

    //具体类型图片展示
    public function images($slug)
    {
        if($slug){
            $data = array('picgroup'=>$this->picshow_model->load_picgroup($slug));
           $this->load->view('index/images', $data);
        }else {
            redirect('base_url()', 'refresh');
        }
        
    }

    //图组上传页
    //     public function picgroup()
    // {
    //     $this->load->view('adminup');
    //     $this->load->view('manage/upload_picgroup',array('error' => ' ' ));
    //     $this->load->view('admindown');
    // }

   //图组上传页方法
        public function uploadpicgroup()
    {
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
			$filename =$this->upload->data('file_name'); 
            $imgtitle =$_POST['imgtitle'];
            $imgtypemark = $_POST['imgtypemark'];
            // 如果上传成功
            if ($this->picshow_model->insert_picgroup($imgtitle,$filename,$imgtype,$imgtypemark)) {
				
			$data = array('upload_data' => $this->upload->data());

            $this->load->view('manage/upload_success', $data);
				
			} else{
               $data->error = '读写数据时发生错误';
               $this->load->view('manage/uploadcenter', $data);
            }
        
        }
    }
}