<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Index_model class.
 * 
 * @extends CI_Model
 */
class Index_model extends CI_Model {

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
	 * load_index_img function.
	 * 
	 * @access public
	 * @return array();
	 */
	public function load_index_img() {
		
		$query = $this->db->query("SELECT * from imagesindex WHERE imgtype = 'indeximg' ORDER BY created_at DESC LIMIT 12");
        return $query->result_array();
			}
				/**
	 * load_index_minimg function.
	 * 
	 * @access public
	 * @return array();
	 */
	 	public function load_index_minimg() {
		
		$query = $this->db->query("
		SELECT * from imagesindex 
        WHERE imgtype = 'indexminimg'
        ORDER BY created_at DESC
        LIMIT 12");
        return $query->result_array();
			}
	
	/**
	 * upload_index_img function.
	 * 
	 * @access public
	 * @param mixed $imgtype
	 * @param mixed $filename
	 * @return bool true on success, false on failure
	 */
	public function upload_index_img($imgtype, $filename,$imgtitle,$imgintro,$imgtypemark) {
		
		$data = array(
			'imgtype'   => $imgtype,
			'filename'      => $filename,
			'imgtitle'      => $imgtitle,
			'imgintro'      => $imgintro,
			'imgtypemark' => $imgtypemark,
			'created_at' => date('Y-m-j H:i:s'),
		);
		
		return $this->db->insert('imagesindex', $data);
		
	}
	
}
