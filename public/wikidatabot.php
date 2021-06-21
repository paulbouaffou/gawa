<?php

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
# Ivorian female
SELECT ?itemLabel WHERE {
  ?item wdt:P21 wd:Q6581072. # gender: female
  ?item wdt:P27 wd:Q1008. # place of birth Côte d'Ivoire
  SERVICE wikibase:label { bd:serviceParam wikibase:language "en,fr" }
}
ORDER BY ?itemLabel
SPARQL;

$queryDispatcher = new SPARQLQueryDispatcher($endpointUrl);
$queryResult = $queryDispatcher->query($sparqlQueryString);

if(isset($queryResult['results'])){

    foreach ($queryResult['results']['bindings'] as $queryFirst) {
        
        $page_wiki = $queryFirst['itemLabel']['value'];

        if (isset($page_wiki)) {

            $urlWikipediaFr = "https://fr.wikipedia.org/w/api.php?action=parse&prop=text&format=json&page=";

            $articleWikipediaFrLink = $urlWikipediaFr.urlencode($page_wiki);

            // Lecture des données au format JSON dans une chaîne
            $json_content = file_get_contents($articleWikipediaFrLink);

            // Décodage d'une chaîne JSON
            $json_response = json_decode($json_content, true);

            if (!isset($json_response['error'])) {

                $statut = "yesArticleWikipedia";
                
                try {

                            $bdd = new PDO('mysql:host=localhost;dbname=gawadb;charset=utf8', 'root', 'azerty1998');

                            }

                          catch(Exception $e) {

                            die('Erreur : '.$e->getMessage());

                            }

                          $req = $bdd->prepare('INSERT INTO articlefemaleciv(page, statut) VALUES(:page, :statut)');

                          $req->execute(array('page' => $page_wiki, 'statut' => $statut));

                          $message = "Article à améliorer enregistré avec succès";

                          echo $message."\n";
            }
            elseif (isset($json_response['error'])) {

                $statut = "noArticleWikipedia";
                
                try {

                            $bdd = new PDO('mysql:host=localhost;dbname=gawadb;charset=utf8', 'root', 'azerty1998');

                            }

                          catch(Exception $e) {

                            die('Erreur : '.$e->getMessage());

                            }

                          $req = $bdd->prepare('INSERT INTO articlefemaleciv(page, statut) VALUES(:page, :statut)');

                          $req->execute(array('page' => $page_wiki, 'statut' => $statut));

                          $message = "Article à améliorer enregistré avec échec";

                          echo $message."\n";
            }


        }
    }
}
else{

    echo 'Not article !';
}


