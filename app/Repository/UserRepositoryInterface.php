<?php

namespace App\Repository;

use App\Models\User;

interface UserRepositoryInterface
{
    public function list();
    public function findById(int $id): User;
    public function storeOrUpdate(int $id = null, array $data);
    public function destroyById($id);
    public function searchByName($data);
}
