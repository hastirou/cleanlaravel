<?php

namespace App\Repositories;

use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Models\UserModel;

class UserRepository implements UserRepositoryInterface {
    public function getAll() {
        return UserModel::all();
    }

    public function getById($id) {
        return UserModel::findOrFail($id);
    }

    public function create(array $attributes) {
        return UserModel::create($attributes);
    }

    public function update($id, array $attributes) {
        $model = UserModel::findOrFail($id);
        $model->update($attributes);
        return $model;
    }

    public function delete($id) {
        $model = UserModel::findOrFail($id);
        $model->delete();
        return true;
    }
}
