<?php

namespace App\Http\Controllers;

class ShapesController extends Controller
{
    public function create()
    {
        return response()->json([
            'message' => 'Create a new shape',
            'shapes' => [
                'circle',
                'square',
                'rectangle',
                'triangle'
            ]
        ]);
    }
}
