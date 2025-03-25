<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar</title>
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
</head>
<body>

    <!-- ✅ القائمة الجانبية -->
    <aside class="sidebar">
        <ul>
            <li class="active">
                <img src="{{ asset('images/image-profile-icon.png') }}" alt="Profile">
                <a href="#">My Profile</a>
            </li>
            <li>
                <img src="{{ asset('images/image-research-icon.png') }}" alt="Research">
                <a href="#">My Researches</a>
            </li>
            <li>
                <img src="{{ asset('images/image-requests-icon.png') }}" alt="Requests">
                <a href="#">My Requests</a>
            </li>
            <li>
                <img src="{{ asset('images/image-password-icon.png') }}" alt="Change Password">
                <a href="#">Change Password</a>
            </li>
            <li>
                <img src="{{ asset('images/image-delete-icon.png') }}" alt="Delete Account">
                <a href="#">Delete Account</a>
            </li>
            <li>
                <img src="{{ asset('images/image-signout-icon.png') }}" alt="Sign Out">
                <a href="#">Sign Out</a>
            </li>
        </ul>
    </aside>
    
    <script src="{{ asset('js/JavaScripts/sidebar.js') }}"></script>

</body>
</html>
