<DOCTYPE html>
<html>
    <head>
        <title>Employee Page</title>
    </head>
    <body>

        <h2>Employee Page</h2>

        <hr/>

        <h4>Welcome to our site</h4>
        <p>This is employee page = datathree </p>

       <h3>Hi there , {{ $greeting }} , {{ $hifi }} </h3>

       <?php 

        echo "<pre>".print_r($employees,true)."</pre>";
        echo $employees[0]."<br/>";
        echo $employees[1]."<br/>";
        echo $employees[2]."<br/>";

       ?>

       <ul>
            @foreach($employees as $employee)
                <li>{{$employee}}</li>
            @endforeach
       </ul>
        
    </body>
</html>