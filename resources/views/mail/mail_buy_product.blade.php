<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thông báo mua hàng</title>
</head>
<body>
<meta name="csrf-token" content="{{ csrf_token() }}">
Xin chào <h1></h1>
Bạn vừa đặt hàng sản phẩm <b>{{$order_name}}</b> của chúng tôi với tổng chi phí <b>{{$total}}$</b> .<br>
Hãy thanh toán ngay để hoàn thành giao dịch.

</body>
</html>


