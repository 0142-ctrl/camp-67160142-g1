@extends('template.default')

@section('title', 'my view')
@section('content')
    <h1>My view</h1>
    <?php
    echo 'MY View Content';
    echo '<br>';
    echo 'Line 2';
    ?>
    <br>
    <?php
    $myval = 'hello PHP';
    ?>
    <br>
    <?php
    echo $myval;
    ?>
@endsection
