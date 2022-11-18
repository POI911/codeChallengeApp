<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  </head>

  <body>


            <form method="POST" action="/register">
                @csrf
                <div>
                <label for="name">Enter username</label>
                <input  type="text" name='name' id="name" required>
                <br>
                <label for="email">Enter E-mail</label>
                <input type="email" name="email" id="email" required>
                <br>
                <label for="password">Enter Password</label>
                <input type="password" name="password" id="password" required>
                <br>
                <input type="submit" name="submit">

                <!-- Displaying error messages (e.g in case password is shorter than 7 chars) -->
                @if ($errors->any())
                <ul>
                @foreach ($errors->all() as $error )
                    <li> {{ $error }} </li>
                @endforeach
                </ul>
                @endif

                </div>


            </form>


  </body>

</html>

