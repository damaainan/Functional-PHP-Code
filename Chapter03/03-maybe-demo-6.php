<?php
require_once __DIR__.'/03-maybe-final-1.php';
function getDashboard() { return Maybe::just('dashboard'); }
function getGroupDashboard() { return Maybe::nothing(); }
function getUserDashboard() { return Maybe::nothing(); }

$dashboard = getUserDashboard();
if($dashboard == null) {
    $dashboard = getGroupDashboard();
}
if($dashboard == null) {
    $dashboard = getDashboard();
}
var_dump($dashboard);

