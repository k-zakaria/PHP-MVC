<?php
class App {
    private $controller = 'home';
    
    public function run(){

       $callback = Router::getCallback();

       call_user_func($callback);
        var_dump($_REQUEST['url']);
        die();
      
    }
}
?>
