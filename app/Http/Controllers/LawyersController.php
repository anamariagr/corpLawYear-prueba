<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lawyer;

class LawyersController extends Controller
{
    public function getLawyers(){
        $lawyers = Lawyer::get();
        return view('lawyers', compact('lawyers'));
        }


    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        return view('lawyers');
    }
}
