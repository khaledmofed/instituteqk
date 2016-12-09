<?php



#############################################################

# DataBase Connect

#############################################################

    $dbServer      = 'localhost';

    $dbDatabase    = 'newsworl_qk_org_sa';

    $dbUser        = 'newsworl_qk_org';

    $dbPass        = 'a3npk9=rK6y+';

    $pdo 			= new PdoWrapper();

    $pdo->pdoConnect($dbServer, $dbUser, $dbPass, $dbDatabase);



#############################################################

# Error Reporting

#############################################################



	error_reporting(0);



?>