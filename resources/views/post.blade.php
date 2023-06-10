<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">

    <!-- Custom styles -->
    <style>
        body {
        background-color: #311b92;
        color: #000;
        }
        
        .form-wrapper {
        max-width: 500px;
        margin: 100px auto;
        padding: 40px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        color: #000;
        }
        
    #button{
        background-color: #0d6efd;
    }

    </style>
    </head>
    <body>
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="form-wrapper" >
            <h2 class="text-center mb-4">Create a Post</h2>
            <form method="POST">
                @csrf
                <div class="form-group">
                <label for="post-title">Title</label>
                <input name="title" type="text" class="form-control" id="post-title" placeholder="Enter post title">
                </div>
                <div class="form-group">
                <label for="post-content">Content</label>
                <textarea class="form-control" id="post-content" rows="6" placeholder="Enter post content"></textarea>
                </div>
                <button name="body" type="submit" id="button" class="btn btn-primary" value="Post" >Submit </button>
            </form>
            </div> 
        </div>
        </div>
    </div>

    </body>
    </html>

</x-app-layout>
