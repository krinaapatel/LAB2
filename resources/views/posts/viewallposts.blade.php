<ul>
	@foreach($posts as $post)
		<li> {{$post->title}}  {{$post->body}}</li> 
	@endforeach;
</ul>