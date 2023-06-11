<x-app-layout>
    <div class="py-12">
        <h2 class=" text-center mb-4">Blogging Site</h2>
        @foreach ($posts as $post)
        <div class="container">
		<div class="card">
			<div class="card-body">
                    <h5 class="card-title">{{$post->user->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$post->title}}</h6>
                    <p class="card-text">{{$post->body}}</p>
                </div>
            </div>
        </div>
        @endforeach


    </div>
    
</x-app-layout>
