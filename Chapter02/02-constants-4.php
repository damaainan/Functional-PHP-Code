<?php

echo constant('UPPERCASE');
// display 'HELLO WORLD !'

echo defined('UPPERCASE') ? 'true' : 'false';
// display 'true'

echo constant('I_DONT_EXISTS');
// PHP Warning:  constant(): Couldn't find constant I_DONT_EXISTS
// display nothings as 'constant' returns 'null' in this case

echo defined('I_DONT_EXISTS') ? 'true' : 'false';
// display 'false'

