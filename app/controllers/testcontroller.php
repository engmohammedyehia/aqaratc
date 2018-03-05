<?php
namespace PHPMVC\Controllers;

class TestController extends AbstractController
{
    public function defaultAction()
    {
        // remove the first and last elements
        array_shift($arr);
        array_pop($arr);
        $totalCosts = [];
        for ($i = 0, $ii = count($arr); $i < $ii; $i++) {
            // get the range of next elements starting from $i + 2
            // if $i + 2 doesn't exists we reached the end of possible chunks
            if(!array_key_exists($i+2, $arr)) {
                break;
            }
            // the range from $i+2 to the end of the array
            $range = array_slice($arr, $i + 2);
            // sort the range ascending to get the least possible value
            sort($range);
            // add the current value to the minimum value in the range
            $totalCosts[] = $arr[$i] + min($range);
        }
        return min($totalCosts);
    }
}