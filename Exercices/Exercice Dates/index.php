<?php
// set the default timezone to use. Available since PHP 5.1
date_default_timezone_set('UTC');


// Prints something like: Monday
echo date("l d F Y")."<br>";
echo date("M jS Y" )."<br>";
echo date("d/m/Y H:m:s a")."<br>";
echo date("d M Y, H:m:s")."<br>";
echo date(DATE_RFC822)."<br>";