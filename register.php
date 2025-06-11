<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulir Pendaftaran</title>
</head>
<body>
  <h2>Formulir Pendaftaran</h2>
  <form action="#" method="post">
    <!-- Nama lengkap -->
    <label for="nama">Nama Lengkap:</label><br>
    <input type="text" id="nama" name="nama" required><br><br>

    <!-- Email -->
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <!-- Password -->
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required><br><br>

    <!-- Umur -->
    <label for="umur">Umur:</label><br>
    <input type="number" id="umur" name="umur"><br><br>

    <!-- Tanggal lahir -->
    <label for="tgl_lahir">Tanggal Lahir:</label><br>
    <input type="date" id="tgl_lahir" name="tgl_lahir"><br><br>

    <!-- Warna favorit -->
    <label for="warna">Warna Favorit:</label><br>
    <input type="color" id="warna" name="warna"><br><br>

    <!-- Upload foto -->
    <label for="foto">Upload Foto:</label><br>
    <input type="file" id="foto" name="foto"><br><br>

    <!-- Jenis kelamin -->
    <label>Jenis Kelamin:</label><br>
    <input type="radio" id="laki" name="jenis_kelamin" value="Laki-laki">
    <label for="laki">Laki-laki</label><br>
    <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
    <label for="perempuan">Perempuan</label><br><br>

    <!-- Hobi -->
    <label>Hobi:</label><br>
    <input type="checkbox" id="membaca" name="hobi" value="Membaca">
    <label for="membaca">Membaca</label><br>
    <input type="checkbox" id="traveling" name="hobi" value="Traveling">
    <label for="traveling">Traveling</label><br>
    <input type="checkbox" id="olahraga" name="hobi" value="Olahraga">
    <label for="olahraga">Olahraga</label><br><br>

    <!-- Negara -->
    <label for="negara">Negara:</label><br>
    <select id="negara" name="negara">
      <option value="USA">USA</option>
      <option value="UK">UK</option>
      <option value="Indonesia">Indonesia</option>
    </select><br><br>

    <!-- Biografi -->
    <label for="bio">Biografi Singkat:</label><br>
    <textarea id="bio" name="bio" rows="4" cols="50"></textarea><br><br>

    <button type="submit">Kirim</button>
  </form>
</body>
</html>
