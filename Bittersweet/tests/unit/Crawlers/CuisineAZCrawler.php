<?php

namespace Bittersweet\tests\unit\Crawlers;

require_once __DIR__.'/../../mageekguy.atoum.phar';
require_once __DIR__.'/../../Crawlers/Recipe.php';

use mageekguy\atoum;

class CuisineAZCrawler extends atoum\test
{
	private $expectedIngredients = "300 g de chocolat noir
100 g de beurre
2 jaunes d'oeuf
125 g de sucre glace
1 c. à soupe de lait
4 cl de crème liquide
cacao en poudre";

    public function test__construct()
    {
    	$url = 'http://www.cuisineaz.com/recettes/truffes-au-chocolat-5675.aspx';
        $crawler = new \Bittersweet\CuisineAZCrawler();
        $recipe = $crawler->getRecipe($url);


        
        $this->string($recipe->getTitle())->isEqualTo('');
            /*->string($plop->getIngredients())->isEqualTo('')
            ->string($plop->getInstructions())->isEqualTo('')
            ->string($plop->getNbPersons())->isEqualTo('')
            ->string($plop->getPreparationTime())->isEqualTo('')
            ->string($plop->getCookingTime())->isEqualTo('')
            ;*/
    }

    public function testGetTitle()
    {

    }
}