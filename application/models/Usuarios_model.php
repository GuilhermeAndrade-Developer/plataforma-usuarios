<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Usuarios_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 *
 */

class Usuarios_model extends CI_Model
{

	// ------------------------------------------------------------------------

	public function __construct()
	{
		parent::__construct();
	}

	// ------------------------------------------------------------------------


	// ------------------------------------------------------------------------
	public function getRecords()
	{
		$query = $this->db->get('usuarios');
		return $query->result();
	}

	public function saveRecord($data)
	{
		return $this->db->insert('usuarios', $data);
	}

	public function getRecordById($record_id)
	{
		$query = $this->db->get_where('usuarios', array('id' => $record_id));
		if ($query->num_rows() > 0) {
			return $query->row();
		}
	}

	public function updateRecord($record_id, $data)
	{
		return $this->db->where('id', $record_id)->update('usuarios', $data);
	}

	public function deleteRecord($record_id)
	{
		return $this->db->delete('usuarios', array('id' => $record_id));
	}

	// ------------------------------------------------------------------------

}

/* End of file Usuarios_model.php */
/* Location: ./application/models/Usuarios_model.php */
