Technical Skills Assessment (PHP)
=================================

First Unit Test(Git Bash in Project directory first):

$ vendor/bin/phpunit tests/testBasics.php

PHPUnit 9.1.5 by Sebastian Bergmann and contributors.

...                                                                 3 / 3 (100%)

Time: 00:00.437, Memory: 4.00 MB

OK (3 tests, 3 assertions)




Second Unit Test(Git Bash in Project directory first:

$ vendor/bin/phpunit tests/testQuestion.php

PHPUnit 9.1.5 by Sebastian Bergmann and contributors.

.......                                                             7 / 7 (100%)

Time: 00:00.222, Memory: 4.00 MB

OK (7 tests, 12 assertions)


Just a break down of how I tackled this:
=================================

-This solution is running on my local machine which has php version 7.4.32.
PHPUnit 9 is what I used for the unit tests because it's compatible with this version of PHP. 

- Fixed the syntax errors that I found.

- Created a MySQL database on my local machine(xampp) and imported/updated the ‘schema.sql’ file with the sql needed to make unit tests work.

