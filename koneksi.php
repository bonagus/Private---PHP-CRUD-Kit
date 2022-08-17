<?php
  // Koneksi PDO
  $DBDNS    = "mysql";          // Database type.
  $DBHOST   = "localhost";      // Database Host
  $DBNAME   = "";               // Database Name
  $DBUNAME  = "root";           // Database User
  $DBPWORD  = "";               // Database Password
  $con = new  PDO("$DBDNS:host=$DBHOST;dbname=$DBNAME;charset=utf8", "$DBUNAME", "$DBPWORD");
?>