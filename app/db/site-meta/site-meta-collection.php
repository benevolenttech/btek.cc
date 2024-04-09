<?php

namespace Db;

require_once 'app/db/DbCollection.php';
require_once 'site-meta.php';

$siteMetaCol = new class implements DbCollection
{
  private array $table = [];
  public function __construct()
  {
    array_push($this->table, new SiteMeta(
      id: '0001',
      name: 'title',
      value: 'btek',
    ));
    array_push($this->table, new SiteMeta(
      id: '0002',
      name: 'address',
      value: '12721 Oxen Way, Austin TX 78732',
    ));
    array_push($this->table, new SiteMeta(
      id: '0003',
      name: 'street',
      value: '12721 Oxen Way',
    ));
    array_push($this->table, new SiteMeta(
      id: '0004',
      name: 'town',
      value: 'Austin',
    ));
    array_push($this->table, new SiteMeta(
      id: '0005',
      name: 'region',
      value: 'TX',
    ));
    array_push($this->table, new SiteMeta(
      id: '0006',
      name: 'country',
      value: 'USA',
    ));
    array_push($this->table, new SiteMeta(
      id: '0007',
      name: 'postalCode',
      value: '78732',
    ));
    array_push($this->table, new SiteMeta(
      id: '0008',
      name: 'contact_email_address',
      value: 'admin@btek.cc',
    ));
    array_push($this->table, new SiteMeta(
      id: '0009',
      name: 'contact_phone_number',
      value: '+1.202.644.2237',
    ));
    array_push($this->table, new SiteMeta(
      id: '0010',
      name: 'description',
      value: 'A boutique online communications shop for small businesses.',
    ));
    array_push($this->table, new SiteMeta(
      id: '0011',
      name: 'url',
      value: 'https://btek.cc',
    ));
    array_push($this->table, new SiteMeta(
      id: '0012',
      name: 'version',
      value: '1.0.0',
    ));
  }
  public function find(): array
  {
    return array_values($this->table);
  }
  public function get(string $id): SiteMeta
  {
    return $this->table[$id];
  }
  public function getByName(string $id): string
  {
    return $this->table[array_search($id, array_column($this->table, 'name'))]->value;
  }
};
