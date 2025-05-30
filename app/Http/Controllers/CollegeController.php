<?php

namespace App\Http\Controllers;

use App\Models\NameCollege;
use App\Models\Profession;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    public function CollegeName()
    {
        $colleges = NameCollege::all();
        return view("ListCollege", compact("colleges"));
    }
    public function CollegeNameOne(NameCollege $college)
    {
        return view("collegeNameOne", compact("college"));
    }

    public function CollegeSearch(Request $request)
    {
        $colleges = NameCollege::whereRaw("BINARY name LIKE ?", ['%' . $request->search . '%'])->get();
        return view("ListCollege", compact("colleges"));
    }

    public function CollegeSearchProfessial(Request $request)
    {
        $search = $request->search;
        if ($search == "Специальности") {
            $colleges = NameCollege::all();
            return view("ListCollege", compact("colleges"));
        }
        $colleges = NameCollege::whereHas('professions', function ($query) use ($search) {
            $query->where('profession', 'like', '%' . $search . '%');
        })->get();
        return view("ListCollege", compact("colleges"));
    }
}
