@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<form action="{{ route('passports.store', $person->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Upload Passport for {{ $person->name }}</label>
    <input type="file" name="passport_file" required>
    <button type="submit">Upload</button>
</form>

@if($person->passport)
    <p>Current Passport:</p>
    <a href="{{ asset('storage/' . $person->passport->file_path) }}" target="_blank">View Passport</a>
@endif