<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class Main extends CI_Controller
	{
        public function __construct()
	    {
	        parent::__construct();
	        $this->load->model("akun_model");
	    }

        public function index()
	    {
	    	$this->load->view("output");
	    }

        function simpan()
        {
            $data = array(
                'id' => '',
                'nama' => $this->input->post('txtnama'),
                'email' => $this->input->post('txtemail')
            );
            $this->akun_model->save('akun', $data);
            redirect('main/index', 'refresh');
        }

        function tabel()
        {
            $data = array(
                'output' => $this->akun_model->tampil('akun')->result()
            );
            $this->load->view('output', $data);
        }

        function tes()
        {
            bla bla bla
        }
	}
 ?>