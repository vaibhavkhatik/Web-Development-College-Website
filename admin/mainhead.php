<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.72.0">
  <title>Dashboard</title>

    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/dashboard/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
    crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    body {
      font-size: .875rem;
    }

    .feather {
      width: 16px;
      height: 16px;
      vertical-align: text-bottom;
    }

    /* Sidebar*/

    .sidebar {
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      z-index: 100;
      /* Behind the navbar */
      padding: 48px 0 0;
      /* Height of navbar */
      box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
    }

    @media (max-width: 767.98px) {
      .sidebar {
        top: 5rem;
      }
    }

    .sidebar-sticky {
      position: relative;
      top: 0;
      height: calc(100vh - 48px);
      padding-top: .5rem;
      overflow-x: hidden;
      overflow-y: auto;
      /* Scrollable contents if viewport is shorter than content. */
    }

    .sidebar .nav-link {
      font-weight: 500;
      color: #333;
    }

    .sidebar .nav-link .feather {
      margin-right: 4px;
      color: #727272;
    }

    .sidebar .nav-link.active {
      color: #007bff;
    }

    .sidebar .nav-link:hover .feather,
    .sidebar .nav-link.active .feather {
      color: inherit;
    }

    .sidebar-heading {
      font-size: .75rem;
      text-transform: uppercase;
    }

    /*Navbar*/
    .navbar-brand {
      padding-top: .75rem;
      padding-bottom: .75rem;
      font-size: 1rem;
      background-color: rgba(0, 0, 0, .25);
      box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
    }

    .navbar .navbar-toggler {
      top: .25rem;
      right: 1rem;
    }

    .navbar .form-control {
      padding: .75rem 1rem;
      border-width: 0;
      border-radius: 0;
    }

    .form-control-dark {
      color: #fff;
      background-color: rgba(255, 255, 255, .1);
      border-color: rgba(255, 255, 255, .1);
    }

    .form-control-dark:focus {
      border-color: transparent;
      box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
    }
    #table{
       overflow-x: scroll   !important;
    }
	.sidebar li .submenu{ 
		list-style: none; 
		margin: 0; 
		padding: 0; 
		padding-left: 1rem; 
		padding-right: 1rem;
	}
  </style>
</head>

<body>

  <nav class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">SGOI</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
      data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
     <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="index.php">Sign out</a>
      </li>
    </ul>
  </nav>
  <?php
	require_once("connection.php");
?> 
  <div class="container-fluid">
    <div class="row">
	
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="dashboard.php">
                <i class="fa fa-dashboard"></i>
                Dashboard
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link " aria-current="page" href="regindex.php">
              <i class="fa fa-user"></i> Student Master <i class="fa fa-angle-down"></i>
              </a>
              <ul class="submenu collapse">
                <li><a class="nav-link" href="regindex.php"><i class="fa fa-list"></i> Student Addmission</a></li>
                <li><a class="nav-link" href="merit_getdata.php"><i class="fa fa-list"></i> Merit List</a> </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="attendindex.php">
              <i class="fa fa-users"></i> Student Attendance <i class="fa fa-angle-down"></i>
              </a>
              <ul class="submenu collapse">
                <li><a class="nav-link" href="attendindex.php"><i class="fa fa-list"></i> Student Attendance</a></li>
                <li><a class="nav-link" href="attendattreportmain.php"><i class="fa fa-list"></i> Attendance Report</a></li>
               </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="libraryindex.php">
              <i class="fa fa-book"></i> Library Master<i class="fa fa-angle-down"></i>
              </a>
              <ul class="submenu collapse">
                <li><a class="nav-link" href="libraryindex.php"><i class="fa fa-list"></i> Book Master</a></li>
                <li><a class="nav-link" href="libraryindex1.php"><i class="fa fa-list"></i> Book Issue & Deposit</a></li>
                <li><a class="nav-link" href="bookcheckstock.php"><i class="fa fa-list"></i> Book Check Stock</a></li>
               </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="studentindex.php">
              <i class="fa fa-book"></i> Practical Submission & Assignment Master<i class="fa fa-angle-down"></i>
              </a>
              <ul class="submenu collapse">
                <li><a class="nav-link" href="studentindex.php"><i class="fa fa-list"></i> Practical Submission & Assignment Master</a></li>
                </ul>
            </li>
             <li class="nav-item">
              <a class="nav-link " aria-current="page" href="indexdoc.php">
              <i class="fa fa-file"></i>
              Official doc - Bonafide, LC Master
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="indexmat.php">
              <i class="fa fa-file"></i>
              E-Material Master
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="fees.php">
              <i class="fa fa-book"></i> Online Fees Master<i class="fa fa-angle-down"></i>
              </a>
              <ul class="submenu collapse">
                <li><a class="nav-link" href="fees.php"><i class="fa fa-list"></i> Online Fees Master</a></li>
                <li><a class="nav-link" href="feeschart.php"><i class="fa fa-list"></i> Fee Chart Create</a></li>
                </ul>
            </li>
             <li class="nav-item">
              <a class="nav-link " aria-current="page" href="noticeindex.php">
              <i class="fa fa-pencil"></i>
              Online Noticeboard Master
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link " aria-current="page" href="timetableindex.php">
              <i class="fa fa-file"></i>
              Time Table Master
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="leavemngsystem.php">
              <i class="fa fa-clock-o"></i>
              Leave Master
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="index.php">
              <i class="fa fa-sign-out"></i>
              Logout
              </a>
            </li>
             </ul>
        </div>
      </nav>
      
