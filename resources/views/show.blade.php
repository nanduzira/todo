<html>
    <head>
        <title>To-Do Display</title>
    </head>
    <body>
    <center>
        <label>To-Do Display</label></br>
        <form method="post" action="{{url('/show')}}">
            {{csrf_field()}}
            <input type="submit" value="Show">
            {{csrf_field()}}
        </form></br>
        @if(isset($todos))
            <table>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Desc</th>                    
                </tr>
                @foreach($todos as $todo)
                    <tr>
                        <td>{{$todo->id}}</td>
                        <td>{{$todo->title}}</td>
                        <td>{{$todo->desc}}</td>  
                        <td><a href="/todo/server.php/delete/{{$todo->id}}">Delete</a>   
                        <td><a href="/todo/server.php/update/{{$todo->id}}">Update</a>                    
                    </tr>
                @endforeach
            </table>
        @endif
    </center>
    </body>
</html>