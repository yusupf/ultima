<?php

namespace App\Http\Controllers\Management;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Question;

class QuestionController extends Controller
{
    public function index(){
        $question = Question::whereNull('deleted_at')->get();
        return view('management.question.index', compact('question'));
    }

    public function new(){
        $question = Question::whereNull('deleted_at')->get();
        return view('management.question.new', compact('question'));
    }

    public function newPost(Request $request){
        dd($request->all());
    }

    public function edit(){
        $question = Question::whereNull('deleted_at')->get();
        return view('management.question.edit', compact('question'));
    }

    public function editPost(Request $request){
        dd($request->all());
    }

}
