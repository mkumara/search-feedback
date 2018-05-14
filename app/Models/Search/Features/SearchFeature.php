<?php

namespace App\Models\Search\Features;

use App\Models\Search\Jobs\Search;
use App\Models\Search\Outputs\HTMLOutput;

class SearchFeature
{
    public function run($term)
    {
        $job = new Search();
        $results = $job->run($term);

        $output = new HTMLOutput();

        return $output->run($results);
    }
}
