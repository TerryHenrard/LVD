<?php
session_start();

if (!isset($_SESSION["admin_token"])) {
  exit();
}

require "./queries.php";

echo getCurrTurnover();
