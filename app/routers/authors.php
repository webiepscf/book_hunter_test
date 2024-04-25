<?php

use Controllers\AuthorsController;

include_once '../app/controllers/authorsController.php';

switch ($_GET['authors']):
        // PATTERN: /?authors=show&id=x
        // CTRL: authorsController
        // ACTION: showAction
    case 'show':
        AuthorsController\showAction($connexion, $_GET['id']);
        break;
        // PATTERN: /?authors
        // CTRL: authorsController
        // ACTION: indexAction
    default:
        AuthorsController\indexAction($connexion);
        break;
endswitch;
