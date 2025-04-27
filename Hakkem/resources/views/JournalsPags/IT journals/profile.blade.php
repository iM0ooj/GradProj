<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><MyProfileJournal></title>
    <link rel="stylesheet" href="../../../../public/css/University/IT Admin/MyProfile.css" />

</head>

<body>
    <!-- HEADER -->
    <div class="center">
        <header>
            <div class="logo-placeholder">
                <img src="../../../../public/images/White-logo.png" alt="logo" />
                <h1 class="brandname">HAKKEM</h1>
            </div>
            <div class="nav">
                <div class="nav-cont">
                    <a href="../../MainPages/HOME/Home.html" class="navigate">Home</a>
                    <a href="chat.html" class="navigate">Chat</a>
                    <a href="offers.html" class="navigate">Offers</a>
                    <a href="journals.html" class="navigate">Journals</a>
                </div>
            </div>
            <a href="../../../views/University/IT Admin/MyProfile.html" class="profile-link">
                <img src="../../../../public/images/Header - Footer/profile_light.png" class="profile" alt="Profile" />
            </a>
    </div>
    </header>
    </div>
    <!--السايد بار-->
    <aside class="sidebar">
        <ul>
            <li class="sidebar-item active">
                <a href="../../../views/JournalsPags/IT journals/profile.html">
                    <img src="../../../../public/images/image-profile-icon.png" alt="Profile">
                    My Profile
                </a>
            </li>
            <li class="sidebar-item">
                <a href="../../../views/JournalsPags/IT journals/ManageUsersJournal.html">
                    <img src="../../../../public/images/University/Manage-users icon.png" alt="Manage">
                    Manage Users
                </a>
            </li>

            <li class="sidebar-item">
                <a href="../../../views/University/IT Admin/SignoutOverly.html">
                    <img src="../../../../public/images/image-signout-icon.png" alt="Sign Out">
                    Sign Out
                </a>
            </li>
        </ul>
    </aside>
    <!-- الكونتير للحقول-->
    <div id="dynamic-" class="fields-container">
        <button class="Edit-button" id="editBtn">
            Edit
        </button>

        <!-- حقلين الاسماء-->
        <div class="input-row">
            <div>
                <label>First Name:</label>
                <input type="text" id="firstName" placeholder="Enter your first name" disabled
                    oninput="validateText(this)">
            </div>
            <div>
                <label>Last Name:</label>
                <input type="text" id="lastName" placeholder="Enter your last name" disabled
                    oninput="validateText(this)">
            </div>
        </div>

        <!-- حقلين البريد الجورنال -->
        <div class="input-row">
            <div>
                <label>Email:</label>
                <input type="email" id="email" placeholder="example@email.com" disabled oninput="validateEmail(this)">
            </div>
            <div>
                <label>Journal:</label>
                <input type="text" id="university" placeholder="Enter your Journal name" disabled
                    oninput="validateText(this)">
            </div>
        </div>
        <!-- الأزرار -->
        <div class="buttons">
            <button id="saveBtn" disabled>Save changes</button>
            <button id="cancelBtn" disabled>Cancel</button>
        </div>
    </div>

    <!-- FOOTER -->
    <div class="center">
        <footer>
            <div class="left">
                <p class="Footer-link">Pivacy Policy</p>
                <p>|</p>
                <p class="Footer-link">About Hakkem</p>
            </div>
            <div class="Mid">
                <p>© 2025 Hakkem. All Rights Reserved.</p>
            </div>
            <div class="right">
                <img src="../../../../public/images/Header - Footer/Contact-Phone_light.png " />
                <img src="../../../../public/images/Header - Footer/Contact-Email_light.png" />
                <img src="../../../../public/images/Header - Footer/Contact-X_light.png" />
            </div>
        </footer>
    </div>
    <script src="../../../../public/js/JavaScripts/University/MyProfile.js"></script>
    <script src="../../../../public/js/JavaScripts/sidebar.js"></script>
</body>

</html>
