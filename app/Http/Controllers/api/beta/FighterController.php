<?php

namespace App\Http\Controllers\api\beta;

use App\Http\Controllers\Controller;
use App\Models\Fighter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FighterController extends Controller
{
    public function index($amount)
    {
        dd(Http::get('https://mipsum.herokuapp.com/frases/2')->json('frase'));
        return Fighter::inRandomOrder()->limit($amount)->get();
    }
}
