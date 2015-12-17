<?php
include 'include/con.php';
$cari = $_GET['cari'];
if($cari!=NULL){
    $query = "SELECT * FROM  `cake` WHERE nama_cake LIKE  '%$cari%'";
    $result = mysql_query($query);
    while ($row = mysql_fetch_array($result)) {
        
        echo 
                  "<div class='attachment-block clearfix'>"
                . "<a href='detail.php?id=".$row['id_cake']."'><img class='attachment-img' src='dist/img/roti/".$row['gambar']."' alt='attachment image'></a>"
                . "<div class='attachment-pushed'>"
                . "<a href='detail.php?id=".$row['id_cake']."'><h3 class='attachment-heading'>".$row['nama_cake']."</h3></a>"
                . "<h5 class='attachment-heading'>".$row['tgl']."</h5>"
                . "<div class='attachment-text'>"
                . $row['deskripsi']
                . "</div>"
                . "</div>"
                . "</div>";
    }    
}
else {
    echo "<tr><td>Masukkan kata kunci !</td></tr>";
}

?>