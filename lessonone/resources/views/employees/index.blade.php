<DOCTYPE html>
<html>
    <head>
        <title>Employee Page</title>
    </head>
    <body>

        <h2>Employee Page</h2>

        <hr/>

        <h4>Welcome to our site</h4>
        <p>This is employee page = index </p>

        <?php

        foreach($employeesdatas as $employeesdata){
            echo $employeesdata . "<br/>";
        }

        ?>

        @php 

            foreach($employeesdatas as $employeesdata){
                echo $employeesdata . "<br/>";
            }

        @endphp


        @foreach($employeesdatas as $employeesdata)
            {{$employeesdata}}
        @endforeach



        @foreach($employeesdatas as $employeesdata)
            {!!$employeesdata!!}
        @endforeach

        <ul>
            @foreach($employeesdatas as $employeesdata)
               <li> {!!$employeesdata!!} </li>
            @endforeach
        </ul>
       
        <?php 

            $city = 'Mandalay';

        ?>

        @php 
            echo $city;
        @endphp 


        @if($city === "Yangon")
            <h3>You correct</h3>
        @else
            <h3>You were wrong</h3>
        @endif

        @php 

            echo "<pre>".print_r($employeesdatas,true)."</pre>";
            echo $employeesdatas["name"];
            echo $employeesdatas["gmail"];
            echo $employeesdatas["phone"];

        @endphp
        
    </body>
</html>