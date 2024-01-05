<?php

class Ticke extends Controller
{

    public function index()
    {
        $Tickes = new Tickets;
        $id = $_GET['id'];
        $result = $Tickes->where(['idEvent'=>$id]);
        $this->view('ticke', $result);
    
    }
}
?>