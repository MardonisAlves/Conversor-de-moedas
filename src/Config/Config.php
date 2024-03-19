<?php

namespace Cyber\Config;

class Config
{
    protected static function connectionDb()
    {
        $conn = [
            'driver' => $_ENV['MYSQL_DRIVER'] ?? null,
            'host' => $_ENV['MYSQL_HOST'] ?? null,
            'port' => $_ENV['MYSQL_PORT'] ?? null,
            'database' => $_ENV['MYSQL_DATABASE'] ?? null,
            'username' => $_ENV['MYSQL_USER'] ?? null,
            'password' => $_ENV['MYSQL_PASSWORD'] ?? null,
        ];
    
        // Verificar se todas as variáveis de ambiente necessárias estão definidas
        if (in_array(null, $conn, true)) {
            throw new \RuntimeException('Algumas variáveis de ambiente não estão definidas.');
        }
    
        return $conn;
    }
}
