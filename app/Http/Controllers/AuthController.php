<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'Nis' => 3103120218,
            'Name' => 'Tauralala',
            'Phone' => '081314503720',
            'Class' => 'XII RPL 7'
        ];
    }
}
