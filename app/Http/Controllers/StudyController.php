<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudyController extends Controller
{
    public function index()
    {
        echo "En el index de estudios";
    }


public function show($id)
{
    echo "En el show de estudio 5";
}

public function create()
{
    echo "En el create de estudios";
}

public function edit($id)
{
    echo "En el Edit de estudios";
}


}