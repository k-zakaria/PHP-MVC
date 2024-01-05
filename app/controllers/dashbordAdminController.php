<?php

class dashbordAdmin extends Controller
{
    public function index()
    {
        $user = new User;
        $evn = new Eve;
        $ticks = new Tickets;
        $toutUsers = $user->findAll();
        
        if(isset($_POST['delete'])){
            $id = isset($_POST['id']) ? $_POST['id'] : null;

            if ($id !== null) {
                $ticks->delete($id); 
                $evn->delete($id); 
                $user->delete($id);
            }
        }

        if(count($toutUsers) > 0){
            $this->view('dashbordAdmin', $toutUsers);
        } else {
            $this->view('dashbordAdmin');
        }
    }

    public function update()
    {
        $user = new User;
        $result = $user->findAll();
        $col = $user->getColomn();
        $id = $_GET['id'];
        $data['result'] = $result;
        if(isset($_POST['update'])){
            $data['roleUtilisateur'] = $_POST['roleUtilisateur'];
            $user->update($id,['roleUtilisateur' => $_POST['roleUtilisateur']]);
            redirect("dashbordAdmin");
        }
        $this->view('update', $data , $col);
    }

    
}
?>
