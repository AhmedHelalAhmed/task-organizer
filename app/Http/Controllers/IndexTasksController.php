<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

/**
 * Class IndexTasksController
 * @package App\Http\Controllers
 * @author Ahmed Helal Ahmed
 */
class IndexTasksController
{
    /**
     * @return Application|Factory|View
     */
    public function __invoke()
    {
        return view('tasks.index');
    }
}
