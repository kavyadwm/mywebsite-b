<header class="sticky-header ">
    <nav class="navbar navbar-expand-lg navbar-dark px-0 pt-3 header-navbar ">
        <div class="container">
            <a href="index.html" class="navbar-brand ms-lg-0">
                <!-- <h2 class="mb-0 text-primary text-uppercase"><i class="fa-regular fa-face-smile me-1"></i>Poseify</h2> -->
                <img src="<?php echo $DOC_ROOT; ?>assets/img/kalippu-logo.svg" class="header-logo">
            </a>



            <div class="collapse navbar-collapse menu-div" id="navbarCollapse">
                <div class="navbar-nav  p-4 p-lg-0">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu m-0">
                            <a href="#" class="dropdown-item">Hair cuts & styling</a>
                            <a href="#" class="dropdown-item">Hair spa</a>
                            <a href="#" class="dropdown-item">Hair Treatment</a>
                            <a href="#" class="dropdown-item">Hair Colouring</a>
                            <a href="#" class="dropdown-item">Facial</a>
                            <a href="#" class="dropdown-item">Face Cleanup</a>
                            <a href="#" class="dropdown-item">Shaving & Beard Care</a>
                        </div>
                    </div>
                    <a href="contact" class="nav-item nav-link">Contact</a>
                </div>
                <!-- <div class="d-none d-lg-flex">
                    <a class="btn btn-outline-primary border-2" href="#">Contact</a>
                </div> -->
            </div>

            <img src="<?php echo $DOC_ROOT; ?>assets/img/icons/menu.svg" class="menu-icon d-lg-none">
        </div>
    </nav>



    <nav class="mobile-menu">
        <div class="hamburger-menu">
            <img src="<?php echo $DOC_ROOT; ?>assets/img/kalippu-logo.svg" class="header-logo">
            <!-- <div class="bar"></div> -->
            <i class="fa-solid fa-xmark close-btn"></i>
        </div>
        <ul class="main-ul px-0">
            <li><a href="#">Home</a></li>
            <li><a>About</a></li>
            <li class="has-children position-relative ">
                <a class="li-div d-flex"><span>Services</span> <span class="icon-arrow fa-solid fa-angle-down"></span></a>
                <ul class="children px-0">
                    <li><a href="#">Hair cuts & styling</a></li>
                    <li><a href="#">Hair spa</a></li>
                    <li><a href="#">Hair Treatment</a></li>
                    <li><a href="#">Hair Colouring</a></li>
                    <li><a href="#">Facial</a></li>
                    <li><a href="#">Face Cleanup</a></li>
                    <li><a href="#">Shaving & Beard Care</a></li>
                </ul>
            </li>
            <li><a>Contact</a></li>
        </ul>
    </nav>

    <div class="offcanvas-backdrop fade"></div>
</header>


<script>
    (function() {
        $('.menu-icon').on('click', function() {
            $('.offcanvas-backdrop').toggleClass('show');
            $('.mobile-menu').toggleClass('active');
            return false;
        })
        $('.offcanvas-backdrop, .close-btn').on('click', function() {
            $('.offcanvas-backdrop').removeClass('show');
            $('.mobile-menu').removeClass('active');
            return false;
        })
        $('.has-children').on('click', function() {
            $(this).children('ul').slideToggle('slow', 'swing');
            $('.icon-arrow').toggleClass('open');
        });
    })();
</script>


<style>
    .menu-icon {
        width: 37px;
        filter: brightness(0) invert(1);
    }

    .mobile-menu {

        top: 0;
        max-width: 300px;
        left: -100%;
        width: 100%;
        background: var(--bs-bgc-dark);
        color: white !important;
        height: 100%;
        position: fixed;
        z-index: 9997;
        overflow-y: auto;
        -webkit-transform: translate3d(0, 0, 205px);
        -moz-transform: translate3d(0, 0, 205px);
        transform: translate3d(0, 0, 205px);
        -webkit-transition: all 500ms ease-in-out;
        -moz-transition: all 500ms ease-in-out;
        transition: all 500ms ease-in-out;
    }


    .mobile-menu .main-ul li {
        list-style: none;
    }

    .mobile-menu .main-ul li a {
        color: white;
        text-decoration: none;
        display: inline-block;
        padding: .7rem 2rem;
        display: block;
        position: relative;
    }

    .mobile-menu .main-ul li a:after {
        content: '';
        position: absolute;
        bottom: 0px;
        right: 0px;
        width: 0;
        height: 1px;
        background: var(--bs-mmenu-grey);
        transition: .8s;
        opacity: 0
    }

    .mobile-menu .main-ul li a:hover::after {
        width: 100%;
        opacity: 1
    }

    .mobile-menu .header-logo {
        height: 60px;
    }

    .mobile-menu.active {
        left: 0;
    }



    .offcanvas-backdrop {
        position: fixed;
        top: 0;
        left: 0;

        width: 100vw;
        height: 100vh;
        background-color: rgba(30, 34, 40, 0.7);
    }

    .offcanvas-backdrop.fade {
        opacity: 0;
        z-index: -10;
        visibility: hidden;
    }

    .offcanvas-backdrop.show {
        opacity: 1;
        z-index: 1040;
        visibility: visible;
    }

    .fade {
        transition: opacity 0.15s linear;
    }

    .hamburger-menu {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 2rem;

    }

    .close-btn {
        width: 1.8rem !important;
        height: 1.8rem;
        border-radius: 100px;
        background: rgba(255, 255, 255, 0.1);
        display: flex !important;
        align-items: center;
        justify-content: center;
        font-size: .75rem;
        cursor: pointer;
        transition: 0.6s;
        -webkit-transition: 0.6s;
        -moz-transition: 0.6s;
    }

    .close-btn:hover {
        background: rgba(255, 255, 255, 0.2);
    }


    /*---------------------
Mobiles Menu - Dropdown Submenu
----------------------*/
    .li-div {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }


    .has-children:hover {
        cursor: hand;
    }

    .children {
        display: none;
    }

    .children li a {
        padding: .7rem 3rem !important
    }

    .mobile-menu .children li:first-child {
        margin-top: 0px;
    }

    .icon-arrow {
        display: block;
        font-size: 0.7em;
        color: white;
        top: 5px;
        right: 10px;
        transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        transition: 0.6s;
        -webkit-transition: 0.6s;
        -moz-transition: 0.6s;
    }



    .icon-arrow.open {
        transform: rotate(-180deg);
        -webkit-transform: rotate(-180deg);
        -moz-transform: rotate(-180deg);
        transition: 0.6s;
        -webkit-transition: 0.6s;
        -moz-transition: 0.6s;
    }
</style>

/*github.com/mciastek/sal*/
/*link for sal.js animation*/