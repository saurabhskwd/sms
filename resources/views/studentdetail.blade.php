<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Detail Entry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTPVyMExQN2bvLyzuBfqkTSSnYZKG3hkwUVNTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    <div>
        <form method="POST" action='/store'>
            @csrf
        
        <table>
            <tr><th><td>Students Detial entry</td></th></tr>
            <tr><td><input type="hidden"/></td></tr>
            <tr><td>Name</td><td><input type="TEXT" class="form-control" name="sname"/></td></tr>
            <tr><td>Father</td><td><input type="TEXT" class="form-control" name="fname"/></td></tr>
            <tr><td>Mother</td><td><input type="TEXT" class="form-control" name="mname"/></td></tr>
            <tr><td>Adhar</td><td><input type="TEXT" class="form-control" name="adhar"/></td></tr>
            <tr><td>address</td><td><textarea name="address" class="form-control"></textarea></td></tr>
            <tr><td>gender</td>
                <td>
                    <select name="gender" class="form-control">
                        <option >Male</option>
                        <option >Female</option>
                    </select>
                </td>
            </tr>
            <tr><td>Category</td>
                <td>
                    <select name="category" class="form-control">
                        <option>General</option>
                        <option>OBC</option>
                        <option>SC</option>
                        <option>ST</option>
                    </select>
                </td>
            </tr>
            <tr><td>Date of Birth</td><td><input type="date" name="dob" class="form-control"/></td></tr>
            <tr><td>Phone</td><td><input type="TEXT" name="phone" class="form-control"/></td></tr>
            <tr><td>Email</td><td><input type="email" name="email" class="form-control" /></td></tr>
            <tr><td>Class</td>
                <td>
                    <select name="class" class="form-control">
                        <option>PGDCA</option>
                        <option>DCA</option>
                        <option>SC</option>
                        <option>COPA</option>
                    </select>
                </td></tr>
            <tr><td>SESSION</td><td><input type="TEXT" name="session" class="form-control"/></td></tr>
        </table>
        <button type="submit" class="btn btn-success btn-md"> Save</button>
        </form>
    </div>
    @include('sweetalert::alert')
</body>
</html>