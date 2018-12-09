>?php 
require 'vendor/autoload.php';

$array = array(
  "first_name" => "Michael", 
  "last_name" => "Megue",
  "dob" => "14-11-89",
  "sex" => "Male"
);

$name = array_get($array, "sex");
echo $name;
