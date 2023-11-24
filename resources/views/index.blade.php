<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Role Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="content-wrapper">
        
        <div class="row mt-4">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card">
                    <h1 class="text-center mt-1">Blog Posts</h1>

                    <div class="card-body">
                        @foreach ($posts as $post)
                        <div class="card pl-2">
                            <h3 style="margin-left: 10px">{{ $post->title }}</h3>
                            <p style="margin-left: 10px">{{ $post->content }}</p>
                        </div>
                        @endforeach
                        
                        
                    </div>
                    
                </div>
            </div>
            <div class="col-3"></div>
        </div>
        
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>