<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\TodolistRequest;
use App\Models\Todolist;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    public function index() 
	{
		return response()->json(Todolist::get()->toTree());
	}

	public function store(TodolistRequest $request) 
	{
		$data = Todolist::create($request->validated());
		return response()->json([
			'success' => true,
			'message' => 'Todolist Berhasil ditambahkan!',
			'data' => $data,
		], 201);
	}
}
