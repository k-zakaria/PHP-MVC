<?php
class Singup extends Controller
{
    public function index()
    {
        $user = new User;
        $col = $user->getColomn();
        $data = [];
        $errors = [];
        if (isset($_POST['signUp'])){
            foreach($col as $row){
                if(isset($_POST[$row])){
                    $data[$row] = $_POST[$row];
                    show($data);
                }else{
                    $errors[] = "Missing data for column : $row" ;
                }
            }

            if (empty($data['nameUtilisateur'])) {
                $errors[] = "Veuillez entrer un nom d'utilisateur";
            }
            if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Format d email invalide";
            }
            if (empty($data['passwords'])) {
                $errors[] = "Veuillez entrer un mot de passe.";
            }
            if (empty($errors)) {
                $hashedPassword = password_hash($data['passwords'], PASSWORD_DEFAULT);
                $data['passwords'] = $hashedPassword;

                $user->insert($data);
                redirect("login");
            }
        }
        $this->view('singup', $data , $col, $errors);
    }
}
