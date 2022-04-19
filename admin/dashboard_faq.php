<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="admin_dashboard.css">
  <link rel="stylesheet" href="blog_style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <div class="logo_name">Clabin</div>
      <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">

      <li>
        <a href="admin_dashboard.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>
      <li>
        <a href="dashboard_feedback.php">
          <i class='bx bx-user'></i>
          <span class="links_name">Feedbacks</span>
        </a>
        <span class="tooltip">Feedbacks</span>
      </li>
      <li>
        <a href="dashboard_donetions.php">
          <i class='bx bx-pie-chart-alt-2'></i>
          <span class="links_name">donations
          </span>
        </a>
        <span class="tooltip">donations</span>
      </li>
      <li>
        <a href="dashboard_blogs.php">
          <i class='bx bx-heart'></i>
          <span class="links_name">Blogs</span>
        </a>
        <span class="tooltip">Blogs</span>
      </li>
      <li>
        <a href="dashboard_faq.php">
          <i class='bx bx-user'></i>
          <span class="links_name">FAQs</span>
        </a>
        <span class="tooltip">FAQs</span>
      </li>
      <li>
        <a href="dashboard_hiring.php">
          <i class='bx bx-phone'></i>
          <span class="links_name">Applicants</span>
        </a>
        <span class="tooltip">Applicants</span>
      </li>
     
      <li class="profile">
        <div class="profile-details">
          <div class="name_job">
            <div class="name">Optimizers</div>
            <div class="job">Clabin Design Studio</div>

          </div>
        </div>
        <a href="admin_login.html"><i class='bx bx-log-out' id="log_out"></i></a>
      </li>
    </ul>
  </div>
  <section class="home-section">
    <br>
    <div class="box">
      <form method="POST" action="db_dashboard_faq.php">
      <div class="r">
        <div class="col-25">
          <label for="name">Question</label>
        </div>
        <div class="col-75">
          <input type="text" id="name" name="question" placeholder="Question..">
        </div>
      </div>
      <div class="r">
        <div class="col-25">
          <label for="name">Answer</label>
        </div>
        <div class="col-75">
          <input type="text" id="name" name="answer" placeholder="Answer..">
        </div>
      </div>
     
      <br>
      <div class="r">
        <input type="submit" value="Submit">
      </div>
      </form>
    </div>
  </section>

   <?php include 'db_dashboard_blogs.php';?> 

  <script>
    let sidebar = document.querySelector(".sidebar");
       let closeBtn = document.querySelector("#btn");
   
       closeBtn.addEventListener("click", () => {
         sidebar.classList.toggle("open");
       });
   
     </script>
</body>

</html>