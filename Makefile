.PHONY: start
start:
	php -t public -S localhost:8000 router.php

deploy:
	ssh hostinger 'cd domains/btek.cc/public_html && git pull && touch .htaccess'
	@echo Deployed to https://btek.cc

commit:
	git add -A
	git commit -m "Update"
	git push
	$(MAKE) deploy