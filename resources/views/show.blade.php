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
        </form>
        @if(isset($todos))
            {{ $todos }}
        @endif
    </center>
    </body>
</html>