<?php
$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL);
mysqli_real_connect($conn, "ecoturismo-azure-website.mysql.database.azure.com", "administrador", "{your_password}", "{your_database}", 3306, MYSQLI_CLIENT_SSL);
?>




bpyynbcdsw
0Z24BN2L6CR6XVX5$