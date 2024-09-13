<?php

echo "This is my first CLI script in PHP";

//Izveido ciklu, lai izvaditu skaitlu no 1-10

for ($x = 0; $x <= 10; $x++) {
    echo "Number: $x \n";
    
  }

  for ($x = 10; $x > 0; $x--) {
    echo "Number: $x \n";
    
  }


//izveido asociativu  masivu, kuraa ir dati par 3 personam(vards un vecums)
//ar cikla palidzibu izvadit  katras personas datus
//sekojosa formata : "vards: janis, vecums: 19"

$people = [
    ['name' => 'anna', 'age' => 18],
    ['name' => 'aivars', 'age' => 17],
    ['name' => 'arina', 'age' => 20]
];

?>