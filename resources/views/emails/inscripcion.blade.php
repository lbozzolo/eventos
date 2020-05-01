<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="koira - Factory and Manufacturing Html Template">
    <link href="assets/images/favicon/favicon.png" rel="icon">
    <title>Mensaje vía email de eventum.com.ar</title>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto:400,500,700%7cTeko:400,500,600,700&display=swap">


    <style>
        /*--------------------------
    Project Name: Koira
    Version: 1.0
    Author: 7oorof
    Relase Date: jan 2020
---------------------------*/
        /*---------------------------
      Table of Contents
    -------------------------

    01- Global Styles
    02- Helper Classes
    03- Background & Colors
    04- Typography
    05- page title
    06- Buttons
    07- Forms
    08- Tabs
    09- Icons
    10- Breadcrumb
    11- Pagination
    12- Lists
    13- Header & Navbar
    14- Accordions
    15- Banners
    16- Dividers
    17- Footer
    18- Call to Action
    19- Carousel
    20- Slider
    21- Video
    22- Features
    23- Fancybox
    24- portfolio
    25- Team
    26- Testimonials
    27- Clients
    28- Blog
    29- Contact
    30- Pricing
    31- Counters
    32- Sidebar
    33- About
    34- Banners
    35- Careers

----------------------------*/
        /*--------------------------
      Global Styles
---------------------------*/
        html,
        body {
            overflow-x: hidden;
        }

        body {
            background-color: #ffffff;
            font-family: "Roboto", sans-serif;
            font-size: 14px;
            font-weight: 400;
            color: #9b9b9b;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        ::selection {
            background-color: #ff5e14;
            color: #ffffff;
        }

        a {
            color: #ff5e14;
            -webkit-transition: color 0.3s ease;
            -moz-transition: color 0.3s ease;
            -ms-transition: color 0.3s ease;
            -o-transition: color 0.3s ease;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #ad3600;
            text-decoration: none;
        }

        section {
            position: relative;
            padding: 100px 0;
        }

        img {
            max-width: 100%;
        }

        /*-------------------------
     RESET Default Styles
 --------------------------*/
        *,
        p,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        ul,
        ol,
        li {
            margin: 0;
            padding: 0;
        }

        *,
        :active,
        :focus {
            outline: none;
        }

        ul,
        ol {
            list-style: none;
        }

        button {
            border: none;
        }

        button,
        button:focus,
        .btn.focus,
        .btn:focus,
        .form-control,
        .form-control:focus {
            outline: none;
            background-color: transparent;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            -ms-box-shadow: none;
            -o-box-shadow: none;
            box-shadow: none;
        }

        textarea {
            resize: none;
        }

        select {
            background-color: transparent;
        }

        /*----------------------------
      Helper Classes
----------------------------*/
        .col-padding-0>.row {
            margin: 0;
        }

        .col-padding-0,
        .col-padding-0>.row>[class*=col-] {
            padding: 0;
        }

        .inner-padding {
            padding: 120px 70px;
        }

        .vertical-align-center {
            position: relative;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .background-banner {
            min-height: 500px;
        }

        .width-auto {
            width: auto !important;
        }

        .fz-13 {
            font-size: 13px;
        }

        .font-secondary {
            font-family: "Roboto", sans-serif;
        }

        .lh-1 {
            line-height: 1 !important;
        }

        .vh-100 {
            height: 100vh !important;
        }

        .list-inline>li {
            display: inline-block;
        }

        .align-v {
            display: flex;
            align-items: center;
        }

        .align-v-h {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .border-top {
            border-top: 1px solid #eaeaea !important;
        }

        .border-bottom {
            border-bottom: 1px solid #eaeaea !important;
        }

        @media (min-width: 992px) {
            .col-lg-5th {
                -ms-flex: 0 0 20%;
                flex: 0 0 20%;
                max-width: 20%;
            }
        }

        /*  margin Top */
        .mt-0 {
            margin-top: 0 !important;
        }

        .mt-5 {
            margin-top: 5px !important;
        }

        .mt-10 {
            margin-top: 10px !important;
        }

        .mt-20 {
            margin-top: 20px !important;
        }

        .mt-30 {
            margin-top: 30px !important;
        }

        .mt-40 {
            margin-top: 40px !important;
        }

        .mt-50 {
            margin-top: 50px !important;
        }

        .mt-60 {
            margin-top: 60px !important;
        }

        .mt-70 {
            margin-top: 70px !important;
        }

        .mt-80 {
            margin-top: 80px !important;
        }

        .mt-90 {
            margin-top: 90px !important;
        }

        .mt-100 {
            margin-top: 100px !important;
        }

        .mt-120 {
            margin-top: 120px !important;
        }

        /* Margin Bottom */
        .mb-0 {
            margin-bottom: 0 !important;
        }

        .mb-5 {
            margin-bottom: 5px !important;
        }

        .mb-10 {
            margin-bottom: 10px !important;
        }

        .mb-20 {
            margin-bottom: 20px !important;
        }

        .mb-25 {
            margin-bottom: 25px !important;
        }

        .mb-30 {
            margin-bottom: 30px !important;
        }

        .mb-40 {
            margin-bottom: 40px !important;
        }

        .mb-45 {
            margin-bottom: 45px !important;
        }

        .mb-50 {
            margin-bottom: 50px !important;
        }

        .mb-60 {
            margin-bottom: 60px !important;
        }

        .mb-70 {
            margin-bottom: 70px !important;
        }

        .mb-80 {
            margin-bottom: 80px !important;
        }

        .mb-90 {
            margin-bottom: 90px !important;
        }

        .mb-100 {
            margin-bottom: 100px !important;
        }

        .mt--100 {
            margin-top: -100px;
        }

        /* Margin Right */
        .mr-0 {
            margin-right: 0 !important;
        }

        .mr-20 {
            margin-right: 20px !important;
        }

        .mr-30 {
            margin-right: 30px !important;
        }

        .mr-40 {
            margin-right: 40px !important;
        }

        .mr-50 {
            margin-right: 50px !important;
        }

        /* Margin Left */
        .ml-0 {
            margin-left: 0 !important;
        }

        .ml-20 {
            margin-left: 20px !important;
        }

        .ml-30 {
            margin-left: 30px !important;
        }

        .ml-40 {
            margin-left: 40px !important;
        }

        .ml-50 {
            margin-left: 50px !important;
        }

        /* padding Top */
        .pb-10 {
            padding-top: 10px !important;
        }

        .pt-20 {
            padding-top: 20px !important;
        }

        .pt-30 {
            padding-top: 30px !important;
        }

        .pt-40 {
            padding-top: 40px !important;
        }

        .pt-50 {
            padding-top: 50px !important;
        }

        .pt-60 {
            padding-top: 60px !important;
        }

        .pt-70 {
            padding-top: 70px !important;
        }

        .pt-80 {
            padding-top: 80px !important;
        }

        .pt-90 {
            padding-top: 90px !important;
        }

        .pt-100 {
            padding-top: 100px !important;
        }

        .pt-110 {
            padding-top: 110px !important;
        }

        .pt-120 {
            padding-top: 120px !important;
        }

        .pt-130 {
            padding-top: 130px !important;
        }

        .pt-140 {
            padding-top: 140px !important;
        }

        .pt-150 {
            padding-top: 150px !important;
        }

        .pt-170 {
            padding-top: 170px !important;
        }

        /*  Padding Bottom */
        .pb-10 {
            padding-bottom: 10px !important;
        }

        .pb-20 {
            padding-bottom: 20px !important;
        }

        .pb-30 {
            padding-bottom: 30px !important;
        }

        .pb-40 {
            padding-bottom: 40px !important;
        }

        .pb-50 {
            padding-bottom: 50px !important;
        }

        .pb-60 {
            padding-bottom: 60px !important;
        }

        .pb-70 {
            padding-bottom: 70px !important;
        }

        .pb-80 {
            padding-bottom: 80px !important;
        }

        .pb-90 {
            padding-bottom: 90px !important;
        }

        .pb-100 {
            padding-bottom: 100px !important;
        }

        .pb-110 {
            padding-bottom: 110px !important;
        }

        .pb-120 {
            padding-bottom: 120px !important;
        }

        .pb-130 {
            padding-bottom: 130px !important;
        }

        .pb-140 {
            padding-bottom: 140px !important;
        }

        .pb-150 {
            padding-bottom: 150px !important;
        }

        .pb-170 {
            padding-bottom: 170px !important;
        }

        /* padding Right */
        .pr-0 {
            padding-right: 0 !important;
        }

        .pr-15 {
            padding-right: 15px !important;
        }

        .pr-20 {
            padding-right: 20px !important;
        }

        .pr-30 {
            padding-right: 30px !important;
        }

        .pr-50 {
            padding-right: 50px !important;
        }

        .pr-60 {
            padding-right: 60px !important;
        }

        .pr-70 {
            padding-right: 70px !important;
        }

        .pr-100 {
            padding-right: 100px !important;
        }

        /* padding Left */
        .pl-0 {
            padding-left: 0 !important;
        }

        .pl-15 {
            padding-left: 15px !important;
        }

        .pl-20 {
            padding-left: 20px !important;
        }

        .pl-30 {
            padding-left: 30px !important;
        }

        .pl-50 {
            padding-left: 50px !important;
        }

        .pl-60 {
            padding-left: 60px !important;
        }

        .pl-70 {
            padding-left: 70px !important;
        }

        .pl-100 {
            padding-left: 100px !important;
        }

        /* Large Devices */
        @media only screen and (min-width: 992px) and (max-width: 1200px) {
            .inner-padding {
                padding: 120px 50px;
            }
        }

        /* Medium Devices */
        @media only screen and (min-width: 768px) and (max-width: 991px) {
            section {
                padding: 75px 0;
            }

            .inner-padding {
                padding: 100px 50px !important;
            }

            .mt-30 {
                margin-top: 30.7692307692px !important;
            }

            .mt-40 {
                margin-top: 28.5714285714px !important;
            }

            .mt-50 {
                margin-top: 35.7142857143px !important;
            }

            .mt-60 {
                margin-top: 42.8571428571px !important;
            }

            .mt-70 {
                margin-top: 50px !important;
            }

            .mt-80 {
                margin-top: 57.1428571429px !important;
            }

            .mt-90 {
                margin-top: 64.2857142857px !important;
            }

            .mt-100 {
                margin-top: 71.4285714286px !important;
            }

            .mb-30 {
                margin-bottom: 23.0769230769px !important;
            }

            .mb-40 {
                margin-bottom: 28.5714285714px !important;
            }

            .mb-50 {
                margin-bottom: 35.7142857143px !important;
            }

            .mb-60 {
                margin-bottom: 42.8571428571px !important;
            }

            .mb-70 {
                margin-bottom: 50px !important;
            }

            .mb-80 {
                margin-bottom: 57.1428571429px !important;
            }

            .mb-90 {
                margin-bottom: 64.2857142857px !important;
            }

            .mb-100 {
                margin-bottom: 71.4285714286px !important;
            }

            /* Margin Right */
            .mr-30 {
                margin-right: 23.0769230769px !important;
            }

            .mr-40 {
                margin-right: 28.5714285714px !important;
            }

            .mr-50 {
                margin-right: 35.7142857143px !important;
            }

            /* Margin Left */
            .ml-30 {
                margin-left: 27.2727272727px !important;
            }

            .ml-40 {
                margin-left: 33.3333333333px !important;
            }

            .ml-50 {
                margin-left: 35.7142857143px !important;
            }

            /* padding Top */
            .pt-30 {
                padding-top: 23.0769230769px !important;
            }

            .pt-40 {
                padding-top: 28.5714285714px !important;
            }

            .pt-50 {
                padding-top: 35.7142857143px !important;
            }

            .pt-60 {
                padding-top: 42.8571428571px !important;
            }

            .pt-70 {
                padding-top: 50px !important;
            }

            .pt-80 {
                padding-top: 57.1428571429px !important;
            }

            .pt-90 {
                padding-top: 64.2857142857px !important;
            }

            .pt-100 {
                padding-top: 71.4285714286px !important;
            }

            .pt-110 {
                padding-top: 78.5714285714px !important;
            }

            .pt-120 {
                padding-top: 85.7142857143px !important;
            }

            .pt-130 {
                padding-top: 93.3333333333px !important;
            }

            .pt-140 {
                padding-top: 87.5px !important;
            }

            .pt-150 {
                padding-top: 88.2352941176px !important;
            }

            .pt-160 {
                padding-top: 88.8888888889px !important;
            }

            .pt-170 {
                padding-top: 89.4736842105px !important;
            }

            /*  Padding Bottom */
            .pb-30 {
                padding-bottom: 23.0769230769px !important;
            }

            .pb-40 {
                padding-bottom: 28.5714285714px !important;
            }

            .pb-50 {
                padding-bottom: 35.7142857143px !important;
            }

            .pb-60 {
                padding-bottom: 42.8571428571px !important;
            }

            .pb-70 {
                padding-bottom: 50px !important;
            }

            .pb-80 {
                padding-bottom: 57.1428571429px !important;
            }

            .pb-90 {
                padding-bottom: 64.2857142857px !important;
            }

            .pb-100 {
                padding-bottom: 71.4285714286px !important;
            }

            .pb-110 {
                padding-bottom: 78.5714285714px !important;
            }

            .pb-120 {
                padding-bottom: 85.7142857143px !important;
            }

            .pb-130 {
                padding-bottom: 86.6666666667px !important;
            }

            .pb-140 {
                padding-bottom: 87.5px !important;
            }

            .pb-150 {
                padding-bottom: 88.2352941176px !important;
            }

            .pb-160 {
                padding-bottom: 88.8888888889px !important;
            }

            .pb-170 {
                padding-bottom: 89.4736842105px !important;
            }
        }

        /* Mobile Phones and tablets */
        @media only screen and (min-width: 320px) and (max-width: 767px) {
            section {
                padding: 50px 0;
            }

            .inner-padding {
                padding: 50px 30px !important;
            }

            .text-center-xs-sm {
                text-align: center !important;
            }

            .mt-30 {
                margin-top: 23.0769230769px !important;
            }

            .mt-40 {
                margin-top: 28.5714285714px !important;
            }

            .mt-50 {
                margin-top: 33.3333333333px !important;
            }

            .mt-60 {
                margin-top: 33.3333333333px !important;
            }

            .mt-70 {
                margin-top: 35px !important;
            }

            .mt-80 {
                margin-top: 40px !important;
            }

            .mt-90 {
                margin-top: 45px !important;
            }

            .mt-100 {
                margin-top: 50px !important;
            }

            .mb-30 {
                margin-bottom: 23.0769230769px !important;
            }

            .mb-40 {
                margin-bottom: 28.5714285714px !important;
            }

            .mb-50 {
                margin-bottom: 33.3333333333px !important;
            }

            .mb-60 {
                margin-bottom: 33.3333333333px !important;
            }

            .mb-70 {
                margin-bottom: 35px !important;
            }

            .mb-80 {
                margin-bottom: 40px !important;
            }

            .mb-90 {
                margin-bottom: 45px !important;
            }

            .mb-100 {
                margin-bottom: 50px !important;
            }

            /* Margin Right */
            .mr-30 {
                margin-right: 25px !important;
            }

            .mr-40 {
                margin-right: 30.7692307692px !important;
            }

            .mr-50 {
                margin-right: 33.3333333333px !important;
            }

            /* Margin Left */
            .ml-30 {
                margin-left: 25px !important;
            }

            .ml-40 {
                margin-left: 30.7692307692px !important;
            }

            .ml-50 {
                margin-left: 33.3333333333px !important;
            }

            /* padding Top */
            .pt-30 {
                padding-top: 23.0769230769px !important;
            }

            .pt-40 {
                padding-top: 28.5714285714px !important;
            }

            .pt-50 {
                padding-top: 33.3333333333px !important;
            }

            .pt-60 {
                padding-top: 33.3333333333px !important;
            }

            .pt-70 {
                padding-top: 35px !important;
            }

            .pt-80 {
                padding-top: 40px !important;
            }

            .pt-90 {
                padding-top: 45px !important;
            }

            .pt-100 {
                padding-top: 50px !important;
            }

            .pt-110 {
                padding-top: 55px !important;
            }

            .pt-120 {
                padding-top: 60px !important;
            }

            .pt-130 {
                padding-top: 66.6666666667px !important;
            }

            .pt-140 {
                padding-top: 63.6363636364px !important;
            }

            .pt-150 {
                padding-top: 65.2173913043px !important;
            }

            .pt-160 {
                padding-top: 66.6666666667px !important;
            }

            .pt-170 {
                padding-top: 68px !important;
            }

            /*  Padding Bottom */
            .pb-30 {
                padding-bottom: 23.0769230769px !important;
            }

            .pb-40 {
                padding-bottom: 28.5714285714px !important;
            }

            .pb-50 {
                padding-bottom: 33.3333333333px !important;
            }

            .pb-60 {
                padding-bottom: 33.3333333333px !important;
            }

            .pb-70 {
                padding-bottom: 35px !important;
            }

            .pb-80 {
                padding-bottom: 40px !important;
            }

            .pb-90 {
                padding-bottom: 45px !important;
            }

            .pb-100 {
                padding-bottom: 50px !important;
            }

            .pb-110 {
                padding-bottom: 55px !important;
            }

            .pb-120 {
                padding-bottom: 60px !important;
            }

            .pb-130 {
                padding-bottom: 61.9047619048px !important;
            }

            .pb-140 {
                padding-bottom: 63.6363636364px !important;
            }

            .pb-150 {
                padding-bottom: 65.2173913043px !important;
            }

            .pb-160 {
                padding-bottom: 66.6666666667px !important;
            }

            .pb-170 {
                padding-bottom: 68px !important;
            }
        }

        /*-------------------------
   Background & Colors
--------------------------*/
        /* Colors */
        .color-white {
            color: #ffffff !important;
        }

        .color-gray {
            color: #f9f9f9 !important;
        }

        .color-dark {
            color: #222222 !important;
        }

        .color-theme {
            color: #ff5e14 !important;
        }

        .color-heading {
            color: #1b1a1a !important;
        }

        .color-body {
            color: #9b9b9b !important;
        }

        /* backgrounds */
        .bg-white {
            background-color: #ffffff !important;
        }

        .bg-gray {
            background-color: #f9f9f9 !important;
        }

        .bg-dark {
            background-color: #222222 !important;
        }

        .bg-heading {
            background-color: #1b1a1a !important;
        }

        .bg-theme {
            background-color: #ff5e14 !important;
        }

        .bg-img {
            position: relative;
            z-index: 1;
        }

        .bg-parallax {
            background-attachment: fixed;
        }

        .bg-overlay:before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background-color: rgba(27, 26, 26, 0.45);
        }

        .bg-overlay-2:before {
            background-color: rgba(27, 26, 26, 0.25);
        }

        .bg-overlay-3:before {
            background-color: rgba(27, 26, 26, 0.95);
        }

        .bg-overlay-4:before {
            background-color: rgba(27, 26, 26, 0.05);
        }

        .bg-overlay-gradient:before {
            background-color: transparent;
            background: -moz-linear-gradient(-90deg, rgba(27, 26, 26, 0) 0%, rgba(27, 26, 26, 0) 0%, #1b1a1a 85%);
            background: -webkit-linear-gradient(-90deg, rgba(27, 26, 26, 0) 0%, rgba(27, 26, 26, 0) 0%, #1b1a1a 85%);
            background: -ms-linear-gradient(-90deg, rgba(27, 26, 26, 0) 0%, rgba(27, 26, 26, 0) 0%, #1b1a1a 85%);
        }

        .bg-overlay-theme:before {
            background-color: rgba(255, 94, 20, 0.85);
        }

        /*-------------------------
   Typography
--------------------------*/
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #1b1a1a;
            font-family: "Teko", sans-serif;
            text-transform: capitalize;
            font-weight: 500;
            line-height: 1.1;
            margin-bottom: 23px;
        }

        p {
            font-size: 14px;
            line-height: 24px;
            font-weight: 400;
            margin-bottom: 15px;
        }

        h1 {
            font-size: 52px;
        }

        h2 {
            font-size: 42px;
        }

        h3 {
            font-size: 38px;
        }

        h4 {
            font-size: 32px;
        }

        h5 {
            font-size: 24px;
        }

        h6 {
            font-size: 18px;
        }

        .heading__subtitle {
            font-size: 17px;
            font-weight: 700;
            color: #ff5e14;
            display: block;
            margin-bottom: 21px;
        }

        .heading__title {
            font-size: 34px;
            margin-bottom: 20px;
        }

        .heading__desc {
            font-size: 16px;
            line-height: 27px;
            margin-bottom: 0;
        }

        .divider__line+.heading__desc {
            margin-top: 22px;
        }

        .heading-2 .heading__title {
            font-size: 48px;
        }

        .heading-3 .heading__title {
            font-size: 52px;
            margin-bottom: 25px;
        }

        .heading-3 .heading__desc {
            font-size: 18px;
            line-height: 28px;
            font-weight: 700;
        }

        .heading-4 .heading__title {
            font-size: 70px;
            font-weight: 400;
            margin-bottom: 35px;
        }

        .heading-4 .heading__desc {
            font-size: 18px;
            line-height: 28px;
            font-weight: 700;
        }

        .heading-5 .heading__title {
            font-size: 85px;
        }

        .heading-5 .heading__desc {
            font-size: 18px;
            line-height: 28px;
            font-weight: 700;
        }

        .heading-white .heading__subtitle {
            color: #f9f9f9;
        }

        .heading-white .heading__title,
        .heading-white .heading__desc {
            color: #ffffff;
        }

        .text__block-desc {
            font-size: 16px;
            line-height: 26px;
            margin-bottom: 35px;
        }

        .text__block-2 {
            position: relative;
        }

        .text__block-2 .text__block-title {
            position: absolute;
            top: 0;
            left: 0;
        }

        .text__block-2 .text__block-desc {
            padding-left: 220px;
        }

        .text-content-section h5 {
            font-size: 30px;
        }

        .text__link {
            font-size: 14px;
            font-weight: 700;
        }

        .text__link a {
            color: #ff5e14;
            border-bottom: 2px solid #ff5e14;
            transition: all 0.3s ease;
            padding-bottom: 2px;
        }

        .text__link:hover a {
            color: #1b1a1a;
            border-bottom: 2px solid #1b1a1a;
        }

        /* Medium Size Screens */
        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .heading__title {
                font-size: 30px;
            }

            .heading-2 .heading__title {
                font-size: 35px;
                line-height: 44px;
            }

            .heading-3 .heading__title {
                font-size: 37px;
                line-height: 47px;
            }

            .heading-3 .heading__desc {
                font-size: 16px;
                line-height: 26px;
            }
        }

        /* Mobile Phones and tablets */
        @media only screen and (min-width: 320px) and (max-width: 767px) {
            .heading__title {
                font-size: 25px;
                margin-bottom: 10px;
            }

            .heading-2 .heading__title {
                font-size: 28px;
                margin-bottom: 10px;
            }

            .heading-2 .heading__desc {
                font-size: 16px;
                font-weight: 400;
                line-height: 26px;
            }

            .heading-3 .heading__subtitle {
                margin-bottom: 13px;
            }

            .heading-3 .heading__title {
                font-size: 30px;
            }

            .heading-3 .heading__desc {
                font-size: 16px;
                line-height: 26px;
            }

            .heading-4 .heading__title {
                font-size: 40px;
            }

            .heading-4 .heading__desc {
                font-size: 16px;
                line-height: 26px;
                font-weight: 400;
            }

            .heading-5 .heading__title {
                font-size: 45px;
            }

            .heading-5 .heading__desc {
                font-size: 16px;
                line-height: 26px;
                font-weight: 400;
            }

            .text__block-desc {
                font-size: 14px;
                line-height: 24px;
                margin-bottom: 20px;
            }

            .text__block-2 .text__block-title {
                position: static;
            }

            .text__block-2 .text__block-desc {
                padding-left: 0;
            }
        }

        /* Custom Media in Mobile Phones */
        @media only screen and (max-width: 450px) {
            .heading-2 .heading__title {
                font-size: 25px;
            }

            .heading-2 .heading__desc {
                font-size: 15px;
                font-weight: 400;
                line-height: 24px;
            }
        }

        /*-------------------------
    page title
-------------------------*/
        .header-transparent+.page-title {
            margin-top: -100px;
        }

        .pagetitle__subheading {
            font-family: "Roboto", sans-serif;
            font-size: 17px;
            font-weight: 700;
            color: #f9f9f9;
            display: block;
            margin-bottom: 25px;
        }

        .pagetitle__heading {
            font-size: 85px;
            color: #ffffff;
            margin-bottom: 0;
        }

        .pagetitle__desc {
            font-size: 18px;
            font-weight: 700;
            line-height: 29px;
            color: #f9f9f9;
            margin-top: 12px;
            margin-bottom: 0;
        }

        .page-title {
            padding-top: 240px;
            padding-bottom: 150px;
        }

        .page-title .breadcrumb {
            margin-top: 10px;
            margin-bottom: 0;
        }

        .page-title .breadcrumb-item {
            padding-bottom: 5px;
        }

        .page-title .breadcrumb-item.active {
            color: #f9f9f9;
            padding-bottom: 3px;
        }

        .page-title .breadcrumb-item.active:after {
            content: "";
            position: absolute;
            bottom: 0;
            right: 0;
            width: calc(100% - 22px);
            height: 1px;
            background-color: #ffffff;
        }

        .page-title .breadcrumb-item a {
            position: relative;
        }

        .page-title .breadcrumb-item a,
        .page-title .breadcrumb-item+.breadcrumb-item::before {
            color: #ffffff;
        }

        .page-title .breadcrumb-item a:hover {
            color: #ff5e14;
        }

        .page-title-layout1 .pagetitle__heading {
            font-size: 65px;
        }

        .page-title-layout1 .btn {
            margin-top: 38px;
        }

        .page-title-layout2 {
            padding-top: 245px;
            padding-bottom: 185px;
        }

        .page-title-layout2 .pagetitle__heading {
            font-size: 48px;
        }

        .page-title-layout3 {
            padding-top: 217px;
            padding-bottom: 115px;
        }

        .page-title-layout4 {
            padding-top: 205px;
            padding-bottom: 110px;
        }

        .page-title-layout5 {
            padding-top: 235px;
            padding-bottom: 125px;
        }

        .page-title-layout6 {
            padding-top: 235px;
            padding-bottom: 140px;
        }

        .page-title-layout_conf6 {
            padding-top: 0px;
            padding-bottom: 100px;
        }

        .page-title-layout7 {
            padding-top: 215px;
            padding-bottom: 115px;
        }

        .page-title-layout7 .cta__banner {
            padding: 40px;
            border-radius: 5px;
        }

        .page-title-layout8,
        .page-title-layout10 {
            padding-top: 240px;
            padding-bottom: 140px;
        }

        .page-title-layout9 {
            padding-top: 235px;
            padding-bottom: 145px;
        }

        .page-title-layout9 .btn {
            margin-top: 32px;
        }

        .page-title-layout11 {
            padding-top: 65px;
            padding-bottom: 50px;
        }

        .page-title-layout11 .pagetitle__heading {
            font-size: 48px;
            color: #1b1a1a;
        }

        /* Medium Size Devices */
        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .page-title {
                padding-top: 200px;
                padding-bottom: 100px;
            }
        }

        /* Mobile Phones and tablets */
        @media only screen and (min-width: 320px) and (max-width: 767px) {
            .page-title {
                padding-top: 100px;
                padding-bottom: 50px;
            }

            .page-title .pagetitle__subheading {
                font-size: 14px;
                font-weight: 500;
                margin-bottom: 10px;
            }

            .page-title .pagetitle__desc {
                font-size: 14px;
                font-weight: 400;
                line-height: 25px;
                padding-right: 0 !important;
            }

            .page-title .pagetitle__heading {
                font-size: 32px !important;
            }

            .page-title .breadcrumb {
                margin-top: 15px;
            }

            .page-title .btn {
                margin-top: 20px;
            }

            .page-title-layout5 .breadcrumb {
                -ms-flex-pack: start !important;
                justify-content: flex-start !important;
            }

            .page-title-layout11 {
                padding-top: 40px;
                padding-bottom: 40px;
            }

            .page-title-layout11 .pagetitle__heading {
                font-size: 35px;
            }
        }

        /*----------------------
    BUTTONS
----------------------*/
        .btn {
            text-transform: capitalize;
            position: relative;
            font-size: 15px;
            font-weight: 700;
            min-width: 170px;
            height: 50px;
            line-height: 48px;
            border-radius: 50px;
            text-align: center;
            padding: 0 25px;
            letter-spacing: 0.4px;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -ms-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .btn:focus,
        .btn.active,
        .btn:active {
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
            box-shadow: none;
            outline: none;
        }

        .btn__block {
            width: 100%;
        }

        /* Button Primary */
        .btn__primary {
            background-color: #ff5e14;
            border: 2px solid #ff5e14;
            color: #ffffff;
        }

        .btn__primary:active,
        .btn__primary:focus,
        .btn__primary:hover {
            background-color: #1b1a1a;
            border-color: #1b1a1a;
            color: #ffffff;
        }

        .btn__primary.btn__hover2:active,
        .btn__primary.btn__hover2:focus,
        .btn__primary.btn__hover2:hover {
            background-color: #ffffff;
            border-color: #ffffff;
            color: #ff5e14;
        }

        .btn__primary.btn__hover3:active,
        .btn__primary.btn__hover3:focus,
        .btn__primary.btn__hover3:hover {
            background-color: transparent;
            border-color: #ff5e14;
            color: #ff5e14;
        }

        /* Button Secondary*/
        .btn__secondary {
            background-color: #222222;
            border: 2px solid #222222;
            color: #ffffff;
        }

        .btn__secondary:active,
        .btn__secondary:focus,
        .btn__secondary:hover {
            background-color: #ff5e14;
            border-color: #ff5e14;
            color: #ffffff;
        }

        .btn__secondary.btn__hover2:active,
        .btn__secondary.btn__hover2:focus,
        .btn__secondary.btn__hover2:hover {
            background-color: #ffffff;
            border-color: #ffffff;
            color: #222222;
        }

        .btn__default {
            background-color: transparent;
            border: 2px solid #eaeaea;
        }

        .btn__default:active,
        .btn__default:focus,
        .btn__default:hover {
            background-color: #ff5e14;
            border-color: #ff5e14;
            color: #ffffff;
        }

        /* Button White */
        .btn__white {
            background-color: #ffffff;
            border: 2px solid #ffffff;
            color: #1b1a1a;
        }

        .btn__white:active,
        .btn__white:focus,
        .btn__white:hover {
            background-color: #ff5e14;
            border-color: #ff5e14;
            color: #ffffff;
        }

        .btn__white.btn__hover2:active,
        .btn__white.btn__hover2:focus,
        .btn__white.btn__hover2:hover {
            background-color: #1b1a1a;
            border-color: #1b1a1a;
            color: #ffffff;
        }

        .btn__rounded {
            border-radius: 50px;
        }

        /* Button Link */
        .btn__link {
            background-color: transparent;
            border-color: transparent;
            width: auto;
            height: auto;
            line-height: 1;
            border: none;
            padding: 0;
            min-width: 0;
            border-radius: 0;
        }

        .btn__link.btn__primary {
            color: #ff5e14;
        }

        .btn__link.btn__primary:active,
        .btn__link.btn__primary:focus,
        .btn__link.btn__primary:hover {
            background-color: transparent;
            border-color: transparent;
            color: #222222;
        }

        .btn__link.btn__secondary {
            color: #222222;
        }

        .btn__link.btn__secondary:active,
        .btn__link.btn__secondary:focus,
        .btn__link.btn__secondary:hover {
            background-color: transparent;
            border-color: transparent;
            color: #ff5e14;
        }

        .btn__link.btn__white {
            color: #ffffff;
        }

        .btn__link.btn__white:active,
        .btn__link.btn__white:focus,
        .btn__link.btn__white:hover {
            background-color: transparent;
            border-color: transparent;
            color: #ffffff;
        }

        /* Button Bordered */
        .btn__bordered {
            background-color: transparent;
        }

        .btn__bordered.btn__primary {
            border-color: #ff5e14;
            color: #ff5e14;
        }

        .btn__bordered.btn__primary:active,
        .btn__bordered.btn__primary:focus,
        .btn__bordered.btn__primary:hover {
            background-color: #ff5e14;
            border-color: #ff5e14;
            color: #ffffff;
        }

        .btn__bordered.btn__secondary {
            border-color: #222222;
            color: #222222;
        }

        .btn__bordered.btn__secondary:active,
        .btn__bordered.btn__secondary:focus,
        .btn__bordered.btn__secondary:hover {
            color: #ffffff;
            background-color: #222222;
            border-color: #222222;
        }

        .btn__bordered.btn__white {
            color: #ffffff;
            border-color: #ffffff;
        }

        .btn__bordered.btn__white:active,
        .btn__bordered.btn__white:focus,
        .btn__bordered.btn__white:hover {
            color: #ff5e14;
            background-color: #ffffff;
            border-color: #ffffff;
        }

        .btn__white.btn__secondary {
            background-color: #ffffff;
            border-color: #ffffff;
            color: #222222;
        }

        .btn__white.btn__secondary:active,
        .btn__white.btn__secondary:focus,
        .btn__white.btn__secondary:hover {
            background-color: #ff5e14;
            border-color: #ff5e14;
            color: #ffffff;
        }

        .btn__video.popup-video {
            padding-left: 40px;
            color: #ffffff;
        }

        .btn__video.popup-video .video__player {
            position: absolute;
            top: 0;
            left: 0;
            width: 50px;
            height: 50px;
            line-height: 50px;
        }

        .btn__lg {
            min-width: 220px;
        }

        .btn__underlined {
            padding-bottom: 5px;
        }

        .btn__underlined:after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #ff5e14;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -ms-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .btn__white.btn__underlined:after {
            background-color: #ffffff;
        }

        .btn__white.btn__underlined:hover {
            color: #1b1a1a;
        }

        .btn__white.btn__underlined:hover:after {
            background-color: #1b1a1a;
        }

        .btn span~i {
            margin-left: 8px;
        }

        .btn i~span {
            margin-left: 8px;
        }

        /*---------------------------
        Forms
----------------------------*/
        label {
            font-weight: 700;
            line-height: 1;
            margin-bottom: 10px;
            color: #1b1a1a;
        }

        .form-group {
            position: relative;
            margin-bottom: 30px;
        }

        .form-control {
            height: 50px;
            line-height: 50px;
            border: 1px solid #f4f4f4;
            background-color: #f4f4f4;
            border-radius: 1px;
            padding: 0 0 0 20px;
            border-radius: 50px;
        }

        .form-control:focus {
            background-color: #f4f4f4;
            border-color: #ff5e14;
        }

        textarea.form-control {
            height: 122px;
            padding-top: 10px;
            line-height: 25px;
            border-radius: 15px;
        }

        .form-control::-webkit-input-placeholder {
            color: #9b9b9b;
        }

        .form-control:-moz-placeholder {
            color: #9b9b9b;
        }

        .form-control::-moz-placeholder {
            color: #9b9b9b;
        }

        .form-control:-ms-input-placeholder {
            color: #9b9b9b;
        }

        .form__title {
            font-size: 18px;
            line-height: 1;
            margin-bottom: 20px;
        }

        .form-group-select:after {
            content: "";
            font-family: FontAwesome;
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }

        .form-group-select select {
            -webkit-appearance: none;
            -moz-appearance: none;
            -ms-appearance: none;
            -o-appearance: none;
            appearance: none;
            color: #9b9b9b;
            cursor: pointer;
        }

        /* Input Radio */
        .label-radio {
            display: block;
            position: relative;
            padding-left: 26px;
            margin-bottom: 0;
            cursor: pointer;
            font-size: 13px;
            font-weight: 400;
            color: #9b9b9b;
        }

        .label-radio input {
            position: absolute;
            z-index: -1;
            opacity: 0;
        }

        .radio-indicator {
            position: absolute;
            top: -1px;
            left: 0;
            height: 17px;
            width: 17px;
            background: transparent;
            border: 2px solid #eaeaea;
            border-radius: 50%;
        }

        .label-radio input:checked~.radio-indicator {
            background: transparent;
        }

        .label-radio:hover input:not([disabled]):checked~.radio-indicator,
        .label-radio input:checked:focus~.radio-indicator {
            background: transparent;
        }

        .radio-indicator:after {
            content: "";
            position: absolute;
            display: none;
            left: 3px;
            top: 3px;
            height: 7px;
            width: 7px;
            border-radius: 50%;
            background: #ff5e14;
        }

        .label-radio input:checked~.radio-indicator:after {
            display: block;
        }

        /* Extra Small Devices */
        @media only screen and (min-width: 320px) and (max-width: 767px) {
            .form-group {
                margin-bottom: 20px;
            }
        }

        /*--------------------
    Tabs
--------------------*/
        .nav-tabs {
            border-bottom: none;
        }

        .nav-tabs .nav__link {
            display: block;
            position: relative;
            padding: 0 0 6px;
            margin: 0 30px 20px 0;
            text-transform: capitalize;
            font-size: 14px;
            font-weight: 700;
            line-height: 1;
            color: #1b1a1a;
        }

        .nav-tabs .nav__link:last-of-type {
            margin-right: 0;
        }

        .nav-tabs .nav__link:after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #ff5e14;
            -webkit-transition: all 0.7s linear;
            -moz-transition: all 0.7s linear;
            -ms-transition: all 0.7s linear;
            -o-transition: all 0.7s linear;
            transition: all 0.7s linear;
        }

        .nav-tabs .nav__link.active,
        .nav-tabs .nav__link:hover {
            color: #ff5e14;
        }

        .nav-tabs .nav__link.active:after,
        .nav-tabs .nav__link:hover:after {
            width: 100%;
        }

        .nav-tabs-white .nav__link {
            color: #ffffff;
        }

        .nav-tabs-white .nav__link.active,
        .nav-tabs-white .nav__link:hover {
            color: #ffffff;
        }

        .nav-tabs-white .nav__link:after {
            background-color: #fff;
        }

        /* Mobile Phones and tablets */
        @media only screen and (min-width: 320px) and (max-width: 767px) {
            .nav-tabs .nav__link {
                margin: 0 15px 10px 0;
            }
        }

        /*-------------------
    Icons
------------------*/
        .social__icons {
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .social__icons li {
            margin-right: 20px;
        }

        .social__icons li a {
            display: block;
            color: #1b1a1a;
            -webkit-transition: all 0.4s linear;
            -moz-transition: all 0.4s linear;
            -o-transition: all 0.4s linear;
            transition: all 0.4s linear;
        }

        .social__icons li a:hover {
            color: #ff5e14;
        }

        .social__icons li:last-of-type {
            margin-right: 0;
        }

        /*-------------------------
    Breadcrumb
--------------------------*/
        .breadcrumb {
            background-color: transparent;
            padding: 0;
        }

        .breadcrumb-item {
            position: relative;
            line-height: 1;
        }

        .breadcrumb-item+.breadcrumb-item::before {
            font-family: FontAwesome;
            content: "";
        }

        /*----------------------
    Pagination
-----------------------*/
        .pagination li {
            margin-right: 10px;
        }

        .pagination li:last-child {
            margin-right: 0;
        }

        .pagination li a {
            font-size: 20px;
            font-weight: 700;
            display: block;
            width: 50px;
            height: 50px;
            line-height: 48px;
            background-color: #f4f4f4;
            color: #222222;
            text-align: center;
            border: none;
            border-radius: 50%;
            -webkit-transition: all 0.3s linear;
            -moz-transition: all 0.3s linear;
            -ms-transition: all 0.3s linear;
            -o-transition: all 0.3s linear;
            transition: all 0.3s linear;
        }

        .pagination li a i {
            font-weight: 700;
        }

        .pagination li a:hover,
        .pagination li a.current {
            background-color: #ff5e14;
            color: #ffffff;
        }

        @media only screen and (min-width: 320px) and (max-width: 767px) {
            .pagination li a {
                font-size: 18px;
                width: 40px;
                height: 40px;
                line-height: 38px;
            }
        }

        /*-------------------
    lists
-------------------*/
        .list-items li {
            position: relative;
            padding-left: 32px;
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 9px;
        }

        .list-items li:before {
            content: "";
            font-family: "Fontawesome";
            position: absolute;
            top: 50%;
            left: 0;
            color: #ffffff;
            background-color: #1b1a1a;
            font-size: 10px;
            font-weight: 400;
            width: 20px;
            height: 20px;
            line-height: 19px;
            text-align: center;
            border-radius: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .list-items-layout2 li:before {
            background-color: #ff5e14;
        }

        .list-items-white li {
            color: #ffffff;
        }

        /*------------------------
    Animations
-----------------------*/
        @-webkit-keyframes pulsing {
            0% {
                opacity: 0;
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                -o-transform: scale(1);
                transform: scale(1);
            }

            40% {
                opacity: 0.5;
                -webkit-transform: scale(1.2);
                -moz-transform: scale(1.2);
                -ms-transform: scale(1.2);
                -o-transform: scale(1.2);
                transform: scale(1.2);
            }

            100% {
                opacity: 0;
                -webkit-transform: scale(1.7);
                -moz-transform: scale(1.7);
                -ms-transform: scale(1.7);
                -o-transform: scale(1.7);
                transform: scale(1.7);
            }
        }

        @-moz-keyframes pulsing {
            0% {
                opacity: 0;
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                -o-transform: scale(1);
                transform: scale(1);
            }

            40% {
                opacity: 0.5;
                -webkit-transform: scale(1.2);
                -moz-transform: scale(1.2);
                -ms-transform: scale(1.2);
                -o-transform: scale(1.2);
                transform: scale(1.2);
            }

            100% {
                opacity: 0;
                -webkit-transform: scale(1.7);
                -moz-transform: scale(1.7);
                -ms-transform: scale(1.7);
                -o-transform: scale(1.7);
                transform: scale(1.7);
            }
        }

        @-ms-keyframes pulsing {
            0% {
                opacity: 0;
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                -o-transform: scale(1);
                transform: scale(1);
            }

            40% {
                opacity: 0.5;
                -webkit-transform: scale(1.2);
                -moz-transform: scale(1.2);
                -ms-transform: scale(1.2);
                -o-transform: scale(1.2);
                transform: scale(1.2);
            }

            100% {
                opacity: 0;
                -webkit-transform: scale(1.7);
                -moz-transform: scale(1.7);
                -ms-transform: scale(1.7);
                -o-transform: scale(1.7);
                transform: scale(1.7);
            }
        }

        @-o-keyframes pulsing {
            0% {
                opacity: 0;
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                -o-transform: scale(1);
                transform: scale(1);
            }

            40% {
                opacity: 0.5;
                -webkit-transform: scale(1.2);
                -moz-transform: scale(1.2);
                -ms-transform: scale(1.2);
                -o-transform: scale(1.2);
                transform: scale(1.2);
            }

            100% {
                opacity: 0;
                -webkit-transform: scale(1.7);
                -moz-transform: scale(1.7);
                -ms-transform: scale(1.7);
                -o-transform: scale(1.7);
                transform: scale(1.7);
            }
        }

        @keyframes pulsing {
            0% {
                opacity: 0;
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                -o-transform: scale(1);
                transform: scale(1);
            }

            40% {
                opacity: 0.5;
                -webkit-transform: scale(1.2);
                -moz-transform: scale(1.2);
                -ms-transform: scale(1.2);
                -o-transform: scale(1.2);
                transform: scale(1.2);
            }

            100% {
                opacity: 0;
                -webkit-transform: scale(1.7);
                -moz-transform: scale(1.7);
                -ms-transform: scale(1.7);
                -o-transform: scale(1.7);
                transform: scale(1.7);
            }
        }

        @-webkit-keyframes slideTopDown {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
            }

            100% {
                -webkit-transform: translateY(-6px);
                -moz-transform: translateY(-6px);
                -ms-transform: translateY(-6px);
                -o-transform: translateY(-6px);
                transform: translateY(-6px);
            }
        }

        @-moz-keyframes slideTopDown {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
            }

            100% {
                -webkit-transform: translateY(-6px);
                -moz-transform: translateY(-6px);
                -ms-transform: translateY(-6px);
                -o-transform: translateY(-6px);
                transform: translateY(-6px);
            }
        }

        @-ms-keyframes slideTopDown {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
            }

            100% {
                -webkit-transform: translateY(-6px);
                -moz-transform: translateY(-6px);
                -ms-transform: translateY(-6px);
                -o-transform: translateY(-6px);
                transform: translateY(-6px);
            }
        }

        @-o-keyframes slideTopDown {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
            }

            100% {
                -webkit-transform: translateY(-6px);
                -moz-transform: translateY(-6px);
                -ms-transform: translateY(-6px);
                -o-transform: translateY(-6px);
                transform: translateY(-6px);
            }
        }

        @keyframes slideTopDown {
            0% {
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
            }

            100% {
                -webkit-transform: translateY(-6px);
                -moz-transform: translateY(-6px);
                -ms-transform: translateY(-6px);
                -o-transform: translateY(-6px);
                transform: translateY(-6px);
            }
        }

        /*----------------------------
      Header & Navbar
-----------------------------*/
        .header {
            position: relative;
            z-index: 1010;
        }

        /* Navbar */
        .navbar {
            padding: 0;
            height: 100px;
            max-height: 100px;
            background-color: #ffffff;
            border-bottom: 1px solid #ededed;
            /*  dropdown-menu  */
        }

        .navbar>.container,
        .navbar>.container-fluid {
            position: relative;
            height: 100px;
        }

        .navbar .navbar-brand {
            padding: 0;
            margin: 0;
            line-height: 100px;
        }

        .navbar .logo-light {
            display: none;
        }

        .navbar .navbar-toggler {
            padding: 0;
            border: none;
            border-radius: 0;
            width: 23px;
            position: relative;
        }

        .navbar .navbar-toggler .menu-lines {
            display: inline-block;
        }

        .navbar .navbar-toggler .menu-lines:before,
        .navbar .navbar-toggler .menu-lines:after {
            content: "";
            position: absolute;
            top: 5px;
            left: 0;
            width: 23px;
            height: 2px;
            display: inline-block;
            background-color: #333333;
            -webkit-transition: 0.3s ease;
            -moz-transition: 0.3s ease;
            -ms-transition: 0.3s ease;
            -o-transition: 0.3s ease;
            transition: 0.3s ease;
        }

        .navbar .navbar-toggler .menu-lines:after {
            top: 10px;
        }

        .navbar .navbar-toggler .menu-lines span {
            position: absolute;
            top: 0;
            left: 0;
            width: 23px;
            height: 2px;
            background-color: #333333;
        }

        .navbar .navbar-toggler.actived .menu-lines>span {
            opacity: 0;
        }

        .navbar .navbar-toggler.actived .menu-lines:before {
            top: 0;
            -webkit-transform: rotate(-45deg);
            -moz-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            -o-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        .navbar .navbar-toggler.actived .menu-lines:after {
            top: 0;
            -webkit-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .navbar .nav__item {
            position: relative;
            margin-right: 30px;
        }

        .navbar .nav__item:last-child {
            margin-right: 0;
        }

        .navbar .nav__item .nav__item-link {
            font-size: 15px;
            font-weight: 700;
            text-transform: capitalize;
            display: block;
            position: relative;
            color: #1b1a1a;
            line-height: 100px;
            letter-spacing: 0.4px;
        }

        .navbar .nav__item .nav__item-link:before {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 2px;
            background-color: #ff5e14;
            -webkit-transform: scale3d(0, 1, 1);
            -moz-transform: scale3d(0, 1, 1);
            -ms-transform: scale3d(0, 1, 1);
            -o-transform: scale3d(0, 1, 1);
            transform: scale3d(0, 1, 1);
            -webkit-transform-origin: 100% 50%;
            -moz-transform-origin: 100% 50%;
            -ms-transform-origin: 100% 50%;
            -o-transform-origin: 100% 50%;
            transform-origin: 100% 50%;
            -webkit-transition: transform 2s cubic-bezier(0.2, 1, 0.3, 1);
            -moz-transition: transform 2s cubic-bezier(0.2, 1, 0.3, 1);
            -ms-transition: transform 2s cubic-bezier(0.2, 1, 0.3, 1);
            -o-transition: transform 2s cubic-bezier(0.2, 1, 0.3, 1);
            transition: transform 2s cubic-bezier(0.2, 1, 0.3, 1);
        }

        .navbar .nav__item .nav__item-link.active:before,
        .navbar .nav__item .nav__item-link:hover:before {
            -webkit-transform: scale3d(1, 1, 1);
            -moz-transform: scale3d(1, 1, 1);
            -ms-transform: scale3d(1, 1, 1);
            -o-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
            -webkit-transform-origin: 0 50%;
            -moz-transform-origin: 0 50%;
            -ms-transform-origin: 0 50%;
            -o-transform-origin: 0 50%;
            transform-origin: 0 50%;
        }

        .navbar .dropdown-toggle:after {
            content: "";
            font-family: fontAwesome;
            border: none;
            vertical-align: middle;
            margin-left: 0;
            position: absolute;
            top: 50%;
            right: 0;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .navbar .dropdown-menu {
            border-radius: 0;
            border: none;
            margin: 0;
            background-color: #ffffff;
        }

        .navbar .dropdown-menu .nav__item {
            padding: 0 40px;
            margin-right: 0;
        }

        .navbar .dropdown-menu .nav__item .nav__item-link {
            color: #9b9b9b;
            text-transform: capitalize;
            font-weight: 400;
            line-height: 33px !important;
            white-space: nowrap;
            position: relative;
            padding-left: 20px;
            -webkit-transition: all 0.7s ease;
            -moz-transition: all 0.7s ease;
            -ms-transition: all 0.7s ease;
            -o-transition: all 0.7s ease;
            transition: all 0.7s ease;
        }

        .navbar .dropdown-menu .nav__item .nav__item-link:after {
            font-family: "icomoon";
            content: "";
            position: absolute;
            top: 0;
            left: 0px;
            line-height: 33px;
            transform: none;
            transition-delay: 0.5s;
            color: #ff5e14;
            font-size: 10px;
            -webkit-transition: all 0.7s ease;
            -moz-transition: all 0.7s ease;
            -ms-transition: all 0.7s ease;
            -o-transition: all 0.7s ease;
            transition: all 0.7s ease;
        }

        .navbar .dropdown-menu .nav__item .nav__item-link:hover {
            color: #ff5e14;
        }

        .navbar .dropdown-menu .dropdown-toggle:after {
            right: 0;
        }

        /* header topbar */
        .header__topbar .contact__list {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .header__topbar .contact__list li {
            font-size: 13px;
            margin-right: 25px;
            display: flex;
            align-items: center;
        }

        .header__topbar .contact__list li i {
            font-size: 15px;
            margin-right: 8px;
        }

        .header__topbar .contact__list li:last-child {
            margin-right: 0;
        }

        .header__topbar .header__topbar-links {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-end;
        }

        .header__topbar .header__topbar-links li {
            line-height: 47px;
        }

        .header__topbar .header__topbar-links li a {
            display: block;
            color: #ffffff;
            position: relative;
            padding-right: 15px;
            margin-right: 15px;
            font-size: 13px;
        }

        .header__topbar .header__topbar-links li a:after {
            content: "-";
            position: absolute;
            right: 0;
            color: #ffffff;
        }

        .header__topbar .header__topbar-links li a:hover {
            color: #ff5e14;
        }

        .header__topbar .header__topbar-links li:last-child a {
            padding-right: 0;
            margin-right: 0;
        }

        .header__topbar .header__topbar-links li:last-child a:after {
            display: none;
        }

        /* navbar-transparent */
        .header-transparent .navbar {
            border-bottom: 1px solid rgba(255, 255, 255, 0.15);
            background-color: transparent;
        }

        .header-transparent .navbar .navbar-toggler .menu-lines:before,
        .header-transparent .navbar .navbar-toggler .menu-lines:after,
        .header-transparent .navbar .navbar-toggler .menu-lines span {
            background-color: #ffffff;
        }

        .header-transparent .logo-light {
            display: inline-block;
        }

        .header-transparent .logo-dark {
            display: none;
        }

        .header-transparent .module__btn,
        .header-transparent .nav__item .nav__item-link,
        .header-transparent .module__btn-request {
            color: #ffffff;
        }

        .header-transparent .module__btn-phone a {
            color: #ffffff;
        }

        /* navbar-white */
        .header-white .module__btn-phone a,
        .header-white .module__btn-phone .icon-phone {
            color: #222222;
        }

        /* navbar-full */
        .header-full .navbar,
        .header-full .navbar .nav__item .nav__item-link {
            line-height: 80px;
        }

        .header-full .navbar,
        .header-full .navbar>.container,
        .header-full .navbar>.container-fluid {
            height: 80px;
        }

        .header-full .module__btn-request {
            border-radius: 0;
            height: 60px;
            line-height: 60px;
            min-width: 170px;
            margin-top: -2px;
        }

        .header-full .module__btn-request:hover {
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0);
        }

        /* fixed-navbar */
        .fixed-navbar {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            width: 100%;
            z-index: 1040;
            border-bottom: 0 !important;
            height: 90px;
            max-height: 90px;
            background-color: #ffffff !important;
            box-shadow: 0 3px 4px rgba(0, 0, 0, 0.07);
            -webkit-animation: translateHeader 0.8s;
            -moz-animation: translateHeader 0.8s;
            -ms-animation: translateHeader 0.8s;
            -o-animation: translateHeader 0.8s;
            animation: translateHeader 0.8s;
        }

        .fixed-navbar>.container,
        .fixed-navbar>.container-fluid {
            position: relative;
            height: 90px;
        }

        .fixed-navbar .navbar-brand {
            line-height: 90px;
        }

        .fixed-navbar .header__top-right {
            display: none !important;
        }

        .fixed-navbar .nav__item .nav__item-link {
            color: #333333;
            line-height: 90px;
        }

        .fixed-navbar .logo-light {
            display: none;
        }

        .fixed-navbar .logo-dark {
            display: inline-block;
        }

        .fixed-navbar .navbar-nav {
            margin-top: 0;
        }

        .fixed-navbar .module__btn,
        .fixed-navbar .module__btn-phone a {
            color: #333333;
        }

        .header-full .fixed-navbar.navbar__bottom {
            background-color: #1b1a1a !important;
            height: 60px;
            max-height: 60px;
        }

        .header-full .fixed-navbar.navbar__bottom>.container,
        .header-full .fixed-navbar.navbar__bottom>.container-fluid {
            height: 60px;
        }

        .header-transparent .fixed-navbar .module__btn-request {
            color: #ff5e14;
        }

        .header-transparent .fixed-navbar .module__btn-request:hover {
            background-color: #ff5e14;
            border-color: #ff5e14;
            color: #ffffff;
        }

        /* navbar-modules */
        .navbar-modules .modules__btns-list li {
            margin-left: 20px;
        }

        .navbar-modules .modules__btns-list li:first-child {
            margin-left: 30px;
        }

        .module__btn {
            position: relative;
            color: #333333;
        }

        .module__btn:hover {
            color: #ff5e14;
        }

        .module__btn-request {
            width: 142px;
            min-width: 0;
            padding: 0;
            height: 45px;
            line-height: 41px;
            letter-spacing: 0;
            -webkit-transition: all 0.4s ease;
            -moz-transition: all 0.4s ease;
            -ms-transition: all 0.4s ease;
            -o-transition: all 0.4s ease;
            transition: all 0.4s ease;
        }

        .module__btn-request span {
            margin-right: 7px;
        }

        .module__btn-request:hover {
            -webkit-transform: translateY(-2px);
            -moz-transform: translateY(-2px);
            -ms-transform: translateY(-2px);
            -o-transform: translateY(-2px);
            transform: translateY(-2px);
        }

        .module__btn-phone i {
            font-size: 18px;
            margin-right: 7px;
            color: #ff5e14;
        }

        .module__btn-phone a {
            font-size: 30px;
            font-family: "Teko", sans-serif;
        }

        /* module-search  */
        .module__search-container {
            position: fixed;
            z-index: 2300;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            background-color: #fff;
            -webkit-transform: translateX(100%);
            -moz-transform: translateX(100%);
            -ms-transform: translateX(100%);
            -o-transform: translateX(100%);
            transform: translateX(100%);
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
        }

        .module__search-container .close-search {
            position: absolute;
            top: 50px;
            left: 50%;
            width: 50px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            font-size: 20px;
            font-weight: 400;
            background-color: #ff5e14;
            color: #ffffff;
            cursor: pointer;
            border-radius: 50%;
            opacity: 0;
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            -webkit-transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            -o-transform: translateX(-50%);
            transform: translateX(-50%);
            transition-delay: 0.9s;
        }

        .module__search-container .close-search:after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 50px;
            height: 50px;
            z-index: -1;
            opacity: 0;
            border-radius: 50%;
            background-color: #1b1a1a;
            -webkit-transform: scale(0.8);
            -moz-transform: scale(0.8);
            -ms-transform: scale(0.8);
            -o-transform: scale(0.8);
            transform: scale(0.8);
            -webkit-transition: all 0.3s linear;
            -moz-transition: all 0.3s linear;
            -ms-transition: all 0.3s linear;
            -o-transition: all 0.3s linear;
            transition: all 0.3s linear;
        }

        .module__search-container .close-search:hover:after {
            opacity: 1;
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1);
        }

        .module__search-container .module__search-form {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            width: 100%;
            max-width: 770px;
            margin: -40px auto 0;
            -webkit-transform: translateY(-50%) scaleX(0);
            -moz-transform: translateY(-50%) scaleX(0);
            -ms-transform: translateY(-50%) scaleX(0);
            -o-transform: translateY(-50%) scaleX(0);
            transform: translateY(-50%) scaleX(0);
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            -webkit-transition-delay: 0.5s;
            -moz-transition-delay: 0.5s;
            -ms-transition-delay: 0.5s;
            -o-transition-delay: 0.5s;
            transition-delay: 0.5s;
        }

        .module__search-container .module__search-btn {
            position: absolute;
            top: 0;
            left: 27px;
            line-height: 75px;
            text-align: center;
            font-size: 28px;
            cursor: pointer;
            transition: 0.3s ease;
            color: #1b1a1a;
        }

        .module__search-container .module__search-btn:hover {
            color: #ff5e14;
        }

        .module__search-container .search__input {
            font-family: "Teko", sans-serif;
            color: #1b1a1a;
            font-size: 45px;
            font-weight: 300;
            z-index: 1;
            height: 75px;
            padding: 0 0 0 70px;
            background: #f4f4f4;
            border: none;
            width: 100%;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        .module__search-container.active {
            opacity: 1;
            -webkit-transform: translateX(0);
            -moz-transform: translateX(0);
            -ms-transform: translateX(0);
            -o-transform: translateX(0);
            transform: translateX(0);
        }

        .module__search-container.active .close-search {
            opacity: 1;
        }

        .module__search-container.active .module__search-form {
            -webkit-transform: translateY(-50%) scaleX(1);
            -moz-transform: translateY(-50%) scaleX(1);
            -ms-transform: translateY(-50%) scaleX(1);
            -o-transform: translateY(-50%) scaleX(1);
            transform: translateY(-50%) scaleX(1);
        }

        .module__search-container.inActive {
            opacity: 0;
            transition-delay: 0.5s;
            -webkit-transform: translateX(100%);
            -moz-transform: translateX(100%);
            -ms-transform: translateX(100%);
            -o-transform: translateX(100%);
            transform: translateX(100%);
        }

        .module__search-container.inActive .module__search-form {
            transition-delay: 0ms;
            -webkit-transform: translateY(-50%) scaleX(0);
            -moz-transform: translateY(-50%) scaleX(0);
            -ms-transform: translateY(-50%) scaleX(0);
            -o-transform: translateY(-50%) scaleX(0);
            transform: translateY(-50%) scaleX(0);
        }

        /* Large Size Screens */
        @media only screen and (min-width: 992px) and (max-width: 1200px) {
            .navbar .nav__item {
                margin-right: 15px;
            }

            .module__btn-request {
                width: 130px;
                font-size: 12px;
            }

            .navbar .logo-light {
                max-width: 140px;
            }

            .navbar-modules .modules__btns-list li:first-child {
                margin-left: 20px;
            }
        }

        /* Mobile and Tablets */
        @media only screen and (max-width: 991px) {
            .navbar .navbar-toggler {
                position: absolute;
                right: 15px;
                height: 13px;
            }

            .navbar .collapse:not(.show) {
                display: block;
            }

            .navbar .navbar-nav {
                margin: 0 !important;
            }

            .navbar .nav__item {
                margin-right: 0;
            }

            .navbar .nav__item .nav__item-link {
                color: #222222;
                line-height: 35px !important;
                padding-left: 15px;
            }

            .navbar .nav__item .nav__item-link:hover {
                color: #ff5e14;
            }

            .navbar .nav__item .nav__item-link:before {
                display: none;
            }

            .navbar .navbar-collapse {
                background-color: white;
                box-shadow: 0 3px 4px rgba(0, 0, 0, 0.07);
                z-index: 50;
                padding: 15px 0;
                position: absolute;
                left: 0;
                width: 100%;
                top: 100%;
                visibility: hidden;
                opacity: 0;
                -webkit-transition: 0.3s ease;
                -moz-transition: 0.3s ease;
                -ms-transition: 0.3s ease;
                -o-transition: 0.3s ease;
                transition: 0.3s ease;
                -webkit-transform: translateY(30px);
                -moz-transform: translateY(30px);
                -ms-transform: translateY(30px);
                -o-transform: translateY(30px);
                transform: translateY(30px);
            }

            .navbar .navbar-collapse .navbar-modules {
                padding: 0 15px;
            }

            .navbar .menu-opened.navbar-collapse {
                opacity: 1;
                visibility: visible;
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
            }

            .navbar i[data-toggle=dropdown] {
                position: absolute;
                top: 7px;
                right: 15px;
                width: 50%;
                text-align: right;
                z-index: 2;
            }

            .navbar .dropdown-toggle:after {
                display: none;
            }

            .navbar .nav__item.opened>i[data-toggle=dropdown]:before,
            .navbar .nav__item.show>i[data-toggle=dropdown]:before {
                content: "";
            }

            .navbar .dropdown-menu {
                background-color: white;
            }

            .navbar .dropdown-menu .nav__item {
                padding: 0 15px 0 30px;
            }

            .navbar .dropdown-menu .nav__item .nav__item-link {
                padding-left: 0;
                border-bottom: none;
            }

            .navbar .dropdown-menu .dropdown-menu-col .nav__item {
                padding: 0;
            }

            .navbar .dropdown-menu-col h6 {
                font-size: 13px;
                margin: 10px 0 5px;
            }

            .navbar .nav__item.dropdown-submenu>.dropdown-menu.show {
                padding-left: 10px;
            }

            .navbar .dropdown-submenu .dropdown-menu .nav__item {
                padding: 0 0 0 15px;
            }

            .navbar .navbar-nav .dropdown-menu.show {
                padding: 0;
            }

            .navbar .mega-dropdown-menu .container {
                max-width: none;
            }

            .navbar .mega-dropdown-menu>.nav__item {
                padding: 0 10px;
            }

            .navbar .mega-dropdown-menu .nav__item {
                padding: 0;
            }

            .fixed-navbar {
                position: static;
                animation: none;
            }

            .header-transparent+.page-title {
                margin-top: 0;
            }

            .header-full .navbar {
                line-height: 80px;
            }

            .header .navbar,
            .header-transparent .navbar {
                background-color: #ffffff;
            }

            .header .logo-dark,
            .header-transparent .logo-dark {
                display: inline-block;
            }

            .header .logo-light,
            .header-transparent .logo-light {
                display: none;
            }

            .header .module__btn,
            .header-transparent .module__btn {
                color: #333333;
                margin: 0 60px 0 0;
            }

            .header .navbar .navbar-toggler .menu-lines:before,
            .header .navbar .navbar-toggler .menu-lines:after,
            .header .navbar .navbar-toggler .menu-lines span,
            .header-transparent .navbar .navbar-toggler .menu-lines:before,
            .header-transparent .navbar .navbar-toggler .menu-lines:after,
            .header-transparent .navbar .navbar-toggler .menu-lines span {
                background-color: #333333;
            }

            .header .navbar-expand-lg>.container,
            .header .navbar-expand-lg>.container-fluid,
            .header-transparent .navbar-expand-lg>.container,
            .header-transparent .navbar-expand-lg>.container-fluid {
                width: 100%;
                max-width: none;
            }

            .header .navbar,
            .header .navbar>.container,
            .header .navbar>.container-fluid,
            .header-transparent .navbar,
            .header-transparent .navbar>.container,
            .header-transparent .navbar>.container-fluid {
                height: 80px;
            }

            .header .header-full .navbar,
            .header .header-full .navbar .navbar-brand,
            .header .navbar-brand,
            .header-transparent .header-full .navbar,
            .header-transparent .header-full .navbar .navbar-brand,
            .header-transparent .navbar-brand {
                margin-left: 15px;
                line-height: 80px !important;
            }

            .header .header-full .navbar,
            .header .header-full .navbar .navbar-brand,
            .header-transparent .header-full .navbar,
            .header-transparent .header-full .navbar .navbar-brand {
                line-height: 80px;
            }

            .header__topbar>.container {
                max-width: none;
            }

            .navbar__bottom {
                display: flex;
                flex-wrap: wrap;
            }
        }

        /* Medium and large Screens */
        @media only screen and (min-width: 992px) {
            .navbar .dropdown-menu {
                width: auto;
                min-width: 235px;
                padding: 25px 0 23px;
                border-radius: 0 0 4px 4px;
                box-shadow: 0px 3px 63px 0px rgba(40, 40, 40, 0.11);
            }

            .navbar .dropdown-menu .nav__item .nav__item-link:before {
                display: none;
            }

            .navbar .dropdown-menu.wide-dropdown-menu {
                min-width: 550px;
                padding: 0;
                overflow: hidden;
            }

            .navbar .dropdown-menu.wide-dropdown-menu>.nav__item {
                padding: 0;
            }

            .navbar .dropdown-menu.wide-dropdown-menu>.nav__item:before {
                display: none;
            }

            .navbar .dropdown-menu.wide-dropdown-menu h6 {
                font-size: 22px;
                font-weight: 500;
                margin: 0 0 8px 40px;
            }

            .navbar .dropdown-menu.wide-dropdown-menu .dropdown-menu-col {
                padding: 40px 0 27px;
            }

            .navbar .dropdown-menu.wide-dropdown-menu .dropdown-menu-col:first-child:before {
                content: "";
                position: absolute;
                top: 0;
                right: -2px;
                width: 2px;
                height: 100%;
                background-color: #eaeaea;
            }

            .navbar .nav__item.with-dropdown>.dropdown-menu,
            .navbar .nav__item.dropdown-submenu>.mega-menu,
            .navbar .nav__item.with-dropdown>.mega-menu,
            .navbar .nav__item.with-dropdown>.dropdown-menu>.nav__item.dropdown-submenu>.dropdown-menu {
                display: block;
                position: absolute;
                left: 0;
                right: auto;
                z-index: 1050;
                opacity: 0;
                visibility: hidden;
                -webkit-transition: all 0.5s ease;
                -moz-transition: all 0.5s ease;
                -ms-transition: all 0.5s ease;
                -o-transition: all 0.5s ease;
                transition: all 0.5s ease;
                -webkit-transform: translateY(10px);
                -moz-transform: translateY(10px);
                -ms-transform: translateY(10px);
                -o-transform: translateY(10px);
                transform: translateY(10px);
            }

            .navbar .nav__item.with-dropdown>.dropdown-menu>.nav__item.dropdown-submenu>.dropdown-menu,
            .navbar .nav__item.dropdown-submenu>.dropdown-menu>.nav__item.with-dropdown>.dropdown-menu {
                top: 0;
                left: 100%;
            }

            .navbar .nav__item.with-dropdown:hover>.dropdown-menu,
            .navbar .nav__item.dropdown-submenu:hover>.mega-menu,
            .navbar .nav__item.with-dropdown:hover>.mega-menu,
            .navbar .nav__item.with-dropdown>.dropdown-menu>.nav__item.dropdown-submenu:hover>.dropdown-menu {
                opacity: 1;
                visibility: visible;
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
            }

            .navbar .nav__item.with-dropdown.mega-dropdown {
                position: static;
            }

            .navbar .nav__item.with-dropdown .mega-dropdown-menu {
                width: 100%;
            }

            .navbar .dropdown-menu.mega-dropdown-menu .nav__item {
                padding: 0;
            }

            .navbar .dropdown-menu.mega-dropdown-menu .nav__item .nav__item-link {
                overflow: hidden;
                -webkit-transition: all 0.4s ease;
                -moz-transition: all 0.4s ease;
                -ms-transition: all 0.4s ease;
                -o-transition: all 0.4s ease;
                transition: all 0.4s ease;
            }

            .navbar .dropdown-menu.mega-dropdown-menu .nav__item .nav__item-link:after {
                font-family: "FontAwesome";
                content: "";
                position: absolute;
                top: auto;
                left: -7px;
                font-size: 7px;
                -webkit-transition: all 0.4s ease;
                -moz-transition: all 0.4s ease;
                -ms-transition: all 0.4s ease;
                -o-transition: all 0.4s ease;
                transition: all 0.4s ease;
                opacity: 0;
                color: #ff5e14;
            }

            .navbar .dropdown-menu.mega-dropdown-menu .nav__item .nav__item-link:hover {
                padding-left: 15px;
            }

            .navbar .dropdown-menu.mega-dropdown-menu .nav__item .nav__item-link:hover:after {
                opacity: 1;
                left: 4px;
            }

            .navbar-nav>.nav__item>.dropdown-toggle:after {
                display: none;
            }

            .nav__item i[data-toggle=dropdown] {
                display: none;
            }

            .header-full .navbar,
            .header-full .navbar>.container,
            .header-full .navbar>.container-fluid {
                height: auto;
            }

            .header-full .navbar {
                display: block;
                line-height: 60px;
            }

            .header-full .navbar .nav__item .nav__item-link {
                line-height: 60px;
            }

            .header-full .nav__item .nav__item-link {
                color: #ffffff;
            }

            .header-full .nav__item .nav__item-link:before {
                background-color: #ffffff;
            }

            .header-full .header__topbar .contact__list li {
                line-height: 1;
                padding-right: 30px;
                margin-right: 30px;
                position: relative;
            }

            .header-full .header__topbar .contact__list li:after {
                content: "";
                position: absolute;
                right: 0;
                width: 1px;
                height: 100%;
                background-color: #eaeaea;
            }

            .header-full .header__topbar .contact__list li:last-child {
                margin-right: 0;
            }

            .header-full .header__topbar .contact__list li:last-child:after {
                display: none;
            }

            .header-full .header__topbar .contact__list li>i {
                font-size: 16px;
                margin-right: 14px;
            }

            .header-full .header__topbar .contact__list li strong,
            .header-full .header__topbar .contact__list li a {
                display: block;
                font-size: 14px;
                margin-top: 8px;
                font-weight: 700;
                color: #1b1a1a;
            }

            .header-full .header__topbar .social__icons li a {
                background-color: #1b1a1a;
                color: #ffffff;
                width: 30px;
                height: 30px;
                line-height: 30px;
                text-align: center;
                border-radius: 50%;
            }

            .header-full .header__topbar .social__icons li a:hover {
                background-color: #ff5e14;
            }

            .header-full .navbar__bottom {
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                flex: 1;
                background-color: #1b1a1a;
            }

            .header-full .navbar__bottom>.container {
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
            }
        }

        /* Mobile Phones and tablets */
        @media only screen and (min-width: 320px) and (max-width: 767px) {
            .dropdown-menu.mega-dropdown-menu>.nav__item {
                padding: 0 15px;
            }

            .dropdown-menu.mega-dropdown-menu .nav__item:last-child>.nav__item-link {
                border-bottom: 1px solid #f2f2f2;
            }

            .dropdown-menu.mega-dropdown-menu [class^=col-]:last-child .nav__item:last-child>.nav__item-link {
                border-bottom: none;
            }
        }

        /* Extra Small Devices */
        @media only screen and (min-width: 320px) and (max-width: 575px) {
            .module__search-container .module__search-form {
                max-width: 90%;
            }

            .module__search-container .module__search-btn {
                left: 15px;
                font-size: 16px;
                line-height: 50px;
            }

            .module__search-container .search__input {
                font-size: 20px;
                padding: 0 0 0 40px;
                height: 50px;
            }
        }

        @media only screen and (max-width: 450px) {
            .navbar-brand img {
                max-width: 110px;
            }

            .header-full .module__search-form .search__input {
                max-width: 150px;
            }

            .navbar-modules .modules__btns-list li {
                margin-left: 10px;
            }
        }

        @media only screen and (max-width: 360px) {
            .navbar-brand img {
                max-width: 100px;
            }

            .header-full .module__search-form .search__input {
                max-width: 110px;
            }
        }

        /* Header Animation */
        @-webkit-keyframes translateHeader {
            0% {
                opacity: 0;
                -webkit-transform: translateY(-100%);
                -moz-transform: translateY(-100%);
                -ms-transform: translateY(-100%);
                -o-transform: translateY(-100%);
                transform: translateY(-100%);
            }

            100% {
                opacity: 1;
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
            }
        }

        @-moz-keyframes translateHeader {
            0% {
                opacity: 0;
                -webkit-transform: translateY(-100%);
                -moz-transform: translateY(-100%);
                -ms-transform: translateY(-100%);
                -o-transform: translateY(-100%);
                transform: translateY(-100%);
            }

            100% {
                opacity: 1;
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
            }
        }

        @-ms-keyframes translateHeader {
            0% {
                opacity: 0;
                -webkit-transform: translateY(-100%);
                -moz-transform: translateY(-100%);
                -ms-transform: translateY(-100%);
                -o-transform: translateY(-100%);
                transform: translateY(-100%);
            }

            100% {
                opacity: 1;
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
            }
        }

        @-o-keyframes translateHeader {
            0% {
                opacity: 0;
                -webkit-transform: translateY(-100%);
                -moz-transform: translateY(-100%);
                -ms-transform: translateY(-100%);
                -o-transform: translateY(-100%);
                transform: translateY(-100%);
            }

            100% {
                opacity: 1;
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
            }
        }

        @keyframes translateHeader {
            0% {
                opacity: 0;
                -webkit-transform: translateY(-100%);
                -moz-transform: translateY(-100%);
                -ms-transform: translateY(-100%);
                -o-transform: translateY(-100%);
                transform: translateY(-100%);
            }

            100% {
                opacity: 1;
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
                transform: translateY(0);
            }
        }

        /*----------------------
    Accordions
------------------------*/
        .accordion-item {
            border: 1px solid #ededed;
            background-color: #ffffff;
            border-radius: 3px;
            padding: 25px 30px;
            margin-bottom: 27px;
        }

        .accordion-item .accordion__item-title {
            font-family: "Teko", sans-serif;
            color: #222222;
            font-weight: 500;
            font-size: 22px;
            line-height: 1;
            cursor: pointer;
            display: block;
            position: relative;
            padding-right: 25px;
        }

        .accordion-item .accordion__item-title:after {
            position: absolute;
            right: 0;
            top: 0;
            content: "";
            font-family: fontawesome;
            background-color: transparent;
            color: #1b1a1a;
            font-size: 10px;
            font-weight: 400;
            text-align: center;
            width: 20px;
            height: 20px;
            line-height: 20px;
            border-radius: 3px;
        }

        .accordion-item.opened {
            border-color: #ff5e14;
        }

        .accordion-item.opened .accordion__item-title {
            color: #ff5e14;
        }

        .accordion-item.opened .accordion__item-title:after {
            background-color: #ff5e14;
            color: #ffffff;
            content: "";
        }

        .accordion-item .accordion__item-body {
            padding-top: 25px;
        }

        .accordion-item .accordion__item-body p {
            margin-bottom: 0;
        }

        /* Mobile Phones and tablets */
        @media only screen and (min-width: 320px) and (max-width: 767px) {
            .accordion-item {
                padding: 15px 20px;
            }
        }

        /*----------------------
     Dividers
------------------------*/
        .divider__line {
            position: relative;
            height: 2px;
        }

        .divider__line:after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 30px;
            height: 2px;
            background-color: #eaeaea;
        }

        .divider__line.divider__center:after {
            left: 50%;
            transform: translateX(-50%);
        }

        .divider__line.divider__sm:after {
            width: 30px;
        }

        .divider__line.divider__lg:after {
            width: 70px;
        }

        .divider__theme:after {
            background-color: #ff5e14;
        }

        .divider__white:after {
            background-color: #ffffff;
        }

        /*-------------------------
    Footer
--------------------------*/
        .footer {
            background-color: #161616;
        }

        .footer-top {
            padding-top: 110px;
            padding-bottom: 40px;
        }

        .footer__widget {
            margin-bottom: 30px;
        }

        .footer__widget-title {
            color: white;
            font-size: 22px;
            text-transform: capitalize;
            line-height: 1;
            margin-bottom: 24px;
        }

        .footer__widget-about p {
            margin-bottom: 20px;
        }

        .footer__contact-phone {
            line-height: 1;
        }

        .footer__contact-phone i {
            color: #ff5e14;
            font-size: 18px;
            margin-right: 8px;
        }

        .footer__contact-phone a {
            font-family: "Teko", sans-serif;
            font-size: 35px;
            font-weight: 300;
            color: #ff5e14;
            line-height: 1;
        }

        .footer__widget-newsletter .footer__widget-content {
            background-color: #121212;
            border-radius: 4px;
            padding: 40px;
        }

        .footer__widget-newsletter .footer__widget-content p {
            color: #f4f4f4;
            font-weight: 700;
            margin-bottom: 21px;
        }

        .widget__newsletter-form {
            position: relative;
        }

        .widget__newsletter-form .form-control {
            font-size: 13px;
            background-color: transparent;
            border: 2px solid #2f2e2e;
        }

        .widget__newsletter-form .form-control:focus {
            background-color: transparent;
            border-color: #ff5e14;
        }

        .widget__newsletter-form .btn {
            min-width: 30px;
            width: 30px;
            height: 30px;
            line-height: 26px;
            border-radius: 50%;
            padding: 0;
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .footer__widget-nav li a {
            display: block;
            position: relative;
            color: #9b9b9b;
            font-size: 14px;
            line-height: 33px;
            padding-left: 17px;
        }

        .footer__widget-nav li a:after {
            font-family: "icomoon";
            content: "";
            position: absolute;
            top: 0;
            left: 0px;
            line-height: 33px;
            color: #ff5e14;
            font-size: 10px;
        }

        .footer__widget-nav li a:hover {
            color: #ff5e14;
        }

        .footer__copyright-links li {
            margin-right: 27px;
            margin-bottom: 5px;
        }

        .footer__copyright-links li:last-child {
            margin-right: 0;
        }

        .footer__copyright-links li a {
            display: block;
            position: relative;
            color: #ffffff;
            font-size: 15px;
            font-weight: 700;
            line-height: 33px;
        }

        .footer__copyright-links li a:hover {
            color: #ff5e14;
        }

        .footer .social__icons {
            margin-top: 32px;
        }

        .footer .social__icons li {
            margin-right: 9px;
        }

        .footer .social__icons li a {
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            background-color: #ff5e14;
            color: #ffffff;
            font-size: 17px;
            border-radius: 50%;
        }

        .footer .social__icons li a:hover {
            background-color: #ffffff;
            color: #ff5e14;
        }

        .footer-bottom {
            padding-top: 40px;
            padding-bottom: 40px;
            border-top: 2px solid #212121;
        }

        /* Scroll Top Button */
        #scrollTopBtn {
            position: fixed;
            right: 10px;
            bottom: 30px;
            width: 45px;
            height: 45px;
            opacity: 0;
            z-index: 1000;
            font-size: 18px;
            border-radius: 50%;
            color: #ffffff;
            background-color: #ff5e14;
            overflow: hidden;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -ms-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        #scrollTopBtn:hover {
            background-color: #222222;
        }

        #scrollTopBtn.actived {
            right: 30px;
            opacity: 1;
        }

        /* Medium Size Screens */
        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .footer-top {
                padding-top: 70px;
                padding-bottom: 20px;
            }
        }

        /* Mobile Phones and tablets */
        @media only screen and (min-width: 320px) and (max-width: 767px) {
            .footer-top {
                padding-top: 50px;
                padding-bottom: 0;
            }

            .footer-top .footer__widget-title {
                margin-bottom: 20px;
            }

            .footer-bottom {
                padding-top: 25px;
                padding-bottom: 25px;
            }

            .footer__copyright-links {
                -ms-flex-pack: start !important;
                justify-content: flex-start !important;
                margin-top: 20px;
            }

            .footer__copyright-links li {
                margin-right: 10px;
            }

            .footer__copyright-links li a {
                font-size: 13px;
                font-weight: 400;
            }

            .footer .text-right {
                text-align: left !important;
            }
        }

        /* Extra Small Devices */
        @media only screen and (min-width: 320px) and (max-width: 575px) {
            .footer__widget-newsletter .footer__widget-content {
                padding: 20px;
            }

            #scrollTopBtn {
                bottom: 20px;
                width: 30px;
                height: 30px;
                font-size: 14px;
            }

            #scrollTopBtn.actived {
                right: 20px;
            }
        }

        @media only screen and (max-width: 400px) {

            .footer__widget-nav li a,
            .footer__copyright-links li a {
                font-size: 13px;
                line-height: 30px;
            }

            .footer__widget-newsletter .footer__widget-content {
                padding: 20px;
            }
        }

        /*-------------------------
    Call to Action
--------------------------*/
        .cta__banner {
            background-color: #ff5e14;
            max-width: 400px;
            padding: 50px 30px 40px 40px;
        }

        .cta__banner .cta__title {
            color: #ffffff;
            font-size: 30px;
            font-weight: 400;
        }

        .cta__banner .cta__desc {
            color: #f9f9f9;
            margin-bottom: 15px;
        }

        .cta__banner .btn:hover {
            color: #1b1a1a;
        }

        .cta__banner .cta__icon {
            line-height: 1;
            margin-bottom: 20px;
        }

        .cta__banner .cta__icon i {
            font-size: 60px;
            line-height: 1;
            color: #ffffff;
        }

        .cta__banner-white {
            background-color: #ffffff;
        }

        .cta__banner-white .cta__title {
            color: #1b1a1a;
            margin-bottom: 15px;
        }

        .cta__banner-white .cta__desc {
            color: #9b9b9b;
            font-size: 15px;
            font-weight: 700;
        }

        .cta__banner-white .btn__link i {
            width: 22px;
            height: 22px;
            line-height: 22px;
            background-color: #ff5e14;
            color: #ffffff;
            border-radius: 50%;
            display: inline-block;
        }

        /*----------------------
    Carousel
-----------------------*/
        [data-nav=false] .owl-nav,
        [data-dots=false] .owl-dots {
            display: none;
        }

        .owl-carousel .owl-item img {
            width: 100%;
        }

        .carousel-dots .owl-dots {
            margin-top: 10px;
            text-align: center;
        }

        .carousel-dots .owl-dots .owl-dot {
            margin: 0 5px;
        }

        .carousel-dots .owl-dots .owl-dot span {
            position: relative;
            height: 7px;
            width: 7px;
            border-radius: 50%;
            background-color: #b2b2b2;
            border: 2px solid #b2b2b2;
            margin: 0;
            display: inline-block;
        }

        .carousel-dots .owl-dots .owl-dot.active span {
            width: 14px;
            height: 14px;
            background-color: transparent;
            border-color: #1b1a1a;
            transform: translateY(3px);
        }

        .carousel-dots .owl-dots .owl-dot.active span:before {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            width: 4px;
            height: 4px;
            border-radius: 50%;
            background-color: #1b1a1a;
            transform: translate(-50%, -50%);
        }

        .carousel-dots-white .owl-dots .owl-dot span {
            background-color: #ffffff;
            border-color: #ffffff;
        }

        .carousel-dots-white .owl-dots .owl-dot.active span {
            border-color: #ffffff;
        }

        .carousel-dots-white .owl-dots .owl-dot.active span:before {
            background-color: #ffffff;
        }

        .carousel-arrows .owl-nav .owl-prev,
        .carousel-arrows .owl-nav .owl-next {
            position: absolute;
            top: 50%;
            width: 50px;
            color: #333333;
            font-size: 0;
            font-weight: 400;
            text-align: center;
            background-color: transparent;
            cursor: pointer;
            padding: 0;
            border-radius: 0;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        .carousel-arrows .owl-nav .owl-prev:hover,
        .carousel-arrows .owl-nav .owl-next:hover {
            color: #ff5e14;
            background-color: transparent;
        }

        .carousel-arrows .owl-nav .owl-prev {
            left: 0;
        }

        .carousel-arrows .owl-nav .owl-prev:before {
            font-family: "icomoon";
            content: "";
            font-size: 55px;
        }

        .carousel-arrows .owl-nav .owl-next {
            right: 0;
        }

        .carousel-arrows .owl-nav .owl-next:before {
            font-family: "icomoon";
            content: "";
            font-size: 55px;
        }

        .carousel-arrows .owl-dots {
            position: absolute;
            bottom: 20px;
            width: 100%;
            line-height: 1;
        }

        /* Extra Small Devices */
        @media only screen and (min-width: 320px) and (max-width: 767px) {

            .carousel-arrows .owl-nav .owl-prev:before,
            .carousel-arrows .owl-nav .owl-next:before {
                font-size: 40px;
            }
        }

        /*------------------------
    Slider
--------------------------*/
        .header-transparent+.slider {
            margin-top: -100px;
        }

        .header-transparent+.slider .slide-item {
            padding-top: 100px;
        }

        .slider {
            padding: 0;
        }

        .slider .slide-item {
            height: 100vh;
        }

        .slider .slide__subtitle {
            display: block;
            font-family: "Roboto", sans-serif;
            font-size: 14px;
            line-height: 1;
            font-weight: 700;
            color: #ff5e14;
            margin-bottom: 18px;
        }

        .slider .slide__title {
            font-size: 105px;
            line-height: 95px;
            color: #ffffff;
            margin-bottom: 20px;
        }

        .slider .slide__desc {
            font-size: 17px;
            line-height: 26px;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 46px;
            max-width: 650px;
        }

        .slider .carousel-arrows .owl-nav .owl-prev {
            left: 50px;
        }

        .slider .carousel-arrows .owl-nav .owl-next {
            right: 50px;
        }

        .slider .carousel-arrows .owl-nav .owl-prev,
        .slider .carousel-arrows .owl-nav .owl-next {
            color: #ffffff;
            border: none;
            line-height: 46px;
            width: auto;
            opacity: 0;
            transition: opacity 0.5s ease, transform 0.4s ease;
            transform: scale(0.8);
        }

        .slider .carousel-arrows .owl-nav .owl-prev:hover,
        .slider .carousel-arrows .owl-nav .owl-next:hover {
            color: #ff5e14;
        }

        .slider:hover .carousel-arrows .owl-nav .owl-prev,
        .slider:hover .carousel-arrows .owl-nav .owl-next {
            opacity: 1;
            transform: scale(1);
        }

        .slider .carousel-arrows .owl-dots {
            bottom: 30px;
            text-align: center;
        }

        .slider .carousel-dots .owl-dots .owl-dot span {
            border-color: #ffffff;
        }

        .slider .carousel-dots .owl-dots .owl-dot.active span:before {
            background-color: #ffffff;
        }

        .slider-layout2 .slide__title {
            font-size: 85px;
        }

        /* Large Size Screens */
        @media only screen and (min-width: 992px) and (max-width: 1200px) {
            .slider .slide__title {
                font-size: 65px;
                line-height: 75px;
            }

            .slider .carousel-arrows .owl-nav .owl-next {
                right: 10px;
            }

            .slider .carousel-arrows .owl-nav .owl-prev {
                left: 10px;
            }
        }

        /* Medium Size Screens */
        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .slider .slide__title {
                font-size: 50px;
                line-height: 60px;
                margin-bottom: 10px;
            }

            .slider .carousel-arrows .owl-nav .owl-next {
                right: 0;
            }

            .slider .carousel-arrows .owl-nav .owl-prev {
                left: 0;
            }
        }

        /* Mobile Phones and tablets */
        @media only screen and (min-width: 320px) and (max-width: 767px) {
            .header-transparent+.slider {
                margin-top: 0;
            }

            .header-transparent+.slider .slide-item {
                padding-top: 0;
            }

            .slider .slide-item {
                height: calc(100vh - 80px);
            }

            .header-transparent+.slider .slide__content {
                padding-top: 0;
            }

            .slider .carousel-arrows .owl-nav .owl-prev,
            .slider .carousel-arrows .owl-nav .owl-next {
                width: 40px;
                height: 40px;
                line-height: 40px;
            }

            .slider .carousel-arrows .owl-nav .owl-next:before,
            .slider .carousel-arrows .owl-nav .owl-prev:before {
                font-size: 15px;
            }
        }

        /*  Small Screens and tablets  */
        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .slider .slide__title {
                font-size: 40px;
                line-height: 50px;
                margin-bottom: 10px;
            }

            .slider .carousel-arrows .owl-nav .owl-prev {
                left: 10px;
            }

            .slider .carousel-arrows .owl-nav .owl-next {
                right: 10px;
            }
        }

        /* Extra Small Devices */
        @media only screen and (min-width: 320px) and (max-width: 575px) {
            .slider .slide__subtitle {
                margin-bottom: 15px;
            }

            .slider .slide__title {
                font-size: 30px;
                line-height: 40px;
                margin-bottom: 10px;
            }

            .slider .slide__desc {
                font-size: 15px;
                font-weight: 400;
                margin-bottom: 20px;
            }

            .slider .btn {
                margin-bottom: 20px;
            }

            .slider .carousel-arrows .owl-nav .owl-prev,
            .slider .carousel-arrows .owl-nav .owl-next {
                display: none;
            }
        }

        /*--------------------------
      Video
--------------------------*/
        .video__btn {
            position: relative;
        }

        .video-banner {
            padding: 225px 0;
            border-radius: 5px;
        }

        .video-banner-layout2 {
            padding: 300px 0;
        }

        .popup-video {
            text-align: center;
            display: inline-block;
            position: relative;
        }

        .popup-video .video__player {
            font-size: 18px;
            width: 75px;
            height: 75px;
            line-height: 75px;
            border-radius: 50%;
            background-color: #ff5e14;
            color: #ffffff;
            position: relative;
            display: inline-block;
        }

        .popup-video .video__player-animation {
            position: absolute;
            display: block;
            width: 100%;
            height: 100%;
            opacity: 0.5;
            border: 2px solid #ffffff;
            border-radius: 50%;
            -webkit-animation: pulsing 3s linear 0s infinite;
            -moz-animation: pulsing 3s linear 0s infinite;
            -ms-animation: pulsing 3s linear 0s infinite;
            -o-animation: pulsing 3s linear 0s infinite;
            animation: pulsing 3s linear 0s infinite;
        }

        .popup-video .video__player-animation-2 {
            animation-delay: 1s;
        }

        .popup-video .video__player-animation-3 {
            animation-delay: 1.8s;
        }

        .popup-video .video__player-title {
            color: #1b1a1a;
            font-size: 13px;
            font-weight: 700;
            padding-top: 20px;
            margin-bottom: 0;
            line-height: 1;
            margin-left: 30px;
        }

        .popup-video:hover .video__player-animation {
            opacity: 0;
            animation-play-state: paused;
        }

        .video__btn-white .video__player {
            background-color: #ffffff;
            color: #1b1a1a;
        }

        /* Mobile Phones and tablets */
        @media only screen and (min-width: 320px) and (max-width: 767px) {
            .video-banner {
                padding: 125px 0;
            }

            .video-banner-layout2 {
                padding: 150px 0;
            }

            .popup-video .video__player {
                font-size: 18px;
                width: 50px;
                height: 50px;
                line-height: 50px;
            }
        }

        /* Extra Small Devices */
        @media only screen and (min-width: 320px) and (max-width: 575px) {
            .video-banner {
                padding: 100px 0;
            }

            .video-banner-layout2 {
                padding: 120px 0;
            }
        }

        /*-----------------------
    Features
------------------------*/
        .feature-numberd-item {
            position: relative;
            text-align: center;
            padding-top: 40px;
        }

        .feature-numberd-item .feature__numberd-item-icon {
            font-size: 60px;
            color: #ff5e14;
            line-height: 1;
            margin-bottom: 23px;
        }

        .feature-numberd-item:hover .feature__numberd-item-icon {
            -webkit-animation: slideTopDown 1s infinite alternate;
            -moz-animation: slideTopDown 1s infinite alternate;
            -ms-animation: slideTopDown 1s infinite alternate;
            -o-animation: slideTopDown 1s infinite alternate;
            animation: slideTopDown 1s infinite alternate;
        }

        .feature-numberd-item .feature__numberd-item-number {
            font-size: 160px;
            line-height: 1;
            color: #f5f5f5;
            margin-bottom: 0;
            z-index: -1;
            position: absolute;
            top: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            -o-transform: translateX(-50%);
            transform: translateX(-50%);
        }

        .feature-numberd-item .feature__numberd-item-title {
            font-size: 24px;
            line-height: 27px;
            margin-bottom: 15px;
        }

        .feature-item {
            position: relative;
            margin-bottom: 30px;
        }

        .feature-item .feature__img {
            margin-bottom: 24px;
        }

        .feature-item .feature__img img {
            border-radius: 3px;
            -webkit-transition: transform 0.3s ease;
            -moz-transition: transform 0.3s ease;
            -ms-transition: transform 0.3s ease;
            -o-transition: transform 0.3s ease;
            transition: transform 0.3s ease;
        }

        .feature-item .feature__subtitle {
            font-family: "Roboto", sans-serif;
            font-size: 14px;
            display: inline-block;
            margin-bottom: 6px;
        }

        .feature-item .feature__title {
            font-size: 18px;
            line-height: 25px;
            margin-bottom: 18px;
            -webkit-transition: color 0.3s ease;
            -moz-transition: color 0.3s ease;
            -ms-transition: color 0.3s ease;
            -o-transition: color 0.3s ease;
            transition: color 0.3s ease;
        }

        .feature-item .feature__desc {
            margin-bottom: 0;
        }

        .feature-item .feature__link {
            line-height: 1;
            display: block;
            margin-top: 5px;
        }

        .feature-item:hover .feature__img img {
            -webkit-transform: translateY(-4px);
            -moz-transform: translateY(-4px);
            -ms-transform: translateY(-4px);
            -o-transform: translateY(-4px);
            transform: translateY(-4px);
        }

        .feature-item:hover .feature__title {
            color: #ff5e14;
        }

        .features-layout2 .features-wrap {
            box-shadow: 0px 3px 63px 0px rgba(40, 40, 40, 0.11);
            border-radius: 5px;
            position: relative;
            z-index: 3;
            background-color: #ffffff;
        }

        .features-layout2 .feature-item {
            padding: 35px 25px;
            margin-bottom: 0;
            border-right: 2px solid #eaeaea;
        }

        .features-layout2 .feature-item:last-child {
            border-right: 0;
        }

        .features-layout2 .feature-item .feature__title {
            font-size: 24px;
        }

        .features-layout2 .title-box {
            margin-top: 45px;
        }

        .features-layout2 .title-box i {
            font-size: 55px;
        }

        .features-layout2 .title-box h4 {
            font-size: 28px;
            font-weight: 400;
        }

        .feature-list-item {
            padding: 27px 15px 22px 25px;
            border: 2px solid #e5e5e5;
            background-color: #ffffff;
            border-radius: 3px;
            -webkit-transition: all 0.6s linear;
            -moz-transition: all 0.6s linear;
            -ms-transition: all 0.6s linear;
            -o-transition: all 0.6s linear;
            transition: all 0.6s linear;
        }

        .feature-list-item .feature__content {
            position: relative;
            padding-left: 32px;
        }

        .feature-list-item .feature__content:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            font-family: "Fontawesome";
            content: "";
            color: #ff5e14;
            font-size: 18px;
        }

        .feature-list-item .feature__title {
            font-size: 19px;
            margin-bottom: 18px;
        }

        .feature-list-item:hover {
            background-color: #ff5e14;
            border-color: #ff5e14;
            box-shadow: 0px 1px 73px 0px rgba(40, 40, 40, 0.15);
        }

        .feature-list-item:hover .feature__title,
        .feature-list-item:hover .feature__desc,
        .feature-list-item:hover .feature__content:before {
            color: #ffffff;
            -webkit-transition: all 0.3s linear;
            -moz-transition: all 0.3s linear;
            -ms-transition: all 0.3s linear;
            -o-transition: all 0.3s linear;
            transition: all 0.3s linear;
        }

        @media only screen and (min-width: 992px) {
            .features-layout2 .features-wrap {
                margin-top: -100px;
            }
        }

        /* Medium Size Screens */
        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .feature-item .feature__img {
                margin-bottom: 20px;
            }

            .feature-item .feature__title {
                font-size: 16px;
                margin-bottom: 10px;
            }
        }

        /* Mobile Phones and tablets */
        @media only screen and (min-width: 320px) and (max-width: 767px) {
            .feature-item .feature__img {
                margin-bottom: 15px;
            }

            .feature-item .feature__title {
                margin-bottom: 10px;
            }

            .features-layout2 .feature-item {
                padding: 20px;
                border-right: 0;
                border-bottom: 2px solid #eaeaea;
            }

            .features-layout2 .feature-item:last-child {
                border-bottom: 0;
            }
        }

        /*-----------------------
     fancybox
------------------------*/
        .fancybox-item {
            position: relative;
            margin-bottom: 40px;
        }

        .fancybox-item .fancybox__icon {
            font-size: 52px;
            line-height: 1;
            color: #ff5e14;
            margin-bottom: 22px;
            -webkit-transition: transform 0.3s ease;
            -moz-transition: transform 0.3s ease;
            -ms-transition: transform 0.3s ease;
            -o-transition: transform 0.3s ease;
            transition: transform 0.3s ease;
        }

        .fancybox-item .fancybox__title {
            font-size: 24px;
            line-height: 27px;
            margin-bottom: 12px;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        .fancybox-item .fancybox__desc {
            font-size: 14px;
            line-height: 24px;
            margin-bottom: 0;
        }

        .fancybox-item:hover .fancybox__icon {
            -webkit-animation: slideTopDown 1s infinite alternate;
            -moz-animation: slideTopDown 1s infinite alternate;
            -ms-animation: slideTopDown 1s infinite alternate;
            -o-animation: slideTopDown 1s infinite alternate;
            animation: slideTopDown 1s infinite alternate;
        }

        .fancybox-item:hover .fancybox__title {
            color: #ff5e14;
        }

        .fancybox-white .fancybox-item .fancybox__icon,
        .fancybox-white .fancybox-item .fancybox__title,
        .fancybox-white .fancybox-item:hover .fancybox__title {
            color: #ffffff;
        }

        /* Medium Size Screens */
        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .fancybox-item .fancybox__title {
                margin-bottom: 12px;
            }
        }

        /* Mobile Phones and tablets */
        @media only screen and (min-width: 320px) and (max-width: 767px) {
            .fancybox-item {
                margin-bottom: 30px;
            }

            .fancybox-item .fancybox__icon {
                font-size: 40px;
                margin-bottom: 5px;
            }

            .fancybox-item .fancybox__title {
                font-size: 15px;
                margin-bottom: 5px !important;
            }
        }

        /*-----------------------
    portfolio
------------------------*/
        .portfolio-item {
            position: relative;
            margin-bottom: 50px;
        }

        .portfolio-item .portfolio__img {
            position: relative;
            overflow: hidden;
            border-radius: 4px;
        }

        .portfolio-item .portfolio__img:after {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.5;
            display: block;
            background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0), #1b1a1a 100%);
            background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0), #1b1a1a 100%);
            background-image: -ms-linear-gradient(top, rgba(0, 0, 0, 0), #1b1a1a 100%);
            background-image: -o-linear-gradient(top, rgba(0, 0, 0, 0), #1b1a1a 100%);
            background-image: linear-gradient(top, rgba(0, 0, 0, 0), #1b1a1a 100%);
            -webkit-transition: all 0.4s linear;
            -moz-transition: all 0.4s linear;
            -ms-transition: all 0.4s linear;
            -o-transition: all 0.4s linear;
            transition: all 0.4s linear;
        }

        .portfolio-item .portfolio__img img {
            width: 100%;
            max-width: 100%;
            -webkit-transition: all 0.6s linear;
            -moz-transition: all 0.6s linear;
            -ms-transition: all 0.6s linear;
            -o-transition: all 0.6s linear;
            transition: all 0.6s linear;
        }

        .portfolio-item:hover .portfolio__img img {
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -ms-transform: scale(1.1);
            -o-transform: scale(1.1);
            transform: scale(1.1);
        }

        .portfolio-item .portfolio__content {
            padding-top: 30px;
            border-radius: 0 5px 0 0;
            background-color: #ffffff;
            margin-top: -30px;
            position: relative;
            z-index: 2;
            margin-right: 28px;
        }

        .portfolio-item .portfolio__cat {
            line-height: 1;
            margin-bottom: 20px;
        }

        .portfolio-item .portfolio__cat a {
            position: relative;
            font-size: 14px;
            color: #ff5e14;
            padding-right: 7px;
        }

        .portfolio-item .portfolio__cat a:hover {
            color: #1b1a1a;
        }

        .portfolio-item .portfolio__cat a::after {
            content: ",";
            position: absolute;
            top: 2px;
            right: 2px;
        }

        .portfolio-item .portfolio__cat a:last-child:after {
            display: none;
        }

        .portfolio-item .portfolio__title {
            font-size: 26px;
            line-height: 28px;
            margin-bottom: 10px;
        }

        .portfolio-item .portfolio__title a {
            color: #1b1a1a;
        }

        .portfolio-item .portfolio__title a:hover {
            color: #ff5e14;
        }

        .portfolio-item .portfolio__desc {
            margin-bottom: 0;
        }

        .portfolio-item .btn__link {
            line-height: 1;
            margin-top: 23px;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
        }

        .portfolio-item .btn__link i {
            width: 22px;
            height: 22px;
            line-height: 22px;
            background-color: #222222;
            color: #ffffff;
            border-radius: 50%;
            -webkit-transition: all 0.5s linear;
            -moz-transition: all 0.5s linear;
            -ms-transition: all 0.5s linear;
            -o-transition: all 0.5s linear;
            transition: all 0.5s linear;
        }

        .portfolio-item:hover .btn__link {
            color: #ff5e14;
        }

        .portfolio-item:hover .btn__link i {
            background-color: #ff5e14;
        }

        .portfolio-item .divider__line {
            margin-bottom: 22px;
        }

        .portfolio-item .zoom__icon {
            position: absolute;
            top: 50%;
            left: 50%;
            display: block;
            width: 20px;
            height: 20px;
            opacity: 0;
            z-index: 2;
            -webkit-transform: scale(0);
            -moz-transform: scale(0);
            -ms-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0);
            -webkit-transition: all 0.4s linear;
            -moz-transition: all 0.4s linear;
            -ms-transition: all 0.4s linear;
            -o-transition: all 0.4s linear;
            transition: all 0.4s linear;
        }

        .portfolio-item .zoom__icon:before {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            width: 1px;
            height: 20px;
            background-color: #ffffff;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .portfolio-item .zoom__icon:after {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            width: 20px;
            height: 1px;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            background-color: #ffffff;
        }

        .portfolio-item:hover .zoom__icon {
            opacity: 1;
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1);
        }

        /* portfolio-carousel */
        .portfolio-carousel .portfolio-item {
            margin-bottom: 0;
        }

        .portfolio-carousel .portfolio-item .portfolio__content {
            margin: 0;
        }

        .portfolio-carousel .carousel-arrows .owl-nav .owl-prev,
        .portfolio-carousel .carousel-arrows .owl-nav .owl-next {
            top: 40%;
            width: 54px;
            height: 54px;
            border-radius: 50%;
            background-color: #ffffff;
            box-shadow: 0px 3px 53px 0px rgba(40, 40, 40, 0.05);
        }

        .portfolio-carousel .carousel-arrows .owl-nav .owl-prev:hover,
        .portfolio-carousel .carousel-arrows .owl-nav .owl-next:hover {
            background-color: #ff5e14;
            color: #ffffff;
        }

        .portfolio-carousel .carousel-arrows .owl-nav .owl-prev {
            left: -30px;
        }

        .portfolio-carousel .carousel-arrows .owl-nav .owl-prev:before {
            content: "";
            font-size: 13px;
        }

        .portfolio-carousel .carousel-arrows .owl-nav .owl-next {
            right: -30px;
        }

        .portfolio-carousel .carousel-arrows .owl-nav .owl-next:before {
            content: "";
            font-size: 13px;
        }

        .portfolio-carousel-layout2 .portfolio-item {
            box-shadow: 0 0 12px 0 rgba(40, 40, 40, 0.08);
            margin-bottom: 20px;
        }

        .portfolio-carousel-layout2 .portfolio-item .portfolio__content {
            margin: 0;
            padding: 40px 40px 20px;
        }

        .portfolio-carousel-layout2 .owl-stage-outer {
            margin: -15px;
            padding: 15px;
        }

        .portfolio-hidden>.portfolio-item {
            display: none;
        }

        /* Large Size Screens */
        @media only screen and (min-width: 992px) and (max-width: 1200px) {

            .portfolio-carousel .owl-nav .owl-prev,
            .portfolio-carousel .owl-nav .owl-next {
                left: -30px;
            }

            .portfolio-carousel .owl-nav .owl-prev:before,
            .portfolio-carousel .owl-nav .owl-next:before {
                font-size: 40px;
            }
        }

        /*  Small Screens and tablets  */
        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .portfolio-grid .container {
                max-width: none;
            }
        }

        /* Mobile Phones and tablets */
        @media only screen and (min-width: 320px) and (max-width: 767px) {
            .portfolio-item .portfolio__content {
                padding-top: 15px;
            }

            .portfolio-item .portfolio__title {
                margin-bottom: 10px;
            }

            .portfolio-carousel .carousel-arrows .owl-nav .owl-prev {
                left: 10px;
            }

            .portfolio-carousel .carousel-arrows .owl-nav .owl-next {
                right: 10px;
            }

            .portfolio-carousel-layout2 .portfolio-item .portfolio__content {
                padding: 20px 20px 10px;
            }
        }

        /* Extra Small Devices */
        @media only screen and (min-width: 320px) and (max-width: 575px) {
            .portfolio-item .portfolio__title {
                font-size: 18px;
                line-height: 22px;
            }
        }

        /*--------------------
     Team
---------------------*/
        .member {
            position: relative;
            margin-bottom: 60px;
        }

        .member .member__img {
            position: relative;
            overflow: hidden;
            border-radius: 4px;
        }

        .member .member__img img {
            width: 100%;
            -webkit-transition: all 0.8s ease;
            -moz-transition: all 0.8s ease;
            -ms-transition: all 0.8s ease;
            -o-transition: all 0.8s ease;
            transition: all 0.8s ease;
        }

        .member:hover .member__img img {
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -ms-transform: scale(1.1);
            -o-transform: scale(1.1);
            transform: scale(1.1);
        }

        .member .member__info {
            padding-top: 27px;
        }

        .member .member__info .member__name {
            font-size: 26px;
            line-height: 1;
            margin-bottom: 7px;
        }

        .member .member__info .member__desc {
            margin-bottom: 0;
        }

        .member .member__hover {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            opacity: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background-color: rgba(255, 94, 20, 0.95);
            -webkit-transition: all 0.5s linear;
            -moz-transition: all 0.5s linear;
            -ms-transition: all 0.5s linear;
            -o-transition: all 0.5s linear;
            transition: all 0.5s linear;
        }

        .member .member__content-inner {
            position: absolute;
            left: 0;
            bottom: 10px;
            width: 100%;
            opacity: 0;
            -webkit-transition: all 0.5s linear;
            -moz-transition: all 0.5s linear;
            -ms-transition: all 0.5s linear;
            -o-transition: all 0.5s linear;
            transition: all 0.5s linear;
        }

        .member .social__icons li {
            margin-right: 40px;
        }

        .member .social__icons li:last-child {
            margin-right: 0;
        }

        .member .social__icons li a {
            color: #ffffff;
            opacity: 0;
            -webkit-transition: all 0.3s linear;
            -moz-transition: all 0.3s linear;
            -ms-transition: all 0.3s linear;
            -o-transition: all 0.3s linear;
            transition: all 0.3s linear;
            -webkit-transition-delay: 0.6s;
            -moz-transition-delay: 0.6s;
            -ms-transition-delay: 0.6s;
            -o-transition-delay: 0.6s;
            transition-delay: 0.6s;
        }

        .member .social__icons li a:hover {
            color: #1b1a1a;
        }

        .member .social__icons li:nth-of-type(2) a {
            -webkit-transition-delay: 0.8s;
            -moz-transition-delay: 0.8s;
            -ms-transition-delay: 0.8s;
            -o-transition-delay: 0.8s;
            transition-delay: 0.8s;
        }

        .member .social__icons li:nth-of-type(3) a {
            -webkit-transition-delay: 1s;
            -moz-transition-delay: 1s;
            -ms-transition-delay: 1s;
            -o-transition-delay: 1s;
            transition-delay: 1s;
        }

        .member .social__icons li:nth-of-type(4) a {
            -webkit-transition-delay: 1.2s;
            -moz-transition-delay: 1.2s;
            -ms-transition-delay: 1.2s;
            -o-transition-delay: 1.2s;
            transition-delay: 1.2s;
        }

        .member:hover .member__hover {
            opacity: 1;
        }

        .member:hover .member__content-inner {
            bottom: 50px;
            opacity: 1;
        }

        .member:hover .social__icons li a {
            opacity: 1;
        }

        /* Mobile Phones and tablets */
        @media only screen and (min-width: 320px) and (max-width: 767px) {
            .member {
                max-width: 400px;
                margin: 0 auto 30px;
            }

            .member .member__info {
                padding-top: 15px;
            }

            .member .member__info .member__name {
                font-size: 17px;
                margin-bottom: 0;
            }
        }

        /*----------------------------
     Testimonial
------------------------------*/
        .testimonial-item {
            position: relative;
        }

        .testimonial-item .testimonial__desc {
            color: #333333;
            font-size: 22px;
            line-height: 39px;
            font-weight: 700;
            margin-bottom: 28px;
        }

        .testimonial__meta {
            position: relative;
            z-index: 2;
        }

        .testimonial__meta .testimonial__meta-title {
            color: #1b1a1a;
            font-size: 16px;
            font-weight: 700;
            line-height: 1;
            margin-bottom: 5px;
            display: block;
        }

        .testimonial__meta .testimonial__meta-desc {
            line-height: 25px;
            font-weight: 400;
            font-size: 12px;
            color: #616161;
            margin-bottom: 0;
            display: block;
        }

        .testimonial__thumb {
            width: 50px;
            height: 50px;
            overflow: hidden;
            border-radius: 50%;
            margin-right: 14px;
            display: inline-block;
            padding: 2px;
            border: 2px solid transparent;
        }

        .testimonial__thumb img {
            max-width: 100%;
            border-radius: 50%;
        }

        .testimonial-wrap-panel {
            padding: 80px 60px;
        }

        .testimonials .carousel-arrows .owl-nav .owl-prev,
        .testimonials .carousel-arrows .owl-nav .owl-next {
            top: 0;
            width: 54px;
            height: 54px;
            border-radius: 50%;
            background-color: transparent;
            border: 2px solid #eaeaea;
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0);
        }

        .testimonials .carousel-arrows .owl-nav .owl-prev:hover,
        .testimonials .carousel-arrows .owl-nav .owl-next:hover {
            background-color: #ff5e14;
            border-color: #ff5e14;
            color: #ffffff;
        }

        .testimonials .carousel-arrows .owl-nav .owl-prev {
            left: auto;
            right: 0;
        }

        .testimonials .carousel-arrows .owl-nav .owl-prev:before {
            content: "";
            font-size: 13px;
        }

        .testimonials .carousel-arrows .owl-nav .owl-next {
            right: 0;
            top: 80px;
        }

        .testimonials .carousel-arrows .owl-nav .owl-next:before {
            content: "";
            font-size: 13px;
        }

        .testimonials .owl-thumbs {
            display: flex;
            margin-top: 30px;
        }

        .testimonials .owl-thumb-item {
            display: flex;
            align-items: center;
            opacity: 0.5;
            margin-right: 50px;
            text-align: left;
        }

        .testimonials .owl-thumb-item:last-child {
            margin-right: 0;
        }

        .testimonials .owl-thumb-item.active {
            opacity: 1;
        }

        .testimonials .owl-thumb-item.active .testimonial__thumb {
            border-color: #ff5e14;
        }

        @media only screen and (min-width: 992px) {
            .testimonials-layout1 .testimonial__desc {
                padding-right: 150px;
            }
        }

        @media only screen and (max-width: 992px) {
            .testimonials-layout1 .testimonial__desc {
                padding-right: 50px;
            }
        }

        /* Medium Size Screens */
        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .testimonial-item .testimonial__desc {
                font-size: 18px;
                line-height: 28px;
            }
        }

        /* Mobile Phones and tablets */
        @media only screen and (min-width: 320px) and (max-width: 767px) {
            .testimonial-wrap-panel {
                padding: 30px 20px;
            }

            .testimonial-wrap-panel .testimonial-item {
                padding: 0;
            }

            .testimonial-item .testimonial__desc {
                font-size: 15px;
                font-weight: 400;
                line-height: 25px;
            }

            .testimonials .owl-thumb-item {
                margin-right: 10px;
            }
        }

        @media only screen and (min-width: 320px) and (max-width: 575px) {
            .testimonials .owl-thumbs {
                margin-top: 0;
            }

            .testimonial__thumb {
                width: 40px;
                height: 40px;
                margin-right: 7px;
            }

            .testimonial__meta .testimonial__meta-title {
                font-size: 13px;
                margin-bottom: 0;
            }

            .testimonials .carousel-arrows .owl-nav .owl-prev,
            .testimonials .carousel-arrows .owl-nav .owl-next {
                width: 40px;
                height: 40px;
            }

            .testimonials .carousel-arrows .owl-nav .owl-next {
                top: 60px;
            }
        }

        /* Custom Media in Mobile Phones */
        @media only screen and (max-width: 380px) {
            .testimonial__thumb {
                width: 35px;
                height: 35px;
            }

            .testimonial__meta .testimonial__meta-title,
            .testimonial__meta .testimonial__meta-desc {
                font-size: 11px;
            }
        }

        /*---------------------------
    Client
---------------------------*/
        .clients {
            padding-top: 60px;
            padding-bottom: 60px;
        }

        .clients .client {
            position: relative;
            text-align: center;
        }

        .clients .client img {
            display: inline-block;
            width: auto !important;
            max-width: 100%;
        }

        /* Medium Size Screens */
        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .clients {
                padding-top: 40px;
                padding-bottom: 40px;
            }
        }

        /* Mobile Phones and tablets */
        @media only screen and (min-width: 320px) and (max-width: 767px) {
            .clients {
                padding-top: 30px;
                padding-bottom: 30px;
            }
        }

        /*--------------------
     Blog
-------------------*/
        .blog-item {
            position: relative;
            margin-bottom: 40px;
        }

        .blog-item .blog__img {
            position: relative;
            overflow: hidden;
            border-radius: 5px;
        }

        .blog-item .blog__img img {
            -webkit-transition: all 0.9s ease;
            -moz-transition: all 0.9s ease;
            -ms-transition: all 0.9s ease;
            -o-transition: all 0.9s ease;
            transition: all 0.9s ease;
        }

        .blog-item:hover .blog__img img {
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -ms-transform: scale(1.1);
            -o-transform: scale(1.1);
            transform: scale(1.1);
        }

        .blog-item .blog__content {
            background-color: #fff;
            position: relative;
            z-index: 2;
            padding-top: 27px;
            padding-left: 30px;
            margin-right: 30px;
            margin-top: -40px;
            border-radius: 0 4px 0 0;
        }

        .blog-item .blog__meta {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 11px;
        }

        .blog-item .blog__meta-cat {
            margin-right: 8px;
            line-height: 1;
        }

        .blog-item .blog__meta-cat a {
            position: relative;
            color: #ff5e14;
            padding-right: 7px;
        }

        .blog-item .blog__meta-cat a:hover {
            color: #1b1a1a;
        }

        .blog-item .blog__meta-cat a:after {
            content: ",";
            position: absolute;
            top: 0;
            right: 2px;
            color: #ff5e14;
        }

        .blog-item .blog__meta-cat a:last-child {
            padding: 0;
        }

        .blog-item .blog__meta-cat a:last-child:after {
            display: none;
        }

        .blog-item .blog__meta-date {
            display: block;
            font-size: 13px;
            line-height: 1;
            margin-right: 20px;
        }

        .blog-item .blog__title {
            font-size: 26px;
            line-height: 30px;
            margin-bottom: 14px;
            padding-left: 20px;
            position: relative;
        }

        .blog-item .blog__title:after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 2px;
            height: 100%;
            background-color: #ff5e14;
        }

        .blog-item .blog__title a {
            color: #1b1a1a;
        }

        .blog-item .blog__title a:hover {
            color: #ff5e14;
        }

        .blog-item .blog__desc {
            margin-bottom: 0;
        }

        .blog-item .btn__link {
            margin-top: 23px;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
        }

        .blog-item .btn__link i {
            width: 22px;
            height: 22px;
            line-height: 22px;
            background-color: #222222;
            color: #ffffff;
            border-radius: 50%;
            -webkit-transition: all 0.5s linear;
            -moz-transition: all 0.5s linear;
            -ms-transition: all 0.5s linear;
            -o-transition: all 0.5s linear;
            transition: all 0.5s linear;
        }

        .blog-item:hover .btn__link {
            color: #ff5e14;
        }

        .blog-item:hover .btn__link i {
            background-color: #ff5e14;
        }

        .hidden-blog-item {
            display: none;
        }

        /* Blog Sigle */
        .blog-single .blog-item .blog__meta-cat,
        .blog-single .blog-item .blog__meta-date {
            margin-bottom: 0;
        }

        .blog-single .blog-item .blog__content {
            padding-left: 0;
        }

        .blog__meta-author {
            font-size: 13px;
        }

        .blog__meta-author a {
            color: #0e2b5c;
        }

        .blog-single .blog__meta>* {
            margin-right: 20px;
        }

        .blog-single .blog__meta>*:last-child {
            margin-right: 0;
        }

        .blog-single .blog__desc {
            margin-bottom: 21px;
        }

        .blog-single .blog__desc p {
            font-size: 16px;
            line-height: 26px;
            margin-bottom: 24px;
        }

        .blog-standard .blog-item .blog__desc {
            margin-bottom: 22px;
        }

        .blog-widget {
            padding-top: 40px;
            margin-bottom: 60px;
        }

        .blog__widget-title {
            font-size: 30px;
            line-height: 1;
            margin-bottom: 26px;
        }

        .blog-comments {
            padding-bottom: 37px;
            border-bottom: 2px solid #eaeaea;
        }

        .blog-share .blog__share-title {
            color: #222222;
            font-size: 14px;
            line-height: 1;
            font-weight: 700;
            margin-right: 22px;
            margin-bottom: 0;
        }

        .blog-share .social__icons a {
            color: #0f2b5b;
        }

        .blog-share .social__icons a:hover {
            color: #ff5e14;
        }

        .blog-nav {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: justify;
            justify-content: space-between;
            border-top: 1px solid #eaeaea;
            padding-top: 30px;
        }

        .blog-nav .blog__prev,
        .blog-nav .blog__next {
            position: relative;
            min-height: 70px;
        }

        .blog-nav .blog__prev:hover h6,
        .blog-nav .blog__next:hover h6 {
            color: #ff5e14;
        }

        .blog-nav .blog__next {
            text-align: right;
        }

        .blog-nav .blog__next .blog__nav-img {
            right: 0;
            left: auto;
        }

        .blog-nav .blog__nav-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 70px;
            height: 70px;
            border-radius: 4px;
            overflow: hidden;
        }

        .blog-nav .blog__nav-img img {
            width: 100%;
            height: 100%;
        }

        .blog-nav .blog__nav-content span {
            font-family: "Roboto", sans-serif;
            font-size: 13px;
            color: #616161;
            display: block;
            margin-bottom: 1px;
        }

        .blog-nav .blog__nav-content h6 {
            font-size: 22px;
            line-height: 24px;
            margin-bottom: 0;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        .blog-nav .blog__next .blog__nav-content {
            padding-right: 90px;
        }

        .blog-nav .blog__prev .blog__nav-content {
            padding-left: 90px;
        }

        .blog-author {
            padding: 40px;
            display: flex;
            background-color: #f4f4f4;
            border-radius: 4px;
        }

        .blog-author .blog__author-avatar {
            width: 70px;
            height: 70px;
            min-width: 70px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 30px;
            margin-bottom: 20px;
        }

        .blog-author .blog__author-name {
            font-size: 22px;
            line-height: 1;
            margin-bottom: 15px;
        }

        .blog-author .blog__author-bio {
            font-size: 15px;
            line-height: 23px;
            margin-bottom: 13px;
        }

        .blog-author .social__icons li {
            margin-right: 30px;
        }

        .blog-author .social__icons:last-child {
            margin-right: 0;
        }

        .blog-author .social__icons a {
            font-size: 15px;
            color: #1b1a1a;
        }

        .blog-author .social__icons a:hover {
            color: #ff5e14;
        }

        .comments-list .comment__item {
            position: relative;
            padding-bottom: 20px;
            border-bottom: 2px solid #eaeaea;
            margin-bottom: 30px;
        }

        .comments-list .comment__item:last-child {
            border-bottom: none;
            padding-bottom: 0;
            margin-bottom: 0;
        }

        .comments-list .comment__item .comment__avatar {
            position: absolute;
            top: 0;
            left: 0;
            width: 60px;
            height: 60px;
            overflow: hidden;
            border-radius: 50%;
        }

        .comments-list .comment__item .comment__content {
            padding-left: 90px;
        }

        .comments-list .comment__item .comment__content .comment__author {
            font-size: 22px;
            line-height: 1;
            margin-bottom: 11px;
        }

        .comments-list .comment__item .comment__content .comment__date {
            font-family: "Roboto", sans-serif;
            color: #616161;
            font-size: 12px;
            line-height: 1;
            display: block;
            margin-bottom: 10px;
        }

        .comments-list .comment__item .comment__content .comment__desc {
            margin-bottom: 6px;
        }

        .comments-list .comment__item .comment__content .comment__reply {
            text-transform: capitalize;
            font-size: 14px;
            font-weight: 700;
            line-height: 1;
            color: #ff5e14;
            display: inline-block;
        }

        .comments-list .comment__item .comment__content .comment__reply:hover {
            color: #1b1a1a;
        }

        .comments-list .comment__item .nested__comment {
            border-top: 2px solid #eaeaea;
            padding: 30px 0 0 0;
            margin: 30px 0 0 90px;
        }

        .blog-comments-form .form-group {
            margin-bottom: 20px;
        }

        /* Medium Size Screens */
        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .blog-single .blog-item .blog__title {
                padding: 0 40px;
            }
        }

        /* Mobile Phones and tablets */
        @media only screen and (min-width: 320px) and (max-width: 767px) {
            .blog-item {
                margin-bottom: 30px;
            }

            .blog-item .blog__title {
                font-size: 18px;
                line-height: 22px;
                margin-bottom: 10px;
            }

            .blog-item .blog__content {
                padding-left: 0;
            }

            .blog-single .blog-item .blog__title {
                font-size: 20px;
                line-height: 30px;
                padding: 0;
            }

            .blog-grid-layout2 .blog-item .blog__content,
            .blog-grid-layout2 .blog-item-wide .blog__content {
                padding: 0 20px 20px 20px;
            }

            .blog__tags ul {
                justify-content: flex-start !important;
            }

            .comments-list .comment__item .comment__avatar {
                width: 40px;
                height: 40px;
            }

            .comments-list .comment__item .comment__content {
                padding-left: 60px;
            }

            .blog-nav {
                display: block;
            }

            .blog-nav .blog__prev {
                margin-bottom: 20px;
            }

            .blog-nav .blog__nav-content h6 {
                font-size: 13px;
            }

            .blog-nav .blog__nav-img {
                width: 60px;
                height: 60px;
            }

            .blog-nav .blog__prev .blog__nav-content {
                padding-left: 70px;
            }

            .blog-nav .blog__next .blog__nav-content {
                padding-right: 70px;
            }
        }

        /* Extra Small Devices */
        @media only screen and (min-width: 320px) and (max-width: 575px) {
            .blog-author {
                display: block;
                padding: 20px;
            }
        }

        /*----------------------------
    Contact
----------------------------*/
        .google-map+.contct {
            margin-top: -120px;
        }

        .contact__panel {
            background-color: #fff;
            padding: 80px 80px 40px;
            border-radius: 5px;
            box-shadow: 0px 3px 63px 0px rgba(40, 40, 40, 0.11);
            display: flex;
            flex-wrap: wrap;
        }

        .contact__panel .contact__panel-banner {
            flex: 0 0 42%;
            max-width: 42%;
            position: relative;
            padding-bottom: 40px;
        }

        .contact__panel .contact__panel-banner img {
            border-radius: 4px;
        }

        .contact__panel .contact__panel-banner .cta__banner {
            max-width: 360px;
            border-radius: 0 4px 4px 4px;
            position: absolute;
            bottom: 0;
            left: 0;
        }

        .contact__panel .contact__panel-banner .cta__banner .cta__desc {
            font-size: 16px;
        }

        .contact__panel .contact__panel-banner .contact__number {
            color: #ffffff;
        }

        .contact__panel .contact__panel-banner .contact__number i {
            font-size: 25px;
            margin-right: 13px;
        }

        .contact__panel .contact__panel-banner .contact__number a {
            font-family: "Teko", sans-serif;
            color: #ffffff;
            font-size: 50px;
            font-weight: 300;
            line-height: 1;
        }

        .contact__panel .contact__form-panel {
            flex: 0 0 58%;
            max-width: 58%;
            padding-left: 80px;
        }

        .contact__panel .contact__form-panel-header {
            margin-bottom: 20px;
        }

        .contact__panel .contact__form-panel-header h4 {
            font-size: 34px;
            margin-bottom: 13px;
        }

        .contact__panel .contact__form-panel-header p {
            font-size: 16px;
            line-height: 27px;
            margin-bottom: 25px;
        }

        .contact__panel .nice-select .list {
            width: 100%;
        }

        .contact__panel-layout2 {
            display: block;
            padding: 80px;
        }

        .contact__panel-layout2 .contact__form-panel {
            max-width: 100%;
            padding-left: 0;
        }

        .contact-info-box .contact__info-box-title {
            font-size: 24px;
            line-height: 1;
            margin-bottom: 17px;
        }

        .contact-info-box .contact__info-list li {
            font-size: 14px;
            line-height: 21px;
            margin-bottom: 9px;
        }

        .contact-info-box .contact__info-list li a {
            color: #9b9b9b;
        }

        @media only screen and (max-width: 992px) {
            .contact__panel {
                padding: 20px;
            }

            .contact__panel .contact__form-panel {
                padding-top: 20px;
                padding-left: 0;
            }

            .contact__panel .contact__panel-banner,
            .contact__panel .contact__form-panel {
                max-width: 100%;
                flex: 0 0 100%;
            }
        }

        /* Large Size Screens */
        @media only screen and (min-width: 992px) and (max-width: 1200px) {
            .contact__panel {
                padding: 30px;
            }

            .contact__panel .contact__form-panel {
                padding-left: 20px;
            }
        }

        /* Mobile Phones and tablets */
        @media only screen and (min-width: 320px) and (max-width: 767px) {
            .contact__panel .contact__form-panel-header h4 {
                margin-bottom: 5px;
            }

            .contact__panel .contact__form-panel-header p {
                margin-bottom: 10px;
            }

            .contact__panel .contact__panel-banner .cta__banner {
                padding: 20px;
            }

            .contact__panel .contact__panel-banner .cta__banner .cta__desc {
                font-size: 12px;
            }

            .contact__panel .contact__panel-banner .contact__number i {
                font-size: 15px;
            }

            .contact__panel .contact__panel-banner .contact__number a {
                font-size: 30px;
            }
        }

        /*--------------------------
        pricing
--------------------------*/
        .pricing-item {
            position: relative;
            background-color: #ffffff;
            padding: 50px 40px 60px;
            box-shadow: 0px 3px 53px 0px rgba(40, 40, 40, 0.05);
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
            border-radius: 4px;
            margin-bottom: 30px;
        }

        .pricing-item:hover {
            -webkit-transform: translateY(-4px);
            -moz-transform: translateY(-4px);
            -ms-transform: translateY(-4px);
            -o-transform: translateY(-4px);
            transform: translateY(-4px);
        }

        .pricing-item .pricing__header {
            padding-bottom: 30px;
            border-bottom: 2px solid #eaeaea;
        }

        .pricing-item .pricing__title {
            font-size: 22px;
            line-height: 1;
            margin-bottom: 17px;
        }

        .pricing-item .pricing__desc {
            margin-bottom: 40px;
        }

        .pricing-item .pricing__price {
            font-family: "Teko", sans-serif;
            font-size: 50px;
            color: #1b1a1a;
            font-weight: 400;
            line-height: 1;
            margin-bottom: 16px;
        }

        .pricing-item .pricing__list {
            padding-top: 50px;
            margin-bottom: 30px;
        }

        .pricing-item .pricing__list li {
            position: relative;
            padding-left: 27px;
            font-size: 14px;
            line-height: 34px;
            text-transform: capitalize;
        }

        .pricing-item .pricing__list li:after {
            content: "";
            font-family: FontAwesome;
            position: absolute;
            top: 0;
            left: 0;
            color: #ff5e14;
        }

        .pricing-item-theme {
            background-color: #ff5e14;
        }

        .pricing-item-dark {
            background-color: #222222;
        }

        .pricing-item-theme .pricing__title,
        .pricing-item-theme .pricing__desc,
        .pricing-item-theme .pricing__price,
        .pricing-item-theme .pricing__list li,
        .pricing-item-theme .pricing__list li::after,
        .pricing-item-dark .pricing__title,
        .pricing-item-dark .pricing__desc,
        .pricing-item-dark .pricing__price,
        .pricing-item-dark .pricing__list li,
        .pricing-item-dark .pricing__list li::after {
            color: #ffffff;
        }

        /* Extra Large Size Screens */
        @media only screen and (min-width: 1200px) {
            .pricing .heading__title {
                margin-left: -70px;
            }
        }

        /* Medium Size Screens */
        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .pricing .container {
                max-width: none;
            }

            .pricing-item {
                padding: 30px;
            }

            .pricing-item .pricing__header {
                padding-bottom: 20px;
            }

            .pricing-item .pricing__list {
                padding-top: 20px;
            }

            .pricing-item .pricing__title {
                margin-bottom: 15px;
            }

            .pricing-item .pricing__price {
                font-size: 40px;
                margin-bottom: 0;
            }

            .pricing-item .pricing__title,
            .pricing-item .pricing__desc {
                margin-bottom: 10px;
            }
        }

        /* Mobile Phones and tablets */
        @media only screen and (min-width: 320px) and (max-width: 767px) {
            .pricing-item {
                padding: 30px 20px;
            }

            .pricing-item .pricing__desc {
                margin-bottom: 20px;
            }

            .pricing-item .pricing__list {
                padding-top: 20px;
            }

            .pricing-item .pricing__price {
                font-size: 40px;
                margin-bottom: 0;
            }

            .pricing-item .pricing__header {
                padding-bottom: 20px;
            }
        }

        /*-----------------------
    Counters
-----------------------*/
        .counter-item {
            text-align: center;
        }

        .counter-item h4 {
            font-size: 43px;
            font-weight: 500;
            line-height: 1;
            margin-bottom: 10px;
        }

        .counter-item .counter__icon {
            line-height: 1;
            margin-bottom: 29px;
        }

        .counter-item .counter__icon i {
            font-size: 60px;
        }

        .counter-item .counter__subtitle {
            font-family: "Teko", sans-serif;
            font-size: 14px;
            font-weight: bold;
            line-height: 1;
            letter-spacing: 0.5px;
            margin-bottom: 0;
        }

        .counter-item .counter__desc {
            font-size: 14px;
            line-height: 24px;
            margin-bottom: 0;
        }

        .counters-white h4,
        .counters-white .counter__icon,
        .counters-white .counter__subtitle,
        .counters-white .counter__desc {
            color: #fff;
        }

        /* Mobile Phones and tablets */
        @media only screen and (min-width: 320px) and (max-width: 767px) {
            .counter-item {
                margin-bottom: 30px;
            }
        }

        /* Extra Small Devices */
        @media only screen and (min-width: 320px) and (max-width: 575px) {
            .counter-item .counter__icon {
                margin-bottom: 15px;
            }

            .counter-item .counter__icon i {
                font-size: 45px;
            }

            .counter-item h4 {
                font-size: 35px;
            }

            .counter-item .counter__subtitle {
                font-size: 13px;
            }
        }

        /* Custom Media in Mobile Phones */
        @media only screen and (max-width: 450px) {
            .counter-item .counter__icon {
                margin-bottom: 15px;
            }

            .counter-item .counter__icon i {
                font-size: 30px;
            }

            .counter-item h4 {
                font-size: 25px;
            }

            .counter-item .counter__subtitle {
                font-size: 12px;
            }
        }

        /*-----------------------
    Services
--------------------------*/
        .service-item {
            position: relative;
            margin-bottom: 30px;
            overflow: hidden;
            border-radius: 4px;
            box-shadow: 0px 3px 53px 0px rgba(40, 40, 40, 0.05);
            -webkit-transition: all 0.4s ease;
            -moz-transition: all 0.4s ease;
            -ms-transition: all 0.4s ease;
            -o-transition: all 0.4s ease;
            transition: all 0.4s ease;
        }

        .service-item .service__img {
            position: relative;
        }

        .service-item .service__img:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            opacity: 0.4;
            -webkit-background-image: linear-gradient(top, rgba(27, 26, 26, 0.35), #1b1a1a 100%);
            -moz-background-image: linear-gradient(top, rgba(27, 26, 26, 0.35), #1b1a1a 100%);
            -ms-background-image: linear-gradient(top, rgba(27, 26, 26, 0.35), #1b1a1a 100%);
            -o-background-image: linear-gradient(top, rgba(27, 26, 26, 0.35), #1b1a1a 100%);
            background-image: linear-gradient(top, rgba(27, 26, 26, 0.35), #1b1a1a 100%);
        }

        .service-item .service__img img {
            width: 100%;
            max-width: 100%;
        }

        .service-item .service__content {
            -webkit-transition: all 0.6s linear;
            -moz-transition: all 0.6s linear;
            -ms-transition: all 0.6s linear;
            -o-transition: all 0.6s linear;
            transition: all 0.6s linear;
            background-color: #fff;
            padding: 50px 40px 50px;
        }

        .service-item .service__icon {
            margin-bottom: 60px;
        }

        .service-item .service__icon i {
            font-size: 65px;
            line-height: 1;
            color: #ff5e14;
        }

        .service-item .service__title {
            font-size: 30px;
            font-weight: 400;
            margin-bottom: 10px;
        }

        .service-item .service__desc {
            margin-bottom: 0;
        }

        .service-item .btn__link {
            margin-top: 28px;
        }

        .service-item .btn__link i {
            width: 22px;
            height: 22px;
            line-height: 22px;
            background-color: #222222;
            color: #ffffff;
            border-radius: 50%;
            display: inline-block;
            -webkit-transition: all 0.5s linear;
            -moz-transition: all 0.5s linear;
            -ms-transition: all 0.5s linear;
            -o-transition: all 0.5s linear;
            transition: all 0.5s linear;
        }

        .service-item .btn__link:hover i {
            background-color: #ff5e14;
        }

        .service-item:hover {
            -webkit-transform: translateY(-5px);
            -moz-transform: translateY(-5px);
            -ms-transform: translateY(-5px);
            -o-transform: translateY(-5px);
            transform: translateY(-5px);
        }

        .service-item:hover .service__icon {
            -webkit-animation: slideTopDown 1s infinite alternate;
            -moz-animation: slideTopDown 1s infinite alternate;
            -ms-animation: slideTopDown 1s infinite alternate;
            -o-animation: slideTopDown 1s infinite alternate;
            animation: slideTopDown 1s infinite alternate;
        }

        .service-item .service__overlay {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            text-align: center;
            background-color: rgba(255, 94, 20, 0.9);
            -webkit-transition: all 0.5s linear;
            -moz-transition: all 0.5s linear;
            -ms-transition: all 0.5s linear;
            -o-transition: all 0.5s linear;
            transition: all 0.5s linear;
        }

        .service-item:hover .service__overlay {
            opacity: 1;
        }

        .services-layout2 .service__content {
            padding: 50px 40px 20px;
        }

        .services-layout2 .service-item:hover .service__content {
            background-color: #ff5e14;
        }

        .services-layout2 .service-item:hover .service__icon i,
        .services-layout2 .service-item:hover .service__title,
        .services-layout2 .service-item:hover .service__desc,
        .services-layout2 .service-item:hover .btn__link {
            color: #ffffff;
        }

        .services-layout2 .service-item:hover .btn__link i {
            color: #ff5e14;
        }

        .services-layout2 .service-item .btn__link {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            justify-content: space-between;
            padding-top: 28px;
            margin-top: 28px;
            border-top: 2px solid #eaeaea;
        }

        .services-layout2 .service-item .btn__link i {
            background-color: #ffffff;
            color: #222222;
        }

        /* Medium Size Screens */
        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .service-item .service__icon {
                margin-bottom: 15px;
            }

            .service-item .service__icon i {
                font-size: 50px;
            }

            .service-item .service__title {
                font-size: 25px;
                margin-bottom: 10px;
            }
        }

        /* Mobile Phones and tablets */
        @media only screen and (min-width: 320px) and (max-width: 767px) {
            .service-item .service__content {
                padding: 20px;
            }

            .service-item .service__title {
                font-size: 22px;
                margin-bottom: 5px;
            }

            .service-item .service__icon {
                margin-bottom: 20px;
            }

            .service-item .service__icon i {
                font-size: 45px;
            }
        }

        /*--------------------
    Sidebar
----------------------*/
        .sidebar {
            position: relative;
            margin-right: 20px;
            z-index: 2;
        }

        .widget {
            background-color: #f4f4f4;
            padding: 40px;
            margin-bottom: 40px;
            border-radius: 4px;
        }

        .widget:last-child {
            margin-bottom: 0;
        }

        .widget .widget__title {
            font-size: 24px;
            letter-spacing: 0.5px;
            line-height: 1;
            margin-bottom: 26px;
        }

        .widget-search .widget__form-search {
            position: relative;
        }

        .widget-search .widget__form-search .form-control {
            background-color: #fff;
            border: 2px solid #eaeaea;
        }

        .widget-search .widget__form-search button {
            position: absolute;
            top: 0;
            right: 15px;
            width: auto;
            color: #333333;
            padding: 0;
            min-width: 0;
        }

        .widget-search .widget__form-search button:hover {
            color: #ff5e14;
        }

        .widget-categories ul {
            background-color: #ffffff;
            box-shadow: 0px 1px 73px 0px rgba(40, 40, 40, 0.15);
        }

        .widget-categories ul li a {
            position: relative;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -ms-flex-align: center;
            align-items: center;
            padding: 18px 20px;
            color: #1b1a1a;
            font-size: 15px;
            font-weight: 700;
            text-transform: capitalize;
            border-bottom: 2px solid #f4f4f4;
            -webkit-transition: all 0.3s linear;
            -moz-transition: all 0.3s linear;
            -ms-transition: all 0.3s linear;
            -o-transition: all 0.3s linear;
            transition: all 0.3s linear;
        }

        .widget-categories ul li a.active,
        .widget-categories ul li a:hover {
            background-color: #ff5e14;
            color: #ffffff;
        }

        .widget-categories ul li:last-child a {
            border-bottom: none;
        }

        .widget-tags ul {
            display: flex;
            flex-wrap: wrap;
        }

        .widget-tags ul li a {
            display: block;
            font-size: 14px;
            background-color: #ff5e14;
            color: #ffffff;
            line-height: 1;
            text-transform: capitalize;
            padding: 8px 10px;
            margin: 0 10px 10px 0;
            border-radius: 3px;
            -webkit-transition: all 0.4s ease;
            -moz-transition: all 0.4s ease;
            -ms-transition: all 0.4s ease;
            -o-transition: all 0.4s ease;
            transition: all 0.4s ease;
        }

        .widget-tags ul li a:hover {
            background-color: #1b1a1a;
        }

        /*widget posts*/
        .widget-posts .widget-post-item {
            margin-bottom: 26px;
        }

        .widget-posts .widget-post-item:last-of-type {
            margin-bottom: 0;
        }

        .widget-posts .widget-post-item .widget__post-title {
            font-size: 22px;
            line-height: 24px;
            margin-bottom: 0;
        }

        .widget-posts .widget-post-item .widget__post-title a {
            color: #222222;
        }

        .widget-posts .widget-post-item:hover .widget__post-title a {
            color: #ff5e14;
        }

        .widget-posts .widget-post-item .widget__post-img {
            margin-bottom: 19px;
        }

        .widget-posts .widget-post-item .widget__post-date {
            line-height: 1;
            font-size: 13px;
            display: inline-block;
            margin-right: 20px;
            margin-bottom: 7px;
        }

        .widget-posts .widget-post-item .widget__post-cat {
            margin-bottom: 7px;
            line-height: 1;
        }

        .widget-posts .widget-post-item .widget__post-cat a {
            position: relative;
            font-size: 13px;
            color: #ff5e14;
            padding-right: 7px;
        }

        .widget-posts .widget-post-item .widget__post-cat a:hover {
            color: #1b1a1a;
        }

        .widget-posts .widget-post-item .widget__post-cat a:after {
            content: ",";
            position: absolute;
            top: 0;
            right: 2px;
            color: #ff5e14;
        }

        .widget-posts .widget-post-item .widget__post-cat a:last-child {
            padding: 0;
        }

        /* Widget Download */
        .widget-download .btn {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 25px;
            height: 70px;
            border-radius: 4px;
        }

        .widget-download .btn img {
            width: 22px;
            height: 24px;
        }

        /* Widget help */
        .widget-help {
            overflow: hidden;
            padding: 50px;
        }

        .widget-help .widget__content {
            position: relative;
        }

        .widget-help .widget__content .widget__icon {
            color: #ffffff;
            font-size: 55px;
            line-height: 1;
            margin-bottom: 31px;
        }

        .widget-help .widget__content h5 {
            color: #ffffff;
            font-size: 30px;
            line-height: 32px;
            margin-bottom: 20px;
        }

        .widget-help .widget__content p {
            color: #f9f9f9;
            font-size: 15px;
            line-height: 25px;
            margin-bottom: 26px;
        }

        .widget-help .widget__content .btn i {
            width: 30px;
            height: 30px;
            line-height: 30px;
            border-radius: 50%;
            background-color: #fff;
            color: #ff5e14;
            display: inline-block;
        }

        /* Large Size Screens */
        @media only screen and (min-width: 992px) and (max-width: 1200px) {
            .sidebar {
                margin-right: 0;
            }

            .widget {
                padding: 20px;
                margin-bottom: 30px;
            }
        }

        /* Tablets and  Small Screens */
        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .widget {
                padding: 25px;
            }

            .widget .widget__title {
                margin-bottom: 25px;
            }
        }

        /* Mobile Phones and tablets */
        @media only screen and (min-width: 320px) and (max-width: 575px) {
            .widget {
                padding: 15px;
            }

            .widget .widget__title {
                margin-bottom: 20px;
            }

            .widget-help .widget__content p {
                margin-bottom: 30px;
            }

            .widget-categories ul li a {
                font-size: 14px;
                line-height: 40px;
                padding: 5px 10px;
            }

            .widget-download .btn {
                height: 50px;
            }
        }

        /*----------------------
    About
-----------------------*/
        .about__text p {
            color: #222222;
            font-size: 17px;
            font-weight: 700;
            margin-bottom: 18px;
        }

        .about__img {
            position: relative;
            box-shadow: 0px 1px 73px 0px rgba(40, 40, 40, 0.1);
        }

        .about__img img {
            border-radius: 3px;
        }

        .about-layout1 .cta__banner {
            position: absolute;
            top: 50%;
            right: 0;
            max-width: 270px;
            border-radius: 4px 0 0 4px;
            padding: 50px 30px 50px 50px;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .about-layout1 .cta__banner .cta__title {
            margin-bottom: 15px;
        }

        .about-layout1 .cta__banner .cta__icon {
            margin-bottom: 25px;
        }

        .about-layout1 .cta__banner .btn i {
            width: 22px;
            height: 22px;
            line-height: 22px;
            background-color: #ffffff;
            color: #ff5e14;
            border-radius: 50%;
            display: inline-block;
        }

        .about-layout2 .cta__banner {
            position: absolute;
            bottom: 0;
            left: 0;
            max-width: 250px;
            border-radius: 0 4px 0 4px;
        }

        /* Extra Large Size Screens */
        @media only screen and (min-width: 1200px) {
            .about-layout1 .about__img {
                margin-right: 40px;
            }

            .about-layout2 .heading__title {
                margin-left: -70px;
            }

            .about-layout2 .about__imgs-container {
                position: absolute;
                right: 0;
                top: 50px;
                max-width: 43%;
            }
        }

        /* Mobile Phones and tablets */
        @media only screen and (min-width: 320px) and (max-width: 575px) {
            .about__img .cta__banner {
                padding: 20px;
            }

            .about__img .cta__banner .cta__title {
                font-size: 20px;
                margin-bottom: 10px;
            }

            .about__img .cta__banner .cta__icon i {
                font-size: 35px;
            }

            .about-layout2 .about__imgs-container {
                margin-right: -5px;
                margin-left: -5px;
            }

            .about-layout2 .about__imgs-container>[class*=col-] {
                padding-right: 5px;
                padding-left: 5px;
            }
        }

        /* Custom Media in Mobile Phones */
        /*-----------------------
    banner
------------------------*/
        .banner-layout1 .inner-padding {
            padding: 110px 50px;
        }

        .banner-layout1 .list-items {
            display: flex;
            flex-wrap: wrap;
        }

        .banner-layout1 .list-items li {
            flex-basis: 50%;
        }

        .banner-layout1 .popup-video {
            display: inline-block;
            position: relative;
            border: 10px solid #ff5e14;
            border-radius: 50%;
            margin-left: -50px;
        }

        .banner-layout1 .statistic-item {
            position: absolute;
            text-align: right;
            width: 200px;
        }

        .banner-layout1 .statistic-item:first-child {
            top: 5%;
            left: 5%;
        }

        .banner-layout1 .statistic-item:nth-of-type(2) {
            top: 30%;
            left: 50%;
        }

        .banner-layout1 .statistic-item:nth-of-type(3) {
            bottom: 10%;
            left: 30%;
        }

        .banner-layout1 .statistic-item .statistic__item-btn {
            width: 30px;
            height: 30px;
            line-height: 30px;
            font-size: 20px;
            background-color: #ffffff;
            color: #ff5e14;
            box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            margin-top: 23px;
        }

        .banner-layout1 .statistic-item .statistic__item-panel {
            width: 200px;
            height: 170px;
            border-radius: 4px;
            background-color: #ffffff;
            text-align: left;
            padding: 25px 40px 40px;
            margin-left: -15px;
            position: relative;
            z-index: -1;
            opacity: 0;
            visibility: hidden;
            -webkit-transform: translateY(-10px);
            -moz-transform: translateY(-10px);
            -ms-transform: translateY(-10px);
            -o-transform: translateY(-10px);
            transform: translateY(-10px);
            -webkit-transition: all 0.4s linear;
            -moz-transition: all 0.4s linear;
            -ms-transition: all 0.4s linear;
            -o-transition: all 0.4s linear;
            transition: all 0.4s linear;
        }

        .banner-layout1 .statistic-item .statistic__item-panel:after {
            content: "";
            position: absolute;
            bottom: -10px;
            right: 0;
            border: 6px solid;
            border-color: #ffffff #ffffff transparent transparent;
        }

        .banner-layout1 .statistic-item .statistic__item-counter {
            color: #ff5e14;
            font-size: 100px;
            font-weight: 300;
            line-height: 1;
            margin-bottom: 0;
        }

        .banner-layout1 .statistic-item .statistic__item-title {
            color: #1b1a1a;
            font-weight: 700;
            line-height: 1;
            margin-bottom: 0;
        }

        .banner-layout1 .statistic-item.opened .statistic__item-panel {
            z-index: 2;
            opacity: 1;
            visibility: visible;
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0);
        }

        .banner-layout1 .statistic-item.opened .statistic__item-btn {
            background-color: #ff5e14;
            color: #ffffff;
            box-shadow: 0 0 0 3px rgba(255, 94, 20, 0.5);
        }

        .banner-layout2 .contact__panel-wrap {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 3;
            padding-left: 60px;
        }

        .banner-layout2 .container-fluid {
            padding-right: 80px;
            padding-left: 80px;
        }

        .banner-layout2 .video__player-title {
            line-height: 24px;
            font-weight: 700;
            color: #ffffff;
        }

        .banner-layout2+.blog-grid,
        .banner-layout2+.testimonials-layout1 {
            margin-top: -50px;
            z-index: -1;
        }

        .banner-layout3 .inner-padding {
            padding: 110px 70px 120px;
        }

        .banner-layout3 .heading__desc {
            font-size: 17px;
            line-height: 27px;
            font-weight: 600;
        }

        .banner-layout3 .cta__banner-white {
            position: absolute;
            bottom: 0;
            left: 0;
            padding: 60px;
        }

        .banner-layout3 .btn__link i {
            width: 22px;
            height: 22px;
            line-height: 22px;
            background-color: #ffffff;
            color: #ff5e14;
            border-radius: 50%;
            display: inline-block;
        }

        .banner-layout4 {
            padding-bottom: 260px;
        }

        .banner-layout4 .btn__link i {
            width: 22px;
            height: 22px;
            line-height: 22px;
            background-color: #ff5e14;
            color: #ffffff;
            border-radius: 50%;
            display: inline-block;
        }

        .banner-layout4 .btn__link:hover {
            color: #ffffff;
        }

        .banner-layout4 .blockquote {
            background-color: #ff5e14;
            color: #ffffff;
            border-radius: 4px;
            position: relative;
            font-size: 16px;
            font-weight: 700;
            padding: 47px 50px 50px;
            margin-top: 30px;
        }

        .banner-layout4 .blockquote:before {
            content: "";
            position: absolute;
            top: -15px;
            right: 50px;
            width: 45px;
            height: 32px;
            background-image: url(../images/testimonials/quote-icon2.png);
        }

        .banner-layout4 .blockquote:after {
            content: "";
            position: absolute;
            bottom: -15px;
            left: 50px;
            border: 10px solid;
            border-color: #ff5e14 transparent transparent #ff5e14;
        }

        .banner-layout4 .blockquote .quote__author {
            display: block;
            font-size: 14px;
            margin-top: 34px;
        }

        .banner-layout4+.contact-layout2 .contact__panel {
            margin-top: -120px;
            position: relative;
            z-index: 3;
        }

        /* Extra Large Size Screens */
        @media only screen and (min-width: 1400px) {
            .banner .inner-padding {
                padding-right: 110px;
                padding-left: 110px;
            }

            .banner-layout2 .container-fluid {
                padding-right: 130px;
                padding-left: 130px;
            }

            .banner-layout3 .inner-padding {
                padding-right: 120px;
                padding-left: 120px;
            }
        }

        @media only screen and (max-width: 1200px) {
            .banner-layout1 .video__btn {
                text-align: center;
            }
        }

        @media only screen and (max-width: 992px) {
            .banner-layout2 .container-fluid {
                padding-right: 30px;
                padding-left: 30px;
            }

            .banner-layout2 .contact__panel-wrap {
                position: static;
                padding: 0;
            }

            .banner-layout2+.blog-grid,
            .banner-layout2+.testimonials-layout1 {
                margin-top: 0;
            }
        }

        /* Extra Small Devices */
        @media only screen and (min-width: 320px) and (max-width: 575px) {
            .banner-layout1 .list-items {
                display: block;
            }

            .banner-layout2 .container-fluid {
                padding: 0 20px;
            }

            .banner-layout3 .carousel {
                width: 320px;
                padding: 20px;
            }

            .banner-layout3 .heading__desc {
                font-size: 14px;
                line-height: 24px;
                font-weight: 400;
            }

            .banner-layout4 .blockquote {
                font-size: 15px;
                padding: 20px;
                font-weight: 400;
            }

            .banner-layout4 .blockquote .quote__author {
                margin-top: 14px;
            }
        }

        /*-----------------------
    careers
------------------------*/
        .careers .owl-carousel .owl-stage-outer {
            margin: 0 -20px;
            padding: 20px;
        }

        .job-item {
            background-color: #fff;
            padding: 50px 40px 40px;
            border-radius: 4px;
            box-shadow: 0 0 15px 0 rgba(40, 40, 40, 0.08);
            -webkit-transition: all 0.4s ease;
            -moz-transition: all 0.4s ease;
            -ms-transition: all 0.4s ease;
            -o-transition: all 0.4s ease;
            transition: all 0.4s ease;
        }

        .job-item:hover {
            box-shadow: 0 0 15px 0 rgba(40, 40, 40, 0.14);
            -webkit-transform: translateY(-2px);
            -moz-transform: translateY(-2px);
            -ms-transform: translateY(-2px);
            -o-transform: translateY(-2px);
            transform: translateY(-2px);
        }

        .job-item .job__meta {
            display: flex;
            align-items: center;
            margin-bottom: 32px;
        }

        .job-item .job__type {
            font-size: 13px;
            text-transform: capitalize;
            background-color: #ff5e14;
            color: #ffffff;
            padding: 3px 10px;
            border-radius: 3px;
            margin-right: 10px;
        }

        .job-item .job__location {
            font-size: 13px;
        }

        .job-item .job__title {
            font-size: 24px;
            line-height: 28px;
            margin-bottom: 18px;
        }

        .job-item .btn__link {
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
        }

        .job-item .btn__link i {
            font-size: 10px;
            width: 22px;
            height: 22px;
            line-height: 22px;
            background-color: #222222;
            color: #ffffff;
            border-radius: 50%;
            -webkit-transition: all 0.5s linear;
            -moz-transition: all 0.5s linear;
            -ms-transition: all 0.5s linear;
            -o-transition: all 0.5s linear;
            transition: all 0.5s linear;
        }

        .job-item .btn__link:hover {
            color: #ff5e14;
        }

        .job-item .btn__link:hover i {
            background-color: #ff5e14;
        }

        /* Mobile Phones and tablets */
        @media only screen and (min-width: 320px) and (max-width: 767px) {
            .job-item {
                padding: 30px;
            }

            .job-item .job__meta {
                margin-bottom: 20px;
            }

            .job-item .job__title {
                margin-bottom: 10px;
            }
        }

        :root{--blue:#007bff;--indigo:#6610f2;--purple:#6f42c1;--pink:#e83e8c;--red:#dc3545;--orange:#fd7e14;--yellow:#ffc107;--green:#28a745;--teal:#20c997;--cyan:#17a2b8;--white:#fff;--gray:#6c757d;--gray-dark:#343a40;--primary:#007bff;--secondary:#6c757d;--success:#28a745;--info:#17a2b8;--warning:#ffc107;--danger:#dc3545;--light:#f8f9fa;--dark:#343a40;--breakpoint-xs:0;--breakpoint-sm:576px;--breakpoint-md:768px;--breakpoint-lg:992px;--breakpoint-xl:1200px;--font-family-sans-serif:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-family-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace}*,::after,::before{box-sizing:border-box}html{font-family:sans-serif;line-height:1.15;-webkit-text-size-adjust:100%;-webkit-tap-highlight-color:transparent}article,aside,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}body{margin:0;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";font-size:1rem;font-weight:400;line-height:1.5;color:#212529;text-align:left;background-color:#fff}[tabindex="-1"]:focus{outline:0!important}hr{box-sizing:content-box;height:0;overflow:visible}h1,h2,h3,h4,h5,h6{margin-top:0;margin-bottom:.5rem}p{margin-top:0;margin-bottom:1rem}abbr[data-original-title],abbr[title]{text-decoration:underline;-webkit-text-decoration:underline dotted;text-decoration:underline dotted;cursor:help;border-bottom:0;-webkit-text-decoration-skip-ink:none;text-decoration-skip-ink:none}address{margin-bottom:1rem;font-style:normal;line-height:inherit}dl,ol,ul{margin-top:0;margin-bottom:1rem}ol ol,ol ul,ul ol,ul ul{margin-bottom:0}dt{font-weight:700}dd{margin-bottom:.5rem;margin-left:0}blockquote{margin:0 0 1rem}b,strong{font-weight:bolder}small{font-size:80%}sub,sup{position:relative;font-size:75%;line-height:0;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}a{color:#007bff;text-decoration:none;background-color:transparent}a:hover{color:#0056b3;text-decoration:underline}a:not([href]):not([tabindex]){color:inherit;text-decoration:none}a:not([href]):not([tabindex]):focus,a:not([href]):not([tabindex]):hover{color:inherit;text-decoration:none}a:not([href]):not([tabindex]):focus{outline:0}code,kbd,pre,samp{font-family:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;font-size:1em}pre{margin-top:0;margin-bottom:1rem;overflow:auto}figure{margin:0 0 1rem}img{vertical-align:middle;border-style:none}svg{overflow:hidden;vertical-align:middle}table{border-collapse:collapse}caption{padding-top:.75rem;padding-bottom:.75rem;color:#6c757d;text-align:left;caption-side:bottom}th{text-align:inherit}label{display:inline-block;margin-bottom:.5rem}button{border-radius:0}button:focus{outline:1px dotted;outline:5px auto -webkit-focus-ring-color}button,input,optgroup,select,textarea{margin:0;font-family:inherit;font-size:inherit;line-height:inherit}button,input{overflow:visible}button,select{text-transform:none}select{word-wrap:normal}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button}[type=button]:not(:disabled),[type=reset]:not(:disabled),[type=submit]:not(:disabled),button:not(:disabled){cursor:pointer}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{padding:0;border-style:none}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=date],input[type=datetime-local],input[type=month],input[type=time]{-webkit-appearance:listbox}textarea{overflow:auto;resize:vertical}fieldset{min-width:0;padding:0;margin:0;border:0}legend{display:block;width:100%;max-width:100%;padding:0;margin-bottom:.5rem;font-size:1.5rem;line-height:inherit;color:inherit;white-space:normal}progress{vertical-align:baseline}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{outline-offset:-2px;-webkit-appearance:none}[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}output{display:inline-block}summary{display:list-item;cursor:pointer}template{display:none}[hidden]{display:none!important}.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{margin-bottom:.5rem;font-weight:500;line-height:1.2}.h1,h1{font-size:2.5rem}.h2,h2{font-size:2rem}.h3,h3{font-size:1.75rem}.h4,h4{font-size:1.5rem}.h5,h5{font-size:1.25rem}.h6,h6{font-size:1rem}.lead{font-size:1.25rem;font-weight:300}.display-1{font-size:6rem;font-weight:300;line-height:1.2}.display-2{font-size:5.5rem;font-weight:300;line-height:1.2}.display-3{font-size:4.5rem;font-weight:300;line-height:1.2}.display-4{font-size:3.5rem;font-weight:300;line-height:1.2}hr{margin-top:1rem;margin-bottom:1rem;border:0;border-top:1px solid rgba(0,0,0,.1)}.small,small{font-size:80%;font-weight:400}.mark,mark{padding:.2em;background-color:#fcf8e3}.list-unstyled{padding-left:0;list-style:none}.list-inline{padding-left:0;list-style:none}.list-inline-item{display:inline-block}.list-inline-item:not(:last-child){margin-right:.5rem}.initialism{font-size:90%;text-transform:uppercase}.blockquote{margin-bottom:1rem;font-size:1.25rem}.blockquote-footer{display:block;font-size:80%;color:#6c757d}.blockquote-footer::before{content:"\2014\00A0"}.img-fluid{max-width:100%;height:auto}.img-thumbnail{padding:.25rem;background-color:#fff;border:1px solid #dee2e6;border-radius:.25rem;max-width:100%;height:auto}.figure{display:inline-block}.figure-img{margin-bottom:.5rem;line-height:1}.figure-caption{font-size:90%;color:#6c757d}code{font-size:87.5%;color:#e83e8c;word-break:break-word}a>code{color:inherit}kbd{padding:.2rem .4rem;font-size:87.5%;color:#fff;background-color:#212529;border-radius:.2rem}kbd kbd{padding:0;font-size:100%;font-weight:700}pre{display:block;font-size:87.5%;color:#212529}pre code{font-size:inherit;color:inherit;word-break:normal}.pre-scrollable{max-height:340px;overflow-y:scroll}.container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:576px){.container{max-width:540px}}@media (min-width:768px){.container{max-width:720px}}@media (min-width:992px){.container{max-width:960px}}@media (min-width:1200px){.container{max-width:1140px}}.container-fluid{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}.row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}.no-gutters{margin-right:0;margin-left:0}.no-gutters>.col,.no-gutters>[class*=col-]{padding-right:0;padding-left:0}.col,.col-1,.col-10,.col-11,.col-12,.col-2,.col-3,.col-4,.col-5,.col-6,.col-7,.col-8,.col-9,.col-auto,.col-lg,.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-lg-auto,.col-md,.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-auto,.col-sm,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-auto,.col-xl,.col-xl-1,.col-xl-10,.col-xl-11,.col-xl-12,.col-xl-2,.col-xl-3,.col-xl-4,.col-xl-5,.col-xl-6,.col-xl-7,.col-xl-8,.col-xl-9,.col-xl-auto{position:relative;width:100%;padding-right:15px;padding-left:15px}.col{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:100%}.col-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.order-first{-ms-flex-order:-1;order:-1}.order-last{-ms-flex-order:13;order:13}.order-0{-ms-flex-order:0;order:0}.order-1{-ms-flex-order:1;order:1}.order-2{-ms-flex-order:2;order:2}.order-3{-ms-flex-order:3;order:3}.order-4{-ms-flex-order:4;order:4}.order-5{-ms-flex-order:5;order:5}.order-6{-ms-flex-order:6;order:6}.order-7{-ms-flex-order:7;order:7}.order-8{-ms-flex-order:8;order:8}.order-9{-ms-flex-order:9;order:9}.order-10{-ms-flex-order:10;order:10}.order-11{-ms-flex-order:11;order:11}.order-12{-ms-flex-order:12;order:12}.offset-1{margin-left:8.333333%}.offset-2{margin-left:16.666667%}.offset-3{margin-left:25%}.offset-4{margin-left:33.333333%}.offset-5{margin-left:41.666667%}.offset-6{margin-left:50%}.offset-7{margin-left:58.333333%}.offset-8{margin-left:66.666667%}.offset-9{margin-left:75%}.offset-10{margin-left:83.333333%}.offset-11{margin-left:91.666667%}@media (min-width:576px){.col-sm{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-sm-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:100%}.col-sm-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-sm-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-sm-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-sm-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-sm-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-sm-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-sm-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-sm-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-sm-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-sm-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-sm-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-sm-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.order-sm-first{-ms-flex-order:-1;order:-1}.order-sm-last{-ms-flex-order:13;order:13}.order-sm-0{-ms-flex-order:0;order:0}.order-sm-1{-ms-flex-order:1;order:1}.order-sm-2{-ms-flex-order:2;order:2}.order-sm-3{-ms-flex-order:3;order:3}.order-sm-4{-ms-flex-order:4;order:4}.order-sm-5{-ms-flex-order:5;order:5}.order-sm-6{-ms-flex-order:6;order:6}.order-sm-7{-ms-flex-order:7;order:7}.order-sm-8{-ms-flex-order:8;order:8}.order-sm-9{-ms-flex-order:9;order:9}.order-sm-10{-ms-flex-order:10;order:10}.order-sm-11{-ms-flex-order:11;order:11}.order-sm-12{-ms-flex-order:12;order:12}.offset-sm-0{margin-left:0}.offset-sm-1{margin-left:8.333333%}.offset-sm-2{margin-left:16.666667%}.offset-sm-3{margin-left:25%}.offset-sm-4{margin-left:33.333333%}.offset-sm-5{margin-left:41.666667%}.offset-sm-6{margin-left:50%}.offset-sm-7{margin-left:58.333333%}.offset-sm-8{margin-left:66.666667%}.offset-sm-9{margin-left:75%}.offset-sm-10{margin-left:83.333333%}.offset-sm-11{margin-left:91.666667%}}@media (min-width:768px){.col-md{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-md-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:100%}.col-md-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-md-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-md-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-md-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-md-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-md-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-md-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-md-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-md-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-md-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-md-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-md-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.order-md-first{-ms-flex-order:-1;order:-1}.order-md-last{-ms-flex-order:13;order:13}.order-md-0{-ms-flex-order:0;order:0}.order-md-1{-ms-flex-order:1;order:1}.order-md-2{-ms-flex-order:2;order:2}.order-md-3{-ms-flex-order:3;order:3}.order-md-4{-ms-flex-order:4;order:4}.order-md-5{-ms-flex-order:5;order:5}.order-md-6{-ms-flex-order:6;order:6}.order-md-7{-ms-flex-order:7;order:7}.order-md-8{-ms-flex-order:8;order:8}.order-md-9{-ms-flex-order:9;order:9}.order-md-10{-ms-flex-order:10;order:10}.order-md-11{-ms-flex-order:11;order:11}.order-md-12{-ms-flex-order:12;order:12}.offset-md-0{margin-left:0}.offset-md-1{margin-left:8.333333%}.offset-md-2{margin-left:16.666667%}.offset-md-3{margin-left:25%}.offset-md-4{margin-left:33.333333%}.offset-md-5{margin-left:41.666667%}.offset-md-6{margin-left:50%}.offset-md-7{margin-left:58.333333%}.offset-md-8{margin-left:66.666667%}.offset-md-9{margin-left:75%}.offset-md-10{margin-left:83.333333%}.offset-md-11{margin-left:91.666667%}}@media (min-width:992px){.col-lg{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-lg-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:100%}.col-lg-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-lg-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-lg-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-lg-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-lg-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-lg-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-lg-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-lg-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-lg-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-lg-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-lg-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-lg-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.order-lg-first{-ms-flex-order:-1;order:-1}.order-lg-last{-ms-flex-order:13;order:13}.order-lg-0{-ms-flex-order:0;order:0}.order-lg-1{-ms-flex-order:1;order:1}.order-lg-2{-ms-flex-order:2;order:2}.order-lg-3{-ms-flex-order:3;order:3}.order-lg-4{-ms-flex-order:4;order:4}.order-lg-5{-ms-flex-order:5;order:5}.order-lg-6{-ms-flex-order:6;order:6}.order-lg-7{-ms-flex-order:7;order:7}.order-lg-8{-ms-flex-order:8;order:8}.order-lg-9{-ms-flex-order:9;order:9}.order-lg-10{-ms-flex-order:10;order:10}.order-lg-11{-ms-flex-order:11;order:11}.order-lg-12{-ms-flex-order:12;order:12}.offset-lg-0{margin-left:0}.offset-lg-1{margin-left:8.333333%}.offset-lg-2{margin-left:16.666667%}.offset-lg-3{margin-left:25%}.offset-lg-4{margin-left:33.333333%}.offset-lg-5{margin-left:41.666667%}.offset-lg-6{margin-left:50%}.offset-lg-7{margin-left:58.333333%}.offset-lg-8{margin-left:66.666667%}.offset-lg-9{margin-left:75%}.offset-lg-10{margin-left:83.333333%}.offset-lg-11{margin-left:91.666667%}}@media (min-width:1200px){.col-xl{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-xl-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:100%}.col-xl-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-xl-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-xl-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-xl-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-xl-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-xl-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-xl-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-xl-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-xl-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-xl-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-xl-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-xl-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.order-xl-first{-ms-flex-order:-1;order:-1}.order-xl-last{-ms-flex-order:13;order:13}.order-xl-0{-ms-flex-order:0;order:0}.order-xl-1{-ms-flex-order:1;order:1}.order-xl-2{-ms-flex-order:2;order:2}.order-xl-3{-ms-flex-order:3;order:3}.order-xl-4{-ms-flex-order:4;order:4}.order-xl-5{-ms-flex-order:5;order:5}.order-xl-6{-ms-flex-order:6;order:6}.order-xl-7{-ms-flex-order:7;order:7}.order-xl-8{-ms-flex-order:8;order:8}.order-xl-9{-ms-flex-order:9;order:9}.order-xl-10{-ms-flex-order:10;order:10}.order-xl-11{-ms-flex-order:11;order:11}.order-xl-12{-ms-flex-order:12;order:12}.offset-xl-0{margin-left:0}.offset-xl-1{margin-left:8.333333%}.offset-xl-2{margin-left:16.666667%}.offset-xl-3{margin-left:25%}.offset-xl-4{margin-left:33.333333%}.offset-xl-5{margin-left:41.666667%}.offset-xl-6{margin-left:50%}.offset-xl-7{margin-left:58.333333%}.offset-xl-8{margin-left:66.666667%}.offset-xl-9{margin-left:75%}.offset-xl-10{margin-left:83.333333%}.offset-xl-11{margin-left:91.666667%}}.table{width:100%;margin-bottom:1rem;color:#212529}.table td,.table th{padding:.75rem;vertical-align:top;border-top:1px solid #dee2e6}.table thead th{vertical-align:bottom;border-bottom:2px solid #dee2e6}.table tbody+tbody{border-top:2px solid #dee2e6}.table-sm td,.table-sm th{padding:.3rem}.table-bordered{border:1px solid #dee2e6}.table-bordered td,.table-bordered th{border:1px solid #dee2e6}.table-bordered thead td,.table-bordered thead th{border-bottom-width:2px}.table-borderless tbody+tbody,.table-borderless td,.table-borderless th,.table-borderless thead th{border:0}.table-striped tbody tr:nth-of-type(odd){background-color:rgba(0,0,0,.05)}.table-hover tbody tr:hover{color:#212529;background-color:rgba(0,0,0,.075)}.table-primary,.table-primary>td,.table-primary>th{background-color:#b8daff}.table-primary tbody+tbody,.table-primary td,.table-primary th,.table-primary thead th{border-color:#7abaff}.table-hover .table-primary:hover{background-color:#9fcdff}.table-hover .table-primary:hover>td,.table-hover .table-primary:hover>th{background-color:#9fcdff}.table-secondary,.table-secondary>td,.table-secondary>th{background-color:#d6d8db}.table-secondary tbody+tbody,.table-secondary td,.table-secondary th,.table-secondary thead th{border-color:#b3b7bb}.table-hover .table-secondary:hover{background-color:#c8cbcf}.table-hover .table-secondary:hover>td,.table-hover .table-secondary:hover>th{background-color:#c8cbcf}.table-success,.table-success>td,.table-success>th{background-color:#c3e6cb}.table-success tbody+tbody,.table-success td,.table-success th,.table-success thead th{border-color:#8fd19e}.table-hover .table-success:hover{background-color:#b1dfbb}.table-hover .table-success:hover>td,.table-hover .table-success:hover>th{background-color:#b1dfbb}.table-info,.table-info>td,.table-info>th{background-color:#bee5eb}.table-info tbody+tbody,.table-info td,.table-info th,.table-info thead th{border-color:#86cfda}.table-hover .table-info:hover{background-color:#abdde5}.table-hover .table-info:hover>td,.table-hover .table-info:hover>th{background-color:#abdde5}.table-warning,.table-warning>td,.table-warning>th{background-color:#ffeeba}.table-warning tbody+tbody,.table-warning td,.table-warning th,.table-warning thead th{border-color:#ffdf7e}.table-hover .table-warning:hover{background-color:#ffe8a1}.table-hover .table-warning:hover>td,.table-hover .table-warning:hover>th{background-color:#ffe8a1}.table-danger,.table-danger>td,.table-danger>th{background-color:#f5c6cb}.table-danger tbody+tbody,.table-danger td,.table-danger th,.table-danger thead th{border-color:#ed969e}.table-hover .table-danger:hover{background-color:#f1b0b7}.table-hover .table-danger:hover>td,.table-hover .table-danger:hover>th{background-color:#f1b0b7}.table-light,.table-light>td,.table-light>th{background-color:#fdfdfe}.table-light tbody+tbody,.table-light td,.table-light th,.table-light thead th{border-color:#fbfcfc}.table-hover .table-light:hover{background-color:#ececf6}.table-hover .table-light:hover>td,.table-hover .table-light:hover>th{background-color:#ececf6}.table-dark,.table-dark>td,.table-dark>th{background-color:#c6c8ca}.table-dark tbody+tbody,.table-dark td,.table-dark th,.table-dark thead th{border-color:#95999c}.table-hover .table-dark:hover{background-color:#b9bbbe}.table-hover .table-dark:hover>td,.table-hover .table-dark:hover>th{background-color:#b9bbbe}.table-active,.table-active>td,.table-active>th{background-color:rgba(0,0,0,.075)}.table-hover .table-active:hover{background-color:rgba(0,0,0,.075)}.table-hover .table-active:hover>td,.table-hover .table-active:hover>th{background-color:rgba(0,0,0,.075)}.table .thead-dark th{color:#fff;background-color:#343a40;border-color:#454d55}.table .thead-light th{color:#495057;background-color:#e9ecef;border-color:#dee2e6}.table-dark{color:#fff;background-color:#343a40}.table-dark td,.table-dark th,.table-dark thead th{border-color:#454d55}.table-dark.table-bordered{border:0}.table-dark.table-striped tbody tr:nth-of-type(odd){background-color:rgba(255,255,255,.05)}.table-dark.table-hover tbody tr:hover{color:#fff;background-color:rgba(255,255,255,.075)}@media (max-width:575.98px){.table-responsive-sm{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch}.table-responsive-sm>.table-bordered{border:0}}@media (max-width:767.98px){.table-responsive-md{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch}.table-responsive-md>.table-bordered{border:0}}@media (max-width:991.98px){.table-responsive-lg{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch}.table-responsive-lg>.table-bordered{border:0}}@media (max-width:1199.98px){.table-responsive-xl{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch}.table-responsive-xl>.table-bordered{border:0}}.table-responsive{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch}.table-responsive>.table-bordered{border:0}.form-control{display:block;width:100%;height:calc(1.5em + .75rem + 2px);padding:.375rem .75rem;font-size:1rem;font-weight:400;line-height:1.5;color:#495057;background-color:#fff;background-clip:padding-box;border:1px solid #ced4da;border-radius:.25rem;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.form-control{transition:none}}.form-control::-ms-expand{background-color:transparent;border:0}.form-control:focus{color:#495057;background-color:#fff;border-color:#80bdff;outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)}.form-control::-webkit-input-placeholder{color:#6c757d;opacity:1}.form-control::-moz-placeholder{color:#6c757d;opacity:1}.form-control:-ms-input-placeholder{color:#6c757d;opacity:1}.form-control::-ms-input-placeholder{color:#6c757d;opacity:1}.form-control::placeholder{color:#6c757d;opacity:1}.form-control:disabled,.form-control[readonly]{background-color:#e9ecef;opacity:1}select.form-control:focus::-ms-value{color:#495057;background-color:#fff}.form-control-file,.form-control-range{display:block;width:100%}.col-form-label{padding-top:calc(.375rem + 1px);padding-bottom:calc(.375rem + 1px);margin-bottom:0;font-size:inherit;line-height:1.5}.col-form-label-lg{padding-top:calc(.5rem + 1px);padding-bottom:calc(.5rem + 1px);font-size:1.25rem;line-height:1.5}.col-form-label-sm{padding-top:calc(.25rem + 1px);padding-bottom:calc(.25rem + 1px);font-size:.875rem;line-height:1.5}.form-control-plaintext{display:block;width:100%;padding-top:.375rem;padding-bottom:.375rem;margin-bottom:0;line-height:1.5;color:#212529;background-color:transparent;border:solid transparent;border-width:1px 0}.form-control-plaintext.form-control-lg,.form-control-plaintext.form-control-sm{padding-right:0;padding-left:0}.form-control-sm{height:calc(1.5em + .5rem + 2px);padding:.25rem .5rem;font-size:.875rem;line-height:1.5;border-radius:.2rem}.form-control-lg{height:calc(1.5em + 1rem + 2px);padding:.5rem 1rem;font-size:1.25rem;line-height:1.5;border-radius:.3rem}select.form-control[multiple],select.form-control[size]{height:auto}textarea.form-control{height:auto}.form-group{margin-bottom:1rem}.form-text{display:block;margin-top:.25rem}.form-row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-5px;margin-left:-5px}.form-row>.col,.form-row>[class*=col-]{padding-right:5px;padding-left:5px}.form-check{position:relative;display:block;padding-left:1.25rem}.form-check-input{position:absolute;margin-top:.3rem;margin-left:-1.25rem}.form-check-input:disabled~.form-check-label{color:#6c757d}.form-check-label{margin-bottom:0}.form-check-inline{display:-ms-inline-flexbox;display:inline-flex;-ms-flex-align:center;align-items:center;padding-left:0;margin-right:.75rem}.form-check-inline .form-check-input{position:static;margin-top:0;margin-right:.3125rem;margin-left:0}.valid-feedback{display:none;width:100%;margin-top:.25rem;font-size:80%;color:#28a745}.valid-tooltip{position:absolute;top:100%;z-index:5;display:none;max-width:100%;padding:.25rem .5rem;margin-top:.1rem;font-size:.875rem;line-height:1.5;color:#fff;background-color:rgba(40,167,69,.9);border-radius:.25rem}.form-control.is-valid,.was-validated .form-control:valid{border-color:#28a745;padding-right:calc(1.5em + .75rem);background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");background-repeat:no-repeat;background-position:center right calc(.375em + .1875rem);background-size:calc(.75em + .375rem) calc(.75em + .375rem)}.form-control.is-valid:focus,.was-validated .form-control:valid:focus{border-color:#28a745;box-shadow:0 0 0 .2rem rgba(40,167,69,.25)}.form-control.is-valid~.valid-feedback,.form-control.is-valid~.valid-tooltip,.was-validated .form-control:valid~.valid-feedback,.was-validated .form-control:valid~.valid-tooltip{display:block}.was-validated textarea.form-control:valid,textarea.form-control.is-valid{padding-right:calc(1.5em + .75rem);background-position:top calc(.375em + .1875rem) right calc(.375em + .1875rem)}.custom-select.is-valid,.was-validated .custom-select:valid{border-color:#28a745;padding-right:calc((1em + .75rem) * 3 / 4 + 1.75rem);background:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right .75rem center/8px 10px,url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") #fff no-repeat center right 1.75rem/calc(.75em + .375rem) calc(.75em + .375rem)}.custom-select.is-valid:focus,.was-validated .custom-select:valid:focus{border-color:#28a745;box-shadow:0 0 0 .2rem rgba(40,167,69,.25)}.custom-select.is-valid~.valid-feedback,.custom-select.is-valid~.valid-tooltip,.was-validated .custom-select:valid~.valid-feedback,.was-validated .custom-select:valid~.valid-tooltip{display:block}.form-control-file.is-valid~.valid-feedback,.form-control-file.is-valid~.valid-tooltip,.was-validated .form-control-file:valid~.valid-feedback,.was-validated .form-control-file:valid~.valid-tooltip{display:block}.form-check-input.is-valid~.form-check-label,.was-validated .form-check-input:valid~.form-check-label{color:#28a745}.form-check-input.is-valid~.valid-feedback,.form-check-input.is-valid~.valid-tooltip,.was-validated .form-check-input:valid~.valid-feedback,.was-validated .form-check-input:valid~.valid-tooltip{display:block}.custom-control-input.is-valid~.custom-control-label,.was-validated .custom-control-input:valid~.custom-control-label{color:#28a745}.custom-control-input.is-valid~.custom-control-label::before,.was-validated .custom-control-input:valid~.custom-control-label::before{border-color:#28a745}.custom-control-input.is-valid~.valid-feedback,.custom-control-input.is-valid~.valid-tooltip,.was-validated .custom-control-input:valid~.valid-feedback,.was-validated .custom-control-input:valid~.valid-tooltip{display:block}.custom-control-input.is-valid:checked~.custom-control-label::before,.was-validated .custom-control-input:valid:checked~.custom-control-label::before{border-color:#34ce57;background-color:#34ce57}.custom-control-input.is-valid:focus~.custom-control-label::before,.was-validated .custom-control-input:valid:focus~.custom-control-label::before{box-shadow:0 0 0 .2rem rgba(40,167,69,.25)}.custom-control-input.is-valid:focus:not(:checked)~.custom-control-label::before,.was-validated .custom-control-input:valid:focus:not(:checked)~.custom-control-label::before{border-color:#28a745}.custom-file-input.is-valid~.custom-file-label,.was-validated .custom-file-input:valid~.custom-file-label{border-color:#28a745}.custom-file-input.is-valid~.valid-feedback,.custom-file-input.is-valid~.valid-tooltip,.was-validated .custom-file-input:valid~.valid-feedback,.was-validated .custom-file-input:valid~.valid-tooltip{display:block}.custom-file-input.is-valid:focus~.custom-file-label,.was-validated .custom-file-input:valid:focus~.custom-file-label{border-color:#28a745;box-shadow:0 0 0 .2rem rgba(40,167,69,.25)}.invalid-feedback{display:none;width:100%;margin-top:.25rem;font-size:80%;color:#dc3545}.invalid-tooltip{position:absolute;top:100%;z-index:5;display:none;max-width:100%;padding:.25rem .5rem;margin-top:.1rem;font-size:.875rem;line-height:1.5;color:#fff;background-color:rgba(220,53,69,.9);border-radius:.25rem}.form-control.is-invalid,.was-validated .form-control:invalid{border-color:#dc3545;padding-right:calc(1.5em + .75rem);background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23dc3545' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23dc3545' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E");background-repeat:no-repeat;background-position:center right calc(.375em + .1875rem);background-size:calc(.75em + .375rem) calc(.75em + .375rem)}.form-control.is-invalid:focus,.was-validated .form-control:invalid:focus{border-color:#dc3545;box-shadow:0 0 0 .2rem rgba(220,53,69,.25)}.form-control.is-invalid~.invalid-feedback,.form-control.is-invalid~.invalid-tooltip,.was-validated .form-control:invalid~.invalid-feedback,.was-validated .form-control:invalid~.invalid-tooltip{display:block}.was-validated textarea.form-control:invalid,textarea.form-control.is-invalid{padding-right:calc(1.5em + .75rem);background-position:top calc(.375em + .1875rem) right calc(.375em + .1875rem)}.custom-select.is-invalid,.was-validated .custom-select:invalid{border-color:#dc3545;padding-right:calc((1em + .75rem) * 3 / 4 + 1.75rem);background:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right .75rem center/8px 10px,url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23dc3545' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23dc3545' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E") #fff no-repeat center right 1.75rem/calc(.75em + .375rem) calc(.75em + .375rem)}.custom-select.is-invalid:focus,.was-validated .custom-select:invalid:focus{border-color:#dc3545;box-shadow:0 0 0 .2rem rgba(220,53,69,.25)}.custom-select.is-invalid~.invalid-feedback,.custom-select.is-invalid~.invalid-tooltip,.was-validated .custom-select:invalid~.invalid-feedback,.was-validated .custom-select:invalid~.invalid-tooltip{display:block}.form-control-file.is-invalid~.invalid-feedback,.form-control-file.is-invalid~.invalid-tooltip,.was-validated .form-control-file:invalid~.invalid-feedback,.was-validated .form-control-file:invalid~.invalid-tooltip{display:block}.form-check-input.is-invalid~.form-check-label,.was-validated .form-check-input:invalid~.form-check-label{color:#dc3545}.form-check-input.is-invalid~.invalid-feedback,.form-check-input.is-invalid~.invalid-tooltip,.was-validated .form-check-input:invalid~.invalid-feedback,.was-validated .form-check-input:invalid~.invalid-tooltip{display:block}.custom-control-input.is-invalid~.custom-control-label,.was-validated .custom-control-input:invalid~.custom-control-label{color:#dc3545}.custom-control-input.is-invalid~.custom-control-label::before,.was-validated .custom-control-input:invalid~.custom-control-label::before{border-color:#dc3545}.custom-control-input.is-invalid~.invalid-feedback,.custom-control-input.is-invalid~.invalid-tooltip,.was-validated .custom-control-input:invalid~.invalid-feedback,.was-validated .custom-control-input:invalid~.invalid-tooltip{display:block}.custom-control-input.is-invalid:checked~.custom-control-label::before,.was-validated .custom-control-input:invalid:checked~.custom-control-label::before{border-color:#e4606d;background-color:#e4606d}.custom-control-input.is-invalid:focus~.custom-control-label::before,.was-validated .custom-control-input:invalid:focus~.custom-control-label::before{box-shadow:0 0 0 .2rem rgba(220,53,69,.25)}.custom-control-input.is-invalid:focus:not(:checked)~.custom-control-label::before,.was-validated .custom-control-input:invalid:focus:not(:checked)~.custom-control-label::before{border-color:#dc3545}.custom-file-input.is-invalid~.custom-file-label,.was-validated .custom-file-input:invalid~.custom-file-label{border-color:#dc3545}.custom-file-input.is-invalid~.invalid-feedback,.custom-file-input.is-invalid~.invalid-tooltip,.was-validated .custom-file-input:invalid~.invalid-feedback,.was-validated .custom-file-input:invalid~.invalid-tooltip{display:block}.custom-file-input.is-invalid:focus~.custom-file-label,.was-validated .custom-file-input:invalid:focus~.custom-file-label{border-color:#dc3545;box-shadow:0 0 0 .2rem rgba(220,53,69,.25)}.form-inline{display:-ms-flexbox;display:flex;-ms-flex-flow:row wrap;flex-flow:row wrap;-ms-flex-align:center;align-items:center}.form-inline .form-check{width:100%}@media (min-width:576px){.form-inline label{display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;-ms-flex-pack:center;justify-content:center;margin-bottom:0}.form-inline .form-group{display:-ms-flexbox;display:flex;-ms-flex:0 0 auto;flex:0 0 auto;-ms-flex-flow:row wrap;flex-flow:row wrap;-ms-flex-align:center;align-items:center;margin-bottom:0}.form-inline .form-control{display:inline-block;width:auto;vertical-align:middle}.form-inline .form-control-plaintext{display:inline-block}.form-inline .custom-select,.form-inline .input-group{width:auto}.form-inline .form-check{display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;-ms-flex-pack:center;justify-content:center;width:auto;padding-left:0}.form-inline .form-check-input{position:relative;-ms-flex-negative:0;flex-shrink:0;margin-top:0;margin-right:.25rem;margin-left:0}.form-inline .custom-control{-ms-flex-align:center;align-items:center;-ms-flex-pack:center;justify-content:center}.form-inline .custom-control-label{margin-bottom:0}}.btn{display:inline-block;font-weight:400;color:#212529;text-align:center;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:transparent;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;line-height:1.5;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.btn{transition:none}}.btn:hover{color:#212529;text-decoration:none}.btn.focus,.btn:focus{outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)}.btn.disabled,.btn:disabled{opacity:.65}a.btn.disabled,fieldset:disabled a.btn{pointer-events:none}.btn-primary{color:#fff;background-color:#007bff;border-color:#007bff}.btn-primary:hover{color:#fff;background-color:#0069d9;border-color:#0062cc}.btn-primary.focus,.btn-primary:focus{box-shadow:0 0 0 .2rem rgba(38,143,255,.5)}.btn-primary.disabled,.btn-primary:disabled{color:#fff;background-color:#007bff;border-color:#007bff}.btn-primary:not(:disabled):not(.disabled).active,.btn-primary:not(:disabled):not(.disabled):active,.show>.btn-primary.dropdown-toggle{color:#fff;background-color:#0062cc;border-color:#005cbf}.btn-primary:not(:disabled):not(.disabled).active:focus,.btn-primary:not(:disabled):not(.disabled):active:focus,.show>.btn-primary.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(38,143,255,.5)}.btn-secondary{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-secondary:hover{color:#fff;background-color:#5a6268;border-color:#545b62}.btn-secondary.focus,.btn-secondary:focus{box-shadow:0 0 0 .2rem rgba(130,138,145,.5)}.btn-secondary.disabled,.btn-secondary:disabled{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-secondary:not(:disabled):not(.disabled).active,.btn-secondary:not(:disabled):not(.disabled):active,.show>.btn-secondary.dropdown-toggle{color:#fff;background-color:#545b62;border-color:#4e555b}.btn-secondary:not(:disabled):not(.disabled).active:focus,.btn-secondary:not(:disabled):not(.disabled):active:focus,.show>.btn-secondary.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(130,138,145,.5)}.btn-success{color:#fff;background-color:#28a745;border-color:#28a745}.btn-success:hover{color:#fff;background-color:#218838;border-color:#1e7e34}.btn-success.focus,.btn-success:focus{box-shadow:0 0 0 .2rem rgba(72,180,97,.5)}.btn-success.disabled,.btn-success:disabled{color:#fff;background-color:#28a745;border-color:#28a745}.btn-success:not(:disabled):not(.disabled).active,.btn-success:not(:disabled):not(.disabled):active,.show>.btn-success.dropdown-toggle{color:#fff;background-color:#1e7e34;border-color:#1c7430}.btn-success:not(:disabled):not(.disabled).active:focus,.btn-success:not(:disabled):not(.disabled):active:focus,.show>.btn-success.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(72,180,97,.5)}.btn-info{color:#fff;background-color:#17a2b8;border-color:#17a2b8}.btn-info:hover{color:#fff;background-color:#138496;border-color:#117a8b}.btn-info.focus,.btn-info:focus{box-shadow:0 0 0 .2rem rgba(58,176,195,.5)}.btn-info.disabled,.btn-info:disabled{color:#fff;background-color:#17a2b8;border-color:#17a2b8}.btn-info:not(:disabled):not(.disabled).active,.btn-info:not(:disabled):not(.disabled):active,.show>.btn-info.dropdown-toggle{color:#fff;background-color:#117a8b;border-color:#10707f}.btn-info:not(:disabled):not(.disabled).active:focus,.btn-info:not(:disabled):not(.disabled):active:focus,.show>.btn-info.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(58,176,195,.5)}.btn-warning{color:#212529;background-color:#ffc107;border-color:#ffc107}.btn-warning:hover{color:#212529;background-color:#e0a800;border-color:#d39e00}.btn-warning.focus,.btn-warning:focus{box-shadow:0 0 0 .2rem rgba(222,170,12,.5)}.btn-warning.disabled,.btn-warning:disabled{color:#212529;background-color:#ffc107;border-color:#ffc107}.btn-warning:not(:disabled):not(.disabled).active,.btn-warning:not(:disabled):not(.disabled):active,.show>.btn-warning.dropdown-toggle{color:#212529;background-color:#d39e00;border-color:#c69500}.btn-warning:not(:disabled):not(.disabled).active:focus,.btn-warning:not(:disabled):not(.disabled):active:focus,.show>.btn-warning.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(222,170,12,.5)}.btn-danger{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-danger:hover{color:#fff;background-color:#c82333;border-color:#bd2130}.btn-danger.focus,.btn-danger:focus{box-shadow:0 0 0 .2rem rgba(225,83,97,.5)}.btn-danger.disabled,.btn-danger:disabled{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-danger:not(:disabled):not(.disabled).active,.btn-danger:not(:disabled):not(.disabled):active,.show>.btn-danger.dropdown-toggle{color:#fff;background-color:#bd2130;border-color:#b21f2d}.btn-danger:not(:disabled):not(.disabled).active:focus,.btn-danger:not(:disabled):not(.disabled):active:focus,.show>.btn-danger.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(225,83,97,.5)}.btn-light{color:#212529;background-color:#f8f9fa;border-color:#f8f9fa}.btn-light:hover{color:#212529;background-color:#e2e6ea;border-color:#dae0e5}.btn-light.focus,.btn-light:focus{box-shadow:0 0 0 .2rem rgba(216,217,219,.5)}.btn-light.disabled,.btn-light:disabled{color:#212529;background-color:#f8f9fa;border-color:#f8f9fa}.btn-light:not(:disabled):not(.disabled).active,.btn-light:not(:disabled):not(.disabled):active,.show>.btn-light.dropdown-toggle{color:#212529;background-color:#dae0e5;border-color:#d3d9df}.btn-light:not(:disabled):not(.disabled).active:focus,.btn-light:not(:disabled):not(.disabled):active:focus,.show>.btn-light.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(216,217,219,.5)}.btn-dark{color:#fff;background-color:#343a40;border-color:#343a40}.btn-dark:hover{color:#fff;background-color:#23272b;border-color:#1d2124}.btn-dark.focus,.btn-dark:focus{box-shadow:0 0 0 .2rem rgba(82,88,93,.5)}.btn-dark.disabled,.btn-dark:disabled{color:#fff;background-color:#343a40;border-color:#343a40}.btn-dark:not(:disabled):not(.disabled).active,.btn-dark:not(:disabled):not(.disabled):active,.show>.btn-dark.dropdown-toggle{color:#fff;background-color:#1d2124;border-color:#171a1d}.btn-dark:not(:disabled):not(.disabled).active:focus,.btn-dark:not(:disabled):not(.disabled):active:focus,.show>.btn-dark.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(82,88,93,.5)}.btn-outline-primary{color:#007bff;border-color:#007bff}.btn-outline-primary:hover{color:#fff;background-color:#007bff;border-color:#007bff}.btn-outline-primary.focus,.btn-outline-primary:focus{box-shadow:0 0 0 .2rem rgba(0,123,255,.5)}.btn-outline-primary.disabled,.btn-outline-primary:disabled{color:#007bff;background-color:transparent}.btn-outline-primary:not(:disabled):not(.disabled).active,.btn-outline-primary:not(:disabled):not(.disabled):active,.show>.btn-outline-primary.dropdown-toggle{color:#fff;background-color:#007bff;border-color:#007bff}.btn-outline-primary:not(:disabled):not(.disabled).active:focus,.btn-outline-primary:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-primary.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(0,123,255,.5)}.btn-outline-secondary{color:#6c757d;border-color:#6c757d}.btn-outline-secondary:hover{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-outline-secondary.focus,.btn-outline-secondary:focus{box-shadow:0 0 0 .2rem rgba(108,117,125,.5)}.btn-outline-secondary.disabled,.btn-outline-secondary:disabled{color:#6c757d;background-color:transparent}.btn-outline-secondary:not(:disabled):not(.disabled).active,.btn-outline-secondary:not(:disabled):not(.disabled):active,.show>.btn-outline-secondary.dropdown-toggle{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-outline-secondary:not(:disabled):not(.disabled).active:focus,.btn-outline-secondary:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-secondary.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(108,117,125,.5)}.btn-outline-success{color:#28a745;border-color:#28a745}.btn-outline-success:hover{color:#fff;background-color:#28a745;border-color:#28a745}.btn-outline-success.focus,.btn-outline-success:focus{box-shadow:0 0 0 .2rem rgba(40,167,69,.5)}.btn-outline-success.disabled,.btn-outline-success:disabled{color:#28a745;background-color:transparent}.btn-outline-success:not(:disabled):not(.disabled).active,.btn-outline-success:not(:disabled):not(.disabled):active,.show>.btn-outline-success.dropdown-toggle{color:#fff;background-color:#28a745;border-color:#28a745}.btn-outline-success:not(:disabled):not(.disabled).active:focus,.btn-outline-success:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-success.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(40,167,69,.5)}.btn-outline-info{color:#17a2b8;border-color:#17a2b8}.btn-outline-info:hover{color:#fff;background-color:#17a2b8;border-color:#17a2b8}.btn-outline-info.focus,.btn-outline-info:focus{box-shadow:0 0 0 .2rem rgba(23,162,184,.5)}.btn-outline-info.disabled,.btn-outline-info:disabled{color:#17a2b8;background-color:transparent}.btn-outline-info:not(:disabled):not(.disabled).active,.btn-outline-info:not(:disabled):not(.disabled):active,.show>.btn-outline-info.dropdown-toggle{color:#fff;background-color:#17a2b8;border-color:#17a2b8}.btn-outline-info:not(:disabled):not(.disabled).active:focus,.btn-outline-info:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-info.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(23,162,184,.5)}.btn-outline-warning{color:#ffc107;border-color:#ffc107}.btn-outline-warning:hover{color:#212529;background-color:#ffc107;border-color:#ffc107}.btn-outline-warning.focus,.btn-outline-warning:focus{box-shadow:0 0 0 .2rem rgba(255,193,7,.5)}.btn-outline-warning.disabled,.btn-outline-warning:disabled{color:#ffc107;background-color:transparent}.btn-outline-warning:not(:disabled):not(.disabled).active,.btn-outline-warning:not(:disabled):not(.disabled):active,.show>.btn-outline-warning.dropdown-toggle{color:#212529;background-color:#ffc107;border-color:#ffc107}.btn-outline-warning:not(:disabled):not(.disabled).active:focus,.btn-outline-warning:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-warning.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(255,193,7,.5)}.btn-outline-danger{color:#dc3545;border-color:#dc3545}.btn-outline-danger:hover{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-outline-danger.focus,.btn-outline-danger:focus{box-shadow:0 0 0 .2rem rgba(220,53,69,.5)}.btn-outline-danger.disabled,.btn-outline-danger:disabled{color:#dc3545;background-color:transparent}.btn-outline-danger:not(:disabled):not(.disabled).active,.btn-outline-danger:not(:disabled):not(.disabled):active,.show>.btn-outline-danger.dropdown-toggle{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-outline-danger:not(:disabled):not(.disabled).active:focus,.btn-outline-danger:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-danger.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(220,53,69,.5)}.btn-outline-light{color:#f8f9fa;border-color:#f8f9fa}.btn-outline-light:hover{color:#212529;background-color:#f8f9fa;border-color:#f8f9fa}.btn-outline-light.focus,.btn-outline-light:focus{box-shadow:0 0 0 .2rem rgba(248,249,250,.5)}.btn-outline-light.disabled,.btn-outline-light:disabled{color:#f8f9fa;background-color:transparent}.btn-outline-light:not(:disabled):not(.disabled).active,.btn-outline-light:not(:disabled):not(.disabled):active,.show>.btn-outline-light.dropdown-toggle{color:#212529;background-color:#f8f9fa;border-color:#f8f9fa}.btn-outline-light:not(:disabled):not(.disabled).active:focus,.btn-outline-light:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-light.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(248,249,250,.5)}.btn-outline-dark{color:#343a40;border-color:#343a40}.btn-outline-dark:hover{color:#fff;background-color:#343a40;border-color:#343a40}.btn-outline-dark.focus,.btn-outline-dark:focus{box-shadow:0 0 0 .2rem rgba(52,58,64,.5)}.btn-outline-dark.disabled,.btn-outline-dark:disabled{color:#343a40;background-color:transparent}.btn-outline-dark:not(:disabled):not(.disabled).active,.btn-outline-dark:not(:disabled):not(.disabled):active,.show>.btn-outline-dark.dropdown-toggle{color:#fff;background-color:#343a40;border-color:#343a40}.btn-outline-dark:not(:disabled):not(.disabled).active:focus,.btn-outline-dark:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-dark.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(52,58,64,.5)}.btn-link{font-weight:400;color:#007bff;text-decoration:none}.btn-link:hover{color:#0056b3;text-decoration:underline}.btn-link.focus,.btn-link:focus{text-decoration:underline;box-shadow:none}.btn-link.disabled,.btn-link:disabled{color:#6c757d;pointer-events:none}.btn-group-lg>.btn,.btn-lg{padding:.5rem 1rem;font-size:1.25rem;line-height:1.5;border-radius:.3rem}.btn-group-sm>.btn,.btn-sm{padding:.25rem .5rem;font-size:.875rem;line-height:1.5;border-radius:.2rem}.btn-block{display:block;width:100%}.btn-block+.btn-block{margin-top:.5rem}input[type=button].btn-block,input[type=reset].btn-block,input[type=submit].btn-block{width:100%}.fade{transition:opacity .15s linear}@media (prefers-reduced-motion:reduce){.fade{transition:none}}.fade:not(.show){opacity:0}.collapse:not(.show){display:none}.collapsing{position:relative;height:0;overflow:hidden;transition:height .35s ease}@media (prefers-reduced-motion:reduce){.collapsing{transition:none}}.dropdown,.dropleft,.dropright,.dropup{position:relative}.dropdown-toggle{white-space:nowrap}.dropdown-toggle::after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:.3em solid;border-right:.3em solid transparent;border-bottom:0;border-left:.3em solid transparent}.dropdown-toggle:empty::after{margin-left:0}.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:10rem;padding:.5rem 0;margin:.125rem 0 0;font-size:1rem;color:#212529;text-align:left;list-style:none;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.15);border-radius:.25rem}.dropdown-menu-left{right:auto;left:0}.dropdown-menu-right{right:0;left:auto}@media (min-width:576px){.dropdown-menu-sm-left{right:auto;left:0}.dropdown-menu-sm-right{right:0;left:auto}}@media (min-width:768px){.dropdown-menu-md-left{right:auto;left:0}.dropdown-menu-md-right{right:0;left:auto}}@media (min-width:992px){.dropdown-menu-lg-left{right:auto;left:0}.dropdown-menu-lg-right{right:0;left:auto}}@media (min-width:1200px){.dropdown-menu-xl-left{right:auto;left:0}.dropdown-menu-xl-right{right:0;left:auto}}.dropup .dropdown-menu{top:auto;bottom:100%;margin-top:0;margin-bottom:.125rem}.dropup .dropdown-toggle::after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:0;border-right:.3em solid transparent;border-bottom:.3em solid;border-left:.3em solid transparent}.dropup .dropdown-toggle:empty::after{margin-left:0}.dropright .dropdown-menu{top:0;right:auto;left:100%;margin-top:0;margin-left:.125rem}.dropright .dropdown-toggle::after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:.3em solid transparent;border-right:0;border-bottom:.3em solid transparent;border-left:.3em solid}.dropright .dropdown-toggle:empty::after{margin-left:0}.dropright .dropdown-toggle::after{vertical-align:0}.dropleft .dropdown-menu{top:0;right:100%;left:auto;margin-top:0;margin-right:.125rem}.dropleft .dropdown-toggle::after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";display:none}.dropleft .dropdown-toggle::before{display:inline-block;margin-right:.255em;vertical-align:.255em;content:"";border-top:.3em solid transparent;border-right:.3em solid;border-bottom:.3em solid transparent}.dropleft .dropdown-toggle:empty::after{margin-left:0}.dropleft .dropdown-toggle::before{vertical-align:0}.dropdown-menu[x-placement^=bottom],.dropdown-menu[x-placement^=left],.dropdown-menu[x-placement^=right],.dropdown-menu[x-placement^=top]{right:auto;bottom:auto}.dropdown-divider{height:0;margin:.5rem 0;overflow:hidden;border-top:1px solid #e9ecef}.dropdown-item{display:block;width:100%;padding:.25rem 1.5rem;clear:both;font-weight:400;color:#212529;text-align:inherit;white-space:nowrap;background-color:transparent;border:0}.dropdown-item:focus,.dropdown-item:hover{color:#16181b;text-decoration:none;background-color:#f8f9fa}.dropdown-item.active,.dropdown-item:active{color:#fff;text-decoration:none;background-color:#007bff}.dropdown-item.disabled,.dropdown-item:disabled{color:#6c757d;pointer-events:none;background-color:transparent}.dropdown-menu.show{display:block}.dropdown-header{display:block;padding:.5rem 1.5rem;margin-bottom:0;font-size:.875rem;color:#6c757d;white-space:nowrap}.dropdown-item-text{display:block;padding:.25rem 1.5rem;color:#212529}.btn-group,.btn-group-vertical{position:relative;display:-ms-inline-flexbox;display:inline-flex;vertical-align:middle}.btn-group-vertical>.btn,.btn-group>.btn{position:relative;-ms-flex:1 1 auto;flex:1 1 auto}.btn-group-vertical>.btn:hover,.btn-group>.btn:hover{z-index:1}.btn-group-vertical>.btn.active,.btn-group-vertical>.btn:active,.btn-group-vertical>.btn:focus,.btn-group>.btn.active,.btn-group>.btn:active,.btn-group>.btn:focus{z-index:1}.btn-toolbar{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-pack:start;justify-content:flex-start}.btn-toolbar .input-group{width:auto}.btn-group>.btn-group:not(:first-child),.btn-group>.btn:not(:first-child){margin-left:-1px}.btn-group>.btn-group:not(:last-child)>.btn,.btn-group>.btn:not(:last-child):not(.dropdown-toggle){border-top-right-radius:0;border-bottom-right-radius:0}.btn-group>.btn-group:not(:first-child)>.btn,.btn-group>.btn:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0}.dropdown-toggle-split{padding-right:.5625rem;padding-left:.5625rem}.dropdown-toggle-split::after,.dropright .dropdown-toggle-split::after,.dropup .dropdown-toggle-split::after{margin-left:0}.dropleft .dropdown-toggle-split::before{margin-right:0}.btn-group-sm>.btn+.dropdown-toggle-split,.btn-sm+.dropdown-toggle-split{padding-right:.375rem;padding-left:.375rem}.btn-group-lg>.btn+.dropdown-toggle-split,.btn-lg+.dropdown-toggle-split{padding-right:.75rem;padding-left:.75rem}.btn-group-vertical{-ms-flex-direction:column;flex-direction:column;-ms-flex-align:start;align-items:flex-start;-ms-flex-pack:center;justify-content:center}.btn-group-vertical>.btn,.btn-group-vertical>.btn-group{width:100%}.btn-group-vertical>.btn-group:not(:first-child),.btn-group-vertical>.btn:not(:first-child){margin-top:-1px}.btn-group-vertical>.btn-group:not(:last-child)>.btn,.btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle){border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn-group:not(:first-child)>.btn,.btn-group-vertical>.btn:not(:first-child){border-top-left-radius:0;border-top-right-radius:0}.btn-group-toggle>.btn,.btn-group-toggle>.btn-group>.btn{margin-bottom:0}.btn-group-toggle>.btn input[type=checkbox],.btn-group-toggle>.btn input[type=radio],.btn-group-toggle>.btn-group>.btn input[type=checkbox],.btn-group-toggle>.btn-group>.btn input[type=radio]{position:absolute;clip:rect(0,0,0,0);pointer-events:none}.input-group{position:relative;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-align:stretch;align-items:stretch;width:100%}.input-group>.custom-file,.input-group>.custom-select,.input-group>.form-control,.input-group>.form-control-plaintext{position:relative;-ms-flex:1 1 auto;flex:1 1 auto;width:1%;margin-bottom:0}.input-group>.custom-file+.custom-file,.input-group>.custom-file+.custom-select,.input-group>.custom-file+.form-control,.input-group>.custom-select+.custom-file,.input-group>.custom-select+.custom-select,.input-group>.custom-select+.form-control,.input-group>.form-control+.custom-file,.input-group>.form-control+.custom-select,.input-group>.form-control+.form-control,.input-group>.form-control-plaintext+.custom-file,.input-group>.form-control-plaintext+.custom-select,.input-group>.form-control-plaintext+.form-control{margin-left:-1px}.input-group>.custom-file .custom-file-input:focus~.custom-file-label,.input-group>.custom-select:focus,.input-group>.form-control:focus{z-index:3}.input-group>.custom-file .custom-file-input:focus{z-index:4}.input-group>.custom-select:not(:last-child),.input-group>.form-control:not(:last-child){border-top-right-radius:0;border-bottom-right-radius:0}.input-group>.custom-select:not(:first-child),.input-group>.form-control:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0}.input-group>.custom-file{display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center}.input-group>.custom-file:not(:last-child) .custom-file-label,.input-group>.custom-file:not(:last-child) .custom-file-label::after{border-top-right-radius:0;border-bottom-right-radius:0}.input-group>.custom-file:not(:first-child) .custom-file-label{border-top-left-radius:0;border-bottom-left-radius:0}.input-group-append,.input-group-prepend{display:-ms-flexbox;display:flex}.input-group-append .btn,.input-group-prepend .btn{position:relative;z-index:2}.input-group-append .btn:focus,.input-group-prepend .btn:focus{z-index:3}.input-group-append .btn+.btn,.input-group-append .btn+.input-group-text,.input-group-append .input-group-text+.btn,.input-group-append .input-group-text+.input-group-text,.input-group-prepend .btn+.btn,.input-group-prepend .btn+.input-group-text,.input-group-prepend .input-group-text+.btn,.input-group-prepend .input-group-text+.input-group-text{margin-left:-1px}.input-group-prepend{margin-right:-1px}.input-group-append{margin-left:-1px}.input-group-text{display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;padding:.375rem .75rem;margin-bottom:0;font-size:1rem;font-weight:400;line-height:1.5;color:#495057;text-align:center;white-space:nowrap;background-color:#e9ecef;border:1px solid #ced4da;border-radius:.25rem}.input-group-text input[type=checkbox],.input-group-text input[type=radio]{margin-top:0}.input-group-lg>.custom-select,.input-group-lg>.form-control:not(textarea){height:calc(1.5em + 1rem + 2px)}.input-group-lg>.custom-select,.input-group-lg>.form-control,.input-group-lg>.input-group-append>.btn,.input-group-lg>.input-group-append>.input-group-text,.input-group-lg>.input-group-prepend>.btn,.input-group-lg>.input-group-prepend>.input-group-text{padding:.5rem 1rem;font-size:1.25rem;line-height:1.5;border-radius:.3rem}.input-group-sm>.custom-select,.input-group-sm>.form-control:not(textarea){height:calc(1.5em + .5rem + 2px)}.input-group-sm>.custom-select,.input-group-sm>.form-control,.input-group-sm>.input-group-append>.btn,.input-group-sm>.input-group-append>.input-group-text,.input-group-sm>.input-group-prepend>.btn,.input-group-sm>.input-group-prepend>.input-group-text{padding:.25rem .5rem;font-size:.875rem;line-height:1.5;border-radius:.2rem}.input-group-lg>.custom-select,.input-group-sm>.custom-select{padding-right:1.75rem}.input-group>.input-group-append:last-child>.btn:not(:last-child):not(.dropdown-toggle),.input-group>.input-group-append:last-child>.input-group-text:not(:last-child),.input-group>.input-group-append:not(:last-child)>.btn,.input-group>.input-group-append:not(:last-child)>.input-group-text,.input-group>.input-group-prepend>.btn,.input-group>.input-group-prepend>.input-group-text{border-top-right-radius:0;border-bottom-right-radius:0}.input-group>.input-group-append>.btn,.input-group>.input-group-append>.input-group-text,.input-group>.input-group-prepend:first-child>.btn:not(:first-child),.input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child),.input-group>.input-group-prepend:not(:first-child)>.btn,.input-group>.input-group-prepend:not(:first-child)>.input-group-text{border-top-left-radius:0;border-bottom-left-radius:0}.custom-control{position:relative;display:block;min-height:1.5rem;padding-left:1.5rem}.custom-control-inline{display:-ms-inline-flexbox;display:inline-flex;margin-right:1rem}.custom-control-input{position:absolute;z-index:-1;opacity:0}.custom-control-input:checked~.custom-control-label::before{color:#fff;border-color:#007bff;background-color:#007bff}.custom-control-input:focus~.custom-control-label::before{box-shadow:0 0 0 .2rem rgba(0,123,255,.25)}.custom-control-input:focus:not(:checked)~.custom-control-label::before{border-color:#80bdff}.custom-control-input:not(:disabled):active~.custom-control-label::before{color:#fff;background-color:#b3d7ff;border-color:#b3d7ff}.custom-control-input:disabled~.custom-control-label{color:#6c757d}.custom-control-input:disabled~.custom-control-label::before{background-color:#e9ecef}.custom-control-label{position:relative;margin-bottom:0;vertical-align:top}.custom-control-label::before{position:absolute;top:.25rem;left:-1.5rem;display:block;width:1rem;height:1rem;pointer-events:none;content:"";background-color:#fff;border:#adb5bd solid 1px}.custom-control-label::after{position:absolute;top:.25rem;left:-1.5rem;display:block;width:1rem;height:1rem;content:"";background:no-repeat 50%/50% 50%}.custom-checkbox .custom-control-label::before{border-radius:.25rem}.custom-checkbox .custom-control-input:checked~.custom-control-label::after{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3e%3c/svg%3e")}.custom-checkbox .custom-control-input:indeterminate~.custom-control-label::before{border-color:#007bff;background-color:#007bff}.custom-checkbox .custom-control-input:indeterminate~.custom-control-label::after{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e")}.custom-checkbox .custom-control-input:disabled:checked~.custom-control-label::before{background-color:rgba(0,123,255,.5)}.custom-checkbox .custom-control-input:disabled:indeterminate~.custom-control-label::before{background-color:rgba(0,123,255,.5)}.custom-radio .custom-control-label::before{border-radius:50%}.custom-radio .custom-control-input:checked~.custom-control-label::after{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e")}.custom-radio .custom-control-input:disabled:checked~.custom-control-label::before{background-color:rgba(0,123,255,.5)}.custom-switch{padding-left:2.25rem}.custom-switch .custom-control-label::before{left:-2.25rem;width:1.75rem;pointer-events:all;border-radius:.5rem}.custom-switch .custom-control-label::after{top:calc(.25rem + 2px);left:calc(-2.25rem + 2px);width:calc(1rem - 4px);height:calc(1rem - 4px);background-color:#adb5bd;border-radius:.5rem;transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-transform .15s ease-in-out;transition:transform .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:transform .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-transform .15s ease-in-out}@media (prefers-reduced-motion:reduce){.custom-switch .custom-control-label::after{transition:none}}.custom-switch .custom-control-input:checked~.custom-control-label::after{background-color:#fff;-webkit-transform:translateX(.75rem);transform:translateX(.75rem)}.custom-switch .custom-control-input:disabled:checked~.custom-control-label::before{background-color:rgba(0,123,255,.5)}.custom-select{display:inline-block;width:100%;height:calc(1.5em + .75rem + 2px);padding:.375rem 1.75rem .375rem .75rem;font-size:1rem;font-weight:400;line-height:1.5;color:#495057;vertical-align:middle;background:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right .75rem center/8px 10px;background-color:#fff;border:1px solid #ced4da;border-radius:.25rem;-webkit-appearance:none;-moz-appearance:none;appearance:none}.custom-select:focus{border-color:#80bdff;outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)}.custom-select:focus::-ms-value{color:#495057;background-color:#fff}.custom-select[multiple],.custom-select[size]:not([size="1"]){height:auto;padding-right:.75rem;background-image:none}.custom-select:disabled{color:#6c757d;background-color:#e9ecef}.custom-select::-ms-expand{display:none}.custom-select-sm{height:calc(1.5em + .5rem + 2px);padding-top:.25rem;padding-bottom:.25rem;padding-left:.5rem;font-size:.875rem}.custom-select-lg{height:calc(1.5em + 1rem + 2px);padding-top:.5rem;padding-bottom:.5rem;padding-left:1rem;font-size:1.25rem}.custom-file{position:relative;display:inline-block;width:100%;height:calc(1.5em + .75rem + 2px);margin-bottom:0}.custom-file-input{position:relative;z-index:2;width:100%;height:calc(1.5em + .75rem + 2px);margin:0;opacity:0}.custom-file-input:focus~.custom-file-label{border-color:#80bdff;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)}.custom-file-input:disabled~.custom-file-label{background-color:#e9ecef}.custom-file-input:lang(en)~.custom-file-label::after{content:"Browse"}.custom-file-input~.custom-file-label[data-browse]::after{content:attr(data-browse)}.custom-file-label{position:absolute;top:0;right:0;left:0;z-index:1;height:calc(1.5em + .75rem + 2px);padding:.375rem .75rem;font-weight:400;line-height:1.5;color:#495057;background-color:#fff;border:1px solid #ced4da;border-radius:.25rem}.custom-file-label::after{position:absolute;top:0;right:0;bottom:0;z-index:3;display:block;height:calc(1.5em + .75rem);padding:.375rem .75rem;line-height:1.5;color:#495057;content:"Browse";background-color:#e9ecef;border-left:inherit;border-radius:0 .25rem .25rem 0}.custom-range{width:100%;height:calc(1rem + .4rem);padding:0;background-color:transparent;-webkit-appearance:none;-moz-appearance:none;appearance:none}.custom-range:focus{outline:0}.custom-range:focus::-webkit-slider-thumb{box-shadow:0 0 0 1px #fff,0 0 0 .2rem rgba(0,123,255,.25)}.custom-range:focus::-moz-range-thumb{box-shadow:0 0 0 1px #fff,0 0 0 .2rem rgba(0,123,255,.25)}.custom-range:focus::-ms-thumb{box-shadow:0 0 0 1px #fff,0 0 0 .2rem rgba(0,123,255,.25)}.custom-range::-moz-focus-outer{border:0}.custom-range::-webkit-slider-thumb{width:1rem;height:1rem;margin-top:-.25rem;background-color:#007bff;border:0;border-radius:1rem;transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;-webkit-appearance:none;appearance:none}@media (prefers-reduced-motion:reduce){.custom-range::-webkit-slider-thumb{transition:none}}.custom-range::-webkit-slider-thumb:active{background-color:#b3d7ff}.custom-range::-webkit-slider-runnable-track{width:100%;height:.5rem;color:transparent;cursor:pointer;background-color:#dee2e6;border-color:transparent;border-radius:1rem}.custom-range::-moz-range-thumb{width:1rem;height:1rem;background-color:#007bff;border:0;border-radius:1rem;transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;-moz-appearance:none;appearance:none}@media (prefers-reduced-motion:reduce){.custom-range::-moz-range-thumb{transition:none}}.custom-range::-moz-range-thumb:active{background-color:#b3d7ff}.custom-range::-moz-range-track{width:100%;height:.5rem;color:transparent;cursor:pointer;background-color:#dee2e6;border-color:transparent;border-radius:1rem}.custom-range::-ms-thumb{width:1rem;height:1rem;margin-top:0;margin-right:.2rem;margin-left:.2rem;background-color:#007bff;border:0;border-radius:1rem;transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;appearance:none}@media (prefers-reduced-motion:reduce){.custom-range::-ms-thumb{transition:none}}.custom-range::-ms-thumb:active{background-color:#b3d7ff}.custom-range::-ms-track{width:100%;height:.5rem;color:transparent;cursor:pointer;background-color:transparent;border-color:transparent;border-width:.5rem}.custom-range::-ms-fill-lower{background-color:#dee2e6;border-radius:1rem}.custom-range::-ms-fill-upper{margin-right:15px;background-color:#dee2e6;border-radius:1rem}.custom-range:disabled::-webkit-slider-thumb{background-color:#adb5bd}.custom-range:disabled::-webkit-slider-runnable-track{cursor:default}.custom-range:disabled::-moz-range-thumb{background-color:#adb5bd}.custom-range:disabled::-moz-range-track{cursor:default}.custom-range:disabled::-ms-thumb{background-color:#adb5bd}.custom-control-label::before,.custom-file-label,.custom-select{transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.custom-control-label::before,.custom-file-label,.custom-select{transition:none}}.nav{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;padding-left:0;margin-bottom:0;list-style:none}.nav-link{display:block;padding:.5rem 1rem}.nav-link:focus,.nav-link:hover{text-decoration:none}.nav-link.disabled{color:#6c757d;pointer-events:none;cursor:default}.nav-tabs{border-bottom:1px solid #dee2e6}.nav-tabs .nav-item{margin-bottom:-1px}.nav-tabs .nav-link{border:1px solid transparent;border-top-left-radius:.25rem;border-top-right-radius:.25rem}.nav-tabs .nav-link:focus,.nav-tabs .nav-link:hover{border-color:#e9ecef #e9ecef #dee2e6}.nav-tabs .nav-link.disabled{color:#6c757d;background-color:transparent;border-color:transparent}.nav-tabs .nav-item.show .nav-link,.nav-tabs .nav-link.active{color:#495057;background-color:#fff;border-color:#dee2e6 #dee2e6 #fff}.nav-tabs .dropdown-menu{margin-top:-1px;border-top-left-radius:0;border-top-right-radius:0}.nav-pills .nav-link{border-radius:.25rem}.nav-pills .nav-link.active,.nav-pills .show>.nav-link{color:#fff;background-color:#007bff}.nav-fill .nav-item{-ms-flex:1 1 auto;flex:1 1 auto;text-align:center}.nav-justified .nav-item{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;text-align:center}.tab-content>.tab-pane{display:none}.tab-content>.active{display:block}.navbar{position:relative;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-align:center;align-items:center;-ms-flex-pack:justify;justify-content:space-between;padding:.5rem 1rem}.navbar>.container,.navbar>.container-fluid{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-align:center;align-items:center;-ms-flex-pack:justify;justify-content:space-between}.navbar-brand{display:inline-block;padding-top:.3125rem;padding-bottom:.3125rem;margin-right:1rem;font-size:1.25rem;line-height:inherit;white-space:nowrap}.navbar-brand:focus,.navbar-brand:hover{text-decoration:none}.navbar-nav{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;padding-left:0;margin-bottom:0;list-style:none}.navbar-nav .nav-link{padding-right:0;padding-left:0}.navbar-nav .dropdown-menu{position:static;float:none}.navbar-text{display:inline-block;padding-top:.5rem;padding-bottom:.5rem}.navbar-collapse{-ms-flex-preferred-size:100%;flex-basis:100%;-ms-flex-positive:1;flex-grow:1;-ms-flex-align:center;align-items:center}.navbar-toggler{padding:.25rem .75rem;font-size:1.25rem;line-height:1;background-color:transparent;border:1px solid transparent;border-radius:.25rem}.navbar-toggler:focus,.navbar-toggler:hover{text-decoration:none}.navbar-toggler-icon{display:inline-block;width:1.5em;height:1.5em;vertical-align:middle;content:"";background:no-repeat center center;background-size:100% 100%}@media (max-width:575.98px){.navbar-expand-sm>.container,.navbar-expand-sm>.container-fluid{padding-right:0;padding-left:0}}@media (min-width:576px){.navbar-expand-sm{-ms-flex-flow:row nowrap;flex-flow:row nowrap;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand-sm .navbar-nav{-ms-flex-direction:row;flex-direction:row}.navbar-expand-sm .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-sm .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-sm>.container,.navbar-expand-sm>.container-fluid{-ms-flex-wrap:nowrap;flex-wrap:nowrap}.navbar-expand-sm .navbar-collapse{display:-ms-flexbox!important;display:flex!important;-ms-flex-preferred-size:auto;flex-basis:auto}.navbar-expand-sm .navbar-toggler{display:none}}@media (max-width:767.98px){.navbar-expand-md>.container,.navbar-expand-md>.container-fluid{padding-right:0;padding-left:0}}@media (min-width:768px){.navbar-expand-md{-ms-flex-flow:row nowrap;flex-flow:row nowrap;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand-md .navbar-nav{-ms-flex-direction:row;flex-direction:row}.navbar-expand-md .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-md .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-md>.container,.navbar-expand-md>.container-fluid{-ms-flex-wrap:nowrap;flex-wrap:nowrap}.navbar-expand-md .navbar-collapse{display:-ms-flexbox!important;display:flex!important;-ms-flex-preferred-size:auto;flex-basis:auto}.navbar-expand-md .navbar-toggler{display:none}}@media (max-width:991.98px){.navbar-expand-lg>.container,.navbar-expand-lg>.container-fluid{padding-right:0;padding-left:0}}@media (min-width:992px){.navbar-expand-lg{-ms-flex-flow:row nowrap;flex-flow:row nowrap;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand-lg .navbar-nav{-ms-flex-direction:row;flex-direction:row}.navbar-expand-lg .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-lg .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-lg>.container,.navbar-expand-lg>.container-fluid{-ms-flex-wrap:nowrap;flex-wrap:nowrap}.navbar-expand-lg .navbar-collapse{display:-ms-flexbox!important;display:flex!important;-ms-flex-preferred-size:auto;flex-basis:auto}.navbar-expand-lg .navbar-toggler{display:none}}@media (max-width:1199.98px){.navbar-expand-xl>.container,.navbar-expand-xl>.container-fluid{padding-right:0;padding-left:0}}@media (min-width:1200px){.navbar-expand-xl{-ms-flex-flow:row nowrap;flex-flow:row nowrap;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand-xl .navbar-nav{-ms-flex-direction:row;flex-direction:row}.navbar-expand-xl .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-xl .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-xl>.container,.navbar-expand-xl>.container-fluid{-ms-flex-wrap:nowrap;flex-wrap:nowrap}.navbar-expand-xl .navbar-collapse{display:-ms-flexbox!important;display:flex!important;-ms-flex-preferred-size:auto;flex-basis:auto}.navbar-expand-xl .navbar-toggler{display:none}}.navbar-expand{-ms-flex-flow:row nowrap;flex-flow:row nowrap;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand>.container,.navbar-expand>.container-fluid{padding-right:0;padding-left:0}.navbar-expand .navbar-nav{-ms-flex-direction:row;flex-direction:row}.navbar-expand .navbar-nav .dropdown-menu{position:absolute}.navbar-expand .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand>.container,.navbar-expand>.container-fluid{-ms-flex-wrap:nowrap;flex-wrap:nowrap}.navbar-expand .navbar-collapse{display:-ms-flexbox!important;display:flex!important;-ms-flex-preferred-size:auto;flex-basis:auto}.navbar-expand .navbar-toggler{display:none}.navbar-light .navbar-brand{color:rgba(0,0,0,.9)}.navbar-light .navbar-brand:focus,.navbar-light .navbar-brand:hover{color:rgba(0,0,0,.9)}.navbar-light .navbar-nav .nav-link{color:rgba(0,0,0,.5)}.navbar-light .navbar-nav .nav-link:focus,.navbar-light .navbar-nav .nav-link:hover{color:rgba(0,0,0,.7)}.navbar-light .navbar-nav .nav-link.disabled{color:rgba(0,0,0,.3)}.navbar-light .navbar-nav .active>.nav-link,.navbar-light .navbar-nav .nav-link.active,.navbar-light .navbar-nav .nav-link.show,.navbar-light .navbar-nav .show>.nav-link{color:rgba(0,0,0,.9)}.navbar-light .navbar-toggler{color:rgba(0,0,0,.5);border-color:rgba(0,0,0,.1)}.navbar-light .navbar-toggler-icon{background-image:url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(0,0,0,0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")}.navbar-light .navbar-text{color:rgba(0,0,0,.5)}.navbar-light .navbar-text a{color:rgba(0,0,0,.9)}.navbar-light .navbar-text a:focus,.navbar-light .navbar-text a:hover{color:rgba(0,0,0,.9)}.navbar-dark .navbar-brand{color:#fff}.navbar-dark .navbar-brand:focus,.navbar-dark .navbar-brand:hover{color:#fff}.navbar-dark .navbar-nav .nav-link{color:rgba(255,255,255,.5)}.navbar-dark .navbar-nav .nav-link:focus,.navbar-dark .navbar-nav .nav-link:hover{color:rgba(255,255,255,.75)}.navbar-dark .navbar-nav .nav-link.disabled{color:rgba(255,255,255,.25)}.navbar-dark .navbar-nav .active>.nav-link,.navbar-dark .navbar-nav .nav-link.active,.navbar-dark .navbar-nav .nav-link.show,.navbar-dark .navbar-nav .show>.nav-link{color:#fff}.navbar-dark .navbar-toggler{color:rgba(255,255,255,.5);border-color:rgba(255,255,255,.1)}.navbar-dark .navbar-toggler-icon{background-image:url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(255,255,255,0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")}.navbar-dark .navbar-text{color:rgba(255,255,255,.5)}.navbar-dark .navbar-text a{color:#fff}.navbar-dark .navbar-text a:focus,.navbar-dark .navbar-text a:hover{color:#fff}.card{position:relative;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;min-width:0;word-wrap:break-word;background-color:#fff;background-clip:border-box;border:1px solid rgba(0,0,0,.125);border-radius:.25rem}.card>hr{margin-right:0;margin-left:0}.card>.list-group:first-child .list-group-item:first-child{border-top-left-radius:.25rem;border-top-right-radius:.25rem}.card>.list-group:last-child .list-group-item:last-child{border-bottom-right-radius:.25rem;border-bottom-left-radius:.25rem}.card-body{-ms-flex:1 1 auto;flex:1 1 auto;padding:1.25rem}.card-title{margin-bottom:.75rem}.card-subtitle{margin-top:-.375rem;margin-bottom:0}.card-text:last-child{margin-bottom:0}.card-link:hover{text-decoration:none}.card-link+.card-link{margin-left:1.25rem}.card-header{padding:.75rem 1.25rem;margin-bottom:0;background-color:rgba(0,0,0,.03);border-bottom:1px solid rgba(0,0,0,.125)}.card-header:first-child{border-radius:calc(.25rem - 1px) calc(.25rem - 1px) 0 0}.card-header+.list-group .list-group-item:first-child{border-top:0}.card-footer{padding:.75rem 1.25rem;background-color:rgba(0,0,0,.03);border-top:1px solid rgba(0,0,0,.125)}.card-footer:last-child{border-radius:0 0 calc(.25rem - 1px) calc(.25rem - 1px)}.card-header-tabs{margin-right:-.625rem;margin-bottom:-.75rem;margin-left:-.625rem;border-bottom:0}.card-header-pills{margin-right:-.625rem;margin-left:-.625rem}.card-img-overlay{position:absolute;top:0;right:0;bottom:0;left:0;padding:1.25rem}.card-img{width:100%;border-radius:calc(.25rem - 1px)}.card-img-top{width:100%;border-top-left-radius:calc(.25rem - 1px);border-top-right-radius:calc(.25rem - 1px)}.card-img-bottom{width:100%;border-bottom-right-radius:calc(.25rem - 1px);border-bottom-left-radius:calc(.25rem - 1px)}.card-deck{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column}.card-deck .card{margin-bottom:15px}@media (min-width:576px){.card-deck{-ms-flex-flow:row wrap;flex-flow:row wrap;margin-right:-15px;margin-left:-15px}.card-deck .card{display:-ms-flexbox;display:flex;-ms-flex:1 0 0;flex:1 0 0;-ms-flex-direction:column;flex-direction:column;margin-right:15px;margin-bottom:0;margin-left:15px}}.card-group{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column}.card-group>.card{margin-bottom:15px}@media (min-width:576px){.card-group{-ms-flex-flow:row wrap;flex-flow:row wrap}.card-group>.card{-ms-flex:1 0 0;flex:1 0 0;margin-bottom:0}.card-group>.card+.card{margin-left:0;border-left:0}.card-group>.card:not(:last-child){border-top-right-radius:0;border-bottom-right-radius:0}.card-group>.card:not(:last-child) .card-header,.card-group>.card:not(:last-child) .card-img-top{border-top-right-radius:0}.card-group>.card:not(:last-child) .card-footer,.card-group>.card:not(:last-child) .card-img-bottom{border-bottom-right-radius:0}.card-group>.card:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0}.card-group>.card:not(:first-child) .card-header,.card-group>.card:not(:first-child) .card-img-top{border-top-left-radius:0}.card-group>.card:not(:first-child) .card-footer,.card-group>.card:not(:first-child) .card-img-bottom{border-bottom-left-radius:0}}.card-columns .card{margin-bottom:.75rem}@media (min-width:576px){.card-columns{-webkit-column-count:3;-moz-column-count:3;column-count:3;-webkit-column-gap:1.25rem;-moz-column-gap:1.25rem;column-gap:1.25rem;orphans:1;widows:1}.card-columns .card{display:inline-block;width:100%}}.accordion>.card{overflow:hidden}.accordion>.card:not(:first-of-type) .card-header:first-child{border-radius:0}.accordion>.card:not(:first-of-type):not(:last-of-type){border-bottom:0;border-radius:0}.accordion>.card:first-of-type{border-bottom:0;border-bottom-right-radius:0;border-bottom-left-radius:0}.accordion>.card:last-of-type{border-top-left-radius:0;border-top-right-radius:0}.accordion>.card .card-header{margin-bottom:-1px}.breadcrumb{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;padding:.75rem 1rem;margin-bottom:1rem;list-style:none;background-color:#e9ecef;border-radius:.25rem}.breadcrumb-item+.breadcrumb-item{padding-left:.5rem}.breadcrumb-item+.breadcrumb-item::before{display:inline-block;padding-right:.5rem;color:#6c757d;content:"/"}.breadcrumb-item+.breadcrumb-item:hover::before{text-decoration:underline;text-decoration:none}.breadcrumb-item.active{color:#6c757d}.pagination{display:-ms-flexbox;display:flex;padding-left:0;list-style:none;border-radius:.25rem}.page-link{position:relative;display:block;padding:.5rem .75rem;margin-left:-1px;line-height:1.25;color:#007bff;background-color:#fff;border:1px solid #dee2e6}.page-link:hover{z-index:2;color:#0056b3;text-decoration:none;background-color:#e9ecef;border-color:#dee2e6}.page-link:focus{z-index:2;outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)}.page-item:first-child .page-link{margin-left:0;border-top-left-radius:.25rem;border-bottom-left-radius:.25rem}.page-item:last-child .page-link{border-top-right-radius:.25rem;border-bottom-right-radius:.25rem}.page-item.active .page-link{z-index:1;color:#fff;background-color:#007bff;border-color:#007bff}.page-item.disabled .page-link{color:#6c757d;pointer-events:none;cursor:auto;background-color:#fff;border-color:#dee2e6}.pagination-lg .page-link{padding:.75rem 1.5rem;font-size:1.25rem;line-height:1.5}.pagination-lg .page-item:first-child .page-link{border-top-left-radius:.3rem;border-bottom-left-radius:.3rem}.pagination-lg .page-item:last-child .page-link{border-top-right-radius:.3rem;border-bottom-right-radius:.3rem}.pagination-sm .page-link{padding:.25rem .5rem;font-size:.875rem;line-height:1.5}.pagination-sm .page-item:first-child .page-link{border-top-left-radius:.2rem;border-bottom-left-radius:.2rem}.pagination-sm .page-item:last-child .page-link{border-top-right-radius:.2rem;border-bottom-right-radius:.2rem}.badge{display:inline-block;padding:.25em .4em;font-size:75%;font-weight:700;line-height:1;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.badge{transition:none}}a.badge:focus,a.badge:hover{text-decoration:none}.badge:empty{display:none}.btn .badge{position:relative;top:-1px}.badge-pill{padding-right:.6em;padding-left:.6em;border-radius:10rem}.badge-primary{color:#fff;background-color:#007bff}a.badge-primary:focus,a.badge-primary:hover{color:#fff;background-color:#0062cc}a.badge-primary.focus,a.badge-primary:focus{outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.5)}.badge-secondary{color:#fff;background-color:#6c757d}a.badge-secondary:focus,a.badge-secondary:hover{color:#fff;background-color:#545b62}a.badge-secondary.focus,a.badge-secondary:focus{outline:0;box-shadow:0 0 0 .2rem rgba(108,117,125,.5)}.badge-success{color:#fff;background-color:#28a745}a.badge-success:focus,a.badge-success:hover{color:#fff;background-color:#1e7e34}a.badge-success.focus,a.badge-success:focus{outline:0;box-shadow:0 0 0 .2rem rgba(40,167,69,.5)}.badge-info{color:#fff;background-color:#17a2b8}a.badge-info:focus,a.badge-info:hover{color:#fff;background-color:#117a8b}a.badge-info.focus,a.badge-info:focus{outline:0;box-shadow:0 0 0 .2rem rgba(23,162,184,.5)}.badge-warning{color:#212529;background-color:#ffc107}a.badge-warning:focus,a.badge-warning:hover{color:#212529;background-color:#d39e00}a.badge-warning.focus,a.badge-warning:focus{outline:0;box-shadow:0 0 0 .2rem rgba(255,193,7,.5)}.badge-danger{color:#fff;background-color:#dc3545}a.badge-danger:focus,a.badge-danger:hover{color:#fff;background-color:#bd2130}a.badge-danger.focus,a.badge-danger:focus{outline:0;box-shadow:0 0 0 .2rem rgba(220,53,69,.5)}.badge-light{color:#212529;background-color:#f8f9fa}a.badge-light:focus,a.badge-light:hover{color:#212529;background-color:#dae0e5}a.badge-light.focus,a.badge-light:focus{outline:0;box-shadow:0 0 0 .2rem rgba(248,249,250,.5)}.badge-dark{color:#fff;background-color:#343a40}a.badge-dark:focus,a.badge-dark:hover{color:#fff;background-color:#1d2124}a.badge-dark.focus,a.badge-dark:focus{outline:0;box-shadow:0 0 0 .2rem rgba(52,58,64,.5)}.jumbotron{padding:2rem 1rem;margin-bottom:2rem;background-color:#e9ecef;border-radius:.3rem}@media (min-width:576px){.jumbotron{padding:4rem 2rem}}.jumbotron-fluid{padding-right:0;padding-left:0;border-radius:0}.alert{position:relative;padding:.75rem 1.25rem;margin-bottom:1rem;border:1px solid transparent;border-radius:.25rem}.alert-heading{color:inherit}.alert-link{font-weight:700}.alert-dismissible{padding-right:4rem}.alert-dismissible .close{position:absolute;top:0;right:0;padding:.75rem 1.25rem;color:inherit}.alert-primary{color:#004085;background-color:#cce5ff;border-color:#b8daff}.alert-primary hr{border-top-color:#9fcdff}.alert-primary .alert-link{color:#002752}.alert-secondary{color:#383d41;background-color:#e2e3e5;border-color:#d6d8db}.alert-secondary hr{border-top-color:#c8cbcf}.alert-secondary .alert-link{color:#202326}.alert-success{color:#155724;background-color:#d4edda;border-color:#c3e6cb}.alert-success hr{border-top-color:#b1dfbb}.alert-success .alert-link{color:#0b2e13}.alert-info{color:#0c5460;background-color:#d1ecf1;border-color:#bee5eb}.alert-info hr{border-top-color:#abdde5}.alert-info .alert-link{color:#062c33}.alert-warning{color:#856404;background-color:#fff3cd;border-color:#ffeeba}.alert-warning hr{border-top-color:#ffe8a1}.alert-warning .alert-link{color:#533f03}.alert-danger{color:#721c24;background-color:#f8d7da;border-color:#f5c6cb}.alert-danger hr{border-top-color:#f1b0b7}.alert-danger .alert-link{color:#491217}.alert-light{color:#818182;background-color:#fefefe;border-color:#fdfdfe}.alert-light hr{border-top-color:#ececf6}.alert-light .alert-link{color:#686868}.alert-dark{color:#1b1e21;background-color:#d6d8d9;border-color:#c6c8ca}.alert-dark hr{border-top-color:#b9bbbe}.alert-dark .alert-link{color:#040505}@-webkit-keyframes progress-bar-stripes{from{background-position:1rem 0}to{background-position:0 0}}@keyframes progress-bar-stripes{from{background-position:1rem 0}to{background-position:0 0}}.progress{display:-ms-flexbox;display:flex;height:1rem;overflow:hidden;font-size:.75rem;background-color:#e9ecef;border-radius:.25rem}.progress-bar{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;-ms-flex-pack:center;justify-content:center;color:#fff;text-align:center;white-space:nowrap;background-color:#007bff;transition:width .6s ease}@media (prefers-reduced-motion:reduce){.progress-bar{transition:none}}.progress-bar-striped{background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-size:1rem 1rem}.progress-bar-animated{-webkit-animation:progress-bar-stripes 1s linear infinite;animation:progress-bar-stripes 1s linear infinite}@media (prefers-reduced-motion:reduce){.progress-bar-animated{-webkit-animation:none;animation:none}}.media{display:-ms-flexbox;display:flex;-ms-flex-align:start;align-items:flex-start}.media-body{-ms-flex:1;flex:1}.list-group{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;padding-left:0;margin-bottom:0}.list-group-item-action{width:100%;color:#495057;text-align:inherit}.list-group-item-action:focus,.list-group-item-action:hover{z-index:1;color:#495057;text-decoration:none;background-color:#f8f9fa}.list-group-item-action:active{color:#212529;background-color:#e9ecef}.list-group-item{position:relative;display:block;padding:.75rem 1.25rem;margin-bottom:-1px;background-color:#fff;border:1px solid rgba(0,0,0,.125)}.list-group-item:first-child{border-top-left-radius:.25rem;border-top-right-radius:.25rem}.list-group-item:last-child{margin-bottom:0;border-bottom-right-radius:.25rem;border-bottom-left-radius:.25rem}.list-group-item.disabled,.list-group-item:disabled{color:#6c757d;pointer-events:none;background-color:#fff}.list-group-item.active{z-index:2;color:#fff;background-color:#007bff;border-color:#007bff}.list-group-horizontal{-ms-flex-direction:row;flex-direction:row}.list-group-horizontal .list-group-item{margin-right:-1px;margin-bottom:0}.list-group-horizontal .list-group-item:first-child{border-top-left-radius:.25rem;border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal .list-group-item:last-child{margin-right:0;border-top-right-radius:.25rem;border-bottom-right-radius:.25rem;border-bottom-left-radius:0}@media (min-width:576px){.list-group-horizontal-sm{-ms-flex-direction:row;flex-direction:row}.list-group-horizontal-sm .list-group-item{margin-right:-1px;margin-bottom:0}.list-group-horizontal-sm .list-group-item:first-child{border-top-left-radius:.25rem;border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal-sm .list-group-item:last-child{margin-right:0;border-top-right-radius:.25rem;border-bottom-right-radius:.25rem;border-bottom-left-radius:0}}@media (min-width:768px){.list-group-horizontal-md{-ms-flex-direction:row;flex-direction:row}.list-group-horizontal-md .list-group-item{margin-right:-1px;margin-bottom:0}.list-group-horizontal-md .list-group-item:first-child{border-top-left-radius:.25rem;border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal-md .list-group-item:last-child{margin-right:0;border-top-right-radius:.25rem;border-bottom-right-radius:.25rem;border-bottom-left-radius:0}}@media (min-width:992px){.list-group-horizontal-lg{-ms-flex-direction:row;flex-direction:row}.list-group-horizontal-lg .list-group-item{margin-right:-1px;margin-bottom:0}.list-group-horizontal-lg .list-group-item:first-child{border-top-left-radius:.25rem;border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal-lg .list-group-item:last-child{margin-right:0;border-top-right-radius:.25rem;border-bottom-right-radius:.25rem;border-bottom-left-radius:0}}@media (min-width:1200px){.list-group-horizontal-xl{-ms-flex-direction:row;flex-direction:row}.list-group-horizontal-xl .list-group-item{margin-right:-1px;margin-bottom:0}.list-group-horizontal-xl .list-group-item:first-child{border-top-left-radius:.25rem;border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal-xl .list-group-item:last-child{margin-right:0;border-top-right-radius:.25rem;border-bottom-right-radius:.25rem;border-bottom-left-radius:0}}.list-group-flush .list-group-item{border-right:0;border-left:0;border-radius:0}.list-group-flush .list-group-item:last-child{margin-bottom:-1px}.list-group-flush:first-child .list-group-item:first-child{border-top:0}.list-group-flush:last-child .list-group-item:last-child{margin-bottom:0;border-bottom:0}.list-group-item-primary{color:#004085;background-color:#b8daff}.list-group-item-primary.list-group-item-action:focus,.list-group-item-primary.list-group-item-action:hover{color:#004085;background-color:#9fcdff}.list-group-item-primary.list-group-item-action.active{color:#fff;background-color:#004085;border-color:#004085}.list-group-item-secondary{color:#383d41;background-color:#d6d8db}.list-group-item-secondary.list-group-item-action:focus,.list-group-item-secondary.list-group-item-action:hover{color:#383d41;background-color:#c8cbcf}.list-group-item-secondary.list-group-item-action.active{color:#fff;background-color:#383d41;border-color:#383d41}.list-group-item-success{color:#155724;background-color:#c3e6cb}.list-group-item-success.list-group-item-action:focus,.list-group-item-success.list-group-item-action:hover{color:#155724;background-color:#b1dfbb}.list-group-item-success.list-group-item-action.active{color:#fff;background-color:#155724;border-color:#155724}.list-group-item-info{color:#0c5460;background-color:#bee5eb}.list-group-item-info.list-group-item-action:focus,.list-group-item-info.list-group-item-action:hover{color:#0c5460;background-color:#abdde5}.list-group-item-info.list-group-item-action.active{color:#fff;background-color:#0c5460;border-color:#0c5460}.list-group-item-warning{color:#856404;background-color:#ffeeba}.list-group-item-warning.list-group-item-action:focus,.list-group-item-warning.list-group-item-action:hover{color:#856404;background-color:#ffe8a1}.list-group-item-warning.list-group-item-action.active{color:#fff;background-color:#856404;border-color:#856404}.list-group-item-danger{color:#721c24;background-color:#f5c6cb}.list-group-item-danger.list-group-item-action:focus,.list-group-item-danger.list-group-item-action:hover{color:#721c24;background-color:#f1b0b7}.list-group-item-danger.list-group-item-action.active{color:#fff;background-color:#721c24;border-color:#721c24}.list-group-item-light{color:#818182;background-color:#fdfdfe}.list-group-item-light.list-group-item-action:focus,.list-group-item-light.list-group-item-action:hover{color:#818182;background-color:#ececf6}.list-group-item-light.list-group-item-action.active{color:#fff;background-color:#818182;border-color:#818182}.list-group-item-dark{color:#1b1e21;background-color:#c6c8ca}.list-group-item-dark.list-group-item-action:focus,.list-group-item-dark.list-group-item-action:hover{color:#1b1e21;background-color:#b9bbbe}.list-group-item-dark.list-group-item-action.active{color:#fff;background-color:#1b1e21;border-color:#1b1e21}.close{float:right;font-size:1.5rem;font-weight:700;line-height:1;color:#000;text-shadow:0 1px 0 #fff;opacity:.5}.close:hover{color:#000;text-decoration:none}.close:not(:disabled):not(.disabled):focus,.close:not(:disabled):not(.disabled):hover{opacity:.75}button.close{padding:0;background-color:transparent;border:0;-webkit-appearance:none;-moz-appearance:none;appearance:none}a.close.disabled{pointer-events:none}.toast{max-width:350px;overflow:hidden;font-size:.875rem;background-color:rgba(255,255,255,.85);background-clip:padding-box;border:1px solid rgba(0,0,0,.1);box-shadow:0 .25rem .75rem rgba(0,0,0,.1);-webkit-backdrop-filter:blur(10px);backdrop-filter:blur(10px);opacity:0;border-radius:.25rem}.toast:not(:last-child){margin-bottom:.75rem}.toast.showing{opacity:1}.toast.show{display:block;opacity:1}.toast.hide{display:none}.toast-header{display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;padding:.25rem .75rem;color:#6c757d;background-color:rgba(255,255,255,.85);background-clip:padding-box;border-bottom:1px solid rgba(0,0,0,.05)}.toast-body{padding:.75rem}.modal-open{overflow:hidden}.modal-open .modal{overflow-x:hidden;overflow-y:auto}.modal{position:fixed;top:0;left:0;z-index:1050;display:none;width:100%;height:100%;overflow:hidden;outline:0}.modal-dialog{position:relative;width:auto;margin:.5rem;pointer-events:none}.modal.fade .modal-dialog{transition:-webkit-transform .3s ease-out;transition:transform .3s ease-out;transition:transform .3s ease-out,-webkit-transform .3s ease-out;-webkit-transform:translate(0,-50px);transform:translate(0,-50px)}@media (prefers-reduced-motion:reduce){.modal.fade .modal-dialog{transition:none}}.modal.show .modal-dialog{-webkit-transform:none;transform:none}.modal-dialog-scrollable{display:-ms-flexbox;display:flex;max-height:calc(100% - 1rem)}.modal-dialog-scrollable .modal-content{max-height:calc(100vh - 1rem);overflow:hidden}.modal-dialog-scrollable .modal-footer,.modal-dialog-scrollable .modal-header{-ms-flex-negative:0;flex-shrink:0}.modal-dialog-scrollable .modal-body{overflow-y:auto}.modal-dialog-centered{display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;min-height:calc(100% - 1rem)}.modal-dialog-centered::before{display:block;height:calc(100vh - 1rem);content:""}.modal-dialog-centered.modal-dialog-scrollable{-ms-flex-direction:column;flex-direction:column;-ms-flex-pack:center;justify-content:center;height:100%}.modal-dialog-centered.modal-dialog-scrollable .modal-content{max-height:none}.modal-dialog-centered.modal-dialog-scrollable::before{content:none}.modal-content{position:relative;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;width:100%;pointer-events:auto;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.2);border-radius:.3rem;outline:0}.modal-backdrop{position:fixed;top:0;left:0;z-index:1040;width:100vw;height:100vh;background-color:#000}.modal-backdrop.fade{opacity:0}.modal-backdrop.show{opacity:.5}.modal-header{display:-ms-flexbox;display:flex;-ms-flex-align:start;align-items:flex-start;-ms-flex-pack:justify;justify-content:space-between;padding:1rem;border-bottom:1px solid #dee2e6;border-top-left-radius:.3rem;border-top-right-radius:.3rem}.modal-header .close{padding:1rem;margin:-1rem -1rem -1rem auto}.modal-title{margin-bottom:0;line-height:1.5}.modal-body{position:relative;-ms-flex:1 1 auto;flex:1 1 auto;padding:1rem}.modal-footer{display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;-ms-flex-pack:end;justify-content:flex-end;padding:1rem;border-top:1px solid #dee2e6;border-bottom-right-radius:.3rem;border-bottom-left-radius:.3rem}.modal-footer>:not(:first-child){margin-left:.25rem}.modal-footer>:not(:last-child){margin-right:.25rem}.modal-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}@media (min-width:576px){.modal-dialog{max-width:500px;margin:1.75rem auto}.modal-dialog-scrollable{max-height:calc(100% - 3.5rem)}.modal-dialog-scrollable .modal-content{max-height:calc(100vh - 3.5rem)}.modal-dialog-centered{min-height:calc(100% - 3.5rem)}.modal-dialog-centered::before{height:calc(100vh - 3.5rem)}.modal-sm{max-width:300px}}@media (min-width:992px){.modal-lg,.modal-xl{max-width:800px}}@media (min-width:1200px){.modal-xl{max-width:1140px}}.tooltip{position:absolute;z-index:1070;display:block;margin:0;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";font-style:normal;font-weight:400;line-height:1.5;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;white-space:normal;line-break:auto;font-size:.875rem;word-wrap:break-word;opacity:0}.tooltip.show{opacity:.9}.tooltip .arrow{position:absolute;display:block;width:.8rem;height:.4rem}.tooltip .arrow::before{position:absolute;content:"";border-color:transparent;border-style:solid}.bs-tooltip-auto[x-placement^=top],.bs-tooltip-top{padding:.4rem 0}.bs-tooltip-auto[x-placement^=top] .arrow,.bs-tooltip-top .arrow{bottom:0}.bs-tooltip-auto[x-placement^=top] .arrow::before,.bs-tooltip-top .arrow::before{top:0;border-width:.4rem .4rem 0;border-top-color:#000}.bs-tooltip-auto[x-placement^=right],.bs-tooltip-right{padding:0 .4rem}.bs-tooltip-auto[x-placement^=right] .arrow,.bs-tooltip-right .arrow{left:0;width:.4rem;height:.8rem}.bs-tooltip-auto[x-placement^=right] .arrow::before,.bs-tooltip-right .arrow::before{right:0;border-width:.4rem .4rem .4rem 0;border-right-color:#000}.bs-tooltip-auto[x-placement^=bottom],.bs-tooltip-bottom{padding:.4rem 0}.bs-tooltip-auto[x-placement^=bottom] .arrow,.bs-tooltip-bottom .arrow{top:0}.bs-tooltip-auto[x-placement^=bottom] .arrow::before,.bs-tooltip-bottom .arrow::before{bottom:0;border-width:0 .4rem .4rem;border-bottom-color:#000}.bs-tooltip-auto[x-placement^=left],.bs-tooltip-left{padding:0 .4rem}.bs-tooltip-auto[x-placement^=left] .arrow,.bs-tooltip-left .arrow{right:0;width:.4rem;height:.8rem}.bs-tooltip-auto[x-placement^=left] .arrow::before,.bs-tooltip-left .arrow::before{left:0;border-width:.4rem 0 .4rem .4rem;border-left-color:#000}.tooltip-inner{max-width:200px;padding:.25rem .5rem;color:#fff;text-align:center;background-color:#000;border-radius:.25rem}.popover{position:absolute;top:0;left:0;z-index:1060;display:block;max-width:276px;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";font-style:normal;font-weight:400;line-height:1.5;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;white-space:normal;line-break:auto;font-size:.875rem;word-wrap:break-word;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.2);border-radius:.3rem}.popover .arrow{position:absolute;display:block;width:1rem;height:.5rem;margin:0 .3rem}.popover .arrow::after,.popover .arrow::before{position:absolute;display:block;content:"";border-color:transparent;border-style:solid}.bs-popover-auto[x-placement^=top],.bs-popover-top{margin-bottom:.5rem}.bs-popover-auto[x-placement^=top]>.arrow,.bs-popover-top>.arrow{bottom:calc((.5rem + 1px) * -1)}.bs-popover-auto[x-placement^=top]>.arrow::before,.bs-popover-top>.arrow::before{bottom:0;border-width:.5rem .5rem 0;border-top-color:rgba(0,0,0,.25)}.bs-popover-auto[x-placement^=top]>.arrow::after,.bs-popover-top>.arrow::after{bottom:1px;border-width:.5rem .5rem 0;border-top-color:#fff}.bs-popover-auto[x-placement^=right],.bs-popover-right{margin-left:.5rem}.bs-popover-auto[x-placement^=right]>.arrow,.bs-popover-right>.arrow{left:calc((.5rem + 1px) * -1);width:.5rem;height:1rem;margin:.3rem 0}.bs-popover-auto[x-placement^=right]>.arrow::before,.bs-popover-right>.arrow::before{left:0;border-width:.5rem .5rem .5rem 0;border-right-color:rgba(0,0,0,.25)}.bs-popover-auto[x-placement^=right]>.arrow::after,.bs-popover-right>.arrow::after{left:1px;border-width:.5rem .5rem .5rem 0;border-right-color:#fff}.bs-popover-auto[x-placement^=bottom],.bs-popover-bottom{margin-top:.5rem}.bs-popover-auto[x-placement^=bottom]>.arrow,.bs-popover-bottom>.arrow{top:calc((.5rem + 1px) * -1)}.bs-popover-auto[x-placement^=bottom]>.arrow::before,.bs-popover-bottom>.arrow::before{top:0;border-width:0 .5rem .5rem;border-bottom-color:rgba(0,0,0,.25)}.bs-popover-auto[x-placement^=bottom]>.arrow::after,.bs-popover-bottom>.arrow::after{top:1px;border-width:0 .5rem .5rem;border-bottom-color:#fff}.bs-popover-auto[x-placement^=bottom] .popover-header::before,.bs-popover-bottom .popover-header::before{position:absolute;top:0;left:50%;display:block;width:1rem;margin-left:-.5rem;content:"";border-bottom:1px solid #f7f7f7}.bs-popover-auto[x-placement^=left],.bs-popover-left{margin-right:.5rem}.bs-popover-auto[x-placement^=left]>.arrow,.bs-popover-left>.arrow{right:calc((.5rem + 1px) * -1);width:.5rem;height:1rem;margin:.3rem 0}.bs-popover-auto[x-placement^=left]>.arrow::before,.bs-popover-left>.arrow::before{right:0;border-width:.5rem 0 .5rem .5rem;border-left-color:rgba(0,0,0,.25)}.bs-popover-auto[x-placement^=left]>.arrow::after,.bs-popover-left>.arrow::after{right:1px;border-width:.5rem 0 .5rem .5rem;border-left-color:#fff}.popover-header{padding:.5rem .75rem;margin-bottom:0;font-size:1rem;background-color:#f7f7f7;border-bottom:1px solid #ebebeb;border-top-left-radius:calc(.3rem - 1px);border-top-right-radius:calc(.3rem - 1px)}.popover-header:empty{display:none}.popover-body{padding:.5rem .75rem;color:#212529}.carousel{position:relative}.carousel.pointer-event{-ms-touch-action:pan-y;touch-action:pan-y}.carousel-inner{position:relative;width:100%;overflow:hidden}.carousel-inner::after{display:block;clear:both;content:""}.carousel-item{position:relative;display:none;float:left;width:100%;margin-right:-100%;-webkit-backface-visibility:hidden;backface-visibility:hidden;transition:-webkit-transform .6s ease-in-out;transition:transform .6s ease-in-out;transition:transform .6s ease-in-out,-webkit-transform .6s ease-in-out}@media (prefers-reduced-motion:reduce){.carousel-item{transition:none}}.carousel-item-next,.carousel-item-prev,.carousel-item.active{display:block}.active.carousel-item-right,.carousel-item-next:not(.carousel-item-left){-webkit-transform:translateX(100%);transform:translateX(100%)}.active.carousel-item-left,.carousel-item-prev:not(.carousel-item-right){-webkit-transform:translateX(-100%);transform:translateX(-100%)}.carousel-fade .carousel-item{opacity:0;transition-property:opacity;-webkit-transform:none;transform:none}.carousel-fade .carousel-item-next.carousel-item-left,.carousel-fade .carousel-item-prev.carousel-item-right,.carousel-fade .carousel-item.active{z-index:1;opacity:1}.carousel-fade .active.carousel-item-left,.carousel-fade .active.carousel-item-right{z-index:0;opacity:0;transition:0 .6s opacity}@media (prefers-reduced-motion:reduce){.carousel-fade .active.carousel-item-left,.carousel-fade .active.carousel-item-right{transition:none}}.carousel-control-next,.carousel-control-prev{position:absolute;top:0;bottom:0;z-index:1;display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;-ms-flex-pack:center;justify-content:center;width:15%;color:#fff;text-align:center;opacity:.5;transition:opacity .15s ease}@media (prefers-reduced-motion:reduce){.carousel-control-next,.carousel-control-prev{transition:none}}.carousel-control-next:focus,.carousel-control-next:hover,.carousel-control-prev:focus,.carousel-control-prev:hover{color:#fff;text-decoration:none;outline:0;opacity:.9}.carousel-control-prev{left:0}.carousel-control-next{right:0}.carousel-control-next-icon,.carousel-control-prev-icon{display:inline-block;width:20px;height:20px;background:no-repeat 50%/100% 100%}.carousel-control-prev-icon{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3e%3c/svg%3e")}.carousel-control-next-icon{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3e%3c/svg%3e")}.carousel-indicators{position:absolute;right:0;bottom:0;left:0;z-index:15;display:-ms-flexbox;display:flex;-ms-flex-pack:center;justify-content:center;padding-left:0;margin-right:15%;margin-left:15%;list-style:none}.carousel-indicators li{box-sizing:content-box;-ms-flex:0 1 auto;flex:0 1 auto;width:30px;height:3px;margin-right:3px;margin-left:3px;text-indent:-999px;cursor:pointer;background-color:#fff;background-clip:padding-box;border-top:10px solid transparent;border-bottom:10px solid transparent;opacity:.5;transition:opacity .6s ease}@media (prefers-reduced-motion:reduce){.carousel-indicators li{transition:none}}.carousel-indicators .active{opacity:1}.carousel-caption{position:absolute;right:15%;bottom:20px;left:15%;z-index:10;padding-top:20px;padding-bottom:20px;color:#fff;text-align:center}@-webkit-keyframes spinner-border{to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes spinner-border{to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}.spinner-border{display:inline-block;width:2rem;height:2rem;vertical-align:text-bottom;border:.25em solid currentColor;border-right-color:transparent;border-radius:50%;-webkit-animation:spinner-border .75s linear infinite;animation:spinner-border .75s linear infinite}.spinner-border-sm{width:1rem;height:1rem;border-width:.2em}@-webkit-keyframes spinner-grow{0%{-webkit-transform:scale(0);transform:scale(0)}50%{opacity:1}}@keyframes spinner-grow{0%{-webkit-transform:scale(0);transform:scale(0)}50%{opacity:1}}.spinner-grow{display:inline-block;width:2rem;height:2rem;vertical-align:text-bottom;background-color:currentColor;border-radius:50%;opacity:0;-webkit-animation:spinner-grow .75s linear infinite;animation:spinner-grow .75s linear infinite}.spinner-grow-sm{width:1rem;height:1rem}.align-baseline{vertical-align:baseline!important}.align-top{vertical-align:top!important}.align-middle{vertical-align:middle!important}.align-bottom{vertical-align:bottom!important}.align-text-bottom{vertical-align:text-bottom!important}.align-text-top{vertical-align:text-top!important}.bg-primary{background-color:#007bff!important}a.bg-primary:focus,a.bg-primary:hover,button.bg-primary:focus,button.bg-primary:hover{background-color:#0062cc!important}.bg-secondary{background-color:#6c757d!important}a.bg-secondary:focus,a.bg-secondary:hover,button.bg-secondary:focus,button.bg-secondary:hover{background-color:#545b62!important}.bg-success{background-color:#28a745!important}a.bg-success:focus,a.bg-success:hover,button.bg-success:focus,button.bg-success:hover{background-color:#1e7e34!important}.bg-info{background-color:#17a2b8!important}a.bg-info:focus,a.bg-info:hover,button.bg-info:focus,button.bg-info:hover{background-color:#117a8b!important}.bg-warning{background-color:#ffc107!important}a.bg-warning:focus,a.bg-warning:hover,button.bg-warning:focus,button.bg-warning:hover{background-color:#d39e00!important}.bg-danger{background-color:#dc3545!important}a.bg-danger:focus,a.bg-danger:hover,button.bg-danger:focus,button.bg-danger:hover{background-color:#bd2130!important}.bg-light{background-color:#f8f9fa!important}a.bg-light:focus,a.bg-light:hover,button.bg-light:focus,button.bg-light:hover{background-color:#dae0e5!important}.bg-dark{background-color:#343a40!important}a.bg-dark:focus,a.bg-dark:hover,button.bg-dark:focus,button.bg-dark:hover{background-color:#1d2124!important}.bg-white{background-color:#fff!important}.bg-transparent{background-color:transparent!important}.border{border:1px solid #dee2e6!important}.border-top{border-top:1px solid #dee2e6!important}.border-right{border-right:1px solid #dee2e6!important}.border-bottom{border-bottom:1px solid #dee2e6!important}.border-left{border-left:1px solid #dee2e6!important}.border-0{border:0!important}.border-top-0{border-top:0!important}.border-right-0{border-right:0!important}.border-bottom-0{border-bottom:0!important}.border-left-0{border-left:0!important}.border-primary{border-color:#007bff!important}.border-secondary{border-color:#6c757d!important}.border-success{border-color:#28a745!important}.border-info{border-color:#17a2b8!important}.border-warning{border-color:#ffc107!important}.border-danger{border-color:#dc3545!important}.border-light{border-color:#f8f9fa!important}.border-dark{border-color:#343a40!important}.border-white{border-color:#fff!important}.rounded-sm{border-radius:.2rem!important}.rounded{border-radius:.25rem!important}.rounded-top{border-top-left-radius:.25rem!important;border-top-right-radius:.25rem!important}.rounded-right{border-top-right-radius:.25rem!important;border-bottom-right-radius:.25rem!important}.rounded-bottom{border-bottom-right-radius:.25rem!important;border-bottom-left-radius:.25rem!important}.rounded-left{border-top-left-radius:.25rem!important;border-bottom-left-radius:.25rem!important}.rounded-lg{border-radius:.3rem!important}.rounded-circle{border-radius:50%!important}.rounded-pill{border-radius:50rem!important}.rounded-0{border-radius:0!important}.clearfix::after{display:block;clear:both;content:""}.d-none{display:none!important}.d-inline{display:inline!important}.d-inline-block{display:inline-block!important}.d-block{display:block!important}.d-table{display:table!important}.d-table-row{display:table-row!important}.d-table-cell{display:table-cell!important}.d-flex{display:-ms-flexbox!important;display:flex!important}.d-inline-flex{display:-ms-inline-flexbox!important;display:inline-flex!important}@media (min-width:576px){.d-sm-none{display:none!important}.d-sm-inline{display:inline!important}.d-sm-inline-block{display:inline-block!important}.d-sm-block{display:block!important}.d-sm-table{display:table!important}.d-sm-table-row{display:table-row!important}.d-sm-table-cell{display:table-cell!important}.d-sm-flex{display:-ms-flexbox!important;display:flex!important}.d-sm-inline-flex{display:-ms-inline-flexbox!important;display:inline-flex!important}}@media (min-width:768px){.d-md-none{display:none!important}.d-md-inline{display:inline!important}.d-md-inline-block{display:inline-block!important}.d-md-block{display:block!important}.d-md-table{display:table!important}.d-md-table-row{display:table-row!important}.d-md-table-cell{display:table-cell!important}.d-md-flex{display:-ms-flexbox!important;display:flex!important}.d-md-inline-flex{display:-ms-inline-flexbox!important;display:inline-flex!important}}@media (min-width:992px){.d-lg-none{display:none!important}.d-lg-inline{display:inline!important}.d-lg-inline-block{display:inline-block!important}.d-lg-block{display:block!important}.d-lg-table{display:table!important}.d-lg-table-row{display:table-row!important}.d-lg-table-cell{display:table-cell!important}.d-lg-flex{display:-ms-flexbox!important;display:flex!important}.d-lg-inline-flex{display:-ms-inline-flexbox!important;display:inline-flex!important}}@media (min-width:1200px){.d-xl-none{display:none!important}.d-xl-inline{display:inline!important}.d-xl-inline-block{display:inline-block!important}.d-xl-block{display:block!important}.d-xl-table{display:table!important}.d-xl-table-row{display:table-row!important}.d-xl-table-cell{display:table-cell!important}.d-xl-flex{display:-ms-flexbox!important;display:flex!important}.d-xl-inline-flex{display:-ms-inline-flexbox!important;display:inline-flex!important}}@media print{.d-print-none{display:none!important}.d-print-inline{display:inline!important}.d-print-inline-block{display:inline-block!important}.d-print-block{display:block!important}.d-print-table{display:table!important}.d-print-table-row{display:table-row!important}.d-print-table-cell{display:table-cell!important}.d-print-flex{display:-ms-flexbox!important;display:flex!important}.d-print-inline-flex{display:-ms-inline-flexbox!important;display:inline-flex!important}}.embed-responsive{position:relative;display:block;width:100%;padding:0;overflow:hidden}.embed-responsive::before{display:block;content:""}.embed-responsive .embed-responsive-item,.embed-responsive embed,.embed-responsive iframe,.embed-responsive object,.embed-responsive video{position:absolute;top:0;bottom:0;left:0;width:100%;height:100%;border:0}.embed-responsive-21by9::before{padding-top:42.857143%}.embed-responsive-16by9::before{padding-top:56.25%}.embed-responsive-4by3::before{padding-top:75%}.embed-responsive-1by1::before{padding-top:100%}.flex-row{-ms-flex-direction:row!important;flex-direction:row!important}.flex-column{-ms-flex-direction:column!important;flex-direction:column!important}.flex-row-reverse{-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-column-reverse{-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-wrap-reverse{-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.flex-fill{-ms-flex:1 1 auto!important;flex:1 1 auto!important}.flex-grow-0{-ms-flex-positive:0!important;flex-grow:0!important}.flex-grow-1{-ms-flex-positive:1!important;flex-grow:1!important}.flex-shrink-0{-ms-flex-negative:0!important;flex-shrink:0!important}.flex-shrink-1{-ms-flex-negative:1!important;flex-shrink:1!important}.justify-content-start{-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-end{-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-center{-ms-flex-pack:center!important;justify-content:center!important}.justify-content-between{-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-around{-ms-flex-pack:distribute!important;justify-content:space-around!important}.align-items-start{-ms-flex-align:start!important;align-items:flex-start!important}.align-items-end{-ms-flex-align:end!important;align-items:flex-end!important}.align-items-center{-ms-flex-align:center!important;align-items:center!important}.align-items-baseline{-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-stretch{-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-around{-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-stretch{-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-auto{-ms-flex-item-align:auto!important;align-self:auto!important}.align-self-start{-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-end{-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-center{-ms-flex-item-align:center!important;align-self:center!important}.align-self-baseline{-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-stretch{-ms-flex-item-align:stretch!important;align-self:stretch!important}@media (min-width:576px){.flex-sm-row{-ms-flex-direction:row!important;flex-direction:row!important}.flex-sm-column{-ms-flex-direction:column!important;flex-direction:column!important}.flex-sm-row-reverse{-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-sm-column-reverse{-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-sm-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-sm-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-sm-wrap-reverse{-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.flex-sm-fill{-ms-flex:1 1 auto!important;flex:1 1 auto!important}.flex-sm-grow-0{-ms-flex-positive:0!important;flex-grow:0!important}.flex-sm-grow-1{-ms-flex-positive:1!important;flex-grow:1!important}.flex-sm-shrink-0{-ms-flex-negative:0!important;flex-shrink:0!important}.flex-sm-shrink-1{-ms-flex-negative:1!important;flex-shrink:1!important}.justify-content-sm-start{-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-sm-end{-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-sm-center{-ms-flex-pack:center!important;justify-content:center!important}.justify-content-sm-between{-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-sm-around{-ms-flex-pack:distribute!important;justify-content:space-around!important}.align-items-sm-start{-ms-flex-align:start!important;align-items:flex-start!important}.align-items-sm-end{-ms-flex-align:end!important;align-items:flex-end!important}.align-items-sm-center{-ms-flex-align:center!important;align-items:center!important}.align-items-sm-baseline{-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-sm-stretch{-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-sm-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-sm-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-sm-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-sm-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-sm-around{-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-sm-stretch{-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-sm-auto{-ms-flex-item-align:auto!important;align-self:auto!important}.align-self-sm-start{-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-sm-end{-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-sm-center{-ms-flex-item-align:center!important;align-self:center!important}.align-self-sm-baseline{-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-sm-stretch{-ms-flex-item-align:stretch!important;align-self:stretch!important}}@media (min-width:768px){.flex-md-row{-ms-flex-direction:row!important;flex-direction:row!important}.flex-md-column{-ms-flex-direction:column!important;flex-direction:column!important}.flex-md-row-reverse{-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-md-column-reverse{-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-md-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-md-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-md-wrap-reverse{-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.flex-md-fill{-ms-flex:1 1 auto!important;flex:1 1 auto!important}.flex-md-grow-0{-ms-flex-positive:0!important;flex-grow:0!important}.flex-md-grow-1{-ms-flex-positive:1!important;flex-grow:1!important}.flex-md-shrink-0{-ms-flex-negative:0!important;flex-shrink:0!important}.flex-md-shrink-1{-ms-flex-negative:1!important;flex-shrink:1!important}.justify-content-md-start{-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-md-end{-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-md-center{-ms-flex-pack:center!important;justify-content:center!important}.justify-content-md-between{-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-md-around{-ms-flex-pack:distribute!important;justify-content:space-around!important}.align-items-md-start{-ms-flex-align:start!important;align-items:flex-start!important}.align-items-md-end{-ms-flex-align:end!important;align-items:flex-end!important}.align-items-md-center{-ms-flex-align:center!important;align-items:center!important}.align-items-md-baseline{-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-md-stretch{-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-md-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-md-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-md-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-md-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-md-around{-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-md-stretch{-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-md-auto{-ms-flex-item-align:auto!important;align-self:auto!important}.align-self-md-start{-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-md-end{-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-md-center{-ms-flex-item-align:center!important;align-self:center!important}.align-self-md-baseline{-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-md-stretch{-ms-flex-item-align:stretch!important;align-self:stretch!important}}@media (min-width:992px){.flex-lg-row{-ms-flex-direction:row!important;flex-direction:row!important}.flex-lg-column{-ms-flex-direction:column!important;flex-direction:column!important}.flex-lg-row-reverse{-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-lg-column-reverse{-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-lg-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-lg-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-lg-wrap-reverse{-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.flex-lg-fill{-ms-flex:1 1 auto!important;flex:1 1 auto!important}.flex-lg-grow-0{-ms-flex-positive:0!important;flex-grow:0!important}.flex-lg-grow-1{-ms-flex-positive:1!important;flex-grow:1!important}.flex-lg-shrink-0{-ms-flex-negative:0!important;flex-shrink:0!important}.flex-lg-shrink-1{-ms-flex-negative:1!important;flex-shrink:1!important}.justify-content-lg-start{-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-lg-end{-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-lg-center{-ms-flex-pack:center!important;justify-content:center!important}.justify-content-lg-between{-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-lg-around{-ms-flex-pack:distribute!important;justify-content:space-around!important}.align-items-lg-start{-ms-flex-align:start!important;align-items:flex-start!important}.align-items-lg-end{-ms-flex-align:end!important;align-items:flex-end!important}.align-items-lg-center{-ms-flex-align:center!important;align-items:center!important}.align-items-lg-baseline{-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-lg-stretch{-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-lg-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-lg-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-lg-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-lg-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-lg-around{-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-lg-stretch{-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-lg-auto{-ms-flex-item-align:auto!important;align-self:auto!important}.align-self-lg-start{-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-lg-end{-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-lg-center{-ms-flex-item-align:center!important;align-self:center!important}.align-self-lg-baseline{-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-lg-stretch{-ms-flex-item-align:stretch!important;align-self:stretch!important}}@media (min-width:1200px){.flex-xl-row{-ms-flex-direction:row!important;flex-direction:row!important}.flex-xl-column{-ms-flex-direction:column!important;flex-direction:column!important}.flex-xl-row-reverse{-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-xl-column-reverse{-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-xl-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-xl-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-xl-wrap-reverse{-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.flex-xl-fill{-ms-flex:1 1 auto!important;flex:1 1 auto!important}.flex-xl-grow-0{-ms-flex-positive:0!important;flex-grow:0!important}.flex-xl-grow-1{-ms-flex-positive:1!important;flex-grow:1!important}.flex-xl-shrink-0{-ms-flex-negative:0!important;flex-shrink:0!important}.flex-xl-shrink-1{-ms-flex-negative:1!important;flex-shrink:1!important}.justify-content-xl-start{-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-xl-end{-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-xl-center{-ms-flex-pack:center!important;justify-content:center!important}.justify-content-xl-between{-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-xl-around{-ms-flex-pack:distribute!important;justify-content:space-around!important}.align-items-xl-start{-ms-flex-align:start!important;align-items:flex-start!important}.align-items-xl-end{-ms-flex-align:end!important;align-items:flex-end!important}.align-items-xl-center{-ms-flex-align:center!important;align-items:center!important}.align-items-xl-baseline{-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-xl-stretch{-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-xl-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-xl-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-xl-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-xl-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-xl-around{-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-xl-stretch{-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-xl-auto{-ms-flex-item-align:auto!important;align-self:auto!important}.align-self-xl-start{-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-xl-end{-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-xl-center{-ms-flex-item-align:center!important;align-self:center!important}.align-self-xl-baseline{-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-xl-stretch{-ms-flex-item-align:stretch!important;align-self:stretch!important}}.float-left{float:left!important}.float-right{float:right!important}.float-none{float:none!important}@media (min-width:576px){.float-sm-left{float:left!important}.float-sm-right{float:right!important}.float-sm-none{float:none!important}}@media (min-width:768px){.float-md-left{float:left!important}.float-md-right{float:right!important}.float-md-none{float:none!important}}@media (min-width:992px){.float-lg-left{float:left!important}.float-lg-right{float:right!important}.float-lg-none{float:none!important}}@media (min-width:1200px){.float-xl-left{float:left!important}.float-xl-right{float:right!important}.float-xl-none{float:none!important}}.overflow-auto{overflow:auto!important}.overflow-hidden{overflow:hidden!important}.position-static{position:static!important}.position-relative{position:relative!important}.position-absolute{position:absolute!important}.position-fixed{position:fixed!important}.position-sticky{position:-webkit-sticky!important;position:sticky!important}.fixed-top{position:fixed;top:0;right:0;left:0;z-index:1030}.fixed-bottom{position:fixed;right:0;bottom:0;left:0;z-index:1030}.sr-only{position:absolute;width:1px;height:1px;padding:0;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0}.sr-only-focusable:active,.sr-only-focusable:focus{position:static;width:auto;height:auto;overflow:visible;clip:auto;white-space:normal}.shadow-sm{box-shadow:0 .125rem .25rem rgba(0,0,0,.075)!important}.shadow{box-shadow:0 .5rem 1rem rgba(0,0,0,.15)!important}.shadow-lg{box-shadow:0 1rem 3rem rgba(0,0,0,.175)!important}.shadow-none{box-shadow:none!important}.w-25{width:25%!important}.w-50{width:50%!important}.w-75{width:75%!important}.w-100{width:100%!important}.w-auto{width:auto!important}.h-25{height:25%!important}.h-50{height:50%!important}.h-75{height:75%!important}.h-100{height:100%!important}.h-auto{height:auto!important}.mw-100{max-width:100%!important}.mh-100{max-height:100%!important}.min-vw-100{min-width:100vw!important}.min-vh-100{min-height:100vh!important}.vw-100{width:100vw!important}.vh-100{height:100vh!important}.stretched-link::after{position:absolute;top:0;right:0;bottom:0;left:0;z-index:1;pointer-events:auto;content:"";background-color:rgba(0,0,0,0)}.m-0{margin:0!important}.mt-0,.my-0{margin-top:0!important}.mr-0,.mx-0{margin-right:0!important}.mb-0,.my-0{margin-bottom:0!important}.ml-0,.mx-0{margin-left:0!important}.m-1{margin:.25rem!important}.mt-1,.my-1{margin-top:.25rem!important}.mr-1,.mx-1{margin-right:.25rem!important}.mb-1,.my-1{margin-bottom:.25rem!important}.ml-1,.mx-1{margin-left:.25rem!important}.m-2{margin:.5rem!important}.mt-2,.my-2{margin-top:.5rem!important}.mr-2,.mx-2{margin-right:.5rem!important}.mb-2,.my-2{margin-bottom:.5rem!important}.ml-2,.mx-2{margin-left:.5rem!important}.m-3{margin:1rem!important}.mt-3,.my-3{margin-top:1rem!important}.mr-3,.mx-3{margin-right:1rem!important}.mb-3,.my-3{margin-bottom:1rem!important}.ml-3,.mx-3{margin-left:1rem!important}.m-4{margin:1.5rem!important}.mt-4,.my-4{margin-top:1.5rem!important}.mr-4,.mx-4{margin-right:1.5rem!important}.mb-4,.my-4{margin-bottom:1.5rem!important}.ml-4,.mx-4{margin-left:1.5rem!important}.m-5{margin:3rem!important}.mt-5,.my-5{margin-top:3rem!important}.mr-5,.mx-5{margin-right:3rem!important}.mb-5,.my-5{margin-bottom:3rem!important}.ml-5,.mx-5{margin-left:3rem!important}.p-0{padding:0!important}.pt-0,.py-0{padding-top:0!important}.pr-0,.px-0{padding-right:0!important}.pb-0,.py-0{padding-bottom:0!important}.pl-0,.px-0{padding-left:0!important}.p-1{padding:.25rem!important}.pt-1,.py-1{padding-top:.25rem!important}.pr-1,.px-1{padding-right:.25rem!important}.pb-1,.py-1{padding-bottom:.25rem!important}.pl-1,.px-1{padding-left:.25rem!important}.p-2{padding:.5rem!important}.pt-2,.py-2{padding-top:.5rem!important}.pr-2,.px-2{padding-right:.5rem!important}.pb-2,.py-2{padding-bottom:.5rem!important}.pl-2,.px-2{padding-left:.5rem!important}.p-3{padding:1rem!important}.pt-3,.py-3{padding-top:1rem!important}.pr-3,.px-3{padding-right:1rem!important}.pb-3,.py-3{padding-bottom:1rem!important}.pl-3,.px-3{padding-left:1rem!important}.p-4{padding:1.5rem!important}.pt-4,.py-4{padding-top:1.5rem!important}.pr-4,.px-4{padding-right:1.5rem!important}.pb-4,.py-4{padding-bottom:1.5rem!important}.pl-4,.px-4{padding-left:1.5rem!important}.p-5{padding:3rem!important}.pt-5,.py-5{padding-top:3rem!important}.pr-5,.px-5{padding-right:3rem!important}.pb-5,.py-5{padding-bottom:3rem!important}.pl-5,.px-5{padding-left:3rem!important}.m-n1{margin:-.25rem!important}.mt-n1,.my-n1{margin-top:-.25rem!important}.mr-n1,.mx-n1{margin-right:-.25rem!important}.mb-n1,.my-n1{margin-bottom:-.25rem!important}.ml-n1,.mx-n1{margin-left:-.25rem!important}.m-n2{margin:-.5rem!important}.mt-n2,.my-n2{margin-top:-.5rem!important}.mr-n2,.mx-n2{margin-right:-.5rem!important}.mb-n2,.my-n2{margin-bottom:-.5rem!important}.ml-n2,.mx-n2{margin-left:-.5rem!important}.m-n3{margin:-1rem!important}.mt-n3,.my-n3{margin-top:-1rem!important}.mr-n3,.mx-n3{margin-right:-1rem!important}.mb-n3,.my-n3{margin-bottom:-1rem!important}.ml-n3,.mx-n3{margin-left:-1rem!important}.m-n4{margin:-1.5rem!important}.mt-n4,.my-n4{margin-top:-1.5rem!important}.mr-n4,.mx-n4{margin-right:-1.5rem!important}.mb-n4,.my-n4{margin-bottom:-1.5rem!important}.ml-n4,.mx-n4{margin-left:-1.5rem!important}.m-n5{margin:-3rem!important}.mt-n5,.my-n5{margin-top:-3rem!important}.mr-n5,.mx-n5{margin-right:-3rem!important}.mb-n5,.my-n5{margin-bottom:-3rem!important}.ml-n5,.mx-n5{margin-left:-3rem!important}.m-auto{margin:auto!important}.mt-auto,.my-auto{margin-top:auto!important}.mr-auto,.mx-auto{margin-right:auto!important}.mb-auto,.my-auto{margin-bottom:auto!important}.ml-auto,.mx-auto{margin-left:auto!important}@media (min-width:576px){.m-sm-0{margin:0!important}.mt-sm-0,.my-sm-0{margin-top:0!important}.mr-sm-0,.mx-sm-0{margin-right:0!important}.mb-sm-0,.my-sm-0{margin-bottom:0!important}.ml-sm-0,.mx-sm-0{margin-left:0!important}.m-sm-1{margin:.25rem!important}.mt-sm-1,.my-sm-1{margin-top:.25rem!important}.mr-sm-1,.mx-sm-1{margin-right:.25rem!important}.mb-sm-1,.my-sm-1{margin-bottom:.25rem!important}.ml-sm-1,.mx-sm-1{margin-left:.25rem!important}.m-sm-2{margin:.5rem!important}.mt-sm-2,.my-sm-2{margin-top:.5rem!important}.mr-sm-2,.mx-sm-2{margin-right:.5rem!important}.mb-sm-2,.my-sm-2{margin-bottom:.5rem!important}.ml-sm-2,.mx-sm-2{margin-left:.5rem!important}.m-sm-3{margin:1rem!important}.mt-sm-3,.my-sm-3{margin-top:1rem!important}.mr-sm-3,.mx-sm-3{margin-right:1rem!important}.mb-sm-3,.my-sm-3{margin-bottom:1rem!important}.ml-sm-3,.mx-sm-3{margin-left:1rem!important}.m-sm-4{margin:1.5rem!important}.mt-sm-4,.my-sm-4{margin-top:1.5rem!important}.mr-sm-4,.mx-sm-4{margin-right:1.5rem!important}.mb-sm-4,.my-sm-4{margin-bottom:1.5rem!important}.ml-sm-4,.mx-sm-4{margin-left:1.5rem!important}.m-sm-5{margin:3rem!important}.mt-sm-5,.my-sm-5{margin-top:3rem!important}.mr-sm-5,.mx-sm-5{margin-right:3rem!important}.mb-sm-5,.my-sm-5{margin-bottom:3rem!important}.ml-sm-5,.mx-sm-5{margin-left:3rem!important}.p-sm-0{padding:0!important}.pt-sm-0,.py-sm-0{padding-top:0!important}.pr-sm-0,.px-sm-0{padding-right:0!important}.pb-sm-0,.py-sm-0{padding-bottom:0!important}.pl-sm-0,.px-sm-0{padding-left:0!important}.p-sm-1{padding:.25rem!important}.pt-sm-1,.py-sm-1{padding-top:.25rem!important}.pr-sm-1,.px-sm-1{padding-right:.25rem!important}.pb-sm-1,.py-sm-1{padding-bottom:.25rem!important}.pl-sm-1,.px-sm-1{padding-left:.25rem!important}.p-sm-2{padding:.5rem!important}.pt-sm-2,.py-sm-2{padding-top:.5rem!important}.pr-sm-2,.px-sm-2{padding-right:.5rem!important}.pb-sm-2,.py-sm-2{padding-bottom:.5rem!important}.pl-sm-2,.px-sm-2{padding-left:.5rem!important}.p-sm-3{padding:1rem!important}.pt-sm-3,.py-sm-3{padding-top:1rem!important}.pr-sm-3,.px-sm-3{padding-right:1rem!important}.pb-sm-3,.py-sm-3{padding-bottom:1rem!important}.pl-sm-3,.px-sm-3{padding-left:1rem!important}.p-sm-4{padding:1.5rem!important}.pt-sm-4,.py-sm-4{padding-top:1.5rem!important}.pr-sm-4,.px-sm-4{padding-right:1.5rem!important}.pb-sm-4,.py-sm-4{padding-bottom:1.5rem!important}.pl-sm-4,.px-sm-4{padding-left:1.5rem!important}.p-sm-5{padding:3rem!important}.pt-sm-5,.py-sm-5{padding-top:3rem!important}.pr-sm-5,.px-sm-5{padding-right:3rem!important}.pb-sm-5,.py-sm-5{padding-bottom:3rem!important}.pl-sm-5,.px-sm-5{padding-left:3rem!important}.m-sm-n1{margin:-.25rem!important}.mt-sm-n1,.my-sm-n1{margin-top:-.25rem!important}.mr-sm-n1,.mx-sm-n1{margin-right:-.25rem!important}.mb-sm-n1,.my-sm-n1{margin-bottom:-.25rem!important}.ml-sm-n1,.mx-sm-n1{margin-left:-.25rem!important}.m-sm-n2{margin:-.5rem!important}.mt-sm-n2,.my-sm-n2{margin-top:-.5rem!important}.mr-sm-n2,.mx-sm-n2{margin-right:-.5rem!important}.mb-sm-n2,.my-sm-n2{margin-bottom:-.5rem!important}.ml-sm-n2,.mx-sm-n2{margin-left:-.5rem!important}.m-sm-n3{margin:-1rem!important}.mt-sm-n3,.my-sm-n3{margin-top:-1rem!important}.mr-sm-n3,.mx-sm-n3{margin-right:-1rem!important}.mb-sm-n3,.my-sm-n3{margin-bottom:-1rem!important}.ml-sm-n3,.mx-sm-n3{margin-left:-1rem!important}.m-sm-n4{margin:-1.5rem!important}.mt-sm-n4,.my-sm-n4{margin-top:-1.5rem!important}.mr-sm-n4,.mx-sm-n4{margin-right:-1.5rem!important}.mb-sm-n4,.my-sm-n4{margin-bottom:-1.5rem!important}.ml-sm-n4,.mx-sm-n4{margin-left:-1.5rem!important}.m-sm-n5{margin:-3rem!important}.mt-sm-n5,.my-sm-n5{margin-top:-3rem!important}.mr-sm-n5,.mx-sm-n5{margin-right:-3rem!important}.mb-sm-n5,.my-sm-n5{margin-bottom:-3rem!important}.ml-sm-n5,.mx-sm-n5{margin-left:-3rem!important}.m-sm-auto{margin:auto!important}.mt-sm-auto,.my-sm-auto{margin-top:auto!important}.mr-sm-auto,.mx-sm-auto{margin-right:auto!important}.mb-sm-auto,.my-sm-auto{margin-bottom:auto!important}.ml-sm-auto,.mx-sm-auto{margin-left:auto!important}}@media (min-width:768px){.m-md-0{margin:0!important}.mt-md-0,.my-md-0{margin-top:0!important}.mr-md-0,.mx-md-0{margin-right:0!important}.mb-md-0,.my-md-0{margin-bottom:0!important}.ml-md-0,.mx-md-0{margin-left:0!important}.m-md-1{margin:.25rem!important}.mt-md-1,.my-md-1{margin-top:.25rem!important}.mr-md-1,.mx-md-1{margin-right:.25rem!important}.mb-md-1,.my-md-1{margin-bottom:.25rem!important}.ml-md-1,.mx-md-1{margin-left:.25rem!important}.m-md-2{margin:.5rem!important}.mt-md-2,.my-md-2{margin-top:.5rem!important}.mr-md-2,.mx-md-2{margin-right:.5rem!important}.mb-md-2,.my-md-2{margin-bottom:.5rem!important}.ml-md-2,.mx-md-2{margin-left:.5rem!important}.m-md-3{margin:1rem!important}.mt-md-3,.my-md-3{margin-top:1rem!important}.mr-md-3,.mx-md-3{margin-right:1rem!important}.mb-md-3,.my-md-3{margin-bottom:1rem!important}.ml-md-3,.mx-md-3{margin-left:1rem!important}.m-md-4{margin:1.5rem!important}.mt-md-4,.my-md-4{margin-top:1.5rem!important}.mr-md-4,.mx-md-4{margin-right:1.5rem!important}.mb-md-4,.my-md-4{margin-bottom:1.5rem!important}.ml-md-4,.mx-md-4{margin-left:1.5rem!important}.m-md-5{margin:3rem!important}.mt-md-5,.my-md-5{margin-top:3rem!important}.mr-md-5,.mx-md-5{margin-right:3rem!important}.mb-md-5,.my-md-5{margin-bottom:3rem!important}.ml-md-5,.mx-md-5{margin-left:3rem!important}.p-md-0{padding:0!important}.pt-md-0,.py-md-0{padding-top:0!important}.pr-md-0,.px-md-0{padding-right:0!important}.pb-md-0,.py-md-0{padding-bottom:0!important}.pl-md-0,.px-md-0{padding-left:0!important}.p-md-1{padding:.25rem!important}.pt-md-1,.py-md-1{padding-top:.25rem!important}.pr-md-1,.px-md-1{padding-right:.25rem!important}.pb-md-1,.py-md-1{padding-bottom:.25rem!important}.pl-md-1,.px-md-1{padding-left:.25rem!important}.p-md-2{padding:.5rem!important}.pt-md-2,.py-md-2{padding-top:.5rem!important}.pr-md-2,.px-md-2{padding-right:.5rem!important}.pb-md-2,.py-md-2{padding-bottom:.5rem!important}.pl-md-2,.px-md-2{padding-left:.5rem!important}.p-md-3{padding:1rem!important}.pt-md-3,.py-md-3{padding-top:1rem!important}.pr-md-3,.px-md-3{padding-right:1rem!important}.pb-md-3,.py-md-3{padding-bottom:1rem!important}.pl-md-3,.px-md-3{padding-left:1rem!important}.p-md-4{padding:1.5rem!important}.pt-md-4,.py-md-4{padding-top:1.5rem!important}.pr-md-4,.px-md-4{padding-right:1.5rem!important}.pb-md-4,.py-md-4{padding-bottom:1.5rem!important}.pl-md-4,.px-md-4{padding-left:1.5rem!important}.p-md-5{padding:3rem!important}.pt-md-5,.py-md-5{padding-top:3rem!important}.pr-md-5,.px-md-5{padding-right:3rem!important}.pb-md-5,.py-md-5{padding-bottom:3rem!important}.pl-md-5,.px-md-5{padding-left:3rem!important}.m-md-n1{margin:-.25rem!important}.mt-md-n1,.my-md-n1{margin-top:-.25rem!important}.mr-md-n1,.mx-md-n1{margin-right:-.25rem!important}.mb-md-n1,.my-md-n1{margin-bottom:-.25rem!important}.ml-md-n1,.mx-md-n1{margin-left:-.25rem!important}.m-md-n2{margin:-.5rem!important}.mt-md-n2,.my-md-n2{margin-top:-.5rem!important}.mr-md-n2,.mx-md-n2{margin-right:-.5rem!important}.mb-md-n2,.my-md-n2{margin-bottom:-.5rem!important}.ml-md-n2,.mx-md-n2{margin-left:-.5rem!important}.m-md-n3{margin:-1rem!important}.mt-md-n3,.my-md-n3{margin-top:-1rem!important}.mr-md-n3,.mx-md-n3{margin-right:-1rem!important}.mb-md-n3,.my-md-n3{margin-bottom:-1rem!important}.ml-md-n3,.mx-md-n3{margin-left:-1rem!important}.m-md-n4{margin:-1.5rem!important}.mt-md-n4,.my-md-n4{margin-top:-1.5rem!important}.mr-md-n4,.mx-md-n4{margin-right:-1.5rem!important}.mb-md-n4,.my-md-n4{margin-bottom:-1.5rem!important}.ml-md-n4,.mx-md-n4{margin-left:-1.5rem!important}.m-md-n5{margin:-3rem!important}.mt-md-n5,.my-md-n5{margin-top:-3rem!important}.mr-md-n5,.mx-md-n5{margin-right:-3rem!important}.mb-md-n5,.my-md-n5{margin-bottom:-3rem!important}.ml-md-n5,.mx-md-n5{margin-left:-3rem!important}.m-md-auto{margin:auto!important}.mt-md-auto,.my-md-auto{margin-top:auto!important}.mr-md-auto,.mx-md-auto{margin-right:auto!important}.mb-md-auto,.my-md-auto{margin-bottom:auto!important}.ml-md-auto,.mx-md-auto{margin-left:auto!important}}@media (min-width:992px){.m-lg-0{margin:0!important}.mt-lg-0,.my-lg-0{margin-top:0!important}.mr-lg-0,.mx-lg-0{margin-right:0!important}.mb-lg-0,.my-lg-0{margin-bottom:0!important}.ml-lg-0,.mx-lg-0{margin-left:0!important}.m-lg-1{margin:.25rem!important}.mt-lg-1,.my-lg-1{margin-top:.25rem!important}.mr-lg-1,.mx-lg-1{margin-right:.25rem!important}.mb-lg-1,.my-lg-1{margin-bottom:.25rem!important}.ml-lg-1,.mx-lg-1{margin-left:.25rem!important}.m-lg-2{margin:.5rem!important}.mt-lg-2,.my-lg-2{margin-top:.5rem!important}.mr-lg-2,.mx-lg-2{margin-right:.5rem!important}.mb-lg-2,.my-lg-2{margin-bottom:.5rem!important}.ml-lg-2,.mx-lg-2{margin-left:.5rem!important}.m-lg-3{margin:1rem!important}.mt-lg-3,.my-lg-3{margin-top:1rem!important}.mr-lg-3,.mx-lg-3{margin-right:1rem!important}.mb-lg-3,.my-lg-3{margin-bottom:1rem!important}.ml-lg-3,.mx-lg-3{margin-left:1rem!important}.m-lg-4{margin:1.5rem!important}.mt-lg-4,.my-lg-4{margin-top:1.5rem!important}.mr-lg-4,.mx-lg-4{margin-right:1.5rem!important}.mb-lg-4,.my-lg-4{margin-bottom:1.5rem!important}.ml-lg-4,.mx-lg-4{margin-left:1.5rem!important}.m-lg-5{margin:3rem!important}.mt-lg-5,.my-lg-5{margin-top:3rem!important}.mr-lg-5,.mx-lg-5{margin-right:3rem!important}.mb-lg-5,.my-lg-5{margin-bottom:3rem!important}.ml-lg-5,.mx-lg-5{margin-left:3rem!important}.p-lg-0{padding:0!important}.pt-lg-0,.py-lg-0{padding-top:0!important}.pr-lg-0,.px-lg-0{padding-right:0!important}.pb-lg-0,.py-lg-0{padding-bottom:0!important}.pl-lg-0,.px-lg-0{padding-left:0!important}.p-lg-1{padding:.25rem!important}.pt-lg-1,.py-lg-1{padding-top:.25rem!important}.pr-lg-1,.px-lg-1{padding-right:.25rem!important}.pb-lg-1,.py-lg-1{padding-bottom:.25rem!important}.pl-lg-1,.px-lg-1{padding-left:.25rem!important}.p-lg-2{padding:.5rem!important}.pt-lg-2,.py-lg-2{padding-top:.5rem!important}.pr-lg-2,.px-lg-2{padding-right:.5rem!important}.pb-lg-2,.py-lg-2{padding-bottom:.5rem!important}.pl-lg-2,.px-lg-2{padding-left:.5rem!important}.p-lg-3{padding:1rem!important}.pt-lg-3,.py-lg-3{padding-top:1rem!important}.pr-lg-3,.px-lg-3{padding-right:1rem!important}.pb-lg-3,.py-lg-3{padding-bottom:1rem!important}.pl-lg-3,.px-lg-3{padding-left:1rem!important}.p-lg-4{padding:1.5rem!important}.pt-lg-4,.py-lg-4{padding-top:1.5rem!important}.pr-lg-4,.px-lg-4{padding-right:1.5rem!important}.pb-lg-4,.py-lg-4{padding-bottom:1.5rem!important}.pl-lg-4,.px-lg-4{padding-left:1.5rem!important}.p-lg-5{padding:3rem!important}.pt-lg-5,.py-lg-5{padding-top:3rem!important}.pr-lg-5,.px-lg-5{padding-right:3rem!important}.pb-lg-5,.py-lg-5{padding-bottom:3rem!important}.pl-lg-5,.px-lg-5{padding-left:3rem!important}.m-lg-n1{margin:-.25rem!important}.mt-lg-n1,.my-lg-n1{margin-top:-.25rem!important}.mr-lg-n1,.mx-lg-n1{margin-right:-.25rem!important}.mb-lg-n1,.my-lg-n1{margin-bottom:-.25rem!important}.ml-lg-n1,.mx-lg-n1{margin-left:-.25rem!important}.m-lg-n2{margin:-.5rem!important}.mt-lg-n2,.my-lg-n2{margin-top:-.5rem!important}.mr-lg-n2,.mx-lg-n2{margin-right:-.5rem!important}.mb-lg-n2,.my-lg-n2{margin-bottom:-.5rem!important}.ml-lg-n2,.mx-lg-n2{margin-left:-.5rem!important}.m-lg-n3{margin:-1rem!important}.mt-lg-n3,.my-lg-n3{margin-top:-1rem!important}.mr-lg-n3,.mx-lg-n3{margin-right:-1rem!important}.mb-lg-n3,.my-lg-n3{margin-bottom:-1rem!important}.ml-lg-n3,.mx-lg-n3{margin-left:-1rem!important}.m-lg-n4{margin:-1.5rem!important}.mt-lg-n4,.my-lg-n4{margin-top:-1.5rem!important}.mr-lg-n4,.mx-lg-n4{margin-right:-1.5rem!important}.mb-lg-n4,.my-lg-n4{margin-bottom:-1.5rem!important}.ml-lg-n4,.mx-lg-n4{margin-left:-1.5rem!important}.m-lg-n5{margin:-3rem!important}.mt-lg-n5,.my-lg-n5{margin-top:-3rem!important}.mr-lg-n5,.mx-lg-n5{margin-right:-3rem!important}.mb-lg-n5,.my-lg-n5{margin-bottom:-3rem!important}.ml-lg-n5,.mx-lg-n5{margin-left:-3rem!important}.m-lg-auto{margin:auto!important}.mt-lg-auto,.my-lg-auto{margin-top:auto!important}.mr-lg-auto,.mx-lg-auto{margin-right:auto!important}.mb-lg-auto,.my-lg-auto{margin-bottom:auto!important}.ml-lg-auto,.mx-lg-auto{margin-left:auto!important}}@media (min-width:1200px){.m-xl-0{margin:0!important}.mt-xl-0,.my-xl-0{margin-top:0!important}.mr-xl-0,.mx-xl-0{margin-right:0!important}.mb-xl-0,.my-xl-0{margin-bottom:0!important}.ml-xl-0,.mx-xl-0{margin-left:0!important}.m-xl-1{margin:.25rem!important}.mt-xl-1,.my-xl-1{margin-top:.25rem!important}.mr-xl-1,.mx-xl-1{margin-right:.25rem!important}.mb-xl-1,.my-xl-1{margin-bottom:.25rem!important}.ml-xl-1,.mx-xl-1{margin-left:.25rem!important}.m-xl-2{margin:.5rem!important}.mt-xl-2,.my-xl-2{margin-top:.5rem!important}.mr-xl-2,.mx-xl-2{margin-right:.5rem!important}.mb-xl-2,.my-xl-2{margin-bottom:.5rem!important}.ml-xl-2,.mx-xl-2{margin-left:.5rem!important}.m-xl-3{margin:1rem!important}.mt-xl-3,.my-xl-3{margin-top:1rem!important}.mr-xl-3,.mx-xl-3{margin-right:1rem!important}.mb-xl-3,.my-xl-3{margin-bottom:1rem!important}.ml-xl-3,.mx-xl-3{margin-left:1rem!important}.m-xl-4{margin:1.5rem!important}.mt-xl-4,.my-xl-4{margin-top:1.5rem!important}.mr-xl-4,.mx-xl-4{margin-right:1.5rem!important}.mb-xl-4,.my-xl-4{margin-bottom:1.5rem!important}.ml-xl-4,.mx-xl-4{margin-left:1.5rem!important}.m-xl-5{margin:3rem!important}.mt-xl-5,.my-xl-5{margin-top:3rem!important}.mr-xl-5,.mx-xl-5{margin-right:3rem!important}.mb-xl-5,.my-xl-5{margin-bottom:3rem!important}.ml-xl-5,.mx-xl-5{margin-left:3rem!important}.p-xl-0{padding:0!important}.pt-xl-0,.py-xl-0{padding-top:0!important}.pr-xl-0,.px-xl-0{padding-right:0!important}.pb-xl-0,.py-xl-0{padding-bottom:0!important}.pl-xl-0,.px-xl-0{padding-left:0!important}.p-xl-1{padding:.25rem!important}.pt-xl-1,.py-xl-1{padding-top:.25rem!important}.pr-xl-1,.px-xl-1{padding-right:.25rem!important}.pb-xl-1,.py-xl-1{padding-bottom:.25rem!important}.pl-xl-1,.px-xl-1{padding-left:.25rem!important}.p-xl-2{padding:.5rem!important}.pt-xl-2,.py-xl-2{padding-top:.5rem!important}.pr-xl-2,.px-xl-2{padding-right:.5rem!important}.pb-xl-2,.py-xl-2{padding-bottom:.5rem!important}.pl-xl-2,.px-xl-2{padding-left:.5rem!important}.p-xl-3{padding:1rem!important}.pt-xl-3,.py-xl-3{padding-top:1rem!important}.pr-xl-3,.px-xl-3{padding-right:1rem!important}.pb-xl-3,.py-xl-3{padding-bottom:1rem!important}.pl-xl-3,.px-xl-3{padding-left:1rem!important}.p-xl-4{padding:1.5rem!important}.pt-xl-4,.py-xl-4{padding-top:1.5rem!important}.pr-xl-4,.px-xl-4{padding-right:1.5rem!important}.pb-xl-4,.py-xl-4{padding-bottom:1.5rem!important}.pl-xl-4,.px-xl-4{padding-left:1.5rem!important}.p-xl-5{padding:3rem!important}.pt-xl-5,.py-xl-5{padding-top:3rem!important}.pr-xl-5,.px-xl-5{padding-right:3rem!important}.pb-xl-5,.py-xl-5{padding-bottom:3rem!important}.pl-xl-5,.px-xl-5{padding-left:3rem!important}.m-xl-n1{margin:-.25rem!important}.mt-xl-n1,.my-xl-n1{margin-top:-.25rem!important}.mr-xl-n1,.mx-xl-n1{margin-right:-.25rem!important}.mb-xl-n1,.my-xl-n1{margin-bottom:-.25rem!important}.ml-xl-n1,.mx-xl-n1{margin-left:-.25rem!important}.m-xl-n2{margin:-.5rem!important}.mt-xl-n2,.my-xl-n2{margin-top:-.5rem!important}.mr-xl-n2,.mx-xl-n2{margin-right:-.5rem!important}.mb-xl-n2,.my-xl-n2{margin-bottom:-.5rem!important}.ml-xl-n2,.mx-xl-n2{margin-left:-.5rem!important}.m-xl-n3{margin:-1rem!important}.mt-xl-n3,.my-xl-n3{margin-top:-1rem!important}.mr-xl-n3,.mx-xl-n3{margin-right:-1rem!important}.mb-xl-n3,.my-xl-n3{margin-bottom:-1rem!important}.ml-xl-n3,.mx-xl-n3{margin-left:-1rem!important}.m-xl-n4{margin:-1.5rem!important}.mt-xl-n4,.my-xl-n4{margin-top:-1.5rem!important}.mr-xl-n4,.mx-xl-n4{margin-right:-1.5rem!important}.mb-xl-n4,.my-xl-n4{margin-bottom:-1.5rem!important}.ml-xl-n4,.mx-xl-n4{margin-left:-1.5rem!important}.m-xl-n5{margin:-3rem!important}.mt-xl-n5,.my-xl-n5{margin-top:-3rem!important}.mr-xl-n5,.mx-xl-n5{margin-right:-3rem!important}.mb-xl-n5,.my-xl-n5{margin-bottom:-3rem!important}.ml-xl-n5,.mx-xl-n5{margin-left:-3rem!important}.m-xl-auto{margin:auto!important}.mt-xl-auto,.my-xl-auto{margin-top:auto!important}.mr-xl-auto,.mx-xl-auto{margin-right:auto!important}.mb-xl-auto,.my-xl-auto{margin-bottom:auto!important}.ml-xl-auto,.mx-xl-auto{margin-left:auto!important}}.text-monospace{font-family:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace!important}.text-justify{text-align:justify!important}.text-wrap{white-space:normal!important}.text-nowrap{white-space:nowrap!important}.text-truncate{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.text-left{text-align:left!important}.text-right{text-align:right!important}.text-center{text-align:center!important}@media (min-width:576px){.text-sm-left{text-align:left!important}.text-sm-right{text-align:right!important}.text-sm-center{text-align:center!important}}@media (min-width:768px){.text-md-left{text-align:left!important}.text-md-right{text-align:right!important}.text-md-center{text-align:center!important}}@media (min-width:992px){.text-lg-left{text-align:left!important}.text-lg-right{text-align:right!important}.text-lg-center{text-align:center!important}}@media (min-width:1200px){.text-xl-left{text-align:left!important}.text-xl-right{text-align:right!important}.text-xl-center{text-align:center!important}}.text-lowercase{text-transform:lowercase!important}.text-uppercase{text-transform:uppercase!important}.text-capitalize{text-transform:capitalize!important}.font-weight-light{font-weight:300!important}.font-weight-lighter{font-weight:lighter!important}.font-weight-normal{font-weight:400!important}.font-weight-bold{font-weight:700!important}.font-weight-bolder{font-weight:bolder!important}.font-italic{font-style:italic!important}.text-white{color:#fff!important}.text-primary{color:#007bff!important}a.text-primary:focus,a.text-primary:hover{color:#0056b3!important}.text-secondary{color:#6c757d!important}a.text-secondary:focus,a.text-secondary:hover{color:#494f54!important}.text-success{color:#28a745!important}a.text-success:focus,a.text-success:hover{color:#19692c!important}.text-info{color:#17a2b8!important}a.text-info:focus,a.text-info:hover{color:#0f6674!important}.text-warning{color:#ffc107!important}a.text-warning:focus,a.text-warning:hover{color:#ba8b00!important}.text-danger{color:#dc3545!important}a.text-danger:focus,a.text-danger:hover{color:#a71d2a!important}.text-light{color:#f8f9fa!important}a.text-light:focus,a.text-light:hover{color:#cbd3da!important}.text-dark{color:#343a40!important}a.text-dark:focus,a.text-dark:hover{color:#121416!important}.text-body{color:#212529!important}.text-muted{color:#6c757d!important}.text-black-50{color:rgba(0,0,0,.5)!important}.text-white-50{color:rgba(255,255,255,.5)!important}.text-hide{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0}.text-decoration-none{text-decoration:none!important}.text-break{word-break:break-word!important;overflow-wrap:break-word!important}.text-reset{color:inherit!important}.visible{visibility:visible!important}.invisible{visibility:hidden!important}@media print{*,::after,::before{text-shadow:none!important;box-shadow:none!important}a:not(.btn){text-decoration:underline}abbr[title]::after{content:" ("attr(title) ")"}pre{white-space:pre-wrap!important}blockquote,pre{border:1px solid #adb5bd;page-break-inside:avoid}thead{display:table-header-group}img,tr{page-break-inside:avoid}h2,h3,p{orphans:3;widows:3}h2,h3{page-break-after:avoid}@page{size:a3}body{min-width:992px!important}.container{min-width:992px!important}.navbar{display:none}.badge{border:1px solid #000}.table{border-collapse:collapse!important}.table td,.table th{background-color:#fff!important}.table-bordered td,.table-bordered th{border:1px solid #dee2e6!important}.table-dark{color:inherit}.table-dark tbody+tbody,.table-dark td,.table-dark th,.table-dark thead th{border-color:#dee2e6}.table .thead-dark th{color:inherit;border-color:#dee2e6}}@font-face{font-family:FontAwesome;src:url(../fonts/fontawesome-webfont.eot?v=4.7.0);src:url(../fonts/fontawesome-webfont.eot?#iefix&v=4.7.0) format("embedded-opentype"),url(../fonts/fontawesome-webfont.woff2?v=4.7.0) format("woff2"),url(../fonts/fontawesome-webfont.woff?v=4.7.0) format("woff"),url(../fonts/fontawesome-webfont.ttf?v=4.7.0) format("truetype"),url(../fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular) format("svg");font-weight:400;font-style:normal}.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.fa-lg{font-size:1.33333333em;line-height:.75em;vertical-align:-15%}.fa-2x{font-size:2em}.fa-3x{font-size:3em}.fa-4x{font-size:4em}.fa-5x{font-size:5em}.fa-fw{width:1.28571429em;text-align:center}.fa-ul{padding-left:0;margin-left:2.14285714em;list-style-type:none}.fa-ul>li{position:relative}.fa-li{position:absolute;left:-2.14285714em;width:2.14285714em;top:.14285714em;text-align:center}.fa-li.fa-lg{left:-1.85714286em}.fa-border{padding:.2em .25em .15em;border:solid .08em #eee;border-radius:.1em}.fa-pull-left{float:left}.fa-pull-right{float:right}.fa.fa-pull-left{margin-right:.3em}.fa.fa-pull-right{margin-left:.3em}.pull-right{float:right}.pull-left{float:left}.fa.pull-left{margin-right:.3em}.fa.pull-right{margin-left:.3em}.fa-spin{-webkit-animation:fa-spin 2s infinite linear;animation:fa-spin 2s infinite linear}.fa-pulse{-webkit-animation:fa-spin 1s infinite steps(8);animation:fa-spin 1s infinite steps(8)}@-webkit-keyframes fa-spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}@keyframes fa-spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}.fa-rotate-90{-webkit-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg)}.fa-rotate-180{-webkit-transform:rotate(180deg);-ms-transform:rotate(180deg);transform:rotate(180deg)}.fa-rotate-270{-webkit-transform:rotate(270deg);-ms-transform:rotate(270deg);transform:rotate(270deg)}.fa-flip-horizontal{-webkit-transform:scale(-1,1);-ms-transform:scale(-1,1);transform:scale(-1,1)}.fa-flip-vertical{-webkit-transform:scale(1,-1);-ms-transform:scale(1,-1);transform:scale(1,-1)}:root .fa-flip-horizontal,:root .fa-flip-vertical,:root .fa-rotate-180,:root .fa-rotate-270,:root .fa-rotate-90{filter:none}.fa-stack{position:relative;display:inline-block;width:2em;height:2em;line-height:2em;vertical-align:middle}.fa-stack-1x,.fa-stack-2x{position:absolute;left:0;width:100%;text-align:center}.fa-stack-1x{line-height:inherit}.fa-stack-2x{font-size:2em}.fa-inverse{color:#fff}.fa-glass:before{content:"\f000"}.fa-music:before{content:"\f001"}.fa-search:before{content:"\f002"}.fa-envelope-o:before{content:"\f003"}.fa-heart:before{content:"\f004"}.fa-star:before{content:"\f005"}.fa-star-o:before{content:"\f006"}.fa-user:before{content:"\f007"}.fa-film:before{content:"\f008"}.fa-th-large:before{content:"\f009"}.fa-th:before{content:"\f00a"}.fa-th-list:before{content:"\f00b"}.fa-check:before{content:"\f00c"}.fa-close:before,.fa-remove:before,.fa-times:before{content:"\f00d"}.fa-search-plus:before{content:"\f00e"}.fa-search-minus:before{content:"\f010"}.fa-power-off:before{content:"\f011"}.fa-signal:before{content:"\f012"}.fa-cog:before,.fa-gear:before{content:"\f013"}.fa-trash-o:before{content:"\f014"}.fa-home:before{content:"\f015"}.fa-file-o:before{content:"\f016"}.fa-clock-o:before{content:"\f017"}.fa-road:before{content:"\f018"}.fa-download:before{content:"\f019"}.fa-arrow-circle-o-down:before{content:"\f01a"}.fa-arrow-circle-o-up:before{content:"\f01b"}.fa-inbox:before{content:"\f01c"}.fa-play-circle-o:before{content:"\f01d"}.fa-repeat:before,.fa-rotate-right:before{content:"\f01e"}.fa-refresh:before{content:"\f021"}.fa-list-alt:before{content:"\f022"}.fa-lock:before{content:"\f023"}.fa-flag:before{content:"\f024"}.fa-headphones:before{content:"\f025"}.fa-volume-off:before{content:"\f026"}.fa-volume-down:before{content:"\f027"}.fa-volume-up:before{content:"\f028"}.fa-qrcode:before{content:"\f029"}.fa-barcode:before{content:"\f02a"}.fa-tag:before{content:"\f02b"}.fa-tags:before{content:"\f02c"}.fa-book:before{content:"\f02d"}.fa-bookmark:before{content:"\f02e"}.fa-print:before{content:"\f02f"}.fa-camera:before{content:"\f030"}.fa-font:before{content:"\f031"}.fa-bold:before{content:"\f032"}.fa-italic:before{content:"\f033"}.fa-text-height:before{content:"\f034"}.fa-text-width:before{content:"\f035"}.fa-align-left:before{content:"\f036"}.fa-align-center:before{content:"\f037"}.fa-align-right:before{content:"\f038"}.fa-align-justify:before{content:"\f039"}.fa-list:before{content:"\f03a"}.fa-dedent:before,.fa-outdent:before{content:"\f03b"}.fa-indent:before{content:"\f03c"}.fa-video-camera:before{content:"\f03d"}.fa-image:before,.fa-photo:before,.fa-picture-o:before{content:"\f03e"}.fa-pencil:before{content:"\f040"}.fa-map-marker:before{content:"\f041"}.fa-adjust:before{content:"\f042"}.fa-tint:before{content:"\f043"}.fa-edit:before,.fa-pencil-square-o:before{content:"\f044"}.fa-share-square-o:before{content:"\f045"}.fa-check-square-o:before{content:"\f046"}.fa-arrows:before{content:"\f047"}.fa-step-backward:before{content:"\f048"}.fa-fast-backward:before{content:"\f049"}.fa-backward:before{content:"\f04a"}.fa-play:before{content:"\f04b"}.fa-pause:before{content:"\f04c"}.fa-stop:before{content:"\f04d"}.fa-forward:before{content:"\f04e"}.fa-fast-forward:before{content:"\f050"}.fa-step-forward:before{content:"\f051"}.fa-eject:before{content:"\f052"}.fa-chevron-left:before{content:"\f053"}.fa-chevron-right:before{content:"\f054"}.fa-plus-circle:before{content:"\f055"}.fa-minus-circle:before{content:"\f056"}.fa-times-circle:before{content:"\f057"}.fa-check-circle:before{content:"\f058"}.fa-question-circle:before{content:"\f059"}.fa-info-circle:before{content:"\f05a"}.fa-crosshairs:before{content:"\f05b"}.fa-times-circle-o:before{content:"\f05c"}.fa-check-circle-o:before{content:"\f05d"}.fa-ban:before{content:"\f05e"}.fa-arrow-left:before{content:"\f060"}.fa-arrow-right:before{content:"\f061"}.fa-arrow-up:before{content:"\f062"}.fa-arrow-down:before{content:"\f063"}.fa-mail-forward:before,.fa-share:before{content:"\f064"}.fa-expand:before{content:"\f065"}.fa-compress:before{content:"\f066"}.fa-plus:before{content:"\f067"}.fa-minus:before{content:"\f068"}.fa-asterisk:before{content:"\f069"}.fa-exclamation-circle:before{content:"\f06a"}.fa-gift:before{content:"\f06b"}.fa-leaf:before{content:"\f06c"}.fa-fire:before{content:"\f06d"}.fa-eye:before{content:"\f06e"}.fa-eye-slash:before{content:"\f070"}.fa-exclamation-triangle:before,.fa-warning:before{content:"\f071"}.fa-plane:before{content:"\f072"}.fa-calendar:before{content:"\f073"}.fa-random:before{content:"\f074"}.fa-comment:before{content:"\f075"}.fa-magnet:before{content:"\f076"}.fa-chevron-up:before{content:"\f077"}.fa-chevron-down:before{content:"\f078"}.fa-retweet:before{content:"\f079"}.fa-shopping-cart:before{content:"\f07a"}.fa-folder:before{content:"\f07b"}.fa-folder-open:before{content:"\f07c"}.fa-arrows-v:before{content:"\f07d"}.fa-arrows-h:before{content:"\f07e"}.fa-bar-chart-o:before,.fa-bar-chart:before{content:"\f080"}.fa-twitter-square:before{content:"\f081"}.fa-facebook-square:before{content:"\f082"}.fa-camera-retro:before{content:"\f083"}.fa-key:before{content:"\f084"}.fa-cogs:before,.fa-gears:before{content:"\f085"}.fa-comments:before{content:"\f086"}.fa-thumbs-o-up:before{content:"\f087"}.fa-thumbs-o-down:before{content:"\f088"}.fa-star-half:before{content:"\f089"}.fa-heart-o:before{content:"\f08a"}.fa-sign-out:before{content:"\f08b"}.fa-linkedin-square:before{content:"\f08c"}.fa-thumb-tack:before{content:"\f08d"}.fa-external-link:before{content:"\f08e"}.fa-sign-in:before{content:"\f090"}.fa-trophy:before{content:"\f091"}.fa-github-square:before{content:"\f092"}.fa-upload:before{content:"\f093"}.fa-lemon-o:before{content:"\f094"}.fa-phone:before{content:"\f095"}.fa-square-o:before{content:"\f096"}.fa-bookmark-o:before{content:"\f097"}.fa-phone-square:before{content:"\f098"}.fa-twitter:before{content:"\f099"}.fa-facebook-f:before,.fa-facebook:before{content:"\f09a"}.fa-github:before{content:"\f09b"}.fa-unlock:before{content:"\f09c"}.fa-credit-card:before{content:"\f09d"}.fa-feed:before,.fa-rss:before{content:"\f09e"}.fa-hdd-o:before{content:"\f0a0"}.fa-bullhorn:before{content:"\f0a1"}.fa-bell:before{content:"\f0f3"}.fa-certificate:before{content:"\f0a3"}.fa-hand-o-right:before{content:"\f0a4"}.fa-hand-o-left:before{content:"\f0a5"}.fa-hand-o-up:before{content:"\f0a6"}.fa-hand-o-down:before{content:"\f0a7"}.fa-arrow-circle-left:before{content:"\f0a8"}.fa-arrow-circle-right:before{content:"\f0a9"}.fa-arrow-circle-up:before{content:"\f0aa"}.fa-arrow-circle-down:before{content:"\f0ab"}.fa-globe:before{content:"\f0ac"}.fa-wrench:before{content:"\f0ad"}.fa-tasks:before{content:"\f0ae"}.fa-filter:before{content:"\f0b0"}.fa-briefcase:before{content:"\f0b1"}.fa-arrows-alt:before{content:"\f0b2"}.fa-group:before,.fa-users:before{content:"\f0c0"}.fa-chain:before,.fa-link:before{content:"\f0c1"}.fa-cloud:before{content:"\f0c2"}.fa-flask:before{content:"\f0c3"}.fa-cut:before,.fa-scissors:before{content:"\f0c4"}.fa-copy:before,.fa-files-o:before{content:"\f0c5"}.fa-paperclip:before{content:"\f0c6"}.fa-floppy-o:before,.fa-save:before{content:"\f0c7"}.fa-square:before{content:"\f0c8"}.fa-bars:before,.fa-navicon:before,.fa-reorder:before{content:"\f0c9"}.fa-list-ul:before{content:"\f0ca"}.fa-list-ol:before{content:"\f0cb"}.fa-strikethrough:before{content:"\f0cc"}.fa-underline:before{content:"\f0cd"}.fa-table:before{content:"\f0ce"}.fa-magic:before{content:"\f0d0"}.fa-truck:before{content:"\f0d1"}.fa-pinterest:before{content:"\f0d2"}.fa-pinterest-square:before{content:"\f0d3"}.fa-google-plus-square:before{content:"\f0d4"}.fa-google-plus:before{content:"\f0d5"}.fa-money:before{content:"\f0d6"}.fa-caret-down:before{content:"\f0d7"}.fa-caret-up:before{content:"\f0d8"}.fa-caret-left:before{content:"\f0d9"}.fa-caret-right:before{content:"\f0da"}.fa-columns:before{content:"\f0db"}.fa-sort:before,.fa-unsorted:before{content:"\f0dc"}.fa-sort-desc:before,.fa-sort-down:before{content:"\f0dd"}.fa-sort-asc:before,.fa-sort-up:before{content:"\f0de"}.fa-envelope:before{content:"\f0e0"}.fa-linkedin:before{content:"\f0e1"}.fa-rotate-left:before,.fa-undo:before{content:"\f0e2"}.fa-gavel:before,.fa-legal:before{content:"\f0e3"}.fa-dashboard:before,.fa-tachometer:before{content:"\f0e4"}.fa-comment-o:before{content:"\f0e5"}.fa-comments-o:before{content:"\f0e6"}.fa-bolt:before,.fa-flash:before{content:"\f0e7"}.fa-sitemap:before{content:"\f0e8"}.fa-umbrella:before{content:"\f0e9"}.fa-clipboard:before,.fa-paste:before{content:"\f0ea"}.fa-lightbulb-o:before{content:"\f0eb"}.fa-exchange:before{content:"\f0ec"}.fa-cloud-download:before{content:"\f0ed"}.fa-cloud-upload:before{content:"\f0ee"}.fa-user-md:before{content:"\f0f0"}.fa-stethoscope:before{content:"\f0f1"}.fa-suitcase:before{content:"\f0f2"}.fa-bell-o:before{content:"\f0a2"}.fa-coffee:before{content:"\f0f4"}.fa-cutlery:before{content:"\f0f5"}.fa-file-text-o:before{content:"\f0f6"}.fa-building-o:before{content:"\f0f7"}.fa-hospital-o:before{content:"\f0f8"}.fa-ambulance:before{content:"\f0f9"}.fa-medkit:before{content:"\f0fa"}.fa-fighter-jet:before{content:"\f0fb"}.fa-beer:before{content:"\f0fc"}.fa-h-square:before{content:"\f0fd"}.fa-plus-square:before{content:"\f0fe"}.fa-angle-double-left:before{content:"\f100"}.fa-angle-double-right:before{content:"\f101"}.fa-angle-double-up:before{content:"\f102"}.fa-angle-double-down:before{content:"\f103"}.fa-angle-left:before{content:"\f104"}.fa-angle-right:before{content:"\f105"}.fa-angle-up:before{content:"\f106"}.fa-angle-down:before{content:"\f107"}.fa-desktop:before{content:"\f108"}.fa-laptop:before{content:"\f109"}.fa-tablet:before{content:"\f10a"}.fa-mobile-phone:before,.fa-mobile:before{content:"\f10b"}.fa-circle-o:before{content:"\f10c"}.fa-quote-left:before{content:"\f10d"}.fa-quote-right:before{content:"\f10e"}.fa-spinner:before{content:"\f110"}.fa-circle:before{content:"\f111"}.fa-mail-reply:before,.fa-reply:before{content:"\f112"}.fa-github-alt:before{content:"\f113"}.fa-folder-o:before{content:"\f114"}.fa-folder-open-o:before{content:"\f115"}.fa-smile-o:before{content:"\f118"}.fa-frown-o:before{content:"\f119"}.fa-meh-o:before{content:"\f11a"}.fa-gamepad:before{content:"\f11b"}.fa-keyboard-o:before{content:"\f11c"}.fa-flag-o:before{content:"\f11d"}.fa-flag-checkered:before{content:"\f11e"}.fa-terminal:before{content:"\f120"}.fa-code:before{content:"\f121"}.fa-mail-reply-all:before,.fa-reply-all:before{content:"\f122"}.fa-star-half-empty:before,.fa-star-half-full:before,.fa-star-half-o:before{content:"\f123"}.fa-location-arrow:before{content:"\f124"}.fa-crop:before{content:"\f125"}.fa-code-fork:before{content:"\f126"}.fa-chain-broken:before,.fa-unlink:before{content:"\f127"}.fa-question:before{content:"\f128"}.fa-info:before{content:"\f129"}.fa-exclamation:before{content:"\f12a"}.fa-superscript:before{content:"\f12b"}.fa-subscript:before{content:"\f12c"}.fa-eraser:before{content:"\f12d"}.fa-puzzle-piece:before{content:"\f12e"}.fa-microphone:before{content:"\f130"}.fa-microphone-slash:before{content:"\f131"}.fa-shield:before{content:"\f132"}.fa-calendar-o:before{content:"\f133"}.fa-fire-extinguisher:before{content:"\f134"}.fa-rocket:before{content:"\f135"}.fa-maxcdn:before{content:"\f136"}.fa-chevron-circle-left:before{content:"\f137"}.fa-chevron-circle-right:before{content:"\f138"}.fa-chevron-circle-up:before{content:"\f139"}.fa-chevron-circle-down:before{content:"\f13a"}.fa-html5:before{content:"\f13b"}.fa-css3:before{content:"\f13c"}.fa-anchor:before{content:"\f13d"}.fa-unlock-alt:before{content:"\f13e"}.fa-bullseye:before{content:"\f140"}.fa-ellipsis-h:before{content:"\f141"}.fa-ellipsis-v:before{content:"\f142"}.fa-rss-square:before{content:"\f143"}.fa-play-circle:before{content:"\f144"}.fa-ticket:before{content:"\f145"}.fa-minus-square:before{content:"\f146"}.fa-minus-square-o:before{content:"\f147"}.fa-level-up:before{content:"\f148"}.fa-level-down:before{content:"\f149"}.fa-check-square:before{content:"\f14a"}.fa-pencil-square:before{content:"\f14b"}.fa-external-link-square:before{content:"\f14c"}.fa-share-square:before{content:"\f14d"}.fa-compass:before{content:"\f14e"}.fa-caret-square-o-down:before,.fa-toggle-down:before{content:"\f150"}.fa-caret-square-o-up:before,.fa-toggle-up:before{content:"\f151"}.fa-caret-square-o-right:before,.fa-toggle-right:before{content:"\f152"}.fa-eur:before,.fa-euro:before{content:"\f153"}.fa-gbp:before{content:"\f154"}.fa-dollar:before,.fa-usd:before{content:"\f155"}.fa-inr:before,.fa-rupee:before{content:"\f156"}.fa-cny:before,.fa-jpy:before,.fa-rmb:before,.fa-yen:before{content:"\f157"}.fa-rouble:before,.fa-rub:before,.fa-ruble:before{content:"\f158"}.fa-krw:before,.fa-won:before{content:"\f159"}.fa-bitcoin:before,.fa-btc:before{content:"\f15a"}.fa-file:before{content:"\f15b"}.fa-file-text:before{content:"\f15c"}.fa-sort-alpha-asc:before{content:"\f15d"}.fa-sort-alpha-desc:before{content:"\f15e"}.fa-sort-amount-asc:before{content:"\f160"}.fa-sort-amount-desc:before{content:"\f161"}.fa-sort-numeric-asc:before{content:"\f162"}.fa-sort-numeric-desc:before{content:"\f163"}.fa-thumbs-up:before{content:"\f164"}.fa-thumbs-down:before{content:"\f165"}.fa-youtube-square:before{content:"\f166"}.fa-youtube:before{content:"\f167"}.fa-xing:before{content:"\f168"}.fa-xing-square:before{content:"\f169"}.fa-youtube-play:before{content:"\f16a"}.fa-dropbox:before{content:"\f16b"}.fa-stack-overflow:before{content:"\f16c"}.fa-instagram:before{content:"\f16d"}.fa-flickr:before{content:"\f16e"}.fa-adn:before{content:"\f170"}.fa-bitbucket:before{content:"\f171"}.fa-bitbucket-square:before{content:"\f172"}.fa-tumblr:before{content:"\f173"}.fa-tumblr-square:before{content:"\f174"}.fa-long-arrow-down:before{content:"\f175"}.fa-long-arrow-up:before{content:"\f176"}.fa-long-arrow-left:before{content:"\f177"}.fa-long-arrow-right:before{content:"\f178"}.fa-apple:before{content:"\f179"}.fa-windows:before{content:"\f17a"}.fa-android:before{content:"\f17b"}.fa-linux:before{content:"\f17c"}.fa-dribbble:before{content:"\f17d"}.fa-skype:before{content:"\f17e"}.fa-foursquare:before{content:"\f180"}.fa-trello:before{content:"\f181"}.fa-female:before{content:"\f182"}.fa-male:before{content:"\f183"}.fa-gittip:before,.fa-gratipay:before{content:"\f184"}.fa-sun-o:before{content:"\f185"}.fa-moon-o:before{content:"\f186"}.fa-archive:before{content:"\f187"}.fa-bug:before{content:"\f188"}.fa-vk:before{content:"\f189"}.fa-weibo:before{content:"\f18a"}.fa-renren:before{content:"\f18b"}.fa-pagelines:before{content:"\f18c"}.fa-stack-exchange:before{content:"\f18d"}.fa-arrow-circle-o-right:before{content:"\f18e"}.fa-arrow-circle-o-left:before{content:"\f190"}.fa-caret-square-o-left:before,.fa-toggle-left:before{content:"\f191"}.fa-dot-circle-o:before{content:"\f192"}.fa-wheelchair:before{content:"\f193"}.fa-vimeo-square:before{content:"\f194"}.fa-try:before,.fa-turkish-lira:before{content:"\f195"}.fa-plus-square-o:before{content:"\f196"}.fa-space-shuttle:before{content:"\f197"}.fa-slack:before{content:"\f198"}.fa-envelope-square:before{content:"\f199"}.fa-wordpress:before{content:"\f19a"}.fa-openid:before{content:"\f19b"}.fa-bank:before,.fa-institution:before,.fa-university:before{content:"\f19c"}.fa-graduation-cap:before,.fa-mortar-board:before{content:"\f19d"}.fa-yahoo:before{content:"\f19e"}.fa-google:before{content:"\f1a0"}.fa-reddit:before{content:"\f1a1"}.fa-reddit-square:before{content:"\f1a2"}.fa-stumbleupon-circle:before{content:"\f1a3"}.fa-stumbleupon:before{content:"\f1a4"}.fa-delicious:before{content:"\f1a5"}.fa-digg:before{content:"\f1a6"}.fa-pied-piper-pp:before{content:"\f1a7"}.fa-pied-piper-alt:before{content:"\f1a8"}.fa-drupal:before{content:"\f1a9"}.fa-joomla:before{content:"\f1aa"}.fa-language:before{content:"\f1ab"}.fa-fax:before{content:"\f1ac"}.fa-building:before{content:"\f1ad"}.fa-child:before{content:"\f1ae"}.fa-paw:before{content:"\f1b0"}.fa-spoon:before{content:"\f1b1"}.fa-cube:before{content:"\f1b2"}.fa-cubes:before{content:"\f1b3"}.fa-behance:before{content:"\f1b4"}.fa-behance-square:before{content:"\f1b5"}.fa-steam:before{content:"\f1b6"}.fa-steam-square:before{content:"\f1b7"}.fa-recycle:before{content:"\f1b8"}.fa-automobile:before,.fa-car:before{content:"\f1b9"}.fa-cab:before,.fa-taxi:before{content:"\f1ba"}.fa-tree:before{content:"\f1bb"}.fa-spotify:before{content:"\f1bc"}.fa-deviantart:before{content:"\f1bd"}.fa-soundcloud:before{content:"\f1be"}.fa-database:before{content:"\f1c0"}.fa-file-pdf-o:before{content:"\f1c1"}.fa-file-word-o:before{content:"\f1c2"}.fa-file-excel-o:before{content:"\f1c3"}.fa-file-powerpoint-o:before{content:"\f1c4"}.fa-file-image-o:before,.fa-file-photo-o:before,.fa-file-picture-o:before{content:"\f1c5"}.fa-file-archive-o:before,.fa-file-zip-o:before{content:"\f1c6"}.fa-file-audio-o:before,.fa-file-sound-o:before{content:"\f1c7"}.fa-file-movie-o:before,.fa-file-video-o:before{content:"\f1c8"}.fa-file-code-o:before{content:"\f1c9"}.fa-vine:before{content:"\f1ca"}.fa-codepen:before{content:"\f1cb"}.fa-jsfiddle:before{content:"\f1cc"}.fa-life-bouy:before,.fa-life-buoy:before,.fa-life-ring:before,.fa-life-saver:before,.fa-support:before{content:"\f1cd"}.fa-circle-o-notch:before{content:"\f1ce"}.fa-ra:before,.fa-rebel:before,.fa-resistance:before{content:"\f1d0"}.fa-empire:before,.fa-ge:before{content:"\f1d1"}.fa-git-square:before{content:"\f1d2"}.fa-git:before{content:"\f1d3"}.fa-hacker-news:before,.fa-y-combinator-square:before,.fa-yc-square:before{content:"\f1d4"}.fa-tencent-weibo:before{content:"\f1d5"}.fa-qq:before{content:"\f1d6"}.fa-wechat:before,.fa-weixin:before{content:"\f1d7"}.fa-paper-plane:before,.fa-send:before{content:"\f1d8"}.fa-paper-plane-o:before,.fa-send-o:before{content:"\f1d9"}.fa-history:before{content:"\f1da"}.fa-circle-thin:before{content:"\f1db"}.fa-header:before{content:"\f1dc"}.fa-paragraph:before{content:"\f1dd"}.fa-sliders:before{content:"\f1de"}.fa-share-alt:before{content:"\f1e0"}.fa-share-alt-square:before{content:"\f1e1"}.fa-bomb:before{content:"\f1e2"}.fa-futbol-o:before,.fa-soccer-ball-o:before{content:"\f1e3"}.fa-tty:before{content:"\f1e4"}.fa-binoculars:before{content:"\f1e5"}.fa-plug:before{content:"\f1e6"}.fa-slideshare:before{content:"\f1e7"}.fa-twitch:before{content:"\f1e8"}.fa-yelp:before{content:"\f1e9"}.fa-newspaper-o:before{content:"\f1ea"}.fa-wifi:before{content:"\f1eb"}.fa-calculator:before{content:"\f1ec"}.fa-paypal:before{content:"\f1ed"}.fa-google-wallet:before{content:"\f1ee"}.fa-cc-visa:before{content:"\f1f0"}.fa-cc-mastercard:before{content:"\f1f1"}.fa-cc-discover:before{content:"\f1f2"}.fa-cc-amex:before{content:"\f1f3"}.fa-cc-paypal:before{content:"\f1f4"}.fa-cc-stripe:before{content:"\f1f5"}.fa-bell-slash:before{content:"\f1f6"}.fa-bell-slash-o:before{content:"\f1f7"}.fa-trash:before{content:"\f1f8"}.fa-copyright:before{content:"\f1f9"}.fa-at:before{content:"\f1fa"}.fa-eyedropper:before{content:"\f1fb"}.fa-paint-brush:before{content:"\f1fc"}.fa-birthday-cake:before{content:"\f1fd"}.fa-area-chart:before{content:"\f1fe"}.fa-pie-chart:before{content:"\f200"}.fa-line-chart:before{content:"\f201"}.fa-lastfm:before{content:"\f202"}.fa-lastfm-square:before{content:"\f203"}.fa-toggle-off:before{content:"\f204"}.fa-toggle-on:before{content:"\f205"}.fa-bicycle:before{content:"\f206"}.fa-bus:before{content:"\f207"}.fa-ioxhost:before{content:"\f208"}.fa-angellist:before{content:"\f209"}.fa-cc:before{content:"\f20a"}.fa-ils:before,.fa-shekel:before,.fa-sheqel:before{content:"\f20b"}.fa-meanpath:before{content:"\f20c"}.fa-buysellads:before{content:"\f20d"}.fa-connectdevelop:before{content:"\f20e"}.fa-dashcube:before{content:"\f210"}.fa-forumbee:before{content:"\f211"}.fa-leanpub:before{content:"\f212"}.fa-sellsy:before{content:"\f213"}.fa-shirtsinbulk:before{content:"\f214"}.fa-simplybuilt:before{content:"\f215"}.fa-skyatlas:before{content:"\f216"}.fa-cart-plus:before{content:"\f217"}.fa-cart-arrow-down:before{content:"\f218"}.fa-diamond:before{content:"\f219"}.fa-ship:before{content:"\f21a"}.fa-user-secret:before{content:"\f21b"}.fa-motorcycle:before{content:"\f21c"}.fa-street-view:before{content:"\f21d"}.fa-heartbeat:before{content:"\f21e"}.fa-venus:before{content:"\f221"}.fa-mars:before{content:"\f222"}.fa-mercury:before{content:"\f223"}.fa-intersex:before,.fa-transgender:before{content:"\f224"}.fa-transgender-alt:before{content:"\f225"}.fa-venus-double:before{content:"\f226"}.fa-mars-double:before{content:"\f227"}.fa-venus-mars:before{content:"\f228"}.fa-mars-stroke:before{content:"\f229"}.fa-mars-stroke-v:before{content:"\f22a"}.fa-mars-stroke-h:before{content:"\f22b"}.fa-neuter:before{content:"\f22c"}.fa-genderless:before{content:"\f22d"}.fa-facebook-official:before{content:"\f230"}.fa-pinterest-p:before{content:"\f231"}.fa-whatsapp:before{content:"\f232"}.fa-server:before{content:"\f233"}.fa-user-plus:before{content:"\f234"}.fa-user-times:before{content:"\f235"}.fa-bed:before,.fa-hotel:before{content:"\f236"}.fa-viacoin:before{content:"\f237"}.fa-train:before{content:"\f238"}.fa-subway:before{content:"\f239"}.fa-medium:before{content:"\f23a"}.fa-y-combinator:before,.fa-yc:before{content:"\f23b"}.fa-optin-monster:before{content:"\f23c"}.fa-opencart:before{content:"\f23d"}.fa-expeditedssl:before{content:"\f23e"}.fa-battery-4:before,.fa-battery-full:before,.fa-battery:before{content:"\f240"}.fa-battery-3:before,.fa-battery-three-quarters:before{content:"\f241"}.fa-battery-2:before,.fa-battery-half:before{content:"\f242"}.fa-battery-1:before,.fa-battery-quarter:before{content:"\f243"}.fa-battery-0:before,.fa-battery-empty:before{content:"\f244"}.fa-mouse-pointer:before{content:"\f245"}.fa-i-cursor:before{content:"\f246"}.fa-object-group:before{content:"\f247"}.fa-object-ungroup:before{content:"\f248"}.fa-sticky-note:before{content:"\f249"}.fa-sticky-note-o:before{content:"\f24a"}.fa-cc-jcb:before{content:"\f24b"}.fa-cc-diners-club:before{content:"\f24c"}.fa-clone:before{content:"\f24d"}.fa-balance-scale:before{content:"\f24e"}.fa-hourglass-o:before{content:"\f250"}.fa-hourglass-1:before,.fa-hourglass-start:before{content:"\f251"}.fa-hourglass-2:before,.fa-hourglass-half:before{content:"\f252"}.fa-hourglass-3:before,.fa-hourglass-end:before{content:"\f253"}.fa-hourglass:before{content:"\f254"}.fa-hand-grab-o:before,.fa-hand-rock-o:before{content:"\f255"}.fa-hand-paper-o:before,.fa-hand-stop-o:before{content:"\f256"}.fa-hand-scissors-o:before{content:"\f257"}.fa-hand-lizard-o:before{content:"\f258"}.fa-hand-spock-o:before{content:"\f259"}.fa-hand-pointer-o:before{content:"\f25a"}.fa-hand-peace-o:before{content:"\f25b"}.fa-trademark:before{content:"\f25c"}.fa-registered:before{content:"\f25d"}.fa-creative-commons:before{content:"\f25e"}.fa-gg:before{content:"\f260"}.fa-gg-circle:before{content:"\f261"}.fa-tripadvisor:before{content:"\f262"}.fa-odnoklassniki:before{content:"\f263"}.fa-odnoklassniki-square:before{content:"\f264"}.fa-get-pocket:before{content:"\f265"}.fa-wikipedia-w:before{content:"\f266"}.fa-safari:before{content:"\f267"}.fa-chrome:before{content:"\f268"}.fa-firefox:before{content:"\f269"}.fa-opera:before{content:"\f26a"}.fa-internet-explorer:before{content:"\f26b"}.fa-television:before,.fa-tv:before{content:"\f26c"}.fa-contao:before{content:"\f26d"}.fa-500px:before{content:"\f26e"}.fa-amazon:before{content:"\f270"}.fa-calendar-plus-o:before{content:"\f271"}.fa-calendar-minus-o:before{content:"\f272"}.fa-calendar-times-o:before{content:"\f273"}.fa-calendar-check-o:before{content:"\f274"}.fa-industry:before{content:"\f275"}.fa-map-pin:before{content:"\f276"}.fa-map-signs:before{content:"\f277"}.fa-map-o:before{content:"\f278"}.fa-map:before{content:"\f279"}.fa-commenting:before{content:"\f27a"}.fa-commenting-o:before{content:"\f27b"}.fa-houzz:before{content:"\f27c"}.fa-vimeo:before{content:"\f27d"}.fa-black-tie:before{content:"\f27e"}.fa-fonticons:before{content:"\f280"}.fa-reddit-alien:before{content:"\f281"}.fa-edge:before{content:"\f282"}.fa-credit-card-alt:before{content:"\f283"}.fa-codiepie:before{content:"\f284"}.fa-modx:before{content:"\f285"}.fa-fort-awesome:before{content:"\f286"}.fa-usb:before{content:"\f287"}.fa-product-hunt:before{content:"\f288"}.fa-mixcloud:before{content:"\f289"}.fa-scribd:before{content:"\f28a"}.fa-pause-circle:before{content:"\f28b"}.fa-pause-circle-o:before{content:"\f28c"}.fa-stop-circle:before{content:"\f28d"}.fa-stop-circle-o:before{content:"\f28e"}.fa-shopping-bag:before{content:"\f290"}.fa-shopping-basket:before{content:"\f291"}.fa-hashtag:before{content:"\f292"}.fa-bluetooth:before{content:"\f293"}.fa-bluetooth-b:before{content:"\f294"}.fa-percent:before{content:"\f295"}.fa-gitlab:before{content:"\f296"}.fa-wpbeginner:before{content:"\f297"}.fa-wpforms:before{content:"\f298"}.fa-envira:before{content:"\f299"}.fa-universal-access:before{content:"\f29a"}.fa-wheelchair-alt:before{content:"\f29b"}.fa-question-circle-o:before{content:"\f29c"}.fa-blind:before{content:"\f29d"}.fa-audio-description:before{content:"\f29e"}.fa-volume-control-phone:before{content:"\f2a0"}.fa-braille:before{content:"\f2a1"}.fa-assistive-listening-systems:before{content:"\f2a2"}.fa-american-sign-language-interpreting:before,.fa-asl-interpreting:before{content:"\f2a3"}.fa-deaf:before,.fa-deafness:before,.fa-hard-of-hearing:before{content:"\f2a4"}.fa-glide:before{content:"\f2a5"}.fa-glide-g:before{content:"\f2a6"}.fa-sign-language:before,.fa-signing:before{content:"\f2a7"}.fa-low-vision:before{content:"\f2a8"}.fa-viadeo:before{content:"\f2a9"}.fa-viadeo-square:before{content:"\f2aa"}.fa-snapchat:before{content:"\f2ab"}.fa-snapchat-ghost:before{content:"\f2ac"}.fa-snapchat-square:before{content:"\f2ad"}.fa-pied-piper:before{content:"\f2ae"}.fa-first-order:before{content:"\f2b0"}.fa-yoast:before{content:"\f2b1"}.fa-themeisle:before{content:"\f2b2"}.fa-google-plus-circle:before,.fa-google-plus-official:before{content:"\f2b3"}.fa-fa:before,.fa-font-awesome:before{content:"\f2b4"}.fa-handshake-o:before{content:"\f2b5"}.fa-envelope-open:before{content:"\f2b6"}.fa-envelope-open-o:before{content:"\f2b7"}.fa-linode:before{content:"\f2b8"}.fa-address-book:before{content:"\f2b9"}.fa-address-book-o:before{content:"\f2ba"}.fa-address-card:before,.fa-vcard:before{content:"\f2bb"}.fa-address-card-o:before,.fa-vcard-o:before{content:"\f2bc"}.fa-user-circle:before{content:"\f2bd"}.fa-user-circle-o:before{content:"\f2be"}.fa-user-o:before{content:"\f2c0"}.fa-id-badge:before{content:"\f2c1"}.fa-drivers-license:before,.fa-id-card:before{content:"\f2c2"}.fa-drivers-license-o:before,.fa-id-card-o:before{content:"\f2c3"}.fa-quora:before{content:"\f2c4"}.fa-free-code-camp:before{content:"\f2c5"}.fa-telegram:before{content:"\f2c6"}.fa-thermometer-4:before,.fa-thermometer-full:before,.fa-thermometer:before{content:"\f2c7"}.fa-thermometer-3:before,.fa-thermometer-three-quarters:before{content:"\f2c8"}.fa-thermometer-2:before,.fa-thermometer-half:before{content:"\f2c9"}.fa-thermometer-1:before,.fa-thermometer-quarter:before{content:"\f2ca"}.fa-thermometer-0:before,.fa-thermometer-empty:before{content:"\f2cb"}.fa-shower:before{content:"\f2cc"}.fa-bath:before,.fa-bathtub:before,.fa-s15:before{content:"\f2cd"}.fa-podcast:before{content:"\f2ce"}.fa-window-maximize:before{content:"\f2d0"}.fa-window-minimize:before{content:"\f2d1"}.fa-window-restore:before{content:"\f2d2"}.fa-times-rectangle:before,.fa-window-close:before{content:"\f2d3"}.fa-times-rectangle-o:before,.fa-window-close-o:before{content:"\f2d4"}.fa-bandcamp:before{content:"\f2d5"}.fa-grav:before{content:"\f2d6"}.fa-etsy:before{content:"\f2d7"}.fa-imdb:before{content:"\f2d8"}.fa-ravelry:before{content:"\f2d9"}.fa-eercast:before{content:"\f2da"}.fa-microchip:before{content:"\f2db"}.fa-snowflake-o:before{content:"\f2dc"}.fa-superpowers:before{content:"\f2dd"}.fa-wpexplorer:before{content:"\f2de"}.fa-meetup:before{content:"\f2e0"}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);border:0}.sr-only-focusable:active,.sr-only-focusable:focus{position:static;width:auto;height:auto;margin:0;overflow:visible;clip:auto}.owl-carousel .animated{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-fill-mode:both;animation-fill-mode:both}.owl-carousel .owl-animated-in{z-index:0}.owl-carousel .owl-animated-out{z-index:1}.owl-carousel .fadeOut{-webkit-animation-name:fadeOut;animation-name:fadeOut}@-webkit-keyframes fadeOut{0%{opacity:1}100%{opacity:0}}@keyframes fadeOut{0%{opacity:1}100%{opacity:0}}.owl-height{-webkit-transition:height .5s ease-in-out;-moz-transition:height .5s ease-in-out;-ms-transition:height .5s ease-in-out;-o-transition:height .5s ease-in-out;transition:height .5s ease-in-out}.owl-carousel{display:none;width:100%;-webkit-tap-highlight-color:transparent;position:relative;z-index:1}.owl-carousel .owl-stage{position:relative;-ms-touch-action:pan-Y}.owl-carousel .owl-stage:after{content:".";display:block;clear:both;visibility:hidden;line-height:0;height:0}.owl-carousel .owl-stage-outer{position:relative;overflow:hidden;-webkit-transform:translate3d(0,0,0)}.owl-carousel .owl-controls .owl-dot,.owl-carousel .owl-controls .owl-nav .owl-next,.owl-carousel .owl-controls .owl-nav .owl-prev{cursor:pointer;cursor:hand;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.owl-carousel.owl-loaded{display:block}.owl-carousel.owl-loading{opacity:0;display:block}.owl-carousel.owl-hidden{opacity:0}.owl-carousel .owl-refresh .owl-item{display:none}.owl-carousel .owl-item{position:relative;min-height:1px;float:left;-webkit-backface-visibility:hidden;-webkit-tap-highlight-color:transparent;-webkit-touch-callout:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-transform:translate3d(0,0,0)}.owl-carousel .owl-item img{display:block;width:100%;-webkit-transform-style:preserve-3d}.owl-carousel.owl-text-select-on .owl-item{-webkit-user-select:auto;-moz-user-select:auto;-ms-user-select:auto;user-select:auto}.owl-carousel .owl-grab{cursor:move;cursor:-webkit-grab;cursor:-o-grab;cursor:-ms-grab;cursor:grab}.owl-carousel.owl-rtl{direction:rtl}.owl-carousel.owl-rtl .owl-item{float:right}.no-js .owl-carousel{display:block}.owl-carousel .owl-item .owl-lazy{opacity:0;-webkit-transition:opacity .4s ease;-moz-transition:opacity .4s ease;-ms-transition:opacity .4s ease;-o-transition:opacity .4s ease;transition:opacity .4s ease}.owl-carousel .owl-item img{transform-style:preserve-3d}.owl-carousel .owl-video-wrapper{position:relative;height:100%;background:#000}.owl-carousel .owl-video-play-icon{position:absolute;height:80px;width:80px;left:50%;top:50%;margin-left:-40px;margin-top:-40px;background:url(owl.video.play.png) no-repeat;cursor:pointer;z-index:1;-webkit-backface-visibility:hidden;-webkit-transition:scale .1s ease;-moz-transition:scale .1s ease;-ms-transition:scale .1s ease;-o-transition:scale .1s ease;transition:scale .1s ease}.owl-carousel .owl-video-play-icon:hover{-webkit-transition:scale(1.3,1.3);-moz-transition:scale(1.3,1.3);-ms-transition:scale(1.3,1.3);-o-transition:scale(1.3,1.3);transition:scale(1.3,1.3)}.owl-carousel .owl-video-playing .owl-video-play-icon,.owl-carousel .owl-video-playing .owl-video-tn{display:none}.owl-carousel .owl-video-tn{opacity:0;height:100%;background-position:center center;background-repeat:no-repeat;-webkit-background-size:contain;-moz-background-size:contain;-o-background-size:contain;background-size:contain;-webkit-transition:opacity .4s ease;-moz-transition:opacity .4s ease;-ms-transition:opacity .4s ease;-o-transition:opacity .4s ease;transition:opacity .4s ease}.owl-carousel .owl-video-frame{position:relative;z-index:1}.owl-theme .owl-controls{margin-top:10px;text-align:center;-webkit-tap-highlight-color:transparent}.owl-theme .owl-controls .owl-nav [class*=owl-]{color:#fff;font-size:14px;margin:5px;padding:4px 7px;background:#d6d6d6;display:inline-block;cursor:pointer;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px}.owl-theme .owl-controls .owl-nav [class*=owl-]:hover{background:#869791;color:#fff;text-decoration:none}.owl-theme .owl-controls .owl-nav .disabled{opacity:.5;cursor:default}.owl-theme .owl-dots .owl-dot{display:inline-block;zoom:1}.owl-theme .owl-dots .owl-dot span{width:10px;height:10px;margin:5px 7px;background:#d6d6d6;display:block;-webkit-backface-visibility:visible;-webkit-transition:opacity .2s ease;-moz-transition:opacity .2s ease;-ms-transition:opacity .2s ease;-o-transition:opacity .2s ease;transition:opacity .2s ease;-webkit-border-radius:30px;-moz-border-radius:30px;border-radius:30px}.owl-theme .owl-dots .owl-dot.active span,.owl-theme .owl-dots .owl-dot:hover span{background:#869791}.owl-carousel .owl-item,.owl-carousel .owl-wrapper{-webkit-backface-visibility:hidden!important;-moz-backface-visibility:hidden!important;-ms-backface-visibility:hidden!important;-webkit-transform:translate3d(0,0,0)!important;-moz-transform:translate3d(0,0,0)!important;-ms-transform:translate3d(0,0,0)!important}.owl-carousel .owl-item img{-webkit-backface-visibility:hidden}.mfp-bg{top:0;left:0;width:100%;height:100%;z-index:1042;overflow:hidden;position:fixed;background:#0b0b0b;opacity:.8}.mfp-wrap{top:0;left:0;width:100%;height:100%;z-index:1043;position:fixed;outline:0!important;-webkit-backface-visibility:hidden}.mfp-container{text-align:center;position:absolute;width:100%;height:100%;left:0;top:0;padding:0 8px;box-sizing:border-box}.mfp-container:before{content:'';display:inline-block;height:100%;vertical-align:middle}.mfp-align-top .mfp-container:before{display:none}.mfp-content{position:relative;display:inline-block;vertical-align:middle;margin:0 auto;text-align:left;z-index:1045}.mfp-ajax-holder .mfp-content,.mfp-inline-holder .mfp-content{width:100%;cursor:auto}.mfp-ajax-cur{cursor:progress}.mfp-zoom-out-cur,.mfp-zoom-out-cur .mfp-image-holder .mfp-close{cursor:-moz-zoom-out;cursor:-webkit-zoom-out;cursor:zoom-out}.mfp-zoom{cursor:pointer;cursor:-webkit-zoom-in;cursor:-moz-zoom-in;cursor:zoom-in}.mfp-auto-cursor .mfp-content{cursor:auto}.mfp-arrow,.mfp-close,.mfp-counter,.mfp-preloader{-webkit-user-select:none;-moz-user-select:none;user-select:none}.mfp-loading.mfp-figure{display:none}.mfp-hide{display:none!important}.mfp-preloader{color:#ccc;position:absolute;top:50%;width:auto;text-align:center;margin-top:-.8em;left:8px;right:8px;z-index:1044}.mfp-preloader a{color:#ccc}.mfp-preloader a:hover{color:#fff}.mfp-s-ready .mfp-preloader{display:none}.mfp-s-error .mfp-content{display:none}button.mfp-arrow,button.mfp-close{overflow:visible;cursor:pointer;background:0 0;border:0;-webkit-appearance:none;display:block;outline:0;padding:0;z-index:1046;box-shadow:none;touch-action:manipulation}button::-moz-focus-inner{padding:0;border:0}.mfp-close{width:44px;height:44px;line-height:44px;position:absolute;right:0;top:0;text-decoration:none;text-align:center;opacity:.65;padding:0 0 18px 10px;color:#fff;font-style:normal;font-size:28px;font-family:Arial,Baskerville,monospace}.mfp-close:focus,.mfp-close:hover{opacity:1}.mfp-close:active{top:1px}.mfp-close-btn-in .mfp-close{color:#333}.mfp-iframe-holder .mfp-close,.mfp-image-holder .mfp-close{color:#fff;right:-6px;text-align:right;padding-right:6px;width:100%}.mfp-counter{position:absolute;top:0;right:0;color:#ccc;font-size:12px;line-height:18px;white-space:nowrap}.mfp-arrow{position:absolute;opacity:.65;margin:0;top:50%;margin-top:-55px;padding:0;width:90px;height:110px;-webkit-tap-highlight-color:transparent}.mfp-arrow:active{margin-top:-54px}.mfp-arrow:focus,.mfp-arrow:hover{opacity:1}.mfp-arrow:after,.mfp-arrow:before{content:'';display:block;width:0;height:0;position:absolute;left:0;top:0;margin-top:35px;margin-left:35px;border:medium inset transparent}.mfp-arrow:after{border-top-width:13px;border-bottom-width:13px;top:8px}.mfp-arrow:before{border-top-width:21px;border-bottom-width:21px;opacity:.7}.mfp-arrow-left{left:0}.mfp-arrow-left:after{border-right:17px solid #fff;margin-left:31px}.mfp-arrow-left:before{margin-left:25px;border-right:27px solid #3f3f3f}.mfp-arrow-right{right:0}.mfp-arrow-right:after{border-left:17px solid #fff;margin-left:39px}.mfp-arrow-right:before{border-left:27px solid #3f3f3f}.mfp-iframe-holder{padding-top:40px;padding-bottom:40px}.mfp-iframe-holder .mfp-content{line-height:0;width:100%;max-width:900px}.mfp-iframe-holder .mfp-close{top:-40px}.mfp-iframe-scaler{width:100%;height:0;overflow:hidden;padding-top:56.25%}.mfp-iframe-scaler iframe{position:absolute;display:block;top:0;left:0;width:100%;height:100%;box-shadow:0 0 8px rgba(0,0,0,.6);background:#000}img.mfp-img{width:auto;max-width:100%;height:auto;display:block;line-height:0;box-sizing:border-box;padding:40px 0;margin:0 auto}.mfp-figure{line-height:0}.mfp-figure:after{content:'';position:absolute;left:0;top:40px;bottom:40px;display:block;right:0;width:auto;height:auto;z-index:-1;box-shadow:0 0 8px rgba(0,0,0,.6);background:#444}.mfp-figure small{color:#bdbdbd;display:block;font-size:12px;line-height:14px}.mfp-figure figure{margin:0}.mfp-bottom-bar{margin-top:-36px;position:absolute;top:100%;left:0;width:100%;cursor:auto}.mfp-title{text-align:left;line-height:18px;color:#f3f3f3;word-wrap:break-word;padding-right:36px}.mfp-image-holder .mfp-content{max-width:100%}.mfp-gallery .mfp-image-holder .mfp-figure{cursor:pointer}@media screen and (max-width:800px) and (orientation:landscape),screen and (max-height:300px){.mfp-img-mobile .mfp-image-holder{padding-left:0;padding-right:0}.mfp-img-mobile img.mfp-img{padding:0}.mfp-img-mobile .mfp-figure:after{top:0;bottom:0}.mfp-img-mobile .mfp-figure small{display:inline;margin-left:5px}.mfp-img-mobile .mfp-bottom-bar{background:rgba(0,0,0,.6);bottom:0;margin:0;top:auto;padding:3px 5px;position:fixed;box-sizing:border-box}.mfp-img-mobile .mfp-bottom-bar:empty{padding:0}.mfp-img-mobile .mfp-counter{right:5px;top:3px}.mfp-img-mobile .mfp-close{top:0;right:0;width:35px;height:35px;line-height:35px;background:rgba(0,0,0,.6);position:fixed;text-align:center;padding:0}}@media all and (max-width:900px){.mfp-arrow{-webkit-transform:scale(.75);transform:scale(.75)}.mfp-arrow-left{-webkit-transform-origin:0;transform-origin:0}.mfp-arrow-right{-webkit-transform-origin:100%;transform-origin:100%}.mfp-container{padding-left:6px;padding-right:6px}}.nice-select{-webkit-tap-highlight-color:transparent;background-color:#fff;border-radius:5px;border:solid 1px #e8e8e8;box-sizing:border-box;clear:both;cursor:pointer;display:block;float:left;font-family:inherit;font-size:14px;font-weight:400;height:42px;line-height:40px;outline:none;padding-left:18px;padding-right:30px;position:relative;text-align:left!important;-webkit-transition:all .2s ease-in-out;transition:all .2s ease-in-out;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;white-space:nowrap;width:auto}.nice-select:hover{border-color:#dbdbdb}.nice-select:active,.nice-select.open,.nice-select:focus{border-color:#999}.nice-select:after{border-bottom:2px solid #999;border-right:2px solid #999;content:'';display:block;height:5px;margin-top:-4px;pointer-events:none;position:absolute;right:12px;top:50%;-webkit-transform-origin:66% 66%;-ms-transform-origin:66% 66%;transform-origin:66% 66%;-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg);-webkit-transition:all .15s ease-in-out;transition:all .15s ease-in-out;width:5px}.nice-select.open:after{-webkit-transform:rotate(-135deg);-ms-transform:rotate(-135deg);transform:rotate(-135deg)}.nice-select.open .list{opacity:1;pointer-events:auto;-webkit-transform:scale(1) translateY(0);-ms-transform:scale(1) translateY(0);transform:scale(1) translateY(0)}.nice-select.disabled{border-color:#ededed;color:#999;pointer-events:none}.nice-select.disabled:after{border-color:#ccc}.nice-select.wide{width:100%}.nice-select.wide .list{left:0!important;right:0!important}.nice-select.right{float:right}.nice-select.right .list{left:auto;right:0}.nice-select.small{font-size:12px;height:36px;line-height:34px}.nice-select.small:after{height:4px;width:4px}.nice-select.small .option{line-height:34px;min-height:34px}.nice-select .list{background-color:#fff;border-radius:5px;box-shadow:0 0 0 1px rgba(68,68,68,0.11);box-sizing:border-box;margin-top:4px;opacity:0;overflow:hidden;padding:0;pointer-events:none;position:absolute;top:100%;left:0;-webkit-transform-origin:50% 0;-ms-transform-origin:50% 0;transform-origin:50% 0;-webkit-transform:scale(0.75) translateY(-21px);-ms-transform:scale(0.75) translateY(-21px);transform:scale(0.75) translateY(-21px);-webkit-transition:all .2s cubic-bezier(0.5,0,0,1.25),opacity .15s ease-out;transition:all .2s cubic-bezier(0.5,0,0,1.25),opacity .15s ease-out;z-index:9}.nice-select .list:hover .option:not(:hover){background-color:transparent!important}.nice-select .option{cursor:pointer;font-weight:400;line-height:40px;list-style:none;min-height:40px;outline:none;padding-left:18px;padding-right:29px;text-align:left;-webkit-transition:all .2s;transition:all .2s}.nice-select .option:hover,.nice-select .option.focus,.nice-select .option.selected.focus{background-color:#f6f6f6}.nice-select .option.selected{font-weight:700}.nice-select .option.disabled{background-color:transparent;color:#999;cursor:default}.no-csspointerevents .nice-select .list{display:none}.no-csspointerevents .nice-select.open .list{display:block}@font-face{font-family:icomoon;src:url(../fonts/icomoon.eot?4vca3n);src:url(../fonts/icomoon.eot?4vca3n#iefix) format("embedded-opentype"),url(../fonts/icomoon.ttf?4vca3n) format("truetype"),url(../fonts/icomoon.woff?4vca3n) format("woff"),url(../fonts/icomoon.svg?4vca3n#icomoon) format("svg");font-weight:400;font-style:normal;font-display:block}[class*=" icon-"],[class^=icon-]{font-family:icomoon!important;speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.icon-search:before{content:"\e939"}.icon-arrow-left,.icon-arrow-right{font-size:75%}.icon-arrow-left:before{content:"\e900"}.icon-arrow-left-2:before{content:"\e901"}.icon-arrow-right:before{content:"\e902"}.icon-arrow-right-2:before{content:"\e903"}.icon-boxes:before{content:"\e904"}.icon-cart:before{content:"\e905"}.icon-chemical:before{content:"\e906"}.icon-clock:before{content:"\e907"}.icon-container:before{content:"\e908"}.icon-controller:before{content:"\e909"}.icon-control-lever:before{content:"\e90a"}.icon-control-system:before{content:"\e90b"}.icon-conveyor:before{content:"\e90c"}.icon-danger:before{content:"\e90d"}.icon-eco:before{content:"\e90e"}.icon-envelope:before{content:"\e90f"}.icon-factory:before{content:"\e910"}.icon-factory-2:before{content:"\e911"}.icon-food:before{content:"\e912"}.icon-forklift:before{content:"\e913"}.icon-gear:before{content:"\e914"}.icon-gears:before{content:"\e915"}.icon-gears-2:before{content:"\e916"}.icon-robot:before{content:"\e917"}.icon-laser:before{content:"\e918"}.icon-machine:before{content:"\e919"}.icon-machine-2:before{content:"\e91a"}.icon-management:before{content:"\e91b"}.icon-manufacturing:before{content:"\e91c"}.icon-manufacturing-plant:before{content:"\e91d"}.icon-material:before{content:"\e91e"}.icon-mechanism:before{content:"\e91f"}.icon-meter:before{content:"\e920"}.icon-microprocessor:before{content:"\e921"}.icon-monitor:before{content:"\e922"}.icon-parcel:before{content:"\e923"}.icon-phone:before{content:"\e924"}.icon-planning:before{content:"\e925"}.icon-power-press:before{content:"\e926"}.icon-power-tower:before{content:"\e927"}.icon-pump:before{content:"\e928"}.icon-robot-arm:before{content:"\e929"}.icon-scheme:before{content:"\e92a"}.icon-siren:before{content:"\e92b"}.icon-statistics:before{content:"\e92c"}.icon-storage:before{content:"\e92d"}.icon-tank:before{content:"\e92e"}.icon-tank-2:before{content:"\e92f"}.icon-tools:before{content:"\e930"}.icon-truck:before{content:"\e931"}.icon-valve:before{content:"\e932"}.icon-walkie-talkie:before{content:"\e933"}.icon-waste:before{content:"\e934"}.icon-welding:before{content:"\e935"}.icon-wheel:before{content:"\e936"}.icon-worker:before{content:"\e937"}.icon-worker-2:before{content:"\e938"}

        h1, h2, h3, h4, h5, h6 {
            text-transform: none!important;
        }



    </style>
</head>

<body>
<div class="wrapper">

    <section class="blog blog-single pb-40">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-xs-12 col-sm-12" style="margin-bottom: 50px">
                    <img src="{!! $data['logo'] !!}" />
                </div>

                <div class="col-lg-9 col-xs-12 col-sm-12">
                    <div class="blog-item">

                        <div class="blog__content">

                            <h1 class="">Inscripción a evento online</h1>
                            <div class="blog__meta d-flex align-items-center">

                                <div class="blog__meta-cat">
                                    <span style="color: #149EA6">{!! $data['fullname'] !!}</span>
                                </div>
                                <span class="blog__meta-date">{!! $data['email'] !!}</span>


                            </div>

                            <small>Organiza: {!! $data['cliente'] !!}</small><br>
                            <small>Evento: {!! $data['evento'] !!}</small><br>
                            <small>Fecha: {!! $data['fecha'] !!}</small>
                            <small>a las {!! $data['hora'] !!}</small>
                            <hr>
                            <div class="blog__desc mt-3">
                                <p class="text-success">
                                    Tenemos el agrado de informarte que has sido inscripto exitosamente al evento.
                                </p>
                                <p>
                                    Para asistir ingresa al siguiente enlace:
                                    <a href="{!! $data['url'] !!}" target="blank">click aquí</a>
                                </p>
                            </div>
                            <hr>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

</div>

</body>

</html>