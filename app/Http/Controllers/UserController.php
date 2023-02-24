<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $repository;

    public function __construct(UserRepositoryInterface $repository) {
        $this->repository = $repository;
    }

    public function index() {
        $data = $this->repository->getAll();
        return view('user.index', compact('data'));
    }

    public function create() {
        return view('user.create');
    }

    public function store(Request $request) {
        $attributes = $request->all();
        $this->repository->create($attributes);
        return redirect()->route('user.index');
    }

    public function edit($id) {
        $model = $this->repository->getById($id);
        return view('user.edit', compact('model'));
    }

    public function update(Request $request, $id) {
        $attributes = $request->all();
        $this->repository->update($id, $attributes);
        return redirect()->route('user.index');
    }

    public function destroy($id) {
        $this->repository->delete($id);
        return redirect()->route('user.index');
    }
}