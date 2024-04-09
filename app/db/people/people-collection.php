<?php

namespace Db;

require_once 'app/db/DbCollection.php';
require_once 'people.php';

$peopleCol = new class implements DbCollection
{
  private array $table = [];
  public function __construct()
  {
    array_push($this->table, new People(
      id: "0001",
      name: "Brian Dombrowski",
      position: "Founder, Tech Lead",
      imagePath: "/img/brian-small.jpg",
      link: "https://twitter.com/@bdombro",
      bio: <<<BIO
      He's widely known for his marketing acumen coupled with a deep technical background, and a focus on community building.

      A creative, engineer and leader whom loves all things web. He's like, obsessed with it (just ask his wife, Eileen). He's super lucky and thankful to get paid to do what he loves while helping small business and benevolent organizations.

      He got his start in security software, then moved over to public sector where he was mentored by Confluence Corp and Ginkgo Street Labs. Later, he started btek and hasn't looked back since. Through his partners and btek, he's been able to help dozens of nonprofits with their online identities.

      When I'm not doing web stuff, he hangs out with his toddler daughter or doing silly stuff with friends like competitive karaoke and bocce. Ask him some day how he won a free wedding.
      BIO,
    ));
    array_push($this->table, new People(
      id: "0002",
      name: "Calliope Dombrowski",
      position: "Motivator",
      imagePath: "/img/callie.jpg",
      link: "#",
      bio: "",
    ));
    array_push($this->table, new People(
      id: "0003",
      name: "Chris Rosenbaum",
      position: "Market Intelligence",
      imagePath: "/img/chris.jpg",
      link: "https://twitter.com/@cmrosenbaum",
      bio: <<<BIO
      The straight shooter. Chris keeps us and our clients in check by continuously testing our assumptions and clarifying our direction.
      BIO,
    ));
    array_push($this->table, new People(
      id: "0004",
      name: "Eileen Dombrowski",
      position: "Public Relations",
      imagePath: "/img/eileen-small.jpg",
      link: "https://twitter.com/@eileendombro",
      bio: <<<BIO
      One of the company's first employees, Eileen is now responsible for BT's online social account and event planner.
      BIO,
    ));
    array_push($this->table, new People(
      id: "0005",
      name: "Pete Cardomone",
      position: "Content",
      imagePath: "/img/pete1-small.jpg",
      link: "#",
      bio: <<<BIO
      The articulator. The leverage. Pete ensures your website text elevates your brand and maximizes engagement.
      BIO,
    ));
    array_push($this->table, new People(
      id: "0006",
      name: "Ryan Troll",
      position: "Product Management",
      imagePath: "/img/ryan.jpg",
      link: "https://twitter.com/@ryantroll",
      bio: <<<BIO
      A disciplined visionary. Ryan leads the company's product projects and ongoing experimentation/prototyping efforts. He also cofounded a business consulting firm at nfsventures.com.
      BIO,
    ));
    array_push($this->table, new People(
      id: "0007",
      name: "Your Name Here",
      position: "Writer, Engineer, Designer, Marketer",
      imagePath: "/img/pug3-website-small.jpg",
      link: "/contact",
      bio: <<<BIO
      Apply within!
      BIO,
    ));
  }
  public function find(): array
  {
    return array_values($this->table);
  }
  public function get(string $id): People
  {
    return $this->table[$id];
  }
};
