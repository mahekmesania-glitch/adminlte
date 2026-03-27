<!DOCTYPE html>
<html>
<head>
    <title>Students & Courses</title>
</head>
<body>
    <h1>Students with Courses</h1>

    @foreach($students as $student)
        <h3>{{ $student->name }} (Age: {{ $student->age }})</h3>
        <p>Gender: {{ $student->gender }}, Religion: {{ $student->religion }}</p>

        <strong>Courses:</strong>
        <ul>
            @foreach($student->courses as $course)
                <li>{{ $course->name }}</li>
            @endforeach
        </ul>
        <hr>
    @endforeach
</body>
</html>