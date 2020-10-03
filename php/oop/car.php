<?php 

/**
 * 
 */
class Car 
{

//propties
	public $model;
	public $year;
	public $color;

//method
	function __construct($model,$year,$color)
	{
		$this->model = $model;
		$this->year = $year;
		$this->color = $color;

	}


}

 ?>