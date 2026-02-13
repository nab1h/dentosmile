<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkingHour;
class WorkingHourController extends Controller
{
    public function index()
    {
        $workingHours = WorkingHour::orderBy('sort_order', 'asc')->get();
        
        return view('working_hours.index', compact('workingHours'));
    }


    public function showOnWelcome()
    {
        $workingHours = WorkingHour::orderBy('sort_order', 'asc')->get();
        return view('index', compact('workingHours'));
    }
    
    public function update(Request $request, $id)
    {
        // 1. Validation
        $request->validate([
            'hours_range' => 'nullable|string|max:100',
        ]);

        // 2. Find the day
        $hour = WorkingHour::findOrFail($id);

        // 3. Update logic
        // logic: if checkbox is checked, it means 'is_closed' is true
        $hour->update([
            'hours_range' => $request->has('is_closed') ? null : $request->hours_range,
            'is_closed' => $request->has('is_closed') ? true : false,
        ]);

        // 4. Redirect back with English message
        return back()->with('success', 'Working hours for ' . $hour->day_name . ' updated successfully!');
    }

    public function store(Request $request)
    {
        $request->validate([
            'day_name' => 'required|string|max:50',
            'hours_range' => 'nullable|string|max:100',
            'sort_order' => 'nullable|integer',
        ]);

        WorkingHour::create([
            'day_name' => $request->day_name,
            'hours_range' => $request->hours_range,
            'sort_order' => $request->sort_order ?? 0,
            'is_closed' => false,
        ]);
        return back()->with('success', 'New day added successfully!');
    }
}
