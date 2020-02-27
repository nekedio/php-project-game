install:
	composer install

lint:
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

progr:
	clear
	bin/brain-progression

dump:
	composer dump-autoload
