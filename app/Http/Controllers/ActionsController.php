<?php

namespace App\Http\Controllers;

use App\Support\BionicReading;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

class ActionsController extends Controller
{
    public function bionicConvert(): JsonResponse
    {
        $validator = Validator::make(request()->all(), ['text' => 'required']);

        if ($validator->fails()) {
            abort(403);
        }

        $output = (new BionicReading())->convert(request('text'));
        return response()->json(compact('output'));
    }
}
