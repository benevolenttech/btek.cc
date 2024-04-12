# A brochure site using a custom, react-inspired micro-PHP-framework

TODOs
- [ ] service worker
- [ ] lightspeed caching
- [ ] matamo
- [ ] setup btek.cc emails

## Env

**Development**
- PHP >= v8

**Prod**
- Host: Hostinger
- PHP: v8.1.27
- Lightspeed: yes

## Running locally

```sh
make start
# which runs...
php -t public -S localhost:8000 router.php
```

## Deploying

Hostinger supports auto-deploy on push to Github, but I kinda prefer manual for this repo.

```sh
git commit/push
make deploy
# which runs...
ssh hostinger 'cd domains/btek.cc/public_html && git pull'
```


