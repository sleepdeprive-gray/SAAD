<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROTG | Admin Feedback</title>

    <!-- Web Icon -->
    <link rel="shortcut icon" href="../css/icon/logo.png" type="image/x-icon">

    <!-- CSS Link -->
    <link rel="stylesheet" href="../css/Admin/layout.css">
    <link rel="stylesheet" href="../css/Admin/feedback.css">

    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

</head>
<body>

    <div class="bg-highlight">   
        <header>
                <div class="header-title">
                    <p class="page-title">FEEDBACK</p>
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
                        <a href="admin-add-events.php">
                            <img src="../css/icon/Calendar Plus.png" alt="">
                        </a>
                    </nav>
                    <nav>
                        <a href="admin-archive.php">
                            <img src="../css/icon/Archive.png" alt="">
                        </a>
                    </nav>
                    <nav>
                        <div class="current-page-indicator">
                            <a href="admin-feedback.php">
                                <img src="../css/icon/Open email.png" alt="">
                            </a>
                        </div>
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
                <div class="feedback-bg">
                    <div class="header-part">
                        <p>User Feedbacks</p>
                        <div class="searchbar">
                            <a href="">
                                <i class="fa-solid fa-microphone"></i>
                            </a>
                            <input type="search" name="searchbar" id="searchbar" placeholder="Search Email, Date Sent, Status">
                            <a href="">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                        </div>
                    </div>
                    <div class="table">
                            <table>
                                <thead>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Date Sent</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="sender-email">reserveonthego@gmail.com</td>
                                        <td class="message-sent">Lorem Ipsum Lorem Ipsum...</td>
                                        <td class="date-sent">2025-01-13 14:37:25</td>
                                        <td class="status">Unread</td>
                                        <td class="action">
                                            <button class="view-button" onclick="openModal('reserveonthego@gmail.com', 'I hate documentation of this system like AHHHHHHHH', 'read')">
                                                View
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="sender-email">reserveonthego@gmail.com</td>
                                        <td class="message-sent">Lorem Ipsum Lorem Ipsum...</td>
                                        <td class="date-sent">2025-01-13 14:37:25</td>
                                        <td class="status">Read</td>
                                        <td class="action">
                                            <button class="view-button" onclick="openModal('reserveonthego@gmail.com', 'I hate documentation of this system like AHHHHHHHH', 'unread')">
                                                View
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="sender-email">reserveonthego@gmail.com</td>
                                        <td class="message-sent">Lorem Ipsum Lorem Ipsum...</td>
                                        <td class="date-sent">2025-01-13 14:37:25</td>
                                        <td class="status">Unread</td>
                                        <td class="action">
                                            <button class="view-button">
                                                View
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="sender-email">reserveonthego@gmail.com</td>
                                        <td class="message-sent">Lorem Ipsum Lorem Ipsum...</td>
                                        <td class="date-sent">2025-01-13 14:37:25</td>
                                        <td class="status">Unread</td>
                                        <td class="action">
                                            <button class="view-button">
                                                View
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="sender-email">reserveonthego@gmail.com</td>
                                        <td class="message-sent">Lorem Ipsum Lorem Ipsum...</td>
                                        <td class="date-sent">2025-01-13 14:37:25</td>
                                        <td class="status">Unread</td>
                                        <td class="action">
                                            <button class="view-button">
                                                View
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="sender-email">reserveonthego@gmail.com</td>
                                        <td class="message-sent">Lorem Ipsum Lorem Ipsum...</td>
                                        <td class="date-sent">2025-01-13 14:37:25</td>
                                        <td class="status">Unread</td>
                                        <td class="action">
                                            <button class="view-button">
                                                View
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="sender-email">reserveonthego@gmail.com</td>
                                        <td class="message-sent">Lorem Ipsum Lorem Ipsum...</td>
                                        <td class="date-sent">2025-01-13 14:37:25</td>
                                        <td class="status">Unread</td>
                                        <td class="action">
                                            <button class="view-button">
                                                View
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="sender-email">reserveonthego@gmail.com</td>
                                        <td class="message-sent">Lorem Ipsum Lorem Ipsum...</td>
                                        <td class="date-sent">2025-01-13 14:37:25</td>
                                        <td class="status">Unread</td>
                                        <td class="action">
                                            <button class="view-button">
                                                View
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="sender-email">reserveonthego@gmail.com</td>
                                        <td class="message-sent">Lorem Ipsum Lorem Ipsum...</td>
                                        <td class="date-sent">2025-01-13 14:37:25</td>
                                        <td class="status">Unread</td>
                                        <td class="action">
                                            <button class="view-button">
                                                View
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="sender-email">reserveonthego@gmail.com</td>
                                        <td class="message-sent">Lorem Ipsum Lorem Ipsum...</td>
                                        <td class="date-sent">2025-01-13 14:37:25</td>
                                        <td class="status">Unread</td>
                                        <td class="action">
                                            <button class="view-button">
                                                View
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="sender-email">reserveonthego@gmail.com</td>
                                        <td class="message-sent">Lorem Ipsum Lorem Ipsum...</td>
                                        <td class="date-sent">2025-01-13 14:37:25</td>
                                        <td class="status">Unread</td>
                                        <td class="action">
                                            <button class="view-button">
                                                View
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>

                </div>
            </div>
        </div>
        <!-- Modal -->
        <div id="messageModal" class="modal">
            <div class="modal-content">
                <!-- Close button -->
                <span class="close" onclick="closeModal()">&times;</span>
                
                <!-- Modal content -->
                <label for="email">Sender Email</label>
                <input type="text" id="modalEmail" class="modal-input" placeholder="asdasdsad" readonly>
                
                <label for="message">Message</label>
                <textarea id="modalMessage" class="modal-input" readonly></textarea>
                
                <button id="statusButton" onclick="toggleStatus()">Mark as Unread</button>
            </div>
        </div>
    </div>

    <!-- JavaScripts -->
     <script src="../js/Admin/feedback-modal.js"></script>

</body>
</html>