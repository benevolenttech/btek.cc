.PHONY: start
start:
	php -t public -S localhost:8000 router.php

deploy:
	ssh hostinger 'cd domains/btek.cc/public_html && git pull'
	@echo Deployed to https://btek.cc