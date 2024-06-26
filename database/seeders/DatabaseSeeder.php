<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Baju;
use App\Models\JenisBaju;
use App\Models\Penjualan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // JenisBaju::factory()->count(3)->hasBajus(5)->create();

        foreach(Baju::all() as $baju){
            Penjualan::factory()->count(1)->create([
                'bajus_id' => $baju->id,
            ]);
        }
    }
}
