<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller
{
    
    var $CI;
    public function __construct($params = array())
    {
        $this->CI =& get_instance();
        $this->CI->load->helper('url');
        $this->CI->config->item('base_url');
        $this->CI->load->library('session', 'form_validation');
        $this->CI->load->database();   

    }
    
    public function verifylogin($data)
    {
        if ($data) 
        {
            $this->CI->form_validation->set_rules('username', 'username', 'trim|required');
            $this->CI->form_validation->set_rules('password', 'password', 'trim|required|callback_check_database');
            if ($this->CI->form_validation->run() == false) 
            {
                $this->CI->load->view('login');
            } else 
            {
                if ($this->checkSession()) 
                {
                    $log = $this->CI->session->userdata['user_role'];
                    if ($log == 1) 
                    {
                        redirect('admin/dashboard');
                    }
                    else
                    {
                        if (isset($msg) && !empty($msg)) 
                        {
                            $data['msg'] = $msg;
                        } else {
                            $data['msg'] = '';
                        }
                    } 
                    $this->load->view('admin/login', $data);
                }
            }
        }
    }
    
    public function checkSession()
    {
        if (!empty($this->CI->session->userdata('user_role'))) {
            $log = $this->CI->session->userdata('user_role');
            if (!empty($log)) {
                return true;
            } else {
                return false;
            }
        }
    }
    
    
    public function last_executed_query()
    {
        echo $this->db->last_query();
        die;
    }
    
    public function print_array($data = NULL)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
    
    public function load_view($page_data)
    {
        $this->CI->load->view('common/templates/default', $page_data);
    }

    public function load_view1($page_data)
    {
        $this->CI->load->view('common/templates1/default', $page_data);
    }
}