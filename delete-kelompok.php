<?php
    include "conn.php";

    //NIM yang akan dihapus diberikan melalui parameter GET
    $NIM = isset($_GET['NIM']) ? $_GET['NIM'] : "";

    // Jika NIM untuk penghapusan tersedia
    if (!empty($NIM)) {
        // Query untuk menghapus data dengan NIM tertentu
        $sql_delete = "DELETE FROM `kelompok10` WHERE `NIM` = '".$NIM."'";

        $query_delete = mysqli_query($conn, $sql_delete);
        
        if ($query_delete) {
            $msg = "Data dengan NIM ".$NIM." berhasil dihapus";
        } else {
            $msg = "Gagal menghapus data dengan NIM ".$NIM;
        }

        $response = array(
            'status' =>'OK',
            'msg' => $msg
        );

        echo json_encode($response);
    } else {
        $response = array(
            'status' =>'Error',
            'msg' => 'NIM tidak diberikan'
        );

        echo json_encode($response);
    }
?>
