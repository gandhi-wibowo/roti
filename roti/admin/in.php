<?php
session_start();
include '../include/con.php';
date_default_timezone_set('Asia/Jakarta');
$tgl= mktime(date("d"),date("m"),date("Y"));
$date = date("Y-m-d", $tgl);
$jam = date("H:i:s");

if (isset($_POST['submit'])){
    $target_dir = "../dist/img/roti/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $image_name = basename($_FILES["image"]["name"]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $_POST['nm_roti']== NULL ){
        echo "Nama tidak boleh kosong, dan File harus jpg jpeg";
        header("location:tambah.php");       
    }
    else{
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) { // upload gambar

            $nm_roti=$_POST['nm_roti'];
            $desk = $_POST['des_roti'];
            $id_ses = $_SESSION['id'];
            
            $query = "INSERT INTO `cake` (`id_cake`, `id_user`, `nama_cake`, `jam`, `tgl`, `gambar`, `deskripsi`) VALUES (NULL,'$id_ses','$nm_roti','$jam','$date','$image_name','$desk');";
            $exe_1 = mysql_query($query);
            if ($exe_1){
                $quer = "SELECT max(id_cake) as last_id FROM cake LIMIT 1";
                $result = mysql_query($quer);
                $row = mysql_fetch_array($result);
                $l_id = $row['last_id'];
                // id di ambil dari cake, nilai id terbesar
                // gunakan untuk patokan

                for($i=1;$i<=15;$i++){
                    $nama[$i] = $_POST['nama_'.$i];
                    $jumlah[$i] = $_POST['jumlah_'.$i];
                    $satuan[$i] = $_POST['satuan_'.$i];    
                    if($nama[$i]!=NULL){
                        $que = "INSERT INTO `bahan` (`id_bahan`,`id_cake`, `nama_bahan`, `jumlah_bahan`,`satuan_bahan`) 
                                             VALUES (NULL, '$l_id','$nama[$i]','$jumlah[$i]','$satuan[$i]');";
                        mysql_query($que); 
                        header("location:index.php");
                    }
                    else{
                        header("location:index.php");
                    }
                }        
            }
            else {
                echo "Gagal Input data Kue !";
                header("location:index.php");
            }
        } 
        else{
            echo "Gagal Upload gambar";
        }
    }    
}
?>