<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;
use App\Models\Project;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++) {

            $project = new Project();
            $project->title = $faker->sentence(3);
            $project->description = $faker->text(500);
            $project->slug = Str::slug($project->title, '-');
            $project->save();

        }
    }
}
