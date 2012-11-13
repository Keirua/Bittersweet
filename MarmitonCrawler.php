<?php

require_once 'Recipe.php';
require_once 'AbstractRecipeCrawler.php';

class MarmitonCrawler extends AbstractRecipeCrawler
{
	// Only crawl pages with txtRecette class.
	// A lot of pages seem to lack this styling element though, and errors are not caught
	public function crawl($url){
		$recipe = new Recipe();
		$this->getPage($url);

		$recette = $this->crawler
					->filter('.txtRecette')
					;

		$ingredientsText = $recette->filter('.ingredient')->text();

		$recipe->setTitle ($recette->filter('strong h2')->text());
		$recipe->setIngredients ( str_replace("- " , "\n",$ingredientsText));
		$recipe->setInstructions ( $recette->filter('.instructions')->text());
		
		return $recipe;
	}
}
