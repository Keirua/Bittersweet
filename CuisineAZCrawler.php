<?php

require_once 'Recipe.php';
require_once 'AbstractRecipeCrawler.php';

class CuisineAZCrawler extends AbstractRecipeCrawler{
	function crawl($url){
		$recipe = new Recipe();
		$this->getPage($url);

		$recette = $this->crawler
					->filter('#ficheRecette')
					;
		$recetteRight = $recette->filter('#recetteRight');
		
		// Gets the title
		$recipe->setTitle($this->getTextValue($recette->filter('.recetteH1')));

		// Get the ingredients
		$ingr_list = $recetteRight->filter('#ingredients .ingredient');
		$recipe->setIngredients($this->convertElementsIntoString($ingr_list));

		// Retrieve the instructions
		$instruction_list =  $recette->filter('#preparation .instructions p'); 
		$recipe->setInstructions($this->convertElementsIntoString($instruction_list));

		// Grabs preparation details
		$recipe->setNbPersons($this->getTextValue($recetteRight->filter('#recipeQuantity .yield')));
		$recipe->setPreparationTime($this->getTextValue($recetteRight->filter('.preptime')));
		$recipe->setCookingTime($this->getTextValue($recetteRight->filter('.cooktime')));

		return $recipe;
	}
}