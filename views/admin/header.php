<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - <?= $title ?? ''?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container w-90">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= ROOT_URL ?>">Trang bán hàng</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= ADMIN_URL?>">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= ADMIN_URL . '?ctl=listdm'?>">Danh Mục</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= ADMIN_URL . '?ctl=listsp'?>">Sản Phẩm</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= ADMIN_URL . '?ctl=listuser'?>">Tài Khoản</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= ADMIN_URL . '?ctl=list-order'?>">Đơn hàng</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sản phẩm
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
