<DOCTYPE html>
<html>
    <head>
        <title>Student Page</title>
    </head>
    <body>

        <h2>Student Page</h2>

        <hr/>

        <h4>Welcome to our site</h4>
        <p>This is Student page = show</p>

       
        <ul>
            <li><a href="{{URL::to('/students')}}">Index</a></li>
            <li><a href="{{URL::to('/students/show')}}">Show</a></li>
            <li><a href="{{ route('students.edit') }}">Edit</a></li>
        </ul>
  
        
    </body>
</html>