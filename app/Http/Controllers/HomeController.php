<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Search\Features\SearchFeature;

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
}
