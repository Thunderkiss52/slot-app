<?php

namespace App\Repositories;

use App\Models\Slot;

class SlotRepository implements SlotRepositoryInterface
{
    public function all()
    {
        return Slot::all();
    }

    public function create(array $data)
    {
        return Slot::create($data);
    }

    public function delete($id)
    {
        $slot = Slot::findOrFail($id);
        $slot->delete();
    }
}
