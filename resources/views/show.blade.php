<?php
// Start the session
session_start();
?>

@extends('templates.template')
 
@section('content')
<html>
	<ul>
	@foreach($gvs as $gv)
		<li>Tên : {{$gv->ten_rieng}} | Email : {{$gv->email}} | Hướng nghiên cứu: {{$gv->huong_nghien_cuu}}</li>
	@endforeach
	</ul>
</html>
@stop