<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <form action="/welcome" method="post">
        @csrf
        <label>Frist name:</label><br>
        <input type="text" name="FirstName"><br><br>
        <label>Last name:</label><br>
        <input type="text" name="LastName"><br><br>
        <label>Gender:</label><br>
        <input type="radio" name="Gender">Male<br>
        <input type="radio" name="Gender">Female<br>
        <input type="radio" name="Gender">Other<br><br>
        <label>Nationality:</label><br>
        <select name="Nationality">
            <option value="">Indonesian</option>
            <option value="">English</option>
            <option value="">Japan</option>
            <option value="">German</option>
            <option value="">Spain</option>
            <option value="">United States</option>
        </select><br><br>
        <label>Language Spoken:</label><br>
        <input type="checkbox">Bahasa Indonesia <br>
        <input type="checkbox">English <br>
        <input type="checkbox">Other<br><br>
        <label>Bio:</label><br>
        <textarea cols="20" rows="10"></textarea><br><br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>