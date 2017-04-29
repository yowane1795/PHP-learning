<?php
// ***********************
// Les cookies
// ***********************

/*un cookie un petit fichier (4 ko max) depose oar le serveur sur ke poste de l internaute et qui peut contenir des informations coud forme de texte. Les cookies sint autom atiquement renvoyes au serveur web par le navigateur lorsque l internaute  navigue dans les pages concerneses par es les cookies

PHP peut tres facilemenr recuperer les donnees contenues dans un cookie : sse informations sont stockes dams la super globae $_COOKIE

Ne pas stocker d informations sensibles
*/

// Nous allons sticker lalangue choisie

// 1 affectation de la langue a la variable $langue
 if (isset($_GET['langue'])){ //si un langue  est passee dans l url c est que nous avons clique suur une langue
    $langue = $_GET['langue'];
 } elseif (isset($_COOKIE['langue'])){ // on entre dans elseif si un cookie appele langue  a ete envoye par le client

    $langue = $_COOKIE['langue'];
 } else{

     $langue ='fr';
 }

//  2 Envoie du cookie avec la langue
    $un_an = 365 * 24 * 60 * 60; // un an exprime en seconde

    setCookie('langue', $langue, time() + $un_an); // setcookie('nom', 'valeur', 'date expiration en timestamp')
    // permet de crer et d envoyer le cookie vers le client


// 3 affichage de la langue;
echo 'Votre langue : ';
switch($langue){
    case 'fr' : echo 'francais'; break;
    case 'es' : echo 'espagnol'; break;
    case 'en' : echo 'englais'; break;
    case 'it' : echo 'italien'; break;
}


?>

<h1>votre langue</h1>

<ul>
    <li><a href="?langue=fr">Francais</a></li>
    <li><a href="?langue=es">Espagonl</a></li>
    <li><a href="?langue=en">Englais</a></li>
    <li><a href="?langue=it">Italien</a></li>
</ul>