<?php

include_once 'RecipeCrawlingEngine.php';

$recipeEngine = new RecipeCrawlingEngine();

$recipesMarmiton = array (
		'http://www.marmiton.org/recettes/recette_tartare-de-boeuf-aux-parfums-thai_228521.aspx',
		'http://www.marmiton.org/recettes/recette_gateau-a-la-polonaise-de-gabriella_37890.aspx',
		'http://www.marmiton.org/recettes/recette_roule-de-jambon-a-la-puree_39548.aspx',
		'http://www.marmiton.org/recettes/recette_salade-fraiche-concombre-pomme-et-poivron_25778.aspx',
		'http://www.marmiton.org/recettes/recette_tartines-de-chevre-au-romarin_72079.aspx',
		'http://www.marmiton.org/recettes/recette_pate-pour-les-croissants_14530.aspx',
		'http://www.marmiton.org/recettes/recette_gaufres-au-lait-de-coco_64347.aspx',
		'http://www.marmiton.org/recettes/recette_sauce-teriyaki-japon_38643.aspx',
		'http://www.marmiton.org/recettes/recette_la-tarte-des-amoureux_31851.aspx',
		'http://www.marmiton.org/recettes/recette_gateau-au-chocolat-transportable_56100.aspx',
	);

$recipes750 = array(
		'http://www.750g.com/fiche_de_cuisine.2.123.18905.htm',
		'http://www.750g.com/fiche_de_cuisine.2.123.42563.htm',
		'http://www.750g.com/fiche_de_cuisine.2.123.59265.htm',
		'http://www.750g.com/fiche_de_cuisine.2.123.58877.htm',

	);



$url = 'http://www.cuisineaz.com/recettes/poulet-au-citron-54773.aspx';
$recette = $recipeEngine->getRecipe($url);
print_r($recette);



/*
$url = 'http://www.marmiton.org/recettes/recette_gateau-a-la-polonaise-de-gabriella_37890.aspx';
$recette = $recipeEngine->getRecipe($url);
print_r($recette);
*/

/*
foreach ($recipes750 as $r){
	$recette = $recipeEngine->getRecipe($r);

	print_r($recette);
}
	
/*
$recetteThai = $recipeEngine->getRecipe('http://www.750g.com/fiche_de_cuisine_complete.htm?recettes_id=66095');

print_r($recetteThai);

/*

$recetteThai = new MarmitonCrawler('http://www.marmiton.org/recettes/recette_tartare-de-boeuf-aux-parfums-thai_228521.aspx');
print_r($recetteThai->getRecipe());

$recetteLasagnes = new SevenHundredAndFiftyGramsCrawler('http://www.750g.com/fiche_de_cuisine_complete.htm?recettes_id=66095');
print_r($recetteLasagnes->getRecipe());

*/