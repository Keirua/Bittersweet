<?php

require_once __DIR__.'/../Recipe.php';
require_once __DIR__.'/AbstractRecipeCrawler.php';


/*
	Recipe crawler for the recipes on the website 750g
*/
class SevenHundredAndFiftyGramsCrawler extends AbstractRecipeCrawler{
	function crawl($url){
		$recipe = new Bittersweet\Recipe();
		$this->getPage($url);

		$recette = $this->crawler
					->filter('#col_center')
					;
		$descr = $recette->filter('.recette_description');
		$ingredients_list = $descr->filter('.ingredient .fold');
		$recipe_details = $recette->filter('.recette_infos .infos_column p');

		// Get title
		$recipe->setTitle($this->getTextValue($recette->filter('.page_recette_titre .fn')));

		// Get ingredients
		$recipe->setIngredients( $ingredients_list->each(function ($node, $i) {
								    return $node->nodeValue;
								}));

		// Get instructions
		$recipe->setInstructions( implode ("\n", $recette->filter('.content .steps span')
								->reduce(function($node, $i){
									// Remove line numbers
									return $node->hasAttribute("class") == false;

								})
								->each(function ($node, $i) {
								    return $node->nodeValue;
								})))
								;

		// Get preparation details
		$details = $recipe_details->each (function($node, $i){ return $node->nodeValue; });

		$recipe->setNbPersons($this->extractValue ($details, "Nombre de personnes : " ));
		$recipe->setPreparationTime( $this->extractValue ($details, "Temps de préparation : "));
		$recipe->setCookingTime( $this->extractValue ($details, "Temps de cuisson : "));

		return $recipe;
	}

	private function extractValue($array, $string){
		foreach ($array as $value){
			if (strstr($value, $string)){
				return trim(substr(trim($value), strlen($string)));
			}
		}

	}
}