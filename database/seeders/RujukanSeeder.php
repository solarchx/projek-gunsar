<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rujukan;

class RujukanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rujukan::create([
            'field1' => 'Value 1',
            'field2' => 'Value 2',
            // Add other fields as necessary
        ]);

        Rujukan::create([
            'field1' => 'Value 3',
            'field2' => 'Value 4',
            // Add other fields as necessary
        ]);

        // You can add more records as needed
    }
}