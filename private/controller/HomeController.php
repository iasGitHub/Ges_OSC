<?php

class HomeController extends Controller
{
    function index()
    {
        $user = new User();
        $data = $user->findAll();
        $this->view('home', ['rows' => $data]);
        
        
        // $arr['firstname'] = 'Sy';
        // $arr['lastname'] = 'Amadou';
        // $arr['email'] = 'amadou_sy@gmail.com';
        // $arr['password'] = 'Passer1';
        // $arr['phone'] = '+221 77 628 10 23';

        // Ajou d'un nouvel utilisateur
        //$user->insert($arr);

        //mettre à jour un user
        //$user->update(4,$arr);

        //supprimer le user avec l'id 6
        //$user->delete(6);
    }
}
?>