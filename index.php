<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
    echo "hello world";
    echo "<br>";
    $nama = "alip";
    $umur = 19;

    echo "nama saya adalah ", $nama;
    echo "<br>";
    echo "umur saya adalah ", $umur;
    echo "<br>";

    define("AUTHOR", "Alif Nur rachman");
    define("APP_VERSION", "100");

    echo AUTHOR;
    echo "<br>";

    $Mahasiswa = ["Alip", "Fathon", "Goku", "Enjay", "Rojak"];
    echo "<br>";
$murid = [
        [
            "NIM" => 01,
            "name" => "Alip",
            "JK" => "Laki-laki",
            "Kelas" => "3WD1",
            "Kota Asal" => "Bekasi"
        ],
        [
            "NIM" => 02,
            "name" => "Fathon",
            "JK" => "Laki-laki",
            "Kelas" => "3WD1",
            "Kota Asal" => "Karawang"
        ],
        [
            "NIM" => 03,
            "name" => "Goku",
            "JK" => "Laki-laki",
            "Kelas" => "3WD1",
            "Kota Asal" => "Cikarang"
        ],
        [
            "NIM" => 04,
            "name" => "Enjay",
            "JK" => "Laki-laki",
            "Kelas" => "3WD1",
            "Kota Asal" => "Serang"
        ],
        [
            "NIM" => 05,
            "name" => "Rojak",
            "JK" => "Laki-laki",
            "Kelas" => "3WD1",
            "Kota Asal" => "Bontang"
        ],
    ];

?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>NIM</th>
                <th>name</th>
                <th>JK</th>
                <th>Kelas</th>
                <th>Kota Asal</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            foreach ($murid as $key => $value){
                echo "<tr>
                    <th scope 'row'>" . $value["NIM"] . "</th>
                    <td>" . $value["name"] . "</td>
                    <td>" . $value["JK"] . "</td>
                    <td>" . $value["Kelas"] . "</td>
                    <td>" . $value["Kota Asal"] . "</td>
                </tr>";
            }

    ?>  
        </tbody>
    </table>
    <div class="row ms-1">
        <?php
        foreach ($murid as $key => $value){
            echo "
            <div class='col-2 mt-5 ms-5'>
                <div class='card' style='width: 18rem;'>
                    <ul class='list-group list-group-flush'>
                        <li class='list-group-item'>nim : " . $value["NIM"] . "</li>
                        <li class='list-group-item'>nama : " . $value["name"] . "</li>
                        <li class='list-group-item'>jenis kelamin : " . $value["JK"] . "</li>
                        <li class='list-group-item'>kelas : " . $value["Kelas"] . "</li>
                        <li class='list-group-item'>kota asal : " . $value["Kota Asal"] . "</li>
                    </ul>
                </div>
            </div>
            ";
        }

        ?>
    </div>

</body>
</html>

