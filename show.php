<?php
// Kiểm tra xem form đã được gửi chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy giá trị từ form
    $province = $_POST['province'];
    $district = $_POST['district'];
    $ward = $_POST['ward'];
    
    // In ra các giá trị
    echo "<h1>Kết quả bạn đã chọn:</h1>";
    echo "<div style='display: flex; justify-content: space-between;'>";
    echo "<div style='flex: 1; padding: 10px; border: 1px solid #ddd; margin: 5px;'><strong>Tỉnh:</strong> " . htmlspecialchars($province) . "</div>";
    echo "<div style='flex: 1; padding: 10px; border: 1px solid #ddd; margin: 5px;'><strong>Quận/Huyện:</strong> " . htmlspecialchars($district) . "</div>";
    echo "<div style='flex: 1; padding: 10px; border: 1px solid #ddd; margin: 5px;'><strong>Phường/Xã:</strong> " . htmlspecialchars($ward) . "</div>";
    echo "</div>";
} else {
    echo "<p>Không có dữ liệu gửi lên.</p>";
}
?>
