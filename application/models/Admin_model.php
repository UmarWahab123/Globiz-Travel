<?php 

class Admin_model extends CI_Model
{
	public function login($email, $password)
	{
		return $this->db->get_where('user',  array('email' => $email , 'password' => $password ))->row('id');
	}


	public function get_posts()
	{
		$this->db->select('posts.id, posts.thumbnail, posts.title, posts.slug, posts.featured, posts.status, posts.created_on, categories.name AS category', FALSE);
		$this->db->join('categories', 'posts.category_id = categories.id', 'left');
		return $this->db->order_by('posts.id','DESC')->get('posts')->result();
	}

	public function get_post($id='')
	{
		return $this->db->get_where('posts', array('id' => $id))->row();
	}

	public function delete_record($table='', $id='')
	{
		return $this->db->delete($table, array('id' => $id));
	}

}
