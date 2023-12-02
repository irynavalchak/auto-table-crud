<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

<div class="container">
    <a class="createBtn" href="{{route('auto.create')}}">add</a>
    <table>
        <thead>
        <tr>
            <th>id</th>
            <th>model</th>
            <th>auto number</th>
            <th>action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($autos as $auto)
            <tr>
                <td>{{$auto -> id}}</td>
                <td>{{$auto -> model}}</td>
                <td>{{$auto -> auto_number}}</td>
                <td>
                    <div class="alignBtns">
                        <a class="editBtn" href="{{route('auto.edit', $auto->id)}}" type="button">edit</a>

                        <form action="{{route('auto.delete', $auto -> id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="deleteBtn" type="submit">delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
