<?php


namespace NfqHw09;



interface ReservableInterface
{
    public function addReservation($reservation);
    public function removeReservation($reservation);
}