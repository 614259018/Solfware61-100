<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        echo "Construtor"."</br>";
    }
	public function index()
	{
        echo "Report Index";
    }
    public function _hello()
    {
        echo "</br>"."Hello word";
    }
    public function showname($name="Thanayut",$lastname="Samsang")
    {
        echo "My name is ".$name."".$lastname;
        $this->_hello();
    }
    public function showviews()
    {
        $this->load->view("hello_views");
        $this->load->view("hello_views");
        $this->load->view("hello_views");
    }
    public function showuser()
    {
        $data ["name"] = "Thanyut";
        $data ["lastname"] = "Samsang";
        $data ["nickname"] = "NOCH";
        $this->load->view("user_page",$data);
    }
    public function getuser($p1=null,$p2=null,$p3=null)
    {
        $data ["name"] = $p1;
        $data ["lastname"] = $p2;
        $data ["nickname"] = $p3;
        $this->load->view("user_page",$data);
    }
    public function showbooks()
    {
        $data["books"]=array("Jave","Kolin","php");
        $this->load->view("books_page",$data);
    }


}