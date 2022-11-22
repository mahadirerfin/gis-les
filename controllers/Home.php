<?php

class Home extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => 'Pemetaan',
            'isi'   => 'v_pemetaan' 
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
        
    }

}

/* End of file Controllername.php */
