<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permission</title>
    <link rel="stylesheet" href=".../../../../../../public/css/University/IT Admin/Permission.css" />

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

<div class="grant-container">
    <h2 class="grant-title">Grant Permission</h2>

    <div class="form-group-inline">
      <label for="userId">User ID:</label>
      <input type="text" id="userId" inputmode="numeric" pattern="[0-9]*" placeholder="Enter User ID" />

    </div>

    <label class="permission-label">Give permission in:</label>
    <div class="permissions">
      <label><input type="checkbox" id="promotionAdmin" value="Promotion Admin" /> Associated Editor</label>
      <label><input type="checkbox" id="reviewers" value="Reviewers" /> Editor In Chief</label>
    </div>

    <div class="permission-buttons">
      <button class="cancel-btn">Cancel</button>
      <button class="modify-btn">Modify</button>
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
        <script>
            const userIdInput = document.getElementById("userId");

            userIdInput.addEventListener("input", function () {
              this.value = this.value.replace(/[^0-9]/g, ""); // يمنع الحروف
            });
          </script>
</body>

</html>
