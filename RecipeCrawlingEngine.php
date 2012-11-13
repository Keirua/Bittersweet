<?php

require_once 'MarmitonCrawler.php';
require_once 'SevenHundredAndFiftyGramsCrawler.php';
require_once 'CuisineAZCrawler.php';

class RecipeCrawlingEngine{
	private $crawlers;

	public function __construct(){
		$this->crawlers = array (
				'marmiton.org' 	=> new MarmitonCrawler(),
				'750g.com' 		=> new SevenHundredAndFiftyGramsCrawler(),
				'cuisineaz.com' => new CuisineAZCrawler()
			);
	}

	public function getRecipe($url){
		$crawler = $this->getCrawlerFromUrl($url);
		if ($crawler){
			return $crawler->crawl($url);
		}

		return null;
	}

	private function getCrawlerFromUrl($url){
		foreach ($this->crawlers as $host => $crawler) {
			if (strstr($url, $host))
				return $crawler;
		}

		return null;
	}
}
