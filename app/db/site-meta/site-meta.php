<?php
require_once 'app/db/db.php';
class SiteMeta extends DbRow
{
  public function __construct(
    public string $name,
    public string $value,
    ?string $id = null,
    mixed $createdAt = null,
    mixed $updatedAt = null,
  ) {
    parent::__construct($id, $createdAt, $updatedAt);
  }
}
