<?php
require_once 'src/data/db-collection.php';
require_once 'category.php';

$_categories = [
  new Category(
    '0001',
    'News',
    'news',
    'The latest news from the world of online marketing.',
    1
  ),
  new Category(
    '0002',
    'Events',
    'events',
    'Upcoming events in the world of online marketing.',
    1
  ),
  new Category(
    '0003',
    'Staff',
    'staff',
    'Meet the team behind the magic.',
    0
  ),
  new Category(
    '0004',
    'Projects',
    'projects',
    'Our latest projects.',
    0
  ),
  new Category(
    '0005',
    'Press',
    'press',
    'Press releases from the world of online marketing.',
    1
  ),
  new Category(
    '0006',
    'Jobs',
    'jobs',
    'Job openings in the world of online marketing.',
    0
  ),
  new Category(
    '0007',
    'Online Marketing',
    'online-marketing',
    'The latest in online marketing.',
    4
  ),
  new Category(
    '0008',
    'SEO',
    'seo',
    'The latest in SEO.',
    4
  ),
];

class CategoriesCollection implements DbCollection
{
  private array $table = [];
  public function __construct()
  {
    global $_categories;
    foreach ($_categories as $category) {
      $this->table[$category->id] = $category;
    }
  }
  public function find(): array
  {
    return array_values($this->table);
  }
  public function get(string $id): Category
  {
    return $this->table[$id];
  }
}
$categoryCol = new CategoriesCollection();
