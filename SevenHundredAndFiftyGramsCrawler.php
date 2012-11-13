<?php

require_once 'Recipe.php';
require_once 'AbstractRecipeCrawler.php';

class SevenHundredAndFiftyGramsCrawler extends AbstractRecipeCrawler{
	function crawl($url){
		$recipe = new Recipe();
		$this->getPage($url);

		$recette = $this->crawler
					->filter('#col_center')
					;
		$descr = $recette->filter('.recette_description');
		$ingr_list = $descr->filter('.ingredient .fold');

		$recipe->setTitle($recette->filter('.page_recette_titre .fn')->text());

		$recipe->setIngredients( implode ("\n", $ingr_list->each(function ($node, $i) {
								    return $node->nodeValue;
								})));

		$recipe->setInstructions( implode ("\n", $recette->filter('.content .steps span')
								->reduce(function($node, $i){
									// Remove line numbers
									return $node->hasAttribute("class") == false;

								})
								->each(function ($node, $i) {
								    return $node->nodeValue;
								})))
								;

		return $recipe;
	}
}