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
    <!-- content2.css -->
    <link rel="stylesheet" href="./Style/content2.css">
    <link rel="stylesheet" href="./Style/pageinfouser.css">
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
                    <a class="navbar-brand" href="./userlogin.php">FINDWORK</a>
                    <button class="navbar-toggler" id="btn-menu" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">T??m vi???c</a>
                            </li>

                        </ul>
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <a class="nav-link active format-name-user" href="#">William Shakespeare</a>
                            <span>
                                <img class="format-img-user" src="./Images/18-F.png" alt="google"></span>
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

        <div id="content" class="container container-pageinfouser">
            <div class="offset-sm-3 col-sm-6 col-content-pageinfouser">
                <div class= "row ds-row-pageinfouser">
                    <div class="col-sm-12 infor-userxinviec col-pageinfouserabove">
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
                    <div class="col-sm-12 ">
                        <div class="card-basicinfo">
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
</body>

<script src="./Script/script.js"></script>

</html>