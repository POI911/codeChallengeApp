<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>To-Do Challenges</title>
</head>
<body>

<h1>Challenges</h1>


<table border="1">
    <thead>
            <th>Name</th>
            <th>Challenge ID</th>
            <th>Challenge Link</th>
    </thead>
@foreach ($challenges as $challenge)
<tr>
        <td>
           {{ $challenge->name}}
        </td>
        <td>
             {{ $challenge->id }}
        </td>
        <td>
            <a href="{{ $challenge->challenge_link }}" target="_blank">  Challenge Link</a>
        </td>
    </tr>
@endforeach

</table>
<h3><a href='/submitsolution'>Submit a Solution</a></h3>
<a href="/">Go Back</a>

</body>
</html>
