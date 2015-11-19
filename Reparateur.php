<?php
require_once 'Model.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Reparateur
 *
 * @author Med
 */
class Reparateur {

    public function afficher() {
        $model = new Model();
        echo json_encode($model->select("reparateur", "*"));
    }
    public function recherche($id_com,$id_mat){
        $model = new Model();
        echo json_encode($model->select("reparateur", "*"));
    }
    public function inscription($param) {
        $model = new Model();
        $model->insert("reparateur",$param);
    }
    

}
