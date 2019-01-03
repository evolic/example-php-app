<?php
echo phpversion(), PHP_EOL;
echo '<pre>', PHP_EOL;
ksort($_SERVER);
print_r($_SERVER);
echo '</pre>', PHP_EOL;