<!-- $url = 'http://jsonplaceholder.typicode.com/posts';

//inisialisasi curl
$ch = curl_init();

//set opsi curl untuk mengambil url, dengan metode GET
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );

//eksekusi curl dan simpan respon
$response = curl_exec($ch);
//tutup curl
curl_close($ch);

//ubah respon dari json menjadi array 
$data = json_decode($response, true);

print_r($data); -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Posts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px auto;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
        }

        th {
            background-color: #72BF78;
            color: white;
            font-size: 18px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e0e0e0;
        }

        td {
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <h1>Data Posts</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Body</th>
            </tr>
        </thead>
        <tbody>
        <?php
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST');
        header("Access-Control-Allow-Headers: X-Requested-With");
                // Inisialisasi URL dan pengaturan CURL
                $url = 'http://jsonplaceholder.typicode.com/posts';
                $ch = curl_init();
                curl_setopt($ch,CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($ch);
                curl_close($ch);
                
                // Ubah respon JSON menjadi array
                $data = json_decode($response, true);

                // Loop untuk menampilkan data dalam tabel
                foreach ($data as $post) {
                    echo "<tr>";
                    echo "<td>" . $post['id'] . "</td>";
                    echo "<td>" . $post['title'] . "</td>";
                    echo "<td>" . $post['body'] . "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

</body>
</html>
