<?php

class User
{
    private $dbh;

    private $usersTableName = 'users';

    public function __construct($database, $host, $databaseUsername, $databaseUserPassword)
    {
        try {

            $this->dbh =
                new PDO(sprintf('mysql:host=%s;dbname=%s', $host, $database),
                    $databaseUsername,
                    $databaseUserPassword
                );

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function create($username, $password)
    {
        $password = $this->passwordHashed($password);

        $statement = $this->dbh->prepare(
            'INSERT INTO '.$this->usersTableName.' (username, password) VALUES (:username, :password)'
        );

        if (false === $statement) {
            throw new Exception('Invalid prepare statement');
        }

        if (false === $statement->execute([
                ':username' => $username,
                ':password' => $password,
            ])) {
            throw new Exception(implode(' ', $statement->errorInfo()));
        }
    }

    public function exists($username, $password)
    {
        $statement = $this->dbh->prepare(
            'SELECT * from '.$this->usersTableName.' where username = :username'
        );

        if (false === $statement) {
            throw new Exception('Invalid prepare statement');
        }

        $result = $statement->execute([':username' => $username]);

        if (false === $result) {
            throw new Exception(implode(' ', $statement->errorInfo()));
        }

        $row = $statement->fetch(PDO::FETCH_ASSOC);

        if (!is_array($row)) {
            return false;
        }

        return password_verify($password, $row['password']);
    }

}

