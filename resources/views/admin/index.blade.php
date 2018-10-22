@extends('layout.admins')

@section('title',$title)

@section('content')

	@if(session('success'))  
            <div class="mws-form-message info">
                {{session('success')}}  

            </div>
            @endif
	<img src="/images/9958981b5bc6d69.jpg" style='width: 100%;'>
@stop

@section('js')
<script>
	$('.mws-form-message').delay(3000).fadeOut(2000);
</script>

@stop