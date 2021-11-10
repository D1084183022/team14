<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    function computeBMI(){
        return "Hello. We need to compute BMI.";
    }
}
    function greeting($name)
    {
        return "Hello." . $name . "Good to seet you!";
    }
    function bmi($weight=78,$height=171)
{
        return "您的身高." . $height . "您的體重:" . $weight;
}

