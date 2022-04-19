<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="admin_dashboard.css">
 
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
    <div class="col-sm-9">
      <div class="well" style="background-color:#161a45; color: white;">
        <h4>Dashboard</h4>
        <p>Welcome Admin...</p>
      </div>
      <div class="row">
      <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "clabin";
    try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);     
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
      $nRowsFeedBack = $conn->query('select count(*) from feedback')->fetchColumn(); 
      $nRowsContacts = $conn->query('select count(*) from registration')->fetchColumn(); 
      $nRowsApplicants = $conn->query('select count(*) from job_applicants')->fetchColumn(); 
      $nRowsBlogs = $conn->query('select count(*) from blog')->fetchColumn();
    
    } catch(PDOException $e) {
      
      $conn->rollback();
      echo "Error: " . $e->getMessage();
    }
    
    $conn = null;

?>
        <div class="col-sm-3">
          <div class="well" style="background-color: #7076b3;color: white;">
            <h4>Feedbacks</h4>
            <p><?php echo $nRowsFeedBack ?></p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well" style="background-color: #7076b3;color: white;">
            <h4>Contacts</h4>
            <p><?php echo $nRowsContacts ?></p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well" style="background-color: #7076b3;color: white;">
            <h4>Applicants</h4>
            <p><?php echo $nRowsApplicants ?></p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well" style="background-color: #7076b3;color: white;">
            <h4>Blogs</h4>
            <p><?php echo $nRowsBlogs ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
 let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");

    closeBtn.addEventListener("click", () => {
      sidebar.classList.toggle("open");
    });

  </script>
</body>

</html>