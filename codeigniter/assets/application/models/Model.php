<?php
    Class Model extends CI_Model{
        public function ambilData(){
            return $this->db->get("mahasiswa")->result_array();
        }
        public function ambildatabyid($id){
            return $this->db->get_where("mahasiswa", array("id" => $id))->result_array();
        }
        public function ubah_data($data){
            $this->db->set("nim", $data["nim"]);
            $this->db->set("nama", $data["nama"]);
            $this->db->set("alamat", $data["alamat"]);
            $this->db->where("id", $data["id"]);
            return $this->db->update("mahasiswa");
        }
        public function hapusdatabyid($id){
            $this->db->get_where("mahasiswa", array("id" => $id))->result_array();
            return $this->db->delete("mahasiswa");
        }
        public function tambah_data($data){
            return $this->db->insert("maasiswa", $data);
        }
    }