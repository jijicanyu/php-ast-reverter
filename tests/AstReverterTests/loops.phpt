Loops Test
<=======>
<?php


while (true) {
    1;
}
do {
    true;
} while (false);
foreach ($a as $b => $c) {
}
for ($a = 0, $b = 0; $a > 10, $b >= 1; ++$a, $b--) {
    'a';
}
<=======>
<?php

while (true) {
    1;
}
do {
    true;
} while (false);
foreach ($a as $b => $c) {
}
for ($a = 0, $b = 0; $a > 10, $b >= 1; ++$a, $b--) {
    "a";
}