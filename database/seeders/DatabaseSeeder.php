<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create(["name"=>"Mg Mg", "email"=>"mgmg@gmail.com", "password"=>bcrypt("00000000")]);
        
        // categories
        $frameworks = Category::factory()->create(["name"=>"frameworks", "slug"=>"frameworks"]);
        $languages = Category::factory()->create(["name"=>"languages", "slug"=>"languages"]);
        $techniques =  Category::factory()->create(["name"=>"techniques", "slug"=>"techniques"]);
        $testing =  Category::factory()->create(["name"=>"testing", "slug"=>"testing"]);
        $tooling =  Category::factory()->create(["name"=>"tooling", "slug"=>"tooling"]);
        
        // topics
        Topic::factory()->create(["name"=>"alpinejs", "slug"=>"alpinejs", "category_id"=>$frameworks->id]);
        Topic::factory()->create(["name"=>"Authentication", "slug"=>"Authentication", "category_id"=>$techniques->id]);
        Topic::factory()->create(["name"=>"billing", "slug"=>"billing", "category_id"=>$tooling->id]);
        Topic::factory()->create(["name"=>"blade", "slug"=>"blade", "category_id"=>$techniques->id]);
        Topic::factory()->create(["name"=>"clean code", "slug"=>"clean-code", "category_id"=>$techniques->id]);
        Topic::factory()->create(["name"=>"css", "slug"=>"css", "category_id"=>$languages->id]);
        Topic::factory()->create(["name"=>"cypress", "slug"=>"cypress", "category_id"=>$testing->id]);
        Topic::factory()->create(["name"=>"deployment", "slug"=>"deployment", "category_id"=>$techniques->id]);
        Topic::factory()->create(["name"=>"docker", "slug"=>"docker", "category_id"=>$tooling->id]);
        Topic::factory()->create(["name"=>"envoyer", "slug"=>"envoyer", "category_id"=>$tooling->id]);
        Topic::factory()->create(["name"=>"git", "slug"=>"git", "category_id"=>$tooling->id]);
        Topic::factory()->create(["name"=>"inertia", "slug"=>"inertia", "category_id"=>$frameworks->id]);
        Topic::factory()->create(["name"=>"javascript", "slug"=>"javascript", "category_id"=>$languages->id]);
        Topic::factory()->create(["name"=>"laravel", "slug"=>"laravel", "category_id"=>$frameworks->id]);
        Topic::factory()->create(["name"=>"laravel cashier", "slug"=>"laravel-cashier", "category_id"=>$tooling->id]);
        Topic::factory()->create(["name"=>"laravel forge", "slug"=>"laravel-forge", "category_id"=>$tooling->id]);
        Topic::factory()->create(["name"=>"laravel livewire", "slug"=>"laravel-livewire", "category_id"=>$frameworks->id]);
        Topic::factory()->create(["name"=>"laravel mix", "slug"=>"laravel-mix", "category_id"=>$tooling->id]);
        Topic::factory()->create(["name"=>"laravel packages", "slug"=>"laravel-packages", "category_id"=>$tooling->id]);
        Topic::factory()->create(["name"=>"mysql", "slug"=>"mysql", "category_id"=>$tooling->id]);
        Topic::factory()->create(["name"=>"nova", "slug"=>"nova", "category_id"=>$tooling->id]);
        Topic::factory()->create(["name"=>"oop", "slug"=>"oop", "category_id"=>$techniques->id]);
        Topic::factory()->create(["name"=>"php", "slug"=>"php", "category_id"=>$languages->id]);
        Topic::factory()->create(["name"=>"phpstorm", "slug"=>"phpstorm", "category_id"=>$tooling->id]);
        Topic::factory()->create(["name"=>"phpunits", "slug"=>"phpunits", "category_id"=>$testing->id]);
        Topic::factory()->create(["name"=>"queues", "slug"=>"queues", "category_id"=>$techniques->id]);
        Topic::factory()->create(["name"=>"react", "slug"=>"react", "category_id"=>$frameworks->id]);
        Topic::factory()->create(["name"=>"redis", "slug"=>"redis", "category_id"=>$tooling->id]);
        Topic::factory()->create(["name"=>"sql", "slug"=>"sql", "category_id"=>$languages->id]);
        Topic::factory()->create(["name"=>"sublime text", "slug"=>"sublime-text", "category_id"=>$tooling->id]);
        Topic::factory()->create(["name"=>"symfony", "slug"=>"symfony", "category_id"=>$frameworks->id]);
        Topic::factory()->create(["name"=>"tailwind", "slug"=>"tailwind", "category_id"=>$frameworks->id]);
        Topic::factory()->create(["name"=>"typescript", "slug"=>"typescript", "category_id"=>$languages->id]);
        Topic::factory()->create(["name"=>"vim", "slug"=>"vim", "category_id"=>$tooling->id]);
        Topic::factory()->create(["name"=>"visual studio code", "slug"=>"visual-studio-code", "category_id"=>$tooling->id]);
        Topic::factory()->create(["name"=>"vue", "slug"=>"vue", "category_id"=>$frameworks->id]);
        Topic::factory()->create(["name"=>"webpack", "slug"=>"webpack", "category_id"=>$tooling->id]);
        Topic::factory()->create(["name"=>"workshops", "slug"=>"workshops", "category_id"=>$techniques->id]);
    }
}
