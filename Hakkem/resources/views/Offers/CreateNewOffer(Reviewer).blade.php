<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreateNewOffer(Reviewer)</title>
        <link rel="stylesheet" href="{{ asset(path:'hakkem/css/Offers/CreateNewOffer(Reviewer).css') }}" />
</head>
<body>
     <!-- HEADER -->
   <div class="center">
        <header>
            <div class="logo-placeholder">
                <img src="{{ asset('hakkem/images/White-logo.png') }}" alt="logo" />
                <h1 class="brandname">HAKKEM</h1>
            </div>
            <div class="nav">
                <div class="nav-cont">
                    <a href="{{ asset('') }}" class="navigate">Home</a>
                    <a href="{{ asset('') }}" class="navigate">Chat</a>
                    <a href="{{ asset('') }}" class="navigate">Offers</a>
                    <a href="{{ asset('') }}" class="navigate">Journals</a>
                </div>
            </div>
            <a href="#" class="profile-link">
                <img src="{{ asset('hakkem/images/Header_Footer/profile_light.png') }}" class="profile" alt="Profile" />
            </a>
    </div>
    </header>
    <div class="form-container">
        <!-- الاسم الكامل -->
        <div class="form-group">
          <label for="fullName">Full Name:</label>
          <input type="text" id="fullName" placeholder="Enter full name" />
        </div>

        <!-- المسمى الوظيفي -->
        <div class="form-group">
          <label for="jobTitle">Job Title:</label>
          <input type="text" id="jobTitle" placeholder="Enter job title"/>
        </div>

        <!--  (مدة وسعر) -->
        <div class="double-field">
            <div class="form-group half">
              <label>Duration:</label>
              <input type="text" id="duration" placeholder="e.g 1week"/>
            </div>
            <div class="form-group half">
              <label>Price:</label>
              <input type="text" id="price" placeholder="200SAR
              " />
            </div>
          </div>

        <!-- الأزرار -->
        <div class="buttons">
          <button class="cancel-btn">Cancel</button>
          <button class="post-btn">Post</button>
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
                <img src="{{ asset('hakkem/images/Header_Footer/Contact-Phone_light.png') }} " />
                <img src="{{ asset('hakkem/images/Header_Footer/Contact-Email_light.png') }}" />
                <img src=".{{ asset('hakkem/images/Header_Footer/Contact-X_light.png') }}" />
            </div>
        </footer>
    </div>
</body>
</html>
