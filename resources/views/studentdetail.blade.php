<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form method="POST" action='/store'>
            @csrf
           
        <table>
            <tr><th><td>Students Detial</td></th></tr>
            <tr><td><input type="hidden"/></td></tr>
            <tr><td>Name</td><td><input type="TEXT" name="sname"/></td></tr>
            <tr><td>Father</td><td><input type="TEXT" name="fname"/></td></tr>
            <tr><td>Mother</td><td><input type="TEXT" name="mname"/></td></tr>
            <tr><td>Adhar</td><td><input type="TEXT" name="adhar"/></td></tr>
            <tr><td>address</td><td><textarea name="address"></textarea></td></tr>
            <tr><td>gender</td>
                <td>
                    <select name="gender">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </td>
            </tr>
            <tr><td>Category</td>
                <td>
                    <select name="category">
                        <option>General</option>
                        <option>OBC</option>
                        <option>SC</option>
                        <option>ST</option>
                    </select>
                </td>
            </tr>
            <tr><td>Date of Birth</td><td><input type="date" name="dob"/></td></tr>
            <tr><td>Phone</td><td><input type="TEXT" name="phone"/></td></tr>
            <tr><td>Email</td><td><input type="email" name="email" /></td></tr>
            <tr><td>Class</td>
                <td>
                    <select name="class">
                        <option>PGDCA</option>
                        <option>DCA</option>
                        <option>SC</option>
                        <option>COPA</option>
                    </select>
                </td></tr>
            <tr><td>SESSION</td><td><input type="TEXT" name="session"/></td></tr>
        </table>
        <button type="submit"> Save</button>
        </form>
    </div>
</body>
</html>