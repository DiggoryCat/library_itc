<?php 
class HistoryModel{
    public function __construct()
    {
    }
    public function getBorrowList()
    {
        $db = new ConnectModel();
        $sql = "SELECT * FROM danhsachmuon ";
        $result = $db->getList($sql);
        return $result;
    }

    public function getReturnList()
    {
        $db = new ConnectModel();
        $sql = "SELECT * FROM danhsachtra ";
        $result = $db->getList($sql);
        return $result;
    }
}

?>