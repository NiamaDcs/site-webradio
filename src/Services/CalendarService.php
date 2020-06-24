<?php 

namespace App\Services;
use App\Services\Month;

class CalendarService {
    function myCalen ($month, $year) {
        
        $month = new Month($month, $year);
    
        $start = $month->getStartingDay();

        $start = $start->format('N') === '1' ? $start : $month->getStartingDay()->modify('last monday');

        $weeks = $month->getWeeks();

        $end = $start->modify('+'.(6 + 7 * ($weeks - 1)).'days'); 
    
        $calendar = "<div class='calendar1'>";

        $calendar.="<table class='calendar__table calendar__table--".$weeks."weeks'>";
       
        for ($i = 0; $i < $weeks; $i++){

            $calendar.="<tr>";

            foreach($month->days as $k => $day) {
                $date = $start->modify("+".($k + $i * 7)."days");
                $isToday = date('Y-m-d') === $date->format('Y-m-d');

                $verifyDAyDisplay = $month->withinMonth($date) ? '' : 'calendar__othermonth';
                   
                $verifyToday = $isToday ? 'is-today' : '';
                
                $calendar.="<td class='".$verifyDAyDisplay.' '.$verifyToday. "'>";

                if($i === 0) {
                    $calendar.= "<div class='calendar__weekday'>".$day."</div>";
                }
                $calendar.="<a class='calendar__day' id='mydateEvent' href=''>".$date->format('d')."</a></td>";
            }
            $calendar.="</tr>";
        }
        $calendar.="</table>";

        $calendar.="<a href='/timeline' id='addEvent' class='calendar__button'>+</a></div>";

        return $calendar;
    }
}