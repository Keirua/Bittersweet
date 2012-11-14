<?php

require_once __DIR__.'/goutte.phar';

use Goutte\Client;

/*
	Abstract recipe crawler
*/
abstract class AbstractRecipeCrawler{
	protected $sourceUrl;
	protected $crawler;

	protected function getPage($url){
		$client = new Client();
		$this->sourceUrl = $url;
		$this->crawler = $client->request('GET', $this->sourceUrl);
	}

	// Extracts the data from the page
	abstract function crawl($url);

	// Join the content of a list of nodes.
	// Each of the node's content is separated with \n.
	protected function convertElementsIntoString($nodes){
		return implode ("\n", $nodes->each(function ($node, $i) {
								    return trim($node->nodeValue);
								}));
	}

	// Safely returns the text value if found
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