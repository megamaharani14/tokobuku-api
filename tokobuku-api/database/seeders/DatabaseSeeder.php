<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Buku;
use App\Models\Kategori;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Buku::factory(10)->create();
        // Kategori::factory(10)->create();
    }
}
