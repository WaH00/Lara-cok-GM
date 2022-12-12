@extends('layouts.mainlayout')

@section('main-structure')

<?php

$path = 'image/background-image/background1.png';
$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
echo $base64;
?>

<img src={{ $base64 }} alt="">

@endsection

