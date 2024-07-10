<?php

namespace App\Repository;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserRepositoryInterface
{
    public function list()
    {
        return User::paginate(10);
    }

    public function findById(int $id): User
    {
        return User::findOrFail($id);
    }

    public function storeOrUpdate(int $id = null, array $data)
    {
        $data["password"] = Hash::make($data["password"]);

        if (is_null($id)) {
            return User::create($data);
        }

        return $this->findById($id)->update($data);
    }

    public function destroyById($id)
    {
        return $this->findById($id)->delete();
    }

    public function searchByName($data)
    {
        return User::where("name", "LIKE", "%{$data["name"]}%")->get();
    }
}
