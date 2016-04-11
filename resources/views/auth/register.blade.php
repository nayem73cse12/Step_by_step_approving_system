
<form method="POST" action="{{route('postRegister')}}">
    {!! csrf_field() !!}

    <div>
        Name
        <input type="text" name="name" value="{{ old('name') }}">
    </div>

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>


    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div>
        Position
        <input type="integer" name="position">
    </div>
    
    <div>
        <button type="submit">Register</button>
    </div>
</form>


