Atoum Skeleton
=======

Just a little project which implement a skeleton for application tested with
atoum.

Install
======
```
git clone git@pikacode.com:ashgenesis/atoum-skeleton.git
make
```

To run test
=====
```
make test
```
or 

```
./vendor/bin/atoum -d tests
```

How to use it
=======
Install it then replace all `skeleton` occurence everywhere by your
namespace/class

the atoum config file is .atoum.php
the atoum bootstrap file is .bootstrap.php

.atoum.php define the bootstrap and it's automatically loaded.

