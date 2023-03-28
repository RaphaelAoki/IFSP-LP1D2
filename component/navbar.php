<?php 

function navbar_text($text) {
    $html = '<nav class="navbar navbar-dark indigo mb-5 mt-2">
                <span class="navbar-text white-text">'.$text.'</span>
            </nav>';
    return $html;
}