<?php
$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "/ssl/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, "ecoturismo-azure-website.mysql.database.azure.com", "administrador", "Military2000", "ecoturismo", 3306, MYSQLI_CLIENT_SSL);?>