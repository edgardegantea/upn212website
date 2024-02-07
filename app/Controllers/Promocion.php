<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Promocion extends BaseController
{
    public function index()
    {
        return view('promocion/index');
    }
}
