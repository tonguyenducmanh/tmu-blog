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