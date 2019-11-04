<?php

require "vendor/autoload.php";

use GDText\Box;
use GDText\Color;


// Carving RGB codes out of HEX codes
list($r, $g, $b) = sscanf($_POST['color'], "#%02x%02x%02x");
list($sr, $sg, $sb) = sscanf($_POST['shadowcolor'], "#%02x%02x%02x");

// Making a Image Object
$im = imagecreatefromjpeg($_FILES['media']['tmp_name']);
// Fetching Sizes of the Image
$sizes = getimagesize($_FILES['media']['tmp_name']);

// Main BOX
$box = new Box($im);
// Setting Up Font for editing
$box->setFontFace('font.ttf');
$box->setFontColor(new Color($r, $g, $b));
$box->setTextShadow(new Color($sr, $sg, $sb, 50), 2, 2);
$box->setFontSize($_POST['fontsize']);
// Setting Up Margin
$box->setBox(20,20, $sizes[0]- 40, $sizes[1]-40);
// Text Alignment
$box->setTextAlign($_POST['horizontal'], $_POST['vertical']);
$box->draw($_POST['status']);


// WaterBox
$waterbox = new Box($im);
// Setting Up Font for editing
$waterbox->setFontFace('font.ttf');
$waterbox->setFontColor(new Color($r, $g, $b));
$waterbox->setTextShadow(new Color($sr, $sg, $sb, 50), 2, 2);
$waterbox->setFontSize(30);
// Setting Up Margin
$waterbox->setBox(20,20, $sizes[0]- 40, $sizes[1]-40);
// Text Alignment
$waterbox->setTextAlign('center', 'bottom');
$waterbox->draw("Fahmid Hasna Anabi");

// Changing Header Information for treating this page as an image.
header("Content-Disposition: attachment");
header('Content-Disposition: attachment; filename="image.jpg"');
header("Content-Type: image/jpeg");
imagejpeg($im);
