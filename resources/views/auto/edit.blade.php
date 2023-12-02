<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit page</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>
<body class="edit-body">
<div class="create-container">
    <form class="edit-form" method="post" action="{{ route('auto.update', $auto -> id) }}">
        @csrf
        @method('patch')
        <input class="model-input-edit" name="model" value="{{$auto -> model}}" placeholder="model"><br>
        <input class="auto-number-input-edit" name="auto_number" value="{{$auto -> auto_number}}"
               placeholder="auto number"><br>
        <button class="submitBtn" type="submit">submit</button>
    </form>
</div>
</body>
</html>
