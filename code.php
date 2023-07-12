<?php

function r3pl4c3m3nt($text){
   
   $normalChar = ['A', 'B', 'E', 'I', 'O', 'S', 'T'];
   $r3pl4c3Char = ['4', '8', '3', '1', '0', '5', '7'];
   
   $text = str_replace($$normalChar, $r3pl4c3Char, $text);
   
   return $text;
   
}

?>
