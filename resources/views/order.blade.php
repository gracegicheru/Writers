<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')
</head>

<body class="fix-header card-no-border">

<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">
                    <!-- Logo icon --><b>
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                        <!-- Light Logo icon -->
                        <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                        <!-- Light Logo text -->
                         <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav mr-auto mt-md-0">
                    <!-- This is  -->
                    <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                    <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                        </a>
                        <div class="dropdown-menu mailbox animated slideInUp">
                            <ul>
                                <li>
                                    <div class="drop-title">Notifications</div>
                                </li>
                                <li>
                                    <div class="message-center">
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Event today</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-email"></i>
                            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                        </a>
                        <div class="dropdown-menu mailbox animated slideInUp" aria-labelledby="2">
                            <ul>
                                <li>
                                    <div class="drop-title">You have 4 new messages</div>
                                </li>
                                <li>
                                    <div class="message-center">
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="../assets/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="../assets/images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="../assets/images/users/3.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="../assets/images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Messages -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-view-grid"></i></a>
                        <div class="dropdown-menu animated slideInUp">
                            <ul class="mega-dropdown-menu row">
                                <li class="col-lg-3 col-xlg-2 m-b-30">
                                    <h4 class="m-b-20">CAROUSEL</h4>
                                    <!-- CAROUSEL -->
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <div class="container"> <img class="d-block img-fluid" src="../assets/images/big/img1.jpg" alt="First slide"></div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="container"><img class="d-block img-fluid" src="../assets/images/big/img2.jpg" alt="Second slide"></div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="container"><img class="d-block img-fluid" src="../assets/images/big/img3.jpg" alt="Third slide"></div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                    </div>
                                    <!-- End CAROUSEL -->
                                </li>
                                <li class="col-lg-3 m-b-30">
                                    <h4 class="m-b-20">ACCORDION</h4>
                                    <!-- Accordian -->
                                    <div id="accordion" class="nav-accordion" role="tablist" aria-multiselectable="true">
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingOne">
                                                <h5 class="mb-0">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Collapsible Group Item #1
                                                    </a>
                                                </h5> </div>
                                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high. </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Collapsible Group Item #2
                                                    </a>
                                                </h5> </div>
                                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingThree">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Collapsible Group Item #3
                                                    </a>
                                                </h5> </div>
                                            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                                <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-3  m-b-30">
                                    <h4 class="m-b-20">CONTACT US</h4>
                                    <!-- Contact -->
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Enter email"> </div>
                                        <div class="form-group">
                                            <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-info">Submit</button>
                                    </form>
                                </li>
                                <li class="col-lg-3 col-xlg-4 m-b-30">
                                    <h4 class="m-b-20">List style</h4>
                                    <!-- List style -->
                                    <ul class="list-style-none">
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> You can give link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Give link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another Give link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Forth link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another fifth link</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Messages -->
                    <!-- ============================================================== -->
                </ul>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <ul class="navbar-nav my-lg-0">
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li> Account</li>
                    <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                        <form class="app-search">
                            <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                    </li>
                    <!-- ============================================================== -->
                    <!-- Language -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="flag-icon flag-icon-us"></i></a>
                        <div class="dropdown-menu dropdown-menu-right scale-up"> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-in"></i> India</a> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> China</a> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> Dutch</a> </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- Profile -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user" class="profile-pic" /></a>
                        <div class="dropdown-menu dropdown-menu-right scale-up">
                            <ul class="dropdown-user">
                                <li>
                                    <div class="dw-user-box">
                                        <div class="u-img"><img src="../assets/images/users/1.jpg" alt="user"></div>
                                        <div class="u-text">
                                            <h4>Steave Jobs</h4>
                                            <p class="text-muted">varun@gmail.com</p><a href="pages-profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                    </div>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                                <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                                <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- User profile -->
            <div class="user-profile">
                <!-- User profile image -->
                <div class="profile-img"> <img src="../assets/images/users/profile.png" alt="user" />
                    <!-- this is blinking heartbit-->
                    <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
                </div>
                <!-- User profile text-->
                <div class="profile-text">
                    <h5>Markarn Doe</h5>
                    <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
                    <a href="app-email.html" class="" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                    <a href="pages-login.html" class="" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
                    <div class="dropdown-menu animated flipInY">
                        <!-- text-->
                        <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                        <!-- text-->
                        <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                        <!-- text-->
                        <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                        <!-- text-->
                        <div class="dropdown-divider"></div>
                        <!-- text-->
                        <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                        <!-- text-->
                        <div class="dropdown-divider"></div>
                        <!-- text-->
                        <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                        <!-- text-->
                    </div>
                </div>
            </div>
            <!-- End User profile text-->
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="nav-devider"></li>
                    <li class="nav-small-cap">PERSONAL</li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard <span class="label label-rouded label-themecolor pull-right">4</span></span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="index.html">Minimal </a></li>
                            <li><a href="index2.html">Analytical</a></li>
                            <li><a href="index3.html">Demographical</a></li>
                            <li><a href="index4.html">Modern</a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Apps</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="app-calendar.html">Calendar</a></li>
                            <li><a href="app-chat.html">Chat app</a></li>
                            <li><a href="app-ticket.html">Support Ticket</a></li>
                            <li><a href="app-contact.html">Contact / Employee</a></li>
                            <li><a href="app-contact2.html">Contact Grid</a></li>
                            <li><a href="app-contact-detail.html">Contact Detail</a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-email"></i><span class="hide-menu">Inbox</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="app-email.html">Mailbox</a></li>
                            <li><a href="app-email-detail.html">Mailbox Detail</a></li>
                            <li><a href="app-compose.html">Compose Mail</a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Ui Elements <span class="label label-rouded label-danger pull-right">25</span></span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="ui-cards.html">Cards</a></li>
                            <li><a href="ui-user-card.html">User Cards</a></li>
                            <li><a href="ui-buttons.html">Buttons</a></li>
                            <li><a href="ui-modals.html">Modals</a></li>
                            <li><a href="ui-tab.html">Tab</a></li>
                            <li><a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a></li>
                            <li><a href="ui-tooltip-stylish.html">Tooltip stylish</a></li>
                            <li><a href="ui-sweetalert.html">Sweet Alert</a></li>
                            <li><a href="ui-notification.html">Notification</a></li>
                            <li><a href="ui-progressbar.html">Progressbar</a></li>
                            <li><a href="ui-nestable.html">Nestable</a></li>
                            <li><a href="ui-range-slider.html">Range slider</a></li>
                            <li><a href="ui-timeline.html">Timeline</a></li>
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-horizontal-timeline.html">Horizontal Timeline</a></li>
                            <li><a href="ui-session-timeout.html">Session Timeout</a></li>
                            <li><a href="ui-session-ideal-timeout.html">Session Ideal Timeout</a></li>
                            <li><a href="ui-bootstrap.html">Bootstrap Ui</a></li>
                            <li><a href="ui-breadcrumb.html">Breadcrumb</a></li>
                            <li><a href="ui-bootstrap-switch.html">Bootstrap Switch</a></li>
                            <li><a href="ui-list-media.html">List Media</a></li>
                            <li><a href="ui-ribbons.html">Ribbons</a></li>
                            <li><a href="ui-grid.html">Grid</a></li>
                            <li><a href="ui-carousel.html">Carousel</a></li>
                            <li><a href="ui-date-paginator.html">Date-paginator</a></li>
                            <li><a href="ui-dragable-portlet.html">Dragable Portlet</a></li>
                        </ul>
                    </li>
                    <li class="nav-small-cap">FORMS, TABLE &amp; WIDGETS</li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Forms</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="form-basic.html">Basic Forms</a></li>
                            <li><a href="form-layout.html">Form Layouts</a></li>
                            <li><a href="form-addons.html">Form Addons</a></li>
                            <li><a href="form-material.html">Form Material</a></li>
                            <li><a href="form-float-input.html">Floating Lable</a></li>
                            <li><a href="form-pickers.html">Form Pickers</a></li>
                            <li><a href="form-upload.html">File Upload</a></li>
                            <li><a href="form-mask.html">Form Mask</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                            <li><a href="form-dropzone.html">File Dropzone</a></li>
                            <li><a href="form-icheck.html">Icheck control</a></li>
                            <li><a href="form-img-cropper.html">Image Cropper</a></li>
                            <li><a href="form-bootstrapwysihtml5.html">HTML5 Editor</a></li>
                            <li><a href="form-typehead.html">Form Typehead</a></li>
                            <li><a href="form-wizard.html">Form Wizard</a></li>
                            <li><a href="form-xeditable.html">Xeditable Editor</a></li>
                            <li><a href="form-summernote.html">Summernote Editor</a></li>
                            <li><a href="form-tinymce.html">Tinymce Editor</a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Tables</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="table-basic.html">Basic Tables</a></li>
                            <li><a href="table-layout.html">Table Layouts</a></li>
                            <li><a href="table-data-table.html">Data Tables</a></li>
                            <li><a href="table-footable.html">Footable</a></li>
                            <li><a href="table-jsgrid.html">Js Grid Table</a></li>
                            <li><a href="table-responsive.html">Responsive Table</a></li>
                            <li><a href="table-bootstrap.html">Bootstrap Tables</a></li>
                            <li><a href="table-editable-table.html">Editable Table</a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-widgets"></i><span class="hide-menu">Widgets</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="widget-apps.html">Data Widgets</a></li>
                            <li><a href="widget-data.html">Statestic Widgets</a></li>
                        </ul>
                    </li>
                    <li class="nav-small-cap">EXTRA COMPONENTS</li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book-multiple"></i><span class="hide-menu">Page Layout</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="layout-single-column.html">1 Column</a></li>
                            <li><a href="layout-fix-header.html">Fix header</a></li>
                            <li><a href="layout-fix-sidebar.html">Fix sidebar</a></li>
                            <li><a href="layout-fix-header-sidebar.html">Fixe header &amp; Sidebar</a></li>
                            <li><a href="layout-boxed.html">Boxed Layout</a></li>
                            <li><a href="layout-logo-center.html">Logo in Center</a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Sample Pages <span class="label label-rouded label-success pull-right">25</span></span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="starter-kit.html">Starter Kit</a></li>
                            <li><a href="pages-blank.html">Blank page</a></li>
                            <li><a href="#" class="has-arrow">Authentication <span class="label label-rounded label-success">6</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="pages-login.html">Login 1</a></li>
                                    <li><a href="pages-login-2.html">Login 2</a></li>
                                    <li><a href="pages-register.html">Register</a></li>
                                    <li><a href="pages-register2.html">Register 2</a></li>
                                    <li><a href="pages-lockscreen.html">Lockscreen</a></li>
                                    <li><a href="pages-recover-password.html">Recover password</a></li>
                                </ul>
                            </li>
                            <li><a href="pages-profile.html">Profile page</a></li>
                            <li><a href="pages-animation.html">Animation</a></li>
                            <li><a href="pages-fix-innersidebar.html">Sticky Left sidebar</a></li>
                            <li><a href="pages-fix-inner-right-sidebar.html">Sticky Right sidebar</a></li>
                            <li><a href="pages-invoice.html">Invoice</a></li>
                            <li><a href="pages-treeview.html">Treeview</a></li>
                            <li><a href="pages-utility-classes.html">Helper Classes</a></li>
                            <li><a href="pages-search-result.html">Search result</a></li>
                            <li><a href="pages-scroll.html">Scrollbar</a></li>
                            <li><a href="pages-pricing.html">Pricing</a></li>
                            <li><a href="pages-lightbox-popup.html">Lighbox popup</a></li>
                            <li><a href="pages-gallery.html">Gallery</a></li>
                            <li><a href="pages-faq.html">Faqs</a></li>
                            <li><a href="#" class="has-arrow">Error Pages</a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="pages-error-400.html">400</a></li>
                                    <li><a href="pages-error-403.html">403</a></li>
                                    <li><a href="pages-error-404.html">404</a></li>
                                    <li><a href="pages-error-500.html">500</a></li>
                                    <li><a href="pages-error-503.html">503</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file-chart"></i><span class="hide-menu">Charts</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="chart-morris.html">Morris Chart</a></li>
                            <li><a href="chart-chartist.html">Chartis Chart</a></li>
                            <li><a href="chart-echart.html">Echarts</a></li>
                            <li><a href="chart-flot.html">Flot Chart</a></li>
                            <li><a href="chart-knob.html">Knob Chart</a></li>
                            <li><a href="chart-chart-js.html">Chartjs</a></li>
                            <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                            <li><a href="chart-extra-chart.html">Extra chart</a></li>
                            <li><a href="chart-peity.html">Peity Charts</a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-brush"></i><span class="hide-menu">Icons</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="icon-material.html">Material Icons</a></li>
                            <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                            <li><a href="icon-themify.html">Themify Icons</a></li>
                            <li><a href="icon-linea.html">Linea Icons</a></li>
                            <li><a href="icon-weather.html">Weather Icons</a></li>
                            <li><a href="icon-simple-lineicon.html">Simple Lineicons</a></li>
                            <li><a href="icon-flag.html">Flag Icons</a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-map-marker"></i><span class="hide-menu">Maps</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="map-google.html">Google Maps</a></li>
                            <li><a href="map-vector.html">Vector Maps</a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-arrange-send-backward"></i><span class="hide-menu">Multi level dd</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="#">item 1.1</a></li>
                            <li><a href="#">item 1.2</a></li>
                            <li> <a class="has-arrow" href="#" aria-expanded="false">Menu 1.3</a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="#">item 1.3.1</a></li>
                                    <li><a href="#">item 1.3.2</a></li>
                                    <li><a href="#">item 1.3.3</a></li>
                                    <li><a href="#">item 1.3.4</a></li>
                                </ul>
                            </li>
                            <li><a href="#">item 1.4</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-10 align-self-center">

                    <div class="wizard-form">
                        <form class="form-register" id="form-register" action="#" method="post">
                            <div id="form-total">
                                <!-- SECTION 1 -->


                            </div>
                        </form>
                    </div>

            </div>
            <div class="">
                <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <!-- Row -->

            <div class="row">
                <div class="col-8">
                    <div class="card">

                        <div class="card-body wizard-content">
                            <form action="upload" method="post" id="form" class="tab-wizard wizard-circle" enctype="multipart/form-data">
                                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                <input type="hidden" name="orderNo" id="orderNo" value="{{ $orderNo }}">
                                <input type="hidden" name="step" id="step" value="1">
                                <h6> Content Type</h6>
                                <section>
                                <div class="row" id="sectionOne">
                                        <div class="col-md-12">
                                            <div class="form-group hide" id="notification">
                                                <div class="col-xs-12">
                                                    <div class="alert alert-info alert-rounded" id="error" style="font-size: 18px;"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group row">
                                                    <label class="control-label text-left col-md-3">Document type</label>
                                                    <div class="col-md-12">

                                                        <select id="doc_name" name="doc_name" class="form-control" required>
                                                            <option value="" >Please choose at least one document type</option>
                                                            @foreach($doctypes as $doctype)
                                                                <option value="{{ $doctype->id  }}">{{ $doctype->doc_name  }} </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label text-left col-md-3">Subject Area</label>
                                                    <div class="col-md-12">
                                                        <select id="subject_area" name="subject_area" class="form-control" required>
                                                            <option value="">Please Select at least one subject area</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="control-label text-left col-md-3">Subject </label>
                                                    <div class="col-md-12">
                                                        <select id="subject" name="subject" class="form-control" required>

                                                            <option value="">Please Select at least one subject</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label text-left col-md-5">Educational Level</label>
                                                    <div class="col-md-12">
                                                        <select id="education" name="education" class="form-control" required>

                                                            <option value="">Default</option>

                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="control-label text-left col-md-3">Length</label>
                                                    <div class="col-md-12">
                                                        <select id="length" name="length" class="form-control" required>


                                                            @for ($i = 1; $i <=250; $i++)
                                                                <option value="{{ $i }}"  >{{ $i }}
                                                                    @if($i == 1)
                                                                        Page
                                                                    @else
                                                                        Pages
                                                                    @endif
                                                                   ({{ $i * 275 }} words)</option>
                                                            @endfor


                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="upgrade option">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 custom_h4_styles">
                                                            <h4> Spacing Option </h4>
                                                        </div>
                                                        <div class="col-lg-3 col-sm-3 col-md-3">
                                                                <div class="toggle" id="toggle">
                                                                    <input type="radio" name="spacing" value="1" id="sizeWeight" checked="checked" />
                                                                    <label for="sizeWeight" style="padding:20px;">Single</label>
                                                                    <input type="radio" name="spacing" value="2" id="sizeDimensions" />
                                                                    <label for="sizeDimensions" style="padding:20px;">Double</label>
                                                                </div>
                                                            </div>

                                                    </div>
                                                </div>
                                                <div class="upgrade option">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 custom_h4_styles">
                                                            <h4> Delivery Type</h4>
                                                        </div>
                                                        <div class="col-lg-8 col-sm-8 col-md-8">
                                                                <div class="toggle">
                                                                    <input type="radio" name="type" value=2 id="deliveryWeight" checked="checked" />
                                                                    <label for="deliveryWeight" style="padding:20px;">Standard(Days)</label>
                                                                    <input type="radio" name="type" value="delivery" id="sizeDelivery" />
                                                                    <label for="sizeDelivery" style="padding:20px;">Rush(Hours)</label>
                                                                </div>
                                                            </div>

                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label text-left col-md-3">Delivery Time</label>
                                                    <div class="col-md-12">
                                                        <select id="delivery" name="delivery" class="form-control" required>

                                                            <option value="">--Select--</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="upgrade option">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 custom_h4_styles">
                                                            <h4> Writers Level</h4>
                                                        </div>
                                                        <div class="col-lg-8 col-sm-8 col-md-8">
                                                            <div class="toggle">
                                                                <input type="radio" name="writer" value="Writer" id="sizeWriter" checked="checked" />
                                                                <label for="sizeWriter" style="padding:20px;">Standard</label>
                                                                <input type="radio" name="writer" value="Level" id="sizeLevel" />
                                                                <label for="sizeLevel" style="padding:20px;">Elite</label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>


                                            </div>

                                        </div>


                                </div>
                                </section>

                                <h6>Order Details</h6>
                                <section>
                                    <div class="row" id="sectionTwo">
                                        <div class="col-md-12">

                                            <div class="form-group">
                                                <h3> Title and Instructions</h3>
                                                <p> Please provide the details about the specifics of your order, including the instructions and the title of the work. If you're struggling to fill anything out, or need some help, don't hesitate to call us on +254712120 and we can guide you through the process.</p>

                                                <div class="form-group hide" id="title_error">
                                                    <div class="col-xs-12">
                                                        <div class="alert alert-info alert-rounded" id="titleError" style="font-size: 18px;"></div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="control-label text-left col-md-3"><span style="color:red;">*</span>Title</label>
                                                    <div class="col-md-12">
                                                        <textarea id="title" name="title" class="form-control" required></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group hide" id="title_instructions">
                                                    <div class="col-xs-12">
                                                        <div class="alert alert-info alert-rounded" id="titleInstructions" style="font-size: 18px;"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label text-left col-md-3"><span style="color:red;">*</span>Instructions</label>
                                                    <div class="col-md-12">
                                                        <textarea id="instructions" name="instructions" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <h3> Additional Requirements</h3>
                                                <p>The requirements boxes below are optional however, we highly recommend that you complete them in order to get exactly what you’re looking for from your writer. The greater the detail that you provide the more tailored your order will be to your exact requirements.</p>

                                                <div class="form-group hide" id="focus_error">
                                                    <div class="col-xs-12">
                                                        <div class="alert alert-info alert-rounded" id="focusError" style="font-size: 18px;"></div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="control-label text-left col-md-3">Focus(Optional)</label>
                                                    <div class="col-md-12">
                                                        <textarea id="focus" name="focus" class="form-control"></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group hide" id="structure_error">
                                                    <div class="col-xs-12">
                                                        <div class="alert alert-info alert-rounded" id="structureError" style="font-size: 18px;"></div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="control-label text-left col-md-5">Structure(Optional)</label>
                                                    <div class="col-md-12">
                                                        <textarea id="structure" name="structure" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <h3>Referencing and Sources</h3>

                                                <div class="form-group hide" id="reference_error">
                                                    <div class="col-xs-12">
                                                        <div class="alert alert-info alert-rounded" id="referenceError" style="font-size: 18px;"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label text-left col-md-4"> <span style="color:red;">*</span>Referencing Style </label>
                                                    <div class="col-md-12">
                                                        <select id="reference" name="reference" class="form-control">

                                                            <option value="">Please Select</option>
                                                            <option value="Harvard-Standard">Harvard-Standard</option>
                                                            <option value="Oxford Referencing">Oxford Referencing</option>
                                                            <option value="APA">APA</option>
                                                            <option value="MLA">MLA</option>
                                                            <option value="chicago">Chicago</option>
                                                            <option value="ASA">ASA</option>
                                                            <option value="CBE">CBE</option>
                                                            <option value="AGLC Referencing">AGLC Referencing</option>
                                                            <option value="OS COLA">OS COLA</option>
                                                            <option value="BMJ">BMJ</option>
                                                            <option value="Open University">Open University</option>
                                                            <option value="MHRA">MHRA</option>
                                                            <option value="Vancouver">Vancouver</option>
                                                            <option value="No Referencing Required"> No Referencing Required</option>
                                                            <option value="Others">Others(Include in the instructions part)</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group hide" id="number_error">
                                                    <div class="col-xs-12">
                                                        <div class="alert alert-info alert-rounded" id="numberError" style="font-size: 18px;"></div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="control-label text-left col-md-5"><span style="color:red;">*</span>Number of References</label>
                                                    <div class="col-md-12">
                                                        <select id="number" name="number" class="form-control">

                                                            <option value="">Please select</option>
                                                            @for ($i = 1; $i <=50; $i++)
                                                                <option value="{{$i}}">{{$i}}</option>
                                                                @endfor

                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group hide" id="suggested_error">
                                                    <div class="col-xs-12">
                                                        <div class="alert alert-info alert-rounded" id="suggestedError" style="font-size: 18px;"></div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="control-label text-left col-md-6">Suggested Sources(optional)</label>
                                                    <div class="col-md-12">
                                                        <textarea id="suggested" name="suggested" class="form-control"></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group hide" id="essential_error">
                                                    <div class="col-xs-12">
                                                        <div class="alert alert-info alert-rounded" id="essentialError" style="font-size: 18px;"></div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="control-label text-left col-md-6">Essential Sources(optional)</label>
                                                    <div class="col-md-12">
                                                        <textarea id="essential" name="essential" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row" >
                                                <h3>Please help the Writer understand what you want</h3>
                                                    <p>If you have a copy of your marking scheme for this order, any of your notes on this module or guidance from your lecturer, this will really help your writer understand what it is you are looking for.
                                                    </p>
                                                    <p>All files go to your writer, so please dont include any personal information.</p>
                                                    <div id="upload">

                                                <div id="drop">


                                                    Drop Here

                                                    <a>Browse</a>
                                                    <input type="file" name="upl" multiple />
                                                </div>

                                                <ul>
                                                    <!-- The file uploads will be shown here -->
                                                </ul>
                                                    </div>
                                                </div>



                                                <p>
                                                    <span style="color:red;">*</span> <input type="checkbox" id="agree" name="agree" value="1" required="required" class="ui-checkboxradio ui-helper-hidden-accessible">
                                                    <label for="agree" class="ui-checkboxradio-label ui-corner-all ui-button ui-widget"><span class="ui-checkboxradio-icon ui-corner-all ui-icon ui-icon-background ui-icon-blank"></span><span class="ui-checkboxradio-icon-space"> </span>
                                                        By ticking this box you are agreeing to our <a target="_blank" href="">terms and conditions</a> and <a target="_blank" href=""> fair use policy. </a></label></p>


                                            </div>

                                        </div>


                                    </div>
                                </section>
                                <h6> Order Confirmation</h6>
                                <section>
                                    <h6><b>Confirm Your Order Details</b></h6>
                                    <div class="row">
                                        <!-- column -->
                                        <div class="col-lg-12">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <tbody>
                                                            <tr>
                                                                <td>Document type</td>
                                                                <td id="document"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Subject Area</td>
                                                                <td id="area"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Subject</td>
                                                                <td id="sub"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Educational Level</td>
                                                                <td id="educ"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Length</td>
                                                                <td id="len"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Delivery Time</td>
                                                                <td id="del"></td>
                                                            </tr>
                                                            <tr>
                                                            <td>Title</td>
                                                            <td id="titl"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Instructions</td>
                                                                <td id="inst"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Focus</td>
                                                                <td id="foc"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Structure</td>
                                                                <td id="struct"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Referencing Style</td>
                                                                <td id="style"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Number of reference</td>
                                                                <td id="refer"></td>
                                                            </tr>

                                                            <tr>
                                                                <td>Suggested Sources</td>
                                                                <td id="sug"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Essential Sources</td>
                                                                <td id="essent"></td>
                                                            </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>


                                        </div>
                                    </div>
                                </section>

                                <h6>Login</h6>
                               <section>
                                   <div id="register"  class="hide">
                                                   <h3 class="box-title m-b-20">Sign Up</h3>
                                       <div class="form-group hide" id="name_error">
                                           <div class="col-xs-12">
                                               <div class="alert alert-info alert-rounded" id="nameError" style="font-size: 18px;"></div>
                                           </div>
                                       </div>

                                       <div class="form-group hide" id="email_error">
                                           <div class="col-xs-12">
                                               <div class="alert alert-info alert-rounded" id="emailError" style="font-size: 18px;"></div>
                                           </div>
                                       </div>

                                       <div class="form-group hide" id="password_error">
                                           <div class="col-xs-12">
                                               <div class="alert alert-info alert-rounded" id="passwordError" style="font-size: 18px;"></div>
                                           </div>
                                       </div>

                                       <div id="signUp" class="">
                                                   <div class="form-group">
                                                       <div class="col-xs-12">
                                                           <input class="form-control" type="text" required="" placeholder="Name" required name="name" id="name">
                                                       </div>
                                                   </div>
                                                   <div class="form-group ">
                                                       <div class="col-xs-12">
                                                           <input class="form-control" type="text" required="" placeholder="Email" required name="email" id="email">
                                                       </div>
                                                   </div>
                                                   <div class="form-group ">
                                                       <div class="col-xs-12">
                                                           <input class="form-control" type="password" required="" placeholder="Password" required name="password" id="password">
                                                       </div>
                                                   </div>
                                                   <div class="form-group">
                                                       <div class="col-xs-12">
                                                           <input class="form-control" type="password" required="" placeholder="Confirm Password" required name="confirm_password" id="confirm_password">
                                                       </div>
                                                   </div>
                                                   <div class="form-group row">
                                                       <div class="col-md-12">
                                                           <div class="checkbox checkbox-success">
                                                               <input id="checkbox-signup" type="checkbox">
                                                               <label for="checkbox-signup" required> I agree to all <a href="#">Terms</a></label>
                                                           </div>
                                                       </div>
                                                   </div>
                                       </div>
                                                   <div class="form-group text-center m-t-20 ">
                                                       <div class="col-xs-12 ">
                                                           <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" id="registerButton">Sign Up</button>
                                                       </div>
                                                   </div>
                                                   <div class="form-group m-b-0">
                                                       <div class="col-sm-12 text-center">
                                                           <div>Already have an account? <span class="text-info m-l-5" id="signId"><b>Sign In</b></span></div>
                                                       </div>
                                                   </div>
                                   </div>
                                   <div id="signIn" class="show">
                                       <meta name="csrf-token" content="{{ csrf_token() }}">

                                   <h3 class="box-title m-b-20">Sign In</h3>
                                       <div class="form-group hide" id="sign_error">
                                           <div class="col-xs-12">
                                               <div class="alert alert-info alert-rounded" id="signError" style="font-size: 18px;"></div>
                                           </div>
                                       </div>

                                       <div class="form-group hide" id="password_error">
                                           <div class="col-xs-12">
                                               <div class="alert alert-info alert-rounded" id="passwordError" style="font-size: 18px;"></div>
                                           </div>
                                       </div>
                                       <div class="form-group hide" id="notification">
                                           <div class="col-xs-12">
                                               <div class="alert alert-info alert-rounded" id="error" style="font-size: 18px;">
                                               </div>
                                           </div>
                                       </div>

                                   <div id="credentials" >
                                       <div class="form-group ">
                                           <div class="col-xs-12">
                                               <input class="form-control" type="text" name="email2" id="email2" required="" placeholder="Email"> </div>
                                       </div>
                                       <div class="form-group">
                                           <div class="col-xs-12">
                                               <input class="form-control" type="password" id="password2" name="password2" required="" placeholder="Password"> </div>
                                       </div>

                                   </div>

                                       {{--                                       <div class="form-group row">--}}
{{--                                           <div class="col-md-12 font-14">--}}
{{--                                               <div class="checkbox checkbox-primary pull-left p-t-0">--}}
{{--                                                   <input id="checkbox-signup" type="checkbox">--}}
{{--                                                   <label for="checkbox-signup"> Remember me </label>--}}
{{--                                               </div> <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><!-- <i class="fa fa-lock m-r-5"></i> --> Forgot pwd?</a> </div>--}}
{{--                                       </div>--}}
                                       <div class="form-group text-center m-t-20 ">
                                           <div class="col-xs-12">
                                               <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" id="loginButton" type="button">Log In</button>
                                           </div>
                                       </div>


                                       <div class="form-group m-b-0">
                                           <div class="col-sm-12 text-center">
                                               <div>Don't have an account? <span class="text-info m-l-5" id="registerId"><b>Sign Up</b></span></div>
                                           </div>
                                       </div>
                                   </div>

                                   <div id="otpdiv" class="hide">
                                       <meta name="csrf-token" content="{{ csrf_token() }}">
                                       <div class="form-group">
                                           <div> Enter the OTP sent to your email</div>


                                           <input type="otp" class="form-control" id="otp" placeholder="Enter OTP" name="otp" required>
                                       </div>
                                       <div class="form-group hide" id="notify">
                                           <div class="col-xs-12">
                                               <div class="alert alert-info alert-rounded" id="new" style="font-size: 18px;">
                                               </div>
                                           </div>
                                       </div>
                                       <button id="otpsubmit" type="button" class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light"> Submit</button>
                                   </div>



                               </section>
                                <h6> Payment Details</h6>
                                <section>

                                    <h6 style="text-align:center;"><b>Pay For your Order</b></h6>
                                    <div class="alert alert-primary control-label text-left col-md-12" role="alert">
                                        Please pay for your order so that the writer can start writing immediately
                                    </div>
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="col-lg-12">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                        <tr>
                                                            <td>Order No</td>
                                                            <td id="orderNum"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Amount</td>
                                                            <td id="totalAmount"></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <h6 style="text-align:center;">Pay With Paypal</h6>
                                            <div id="payment">

                                            </div>

                                        </div>
                                    </div>
                                </section>
                            </form>
                        </div>
                        </div>
                    </div>
                <div class="col-lg-4" >
                    <div class="card card-outline-info">

                        <div class="card-body" id="stick">
                            <div  class="col-lg-14 col-md-14 " id="sticky"  >
                                <div class="total_price clearfix" >
                                    <h5>Order Summary</h5>
                                    <div class="row summary-mobile" style="padding: 5px; height: 30px; text-align: left; border-bottom: 1px solid #ccc;">
                                        <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6 summary-mobile-col"><span style="color:rgba(0,0,0,.4); font-weight:bold;" id="slide_or_page_label">Cost Per Page</span></div>
                                        <div class="col-md-1 col-xs-1 col-sm-1 col-lg-1" style="font-size:15px; font-weight:bold;">:</div>
                                        <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4 summary-mobile-col"><span style="color:rgba(0,0,0,1); font-weight:bold;" id="cost_per_page">$  0.00 </span></div>
                                    </div>
                                    <div class="row summary-mobile-2" style="padding: 5px; height: 30px; text-align: left; border-bottom: 1px solid #ccc;">
                                        <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6 summary-mobile-col"><span style="color:rgba(0,0,0,.4); font-weight:bold;">Total Discount</span></div>
                                        <div class="col-md-1 col-xs-1 col-sm-1 col-lg-1" style="font-size:15px; font-weight:bold;">:</div>
                                        <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4 summary-mobile-col"><span style="color:rgba(0,0,0,1); font-weight:bold;" id="total_discount">$  0.00</span></div>
                                    </div>
                                    <div class="row summary-mobile" style="padding: 5px; height: 30px; text-align: left; border-bottom: 1px solid #ccc;">
                                        <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6 summary-mobile-col"><span style="color:rgba(0,0,0,.4); font-weight:bold;">Total Cost</span></div>
                                        <div class="col-md-1 col-xs-1 col-sm-1 col-lg-1" style="font-size:15px; font-weight:bold;">:</div>
                                        <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4 summary-mobile-col"><span style="color:rgba(0,0,0,1); font-weight:bold;" id="amt_paid">$  0.00</span></div>
                                    </div>
                                    <div class="row summary-mobile-hidden" style="padding: 5px; height: 30px; text-align: left; border-bottom: 1px solid #ccc;">
                                        <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6 summary-mobile-col"><span style="color:rgba(0,0,0,.4); font-weight:bold;">Delivery Type</span></div>
                                        <div class="col-md-1 col-xs-1 col-sm-1 col-lg-1" style="font-size:15px; font-weight:bold;">:</div>
                                        <div class="col-md-4.5 col-xs-4.5 col-sm-4.5 col-lg-4.5 summary-mobile-col"><span style="color:rgba(0,0,0,1); font-weight:bold;" id="delivery_type_txt">Standard</span></div>
                                    </div>
                                    <div class="row summary-mobile-hidden" style="padding: 20px 5px; height: auto; text-align: left; border-bottom: 1px solid #ccc;">
                                        <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6" style="margin-top: 5px;"><span style="color:rgba(0,0,0,.4); font-weight:bold;">Total cost</span></div>
                                        <div class="col-md-1 col-xs-1 col-sm-1 col-lg-1" style="font-size:15px; font-weight:bold;margin-top: 3px;">:</div>
                                        <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4 summary-mobile-col" style="padding:0px;"><span style=" color:rgba(0,0,0,1); font-weight:bold; font-size:21px; text-align:center;background-color: transparent;border: none;width:100%;" id="base_price">$  0.00</span></div>
                                    </div>
                                    <span class="clearfix"></span>
                                    <div class="row curr-changer-wrapper" style="padding: 20px 5px 5px 5px;">
                                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12" style="padding:25px; text-align:center;">
                                           <a class="btn btn-primary btn-xs curr-btn-active c_btn exchange" id="USD"data-curr="$" style="text-decoration-color: white;background: white; color:black;padding: 8px 20px;font-size:14px; text-align: center"><span class="desk-curr">$</span><span class="mobi-curr"></span></a>
                                            <a class="btn btn-primary btn-xs curr-btn c_btn exchange" id="EUR" data-curr="&euro;" style="text-decoration-color: white; background: white; color:black;padding: 8px 20px;font-size:14px; text-align: center"><span class="desk-curr">&euro;</span><span class="mobi-curr" ></span></a>
                                            <a class="btn btn-primary btn-xs curr-btn c_btn exchange" id="GBP" data-curr="&pound;" style="text-decoration-color: white; background: white; color:black;padding: 8px 20px;font-size:14px; text-align: center"><span class="desk-curr">&pound;</span><span class="mobi-curr" ></span></a>
                                            <a class="btn btn-primary btn-xs curr-btn c_btn exchange" id="AUD" data-curr="A$" style="text-decoration-color: white;background: white; color:black;padding: 8px 20px;font-size:14px; text-align: center"><span class="desk-curr">A$</span><span class="mobi-curr"></span></a>
                                        </div>
                                    </div>

                                    <!--<div class="clearfx" style="height:30px;"></div>-->
                                    <!--<input type="text" style="font-weight:bold; font-size:22px; text-align:center;" name="base_price" id="base_price" value="" readonly>--><!--<div id="base_price"></div>-->
                                    <div class="currency">
                                       <input type="hidden" name="updated_price" id="updated_price" value="">
                                        <input type="hidden" name="currency" id="curr_submit" value="USD">
                                    </div>
                                    <div class="text-center">
                                        <p class="estimate_date"> Estimated Delivery Date </p>
                                        <p class="date_estimate" id="date_estimate">0 Days;</p>
                                    </div>

                                    <input type="hidden" name="input_date_estimate" id="input_date_estimate" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="loadingOverlay" class="overlay" style="position:absolute; width: 100%;background-color: #0000003b; height: 100%; z-index:99; "></div>
            </div>



        </div>




            <!-- Row -->
        <!-- Row -->
        <div class="right-sidebar">
            <div class="slimscrollright">
                <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                <div class="r-panel-body">
                    <ul id="themecolors" class="m-t-20">
                        <li><b>With Light sidebar</b></li>
                        <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                        <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                        <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                        <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                        <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                        <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                        <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                        <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                        <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                        <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                        <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                        <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                        <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                    </ul>
                    <ul class="m-t-20 chatonline">
                        <li><b>Chat option</b></li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer" style="text-align: center">Pro.writenod.com {{date('d-m-Y')}}</footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->


@include('includes.footer')
<script
        src="https://www.paypal.com/sdk/js?client-id=AbF6XgKBbrAJGFhg7_quQ-34hySwo_JIybxxNV_ATWdNy2W_mY0YGnp7YAJ2S9lYNhNAU1OwxzaGBrhG">
</script>

<meta name="csrf-token" content="{{ csrf_token() }}">
<script> paypal.Buttons({
        createOrder: function(data, actions) {
            // Set up the transaction
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        // currency_code:$("#curr_submit").val(),
                        value:priceTotal
                    }
                }]
            });
        },
        onApprove: function(data, actions) {
            // Capture the funds from the transaction
            return actions.order.capture().then(function(details) {
                console.log("details", details);
                console.log("json", JSON.stringify(details));
                // Show a success message to your buyer
                //alert('Transaction completed by ' + details.payer.name.given_name);
               // return fetch('/paypal-transaction-complete', {
                $.ajax({
                    type: "post",
                    url:"payment",
                    headers: {
                        // 'content-type': 'application/json',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data:  {'orderdetails': JSON.stringify(details), 'orderNo':$('input[id=orderNo]').val()},
                    success: function(data) {
                        swal({
                            title: "Congratulations!",
                            text: "You have successfully placed your order. Sit back and relax. We got you!",
                        });
                        return true;

                    },
                    error: function (xhr, errmsg, err) {
                        console.log("error ajax");
                        //alert("something went wrong");
                        console.log("price", xhr);
                        console.log("error", errmsg);
                        console.log("find", err);
                    },

                });
            });
        }
    }).render('#payment');
</script>
</body>

</html>