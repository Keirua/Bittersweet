<?php

namespace Bittersweet\tests\unit;

require_once __DIR__.'/../mageekguy.atoum.phar';
require_once __DIR__.'/../../Recipe.php';

use mageekguy\atoum;

class Recipe extends atoum\test
{
    public function test__construct()
    {
        $plop = new \Bittersweet\Recipe();
        $this->string($plop->getTitle())->isEqualTo('')
            ->string($plop->getIngredients())->isEqualTo('')
            ->string($plop->getInstructions())->isEqualTo('')
            ->string($plop->getNbPersons())->isEqualTo('')
            ->string($plop->getPreparationTime())->isEqualTo('')
            ->string($plop->getCookingTime())->isEqualTo('')
            ;
    }

    public function testGetTitle()
    {
        $plop = new \Bittersweet\Recipe();
        $plop->setTitle('plop');
        $this->string($plop->getTitle())->isEqualTo('plop');
    }

    public function testGetIngredients()
    {
        $plop = new \Bittersweet\Recipe();
        $plop->setIngredients('plop');
        $this->string($plop->getIngredients())->isEqualTo('plop');
    }

    public function testGetInstructions()
    {
        $plop = new \Bittersweet\Recipe();
        $plop->setInstructions('plop');
        $this->string($plop->getInstructions())->isEqualTo('plop');
    }

    public function testNbPersons()
    {
        $plop = new \Bittersweet\Recipe();
        $plop->setNbPersons('4 personnes');
        $this->string($plop->getNbPersons())->isEqualTo('4 personnes');
    }

    public function testPreparationTime()
    {
        $plop = new \Bittersweet\Recipe();
        $plop->setPreparationTime('plop');
        $this->string($plop->getPreparationTime())->isEqualTo('plop');
    }

    public function testCookingTime()
    {
        $plop = new \Bittersweet\Recipe();
        $plop->setCookingTime('plop');
        $this->string($plop->getCookingTime())->isEqualTo('plop');
    }
}