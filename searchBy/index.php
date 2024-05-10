<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="indexStyle.css">
    <title>Pencarian Data Siswa</title>
</head>
<body>
    <h2>Pencarian Data Siswa</h2>
    <!-- <form method="get" action="hasilCari.php">
        Pilih Kategori:
        <select name="kategori">
            <option value="nis">NIS</option>
            <option value="nama">Nama</option>
            <option value="alamat">Alamat</option>
            <option value="kelamin">Jenis Kelamin</option>
        </select>
        <br><br>
        Masukkan Kata Kunci: <input type="text" name="cari">
        <br><br>
        <input type="submit" value="Cari">
    </form> -->
    <form method="get" action="hasilCari.php" class="flex flex-col md:flex-row gap-3">
      <div class="flex">
          <input type="text"  name="cari" placeholder="Search what are U looking for"
			    class="w-full md:w-80 px-3 h-10 rounded-l border-2 border-sky-500 focus:outline-none focus:border-sky-500">
        <button type="submit" class="bg-sky-500 text-white rounded-r px-2 md:px-3 py-0 md:py-1">Search</button>
      </div>
      <select id="kategori" name="kategori"
		  class="w-full h-10 border-2 border-sky-500 focus:outline-none focus:border-sky-500 text-sky-500 rounded px-2 md:px-3 py-0 md:py-1 tracking-wider">
          <option value="nis">NIS</option>
          <option value="nama">Nama</option>
          <option value="alamat">Alamat</option>
          <option value="kelamin">Jenis Kelamin</option>
	    </select>
    </form>

</body>
</html>
