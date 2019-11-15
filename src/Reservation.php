<?php


namespace NfqHw09;


class Reservation implements ReservableInterface
{
    private $startDate;
    private $endDate;
    private $guest;

    private static $reservations = array();

    /**
     * Reservation constructor.
     * @param $startDate
     * @param $endDate
     * @param $guest
     */
    public function __construct($startDate, $endDate, Guest $guest)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->guest = $guest;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @return mixed
     */
    public function getGuest()
    {
        return $this->guest;
    }

    /**
     * @param mixed $guest
     */
    public function setGuest($guest)
    {
        $this->guest = $guest;
    }

    public function getAllReservations()
    {
        return self::$reservations;
    }


    public function addReservation($reservation)
    {
        array_push(self::$reservations, $reservation);
    }

    public function removeReservation($reservation)
    {
        // TODO: Implement removeReservation() method.
    }
}