<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>To-Do Challenges</title>
</head>
<body>




<h1>Solutions</h1>
            <table border="1">
                <thead>
                        <th>Name</th>
                        <th>challenge ID</th>
                        <th>Solution Link</th>
                </thead>
            @foreach ($solutions as $solution)
            <tr>
                    <td>
                       {{ $solution->name}}
                    </td>
                    <td>
                         {{ $solution->challenge_id }}
                    </td>
                    <td>
                        <a href="{{ $solution->solution_link }}">  Solution Link</a>
                    </td>
                </tr>
            @endforeach
            </table>

        <a href="/">Go Back</a>
</body>
</html>
