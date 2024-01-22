<?php
$page=basename($_SERVER['PHP_SELF']);
 
echo "
<div id='kt_aside' class='aside aside-dark aside-hoverable' data-kt-drawer='true'
				data-kt-drawer-name='aside' data-kt-drawer-activate='{default: true, lg: false}'
				data-kt-drawer-overlay='true' data-kt-drawer-width='{default:'200px', '300px': '250px'}'
				data-kt-drawer-direction='start' data-kt-drawer-toggle='#kt_aside_mobile_toggle'>
				<!--begin::Brand-->
				<div class='aside-logo flex-column-auto' id='kt_aside_logo'>
					<!--begin::Logo-->
					<a href='index.php'>
						
						<img src='assets/LOGO/LOGO inverse.png'  class='h-100px logo'>
					</a>
					<!--end::Logo-->

					<!--begin::Aside toggler-->
						<div id='kt_aside_toggle' class='btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle' data-kt-toggle='true' data-kt-toggle-state='active' data-kt-toggle-target='body' data-kt-toggle-name='aside-minimize'>
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
							<span class='svg-icon svg-icon-1 rotate-180'>
								<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none'>
									<path opacity='0.5' d='M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z' fill='black' />
									<path d='M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z' fill='black' />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Aside toggler-->
				</div>
				<!--end::Brand-->
				<!--begin::Aside menu-->
				<div class='aside-menu flex-column-fluid'>
					<!--begin::Aside Menu-->
					<div class='hover-scroll-overlay-y my-5 my-lg-5' id='kt_aside_menu_wrapper' data-kt-scroll='true'
						data-kt-scroll-activate='{default: false, lg: true}' data-kt-scroll-height='auto'
						data-kt-scroll-dependencies='#kt_aside_logo, #kt_aside_footer'
						data-kt-scroll-wrappers='#kt_aside_menu' data-kt-scroll-offset='0'>
						<!--begin::Menu-->
						<div class='menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500'
							id='#kt_aside_menu' data-kt-menu='true' data-kt-menu-expand='false'>
							<div  class='menu-item   menu-accordion'>
							<a class='menu-link "?><?php if($page=='index.php' ){
								echo "active";
							}?><?php echo "' href='Dashboard'>
								<span class='menu-icon'>
									<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
									<span class='svg-icon svg-icon-2'>
										<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24'
											viewBox='0 0 24 24' fill='none'>
											<rect x='2' y='2' width='9' height='9' rx='2' fill='black' />
											<rect opacity='0.3' x='13' y='2' width='9' height='9' rx='2'
												fill='black' />
											<rect opacity='0.3' x='13' y='13' width='9' height='9' rx='2'
												fill='black' />
											<rect opacity='0.3' x='2' y='13' width='9' height='9' rx='2'
												fill='black' />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</span>
								<span class='menu-title'>Dashboard</span>
							</a>

						</div>
							<div  class='menu-item   menu-accordion'>
							<a class='menu-link "?><?php if($page=='slider.php' ||$page=='slideraddedit.php'){
								echo "active";
							}?><?php echo "' href='Slider'>
								<span class='menu-icon'>
									<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
									<span class='svg-icon svg-icon-2'>
										<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24'
											viewBox='0 0 24 24' fill='none'>
											<rect x='2' y='2' width='9' height='9' rx='2' fill='black' />
											<rect opacity='0.3' x='13' y='2' width='9' height='9' rx='2'
												fill='black' />
											<rect opacity='0.3' x='13' y='13' width='9' height='9' rx='2'
												fill='black' />
											<rect opacity='0.3' x='2' y='13' width='9' height='9' rx='2'
												fill='black' />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</span>
								<span class='menu-title'>Slider</span>
							</a>

						</div>
							<div data-kt-menu-trigger='click' class='menu-item   menu-accordion'>
								<span class='menu-link'>
									<span class='menu-icon'>
										<!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil011.svg-->
<span class='svg-icon svg-icon-2'><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none'>
	<path opacity='0.3' d='M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22Z' fill='black'/>
	<g clip-path='url(#clip0_787_1289)'>
	<path d='M9.56133 15.7161C9.72781 15.5251 9.5922 15.227 9.33885 15.227H8.58033C8.57539 15.1519 8.57262 15.0763 8.57262 15C8.57262 13.1101 10.1101 11.5726 12 11.5726C12.7576 11.5726 13.4585 11.8198 14.0265 12.2377C14.2106 12.3731 14.4732 12.3609 14.6216 12.1872L15.1671 11.5491C15.3072 11.3852 15.2931 11.1382 15.1235 11.005C14.2353 10.3077 13.1468 9.92944 12 9.92944C10.6456 9.92944 9.37229 10.4569 8.41458 11.4146C7.4569 12.3723 6.92945 13.6456 6.92945 15C6.92945 15.0759 6.93135 15.1516 6.93465 15.2269H6.29574C6.0424 15.2269 5.90677 15.5251 6.07326 15.7161L7.51455 17.3693L7.81729 17.7166L8.90421 16.4698L9.56133 15.7161Z' fill='black'/>
	<path d='M17.9268 14.7516L16.8518 13.5185L16.1828 12.7511L15.2276 13.8468L14.4388 14.7516C14.2723 14.9426 14.4079 15.2407 14.6612 15.2407H15.4189C15.2949 17.0187 13.809 18.4274 12.0001 18.4274C11.347 18.4274 10.736 18.2437 10.216 17.9253C10.0338 17.8138 9.79309 17.8362 9.6543 17.9985L9.10058 18.6463C8.95391 18.8179 8.97742 19.0782 9.16428 19.2048C9.99513 19.7678 10.9743 20.0706 12.0001 20.0706C13.3545 20.0706 14.6278 19.5432 15.5855 18.5855C16.4863 17.6847 17.0063 16.5047 17.0649 15.2407H17.7043C17.9577 15.2407 18.0933 14.9426 17.9268 14.7516Z' fill='black'/>
	</g>
	<path d='M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z' fill='black'/>
	</svg></span>
	<!--end::Svg Icon-->
									</span>
									<span class='menu-title'>&nbsp;Products</span>
									<span class='menu-arrow'></span>
								</span>
								<div class='menu-sub menu-sub-accordion menu-active-bg'>
									<div class='menu-item'>
									<a class='menu-link "?><?php if($page=='finish.php' ||$page=='finishaddedit.php'){
										echo "active";
									}?><?php echo "' href='Finish'>
											<span class='menu-bullet'>
												<span class='bullet bullet-dot'></span>
											</span>
											<span class='menu-title'> Finish</span>
										</a>
									</div>
									<div class='menu-item'>
										<a class='menu-link "?><?php if($page=='type.php' ||$page=='typeaddedit.php'){
											echo "active";
										}?><?php echo "' href='Type'>
											<span class='menu-bullet'>
												<span class='bullet bullet-dot'></span>
											</span>
											<span class='menu-title'>Type</span>
										</a>
									</div>
									<div class='menu-item'>
										<a class='menu-link "?><?php if($page=='sizeaddedit.php' ||$page=='size.php'){
											echo "active";
										}?><?php echo "' href='Size'>
											<span class='menu-bullet'>
												<span class='bullet bullet-dot'></span>
											</span>
											<span class='menu-title'>Size</span>
										</a>
									</div>
									<div class='menu-item'>
										<a class='menu-link "?><?php if($page=='space.php' ||$page=='spaceaddedit.php'){
											echo "active";
										}?><?php echo "' href='Space'>
											<span class='menu-bullet'>
												<span class='bullet bullet-dot'></span>
											</span>
											<span class='menu-title'>Space</span>
										</a>
									</div>
									<div class='menu-item'>
										<a class='menu-link "?><?php if($page=='look.php' ||$page=='lookaddedit.php'){
											echo "active";
										}?><?php echo "' href='Look'>
											<span class='menu-bullet'>
												<span class='bullet bullet-dot'></span>
											</span>
											<span class='menu-title'>Look</span>
										</a>
									</div>
									<div class='menu-item'>
										<a class='menu-link "?><?php if($page=='product.php' ||$page=='productaddedit.php'){
											echo "active";
										}?><?php echo "' href='Product'>
											<span class='menu-bullet'>
												<span class='bullet bullet-dot'></span>
											</span>
											<span class='menu-title'>Products</span>
										</a>
									</div>

								</div>
							</div>
							<div  class='menu-item  menu-accordion'>
							<form method='post' action='contactaddedit.php'></form>
								<a class='menu-link "?><?php if($page=='catalouge.php' ||$page=='catalougeaddedit.php'){
									echo "active";
								}?><?php echo "' href='Catalouge'>
									<span class='menu-icon'>
										<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
										<span class='svg-icon svg-icon-2'>
											<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24'
												viewBox='0 0 24 24' fill='none'>
												<rect x='2' y='2' width='9' height='9' rx='2' fill='black' />
												<rect opacity='0.3' x='13' y='2' width='9' height='9' rx='2'
													fill='black' />
												<rect opacity='0.3' x='13' y='13' width='9' height='9' rx='2'
													fill='black' />
												<rect opacity='0.3' x='2' y='13' width='9' height='9' rx='2'
													fill='black' />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class='menu-title'>Catalouge</span>
								</a>

							</div>
							<div  class='menu-item   menu-accordion'>
								<a class='menu-link "?><?php if($page=='contact.php' ||$page=='contactaddedit.php'){
									echo "active";
								}?><?php echo "' href='ContactAddEdit' >
									<span class='menu-icon'>
										<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
										<span class='svg-icon svg-icon-2'>
											<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24'
												viewBox='0 0 24 24' fill='none'>
												<rect x='2' y='2' width='9' height='9' rx='2' fill='black' />
												<rect opacity='0.3' x='13' y='2' width='9' height='9' rx='2'
													fill='black' />
												<rect opacity='0.3' x='13' y='13' width='9' height='9' rx='2'
													fill='black' />
												<rect opacity='0.3' x='2' y='13' width='9' height='9' rx='2'
													fill='black' />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class='menu-title'>Contact</span>
								</a>

							</div>
							<div  class='menu-item   menu-accordion'>
								<a class='menu-link "?><?php if($page=='blog.php' ||$page=='blogaddedit.php'){
									echo "active";
								}?><?php echo "' href='Blog'>
									<span class='menu-icon'>
										<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
										<span class='svg-icon svg-icon-2'>
											<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24'
												viewBox='0 0 24 24' fill='none'>
												<rect x='2' y='2' width='9' height='9' rx='2' fill='black' />
												<rect opacity='0.3' x='13' y='2' width='9' height='9' rx='2'
													fill='black' />
												<rect opacity='0.3' x='13' y='13' width='9' height='9' rx='2'
													fill='black' />
												<rect opacity='0.3' x='2' y='13' width='9' height='9' rx='2'
													fill='black' />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class='menu-title'>Blog</span>
								</a>

							</div>
							
							
							<div  class='menu-item   menu-accordion'>
								<a class='menu-link "?><?php if($page=='inquiry.php'){
									echo "active";
								}?><?php echo "' href='Inquiry'>
									<span class='menu-icon'>
										<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
										<span class='svg-icon svg-icon-2'>
											<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24'
												viewBox='0 0 24 24' fill='none'>
												<rect x='2' y='2' width='9' height='9' rx='2' fill='black' />
												<rect opacity='0.3' x='13' y='2' width='9' height='9' rx='2'
													fill='black' />
												<rect opacity='0.3' x='13' y='13' width='9' height='9' rx='2'
													fill='black' />
												<rect opacity='0.3' x='2' y='13' width='9' height='9' rx='2'
													fill='black' />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class='menu-title'>Inquiry</span>
								</a>

							</div>
							<div  class='menu-item   menu-accordion'>
								<a class='menu-link "?><?php if($page=='registration_catalouge.php'){
									echo "active";
								}?><?php echo "' href='RegistrationCatalouge'>
									<span class='menu-icon'>
										<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
										<span class='svg-icon svg-icon-2'>
											<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24'
												viewBox='0 0 24 24' fill='none'>
												<rect x='2' y='2' width='9' height='9' rx='2' fill='black' />
												<rect opacity='0.3' x='13' y='2' width='9' height='9' rx='2'
													fill='black' />
												<rect opacity='0.3' x='13' y='13' width='9' height='9' rx='2'
													fill='black' />
												<rect opacity='0.3' x='2' y='13' width='9' height='9' rx='2'
													fill='black' />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class='menu-title'>Catalouge Inquiry</span>
								</a>

							</div>
							<div  class='menu-item   menu-accordion'>
							<a class='menu-link "?><?php if($page=='metahomepage.php' ||$page=='metahomepageaddedit.php'){
								echo "active";
							}?><?php echo "' href='SEO'>
								<span class='menu-icon'>
									<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
									<span class='svg-icon svg-icon-2'>
										<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24'
											viewBox='0 0 24 24' fill='none'>
											<rect x='2' y='2' width='9' height='9' rx='2' fill='black' />
											<rect opacity='0.3' x='13' y='2' width='9' height='9' rx='2'
												fill='black' />
											<rect opacity='0.3' x='13' y='13' width='9' height='9' rx='2'
												fill='black' />
											<rect opacity='0.3' x='2' y='13' width='9' height='9' rx='2'
												fill='black' />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</span>
								<span class='menu-title'>SEO</span>
							</a>

						</div>


						</div>
						<!--end::Menu-->
					</div>
					<!--end::Aside Menu-->
				</div>
				<!--end::Aside menu-->
				<!--begin::Footer-->
				<!--end::Footer-->
			</div>

<div class='wrapper d-flex flex-column bg-gray-300 flex-row-fluid' id=kt_wrapper' style='width:100%'>
"

?>
