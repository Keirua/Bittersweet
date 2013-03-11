<?php

include_once __DIR__.'/../../Bittersweet.php';

$recipeEngine = new Bittersweet();

$recipesCuisineAZ = array(
		'http://www.cuisineaz.com/recettes/soupe-de-poulet-aux-champignons-noirs-6401.aspx',
		'http://www.cuisineaz.com/recettes/truffes-au-chocolat-5675.aspx',
		'http://www.cuisineaz.com/recettes/verrines-de-pommes-de-terre-a-la-betterave-54238.aspx',
		'http://www.cuisineaz.com/recettes/verrines-de-saumon-aux-oeufs-brouilles-54474.aspx',
		'http://www.cuisineaz.com/recettes/salade-sucree-salee-mangue-crabe-52972.aspx',
		'http://www.cuisineaz.com/recettes/salade-de-pommes-de-terre-alsacienne-37485.aspx',
		'http://www.cuisineaz.com/recettes/soupe-cremeuse-aux-champignons-53790.aspx'
	);

foreach ($recipesCuisineAZ as $r){
	$recette = $recipeEngine->getRecipe($r);

	print_r($recette);
}


<?php

require_once __DIR__.'/../BitterSweetTestCase.php';
require_once __DIR__.'/../../Recipe.php';

class RecipeTest extends BitterSweet_TestCase{
    public function testGetTitle()
    {
        $plop = new \Bittersweet\Recipe();
        $plop->setTitle('plop');
        $this->assertEquals($plop->getTitle(), ('plop'));
    }

    public function testGetIngredients()
    {
        $plop = new \Bittersweet\Recipe();
        $plop->setIngredients('plop');
        $this->assertEquals($plop->getIngredients(), ('plop'));
    }

    public function testGetInstructions()
    {
        $plop = new \Bittersweet\Recipe();
        $plop->setInstructions('plop');
        $this->assertEquals($plop->getInstructions(), ('plop'));
    }

    public function testNbPersons()
    {
        $plop = new \Bittersweet\Recipe();
        $plop->setNbPersons('4 personnes');
        $this->assertEquals($plop->getNbPersons(), ('4 personnes'));
    }

    public function testPreparationTime()
    {
        $plop = new \Bittersweet\Recipe();
        $plop->setPreparationTime('plop');
        $this->assertEquals($plop->getPreparationTime(), ('plop'));
    }

    public function testCookingTime()
    {
        $plop = new \Bittersweet\Recipe();
        $plop->setCookingTime('plop');
        $this->assertEquals($plop->getCookingTime(), ('plop'));
    }
}
