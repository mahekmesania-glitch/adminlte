<!DOCTYPE html>
<html>
<head>
    <title>Students & ID Cards</title>
</head>
<body>
    <h1>Students List</h1>

    <ul>
        @foreach ($students as $student)
            <li>
                <strong>Name:</strong> {{ $student->name }} <br>
                <strong>ID Card:</strong> {{ $student->idCard->card_number ?? 'No ID Card' }}
            </li>
        @endforeach
    </ul>
</body>
</html>