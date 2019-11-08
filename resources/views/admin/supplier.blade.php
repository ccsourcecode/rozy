<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../assetsAdmin/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../../assetsAdmin/css/index.css">
    <link rel="stylesheet" href="../../assetsAdmin/css/cat.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../../assetsAdmin/css/chart.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Admin::Suppliers</title>
</head>

<body>
    <div class="vucms">
        <div class="menubar">
            <div class="menuname">
                <span class="namehiden">
                    VUCMS SYSTEM
                </span><button id="propbar"><i class="fas fa-bars"></i></button>
            </div>
            <div class="options">
                <div class="top">
                    <div class="me">
                        <img src="../../assetsAdmin/img/avt.jpg" alt="">
                        <div class="meme">
                            <p class="online"><span class="pointonline"></span>
                                Online</p>
                            <p class="myname">I am VuCms</p>
                        </div>
                    </div>
                    <div class="searchbox">
                        <form action="#">
                            <input type="search" placeholder="Tìm Kiếm">
                        </form>
                    </div>
                </div>
                <div class="navigation">
                    <div class="navtitle">
                        Khu vực chính
                    </div>
                    <div class="navitems">
                        <ul class="items">
                            <li class="lv1"><a href="index.html"> <i class="fas fa-tachometer-alt"></i> <span
                                        class="navtext">Bảng điều khiển</span> </a> </li>
                            <li class="lv1"><i class="fas fa-chart-bar"></i>
                                <span class="navtext">Quản lí</span><i class="fas fa-angle-right"></i>
                                <ul class="lv2items">
                                    <li class="lv2"><a href="categories.html">Danh mục</a></li>
                                    <li class="lv2"><a href="product.html">Sản phẩm</a></li>
                                    <li class="lv2"><a href="vote.html">Đánh giá</a></li>
                                    <li class="lv2"><a href="supplier.html">Nhà cung cấp</a></li>
                                    <li class="lv2"><a href="file.html">Files</a></li>
                                </ul>
                            </li>

                            <!-- <li class="lv1"><i class="fas fa-layer-group"></i>
                                                                                <span class="navtext">Gian hàng</span><i
                                                                                          class="fas fa-angle-right"></i>
                                                                                          <ul class="lv2items">
                                                                                                    <li class="lv2">Bố cục</li>
                                                                                                    <li class="lv2">Banner</li>
                                                                                                    <li class="lv2">Công cụ SEO</li>
                                                                                                    <li class="lv2">Subcategory 4</li>
                                                                                                    <li class="lv2">Subcategory 5</li>
                                                                                          </ul>
                                                                      </li> -->
                            <li class="lv1"><i class="fas fa-users"></i> <span class="navtext">Khách hàng</span><i
                                    class="fas fa-angle-right"></i>
                                <ul class="lv2items">
                                    <li class="lv2"><a href="customer.html">Danh sách</a></li>
                                    <li class="lv2"><a href="customer_group.html">Nhóm</a></li>
                                    <li class="lv2"><a href="customer_ban.html">Danh sách bị cấm</a></li>
                                </ul>
                            </li>
                            <li class="lv1"><i class="fas fa-shopping-cart"></i>
                                <span class="navtext">Bán hàng</span><i class="fas fa-angle-right"></i>
                                <ul class="lv2items">
                                    <li class="lv2"><a href="order.html">Đơn hàng</a></li>
                                    <li class="lv2"><a href="coupon.html">Coupon</a></li>
                                </ul>
                            </li>
                            <li class="lv1"><i class="fas fa-desktop"></i>
                                <span class="navtext">Thiết Kế</span><i class="fas fa-angle-right"></i>
                                <ul class="lv2items">
                                    <li class="lv2"><a href="layout.html">Bố cục</a></li>
                                    <li class="lv2"><a href="banner.html">Banner</a></li>
                                    <li class="lv2"><a href="seotool.html">Công cụ SEO</a></li>
                                </ul>
                            </li>
                            <li class="lv1"><i class="fas fa-list-ul"></i>
                                <span class="navtext">Tiện ích</span><i class="fas fa-angle-right"></i>
                                <ul class="lv2items">
                                    <li class="lv2">Biên soạn</li>
                                    <li class="lv2">Subcategory 2</li>
                                    <li class="lv2">Subcategory 3</li>
                                    <li class="lv2">Subcategory 4</li>
                                    <li class="lv2">Subcategory 5</li>
                                </ul>
                            </li>
                            <li class="lv1"><a href="setting.html"><i class="fas fa-cogs"></i> <span class="navtext">Cài
                                        đặt
                                        chung</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="top">
                <ul class="listtop">
                    <li><i class="far fa-bell"></i> <span class="toptext">Thông báo</span>
                    </li>
                    <li><i class="far fa-envelope"></i> <span class="toptext">Tin
                            nhắn</span></li>
                    <li class="topprofile">
                        <img src="../../assetsAdmin/img/avt.jpg" alt="">
                        <span class="nameprofile"><span class="toptext">VuCms</span>
                            <i class="fas fa-angle-down"></i>

                        </span>
                        <ul>
                            <li><i class="fas fa-cogs"></i> <a href="#">&nbsp;
                                    Cài Đặt</a></li>
                            <li><i class="fas fa-id-card-alt"></i> <a href="#">&nbsp; Trang Cá
                                    Nhân</a></li>
                            <li><i class="far fa-envelope"> </i> <a href="#">&nbsp; Tin nhắn của
                                    bạn</a></li>
                            <li><i class="far fa-bell"></i> <a href="#">&nbsp;
                                    Tất cả thông bá</a>o</li>
                            <li><i class="fas fa-sign-out-alt"></i> <a href="#">&nbsp; Đăng xuất</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="bottom">
                <div class="headtitle">
                    <p class="sup">NHÀ CUNG CẤP</p>
                    <div class="breadcrumb supbread">
                        <ul>
                            <li><span class="sub">Quản lí</span></li>
                            <li><span class="aright"><i class="fas fa-angle-right"></i></span></li>
                            <li><span class="main"><a href="">Nhà Cung Cấp</a></span></li>

                        </ul>
                    </div>
                    <div class="groupbtn">
                        <a href="addsup.html" class="add"><button id="add">+</button></a>
                        <a href="" class="f5"><button id="f5"><i class="fas fa-sync"></i></button></a>
                        <a href="javascript:void(0)" class="remove"><button id="remove"><i
                                    class="far fa-trash-alt"></i></button></a>
                    </div>
                </div>
                <div class="catlist">
                    <p class="cattitle">
                        <i class="fas fa-list-ul"></i> Nhà Cung Cấp
                    </p>
                    <div class="tabcat sup" id="listbox">
                        <table border="1">
                            <tr>
                                <th><input type="checkbox" id="checkall"></th>
                                <th>Ảnh</th>
                                <th>Nhà Cung Cấp</th>
                                <th>Danh Mục</th>
                                <th>Tổng Số Sản Phẩm</th>
                                <th>Thao tác</th>
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="check"></td>
                                <td>
                                    <p><img src="../../../assetsAdmin/img/product1.png" alt=""></p>
                                </td>
                                <td><a href="#supplier">interior</a></td>
                                <td>dear method present</td>
                                <td>7</td>
                                <td><a href="editsup.html"><button><i class="far fa-edit"></i></button></a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="check"></td>
                                <td>
                                    <p><img src="../../../assetsAdmin/img/product1.png" alt=""></p>
                                </td>
                                <td><a href="#supplier">boat</a></td>
                                <td>rapidly blood arrow</td>
                                <td>4</td>
                                <td><a href="editsup.html"><button><i class="far fa-edit"></i></button></a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="check"></td>
                                <td>
                                    <p><img src="../../../assetsAdmin/img/product1.png" alt=""></p>
                                </td>
                                <td><a href="#supplier">shake</a></td>
                                <td>instrument upper strip</td>
                                <td>0</td>
                                <td><a href="editsup.html"><button><i class="far fa-edit"></i></button></a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="check"></td>
                                <td>
                                    <p><img src="../../../assetsAdmin/img/product1.png" alt=""></p>
                                </td>
                                <td><a href="#supplier">story</a></td>
                                <td>underline quickly across</td>
                                <td>5</td>
                                <td><a href="editsup.html"><button><i class="far fa-edit"></i></button></a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="check"></td>
                                <td>
                                    <p><img src="../../../assetsAdmin/img/product1.png" alt=""></p>
                                </td>
                                <td><a href="#supplier">enemy</a></td>
                                <td>discussion however remain</td>
                                <td>2</td>
                                <td><a href="editsup.html"><button><i class="far fa-edit"></i></button></a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="check"></td>
                                <td>
                                    <p><img src="../../../assetsAdmin/img/product1.png" alt=""></p>
                                </td>
                                <td><a href="#supplier">date</a></td>
                                <td>angry inch afraid</td>
                                <td>10</td>
                                <td><a href="editsup.html"><button><i class="far fa-edit"></i></button></a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="check"></td>
                                <td>
                                    <p><img src="../../../assetsAdmin/img/product1.png" alt=""></p>
                                </td>
                                <td><a href="#supplier">hide</a></td>
                                <td>fewer week branch</td>
                                <td>1</td>
                                <td><a href="editsup.html"><button><i class="far fa-edit"></i></button></a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="check"></td>
                                <td>
                                    <p><img src="../../../assetsAdmin/img/product1.png" alt=""></p>
                                </td>
                                <td><a href="#supplier">silence</a></td>
                                <td>heard fox record</td>
                                <td>3</td>
                                <td><a href="editsup.html"><button><i class="far fa-edit"></i></button></a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="check"></td>
                                <td>
                                    <p><img src="../../../assetsAdmin/img/product1.png" alt=""></p>
                                </td>
                                <td><a href="#supplier">garage</a></td>
                                <td>rocket solar cool</td>
                                <td>7</td>
                                <td><a href="editsup.html"><button><i class="far fa-edit"></i></button></a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="check"></td>
                                <td>
                                    <p><img src="../../../assetsAdmin/img/product1.png" alt=""></p>
                                </td>
                                <td><a href="#supplier">root</a></td>
                                <td>minerals forty pet</td>
                                <td>9</td>
                                <td><a href="editsup.html"><button><i class="far fa-edit"></i></button></a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="check"></td>
                                <td>
                                    <p><img src="../../../assetsAdmin/img/product1.png" alt=""></p>
                                </td>
                                <td><a href="#supplier">duty</a></td>
                                <td>pick finest leg</td>
                                <td>7</td>
                                <td><a href="editsup.html"><button><i class="far fa-edit"></i></button></a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="check"></td>
                                <td>
                                    <p><img src="../../../assetsAdmin/img/product1.png" alt=""></p>
                                </td>
                                <td><a href="#supplier">strength</a></td>
                                <td>cool seeing person</td>
                                <td>0</td>
                                <td><a href="editsup.html"><button><i class="far fa-edit"></i></button></a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="check"></td>
                                <td>
                                    <p><img src="../../../assetsAdmin/img/product1.png" alt=""></p>
                                </td>
                                <td><a href="#supplier">closer</a></td>
                                <td>was syllable slightly</td>
                                <td>3</td>
                                <td><a href="editsup.html"><button><i class="far fa-edit"></i></button></a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="check"></td>
                                <td>
                                    <p><img src="../../../assetsAdmin/img/product1.png" alt=""></p>
                                </td>
                                <td><a href="#supplier">form</a></td>
                                <td>nearest many characteristic</td>
                                <td>7</td>
                                <td><a href="editsup.html"><button><i class="far fa-edit"></i></button></a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="check"></td>
                                <td>
                                    <p><img src="../../../assetsAdmin/img/product1.png" alt=""></p>
                                </td>
                                <td><a href="#supplier">attempt</a></td>
                                <td>hat headed matter</td>
                                <td>1</td>
                                <td><a href="editsup.html"><button><i class="far fa-edit"></i></button></a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="check"></td>
                                <td>
                                    <p><img src="../../../assetsAdmin/img/product1.png" alt=""></p>
                                </td>
                                <td><a href="#supplier">person</a></td>
                                <td>new two general</td>
                                <td>6</td>
                                <td><a href="editsup.html"><button><i class="far fa-edit"></i></button></a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="check"></td>
                                <td>
                                    <p><img src="../../../assetsAdmin/img/product1.png" alt=""></p>
                                </td>
                                <td><a href="#supplier">divide</a></td>
                                <td>my man accurate</td>
                                <td>8</td>
                                <td><a href="editsup.html"><button><i class="far fa-edit"></i></button></a></td>
                            </tr>
                        </table>
                        <div class="pagination">
                            <ul>
                                <li class="active"><a href="javascript:void(0)">1</a></li>
                                <li><a href="javascript:void(0)">2</a></li>
                                <li><a href="javascript:void(0)">3</a></li>
                                <li><a href="javascript:void(0)"><i class="fas fa-angle-right"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fas fa-step-forward"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="../../../assetsAdmin/js/jquery.min.js"></script>
    <script src="../../assetsAdmin/js/chart.min.js"></script>
    <script src="../../assetsAdmin/js/cat.js"></script>
    <script>
    </script>
</body>

</html>