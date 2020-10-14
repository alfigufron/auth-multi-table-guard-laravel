<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Log In Wali Kelas</title>
</head>
<body>
  <h1>Log In Wali Kelas</h1>

  <form action="{{ route('login.homeroom.teacher') }}" method="post">
    @csrf

    <label>Nomor Identitas</label>
    <input type="text" name="nip">
    <br>

    <label>Password</label>
    <input type="text" name="password">
    <br>

    <button type="submit">Log In</button>
  </form>
  <br>
  
  <a href="{{ route('view.register') }}">Register</a>
  <br><br>

  <a href="{{ route('view.login.admin') }}">Admin</a><br>
  <a href="{{ route('view.login.teacher') }}">Guru</a><br>
  <a href="{{ route('view.login.student') }}">Siswa</a>
</body>
</html>