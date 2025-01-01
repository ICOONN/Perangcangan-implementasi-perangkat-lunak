<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Product_model');
        $this->load->model('Order_model');
    }

    public function dashboard() {
        $data['users'] = $this->User_model->get_all_users();
        $data['orders'] = $this->Order_model->get_all_orders();
        $data['products'] = $this->Product_model->get_all_products();
        $this->load->view('admin/dashboard', $data);
    }
}
