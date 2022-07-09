<?php

declare(strict_types=1);

namespace app\models;

use Closure;
use Throwable;

class Transaction extends Model
{
  public function transactions(Closure $callback)
  {
    try {
      $this->connection->beginTransaction();

      $callback();

      $this->connection->commit();

      header('location:/');
    } catch(Throwable $e) {
      $this->connection->rollback();

      dd($e->getMessage());
    }
  }

  public function model($model)
  {
    return new $model;
  }

  public function __get($name)
  {
    if (!property_exists($this, $name)) {
      $model = __NAMESPACE__ . '\\' . ucfirst($name);
      return new $model();
    }
  }

}
