<?php
require_once 'Model.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Marque
 *
 * @author Med
 */
class Marque {

    function afficher() {
        $model=new Model();
         echo json_encode($model->select("marque", "*"));
    }
}
