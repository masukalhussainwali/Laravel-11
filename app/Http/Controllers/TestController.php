<?php

namespace App\Http\Controllers;

use App\Models\TestDumpable;

class TestController extends Controller
{
    public function testDumpable()
    {
        $test = new TestDumpable();

        // Using dump() and dd() for debugging
        $test->setMessage('Hello, Laravel!')
            ->dump() // Shows the current state without stopping
            ->addPrefix('Message: ')
            ->dd(); // Dumps the state and stops execution

        return response()->json(['message' => $test->message]);
    }
}
