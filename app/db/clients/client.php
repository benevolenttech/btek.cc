<?php
require_once 'app/db/db.php';

class Client extends DbRow
{
  public function __construct(
    public string $name,
    public string $subtitle,
    public string $externalUrl,
    public string $imageUrl,
    ?string $id = null,
    mixed $createdAt = null,
    mixed $updatedAt = null,
  ) {
    parent::__construct($id, $createdAt, $updatedAt);
  }
}
