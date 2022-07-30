<div class="app">
            <div class="header">
                <div class="menu-circle"></div>
               
                <div class="search-bar">
                </div>
                <?php
                if (isset($_SESSION['user'])) {
                    require_once 'models/cart.php';
                    $i = 0;
                    $result_cart = cart_db::get_cart_id($_SESSION['id']);
                    while($count = $result_cart->fetch_assoc()) {
                        $i = $i + 1;
                    }
                    echo '<div class="header-profile">
                        <a href="/checkass_Web/main/cart/index">
                            <div class="notification">
                                <span class="notification-number" id="num_cart">'. $i.'</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" aria-labelledby="title" aria-describedby="desc" role="img" xmlns:xlink="http://www.w3.org/1999/xlink" fill="currentColor">
                                    <circle data-name="layer1" cx="23.9" cy="56.3" r="4"></circle>
                                    <circle data-name="layer1" cx="49.9" cy="56.3" r="4"></circle>
                                    <path data-name="layer2" d="M23.4 48.3h31l7.7-24H19.7L15.9 7.8A2 2 0 0 0 14 6.3H3.9a2 2 0 0 0 0 4h8.4l9 38z"></path>
                                    <path data-name="layer1" d="M21.9 20.3H38l.1-.2-8-8-8.2 8.2zm28-8l2.2-5.6-7.4-3-6.6 16.4.1.2h8.4l1.5-3.7v3.7h12v-8H49.9z"></path>
                                </svg>
                            </div>
                        </a>
                        <a href="/checkass_Web/main/user_account/index">
                            <img class="profile-img" src="' . '/' . 'checkass_Web' . '/' . $_SESSION["img"] .  '" ' . 'alt="" /> 
                        </a>               
                    </div>';
                } else {
                    echo '<div class="header-profile">
                                <a href="/checkass_Web/main/login/index"  style="text-decoration: none;">
                                    <button class="signin-button">Login</button>
                                </a>               
                            </div>';
                }
                ?>
            </div>
            <div class="wrapper">
                
                <div style="margin: 0 !important;" id="navbar">
                    <div class="sidebar-container">
                        <button class="sidebar-viewButton" type="button" aria-label="Shrink Sidebar" title="Shrink" onclick="changeSidebarView()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                                <polyline points="15 18 9 12 15 6"></polyline>
                            </svg>
                        </button>
                        <div class="sidebar-wrapper">
                            <div class="sidebar-themeContainer">
                                <label labelfor="theme-toggle" class="sidebar-themeLabel ">
                                    <input class="sidebar-themeInput" type="checkbox" id="theme-toggle" />
                                    <div class="sidebar-themeType light " onclick="changeTheme()">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sidebar-listIcon">
                                            <circle cx="12" cy="12" r="5"></circle>
                                            <path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"></path>
                                        </svg>
                                        <span class="sidebar-themeInputText">Light</span>
                                    </div>
                                    <div class="sidebar-themeType dark " onclick="changeTheme()">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sidebar-listIcon">
                                            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                                        </svg>
                                        <span class="sidebar-themeInputText">Dark</span>
                                    </div>
                                </label>
                            </div>
                            <ul class="sidebar-list">
                                <li id = "home" class="sidebar-listItem">
                                    <a href="/checkass_Web/">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sidebar-listIcon">
                                            <rect x="3" y="3" rx="2" ry="2" class="sidebar-listIcon"></rect>
                                            <path d="M3 9h18M9 21V9"></path>
                                        </svg>
                                        <span class="sidebar-listItemText">Home</span>
                                    </a>
                                </li>
                                <li id = "about" class="sidebar-listItem">
                                    <a href="/checkass_Web/main/about/index">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sidebar-listIcon">
                                            <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                            <path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path>
                                        </svg>
                                        <span class="sidebar-listItemText">About</span>
                                    </a>
                                </li>
                                <li id = "product" class="sidebar-listItem">
                                    <a href="/checkass_Web/main/product/index">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sidebar-listIcon">
                                            <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                            <path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path>
                                        </svg>
                                        <span class="sidebar-listItemText">Products</span>
                                    </a>
                                </li>
                                <li id = "news" class="sidebar-listItem">
                                    <a href="/checkass_Web/main/news/index">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sidebar-listIcon">
                                            <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                            <path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path>
                                        </svg>
                                        <span class="sidebar-listItemText">News</span>
                                    </a>
                                </li>
                                <?php
                                    if(isset($_SESSION['user'])) {
                                        echo '<li id = "cart" class="sidebar-listItem">
                                        <a href="/checkass_Web/main/cart/index">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sidebar-listIcon">
                                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                                <line x1="3" y1="10" x2="21" y2="10"></line>
                                            </svg>
                                            <span class="sidebar-listItemText">Cart</span>
                                        </a>
                                      </li>
                                      <li id = "user" class="sidebar-listItem">
                                        <a href="/checkass_Web/main/user_account/index">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sidebar-listIcon">
                                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                            </svg>
                                            <span class="sidebar-listItemText">User Account</span>
                                        </a>
                                      </li>
                                      <li class="sidebar-listItem log-out">
                                  <a>
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sidebar-listIcon">
                                          <path d="M6,30H18a2.0023,2.0023,0,0,0,2-2V25H18v3H6V4H18V7h2V4a2.0023,2.0023,0,0,0-2-2H6A2.0023,2.0023,0,0,0,4,4V28A2.0023,2.0023,0,0,0,6,30Z"/><polygon points="20.586 20.586 24.172 17 10 17 10 15 24.172 15 20.586 11.414 22 10 28 16 22 22 20.586 20.586"/>
                                      </svg>
                                      <span class="sidebar-listItemText">Log out</span>
                                  </a>
                                  </li>
                                  
                                  <a href="/checkass_Web/main/login/logout" style="text-decoration:none;"><button class="signin-button">Logout</button></a>
                                  ';
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                