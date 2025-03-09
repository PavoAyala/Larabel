<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RoboticsKit;

class RoboticsKitSeeder extends Seeder
{
    public function run()
    {
        // Creating three robotics kits
        RoboticsKit::create([
            'name' => 'Robotic Arm Kit',
            'description' => 'A robotic arm kit for advanced automation projects.',
            'price' => 150.00,
            'quantity' => 50
        ]);

        RoboticsKit::create([
            'name' => 'Smart Car Kit',
            'description' => 'An autonomous car kit for robotics learning.',
            'price' => 100.00,
            'quantity' => 30
        ]);

        RoboticsKit::create([
            'name' => 'Drone Kit',
            'description' => 'A drone kit for beginners and intermediate learners.',
            'price' => 200.00,
            'quantity' => 40
        ]);
    }
}
