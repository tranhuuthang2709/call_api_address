<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call API các tỉnh</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container">
        <h1>Chọn danh sách tỉnh</h1>
        <form action="show.php" method="post">
            <select name="province" id="province">
                <option value="">Chọn tỉnh</option>
            </select>
            <select name="district" id="district">
                <option value="">Chọn quận</option>
            </select>
            <select name="ward" id="ward">
                <option value="">Chọn phường</option>
            </select>

            <!-- Thêm các input ẩn để gửi tên tỉnh, quận, phường -->
            <input type="hidden" name="province">
            <input type="hidden" name="district">
            <input type="hidden" name="ward">

            <button type="submit">Gửi</button>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js" integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./index.js"></script>
</body>

</html>
