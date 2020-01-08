<?php
    Class App extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->helper("url");
            $this->load->model("model");
        }
        public function index(){
            $this->load->view("mahasiswa_v");
        }
        public function data_tampil(){
            $data["siswa"] = $this->model->ambilData();
            $this->load->view("data_v", $data);
        }
        public function ubah($id){
            $data["siswa"] = $this->model->ambildatabyid($id);
            $this->load->view("edit", $data);
        }
        public function ubah_data(){
            $data = [
                "id" => $this->input->post("id"),
                "nim" => $this->input->post("nim"),
                "nama" => $this->input->post("nama"),
                "alamat" => $this->input->post("alamat")
              ];
              $ubah_data = $this->model->ubah_data($data);
              redirect("app/data_tampil");
        }
        public function hapus($id){
            $data["siswa"] = $this->model->hapusdatabyid($id);
            $hapus = $this->model->hapusdatabyid($id);
            redirect("app/data_tampil");
        }
        public function tambah(){
            $this->load->view("tambah_data_v");
           
        }
        public function tambah_data(){
            $id = $this->input->post("id");
            $nim = $this->input->post("nim");
            $nama = $this->input->post("nama");
            $alamat = $this->input->post("alamat");
            $data = array(
                "id" => $id,
                "nim" => $nim,
                "nama" => $nama,
                "alamat" => $alamat
            );
            $tamabah_data = $this->model->tambah_data($data, "mahasiswa");
            redirect("app/data_tampil");
        }
    }