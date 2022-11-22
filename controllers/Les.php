<?php

class Les extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => 'Data Les',
            'isi'   => 'v_datales' 
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function input()
    {
        $data = array(
            'title' => 'Input Data Les',
            'isi'   => 'v_input_datales' 
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

}

/* End of file Controllername.php */
