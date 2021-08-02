<?php


/* ---------------------------Fonction(s)----------------------------------*/

   // Fonction de traitement des données de format JSON issues d'une URL
   function url_response($url){

       // Lecture des données au format JSON dans une chaîne
       $json_content = file_get_contents($url);

       // Décodage d'une chaîne JSON
       $json_response = json_decode($json_content, true);

       // Résultat
       return $json_response;

   }

?>