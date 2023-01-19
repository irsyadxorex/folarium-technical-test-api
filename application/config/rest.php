<?php

defined('BASEPATH') or exit('Tidak ada akses skrip langsung yang diizinkan');

/*
|------------------------------------------------ -------------------------
| Protokol HTTP
|------------------------------------------------ -------------------------
|
| Setel untuk memaksa penggunaan HTTPS untuk panggilan REST API
|
*/
$config['force_https'] = false;

/*
|------------------------------------------------ -------------------------
| Format Keluaran REST
|------------------------------------------------ -------------------------
|
| Format default respons
|
| 'array': Struktur data array
| 'csv': File yang dipisahkan koma
| 'json': Menggunakan json_encode(). Catatan: Jika string kueri GET
| disebut 'callback' diteruskan, maka jsonp akan dikembalikan
| 'html' HTML menggunakan pustaka tabel di CodeIgniter
| 'php': Menggunakan var_export()
| 'serial': Menggunakan serialisasi()
| 'xml': Menggunakan simplexml_load_string()
|
*/
$config['rest_default_format'] = 'json';

/*
|------------------------------------------------ -------------------------
| Format Output yang Didukung REST
|------------------------------------------------ -------------------------
|
| Pengaturan berikut berisi daftar format yang didukung/diizinkan.
| Anda dapat menghapus format yang tidak ingin Anda gunakan.
| Jika format default $config['rest_default_format'] tidak ada di dalamnya
| $config['rest_supported_formats'], itu akan ditambahkan secara diam-diam selama
| Inisialisasi REST_Controller.
|
*/
$config['rest_supported_formats'] = [
    'json',
    'Himpunan',
    'csv',
    'html',
    'jsonp',
    'php',
    'serial',
    'xml',
];

/*
|------------------------------------------------ -------------------------
| Nama Bidang Status REST
|------------------------------------------------ -------------------------
|
| Nama kolom untuk status di dalam respons
|
*/
$config['rest_status_field_name'] = 'status';

/*
|------------------------------------------------ -------------------------
| Nama Bidang Pesan REST
|------------------------------------------------ -------------------------
|
| Nama kolom untuk pesan di dalam respons
|
*/
$config['rest_message_field_name'] = 'kesalahan';

/*
|------------------------------------------------ -------------------------
| Aktifkan Permintaan Emulasi
|------------------------------------------------ -------------------------
|
| Haruskah kami mengaktifkan emulasi permintaan (misalnya digunakan dalam permintaan Mootools)
|
*/
$config['enable_emulate_request'] = true;

/*
|------------------------------------------------ -------------------------
| REST Realm
|------------------------------------------------ -------------------------
|
| Nama REST API yang dilindungi kata sandi ditampilkan pada dialog login
|
| misalnya: API REST Rahasia Saya
|
*/
$config['rest_realm'] = 'REST API';

/*
|------------------------------------------------ -------------------------
| Masuk SISA
|------------------------------------------------ -------------------------
|
| Setel untuk menentukan REST API yang harus masuk
|
| SALAH Tidak perlu login
| 'dasar' Login tidak aman
| 'digest' Login lebih aman
| 'sesi' Periksa variabel sesi PHP. Lihat 'auth_source' untuk menyetel
| kunci otorisasi
|
*/
$config['rest_auth'] = false;

/*
|------------------------------------------------ -------------------------
| Sumber Masuk SISANYA
|------------------------------------------------ -------------------------
|
| Apakah login diperlukan dan jika demikian, toko pengguna untuk digunakan
|
| '' Gunakan pengguna berbasis konfigurasi atau pengujian wildcard
| 'ldap' Gunakan autentikasi LDAP
| 'perpustakaan' Gunakan perpustakaan autentikasi
|
| Catatan: Jika 'rest_auth' disetel ke 'session', ubah 'auth_source' menjadi nama variabel session
|
*/
$config['auth_source'] = 'ldap';

/*
|------------------------------------------------ -------------------------
| Izinkan Otentikasi dan Kunci API
|------------------------------------------------ -------------------------
|
| Di mana Anda ingin memiliki login Dasar, Intisari atau Sesi, tetapi juga ingin menggunakan Kunci API (untuk membatasi
| permintaan dll), setel ke TRUE;
|
*/
$config['allow_auth_and_keys'] = true;
$config['strict_api_and_auth'] = true; // memaksa penggunaan api dan autentikasi sebelum permintaan api yang valid dibuat

/*
|------------------------------------------------ -------------------------
| Kelas dan Fungsi Login REST
|------------------------------------------------ -------------------------
|
| Jika autentikasi pustaka digunakan, tentukan nama kelas dan fungsi
|
| Fungsi harus menerima dua parameter: class->function($username, $password)
| Dalam kasus lain, ganti fungsi _perform_library_auth di controller Anda
|
| Untuk otentikasi intisari, fungsi perpustakaan harus mengembalikan yang sudah disimpan
| md5(username:restrealm:password) untuk nama pengguna itu
|
| misalnya: md5('admin:REST API:1234') = '1e957ebc35631ab22d5bd6526bd14ea2'
|
*/
$config['auth_library_class'] = '';
$config['auth_library_function'] = '';

/*
|------------------------------------------------ -------------------------
| Ganti jenis autentikasi untuk kelas/metode tertentu
|------------------------------------------------ -------------------------
|
| Setel jenis autentikasi khusus untuk metode dalam kelas (pengontrol)
|
| Tetapkan entri konfigurasi sebanyak yang diperlukan. Metode apa pun yang tidak disetel akan menggunakan nilai konfigurasi 'rest_auth' default.
|
| misalnya:
|
| $config['auth_override_class_method']['deals']['view'] = 'tidak ada';
| $config['auth_override_class_method']['deals']['insert'] = 'digest';
| $config['auth_override_class_method']['accounts']['user'] = 'dasar';
| $config['auth_override_class_method']['dashboard']['*'] = 'none|digest|basic';
|
| Di sini 'kesepakatan', 'akun' dan 'dasbor' adalah nama pengontrol, 'tampilan', 'sisipkan' dan 'pengguna' adalah metode di dalamnya. Tanda bintang juga dapat digunakan untuk menentukan metode otentikasi untuk seluruh metode kelas. Contoh: $config['auth_override_class_method']['dashboard']['*'] = 'basic'; (CATATAN: tinggalkan '_get' atau '_post' dari akhir nama metode)
| Nilai yang dapat diterima adalah; 'tidak ada', 'intisari' dan 'dasar'.
|
*/
// $config['auth_override_class_method']['deals']['view'] = 'tidak ada';
// $config['auth_override_class_method']['deals']['insert'] = 'digest';
// $config['auth_override_class_method']['akun']['pengguna'] = 'dasar';
// $config['auth_override_class_method']['dashboard']['*'] = 'dasar';

// ---Hapus baris daftar tanda komentar untuk tes unit wildard
// $config['auth_override_class_method']['wildcard_test_cases']['*'] = 'dasar';

/*
|------------------------------------------------ -------------------------
| Ganti jenis autentikasi untuk 'metode kelas/metode/HTTP' tertentu
|------------------------------------------------ -------------------------
|
| contoh:
|
| $config['auth_override_class_method_http']['deals']['view']['get'] = 'none';
| $config['auth_override_class_method_http']['deals']['insert']['post'] = 'none';
| $config['auth_override_class_method_http']['deals']['*']['options'] = 'tidak ada';
*/

// ---Hapus baris daftar tanda komentar untuk tes unit wildard
// $config['auth_override_class_method_http']['wildcard_test_cases']['*']['options'] = 'dasar';

/*
|------------------------------------------------ -------------------------
| Nama Pengguna Masuk REST
|------------------------------------------------ -------------------------
|
| Larik nama pengguna dan kata sandi untuk masuk, jika ldap dikonfigurasi, ini akan diabaikan
|
*/
$config['rest_valid_logins'] = ['admin' => '1234'];

/*
|------------------------------------------------ -------------------------
| Daftar Putih IP Global
|------------------------------------------------ -------------------------
|
| Batasi koneksi ke server REST Anda ke alamat IP yang terdaftar putih
|
| Penggunaan:
| 1. Setel ke TRUE dan pilih opsi autentikasi untuk keamanan ekstrem (IP klien
| alamat harus dalam daftar putih dan mereka juga harus masuk)
| 2. Setel ke TRUE dengan autentikasi disetel ke FALSE untuk mengizinkan akses IP yang terdaftar putih tanpa login
| 3. Setel ke FALSE tetapi setel 'auth_override_class_method' ke 'white-list' ke
| batasi metode tertentu untuk IP dalam daftar putih Anda
|
*/
$config['rest_ip_whitelist_enabled'] = false;

/*
|------------------------------------------------ -------------------------
| REST Menangani Pengecualian
|------------------------------------------------ -------------------------
|
| Tangani pengecualian yang disebabkan oleh pengontrol
|
*/
$config['rest_handle_exception'] = true;

/*
|------------------------------------------------ -------------------------
| Daftar Putih IP REST
|------------------------------------------------ -------------------------
|
| Batasi koneksi ke server REST Anda dengan dipisahkan koma
| daftar alamat IP
|
| misalnya: '123.456.789.0, 987.654.32.1'
|
| 127.0.0.1 dan 0.0.0.0 diizinkan secara default
|
*/
$config['rest_ip_whitelist'] = '';

/*
|------------------------------------------------ -------------------------
| Daftar Hitam IP Global
|------------------------------------------------ -------------------------
|
| Cegah koneksi ke server REST dari alamat IP yang masuk daftar hitam
|
| Penggunaan:
| 1. Setel ke TRUE dan tambahkan alamat IP apa saja ke 'rest_ip_blacklist'
|
*/
$config['rest_ip_blacklist_enabled'] = false;

/*
|------------------------------------------------ -------------------------
| Daftar Hitam IP REST
|------------------------------------------------ -------------------------
|
| Cegah koneksi dari alamat IP berikut
|
| misalnya: '123.456.789.0, 987.654.32.1'
|
*/
$config['rest_ip_blacklist'] = '';

/*
|------------------------------------------------ -------------------------
| Grup Basis Data REST
|------------------------------------------------ -------------------------
|
| Hubungkan ke grup database untuk kunci, logging, dll. Itu hanya akan terhubung
| jika Anda mengaktifkan salah satu fitur ini
|
*/
$config['rest_database_group'] = 'default';

/*
|------------------------------------------------ -------------------------
| Nama Tabel Kunci REST API
|------------------------------------------------ -------------------------
|
| Nama tabel di database Anda yang menyimpan kunci API
|
*/
$config['rest_keys_table'] = 'kunci';

/*
|------------------------------------------------ -------------------------
| REST Aktifkan Tombol
|------------------------------------------------ -------------------------
|
| Saat diatur ke TRUE, REST API akan mencari nama kolom yang disebut 'key'.
| Jika tidak ada kunci yang diberikan, permintaan akan menghasilkan kesalahan. Untuk mengesampingkan
| nama kolom lihat 'rest_key_column'
|
| Skema tabel default:
| BUAT TABEL `kunci` (
|       `id` INT(11) NOT NULL AUTO_INCREMENT,
|       `user_id` INT(11) NOT NULL,
|       `key` VARCHAR(40) NOT NULL,
|       `level` INT(2) NOT NULL,
|       `ignore_limits` TINYINT(1) NOT NULL DEFAULT '0',
|       `is_private_key` TINYINT(1)  NOT NULL DEFAULT '0',
|       `ip_addresses` TEXT NULL DEFAULT NULL,
|       `date_created` INT(11) NOT NULL,
|       PRIMARY KEY (`id`)
|   ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
|
*/
$config['rest_enable_keys'] = false;

/*
|--------------------------------------------------------------------------
| REST Table Key Column Name
|--------------------------------------------------------------------------
|
| If not using the default table schema in 'rest_enable_keys', specify the
| column name to match e.g. my_key
|
*/
$config['rest_key_column'] = 'key';

/*
|--------------------------------------------------------------------------
| REST API Limits method
|--------------------------------------------------------------------------
|
| Specify the method used to limit the API calls
|
| Available methods are :
| $config['rest_limits_method'] = 'IP_ADDRESS'; // Put a limit per ip address
| $config['rest_limits_method'] = 'API_KEY'; // Put a limit per api key
| $config['rest_limits_method'] = 'METHOD_NAME'; // Put a limit on method calls
| $config['rest_limits_method'] = 'ROUTED_URL';  // Put a limit on the routed URL
|
*/
$config['rest_limits_method'] = 'ROUTED_URL';

/*
|--------------------------------------------------------------------------
| REST Key Length
|--------------------------------------------------------------------------
|
| Length of the created keys. Check your default database schema on the
| maximum length allowed
|
| Note: The maximum length is 40
|
*/
$config['rest_key_length'] = 40;

/*
|--------------------------------------------------------------------------
| REST API Key Variable
|--------------------------------------------------------------------------
|
| Custom header to specify the API key

| Note: Custom headers with the X- prefix are deprecated as of
| 2012/06/12. See RFC 6648 specification for more details
|
*/
$config['rest_key_name'] = 'X-API-KEY';

/*
|--------------------------------------------------------------------------
| REST Enable Logging
|--------------------------------------------------------------------------
|
| When set to TRUE, the REST API will log actions based on the column names 'key', 'date',
| 'time' and 'ip_address'. This is a general rule that can be overridden in the
| $this->method array for each controller
|
| Default table schema:
|   CREATE TABLE `logs` (
|       `id` INT(11) NOT NULL AUTO_INCREMENT,
|       `uri` VARCHAR(255) NOT NULL,
|       `method` VARCHAR(6) NOT NULL,
|       `params` TEXT DEFAULT NULL,
|       `api_key` VARCHAR(40) NOT NULL,
|       `ip_address` VARCHAR(45) NOT NULL,
|       `time` INT(11) NOT NULL,
|       `rtime` FLOAT DEFAULT NULL,
|       `authorized` VARCHAR(1) NOT NULL,
|       `response_code` smallint(3) DEFAULT '0',
|       PRIMARY KEY (`id`)
|   ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
|
*/
$config['rest_enable_logging'] = false;

/*
|--------------------------------------------------------------------------
| REST API Logs Table Name
|--------------------------------------------------------------------------
|
| If not using the default table schema in 'rest_enable_logging', specify the
| table name to match e.g. my_logs
|
*/
$config['rest_logs_table'] = 'logs';

/*
|--------------------------------------------------------------------------
| REST Method Access Control
|--------------------------------------------------------------------------
| When set to TRUE, the REST API will check the access table to see if
| the API key can access that controller. 'rest_enable_keys' must be enabled
| to use this
|
| Default table schema:
|   CREATE TABLE `access` (
|       `id` INT(11) unsigned NOT NULL AUTO_INCREMENT,
|       `key` VARCHAR(40) NOT NULL DEFAULT '',
|       `all_access` TINYINT(1) NOT NULL DEFAULT '0',
|       `controller` VARCHAR(50) NOT NULL DEFAULT '',
|       `date_created` DATETIME DEFAULT NULL,
|       `date_modified` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
|       PRIMARY KEY (`id`)
|    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
|
*/
$config['rest_enable_access'] = false;

/*
|--------------------------------------------------------------------------
| REST API Access Table Name
|--------------------------------------------------------------------------
|
| If not using the default table schema in 'rest_enable_access', specify the
| table name to match e.g. my_access
|
*/
$config['rest_access_table'] = 'access';

/*
|--------------------------------------------------------------------------
| REST API Param Log Format
|--------------------------------------------------------------------------
|
| When set to TRUE, the REST API log parameters will be stored in the database as JSON
| Set to FALSE to log as serialized PHP
|
*/
$config['rest_logs_json_params'] = false;

/*
|--------------------------------------------------------------------------
| REST Enable Limits
|--------------------------------------------------------------------------
|
| When set to TRUE, the REST API will count the number of uses of each method
| by an API key each hour. This is a general rule that can be overridden in the
| $this->method array in each controller
|
| Default table schema:
|   CREATE TABLE `limits` (
|       `id` INT(11) NOT NULL AUTO_INCREMENT,
|       `uri` VARCHAR(255) NOT NULL,
|       `count` INT(10) NOT NULL,
|       `hour_started` INT(11) NOT NULL,
|       `api_key` VARCHAR(40) NOT NULL,
|       PRIMARY KEY (`id`)
|   ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
|
| To specify the limits within the controller's __construct() method, add per-method
| limits with:
|
|       $this->methods['METHOD_NAME']['limit'] = [NUM_REQUESTS_PER_HOUR];
|
| See application/controllers/api/example.php for examples
*/
$config['rest_enable_limits'] = false;

/*
|--------------------------------------------------------------------------
| REST API Limits Table Name
|--------------------------------------------------------------------------
|
| If not using the default table schema in 'rest_enable_limits', specify the
| table name to match e.g. my_limits
|
*/
$config['rest_limits_table'] = 'limits';

/*
|--------------------------------------------------------------------------
| REST Ignore HTTP Accept
|--------------------------------------------------------------------------
|
| Set to TRUE to ignore the HTTP Accept and speed up each request a little.
| Only do this if you are using the $this->rest_format or /format/xml in URLs
|
*/
$config['rest_ignore_http_accept'] = false;

/*
|--------------------------------------------------------------------------
| REST AJAX Only
|--------------------------------------------------------------------------
|
| Set to TRUE to allow AJAX requests only. Set to FALSE to accept HTTP requests
|
| Note: If set to TRUE and the request is not AJAX, a 505 response with the
| error message 'Only AJAX requests are accepted.' will be returned.
|
| Hint: This is good for production environments
|
*/
$config['rest_ajax_only'] = false;

/*
|--------------------------------------------------------------------------
| REST Language File
|--------------------------------------------------------------------------
|
| Language file to load from the language directory
|
*/
$config['rest_language'] = 'english';

/*
|--------------------------------------------------------------------------
| CORS Check
|--------------------------------------------------------------------------
|
| Set to TRUE to enable Cross-Origin Resource Sharing (CORS). Useful if you
| are hosting your API on a different domain from the application that
| will access it through a browser
|
*/
$config['check_cors'] = false;

/*
|--------------------------------------------------------------------------
| CORS Allowable Headers
|--------------------------------------------------------------------------
|
| If using CORS checks, set the allowable headers here
|
*/
$config['allowed_cors_headers'] = [
    'Origin',
    'X-Requested-With',
    'Content-Type',
    'Accept',
    'Access-Control-Request-Method',
];

/*
|--------------------------------------------------------------------------
| CORS Allowable Methods
|--------------------------------------------------------------------------
|
| If using CORS checks, you can set the methods you want to be allowed
|
*/
$config['allowed_cors_methods'] = [
    'GET',
    'POST',
    'OPTIONS',
    'PUT',
    'PATCH',
    'DELETE',
];

/*
|--------------------------------------------------------------------------
| CORS Allow Any Domain
|--------------------------------------------------------------------------
|
| Set to TRUE to enable Cross-Origin Resource Sharing (CORS) from any
| source domain
|
*/
$config['allow_any_cors_domain'] = false;

/*
|--------------------------------------------------------------------------
| CORS Allowable Domains
|--------------------------------------------------------------------------
|
| Used if $config['check_cors'] is set to TRUE and $config['allow_any_cors_domain']
| is set to FALSE. Set all the allowable domains within the array
|
| e.g. $config['allowed_origins'] = ['http://www.example.com', 'https://spa.example.com']
|
*/
$config['allowed_cors_origins'] = [];

/*
|--------------------------------------------------------------------------
| CORS Forced Headers
|--------------------------------------------------------------------------
|
| If using CORS checks, always include the headers and values specified here
| in the OPTIONS client preflight.
| Example:
| $config['forced_cors_headers'] = [
|   'Access-Control-Allow-Credentials' => 'true'
| ];
|
| Added because of how Sencha Ext JS framework requires the header
| Access-Control-Allow-Credentials to be set to true to allow the use of
| credentials in the REST Proxy.
| See documentation here:
| http://docs.sencha.com/extjs/6.5.2/classic/Ext.data.proxy.Rest.html#cfg-withCredentials
|
*/
$config['forced_cors_headers'] = [];
