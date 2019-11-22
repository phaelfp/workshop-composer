#!/bin/bash
if [ ! -d "vendor" ]; then
	export COMPOSER_ALLOW_SUPPERUSER=1
	composer install
fi
php-fpm
