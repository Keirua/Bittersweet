<?php

// include_once __DIR__.'/../../Bittersweet.php';

// $recipeEngine = new Bittersweet();

// $recipes750 = array(
// 		'http://www.750g.com/fiche_de_cuisine.2.123.18905.htm',
// 		'http://www.750g.com/fiche_de_cuisine.2.123.42563.htm',
// 		'http://www.750g.com/fiche_de_cuisine.2.123.59265.htm',
// 		'http://www.750g.com/fiche_de_cuisine.2.123.58877.htm',
// 	);

// foreach ($recipes750 as $r){
// 	$recette = $recipeEngine->getRecipe($r);

// 	print_r($recette);
// }



require_once __DIR__.'/../BitterSweetTestCase.php';
require_once __DIR__.'/../../Recipe.php';

class SevenHundredTest extends BitterSweet_TestCase{
    public function testGetRecipeNominal ()
    {
		$url = 'http://www.750g.com/fiche_de_cuisine_complete.htm?recettes_id=18905';
		$recette = $this->getRecipeFromUrl($url);

		$ingredients = array (
			"60g de farine (dont 20g de farine de chataîgne)",
			"1c. à café de levure",
			"15g de flocons d'avoine hachés",
			"5g de noisettes du Lot et Garonne réduit en poudre",
			"15g de comté rapé",
			"1 oeuf",
			"100g de purée de potiron",
			"1c. à soupe d'huile d'olive",
			"du gomasio"
			);

		$this->assertEquals($recette->getTitle(), 'Madeleines nuagées au potiron');
		$this->assertEquals($recette->getInstructions(), "Préchauffer le four à 180°.Dans un saladier, mélanger la farine, la levure, les flocons hachés et la poudre de noisettes.Ajouter l'oeuf et l'huile, puis la purée de potiron et le comté. Assaisonner (gomasio, une pincée de curry, du poivre)Remplir les empreintes avec une petite cuillère à café, saupoudrer de sésame.Enfourner 15min.");
		$this->assertEquals($recette->getIngredients(), $ingredients);
 		// $this->assertEquals($recette->getNbPersons(), '20 truffes');
		// $this->assertEquals($recette->getPreparationTime(), '10 min');
		// $this->assertEquals($recette->getCookingTime(), '10 min');
    }
}