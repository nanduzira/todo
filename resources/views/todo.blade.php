<html>
    <head>
        <title>ToDo</title>
    </head>
    <body>
        <label>To-Do</label></br>
        <form method="post" action="{{url('/todo')}}">
            {{csrf_field()}}
            <input type="text" name="title" ></br>
            <input type="submit" value="Save">
            {{csrf_field()}}
        </form>
        </br>
        <a href="/todo/server.php/show">View</a>
    </body>
</html>