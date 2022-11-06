<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>To-Do Challenges</title>
</head>
<body>


            <h1>Submit Solutions</h1>

            <form method="get" action="/add_solution_query">


        <label for="names">Who are you?</label>
            <select name="userID" id="names">
                <option value="1">Ayham</option>
                <option value="2">Shayyah</option>
                <option value="3">Zed</option>
            </select>

            <label>Challenge ID
                <input type='number' name="challengeID">
            </label>


            <label>Solution Link
                <input type='text' name="solutionID">
            </label>

            <h3>Submit Solutions</h3>
                <input type="submit" name="submit">
            </form>

<a href="/">Go Back</a>

</body>
</html>
