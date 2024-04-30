<!-- Nama: [Saeful Rizal], Nim : 2207056, Kelas : RPL-4A -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <style>
        body {
            display: flex;
            font-size: 20px;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f2f2f2;
        }

        .calculator-container {
            text-align: center;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            width: 300px;
        }

        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 18px;
            box-sizing: border-box;
        }

        select {
            text-align-last:center;
            font-size: 24px;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            background-color: rgb(37, 150, 190);
            color: white;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #07457e;
        }

        #hasil {
            margin-top: 20px;
            font-size: 30px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="calculator-container">
    <h2>Kalkulator Sederhana</h2>
    <form method="post">
        <input type="text" name="num1" placeholder="Angka pertama" required>
        <select name="operator" required>
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">*</option>
            <option value="bagi">/</option>
        </select>
        <input type="text" name="num2" placeholder="Angka kedua" required>
        <button type="submit" name="calculate">Hitung</button>
    </form>
    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        switch ($operator) {
            case 'tambah':
                $hasil = $num1 + $num2;
                break;
            case 'kurang':
                $hasil = $num1 - $num2;
                break;
            case 'kali':
                $hasil = $num1 * $num2;
                break;
            case 'bagi':
                if ($num2 != 0) {
                    $hasil = $num1 / $num2;
                } else {
                    $hasil = "Tidak bisa dibagi dengan nol";
                }
                break;
            default:
                $hasil = "Operator tidak valid";
                break;
        }

        echo "<div id='hasil'>Hasil: $hasil</div>";
    }
    ?>
</div>

</body>
</html>
