@extends('layout.admins')

@section('title',$title)

@section('content')

	@if(session('success'))  
            <div class="mws-form-message info">
                {{session('success')}}  

            </div>
            @endif
	<img src="" style='width: 100%;'>
@stop

@section('js')
<script>
	$('.mws-form-message').delay(3000).fadeOut(2000);
</script>

@stop