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

		$this->assertEquals(0,4);
    }
}
