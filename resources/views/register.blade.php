<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  </head>

  <body>


            <form method="post" action="/register">
                @csrf
                <div>
                <label for="username">Enter username</label>
                <input  type="text" name='username' id="username" required>
                <br>
                <label for="email">Enter E-mail</label>
                <input type="email" name="email" id="email" required>
                <br>
                <label for="password">Enter Password</label>
                <input type="password" name="password" id="password" required>
                <br>
                <label for="password2">Repeat Password</label>
                <input type="password" name="password2" id="password2" required>
                <br>

                <input type="submit" name="submit">
                </div>
            </form>


  </body>

</html>

