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
    <script src="../js/Admin/event-show.js"></script>

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
    <div id="event_details_modal" class="custom-modal">
        <div class="custom-modal-content">
            <span class="custom-modal-close" onclick="closeModal()">&times;</span>
            <h3>Event Details</h3>
            <p><strong>Event ID:</strong> <span id="modal_event_id"></span></p>
            <p><strong>Title:</strong> <span id="modal_event_title"></span></p>
            <p><strong>Description:</strong> <span id="modal_event_desc"></span></p>
            <p><strong>No. of Attendees:</strong> <span id="modal_no_of_attendees"></span></p>
            <hr>
            <h4>Contact Information</h4>
            <p><strong>Client Name:</strong> <span id="modal_client_name"></span></p>
            <p><strong>Phone Number:</strong> <span id="modal_phone_num"></span></p>
            <p><strong>Landline Number:</strong> <span id="modal_landline_num"></span></p>
            <p><strong>Email:</strong> <span id="modal_email"></span></p>
            <p><strong>Secondary Contact Name:</strong> <span id="modal_sec_contact_name"></span></p>
            <p><strong>Secondary Phone Number:</strong> <span id="modal_sec_phone_num"></span></p>
        </div>
    </div>
</div>
</body>
</html>