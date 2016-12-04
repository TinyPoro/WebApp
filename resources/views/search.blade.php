<?php
// Start the session
session_start();
?>

@extends('templates.template')
 
@section('content')
<html>
<h1>Browser</h1>
	{!! Form::open() !!}

    @if($bo_mon_array != NULL)
    {!! Form::label('bo_mon','Bộ môn:', ['class' => 'bo_mon']) !!} </br>
    {!! Form::select('bo_mon',$bo_mon_array) !!}</br>
    @endif

    {!! Form::label('giang_vien','Giảng viên:') !!}</br>
    {!! Form::text('giang_vien') !!} </br>

    @if($linh_vuc_array != NULL)
    {!! Form::label('linh_vuc','Lĩnh vực:', ['class' => 'linh_vuc']) !!} </br>
    {!! Form::select('linh_vuc',$linh_vuc_array) !!}</br>
    @endif
    
    {!! Form::label('cdnc','Chủ đề nghiên cứu:') !!}</br>
    {!! Form::text('cdnc') !!} </br>
    

		{!! Form::submit('Tim kiem')!!}
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