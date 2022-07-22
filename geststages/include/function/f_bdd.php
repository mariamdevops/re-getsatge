<?php

function connexionBDD()
{
	try
	{
            $bdd = new PDO('mysql:host=server-base.mariadb.database.azure.com;port=3306;dbname=bdd_geststages;charset=utf8', 'vhugo@server-base', 'P@ssw0rd', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            return $bdd;
	}
	catch(Exception $e)
	{
		$pdo_error = $e->getMessage();
                return false;
	}
    
}

?>
