<?php
// Start the session
session_start();
?>

@extends('templates.template')
 
@section('content')
<html>
<div id ="container">
<h3>Upload excel file</h3>

<form id="form">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  Select file : <input type="file" name="file" size="20" /><br />

  {!! Form::label('loai_tai_khoan', 'Type:', ['class' => 'loai_tai_khoan']) !!}
   {!! Form::radio('loai_tai_khoan', 'khoa', true) !!} Khoa
   {!! Form::radio('loai_tai_khoan', 'giang_vien') !!} Giảng viên
   {!! Form::radio('loai_tai_khoan', 'sinh_vien') !!} Sinh viên </br>

   <p id="test">a</p>
   <div id="dtest"></div>  

   <button class="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]);?>" id="test">Upload </button>
</form>



@if ( $errors->any() )
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul> 
  @endif
</div>
</html>

<script type="text/javascript">
  $("button#test").click(function(e){
    e.preventDefault();
            var url=$(this).attr('class');
           console.log(document.documentElement);
          
            var data = $('form#form').serialize();
            
            $.ajax({
            type : 'POST', 
            url  : url, 
            data : data,
            success :  function(dt)
                   {                       
                    $("#form").find("#test").html("<a>"+dt+"</a>");

                   }
            });
        });
</script>
@stop