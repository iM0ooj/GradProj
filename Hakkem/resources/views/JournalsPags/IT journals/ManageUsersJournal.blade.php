<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ManageUsers</title>
    <link rel="stylesheet" href="../../../../public/css/University/IT Admin/ManageUsers.css" />
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
            <li class="sidebar-item ">
                <a href="../../../views/JournalsPags/IT journals/profile.html">
                    <img src="../../../../public/images/image-profile-icon.png" alt="Profile">
                    My Profile
                </a>
            </li>
            <li class="sidebar-item active">
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
  <!-- Table الأعضاء -->
<div class="container">
    <table class="member-table">
      <thead>
        <tr>
          <th>Full Name</th>
          <th>Email</th>
          <th>Department</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <td style="color: grey;">Ahmad Alshammari</td>
          <td style="color: grey;">ahmad@example.com</td>
          <td style="color: grey;">Editor In Chief</td>
          <td>
            <button class="action-btn">Delete</button>
            <a href="permission2.html" class="action-btn">Grant Permission</a>

          </td>
        </tr>
        <tr>
          <td style="color: grey;">Fatimah Alsaleh</td>
          <td style="color: grey;">fatimah@example.com</td>
          <td style="color: grey;">Associated Editor</td>
          <td>
            <button class="action-btn">Delete</button>
            <a href="permission2.html" class="action-btn">Grant Permission</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- زر الإضافة -->
  <div class="add-member-container">
    <a href="CreateUsersJournal.html">
      <button class="add-member-btn">+ Add Member</button>
    </a>
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
