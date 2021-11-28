<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultdatabase {

    private $ci;

    function __construct() {

        // Assign CodeIgniter object to $this->ci
        $this->ci = & get_instance();

    }

    public function select_all_registers($table) {
        $query = $this->ci->db->get($table);

        return $query->result_array();
    }


    public function select_all_by_attr($table, $attr, $value) {
        $this->ci->db->where($attr, $value);
        $query = $this->ci->db->get($table);

        return $query->result_array();
    }

    public function select_attr_register($table, $attr, $value) {
        $this->ci->db->where($attr, $value);
        $query = $this->ci->db->get($table);

        return $query->row_array();
    }

    public function verify_register($table, $array) {
        $this->ci->db->where($array);
        $query = $this->ci->db->get($table);
        return $query->row_array();
    }

    public function insert_register($table, $data) {
        return $this->ci->db->insert($table, $data);
    }

    public function update_attr_register($table, $attr, $value, $data) {
        $this->ci->db->where($attr, $value);
        $this->ci->db->set($data);
        return $this->ci->db->update($table);
    }

    public function delete_attr_register($table, $attr, $value) {
        $this->ci->db->where($attr, $value);
        return $this->ci->db->delete($table);
    }


    public function select_count_registers($table, $attr, $value) {
        $this->ci->db->where($attr, $value);
        $query = $this->ci->db->get($table);

        return $query->num_rows();
    }

}
