<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // User::create([
        //     'name' => 'Saputra Uta',
        //     'email' => 'saputra.uta50@gmail.com',
        //     'password' => bcrypt('12345678'),
        // ]);

        // User::create([
        //     'name' => 'Ayu Devi',
        //     'email' => 'ayudevity@gmail.com',
        //     'password' => bcrypt('12345678'),
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
        ]);

        Category::create([
            'name' => 'UI/UX Design',
            'slug' => 'ui-ux-design',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Introduction to Machine Learning',
        //     'excerpt' => 'Discover the basics of machine learning and its applications. This post will introduce you to key concepts and algorithms used in the field of machine learning...',
        //     'body' => '<p>Introduction to Machine Learning is an essential guide for beginners looking to dive into the world of artificial intelligence. We will cover fundamental concepts such as supervised learning, unsupervised learning, and neural networks.</p> <p>Explore practical examples using popular machine learning libraries like scikit-learn and TensorFlow. Whether you are a student, researcher, or technology enthusiast, this post will provide you with a solid foundation to start your journey in machine learning.</p>',
        //     'slug' => 'introduction-to-machine-learning',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Responsive Web Design with CSS Grid',
        //     'excerpt' => 'Learn how to create responsive web layouts using CSS Grid. This post will guide you through the principles of CSS Grid and how to apply them to design flexible and responsive websites...',
        //     'body' => '<p>Responsive Web Design with CSS Grid is a comprehensive tutorial for web developers aiming to create modern and responsive user interfaces. We will explore the power of CSS Grid for building complex layouts with ease.</p> <p>From defining grid structures to implementing media queries, this post covers everything you need to know to make your websites responsive. Join us on this journey to enhance your web design skills and create visually appealing and adaptive web pages.</p>',
        //     'slug' => 'responsive-web-design-with-css-grid',
        //     'category_id' => 1,
        //     'user_id' => 2,
        // ]);

        // Post::create([
        //     'title' => 'Building RESTful APIs with Laravel',
        //     'excerpt' => 'Discover the process of building RESTful APIs using the Laravel framework. This post will guide you through the steps to create robust and scalable APIs for your web applications...',
        //     'body' => '<p>Building RESTful APIs with Laravel is a hands-on tutorial for developers wanting to learn how to create APIs with the Laravel framework. We will cover topics such as routing, controllers, and authentication.</p> <p>Follow practical examples to implement CRUD operations, handle authentication, and test your APIs. Whether you are a Laravel enthusiast or a developer working on web projects, this post will equip you with the skills to build powerful APIs for your applications.</p>',
        //     'slug' => 'building-restful-apis-with-laravel',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);

        // Post::create([
        //     'title' => 'Getting Started with Docker',
        //     'excerpt' => 'Learn the basics of Docker and containerization. This post will guide you through the installation and usage of Docker for developing and deploying applications...',
        //     'body' => '<p>Getting Started with Docker is an introductory tutorial for developers interested in containerization. Discover the advantages of using Docker for application development and deployment.</p> <p>From installing Docker on your machine to creating and managing containers, this post covers essential concepts and commands. Whether you are a DevOps engineer or a developer, understanding Docker is crucial in modern software development.</p>',
        //     'slug' => 'getting-started-with-docker',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
