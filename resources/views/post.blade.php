<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<body>
    <h1>All Post</h1>
    @foreach($post as $posts)
        <h3>{{$posts->title}}</h3>
        <p>{{$posts->body}}</p>
    @endforeach
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            All Posts
                        </div>
                        <div class="class-body">
                        @if(Session::has('delete_success'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('delete_success')}}
                            </div>
                       @endif
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Post Title</th>
                                        <th>Post Body</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($post as $posts)
                                        <tr>
                                            <td>{{$posts->title}}</td>
                                            <td>{{$posts->body}}</td>
                                            <td><a href="/posts/{{$posts->id}}" class="btn btn-success">
                                                View 
                                            </a></td>
                                            <td><a href="/delete-post/{{$posts->id}}" class="btn btn-danger">
                                                delete 
                                            </a></td>
                                            <td><a href="/edit-post/{{$posts->id}}" class="btn btn-danger">
                                                Edit 
                                            </a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>