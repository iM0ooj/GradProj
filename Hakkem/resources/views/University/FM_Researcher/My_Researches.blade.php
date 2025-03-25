<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Researchers - Hakkem</title>
    <script>
        window.eyeOpen = "{{ asset('images/University/eye-open.png') }}";
        window.eyeClosed = "{{ asset('images/University/eye-closed.png') }}";
    </script>
<!-- ✅ CSS -->
<link rel="stylesheet" href="{{ asset('css/University/FM_Researcher/My_Researches.css') }}">
<!-- ✅ JavaScript -->
<script src="{{ asset('js/JavaScripts/University/FM_Researcher/My_Researches.js') }}"></script>
</head>
<body>

    <div class="container">
        <!-- المحتوى الرئيسي -->
        <main class="content">
            <table>
                <thead>
                    <tr>
                        <th>Research ID</th>
                        <th>Research Title</th>
                        <th>DOI</th>
                        <th>Full Research</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- البحث الأول -->
                    <tr>
                        <td>0754982903</td>
                        <td>AI and Healthcare</td>
                        <td>
                            <strong>Doe, J., Smith, J. & Al-Farsi, A. (2025).</strong><br>
                            Analyzing the impact of AI in Healthcare. International Journal of AI & Health, 12(1), 45-60. 
         
                        </td>
                        <td>
                            <div class="action-buttons">
                                <button class="see-more" onclick="toggleDetails(this)">
                                    See More <span class="arrow">&#9660;</span>
                                </button>
                                <a href="AI-Healthcare.pdf" class="pdf-link" target="_blank">
                                    <button class="download">
                                        <img src="{{ asset('images/University/pdf-icon.png') }}" alt="PDF">
                                    </button>
                                    </a>
                                    <button class="pdf-toggle" onclick="togglePDF(this)" data-visible="true">
                                        <img src="{{ asset('images/University/eye-open.png') }}" alt="Toggle PDF">
                                    </button>
                                    
                            </div>
                        </td>
                    </tr>
                    <tr class="research-details">
                        <td colspan="4">
                            <div class="details-box">
                                <div class="sub-box"><strong>Research Field:</strong> Data Science</div>
                                <div class="sub-box"><strong>Keywords:</strong> NLP, AI, Chatbots</div>
                                <div class="sub-box">
                                    <strong>Abstract:</strong><br>
                                    This research explores AI-powered chatbots in healthcare, their benefits, and challenges.
                                </div>
                            </div>
                        </td>
                    </tr>

                    <!-- البحث الثاني -->
                    <tr>
                        <td>3762589035</td>
                        <td>IoT and Smart Houses</td>
                        <td>
                            <strong>Khalid, M. & Patel, R. (2023).</strong><br>
                            Optimizing smart cities with IoT-based traffic management systems. International Journal of IoT, 20(1), 30-50. 

                        </td>
                        <td>
                            <div class="action-buttons">
                                <button class="see-more" onclick="toggleDetails(this)">
                                    See More <span class="arrow">&#9660;</span>
                                </button>
                                <a href="IoT-Smart-Houses.pdf" class="pdf-link" target="_blank">
                                    <button class="download">
                                        <img src="{{ asset('images/University/pdf-icon.png') }}" alt="PDF">
                                    </button>
                                    </a>
                                    <button class="pdf-toggle" onclick="togglePDF(this)" data-visible="true">
                                        <img src="{{ asset('images/University/eye-open.png') }}" alt="Toggle PDF">
                                    </button>
                                    
                            </div>
                        </td>
                    </tr>
                    <tr class="research-details">
                        <td colspan="4">
                            <div class="details-box">
                                <div class="sub-box"><strong>Research Field:</strong> Internet of Things</div>
                                <div class="sub-box"><strong>Keywords:</strong> IoT, Smart Homes, Automation</div>
                                <div class="sub-box">
                                    <strong>Abstract:</strong><br>
                                    This study investigates the integration of IoT in smart homes and explores automation benefits.
                                </div>
                            </div>
                        </td>
                    </tr>
                    <!-- البحث الثالث -->
                    <tr>
                        <td>5937524509</td>
                        <td>NLP Algorithms</td>
                        <td>
                            <strong>Brown, L., Youssef, A. & Zhang, E. (2023).</strong><br>
                            Transforming Healthcare through NLP-Based Chatbots. Computational Linguistics & Healthcare Systems, 15(2), 75-95. 
                          
                        </td>
                        <td>
                            <div class="action-buttons">
                                <button class="see-more" onclick="toggleDetails(this)">
                                    See More <span class="arrow">&#9660;</span>
                                </button>
                                <a href="NLP-Algorithms.pdf" class="pdf-link" target="_blank">
                                    <button class="download">
                                        <img src="{{ asset('images/University/pdf-icon.png') }}" alt="PDF">
                                    </button>
                                    </a>
                                    <button class="pdf-toggle" onclick="togglePDF(this)" data-visible="true">
                                        <img src="{{ asset('images/University/eye-open.png') }}" alt="Toggle PDF">
                                    </button>
                                    
                            </div>
                        </td>
                    </tr>
                    <tr class="research-details">
                        <td colspan="4">
                            <div class="details-box">
                                <div class="sub-box"><strong>Research Field:</strong> Artificial Intelligence</div>
                                <div class="sub-box"><strong>Keywords:</strong> NLP, Machine Learning, Deep Learning</div>
                                <div class="sub-box">
                                    <strong>Abstract:</strong><br>
                                    This research examines how NLP algorithms enhance healthcare chatbots and improve efficiency.
                                </div>
                            </div>
                        </td>
                    </tr>
                    <!-- البحث الرابع -->
                    <tr>
                        <td>1196483021</td>
                        <td>Cyber Security</td>
                        <td>
                            <strong>Connor, S., Lin, D. & Al-Bakri, O. (2024).</strong><br>
                            Advancing Threat Detection through Machine Learning in Cybersecurity. Journal of Cybersecurity Innovations, 18(1), 100-120. 
                           
                        </td>
                        <td>
                            <div class="action-buttons">
                                <button class="see-more" onclick="toggleDetails(this)">
                                    See More <span class="arrow">&#9660;</span>
                                </button>
                                <a href="Cyber-Security.pdf" class="pdf-link" target="_blank">
                                    <button class="download">
                                        <img src="{{ asset('images/University/pdf-icon.png') }}" alt="PDF">
                                    </button>
                                    </a>
                                    <button class="pdf-toggle" onclick="togglePDF(this)" data-visible="true">
                                        <img src="{{ asset('images/University/eye-open.png') }}" alt="Toggle PDF">
                                    </button>
                                    
                            </div>
                        </td>
                    </tr>
                    <tr class="research-details">
                        <td colspan="4">
                            <div class="details-box">
                                <div class="sub-box"><strong>Research Field:</strong> Cyber Security</div>
                                <div class="sub-box"><strong>Keywords:</strong> Threat Detection, AI Security, Network Protection</div>
                                <div class="sub-box">
                                    <strong>Abstract:</strong><br>
                                    This study explores how machine learning enhances threat detection in cybersecurity systems, improving network security and mitigating cyber threats efficiently.
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>


           <!-- زر إضافة بحث جديد -->
<button class="add-research">
    <img src="{{ asset('images/University/Add-icon.png') }}" alt="Add"> Add New Research
</button>

</main>
<script>
    function togglePDF(button) {
        let pdfLink = button.closest("td").querySelector(".pdf-link");
        let img = button.querySelector("img");

        if (button.getAttribute("data-visible") === "true") {
            pdfLink.style.display = "none";
            img.src = eyeClosed;
            button.setAttribute("data-visible", "false");
        } else {
            pdfLink.style.display = "inline-block";
            img.src = eyeOpen;
            button.setAttribute("data-visible", "true");
        }
    }
</script>

</body>
</html>