<?php
error_reporting(E_ALL);
ini_set('display_error',1);

class CalendarX {
    private $month;
    private $year;
    private $day;

    //private $days_of_week = array('S','M','T','W','TH','F','S');
    //private $num_of_days;

    public function __construct($month)
    {
        $this->month = $month;    
    }

    // Getter

    public function get_Month(){
        return $this->month;
    }

    public function get_Day(){
        return $this->day;
    }

    public function get_Year(){
        return $this->year;
    }
}
?>