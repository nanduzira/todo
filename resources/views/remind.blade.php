<html>
    <head>
        <title>Reminder</title>
    </head>
    <body>
        <label>Remind Me</label></br>
        <form method="post" action="{{url('/remind')}}">
            {{csrf_field()}}
            <input type="text" name="remind" >
            <input type="text" name="date" ></br>
            <input type="submit" value="Save">
            {{csrf_field()}}
        </form>
        </br>
        <a href="/todo/server.php/show">View</a>
    </body>
</html>