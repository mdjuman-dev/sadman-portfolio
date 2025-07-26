<?php

use Illuminate\Support\Carbon;

if (!function_exists("general_status")) {
    function general_status($status)
    {
        if ($status == 1) {
            return '<span class="badge btn btn-success">Active</span>';
        } else {
            return '<span class="badge btn btn-danger">InAclive</span>';
        }
    }
}
if (!function_exists('time_short')) {
    function time_short($date)
    {
        $diff = Carbon::parse($date)->diff(Carbon::now());

        if ($diff->y > 0) {
            return $diff->y . 'y';
        } elseif ($diff->m > 0) {
            return $diff->m . 'mo';
        } elseif ($diff->d > 6) {
            return floor($diff->d / 7) . 'w';
        } elseif ($diff->d > 0) {
            return $diff->d . 'd';
        } elseif ($diff->h > 0) {
            return $diff->h . 'h';
        } elseif ($diff->i > 0) {
            return $diff->i . 'm';
        } else {
            return 'Just now';
        }
    }
}
