@extends('template.default')

@section('content')
<h1>INFORMATION</h1>

<ul>
    <li>ชื่อ: {{ $data['fname'] }}</li>
    <li>นามสกุล: {{ $data['lname'] }}</li>
    <li>วันเกิด: {{ $data['birthday'] }}</li>
    <li>เพศ: {{ $data['gender'] }}</li>
    <li>ที่อยู่: {{ $data['address'] }}</li>
    <li>แนวเพลง: {{ $data['music'] }}</li>
    <li>สีที่ชอบ: {{ $data['favcolor'] }}</li>
    </li>
</ul>
@endsection