<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{
    public function index()
    {
        return view('pages.teachers');
    }

    public function getAll()
    {
        $teachers = [
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'subject' => 'Math'
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'jane@example.com',
                'subject' => 'Science'
            ],
        ];

        return response()->json($teachers);
    }

    public function getById($id)
    {
        if ($id != 1) {
            return response()->json([
                'message' => 'Teacher not found'
            ], 404);
        }

        $teacher = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'subject' => 'Math'
        ];

        return response()->json($teacher);
    }

    public function create(Request $request)
    {
        $v = Validator::make($request->all(), [
            'name' => 'required|string|min:3|max:15',
            'email' => 'required|email|max:10',
            'subject' => 'required|min:3|max:50'
        ]);

        if ($v->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $v->errors()
            ], 422);
        }

        $teacher = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject
        ];

        return response()->json($teacher, 201);
    }
}
