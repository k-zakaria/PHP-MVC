<?php
class   Delete extends Controller
{
    public function index($id)
    {
        $supprimer = new User;
        $deletUser = $supprimer->delete($id);
        if ($deletUser) {
            redirect("dashbordAdmin");
        } else {
            $this->view('errorPage');
        }
        $this->view('delete');
    }
}
