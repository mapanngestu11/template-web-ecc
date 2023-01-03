<?php
class M_jadwal extends CI_Model
{

    private $_table = "tbl_jadwal_kursus";

    function tampil_data()
    {
        return $this->db->get('tbl_user');
    }

    function get_hari()
    {
        $this->db->select('id,hari');
        $this->db->group_by('hari');
        $this->db->order_by('id ASC');
        $result = $this->db->get('tbl_jadwal_kursus')->result(); 
        return $result;
    }
    function get_jam($hari)
    {
       $this->db->select('id,hari,jam');
       $this->db->where('hari',$hari);
       $this->db->order_by('id ASC');
       $result = $this->db->get('tbl_jadwal_kursus')->result(); 
       return $result;
   }

   function delete_data($id)
   {
    $hsl = $this->db->query("DELETE FROM tbl_user WHERE id='$id'");
    return $hsl;
}

function update_data($where, $data, $table)
{
    $this->db->where($where);
    $this->db->update($table, $data);
}
}
