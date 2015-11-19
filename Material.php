<?php

require_once 'Model.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Material
 *
 * @author Med
 */
class Material {

    public function afficher($id_cat, $id_mar) {
        $model = new Model();
        echo json_encode($model->select("materiel","*",["AND" => ["id_cat" => $id_cat, "id_mar" => $id_mar]]));
    }

}
