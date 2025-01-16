<?php                

require 'database_connection.php'; 

// Updated query to join `calendar_event_master` with `contact_info`
$display_query = "
    SELECT 
        cem.event_id,
        cem.event_name,
        cem.event_start_date,
        cem.event_end_date,
        cem.event_desc,
        cem.no_of_attendees,
        ci.client_name,
        ci.phone_num,
        ci.landline_num,
        ci.email,
        ci.sec_contact_name,
        ci.sec_phone_num
    FROM 
        calendar_event_master cem
    LEFT JOIN 
        contact_info ci
    ON 
        cem.event_id = ci.event_id
";             

$results = mysqli_query($con, $display_query);   
$count = mysqli_num_rows($results);  

if ($count > 0) {
    $data_arr = array();
    $i = 1;

    while ($data_row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {	
        $data_arr[$i]['event_id'] = $data_row['event_id'];
        $data_arr[$i]['title'] = $data_row['event_name'];
        $data_arr[$i]['start'] = date("Y-m-d", strtotime($data_row['event_start_date']));
        $data_arr[$i]['end'] = date("Y-m-d", strtotime($data_row['event_end_date']));
        $data_arr[$i]['event_desc'] = $data_row['event_desc'];
        $data_arr[$i]['no_of_attendees'] = $data_row['no_of_attendees'];
        $data_arr[$i]['color'] = '#'.substr(uniqid(), -6); // Assign random color

        $i++;
    }
    
    $data = array(
        'status' => true,
        'msg' => 'successfully!',
        'data' => $data_arr
    );

} else {
    $data = array(
        'status' => false,
        'msg' => 'No events found!'				
    );
}

echo json_encode($data);

?>
