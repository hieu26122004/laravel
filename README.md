# MẠNG XÃ HỘI - PHP-LARAVEL

- **Source code** : https://github.com/hieu26122004/laravel
- **Link demo** : http:localhost:8000
- **Link web public** :

## Thành viên
| Mã Sinh Viên      | Họ và Tên           |
| ----------------- | ------------------- |
| 22010160          |   Nguyễn Huy Hiếu   |

## Giới thiệu
Ứng dụng mạng xã hội được xây dựng nhằm mục đích cung cấp một nền tảng trực tuyến cho phép người dùng kết nối, chia sẻ thông tin và tương tác với nhau một cách hiệu quả

## Chức năng chính

- **Đăng nhập**: Người dùng có thể đăng nhập vào hệ thống.
- **Đăng ký**: Người dùng có thể tạo tài khoản mới.
- **Đăng xuất**: Người dùng có thể đăng xuất khỏi hệ thống.
- **CRUD bài viết**: Người dùng có thể tạo, đọc, cập nhật, và xóa bài viết.
- **Tìm kiếm bài viết**: Người dùng có thể tìm kiếm bài viết thông qua từ khóa.
- **Phân trang**: Hỗ trợ phân trang để hiển thị bài viết trong các trang khác nhau.

## Công nghệ sử dụng
- **Laravel**: Framework PHP cho phát triển ứng dụng web.
- **Blade**: Hệ thống template của Laravel để tạo giao diện người dùng.
- **Bootstrap**: Bootstrap để thiết kế giao diện đẹp và responsive.

## Cài đặt

### Yêu cầu hệ thống

- PHP >= 7.3
- Composer
- MySQL 
- Laravel 8.x hoặc mới hơn

### Cài đặt dự án

1. Clone repository về máy của bạn:
   ```bash
   git clone https://github.com/hieu26122004/laravel.git
   ```

2. Cài đặt các dependencies của Laravel bằng Composer:
   ```bash
   cd laravel
   composer install
   ```

3. Tạo file `.env` và cấu hình cơ sở dữ liệu:
   ```bash
   cp .env.example .env
   ```

4. Cấu hình kết nối cơ sở dữ liệu trong file `.env`:
   ```ini
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=
   DB_USERNAME=
   DB_PASSWORD=
   ```

5. Chạy lệnh để tạo các bảng trong cơ sở dữ liệu:
   ```bash
   php artisan migrate
   ```

### Chạy ứng dụng

Để chạy ứng dụng trên server nội bộ, sử dụng lệnh sau:
```bash
php artisan serve
```
Ứng dụng sẽ được truy cập tại `http://127.0.0.1:8000`.

## Luồng hoạt động

### Đăng ký (Register)
- Người dùng gửi yêu cầu đăng ký với thông tin như tên, email, mật khẩu.
- Hệ thống kiểm tra thông tin hợp lệ và email đã tồn tại hay chưa.
- Nếu hợp lệ, tạo tài khoản mới và trả về thông báo thành công.
- Nếu thất bại, trả về lỗi phù hợp.

### Đăng nhập (Login)
- Người dùng gửi yêu cầu đăng nhập với email và mật khẩu.
- Hệ thống kiểm tra thông tin đăng nhập.
- Nếu thông tin đúng, tạo phiên làm việc và chuyển hướng đến trang chính.
- Nếu thông tin sai, trả về thông báo lỗi.

### Đăng xuất (Logout)
- Người dùng gửi yêu cầu đăng xuất.
- Hệ thống hủy phiên làm việc và chuyển hướng về trang đăng nhập.

### CRUD Bài viết
- **Tạo bài viết**: Người dùng gửi nội dung bài viết. Hệ thống lưu và trả về bài viết vừa tạo.
- **Đọc bài viết**: Người dùng gửi yêu cầu lấy danh sách bài viết hoặc chi tiết bài viết theo ID.
- **Cập nhật bài viết**: Người dùng gửi yêu cầu cập nhật với thông tin mới của bài viết.
- **Xóa bài viết**: Người dùng gửi yêu cầu xóa bài viết theo ID.

### Tìm kiếm bài viết
- Người dùng gửi từ khóa tìm kiếm.
- Hệ thống truy vấn và trả về danh sách bài viết phù hợp.

### Phân trang
- Người dùng gửi yêu cầu với tham số trang và giới hạn số lượng bài viết.
- Hệ thống trả về danh sách bài viết của trang đó và thông tin phân trang.

## Kết luận

Đây là một ứng dụng mạng xã hội đơn giản với các chức năng cơ bản, giúp kết nối với những người dùng khác. Dự án này có thể được mở rộng với nhiều tính năng phức tạp hơn trong tương lai.

## License

MIT License. Xem [LICENSE](LICENSE) để biết thêm chi tiết.

