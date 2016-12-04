<?php
// Start the session
session_start();
?>

@extends('templates.template')
 
@section('content')
<html>
	{!! Form::open() !!}
 		{!! Form::label('khoa_hoc','Khóa học:', ['class' => 'khoa_hoc']) !!} </br>
		{!! Form::textarea('khoa_hoc') !!}</br>
	 	

		{!! Form::submit('Nhập')!!}
	{!! Form::close() !!}

	@if ( $errors->any() )
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul> 
  @endif
</html>
@stop