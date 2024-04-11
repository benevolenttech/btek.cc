<?php

/**
 * A class to manage a collection rows in an in-memory database
 * 
 * Features:
 * - converts fields ending with 'At' to timestamps
 * - updates the 'updatedAt' field when a row is updated
 * - has popular methods for managing rows in the table:
 *   - find: search for rows in the table with popular filters
 *   - get: get a row by id
 *   - set: add a row to the table
 *   - up: update a row in the table
 * 
 * Assumptions:
 * - The table is an associative array with the row id as the key
 * - all rows must have an 'id', 'createdAt', and 'updatedAt' fields
 * 
 * Usage:
 * - Extend this class and define the table properties
 * - Override the constructor to populate the table
 * - Extend the other methods to hint on row type, add more functionality if needed
 * 
 */
class DbCollection
{
  public array $table = [];

  public function __construct()
  {
  }

  public function del(string $id): void
  {
    unset($this->table[$id]);
  }
  public function find(
    /* can supply rows to search in */
    ?array $rows = null,
    ?int $limit = 100,
    ?array $exclude = null,
    ?array $sortBy = null,
    ?string $sortDir = null,
  ): array {
    $rows = $rows ?? array_values($this->table);
    if ($exclude) {
      $rows = array_filter($rows, function ($p) use ($exclude) {
        return !in_array($p->id, $exclude);
      });
    }
    if ($sortBy) {
      $sortDir = $sortDir ?? 'asc';
      usort($rows, function ($a, $b) use ($sortBy, $sortDir) {
        foreach ($sortBy as $field) {
          $cmp = $a->$field <=> $b->$field;
          if ($cmp !== 0) {
            return $sortDir === 'asc' ? $cmp : -$cmp;
          }
        }
        return 0;
      });
    }
    if ($limit) {
      $rows = array_slice($rows, 0, $limit);
    }
    return $rows;
  }
  public function f(
    ?array $rows = null,
    ?int $limit = 100,
    ?array $exclude = null,
    ?array $sortBy = null,
    ?string $sortDir = "asc",
  ): array {
    return $this->find(
      rows: $rows,
      limit: $limit,
      exclude: $exclude,
      sortBy: $sortBy,
      sortDir: $sortDir,
    );
  }
  public function get(string $id): mixed
  {
    return $this->table[$id];
  }
  public function g(string $id): mixed
  {
    return $this->get($id);
  }
  public function set(mixed $value): mixed
  {
    foreach ($value as $key => $val) {
      if (preg_match('/At$/', $key)) {
        if (!$val) {
          $value->$key = time();
        }
        if (is_string($val)) {
          $value->$key = strtotime($val);
        }
      }
    }
    $this->table[$value->id] = $value;
    return $value;
  }
  public function up(string $id, mixed $value): mixed
  {
    $value->updatedAt = time();
    $this->set($value);
    return $value;
  }
}

class DbRow
{
  public string $id;
  public int $createdAt;
  public int $updatedAt;

  public function __construct(
    ?string $id = null,
    mixed $createdAt = null,
    mixed $updatedAt = null,
  ) {
    $this->id = $id ?? uniqid();

    if (is_string($createdAt)) {
      $createdAt = strtotime($createdAt);
    }
    if (is_string($updatedAt)) {
      $updatedAt = strtotime($updatedAt);
    }

    $this->createdAt = $createdAt ?? time();
    $this->updatedAt = $updatedAt ?? time();
  }
}
