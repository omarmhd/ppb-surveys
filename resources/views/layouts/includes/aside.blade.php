<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Brand-->
    <div class="aside-logo flex-column-auto" id="kt_aside_logo">
        <!--begin::Logo-->
        <a href="">
            <img alt="Logo" src="{{asset("images/logo.png")}}" class="h-40px logo" />
        </a>
        <!--end::Logo-->
        <!--begin::Aside toggler-->
        <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
            <!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-double-left.svg-->
            <span class="svg-icon svg-icon-1 rotate-180">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24" />
										<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
										<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.5" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
									</g>
								</svg>
							</span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Aside toggler-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid">
        <!--begin::Aside Menu-->
        <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
            <!--begin::Menu-->
            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">


                @canany(['administrator','hr'])
                <div class="menu-item">
                    <a class="menu-link" href="{{route('dashboard')}}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotone/Design/PenAndRuller.svg-->
                                            <i class="fa fa-home"></i>

                                            <!--end::Svg Icon-->
										</span>
                        <span class="menu-title">الرئيسية</span>
                    </a>
                </div>
                <div class="menu-item">
                    <div class="menu-content pt-8 pb-2">
                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">المستخدمين</span>
                    </div>
                </div>
                <div class="menu-item">
                    <a class="menu-link" href="{{route('users.index')}}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotone/Design/PenAndRuller.svg-->
										  <i class="fa fa-user"></i>
                                            <!--end::Svg Icon-->
										</span>
                        <span class="menu-title">إدارة المستخدمين</span>
                    </a>
                </div>
                <div class="menu-item">
                    <div class="menu-content pt-8 pb-2">
                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">النماذج </span>
                    </div>
                </div>
                <div class="menu-item">
                    <a class="menu-link" href="{{route('sections.index')}}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotone/Design/PenAndRuller.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
													<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
												</svg>
											</span>
                                            <!--end::Svg Icon-->
										</span>
                        <span class="menu-title">الأقسام والأسئلة</span>
                    </a>
                </div>

                    <div class="menu-item">
                        <a class="menu-link" href="{{route('surveys.index')}}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotone/Design/PenAndRuller.svg-->

                                            <i class="fa fa-poll"></i>

                                            <!--end::Svg Icon-->
										</span>
                            <span class="menu-title">نماذج</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="{{route('activated-surveys.create')}}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotone/Design/PenAndRuller.svg-->
                                            <i class="fa fa-toggle-on"></i>

                                            <!--end::Svg Icon-->
										</span>
                            <span class="menu-title">تفعيل نموذج</span>
                        </a>
                    </div>

                    <div data-kt-menu-trigger="click" class="menu-item  menu-accordion">
                        <div class="menu-item">
                            <div class="menu-content pt-8 pb-2">
                                <span class="menu-section text-muted text-uppercase fs-8 ls-1">قسم التقيمات</span>
                            </div>
                        </div>
                        <span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotone/Code/Compiling.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3"></path>
													<path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000"></path>
												</svg>
											</span>
                                            <!--end::Svg Icon-->
										</span>
										<span class="menu-title">التقيمات</span>
										<span class="menu-arrow"></span>
									</span>
                        <div class="menu-sub menu-sub-accordion menu-active-bg" kt-hidden-height="624" style="display: none; overflow: hidden;">
                            <div  class="menu-item">
                                <a class="menu-link" href="{{route('activated-surveys.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                    <span class="menu-title">جميع التقيمات</span>

                                </a>

                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="{{route('activated-surveys.newIndex')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                    <span class="menu-title">التقيمات المطلوبة</span>

                                </a>

                            </div>

                            <div class="menu-item">
                                <a class="menu-link" href="{{route('activated-surveys.evaluatedIndex')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                    <span class="menu-title">التقيمات المسلمة</span>

                                </a>

                            </div>

                            <div class="menu-item">
                                <a class="menu-link" href="{{route('activated-surveys.needApprovalIndex')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                    <span class="menu-title">تقيمات بحاجة للإعتماد</span>

                                </a>

                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="{{route('activated-surveys.approvalIndex')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                    <span class="menu-title">التقيمات المعتمدة</span>

                                </a>

                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="{{route('activated-surveys.returnIndex')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                    <span class="menu-title">المعاد تقيمها</span>

                                </a>

                            </div>


                        </div>
                    </div>
                    <div class="menu-item">
                            <a class="menu-link" href="{{route('showMyEvaluation')}}">
           			<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotone/Code/Compiling.svg-->
											<span class="svg-icon svg-icon-2">

                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="256" height="256" viewBox="0 0 256 256" xml:space="preserve" style="color: red">


<g style="color:red;stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
    <path d="M 52.864 31.272 c -0.159 0 -0.319 -0.038 -0.466 -0.115 L 45 27.268 l -7.399 3.89 c -0.336 0.176 -0.745 0.148 -1.053 -0.076 c -0.308 -0.224 -0.462 -0.603 -0.398 -0.978 l 1.413 -8.239 l -5.986 -5.835 c -0.272 -0.266 -0.371 -0.663 -0.253 -1.025 s 0.431 -0.626 0.807 -0.681 l 8.273 -1.202 l 3.699 -7.496 c 0.337 -0.683 1.457 -0.683 1.793 0 l 3.7 7.496 l 8.272 1.202 c 0.377 0.055 0.689 0.319 0.808 0.681 c 0.117 0.362 0.02 0.759 -0.253 1.025 l -5.987 5.835 l 1.413 8.239 c 0.064 0.375 -0.09 0.754 -0.397 0.978 C 53.277 31.208 53.071 31.272 52.864 31.272 z M 34.424 16.011 l 4.912 4.788 c 0.235 0.23 0.343 0.561 0.288 0.885 l -1.16 6.76 l 6.071 -3.192 c 0.291 -0.153 0.64 -0.153 0.931 0 l 6.071 3.192 l -1.159 -6.76 c -0.056 -0.324 0.052 -0.655 0.287 -0.885 l 4.912 -4.788 l -6.787 -0.986 c -0.326 -0.047 -0.607 -0.252 -0.753 -0.547 L 45 8.327 l -3.035 6.15 c -0.146 0.295 -0.427 0.5 -0.753 0.547 L 34.424 16.011 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(73,75,116); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
    <path d="M 58.391 51.846 h -0.325 c -0.871 0 -1.683 0.257 -2.364 0.699 c -0.154 -2.261 -2.044 -4.053 -4.344 -4.053 h -0.325 c -0.936 0 -1.804 0.297 -2.514 0.801 c -0.514 -1.833 -2.199 -3.181 -4.194 -3.181 h -0.325 c -0.867 0 -1.675 0.255 -2.354 0.692 v -7.644 c 0 -2.401 -1.953 -4.354 -4.354 -4.354 h -0.325 c -2.401 0 -4.354 1.953 -4.354 4.354 v 17.888 l -2.368 1.796 c -1.644 1.249 -2.686 3.064 -2.934 5.113 s 0.33 4.06 1.627 5.663 l 6.928 8.565 v 3.517 c 0 1.78 1.449 3.229 3.229 3.229 h 17.042 c 1.78 0 3.229 -1.449 3.229 -3.229 l 0.001 -3.345 c 2.181 -2.683 3.377 -6.034 3.377 -9.48 V 56.2 C 62.745 53.799 60.792 51.846 58.391 51.846 z M 60.745 68.878 c 0 3.095 -1.114 6.102 -3.138 8.467 c -0.155 0.182 -0.24 0.412 -0.24 0.65 v 3.708 c 0 0.678 -0.552 1.229 -1.229 1.229 H 39.095 c -0.678 0 -1.229 -0.552 -1.229 -1.229 v -3.87 c 0 -0.229 -0.079 -0.451 -0.223 -0.629 l -7.151 -8.841 c -0.954 -1.18 -1.379 -2.658 -1.197 -4.164 c 0.183 -1.508 0.949 -2.843 2.158 -3.761 l 1.158 -0.879 v 4.918 c 0 0.553 0.448 1 1 1 s 1 -0.447 1 -1 v -6.924 c 0 -0.006 0 -0.013 0 -0.02 V 39.161 c 0 -1.298 1.056 -2.354 2.354 -2.354 h 0.325 c 1.298 0 2.354 1.056 2.354 2.354 v 11.305 c 0 0 0 0 0 0 s 0 0 0 0 l 0.007 9.403 c 0 0.552 0.448 0.999 1 0.999 c 0 0 0 0 0.001 0 c 0.552 0 1 -0.448 0.999 -1.001 l -0.007 -9.402 c 0 -1.298 1.056 -2.354 2.354 -2.354 h 0.325 c 1.298 0 2.354 1.056 2.354 2.354 v 2.38 c 0 0 0 0 0 0 s 0 0 0 0 l 0.007 7.023 c 0.001 0.552 0.448 0.999 1 0.999 h 0.001 c 0.553 -0.001 1 -0.448 0.999 -1.001 l -0.007 -7.022 c 0 -1.298 1.056 -2.354 2.354 -2.354 h 0.325 c 1.298 0 2.354 1.056 2.354 2.354 v 3.046 c -0.002 0.025 -0.015 0.047 -0.015 0.073 l 0.007 3.906 c 0.001 0.552 0.448 0.998 1 0.998 c 0.001 0 0.001 0 0.002 0 c 0.552 -0.001 0.999 -0.449 0.998 -1.002 l -0.006 -3.597 c 0.002 -0.024 0.014 -0.045 0.014 -0.07 c 0 -1.298 1.056 -2.354 2.354 -2.354 h 0.325 c 1.298 0 2.354 1.057 2.354 2.354 V 68.878 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(73,75,116); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
    <path d="M 68.41 31.272 c -0.207 0 -0.413 -0.064 -0.588 -0.191 c -0.308 -0.224 -0.462 -0.603 -0.397 -0.978 l 1.413 -8.239 l -5.986 -5.835 c -0.272 -0.266 -0.37 -0.663 -0.253 -1.025 c 0.118 -0.362 0.431 -0.626 0.808 -0.681 l 8.272 -1.202 l 3.699 -7.496 c 0.336 -0.683 1.457 -0.683 1.793 0 l 3.7 7.496 l 8.272 1.202 c 0.377 0.055 0.689 0.319 0.808 0.681 c 0.117 0.362 0.02 0.759 -0.253 1.025 l -5.986 5.835 l 1.413 8.239 c 0.064 0.375 -0.09 0.754 -0.397 0.978 c -0.308 0.224 -0.718 0.252 -1.053 0.076 l -7.4 -3.89 l -7.398 3.89 C 68.729 31.234 68.569 31.272 68.41 31.272 z M 76.274 25.138 c 0.16 0 0.319 0.038 0.465 0.115 l 6.072 3.192 l -1.159 -6.76 c -0.056 -0.324 0.052 -0.655 0.287 -0.885 l 4.912 -4.788 l -6.788 -0.986 c -0.326 -0.047 -0.607 -0.252 -0.753 -0.547 l -3.036 -6.15 l -3.035 6.15 c -0.146 0.295 -0.427 0.5 -0.753 0.547 l -6.788 0.986 l 4.912 4.788 c 0.235 0.23 0.343 0.561 0.287 0.885 l -1.159 6.76 l 6.07 -3.192 C 75.955 25.176 76.114 25.138 76.274 25.138 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(73,75,116); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
    <path d="M 5.861 31.272 c -0.207 0 -0.414 -0.064 -0.588 -0.191 c -0.308 -0.224 -0.462 -0.603 -0.398 -0.978 l 1.413 -8.239 l -5.986 -5.835 c -0.272 -0.266 -0.371 -0.663 -0.253 -1.025 c 0.118 -0.362 0.431 -0.626 0.807 -0.681 l 8.273 -1.202 l 3.699 -7.496 c 0.337 -0.683 1.457 -0.683 1.793 0 l 3.7 7.496 l 8.273 1.202 c 0.376 0.055 0.689 0.319 0.807 0.681 c 0.118 0.362 0.02 0.759 -0.253 1.025 l -5.986 5.835 l 1.413 8.239 c 0.064 0.375 -0.09 0.754 -0.398 0.978 c -0.308 0.224 -0.715 0.252 -1.053 0.076 l -7.399 -3.89 l -7.399 3.89 C 6.18 31.234 6.02 31.272 5.861 31.272 z M 13.725 25.138 c 0.16 0 0.32 0.038 0.465 0.115 l 6.071 3.192 l -1.16 -6.76 c -0.055 -0.324 0.052 -0.655 0.288 -0.885 l 4.912 -4.788 l -6.788 -0.986 c -0.326 -0.047 -0.607 -0.252 -0.752 -0.547 l -3.036 -6.15 l -3.035 6.15 c -0.146 0.295 -0.427 0.5 -0.753 0.547 l -6.788 0.986 l 4.912 4.788 c 0.235 0.23 0.343 0.561 0.288 0.885 l -1.16 6.76 l 6.071 -3.192 C 13.405 25.176 13.565 25.138 13.725 25.138 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(73,75,116); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
</g>
</svg>
                            </span>
                    </span>


                                <span class="menu-title">تقيماتي</span>
                                      </a>
                        {{--                        <span class="badge bg-danger py-2 px-3">--}}
                        {{--                           3--}}
                        {{--                        </span>--}}
                        </a>
                    </div>

{{--                    <div class="menu-item">--}}
{{--                        <a class="menu-link" href="{{route('activated-surveys.index')}}">--}}
{{--										<span class="menu-icon">--}}
{{--											<!--begin::Svg Icon | path: icons/duotone/Design/PenAndRuller.svg-->--}}
{{--                                            <i class="fa fa-check"></i>--}}

{{--                                            <!--end::Svg Icon-->--}}
{{--										</span>--}}
{{--                            <span class="menu-title">النماذج المفعلة </span>--}}
{{--                        </a>--}}
{{--                    </div>--}}

                @endcan

                    @canany(['evaluator','query'])

                    <div data-kt-menu-trigger="click" class="menu-item  menu-accordion">
                        <div class="menu-item">
                            <div class="menu-content pt-8 pb-2">
                                <span class="menu-section text-muted text-uppercase fs-8 ls-1">قسم التقيمات</span>
                            </div>
                        </div>
									<span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotone/Code/Compiling.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3"></path>
													<path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000"></path>
												</svg>
											</span>
                                            <!--end::Svg Icon-->
										</span>
										<span class="menu-title">التقيمات</span>
										<span class="menu-arrow"></span>
									</span>
                        <div class="menu-sub menu-sub-accordion menu-active-bg" kt-hidden-height="624" style="display: none; overflow: hidden;">
                            <div  class="menu-item">
											<a class="menu-link" href="{{route('activated-surveys.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">جميع التقيمات</span>

											</a>

                            </div>
                            <div class="menu-item">
											<a class="menu-link" href="{{route('activated-surveys.newIndex')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">التقيمات المطلوبة</span>

											</a>

                            </div>

                            <div class="menu-item">
											<a class="menu-link" href="{{route('activated-surveys.evaluatedIndex')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">التقيمات المسلمة</span>

											</a>

                            </div>
                            <div class="menu-item">
											<a class="menu-link" href="{{route('activated-surveys.approvalIndex')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">التقيمات المعتمدة</span>

											</a>

                            </div>
                            <div class="menu-item">
											<a class="menu-link" href="{{route('activated-surveys.returnIndex')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">المعاد تقيمها</span>

											</a>

                            </div>


                        </div>
                    </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{route('showMyEvaluation')}}">
           			<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotone/Code/Compiling.svg-->
											<span class="svg-icon svg-icon-2">

                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="256" height="256" viewBox="0 0 256 256" xml:space="preserve" style="color: red">


<g style="color:red;stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
    <path d="M 52.864 31.272 c -0.159 0 -0.319 -0.038 -0.466 -0.115 L 45 27.268 l -7.399 3.89 c -0.336 0.176 -0.745 0.148 -1.053 -0.076 c -0.308 -0.224 -0.462 -0.603 -0.398 -0.978 l 1.413 -8.239 l -5.986 -5.835 c -0.272 -0.266 -0.371 -0.663 -0.253 -1.025 s 0.431 -0.626 0.807 -0.681 l 8.273 -1.202 l 3.699 -7.496 c 0.337 -0.683 1.457 -0.683 1.793 0 l 3.7 7.496 l 8.272 1.202 c 0.377 0.055 0.689 0.319 0.808 0.681 c 0.117 0.362 0.02 0.759 -0.253 1.025 l -5.987 5.835 l 1.413 8.239 c 0.064 0.375 -0.09 0.754 -0.397 0.978 C 53.277 31.208 53.071 31.272 52.864 31.272 z M 34.424 16.011 l 4.912 4.788 c 0.235 0.23 0.343 0.561 0.288 0.885 l -1.16 6.76 l 6.071 -3.192 c 0.291 -0.153 0.64 -0.153 0.931 0 l 6.071 3.192 l -1.159 -6.76 c -0.056 -0.324 0.052 -0.655 0.287 -0.885 l 4.912 -4.788 l -6.787 -0.986 c -0.326 -0.047 -0.607 -0.252 -0.753 -0.547 L 45 8.327 l -3.035 6.15 c -0.146 0.295 -0.427 0.5 -0.753 0.547 L 34.424 16.011 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(245,245,245); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
    <path d="M 58.391 51.846 h -0.325 c -0.871 0 -1.683 0.257 -2.364 0.699 c -0.154 -2.261 -2.044 -4.053 -4.344 -4.053 h -0.325 c -0.936 0 -1.804 0.297 -2.514 0.801 c -0.514 -1.833 -2.199 -3.181 -4.194 -3.181 h -0.325 c -0.867 0 -1.675 0.255 -2.354 0.692 v -7.644 c 0 -2.401 -1.953 -4.354 -4.354 -4.354 h -0.325 c -2.401 0 -4.354 1.953 -4.354 4.354 v 17.888 l -2.368 1.796 c -1.644 1.249 -2.686 3.064 -2.934 5.113 s 0.33 4.06 1.627 5.663 l 6.928 8.565 v 3.517 c 0 1.78 1.449 3.229 3.229 3.229 h 17.042 c 1.78 0 3.229 -1.449 3.229 -3.229 l 0.001 -3.345 c 2.181 -2.683 3.377 -6.034 3.377 -9.48 V 56.2 C 62.745 53.799 60.792 51.846 58.391 51.846 z M 60.745 68.878 c 0 3.095 -1.114 6.102 -3.138 8.467 c -0.155 0.182 -0.24 0.412 -0.24 0.65 v 3.708 c 0 0.678 -0.552 1.229 -1.229 1.229 H 39.095 c -0.678 0 -1.229 -0.552 -1.229 -1.229 v -3.87 c 0 -0.229 -0.079 -0.451 -0.223 -0.629 l -7.151 -8.841 c -0.954 -1.18 -1.379 -2.658 -1.197 -4.164 c 0.183 -1.508 0.949 -2.843 2.158 -3.761 l 1.158 -0.879 v 4.918 c 0 0.553 0.448 1 1 1 s 1 -0.447 1 -1 v -6.924 c 0 -0.006 0 -0.013 0 -0.02 V 39.161 c 0 -1.298 1.056 -2.354 2.354 -2.354 h 0.325 c 1.298 0 2.354 1.056 2.354 2.354 v 11.305 c 0 0 0 0 0 0 s 0 0 0 0 l 0.007 9.403 c 0 0.552 0.448 0.999 1 0.999 c 0 0 0 0 0.001 0 c 0.552 0 1 -0.448 0.999 -1.001 l -0.007 -9.402 c 0 -1.298 1.056 -2.354 2.354 -2.354 h 0.325 c 1.298 0 2.354 1.056 2.354 2.354 v 2.38 c 0 0 0 0 0 0 s 0 0 0 0 l 0.007 7.023 c 0.001 0.552 0.448 0.999 1 0.999 h 0.001 c 0.553 -0.001 1 -0.448 0.999 -1.001 l -0.007 -7.022 c 0 -1.298 1.056 -2.354 2.354 -2.354 h 0.325 c 1.298 0 2.354 1.056 2.354 2.354 v 3.046 c -0.002 0.025 -0.015 0.047 -0.015 0.073 l 0.007 3.906 c 0.001 0.552 0.448 0.998 1 0.998 c 0.001 0 0.001 0 0.002 0 c 0.552 -0.001 0.999 -0.449 0.998 -1.002 l -0.006 -3.597 c 0.002 -0.024 0.014 -0.045 0.014 -0.07 c 0 -1.298 1.056 -2.354 2.354 -2.354 h 0.325 c 1.298 0 2.354 1.057 2.354 2.354 V 68.878 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
    <path d="M 68.41 31.272 c -0.207 0 -0.413 -0.064 -0.588 -0.191 c -0.308 -0.224 -0.462 -0.603 -0.397 -0.978 l 1.413 -8.239 l -5.986 -5.835 c -0.272 -0.266 -0.37 -0.663 -0.253 -1.025 c 0.118 -0.362 0.431 -0.626 0.808 -0.681 l 8.272 -1.202 l 3.699 -7.496 c 0.336 -0.683 1.457 -0.683 1.793 0 l 3.7 7.496 l 8.272 1.202 c 0.377 0.055 0.689 0.319 0.808 0.681 c 0.117 0.362 0.02 0.759 -0.253 1.025 l -5.986 5.835 l 1.413 8.239 c 0.064 0.375 -0.09 0.754 -0.397 0.978 c -0.308 0.224 -0.718 0.252 -1.053 0.076 l -7.4 -3.89 l -7.398 3.89 C 68.729 31.234 68.569 31.272 68.41 31.272 z M 76.274 25.138 c 0.16 0 0.319 0.038 0.465 0.115 l 6.072 3.192 l -1.159 -6.76 c -0.056 -0.324 0.052 -0.655 0.287 -0.885 l 4.912 -4.788 l -6.788 -0.986 c -0.326 -0.047 -0.607 -0.252 -0.753 -0.547 l -3.036 -6.15 l -3.035 6.15 c -0.146 0.295 -0.427 0.5 -0.753 0.547 l -6.788 0.986 l 4.912 4.788 c 0.235 0.23 0.343 0.561 0.287 0.885 l -1.159 6.76 l 6.07 -3.192 C 75.955 25.176 76.114 25.138 76.274 25.138 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
    <path d="M 5.861 31.272 c -0.207 0 -0.414 -0.064 -0.588 -0.191 c -0.308 -0.224 -0.462 -0.603 -0.398 -0.978 l 1.413 -8.239 l -5.986 -5.835 c -0.272 -0.266 -0.371 -0.663 -0.253 -1.025 c 0.118 -0.362 0.431 -0.626 0.807 -0.681 l 8.273 -1.202 l 3.699 -7.496 c 0.337 -0.683 1.457 -0.683 1.793 0 l 3.7 7.496 l 8.273 1.202 c 0.376 0.055 0.689 0.319 0.807 0.681 c 0.118 0.362 0.02 0.759 -0.253 1.025 l -5.986 5.835 l 1.413 8.239 c 0.064 0.375 -0.09 0.754 -0.398 0.978 c -0.308 0.224 -0.715 0.252 -1.053 0.076 l -7.399 -3.89 l -7.399 3.89 C 6.18 31.234 6.02 31.272 5.861 31.272 z M 13.725 25.138 c 0.16 0 0.32 0.038 0.465 0.115 l 6.071 3.192 l -1.16 -6.76 c -0.055 -0.324 0.052 -0.655 0.288 -0.885 l 4.912 -4.788 l -6.788 -0.986 c -0.326 -0.047 -0.607 -0.252 -0.752 -0.547 l -3.036 -6.15 l -3.035 6.15 c -0.146 0.295 -0.427 0.5 -0.753 0.547 l -6.788 0.986 l 4.912 4.788 c 0.235 0.23 0.343 0.561 0.288 0.885 l -1.16 6.76 l 6.071 -3.192 C 13.405 25.176 13.565 25.138 13.725 25.138 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
</g>
</svg>
                            </span>
                    </span>


                                <span class="menu-title">تقيماتي</span>
                            </a>
                            {{--                        <span class="badge bg-danger py-2 px-3">--}}
                            {{--                           3--}}
                            {{--                        </span>--}}
                            </a>
                        </div>
                    @endcan


                    @can('employee')

                        <div class="menu-item">
                            <a class="menu-link" href="{{route('showMyEvaluation')}}">
           			<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotone/Code/Compiling.svg-->
											<span class="svg-icon svg-icon-2">

                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="256" height="256" viewBox="0 0 256 256" xml:space="preserve" style="color: red">


<g style="color:red;stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
    <path d="M 52.864 31.272 c -0.159 0 -0.319 -0.038 -0.466 -0.115 L 45 27.268 l -7.399 3.89 c -0.336 0.176 -0.745 0.148 -1.053 -0.076 c -0.308 -0.224 -0.462 -0.603 -0.398 -0.978 l 1.413 -8.239 l -5.986 -5.835 c -0.272 -0.266 -0.371 -0.663 -0.253 -1.025 s 0.431 -0.626 0.807 -0.681 l 8.273 -1.202 l 3.699 -7.496 c 0.337 -0.683 1.457 -0.683 1.793 0 l 3.7 7.496 l 8.272 1.202 c 0.377 0.055 0.689 0.319 0.808 0.681 c 0.117 0.362 0.02 0.759 -0.253 1.025 l -5.987 5.835 l 1.413 8.239 c 0.064 0.375 -0.09 0.754 -0.397 0.978 C 53.277 31.208 53.071 31.272 52.864 31.272 z M 34.424 16.011 l 4.912 4.788 c 0.235 0.23 0.343 0.561 0.288 0.885 l -1.16 6.76 l 6.071 -3.192 c 0.291 -0.153 0.64 -0.153 0.931 0 l 6.071 3.192 l -1.159 -6.76 c -0.056 -0.324 0.052 -0.655 0.287 -0.885 l 4.912 -4.788 l -6.787 -0.986 c -0.326 -0.047 -0.607 -0.252 -0.753 -0.547 L 45 8.327 l -3.035 6.15 c -0.146 0.295 -0.427 0.5 -0.753 0.547 L 34.424 16.011 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(245,245,245); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
    <path d="M 58.391 51.846 h -0.325 c -0.871 0 -1.683 0.257 -2.364 0.699 c -0.154 -2.261 -2.044 -4.053 -4.344 -4.053 h -0.325 c -0.936 0 -1.804 0.297 -2.514 0.801 c -0.514 -1.833 -2.199 -3.181 -4.194 -3.181 h -0.325 c -0.867 0 -1.675 0.255 -2.354 0.692 v -7.644 c 0 -2.401 -1.953 -4.354 -4.354 -4.354 h -0.325 c -2.401 0 -4.354 1.953 -4.354 4.354 v 17.888 l -2.368 1.796 c -1.644 1.249 -2.686 3.064 -2.934 5.113 s 0.33 4.06 1.627 5.663 l 6.928 8.565 v 3.517 c 0 1.78 1.449 3.229 3.229 3.229 h 17.042 c 1.78 0 3.229 -1.449 3.229 -3.229 l 0.001 -3.345 c 2.181 -2.683 3.377 -6.034 3.377 -9.48 V 56.2 C 62.745 53.799 60.792 51.846 58.391 51.846 z M 60.745 68.878 c 0 3.095 -1.114 6.102 -3.138 8.467 c -0.155 0.182 -0.24 0.412 -0.24 0.65 v 3.708 c 0 0.678 -0.552 1.229 -1.229 1.229 H 39.095 c -0.678 0 -1.229 -0.552 -1.229 -1.229 v -3.87 c 0 -0.229 -0.079 -0.451 -0.223 -0.629 l -7.151 -8.841 c -0.954 -1.18 -1.379 -2.658 -1.197 -4.164 c 0.183 -1.508 0.949 -2.843 2.158 -3.761 l 1.158 -0.879 v 4.918 c 0 0.553 0.448 1 1 1 s 1 -0.447 1 -1 v -6.924 c 0 -0.006 0 -0.013 0 -0.02 V 39.161 c 0 -1.298 1.056 -2.354 2.354 -2.354 h 0.325 c 1.298 0 2.354 1.056 2.354 2.354 v 11.305 c 0 0 0 0 0 0 s 0 0 0 0 l 0.007 9.403 c 0 0.552 0.448 0.999 1 0.999 c 0 0 0 0 0.001 0 c 0.552 0 1 -0.448 0.999 -1.001 l -0.007 -9.402 c 0 -1.298 1.056 -2.354 2.354 -2.354 h 0.325 c 1.298 0 2.354 1.056 2.354 2.354 v 2.38 c 0 0 0 0 0 0 s 0 0 0 0 l 0.007 7.023 c 0.001 0.552 0.448 0.999 1 0.999 h 0.001 c 0.553 -0.001 1 -0.448 0.999 -1.001 l -0.007 -7.022 c 0 -1.298 1.056 -2.354 2.354 -2.354 h 0.325 c 1.298 0 2.354 1.056 2.354 2.354 v 3.046 c -0.002 0.025 -0.015 0.047 -0.015 0.073 l 0.007 3.906 c 0.001 0.552 0.448 0.998 1 0.998 c 0.001 0 0.001 0 0.002 0 c 0.552 -0.001 0.999 -0.449 0.998 -1.002 l -0.006 -3.597 c 0.002 -0.024 0.014 -0.045 0.014 -0.07 c 0 -1.298 1.056 -2.354 2.354 -2.354 h 0.325 c 1.298 0 2.354 1.057 2.354 2.354 V 68.878 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
    <path d="M 68.41 31.272 c -0.207 0 -0.413 -0.064 -0.588 -0.191 c -0.308 -0.224 -0.462 -0.603 -0.397 -0.978 l 1.413 -8.239 l -5.986 -5.835 c -0.272 -0.266 -0.37 -0.663 -0.253 -1.025 c 0.118 -0.362 0.431 -0.626 0.808 -0.681 l 8.272 -1.202 l 3.699 -7.496 c 0.336 -0.683 1.457 -0.683 1.793 0 l 3.7 7.496 l 8.272 1.202 c 0.377 0.055 0.689 0.319 0.808 0.681 c 0.117 0.362 0.02 0.759 -0.253 1.025 l -5.986 5.835 l 1.413 8.239 c 0.064 0.375 -0.09 0.754 -0.397 0.978 c -0.308 0.224 -0.718 0.252 -1.053 0.076 l -7.4 -3.89 l -7.398 3.89 C 68.729 31.234 68.569 31.272 68.41 31.272 z M 76.274 25.138 c 0.16 0 0.319 0.038 0.465 0.115 l 6.072 3.192 l -1.159 -6.76 c -0.056 -0.324 0.052 -0.655 0.287 -0.885 l 4.912 -4.788 l -6.788 -0.986 c -0.326 -0.047 -0.607 -0.252 -0.753 -0.547 l -3.036 -6.15 l -3.035 6.15 c -0.146 0.295 -0.427 0.5 -0.753 0.547 l -6.788 0.986 l 4.912 4.788 c 0.235 0.23 0.343 0.561 0.287 0.885 l -1.159 6.76 l 6.07 -3.192 C 75.955 25.176 76.114 25.138 76.274 25.138 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
    <path d="M 5.861 31.272 c -0.207 0 -0.414 -0.064 -0.588 -0.191 c -0.308 -0.224 -0.462 -0.603 -0.398 -0.978 l 1.413 -8.239 l -5.986 -5.835 c -0.272 -0.266 -0.371 -0.663 -0.253 -1.025 c 0.118 -0.362 0.431 -0.626 0.807 -0.681 l 8.273 -1.202 l 3.699 -7.496 c 0.337 -0.683 1.457 -0.683 1.793 0 l 3.7 7.496 l 8.273 1.202 c 0.376 0.055 0.689 0.319 0.807 0.681 c 0.118 0.362 0.02 0.759 -0.253 1.025 l -5.986 5.835 l 1.413 8.239 c 0.064 0.375 -0.09 0.754 -0.398 0.978 c -0.308 0.224 -0.715 0.252 -1.053 0.076 l -7.399 -3.89 l -7.399 3.89 C 6.18 31.234 6.02 31.272 5.861 31.272 z M 13.725 25.138 c 0.16 0 0.32 0.038 0.465 0.115 l 6.071 3.192 l -1.16 -6.76 c -0.055 -0.324 0.052 -0.655 0.288 -0.885 l 4.912 -4.788 l -6.788 -0.986 c -0.326 -0.047 -0.607 -0.252 -0.752 -0.547 l -3.036 -6.15 l -3.035 6.15 c -0.146 0.295 -0.427 0.5 -0.753 0.547 l -6.788 0.986 l 4.912 4.788 c 0.235 0.23 0.343 0.561 0.288 0.885 l -1.16 6.76 l 6.071 -3.192 C 13.405 25.176 13.565 25.138 13.725 25.138 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
</g>
</svg>
                            </span>
                    </span>


                                <span class="menu-title">تقيماتي</span>
                                      </a>
                                {{--                        <span class="badge bg-danger py-2 px-3">--}}
                                {{--                           3--}}
                                {{--                        </span>--}}
                            </a>
                        </div>
                    @endcan


            </div>
            <!--end::Menu-->
        </div>
    </div>
    <!--end::Aside menu-->
    <!--begin::Footer-->
    <div class="aside-footer flex-column-auto pt-5 pb-7 px-5" id="kt_aside_footer">
        <a href="tel:2323232323232" class="btn btn-custom btn-primary w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-delay-show="8000" title="Check out the complete documentation with over 100 components">
            <span class="btn-label">اتصل بدائرة الحاسوب</span>
            <!--begin::Svg Icon | path: icons/duotone/General/Clipboard.svg-->

            <!--end::Svg Icon-->
        </a>
    </div>
    <!--end::Footer-->
</div>
