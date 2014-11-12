<?php 
defined('SECURE') or define('SECURE', FALSE);
if(SECURE)
{

// Reminder: Turn off error reporting when site is live. 
error_reporting(E_ALL);


// Constants
define("BASEPATH", basename(__DIR__));
define('VIEWPATH', ('display/'));
define('BODYPATH', VIEWPATH.'body/');
define('INCLUDEPATH', '/includes/');
define('FUNCPATH', INCLUDEPATH.'functions/');
define('BADREQUEST', BODYPATH.'404.php');
define('METAFILE', VIEWPATH.'meta.php');
define('CSSPATH', VIEWPATH.'css/');
define('MEDIA', VIEWPATH.'media/');
define('IMAGES', MEDIA.'images/');
define('JAVASCRIPT', VIEWPATH.'js/');
define('HEADFILE', INCLUDEPATH.'head.php');
define('DBUSERNAME', "");
define('DBPASSWORD', "");
define('DBHOST', "");
define("ADMIN", "James");
define('PASS', "password");


$pages = array(
   /*
	To add new page to site:

	Step 1: Add an array with the following:
	 array('page' => 'your_page_name_here', 'filename' => 'your_filename_here',
		'stylesheet' => 'stylesheets/your_stylesheet_name')
	 Note: Add commas as needed after each array, except for the last array.
	 Filename Note: First letter must be capital.
	 
	 Step 2: Add a php file in the display/body folder 
	 Step 3: Add a css file in the display/body/stylesheets folder
	 Note: filename must match filename in array from step 1.

	 Step 4: Edit the file with html.


   */
	array( 'page' => 'Contact', 'filename' => 'contact.php', 'title' => "Contact Us",
		'stylesheet' => '../../stylesheets/contact.css'),
	array( 'page' => 'Projects', 'filename' => 'projects.php', 'title' => 'Our work - Software Engineering Club',
		'stylesheet' => '../../stylesheets/projects.css'),
	array( 'page' => 'About', 'filename' => 'about.php', 'title' => 'About Us - MVC Club - Software Engineering Club',
		'stylesheet' => '../../stylesheets/about.css'),
	array( 'page' => 'Home', 'filename' => 'home.php', 'title' => 'Homepage - Software Engineering Club', 
		'stylesheet' => '../../stylesheets/home.css')
	 );


}
	else
		{
			 header("HTTP/1.1 403 Forbidden");
		     exit;
	    }
 ?>