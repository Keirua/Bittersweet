<?php

require_once __DIR__.'/../Recipe.php';
require_once __DIR__.'/AbstractRecipeCrawler.php';

/*
	Crawler implementation for the recipes on the website marmiton.org

	Not broken, but not yet working correctly on all the pages :
	it only crawls the pages containing the "txtRecette" class.
 	A lot of pages seem to lack this styling element though, and errors are not caught
*/
class MarmitonCrawler extends AbstractRecipeCrawler
{
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
