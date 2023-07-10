<x-app-layout>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <div class="container p-6">
  <h2 class=" text-center mb-3">Details</h2>
    <div class="card p-6">
      <div class="card-body">
        <h5 class="card-title">{{$post->title}}</h5>
        <p class="card-text text-muted">{{$post->user->name}}</p>
        <p class="card-text">{{$post->body}}</p>
      </div>
    </div>
  </div>
</x-app-layout>
