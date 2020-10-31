<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <h1>Create Post</h1>
    <form action="{{asset('createpost')}}" method="post">
        @csrf()
        <input type="text" name="title" Placeholder="Title"><br>
        <textarea name="details" id="" cols="30" rows="10"></textarea>
        <input type="submit" name="Submit"> 
    </form>
</body>
</html>