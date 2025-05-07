<?php

namespace App\Repositories;

interface SlotRepositoryInterface
{
    public function all();
    public function create(array $data);
    public function delete($id);
}
