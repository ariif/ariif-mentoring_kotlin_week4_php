<?php
include_once('koneksi.php');

if (!empty($_POST['id_mahasiswa'])) {
    $id = $_POST['id_mahasiswa'];

    $query = "DELETE FROM mahasiswa WHERE id_mahasiswa = '$id'";
    $delete = mysqli_query($koneksi, $query);


            if($delete) {
                set_response(true, "Success delete data");
            }else {
                set_response(false, "Failed delete data");
            }

} else {
    set_response(false, "Id harus diisi");
}


function set_response($isSuccess, $message){
$result = array(
'isSuccess' => $isSuccess,
'message' => $message
);
    echo json_encode($result);
}
