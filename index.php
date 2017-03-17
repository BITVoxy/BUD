<?php 
	require 'vendor/autoload.php';

	Flight::register('db', 'medoo', array(array('database_type'=>'sqlite', 'database_file'=>'data.db')));
	//var_dump( flight::db()->get("account","age",["age" => 25]) );
	//var_dump( flight::db()->sum("account", "money") );

	use duncan3dc\Laravel\Blade; //cannot be registered so far
	//Blade::addPath("/www/custom/views");
	//echo Blade::render("index");

	function convertHashtags($str){
		$regex = "/#+([a-zA-Z0-9_]+)/";
		$str = preg_replace($regex, '<a href="hashtag.php?tag=$1">$0</a>', $str);
		return($str);
	}
	$string = "I am #UberSilly and #MegaPlayful online";
	$string = convertHashtags($string);
	//echo $string;
	if(isset($_GET["tag"])){
		$tag = preg_replace('#[^a-z0-9_]#i', '', $_GET["tag"]);
		// $tag is now sanitized and ready for database queries here
		$fulltag = "#".$tag;
		echo $fulltag;
	}
	// common configurations
	Flight::set('brand', 'BITVoxy Open Source');
	Flight::set('brand.bud', 'PHPBud');
	Flight::set('global.github', 'https://github.com/BITVoxy');
	Flight::set('facebook', 'https://facebook.com/BITVoxy');
	Flight::set('twitter', 'https://twitter.com/BITVoxy');
	Flight::set('github', 'https://github.com/BITVoxy/BUD');

	Flight::route('/', function(){ 
		print Blade::render("pages.home", ['title' => Flight::get('brand') ] ); 
	});
	Flight::route('/bud', function(){ 
		print Blade::render("pages.bud", ['title' => Flight::get('brand.bud') ] ); 
	});
	Flight::route('/terms', function(){ 
		print Blade::render("pages.terms", ['title' => 'Terms'] ); 
	});
	Flight::route('/policy', function(){ 
		print Blade::make("pages.policy", ['title' => 'Privacy Policy'] ); 
	});
	Flight::route('/contact', function(){ print Blade::make("pages.contact"); });

	Flight::start();
 ?>