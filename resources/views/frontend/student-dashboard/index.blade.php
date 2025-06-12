@extends('frontend.layouts.master')

@section('content')
    <!--===========================
                MAIN MENU 3 START
            ============================-->
    <nav class="navbar navbar-expand-lg main_menu main_menu_3">
        <a class="navbar-brand" href="index_3.html">
            <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="EduCore" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="menu_category">
                <div class="icon">
                    <img src="{{ asset('frontend/assets/images/grid_icon.png') }}" alt="Category" class="img-fluid">
                </div>
                Category
                <ul>
                    <li>
                        <a href="#">
                            <span>
                                <img src="{{ asset('frontend/assets/images/menu_category_icon_1.png') }}" alt="Category"
                                    class="img-fluid">
                            </span>
                            Development
                        </a>
                        <ul class="category_sub_menu">
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">UI/UX Design</a></li>
                            <li><a href="#">Graphic Design</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <span>
                                <img src="{{ asset('frontend/assets/images/menu_category_icon_2.png') }}" alt="Category"
                                    class="img-fluid">
                            </span>
                            Business
                        </a>
                        <ul class="category_sub_menu">
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">UI/UX Design</a></li>
                            <li><a href="#">Graphic Design</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <span>
                                <img src="{{ asset('frontend/assets/images/menu_category_icon_3.png') }}" alt="Category"
                                    class="img-fluid">
                            </span>
                            Marketing
                        </a>
                        <ul class="category_sub_menu">
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">UI/UX Design</a></li>
                            <li><a href="#">Graphic Design</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <span>
                                <img src="{{ asset('frontend/assets/images/menu_category_icon_4.png') }}" alt="Category"
                                    class="img-fluid">
                            </span>
                            Lifestyle
                        </a>
                        <ul class="category_sub_menu">
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">UI/UX Design</a></li>
                            <li><a href="#">Graphic Design</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <span>
                                <img src="{{ asset('frontend/assets/images/menu_category_icon_5.png') }}" alt="Category"
                                    class="img-fluid">
                            </span>
                            Health & Fitness
                        </a>
                        <ul class="category_sub_menu">
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">UI/UX Design</a></li>
                            <li><a href="#">Graphic Design</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <span>
                                <img src="{{ asset('frontend/assets/images/menu_category_icon_6.png') }}" alt="Category"
                                    class="img-fluid">
                            </span>
                            Design
                        </a>
                        <ul class="category_sub_menu">
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">UI/UX Design</a></li>
                            <li><a href="#">Graphic Design</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <span>
                                <img src="{{ asset('frontend/assets/images/menu_category_icon_7.png') }}" alt="Category"
                                    class="img-fluid">
                            </span>
                            Academics
                        </a>
                        <ul class="category_sub_menu">
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">UI/UX Design</a></li>
                            <li><a href="#">Graphic Design</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Courses <i class="far fa-angle-down"></i></a>
                    <ul class="droap_menu">
                        <li><a href="courses.html">Courses</a></li>
                        <li><a href="courses_details.html">Course details</a></li>
                        <li><a href="course_video.html">Course video</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">pages <i class="far fa-angle-down"></i></a>
                    <ul class="droap_menu">
                        <li><a href="category.html">Categories</a></li>
                        <li><a href="cart_view.html">cart view</a></li>
                        <li><a href="checkout.html">checkout</a></li>
                        <li><a href="payment.html">payment</a></li>
                        <li><a href="pricing.html">pricing</a></li>
                        <li><a href="student_reviews.html">student review</a></li>
                        <li><a href="instructor.html">Instructor</a></li>
                        <li><a href="instructor_details.html">Instructor details</a></li>
                        <li><a href="instructor_finder.html">Instructor finder</a></li>
                        <li><a href="error.html">error</a></li>
                        <li><a href="faq.html">faq</a></li>
                        <li><a href="sign_in.html">sign in</a></li>
                        <li><a href="sign_up.html">sign up</a></li>
                        <li><a href="forum.html">forum</a></li>
                        <li><a href="forum_categories.html">forum Categories</a></li>
                        <li><a href="forum_create_topic.html">forum create topic</a></li>
                        <li><a href="forum_single_topic.html">forum single topic</a></li>
                        <li><a href="dashboard.html">Dashboard</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">blog <i class="far fa-angle-down"></i></a>
                    <ul class="droap_menu">
                        <li><a href="blogs.html">blog grid view</a></li>
                        <li><a href="blog_list.html">blog list view</a></li>
                        <li><a href="blog_details.html">blog details</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">contact us</a>
                </li>
            </ul>

            <div class="right_menu">
                <div class="menu_search_btn">
                    <img src="{{ asset('frontend/assets/images/search_icon.png') }}" alt="Search" class="img-fluid">
                </div>
                <ul>
                    <li>
                        <a class="menu_signin" href="#">
                            <span>
                                <img src="{{ asset('frontend/assets/images/cart_icon_black.png') }}" alt="user"
                                    class="img-fluid">
                            </span>
                            <b>06</b>
                        </a>
                    </li>
                    <li>
                        <a class="admin" href="#">
                            <span>
                                <img src="{{ asset('frontend/assets/images/user_icon_black.png') }}" alt="user"
                                    class="img-fluid">
                            </span>
                            admin
                        </a>
                    </li>
                    <li>
                        <a class="common_btn" href="#">Sign Up</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    <div class="wsus__menu_3_search_area">
        <form action="#">
            <input type="text" placeholder="Search School, Online.....">
            <button class="common_btn" type="submit">Search</button>
            <span class="close_search"><i class="far fa-times"></i></span>
        </form>
    </div>
    <!--===========================
                MAIN MENU 3 END
            ============================-->





    <!--===========================
                BREADCRUMB START
            ============================-->
    <section class="wsus__breadcrumb" style="background: url(images/breadcrumb_bg.jpg);">
        <div class="wsus__breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInUp">
                        <div class="wsus__breadcrumb_text">
                            <h1>Student Dashboard</h1>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li>Student Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===========================
                BREADCRUMB END
            ============================-->


    <!--===========================
                DASHBOARD OVERVIEW START
            ============================-->
    <section class="wsus__dashboard mt_90 xs_mt_70 pb_120 xs_pb_100">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-4 wow fadeInLeft">
                    <div class="wsus__dashboard_sidebar">
                        <div class="wsus__dashboard_sidebar_top">
                            <div class="dashboard_banner">
                                <img src="{{ asset('frontend/assets/images/single_topic_sidebar_banner.jpg') }}"
                                    alt="img" class="img-fluid">
                            </div>
                            <div class="img">
                                <img src="{{ asset('frontend/assets/images/dashboard_profile_img.png') }}" alt="profile"
                                    class="img-fluid w-100">
                            </div>
                            <h4>Norman Gordon</h4>
                            <p>Instructor</p>
                        </div>
                        <ul class="wsus__dashboard_sidebar_menu">
                            <li>
                                <a href="dashboard.html" class="active">
                                    <div class="img">
                                        <img src="{{ asset('frontend/assets/images/dash_icon_8.png') }}" alt="icon"
                                            class="img-fluid w-100">
                                    </div>
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="dashboard_profile.html">
                                    <div class="img">
                                        <img src="{{ asset('frontend/assets/images/dash_icon_1.png') }}" alt="icon"
                                            class="img-fluid w-100">
                                    </div>
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a href="dashboard_courses.html">
                                    <div class="img">
                                        <img src="{{ asset('frontend/assets/images/dash_icon_2.png') }}" alt="icon"
                                            class="img-fluid w-100">
                                    </div>
                                    Courses
                                </a>
                            </li>
                            <li>
                                <a href="dashboard_review.html">
                                    <div class="img">
                                        <img src="{{ asset('frontend/assets/images/dash_icon_4.png') }}" alt="icon"
                                            class="img-fluid w-100">
                                    </div>
                                    Reviews
                                </a>
                            </li>
                            <li>
                                <a href="dashboard_order.html">
                                    <div class="img">
                                        <img src="{{ asset('frontend/assets/images/dash_icon_5.png') }}" alt="icon"
                                            class="img-fluid w-100">
                                    </div>
                                    Orders
                                </a>
                            </li>
                            <li>
                                <a href="dashboard_student.html">
                                    <div class="img">
                                        <img src="{{ asset('frontend/assets/images/dash_icon_6.png') }}" alt="icon"
                                            class="img-fluid w-100">
                                    </div>
                                    Students
                                </a>
                            </li>
                            <li>
                                <a href="dashboard_payout.html">
                                    <div class="img">
                                        <img src="{{ asset('frontend/assets/images/dash_icon_7.png') }}" alt="icon"
                                            class="img-fluid w-100">
                                    </div>
                                    Payouts
                                </a>
                            </li>
                            <li>
                                <a href="dashboard_support.html">
                                    <div class="img">
                                        <img src="{{ asset('frontend/assets/images/dash_icon_8.png') }}" alt="icon"
                                            class="img-fluid w-100">
                                    </div>
                                    Support Tickets
                                </a>
                            </li>
                            <li>
                                <a href="dashboard_security.html">
                                    <div class="img">
                                        <img src="{{ asset('frontend/assets/images/dash_icon_10.png') }}" alt="icon"
                                            class="img-fluid w-100">
                                    </div>
                                    Security
                                </a>
                            </li>
                            <li>
                                <a href="dashboard_social_account.html">
                                    <div class="img">
                                        <img src="{{ asset('frontend/assets/images/dash_icon_11.png') }}" alt="icon"
                                            class="img-fluid w-100">
                                    </div>
                                    Social Profile
                                </a>
                            </li>
                            <li>
                                <a href="dashboard_notification.html">
                                    <div class="img">
                                        <img src="{{ asset('frontend/assets/images/dash_icon_12.png') }}" alt="icon"
                                            class="img-fluid w-100">
                                    </div>
                                    Notifications
                                </a>
                            </li>
                            <li>
                                <a href="dashboard_privacy.html">
                                    <div class="img">
                                        <img src="{{ asset('frontend/assets/images/dash_icon_13.png') }}" alt="icon"
                                            class="img-fluid w-100">
                                    </div>
                                    Profile Privacy
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;"
                                    onclick="event.preventDefault();
                                               $('#logout').submit();">
                                    <div class="img">
                                        <img src="{{ asset('frontend/assets/images/dash_icon_16.png') }}" alt="icon"
                                            class="img-fluid w-100">
                                    </div>
                                    Sign Out
                                </a>
                                <form method="POST" id="logout" action="{{ route('logout') }}">
                                    @csrf


                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-9 col-md-8">
                    <div class="row">
                        <div class="col-xl-4 col-sm-6 wow fadeInUp">
                            <div class="wsus__dash_earning">
                                <h6>REVENUE</h6>
                                <h3>$2456.34</h3>
                                <p>Earning this month</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 wow fadeInUp">
                            <div class="wsus__dash_earning">
                                <h6>STUDENTS ENROLLMENTS</h6>
                                <h3>16,450</h3>
                                <p>Progress this month</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 wow fadeInUp">
                            <div class="wsus__dash_earning">
                                <h6>COURSES RATING</h6>
                                <h3>4.70</h3>
                                <p>Rating this month</p>
                            </div>
                        </div>
                    </div>

                    <div class="wsus__dashboard_chat_graps">
                        <div class="row">
                            <div class="col-xl-8 wow fadeInRight">
                                <div class="wsus__dashboard_graph">
                                    <h5>Earnings</h5>
                                    <div class="example-two"></div>
                                </div>
                            </div>
                            <div class="col-xl-4 wow fadeInRight">
                                <div class="wsus__dashboard_barfiller">
                                    <h5>Complated Course</h5>
                                    <div class="single_bar">
                                        <p>Java Code</p>
                                        <div id="bar1" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill orrange" data-percentage="75"></span>
                                        </div>
                                    </div>
                                    <div class="single_bar">
                                        <p>Design Basic</p>
                                        <div id="bar2" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill" data-percentage="65"></span>
                                        </div>
                                    </div>
                                    <div class="single_bar">
                                        <p>Team Building</p>
                                        <div id="bar3" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill megenda" data-percentage="55"></span>
                                        </div>
                                    </div>
                                    <div class="single_bar">
                                        <p>Business Marketing</p>
                                        <div id="bar4" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill merun" data-percentage="45"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="wsus__dashboard_contant">
                        <div class="wsus__dashboard_contant_top">
                            <div class="wsus__dashboard_heading wow fadeInUp">
                                <h5>Best Selling Courses</h5>
                            </div>
                        </div>

                        <div class="wsus__dash_course_table wow fadeInUp">
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th class="image">
                                                        COURSES
                                                    </th>
                                                    <th class="details">

                                                    </th>
                                                    <th class="sale">
                                                        SALES
                                                    </th>
                                                    <th class="amount">
                                                        AMOUNT
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td class="image">
                                                        <div class="image_category">
                                                            <img src="images/courses_3_img_1.jpg" alt="img"
                                                                class="img-fluid w-100">
                                                        </div>
                                                    </td>
                                                    <td class="details">
                                                        <p class="rating">
                                                            <i class="fas fa-star" aria-hidden="true"></i>
                                                            <i class="fas fa-star" aria-hidden="true"></i>
                                                            <i class="fas fa-star" aria-hidden="true"></i>
                                                            <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                                            <i class="far fa-star" aria-hidden="true"></i>
                                                            <span>(5.0)</span>
                                                        </p>
                                                        <a class="title" href="#">Complete Blender Creator Learn
                                                            3D Modelling.</a>

                                                    </td>
                                                    <td class="sale">
                                                        <p>34</p>
                                                    </td>
                                                    <td class="amount">
                                                        <p>$3,145.23</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="image">
                                                        <div class="image_category">
                                                            <img src="images/courses_3_img_2.jpg" alt="img"
                                                                class="img-fluid w-100">
                                                        </div>
                                                    </td>
                                                    <td class="details">
                                                        <p class="rating">
                                                            <i class="fas fa-star" aria-hidden="true"></i>
                                                            <i class="fas fa-star" aria-hidden="true"></i>
                                                            <i class="fas fa-star" aria-hidden="true"></i>
                                                            <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                                            <i class="far fa-star" aria-hidden="true"></i>
                                                            <span>(5.0)</span>
                                                        </p>
                                                        <a class="title" href="#">Complete Blender Creator Learn
                                                            3D Modelling.</a>

                                                    </td>
                                                    <td class="sale">
                                                        <p>34</p>
                                                    </td>
                                                    <td class="amount">
                                                        <p>$3,145.23</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="image">
                                                        <div class="image_category">
                                                            <img src="images/courses_3_img_3.jpg" alt="img"
                                                                class="img-fluid w-100">
                                                        </div>
                                                    </td>
                                                    <td class="details">
                                                        <p class="rating">
                                                            <i class="fas fa-star" aria-hidden="true"></i>
                                                            <i class="fas fa-star" aria-hidden="true"></i>
                                                            <i class="fas fa-star" aria-hidden="true"></i>
                                                            <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                                            <i class="far fa-star" aria-hidden="true"></i>
                                                            <span>(5.0)</span>
                                                        </p>
                                                        <a class="title" href="#">Complete Blender Creator Learn
                                                            3D Modelling.</a>

                                                    </td>
                                                    <td class="sale">
                                                        <p>34</p>
                                                    </td>
                                                    <td class="amount">
                                                        <p>$3,145.23</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===========================
                DASHBOARD OVERVIEW END
            ============================-->
@endsection
