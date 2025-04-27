<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OffersRev</title>
    <link rel="stylesheet" href="{{ asset(path:'hakkem/css/Offers/OffersRev.css') }}" />
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

        <!-- الزر اللي على اليسار -->
        <div class="left-buttons">
            <a href="CreateNewOffer(Reviewer).html">
                <button class="new-offer-btn">+ New Offer</button>
            </a>
        </div>

        <!-- البوكسات -->
        <div class="researcher-container">
            <div class="researcher-card">
                <h3>Darrell Steward</h3>
                <p>Data scientist optimizing predictive models.</p>
                <div class="info-row">
                    <span>2 Weeks</span>
                    <span>300 SAR</span>
                </div>
                <a href="chat.html">
                    <button class="message-btn">Start Messages</button>
                </a>
                <div class="stars">★★★★★</div>
            </div>

            <div class="researcher-card">
                <h3>Marvin McKinney</h3>
                <p>AI researcher building neural networks.</p>
                <div class="info-row">
                    <span>4 Weeks</span>
                    <span>350 SAR</span>
                </div>
                <a href="chat.html">
                    <button class="message-btn">Start Messages</button>
                </a>
                <div class="stars">★★★★★</div>
            </div>

            <div class="researcher-card">
                <h3>Ronald Richards</h3>
                <p>Engineer designing artificial brain models.</p>
                <div class="info-row">
                    <span>3 Weeks</span>
                    <span>400 SAR</span>
                </div>
                <a href="chat.html">
                    <button class="message-btn">Start Messages</button>
                </a>
                <div class="stars">★★★★★</div>
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
