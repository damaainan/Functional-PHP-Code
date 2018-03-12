<?php

/* We assume the dashboards method now return Maybe instances */
$dashboard = getUserDashboard()
             ->orElse(getGroupDashboard())
             ->orElse(getDashboard());



