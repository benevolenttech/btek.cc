<?php
class DbCollection
{
  public array $table = [];

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
    ?string $sortDir = "asc",
  ): array {
    $rows = $rows ?? array_values($this->table);
    if ($exclude) {
      $rows = array_filter($rows, function ($p) use ($exclude) {
        return !in_array($p->id, $exclude);
      });
    }
    if ($sortBy) {
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
  public function set(string $id, mixed $value): void
  {
    $this->table[$id] = $value;
  }
}
