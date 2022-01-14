<?php
$user = App\Models\User::find(Auth::user()->id);

$total=count($user->unreadNotifications);

?>

<div class="dropdown">
    <!--begin::Toggle-->
    <div class="topbar-item mr-3" data-toggle="dropdown" data-offset="10px,0px">
        <div class="btn btn-icon btn-clean btn-dropdown btn-lg pulse pulse-primary">
											<span class="svg-icon svg-icon-xl">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3" />
														<path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000" />
													</g>
												</svg>
                                                <strong><sup class="text-info" style="font-size:100% !important;">{{$total}}</sup></strong>
                                                <!--end::Svg Icon-->
											</span>
            <span class="pulse-ring"></span>
        </div>
    </div>
    <!--end::Toggle-->
    <!--begin::Dropdown-->
    <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">

            <!--begin::Header-->
            <div class="d-flex flex-column pt-12 bgi-size-cover bgi-no-repeat rounded-top" style="background-image:url({{asset('assets/media/misc/bg-1.jpg')}})">
                <!--begin::Title-->
                <h4 class="d-flex flex-center rounded-top">
                    <span class="text-white">User Notifications</span>
                    <span class="btn btn-text btn-success btn-sm font-weight-bold btn-font-md ml-2">{{$total}} new</span>
                </h4>
                <!--end::Title-->
                <!--begin::Tabs-->
                <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-line-transparent-white nav-tabs-line-active-border-success mt-3 px-8" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active show" data-toggle="tab" href="#topbar_notifications_notifications">Alerts</a>
                    </li>

                </ul>
                <!--end::Tabs-->
            </div>
            <!--end::Header-->
            <!--begin::Content-->
            <div class="tab-content">
                <!--begin::Tabpane-->
                <div class="tab-pane active show p-8" id="topbar_notifications_notifications" role="tabpanel">
                    <!--begin::Scroll-->
                    <div class="scroll pr-7 mr-n7" data-scroll="true" data-height="300" data-mobile-height="200">
                        @if($total > 0)
                        @foreach ($user->unreadNotifications as $notification)



                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40 symbol-light-info mr-5">
																<span class="symbol-label">
																	<span class="svg-icon svg-icon-lg svg-icon-info">
																		<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Shield-user.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3" />
																				<path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3" />
																				<path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3" />
																			</g>
																		</svg>
                                                                        <!--end::Svg Icon-->
																	</span>
																</span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Text-->
                            <div class="d-flex flex-column font-weight-bold">

                                @if($notification->data['type'] == 'toolbox')

                                    <a href="{{url('toolbox-talk')}}" class="text-dark text-hover-primary mb-1 font-size-lg">New Document Received In Toolbox Talk</a>


                                    @elseif($notification->data['type'] == 'etc')
                                <a href="{{route('all.notifi')}}" class="text-dark text-hover-primary mb-1 font-size-lg">{{$notification->data['Manager_name']}} Invites You For Course</a>
                                <span class="text-muted">Course Name: @if(course_byid($notification->data['c_id']) != ''){{course_byid($notification->data['c_id'])->name}}
                                    <form action="{{route('accept.invitaion')}}" method="post" >
                                @csrf
                                <input type="hidden" name="c_id" value="{{$notification->data['c_id']}}">
                                <input type="hidden" name="noti_id" value="{{$notification->id}}">
                               <button type="submit" name="accept" value="yes" class="btn btn-text btn-success btn-sm font-weight-bold btn-font-md ml-2">Accept</button> <button type="submit" name="decline" value="yes" class="btn btn-text btn-danger btn-sm font-weight-bold btn-font-md ml-2">Decline</button>
                             </form>
                                    @endif
                                    @endif
                                </span>
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                            @endforeach
                            @endif
                    </div>

                    <!--end::Scroll-->
                    <!--begin::Action-->
                    <div class="d-flex flex-center pt-7">
{{--                        <a href="{{route('all.notifi')}}" class="btn btn-light-primary font-weight-bold text-center">See All</a>--}}
                    </div>
                    <!--end::Action-->
                </div>
                <!--end::Tabpane-->

            </div>
            <!--end::Content-->

    </div>
    <!--end::Dropdown-->
</div>
