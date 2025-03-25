<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Received Requests - Hakkem</title>
    <link rel="stylesheet" href="{{ asset('css/University/Researcher_Reviewer/Received_Requests.css') }}">
    <script src="{{ asset('js/JavaScripts/University/Researcher_Reviewer/Received_Requests.js') }}"></script>
</head>
<body>
    <div class="container">
       
        <main class="content">
            <div class="filter-container">
                <div class="filter">
                    <button class="filter-btn active" data-filter="all">All</button>
                    <button class="filter-btn" data-filter="under-review">Under Review</button>
                    <button class="filter-btn" data-filter="completed">Completed</button>
                    <button class="filter-btn" data-filter="rejected">Rejected</button>
                </div>
            </div>
            
            <div class="request-list">
                <div class="request-item">
                    <img src="{{ asset('images/University/KKU.png') }}" alt="University Logo">
                    <div class="request-info">
                        <span class="university">King Khalid University</span>
                        <span class="time">3 hours ago</span>
                        <span class="status unread">Unread</span>
                        <span class="request-id">Request ID\ 234566</span>
                    </div>
                    <button class="details">Details</button>
                </div>

                <div class="request-item">
                    <img src="{{ asset('images/University/KSU.png') }}" alt="University Logo">
                    <div class="request-info">
                        <span class="university">King Saud University</span>
                        <span class="time">9 hours ago</span>
                        <span class="status unread">Unread</span>
                        <span class="request-id">Request ID\ 8776543</span>
                    </div>
                    <button class="details">Details</button>
                </div>

                <div class="request-item">
                    <img src="{{ asset('images/University/KSU.png') }}" alt="University Logo">
                    <div class="request-info">
                        <span class="university">King Saud University</span>
                        <span class="time">12 hours ago</span>
                        <span class="status read">Read</span>
                        <span class="request-id">Request ID\ 0987566</span>
                    </div>
                    <button class="details">Details</button>
                </div>

                <div class="request-item">
                    <img src="{{ asset('images/University/Najran_University.png') }}" alt="University Logo">
                    <div class="request-info">
                        <span class="university">Najran University</span>
                        <span class="time">20 hours ago</span>
                        <span class="status read">Read</span>
                        <span class="request-id">Request ID\ 567890</span>
                    </div>
                    <button class="details">Details</button>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
