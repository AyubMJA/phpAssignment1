<?php 
/*
Author: Ayub Ali 000354446
*/


//Class definition for calendar

class Calendar {

    private $month;
    private $year;
    private $day;


    public function __construct($month, $day, $year)
    {
        $this->month = $month;
        $this->day = $day;
        $this->year = $year;
    }

    
    //getters
    public function get_day(){
        return $this->day;
    }

    public function get_month(){
        return $this->month;
    }

    public function get_year(){
        return $this->year;
    }

    //settting
    public function set_day($day){
        $this->day = $day;
    }

    public function set_month($month){
        return $this->month;
    }

    public function set_year($year){
        return $this->year;
    }

    

}

?>