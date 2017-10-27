<?php
namespace App\Support;

trait ResizeImage{

	// protected $filename = 'test.jpg';
	// protected $percent = 0.5;
	// File and new size
	
	public function resize($filename,$percent ){
		// Content type
	header('Content-Type: image/jpeg');

	// Get new sizes
	list($width, $height) = getimagesize($filename);
	$newwidth = $width * $percent;
	$newheight = $height * $percent;

	// Load
	$thumb = imagecreatetruecolor($newwidth, $newheight);
	$source = imagecreatefromjpeg($filename);

	// Resize
	imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

	// Output
	imagejpeg($thumb);

	}

	

}
?>