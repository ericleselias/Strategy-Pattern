<?php 

class Personal implements SprintStrategyInterface {
    public function start($day){
        if($day == 3){
            $message = 'Today is gym day';
        }else if($day == 5){
            $message = 'Today is running day';
        }else{
            $message = 'You have no appointment today';
        }
        return $message;
    }
}

?>