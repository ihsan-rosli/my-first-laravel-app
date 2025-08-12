<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        // Create data to pass to the view
        $data = [
            'name' => 'Muhammad Ihsan',
            'title' => 'Laravel Developer',
            'skills' => [
                'PHP Programming',
                'Laravel Framework',
                'Database Design',
                'Web Development',
                'Problem Solving'
            ],
            'projects' => [
                ['name' => 'My First Laravel App', 'status' => 'In Progress'],
                ['name' => 'Personal Blog', 'status' => 'Planning'],
                ['name' => 'Task Manager', 'status' => 'Ideas']
            ]
        ];

        return view('about', $data);
    }
}
