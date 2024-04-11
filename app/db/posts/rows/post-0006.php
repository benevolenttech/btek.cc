<?php
require_once 'app/db/posts/post.php';

$post = new Post(
  slug: "catch-us-on-rhode-island-radio",
  title: "Catch Us On Rhode Island Radio",
  description: "Brian joins Michelle and Kyle on RIA Radio to talk shop.",
  author_staff_member: "0001",
  createdAt: "2017-05-05 14:05:06",
  updatedAt: "2017-05-05 14:05:06",
  publishAt: "2017-05-30 14:05:06",
  categories: ['0002'],
  series: null,
  prev: null,
  next: null,
  id: "0006",
  subtitle: "Brian joins Michelle and Kyle on RIA Radio to talk shop.",
  image: "/img/benevolent_tech_dc_seo.png",
  content: <<<CONTENT
W**e're Famous!** Each week, [Rhode Island Avenue (RIA) Radio](http://riamainstreet.org/ria-radio-podcasts/) hosts Michelle Yancey and Kyle Todd sit down to visit with area business owners, city leaders, small business training experts, and the visionaries that help our local commercial corridors grow and thrive. [This week](http://www.buzzsprout.com/46492/519092-74-benevolent-tech-district-floor-depot.mp3) Brian joined RIA Main Street to talk origin stories and also how to protect yourself from the recent surge in computer viruses.

Tune in to learn about Rhode Island Avenue NE Main Street's new businesses; learn about some of the not-so-secret business gems of the community; and get behind-the-scenes stories about innovative business ideas happening right here in our neighborhood.

Also in this weeks episode, Mani Pahlevanpour speaks of his brand new District Floor Depot ([www.districtfloordepot.com](http://www.districtfloordepot.com)). With a variety of beautiful wood flooring options and a dedication to quality and impeccable customer service, your home renovation just got a whole lot easier… and more beautiful. And as always, RIA Radio checks in with Casey from [Good Food Markets](http://www.goodfoodmarkets.com/) to find out the latest happenings in fresh food here on RIA Main Street.

Read more on [RIA Radio's website](http://riamainstreet.org/ria-radio-podcasts/), [Subscribe to the Podcast](pcast:/http://feeds.feedburner.com/rhodeislandavenueradio), and/or [Download the episode](http://www.buzzsprout.com/46492/519092-74-benevolent-tech-district-floor-depot.mp3)!
CONTENT,
);
