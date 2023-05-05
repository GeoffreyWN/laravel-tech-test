<?php

namespace App\Http\Controllers;

use App\Services\MinDifference;

class HomeController extends Controller
{
    public function index()
    {
        // $arr = [3, 1, 1, 1];
        $arr = [3, 1, 2, 4, 3];

        return MinDifference::compute($arr);

        // $minDiff = INF;

        // for ($start = 1; $start < count($arr); $start++) {

        //     $rightArray = array_slice(
        //         $arr,
        //         $start
        //     );

        //     $leftArray = array_slice(
        //         $arr,
        //         0,
        //         $start
        //     );

        //     $rightArraySum = array_sum($rightArray);
        //     $leftArraySum = array_sum($leftArray);

        //     $diff = abs($leftArraySum - $rightArraySum);

        //     $minDiff = $diff > $minDiff ? $minDiff : $diff;
        // }

        // return $minDiff;
    }
}
