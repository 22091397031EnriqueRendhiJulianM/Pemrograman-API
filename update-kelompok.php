<?php
    include "conn.php";

    //Menangkap variabel
    $NIM = $_GET['NIM'];

    //bagian yang akan diubah
    $nama = isset($_POST['nama']) ? $_POST['nama'] : "";
    $jurusan = isset($_POST['jurusan']) ? $_POST['jurusan'] : "";
    $kelas = isset($_POST['kelas']) ? $_POST['kelas'] : "";


    $sql = "UPDATE `kelompok10` SET `nama` = '".$nama."',
    `jurusan` = '".$jurusan."', `kelas` = '".$kelas."'
    WHERE `kelompok10`.`NIM` = ".$NIM."; ";

    $query = mysqli_query($conn, $sql);
    if($query){
        $msg = "Update data kelompok berhasil";
    }else{
        $msg = "Update data kelompok gagal";
    }

    $response = array(
        'status' =>'OK',
        'msg' =>$msg
    );

    echo json_encode($response);
?>
