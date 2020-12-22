<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tasks = [];
        $tasks[] = [
            'title' => 'Наверстать страницу проекты',
            'step_id' => 2,
            'finished' => 1,
            'approved' => 1,
            'deadline' => now()->addMonth(3)
        ];
        $tasks[] = [
            'title' => 'Пагинатсия на сайте',
            'step_id' => 2,
            'finished' => 1,
            'approved' => 1,
            'deadline' => now()->addMonth(2)
        ];
        $tasks[] = [
            'title' => 'Добавить цвета для проекта',
            'step_id' => 1,
            'finished' => 0,
            'approved' => 0,
            'deadline' => now()->addMonth(1)
        ];
        $tasks[] = [
            'title' => 'Сделать сайт адаптивным',
            'step_id' => 1,
            'finished' => 1,
            'approved' => 1,
            'deadline' => now()->addMonth(4)->addDays(3)
        ];
        $tasks[] = [
            'title' => 'Изменить цветь иконок',
            'step_id' => 1,
            'finished' => 0,
            'approved' => 0,
            'deadline' => now()->addDays(3)
        ];
        $tasks[] = [
            'title' => 'Процент оплаты нужны для проектов',
            'step_id' => 3,
            'finished' => 0,
            'approved' => 0,
            'deadline' => now()->addDays(3)
        ];
        $tasks[] = [
            'title' => 'Настроить платежную систему',
            'step_id' => 3,
            'finished' => 0,
            'approved' => 0,
            'deadline' => now()->addDays(3)
        ];
        $tasks[] = [
            'title' => 'У проектов должны быть иконки',
            'step_id' => 3,
            'finished' => 0,
            'approved' => 0,
            'deadline' => now()->addDays(3)
        ];


        DB::table('tasks')->insert($tasks);
    }
}