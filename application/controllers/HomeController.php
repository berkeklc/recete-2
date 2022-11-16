<?php


class HomeController  extends CI_Controller
{

    public $module = 'home';



    public function index()
    {
        // Load Library

        $this->load->library('pusher');

        $this->load->model('product');
        $this->load->model('productcategory');

        $this->load->view('master', array(
            'view' => 'home',
           
            'products' => $this->product->all(4),
           
        ));


    }



}
