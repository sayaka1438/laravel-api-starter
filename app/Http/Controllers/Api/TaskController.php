<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class TaskController extends Controller
{
    public function index(): JsonResponse
    {
        $tasks = Task::all();
        return response()->json($tasks);
    }
    public function store(Request $request): JsonResponse
    {
    }
    public function show(string $id): JsonResponse
    {
        $task = Task::findOrFail($id);
        return response()->json($task);
    }
    public function update(Request $request, string $id): JsonResponse
    {
    }
    public function destroy(string $id): JsonResponse
    {
    }
}
