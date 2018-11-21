<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\FbService;

class newsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Services\FbService  $fb
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, FbService $fb): Response
    {
        return view('news');
    }
}
