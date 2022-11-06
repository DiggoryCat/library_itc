<?php
class BookModel
{
    public function __construct()
    {
    }

    public function getDanhSachMuon($month)
    {
        $db = new ConnectModel();
        $sql = "SELECT * FROM danhsachmuon WHERE MONTH(ngaymuon) = $month";
        $result = $db->getList($sql);
        return $result;
    }

    public function getDanhSachTra($month)
    {
        $db = new ConnectModel();
        $sql = "SELECT * FROM danhsachtra WHERE MONTH(ngaytra) = $month";
        $result = $db->getList($sql);
        return $result;
    }

    function insertBookByCSV($masach, $nhande, $tacgia, $theloai, $bosuutap, $chuyennganh, $anhbia, $thongtinxb, $vitri, $soluong, $gia)
    {
        $db = new ConnectModel();
        $query = "INSERT INTO sach(masach, nhande, tacgia, theloai, bosuutap, chuyennganh, anhbia, thongtinxb, vitri, soluong, gia) VALUES ($masach, '$nhande', '$tacgia', '$theloai', '$bosuutap', '$chuyennganh', '$anhbia', '$thongtinxb', '$vitri', $soluong, $gia)";
        $result = $db->exec($query);
        return $result;
    }
}
