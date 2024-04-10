# A brochure site using a custom micro-PHP-framework

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
# which runs `php -t public -S localhost:8000 router.php`
```

## Deploying

```sh
git commit/push
ssh hostinger
cd domains/btek.cc/public_html
git pull
```


