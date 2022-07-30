<?php if(!isset($_SESSION["admin"])) {header("Location: /checkass_Web/admin/login/index");}?>
<div class="app">
            <div class="header">
                <div class="menu-circle"></div>
                <div class="search-bar">
                    
                </div>
                <div class="header-profile">
                        <a>
                            <img class="profile-img" src="/checkass_Web/public/uploads/admin/admin.png" alt="" /> 
                        </a>               
                    </div>
            </div>
            <div class="wrapper">
                <div id="navbar">
                    <div class="sidebar-container">
                        <button class="sidebar-viewButton" type="button" aria-label="Shrink Sidebar" title="Shrink" onclick="changeSidebarView()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                                <polyline points="15 18 9 12 15 6"></polyline>
                            </svg>
                        </button>
                        <div class="sidebar-wrapper">
                            <div class="sidebar-themeContainer">
                                <label labelfor="theme-toggle" class="sidebar-themeLabel">
                                    <input class="sidebar-themeInput" type="checkbox" id="theme-toggle" />
                                    <div class="sidebar-themeType light" onclick="changeTheme()">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sidebar-listIcon">
                                            <circle cx="12" cy="12" r="5"></circle>
                                            <path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"></path>
                                        </svg>
                                        <span class="sidebar-themeInputText">Light</span>
                                    </div>
                                    <div class="sidebar-themeType dark" onclick="changeTheme()">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sidebar-listIcon">
                                            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                                        </svg>
                                        <span class="sidebar-themeInputText">Dark</span>
                                    </div>
                                </label>
                            </div>
                            <ul class="sidebar-list">
                                <li class="sidebar-listItem active">
                                    <a href="/checkass_Web/admin">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sidebar-listIcon">
                                            <rect x="3" y="3" rx="2" ry="2" class="sidebar-listIcon"></rect>
                                            <path d="M3 9h18M9 21V9"></path>
                                        </svg>
                                        <span class="sidebar-listItemText">Admin</span>
                                    </a>
                                </li>
                                <li class="sidebar-listItem">
                                    <a href="/checkass_Web/">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sidebar-listIcon">
                                            <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                            <path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path>
                                        </svg>
                                        <span class="sidebar-listItemText">Home</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
    