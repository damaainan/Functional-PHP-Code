<?php
require_once __DIR__.'/03-maybe-final-1.php';
function getDashboard() { return Maybe::just('dashboard'); }
function getGroupDashboard() { return Maybe::nothing(); }
function getUserDashboard() { return Maybe::nothing(); }
/* We assume the dashboards method now return Maybe instances */
$dashboard = getUserDashboard()
             ->orElse(getGroupDashboard())
             ->orElse(getDashboard());


var_dump($dashboard);
