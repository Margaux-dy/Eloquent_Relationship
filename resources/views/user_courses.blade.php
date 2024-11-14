<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>COURSES</title>
    </head>
<body>
    <h1>User Name: {{$user->name}}</h1>

    <h1>COURSES:</h1>
        @foreach ($user->courses as $course)
            <div>{{$course->course_name}}</div>
        @endforeach
    </body>
</html>