<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Http\Requests\StoreSlotRequest;
use App\Models\Slot;
use App\Services\SlotService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class SlotController extends Controller
{
    protected SlotService $slotService;

    public function __construct(SlotService $slotService)
    {
        $this->slotService = $slotService;
    }

    public function index(): object
    {
        $slots = Slot::all();
        return view('home', compact('slots'));
    }

    public function show($slug): object
    {
        return view('page', ['slug' => $slug]);
    }

    public function store(StoreSlotRequest $request): RedirectResponse
//    public function store(Request $request)
    {
        $this->slotService->createSlot($request->validated());
        return redirect()->route('home')->with('success', 'Слот добавлен!');
    }

    public function destroy($id): RedirectResponse
    {
        $this->slotService->deleteSlot($id);
        return redirect()->route('home')->with('success', 'Слот удален!');
    }


}
