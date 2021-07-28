<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>
<body>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('users.store')}}" method="post">
    {{csrf_field()}}
    <input required type="text" name="name" placeholder="Enter user full name">
    <input required type="email" name="email" placeholder="Enter user email">
    <input required type="password" name="password" placeholder="Enter user password">
    <select required name="role">
        @foreach(\App\UserRoles::ROLES as $role)
            <option value="{{$role}}">{{strtoupper($role)}}</option>
        @endforeach
    </select>
    <input type="submit" value="Create User">
</form>


</body>
</html>
