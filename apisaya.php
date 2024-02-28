<?php
    //koneksi ke database mysql
    include "conn.php";

    //membuat query
    $sql = "SELECT * FROM kelompok10";
    $query = mysqli_query($conn, $sql);
    while($data = mysqli_fetch_array($query)){
        //echo $data["nama_pegawai"]." ";

        $item[] = array(
            'nama' =>$data["nama"],
            'NIM'  =>$data["NIM"]
        );
    }

    $response = array(
        'status' =>'OK',
        'data' =>$item
    );

    echo json_encode($response);
?>
