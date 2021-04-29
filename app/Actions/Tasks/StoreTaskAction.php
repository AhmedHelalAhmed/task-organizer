<?php

namespace App\Actions\Tasks;

use App\Models\Task;

/**
 * Class StoreTaskAction
 * @package App\Actions\Tasks
 * @author Ahmed Helal Ahmed
 */
class StoreTaskAction
{
    /**
     * @param $data
     */
    public function execute($data)
    {
        Task::create($data);
    }
}
