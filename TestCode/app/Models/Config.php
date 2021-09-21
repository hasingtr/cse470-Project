<?php 
// this class contains configuration data
// no change in this file
namespace App\Models;

class Config{

	// database

	const DB_HOST = "localhost"; 
	const DB_NAME = "hospital"; 
	const DB_USER = "root"; 
	const DB_PASSWORD = ""; 


	// SYSTEM 

	const SYSTEM_NAME = "HMS470";
	const SLOGAN = "EMR"; // THIS CAN BE SYSTEM'S TITLE\ 


	//METHODS
	// no edit in this method

	public static function redir($page){
		header("Location: $page"); 
	}

	public static function includeD(){

	}


	public static function getMonth(){

		return 2419200;
	}


	public static function getWeek(){

		return 604800;
	}



}