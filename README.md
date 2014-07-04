Atoum Skeleton
=======

Just a little project which implement a skeleton for application tested with
atoum.

How to use it
=======

`git clone git@pikacode.com:ashgenesis/atoum-skeleton.git`

then replace all `skeleton` occurence everywhere by your namespace/class

the atoum config file is .atoum.php
the atoum bootstrap file is .bootstrap.php

.atoum.php define the bootstrap and it's automatically loaded.

To run test

Install composer

`composer install`

then

`./vendor/bin/atoum -d tests`
