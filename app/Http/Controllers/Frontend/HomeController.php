<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AnswerQuiz;
use App\Models\Quiz;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data   =   [
            'setting'=>Setting::first(),
            'quizs'=>Quiz::get(),
        ];
        return view('frontend.index', $data);
    }

    public function store(Request $request)
    {

        
       foreach($request->name as $row){
            $data = explode('/',$row);
            AnswerQuiz::create([
                'name' => $data[0],
                'quz' => $data[1],
                'text' => $request->text,
            ]);

       }

        return redirect()->route('home');
    }
}
