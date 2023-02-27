<?php

  /* 
  Variable sistem
  variable bulilt in php (Var
  yang sudah ada di php)

  */
  echo $_SERVER["DOCUMENT_ROOT"];

  echo "<br><br>";

  /*
   Variable user
   variable yang dibuat user
   */

   $name = "Zan";
   $age = 17;
   $weight = 50.5;

   $name = "Fauzan";

   echo "Nama saya adalah  $name";

  /*
    Variable konstan
    variable yang tidak bisa diubah nilainya
	  1. Menggunakan define | define('fruit', "Apel");
	  2. Menggunakan const  | const fruit = "Apel";
  */
  echo "<br><br>";
  define("SITE_NAME", "Elena");
  echo SITE_NAME;
   ?>