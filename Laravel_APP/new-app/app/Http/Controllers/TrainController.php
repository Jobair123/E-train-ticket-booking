<?php

namespace App\Http\Controllers;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function Search(Request $request){
     
      $request->validate([
        'from' => 'required|string|max:255',
        'to'  => 'required|string|max:255',
        'date' => 'required|date|after_or_equal:today'

      ]);

        $trains = Train::query()
        ->where('source', $request->from)
        ->where('destination', $request->to)
        ->with(['schedules' => function ($query) use ($request) {
            $query->whereDate('departure_time', $request->date);
        }])
        ->get();

        
        return response()->json($trains);
    }
}
