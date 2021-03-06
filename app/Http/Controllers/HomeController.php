<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Search\Features\SearchFeature;
use App\Models\Comment\Features\CommentFeature;

class HomeController extends Controller
{
	public function index(Request $request)
	{
		return view('home');

	}

    public function search(Request $request)
    {

    	$term = $request->get('term');

    	$feature = new SearchFeature();

    	return $feature->run($term);
    }

    public function saveComment(Request $request)
    {

    	$term = $request->get('term');
    	$comment = $request->get('comment');
    	$user = $request->get('user');

    	$feature = new CommentFeature();

    	return $feature->run($term, $comment, $user);
    }
}
