<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function Question(Request $request)
    {
        $answersOnly = array_values($request->all());

        $counts = array_count_values($answersOnly);

        $maxCount = max($counts);
        $topAnswers = array_keys($counts, $maxCount);

        $category = Category::where("answer", $topAnswers)->get();

        return redirect()->route("survey")->with(["modal" => $category[0]]);

    }
}
