<!DOCTYPE html>
<html>
<head>
    <title>Teachers & Students</title>
</head>
<body>
    <h1>Teachers & Their Students</h1>

    @foreach($teachers as $teacher)
        <h2>Teacher: {{ $teacher->name }}</h2>

        @if($teacher->students->count())
            <ul>
                @foreach($teacher->students as $student)
                    <li>
                        Name: {{ $student->name }} <br>
                        Age: {{ $student->age }} <br>
                        Gender: {{ $student->gender }} <br>
                        Religion: {{ $student->religion }}
                    </li>
                @endforeach
            </ul>
        @else
            <p>No students assigned.</p>
        @endif
    @endforeach
</body>
</html>