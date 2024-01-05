
<?php

class LoginController extends Controller
{
    public function index()
    {
        $user = new User;
        $data = [];
        var_dump($_POST);
        die();

        if (isset($_POST['signIn'])) {
            $data["email"] = isset($_POST['email']) ? trim($_POST['email']) : '';
            $data["password"] = isset($_POST['password']) ? trim($_POST['password']) : '';

            if (empty($data['email']) || empty($data['password'])) {
                echo "<script>alert('Veuillez remplir tous les champs.');</script>";
                return;
            }

            if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                echo "Format d'email invalide.";
                return;
            }

            $res = $user->where(["email" => $data["email"]]);

            if ($res) {
                foreach($res as $result){

                    $storedPassword = $res[0]->passwords;
        
                    if (password_verify($data["password"], $storedPassword)) {
                        $_SESSION['user_id'] = $result->id;
                        $_SESSION['roleUtilisateur'] = $result->roleUtilisateur;
        
                        if (isset($_SESSION['roleUtilisateur'])) {
                            if ($_SESSION['roleUtilisateur'] == "admin") {
                                redirect("dashbordAdmin");
                            }elseif( $_SESSION['roleUtilisateur'] == "organisateur"){
                                redirect("dashbordOrganisateur");
                            } else {
                                redirect("home");
                            }
                        }else {
                            redirect("home");
                        }
                        exit;
                    
                    } else {
                        echo "<script>alert('Mot de passe incorrect.');</script>";
                        return;
                    }
                }
            } else {
                echo "<script>alert('Utilisateur non trouvé.');</script>";
                return;
            }
        }

        $this->view('login', $data);
    }
}
?>



