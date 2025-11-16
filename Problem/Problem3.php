<?php

$filename = 'main.py';

$file_extention = pathinfo($filename, PATHINFO_EXTENSION);

// selesaikan tanpa menggunakan if, switch, match, ternarry, 
if ($file_extention === 'png') {
    handle_png();
} else if ($file_extention === 'pdf') {
    handle_pdf();
} else if ($file_extention === 'word') {
    handle_word();
} else if ($file_extention === 'csv') {
    handle_csv();
} else if ($file_extention === 'mp4') {
    handle_mp4();
} else if ($file_extention === 'mp5') {
    handle_mp5();
} else if ($file_extention === 'py') {
}

function handle_png(){}
function handle_pdf(){}
function handle_word(){}
function handle_csv(){}
function handle_mp4(){}
function handle_mp5(){}
function handle_py(){}
