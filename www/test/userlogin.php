<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Boostrap CDN -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
	<!-- Boostrap separate -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<!-- Jquery CDN -->
	<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
	<!-- Custom.css -->
	<link rel="stylesheet" href="./Style/custom.css">
	<!-- navbar.css -->
	<link rel="stylesheet" href="./Style/navbar.css">
	<!-- content1.css.css -->
	<link rel="stylesheet" href="./Style/content1.css">
	<!-- content3.css.css -->
	<link rel="stylesheet" href="./Style/content3.css">
	<!-- content2.css -->
	<link rel="stylesheet" href="./Style/content2.css">
	<!-- footer.css -->
	<link rel="stylesheet" href="./Style/footer.css">
	<!-- reponsive.css -->
	<link rel="stylesheet" href="./Style/reponsive.css">
	<!-- font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Document</title>
</head>

<body>
	<div id="main">
		<div class="navbar-content sticky-top" id="navbar-content">
			<nav class="navbar navbar-expand-lg navbar-dark px-4 format-nav">
				<div class="container">
					<a class="navbar-brand" href="#">FINDWORK</a>
					<button class="navbar-toggler" id="btn-menu" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<ul class="navbar-nav me-auto mt-2 mt-lg-0">

							<li class="nav-item">
								<a class="nav-link active" href="#">????ng vi???c</a>
							</li>

						</ul>
						<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
							<a class="nav-link active format-name-user" href="#">Google</a>
							<span>
								<img class="format-img-user" src="./Images/google.png" alt="google"></span>
							<div class="navbar-img-notice">
								<span>
									<img class="format-img-notice" src="./Images/ic_notifications_none_24px.png" alt="">
								</span>
							</div>

						</ul>
					</div>
				</div>
			</nav>
		</div>
		<?php
		include './content1.php'
		?>

		<div class="content-3" id="content-3">
			<div class="container container-content-3">
				<div class="row">
					<div class="col-12">
						<div class="ds-row-content3">
							<div class="filter-dropdown">
								<div class="filter-dropdown-container">
									<button class="btn-filter-dropdown" id="btn-filterdropdown" aria-haspopup="true" aria-expanded="false" aria-controls="filter-menu">
										<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-briefcase-fill" viewBox="0 0 16 16">
											<path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5z" />
											<path d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z" />
										</svg>
										<div class="filter-dropdown-lable">
											T???t c??? l??nh v???c
										</div>
										<div class="filter-dropdown-icondown">
											<span><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
										</div>
									</button>
									<ul class="filter-dropdownlist filter-dropdownlist-linhvuc" id="filter-menu">
										<input class="form-control myInputSearch" id="myInput2" type="text" autocomplete="off" placeholder="Search..">
										<li class="filter-dropdownlistItem">
											<a href="#" class="filter-dropdownlistitemLink">C??ng ngh???</a>
										</li>
										<li class="filter-dropdownlistItem">
											<a href="#" class="filter-dropdownlistitemLink">Kinh t???</a>
										</li>
									</ul>

								</div>
							</div>
							<div class="filter-dropdown">
								<div class="filter-dropdown-container">
									<button class="btn-filter-dropdown" id="btn-filterdropdown2" aria-haspopup="true" aria-expanded="false" aria-controls="filter-menu">
										<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
											<path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
											<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
										</svg>

										<div class="filter-dropdown-lable">
											H??nh th???c vi???c l??m
										</div>
										<div class="filter-dropdown-icondown">
											<span><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
										</div>
									</button>
									<ul class="filter-dropdownlist filter-dropdownlist-hinhthuc" id="filter-menu2">
										<input class="form-control myInputSearch" id="myInput4" autocomplete="off" type="text" placeholder="Search..">
										<li class="filter-dropdownlistItem">
											<a href="#" class="filter-dropdownlistitemLink">Online</a>
										</li>
										<li class="filter-dropdownlistItem">
											<a href="#" class="filter-dropdownlistitemLink">Offline</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="filter-dropdown">
								<div class="filter-dropdown-container">
									<button class="btn-filter-dropdown" id="btn-filterdropdown3" aria-haspopup="true" aria-expanded="false" aria-controls="filter-menu">
										<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
											<path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
										</svg>

										<div class="filter-dropdown-lable">
											T???t c??? ?????a ??i???m
										</div>
										<div class="filter-dropdown-icondown">
											<span><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
										</div>
									</button>
									<ul class="filter-dropdownlist filter-dropdownlist-diadiem" id="filter-menu3">
										<input class="form-control myInputSearch" id="myInput5" autocomplete="off" type="text" placeholder="Search..">
										<li class="filter-dropdownlistItem">
											<a href="#" class="filter-dropdownlistitemLink">Th??nh Ph??? H??? Ch?? Minh</a>
										</li>
										<li class="filter-dropdownlistItem">
											<a href="#" class="filter-dropdownlistitemLink">H?? N???i</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="filter-dropdown-icon">
								<button class="btn-filter-dropdown" id="btn-filterdropdown4" aria-haspopup="true" aria-expanded="false" aria-controls="filter-menu4">
									<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-filter" viewBox="0 0 16 16">
										<path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
									</svg>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="content-2" id="content-2">
			<div class="container container-content-2" style="margin-top:30px;">
				<div class="row">
					<div class="col-sm-12 col-md-7 col-lg-6 col-xl-5 col-content2-left">
						<div class="row">
							<div class="ds-row">
								<div class="col-sm-12 col-mg-content-2-left-main">
									<div class="card card-format-border-left">
										<div class="card-body">
											<div class="row">
												<div class="col-sm-12 col-img-text">
													<div class="col-img">
														<span>
															<img class="format-img-userxinviec" src="./Images/dummy_team_member.png" al=""></img>
														</span>
													</div>
													<div class="col-text">
														<h5 class="card-title format-text-bold">D????ng H???i ????ng</h5>
														<h6 class="card-subtitle mb-2">Frontend Developer</h6>
													</div>
												</div>

												<div class="col-sm-12 col-time">
													<span><img class="img-time" src="./Images/time.jpg" alt=""></span>
													<span class="card-text p-time">To??n th???i gian</span>
												</div>
												<div class="col-sm-12">
													<p class="card-text p-request">PHP</p>
													<p class="card-text p-request">Golang</p>
													<p class="card-text p-request">My SQL</p>
													<p class="card-text p-request">English</p>
												</div>
												<div class="col-sm-12 col-diadiem">
													<span><i class="fa fa-map-marker" aria-hidden="true"></i><span>
															<span class="card-text p-diadiem">Th??nh Ph??? H??? Ch?? Minh</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-mg-content-2-left-main">
									<div class="card card-format-border-left">
										<div class="card-body">
											<div class="row">
												<div class="col-sm-12 col-img-text">
													<div class="col-img">
														<span>
															<img class="format-img-userxinviec" src="./Images/dummy_team_member.png" al=""></img>
														</span>
													</div>
													<div class="col-text">
														<h5 class="card-title format-text-bold">D????ng H???i ????ng</h5>
														<h6 class="card-subtitle mb-2">Frontend Developer</h6>
													</div>
												</div>

												<div class="col-sm-12 col-time">
													<span><img class="img-time" src="./Images/time.jpg" alt=""></span>
													<span class="card-text p-time">To??n th???i gian</span>
												</div>
												<div class="col-sm-12">
													<p class="card-text p-request">PHP</p>
													<p class="card-text p-request">Golang</p>
													<p class="card-text p-request">My SQL</p>
													<p class="card-text p-request">English</p>
												</div>
												<div class="col-sm-12 col-diadiem">
													<span><i class="fa fa-map-marker" aria-hidden="true"></i><span>
															<span class="card-text p-diadiem">Th??nh Ph??? H??? Ch?? Minh</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-mg-content-2-left-main">
									<div class="card card-format-border-left">
										<div class="card-body">
											<div class="row">
												<div class="col-sm-12 col-img-text">
													<div class="col-img">
														<span>
															<img class="format-img-userxinviec" src="./Images/dummy_team_member.png" al=""></img>
														</span>
													</div>
													<div class="col-text">
														<h5 class="card-title format-text-bold">D????ng H???i ????ng</h5>
														<h6 class="card-subtitle mb-2">Frontend Developer</h6>
													</div>
												</div>

												<div class="col-sm-12 col-time">
													<span><img class="img-time" src="./Images/time.jpg" alt=""></span>
													<span class="card-text p-time">To??n th???i gian</span>
												</div>
												<div class="col-sm-12">
													<p class="card-text p-request">PHP</p>
													<p class="card-text p-request">Golang</p>
													<p class="card-text p-request">My SQL</p>
													<p class="card-text p-request">English</p>
												</div>
												<div class="col-sm-12 col-diadiem">
													<span><i class="fa fa-map-marker" aria-hidden="true"></i><span>
															<span class="card-text p-diadiem">Th??nh Ph??? H??? Ch?? Minh</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-mg-content-2-left-main">
									<div class="card card-format-border-left">
										<div class="card-body">
											<div class="row">
												<div class="col-sm-12 col-img-text">
													<div class="col-img">
														<span>
															<img class="format-img-userxinviec" src="./Images/dummy_team_member.png" al=""></img>
														</span>
													</div>
													<div class="col-text">
														<h5 class="card-title format-text-bold">D????ng H???i ????ng</h5>
														<h6 class="card-subtitle mb-2">Frontend Developer</h6>
													</div>
												</div>

												<div class="col-sm-12 col-time">
													<span><img class="img-time" src="./Images/time.jpg" alt=""></span>
													<span class="card-text p-time">To??n th???i gian</span>
												</div>
												<div class="col-sm-12">
													<p class="card-text p-request">PHP</p>
													<p class="card-text p-request">Golang</p>
													<p class="card-text p-request">My SQL</p>
													<p class="card-text p-request">English</p>
												</div>
												<div class="col-sm-12 col-diadiem">
													<span><i class="fa fa-map-marker" aria-hidden="true"></i><span>
															<span class="card-text p-diadiem">Th??nh Ph??? H??? Ch?? Minh</span>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>

					<div class="d-none d-md-block col-md-5 col-lg-6 col-xl-7 col-content2-right col-content2-right-a11yFix" id="col-centent2-right-scroll"> 
						<div class="row">
							<div class="col-sm-12 infor-userxinviec">
								<div class="card-info-userxinviec">
									<div class="body">
										<div class="row">
											<div class="col-sm-12 img-userxinviec-right">
												<span><img class="format-img-userxinviec-right" src="./Images/18-F.png" alt=""></span>
											</div>
											<div class="col-sm-12">
												<h5 class="card-title format-text-bold">William Shakespeare</h5>
												<h6 class="card-subtitle mb-2">Nh??n vi??n b??n h??ng</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-motacongviecdaydu col-basicinfo ">
								<div class="card-motacongviecdaydu card-basicinfo">
									<div class="body">
										<div class="row">
											<div class="col-sm-12 mgl-col-content2-right-below">
												<h5 class="card-title format-text-bold">Th??ng tin c?? b???n</h5>
											</div>
											<div class="col-sm-12  mgl-col-content2-right-below format-mt-item">
												<span class="format-span-img-cake"><img class="format-img-cake" src="./Images/ic_cake_24px.png" alt="">1/1/2000</span>
												<span class="format-span-img-gender"><img class="format-img-gender" src="./Images/ic_wc_24px.png" alt="">N???</span>
											</div>

											<div class="col-sm-12  mgl-col-content2-right-below format-mt-item">
												<span class="format-span-img-call"><img class="format-img-call" src="./Images/ic_call_24px.png" alt="">0987654321</span>
												<span class="format-span-img-letter"><img class="format-img-letter" src="./Images/ic_markunread_24px.png" alt="">William@gmail.com</span>
											</div>

											<div class="col-sm-12  mgl-col-content2-right-below format-mt-item">
												<span><img class="format-img-place" src="./Images/ic_place_24px.png" alt="">19 ??. Nguy???n H???u Th???, T??n H??ng, Qu???n 7, Th??nh ph??? H??? Ch?? Minh</span>
											</div>
										
											<div class="col-sm-12 mgl-col-content2-right-below col-muctieu">
												<h5 class="card-title format-text-bold">M???c ti??u ngh??? nghi???p</h5>
												<span>
													<p class="p-muctieu">??p d???ng nh???ng kinh nghi???m v??? k??? n??ng b??n h??ng v?? s??? hi???u bi???t v???
														th??? tr?????ng ????? tr??? th??nh m???t nh??n vi??n b??n h??ng chuy??n nghi???p,
														mang ?????n nhi???u gi?? tr??? cho kh??ch h??ng. T??? ???? gi??p C??ng ty t??ng s???
														l?????ng kh??ch h??ng v?? m??? r???ng t???p kh??ch h??ng.
													</p>
												</span>
											</div>

											<div class="col-sm-12 mgl-col-content2-right-below col-hocvan">
												<h5 class="card-title format-text-bold">H???c v???n</h5>
												<span>
													<p class="p-hocvan">?????i h???c T??n ?????c Th???ng
														</br>
														Qu???n tr??? Doanh nghi???p
														</br>
														10/2010 - 05/2014
														</br>
														T???t nghi???p lo???i Gi???i, ??i???m trung b??nh 8.0
													</p>
												</span>
											</div>

											<div class="col-sm-12 mgl-col-content2-right-below col-kynang">
												<h5 class="card-title format-text-bold">K??? n??ng</h5>
												<span>
													<p class="p-kynang">Tin h???c v??n ph??ng :
														</br>
														-S??? d???ng th??nh th???o c??c c??ng c??? Word, Excel, Power Point
														</br>
														Ti???ng Anh:
														</br>
														-Kh??? n??ng giao ti???p Ti???ng Anh tr??i ch???y

													</p>
												</span>
											</div>
											<div class="col-sm-12 mgl-col-content2-right-below col-kinhnghiem">
												<h5 class="card-title format-text-bold">Kinh nghi???m l??m vi???c</h5>
												<span>
													<p class="p-kinhnghiem">
														C??ng ty ABC
														</br>
														Nh??n vi??n b??n h??ng 03/2015 - Hi???n t???i
														</br>
														- H??? tr??? vi???t b??i qu???ng c??o s???n ph???m qua k??nh facebook, c??c
														forum,...
														</br>
														- Gi???i thi???u, t?? v???n s???n ph???m, gi???i ????p c??c v???n ????? th???c m???c c???a kh??ch
														h??ng qua ??i???n tho???i v?? email.
														C???a h??ng XYZ
														</br>
														Nh??n vi??n b??n h??ng 06/2014 - 02/2015
														</br>
														- B??n h??ng tr???c ti???p t???i c???a h??ng cho ng?????i n?????c ngo??i v?? ng?????i Vi???t.
														</br>
														- Qu???ng b?? s???n ph???m th??ng qua c??c ???n ph???m truy???n th??ng: banner,
														poster, t??? r??i...
														</br>
														- L???p b??o c??o s???n l?????ng b??n ra h??ng ng??y.

													</p>
												</span>
											</div>
											<div class="col-sm-12 mgl-col-content2-right-below col-chitiet">
												<h5 class="card-title format-text-bold">Chi ti???t</h5>
												<span>
													<p class="p-chitiet">
													Xem CV: https://findwork/users/my-cv.com
													</p>
													<p class="p-chitiet">
													Xem Porfolio: https://findwork/users/my-portfolio.com
													</p>
												</span>
											</div>
											<div class="col-md-12 col-tuyenngay">
												<a class="btn btn-dark btn-outline-light btn-tuyenngay" tabindex="-1" role="button" href="#">???ng tuy???n ngay</a>
												<button class="btn-luuyeu-thich" id="btn-luuyeuthich" aria-haspopup="true" aria-expanded="false">
													<span>
														<svg class="img-ungtuyenngay" width="50" height="40" role="img" aria-label="bi???u t?????ng-l??u" focusable="false" viewBox="0 0 18 18">
															<g>
																<path d="M12.38,2.25A4.49,4.49,0,0,0,9,3.82,4.49,4.49,0,0,0,5.63,2.25,4.08,4.08,0,0,0,1.5,6.38c0,2.83,2.55,5.15,6.41,8.66L9,16l1.09-1C14,11.52,16.5,9.21,16.5,6.38A4.08,4.08,0,0,0,12.38,2.25ZM9.08,13.91L9,14l-0.08-.08C5.35,10.68,3,8.54,3,6.38A2.56,2.56,0,0,1,5.63,3.75,2.93,2.93,0,0,1,8.3,5.52H9.7a2.91,2.91,0,0,1,2.67-1.77A2.56,2.56,0,0,1,15,6.38C15,8.54,12.65,10.68,9.08,13.91Z"></path>
															</g>
														</svg>
													</span>
												</button>
											</div>
										</div>
									</div>

								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<?php
			include './footer.php'
			?>

		</div>
</body>

<script src="./Script/script.js"></script>

</html>