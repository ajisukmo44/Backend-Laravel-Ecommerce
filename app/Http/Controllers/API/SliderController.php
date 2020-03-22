<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use App\Models\Slider;

class SliderController extends Controller
{
    public function slider()
    {

        $data = Slider::all();
        return response()->json([

            "message" => "Success",
            "data" => $data
        ]);
    }

    public function getById($id)
    {

        $data = Slider::find($id);

        return response()->json([

            "message" => "Success",
            "data" => $data
        ]);
    }
}
