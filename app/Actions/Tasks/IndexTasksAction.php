<?php


namespace App\Actions\Tasks;

use App\Models\Task;

/**
 * Class IndexTasksAction
 * @package App\Actions\Tasks
 * @author Ahmed Helal Ahmed
 */
class IndexTasksAction
{
    /**
     * @return Task[]|\Illuminate\Database\Eloquent\Collection
     */
    public function execute()
    {
        return Task::all();
    }
}
