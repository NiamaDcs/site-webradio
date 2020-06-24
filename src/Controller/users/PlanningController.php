<?php

namespace App\Controller\users;

use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Services\Month;
use App\Services\CalendarService;

    /**
     * @Route("/user/planning")
     */
class PlanningController extends BaseController{

     /**
     * @Route("/", name="profile.planning.index", methods={"GET"})
     */
    public function index(): Response {

        $cal = new CalendarService();

        $dateComponents = getdate();
        $month = $dateComponents['mon'];
        $year = $dateComponents['year'];
       
        $monthName = $dateComponents['month'];

        $calendar = $cal->myCalen($month, $year);

        return $this->render('users/planning/base.html.twig', [
            'calendar' => $calendar,
            'monthName' => $monthName,
            'year' => $year,
        ]);
    }

    /**
     * @Route("/profile/planning/edit", name="profile.planning.edit")
     */
    public function edit(): Response {
        return $this->render('users/planning/base.html.twig');
    }

    /**
     * @Route("/profile/planning/delete", name="profile.planning.delete")
     */
    public function delete(): Response {
        return $this->render('users/planning/base.html.twig');
    }

    /**
     * @Route("/profile/planning/next", name="profile.planning.nextMonth")
     */
    public function nextMonth() {
         
        $cal = new CalendarService();

        $dateComponents = getdate();
        $month = $dateComponents['mon'];
        $year = $dateComponents['year'];

        $month = $this->month + 1;
        $year = $this->year;

        if($month > 12) {
            $month = 1;
            $year += 1;
        }

        return new Month($month, $year);
    }

    /**
     * @Route("/profile/planning/previousMonth", name="profile.planning.previousMonth")
    */
    public function previousMonth() {

        $cal = new CalendarService(); 

        $dateComponents = getdate();
        $month = $dateComponents['mon'];
        $year = $dateComponents['year'];

        $month = $this->month - 1;
        $year = $this->year;

        if($month < 1) {
            $month = 12;
            $year -= 1;
        }

        return new $cal->myCalen($month, $year);
    }

     /**
     * @Route("/timeline", name="profile.timeline.index")
     */
    public function timeline (): Response {

        return $this->render('users/Timeline/base.html.twig');
    }
}