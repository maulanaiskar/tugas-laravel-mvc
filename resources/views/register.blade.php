<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="POST">
        @csrf
        <label>First name: </label><br><br>
        <input type="text" name="fname" id="name">
        <br><br>
        <label>Last name: </label><br><br>
        <input type="text" name="lname" id="name">
        <br><br>
        <label>Gender: </label>
        <br><br>
        <input type="radio" name="gender" value="0">Male <br>
        <input type="radio" name="gender" value="1">Female <br>
        <input type="radio" name="gender" value="2">Other <br><br>
        <label>Nationality: </label><br><br>
        <select name="" id="">
            <option value="indonesia">Indonesian</option>
            <option value="singaporean">Singaporean</option>
            <option value="malaysian">Malaysian</option>
            <option value="australian">Australian</option>
        </select><br><br>
        <label>Languange Spoken: </label><br><br>
        <input type="checkbox" name="" id="">Bahasa Indonesia <br>
        <input type="checkbox" name="" id="">English <br>
        <input type="checkbox" name="" id="">Other <br><br>
        <label>Bio: </label><br><br>
        <textarea name="" id="" cols="30" rows="10"></textarea><br>
        <button type="submit">Sign Up</button>
    </form>
</body>

</html>