<?php

/*
#############################################################################
#                                                                           #
#   @Auteur : Paul Bouaffou                                                 #
#                                                                           #
#   @Description : API de génération des articles wikipédia                 #
#   à améliorer liés à l'homme ivoirien                                     #
#                                                                           #
#   @Licence : Licence MIT                                                  #
#                                                                           #
#############################################################################
*/ 

class SPARQLQueryDispatcher
{
    private $endpointUrl;

    public function __construct(string $endpointUrl)
    {
        $this->endpointUrl = $endpointUrl;
    }

    public function query(string $sparqlQuery): array
    {

        $opts = [
            'http' => [
                'method' => 'GET',
                'header' => [
                    'Accept: application/sparql-results+json',
                    'User-Agent: WDQS-example PHP/' . PHP_VERSION, // TODO adjust this; see https://w.wiki/CX6
                ],
            ],
        ];
        $context = stream_context_create($opts);

        $url = $this->endpointUrl . '?query=' . urlencode($sparqlQuery);
        $response = file_get_contents($url, false, $context);
        return json_decode($response, true);
    }
}

$endpointUrl = 'https://query.wikidata.org/sparql';
$sparqlQueryString = <<< 'SPARQL'
# Ivorian male
SELECT ?itemLabel WHERE {
  ?item wdt:P21 wd:Q6581097. # gender: male
  ?item wdt:P27 wd:Q1008. # place of birth Côte d'Ivoire
  SERVICE wikibase:label { bd:serviceParam wikibase:language "en,fr" }
}
ORDER BY ?itemLabel
SPARQL;

$queryDispatcher = new SPARQLQueryDispatcher($endpointUrl);
$queryResult = $queryDispatcher->query($sparqlQueryString);

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

if(isset($queryResult['results'])){

    foreach ($queryResult['results']['bindings'] as $queryFirst) {
        
        $page_wiki = $queryFirst['itemLabel']['value'];

        if (isset($page_wiki)) {

            $statut = "yesArticleWikipediaWithProblem";

                // URL secondaire et incomplète pour l'obtention des modèles d'un article wikipédia
               $url_first = "https://fr.wikipedia.org/w/api.php?action=parse&format=json&prop=templates&page=";

               // URL secondaire et complète faisant passé en revue tous les articles wikipédia après encodage de ceux-ci
               $url_second = $url_first.urlencode($page_wiki);

               // Exécution de la fonction url_response()
               $page_wiki_treatment = url_response($url_second);

               // Détermine si la variable $page_wiki_treatment['parse']['templates'] est déclarée et est différente de null
               if (isset($page_wiki_treatment['parse']['templates'])) {
                  
                  foreach ($page_wiki_treatment['parse']['templates'] as $content_third) {
                     
                     $data_third = $content_third['*'];

                     // Détermine si la variable $data_third est déclarée et est différente de null
                     if (isset($data_third)) {
                        
                        // Modèle ou template wikipédia demandant l'amélioration d'un article
                        $modele_template = array("Modèle:Méta bandeau d'avertissement");

                        // Vérification de la présence du Modèle:Méta bandeau d'avertissement dans le groupe des modèles de l'article
                        if (in_array($data_third, $modele_template)) {

                          try {

                            $bdd = new PDO('mysql:host=localhost;dbname=gawadb;charset=utf8', 'root', 'azerty1998');

                            }

                          catch(Exception $e) {

                            die('Erreur : '.$e->getMessage());

                            }

                          $req = $bdd->prepare('INSERT INTO article_male_civ(page, statut) VALUES(:page, :statut)');

                          $req->execute(array('page' => $page_wiki, 'statut' => $statut));

                          $message = "Article à améliorer enregistré avec succès";

                          echo $message."\n";


                        }

                    }
                }
            }    
        }
        else{

          $message = "Aucun article à problème !";

          echo $message."\n";

        }


        }
}
else{

    echo 'Not article !';
}


