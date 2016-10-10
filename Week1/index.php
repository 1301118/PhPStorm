/**
 * Created by PhpStorm.
 * User: 1301118
 * Date: 03/10/2016
 * Time: 13:42
 */

<!DOCTYPE html>
<html>
<head>
    </head>
    <body>
        <p>
            <?php
            //$myname = "Cameron Lawrie";
            //$myage = 21;
            //echo "My name is " .  $myname . " and I am " . $myage;

            //$name = "Simon";
           // if ($name == "Simon") {     print "I know you!";
           // }   else {     print "Who are you?";   }

            /*$wantedgood = "sausage rolls";


            switch ($wantedgood) {
                case "mugs":
                    echo "You have to be 13 to buy mugs";
                    break;
                case "specs":
                    echo "You have to be 15 to buy specs";
                    break;
                case "sausage rolls":
                    echo "You have to be 18 to buy sausage rolls";
                    break;
                default:
                    echo "Invalid entry, please enter mugs, specs or sausage rolls";
            }*/

            $provisionedActivities = array("mugs", "specs","sausage rolls");

            $provisionedActivities[0]= "hugs";

            $provisionedActivities[2]= null;

            foreach($provisionedActivities as $x) {
                print "<p>$x</p>";
            }

            ?>
        </p>
    </body>
</html>
