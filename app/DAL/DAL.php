<?php
/**
 * Created by IntelliJ IDEA.
 * User: patrick
 * Date: 8/10/18
 * Time: 1:08 PM
 */

namespace App\DAL;


abstract class DAL
{
    protected function getPdo() {
        $host = 'db';
        $db   = 'arena';
        $user = 'root';
        $pass = 'foo';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $pdo = new \PDO($dsn, $user, $pass, $opt);

        return $pdo;
    }
}