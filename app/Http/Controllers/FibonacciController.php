<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    public function showForm()
    {
        return view('fibonacci_form');
    }

    public function calculateFibonacci(Request $request)
    {
        $request->validate([
            'n' => 'required|integer|min:1',
        ]);

        $n = $request->input('n');
        $fibonacciSeries = $this->generateFibonacci($n);

        return view('fibonacci_result', ['series' => $fibonacciSeries, 'n' => $n]);
    }

    private function generateFibonacci($n)
    {
        $series = [];

        if ($n >= 1) $series[] = 0; 
        if ($n >= 2) $series[] = 1;

        for ($i = 2; $i < $n; $i++) {
            $series[] = $series[$i - 1] + $series[$i - 2];
        }

        return $series;
    }
}
