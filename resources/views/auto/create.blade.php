<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create page</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>
<body class="create-body">

<form class="create-form" method="post" action="{{ route('auto.store') }}">
    @csrf
    <input class="model-input" name="model" placeholder="model"><br>
    <input class="auto-number-input" name="auto_number" placeholder="auto number"><br>
    <button class="submitBtn" type="submit">submit</button>
</form>

</body>
</html>
