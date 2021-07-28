<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'onlineshop' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9zzt:sbCBjfE(ft]}C48v|=U1qQFCN#C`g[k[,L/jqzL7-)l(8G}Mh}icSFnE:pH' );
define( 'SECURE_AUTH_KEY',  'W}(F9efq4Nsxjrw&nnv(P,TL]ImcCa}9M#8R[|e}c_+^yT>#5qd CshP6yf*N~{O' );
define( 'LOGGED_IN_KEY',    'UVXw,c{67Geg}]6T3AqgGb!W Pn$%j=e%^xHm T@a^Ag59,>a(;]Z+a6)q2(!fcA' );
define( 'NONCE_KEY',        '|,>34Lc[{  eJc+HC;|x-g!LH~qOpA9{?l_fyw}B{h5b (?Nev{ #cxGYHvODm[m' );
define( 'AUTH_SALT',        'DX)GkehBN!oz^h*Z(Bh!Kz_d=<b>C*q(z)@so4TA|8QW{ft/CWICv!@5Mj_r:Nbw' );
define( 'SECURE_AUTH_SALT', ']3e0&^gpE|^JuM#e@JWVqjS/GiOK,cAiImIf w%eIXhCDNaBw3<j|N=DiY%6X_:y' );
define( 'LOGGED_IN_SALT',   'h(i2%{sM6Kiu|P*qoJBqBYQ:E.Q&[e[=ASi1Roc]PGUw);(qmCYzZ4nLZU:96h$ ' );
define( 'NONCE_SALT',       'O=LLI?2i4pL_^*w7g)ORJJ};wh3=_6ZR;q6tF*t:&hY+8tTQNk-Z.~@h3_~RvOWH' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
