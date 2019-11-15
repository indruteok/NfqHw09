<?php


namespace NfqHw09;


class Apartment extends Room
{
    /**
     * SingleRoom constructor.
     */
    public function __construct(int $roomNumber, int $price)
    {
        $this->setRoomNumber($roomNumber);
        $this->setPrice($price);
        $this->setRoomType("Diamond");
        $this->setRestroom(true);
        $this->setBalcony(true);
        $this->setBedCount(4);
        $this->setExtras(array("TV", "air-conditioner", "refrigerator", "kitchen box", "mini-bar", "bathtub", "free Wi-fi"));
    }
}


