<?php 

namespace App\Service;

class Month {

    public $days = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];

    private $months = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 
    'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Decembre'];

    /**
     * @param $month
     */
    public $month;

    /**
     * @param year
     */
    public $year;

    public function __construct(?int $month = null, ?int $year = null) {

        if($month === null || $month < 1 || $month > 12) {

            $month = intval(date('m'));
        }
        if($year === null ) {

            $year = intval(date('Y'));
        }
        
        $this->month = $month;
        $this->year= $year;
    }

    public function toString (): string {

        return $this->months[$this->month - 1].' '.$this->year;
    }

    /**
     * Renvoie le premier jour du mois 
     */
    public function getStartingDay (): \DateTimeInterface {

        return new \DateTimeImmutable("{$this->year}-{$this->month}-01");
    }


    /**
     * Renvoie le nombre de semaine dans le mois
     */
    public function getWeeks (): int {

        //creer une nouvelle date 
        $start = $this->getStartingDay();
        
        /**ici j'ajoute un nouveau mois moins 1 jour
         * cela me permet daller au dernier jour du mois en cours 
         * */
        $end = $start->modify('+1 month -1 day');
        
        $startweek = intval($start->format('W'));
        $endweek = intval($end->format('W'));

        if($endweek === 1){
            $endweek = intval($end->modify('-7 days')->format('W')) + 1;
        }
        //var_dump($endweek);
        $weeks = $endweek - $startweek +1;

        if($weeks < 0) {

            $weeks = intval($end->format('W')); 
        }
        return $weeks;
        
    }

    /**
     * Est ce que le jour est dans le mois en cours 
     * @param \DateTimeInterface $date
     * @return bool
     */
    public function withinMonth(\DateTimeInterface $date): bool {
        
        return $this->getStartingDay()->format('Y-m') === $date->format('Y-m');
    }

    /**
     * Envoi le mois suivant 
     */

    public function nextMonth(): Month {

        $month = $this->month + 1;
        $year = $this->year;

        if($month > 12) {
            $month = 1;
            $year += 1;
        }

        return new Month($month, $year);
    }

    /**
     * Envoi le mois precedent 
     */
    public function previousMonth(): Month {

        $month = $this->month - 1;
        $year = $this->year;

        if($month < 1) {
            $month = 12;
            $year -= 1;
        }

        return new Month($month, $year);
    }
    
}