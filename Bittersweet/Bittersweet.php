<?php

require_once __DIR__.'/Crawlers/MarmitonCrawler.php';
require_once __DIR__.'/Crawlers/SevenHundredAndFiftyGramsCrawler.php';
require_once __DIR__.'/Crawlers/CuisineAZCrawler.php';
require_once __DIR__.'/Crawlers/JournalDesFemmesCrawler.php';

class Bittersweet{
	private $crawlers;

	public function __construct(){
		$this->crawlers = array (
				'marmiton.org' 	=> new MarmitonCrawler(),
				'750g.com' 		=> new SevenHundredAndFiftyGramsCrawler(),
				'cuisineaz.com' => new CuisineAZCrawler(),
				'cuisine.journaldesfemmes.com' => new JournalDesFemmesCrawler(),
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
