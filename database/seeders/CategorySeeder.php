<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            "name" => "Информационные технологии",
            "answer" => "A"
        ]);
        Category::create([
            "name" => "Сельское хозяйство",
            "answer" => "B"
        ]);
        Category::create([
            "name" => "Транспорт / Автотехника",
            "answer" => "B"
        ]);
        Category::create([
            "name" => "Легкая промышленность / Мода",
            "answer" => "B"
        ]);
        Category::create([
            "name" => "Медицина",
            "answer" => "D"
        ]);
        Category::create([
            "name" => "Технические и рабочие специальности",
            "answer" => "C"
        ]);
        Category::create([
            "name" => "Строительство и архитектура",
            "answer" => "C"
        ]);
            Category::create([
            "name" => "Образование и воспитание",
            "answer" => "D"
        ]);
            Category::create([
            "name" => "Гуманитарные науки",
            "answer" => "A"
        ]);
        Category::create([
            "name" => "Сфера обслуживания",
            "answer" => "D"
        ]);
    }
}
