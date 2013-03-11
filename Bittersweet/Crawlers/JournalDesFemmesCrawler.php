<?php

require_once __DIR__.'/../Recipe.php';
require_once __DIR__.'/AbstractRecipeCrawler.php';

/*
	Recipe crawler for the recipes on the website "JournalDesFemmes"
*/
class JournalDesFemmesCrawler extends AbstractRecipeCrawler{
	function crawl($url){
		$recipe = new Bittersweet\Recipe();
		$this->getPage($url);

		$recette = $this->crawler->filter('.fiche-partie-centrale');
		$ingredientsSection = $recette->filter('.recette-ingredients');
		// Gets the title
		$recipe->setTitle($this->getTextValue($recette->filter('.recette-titre h1 .fn')));

		// Get the ingredients
		$ingredient_list = $ingredientsSection->filter('.liste-ingredients .ingredient');
		$recipe->setIngredients($this->convertElementsIntoString($ingredient_list));

		// Retrieve the instructions
		$instruction_list =  $recette
								->filter('.recette-preparation p');

		$mainInstructions = $this->convertElementsIntoString($instruction_list);
		$recommandations = trim($this->getTextValue($recette->filter('.recommandations')));
		$recipe->setInstructions($mainInstructions."\n".$recommandations);

		// Grabs preparation details
		$recipe->setNbPersons($this->getTextValue($ingredientsSection->filter('.yield .yield')));
		$listeTemps = $recette->filter('ul.liste_temps');
		$recipe->setPreparationTime($this->getTextValue($listeTemps->filter('.prepTime')));
		$recipe->setCookingTime($this->getTextValue($listeTemps->filter('.cookTime')));

		return $recipe;
	}
}