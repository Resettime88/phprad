<?php
/**
 * Menu Items
 * All Project Menu
 * @category  Menu List
 */

class Menu{
	
	
	public static $navbartopleft = array(
		array(
			'path' => 'home', 
			'label' => 'Home', 
			'icon' => ''
		),
		
		array(
			'path' => 'category', 
			'label' => 'Category', 
			'icon' => ''
		),
		
		array(
			'path' => 'post/add', 
			'label' => 'Post', 
			'icon' => '','submenu' => array(
		array(
			'path' => 'post/Index', 
			'label' => 'Post', 
			'icon' => ''
		),
		
		array(
			'path' => 'post/category', 
			'label' => 'Category', 
			'icon' => ''
		)
	)
		),
		
		array(
			'path' => 'users', 
			'label' => 'Users', 
			'icon' => ''
		)
	);

	
	
	public static $name = array();

}