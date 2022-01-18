<?php
session_start();
session_destroy();
header('Location: http://example.palmo/index.php');