<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?= $title; ?></title>

  <link rel="icon" href="<?= base_url(); ?>assets/favicon/apple-icon-57x57.png" type="image/x-icon" />

  <!-- Template CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/summernote-bs4.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/components.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/fontawesome/css/all.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/custom.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/myStyle.css">

  <!-- Maps -->
  <?= $map['js']; ?>
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <!-- <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li> -->
          </ul>
          <!-- <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            
          </div> -->
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link  nav-link-user">
            <img alt="image" src="<?= base_url(); ?>/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, Admin</div> <i class="fas fa-angle-down text-10"></i> </a>
            <div class="dropdown-menu dropdown-menu-right">              
              <!-- <div class="dropdown-divider"></div> -->
              <a href="<?= base_url(); ?>auth/logout" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?= base_url(); ?>dashboard/">Wisata Tanggamus</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">

            <li class="menu-header">Dashboard</li>
            <li class="nav-link active">
              <a href="<?= base_url(); ?>dashboard/">
                <i class="fas fa-fire"></i>
                <span>Dashboard</span>
              </a>
            </li>

            <li class="menu-header">Wisata</li>

            <li class="nav-link mt-n2">
              <a href="<?= base_url(); ?>wisata/">
                <i class="fas fa-mountain"></i>
                <span>Destinasi Wisata</span>
              </a>
            </li>

            <li class="nav-link mt-n3">
              <a href="<?= base_url(); ?>fasilitasumum/">
                <i class="fas fa-plus-square"></i>
                <span>Fasilitas Umum</span>
              </a>
            </li>

            <li class="menu-header mt-n2">Logout</li>

            <li class="nav-link mt-n3">
              <a href="<?= base_url(); ?>auth/logout">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
              </a>
            </li>

         <!--  <li class="nav-item dropdown">
           <a href="#" class="nav-link has-dropdown"><i class="fas fa-th mr-3"></i> <span>Wisata</span></a>
           <ul class="dropdown-menu">
             <li><a class="nav-link" href="<?= base_url(); ?>wisata/">
               <i class="fas fa-mountain mr-1 ml-n2"></i>
               Destinasi Wisata
             </a></li>
               <li><a class="nav-link" href="<?= base_url(); ?>wisata/jenisWisata">
                 <i class="fas fa-list mr-1 ml-n2"></i>
                 Jenis Wisata
               </a></li>
               <li><a class="nav-link" href="<?= base_url(); ?>fasilitasumum">
                 <i class="fas fa-plus-square mr-1 ml-n2"></i>
                 Fasilitas Umum
               </a></li>
             </ul>
           </li>
         
           <li class="menu-header">Users</li>
           
           <li class="nav-item dropdown">
             <a href="#" class="nav-link has-dropdown"><i class="fas fa-users mr-3"></i> <span>Data Users</span></a>
             <ul class="dropdown-menu">
               <li><a class="nav-link" href="<?= base_url(); ?>wisata/">
                 <i class="fas fa-user-o mr-1 ml-n2"></i>
                 Users
               </a></li>
               <li><a class="nav-link" href="<?= base_url(); ?>wisata/jenisWisata">
                 <i class="fas fa-user-secret mr-1 ml-n2"></i>
                 Admin
               </a></li>
               <li><a class="nav-link" href="<?= base_url(); ?>wisata/lain_lain">
                 <i class="fas fa-plus-square mr-1 ml-n2"></i>
                 Lain-lain
               </a></li>
             </ul>
           </li>
           
           <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li>
           </ul>
         
         -->
       </aside>
     </div>

     <div class="main-content">
      <section class="section">
        <div class="section-header mt-2" style="height: 50px">
          <h5 class="text-12 mt-2"><?= $title; ?></h5>
        </div>
        <div class="section-body">