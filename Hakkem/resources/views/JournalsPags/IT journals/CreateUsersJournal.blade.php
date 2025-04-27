<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreateUsr</title>

    <link rel="stylesheet" href="../../../../public/css/University/IT Admin/CreateUsr.css">
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
        </header>
    </div>

    <!-- السايد بار -->
    <aside class="sidebar">
        <ul>
            <li class="sidebar-item"><a href="../../../views/JournalsPags/IT journals/profile.html">
                    <img src="../../../../public/images/image-profile-icon.png" alt="Profile"> My Profile</a>
            </li>
            <li class="sidebar-item active"><a href="../../../views/JournalsPags/IT journals/ManageUsersJournal.html">
                    <img src="../../../../public/images/University/Manage-users icon.png" alt="Manage"> Manage Users</a>
            </li>
            <li class="sidebar-item"><a href="../../../views/University/IT Admin/SignoutOverly.html">
                    <img src="../../../../public/images/image-signout-icon.png" alt="Sign Out"> Sign Out</a>
            </li>
        </ul>
    </aside>
    <!-- المحتوى -->
<div class="page-content">
    <h2 style="text-align: center;">Create User Account</h2>

    <div class="form-container">
        <!-- الاسم والإيميل جنب بعض -->
        <div class="form-group">
            <label>Full Name:</label>
            <input type="text" id="fullName" placeholder="Enter full name" oninput="validateName()">
            <p id="name-error" class="error-message">Only letters are allowed</p>
        </div>

        <div class="form-group">
            <label>Email:</label>
            <input type="email" id="email" placeholder="Enter email">
            <p id="email-error" class="error-message">Invalid email format</p>
        </div>

        <!-- الباسورد وتأكيده جنب بعض -->
        <div class="form-group">
            <label>Password:</label>
            <input type="password" id="password" placeholder="Enter password">
        </div>

        <div class="form-group">
            <label>Confirm Password:</label>
            <input type="password" id="confirmPassword" placeholder="Confirm password" oninput="checkPasswordMatch()">
            <p id="password-error" class="error-message">Passwords do not match</p>
        </div>

        <!-- القسم والرتبة جنب بعض -->
<div class="form-group">
    <label>Department:</label>
    <select id="department" required>
        <option value="" disabled selected hidden>Select department</option>
        <option value="IT">Information System</option>
        <option value="CS">Computer Science</option>
        <option value="SE">Software Engineering</option>
    </select>
</div>

<!-- التصاريح -->
<div class="form-group" style="grid-column: span 2;">
    <label style="font-weight:bold;">Give permission as:</label>
    <div class="permissions">
        <label><input type="checkbox" id="promotionAdmin" value="Promotion Admin">Editor In Chief</label>
        <label><input type="checkbox" id="researcher" value="Researcher"> Associated Editor</label>
    </div>
</div>

        <!-- زر الحفظ -->
        <div style="display:flex; justify-content:center; margin-top: 20px;">
            <button class="profile-button" onclick="saveUser()">Save changes</button>
        </div>

        <p id="success-message" class="success-message">User account created successfully!</p>
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

            <script src="../../../../public/js/JavaScripts/University/MyProfile.js"></script>
            <script src="../../../../public/js/JavaScripts/sidebar.js"></script>

</body>

</html>
