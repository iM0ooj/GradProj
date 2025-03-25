<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Details</title>
    <link rel="stylesheet" href="{{ asset('css/University/Researcher_Reviewer/FM_Rev_Accept_Or_Decline_Requests.css') }}">
    <script src="{{ asset('js/JavaScripts/University/Researcher_Reviewer/FM_Rev_Accept_Or_Decline_Requests.js') }}" defer></script>
    
</head>
<body>

  <!-- ✅ الهيدر العلوي كـ بوكس -->
<header class="page-header">
    <div class="header-box">
        <h2>Request Details:</h2>
        <div class="request-info">
            <!-- صورة شعار الجامعة -->
            <img src="{{ asset('images/University/Najran_University.png') }}" alt="University Logo" width="50" height="50">
            <span>Number of researches: <strong>1 Researche</strong></span>
            <span>Specialization: <strong>Computer Information Systems</strong></span>
            <span>Submission Date: <strong>12-2-2025</strong></span>
            <span class="result">Fees: <strong>10000 SAR</strong></span>
        </div>
    </div>
</header>

    <!-- ✅ المحتوى الرئيسي -->
    <main class="content">
        <!-- ✅ الجدول -->
        <table>
            <thead>
                <tr>
                    <th>Research Number</th>
                    <th>Research Title</th>
                    <th>Research Field</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                <!-- ✅ 5 أبحاث كاملة -->
                <tr>
                    <td>1</td>
                    <td>AI and Healthcare</td>
                    <td>Information Systems</td>
                    <td class="actions">
                        <button class="see-more">See more <span class="arrow">▼</span></button>
                        </div>
                        
                    </td>
                </tr>
                <tr class="research-details">
                    <td colspan="4">
                        <div class="details-box">
                            <div class="sub-box"><strong>Research Field:</strong> Data Science</div>
                            <div class="sub-box"><strong>Keywords:</strong> NLP, AI, Chatbots</div>
                            <div class="sub-box">
                                <strong>Abstract:</strong>
                                <p>AI-powered chatbots in healthcare enhance patient interaction and efficiency...</p>
                            </div>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
        <div class="buttons-container">
            <button class="reject-btn">Reject Request</button>
            <button class="accept-btn">Accept Request</button>
        </div>
        
    </main>

</body>
</html>
