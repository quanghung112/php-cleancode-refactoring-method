<?php

/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 26/10/2018
 * Time: 22:50
 */
class Cylinder
{
    public function getVolume($radius,$height)
    {
        $volume = $this->getPerimeter($radius) * $height + 2 * $this->getBaseArea($radius);
        return $volume;
    }

    /**
     * @param $radius
     * @return float|int
     */
    public function getBaseArea($radius)
    {
        $baseArea = pi() * $radius * $radius;
        return $baseArea;
    }

    /**
     * @param $radius
     * @return float|int
     */
    public function getPerimeter($radius)
    {
        $perimeter = 2 * pi() * $radius;
        return $perimeter;
    }
}