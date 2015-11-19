<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Categorie
 *
 * @author Med
 */
class Categorie {
    public function afficher() {
        $model=new Model();
        echo json_encode($model->select("categorie", "*"));
    }
}
