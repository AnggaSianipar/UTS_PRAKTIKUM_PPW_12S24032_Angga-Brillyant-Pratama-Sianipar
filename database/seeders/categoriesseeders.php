<?php

namespace Database\Seeders;

use App\Models\categories;
use Illuminate\Database\Seeder;

class categoriesseeders extends Seeder
{
    public function run(): void
    {
        Kategori::factory()->count(3)->create();
    }
}