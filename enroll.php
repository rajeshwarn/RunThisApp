<?php


/**
 * Require CFPropertyList
 */
require_once(dirname(__FILE__).'/lib/cfpropertylist/CFPropertyList.php');

function general_payload()
{
	$payload = array();
	$payload['PayloadVersion'] = 1; // do not modify
	$payload['PayloadUUID'] = uniqid(); // must be unique
	
	//will be shown to the user.
	$payload['PayloadOrganization'] = "GlanceMyApp";
	return $payload;
}

function service_address() {
	if ($_SERVER['SERVER_PORT'] != '80') {
		$server .= $_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'];
	} else {
		$server .= $_SERVER['SERVER_NAME'];
	}
	return $server . dirname($_SERVER['REQUEST_URI']);
}


function profile_service_payload($challenge) {
    $payload = general_payload();

    $payload['PayloadType'] = "Profile Service"; // do not modify
    $payload['PayloadIdentifier'] = "com.glancemyapp.mobileconfig.profile-service";

    // strings that show up in UI, customisable
    $payload['PayloadDisplayName'] = "GlanceMyApp Profile Service";
    $payload['PayloadDescription'] = "Install this profile to allow applications deployement from GlanceMyApp";
    $payload_content = array();
	$mail = $_GET['mail'];
	$app = $_GET['app'];
    $key = $_GET['key'];
    $payload_content['URL'] = 'http://' . service_address() . '/profile.php?mail='.$mail.'&app='.$app.'&key='.$key;
    $payload_content['DeviceAttributes'] = array(
        'UDID', 
        'VERSION',
        'PRODUCT',              // ie. iPhone1,1 or iPod2,1
        'MAC_ADDRESS_EN0',      // WiFi MAC address
        'DEVICE_NAME',          // given device name "iPhone"
        // Items below are only available on iPhones
        'IMEI',
        'ICCID'
        );
    if (!empty($challenge)) {
        $payload_content['Challenge'] = $challenge;
    }

    $payload['PayloadContent'] = $payload_content;
    
	$plist = new CFPropertyList();

	$td = new CFTypeDetector();  
	$cfPayload = $td->toCFType( $payload );
	$plist->add( $cfPayload );
	return $plist->toXML(true);
}

/*
echo 'user=' . $_GET['user'];
echo '<br/>';
echo 'app=' . $_GET['app'];
*/

header('Content-Type: application/x-apple-aspen-config');

$payload =  profile_service_payload('signed-auth-token');
echo $payload;
?>