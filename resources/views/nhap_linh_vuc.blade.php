<?php
// Start the session
session_start();
?>

@extends('templates.template')
 
@section('content')
<html>
<h1>Thêm tài khoản mới</h1>
	{!! Form::open() !!}
    {!! Form::label('huong_nghien_cuu','Hướng nghiên cứu:') !!}</br>
 		{!! Form::textarea('huong_nghien_cuu') !!}</br>
	 	
    @foreach($linh_vucs as $linh_vuc)
  
    {!! Form::checkbox($linh_vuc->ten, $linh_vuc->ten, false, ['onclick' => 'myfunction(this)']) !!}</br>
    {!! Form::hidden($linh_vuc->ten, "", ['id' => $linh_vuc->ten]) !!} </br>
    
    @endforeach
    

		{!! Form::submit('Them moi')!!}
	{!! Form::close() !!}
	

  @if ( $errors->any() )
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul> 
  @endif
</html>

<script type="text/javascript">
    var myfunction = function(checkbox) {
      var name = checkbox.name;
      var input = document.getElementById(name);
      input.value = name;
    }
</script>

@stop