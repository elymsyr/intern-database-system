<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>PANEL</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        *{
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          font-family: 'Poppins', sans-serif;
        }
        .sidebar{
          position: fixed;
          height: 100%;
          width: 240px;
          background: #0A2558;
          transition: all 0.5s ease;
        }
        .sidebar.active{
          width: 60px;
        }
        .sidebar .logo-details{
          height: 80px;
          display: flex;
          align-items: center;
        }
        .sidebar .logo-details i{
          font-size: 28px;
          font-weight: 500;
          color: #fff;
          min-width: 60px;
          text-align: center
        }
        .sidebar .logo-details .logo_name{
          color: #fff;
          font-size: 24px;
          font-weight: 500;
        }
        .sidebar .nav-links{
          margin-top: 10px;
        }
        .sidebar .nav-links li{
          position: relative;
          list-style: none;
          height: 50px;
        }
        .sidebar .nav-links li a{
          height: 100%;
          width: 100%;
          display: flex;
          align-items: center;
          text-decoration: none;
          transition: all 0.4s ease;
        }
        .sidebar .nav-links li a.active{
          background: #081D45;
        }
        .sidebar .nav-links li a:hover{
          background: #081D45;
        }
        .sidebar .nav-links li i{
          min-width: 60px;
          text-align: center;
          font-size: 18px;
          color: #fff;
        }
        .sidebar .nav-links li a .links_name{
          color: #fff;
          font-size: 15px;
          font-weight: 400;
          white-space: nowrap;
        }
        .sidebar .nav-links .log_out{
          position: absolute;
          bottom: 0;
          width: 100%;
        }
        .home-section{
          position: relative;
          background: #f5f5f5;
          min-height: 100vh;
          width: calc(100% - 240px);
          left: 240px;
          transition: all 0.5s ease;
        }
        .sidebar.active ~ .home-section{
          width: calc(100% - 60px);
          left: 60px;
        }
        .home-section nav{
          display: flex;
          justify-content: space-between;
          height: 80px;
          background: #fff;
          display: flex;
          align-items: center;
          position: fixed;
          width: calc(100% - 240px);
          left: 240px;
          z-index: 100;
          padding: 0 20px;
          box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
          transition: all 0.5s ease;
        }
        .sidebar.active ~ .home-section nav{
          left: 60px;
          width: calc(100% - 60px);
        }
        .home-section nav .sidebar-button{
          display: flex;
          align-items: center;
          font-size: 24px;
          font-weight: 500;
        }
        nav .sidebar-button i{
          font-size: 35px;
          margin-right: 10px;
        }
        .home-section .home-content{
          position: relative;
          padding-top: 104px;
        }
        .home-content .overview-boxes{
          display: flex;
          align-items: center;
          justify-content: space-evenly;
          flex-wrap: wrap;
          padding: 0 20px;
          margin-bottom: 26px;
        }
        .overview-boxes .box{
          display: flex;
          align-items: center;
          justify-content: center;
          width: calc(100% / 4 - 15px);
          background: #fff;
          padding: 15px 14px;
          border-radius: 12px;
          box-shadow: 0 5px 10px rgba(0,0,0,0.1);
        }
        .home-content .box .box_text{
          text-transform: capitalize;
          display: inline-block;
          font-size: 30px;
          margin-top: -6px;
          font-weight: 500;
        }
        @media (max-width: 1240px) {
          .sidebar{
            width: 60px;
          }
          .sidebar.active{
            width: 220px;
          }
          .home-section{
            width: calc(100% - 60px);
            left: 60px;
          }
          .sidebar.active ~ .home-section{
            /* width: calc(100% - 220px); */
            overflow: hidden;
            left: 220px;
          }
          .home-section nav{
            width: calc(100% - 60px);
            left: 60px;
          }
          .sidebar.active ~ .home-section nav{
            width: calc(100% - 220px);
            left: 220px;
          }
        }
        @media (max-width: 1000px) {
          .overview-boxes .box{
            width: calc(100% / 2 - 15px);
            margin-bottom: 15px;
          }
        }
        @media (max-width: 700px) {
          nav .sidebar-button .dashboard,
          nav .profile-details .admin_name{
            display: none;
          }
        }
        @media (max-width: 550px) {
          .overview-boxes .box{
            width: 100%;
            margin-bottom: 15px;
          }
          .sidebar.active ~ .home-section nav .profile-details{
            display: none;
          }
        }
          @media (max-width: 400px) {
          .sidebar{
            width: 0;
          }
          .sidebar.active{
            width: 60px;
          }
          .home-section{
            width: 100%;
            left: 0;
          }
          .sidebar.active ~ .home-section{
            left: 60px;
            width: calc(100% - 60px);
          }
          .home-section nav{
            width: 100%;
            left: 0;
          }
          .sidebar.active ~ .home-section nav{
            left: 60px;
            width: calc(100% - 60px);
          }
        }
     </style>
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxs-heart bx-no-border'></i>
      <span class="logo_name"><?php require "../functions.php"; $ini = get_ini();$main = $ini[1] ? "ADMIN" : $ini[0]; echo "$main"; ?></span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="menu.php">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">MENU<!-- Kullanıcı adı --></span>
          </a>
        </li>
        <li>
          <a href="projects.php" class="active">
            <i class='bx bx-box' ></i>
            <span class="links_name">PROJECTS</span>
          </a>
        </li>
        <li>
          <a href="services.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">WEB SERVICES</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">NOTIFICATIONS</span>
          </a>
        </li>
        <li class="log_out">
          <a href="login.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">LOG OUT</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div>
            <div class="box_text">project list</div>
          </div>
        </div>
        <div class="box">
          <div>
            <div class="box_text">new project</div>
          </div>
        </div>
        <div class="box">
          <div>
            <div class="box_text">project docs</div>
          </div>
        </div>
        <div class="box">
          <div>
            <div class="box_text">new docs</div>
          </div>
        </div>
        <!-- <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Return</div>
            <div class="box_text">11,086</div>
          </div>
          <i class='bx bxs-cart-download cart four' ></i>
        </div> -->
      </div>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>