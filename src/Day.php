<?php
 
include_once "./services/SprintStrategyInterface.php";
include_once "./services/Meeting.php";
include_once "./services/Personal.php";

class Day {
    private $day;

    public function __construct(SprintStrategyInterface $day){
        $this->day = $day;        
    }

    public function getDay($day){
        return $this->day->start($day);
    }
}