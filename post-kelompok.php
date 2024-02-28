<?php
    //koneksi ke database
    include "conn.php";

    //variabel post
    $nama = isset($_POST['nama']) ? $_POST['nama'] : "";
    
    $NIM = isset($_POST['NIM']) ? $_POST['NIM'] : "";
    
    $kelas = isset($_POST['kelas']) ? $_POST['kelas'] : "";
    $jurusan = isset($_POST['jurusan']) ? $_POST['jurusan'] : "";

    //Query menambahkan data
    $sql = "INSERT INTO `kelompok10` (`NIM`, `nama`, `kelas`, `jurusan`) 
    VALUES ('".$NIM."', '".$nama."', '".$kelas."', '".$jurusan."');";
   

    //query
    $query = mysqli_query($conn, $sql);
    if($query){
        $msg = "Simpan data kelompok berhasil";
    }else{
        $msg = "Simpan data kelompok gagal";
    }

    $response = array(
        'status' =>'OK',
        'msg' =>$msg
    );

    echo json_encode($response);
?>
