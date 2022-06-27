<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Register</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="<?php echo url('/Blogs/Store').'?id=2013&name=Root Account'; ?>" method="post" enctype="multipart/form-data">

             <input type="hidden" name="_token" value="<?php echo csrf_token();?>">


            <div class="form-group">
                <label for="exampleInputName">Title</label>
                <input type="text" class="form-control" required id="exampleInputName" aria-describedby=""
                    name="title" placeholder="Enter title" value="<?php echo old('title');?>">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail">Content</label>
                <input type="text" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="content" placeholder="Enter content" value="<?php echo old('content');?>">
            </div>
            <div class="form-group">
                <label for="exampleInputImage">image</label>
                <input type="file" class="form-control" required id="exampleInputImage" aria-describedby="emailHelp"
                    name="image" placeholder="Enter the image">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


</body>

</html>
