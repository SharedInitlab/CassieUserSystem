config.php should contain the following definitions:
define("PRODUCTION", false);
define("MYSQL_USER", "");
define("MYSQL_PASSWORD", "");
define("MYSQL_HOST", "");
define("DATABASE_NAME", "");
define("USERS_TABLE", "");
define("OBJECTS_TABLE", "");
define("ERROR_CONNECTING_MESSAGE", "Error connecting to database. Contact Ma    rto, Krokodila or Rado");
define("ERROR_SELECTING_TABLE", "Error selecting database. Contact Marto, Kr    okodila or Rado");
 define("AUH_LEVEL_ALL", 0);
 define("AUTH_LEVEL_MEMBERS", 1);
 define("AUTH_LEVEL_NONE", 2);


function die_message($message) {
         if(PRODUCTION === FALSE) {
                 echo $message . "<br /> And MySQL error : " . mysql_error();
          } else {
                  "Something went wrong but this is a production so no errors     for you. Contact Marto, Krokodila or Rado";
         }
 }
$database_link = mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD) or di    e(die_message(ERROR_CONNECTING_MESSAGE));
mysql_select_db(DATABASE_NAME) or die(die_message(ERROR_SELECTING_TABLE));
