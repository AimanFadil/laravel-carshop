<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Optional;
use Illuminate\Http\Request;

class OptionalController extends Controller
{
    public function index()
    {
        $optionals=Optional::all();

        return response()->json([
            "success" => true,
            "results" => $optionals
        ]);
    }
}
