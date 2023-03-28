<?php

function navbar_text($text) 
{
    $text = $text;
    $html ='<nav class="navbar navbar-dark indigo mb-5 mt-2">
            <span class="navbar-text text-white">
                '.$text.'
            </span>
        </nav>';

    return $html;
}