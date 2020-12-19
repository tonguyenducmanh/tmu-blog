<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nơi tình yêu bắt đầu</title>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <!-- em sử dụng link này dẫn đến font chữ của google giúp nhúng trực tiếp vào web của mình mà không cần máy tính phải tải font về -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <!--fontawesome là nơi lưu icon trực tuyến để giảm thiếu việc lưu trữ tại máy tính-->
    <link href='https://manh1403.blogspot.com/favicon.ico' rel='icon' type='image/x-icon'/>
    <!--đây là icon hiển thị ở trên đầu trang web , em lấy icon này trực tiếp từ trang blog của em-->
    <style>
      :root {
  --white: white;
  --black: black;
  --gray: #f0f2f5;
  --green: #151935;
  --nextpage: rgb(23, 205, 255);
  --shadow: rgba(9, 38, 46, 0.6);
}
/*khai báo biến màu cho nền sáng và nền tối */
[data-theme="dark"] {
  --white: #151935;
  --black: white;
  --gray: #1c2340;
  --green: #39ef7c;
  --nextpage: rgb(23, 255, 158);
  --shadow: rgb(23, 205, 255, 0.3);
}
/*khai báo font chữ cho toàn bộ web*/
* {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  font-weight: 600;
  color: var(--black);
  margin: 0;
  padding: 0;
  cursor: url(http://cur.cursors-4u.net/cursors/cur-11/cur1054.cur), auto !important;
}
/*thuộc tính dưới đây dùng để định dạng thanh cuộn trang*/
body::-webkit-scrollbar {
  width: 15px;
}
body::-webkit-scrollbar-track {
  background-color: var(--white);
}
body::-webkit-scrollbar-thumb {
  background-color: var(--green);
}
::selection {
  background:#d3d3d3; 
  color:#555;
}
::-moz-selection {
  background:#d3d3d3; 
  color:#555;
}
::-webkit-selection {
  background:#d3d3d3; 
  color:#555;
}
.logo {
  background-color: var(--white);
}
.logo-img {
  width: 10%;
  display: block;
  margin: auto;
  border-radius: 50%;
}
#section {
  background-color: var(--gray);
}
#header {
  background-color: var(--white);
  padding: 10px;
  text-align: center;
}
#header > div:nth-child(1) {
  font-family: "Dancing Script", cursive;
  font-size: 2rem;
  margin-bottom: 10px;
  font-weight: 400;
}
#header > div:nth-child(2) {
  font-size: 20px;
  font-weight: 480;
}
#menu {
  display: flex;
  justify-content: center;
  list-style-type: none;
  position: relative;
}

#menu li > .submenu {
  display: none;
  list-style-type: none;
  padding: 0;
  margin: 0;
}
#menu li:hover > .submenu {
  display: block;
  position: absolute;
  background-color: var(--white);
  box-sizing: border-box;
  border-radius: 10px;
  margin-top: 10px;
  margin-left: -40px;
  width: 190px;
  text-align: left;
  box-shadow: 0px 2px 10px var(--shadow);
}
li {
  padding: 15px 20px;
  position: relative;
}
a {
  text-decoration: none;
  padding: 5px;
}
a:link {
  color: var(--black);
}
a:visited {
  color: var(--black);
}
a:hover {
  cursor: url(http://ani.cursors-4u.net/cursors/cur-12/cur1080.cur), auto !important;
  color: transparent;
  background-image: linear-gradient(to right, #1dc7e7, #1fe6b8);
  -webkit-background-clip: text;
}
.content {
  padding: 3% 15%;
  text-align: left;
}
.content-header {
  text-align: center;
  margin: 20px;
}
.content-title {
  color: var(--green);
  font-size: 50px;
  text-align: center;
  font-weight: 600;
}
.content-info {
  color: var(--white);
  padding: 10px;
}
.content-author {
  color: var(--black);
  font-weight: 600;
}
.content-section {
  background-color: var(--white);
  border-radius: 10px;
  padding: 40px;
  box-shadow: 0px 2px 10px var(--shadow);
}
.present {
  font-family: "Dancing Script", cursive;
  font-size: 22px;
  font-weight: 700;
}
.text {
  font-family: "Dancing Script", cursive;
  color: rgb(255, 51, 51);
  font-weight: 700;
  font-size: 1, 4rem;
}
.example {
  background-color: #1e2431;
  padding: 40px;
  border-radius: 8px;
  box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.6);
}
.example-one {
  color: #fffcec;
}
.example-two {
  color: #ffd465;
}
.example-text-one {
  color: rgb(23, 205, 255);
}
.example-text-two {
  color: #a9e068;
}
.example-text-three {
  color: #ffd16d;
}
.example-text-four {
  color: #ff9a6b;
}
.nextpage {
  display: flex;
  justify-content: space-between;
  font-size: 1.2rem;
}
.nextpage > a:link {
  color: var(--nextpage);
  font-family: "Dancing Script", cursive;
}
.nextpage > a:visited {
  color: var(--nextpage);
  font-family: "Dancing Script", cursive;
}
/*tùy chỉnh ô đăng nhập*/
.form-admin {
  text-align: right;
  background-color: var(--white);
  border-radius: 10px;
  padding: 10px;
  margin: 2% 0% -2% 80%;
  box-shadow: 0px 2px 10px var(--shadow);
  align-items: center;
  position: fixed;
  bottom: 30px;
  right: 10px;
  width: 10%;
  z-index: 1000;
}
input {
  cursor: url(http://ani.cursors-4u.net/cursors/cur-12/cur1080.cur), auto !important; 
  width: 100%;
  background-color: var(--white);
  border: 1px solid var(--green);
  border-radius: 5px;
}
.button {
  cursor: url(http://ani.cursors-4u.net/cursors/cur-12/cur1080.cur), auto !important;
  background-color: unset;
  border: none;
  cursor: pointer;
  text-align: center;
  font-size: 15px;
}
.theme-switch-wrapper {
  display: flex;
  align-items: center;
  position: fixed;
  bottom: 10px;
  left: 10px;
  z-index: 1000;
}
/*cố định vị trí cho checkbox theme*/
.theme-switch {
  display: inline-block;
  height: 30px;
  position: relative;
  width: 60px;
}
.theme-switch input {
  display: none;
}
.slider {
  cursor: url(http://ani.cursors-4u.net/cursors/cur-12/cur1080.cur), auto !important;
  background-color: #c3c5c9;
  bottom: 0;
  cursor: pointer;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  transition: 0.8s;
}
.slider:before {
  background-color: white;
  bottom: 4px;
  content: "";
  height: 23px;
  left: 4px;
  position: absolute;
  transition: 0.8s;
  width: 23px;
}
input:checked + .slider {
  background-color: var(--green);
}
input:checked + .slider:before {
  transform: translateX(26px);
}
.slider.round {
  border-radius: 34px;
}
.slider.round:before {
  border-radius: 50%;
}
.comment{
  cursor: url(http://ani.cursors-4u.net/cursors/cur-12/cur1080.cur), auto !important;
  width: 100%;
  height: 100px;
  background-color: var(--white);
  border: 1px solid var(--green);
  border-radius: 10px;
  padding: 10px;
  margin: 2px;
}
.comment-name{
  margin: 2px;
  margin-bottom: 4px;
  width: 150%;
  padding: 10px;
  border-radius: 10px;
  padding-left: 40px;
}
.comment-info{
  display: flex;
  justify-content: space-between;
}
.comment-button{
  cursor: url(http://ani.cursors-4u.net/cursors/cur-12/cur1080.cur), auto !important;
  background-image: linear-gradient(to right, #1dc7e7, #1fe6b8);
  height: 40px;
  border: none;
  width: 180px;
  margin: 20px;
  color: white;
  font-size: 13px;
  font-weight: 500;
  margin-top: 40px;
  border-radius: 20px;
  box-shadow: 0px 3px 20px rgba(45, 163, 196, 0.6);
  cursor: pointer;;
}
.comment-info i{
  position: absolute;
  padding: 15px;
  color: var(--green);
}
#footer {
  padding: 15px;
  text-align: center;
}
.footer{
  background-color: var(--white);
}
.footer-info{
  display: flex;
  justify-content: center;
}
.footer-info-list{
  padding: 40px;
}
.footer-info-list :nth-child(1){
  color: transparent;
  background-image: linear-gradient(to right, #1dc7e7, #1fe6b8);
  -webkit-background-clip: text;
}


    </style>
</head>

<body>
    <div class="logo"><img class="logo-img"
            src="./a.jpg"
            alt="đây là ảnh đại diện lấy từ trang facebook của tôi">
        <!--hình ảnh được dùng làm logo được dẫn link trực tiếp từ trang facebook cá nhân của em-->
    </div>
    <div id="header">
        <div>Chào mừng bạn đã đến với blog của Mạnh</div>
        <div>Đây sẽ là nơi mình đăng tải các kiến thức liên quan đến Frontend.</div>
        <div id="menubar">
            <ul id="menu">
                <li>
                    <a href="#">HTML</a>
                    <ul class="submenu">
                        <li><a href="#">HTML là gì ?</a></li>
                        <li><a href="#">Yếu tố ngữ nghĩa</a></li>
                        <li><a href="#">Danh sách thẻ</a></li>
                        <li><a href="#">Mẫu html </a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">CSS</a>
                    <ul class="submenu">
                        <li><a href="#">CSS là gì ?</a></li>
                        <li><a href="#">CSS selector</a></li>
                        <li><a href="#">CSS display</a></li>
                        <li><a href="#">CSS transition </a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">JAVASCRIPT</a>
                    <ul class="submenu">
                        <li><a href="#">JAVASCRIPT là gì ?</a></li>
                        <li><a href="#">Biến trong JS</a></li>
                        <li><a href="#">Sự kiện trong JS</a></li>
                        <li><a href="#">Vòng lặp JS </a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">JQUERY</a>
                    <ul class="submenu">
                        <li><a href="#">JQUERY là gì ?</a></li>
                        <li><a href="#">JQUERY selector</a></li>
                        <li><a href="#">JQUERY event</a></li>
                        <li><a href="#">JQUERY method </a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">BOOTSTRAP</a>
                    <ul class="submenu">
                        <li><a href="#">BOOTSTRAP là gì ?</a></li>
                        <li><a href="#">BS grid</a></li>
                        <li><a href="#">BS typography</a></li>
                        <li><a href="#">BS table </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div id="section">
        <div id="main">
            <div class="content">
                <div class="content-header">
                    <div class="content-title">Sử dụng CSS Flexbox căn bản</div>
                    <div class="content-title">phần 1 </div>
                    <div class="content-info">
                        <span class="content-time"><i class="far fa-clock"></i> 28/4/2020</span>
                        <span class="content-author">Đức Mạnh</span>
                    </div>
                </div>
                <div class="content-section">
                    <p>Trong các phiên bản CSS trước mỗi khi chúng ta muốn hiển thị nhiều phần tử nằm trên cùng một dòng
                        thì phải sử dụng thuộc tính <span class="text">float </span> kèm theo đó là <span
                            class="text">clear float </span> để chia cột . Tuy nhiên cách làm này chỉ phù hợp nếu như
                        bạn muốn thiết kế web trên máy tính , còn khi sử dụng điện thoại truy cập thì các phần tử hiển
                        thị sẽ rất lộn xộn.</p>
                    <br>
                    <p>Trong thời đại công nghiệp 4.0 , khi mà mọi người thường có xu hướng làm mọi thứ trên điện thoại
                        , từ mua sắm đến đọc báo thì việc sử dụng <span class="text">float </span> có thể xem như rất
                        khó khăn cho các lập trình viên do phải thiết kế web trên nhiều thiết bị.</p>
                    <br>
                    <p>Từ đó dẫn tới sự ra đời của một thuộc tính mới nhằm đơn giản hóa việc sắp xếp bố cục trong thiết
                        kế.</p>
                    <br>
                    <div class="present"># Thuộc tính Display: Flex</div><br>
                    <p>Để sử dụng flex trong css thì đơn giản là chúng ta chỉ cần sử dụng thuộc tính <span
                            class="text">display: flex</span>. Mình có 1 ví dụ cơ bản dưới đây :</p><br>
                    <div class="example example-one">
                        <!-- &lt và &gt dùng để tạo 2 kí tự <> trong html-->
                        &lt<span class="example-text-one">div </span><span class="example-text-three">class</span>=<span
                            class="example-text-two">"box"</span> &gt <br>
                        &nbsp&nbsp&nbsp&nbsp&nbsp &lt<span class="example-text-one">div</span> <span
                            class="example-text-three">class</span>=<span class="example-text-two">"item"</span>
                        &gt&lt/<span class="example-text-one">div</span>&gt<br>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&lt<span class="example-text-one">div</span> <span
                            class="example-text-three">class</span>=<span class="example-text-two">"item"</span>
                        &gt&lt/<span class="example-text-one">div</span>&gt<br>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&lt<span class="example-text-one">div</span> <span
                            class="example-text-three">class</span>=<span class="example-text-two">"item"</span>
                        &gt&lt/<span class="example-text-one">div</span>&gt<br>
                        &lt/<span class="example-text-one">div></span>
                    </div>
                    <br>
                    <p>Và sau đó mình dùng css như thế này :</p><br>
                    <div class="example example-two">
                        .box { <br>
                        &nbsp&nbsp&nbsp&nbsp&nbsp <span class="example-text-one">display</span> : <span
                            class="example-text-four">flex</span> ; <br>
                        &nbsp&nbsp&nbsp&nbsp&nbsp <span class="example-text-one">width</span> : <span
                            class="example-text-four">100%</span>;<br>
                        &nbsp&nbsp&nbsp&nbsp&nbsp <span class="example-text-one">background-color</span> : <span
                            class="example-text-four">skyblue</span>;<br>
                        &nbsp&nbsp&nbsp&nbsp&nbsp <span class="example-text-one">height</span> : <span
                            class="example-text-four">auto</span>;<br>
                        }
                        <!--&nbsp dùng để tạo dấu cách trong html-->
                    </div>
                    <br>
                    <div class="nextpage">
                        <a href="#">&lt Trang trước</a>
                        <a href="#">Trang tiếp theo &gt</a>
                    </div>
                    <div>
                    </div>

                    <form action="" method="post" class="form-admin">
                        <i class="fas fa-user-shield"></i>
                        <span class="text" style="color:var(--black)">Họ tên</span> <input type="text" name="fullname"
                          autocomplete="off"  value=""><br>
                        <span class="text" style="color:var(--black)"> Mật khẩu </span><input type="password"
                        autocomplete="off" name="password" value=""><br>
                        <button type="submit" class="button" style="color:var(--black)" formaction="#footer">Đăng nhập</button>
                    </form>
                </div>
            </div>
<!--đây là phần bình luận-->
            <div class="content">
                <div class="content-section">
                <form action="" method="post" class="form-comment">
                    <textarea placeholder="Tham gia bình luận" name="cmt" class="comment"></textarea>
                    <div class="comment-info">
                        <div>
                        <i class="far fa-user"></i>
                         <input placeholder="Tên bạn *" type="text" name="cmt-name" class="comment-name"
                         autocomplete="off" value="">
                        <br>
                        <i class="far fa-envelope"></i>
                         <input placeholder="Email *" type="text" name="cmt-email" class="comment-name"
                         autocomplete="off" value=""><br>
                    </div>
                    <button type="submit" class="comment-button" formaction="#footer">ĐĂNG BÌNH LUẬN NÀO</button>
                    </div>
                </form>
                <!-đoạn mã php bắt đầu từ đây-->
                <?php 
$username = "manh"; // Khai báo username
$password = "1111";      // Khai báo password
$server   = "localhost";   // Khai báo server
$dbname   = "blog";      // Khai báo database
error_reporting(0);// tắt báo cáo lỗi khi chưa đăng nhập
if($_POST["fullname"] != $username){
echo "<span style='color:gray;'><br><br>Bạn đang truy cập page dưới dạng khách</span>";
}else{
    if($_POST["password"] != $password){
        echo "<span style='color:gray';'><br><br>Bạn đang truy cập page dưới dạng khách</span>";
}else{
 echo"<br><br> <p style='color:#20E6B9; margin-left:10px;margin-bottom:5px;'><i class='far fa-chart-bar'></i>   Đây là thống kê lượt truy cập của tuần này</p>";
// Kết nối database tintuc
$connect = new mysqli($server, $username, $password, $dbname);
//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if ($connect->connect_error) {
    die("Không kết nối :" . $conn->connect_error);
    exit();
}
//Code xử lý, insert dữ liệu vào table
$sql     = "SELECT * FROM bai_dang";
$ket_qua = $connect->query($sql);

//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
if (!$ket_qua) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
    exit();
}
//Dùng vòng lặp while truy xuất các phần tử trong table
while ($row = $ket_qua->fetch_array(MYSQLI_ASSOC)) {
  $row['date']= date("d-m-Y", strtotime($row['date']));
  //dòng này dùng để đổi định dạng ngày từ định dạng chuẩn mysql sang định dạng ngày tháng của Việt Nam
    echo "&nbsp&nbsp&nbsp&nbsp".$row['id'] . " ";
    echo "<a href='#footer'>".$row['title']."</a>";
    echo "(" . $row['date'] . ") ";
    echo "&nbsp&nbsp&nbsp". $row['view']. " lượt xem";
    echo "&nbsp&nbsp&nbsp&nbsp";
    echo "<br>";
}
//Đóng kết nối database tintuc
$connect->close();
}}?>
<?php
    error_reporting(0);// tắt báo cáo lỗi khi chưa đăng nhập
    if(isset($_POST["cmt"])){
    echo "<br>"."<span style='color:#20E6B9;'>"."<i class='far fa-user' style='margin-right:10px;'></i>".($_POST["cmt-name"]). "</span>";
    echo "<span style='margin-left:10px;'>".($_POST["cmt"])."</span>";
    echo '<button type="submit" style="margin:5px;width:100px;margin-left:30px;" class="comment-button" formaction="#footer"><i style="color:white" class="far fa-comments"></i>TRẢ LỜI</button>';
  }
?>
<br>
                    <a href="#" class="nextpage"style='color: var(--nextpage);
                    
                    font-family: "Dancing Script", cursive;display:inline;'> &lt Trở về đầu trang</a>
                </div>
            </div>  
        </div>
        <div class="footer">
            <div class="footer-info">
            <div class="footer-info-list">
                <span>HỌC PHẦN THIẾT KẾ WEB</span><br>
                <span>Mã LHP: 2020ECIT0731</span><br>
                <span>Giáo viên giảng dạy: Bùi Quang Trường</span><br>
                <span>Số lượng tín chỉ: 3</span><br> 
            </div>
            <div class="footer-info-list">
                <span>NHÓM 5</span><br>
                <span>Số lượng thành viên: 9</span><br>
                <span>Chức vụ: nhóm trưởng</span><br>
                
            </div>
            <div class="footer-info-list">
                <span>THÔNG TIN LIÊN HỆ</span><br>
                <span>Tô Nguyễn Đức Mạnh</span><br>
                <span>Lớp: K54I5</span><br>
                <span>fb.com/tonguyenducmanh</span><br>
            </div>
        </div>
        <div id="footer">Copyright &copy 2020 this website is made with <span
                style="color:rgb(240, 50, 107)">&#10084</span> by TMUER</a></div>
        <!--&#10084 là mã dùng trong html để hiển thị ra biểu tượng hình trái tim-->
        <div class="theme-switch-wrapper">
            <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox" />
                <div class="slider round"></div>
            </label>
        </div>
    </div>
        <!--đoạn mã js bắt đầu từ đây-->
        <script>
          const toggleSwitch = document.querySelector(
  '.theme-switch input[type="checkbox"]'
);
//khai báo hằng input checkbox cho cái nút
const currentTheme = localStorage.getItem("theme");
//khai báo hằng lưu trữ chủ đề đang được dùng
if (currentTheme) {
  document.documentElement.setAttribute("data-theme", currentTheme);
  if (currentTheme === "dark") {
    toggleSwitch.checked = true;
  }
}
//dùng câu điều kiện này để khi load lại trang web sẽ không bị quay về nền sáng
function switchTheme(e) {
  if (e.target.checked) {
    document.documentElement.setAttribute("data-theme", "dark");
    localStorage.setItem("theme", "dark");
  } else {
    document.documentElement.setAttribute("data-theme", "light");
    localStorage.setItem("theme", "light");
  }
}
//tạo chức năng chuyển đổi chủ đề bằng cách thay giá trị của thuộc tinh
toggleSwitch.addEventListener("change", switchTheme);
//tạo sự kiện khi nhấn nút bằng chức năng bên trên

        </script>
</body>

</html>