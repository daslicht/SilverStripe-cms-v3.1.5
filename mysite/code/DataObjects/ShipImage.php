<?php


class ShipImage extends DataObject{ 
	
	private static $db = [
		'description' => 'Text', 
		'featured' => 'Boolean',
		'Sort' => 'Int'
	]; 

	private static $has_one = [
		'Image' => 'Image', 
		'Ship' => 'Ship'
	];

}