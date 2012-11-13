<?php

require_once 'goutte.phar';

use Goutte\Client;

abstract class AbstractRecipeCrawler{
	// Crawling related
	protected $sourceUrl;
	protected $crawler;

	protected function getPage($url){
		$client = new Client();
		$this->sourceUrl = $url;
		$this->crawler = $client->request('GET', $this->sourceUrl);
	}

	abstract function crawl($url);

	protected function convertElementsIntoString($nodes){
		return implode ("\n", $nodes->each(function ($node, $i) {
								    return $node->nodeValue;
								}));
	}

	protected function getTextValue($node)
	{
		try{
			return $node->text();
		}
		catch(InvalidArgumentException $e){
			return "";
		}
	}
}