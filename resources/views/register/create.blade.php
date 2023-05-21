<!-- resources/views/register/create.blade.php -->
<h1>Register</h1>

@if(session('success'))
    <div>{{ session('success') }}</div>
@endif

<form action="{{ route('register.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        @error('name')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        @error('email')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        @error('password')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" name="password_confirmation" id="password_confirmation" required>
    </div>
    <button type="submit">Register</button>
</form>
