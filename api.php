<?php
// For handling the API, see the docs in here.
// https://dummyjson.com/docs/
$api = 'https://dummyjson.com/recipes';
$data = json_decode(file_get_contents($api),true);

