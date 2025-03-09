<!DOCTYPE html>
<html>
<head>
    <title>User Input Form</title>
</head>
<body>
    <h1>User Input Form</h1>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        <div style="color: red;">{{ $errors->has('name') ? $errors->first('name') : '' }}</div>
       

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" >
        @if ($errors->has('email'))
            <div style="color: red;">{{ $errors->first('email') }}</div>
        @endif
        <br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        @if ($errors->has('password'))
            <div style="color: red;">{{ $errors->first('password') }}</div>
        @endif
        <br><br>
        
        <label for="bdate">Birthdate:</label>
        <input type="date" id="bdate" name="bdate" value="{{ old('bdate') }}" required>
        @if ($errors->has('bdate'))
            <div style="color: red;">{{ $errors->first('bdate') }}</div>
        @endif
        <br><br>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>
