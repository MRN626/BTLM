<?php

namespace App\Controllers;

//use App\Models\Chef_departement_model;

class Home extends BaseController
{
    public function index()
    {
        

        
        /**CRUD TEST
         $model_chef_departement = new Chef_departement_model();
        AJOUT avec insert
        $donnees = ['NOM_COMPLET'=>"ngalukiye maureen",'SIGNATURE_CHEF_DEP'=>"MRN"];
        $model_chef_departement ->insert($donnees);

        LECTURE avec find all
        $departement = $model_chef_departement ->findAll();
        var_dump($departement);

        MODIFICATION avec update
        $donnees =['NOM_COMPLET'=>"CHARMANT SAMPI"];
        $model_chef_departement->update(2,$donnees);

        SUPPRESSION avec delete
        $model_chef_departement->delete(1);**/

        return view('pages/dashboard');
    }
}
