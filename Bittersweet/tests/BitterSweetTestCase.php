<?php

require_once __DIR__.'/../Bittersweet.php';

class BitterSweet_TestCase extends PHPUnit_Framework_TestCase
{
	protected function getRecipeFromUrl ($url){
		$recipeEngine = new Bittersweet();
		$recette = $recipeEngine->getRecipe($url);
		return $recette;
	}
}