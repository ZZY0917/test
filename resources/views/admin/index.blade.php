@extends('layout.admins')

@section('title',$title)

@section('content')

	@if(session('success'))  
            <div class="mws-form-message info">
                {{session('success')}}  

            </div>
            @endif
	<img src="/images/18.jpg" style='margin-top: 50px;margin-left: 150px;'>
@stop

@section('js')
<script>
	$('.mws-form-message').delay(3000).fadeOut(2000);
</script>

@stop