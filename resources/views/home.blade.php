<x-app-layout>
    <div class="py-12">
        <h2 class=" text-center mb-4">Blogging Site</h2>
        @foreach ($posts as $index =>$post)
        <div class="container">
		<div class="card">
			<div class="card-body">
                <h5 class="card-subtitle mb-2">{{$index+1}}{{". "}} {{$post->title}}</h5>
                <h6 class="card-title text-muted mb-1">{{"By "}}{{$post->user->name}}</h6>
                <p class="card-text">{{$post->body}}</p>
            </div>
            </div>
        </div>
        @endforeach


    </div>
    
</x-app-layout>
