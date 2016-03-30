<?php
foreach(glob("attachments/*.{jpg,png}", GLOB_BRACE) as $filename)
{
 if($filename=="attachments/365-ckj2.jpg")
 { 
  echo $filename;
 }
}
if(preg_match('[.(jpeg|jpg|png)]',"365-ckj2.jpg"))
{
 echo "yes";
}
?>