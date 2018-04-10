<?php

namespace App\Models\Comment\Jobs;

use App\Models\Eloquent\Feedback;

class Comment
{
	public function run($term, $comment, $user)
	{
		$feedback = new Feedback();
		$feedback->comment = $comment;
		$feedback->user = $user;
		$feedback->term = $term;
		$feedback->save();

		return true;
	}
}
