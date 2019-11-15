<?php


namespace NfqHw09;


class SingleRoom extends Room
{
    /**
     * SingleRoom constructor.
     */
    public function __construct(int $roomNumber, int $price)
    {
        $this->setRoomNumber($roomNumber);
        $this->setPrice($price);
        $this->setRoomType("Standard");
        $this->setRestroom(true);
        $this->setBalcony(false);
        $this->setBedCount(1);
        $this->setExtras(array("TV", "air-conditioner"));
    }
}