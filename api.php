<?php
// For handling the API, see the docs in here.
// https://dummyjson.com/docs/
$api = 'https://dummyjson.com/recipes?limit=10&skip=200';
$data = json_decode(file_get_contents($api),true);

