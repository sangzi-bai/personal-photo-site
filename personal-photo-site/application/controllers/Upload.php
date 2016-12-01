<?php

class Upload extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('upload_model');
    }

    // public function index()
    // {
    //     $this->load->view('manage/upload_form', array('error' => ' ' ));
    // }

    public function do_upload()
    {   
    
		
       //获取上传图片输入的类型
        $targetDir =  $_POST['imgtype'];
        if (!file_exists('./uploads/'.$targetDir)) {
            //不存在就创建路径
        @mkdir('./uploads/'.$targetDir);
    }

        $config['upload_path']      = './uploads/'.$targetDir;
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']         = 200;
        $config['max_width']        = 1280;
        $config['max_height']       = 1000;
        $config['file_name']        = time();
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('manage/upload_form', $error);
        }
        else
        {   
            
            $imgtype = $targetDir;
			$filename    =$this->upload->data('file_name'); 
            $imgtitle =$_POST['imgtitle'];
            $imgintro =$_POST['imgintro'];
            // 如果上传成功
            if ($this->upload_model->upload_img($imgtype, $filename,$imgtitle,$imgintro)) {
				
			$data = array('upload_data' => $this->upload->data());
            // print_r($data);
            $this->load->view('manage/upload_success', $data);
				
			} else{
               $data->error = '读写数据时发生错误';
               $this->load->view('manage/upload_form', $data);
            }
        
        }


    }
}
?>