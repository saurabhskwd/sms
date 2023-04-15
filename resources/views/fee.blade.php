<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fee Detail</title>
    </head>
<body>
    <form method="POST" action="/payfee">
        @csrf
        <label for="feedate">Date</label>
        <input type="date" name="feedate" />
        <label for="studentname">Name</label>
        <input type="text" name="studentname"/>
        <label for="father">father</label>
        <input type="text" name="father">
        <label for="amount">ammount</label>
        <input type="text" name="amount">
        <label for="inwords">In words</label>
        <input type="inwords" name="inwords">
        <button type="submit">Save and Print</button>
    </form>
    </div>
</body>
</html>