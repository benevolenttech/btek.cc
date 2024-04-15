# A brochure site using a custom, react-inspired micro-PHP-framework

TODOs
- [ ] service worker
- [ ] improve content
- [ ] php strict mode

## Env

**Development**
- PHP >= v8 bc type-safety feature usage

**Prod**
- Host: Hostinger
  - PHP: v8.3
  - CDN: yes
  - Superviser: Litespeed w/ htaccess support

## Running locally

```sh
make start
# which runs...
php -t public -S localhost:8000 router.php
```

## Deploying

Hostinger supports auto-deploy on push to Github, but I kinda prefer manual for this repo.

Note: Hostinger 

```sh
git commit/push
make deploy
# which runs...
ssh hostinger 'cd domains/btek.cc/public_html && git pull'

# or for lazy, commits and deploys
make commit
```


