<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mendaftar</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <form action="{{route('welcome')}}" method="post">
        @csrf
        <p><b>Sign Up Form</b></p>
        <label for="">First name:</label><br><br>
        <input type="text" name="nama_depan"><br><br>
        <label for="">Last name:</label><br><br>
        <input type="text" name="nama_belakang"><br><br>
        <label for="">Gender</label><br><br>
        <input type="radio" name="" id="">Male <br>
        <input type="radio" name="" id="">Female <br>
        <input type="radio" name="" id="">Other <br> <br>
        <label for="">Nationality:</label><br><br>
        <select>
            <option value="indonesia">indonesia</option>
            <option value="malaysia">malaysia</option>
            <option value="singapura">Singapura</option>
        </select><br><br>
        <label for="">Language Spoken:</label><br><br>
        <input type="checkbox" name="" id="">indonesia <br>
        <input type="checkbox" name="" id="">English <br>
        <input type="checkbox" name="" id="">Other <br> <br>
        <label for="">Bio:</label><br><br>
        <textarea name="" id="" cols="30" rows="10"></textarea> <br> <br>
        <button type="submit">Sign Up</button>
    </form>

</body>

</html>