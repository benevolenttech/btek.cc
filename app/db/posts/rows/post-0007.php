<?php
require_once 'app/db/posts/post.php';

$post = new Post(
  slug: "featured-in-5-points-mailing",
  title: "Featured in 5 Points Mailing",
  description: "Fresh off the press and into #DC mailboxes → some love from our co-working space 5 Points DC (5pointsdc.com)",
  author_staff_member: "0001",
  publishAt: "2017-06-19 15:20:00",
  categories: ['0005'],
  series: null,
  prev: null,
  next: null,
  id: "0007",
  subtitle: "Fresh off the press and into #DC mailboxes → some love from our co-working space 5 Points DC (5pointsdc.com)",
  image: "/img/5points-mailer-dc-seo-square.jpg",
  content: <<<CONTENT
Fresh off the press and into #DC mailboxes → some love from our co-working space 5 Points DC ([5pointsdc.com](http://5pointsdc.com)). &lt;3 this place!

![](/img/versions/5points-mailer-dc-seo---x----900-601x---.jpg)
CONTENT,
);
