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
  }}
//dùng câu điều kiện này để khi load lại trang web sẽ không bị quay về nền sáng
function switchTheme(e) {
  if (e.target.checked) {
    document.documentElement.setAttribute("data-theme", "dark");
    localStorage.setItem("theme", "dark");
  } else {
    document.documentElement.setAttribute("data-theme", "light");
    localStorage.setItem("theme", "light");
  }}
//tạo chức năng chuyển đổi chủ đề bằng cách thay giá trị của thuộc tinh
toggleSwitch.addEventListener("change", switchTheme);
//tạo sự kiện khi nhấn nút bằng chức năng bên trên
