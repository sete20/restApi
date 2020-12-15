<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lesson;

class lessonController extends Controller
{
    public function index()
    {
        $test =  json_encode(lesson::get());
        return $test;
    }
}
