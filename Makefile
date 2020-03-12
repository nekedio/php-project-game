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

prime:
	clear
	bin/brain-prime

dump:
	composer dump-autoload

test:
	bin/brain-test
