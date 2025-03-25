<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile - Hakkem</title>
    <link rel="stylesheet" href="{{ asset('css/University/FM_Researcher/My_Profile.css') }}" />
    <script src="{{ asset('js/JavaScripts/University/FM_Researcher/My_Profile.js') }}" defer></script>
    
</head>
<body>
    <div class="container">
      <!-- القائمة الجانبية -->
      

      <!-- المحتوى الرئيسي -->
      <main class="profile-content">
        <div class="profile-box">
          <button id="edit-btn" class="edit-button">
            <img src="{{ asset(path: 'images/University/Edit-icon.png') }}" alt="Edit" /> Edit
          </button>

          <form id="profile-form">
            <div class="form-group">
              <label for="first-name">First Name:</label>
              <input type="text" id="first-name" disabled />
            </div>
            <div class="form-group">
              <label for="last-name">Last Name:</label>
              <input type="text" id="last-name" disabled />
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" id="email" disabled />
            </div>
            <div class="form-group">
              <label for="phone">Phone:</label>
              <input type="text" id="phone" disabled />
            </div>
            <div class="form-group">
              <label for="university">University:</label>
              <input type="text" id="university" disabled />
            </div>
            <div class="form-group">
              <label for="academic-rank">Academic Rank:</label>
              <input type="text" id="academic-rank" disabled />
            </div>
            <div class="form-group">
              <label for="qualification">Academic Qualification:</label>
              <select id="qualification" disabled>
                <option value="">Select...</option>
                <option value="bachelor">Bachelor's</option>
                <option value="master">Master's</option>
                <option value="phd">PhD</option>
              </select>
            </div>
            <div class="form-group">
              <label for="bachelor-specialization"
                >Bachelor's Specialization:</label
              >
              <input type="text" id="bachelor-specialization" disabled />
            </div>
            <div class="form-group">
              <label for="master-specialization"
                >Master’s Specialization:</label
              >
              <input type="text" id="master-specialization" disabled />
            </div>
            <div class="form-group">
              <label for="doctorate-specialization"
                >Doctorate’s Specialization:</label
              >
              <input type="text" id="doctorate-specialization" disabled />
            </div>
            <div class="form-group">
              <label for="specialization">Specialization:</label>
              <input type="text" id="specialization" disabled />
            </div>
            <div class="form-actions">
              <button type="submit" id="save-btn" class="save-button" disabled>
                Save changes
              </button>
              <button
                type="button"
                id="cancel-btn"
                class="cancel-button"
                disabled
              >
                Cancel
              </button>
            </div>
          </form>
        </div>

       
      </main>
    </div>
  </body>
</html>
