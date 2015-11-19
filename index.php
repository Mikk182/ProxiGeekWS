<?php

require_once 'class/Slim/Slim.php';

require_once 'Reparateur.php';
require_once 'Marque.php';
require_once 'Categorie.php';
//require_once 'Material.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();
//Reparateur
$app->get('/afficherreparateur', function () {
    $reparateur = new Reparateur();
    $reparateur->afficher();
});
$app->post('/recherche', function () use ($app) {
    $reparateur = new Reparateur();
    $reparateur->recherche($app->request()->post('id_com'), $app->request()->post('id_mat'));
});
$app->post('/inscription', function () use ($app) {
    $reparateur = new Reparateur();
      $param=array(
          "prenom_rep"=>$app->request()->post('prenom_rep'),
          "nom_rep"=>$app->request()->post('nom_rep'),
          "tele_rep"=>$app->request()->post('tel_rep'),
          "mail_rep"=>$app->request()->post('mail_rep')
      );
    $reparateur->inscription($param);
});

//Marque
$app->get('/affichermarque', function () {
    $marque = new Marque();
    $marque->afficher();
});
//categorie
$app->get('/affichecategorie', function () {
    $marque = new Categorie();
    $marque->afficher();
});
//material
$app->get('/affichematerial/:id_cat/:id_mar', function ($id_cat,$id_mar) {
    $material = new Material();
    $material->afficher($id_cat, $id_mar);
});

$app->run();
?>