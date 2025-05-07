<?php

namespace App\Services;

use App\Repositories\SlotRepositoryInterface;

class SlotService
{
    protected $slotRepository;

    public function __construct(SlotRepositoryInterface $slotRepository)
    {
        $this->slotRepository = $slotRepository;
    }

    public function getAllSlots()
    {
        return $this->slotRepository->all();
    }

    public function createSlot(array $data)
    {
        return $this->slotRepository->create($data);
    }

    public function deleteSlot($id)
    {
        $this->slotRepository->delete($id);
    }
}
