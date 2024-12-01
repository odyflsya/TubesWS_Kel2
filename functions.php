<?php

require './vendor/autoload.php'; 

use EasyRdf\Sparql\Client;
use EasyRdf\RdfNamespace;

RdfNamespace::set('rdf', 'http://www.w3.org/1999/02/22-rdf-syntax-ns#');
RdfNamespace::set('rdfs', 'http://www.w3.org/2000/01/rdf-schema#');
RdfNamespace::set('foaf', 'http://xmlns.com/foaf/0.1/');
RdfNamespace::set('owl', 'http://www.w3.org/2002/07/owl#');
RdfNamespace::set('dc', 'http://purl.org/dc/terms/');
RdfNamespace::set('piringlokal', 'https://example.org/schema/piringlokal');

$sparqlEndpoint = 'http://localhost:3030/PiringLokal/sparql';
$sparqlJena = new Client($sparqlEndpoint);

// Fungsi untuk menjalankan query SPARQL
function runSparqlQuery($query) {
    global $sparqlJena;
    try {
        return $sparqlJena->query($query);
    } catch (Exception $e) {
        die("Error executing SPARQL query: " . $e->getMessage());
    }
}

// Query default tanpa pencarian
function getDefaultRecipes() {
    $query = "
        SELECT DISTINCT ?recipe ?title ?description ?category ?categoryName ?photo WHERE {
            ?recipe dc:title ?title;
                    dc:description ?description;
                    piringlokal:category ?category;
                    piringlokal:photo ?photo .
            ?category dc:title ?categoryName .
        }
        ORDER BY ?categoryName
    ";
    return runSparqlQuery($query);
}

// Query pencarian berdasarkan keyword
function searchRecipes($keyword) {
    $query = "
        SELECT DISTINCT ?recipe ?title ?description ?category ?categoryName ?photo WHERE {
            ?recipe dc:title ?title;
                    dc:description ?description;
                    piringlokal:category ?category;
                    piringlokal:photo ?photo .
            ?category dc:title ?categoryName .
            FILTER (REGEX(?title, '$keyword', 'i') || 
                    REGEX(?description, '$keyword', 'i') || 
                    REGEX(?categoryName, '$keyword', 'i'))
        }
        ORDER BY ?title
    ";
    return runSparqlQuery($query);
}


// Query untuk mengambil detail resep berdasarkan keyword
function getRecipeByKeyword($keyword) {
    $query = "
        SELECT DISTINCT ?recipe ?title ?description ?category ?photo ?ingredients ?steps WHERE {
            ?recipe dc:title ?title;
                    dc:description ?description;
                    piringlokal:category ?category;
                    piringlokal:photo ?photo;
                    piringlokal:ingredients ?ingredients;
                    piringlokal:steps ?steps .
            FILTER (REGEX(?title, '$keyword', 'i') || 
                    REGEX(?description, '$keyword', 'i') || 
                    REGEX(?category, '$keyword', 'i'))
        }
        GROUP BY ?recipe ?title ?description ?category ?photo ?ingredients ?steps
        LIMIT 1
    ";
    return runSparqlQuery($query);
}
?>
