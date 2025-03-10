<?php

namespace App\Http\Controllers;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function Search(Request $request){
        $from = $request->from;
        $to = $request->to;
        $trains = Train::where('source',$request->from)
        ->where('destination',$request->to)->get();
        
        return response()->json($trains);
    }
}
