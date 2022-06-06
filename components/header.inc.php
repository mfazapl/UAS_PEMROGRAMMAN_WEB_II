<head>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">
  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/dist/css/style.css">

    <style>
      .nav-link {
        text-decoration: none;
        color: white;
      }

      .section {
        background-color:#FFE5D2;
      }
      
      .navbar-dark {
        background: #f78952;
      }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>
</head>
  <body>
    
    <nav class="navbar  navbar-expand-lg navbar-dark static-top">
        <div class="container">
            <a href="Home.php" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" 
                width="20" 
                height="20" 
                fill="none" 
                stroke="currentColor" 
                stroke-linecap="round" 
                stroke-linejoin="round" 
                stroke-width="2" 
                aria-hidden="true" 
                class="me-2" 
                viewBox="0 0 24 24">
                <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
                <strong>myBakery</strong>
            </a>
            <button class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navbarHeader" 
            aria-controls="navbarHeader" 
            aria-expanded="false" 
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar-dark " id="navbarHeader">
            <ul class="navbar-nav ms-auto text-center">
                <li>
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="CakePage.php">Cake</a>
                </li>
                <li>
                    <a class="nav-link" href="#">BreadPage.php</a>
                </li>
                <li>
                    <a class="nav-link" href="#">Tab 3</a>
                </li>
                <li>
                    <a class="nav-link" href="Logout.php">Logout</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Contact Us
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Instagram</a></li>
                        <li><a class="dropdown-item" href="#">WhatsApp</a></li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
