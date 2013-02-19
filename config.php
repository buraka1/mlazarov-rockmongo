<?php
/**
 * RockMongo configuration
 *
 * Defining default options and server configuration
 * @package rockmongo
 */
 
$MONGO = array();
$MONGO["features"]["log_query"] = "off";//log queries
$MONGO["features"]["theme"] = "tweaked";//theme
$MONGO["features"]["plugins"] = "on";//plugins

$i = 0;

/**
* Configuration of MongoDB servers
* 
* @see more details at http://code.google.com/p/rock-php/wiki/configuration
*/
$MONGO["servers"][$i]["mongo_timeout"] = 999999;//mongo connection timeout
$MONGO["servers"][$i]["ui_only_dbs"] = "";//databases to display
$MONGO["servers"][$i]["ui_hide_dbs"] = "";//databases to hide
$MONGO["servers"][$i]["ui_hide_collections"] = "";//collections to hide
$MONGO["servers"][$i]["ui_hide_system_collections"] = false;//if hide the system collections

$MONGO["servers"][$i]["mongo_name"] = "[DEV] &nbsp;CRM &nbsp;&nbsp;&nbsp;&nbsp; (ammscrmdb) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 192.168.200.254";
$MONGO["servers"][$i]["mongo_host"] = "192.168.200.254";
$i++;

$MONGO["servers"][$i]["mongo_name"] = "[DEV] &nbsp;iLom &nbsp;&nbsp;&nbsp; (ttmongo1/mongohvac1/mongo.site) 192.168.200.223";
$MONGO["servers"][$i]["mongo_host"] = "192.168.200.223";
$i++;

$MONGO["servers"][$i]["mongo_name"] = "[TEST] CRM &nbsp;&nbsp;&nbsp;&nbsp; (ttmongo3:37017) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 192.168.200.185";
$MONGO["servers"][$i]["mongo_host"] = "192.168.200.185";
$MONGO["servers"][$i]["mongo_port"] = "37017";
$i++;

$MONGO["servers"][$i]["mongo_name"] = "[TEST] iLom &nbsp;&nbsp;&nbsp; (tstor5/mongo.site) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 192.168.1.55";
$MONGO["servers"][$i]["mongo_host"] = "192.168.1.55";
$i++;

$MONGO["servers"][$i]["mongo_name"] = "[TEST] Triggers (ttmongo3:37017) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 192.168.200.185";
$MONGO["servers"][$i]["mongo_host"] = "192.168.200.185";
$MONGO["servers"][$i]["mongo_port"] = "37017";
$i++;

$MONGO["servers"][$i]["mongo_name"] = "[PROD] CRM &nbsp;&nbsp;&nbsp;&nbsp; (mongohvac1) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 192.168.10.191";
$MONGO["servers"][$i]["mongo_host"] = "192.168.10.191";
$i++;

$MONGO["servers"][$i]["mongo_name"] = "[PROD] iLom &nbsp;&nbsp;&nbsp; (mongoilom1) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 192.168.10.194";
$MONGO["servers"][$i]["mongo_host"] = "mongoilom1";
$i++;

$MONGO["servers"][$i]["mongo_name"] = "[PROD] Triggers (mongo1/mongo-triggers-1) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 192.168.10.197";
$MONGO["servers"][$i]["mongo_host"] = "192.168.10.197";
$i++;

//$MONGO["servers"][$i]["mongo_name"] = "[????] Unknown &nbsp;(??????) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 192.168.200.13";
//$MONGO["servers"][$i]["mongo_host"] = "192.168.200.13";
//$i++;
//
//$MONGO["servers"][$i]["mongo_name"] = "[????] Unknown &nbsp;(??????) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 192.168.200.43";
//$MONGO["servers"][$i]["mongo_host"] = "192.168.200.43";
//$i++;

//$MONGO["servers"][$i]["mongo_name"] = "TriggerEngine (tmongo2)";
//$MONGO["servers"][$i]["mongo_host"] = "192.168.200.44";
//$i ++;

//$MONGO["servers"][$i]["mongo_name"] = "Boss-ttmongo4 (ttmongo4)";
//$MONGO["servers"][$i]["mongo_host"] = "192.168.200.92";
//$i++;

//$MONGO["servers"][$i]["mongo_name"] = "The Dude";
//$MONGO["servers"][$i]["mongo_host"] = "192.168.10.143";
//$i++; 

foreach ($MONGO["servers"] as &$server) {
    $server["mongo_auth"] = false;
    $server["control_auth"] = true;
    $server["control_users"]["admin"] = "admin";
    $server["control_users"]["dbadmin"] = '813$amms';
    $server["mongo_timeout"] = 0;
}

