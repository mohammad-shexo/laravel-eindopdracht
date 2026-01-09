<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\News;
use App\Models\FaqCategory;
use App\Models\Faq;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Admin user (VERPLICHT)
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@ehb.be',
            'password' => Hash::make('Password!321'),
            'is_admin' => true,
        ]);

        // Normale user
        User::create([
            'name' => 'user',
            'email' => 'user@test.be',
            'password' => Hash::make('password'),
            'is_admin' => false,
        ]);

        // News item
        $news = News::create([
            'title' => 'Welcome to the website',
            'content' => 'This is the first news item created by the seeder.',
            'published_at' => now(),
        ]);

        // FAQ category
        $category = FaqCategory::create([
            'name' => 'General',
        ]);

        // FAQ question
        Faq::create([
            'faq_category_id' => $category->id,
            'question' => 'How do I create an account?',
            'answer' => 'You can register using the register page.',
        ]);
    }
}

