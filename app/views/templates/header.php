<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman <?= $data["judul"] ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/magrid.css">
</head>
<body>
<!-- Navbar -->
<nav class="nav">
    <div class="container flex align-center justify-between">
    <div class="nav-left">
      <div class="logo pt-1 pb-1">
        <img src="<?= BASEURL?>/assets/logo_me.png" alt="logo" width="150">
      </div>
    </div>
    <div class="nav-right">
      <a href="/lks_2019/public/">Home</a>
      <a href="/lks_2019/public/about" class="mr-3 ml-3">About</a>
      <a class="main-btn"  rel="modal:open" href="#ex1">Login</a>
          <!-- Modal HTML embedded directly into document -->
        <div id="ex1" class="modal">
            <input type="text" placeholder="Username">
            <input type="password" placeholder="Password">
            <button onclick="window.location='http://localhost/lks_2019/public/admin'">Login</button>
        </div>
    </div>
    </div>
  </nav>

<style scoped>
nav{
    position: sticky;
    top: 0;
    -webkit-transition: background-color 0.5s ease; /* For Safari 3.1 to 6.0 */
    transition: background-color 0.5s ease;
    background-color: white;
    z-index:999;
}

nav a{
  color: black;
}

nav a:not(.main-btn):hover{
  color: #F47C48;
}

nav .is-active{
  color: #F47C48 !important;
}

.changeNavbar{
  background-color: #101E34;
  -webkit-transition: background-color 0.5s ease; /* For Safari 3.1 to 6.0 */
  transition: background-color 0.5s ease;
}

.changeNavbar a{
  color: white;
}

</style>