.PHONY: check tests phpstan cc update

check: tests phpstan

tests:
	php vendor/bin/tester -s -p php -C tests/cases

phpstan:
	php vendor/bin/phpstan analyse -l max -c phpstan.neon src tests

cc:
	composer dump-autoload -o

update:
	composer update
