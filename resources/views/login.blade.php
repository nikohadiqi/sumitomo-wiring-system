<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label for="role">Role:</label><br>
        <select name="role" id="role" required>
            <option value="admin">Admin</option>
            <option value="karyawan">Karyawan</option>
        </select><br><br>
        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password" required><br>
        @if ($errors->any())
            <div>
                {{ $errors->first() }}
            </div>
        @endif
        <button type="submit">Login</button>
    </form>
</body>
</html>
