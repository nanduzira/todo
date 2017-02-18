<html>
    <head>
        <title>ToDo Update</title>
    </head>
    <body>
        <label>To-Do Update</label></br>
        <form method="post" action="{{url('/update')}}">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$todos->id}}">            
            <input type="text" name="title" value="{{$todos->title}}">
            <input type="text" name="desc" value="{{$todos->desc}}"></br>
            <input type="submit" value="Save">
                        </form>
        </br>
        <a href="/todo/server.php/show">View</a>
    </body>
</html>