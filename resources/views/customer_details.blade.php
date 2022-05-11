<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <h1>Customer</h1>
    <div>
    @if ($customers->is_blocked != 1)
    <div style="font-style:italic;">
        404
    </div>
    @else
        <div>
            <table>
            <tr><th>Id</th><th>Name</th><th>Surname</th><th>Email</th><th>Is_blocked</th><th>Phone_number</th><th>Registration date</th></tr>
                <tr>
                    <td>{{$customer->id}}</td>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->surname}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->is_blocked}}</td>
                    <td>{{$customer->phone_number}}</td>
                    <td>{{$customer->created_at}}</td>
                    </tr>
            </table>     
        </div>
        <div>
            @if (count($customers->addresses) === 0)
            <div style="font-style:italic;">
                This customers has no addresses!
            </div>
            @else
            <h2> Type</h2>
            <table>
                <tr><th>id</th><th>Address</th><th>City</th><th>Street</th><th>House</th></tr>Floor</th></tr>Flat</th></tr>Code</th></tr>Created at</th></tr>       
                @foreach ($customers->addresses as $address)
                    <tr>
                    <td>{{$address->id}}</td>
                    <td>{{$address->address}}</td>
                    <td>{{$address->city}}</td>
                    <td>{{$address->street}}</td>
                    <td>{{$address->house}}</td>
                    <td>{{$address->floor}}</td>
                    <td>{{$address->flat}}</td>
                    <td>{{$address->code}}</td>
                    <td>{{$customer->created_at}}</td>
                    </tr>
                @endforeach
            </table>
            @endif
        </div>
    @endif
    </div>
</body>

</html>