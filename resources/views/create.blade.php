<?php
// Start the session
session_start();
?>

@extends('templates.template')
 
@section('content')
<html>
<h1>Thêm tài khoản mới</h1>
	<div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" id="input" type="button" data-toggle="dropdown">Choose type:</button>
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a onclick = "checkType(this)" href="#">Giảng viên</a></li>
          <li><a onclick = "checkType(this)" href="#">Sinh viên</a></li>
        </ul>
      </div>

	{!! Form::open() !!}
 		{!! Form::label('ma','mã:', ['class' => 'ma']) !!} </br>
		{!! Form::text('ma', "", ['class' => 'ma']) !!} </br>
	 		
	 	{!! Form::label('ho_ten','họ tên:', ['class' => 'ho_ten']) !!} </br>
		{!! Form::text('ho_ten', "", ['class' => 'ho_ten']) !!} </br>

		{!! Form::label('email','vnu email:', ['class' => 'email']) !!} </br>
		{!! Form::email('email', "", ['class' => 'email']) !!} </br>

		{!! Form::label('khoa_hoc','khóa học:', ['class' => 'khoa_hoc']) !!} </br>
     {!! Form::select('khoa_hoc',$khoa_hoc_array) !!}</br>

		{!! Form::label('ctdt',' chương trình đào tạo:', ['class' => 'ctdt']) !!} </br>
		{!! Form::select('ctdt',$ctdt_array) !!}</br>

    {!! Form::label('khoa','Khoa:', ['class' => 'khoa']) !!} </br>
    {!! Form::select('khoa',$khoa_array) !!}</br>

	 	{!! Form::label('don_vi','đơn vị:', ['class' => 'don_vi']) !!} </br>
		{!! Form::select('don_vi',$bo_mon_array) !!}</br>

    {!! Form::hidden('loai_tai_khoan', "", ['id' => 'loai_tai_khoan']) !!} </br>

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
	var checkType = function(item) {
          var input = document.getElementById("input");
          var type = item.innerHTML;
          var loai_tai_khoan = document.getElementById("loai_tai_khoan");

           input.innerHTML = type;
 
           if(type == "Giảng viên") {
            loai_tai_khoan.value = "giang_vien";
           	showEle("don_vi");
            hideEle("khoa_hoc");
            hideEle("ctdt");
            hideEle("khoa");
            document.getElementById("khoa_hoc").disabled=true;
            document.getElementById("ctdt").disabled=true;
            document.getElementById("khoa").disabled=true;
            document.getElementById("don_vi").disabled=false;
           }

           if(type == "Sinh viên") {
            loai_tai_khoan.value = "sinh_vien";
            hideEle("don_vi");
            showEle("khoa_hoc");
            showEle("ctdt");
            showEle("khoa");
            document.getElementById("khoa_hoc").disabled=false;
            document.getElementById("ctdt").disabled=false;
            document.getElementById("khoa").disabled=false;
            document.getElementById("don_vi").disabled=true;
           }
    }

    var hideEle = function(cn) {
    	var ele = document.getElementsByClassName(cn);
    	for(var i = 0; i < ele.length; i++) {
        ele[i].disabled = true;
      }
    }

    var showEle = function(cn) {
    	var ele = document.getElementsByClassName(cn);
    	for(var i = 0; i < ele.length; i++) {
        ele[i].disabled = false;
      }
    }
</script>

@stop