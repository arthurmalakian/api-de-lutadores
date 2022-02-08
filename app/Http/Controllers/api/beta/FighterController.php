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
        return Fighter::factory()->count($amount)->make();
    }
}
