<?php
// Demo
include_once __DIR__.'/Bittersweet/Bittersweet.php';

$recipeEngine = new Bittersweet();

// Sample URLs
$url = 'http://www.marmiton.org/recettes/recette_tartines-de-chevre-au-romarin_72079.aspx';
// $url = 'http://www.cuisineaz.com/recettes/poulet-au-citron-54773.aspx';
// $url = 'http://cuisine.journaldesfemmes.com/recette/307392-steak-hache-a-la-japonaise';
// $url = 'http://www.cuisineaz.com/recettes/truffes-au-chocolat-5675.aspx';
// $url = 'http://www.750g.com/fiche_de_cuisine_complete.htm?recettes_id=18905';

$recette = $recipeEngine->getRecipe($url);

print_r($recette);

