<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>
</head>
<body>
  <h1>Register</h1>

  <form action="{{ route('register') }}" method="post">
    @csrf

    <label>User ID</label>
    <input type="text" name="userid"><br>

    <label>Password</label>
    <input type="text" name="password"><br>

    <label>Role</label>
    <select name="role">
      <option value="A">Admin</option>
      <option value="T">Guru</option>
      <option value="HT">Wali Kelas</option>
      <option value="S">Siswa</option>
    </select><br>

    <button type="submit">Register</button>
  </form>
  <br><br>

  <a href="{{ route('view.login.admin') }}">Admin</a><br>
  <a href="{{ route('view.login.teacher') }}">Guru</a><br>
  <a href="{{ route('view.login.homeroom.teacher') }}">Wali Kelas</a><br>
  <a href="{{ route('view.login.student') }}">Siswa</a>
</body>
</html>