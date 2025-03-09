<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
@if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
            </div>
            @endif

    <h2>Hello Mr.  <h3>All Names</h3>
                <ol>
                    @foreach ($users as $user )
                        <li><b>MR.</b> {{ $user->name }}  <b> Email Address:</b> {{$user->email}}</li>
                    @endforeach
                </ol>
   
</body>
</html>