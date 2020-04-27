<?php

class Speedometer {

    const MILESTOKM = 1.60934;

    const KMTOMILES = 0.621371;

    public static function convertMilesToKm(float $speedNumber): float
    {
        return round($speedNumber * self::MILESTOKM, 2);
    }

    public static function convertKmToMiles(float $speedNumber): float
    {
        return round($speedNumber * self::KMTOMILES, 2);
    }

}