<?php
include 'file1.php';
include 'file2.php';

use Foo\Bar\subnamespace as aaa;
use Foo\Bar;

aaa\foo();
echo Bar\FOO;
