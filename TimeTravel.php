<?php


class TimeTravel
{
    public $start;
    public $end;

    public function __construct()
    {
        $this->start= new DateTime();
        $this->end= new DateTime();
    }
    public function getInfoTravel()
    {
        $travel = $this->start->diff($this->end);
        return $travel->format("Il y a %Y années, %M mois, %D jours, %H heures, %I minutes et %S secondes entre les deux dates.");
    }
    public function findDate(DateInterval $interval)
    {
        $diff = $this->start->sub($interval);
        return $diff->format('Y-m-d');
    }
    public function backToFutureStepByStep(DatePeriod $inter)
    {
        foreach ($inter as $value) {
            $arret[] = $value->format('M d Y - h:m ');
        }
        return $arret;
    }
}