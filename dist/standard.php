<?php session_start();
//RANDOM CHARACTER GENERATOR
function random($length){$str="";
$characters=array_merge(range('A','Z'),range('a','z'),range('0','9'));
$max=count($characters)-1;
for($i=0;$i<$length;$i++){
$rand=mt_rand(0,$max);
$str.=$characters[$rand];}return $str;}
//CAPTCHA CONFIGURATION
$_SESSION['captcha']=random(7);
$config=Array(
'canvas'=>Array(
'width'=>75,
'height'=>25,
'background'=>Array(
'red'=>0,'green'=>0,'blue'=>0)),
'text'=>Array(
'posx'=>5,'posy'=>5,
'color'=>Array(
'red'=>255,'green'=>255,'blue'=>255),
'string'=>$_SESSION['captcha']),
'imagethickness'=>15,
'content-type'=>'png');
//CAPTCHA CREATE
$image = imagecreate($config['canvas']['width'],$config['canvas']['height']); 
$background_color = imagecolorallocate($image,$config['canvas']['background']['red'],$config['canvas']['background']['green'],$config['canvas']['background']['blue']); 
$text_color = imagecolorallocate($image,$config['text']['color']['red'],$config['text']['color']['green'],$config['text']['color']['blue']); 
imagesetthickness($image,$config['imagethickness']);
imagestring($image,100,$config['text']['posx'],$config['text']['posy'],$config['text']['string'],$text_color); 
header("Content-Type: image/".$config['content-type']);
imagepng($image); 
imagedestroy($image);
?>