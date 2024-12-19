<?php

function carpma($sayi1, $sayi2){
	//echo $sayi1*$sayi2;
    return $sayi1*$sayi2;
}  

carpma(10,200); //return ile çalışması için echo'yu buraya yazmamız gerekiyor.

function ornek($sayi = NULL){
  if($sayi == NULL)
  {
    echo "Sayı belirtmediniz.";
  }
  elseif (!is_int($sayi)) 
  {
	echo "Geçerli bir sayi değeri belirtiniz.";
  } 
  else{
for ($i=1; $i <$sayi ; $i++) { 
  	echo "Sayi arttiriliyor : $i <br>";
  }
 }
}

ornek();
ornek("deneme");
ornek(50);

 //Eğer herhangi bir değer girilmez ise NULL olarak çalışacak.