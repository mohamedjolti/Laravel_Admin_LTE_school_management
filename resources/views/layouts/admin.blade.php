<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">

  
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('dist/img/user1-128x128.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('dist/img/user8-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('dist/img/user3-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">School Management</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMSEhISEhIQFRUVFRUSFxYVFRAVFRASFRUWFhcVFRUYHSggGBolGxUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OFRAQFSsdFR0rKy0rKystLS0rKystLS0tLS0rLS0rKy0tLS03Ny0tNzcrLSsrLSstKysrKysrKysrK//AABEIAOEA4QMBIgACEQEDEQH/xAAcAAAABwEBAAAAAAAAAAAAAAAAAQIDBAUHBgj/xAA9EAABAwIEBAMGBQMDAwUAAAABAAIDBBEFEiExBkFRcRNhkQciMkKB8FKhscHRFGJyFTThI7LxJDNTc4L/xAAaAQADAQEBAQAAAAAAAAAAAAAAAQIDBAUG/8QAIxEBAQACAgICAwADAAAAAAAAAAECEQMSITEEUSIyQRMzYf/aAAwDAQACEQMRAD8Ap2UwTwjCO6O6ZAEoFJSgghpV0loSgEwNFI8NFzoOqWAuY4prjmEbSbDfzQE+oxDM19rDpvqFzcspLX+Z+wn4J/cO+qiOlBNvzQZoVRaMps5pHp26FSMOmtl/tP6pJpQQA0p+DDXX0Rs+tCoryMwB62PdRosRcLHXayuqbhhz9+9+XZCs4SkbqAeRR2h9KgR1pectr+euilzuEWU3ud/JV/8ATOjJNiQmnStJ94HsmWnQYZjQIdm7drqTNUggZex0/Rc4yK1+WxspdLVm93cjcIJaPdoHHTlz3UV9TunjUiRug965PkdgNFFbDcEF1v57JEbfUpp05UWpdlJF9AmDOg00ypt0qh5yUhx6lASjOkeP0CiOnaE2+r6BATvEd1skuc0blV7p3HmmyUHpZeMzr+qCq/qggaailAIZgmn1bRzCRHg1KAVbJiw2Fz2RNdO/4WEeZ0QSydMBzUeXEGjmkR4O93xyW8m/yptPgsQ+XN5u1QNqqTEiQS0E2520C5SomzuzE7laHjAEcEh0Hu2Gw3WctYSR5piJM0p0DdlKwzBnyHQFScFw3M4C11pGGYcGtAA2WeeWm/Hhvy5vDeFDzV1Bwc69wulpog1W1O8LLs26qPDuF3je1lKrsDdY2HLbqujp5gFPZILKoi+GRVvDLnH4bdgufn4TcX2HW2oW9SNadwFDmw2N3ygKuydbeb63C5Y3OzC+pF+tlHcY7auIPMLesU4QikOa3K1uXdcZxF7OmkF0WhHLqn3K8f0zKCqIeCDoBp/KdjJcSblP1+EuicQ8bfQjsoOo0G5/RXLtncbDFS8ZjcqM6qA2CbqLEmybDUxot1Q4pskndKsgUH1JARkIBHZB9SUqyKyMIPRORBOZwgkbv2YdM/cho76qVDgTB8Zc79FbWS2xo0xRoaRjfhaApDWXSpXtjF3uA7qoqccJ0hb/APp37BaY8drLPkxx91bSOawXcQB5qrqcbvpC2/8AcdB9OqrXxl5zPcXHz2HYJ1jF0Y8Mntx8nyb/ABXY255YXPcSSRpyHYKnpIySLK44hb7je6GBUeY7LDn1K6vi7yx3XRcK0Wuo87rtoG2VNhNPlF1cNcuHK7epjPB/NZOxyFMsKkxsCmHUqGa6nR1BAUKCK50spzaaUfCWq4mltxBvNODEWBNXnG4jd99kUMsh3gaPRCalMqmuUersjlEg1yNPkLKHNUE6FpaUVUcjxVgTZdQBf9Vl2MYQ6ncQ4cibjmPJbjVtuuI49pAYg62xI9QjDLV0WWO4x0oWSnDVEulloR+/v6JKUURQBAff33RoD7+/oggC+/v0RogjQZFkE9458/UoIDYZ5GRi73Afqfoqmqxxx0ibYfid+wUDJc5nEuPV2qWGrrx4ZPbyOT5FvrwaLC43e4uPnt6J4MS2tRlq2jlttIslgaqzwbDRKSXXsLfXXVLxLC/Dc0N1zXt5a6C6Xab0d48uvZzWNR3DO6tuHqewCYxWmIyhw1DlbYM2zVxfJ/Z6nwZ+C3iVhSxEqsEtlHreJRDoBcriselK6tlOE61zPxD1CynEOLauQHKCB5BUMuKVTdSXhVME3Jtslgbh+ndWMGNMFgXj1Xn04/VG3vP0TkVfM9wLnu9Sq6JmVr0ayuDhcFGKg9VwnCte4xNubkCy6I19goXpeirA3Ki1VVfYBZpxJxgWPIabjbdUb+PpW6NzW+h/ZPrtFy01iZyoeI6YPgkHkT6Lj8P9oEmYeJ8OxFuXVdnJXRzQuewgtyk9tCpuOquZbjAZNz9f3SHJch1PcpC6WVEiKNEghff36orpVkaAJEjshZME+EUEvxygg2kBqJrU+WIZV6LwKbDU5DCXGw5/kjyqdhserj0B6fmEW6KTdWOGSiOFxuDlce+6LFa6E+EHvy3IItqb8uyr6MDKczjYn4RzVZiEIfMABoLWHdcfPbj5nt6vweOcl65epF1jtOCzMCDY30+/u6bwv4Umxbp8tk9h8funuVyXO5e3d/ixw/UKxxA0VDJAL3dqugqI1UVUbtcu/XopXDbntaPeytHna6rquqgdpmuVFxGje5rgdXXuNfyUPB8KlEzHO0DSDckGw8lckRlb/DklK35TdP0kJuArbE2se/MAO43PopFLBmLWhuumqi1cjruDMPzR3AUjithgiJ66BdXwph7YoWgb7lVXtEoM8QdyadfqjXhPb8tMWnja51yLlWWGYG6TZrR3RjD9XG9mgEi1rut5qijxydhbklmDr3OoLQOgFt/qnJadsjs5cBEY/wCoxtuoTbITTslyG7DG76GylwYzLla2oAcHtvmtYgnkVLp4WOYc9yyxzf421U+j9sXckqdjNO2OeVjL5WuIF97clBW8ZUQP3990LI/v79EEyJRlAj79UEAX3+v/AAlAovv9P4R2+/vugB4Q6hGms33coIDWHhIyp+yTlXpPApICnYay+Yaa6eexGnVRQ1TMMdZ1rgXFhpfXcW89Er6PH2h0zTnFhdCWIifUcr/VWFWHR3LNA43vzF/lUK93AnXkT3XL8jHtjv6el8DOYcvX7Q8VxFzW2aATsrPCHnLY78+6rmQDxPe2Gqkw1Qzut1uuGPW5FrK1MGnupDH3CdYEmcUtRhBOyRFgDr6uAHkF08TQVLZCEG5tuDNaP3Kdo4A1yuKxtgqhkmqRu84aqvlJU3HGhzHNOxFlz+E6WK6Gp99v0VfxnZ+W2bYrgDhd0fp1XNtw+MPBfCMwN+YufNawxl9EzLhrTu0H6BJTi6GkMzhcaD0VviNAGQOAHK3quhp6NrdgAqjiuuEEEkhscrSRfmeQ9bJexLphPEQ/9TPz/wCo/wBLn+VWp2eTMS47kknuSmTIF0T0xtGfv7+qP7+/RN+MEgykpl2P/f6JN0zc+aHhEoLsezjqPslI8UJIiKdZTJbLZq480FI/pSgjY21gBHlSyEdl6bxCEGkggjcJRQshKxdM17Dckai43163/ZQ3vZlLQ3f5idfRNEnblvbzRgKbhLNVc5csbLPcKo4Sb5tQFXVZEcmml1ZseRsqXHA4ua42FvzXBycNxv8Ax7XD8vHlx8/suqCe4VjEVzmDT5jZXrCuauiLKI2U2ORUzJipMEhSUXib/dKr8PpRbxXnsP3VhVNu0riMUxOa5jbpyudk1RoFFiseYDMLq9GKMDTqFjVBLI0++/MfIbKxlr5XWbGdSQNddEFpp1PICbjY6qYXKvwuldHEwPILra2215ITT2KSKkvcs19r9cRTtjHzvHoLn9gu8dNosn9o1T4kzWDXID6lPH2nL0zvwilinKs2weSeZSlbdmOlUKU9AnW0qtG0adFKEtjSqbThOCHyVsynCUIfJLY0ozCbqTHTEqxkh20Uulw97th6o2NKb+kKC6X/AEOTqEEth0pCBCVZEvXeGSAjIR2REIIkhKAREJbQmVAKHiUV26qdlTVUy7VlzfpWvxv9uKBg0YDj1sroPVBFLkkb6K58ReVX0MSWqTTvsoefS6rcQrnNHuqVL3EK9rW7ria+uuSQFINQHC73WHPzUSTE42/CB3KpWMtJgzaktNt9irHC2yi0gY6w52NrJmi4gc06G46GxCsH8TkEG9ugG3ohV43dYTjbZGWOhGmqXVOuVxP+pMkAc0hj9iNg7zsuiwpx8MXNyorLWkqaXK0noCfRZLWh0sj3WJu4+i0bHqm0ZaN3afTmucjjsrxZZ1zkOGvPy+qlMwZ3MgK9DUvKqQqI8FHNxUuPCIxyJU9oSwEBEbQRj5Qnm0rfwj0T4CUAkECsoGZScouNUdMNFYSsu13ZQqYIBy6CXkRoByyACNGCvYeESGoBOsYTsEPC6kBLtIOtplKAQc9g5k9tkX9V0aB3U3kiv8VpxsZRzQkNuQuexHi6ON2QOc517WZoL7WJV/iEbmOhFjlezMe9r2PqsObl/Gx1fH+P+UtUWJw/MNxr6KXDUZmtd1COuZp3VPRT5HOjPcLgvl66/bNoqqtgdKcuoHOyeZNcJ+B4spUoJcMaDa5t5lPxYI1/zNsplY26rnh7dWhPbfHORZR8Jsvq8230Ksv9CpmjmXbarnGYlMfdDT3urSgElwXWTp5ckWsXD8VgWt1Gu6sI6jKMqKCb3VT4hVXu0bn9FPtzZUdVU+I8nkNB/KINSIWWTwCthaAajDUsBKAQCQ1KDUoIwgAAlWQCNAGRoVBpwrKMKCBZ5CAeQQQQCrJRfbayLKbpqXcr1OR43EdkcbblRLqbBTvfsNE5/pBO7gOvlostt9IdJRukvYgW3JIC57jTEf6ceCxwMjh71vkb381d8R4mykZf3S4hzWgHfQe8fqspq6h0ji5xJJ1JU2tcMP6l8LYa6orIYxtmDz/i031W/wCKYYJYw0aObq09COSxDgXGRS1LXOAyuGQn8NzoVv1PKHNDgbgi47LPLy3l0z2sic0ljwQ4cuvmFz2Ix8xoR+a1vEcNZM2zxryI3C4LiLAZIgTbM3k4foQsLhp0Y5yuOdiVipVJit7aqnr4CDcaHmFFpnlrtSjqe7GiUzA4bgp19GFzWH4llAF1ZPxK43WfVpMljBRNJ3CtIqAAKlgrQLFSJcYsLjZGqOx7FKoRNKqqJhdaQg+9e3ZQJpn1UuVgJXYOwUspmvBvkOVw6A7H1VSM8qro0sBJYE4mzAJbUlLAQAASgjaEoBICASrIBLaEAcYUScWeVNYFGrRZwPkgBdBJzIIGink3SJBromaivjZ8b2D6i/oqup4sgY4WLnW6Df6lepyWPH4cb9Lxs0jW2BsL30tdRajEMrXOe42ALjr01XMV/GjnXEcbWjlfUgLnK3EpZNHPcQeV7D0CwdU46axTEXTPL3fQdAoJKU4IgEm8ALUfZrxePdpJna7RuPP+0rMWNul5LWIuCDft2SN6ba5B7A4WIBB5FZvwDxt4lqeodZ40Y8/OOh81o8b7qLA4nirghsl5INHfh69ll9fQOjcWyNLSF6KsqbHuG4aptnt97k4bhTppjn9sIaHD/hSRVabLoMc4QlpnfiZycP3HJVIoj0UW6bTHfoxDWu2VpSQSz+629uZ5DuU7heGNLtQu1wylAAACi5qmB7hvB2wR7DMdz+ytI2Olo8Qy/KCG/wCTRdJlJDbAanQDqTsuxwPCxFTiI6lwJd5l26XH5u08t1NMQwjFxJ7jtHj0crhcNxNRmkq54uTZHW/xvdp9Fb4HjocAyQ+Qd+xW+WH9jCZOiCdSGhOgLJY2pYCQ1LRoBZKCIBOBIDama5ujT52TzEmtHufVAQ7IJN0EBlOpO5+qd8JMG45p5k67WAeCmZtC3upgIKh1xs5p80gQBdFkTXjNF7lHFV3IAF76JGnU0PNOSRpyJ1xa1ks2TJFEVrEaEG4PQrU+BOLfFAgmdaQaNcdBIP5WalqNlwQRcEagjcHyRQ9ERuTllxXAnFHjgQykeKNj/wDIP5XdMCzoMyUoeC1wBB5FcljPBVrvhFxuW8/ou6iCsIoBZTcZV453G+GN02Hlp1BB7bLoaCFdninDzJfeFmv69e6qW4K9pAOUC+9+S57hXVOWWHeH8OzvErh7rPh83dV1ioH8S0VORC6oia4C1r/uFc01SyRodG9r2nm0ghbTHUc+WXa7eefbPTFmJSPto9rCD1IYAVxcE1l6E9qXC7KqHxMvvsO43ssBxXCn07rHUHYrfG+GV9ralxmZoGR9x0OtlYwcVPHxsae2i5KlqLHXZWVkXGUdq7Oh4jhk0JLD/dt6q4Y4OF2kEeSzMBTcNxF8DgWnTm3kfp1WeXH9Kmf20QBGFFw2tZMwOb9RzBUtqxsalMCOob7juyTdOt1BCQUlygnP6Yo0Bl7o006FSyE24LsYIoJ5Juo94WdceakFEWgoCC3DydQQVLoaItOY78kYOVS81rJaM4Ag4XQaUsBBEhOWRAIwmR2mlcxwe0kEG4I5LZ+BuI21bMj7CVvxD8Q/EFigU/Ca98EjJI3Wc03H8HySs2b0XHErCIaKg4P4hjrYg4WD26Pbzaf4Vhi+LNgadC5/Jo37nyWdOHsWxSKmjMsz2saOZO/kOpWScVe0OWpDo6ceHEfmPxvHl0Ub2gxTVrfFLnXZqGbNA7dVncFW5mh0++avHGC1PbRukJc+513O6tsMxeWgIfTyvFjqwkljhzBHJV9LiAdoVIlp8wOxVpb3wtjkdfTNlAHvCz2/hcNwuf4x4NjkYXNYCOY8uo81yPscxN0Zmafga4Zv7Q7Y+oK2jRw6grK+Kr28pcS4G6mk2JYdWu/Y+abopbiy2b2g8PDK45bsPvduqyLFcM8BwLdWO1b5eS0l2mk3180ZSHm4DglRPumSdhWIOgeHDb5h1C0CnmD2hzdiLrNHLoeEsRyu8Jx0dq3v0WXJjubaYZOtT0aaSmOXO2LyBGgggMfKadunimX6LsYG3hIASiUCghOiDhY/+FE8R8RsdWqfGE6WBwsQCEGbpZwfht+6lNN1Vz0RZ78ZPmE9RVwdodCkSwQQukkJkWClxpLUYKYXPD+NS0kokiNjsRyc3oVtWBeHVxtnjcHE/Frq08wVgLXLpuCeJn0UwOpjdo9t+XUeamw9tslwOF7bPYO43WY8dezN2s1MMw3Lea1uiq2SsbJG4Oa4XBCfss+1itPItXSvjcWkFpG4OllZUbiYcxdoCMzRo7Le11rftkwmBtN42RokLg0EaHmshw05mlp+YFnqNPzWsu02NE9ldVBFUyQZRlqWjK473bchv5n0WwUdPkGW9xy8gvLuE17o8kgPvRPDvQ6r1Dh1SJYo5B87Gu9QozioZxmjEsT2n8JWIY5hueFzLasJt9Fvkg0PZZzjmE5S420cT6pY0soxWnNiWlAaFXeK4QQ95G7Tfu3cqlm3utUpG6Jry0hw3Bum4Df6JxyQaJhtUJYmPHMa+RG6mMC47gyts90RPxe8O43XZNXLnNVvjdw5ZBJujUqZF1TUmyCC62CKUpuyNBAKjT7EEEEWqF3/ALn1QQQHQRfCEtiCCZDRtQQTI4N05FyQQQG4+yv/AGTf8iuzQQWOXtrGbe23/bQ/5n9FjVJy7o0Frh6TTMG0/c/9y9N8If7Km/8AqajQU8gxWxXM8QfCUEFGIyZbjnxH/F36Lhj8IRILaJLpt069BBIJvDf+5j7n9CtEYggufk9tsPR1BBBZrf/Z" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Mohamed JOLTI</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                School
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="teachers" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p><S>Teachers</S></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Groupes </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Students </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Classes </p>
                </a>
              </li>
            </ul>
          </li>
      
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  
        <!-- Small boxes (Stat box) -->
              @yield("content")
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="https://github.com/mohamedjolti?tab=repositories">Dashbord School Management</a>.</strong>
    By Mohamed JOLTI

    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
</body>
</html>
