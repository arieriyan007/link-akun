<?php 
// lakukakn panggil LOG
if (isset($_SESSION['log'])) {
    
} else {
    header("location:../index.php?pesan=silahkanlogin");
}

?>