<?php

namespace carlib;

$cars = array();

class Carlib
{
    public function __construct()
    {

    }


    public function registerCar(string $color, string $model)
    {
        global $cars;
        $data = (object) array(
            "color" => $color,
            "model" => $model
        );
        $cars[count($cars)] = $data;
        return $cars;
    }

    public function serializeCars() {
        global $cars;
        return json_encode($cars);
    }
}

?>