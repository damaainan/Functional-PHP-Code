<?php
/* The following code is not included in the book, it is
   is here so that the tool used to generate the code samples
   does not complains about non existing variables. */
function getDashboard() { return Maybe::just('dashboard'); }
function getGroupDashboard() { return Maybe::nothing(); }
function getUserDashboard() { return Maybe::nothing(); }



