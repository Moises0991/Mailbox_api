<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(StudentSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(ReportSeeder::class);
        $this->call(NewsSeeder::class);
        $this->call(CommentSeeder::class);
    }
}
