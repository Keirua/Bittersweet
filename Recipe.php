<?php

/*
	Recipe data structure, which holds all the necessary information 
*/
class Recipe
{
	protected $title;
	protected $ingredients;
	protected $instructions;

	protected $nbPersons;
	protected $preparationTime;
	protected $cookingTime;

	///////////////////////////////////////
	/// Getters
	///////////////////////////////////////
	public function getTitle(){
		return $this->title();
	}

	public function getIngredients(){
		return $this->ingredients;
	}

	public function getInstructions(){
		return $this->instructions;
	}

	public function getNbPersons(){
		return $this->nbPersons;
	}

	public function getPreparationTime(){
		return $this->preparationTime;
	}

	public function getCookingTime(){
		return $this->cookingTime;
	}

	///////////////////////////////////////
	/// Setters
	///////////////////////////////////////
	public function setTitle ($title){
		$this->title = $title; 
	}

	public function setIngredients($ingredients){
		$this->ingredients = $ingredients;
	}

	public function setInstructions($instructions){
		$this->instructions = $instructions;
	}

	public function setNbPersons($nbPersons){
		$this->nbPersons = $nbPersons;
	}

	public function setPreparationTime($preparationTime){
		$this->preparationTime = $preparationTime;
	}

	public function setCookingTime($cookingTime){
		$this->cookingTime = $cookingTime;
	}
}