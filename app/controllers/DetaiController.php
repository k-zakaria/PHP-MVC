<?php

class Detai extends Controller
{

    public function index()
    {
        $eve = new Eve;
        $id = $_GET['id'];
        $result = $eve->where(['id' => $id]);
        if(count($result)> 0 ){
            $this->view('detai', $result);
        }else{
            $this->view('detai');
        }
    
    }
}




?>