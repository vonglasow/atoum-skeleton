COMPOSER := $(shell if [ `which composer` ]; then echo 'composer'; else curl -sS https://getcomposer.org/installer | php > /dev/null 2>&1 ; echo './composer.phar'; fi;)
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
