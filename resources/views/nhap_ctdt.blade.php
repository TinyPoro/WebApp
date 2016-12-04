<?php
// Start the session
session_start();
?>

@extends('templates.template')
 
@section('content')
<html>
	{!! Form::open() !!}
 		{!! Form::label('chuong_trinh','Chương trình đào tạo:', ['class' => 'chuong_trinh']) !!} </br>
		{!! Form::textarea('chuong_trinh') !!}</br>
	 	

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