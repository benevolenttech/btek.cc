<?php
require_once 'app/db/db-collection.php';
require_once 'category.php';

$categoryCol = new class extends DbCollection
{
  public function __construct()
  {
    $this->table['0001'] = new Category(
      id: '0001',
      title: 'News',
      slug: 'news',
      description: 'The latest news from the world of online marketing.',
      count: 1,
    );
    $this->table['0002'] = new Category(
      id: '0002',
      title: 'Events',
      slug: 'events',
      description: 'Upcoming events in the world of online marketing.',
      count: 1,
    );
    $this->table['0003'] = new Category(
      id: '0003',
      title: 'Staff',
      slug: 'staff',
      description: 'Meet the team behind the magic.',
      count: 0,
    );
    $this->table['0004'] = new Category(
      id: '0004',
      title: 'Projects',
      slug: 'projects',
      description: 'Our latest projects.',
      count: 0,
    );
    $this->table['0005'] = new Category(
      id: '0005',
      title: 'Press',
      slug: 'press',
      description: 'Press releases from the world of online marketing.',
      count: 1,
    );
    $this->table['0006'] = new Category(
      id: '0006',
      title: 'Jobs',
      slug: 'jobs',
      description: 'Job openings in the world of online marketing.',
      count: 0,
    );
    $this->table['0007'] = new Category(
      id: '0007',
      title: 'Online Marketing',
      slug: 'online-marketing',
      description: 'The latest in online marketing.',
      count: 4,
    );
    $this->table['0008'] = new Category(
      id: '0008',
      title: 'SEO',
      slug: 'seo',
      description: 'The latest in SEO.',
      count: 4,
    );
  }
  // Redeclaring the get methods to return currect type
  public function get(string $id): Category
  {
    return $this->table[$id];
  }
  public function g(string $id): Category
  {
    return $this->get($id);
  }
};
