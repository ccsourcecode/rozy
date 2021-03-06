<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../assetsAdmin/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../../assetsAdmin/css/index.css">
    <link rel="stylesheet" href="../../assetsAdmin/css/cat.css">
    <link rel="stylesheet" href="../../assetsAdmin/css/order.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../../assetsAdmin/css/chart.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="../../assetsAdmin/ckeditor/ckeditor.js"></script>
    <title>Admin::Setting</title>
</head>

<body>
    <div class="vucms">
        @include('includes.menubar')
        <div class="right">
            @include('includes.top')
            <div class="bottom">
                <div class="headtitle">
                    <p>CÀI ĐẶT</p>
                    <div class="breadcrumb">
                        <ul>
                            <li><span class="sub">Quản lí</span></li>
                            <li><span class="aright"><i class="fas fa-angle-right"></i></span></li>
                            <li><span class="main"><a href="">Cài Đặt</a></span></li>

                        </ul>
                    </div>

                </div>
                <div class="catlist" id="add">
                    <p class="cattitle">
                        <i class="fas fa-pen-nib"> </i> Cài Đặt Hệ Thống
                    </p>
                    <div class="tabcat">
                        <div class="panel">
                            <ul>
                                <li data-id="tab1" class="active">Chung</li>
                                <li data-id="tab2">Cửa Hàng</li>
                                <li data-id="tab3">Tùy Chọn</li>
                                <li data-id="tab4">Email</li>
                                <li data-id="tab5">Địa Phương</li>
                            </ul>
                        </div>
                        <table id="tab1">

                            <tr>
                                <td>Thẻ Meta Title</td>
                                <td><input value="Rozy Online Shop" type="text" placeholder="Thẻ Meta Title"
                                        list="liststore">
                                    <datalist id="liststore">
                                        <option value="ROZY">
                                        <option value="Internet Explorer">
                                        <option value="Firefox">
                                        <option value="Chrome">
                                        <option value="Opera">
                                        <option value="Safari">
                                    </datalist>
                                </td>
                            </tr>

                            <tr>
                                <td>Thẻ Meta Description</td>
                                <td><textarea type="text" placeholder="Thẻ Meta Description" style="line-height:normal"
                                        rows="5"></textarea></td>
                            </tr>
                            <tr>
                                <td>Thẻ Meta Keyword</td>
                                <td><textarea type="text" placeholder="Thẻ Meta Keyword" style="line-height:normal"
                                        rows="5"></textarea></td>
                            </tr>
                            <tr>
                                <td>Giao diện</td>
                                <td>
                                    <select name="aa" id="">
                                        <option value="--">Mặc định</option>

                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><img height="300" style="border:5px solid tomato;padding:2.5px"
                                        src="../../assetsAdmin/img/dftheme.png" alt=""></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td><button class="addcat" style="width:auto;padding:0px 7px;">Cập Nhật <i
                                            class="fas fa-arrow-right"></i></button></td>
                            </tr>
                        </table>
                        <table id="tab2">

                            <tr>
                                <td>Tên cửa hàng</td>
                                <td><input value="Rozy Online Shop" type="text" placeholder="Tên cửa hàng"
                                        list="liststore">
                                </td>
                            </tr>

                            <tr>
                                <td>Người sở hữu</td>
                                <td><input value="VuCms" type="text" placeholder="Người sở hữu" list="liststore"></td>
                            </tr>
                            <tr>
                                <td>Địa chỉ</td>
                                <td><textarea type="text" placeholder="Địa chỉ" style="line-height:normal"
                                        rows="5"></textarea></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input value="rozy@gmail.com" type="text" placeholder="Email" list="liststore">
                                </td>
                            </tr>

                            <tr>
                                <td>Số điện thoại</td>
                                <td><input value="0123456789" type="text" placeholder="Số điện thoại" list="liststore">
                                </td>
                            </tr>
                            <tr>
                                <td>Fax</td>
                                <td><input value="0123456789" type="text" placeholder="Fax" list="liststore"></td>
                            </tr>
                            <tr>
                                <td>logo</td>
                                <td><img height="100" width="100" style="border:5px solid tomato;padding:2.5px"
                                        src="../../assetsAdmin/img/logocart.png" alt=""></td>
                            </tr>
                            <tr>
                                <td>Giờ làm việc</td>
                                <td><textarea type="text" placeholder="Giờ làm việc" style="line-height:normal"
                                        rows="5"></textarea></td>
                            </tr>
                            <tr>
                                <td>Mô tả cửa hàng</td>
                                <td><textarea type="text" placeholder="Mô tả cửa hàng" style="line-height:normal"
                                        rows="5"></textarea></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td><button class="addcat" style="width:auto;padding:0px 7px;">Cập Nhật <i
                                            class="fas fa-arrow-right"></i></button></td>
                            </tr>
                        </table>
                        <table id="tab3">

                            <tr>
                                <td>Số lượng sản phẩm mỗi trang</td>
                                <td> <select name="aa" id="">
                                        <option value="">12</option>
                                        <option value="">18</option>
                                        <option value="">24</option>
                                        <option value="">30</option>
                                        <option value="">36</option>
                                        <option value="">42</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Nhận đánh giá</td>
                                <td><select name="aa" id="">
                                        <option value="--">Có </option>
                                        <option value="like">Không</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Nhận đánh giá từ khách</td>
                                <td> <select name="aa" id="">
                                        <option value="--">Có </option>
                                        <option value="like">Không</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Giá trị tối đa Vouchers</td>
                                <td> <input type="number" value="10000000">
                                </td>
                            </tr>
                            <tr>
                                <td>Giá hiển thị có thuế</td>
                                <td> <select name="aa" id="">
                                        <option value="--">Có </option>
                                        <option value="like">Không</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Lưu lịch sử khách hàng</td>
                                <td> <select name="aa" id="">
                                        <option value="--">Có </option>
                                        <option value="like">Không</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Chỉ hiển thị giá với khách hàng đăng nhập</td>
                                <td> <select name="aa" id="">
                                        <option value="--">Có </option>
                                        <option value="like" selected>Không</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Mã đứng trước tên hóa đơn</td>
                                <td><input type="text" value="ROZY:INV" style="min-width:150px!important"></td>
                            </tr>
                            <tr>
                                <td>Hiển thị trọng lượng giỏ hàng</td>
                                <td> <select name="aa" id="">
                                        <option value="--">Có </option>
                                        <option value="like" selected>Không</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Cho phép khách đặt hàng</td>
                                <td> <select name="aa" id="">
                                        <option value="--">Có </option>
                                        <option value="like" selected>Không</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Cho phép khách đặt hàng qua API</td>
                                <td> <select name="aa" id="">
                                        <option value="--">Có </option>
                                        <option value="like" selected>Không</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Hiển thị cảnh báo số lượng</td>
                                <td> <select name="aa" id="">
                                        <option value="--">Có </option>
                                        <option value="like">Không</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Hiển thị số lượng trong kho</td>
                                <td> <select name="aa" id="">
                                        <option value="--">Có </option>
                                        <option value="like">Không</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><button class="addcat" style="width:auto;padding:0px 7px;">Cập Nhật <i
                                            class="fas fa-arrow-right"></i></button></td>
                            </tr>
                        </table>

                        <table id="tab4">

                            <tr>
                                <td>SMTP hostname</td>
                                <td><input value="smtp.google.com" type="text" placeholder="Số Nhà"></td>
                            </tr>
                            <tr>
                                <td> SMTP Username</td>
                                <td><input value="vucms@gmail.com" type="text" placeholder="Tên Đường"></td>
                            </tr>
                            <tr>
                                <td>SMTP Password</td>
                                <td><input value="abccccccasdfasdf" type="password" placeholder="Quận/Huyện"></td>
                            </tr>
                            <tr>
                                <td>SMTP Port</td>
                                <td><input value="1290" type="text" placeholder="SMTP Port"></td>
                            </tr>
                            <tr>
                                <td>SMTP Timeout</td>
                                <td><input value="10" type="text" placeholder="SMTP Port"></td>
                            </tr>
                            <tr>
                                <td>Nhận thông báo</td>
                                <td><select name="aa" id="">
                                        <option value="--">Có </option>
                                        <option value="like">Không</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Chú thích thêm</td>
                                <td><textarea type="text" placeholder="Chú thích " style="line-height:normal"
                                        rows="5"></textarea></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><button class="addcat" style="width:auto;padding:0px 7px;">Cập Nhật <i
                                            class="fas fa-arrow-right"></i></button></td>
                            </tr>
                        </table>
                        <table id="tab5">
                            <tr>
                                <td>Quốc Gia</td>
                                <td> <select name="aa" id="">
                                        <option value="244">Aaland Islands</option>
                                        <option value="1">Afghanistan</option>
                                        <option value="2">Albania</option>
                                        <option value="3">Algeria</option>
                                        <option value="4">American Samoa</option>
                                        <option value="5">Andorra</option>
                                        <option value="6">Angola</option>
                                        <option value="7">Anguilla</option>
                                        <option value="8">Antarctica</option>
                                        <option value="9">Antigua and Barbuda</option>
                                        <option value="10">Argentina</option>
                                        <option value="11">Armenia</option>
                                        <option value="12">Aruba</option>

                                        <option value="252">Ascension Island (British)</option>
                                        <option value="13">Australia</option>
                                        <option value="14">Austria</option>
                                        <option value="15">Azerbaijan</option>
                                        <option value="16">Bahamas</option>
                                        <option value="17">Bahrain</option>
                                        <option value="18">Bangladesh</option>
                                        <option value="19">Barbados</option>
                                        <option value="20">Belarus</option>
                                        <option value="21">Belgium</option>
                                        <option value="22">Belize</option>
                                        <option value="23">Benin</option>
                                        <option value="24">Bermuda</option>
                                        <option value="25">Bhutan</option>
                                        <option value="26">Bolivia</option>
                                        <option value="245">Bonaire, Sint Eustatius and Saba</option>
                                        <option value="27">Bosnia and Herzegovina</option>
                                        <option value="28">Botswana</option>
                                        <option value="29">Bouvet Island</option>
                                        <option value="30">Brazil</option>
                                        <option value="31">British Indian Ocean Territory</option>
                                        <option value="32">Brunei Darussalam</option>
                                        <option value="33">Bulgaria</option>
                                        <option value="34">Burkina Faso</option>
                                        <option value="35">Burundi</option>
                                        <option value="36">Cambodia</option>
                                        <option value="37">Cameroon</option>
                                        <option value="38">Canada</option>
                                        <option value="251">Canary Islands</option>
                                        <option value="39">Cape Verde</option>
                                        <option value="40">Cayman Islands</option>
                                        <option value="41">Central African Republic</option>
                                        <option value="42">Chad</option>
                                        <option value="43">Chile</option>
                                        <option value="44">China</option>
                                        <option value="45">Christmas Island</option>
                                        <option value="46">Cocos (Keeling) Islands</option>
                                        <option value="47">Colombia</option>
                                        <option value="48">Comoros</option>
                                        <option value="49">Congo</option>
                                        <option value="50">Cook Islands</option>
                                        <option value="51">Costa Rica</option>
                                        <option value="52">Cote D'Ivoire</option>
                                        <option value="53">Croatia</option>
                                        <option value="54">Cuba</option>
                                        <option value="246">Curacao</option>
                                        <option value="55">Cyprus</option>
                                        <option value="56">Czech Republic</option>
                                        <option value="237">Democratic Republic of Congo</option>
                                        <option value="57">Denmark</option>
                                        <option value="58">Djibouti</option>
                                        <option value="59">Dominica</option>
                                        <option value="60">Dominican Republic</option>
                                        <option value="61">East Timor</option>
                                        <option value="62">Ecuador</option>
                                        <option value="63">Egypt</option>
                                        <option value="64">El Salvador</option>
                                        <option value="65">Equatorial Guinea</option>
                                        <option value="66">Eritrea</option>
                                        <option value="67">Estonia</option>
                                        <option value="68">Ethiopia</option>
                                        <option value="69">Falkland Islands (Malvinas)</option>
                                        <option value="70">Faroe Islands</option>
                                        <option value="71">Fiji</option>
                                        <option value="72">Finland</option>
                                        <option value="74">France, Metropolitan</option>
                                        <option value="75">French Guiana</option>
                                        <option value="76">French Polynesia</option>
                                        <option value="77">French Southern Territories</option>
                                        <option value="126">FYROM</option>
                                        <option value="78">Gabon</option>
                                        <option value="79">Gambia</option>
                                        <option value="80">Georgia</option>
                                        <option value="81">Germany</option>
                                        <option value="82">Ghana</option>
                                        <option value="83">Gibraltar</option>
                                        <option value="84">Greece</option>
                                        <option value="85">Greenland</option>
                                        <option value="86">Grenada</option>
                                        <option value="87">Guadeloupe</option>
                                        <option value="88">Guam</option>
                                        <option value="89">Guatemala</option>
                                        <option value="256">Guernsey</option>
                                        <option value="90">Guinea</option>
                                        <option value="91">Guinea-Bissau</option>
                                        <option value="92">Guyana</option>
                                        <option value="93">Haiti</option>
                                        <option value="94">Heard and Mc Donald Islands</option>
                                        <option value="95">Honduras</option>
                                        <option value="96">Hong Kong</option>
                                        <option value="97">Hungary</option>
                                        <option value="98">Iceland</option>
                                        <option value="99">India</option>
                                        <option value="100">Indonesia</option>
                                        <option value="101">Iran (Islamic Republic of)</option>
                                        <option value="102">Iraq</option>
                                        <option value="103">Ireland</option>
                                        <option value="254">Isle of Man</option>
                                        <option value="104">Israel</option>
                                        <option value="105">Italy</option>
                                        <option value="106">Jamaica</option>
                                        <option value="107">Japan</option>
                                        <option value="257">Jersey</option>
                                        <option value="108">Jordan</option>
                                        <option value="109">Kazakhstan</option>
                                        <option value="110">Kenya</option>
                                        <option value="111">Kiribati</option>
                                        <option value="253">Kosovo, Republic of</option>
                                        <option value="114">Kuwait</option>
                                        <option value="115">Kyrgyzstan</option>
                                        <option value="116">Lao People's Democratic Republic</option>
                                        <option value="117">Latvia</option>
                                        <option value="118">Lebanon</option>
                                        <option value="119">Lesotho</option>
                                        <option value="120">Liberia</option>
                                        <option value="121">Libyan Arab Jamahiriya</option>
                                        <option value="122">Liechtenstein</option>
                                        <option value="123">Lithuania</option>
                                        <option value="124">Luxembourg</option>
                                        <option value="125">Macau</option>
                                        <option value="127">Madagascar</option>
                                        <option value="128">Malawi</option>
                                        <option value="129">Malaysia</option>
                                        <option value="130">Maldives</option>
                                        <option value="131">Mali</option>
                                        <option value="132">Malta</option>
                                        <option value="133">Marshall Islands</option>
                                        <option value="134">Martinique</option>
                                        <option value="135">Mauritania</option>
                                        <option value="136">Mauritius</option>
                                        <option value="137">Mayotte</option>
                                        <option value="138">Mexico</option>
                                        <option value="139">Micronesia, Federated States of</option>
                                        <option value="140">Moldova, Republic of</option>
                                        <option value="141">Monaco</option>
                                        <option value="142">Mongolia</option>
                                        <option value="242">Montenegro</option>
                                        <option value="143">Montserrat</option>
                                        <option value="144">Morocco</option>
                                        <option value="145">Mozambique</option>
                                        <option value="146">Myanmar</option>
                                        <option value="147">Namibia</option>
                                        <option value="148">Nauru</option>
                                        <option value="149">Nepal</option>
                                        <option value="150">Netherlands</option>
                                        <option value="151">Netherlands Antilles</option>
                                        <option value="152">New Caledonia</option>
                                        <option value="153">New Zealand</option>
                                        <option value="154">Nicaragua</option>
                                        <option value="155">Niger</option>
                                        <option value="156">Nigeria</option>
                                        <option value="157">Niue</option>
                                        <option value="158">Norfolk Island</option>
                                        <option value="112">North Korea</option>
                                        <option value="159">Northern Mariana Islands</option>
                                        <option value="160">Norway</option>
                                        <option value="161">Oman</option>
                                        <option value="162">Pakistan</option>
                                        <option value="163">Palau</option>
                                        <option value="247">Palestinian Territory, Occupied</option>
                                        <option value="164">Panama</option>
                                        <option value="165">Papua New Guinea</option>
                                        <option value="166">Paraguay</option>
                                        <option value="167">Peru</option>
                                        <option value="168">Philippines</option>
                                        <option value="169">Pitcairn</option>
                                        <option value="170">Poland</option>
                                        <option value="171">Portugal</option>
                                        <option value="172">Puerto Rico</option>
                                        <option value="173">Qatar</option>
                                        <option value="174">Reunion</option>
                                        <option value="175">Romania</option>
                                        <option value="176">Russian Federation</option>
                                        <option value="177">Rwanda</option>
                                        <option value="178">Saint Kitts and Nevis</option>
                                        <option value="179">Saint Lucia</option>
                                        <option value="180">Saint Vincent and the Grenadines</option>
                                        <option value="181">Samoa</option>
                                        <option value="182">San Marino</option>
                                        <option value="183">Sao Tome and Principe</option>
                                        <option value="184">Saudi Arabia</option>
                                        <option value="185">Senegal</option>
                                        <option value="243">Serbia</option>
                                        <option value="186">Seychelles</option>
                                        <option value="187">Sierra Leone</option>
                                        <option value="188">Singapore</option>
                                        <option value="189">Slovak Republic</option>
                                        <option value="190">Slovenia</option>
                                        <option value="191">Solomon Islands</option>
                                        <option value="192">Somalia</option>
                                        <option value="193">South Africa</option>
                                        <option value="194">South Georgia &amp; South Sandwich Islands</option>
                                        <option value="113">South Korea</option>
                                        <option value="248">South Sudan</option>
                                        <option value="195">Spain</option>
                                        <option value="196">Sri Lanka</option>
                                        <option value="249">St. Barthelemy</option>
                                        <option value="197">St. Helena</option>
                                        <option value="250">St. Martin (French part)</option>
                                        <option value="198">St. Pierre and Miquelon</option>
                                        <option value="199">Sudan</option>
                                        <option value="200">Suriname</option>
                                        <option value="201">Svalbard and Jan Mayen Islands</option>
                                        <option value="202">Swaziland</option>
                                        <option value="203">Sweden</option>
                                        <option value="204">Switzerland</option>
                                        <option value="205">Syrian Arab Republic</option>
                                        <option value="206">Taiwan</option>
                                        <option value="207">Tajikistan</option>
                                        <option value="208">Tanzania, United Republic of</option>
                                        <option value="209">Thailand</option>
                                        <option value="210">Togo</option>
                                        <option value="211">Tokelau</option>
                                        <option value="212">Tonga</option>
                                        <option value="213">Trinidad and Tobago</option>
                                        <option value="255">Tristan da Cunha</option>
                                        <option value="214">Tunisia</option>
                                        <option value="215">Turkey</option>
                                        <option value="216">Turkmenistan</option>
                                        <option value="217">Turks and Caicos Islands</option>
                                        <option value="218">Tuvalu</option>
                                        <option value="219">Uganda</option>
                                        <option value="220">Ukraine</option>
                                        <option value="221">United Arab Emirates</option>
                                        <option value="222">United Kingdom</option>
                                        <option value="223">United States</option>
                                        <option value="224">United States Minor Outlying Islands</option>
                                        <option value="225">Uruguay</option>
                                        <option value="226">Uzbekistan</option>
                                        <option value="227">Vanuatu</option>
                                        <option value="228">Vatican City State (Holy See)</option>
                                        <option value="229">Venezuela</option>
                                        <option value="230" selected="selected">Việt Nam</option>
                                        <option value="231">Virgin Islands (British)</option>
                                        <option value="232">Virgin Islands (U.S.)</option>
                                        <option value="233">Wallis and Futuna Islands</option>
                                        <option value="234">Western Sahara</option>
                                        <option value="235">Yemen</option>
                                        <option value="238">Zambia</option>
                                        <option value="239">Zimbabwe</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Tỉnh Thành</td>
                                <td> <select name="aa" id="">
                                        <option value="An Giang">An Giang
                                        <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu
                                        <option value="Bắc Giang">Bắc Giang
                                        <option value="Bắc Kạn">Bắc Kạn
                                        <option value="Bạc Liêu">Bạc Liêu
                                        <option value="Bắc Ninh">Bắc Ninh
                                        <option value="Bến Tre">Bến Tre
                                        <option value="Bình Định">Bình Định
                                        <option value="Bình Dương">Bình Dương
                                        <option value="Bình Phước">Bình Phước
                                        <option value="Bình Thuận">Bình Thuận
                                        <option value="Bình Thuận">Bình Thuận
                                        <option value="Cà Mau">Cà Mau
                                        <option value="Cao Bằng">Cao Bằng
                                        <option value="Đắk Lắk">Đắk Lắk
                                        <option value="Đắk Nông">Đắk Nông
                                        <option value="Điện Biên">Điện Biên
                                        <option value="Đồng Nai">Đồng Nai
                                        <option value="Đồng Tháp">Đồng Tháp
                                        <option value="Đồng Tháp">Đồng Tháp
                                        <option value="Gia Lai">Gia Lai
                                        <option value="Hà Giang">Hà Giang
                                        <option value="Hà Nam">Hà Nam
                                        <option value="Hà Tĩnh">Hà Tĩnh
                                        <option value="Hải Dương">Hải Dương
                                        <option value="Hậu Giang">Hậu Giang
                                        <option value="Hòa Bình">Hòa Bình
                                        <option value="Hưng Yên">Hưng Yên
                                        <option value="Khánh Hòa">Khánh Hòa
                                        <option value="Kiên Giang">Kiên Giang
                                        <option value="Kon Tum">Kon Tum
                                        <option value="Lai Châu">Lai Châu
                                        <option value="Lâm Đồng">Lâm Đồng
                                        <option value="Lạng Sơn">Lạng Sơn
                                        <option value="Lào Cai">Lào Cai
                                        <option value="Long An">Long An
                                        <option value="Nam Định">Nam Định
                                        <option value="Nghệ An">Nghệ An
                                        <option value="Ninh Bình">Ninh Bình
                                        <option value="Ninh Thuận">Ninh Thuận
                                        <option value="Phú Thọ">Phú Thọ
                                        <option value="Quảng Bình">Quảng Bình
                                        <option value="Quảng Bình">Quảng Bình
                                        <option value="Quảng Ngãi">Quảng Ngãi
                                        <option value="Quảng Ninh">Quảng Ninh
                                        <option value="Quảng Trị">Quảng Trị
                                        <option value="Sóc Trăng">Sóc Trăng
                                        <option value="Sơn La">Sơn La
                                        <option value="Tây Ninh">Tây Ninh
                                        <option value="Thái Bình">Thái Bình
                                        <option value="Thái Nguyên">Thái Nguyên
                                        <option value="Thanh Hóa">Thanh Hóa
                                        <option value="Thừa Thiên Huế">Thừa Thiên Huế
                                        <option value="Tiền Giang">Tiền Giang
                                        <option value="Trà Vinh">Trà Vinh
                                        <option value="Tuyên Quang">Tuyên Quang
                                        <option value="Vĩnh Long">Vĩnh Long
                                        <option value="Vĩnh Phúc">Vĩnh Phúc
                                        <option value="Yên Bái">Yên Bái
                                        <option value="Phú Yên">Phú Yên
                                        <option value="Tp.Cần Thơ">Tp.Cần Thơ
                                        <option value="Tp.Đà Nẵng">Tp.Đà Nẵng
                                        <option value="Tp.Hải Phòng">Tp.Hải Phòng
                                        <option value="Tp.Hà Nội">Tp.Hà Nội
                                        <option value="TP  HCM">TP HCM
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Ngôn ngữ</td>
                                <td> <select name="aa" id="">
                                        <option value="--">Tiếng Việt </option>
                                        <option value="like">English</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiền tệ</td>
                                <td> <select name="aa" id="">
                                        <option value="--">USD </option>
                                        <option value="like">EURO</option>
                                        <option value="--">Yen </option>
                                        <option value="like" selected>VND</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Tự động cập nhật đơn vị tiền</td>
                                <td> <select name="aa" id="">
                                        <option value="--">Có </option>
                                        <option value="like">Không</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Đơn vị chiều dài</td>
                                <td> <select name="aa" id="">
                                        <option value="--">Centimet </option>
                                        <option value="like">Deximet</option>
                                        <option value="like" selected>Met</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Đơn vị cân nặng</td>
                                <td> <select name="aa" id="">
                                        <option value="--">Gam </option>
                                        <option value="like">Lạng</option>
                                        <option value="--" selected>Kilogam </option>
                                    </select>
                                </td>
                            </tr>


                            <tr>
                                <td></td>
                                <td><button class="addcat" style="width:auto;padding:0px 7px;">Cập Nhật <i
                                            class="fas fa-arrow-right"></i></button></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../../assetsAdmin/js/jquery.min.js"></script>
    <script src="../../assetsAdmin/js/chart.min.js"></script>
    <script src="../../assetsAdmin/js/cat.js"></script>

</body>

</html>