<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Log In Admin</title>
</head>
<body>
  <h1>Log In Admin</h1>

  <form action="#" method="post">
    @csrf

    <label>Nomor Identitas</label>
    <input type="text" name="identity_number">
    <br>

    <label>Password</label>
    <input type="text" name="password">
    <br>

    <button type="submit">Log In</button>
  </form>
  <br>
  
  <a href="{{ route('view.register') }}">Register</a>
  <br><br>

  <a href="{{ route('view.login.teacher') }}">Guru</a><br>
  <a href="{{ route('view.login.homeroom.teacher') }}">Wali Kelas</a><br>
  <a href="{{ route('view.login.student') }}">Siswa</a>
</body>
</html>