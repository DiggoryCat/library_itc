<?php
$action = "importbooks";
if (isset($_GET["action"])) {
    $action = $_GET["action"];
}
switch ($action) {
        // case "default":
        //     include "views/book.php";
        //     break;
        // case "returnbook":
        //     include "views/returnbook.php";
        //     break;
        // case "borrowbook":
        //     include "views/borrowbook.php";
        //     break;
    case "importbooks":
        include "./src/views/books/importbooks.php";
        break;
    case "importbooks_action":
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $file = $_FILES['file']['tmp_name'];
            file_put_contents($file, str_replace("\xEF\xBB\xBF", "", file_get_contents($file)));

            $file_open = fopen($file, 'r');
            $db = null;
            while (($csv = fgetcsv($file_open, 1000, ",")) !== false) {
                $masach = $csv[0];
                $nhande = $csv[1];
                $tacgia = $csv[2];
                $theloai = $csv[3];
                $bosuutap = $csv[4];
                $chuyennganh = $csv[5];
                $anhbia = $csv[6];
                $thongtinxb = $csv[7];
                $vitri = $csv[8];
                $soluong = $csv[9];
                $gia = $csv[10];

                $book = new BookModel();
                $result = $book->insertBookByCSV($masach, $nhande, $tacgia, $theloai, $bosuutap, $chuyennganh, $anhbia, $thongtinxb, $vitri, $soluong, $gia);
            }
            echo "<script>alert('Thêm vào database thành công!')</script>";
        }
        break;
}
