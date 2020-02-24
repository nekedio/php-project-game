install:
	composer install

lint:
	composer run-script phpcs -- --standard=PSR12 src bin

gam:
	clear
	bin/brain-even

dump:
	composer dump-autoload