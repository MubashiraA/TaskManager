<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addtasks</title>
</head>

<body>
    <form action="/tasks" method="post">
        @csrf
        <label for="">Title: </label>
        <input type="text" name="title" value="{{old('title')}}"><br>
        @error('title')
        <div>{{ $message }}</div>
        @enderror
        <label for="">Description: </label>
        <textarea name="description">{{old('description')}}</textarea><br>
        @error('description')
        <div>{{ $message }}</div>
        @enderror
        <button>Submit</button>
    </form>
</body>

</html>