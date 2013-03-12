<?php

require_once __DIR__.'/../BitterSweetTestCase.php';
require_once __DIR__.'/../../Recipe.php';

class CuisineAZTest extends BitterSweet_TestCase{
    public function testGetRecipe ()
    {
		$url = 'http://cuisine.journaldesfemmes.com/recette/307392-steak-hache-a-la-japonaise';
		$recette = $this->getRecipeFromUrl($url);

		$ingredients = array (
			"300 g de viande hachée",
			"1/2 oignon",
			"1 cuillère à soupe d'huile d'olive ou végétale",
			"20 g de chapelure (ou baguette râpée)",
			"1 oeuf",
			"3 cuillères à soupe de lait",
			"sel, poivre",
			"huile d'olive ou végétale à cuire",
			"4 cuillères à soupe de ketchup pour la sauce"
			);

		$this->assertEquals($recette->getTitle(), 'Steak haché à la japonaise');
		$this->assertEquals($recette->getNbPersons(), '2');
		$this->assertEquals($recette->getPreparationTime(), '10 mn');
		$this->assertEquals($recette->getCookingTime(), '10 mn');
		$this->assertEquals($recette->getIngredients(), $ingredients);
		$this->assertEquals($recette->getInstructions(), "1Hacher l'oignon. Le faire chauffer 2 minutes avec l'huile d'olive dans le micro-ondes. Laisser refroidir.
2Mélanger la viande hachée, l'oignon, la chapelure, l'oeuf, le lait, le sel et le poivre dans un saladier et pétrir à la main.
3Diviser en 2-3 et cabosser un peu pour qu'il soit bien cuit à l'interieur.
4Faire cuire en couvrant la poêle à feu modéré avec l'huile d'olive.
5Mettre sur assiette. Ne pas jeter le suc.
6Ensuite, mettre le ketchup dans la poêle et faire rapidement chauffer en mélangeant avec le suc. Verser de la sauce. Bon appétit.
On peut ajouter un oeuf au plat, du fromage, du maïs, etc. sur ce steak haché. 
On peut ajouter à la sauce un peu de mayonnaise. On peut aussi ajouter un peu d'ail pour la préparation et un peu de vin rouge pour la sauce.");
    }
}



// [title:protected] => Steak haché à la japonaise
//     [ingredients:protected] => 300 g de viande hachée
// 1/2 oignon
// 1 cuillère à soupe d'huile d'olive ou végétale
// 20 g de chapelure (ou baguette râpée)
// 1 oeuf
// 3 cuillères à soupe de lait
// sel, poivre
// huile d'olive ou végétale à cuire
// 4 cuillères à soupe de ketchup pour la sauce
//     [instructions:protected] => 1Hacher l'oignon. Le faire chauffer 2 minutes avec l'huile d'olive dans le micro-ondes. Laisser refroidir.
// 2Mélanger la viande hachée, l'oignon, la chapelure, l'oeuf, le lait, le sel et le poivre dans un saladier et pétrir à la main.
// 3Diviser en 2-3 et cabosser un peu pour qu'il soit bien cuit à l'interieur.
// 4Faire cuire en couvrant la poêle à feu modéré avec l'huile d'olive.
// 5Mettre sur assiette. Ne pas jeter le suc.
// 6Ensuite, mettre le ketchup dans la poêle et faire rapidement chauffer en mélangeant avec le suc. Verser de la sauce. Bon appétit.
// On peut ajouter un oeuf au plat, du fromage, du maïs, etc. sur ce steak haché. 
// On peut ajouter à la sauce un peu de mayonnaise. On peut aussi ajouter un peu d'ail pour la préparation et un peu de vin rouge pour la sauce.
//     [nbPersons:protected] => 2                               
//     [preparationTime:protected] => 10 mn
//     [cookingTime:protected] => 10 mn
