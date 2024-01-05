<?php
class HomeController extends Controller
{
    static public function index()
    {
        $eventes = new Eve;
        $toutEventes = $eventes->findAll();
        if(count($toutEventes) > 0){
            parent::view('home', $toutEventes);
        }else{
            parent::view('home');
        }
    }
    static public function test(){
        parent::view('login');
    }


}
?>
