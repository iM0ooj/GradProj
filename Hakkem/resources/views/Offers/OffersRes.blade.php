<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OffersRes</title>
        <link rel="stylesheet" href="{{ asset(path:'hakkem/css/Offers/OffersRes.css') }}"/>
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

    <!-- بداية الصفحة -->
<div class="offers-page">

    <!-- الزرين اللي على اليسار -->
    <div class="left-buttons">
      <!-- زر إنشاء عرض جديد -->
      <a href="CreateNewOfferRes.html">
        <button class="new-offer-btn">+ New Offer</button>
      </a>
    </div>

    <!-- الشبكة اللي فيها البوكسات -->
    <div class="offers-grid">

      <!-- بوكس العرض الأول -->
      <div class="offer-box">
        <!-- اسم التخصص -->
        <h3 class="field-title">Machine Learning</h3>

        <!-- العنوان والوصف -->
        <p><strong>Title:</strong> Hybrid Model for Customer Demand Prediction</p>
        <p><strong>Description:</strong> This study proposes a hybrid model combining linear regression and random forest algorithms to analyze real-time customer sales data, improving the accuracy of demand prediction.</p>

        <!-- الوقت والسعر والعين -->
        <div class="offer-footer">
          <span class="time">2 Weeks</span>
          <span class="price">By agreement</span>
          <!-- زر العين يفتح صفحة العرض للمحكم -->
          <a href="OffersDetRev.html" class="view-icon">👁</a>
        </div>
      </div>

      <!-- بوكس العرض الثاني -->
      <div class="offer-box">
        <h3 class="field-title">Deep Learning</h3>
        <p><strong>Title:</strong> Deep Learning for Disease Detection in X-Rays</p>
        <p><strong>Description:</strong> Developing a convolutional neural network (CNN)-based model to analyze X-ray images and detect lung diseases, with higher efficiency compared to traditional models.</p>
        <div class="offer-footer">
          <span class="time">2 Weeks</span>
          <span class="price">150 SAR</span>
          <a href="ViewOffer.html" class="view-icon">👁</a>
        </div>
      </div>

      <!-- بوكس العرض الثالث -->
      <div class="offer-box">
        <h3 class="field-title">Neural Networks</h3>
        <p><strong>Title:</strong>
            Recurrent Neural Networks for Language Translation</p>
        <p><strong>Description:</strong> Exploring the application of Long Short-Term Memory (LSTM) networks to create a more accurate and context-aware neural machine translation system for low-resource languages.</p>
        <div class="offer-footer">
          <span class="time">2 Weeks</span>
          <span class="price">For Free</span>
          <a href="ViewOffer.html" class="view-icon">👁</a>
        </div>
      </div>
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
