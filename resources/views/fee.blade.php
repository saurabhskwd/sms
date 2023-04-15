<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fee Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTPVyMExQN2bvLyzuBfqkTSSnYZKG3hkwUVNTKfAdVQSZe" crossorigin="anonymous"></script>
    
    </head>
<body>
    <form method="POST" action="/payfee">
        @csrf
        <label for="feedate">Date</label>
        <input type="date" name="feedate" class="form-control"/>
        <label for="studentname">Name</label>
        <input type="text" name="studentname" class="form-control"/>
        <label for="father">father</label>
        <input type="text" name="father" class="form-control">
        <label for="amount">ammount</label>
        <input type="text" name="amount" id="amount" class="form-control">
        <label for="inwords">In words</label>
        <input type="inwords" name="inwords" id="inword" class="form-control"/>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
    </div>
    @include('sweetalert::alert')
</body>
</html>
<script src="/digittowords.js"></script>