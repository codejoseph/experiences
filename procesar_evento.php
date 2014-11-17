 <?php
 
	$directorio = $_SERVER['DOCUMENT_ROOT'].'/experiences/uploads/';
	$nombre = $_FILES['parse_picture']['name'];
    $tipo = $_FILES['parse_picture']['type'];
    $tamano = $_FILES['parse_picture']['size'];
	
	@move_uploaded_file($_FILES['parse_picture']['tmp_name'],$directorio.$nombre);
	
	$url = "http://tripbe.co/experiences/uploads/".$nombre;
	$provider_name = "Provider Name";
	$provider_email = "Provider Email";
	$provider_phone = "Provider Phone";
	$title = "Title sample";
	$event_type = "Event";
	$event_start_time = 1417438800000;
	$expiration_time = 1417442400000;
	$event_latitude = -13.518333;
	$event_longitude = -71.97805;
	$min_attendants = 1;
	$max_attendants = 4;
	$is_open = 1;
	$is_all_day = 1;
	$action_button = "Book";
	$info_url = "URL sample";
	$token = "CAAHicZAOxJcEBAOOZAwLawk3GbpJDWOAz8CiQbWD2GYflBUSq6EohZABeZArXIleQCzX9n2xn6Q4JU8ZCDvRzP7cxhSVBs98nM3gknzuWExx7aJv4gTl3h8nqdyjkKmHi7n4Xea15pStOjf7Y7jK56ZBT7M2U8zhPDmZB7ZA1Xv2qtXipwGaIdJL5yzDGyzpUlzZBl9k3kbi2JDRyRY4Ew6pk9ts0vqidrePvZCaTdu4bvBQZDZD";
		
    if ($_SERVER['REQUEST_METHOD'] == "POST")
    {
    $strPost = "";
    
	$strPost = "access_token=" . $token
	. "&title=" . $title
	. "&event_type=" . $event_type
	. "&content=" . urlencode($_POST['content'])
	. "&provider_name=" . $provider_name
	. "&provider_email=" . $provider_email
	. "&provider_phone=" . $provider_phone
	. "&provider_parse_picture=" . urlencode($url)
    . "&creation_latitude=" . urlencode($_POST['creation_latitude'])
	. "&creation_longitude=" . urlencode($_POST['creation_longitude'])
	. "&event_start_time=" . $event_start_time
	. "&expiration_time=" . $expiration_time
	. "&event_latitude=" . $event_latitude
	. "&event_longitude=" . $event_longitude
	. "&min_attendants=" . $min_attendants
	. "&max_attendants=" . $max_attendants
	. "&is_open=" . $is_open
	. "&is_all_day=" . $is_all_day
	. "&action_button=" . $action_button
	. "&info_url=" . $info_url
	. "&address=" . urlencode($_POST['address'])
	. "&parse_picture=" . urlencode($url);
    
    //set POST URL
    $url = "https://api.tripbe.co/posts/local_event/create/";
    
    $ch = @curl_init();
    @curl_setopt($ch, CURLOPT_POST, true);
    @curl_setopt($ch, CURLOPT_POSTFIELDS, $strPost);
    @curl_setopt($ch, CURLOPT_URL, $url);
    @curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = @curl_exec($ch);
	@curl_close($ch);
	
	echo $result;
	//echo '<meta http-equiv="refresh" content="1;URL=index.html" />';
    }
	
	
	
    ?>