<?php

namespace App\Http\Controllers;

use App\Actions\Tasks\IndexTasksAction;

/**
 * Class IndexTasksController
 * @package App\Http\Controllers
 * @author Ahmed Helal Ahmed
 */
class IndexTasksController
{
    /**
     * @param IndexTasksAction $indexTasksAction
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function __invoke(IndexTasksAction $indexTasksAction)
    {
        $tasks = $indexTasksAction->execute();
        return view('tasks.index', compact('tasks'));
    }
}
