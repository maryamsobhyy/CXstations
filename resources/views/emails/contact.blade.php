<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>استفسار مرسل للموقع</title>
</head>
<body>
    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $userMessage }}</p>

{{--    @if ($errors->any())--}}
{{--        <ul>--}}
{{--            @foreach ($errors->all() as $error)--}}
{{--                <li>{{ $error }}</li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    @endif--}}
</body>
</html>
