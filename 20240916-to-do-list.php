<?php


$taskList = [
        "izpildit majasdarbu",
        "aiziet gulet laicigi"
];
// 1. while cilks
// 2. izvelne
// 3. switch case nosacijumi , kas apstrada lietotaja izvelni
// 4. izveidojam testa datus


$continue = 'y';
do {
    echo "Uzdevumu parvaldnieks\n";
    echo "Izvadit visu uzdevumu sarakstu => 1\n ";
    echo "Ievadit jaunu uzdevumu => 2\n ";
    echo "Apskatit vienu uzdevumu => 3\n ";
    echo "Iziet => 4 \n";

    $choice = readLine("Izvelies darbibu: ");

    switch ($choice) {
        case 1:
            echo "\n";
          // foreach($taskList as $task){
          //   echo ""
          // }

          for($i = 0; $i < count($taskList); $i++){
            $id = $i + 1;
            echo "$id" . ".$taskList[$i] \n";
          }
          echo "\n";
          break;
        case 2:
          echo  "to be implemented";
          break;
        case 3:
          echo  "to be implemented";
          break;
        case 4:
          $continue = null;
          echo "Goodbye!";
          break;

      }
    
} while ($continue == 'y');