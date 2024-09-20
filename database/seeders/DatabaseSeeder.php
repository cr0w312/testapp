<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Partnership;
use App\Models\Order;
use App\Models\OrderType;
use App\Models\Worker;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //User::factory(10)->create();
        
        OrderType::create(['name'=>'Погрузка/Разгрузка']);
        OrderType::create(['name'=>'Такелажные работы']);
        OrderType::create(['name'=>'Уборка']);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Partnership::factory(10)->create();
        Worker::factory(10)->create();
        Order::factory(5)->create();
    }
}
