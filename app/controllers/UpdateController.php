<?php


class Update extends Controller
{
    public function index()
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