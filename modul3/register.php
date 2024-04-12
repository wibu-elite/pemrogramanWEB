<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>

    <form action="register.php" method="get">
        <h1>FORM REGISTRASI</h1>
        <table>
            <tr>
                <td>Nama</td>
                <td align="center">:</td>
                <td>
                    <input type="text" size="50">
                </td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td align="center">:</td>
                <td>
                    <input type="text" size="50">
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td align="">:</td>
                <td>
                    <input type="date">
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td align="center">:</td>
                <td>
                    <input type="radio" name="sex" value="Kanojo">
                    <label for="">Kanojo</label>
                    <input type="radio" name="sex" value="Kare">
                    <label for="">Kare</label>
                </td>
            </tr>
            <tr>
                <td>Almat</td>
                <td align="center">:</td>
                <td>
                    <input type="text" size="100">
                </td>
            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <td align="center">:</td>
                <td>
                    <input type="radio" name="school" value="SMK">
                    <label for="">SMK</label>
                    <input type="radio" name="school" value="SMA">
                    <label for="">SMA</label>
                    <input type="radio" name="school" value="MA">
                    <label for="">MA</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="text" size="25" placeholder="nama sekolah asal">
                </td>
            </tr>
            <tr>
                <td><b>Nilai UAN</b></td>
                <td align="center"><b>:</b></td>
                <tr>
                    <td>
                        <ul>
                            <li>Matematika</li>
                        </ul>
                    </td>
                    <td align="center">:</td>
                    <td>
                        <input type="number" step="0.1" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>Bahasa Indonesia</li>
                        </ul>
                    </td>
                    <td align="center">:</td>
                    <td>
                        <input type="number" step="0.1" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>Bahasa Inggris</li>
                        </ul>
                    </td>
                    <td align="center">:</td>
                    <td>
                        <input type="number" step="0.1" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li ali>Kejuruan</li>
                        </ul>
                    </td>
                    <td align="center">:</td>
                    <td>
                        <input type="number" step="0.1" >
                    </td>
                </tr>
            </tr>
            <tr>
                <td><b>Jurusan yang Dipilih</b></td>
                <td align="center"><b>:</b></td>
                <tr>
                    <td>
                        <ul>
                            <li>Pilihan 1</li>
                        </ul>
                    </td>
                    <td align="center">:</td>
                    <td>
                        <select name="major" id="first-major">
                            <option value="tif">Teknik Informatika</option>
                            <option value="tif">Teknik Industri</option>
                            <option value="tif">Pendidikan Pancasila dan Kewarganegaraan</option>
                            <option value="tif">Pendidikan Ekonomi</option>
                            <option value="tif">Pendidikan Biologi</option>
                            <option value="tif">Pendidikan Matematika</option>
                            <option value="tif">Pendidikan Guru Paud</option>
                            <option value="tif">Pendidikan Bahasa dan Sastra</option>
                            <option value="tif">Pendidikan Guru SD</option>
                            <option value="tif">Ilmu Komunikasi</option>
                            <option value="tif">Ilmu Polotik</option>
                            <option value="tif">Biologi</option>
                            <option value="tif">Matematika</option>
                            <option value="tif">Ilmu Perikanan</option>
                            <option value="tif">Ilmu Kelautan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>Pilihan 2</li>
                        </ul>
                    </td>
                    <td align="center">:</td>
                    <td>
                        <select name="major" id="first-major">
                            <option value="tif">Teknik Informatika</option>
                            <option value="tif">Teknik Industri</option>
                            <option value="tif">Pendidikan Pancasila dan Kewarganegaraan</option>
                            <option value="tif">Pendidikan Ekonomi</option>
                            <option value="tif">Pendidikan Biologi</option>
                            <option value="tif">Pendidikan Matematika</option>
                            <option value="tif">Pendidikan Guru Paud</option>
                            <option value="tif">Pendidikan Bahasa dan Sastra</option>
                            <option value="tif">Pendidikan Guru SD</option>
                            <option value="tif">Ilmu Komunikasi</option>
                            <option value="tif">Ilmu Polotik</option>
                            <option value="tif">Biologi</option>
                            <option value="tif">Matematika</option>
                            <option value="tif">Ilmu Perikanan</option>
                            <option value="tif">Ilmu Kelautan</option>
                        </select>
                    </td>
                </tr>
            </tr>
            <tr>
                <td>Alasan Masuk Unirow</td>
                <td align="center">:</td>
                <td>
                    <textarea name="reason" id="reason" cols="37" rows="5"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="checkbox">
                    Dengan ini menyatakan bahwa data yang diinputkan sesuai dengan sebenarnya
                </td>
            </tr>
            <tr>
                <td colspan="20" align="right">
                    <button>Daftar</button>
                </td>
                <td>
                    <input type="reset" value="Cancel">
                </td>
            </tr>
        </table>
    </form>
    
</body>
</html>