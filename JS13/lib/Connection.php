<?php
$use_driver = 'sqlsrv'; // mysql atau sqlsrv
$host = 'LAPTOP-4J06BSBO';
$username = ''; //'sa';
$password = '';
$database = 'dasar_web';
$db = null; // Pastikan $db diinisialisasi

if ($use_driver == 'mysql') {
    // Koneksi menggunakan MySQLi
    try {
        $db = new mysqli('localhost', $username, $password, $database);
        if ($db->connect_error) {
            die('Connection DB failed: ' . $db->connect_error);
        }
    } catch (Exception $e) {
        die($e->getMessage());
    }
} else if ($use_driver == 'sqlsrv') {
    // Koneksi menggunakan SQL Server
    $credential = [
        'Database' => $database,
        'UID' => $username,
        'PWD' => $password
    ];
    try {
        $db = sqlsrv_connect($host, $credential);
        if (!$db) {
            $errors = sqlsrv_errors();
            die('Connection DB failed: ' . $errors[0]['message']);
        }
    } catch (Exception $e) {
        die($e->getMessage());
    }
}

// Fungsi untuk menjalankan query
function executeQuery($query)
{
    global $use_driver, $db;

    if ($use_driver == 'mysql') {
        $result = $db->query($query);
        if (!$result) {
            die('Query failed: ' . $db->error);
        }
        return $result;
    } else if ($use_driver == 'sqlsrv') {
        $result = sqlsrv_query($db, $query);
        if ($result === false) {
            $errors = sqlsrv_errors();
            die('Query failed: ' . $errors[0]['message']);
        }
        return $result;
    }
}
?>
