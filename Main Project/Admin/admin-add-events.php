<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROTG | Admin Add Event</title>

    <!-- Web Icon -->
    <link rel="shortcut icon" href="../css/icon/logo.png" type="image/x-icon">

    <!-- CSS Link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/Admin/layout.css">
    <link rel="stylesheet" href="../css/Admin/add-event.css">

    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

</head>
<body>

    <div class="bg-highlight">  
        <header>
                <div class="header-title">
                    <p class="page-title">ADD EVENT</p>
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
                        <a href="admin-dashboard.php">
                            <img src="../css/icon/Dashboard Layout.png" alt="">
                        </a>
                    </nav>
                    <nav>
                        <a href="admin-calendar.php">
                            <img src="../css/icon/Calendar.png" alt="">
                        </a>
                    </nav>
                    <nav>
                        <div class="current-page-indicator">
                            <a href="admin-add-events.php">
                                <img src="../css/icon/Calendar Plus.png" alt="">
                            </a>
                        </div>
                    </nav>
                    <nav>
                        <a href="admin-archive.php">
                            <img src="../css/icon/Archive.png" alt="">
                        </a>
                    </nav>
                    <nav>
                        <a href="admin-feedback.php">
                            <img src="../css/icon/Open email.png" alt="">
                        </a>
                    </nav> <br>
                    <nav>
                        <a href="../Guest.php">
                            <img src="../css/icon/Logout.png" alt="">
                        </a>
                    </nav>
                </div>
            </div>
                        
            <!-- Main Content -->
            <div class="main-content-part">
                <div class="add-event-bg">
                    <div class="reservations">
                        <div class="reservation-container">
                            <p class="title">Reservations</p>
                            <div class="events">
                                <div class="events-listed">
                                    <p class="event-title">Birthday of...</p>
                                    <p class="date-of-event">12/30/2025</p>
                                    <button class="view-button">View</button>
                                </div>
                                <div class="events-listed">
                                    <p class="event-title">Birthday of...</p>
                                    <p class="date-of-event">12/30/2025</p>
                                    <button class="view-button">View</button>
                                </div>
                                <div class="events-listed">
                                    <p class="event-title">Birthday of...</p>
                                    <p class="date-of-event">12/30/2025</p>
                                    <button class="view-button">View</button>
                                </div>
                                <div class="events-listed">
                                    <p class="event-title">Birthday of...</p>
                                    <p class="date-of-event">12/30/2025</p>
                                    <button class="view-button">View</button>
                                </div>
                                <div class="events-listed">
                                    <p class="event-title">Birthday of...</p>
                                    <p class="date-of-event">12/30/2025</p>
                                    <button class="view-button">View</button>
                                </div>
                                <div class="events-listed">
                                    <p class="event-title">Birthday of...</p>
                                    <p class="date-of-event">12/30/2025</p>
                                    <button class="view-button">View</button>
                                </div>
                                <div class="events-listed">
                                    <p class="event-title">Birthday of...</p>
                                    <p class="date-of-event">12/30/2025</p>
                                    <button class="view-button">View</button>
                                </div>
                                <div class="events-listed">
                                    <p class="event-title">Birthday of...</p>
                                    <p class="date-of-event">12/30/2025</p>
                                    <button class="view-button">View</button>
                                </div>
                                <div class="events-listed">
                                    <p class="event-title">Birthday of...</p>
                                    <p class="date-of-event">12/30/2025</p>
                                    <button class="view-button">View</button>
                                </div>
                                <div class="events-listed">
                                    <p class="event-title">Birthday of...</p>
                                    <p class="date-of-event">12/30/2025</p>
                                    <button class="view-button">View</button>
                                </div>
                                <div class="events-listed">
                                    <p class="event-title">Birthday of...</p>
                                    <p class="date-of-event">12/30/2025</p>
                                    <button class="view-button">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="add-event">
                        <form action="//" method="post" class="personal-info">
                            <p class="booking-title" id="personal-title">
                                Personal Contact Information
                            </p>
                            <input class="fields" type="text" name="client-name" id="client-name" placeholder="Client Name" required>
                            <input class="fields" type="number" name="phone-number" id="phone-number" placeholder="09123456789" required>
                            <input class="fields" type="number" name="landline-number" id="landline-number" placeholder="Landline Number">
                            <input class="fields" type="email" name="client-email" id="client-email" placeholder="Email" required>
                            <p class="booking-title" class="secondary-title">
                                Secondary Contact Person
                            </p>
                            <input class="fields" type="text" name="Secondary Contact Name" id="secondary-contact" placeholder="Secondary Contact Name" required>
                            <input class="fields" type="number" name="secondary-number" id="secondary-number" placeholder="09123456789" required>
                        </form>
                        <div class="booking-form">
                            <p class="booking-title">
                                Booking Information
                            </p>
                            <input type="text" name="event-name" id="event-name" placeholder="Event Name" required>
                            <textarea name="event-description" id="event-description" placeholder="Event Description" required></textarea>
                            <div class="no-attendees-dropdown">
                                No. of Attendees
                                <select name="no-of-attendees" id="no-of-attendees" required>
                                    <option value="3 - 5 Attendees">3 - 5 Attendees</option>
                                    <option value="6 - 10 Attendees">6 - 10 Attendees</option>
                                    <option value="11 - 15 Attendees">10 - 15 Attendees</option>
                                </select>
                            </div>
                            <div class="event-date-selection">
                                Date <input type="date" name="event-date" id="event-date" required>
                            </div>
                        </div>
                        <button id="book-button" submit>Add Event</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>