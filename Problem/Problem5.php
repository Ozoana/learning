<?php

$filename = 'main.py';

$file_extention = pathinfo($filename, PATHINFO_EXTENSION);

$handlers = [
    'png' => 'handle_png',
    'pdf' => 'handle_pdf',
    'word' => 'handle_word',
    'csv' => 'handle_csv',
    'mp4' => 'handle_mp4',
    'mp5' => 'handle_mp5',
    'py'  => 'handle_py'
];


function handle_png(){}
function handle_pdf(){}
function handle_word(){}
function handle_csv(){}
function handle_mp4(){}
function handle_mp5(){}
function handle_py(){}