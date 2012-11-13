<?php

require_once 'Recipe.php';
require_once 'AbstractRecipeCrawler.php';

class CuisineAZCrawler extends AbstractRecipeCrawler{
	function crawl($url){
		$recipe = new Recipe();
		$this->getPage($url);

		

		return $recipe;
	}
}