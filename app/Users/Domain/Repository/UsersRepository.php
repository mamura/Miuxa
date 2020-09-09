<?php
namespace App\Users\Domain\Repository;

use Miuxa\Database\Database;

class UsersRepository extends Database
{
    public function getUsers()
    {
        $sql = 'SELECT * FROM user';
        $this->setQuery($sql);

        return $this->fetchAll();
    }

    public function getUser($id)
    {
        $sql = 'SELECT * FROM user WHERE id = ' . $id;
        $this->setQuery($sql);
        return $this->fetchAll();
    }
}