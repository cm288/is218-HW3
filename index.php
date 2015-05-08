<?php

class Singleton
{
    /**
     * Returns the *Singleton* instance of this class.
     *
     * @staticvar Singleton $instance The *Singleton* instances of this class.
     *
     * @return Singleton The *Singleton* instance.
     */

	public static function getDB()
    	{	
        	static $conn = null;
        	if (null === $conn) 
		{
            	$conn = new static();
        	}	

        	return $conn;
    		

		$servername = "localhost";
		$username = "root";
		$password = "blank288";

		try 
		{	
    			$conn = new PDO("mysql:host=$servername;dbname=employees", $username, $password);
    			// set the PDO error mode to exception
    			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    			//return $conn;
			echo "Connected successfully"; 
    		}
		catch(PDOException $e)
    		{	
    			echo "Connection failed: " . $e->getMessage();
    		}


	}

}

class queryLinks
{
	public static function print_links()
	{
		echo '<a href="index.php?page">Who is the highest paid employee?</a><br>';
		echo '<a href="index.php?page">Who is the highest paid employee between 1985 and 1981?</a><br>';
		echo '<a href="index.php?page">Which department currently has highest paid department manager?</a><br>';
		echo '<a href="index.php?page">What are the titles of all the departments?</a><br>';
		echo '<a href="index.php?page">Who are the current department heads?</a><br>';
		echo '<a href="index.php?page">Who is highest paid employee that is not a department head?</a><br>';
		echo '<a href="index.php?page">Who is currently the lowest paid employee?</a><br>';
		echo '<a href="index.php?page">How many employees currently work in each department?</a><br>';
		echo '<a href="index.php?page">How much does each department currently spend on salaries? </a><br>';
		echo '<a href="index.php?page">How much is currently spent for all salaries?</a><br>';
	}
}

queryLinks::print_links();







echo "test";

?>
