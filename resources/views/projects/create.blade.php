<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create project</title>
</head>
<body>

    <h1>Create project</h1>

    <form action="/projects" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title">

        <textarea name="description" id="" cols="30" rows="10"></textarea>

        <button type="submit">Create project</button>
    </form>

</body>
</html>
