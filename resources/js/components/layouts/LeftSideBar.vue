<template>
    <div class="fixed-sidebar">
        <div class="fixed-sidebar-left sidebar--small" id="sidebar-left">

            <!--                <a href="" class="logo">-->
            <router-link class="logo" to="/">
                <div class="img-wrap">
                    <img :src="`assets/img/eureka/eureka-logo.png`" alt="Eureka">
                </div>
            </router-link>
            <!--                </a>-->

            <div class="mCustomScrollbar" data-mcs-theme="dark">
                <ul class="left-menu">
                    <li>
                        <a href="#" class="js-sidebar-open">
                            <svg class="olymp-menu-icon left-menu-icon" data-toggle="tooltip" data-placement="right"
                                 data-original-title="OPEN MENU">
                                <use
                                    :xlink:href="`assets/svg-icons/sprites/icons.svg#olymp-menu-icon`"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <router-link  to="/challenge-details" class="nav-link">


                            <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip"
                                 data-placement="right"
                                 data-original-title="NEWSFEED">
                                <use
                                    :xlink:href="`assets/svg-icons/sprites/icons.svg#olymp-newsfeed-icon`"></use>
                            </svg>
                        </router-link>
                    </li>

                    <li>
                        <router-link  to="/home" class="nav-link">


                            <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip"
                                 data-placement="right"
                                 data-original-title="DETAILS">
                                <use
                                    :xlink:href="`assets/svg-icons/sprites/icons.svg#olymp-calendar-icon`"></use>
                            </svg>
                        </router-link>
                    </li>

                    <li>
                        <router-link  to="/contributors" class="nav-link">


                            <svg version="1.1" class="left-menu-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve" data-toggle="tooltip" data-placement="right"   data-original-title="Contributors">
						<g>
							<path d="M22.25,20.47c-0.54-0.39-1.83-0.85-4.67-1.79l-0.45-0.15c-0.48-0.16-0.9-0.3-1.04-0.36c-0.04-0.02-0.1-0.04-0.11-0.05
								c0,0-0.02-0.04-0.01-0.14c0.06-0.14,0.36-0.6,0.56-0.89c0.79-1.19,1.99-2.98,1.99-4.98c0-3.99-2.8-7.24-6.24-7.24
								c-3.44,0-6.24,3.25-6.24,7.24c0,1.98,1.18,3.76,2,4.99c0.19,0.28,0.5,0.74,0.54,0.83c0.02,0.15,0.01,0.19,0.01,0.19
								c-0.01,0.01-0.07,0.04-0.12,0.06C8.33,18.23,8,18.34,7.6,18.47l-0.63,0.21c-2.85,0.94-4.13,1.4-4.67,1.79
								c-1.77,1.28-2.17,5.75-2.25,7.61c-0.01,0.35,0.11,0.68,0.35,0.94c0.24,0.26,0.56,0.41,0.95,0.42c0.7,0,1.27-0.55,1.31-1.25
								c0.09-2.16,0.65-5.23,1.15-5.59c0.13-0.08,0.78-0.4,3.98-1.43l0.34-0.12c0.68-0.23,1.09-0.36,1.31-0.45
								c1.31-0.54,1.93-1.67,1.7-3.11c-0.09-0.6-0.49-1.18-0.94-1.85c-0.62-0.92-1.56-2.3-1.56-3.53c0-2.5,1.66-4.62,3.63-4.62
								s3.63,2.11,3.63,4.62c0,1.21-0.9,2.55-1.56,3.54c-0.49,0.74-0.85,1.27-0.94,1.84c-0.22,1.43,0.4,2.57,1.71,3.11
								c0.28,0.11,0.83,0.3,1.65,0.56c0.88,0.29,3.57,1.17,3.96,1.43c0.56,0.4,1.09,3.63,1.17,5.61c0.02,0.7,0.6,1.25,1.36,1.25
								c0.35-0.01,0.67-0.16,0.91-0.42c0.24-0.26,0.36-0.59,0.34-0.93c0-0.02-0.05-2.2-0.3-3.58C23.82,22.47,23.18,21.14,22.25,20.47z"/>
                            <path d="M31.65,22.2L31.65,22.2c-0.39-2.06-1.02-3.38-1.94-4.05c-0.54-0.39-1.77-0.82-4.67-1.79l-0.44-0.14
								c-0.47-0.16-0.91-0.3-1.06-0.36c-0.04-0.02-0.1-0.04-0.11-0.04c0,0-0.02-0.04-0.01-0.15c0.06-0.14,0.37-0.6,0.56-0.89
								c0.79-1.19,1.99-2.98,1.99-4.98c0-3.99-2.8-7.24-6.24-7.24c-1.06,0-2.1,0.32-3.04,0.92c-0.61,0.42-0.78,1.22-0.39,1.83
								c0.38,0.57,1.12,0.78,1.81,0.39c0.52-0.33,1.06-0.5,1.61-0.5c1.97,0,3.63,2.11,3.63,4.62c0,1.2-0.9,2.54-1.56,3.54
								c-0.5,0.74-0.85,1.27-0.94,1.84c-0.22,1.43,0.4,2.57,1.71,3.11c0.28,0.11,0.83,0.3,1.65,0.56c0.88,0.29,3.57,1.17,3.96,1.43
								c0.56,0.4,1.09,3.63,1.17,5.61c0.02,0.7,0.6,1.25,1.36,1.25c0.35-0.01,0.67-0.16,0.91-0.42c0.24-0.26,0.36-0.59,0.34-0.93
								C31.95,25.76,31.9,23.58,31.65,22.2z"/>
						</g>
						</svg>
                        </router-link>
                    </li>
                    <li>
                        <router-link  to="/approach" class="nav-link">


                            <svg version="1.1" class="left-menu-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve" data-toggle="tooltip" data-placement="right"   data-original-title="EUREKA Approach">
						<g>
							<path class="st0" d="M14.23,10.56c0.06,0.11,0.11,0.23,0.17,0.31c0.06,0.09,0.14,0.17,0.2,0.26c0.09,0.09,0.17,0.17,0.29,0.26
								c0.09,0.06,0.2,0.14,0.34,0.17c0.11,0.06,0.23,0.09,0.37,0.11c0.14,0.03,0.26,0.03,0.37,0.03c0.11,0,0.26,0,0.37-0.03
								c0.11-0.03,0.23-0.06,0.31-0.11h0.03c0.11-0.06,0.23-0.11,0.34-0.2c0.09-0.06,0.17-0.14,0.26-0.23l0.03-0.03
								c0.09-0.09,0.14-0.17,0.2-0.26c0.06-0.09,0.11-0.17,0.14-0.29c0-0.03,0-0.03,0.03-0.06c0.06-0.11,0.09-0.26,0.11-0.37
								c0.03-0.11,0.03-0.26,0.03-0.37s0-0.26-0.03-0.37c-0.03-0.11-0.06-0.23-0.11-0.37c-0.09-0.2-0.2-0.37-0.34-0.51
								c-0.03-0.03-0.03-0.03-0.06-0.06C17.2,8.36,17.12,8.3,17,8.22c-0.11-0.06-0.2-0.11-0.31-0.17s-0.23-0.09-0.34-0.11
								C16.2,7.9,16.09,7.9,15.97,7.9c-0.11,0-0.26,0-0.37,0.03c-0.11,0.03-0.23,0.06-0.34,0.11h-0.03C15.11,8.1,15,8.16,14.91,8.22
								c-0.11,0.09-0.2,0.14-0.29,0.23c-0.09,0.09-0.17,0.17-0.23,0.26c-0.06,0.09-0.11,0.2-0.17,0.31c-0.06,0.11-0.09,0.23-0.11,0.34
								c-0.03,0.14-0.03,0.26-0.03,0.37c0,0.11,0,0.26,0.03,0.37C14.14,10.34,14.2,10.45,14.23,10.56z"/>
                            <path class="st0" d="M18.2,21.04h-0.66v-7.01c0-0.4-0.31-0.74-0.74-0.74h-3c-0.4,0-0.74,0.31-0.74,0.74v1.54
								c0,0.4,0.31,0.74,0.74,0.74h0.6v4.75h-0.6c-0.4,0-0.74,0.31-0.74,0.74v1.54c0,0.4,0.31,0.74,0.74,0.74h4.41
								c0.4,0,0.74-0.31,0.74-0.74V21.8C18.95,21.38,18.6,21.04,18.2,21.04z"/>
                            <path class="st0" d="M16,0.1C7.23,0.1,0.1,7.23,0.1,16c0,8.77,7.13,15.9,15.9,15.9c8.77,0,15.9-7.13,15.9-15.9
								C31.9,7.23,24.77,0.1,16,0.1z M16,29.34C8.64,29.34,2.66,23.36,2.66,16S8.64,2.66,16,2.66S29.34,8.64,29.34,16
								S23.36,29.34,16,29.34z"/>
						</g>
						</svg>
                        </router-link>
                    </li>

                    <li>
                        <router-link  to="/home" class="nav-link">


                            <svg version="1.1" class="left-menu-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve" data-toggle="tooltip" data-placement="right"   data-original-title="Settings">
						<g>
							<path d="M30.64,14.01l-0.7-0.29c0.09-0.8,0.09-1.61,0-2.41l0.7-0.29c0.49-0.2,0.88-0.59,1.08-1.08c0.2-0.49,0.2-1.03,0-1.53
								l-0.64-1.55c-0.2-0.49-0.59-0.88-1.08-1.08c-0.49-0.2-1.04-0.2-1.53,0l-0.7,0.29c-0.5-0.63-1.07-1.2-1.7-1.7l0.29-0.7
								c0.2-0.49,0.2-1.03,0-1.53c-0.2-0.49-0.59-0.88-1.08-1.08l-1.55-0.65c-0.5-0.2-1.04-0.2-1.53,0c-0.49,0.2-0.88,0.59-1.08,1.08
								l-0.29,0.7c-0.8-0.09-1.61-0.09-2.41,0l-0.29-0.7c-0.2-0.49-0.59-0.88-1.08-1.08c-0.49-0.2-1.03-0.2-1.53,0l-1.55,0.64
								c-0.49,0.2-0.88,0.59-1.08,1.08c-0.21,0.49-0.21,1.04,0,1.53l0.29,0.7c-0.62,0.49-1.2,1.06-1.7,1.7l-0.7-0.29
								c-0.49-0.2-1.03-0.2-1.53,0c-0.49,0.2-0.88,0.59-1.08,1.08L7.54,8.41c-0.2,0.49-0.2,1.04,0,1.53c0.2,0.49,0.59,0.88,1.08,1.08
								l1.42,0.59c0.25,0.1,0.52,0.1,0.77,0c0.24-0.1,0.44-0.3,0.54-0.54c0.1-0.25,0.1-0.52,0-0.77c-0.1-0.25-0.3-0.44-0.54-0.54
								L9.38,9.17l0.64-1.55l1.42,0.59c0.44,0.18,0.95,0.03,1.21-0.37c0.61-0.92,1.39-1.69,2.31-2.31c0.4-0.27,0.56-0.78,0.37-1.21
								L14.75,2.9l1.55-0.64l0.59,1.42c0.18,0.45,0.66,0.7,1.12,0.6c1.06-0.22,2.16-0.22,3.26,0c0.46,0.09,0.94-0.16,1.12-0.6l0.58-1.42
								l1.55,0.64l-0.59,1.42c-0.18,0.44-0.03,0.95,0.37,1.21c0.92,0.61,1.7,1.39,2.31,2.31c0.27,0.4,0.78,0.55,1.21,0.37l1.42-0.59
								l0.64,1.55l-1.42,0.59c-0.45,0.18-0.69,0.64-0.6,1.12c0.21,1.06,0.21,2.16,0,3.26c-0.09,0.47,0.16,0.94,0.6,1.12l1.42,0.58
								l-0.64,1.55l-1.43-0.59c-0.44-0.18-0.95-0.02-1.21,0.37c-0.61,0.92-1.39,1.69-2.31,2.31c-0.4,0.27-0.55,0.78-0.37,1.21l0.59,1.42
								l-1.55,0.64l-0.59-1.42c-0.1-0.25-0.3-0.44-0.54-0.55c-0.25-0.1-0.52-0.1-0.76,0c-0.25,0.1-0.44,0.3-0.55,0.55
								c-0.1,0.25-0.1,0.52,0,0.76l0.59,1.42c0.21,0.5,0.59,0.88,1.09,1.08c0.25,0.1,0.51,0.15,0.76,0.15c0.26,0,0.52-0.05,0.76-0.16
								l1.55-0.64c0.49-0.21,0.88-0.59,1.08-1.08c0.2-0.49,0.2-1.04,0-1.53l-0.29-0.7c0.62-0.49,1.19-1.06,1.7-1.7l0.7,0.29
								c1.02,0.42,2.19-0.06,2.61-1.08l0.65-1.55c0.2-0.49,0.2-1.04,0-1.53C31.52,14.59,31.13,14.21,30.64,14.01z"/>
                            <path d="M25.1,12.47c-0.02-2.99-2.47-5.43-5.51-5.43c-1.46,0.01-2.83,0.59-3.86,1.63c-1.02,1.04-1.58,2.41-1.58,3.88
								c0,0.55,0.45,1,1.01,1c0.27,0,0.52-0.11,0.71-0.3c0.19-0.19,0.29-0.45,0.29-0.71c-0.01-0.93,0.35-1.8,1-2.46
								c0.65-0.66,1.52-1.03,2.47-1.03c1.9,0,3.45,1.54,3.47,3.44c0.01,1.91-1.53,3.48-3.44,3.49c-0.27,0-0.52,0.11-0.71,0.3
								c-0.19,0.19-0.29,0.45-0.29,0.71c0,0.55,0.45,1,1.01,1c1.46-0.01,2.83-0.59,3.86-1.63C24.55,15.31,25.11,13.93,25.1,12.47z"/>
                            <path d="M17.49,19.85h-0.34c-0.14-0.45-0.32-0.88-0.54-1.29l0.24-0.24c0.33-0.33,0.51-0.76,0.51-1.22c0-0.47-0.18-0.9-0.51-1.22
								l-0.86-0.86c-0.66-0.66-1.81-0.65-2.44,0l-0.24,0.24c-0.41-0.22-0.84-0.4-1.29-0.54v-0.35c0-0.95-0.78-1.73-1.73-1.73H9.06
								c-0.95,0-1.73,0.78-1.73,1.73v0.35c-0.45,0.14-0.88,0.32-1.29,0.54l-0.24-0.24c-0.66-0.66-1.81-0.65-2.44,0l-0.86,0.86
								c-0.32,0.32-0.5,0.76-0.5,1.22c0,0.46,0.18,0.9,0.5,1.22l0.24,0.24c-0.22,0.41-0.4,0.84-0.54,1.29H1.85
								c-0.95,0-1.73,0.78-1.73,1.73v1.22c0,0.95,0.78,1.73,1.73,1.73H2.2c0.14,0.45,0.32,0.88,0.54,1.29l-0.24,0.24
								c-0.32,0.32-0.5,0.76-0.5,1.22s0.18,0.9,0.5,1.22l0.86,0.86c0.66,0.66,1.81,0.65,2.44,0l0.24-0.24c0.41,0.22,0.84,0.4,1.29,0.54
								v0.35c0.01,0.95,0.78,1.73,1.73,1.73h1.22c0.95,0,1.73-0.78,1.73-1.73v-0.35c0.45-0.14,0.88-0.32,1.29-0.54l0.24,0.24
								c0.66,0.66,1.81,0.65,2.44,0l0.86-0.86c0.33-0.33,0.51-0.76,0.51-1.22c0-0.47-0.18-0.9-0.51-1.22l-0.24-0.24
								c0.22-0.41,0.4-0.84,0.54-1.29h0.34c0.95,0,1.73-0.78,1.73-1.73v-1.22C19.22,20.63,18.44,19.85,17.49,19.85z M15.39,23.35
								c-0.15,0.76-0.44,1.46-0.87,2.09c-0.26,0.4-0.21,0.93,0.12,1.26l0.6,0.59l-0.47,0.47l-0.6-0.6c-0.34-0.34-0.87-0.39-1.27-0.12
								c-0.63,0.43-1.34,0.72-2.09,0.87c-0.47,0.09-0.81,0.5-0.81,0.98v0.85H9.34V28.9c0-0.48-0.34-0.89-0.8-0.98
								c-0.77-0.17-1.47-0.46-2.1-0.88c-0.4-0.26-0.94-0.2-1.26,0.12l-0.6,0.59l-0.47-0.47l0.6-0.6c0.34-0.34,0.39-0.88,0.12-1.26
								c-0.43-0.63-0.72-1.34-0.87-2.09c-0.09-0.47-0.5-0.81-0.98-0.81H2.13v-0.67h0.85c0.48,0,0.89-0.34,0.98-0.81
								c0.15-0.75,0.44-1.46,0.87-2.09c0.27-0.4,0.21-0.93-0.12-1.26l-0.6-0.59l0.47-0.47l0.6,0.61c0.34,0.34,0.88,0.39,1.27,0.12
								c0.63-0.43,1.34-0.72,2.09-0.87c0.47-0.09,0.81-0.5,0.81-0.98v-0.85h0.67v0.85c0,0.48,0.34,0.89,0.81,0.98
								c0.75,0.15,1.46,0.44,2.09,0.87c0.4,0.26,0.93,0.21,1.26-0.12l0.6-0.6l0.47,0.47l-0.6,0.6c-0.34,0.34-0.39,0.88-0.12,1.26
								c0.43,0.63,0.72,1.34,0.87,2.09c0.09,0.47,0.5,0.81,0.98,0.81h0.85v0.67h-0.85C15.9,22.54,15.48,22.88,15.39,23.35z"/>
                            <path d="M9.67,18.1c-2.25,0-4.09,1.84-4.09,4.1c0,2.26,1.84,4.09,4.1,4.09c2.25,0,4.09-1.84,4.09-4.09
								C13.76,19.94,11.93,18.1,9.67,18.1z M11.77,22.2c0,1.15-0.94,2.09-2.09,2.09s-2.09-0.94-2.09-2.09s0.94-2.09,2.09-2.09
								S11.77,21.05,11.77,22.2z"/>
						</g>
						</svg>
                        </router-link>
                    </li>

                </ul>
            </div>
        </div>

        <div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1">
            <a href="" class="logo">
                <div class="img-wrap">
                    <img :src="`assets/img/eureka/eureka-logo.png`" alt="Eureka">
                </div>
                <div class="title-block">
                    <h6 class="logo-title">eureka</h6>
                </div>
            </a>

            <div class="mCustomScrollbar" data-mcs-theme="dark">
                <ul class="left-menu">
                    <li>
                        <a href="#" class="js-sidebar-open">
                            <svg class="olymp-close-icon left-menu-icon">
                                <use
                                    :xlink:href="`assets/svg-icons/sprites/icons.svg#olymp-close-icon`"></use>
                            </svg>
                            <span class="left-menu-title">Collapse Menu</span>
                        </a>
                    </li>
                    <li>
                        <router-link  to="/challenge-details" class="nav-link">
                            <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip"
                                 data-placement="right"
                                 data-original-title="NEWSFEED">
                                <use
                                    :xlink:href="`assets/svg-icons/sprites/icons.svg#olymp-newsfeed-icon`"></use>
                            </svg>
                            <span class="left-menu-title">Newsfeed</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link  to="/home" class="nav-link">


                            <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip"
                                 data-placement="right"
                                 data-original-title="DETAILS">
                                <use
                                    :xlink:href="`assets/svg-icons/sprites/icons.svg#olymp-calendar-icon`"></use>
                            </svg>
                            <span class="left-menu-title">Challenges Details</span>
                        </router-link>

                    </li>
                    <li>
                        <router-link  to="/contributors" class="nav-link">


                            <svg version="1.1" class="left-menu-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve" data-toggle="tooltip" data-placement="right"   data-original-title="Contributors">
						<g>
							<path d="M22.25,20.47c-0.54-0.39-1.83-0.85-4.67-1.79l-0.45-0.15c-0.48-0.16-0.9-0.3-1.04-0.36c-0.04-0.02-0.1-0.04-0.11-0.05
								c0,0-0.02-0.04-0.01-0.14c0.06-0.14,0.36-0.6,0.56-0.89c0.79-1.19,1.99-2.98,1.99-4.98c0-3.99-2.8-7.24-6.24-7.24
								c-3.44,0-6.24,3.25-6.24,7.24c0,1.98,1.18,3.76,2,4.99c0.19,0.28,0.5,0.74,0.54,0.83c0.02,0.15,0.01,0.19,0.01,0.19
								c-0.01,0.01-0.07,0.04-0.12,0.06C8.33,18.23,8,18.34,7.6,18.47l-0.63,0.21c-2.85,0.94-4.13,1.4-4.67,1.79
								c-1.77,1.28-2.17,5.75-2.25,7.61c-0.01,0.35,0.11,0.68,0.35,0.94c0.24,0.26,0.56,0.41,0.95,0.42c0.7,0,1.27-0.55,1.31-1.25
								c0.09-2.16,0.65-5.23,1.15-5.59c0.13-0.08,0.78-0.4,3.98-1.43l0.34-0.12c0.68-0.23,1.09-0.36,1.31-0.45
								c1.31-0.54,1.93-1.67,1.7-3.11c-0.09-0.6-0.49-1.18-0.94-1.85c-0.62-0.92-1.56-2.3-1.56-3.53c0-2.5,1.66-4.62,3.63-4.62
								s3.63,2.11,3.63,4.62c0,1.21-0.9,2.55-1.56,3.54c-0.49,0.74-0.85,1.27-0.94,1.84c-0.22,1.43,0.4,2.57,1.71,3.11
								c0.28,0.11,0.83,0.3,1.65,0.56c0.88,0.29,3.57,1.17,3.96,1.43c0.56,0.4,1.09,3.63,1.17,5.61c0.02,0.7,0.6,1.25,1.36,1.25
								c0.35-0.01,0.67-0.16,0.91-0.42c0.24-0.26,0.36-0.59,0.34-0.93c0-0.02-0.05-2.2-0.3-3.58C23.82,22.47,23.18,21.14,22.25,20.47z"/>
                            <path d="M31.65,22.2L31.65,22.2c-0.39-2.06-1.02-3.38-1.94-4.05c-0.54-0.39-1.77-0.82-4.67-1.79l-0.44-0.14
								c-0.47-0.16-0.91-0.3-1.06-0.36c-0.04-0.02-0.1-0.04-0.11-0.04c0,0-0.02-0.04-0.01-0.15c0.06-0.14,0.37-0.6,0.56-0.89
								c0.79-1.19,1.99-2.98,1.99-4.98c0-3.99-2.8-7.24-6.24-7.24c-1.06,0-2.1,0.32-3.04,0.92c-0.61,0.42-0.78,1.22-0.39,1.83
								c0.38,0.57,1.12,0.78,1.81,0.39c0.52-0.33,1.06-0.5,1.61-0.5c1.97,0,3.63,2.11,3.63,4.62c0,1.2-0.9,2.54-1.56,3.54
								c-0.5,0.74-0.85,1.27-0.94,1.84c-0.22,1.43,0.4,2.57,1.71,3.11c0.28,0.11,0.83,0.3,1.65,0.56c0.88,0.29,3.57,1.17,3.96,1.43
								c0.56,0.4,1.09,3.63,1.17,5.61c0.02,0.7,0.6,1.25,1.36,1.25c0.35-0.01,0.67-0.16,0.91-0.42c0.24-0.26,0.36-0.59,0.34-0.93
								C31.95,25.76,31.9,23.58,31.65,22.2z"/>
						</g>
						</svg>
                            <span class="left-menu-title">Contributors</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link  to="/approach" class="nav-link">


                            <svg version="1.1" class="left-menu-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve" data-toggle="tooltip" data-placement="right"   data-original-title="EUREKA Approach">
						<g>
							<path class="st0" d="M14.23,10.56c0.06,0.11,0.11,0.23,0.17,0.31c0.06,0.09,0.14,0.17,0.2,0.26c0.09,0.09,0.17,0.17,0.29,0.26
								c0.09,0.06,0.2,0.14,0.34,0.17c0.11,0.06,0.23,0.09,0.37,0.11c0.14,0.03,0.26,0.03,0.37,0.03c0.11,0,0.26,0,0.37-0.03
								c0.11-0.03,0.23-0.06,0.31-0.11h0.03c0.11-0.06,0.23-0.11,0.34-0.2c0.09-0.06,0.17-0.14,0.26-0.23l0.03-0.03
								c0.09-0.09,0.14-0.17,0.2-0.26c0.06-0.09,0.11-0.17,0.14-0.29c0-0.03,0-0.03,0.03-0.06c0.06-0.11,0.09-0.26,0.11-0.37
								c0.03-0.11,0.03-0.26,0.03-0.37s0-0.26-0.03-0.37c-0.03-0.11-0.06-0.23-0.11-0.37c-0.09-0.2-0.2-0.37-0.34-0.51
								c-0.03-0.03-0.03-0.03-0.06-0.06C17.2,8.36,17.12,8.3,17,8.22c-0.11-0.06-0.2-0.11-0.31-0.17s-0.23-0.09-0.34-0.11
								C16.2,7.9,16.09,7.9,15.97,7.9c-0.11,0-0.26,0-0.37,0.03c-0.11,0.03-0.23,0.06-0.34,0.11h-0.03C15.11,8.1,15,8.16,14.91,8.22
								c-0.11,0.09-0.2,0.14-0.29,0.23c-0.09,0.09-0.17,0.17-0.23,0.26c-0.06,0.09-0.11,0.2-0.17,0.31c-0.06,0.11-0.09,0.23-0.11,0.34
								c-0.03,0.14-0.03,0.26-0.03,0.37c0,0.11,0,0.26,0.03,0.37C14.14,10.34,14.2,10.45,14.23,10.56z"/>
                            <path class="st0" d="M18.2,21.04h-0.66v-7.01c0-0.4-0.31-0.74-0.74-0.74h-3c-0.4,0-0.74,0.31-0.74,0.74v1.54
								c0,0.4,0.31,0.74,0.74,0.74h0.6v4.75h-0.6c-0.4,0-0.74,0.31-0.74,0.74v1.54c0,0.4,0.31,0.74,0.74,0.74h4.41
								c0.4,0,0.74-0.31,0.74-0.74V21.8C18.95,21.38,18.6,21.04,18.2,21.04z"/>
                            <path class="st0" d="M16,0.1C7.23,0.1,0.1,7.23,0.1,16c0,8.77,7.13,15.9,15.9,15.9c8.77,0,15.9-7.13,15.9-15.9
								C31.9,7.23,24.77,0.1,16,0.1z M16,29.34C8.64,29.34,2.66,23.36,2.66,16S8.64,2.66,16,2.66S29.34,8.64,29.34,16
								S23.36,29.34,16,29.34z"/>
						</g>
						</svg>
                            <span class="left-menu-title">Eureka Approach</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link  to="/home" class="nav-link">


                            <svg version="1.1" class="left-menu-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve" data-toggle="tooltip" data-placement="right"   data-original-title="Settings">
						<g>
							<path d="M30.64,14.01l-0.7-0.29c0.09-0.8,0.09-1.61,0-2.41l0.7-0.29c0.49-0.2,0.88-0.59,1.08-1.08c0.2-0.49,0.2-1.03,0-1.53
								l-0.64-1.55c-0.2-0.49-0.59-0.88-1.08-1.08c-0.49-0.2-1.04-0.2-1.53,0l-0.7,0.29c-0.5-0.63-1.07-1.2-1.7-1.7l0.29-0.7
								c0.2-0.49,0.2-1.03,0-1.53c-0.2-0.49-0.59-0.88-1.08-1.08l-1.55-0.65c-0.5-0.2-1.04-0.2-1.53,0c-0.49,0.2-0.88,0.59-1.08,1.08
								l-0.29,0.7c-0.8-0.09-1.61-0.09-2.41,0l-0.29-0.7c-0.2-0.49-0.59-0.88-1.08-1.08c-0.49-0.2-1.03-0.2-1.53,0l-1.55,0.64
								c-0.49,0.2-0.88,0.59-1.08,1.08c-0.21,0.49-0.21,1.04,0,1.53l0.29,0.7c-0.62,0.49-1.2,1.06-1.7,1.7l-0.7-0.29
								c-0.49-0.2-1.03-0.2-1.53,0c-0.49,0.2-0.88,0.59-1.08,1.08L7.54,8.41c-0.2,0.49-0.2,1.04,0,1.53c0.2,0.49,0.59,0.88,1.08,1.08
								l1.42,0.59c0.25,0.1,0.52,0.1,0.77,0c0.24-0.1,0.44-0.3,0.54-0.54c0.1-0.25,0.1-0.52,0-0.77c-0.1-0.25-0.3-0.44-0.54-0.54
								L9.38,9.17l0.64-1.55l1.42,0.59c0.44,0.18,0.95,0.03,1.21-0.37c0.61-0.92,1.39-1.69,2.31-2.31c0.4-0.27,0.56-0.78,0.37-1.21
								L14.75,2.9l1.55-0.64l0.59,1.42c0.18,0.45,0.66,0.7,1.12,0.6c1.06-0.22,2.16-0.22,3.26,0c0.46,0.09,0.94-0.16,1.12-0.6l0.58-1.42
								l1.55,0.64l-0.59,1.42c-0.18,0.44-0.03,0.95,0.37,1.21c0.92,0.61,1.7,1.39,2.31,2.31c0.27,0.4,0.78,0.55,1.21,0.37l1.42-0.59
								l0.64,1.55l-1.42,0.59c-0.45,0.18-0.69,0.64-0.6,1.12c0.21,1.06,0.21,2.16,0,3.26c-0.09,0.47,0.16,0.94,0.6,1.12l1.42,0.58
								l-0.64,1.55l-1.43-0.59c-0.44-0.18-0.95-0.02-1.21,0.37c-0.61,0.92-1.39,1.69-2.31,2.31c-0.4,0.27-0.55,0.78-0.37,1.21l0.59,1.42
								l-1.55,0.64l-0.59-1.42c-0.1-0.25-0.3-0.44-0.54-0.55c-0.25-0.1-0.52-0.1-0.76,0c-0.25,0.1-0.44,0.3-0.55,0.55
								c-0.1,0.25-0.1,0.52,0,0.76l0.59,1.42c0.21,0.5,0.59,0.88,1.09,1.08c0.25,0.1,0.51,0.15,0.76,0.15c0.26,0,0.52-0.05,0.76-0.16
								l1.55-0.64c0.49-0.21,0.88-0.59,1.08-1.08c0.2-0.49,0.2-1.04,0-1.53l-0.29-0.7c0.62-0.49,1.19-1.06,1.7-1.7l0.7,0.29
								c1.02,0.42,2.19-0.06,2.61-1.08l0.65-1.55c0.2-0.49,0.2-1.04,0-1.53C31.52,14.59,31.13,14.21,30.64,14.01z"/>
                            <path d="M25.1,12.47c-0.02-2.99-2.47-5.43-5.51-5.43c-1.46,0.01-2.83,0.59-3.86,1.63c-1.02,1.04-1.58,2.41-1.58,3.88
								c0,0.55,0.45,1,1.01,1c0.27,0,0.52-0.11,0.71-0.3c0.19-0.19,0.29-0.45,0.29-0.71c-0.01-0.93,0.35-1.8,1-2.46
								c0.65-0.66,1.52-1.03,2.47-1.03c1.9,0,3.45,1.54,3.47,3.44c0.01,1.91-1.53,3.48-3.44,3.49c-0.27,0-0.52,0.11-0.71,0.3
								c-0.19,0.19-0.29,0.45-0.29,0.71c0,0.55,0.45,1,1.01,1c1.46-0.01,2.83-0.59,3.86-1.63C24.55,15.31,25.11,13.93,25.1,12.47z"/>
                            <path d="M17.49,19.85h-0.34c-0.14-0.45-0.32-0.88-0.54-1.29l0.24-0.24c0.33-0.33,0.51-0.76,0.51-1.22c0-0.47-0.18-0.9-0.51-1.22
								l-0.86-0.86c-0.66-0.66-1.81-0.65-2.44,0l-0.24,0.24c-0.41-0.22-0.84-0.4-1.29-0.54v-0.35c0-0.95-0.78-1.73-1.73-1.73H9.06
								c-0.95,0-1.73,0.78-1.73,1.73v0.35c-0.45,0.14-0.88,0.32-1.29,0.54l-0.24-0.24c-0.66-0.66-1.81-0.65-2.44,0l-0.86,0.86
								c-0.32,0.32-0.5,0.76-0.5,1.22c0,0.46,0.18,0.9,0.5,1.22l0.24,0.24c-0.22,0.41-0.4,0.84-0.54,1.29H1.85
								c-0.95,0-1.73,0.78-1.73,1.73v1.22c0,0.95,0.78,1.73,1.73,1.73H2.2c0.14,0.45,0.32,0.88,0.54,1.29l-0.24,0.24
								c-0.32,0.32-0.5,0.76-0.5,1.22s0.18,0.9,0.5,1.22l0.86,0.86c0.66,0.66,1.81,0.65,2.44,0l0.24-0.24c0.41,0.22,0.84,0.4,1.29,0.54
								v0.35c0.01,0.95,0.78,1.73,1.73,1.73h1.22c0.95,0,1.73-0.78,1.73-1.73v-0.35c0.45-0.14,0.88-0.32,1.29-0.54l0.24,0.24
								c0.66,0.66,1.81,0.65,2.44,0l0.86-0.86c0.33-0.33,0.51-0.76,0.51-1.22c0-0.47-0.18-0.9-0.51-1.22l-0.24-0.24
								c0.22-0.41,0.4-0.84,0.54-1.29h0.34c0.95,0,1.73-0.78,1.73-1.73v-1.22C19.22,20.63,18.44,19.85,17.49,19.85z M15.39,23.35
								c-0.15,0.76-0.44,1.46-0.87,2.09c-0.26,0.4-0.21,0.93,0.12,1.26l0.6,0.59l-0.47,0.47l-0.6-0.6c-0.34-0.34-0.87-0.39-1.27-0.12
								c-0.63,0.43-1.34,0.72-2.09,0.87c-0.47,0.09-0.81,0.5-0.81,0.98v0.85H9.34V28.9c0-0.48-0.34-0.89-0.8-0.98
								c-0.77-0.17-1.47-0.46-2.1-0.88c-0.4-0.26-0.94-0.2-1.26,0.12l-0.6,0.59l-0.47-0.47l0.6-0.6c0.34-0.34,0.39-0.88,0.12-1.26
								c-0.43-0.63-0.72-1.34-0.87-2.09c-0.09-0.47-0.5-0.81-0.98-0.81H2.13v-0.67h0.85c0.48,0,0.89-0.34,0.98-0.81
								c0.15-0.75,0.44-1.46,0.87-2.09c0.27-0.4,0.21-0.93-0.12-1.26l-0.6-0.59l0.47-0.47l0.6,0.61c0.34,0.34,0.88,0.39,1.27,0.12
								c0.63-0.43,1.34-0.72,2.09-0.87c0.47-0.09,0.81-0.5,0.81-0.98v-0.85h0.67v0.85c0,0.48,0.34,0.89,0.81,0.98
								c0.75,0.15,1.46,0.44,2.09,0.87c0.4,0.26,0.93,0.21,1.26-0.12l0.6-0.6l0.47,0.47l-0.6,0.6c-0.34,0.34-0.39,0.88-0.12,1.26
								c0.43,0.63,0.72,1.34,0.87,2.09c0.09,0.47,0.5,0.81,0.98,0.81h0.85v0.67h-0.85C15.9,22.54,15.48,22.88,15.39,23.35z"/>
                            <path d="M9.67,18.1c-2.25,0-4.09,1.84-4.09,4.1c0,2.26,1.84,4.09,4.1,4.09c2.25,0,4.09-1.84,4.09-4.09
								C13.76,19.94,11.93,18.1,9.67,18.1z M11.77,22.2c0,1.15-0.94,2.09-2.09,2.09s-2.09-0.94-2.09-2.09s0.94-2.09,2.09-2.09
								S11.77,21.05,11.77,22.2z"/>
						</g>
						</svg>
                        </router-link>
                    </li>

                </ul>


            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "LeftSideBar"
    }
</script>

<style scoped>

</style>
