<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ROTG | Admin Calendar</title>

    <!-- Web Icon -->
    <link rel="shortcut icon" href="../css/icon/logo.png" type="image/x-icon">

    <!-- CSS Link -->
    <link rel="stylesheet" href="../css/Admin/layout.css">
    <link rel="stylesheet" href="../css/Admin/calendar.css">

    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- CSS for full calender -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet">

    <!-- JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>

</head>
<body>

    <div class="bg-highlight">    
        <header>
                <div class="header-title">
                    <p class="page-title">CALENDAR</p>
                </div>
                <div class="system-name-logo">
                    <a href="">
                        <p class="system-title">
                            Reserve On The Go
                        </p>
                        <img src="../css/icon/logo.png" alt="web icon">
                    </a>
                </div>
        </header>

        <div class="content">
            <div class="aside">
                <div class="nav-container">
                    <nav>
                        <a href="admin-dashboard.php
                        ">
                            <img src="../css/icon/Dashboard Layout.png" alt="">
                        </a>
                    </nav>
                    <nav>
                        <div class="current-page-indicator">
                            <a href="admin-calendar.php
                            ">
                                <img src="../css/icon/Calendar.png" alt="">
                            </a>
                        </div>
                    </nav>
                    <nav>
                        <a href="admin-add-events.php
                        ">
                            <img src="../css/icon/Calendar Plus.png" alt="">
                        </a>
                    </nav>
                    <nav>
                        <a href="admin-archive.php
                        ">
                            <img src="../css/icon/Archive.png" alt="">
                        </a>
                    </nav>
                    <nav>
                        <a href="admin-feedback.php
                        ">
                            <img src="../css/icon/Open email.png" alt="">
                        </a>
                    </nav> <br>
                    <nav>
                        <a href="../Guest.php
                        ">
                            <img src="../css/icon/Logout.png" alt="">
                        </a>
                    </nav>
                </div>
            </div>

            <!-- Main Content -->
             <div class="main-content-part">
                <div class="calendar" id="calendar">
                    
                </div>
             </div>

        </div>
    </div>
</body>
<script>
        $(document).ready(function() {
            display_events();
        }); //end document.ready block

        function display_events() {
            var events = new Array();
        $.ajax({
            url: '../process/display_event.php',  
            dataType: 'json',
            success: function (response) {
                
            var result=response.data;
            $.each(result, function (i, item) {
                events.push({
                    event_id: result[i].event_id,
                    title: result[i].title,
                    start: result[i].start,
                    end: result[i].end,
                    color: result[i].color,
                    url: result[i].url
                }); 	
            })
            var calendar = $('#calendar').fullCalendar({
                defaultView: 'month',
                timeZone: 'local',
                editable: true,
                selectable: true,
                selectHelper: true,
                select: function(start, end) {
                        alert(start);
                        alert(end);
                        $('#event_start_date').val(moment(start).format('YYYY-MM-DD'));
                        $('#event_end_date').val(moment(end).format('YYYY-MM-DD'));
                        $('#event_entry_modal').modal('show');
                    },
                events: events,
                eventRender: function(event, element, view) { 
                    element.bind('click', function() {
                            alert(event.event_id);
                        });
                }
                }); //end fullCalendar block	
            },//end success block
            error: function (xhr, status) {
            alert(response.msg);
            }
            });//end ajax block	
        }

        function save_event()
        {
        var event_name=$("#event_name").val();
        var event_start_date=$("#event_start_date").val();
        var event_end_date=$("#event_end_date").val();
        if(event_name=="" || event_start_date=="" || event_end_date=="")
        {
        alert("Please enter all required details.");
        return false;
        }
        $.ajax({
        url:"../process/save_event.php",
        type:"POST",
        dataType: 'json',
        data: {event_name:event_name,event_start_date:event_start_date,event_end_date:event_end_date},
        success:function(response){
        $('#event_entry_modal').modal('hide');  
        if(response.status == true)
        {
            alert(response.msg);
            location.reload();
        }
        else
        {
            alert(response.msg);
        }
        },
        error: function (xhr, status) {
        console.log('ajax error = ' + xhr.statusText);
        alert(response.msg);
        }
        });    
        return false;
        }
    </script>
</html>