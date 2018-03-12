<?php

benchmark('add', [21, 33], 54);
// mean: 0.447 seconds
// std:  0.015 seconds

benchmark('manualCurryAdd', [21, 33], 54);
// mean: 1.210 seconds
// std:  0.016 seconds

benchmark($curryiedAdd, [21, 33], 54);
// mean: 1.476 seconds
// std:  0.007 seconds



