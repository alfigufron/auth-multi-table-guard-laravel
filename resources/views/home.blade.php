<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Beranda</title>
</head>
<body>
  <h1>Beranda</h1>

  Guard 
  @auth('admin') Admin @endauth
  @auth('teacher') Teacher @endauth
  @auth('homeroom_teacher') Homeroom Teacher @endauth
  @auth('student') Student @endauth

  <br>
  <form action="{{ route('logout') }}" method="post">
    @csrf
    <button type="submit">Logout</button>
  </form>
</body>
</html>