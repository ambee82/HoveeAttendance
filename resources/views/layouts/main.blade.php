<!doctype html>

<html class="no-js" lang="en">

<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="e-attendence" name="description">
    <meta content="" name="author">
    <meta name="keywords"
        content="php template, websites, php template, property websites, premium php templates, real estate company website, bootstrap real estate template, real estate marketplace php template, listing website template, property listing php template, real estate bootstrap template, real estate php5 template, real estate listing template, property template, property dealer website" />

    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    <!-- Title -->
    <title>{{ $title ?? 'Default title' }}</title>

    <link rel="stylesheet" href="{{ asset('assets/scss/layout/_horizontal.scss') }}">
    <!--Gallery-Image-Zoom-->
    <link href="{{ asset('assets/plugins/gallery-image-zoom/RV-gallery.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/scss/util/_display.scss') }}">
    <!--Font icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/scss/custom/_custom-styles.scss') }}">
    <!-- Countdown css-->
    <link href="{{ asset('assets/plugins/count-down/flipclock.css') }}" rel="stylesheet" />

    <!-- Switcher css -->
    <link href="{{ asset('assets/switcher/css/switcher.css') }}" rel="stylesheet" id="switcher-css" type="text/css"
        media="all" />

    <!-- video css-->
    <link href="{{ asset('assets/plugins/video/insideElementDemo.css') }}" rel="stylesheet" />
    <!-- Date Picker Plugin -->
    <link href="{{ asset('assets/plugins/date-picker/spectrum.css') }}" rel="stylesheet" />

    <!-- File Uploads css -->
    <link href="{{ asset('assets/plugins/fancyuploder/fancy_fileupload.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/jquery-uislider/jquery-ui.css') }}" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link id="style" href="{{ asset('assets/plugins/bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- Custom scroll bar css-->
    <link href="{{ asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.css') }}" rel="stylesheet"
        media="screen" />
    <!-- Font-awesome  Css -->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" />

    <!--Select2 Plugin -->
    <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />

    <!-- P-scroll bar css-->
    <link href="{{ asset('assets/plugins/pscrollbar/perfect-scrollbar.css') }}" rel="stylesheet" />
    <!-- p-scroll bar css-->
    <link href="{{ asset('assets/plugins/pscrollbar/pscrollbar.css') }}" rel="stylesheet" />

    <!-- Owl Theme css-->
    <link href="{{ asset('assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet" />

    <!-- Dashboard Css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />


</head>

<body class="main-body">

    <div id="global-loader">
        <img src="{{ asset('assets/images/Double Ring@1x-1.0s-200px-200px (1).gif') }}" class="loader-img" alt>
    </div>
    <x-layout.navbar></x-layout.navbar>

    @yield('content')

    <x-layout.footer></x-layout.footer>
    <!-- Whats up--->

    <div class="live-chat">
        <div class="trigger">
            <div class="trigger-inside">
                <span>Live Chat</span>
            </div>
        </div>
        <div class="start">
            <p>Vestibulum rutrum quam vitae fringilla tincidunt.</p>
            <a href="#" class="text-primary">Start Chat</a>
        </div>
    </div>
    <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fa fa-rocket"></i></a>


    <!-- JQuery js-->
    <script src="{{ asset('assets/js/vendors/jquery-3.6.0.min.js') }}"></script>

    <!-- Bootstrap js -->
    <script src="{{ asset('assets/plugins/bootstrap-5/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-5/js/bootstrap.min.js') }}"></script>

    <!--JQuery Propertyrkline Js-->
    <script src="{{ asset('assets/js/vendors/jquery.sparkline.min.js') }}"></script>

    <!-- Circle Progress Js-->
    <script src="{{ asset('assets/js/vendors/circle-progress.min.js') }}"></script>

    <!-- Star Rating Js-->
    <script src="{{ asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script>

    <!-- Count Down-->
    <script src="{{ asset('assets/plugins/count-down/jquery.lwtCountdown-1.0.js') }}"></script>


    <!--Counters -->
    <script src="{{ asset('assets/plugins/counters/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/counters/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/counters/numeric-counter.js') }}"></script>

    <!--Owl Carousel js -->
    <script src="{{ asset('assets/plugins/owl-carousel/owl.carousel.js') }}"></script>

    <!-- Gallery-image-Zoom -->
    <script src="{{ asset('assets/plugins/gallery-image-zoom/RV-gallery.js') }}"></script>
    <script src="{{ asset('assets/plugins/gallery-image-zoom/main.js') }}"></script>

    <!-- Datepicker js -->
    <script src="{{ asset('assets/plugins/date-picker/spectrum.js') }}"></script>
    <script src="{{ asset('assets/plugins/date-picker/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/plugins/date-picker/datepicker.js') }}"></script>

    <!-- P-scroll bar Js-->
    <script src="{{ asset('assets/plugins/pscrollbar/perfect-scrollbar.js') }}"></script>

    <!--Map js -->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCW16SmpzDNLsrP-npQii6_8vBu_EJvEjA"></script>
    <script src="{{ asset('assets/plugins/map/jquery.axgmap.js') }}"></script>
    <script src="{{ asset('assets/plugins/maps-google/jquery.googlemap.js') }}"></script>
    <script src="{{ asset('assets/plugins/maps-google/map.js') }}"></script>

    <!--Horizontal Menu-->
    <script src="{{ asset('assets/plugins/horizontal-menu/horizontal.js') }}"></script>

    <!--JQuery TouchSwipe js-->
    <script src="{{ asset('assets/js/jquery.touchSwipe.min.js') }}"></script>

    <!--Select2 js -->
    <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.js') }}"></script>

    <!-- sticky Js-->
    <script src="{{ asset('assets/js/sticky.js') }}"></script>

    <!-- Cookie js -->
    <!-- <script src="{{ asset('assets/plugins/cookie/jquery.ihavecookies.js') }}"></script>
    <script src="{{ asset('assets/plugins/cookie/cookie.js') }}"></script> -->

    <!-- p-scroll bar Js-->
    <script src="{{ asset('assets/plugins/pscrollbar/pscrollbar.js') }}"></script>
    <script src="{{ asset('assets/plugins/pscrollbar/mapscroll.js') }}"></script>
    <script src="{{ asset('assets/plugins/pscrollbar/perfect-scrollbar.js') }}"></script>
    <!--Showmore Js-->
    <script src="{{ asset('assets/js/jquery.showmore.js') }}"></script>
    <script src="{{ asset('assets/js/showmore.js') }}"></script>


    <!-- Ion.RangeSlider -->
    <script src="{{ asset('assets/plugins/jquery-uislider/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/uislider.js') }}"></script>

    <!-- Swipe Js-->
    <script src="{{ asset('assets/js/swipe.js') }}"></script>

    <!-- Scripts Js-->
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>

    <!-- themecolor Js-->
    <script src="{{ asset('assets/js/themeColors.js') }}"></script>

    <!-- Custom Js-->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <!-- Custom-switcher Js-->
    <script src="{{ asset('assets/js/custom-switcher.js') }}"></script>

    <!-- Vertical scroll bar Js-->
    <script src="{{ asset('assets/plugins/vertical-scroll/jquery.bootstrap.newsbox.js') }}"></script>
    <script src="{{ asset('assets/plugins/vertical-scroll/vertical-scroll.js') }}"></script>
    <!-- Cover-image Js-->
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js') }}"></script>
    <script>
        (function($) {
            $(function() {
                console.log("ready!");

                var liveChat = $(".live-chat");
                var liveChatTrigger = $(".live-chat .trigger");
                var liveChatClose = $(".live-chat .start .close");
                liveChatTrigger.click(function() {
                    if (liveChat.hasClass("open")) {
                        liveChat.removeClass("open");
                    } else {
                        liveChat.addClass("open");
                    }
                });
                liveChatClose.click(function() {
                    liveChat.removeClass("open");
                });

            });
        })(jQuery);
    </script>
    <script>
        var colors = ['#ba0377'];
        var chLine = document.getElementById("chLine");
        var chartData = {
            labels: ["jan", "feb", "mar", "april", "may", "june", "july", "aug", "sept", "oct", "nov", "dec"],
            datasets: [{
                    data: [289, 245, 283, 203, 289, 292, 234, 245, 283, 203, 289, 292],
                    backgroundColor: 'transparent',
                    borderColor: colors[0],
                    borderWidth: 2,
                    pointBackgroundColor: colors[0]
                }

            ]
        };
        if (chLine) {
            new Chart(chLine, {
                type: 'line',
                data: chartData,
                options: {
                    scales: {
                        xAxes: [{
                            ticks: {
                                beginAtZero: false
                            }
                        }]
                    },
                    legend: {
                        display: false
                    },
                    responsive: true
                }
            });
        }
    </script>

    <script>
        const weekArray = ["Sun", "Mon", "Tue", "Wed", "Thr", "Fri", "Sat"];
        const monthArray = [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December"
        ];
        const current = new Date();
        const todaysDate = current.getDate();
        const currentYear = current.getFullYear();
        const currentMonth = current.getMonth();

        window.onload = function() {
            const currentDate = new Date();
            generateCalendarDays(currentDate);

            let calendarWeek = document.getElementsByClassName("calendar-week")[0];
            let calendarTodayButton = document.getElementsByClassName(
                "calendar-today-button"
            )[0];
            calendarTodayButton.textContent = `Today ${todaysDate}`;

            calendarTodayButton.addEventListener("click", () => {
                generateCalendarDays(currentDate);
            });

            weekArray.forEach((week) => {
                let li = document.createElement("li");
                li.textContent = week;
                li.classList.add("calendar-week-day");
                calendarWeek.appendChild(li);
            });

            const calendarMonths = document.getElementsByClassName("calendar-months")[0];
            const calendarYears = document.getElementsByClassName("calendar-years")[0];
            const monthYear = document.getElementsByClassName("calendar-month-year")[0];

            const selectedMonth = parseInt(monthYear.getAttribute("data-month") || 0);
            const selectedYear = parseInt(monthYear.getAttribute("data-year") || 0);

            monthArray.forEach((month, index) => {
                let option = document.createElement("option");
                option.textContent = month;
                option.value = index;
                option.selected = index === selectedMonth;
                calendarMonths.appendChild(option);
            });

            const currentYear = new Date().getFullYear();
            const startYear = currentYear - 60;
            const endYear = currentYear + 60;
            let newYear = startYear;
            while (newYear <= endYear) {
                let option = document.createElement("option");
                option.textContent = newYear;
                option.value = newYear;
                option.selected = newYear === selectedYear;
                calendarYears.appendChild(option);
                newYear++;
            }

            const leftArrow = document.getElementsByClassName("calendar-left-arrow")[0];

            leftArrow.addEventListener("click", () => {
                const monthYear = document.getElementsByClassName("calendar-month-year")[0];
                const month = parseInt(monthYear.getAttribute("data-month") || 0);
                const year = parseInt(monthYear.getAttribute("data-year") || 0);

                let newMonth = month === 0 ? 11 : month - 1;
                let newYear = month === 0 ? year - 1 : year;
                let newDate = new Date(newYear, newMonth, 1);
                generateCalendarDays(newDate);
            });

            const rightArrow = document.getElementsByClassName("calendar-right-arrow")[0];

            rightArrow.addEventListener("click", () => {
                const monthYear = document.getElementsByClassName("calendar-month-year")[0];
                const month = parseInt(monthYear.getAttribute("data-month") || 0);
                const year = parseInt(monthYear.getAttribute("data-year") || 0);
                let newMonth = month + 1;
                newMonth = newMonth === 12 ? 0 : newMonth;
                let newYear = newMonth === 0 ? year + 1 : year;
                let newDate = new Date(newYear, newMonth, 1);
                generateCalendarDays(newDate);
            });

            calendarMonths.addEventListener("change", function() {
                let newDate = new Date(calendarYears.value, calendarMonths.value, 1);
                generateCalendarDays(newDate);
            });

            calendarYears.addEventListener("change", function() {
                let newDate = new Date(calendarYears.value, calendarMonths.value, 1);
                generateCalendarDays(newDate);
            });
        };

        function generateCalendarDays(currentDate) {
            const newDate = new Date(currentDate);
            const year = newDate.getFullYear();
            const month = newDate.getMonth();
            const totalDaysInMonth = getTotalDaysInAMonth(year, month);
            const firstDayOfWeek = getFirstDayOfWeek(year, month);
            let calendarDays = document.getElementsByClassName("calendar-days")[0];

            removeAllChildren(calendarDays);

            let firstDay = 1;
            while (firstDay <= firstDayOfWeek) {
                let li = document.createElement("li");
                li.classList.add("calendar-day");
                calendarDays.appendChild(li);
                firstDay++;
            }

            let day = 1;
            while (day <= totalDaysInMonth) {
                let li = document.createElement("li");
                li.textContent = day;
                li.classList.add("calendar-day");
                if (todaysDate === day && currentMonth === month && currentYear === year) {
                    li.classList.add("calendar-day-active");
                }
                calendarDays.appendChild(li);
                day++;
            }

            const monthYear = document.getElementsByClassName("calendar-month-year")[0];
            monthYear.setAttribute("data-month", month);
            monthYear.setAttribute("data-year", year);
            const calendarMonths = document.getElementsByClassName("calendar-months")[0];
            const calendarYears = document.getElementsByClassName("calendar-years")[0];
            calendarMonths.value = month;
            calendarYears.value = year;
        }

        function getTotalDaysInAMonth(year, month) {
            return new Date(year, month + 1, 0).getDate();
        }

        function getFirstDayOfWeek(year, month) {
            return new Date(year, month, 1).getDay();
        }

        function removeAllChildren(parent) {
            while (parent.firstChild) {
                parent.removeChild(parent.firstChild);
            }
        }
    </script>



</body>

</html>
