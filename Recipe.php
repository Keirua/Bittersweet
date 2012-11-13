<?php

class Recipe{
	protected $title;
	protected $ingredients;
	protected $instructions;

	public function getTitle(){
		return $this->title();
	}

	public function getIngredients(){
		return $this->ingredients;
	}

	public function getInstructions(){
		return $this->instructions;
	}

	public function setTitle ($title){
		$this->title = $title; 
	}

	public function setIngredients($ingredients){
		$this->ingredients = $ingredients;
	}

	public function setInstructions($instructions){
		$this->instructions = $instructions;
	}
}