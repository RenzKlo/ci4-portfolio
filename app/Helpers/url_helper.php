<?php

if (!function_exists('is_active')) {
    function is_active($segment)
    {
        $current_segment = service('uri')->getSegment(1);
        return $current_segment == $segment ? 'active' : '';
    }
}