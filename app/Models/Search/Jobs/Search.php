<?php

namespace App\Models\Search\Jobs;


class Search
{
	public function run($term)
	{
		$client = new \GuzzleHttp\Client();
		$res = $client->request('GET', config('api.searchapi')."?term=".$term);
		return $res->getBody();

	}
}
