<?php

namespace app\models\querybuilder;

class Update
{
  private $where;

  public function where($where)
  {
    $this->where = $where;

    return $this;
  }

  public function sql($table, $attributes)
  {
    $where = array_keys($this->where);
    $sql = "UPDATE {$table} SET ";

    unset($attributes[array_keys($this->where)[0]]);
    foreach ($attributes as $key => $value) {
      $sql .= "{$key} = :{$key}, ";
    }

    $sql = rtrim($sql, ', ');
    $sql .= " WHERE {$where[0]} = :{$where[0]}";

    return $sql;
  }
}