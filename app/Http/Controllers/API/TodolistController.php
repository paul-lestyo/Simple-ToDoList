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
			'message' => 'Todolist Berhasil Ditambahkan!',
			'data' => $data,
		], 201);
	}

	public function update(Todolist $todolist, TodolistRequest $request) 
	{
		$todolist->update($request->validated());
		return response()->json([
			'success' => true,
			'message' => 'Todolist Berhasil Diubah!',
			'data' => $todolist,
		], 200);
	}

	public function destroy(Todolist $todolist) 
	{
		$todolist->delete();
		return response()->json([
			'success' => true,
			'message' => 'Todolist Berhasil Dihapus!'
		], 200);
	}
}
