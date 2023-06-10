<x-app-layout>
    <div class="py-12">
        <h2 class=" text-center mb-4">Dashboard</h2>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container p-2">
                
                    <table class="table table-white ">
                        <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Title</th>
                            <th scope="col">Content</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->user->name}}</td>
                                <td>{{$post->title}}</td>
                                <td >{{$post->body}}</td>
                                <td>
                                <button type="button" class="btn btn-primary">Edit</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                           
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
