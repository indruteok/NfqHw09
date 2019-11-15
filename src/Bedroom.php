<?php


namespace NfqHw09;


class Bedroom extends Room
{
    /**
     * SingleRoom constructor.
     */
    public function __construct(int $roomNumber, int $price)
    {
        $this->setRoomNumber($roomNumber);
        $this->setPrice($price);
        $this->setRoomType("Gold");
        $this->setRestroom(true);
        $this->setBalcony(true);
        $this->setBedCount(2);
        $this->setExtras(array("TV", "air-conditioner", "refrigerator", "mini-bar", "bathtub"));
    }
}

