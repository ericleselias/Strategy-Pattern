<?php

class Meeting implements SprintStrategyInterface {
 
    public function start($day){
        if($day == 1){
            $message = 'Today is our sprint meeting at 8am';
        }elseif($day == 2){
            $message = 'Today is our weekly software development meeting at 9am';
        }else{
            $message = 'We not have any meeting today';
        }
        return $message;
    }
}