<?php

declare(strict_types=1);

namespace app\models;

use app\classes\Bind;
use app\traits\PersistDB;
use app\models\Connection;

abstract class Model
{
  use PersistDB;

  protected $connection;

  public function __construct()
  {
    $this->connection = Bind::get('connection');
  }

  public function all() 
  {
    $sql = "SELECT * FROM {$this->table}";
    $list = $this->connection->prepare($sql);
    $list->execute();

    return $list->fetchAll();
  }

  public function find($field, $value)
  {
    $sql = "SELECT * FROM {$this->table} WHERE {$field} = :{$field}";
    $list = $this->connection->prepare($sql);
    $list->bindValue($field, $value);
    $list->execute();

    return $list->fetch();
  }

  public function delete($field, $value)
  {
    $sql = "DELETE FROM {$this->table} WHERE {$field} = :{$field}";
    $delete = $this->connection->prepare($sql);
    $delete->bindValue($field, $value);
    $delete->execute();

    return $delete->rowCount();
  }
}
