<?php

use App\TaskStatus;
use Illuminate\Database\Seeder;

class TaskStatusTableSeeder extends Seeder
{
    public function run()
    {
        $taskStatuses = [[
            'id'         => '1',
            'name'       => 'Open',
            'created_at' => '2019-09-25 08:14:54',
            'updated_at' => '2019-09-25 08:14:54',
        ],
            [
                'id'         => '2',
                'name'       => 'In progress',
                'created_at' => '2019-09-25 08:14:54',
                'updated_at' => '2019-09-25 08:14:54',
            ],
            [
                'id'         => '3',
                'name'       => 'Closed',
                'created_at' => '2019-09-25 08:14:54',
                'updated_at' => '2019-09-25 08:14:54',
            ]];

        TaskStatus::insert($taskStatuses);
    }
}
