<?php

namespace App\Models\Comment\Features;

use App\Models\Comment\Jobs\Comment;

class CommentFeature
{
	public function run($term, $comment, $user)
	{
		$job = new Comment();
		$results = $job->run($term, $comment, $user);

		return json_encode($results);
	}

}
