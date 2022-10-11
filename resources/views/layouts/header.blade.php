
<header id="site-header">
    <div id="site-header-container">
        <div id="site-header-logo">
            {{-- <img src="https://github.com/taviskaron/t-div-headers/blob/main/img/logo3.png?raw=true" alt=""> --}}
        </div>

        <input type="checkbox" class="toggleSideMenu" id="toggleSideMenu" autocomplete="off">
        <label for="toggleSideMenu" class="hamburger-icon">
            <div class="hamburger-menu-line diagonal-1"></div>
            <div class="hamburger-menu-line horizontal"></div>
            <div class="hamburger-menu-line diagonal-2"></div>
        </label>

        <div id="side-menu-container">
            <div id="before-side-menu">
                <span>Content before main menu</span>
            </div>
            <nav id="top-menu">
                <ul id="main-menu" >
                    <li class="main-menu-item"><a href="#">HOME</a></li>
                    <li class="main-menu-item"><a href="{{-- route('/about') --}}">ABOUT</a></li>
                    {{-- <li class="main-menu-item"><a href="#">WORKS</a></li>
                    <li class="main-menu-item"><a href="#">LIFESTYLE</a></li> --}}
                    <li class="main-menu-item"><a href="#">CONTACT</a></li>
                </ul>
            </nav>
            <div id="after-side-menu">
                <span>Content after main menu</span>
                <div class="social-buttons">
                    <i class="icon-linkedin"><img class="icon-header" src="https://img.icons8.com/ios-glyphs/30/ffffff/linkedin.png"/></i><i class="icon-facebook-squared"><img class="icon-header" src="https://img.icons8.com/ios-glyphs/30/ffffff/facebook.png"/></i><i class="icon-vkontakte"><img class="icon-header" src="https://img.icons8.com/ios-glyphs/30/ffffff/vkontakte.png"/></i><i class="icon-twitter"><img class="icon-header" src="https://img.icons8.com/ios-glyphs/30/ffffff/twitter.png"/></i>
                </div>
            </div>
        </div>

        <div id="site-header-search">
            <div id="site-header-search-container">
                <form action="" autocomplete="on">
                    <input id="search" name="search" type="text" placeholder="Search..."><button id="search_submit" type="submit"><!--i class="icon-search"--><img class ="icon-header" src="https://img.icons8.com/ios-glyphs/20/666666/search--v1.png"/><!--/i--></button>
                </form>
            </div>
        </div>


        <div id="site-header-auth-container">
            <button id="site-header-login-button" class="site-header-auth-button"><i class="icon-logout"><img class="icon-header" src="https://img.icons8.com/ios-filled/18/666666/login-rounded-right.png" /></i><a href="{{-- route('login') --}}"><span>Log in</span></a></button>
            <button id="site-header-registration-button" class="site-header-auth-button"><i class="icon-user"><img class="icon-header" src="https://img.icons8.com/ios-glyphs/18/666666/user--v1.png"/></i><span>Register</span></button>
        </div>
        

    </div>
</header>