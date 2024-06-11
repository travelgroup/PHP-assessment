PHP UNIT TESTS RESULTS

user@Diesel MINGW64 ~/PhpstormProjects/PHP-assessment (master)
$ ./vendor/bin/phpunit tests/testQuestion.php

PHPUnit 7.5.20 by Sebastian Bergmann and contributors.

.....C:\Users\user\PhpstormProjects\PHP-assessment\models\question.php:57:
array(1) {
     [0] =>
  array(1) {    'answer' =>    string(270) "MVC divides applications into three parts: Model, View, and Controller.
Importance:                                                                        Organization                                                                            Reusability                                                                       Testability                                                                             Collaboration MVC divides applications into three parts: Model, View, and Controller.   Importance:
Organization
Reusability
Testability
Collaboration"
  }
}
..                                                             7 / 7 (100%)C:\Users\user\PhpstormProjects\PHP-assessment\models\question.php:57:
array(1) {
  [0] =>
  array(1) {
    'answer' =>
    string(270) "MVC divides applications into three parts: Model, View, and Controller.

Importance:

Organization
Reusability
Testability
Collaboratio MVC divides applications into three parts: Model, View, and Controller.

Importance:

Organization
Reusability
Testability
Collaboratio"
  }
}
C:\Users\user\PhpstormProjects\PHP-assessment\models\question.php:57:
array(1) {
  [0] =>
  array(1) {
    'answer' =>
    string(440) "A good unit test should have the following characteristics:

Isolation: Tests only one unit of code (e.g., a single function or method) without relying on external dependencies.

Independence: Does not depend on the state of other tests and can be run in any order.

Determinism: Produces consistent results regardless of the environment or execution context.

Clarity: Clearly defines what is being tested and what the expected outcome is."
  }
}
C:\Users\user\PhpstormProjects\PHP-assessment\models\question.php:57:
array(1) {
  [0] =>
  array(1) {
    'answer' =>
    string(218) "Read through the codebase to gain a general understanding of its structure and organization.
Identify key components, modules, and entry points.Determine the main purpose and functionality of the application or system."
  }
}

Time: 1.66 seconds, Memory: 4.00 MB

OK (7 tests, 12 assertions)

user@Diesel MINGW64 ~/PhpstormProjects/PHP-assessment (master)
$ ./vendor/bin/phpunit tests/testBasics.php
PHPUnit 7.5.20 by Sebastian Bergmann and contributors.

...                                                                 3 / 3 (100%)

Time: 992 ms, Memory: 4.00 MB

OK (3 tests, 3 assertions)
