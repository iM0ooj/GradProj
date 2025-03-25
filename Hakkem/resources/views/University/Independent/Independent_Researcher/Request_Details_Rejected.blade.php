<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Details</title>
    <link rel="stylesheet" href="{{ asset('css/University/FM_Researcher/Request_Details.css') }}">
    <script src="{{ asset('js/JavaScripts/University/FM_Researcher/Request_Details.js') }}" defer></script>
</head>
<body>

    <!-- ✅ الهيدر العلوي كـ بوكس -->
    <header class="page-header">
        <div class="header-box">
            <h2>Request Details:</h2>
            <div class="request-info">
                <span>Number of researches: <strong>1 Researche</strong></span>
                <span>Specialization: <strong>Computer Information Systems</strong></span>
                <span>Submission Date: <strong>12-2-2025</strong></span>
                <span class="result">Result: <strong>Rejected</strong></span>
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
                    <th>Full Research</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>AI and Healthcare</td>
                    <td>Information Systems</td>
                    <td class="actions">
                        <button class="pdf-btn">
                            <img src="{{ asset('images/University/pdf-icon.png') }}" alt="PDF"> AI and Healthcare.pdf
                        </button>           
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
    </main>

</body>
</html>
