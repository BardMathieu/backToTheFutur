<?php

require 'TimeTravel.php';
$timeTravel = new TimeTravel();
$timeTravel->start->setDate(1985, 12, 31);
echo $timeTravel->getInfoTravel();
echo "<hr>";
$interval = new DateInterval('PT1000000000S');
echo "Doc se trouve en ".$timeTravel->findDate($interval);
echo "<hr>";
$timeTravel->end->setDate(1954, 04, 23);
$timeTravel->start->setDate(1985, 12, 31);
$interval= new DateInterval('P1M8D');
$inter =  new DatePeriod($timeTravel->end,$interval,$timeTravel->start);
$arret = $timeTravel->backToFutureStepByStep($inter);
echo "les étapes sont: <br>";
$i=1;
foreach ($arret as $item){
    echo "l'étape ".$i." est en ".$item."<br>";
    $i+=1;
}