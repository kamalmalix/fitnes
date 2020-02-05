-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2018 at 10:52 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenkel` varchar(10) NOT NULL,
  `tlp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gambar` varchar(150) NOT NULL DEFAULT 'profile.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `alamat`, `tmp_lahir`, `tgl_lahir`, `jenkel`, `tlp`, `email`, `gambar`) VALUES
('1', 'Mang Jeck', 'Jatiasih', 'Bekasi', '1981-05-28', 'L', '081874567890', 'admin@gmail.com', '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(7) NOT NULL,
  `judul_artikel` varchar(150) NOT NULL,
  `tgl_artikel` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isi_artikel` text NOT NULL,
  `gambar` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `tgl_artikel`, `isi_artikel`, `gambar`) VALUES
(12, 'Apakah Suplemen Hukumnya Wajib dalam Dunia Fitness?', '2018-01-30 08:59:52', '<p>\r\n\r\nâ€ƒSuplemen adalah istilah yang tidak asing bagi para penggiat dunia fitness, berbagai macam jenis suplemen yang beredar di pasaran dengan berbagai macam merek dan fungsi. Namun, harganya yang selangit dapat menurunkan nyali orang yang ingin membelinya terutama bagi anda yang berkantong pas-pasan. Jadi, apakah suplemen itu wajib hukumnya?&nbsp;</p><p>â€ƒUntuk menjawab ini mari kita bahas suplemen itu apa sih? Suplemen adalah nutrisi yang melengkapi nutrisi yang kurang dari makanan sehari-hari kita, point yang paling penting disini adalah pelengkap. Jadi, sebenarnya apabila anda merasa anda bisa melengkapi kebutuhan nutrisi anda dari makanan sehari-hari anda tidak memerlukan yang namanya suplemen. Tapi pada kenyataannya terkadang nutrisi dari makanan sehari-hari itu kurang, entah karena proses memasak yang salah sehingga nutrisi itu terbuang atau memang makanan yang anda konsumsi sehari-hari kurang sehat. Sehingga suplemen hadir sebagai pelengkap.&nbsp;</p><p>â€ƒ\r\n\r\nSuplemen itu bukan obat ajaib yang mampu merubah bentuk badan anda menjadi berotot, karena yang menentukan keberhasilan suatu program fitness ialah anda sendiri, bagaimana anda disiplin dalam berlatih, mengatur pola makan, pola istirahat anda dan lain-lain. Bagi anda yang memiliki kantong yang kurang tebal, banyak sekali makanan alami yang bisa dijadikan subtitusi pengganti suplemen. Seperti sumber protein anda bisa dapatkan dari putih telur, daging, ikan, dan lain-lain. Apabila anda ingin suplemen pre workout, anda bisa mengkonsumsi kopi hitam sebelum latihan, dan berbagai macam subtitusi lainnya.\r\n\r\n<br></p><p>â€ƒ\r\n\r\nNamun pada kenyataannya, sekarang ini kita terlalu tergantung dengan suplemen itu, sehingga kita hanya sibuk memikirkan suplemen apa yang paling cocok digunakan dan melupakan pola latihan apa yang harus kita jalani. Jadi pada kesimpulannya suplemen itu tidak wajib dalam dunia fitness, pemenuhan suplementasi dalam dunia fitness juga tergantung dari intensitas latihan anda, apabila anda seorang atlet binaraga otomatis anda memang harus selalu melengkapi makanan anda dengan suplemen karena dari makanan sehari-hari saja pasti akan kurang. Tapi apabila anda hanya ingin mengejar bentuk badan yang ideal, saya sarankan untuk pintar-pintar memanfaatkan makanan yang alami sebagai subtitusi dari suplemen yang ada. Fokuslah pada pola latihan anda bukan pada suplemen apa yang harus anda konsumsi.\r\n\r\n<br></p>', 'manfaat-protein.jpg'),
(13, 'Kenali Tipe Tubuh Anda Sebelum Memulai Fitness', '2018-01-30 09:04:49', '<p>\r\n\r\nâ€ƒBerdasarkan penelitian beberapa ahli fisiologis di dunia salah satunya adalah William H Seldon memperkenalkan teori <em>somotype.</em>&nbsp;Teori <em>somotype</em>&nbsp;adalah teori yang mengelompokkan tubuh manusia menjadi tiga type yaitu tipe <em>mesomorph</em>, <em>endomorph</em>, dan <em>ectomorph</em>.\r\n\r\n<br></p><p>\r\n\r\nâ€ƒDengan mengetahui termasuk ke dalam tipe apa tubuh anda ini maka kita bisa menentukkan jenis program apa dan pola makan bagaimana untuk mendapatkan bentuk tubuh yang anda inginkan. Yang menjadi catatan adalah tidak semua orang bisa digolongkan ke dalam ketiga tipe tubuh ini karena dalam beberapa kasus satu orang bisa memiliki 2 tipe tubuh yang berbeda.\r\n\r\n<br></p><p>\r\n\r\n</p><p><strong>1. Mesomorph</strong></p><div></div><p>Tipe tubuh ini adalah tipe tubuh yang sangat diinginkan setiap orang dimuka bumi ini. Orang yang memiliki tipe tubuh ini adalah orang yang terlahir memiliki tubuh atletis. Apabila anda memiliki anugerah tipe tubuh mesomorph, maka anda akan mudah sekali mendapatkan tubuh yang berotot dan padat. Anda juga dapat makan sesukanya tanpa harus takut kegemukan, karena anda dengan mudah dapat mengontrol berat badan anda asalkan anda hidup sehat, olaharaga, dan diet apapun pasti cocok.</p>\r\n\r\n\r\n\r\n<p><strong>2. Endomorph</strong></p><p>Apabila anda memiliki tipe tubuh ini, berarti anda memiliki karakter tubuh yang bulat, gemuk, gempal, dan biasanya memiliki tubuh yang besar. Anda akan susah sekali dalam mengkontrol berat badan. Anda memerlukan usaha yang lebih keras untuk mendapatkan tubuh yang ideal, diet sehat dan olahraga yang teratur sangat dianjurkan.</p>\r\n\r\n\r\n\r\n<p><strong>3. Ectomorph</strong></p><p>Anda yang memiliki tubuh ectomorph cenderung memiliki tubuh yang kurus, ramping, sedikit lemak dan sedikit massa otot, dengan tipe ini anda akan susah menaikkan massa otot apabila tidak diimbangi dengan nutrisi yang cukup dalam hal ini adalah kalori dan protein. Tipe tubuh ini memiliki tingkat metabolisme yang sangat tinggi. Bagi anda yang memiliki ini satu-satunya cara untuk menaikkan berat badan hanya dengan menambah massa otot anda.</p>\r\n\r\n\r\n\r\nâ€ƒDari ketiga tipe tubuh diatas, semua manusia memiliki tipe tubuh yang berbeda-beda. Masing-masing memiliki kelebihan dan kekurangan serta memiliki cara yang berbeda-beda pula dalam merawatnya. Namun, untuk mendapatkan bentuk tubuh yang ideal tidak ada hal yang tidak mungkin asalkan anda mau berusaha disertai niat yang besar hal yang tidak mungkin pun bisa diwujudkan.\r\n\r\n<br><p></p>', 'tubuh.jpg'),
(14, '5 Keunggulan Lompat Tali Bagi Performa dan Penampilan Anda', '2018-01-30 20:59:14', '<p>\r\n\r\nâ€ƒBagi Anda yang ingin lebih langsing, latihan kardio&nbsp;adalah salah satu cara tepat untuk membakar lemak. Tapi, jika treadmill atau sepeda statis membuat Anda merasa bosan, tak ada salahnya mengambil sebuah <em>jump rope</em>&nbsp;untuk melakukan latihan lompat tali.\r\n\r\n\r\nMeski sederhana, <em>jump rope</em>&nbsp;adalah salah satu peralatan yang serbaguna sekaligus efektif untuk memperoleh tubuh yang lebih langsing. Tapi, manfaatnya tak berhenti di situ saja, lho. Inilah sejumlah keunggulan lompat tali bagi penampilan dan performa anda.<br></p><p>\r\n\r\n</p><h3>1. Mampu Membakar Lemak Sekaligus Membentuk Otot</h3>\r\n\r\n\r\n\r\n<p>â€ƒLompat tali termasuk dalam kategori latihan kardiovaskular. Bila Anda melakukannya cukup lama, maka akan ada banyak kalori yang terbakar.</p><p>â€ƒYang lebih menarik dalam memvariasikan gerakan lompat tali, Anda dapat memasukkan set interval intensitas tinggi (terutama saat menggunakan <em>weighted jump rope</em>) untuk merekrut lebih banyak serat otot baik pada <em>upper</em>&nbsp;maupun <em>lower body</em>.</p><p>â€ƒHal ini tak hanya membantu Anda membakar lemak saja, tapi juga membentuk otot secara terus-menerus, yang mana dapat membuat tubuh Anda semakin efisien dalam membakar kalori.</p><p>\r\n\r\n</p><h3>2. Meningkatkan Performa Atletik</h3>\r\n\r\n\r\n\r\n<p>â€ƒInilah salah satu alasan mengapa lompat tali menjadi populer. Setiap orang yang berkecimpung di kancah olahraga yang membutuhkan koordinasi, <em>footwork</em>, kecepatan, kelincahan, ritme, dan bahkan tenagaâ€”baik untuk kompetisi maupun rekreasiâ€”bisa mengambil manfaat dari lompat tali.</p><p>â€ƒCoba lihat petinju-petinju hebat seperti Muhammad Ali atau Mike Tyson, mereka hebat dalam melakukan lompat tali. Bahkan, Usain Bolt, sprinter peraih medali emas, juga selalu memanfaatkan <em>jump rope</em>&nbsp;sebelum bertanding. Mereka memahami manfaat lompat tali bagi performa atletik mereka.</p>\r\n\r\n\r\n\r\n<h3>3. Praktis</h3>\r\n\r\n\r\n\r\n<p>â€ƒAda alasan yang sangat kuat mengapa Anda harus mengambil sebuah <em>jump rope</em>. Alat ini sangat ringkas dan mudah dibawa ke mana-mana. Bila Anda tengah bepergian atau memiliki ruang yang terbatas di tas gym Anda, alat ini sangat cocok untuk dibawa.</p><p>â€ƒCoba lihat harga alat kardio yang umum seperti treadmill, <em>elliptical,</em>&nbsp;dan sepeda statis. Harganya mencapai jutaan bila dibandingkan jump rope yang hanya beberapa puluh ribu rupiah saja.</p>\r\n\r\n\r\n\r\n<h3>4. Mengasah Kemampuan</h3>\r\n\r\n\r\n\r\n<p>â€ƒSalah satu keunggulan dari jump rope adalah kesenangan dan kepuasan yang menyertainya. Pertama kali mencoba memang tak mudah. Butuh waktu dan usaha untuk mempelajari lompat tali serta variasinya.</p><p>â€ƒBila sudah mulai mahir, Anda akan terus tertantang untuk melakukan hal baru dengan tali Anda, sehingga kesan monoton yang membosankan seperti dari latihan kardio lainnya pun dapat dihindari.</p><p>\r\n\r\n</p><h3>5. Alat Kardio yang Serbaguna</h3>\r\n\r\n\r\n\r\n<p>â€ƒSesi lompat tali yang acak mungkin tidak terlalu banyak meningkatkan VO2 maksimum&nbsp;Anda. Tapi lompat tali bisa dengan mudah dimasukkan ke dalam rutinitas HIIT untuk memperoleh hasil yang lebih baik.</p><p>â€ƒAnda bahkan juga bisa melakukan lompat tali di sela-sela set latihan, pada rentang waktu atau jumlah lompatan tertentu, dan sebagainya, untuk memenuhi kebutuhan Anda pada latihan tersebut.</p><h3>Bagaimana Memilih Jump Rope?</h3><p>â€ƒDengan banyaknya pilihan, Anda yang masih baru dalam gerakan ini mungkin bingung harus memilih yang mana. Meski tampak berlawanan, jump rope yang lebih ringan justru lebih sukar bagi pemula dibanding jump rope yang lebih berat.</p><p>Untuk memulai, hindari <em>speed rope</em>&nbsp;yang sangat tipis. Anda bisa mencoba tali PVC yang ringan sehingga Anda bisa mempelajari ritme yang baik.</p>\r\n\r\n<br><p></p>\r\n\r\n<br><p></p>\r\n\r\n<br><p></p>', 'aaa.jpg'),
(15, 'Perutmu Buncit? Atasi dengan 6 Olahraga Ini Saja', '2018-02-07 05:49:05', '<p>\r\n\r\nâ€ƒMenghilangkan efek perut buncit merupakan salah satu usaha yang tidak dapat dilakukan secara instan. Semua butuh proses untuk mencapai tujuan tersebut, salah satunya dengan berolahraga secara rutin dan terorganisir.\r\n\r\n\r\nAdapun jenis-jenis olahraga yang dapat menghilangkan efek perut buncit diantaranya seperti dalam daftar berikut ini.\r\n\r\n\r\n<br></p><p>\r\n\r\n</p><h3>1. Jogging</h3>&nbsp;Olahraga yang terbilang santai dalam pelaksanaannya sehingga olahraga ini menjadi olahraga yang banyak digemari orang baik pria maupun wanita. Dengan rutin melakukan jogging maka dapat melancarkan aliran darah, mengecilkan perut dan juga jantung akan senantiasa menjadi lebih sehat. Serta kemampuan tubuh untuk bisa membakar lemak pada perut yang menjadi poin tersendiri jika kita ingin mengecilkan perut yang buncit.&nbsp;<p></p><p>\r\n\r\n</p><h3>2. Bersepeda</h3><p>&nbsp;<b></b>Dengan melakukan aktivitas olahraga bersepeda maka dapat memberikan manfaat baik karena secara langsung akan menggerakkan otot kaki, perut dan tangan. Olahraga ini sangat berpengaruh sekali dalam usaha menghilangkan efek buncit pada perut karena dengan olahraga ini kita mampu membakar lemak dan kalori.&nbsp;<b></b></p><p></p>\r\n\r\n\r\n\r\n<h3>3. Shit Up</h3>&nbsp;Sama dengan olahraga lainnya jika kita mampu mengerjakan olahraga jenis ini, maka akan terasa perubahan pada bagian tubuh yang memiliki kadar lemak berlebih. Serta penurunan berat badan berlebih yang nantinya akan menjadi manfaat kita dalam melakukan olahraga shit up ini.&nbsp;<p></p><p>\r\n\r\n</p><h3>4. Lompat Tali</h3>\r\n\r\nDengan melakukan aktifitas olahraga ini maka kita akan menggerakkan beberapa bagian tubuh kita seperti tangan kaki dengan mengayunkan tangan serta hentakan kaki dalam rangka melompat. Gerakan berfungsi sebagai media untuk membakar lemak yang berada pada tubuh terutama perut karena untuk melakukan aktivitas olahraga ini diperlukan tenaga yang tidak sedikit.\r\n\r\n<p></p><p>\r\n\r\n</p><h3>5. Renang</h3><p>\r\n\r\nDengan rutin melakukan aktivitas renang maka hal ini dapat berdampak baik bagi tubuh dan kesehatan kita. Karena secara tidak langsung manfaat yang kita perolah dari melakukan olahraga ini adalah perut yang semakin kecil serta berat badan yang berlebih juga dapat diturunkan sehingga dapat membentuk tubuh yang ideal.\r\n\r\n<br></p><p>\r\n\r\n</p><h3>6. Jalan Cepat</h3>\r\n\r\n\r\n\r\n<p>&nbsp;Dengan rutin melakukan olahraga jenis ini maka dapat memberikan dampak yang baik bagi tubuh seperti menurunkan berat badan yang berlebih serta fungsi pembakaran lemak pada perut yang jika dilakukan dengan rutin maka akan terlihat perubahan yang sangat signifikan pada perut yang buncit.</p><p>â€ƒSekian dari berbagai jenis olahraga yang dapat diterapkan untuk menurunkan kadar lemak berlebih sehingga menimbulkan efek perut buncit. Sebenarnya masih banyak jenis olahraga yang bisa berfungsi untuk membakar atau menurunkan lemak namun pada tulisan ini kita simak bagian umumnya saja yang sering diterapkan oleh banyak orang.</p>\r\n\r\n<br><p></p>\r\n\r\n<br><p><br></p>\r\n\r\n<br><p></p>', 'sh.jpg'),
(16, '4 Kesalahan Fitness yang Bisa Ciptakan Kerugian Buat Ototmu', '2018-02-07 06:19:10', '<p>\r\n\r\n</p><p>â€ƒBuat kamu yang ingin membentuk otot dan melakukan fitness, kamu harus tahu benar bahwa itu berguna untukmu dan kamu bisa dapatkan hasil yang kamu inginkan. Jangan sampai, uang banyak yang sudah kamu keluarkan terbuang percuma karena ototmu malah tidak terbentuk atau membuat badanmu sakit semua.</p><p>Berikut adalah 4 kesalahan fitness yang bisa ciptakan kerugian buat ototmu.</p><p>\r\n\r\n</p><h3><strong>1. Berlatih pada tempat yang sama terus-menerus</strong></h3>\r\n\r\n\r\n\r\nJika kamu memilih olahraga angkat beban, maka melakukannya terus-menerus hanya akan berdampak negatif untuk sendi dan struktur jaringan lunak ototmu. Kamu bisa cidera dan mengurangi kemampuan untuk membangun otot. Buatlah selingan. Yang berat kemudian ringan atau sebaliknya. Berlatih terlalu berat terus sama sekali tidak dianjurkan.\r\n\r\n<br><p></p><p>\r\n\r\n</p><h3><strong>2. Tidak cukup keras dalam berlatih</strong></h3>\r\n\r\n\r\n\r\nSaat kamu mulai melakukan fitness, maka mau tidak mau tubuhmu akan mengalami penyesuaian untuk membentuk dirinya sendiri sesuai yang kamu mau. Tapi, jika kamu tidak cukup keras dalam berlatih, kamu sama saja tidak membuat tubuhmu mengalami penyesuaian itu. Malah nantinya kamu akan heran kenapa bentuk tubuhmu masih sama saja.\r\n\r\n<br><p></p><p>\r\n\r\n</p><h3><strong>3. Terlalu banyak menggunakan kardio</strong></h3>\r\n\r\n\r\n\r\nYang benar adalah kamu seharusnya membatasi frekuensi, intensitas dan durasi latihan olahraga kardiomu. Jika kamu memang menyukainya, maka jagalah dalam intensitas sedang. Kamu tidak bisa terlalu sering menggunakan olahraga ini karena justru akan mengganggu pertumbuhan otot. Yang baik adalah tiga sampai empat kali seminggu dan tidak lebih dari 40 menit.\r\n\r\n<br><p></p><p>\r\n\r\n</p><h3><strong>4. Berlatih terlalu keras</strong></h3>\r\n\r\n\r\n\r\n<p>Berlatih terlalu keras juga menyebabkan dampak negatif yang akan menciptakan respon yang tidak baik untuk ototmu. Tubuh itu sangat adaptif, tapi kamu juga harus tahu kapasitas mana yang bisa kamu lakukan atau tinggalkan. Kalau melebihi batas dari yang tubuhmu bisa tampung, maka latihanmu akan kontraproduktif sehingga menyebabkan penurunan massa otot. Kamu juga bisa mengalami perubahan mood, kelelahan, nyeri otot kronis dan juga cidera.</p><p>Jika kamu mengetahui bagaimana yang benar dan salah, kamu pasti bisa lebih efektif dalam fitnes yang sedang kamu jalani. Fokuslah pada tujuan utamamu melakukan fitnes. Jaga konsistensi dan tetap pada latihan normal akan membuatmu mendapatkan hasil yang kamu inginkan.</p><p></p>\r\n\r\n<br><p></p>', 'djhfg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(5) NOT NULL,
  `judul_event` varchar(150) NOT NULL,
  `tgl_event` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isi_event` text NOT NULL,
  `gambar` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `judul_event`, `tgl_event`, `isi_event`, `gambar`) VALUES
(13, 'Danau Toba Body Contest', '2018-01-30 10:39:26', '   ', 'b.jpg'),
(14, 'Ayo ikutan Atlas Body Contest !!', '2018-01-30 21:12:38', '', 'jdsjg.jpg'),
(15, 'Tunjukan Aksimu di UBC Body Contest', '2018-01-30 21:16:23', '', 'sdj.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `instruktur`
--

CREATE TABLE `instruktur` (
  `kode_ins` varchar(10) NOT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `alamat` text,
  `tmp_lahir` varchar(20) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenkel` varchar(10) DEFAULT NULL,
  `tlp` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `skill` varchar(25) DEFAULT NULL,
  `gambar` varchar(150) DEFAULT 'profile.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instruktur`
--

INSERT INTO `instruktur` (`kode_ins`, `nama`, `alamat`, `tmp_lahir`, `tgl_lahir`, `jenkel`, `tlp`, `email`, `skill`, `gambar`) VALUES
('26', 'Bang Max', 'Jakarta Timur', 'Jakarta', '1980-02-27', 'L', '082147483647', 'instruktur@gmail.com', '1', '4.jpg'),
('27', 'Wati', 'Penggilingan', 'Jakarta', '1970-01-01', 'P', '2147483647', 'luna@gmail.com', '2', '7.jpg'),
('28', 'Agus', 'Bintara', 'Jakarta', '1987-11-27', 'L', '2147483647', 'andi@gmail.com', '1', '1.jpg'),
('31', 'Joice', 'Pondok Kopi', 'Jakarta', '1975-05-27', 'P', '081374634677', 'joice@gmail.com', '2', 'profile.jpg'),
('32', 'Trisno', 'Pondok Bambu', 'Jogjakarta', '1974-02-27', 'L', '085726327271', 'trisno@gmail.com', '2', 'profile.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jp`
--

CREATE TABLE `jp` (
  `id_jp` int(11) NOT NULL,
  `hari` varchar(30) NOT NULL,
  `kode_ins` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jp`
--

INSERT INTO `jp` (`id_jp`, `hari`, `kode_ins`) VALUES
(5, 'Senin', 26),
(6, 'Selasa', 26),
(7, 'Rabu', 28),
(8, 'Kamis', 28),
(9, 'Jumat', 26),
(10, 'Sabtu', 28);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(3) NOT NULL,
  `id_type` int(3) NOT NULL,
  `kode_ins` varchar(10) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `jadwal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `id_type`, `kode_ins`, `nama_kelas`, `jadwal`) VALUES
(24, 2, '27', 'Aerobic Pagi', '2018-01-14 08:00:00'),
(25, 1, '28', 'Fitness Pagi', NULL),
(26, 2, '27', 'Aerobic Pagi', '2018-01-31 08:00:00'),
(27, 2, '27', 'Aerobic Siang', '2018-02-01 02:00:00'),
(28, 1, '28', 'Fitness Malam', NULL),
(29, 2, '27', 'Aerobic Pagi', '2018-02-02 08:00:00'),
(30, 2, '28', 'Aerobic Pagi', '2018-02-04 00:00:00'),
(31, 1, '26', 'Fitness Pagi', NULL),
(32, 2, '31', 'dhjs', '1970-01-01 01:00:00'),
(33, 2, '32', 'bdhjjsh', '2018-03-28 10:00:00'),
(34, 2, '27', 'edssgd', '2018-03-29 10:00:00'),
(35, 2, '31', 'sjdkhskhks', '2018-03-30 11:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `kode_member` varchar(10) NOT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `alamat` text,
  `tmp_lahir` varchar(20) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenkel` varchar(10) DEFAULT NULL,
  `tlp` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tgl_exp` date DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `gambar` varchar(150) DEFAULT 'profile.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`kode_member`, `nama`, `alamat`, `tmp_lahir`, `tgl_lahir`, `jenkel`, `tlp`, `email`, `tgl_exp`, `status`, `gambar`) VALUES
('19', 'kamal', 'Jakarta Timur', 'jakarta', '1983-04-12', 'L', '081223456789', 'user@gmail.com', '2018-02-08', '2', '3.jpg'),
('29', 'Budi', 'Cipinang', 'Jakarta', '1970-01-01', 'L', '2147483647', 'budi@gmail.com', '2018-01-31', '1', '4.jpg'),
('30', 'Diana Putri', 'Tebet', 'Jakarta', '1989-05-20', 'P', '2147483647', 'diana@gmail.com', '2018-02-17', '2', '6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id_promo` int(5) NOT NULL,
  `judul_promo` varchar(150) NOT NULL,
  `tgl_promo` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isi_promo` text NOT NULL,
  `gambar` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`id_promo`, `judul_promo`, `tgl_promo`, `isi_promo`, `gambar`) VALUES
(3, 'Global Promo Voucher', '2018-02-05 08:12:00', '', 'Global-Promo.jpg'),
(4, 'Beast Promo !!!', '2018-01-30 21:03:47', '', 'ppp.jpg'),
(5, 'Workout Free!!!', '2018-01-31 13:24:40', ' ', 'dj.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rekam`
--

CREATE TABLE `rekam` (
  `id_rekam` int(15) NOT NULL,
  `id_kelas` int(3) NOT NULL,
  `kode_member` varchar(10) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bb` int(5) NOT NULL,
  `kalori` int(5) NOT NULL,
  `dj` int(5) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekam`
--

INSERT INTO `rekam` (`id_rekam`, `id_kelas`, `kode_member`, `tanggal`, `bb`, `kalori`, `dj`, `keterangan`) VALUES
(10, 25, '29', '2018-01-30 22:36:25', 83, 0, 0, 'Latihan dada, bicep, perut'),
(11, 24, '30', '2018-01-30 22:41:59', 54, 0, 0, 'Senam Aerobic Zumba'),
(13, 27, '19', '2018-01-31 10:59:21', 78, 0, 0, 'Yoga'),
(14, 24, '29', '2018-02-02 04:05:31', 98, 0, 0, 'main sayap'),
(15, 25, '29', '2018-02-03 14:52:53', 89, 287, 123, 'kekuatan kaki'),
(17, 24, '30', '2018-03-19 06:09:31', 58, 268, 110, 'Yoga'),
(18, 32, '30', '2018-03-22 07:21:07', 88, 300, 200, 'yoga');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id_type` int(3) NOT NULL,
  `nama_kegiatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id_type`, `nama_kegiatan`) VALUES
(1, 'Fitness'),
(2, 'Aerobic');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level_user` enum('user','admin','instruktur') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `level_user`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(19, 'user', 'user@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'user'),
(26, 'instruktur', 'instruktur@gmail.com', '904a21816242160aecca3f7b4f5898f4', 'instruktur'),
(27, 'wati', 'wati@gmail.com', 'a92db7089e286f23cf575b0ddf35bc35', 'instruktur'),
(28, 'agus', 'agus@gmail.com', 'fdf169558242ee051cca1479770ebac3', 'instruktur'),
(29, 'budi', 'budi@gmail.com', '00dfc53ee86af02e742515cdcf075ed3', 'user'),
(30, 'diana', 'diana@gmail.com', '3a23bb515e06d0e944ff916e79a7775c', 'user'),
(31, 'joice', 'joice@gmail.com', '0d691f1c52daad6b5d76e32893820f38', 'instruktur'),
(32, 'trisno', 'trisno@gmail.com', 'fe1d8a9f01936c33598c2fbe7bc6c1ea', 'instruktur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `instruktur`
--
ALTER TABLE `instruktur`
  ADD PRIMARY KEY (`kode_ins`);

--
-- Indexes for table `jp`
--
ALTER TABLE `jp`
  ADD PRIMARY KEY (`id_jp`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`kode_member`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id_promo`);

--
-- Indexes for table `rekam`
--
ALTER TABLE `rekam`
  ADD PRIMARY KEY (`id_rekam`),
  ADD KEY `id_rekam` (`id_rekam`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`,`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `jp`
--
ALTER TABLE `jp`
  MODIFY `id_jp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id_promo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `rekam`
--
ALTER TABLE `rekam`
  MODIFY `id_rekam` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
