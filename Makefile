install:
	composer install

lint:
	clear
	composer run-script phpcs -- --standard=PSR12 src bin

even:
	clear
	bin/brain-even

calc:
	clear
	bin/brain-calc

gcd:
	clear
	bin/brain-gcd

dump:
	composer dump-autoload