<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>To-Do Challenges</title>
</head>
<body>


    <h1>Insert Challenges Links </h1>
<form method="get" action="/add_challenge_query">
    <table>
        <tr>
            <td>
                <label for="names">Who are you?</label>
                <select name="userID" id="names">
                    <option value="1">Ayham</option>
                    <option value="2">Shayyah</option>
                    <option value="3">Zed</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label>Challenge Link  <input type="text" name="challengeLink">
                </label>
            </td>
        </tr>


        <tr>
            <td><input type="submit" name="submit"></td>
        </tr>
    </table>
</form>


<a href="/">Go Back</a>


</body>
</html>
