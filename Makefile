COMPOSER := $(shell if [ `which composer` ]; then echo 'composer'; else \
	php -r "readfile('https://getcomposer.org/installer');" | php; \
	echo './composer.phar'; fi;)
all: vendor
vendor:
	@echo 'Install dependencies';
	$(COMPOSER) install
test: vendor
	@echo 'Run all tests'
	vendor/bin/atoum -d tests/units
update:
	$(COMPOSER) update
	make test
clean:
	@echo 'Remove vendor and praspel folders'
	rm -rf vendor
.PHONY: clean
