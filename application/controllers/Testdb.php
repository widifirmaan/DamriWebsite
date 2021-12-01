<?php

class Testdb extends CI_Controller {
public function index()
{
    
    ini_set('display_errors', 'Off');
    
    //  Load the database config file.
    if(file_exists($file_path = APPPATH.'config/database.php'))
    {
        include($file_path);
    }
    
    $config = $db[$active_group];
    
    //  Check database connection if using mysqli driver
    if( $config['dbdriver'] === 'mysqli' )
    {
        $mysqli = new mysqli( $config['hostname'] , $config['username'] , $config['password'] , $config['database'] );
        if( !$mysqli->connect_error )
        {
            $mysqli->close();
            echo "<h2>Terhubung Boss</h2>";
            return true;
        }
        
        $mysqli->close();
        
    }
    
    return false;
} 
}