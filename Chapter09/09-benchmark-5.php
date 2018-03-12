<?php

benchmark([new Adder, 'add'], [new Integer(21), new Integer(33)], 54);
// mean: 0.767 seconds
// std:  0.019 seconds


