<?php

benchmark('add4', [10], 14);
// mean: 0.434 seconds
// std:  0.001 seconds

benchmark($composedAdd4, [10], 14);
// mean: 1.362 seconds
// std:  0.005 seconds

benchmark($composerCurryedAdd, [10], 14);
// mean: 3.555 seconds
// std:  0.018 seconds



