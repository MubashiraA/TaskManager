<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
</head>
<body>
    <h2>Task Management</h2>
    <a href="tasks/create">Create Tasks</a><br><br>
    <table border="1">
        <tr>
            <th>ID</th>
            <TH>TITLE</TH>
            <th>DESCRIPTION</th>
        </tr>
        @foreach ($tasks as $task) 
        <tr>
            <td>{{$task->id}}</td>
            <td>{{$task->title}}</td>
            <td>{{$task->description}}</td>
            <td><a href="/tasks/{{$task->id}}"><button>View</button></a></td>
            <td><a href="/tasks/{{$task->id}}/edit"><button>Edit</button></a></td>
            <!-- <td><a href="/tasks/{{$task->id}}"><button>Delete</button></a></td> -->
            <td>
                <form action="/tasks/{{$task->id}}" method="post">
                    @method('delete')
                    @csrf
                    <button>Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>