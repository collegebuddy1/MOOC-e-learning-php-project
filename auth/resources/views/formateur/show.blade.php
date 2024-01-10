@extends('layouts.fpannel')
@section('content')

<h1 style="text-align: center;">Mes Videos</h1>
	
<ul class="list-unstyled video-list-thumbs row">
@foreach($video as $key)
	
	@if($key->user_id==$id)
	
	

	<li class="col-lg-3 col-sm-4 col-xs-6">
		<a href="" data-toggle="modal" data-target="#myModal" title="java">
			
			<video width="320" height="240" controls>
              <source src="{{$key->chemin}}" alt="..."  type="video/mp4">
                                                 
             Your browser does not support the video tag.
            </video>
		</a>
	</li>



	@endif
@endforeach



@endsection