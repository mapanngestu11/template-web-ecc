<?php
class M_siswa extends CI_Model
{

    private $_table = "tbl_siswa";

    function tampil_data()
    {
        return $this->db->get('tbl_siswa');
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function get_siswa_by_no_pendaftar($no_pendaftar)
    {
        $this->db->select('*');
        $this->db->where('no_pendaftar',$no_pendaftar);
        $hsl = $this->db->get('tbl_siswa')->result();
        return $hsl;

    }


    function delete_data($id)
    {
        $hsl = $this->db->query("DELETE FROM tbl_siswa WHERE id='$id'");
        return $hsl;
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
