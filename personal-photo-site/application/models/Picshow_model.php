<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Picshow_model class.
 * 
 * @extends CI_Model
 */
class Picshow_model extends CI_Model {

	/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct() {
		
		parent::__construct();
		$this->load->database();
		
	}
	
	/**
	 * upload_img function.
	 * 
	 * @access public
	 * @param mixed $imgtype
	 * @param mixed $filename
	 * @return bool true on success, false on failure
	 */
	public function upload_picshow($imgtype, $filename,$imgtitle,$imgintro,$imgtypemark) {
		
		$data = array(
			'imgtype'   => $imgtype,
			'filename'      => $filename,
			'imgtitle'      => $imgtitle,
			'imgintro'      => $imgintro,
			'imgtypemark'   => $imgtypemark,
			'created_at' => date('Y-m-j H:i:s'),
		);
		
		return $this->db->insert('picshowindex', $data);
		
	}

    //默认展示页图片
		public function load_picshow() {
		
       		$query = $this->db->query("
		SELECT * from picshowindex 
        WHERE imgtype = 'picshowindex'
        ORDER BY created_at DESC
        LIMIT 16");
        return $query->result();
		
	}

	    //滚动加载展示页图片
		public function load_picshow_scroll($skip) {
       		$query = $this->db->query("
		SELECT * from picshowindex 
        WHERE imgtype = 'picshowindex'
        ORDER BY created_at DESC
        LIMIT 16
		OFFSET $skip ");
        return $query->result();
		}

        //插入图片组
		public function insert_picgroup($imgtitle,$filename, $imgtype, $imgtypemark){
			$data = array(
				'imgtitle'=>$imgtitle,
				'filename'=>$filename,
				'imgtype'=>$imgtype,
				'imgtypemark'=>$imgtypemark,
				'created_at' => date('Y-m-j H:i:s'),
			);
			return $this->db->insert('picgroup', $data);
		}

		//读取一组图片
		public function load_picgroup($slug){
			$query = $this->db->query("SELECT * from picgroup WHERE imgtypemark = '$slug' ORDER BY created_at DESC ");
			return $query->result_array();
		}
	}

	

