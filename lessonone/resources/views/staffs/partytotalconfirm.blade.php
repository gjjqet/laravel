<DOCTYPE html>
<html>
    <head>
        <title>Staffs Page</title>
    </head>
    <body>

        <h2>Staffs Page</h2>

        <hr/>

        <h4>Welcome to our site</h4>
        <p>This is staff page = party total confirm is {{ $total }} and they are {{ $status }} </p>

        <ul>
            <li><a href='{{URL::to("/staffs")}}'>Home</a></li>
            <li><a href="{{ route('staffs.party') }}">Party</a></li>
            <li><a href="">Edit</a></li>
        </ul>
        
    </body>
</html>