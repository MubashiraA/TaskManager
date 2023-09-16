<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>

<body>
    <form action="/tasks/{{$task->id}}" method="post">
        @method('put')
        @csrf
        <label for="">Title: </label>
        <input type="text" name="title" value="{{$task->title}}"><br>
        @error('title')
        <div>{{ $message }}</div>
        @enderror
        <label for="">Description: </label>
        <textarea name="description">{{$task->description}}</textarea><br>
        @error('description')
        <div>{{ $message }}</div>
        @enderror
        <button>Submit</button>
    </form>
</body>

</html>