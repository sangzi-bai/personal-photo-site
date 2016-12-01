<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Upload_model class.
 * 
 * @extends CI_Model
 */
class Upload_model extends CI_Model {

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
	public function upload_img($imgtype, $filename) {
		
		$data = array(
			'imgtype'   => $imgtype,
			'filename'      => $filename,
			'created_at' => date('Y-m-j H:i:s'),
		);
		
		return $this->db->insert('images', $data);
		
	}
	
	/**
	 * load_img function.
	 * 
	 * @access public
	 * @param mixed $imgtype
	 * @param mixed $filename
	 * @return bool true on success, false on failure
	 */
	public function resolve_user_login($imgtype, $filename) {
		
		$this->db->select('imgtype');
		$this->db->from('users');
		$this->db->where('filename', $filename);
		$hash = $this->db->get()->row('password');
		
		return $this->verify_password_hash($password, $hash);
		
	}
	
	/**
	 * get_user_id_from_username function.
	 * 
	 * @access public
	 * @param mixed $username
	 * @return int the user id
	 */
	public function get_user_id_from_username($username) {
		
		$this->db->select('id');
		$this->db->from('users');
		$this->db->where('username', $username);

		return $this->db->get()->row('id');
		
	}
	
	/**
	 * get_user function.
	 * 
	 * @access public
	 * @param mixed $user_id
	 * @return object the user object
	 */
	public function get_user($user_id) {
		
		$this->db->from('users');
		$this->db->where('id', $user_id);
		return $this->db->get()->row();
		
	}
	
	/**
	 * hash_password function.
	 * 
	 * @access private
	 * @param mixed $password
	 * @return string|bool could be a string on success, or bool false on failure
	 */
	private function hash_password($password) {
		
		return password_hash($password, PASSWORD_BCRYPT);
		
	}
	
	/**
	 * verify_password_hash function.
	 * 
	 * @access private
	 * @param mixed $password
	 * @param mixed $hash
	 * @return bool
	 */
	private function verify_password_hash($password, $hash) {
		
		return password_verify($password, $hash);
		
	}
	
}
