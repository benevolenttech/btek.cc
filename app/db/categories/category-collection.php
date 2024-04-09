<?php

namespace Db;

require_once 'app/db/DbCollection.php';
require_once 'category.php';

$categoryCol = new class implements DbCollection
{
  private array $table = [];
  public function __construct()
  {
    array_push($this->table, new Category(
      id: '0001',
      title: 'News',
      slug: 'news',
      description: 'The latest news from the world of online marketing.',
      count: 1,
    ));
    array_push($this->table, new Category(
      id: '0002',
      title: 'Events',
      slug: 'events',
      description: 'Upcoming events in the world of online marketing.',
      count: 1,
    ));
    array_push($this->table, new Category(
      id: '0003',
      title: 'Staff',
      slug: 'staff',
      description: 'Meet the team behind the magic.',
      count: 0,
    ));
    array_push($this->table, new Category(
      id: '0004',
      title: 'Projects',
      slug: 'projects',
      description: 'Our latest projects.',
      count: 0,
    ));
    array_push($this->table, new Category(
      id: '0005',
      title: 'Press',
      slug: 'press',
      description: 'Press releases from the world of online marketing.',
      count: 1,
    ));
    array_push($this->table, new Category(
      id: '0006',
      title: 'Jobs',
      slug: 'jobs',
      description: 'Job openings in the world of online marketing.',
      count: 0,
    ));
    array_push($this->table, new Category(
      id: '0007',
      title: 'Online Marketing',
      slug: 'online-marketing',
      description: 'The latest in online marketing.',
      count: 4,
    ));
    array_push($this->table, new Category(
      id: '0008',
      title: 'SEO',
      slug: 'seo',
      description: 'The latest in SEO.',
      count: 4,
    ));
  }
  public function find(): array
  {
    return array_values($this->table);
  }
  public function get(string $id): Category
  {
    return $this->table[$id];
  }
};
