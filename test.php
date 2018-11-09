<?php
# Check whether the given faces belong to the same person or not.

$src = 'https://static-secure.guim.co.uk/sys-images/Guardian/Pix/pictures/2012/7/9/1341860104423/obama_face.jpg';
$target = 'https://static01.nyt.com/images/2011/07/31/sunday-review/FACES/FACES-jumbo.jpg';

# Your PixLab key
$key = 'My_Pix_Key';
/* Verify */
if( !$pix->get('facecompare',[
	'src' => $src,
	'target' => $target,
	]) ){
	echo $pix->get_error_message()."\n";
	die;
}
echo "Same Face?: ". ($pix->json->same_face?'True':'False') ."\n";
echo "Confidence: ". $pix->json->confidence."\n";
?>
