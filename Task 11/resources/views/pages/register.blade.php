<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
</head>
<body>
    <h1>Buat akun</h1>

    <h3>Sign up </h3>

    <form action="/welcome" method="POST">
        @csrf
        <label for="">Nama (awal):</label><br><br>
        <input type="text" name="namaAwal" id="nama">
        <br><br>
        <label for="">Nama (terakhir):</label><br><br>
        <input type="text" name="namaAkhir" id="nama2"><br><br>
        <label for="">Gender</label><br><br>
        <input type="radio">Laki-Laki <br>
        <input type="radio">Perempuan <br>
        <input type="radio">Lainnya <br>
        <br>
        <label for="">Kewarganegaraan:</label><br><br>
        <select name="nasionalis">
            <option value="indonesia">Indonesia</option>
            <option value="malaysia">Malaysia</option>
            <option value="filiphina">Filiphina</option>
            <option value="singapore">Singapore</option>
            <option value="singapore">Brunei</option>
            <option value="singapore">Vietnam</option>
        </select><br><br>
        <label for="">Bahasa :</label><br><br>
        <input type="checkbox" name="bahasa" id="">Bahasa Indonesia <br>
        <input type="checkbox" name="bahasa" id="">English <br>
        <input type="checkbox" name="bahasa" id="">Other <br><br>
        <label for="">Bio:</label><br><br>
        <textarea name="bio" id="" cols="30" rows="10"></textarea><br>
        <button type="submit">Sign Up</button>
    </form>
    <a href="/">Back</a>
</body>
</html>