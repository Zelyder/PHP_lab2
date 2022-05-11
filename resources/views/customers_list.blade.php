<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <h1>Customers</h1>

    <div>
        @if (count($customers) === 0)
        <div style="font-style:italic;">
            There are no customers!
        </div>
        @else
        <table>
            <tr><th>Id</th><th>Name</th><th>Surname</th><th>Email</th><th>Is_blocked</th><th>Phone_number</th><th>Registration date</th></tr>          
            @foreach ($customers as $customer)
                <tr>
                <td>{{$customer->id}}</td>
                <td>{{$customer->name}}</td>
                <td>{{$customer->surname}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->is_blocked}}</td>
                <td>{{$customer->phone_number}}</td>
                <td>{{$customer->created_at}}</td>
                </tr>
            @endforeach
        </table>
        {{$customers->links()}}
        @endif
     </div>
</body>

</html>