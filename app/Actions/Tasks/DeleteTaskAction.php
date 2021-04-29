<?php


namespace App\Actions\Tasks;


use App\Models\Task;

/**
 * Class DeleteTaskAction
 * @package App\Actions\Tasks
 * @author Ahmed Helal Ahmed
 */
class DeleteTaskAction
{
    public function execute(int $taskId)
    {
        return Task::destroy($taskId);
    }
}
