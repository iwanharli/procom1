<?php

function splitName($name)
{
    $splitName = explode(' ', $name, 2);
    $first_name = $splitName[0];

    return $first_name;
}

if (!function_exists('getInitials')) {
    function getInitials($name)
    {
        $words = explode(' ', $name);
        $initials = '';

        foreach ($words as $word) {
            $initials .= strtoupper($word[0]);
        }

        return $initials;
    }
}
