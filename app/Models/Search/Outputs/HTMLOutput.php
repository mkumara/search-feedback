<?php

namespace App\Models\Search\Outputs;

class HTMLOutput
{
    public function run($results)
    {
        $view = \View::make('results', ['data' => json_decode($results)]);
        $contents = $view->render();

        return $contents;
    }
}
