<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of perencanaan_anggaran_apbn_model
 *
 * @author BaseSystem Management http://bsmsite.com
 */
class How_order_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    function get_how_order() {
        $this->db->where('id', 1);
        return $this->db->get('tbhow_order');
    }
    function getApbdCari() {
        $tahun = $this->input->post('tahun');
        $this->db->where('year(date)', $tahun);
        $this->db->order_by('kode', 'asc');
        return $this->db->get('tbevaluasi_anggaran_apbd');
    }
    function save() {
        $data = array(
            'tbuser_id' => $this->session->userdata('userid'),
            'event_date' => $this->input->post('event_date'),
            'event_location' => $this->input->post('event_location'),
            'event_type' => $this->input->post('event_type'),
            'approximate_budget' => $this->input->post('approximate_budget'),
            'event_comments' => $this->input->post('event_comments')
        );
        $this->db->insert('tbbook', $data);
    }
    function getEditEvaluasiAnggaranApbd() {
        $this->db->where('id', $this->uri->segment(4));
        return $this->db->get('tbevaluasi_anggaran_apbd');
    }
    function update() {
        $id = $this->input->post('id');
        $data = array(
            
            'how_order' => $this->input->post('how_order'),
            
        );
        $this->db->where('id', $id);
        $this->db->update('tbhow_order', $data);
    }
    function delete() {
        $this->db->where('id', $this->uri->segment(4));
        $this->db->delete('tbevaluasi_anggaran_apbd');
    }
}

?>
