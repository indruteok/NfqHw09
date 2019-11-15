<?php

namespace NfqHw09;


use Nfq\Classes\ReservationException;

class Room implements ReservableInterface
{
    private $roomNumber;
    private $price;
    private $roomType;
    private $restroom;
    private $balcony;
    private $bedCount;
    private $extras;

    /**
     * Room constructor.
     * @param $roomType
     * @param $price
     * @param $restroom
     * @param $balcony
     * @param $bedCount
     * @param $roomNumber
     * @param $extras
     */

    public function __construct(int $roomNumber, int $price, string $roomType, bool $restroom, bool $balcony, int $bedCount, array $extras)
    {
        $this->roomNumber = $roomNumber;
        $this->price = $price;
        $this->roomType = $roomType;
        $this->restroom = $restroom;
        $this->balcony = $balcony;
        $this->bedCount = $bedCount;
        $this->extras = $extras;
    }


    /**
     * @return mixed
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * @param mixed $roomType
     */
    public function setRoomType($roomType)
    {
        $this->roomType = $roomType;
    }

    /**
     * @return mixed
     */
    public function getRestroom()
    {
        return $this->restroom;
    }

    /**
     * @param mixed $restroom
     */
    public function setRestroom($restroom)
    {
        $this->restroom = $restroom;
    }

    /**
     * @return mixed
     */
    public function getBalcony()
    {
        return $this->balcony;
    }

    /**
     * @param mixed $balcony
     */
    public function setBalcony($balcony)
    {
        $this->balcony = $balcony;
    }

    /**
     * @return mixed
     */
    public function getBedCount()
    {
        return $this->bedCount;
    }

    /**
     * @param mixed $bedCount
     */
    public function setBedCount($bedCount)
    {
        $this->bedCount = $bedCount;
    }

    /**
     * @return mixed
     */
    public function getRoomNumber()
    {
        return $this->roomNumber;
    }

    /**
     * @param mixed $roomNumber
     */
    public function setRoomNumber($roomNumber)
    {
        $this->roomNumber = $roomNumber;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getExtras()
    {
        return $this->extras;
    }

    /**
     * @param mixed $extras
     */
    public function setExtras($extras)
    {
        $this->extras = $extras;
    }

    public function addReservation($reservation)
    {
        if($this->reservations[] = $reservation) {
            return true;
        }
        return false;
    }

    public function removeReservation($reservation)
    {
        if (($key = array_search($reservation, $this->reservations)) !== false) {
            unset($this->reservations[$key]);
            return true;
        }
        return false;
    }

    public function __toString()
    {
        return sprintf(
            '%s room (number: %d) %s. Extras: %s. price is %d€',
            $this->roomType,
            $this->roomNumber,
            $this->balcony === false ? 'has restroom' : 'has restroom and balcony',
            implode(', ', $this->extras),
            $this->price
        );
    }
}
