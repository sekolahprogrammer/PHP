<?php 
/*
 * menambahkan cookie
 */
if(isset($_COOKIE['remember'])){
    // Membuat cookie yang bertahan 1 jam
    setcookie('remember', time() + 3600);
}

/*
 * menghapus cookie
 */
// membuat cookie telah kedaluarsa 1 jam yang lalu
setcookie('remember', time() - 3600);
?>