<?php

// include_once __DIR__.'/../../Bittersweet.php';

// $recipeEngine = new Bittersweet();

// $recipesCuisineAZ = array(
// 		'http://www.cuisineaz.com/recettes/soupe-de-poulet-aux-champignons-noirs-6401.aspx',
// 		'http://www.cuisineaz.com/recettes/truffes-au-chocolat-5675.aspx',
// 		'http://www.cuisineaz.com/recettes/verrines-de-pommes-de-terre-a-la-betterave-54238.aspx',
// 		'http://www.cuisineaz.com/recettes/verrines-de-saumon-aux-oeufs-brouilles-54474.aspx',
// 		'http://www.cuisineaz.com/recettes/salade-sucree-salee-mangue-crabe-52972.aspx',
// 		'http://www.cuisineaz.com/recettes/salade-de-pommes-de-terre-alsacienne-37485.aspx',
// 		'http://www.cuisineaz.com/recettes/soupe-cremeuse-aux-champignons-53790.aspx'
// 	);

// foreach ($recipesCuisineAZ as $r){
// 	$recette = $recipeEngine->getRecipe($r);

// 	print_r($recette);
// }


require_once __DIR__.'/../BitterSweetTestCase.php';
require_once __DIR__.'/../../Recipe.php';

class CuisineAZTest extends BitterSweet_TestCase{
    public function testGetRecipe ()
    {
		$url = 'http://www.cuisineaz.com/recettes/truffes-au-chocolat-5675.aspx';
		$recette = $this->getRecipeFromUrl($url);

		$ingredients = array (
			"300 g de chocolat noir",
			"100 g de beurre",
			"2 jaunes d'oeuf",
			"125 g de sucre glace",
			"1 c. à soupe de lait",
			"4 cl de crème liquide",
			"cacao en poudre"
			);

		$this->assertEquals($recette->getTitle(), 'Truffes au chocolat');
		$this->assertEquals($recette->getNbPersons(), '20 truffes');
		$this->assertEquals($recette->getPreparationTime(), '10 min');
		$this->assertEquals($recette->getCookingTime(), '10 min');
		$this->assertEquals($recette->getIngredients(), $ingredients);
		// $this->assertEquals($recette->getInstructions(), "-Cassez le chocolat en petits morceaux dans une casserole. \nAjoutez le lait et faites fondre à feu doux. Mélangez avec une spatule en bois pour obtenir une pâte lisse. 3Ajoutez alors le beurre en parcelles en mélangeant.4Puis incorporez les jaunes d'oeufs un par un et enfin la crème liquide. Mélangez bien.5Ajoutez alors le sucre glace en fouettant.6Versez la pâte dans un saladier et placez au frais pendant au moins 2 heures. 7Quand la pâte est bien dure, formez des petites boules de la taille d'une noix et roulez-les dans le cacao.8Gardez au frais jusqu'au moment de déguster.");
    }
}


/*
Quantité	20 truffes
Préparation	10 min
Cuisson	10 min
Repos	2 h
Coût de la recette	Pas cher
Niveau de difficulté	Facile
Ingrédients
pour Truffes au chocolat

300 g de chocolat noir
100 g de beurre
2 jaunes d'oeuf
125 g de sucre glace
1 c. à soupe de lait
4 cl de crème liquide
cacao en poudre
Préparation
pour Truffes au chocolat

1Cassez le chocolat en petits morceaux dans une casserole. 2Ajoutez le lait et faites fondre à feu doux. Mélangez avec une spatule en bois pour obtenir une pâte lisse. 3Ajoutez alors le beurre en parcelles en mélangeant.4Puis incorporez les jaunes d'oeufs un par un et enfin la crème liquide. Mélangez bien.5Ajoutez alors le sucre glace en fouettant.6Versez la pâte dans un saladier et placez au frais pendant au moins 2 heures. 7Quand la pâte est bien dure, formez des petites boules de la taille d'une noix et roulez-les dans le cacao.8Gardez au frais jusqu'au moment de déguster.
*/