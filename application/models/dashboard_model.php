<?php

/**
 * Dashboard model
 * 
 * PHP version 5
 * 
 * @category   AMS
 * @package    CI
 * @subpackage Model
 * @author     Nouman Tayyab <nouman@geekschicago.com>
 * @license    AMS http://ams.avpreserve.com
 * @version    GIT: <$Id>
 * @link       http://ams.avpreserve.com
 */

/**
 * Dashboard Model Class
 *
 * @category   Class
 * @package    CI
 * @subpackage Model
 * @author     Nouman Tayyab <nouman@geekschicago.com>
 * @license    AMS http://ams.avpreserve.com
 * @link       http://ams.avpreserve.com
 */
class Dashboard_Model extends CI_Model
{

	/**
	 * constructor. set table name amd prefix
	 * 
	 */
	function __construct()
	{
		parent::__construct();
		$this->_prefix = '';
		$this->_table = 'stations';
		$this->table_instantiation_formats = 'instantiation_formats';
		$this->table_instantiations = 'instantiations';
		$this->table_nominations = 'nominations';
		$this->table_nomination_status = 'nomination_status';
		$this->_table_messages = 'messages';
	}

	function get_digitized_formats()
	{
		$this->db->select("$this->table_instantiation_formats.format_name", FALSE);

		$this->db->join($this->table_instantiation_formats, "$this->table_instantiation_formats.instantiations_id = $this->table_instantiations.id");
		$this->db->where("$this->table_instantiations.digitized", '1');
		$this->db->group_by("$this->table_instantiation_formats.instantiations_id");
		$result = $this->db->get($this->table_instantiations);

		return $result->result();
	}

	function get_scheduled_formats()
	{
		$this->db->select("$this->table_instantiation_formats.format_name", FALSE);

		$this->db->join($this->table_instantiations, "$this->table_instantiations.id = $this->table_instantiation_formats.instantiations_id");
		$this->db->join($this->table_nominations, "$this->table_nominations.instantiations_id = $this->table_instantiation_formats.instantiations_id");
		$this->db->where("$this->table_instantiations.digitized", '0');
		$this->db->or_where("$this->table_instantiations.digitized IS NULL");
		$this->db->group_by("$this->table_instantiation_formats.instantiations_id");
		$result = $this->db->get($this->table_instantiation_formats);

		return $result->result();
	}

	function get_material_goal()
	{
		$this->db->select("count(DISTINCT $this->table_instantiations.id) AS total", FALSE);
		$this->db->join($this->table_nominations, "$this->table_nominations.instantiations_id = $this->table_instantiations.id");
		$this->db->join($this->table_nomination_status, "$this->table_nomination_status.id = $this->table_nominations.nomination_status_id");
		$this->db->where("$this->table_nomination_status.status", 'Nominated/1st Priority');
		$result = $this->db->get($this->table_instantiations);

		return $result->row();
	}

	function get_digitized_hours()
	{
		$this->db->select("count(DISTINCT $this->table_instantiations.id) AS total", FALSE);
		$this->db->where("$this->table_instantiations.digitized", '1');
		$result = $this->db->get($this->table_instantiations);

		return $result->row();
	}

	/**
	 * Get the hours of Crawford
	 * 
	 * @param string $msg_type
	 * @return type 
	 */
	function get_hours_at_crawford($msg_type)
	{
		$this->db->select("($this->_table.nominated_hours_final+$this->_table.nominated_buffer_final) AS total", FALSE);
		$this->db->join($this->_table_messages, "$this->_table_messages.receiver_id = $this->_table.id");
		$this->db->where("$this->_table_messages.msg_type", $msg_type);
		$result = $this->db->get($this->_table);

		return $result->result();
	}

}