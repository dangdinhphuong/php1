<?php
//1. Key dưới đây chỉ dùng tạm, khi chạy dịch vụ chính thức bạn cần đăng ký tài khoản của sendgrid.com
// website nhỏ thì dùng tài khoản miễn phí ok
// tham khảo cách đăng ký để lấy key https://saophaixoan.net/search-tut?q=sendgrid
// trong code này chỉ cần lấy key là ok, sau khi gửi thử xong thì verify là ok.
$SENDGRID_API_KEY='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';

require 'vendor/autoload.php';
$email = new \SendGrid\Mail\Mail(); 
///------- bạn chỉnh sửa các thông tin dưới đây cho phù hợp với mục đích cá nhân
// Thông tin người gửi
$email->setFrom("phuongddph10045@fpt.edu.vn", "MRS"); 
// Tiêu đề thư
$email->setSubject("thay pass");
// Thông tin người nhận
global $receiver ,$name_code;

$email->addTo("$receiver", "phuongdd"); 
// Soạn nội dung cho thư
// $email->addContent("text/plain", "Nội dung text thuần không có thẻ html");
$min=100000;
$max=999999;
$a = rand($min,$max);
$email->addContent(
    "text/html", "<h2>hello $name_code:
     mat khau cua ban la $a </h2>"
);
// tiến hành gửi thư
$sendgrid = new \SendGrid($SENDGRID_API_KEY);
try {
    $response = $sendgrid->send($email);
    $_SESSION['code']=$a;
    $_SESSION['email_user']=$receiver;
    //--- mấy dòng print này thích in ra thì in.
    // print $response->statusCode() . "\n";
    // print_r($response->headers());
    // print $response->body() . "\n";

} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}
 