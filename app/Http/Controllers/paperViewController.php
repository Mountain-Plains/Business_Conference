<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Submission;

class paperViewController extends Controller
{
	public function reviewUpdatePost(Request $request)
	{
		$paper = Submission::where('id', $request['id'])
               ->take(1)
               ->get();
		$paper[0]->isReviewed = $request['isReviewed'] == "reviewed" ? true : false;
		$paper[0]->save();

		return view('submissions');
	}

}
