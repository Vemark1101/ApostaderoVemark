<?php

require_once('./config/config.php');
require_once('./helpers/alert_helper.php');
require_once('./controllers/FacultyController.php');

$faculty = new FacultyController();

require_once('./router.php');
