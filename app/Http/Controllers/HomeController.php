<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Services\SlotService;

class HomeController extends Controller
{
    protected $slotService;

    public function __construct(SlotService $slotService)
    {
        $this->slotService = $slotService;
    }

    public function index()
    {
        $slots = $this->slotService->getAllSlots();
        return view('home', compact('slots'));
    }
}
