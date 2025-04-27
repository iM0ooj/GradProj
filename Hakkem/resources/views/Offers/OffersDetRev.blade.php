<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OffersDetilsRev</title>
        <link rel="stylesheet" href="{{ asset(path:'hakkem/css/Offers/OffersDetRev.css') }}" />
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
        <!-- الحقل المزدوج (مدة وسعر) -->
        <div class="double-field">
          <div class="form-group half">
            <label>Duration:</label>
            <input type="text" id="duration" value="2 Weeks" disabled />
          </div>
          <div class="form-group half">
            <label>Price:</label>
            <input type="text" id="price" value="By agreement" disabled />
          </div>
        </div>

        <!-- حقل العنوان -->
        <div class="form-group">
          <label>Title:</label>
          <input type="text" value="Hybrid Model for Customer Demand Prediction" disabled />
        </div>

        <!-- حقل الكلمات المفتاحية -->
        <div class="form-group">
          <label>Keywords:</label>
          <textarea rows="2" disabled>
      Machine Learning, Demand Forecasting, Hybrid Model, Random Forest, Linear Regression, Predictive Analytics, Business Optimization
          </textarea>
        </div>

        <!-- حقل الملخص -->
        <div class="form-group full-width">
          <label>Abstract:</label>
          <textarea rows="8" disabled>
      Accurate demand forecasting is crucial for businesses to optimize inventory management, reduce costs, and improve customer satisfaction. This study proposes a hybrid machine learning model that combines linear regression and random forest algorithms to enhance demand prediction accuracy. The model leverages historical sales data, seasonal trends, and external factors such as economic indicators to provide more reliable forecasts. Comparative analysis with traditional models demonstrates improved performance in terms of mean absolute error (MAE) and root mean squared error (RMSE). The findings suggest that hybrid approaches can significantly enhance decision-making in dynamic market environments.
          </textarea>
        </div>

        <!-- الأزرار -->
        <div class="buttons">
          <button class="cancel-btn">Back</button>
          <button class="post-btn">Start Messages</button>
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
