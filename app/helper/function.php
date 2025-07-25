<?php

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
