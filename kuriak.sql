-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 Mei 2018 pada 18.30
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuriak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(20) NOT NULL,
  `judul_artikel` varchar(50) NOT NULL,
  `tgl_artikel` date NOT NULL,
  `deskripsi_artikel` longtext NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `tgl_artikel`, `deskripsi_artikel`, `id_user`) VALUES
(51, 'Hafidz', '2018-05-02', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti dolore, enim voluptatem aut eaque numquam sunt, cumque sed atque saepe, illo quidem nam ipsam vero. Eos possimus doloremque atque aspernatur.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti dolore, enim voluptatem aut eaque numquam sunt, cumque sed atque saepe, illo quidem nam ipsam vero. Eos possimus doloremque atque aspernatur.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti dolore, enim voluptatem aut eaque numquam sunt, cumque sed atque saepe, illo quidem nam ipsam vero. Eos possimus doloremque atque aspernatur.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti dolore, enim voluptatem aut eaque numquam sunt, cumque sed atque saepe, illo quidem nam ipsam vero. Eos possimus doloremque atque aspernatur.', 7),
(52, 'Mamang', '2018-05-02', 'ini adalah text keterangan mamang yang nggak biasa, dan text ini bisa dicopy jadi banyak, contohnya adalah seperti dibawah ini\r\nini adalah text keterangan mamang yang nggak biasa, dan text ini bisa dicopy jadi banyak, contohnya adalah seperti dibawah ini\r\nini adalah text keterangan mamang yang nggak biasa, dan text ini bisa dicopy jadi banyak, contohnya adalah seperti dibawah ini\r\nini adalah text keterangan mamang yang nggak biasa, dan text ini bisa dicopy jadi banyak, contohnya adalah seperti dibawah ini\r\nini adalah text keterangan mamang yang nggak biasa, dan text ini bisa dicopy jadi banyak, contohnya adalah seperti dibawah ini', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `deskripsi_barang` text NOT NULL,
  `harga_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `deskripsi_barang`, `harga_barang`) VALUES
(3, 'Steelseries-rival 310', 'World’s First Esports Sensor\r\nTeknologi sensor SteelSeries TrueMove3 memungkinkan tracking dengan latency yang sangat kecil dan akurasi yang tajam.\r\n\r\nExclusive Split-Trigger Buttons\r\nJaminan 50-juta click mechanical switches, memberikan durabilitas yang kuat ,cepat dan konsisten.\r\n\r\nMaximum Comfort\r\nDesign ergonomis yang menjamin keseimbangan dan kecepatan semua teknik pemegangan. Pegangan samping yang terbuat dari silicon murni memberikan kenyamanan ketika digunakan.', 700000),
(4, ' Steelseries-Arctis 7', 'S1 Speaker Drivers + DTS Headphone X\r\nS1 drivers dirancang untuk memberikan suara yang detil dan seimbang dengan distorsi suara minimal.\r\n\r\nClearCast microphone\r\nClearCast microphone menggunakan design dua arah memberikan kejernihan suara yang tak tertandingi.\r\n\r\nSki Goggle Headband\r\nBahan elastis yang mudah diatur yang akan memberikan rasa nyaman di kepala, berat yang seimbang,menghilangkan semua titik tekanan di kepala.\r\n\r\nAirWeave Ear Cushions\r\nMenggunakan bahan yang ditemukan pada baju atlit, bantalan telinga memberikan rasa sejuk dan nyaman ketika berjam-jam bermain game.', 2000000),
(5, 'Corsair-STRAFE Mechanical Gaming Keyboard — CHERRY® MX Red', 'Cherry MX Red Key Switches\r\nMenggunakan switch Cherry MX merah produksi Jerman yang memberikan respon mulus yang digunakan oleh banyak atlit Esport. Cherry MX memiliki tingkat respon yang sangat tinggi untuk melakukan dua atau bahkan tiga tap tanpa suara click atau merasakan \"bump\".\r\n\r\nDYNAMIC BACKLIGHTING\r\nDisertai backlighting berwarna merah menambah pengalaman Anda dengan pengaturan pencahayaan yang tak terbatas. Pilih dari enam pencahayaan yang tersedia atau buat sendiri.\r\n\r\nENDLESS PROGRAMMABILITY\r\nCorsair Utility Engine (CUE) memungkinkan banyak fitur pengubahan input key.Ubah Key apapun dan rancang makro apapun untuk game kesukaan Anda.\r\n\r\nAUDIO ON THE FLY\r\nKey multimedia memungkinkan Anda untuk mengganti pengaturan audio ketika sedang bermain game dimana Anda play, pause, dan skip audio tracks.', 800000),
(6, 'Gygabyte-Aorus X5 MD', 'Spesifikasi :\r\nNVIDIA® GeForce® GTX 1080 GDDR5X 8GB\r\nLatest MAX-Q Design\r\n7th Gen. Intel® Core™ i7 Overclocked Processor\r\nThunderbolt™ 3: Up to 40Gbps Transfer Speed\r\nESS Sabre Hi-Fi Audio DAC\r\nIsland-Style AORUS RGB Fusion Keyboard: Per-Key RGB Backlight\r\n15.6\" UHD 3840x2160 IPS Anti-Glare with NVIDIA® G-SYNC™\r\nX-Rite™ Pantone® Certified Display\r\nNVIDIA® G-SYNC™: Tear-free, Super Smooth Display\r\nChassis Designed for Cooling\r\nMulti External Display Support: 3 Surround Display\r\nVersatile Fan Control | 10 Stage Deep Fan Control\r\nM.2 PCIe Gen3x4: 2000MB/s\r\nUSB 3.1 Type-C: 10Gbps\r\nDDR4: 2400MHz up to 64GB\r\nmDP 1.3 | External 8K Display Output\r\nHDMI 2.0: True 4K at 60Hz\r\nGaransi internasional 4 tahun\r\nNVIDIA® GeForce® GTX 1080: The Ultimate Performance\r\nNVIDIA® GeForce® GTX 10 dengan arsitektur Pascal™ , mendobrak batasan performa dari laptop. Tidak hanya performa dan efisiensi, namun juga memberikan pengalaman Virtual Reality (VR) yang lebih immersif dan kemulusan dalam resolusi yang tinggi.\r\n\r\n7th Gen Intel® Core™ i7 Processor : Here Comes the New Generation of Performance\r\nDengan arsitektur “Kaby Lake” , Processor® Core™ i7 mengalahkan performasi pendahulunya dalam segala aspek. AORUS memberikan pengalaman overclocking yang lebih mudah dengan hanya menekan satu tombol yang akan meningkatkan kecepatan CPU sampai dengan 15% . Rasakan dalam bermain game kesukaan Anda.\r\n\r\nDDR4 RAM: Ultimate Memory for Ultimate Gaming\r\nDDR4 RAM dengan frekuensi 2400 MHz, dapat menjalankan game dengan resolusi tinggi lebih cepat dan halus dari generasi RAM. X5 XD dilengkapi empat buah RAM yang mencapai kapasitas 64GB. Pengunaan listrik yang hanya 1.2v, DDR4 in akan menghasilkan panas yang kecil yang akan menambah pengalaman bermain game Anda.', 27000000),
(7, 'BENQ-Zowie LED Monitor Gaming 24 Inch', 'Black eQualizer Technology & Exclusive RTS Mode – See More, Experience More, Play Like a Pro\r\nPada monitor konvensional atau monitor dengan contrast rendah, umumya warna yang terlihat tidak akan tajam dan terang. Salah satunya adalah warna hitam yang tidak pekat, dan terkesan buram. Dengan Contrast Ratio 1000:1 atau Dynamic Contrast Ratio 12M:1 yang dimaksimalkan dengan color engine Black eQualizer, Monitor Gaming BenQ RL2455HM mampu menghadirkan visual yang terang khususnya pada area atau adegan – adegan dengan pencahayaan kurang, tanpa membuat area yang sudah terang kelewat terang. Anda yang sedang bermain RTS seperti Starcraft / Dota II dapat dengan mudah melihat musuh yang bersembunyi.\r\n\r\nTentunya BenQ tidak melupakan sisi kenyamanan bagi para gamer, dimana setiap fitur dan fungsi monitor RL2245HM sudah diset sedemikian rupa agar gamer dapat bermain secara maksimal dengan preset otomatis yang sudah tersedia. Namun BenQ juga menawarkan dua buah preset RTS Mode eksklusif, bagi anda pecinta Stracraft dan Dota II.\r\n\r\nResponse time 1ms GTG\r\nBila anda kurang menyukai game RTS, tentunya tidak perlu khawatir. Monitor BenQ RL2455HM ini tetap cocok bagi anda. Dengan response time 1ms GTG (grey to grey), monitor ini mampu menghasilkan visual dan adegan cepat, seperti dalam game action, racing secara halus, tanpa adanya efek ghosting atau blur.\r\n\r\nUkuran Layar 24 inch Beresolusi Full HD yang dapat Dipersonalisasi\r\nUntuk kebutuhan gaming atau entertainment anda, monitor BenQ RL2455HM dapat memvisualisasikan gambar dengan resolusi Full HD sebesar 24 inch. Namun berkat adanya fitur Display Mode dan Smart Scaling, anda dapat mengubah ukuran visual layar sesuai yang anda kehendaki. Pada display mode anda dapat memilih ukuran layar berbeda yaitu: 17”, 19”, 19”W, 21.5W, 22”W, 23”W, 24”W. Tentunya jika ukuran ini tidak sesuai, anda dapat mengatur ukuran yang sesuai dengan fitur Smart Scaling.', 1800000),
(8, 'HP-Omen 15-ce087TX', 'Spesifikasi\r\nIntel® Core™ i7-7700HQ Processor (6M Cache, 2.80 GHz)\r\ns\r\n16 GB DDR4\r\ns\r\n15.6 Inch 1920x1080 screen\r\ns\r\nGTX 1060 6GB\r\ns\r\nAnti-Glare Display\r\ns\r\n1TB HDD\r\ns\r\nBacklit keyboard\r\ns\r\nUSB 3.1 Gen 1 (1 HP Sleep and Charge), 1 Mini DisplayPort, 1 HDMI, 1 RJ-45, 1 Headphone/Microphone Combo, 1 Microphone-in\r\ns\r\nDominate Your Game With THE New HP OMEN\r\nLaptop Gaming HP Omen terbaru hadir dalam dua varian ukuran layar, yakni 15 dan 17 Inch. Seri Omen berfokus memberikan performa sempurna yang membuat Anda dapat menaklukan tiap tantangan dalam permainan. Dibanding seri pendahulunya, HP Omen generasi terbaru kini hadir dengan desain yang lebih agresif. Dimensi laptop ini pun terbilang cukup ringkas, dengan berat mulai 2.57 kg dan tebal 24.8 mm untuk varian 15 Inch dan berat 3.7 kg dan tebal 33 mm untuk varian 17 Inch. Layar berdefinisi tinggi dan refresh rate tinggi membuat Anda dapat melihat detil dengan jelas. HP Omen ditenagai Processor Quad-Core Intel® Core™ i7 generasi ke-7 dan GPU NVIDIA® GeForce® GTX™ 10 Series sehingga bisa menjadi senjata andalan Anda saat bermain Game. Fitur Single-Panel Access menyediakan akses satu panel tunggal ke HDD, SSD, dan RAM.\r\n\r\nProcessor Quad-Core Intel® Core™ i7 7th Gen\r\nLaptop Gaming HP Omen 15 dipersenjatai Processor Intel® Core™ i7 generasi ke-7 sehingga membuatnya menjadi senjata Gaming yang sempurna. Processor i7 generasi 7 dengan arsitektur Kaby Lake ini menggenapi kemampuan Laptop dalam mengelola permainan berbasis VR (Virtual Reality). Processor i7 Kaby Lake seri H di dalam HP Omen 15 membawa efisiensi daya, teknologi pemrosesan yang makin canggih, dan maksimalisasi kemampuan silikon Processor untuk Clock Speed lebih tinggi dari seri pendahulunya. Berikut kelebihan Processor Intel® Core™ i7-7700HQ dibanding pendahulunya i7-6700HQ:\r\n\r\nKecepatan di setiap Core 8% lebih tinggi\r\nKemampuan dalam mengolah multimedia 10% lebih cepat\r\nKemampuan Video Decoding atau Transcoding meningkat hingga 15%\r\nDilengkapi VP9 dan HEVC 10-bit Hardware Acceleration\r\nKemampuan memutar video 4K dengan kualitas visual HDR meningkat\r\nSecara umum, performa Intel® Core™ i7-7700HQ 10% lebih baik.\r\nEmbrace VR Gaming\r\nGPU NVIDIA yakni GeForce® GTX 10 Series pada HP Omen 15 dibuat dengan arsitektur Pascal ini menjanjikan performa grafis yang 40% lebih kencang dibanding GeForce GTX seri 900. GPU GTX 10 Series dibuat dengan transistor FinFET ultra cepat dan memiliki kapasitas Bandwidth lebih besar dibanding seri 900. NVIDIA GeForce GTX 10 Series adalah GPU yang dirancang khusus untuk menyambut era VR atau Virtual Reality Gaming. GPU ini dibuat dengan teknologi generasi terbaru yang dapat hadirkan visual berdefinisi ultra tinggi, kompabilitas dengan kebutuhan ekspansi multi-monitor, dan Game dengan fitur VR. Teknologi NVIDIA GameWorks™ menghadirkan kualitas visual Gaming yang ekstra mulus dan berkualitas sinematik. Untuk mendukung VR, ada teknologi NVIDIA Ansel™ yang memungkinkan Anda bisa melihat visual Game hingga 360 derajat pada perangkat VR.\r\n\r\nKeep Your Cool On A Long Gaming Session\r\nLaptop HP Omen 15 terbaru menghadirkan performa pendinginan tinggi bahkan saat sesi Game AAA yang intensif. Sistem pendinginan laptop memastikan kinerja CPU dan GPU tetap lancar, bahkan saat pertarungan memanas. HP Omen memiliki konstruksi pendinginan berbeda sesuai seri. Ukuran dimensi kipas ganda dan jumlah pipa penyalur panas berbeda di setiap seri karena menyesuaikan dengan ukuran dan spesifikasi laptop.\r\n\r\nKeyboard Backlit Dragon Red\r\nKeyboard HP Omen dirancang untuk permainan Game profesional. Keyboard Backlit Dragon Red dengan Highlight pada tombol WASD membuat Anda dapat menekan tombol dengan presisi. Tombol dengan fitur Anti-Ghosting memungkinkan setiap ketukan tombol terdeteksi dengan baik meskipun Anda sedang menekan banyak tombol secara bersamaan. Khusus untuk seri HP Omen 17, memiliki tombol makro yang memungkinkan Anda bisa meluncurkan perintah khusus secara instan.', 16000000),
(9, 'RAZER-Abyssus 2014', 'RAZER Is Back\r\nRazer kembali melengkapi jajaran gaming device miliknya dengan mouse gaming seri terbaru yaitu Razer Abyssus. Mouse ini memiliki sensitifitas sensor sebesar 3500 dpi membuat gerakan kursor di monitor Anda sangat halus dan responsif. Razer Abyssus dilengkapi dengan tombol hyperespone yang ergonomis dan memiliki daya tahan hingga lebih dari 5 juta kali klik, karena menggunakan tombol buatan omron yang terkenal dengan daya tahannya. Selain itu Abyssus juga memiliki permukaan yang sedikit bertekstur kasar. Hal ini menjaga tangan Anda untuk tetap berada di mouse dan mencegah kehilangan kendali atas mouse Anda ketika sedang menggerakannya dengan cepat.\r\n\r\nRazer Synapse 2.0\r\nRazer Synapse merupakan sebuah cloud storage untuk menyimpan profile pengaturan tombol mouse atau keyboard Anda ke sebuah server online. Razer Abyssus sudah mendukung untuk menggunakan fitur ini, dengan Razer Synapse Anda tidak perlu mengatur kembali konfigurasi tombol macro jika Anda membeli mouse baru, Anda tidak perlu lagi mengatur ulang konfigurasi tombol Anda ketika sedang turnamen, ataupun Anda ingin menggunakan profile tombol orang lain, itu juga bisa dilakukan dengan mudah. Selain itu Anda juga bisa mendapatkan driver dan firmware terbaru secara otomatis ketika terhubung ke Synapse.\r\n\r\nInterraction With Other Device\r\nRazer Abyssus bisa berhubungan dengan keyboard untuk mendapatkan keuntungan lebih dalam permainan. Anda bisa dengan mudah mengganti profile keyboard hanya dengan menekan dua kali tombol di keyboard Anda dan menggantinya dengan menggulirkan scroll ke atas atau ke bawah untuk memilih profile yang diinginkan. Anda tidak perlu takut dan bingung apakah profilenya sudah terganti atau belum, karena setiap perubahan akan ditandai dengan berubahnya warna led. Inilah salah satu keuntungan dari Razer Synapse.', 700000),
(10, 'RAZER-Kraken 7.1 V2 Chroma Oval Ear Cushions', 'Surround Audio\r\nRazer Kraken 7.1 V2 merupakan sebuah headset gaming mengagumkan yang memiliki kemampuan untuk dapat mengalirkan pengalaman gaming surround mengesankan untuk dapat meningkatkan kesadaran situasional aural Anda. Dengan begitu Anda dapat mendengarkan arah datangnya musuh dan lokasi teman satu tim Anda sehingga dapat menyerang dengan presisi. Tak hanya itu, mesin suara tersebut dapat Anda atur sendiri melalui Razer Synapse, sehingga Anda dapat menentukan penempatan terbaik untuk channel audio dan disesuaikan dengan preferensi pendengaran secara pribadi.\r\n\r\nMore Powerfull and Smooth\r\nHeadset ini dipersenjatai dengan driver berukuran sangat besar yakni 50mm, lebih besar dibandingkan dengan model pendahulunya. Hal tersebut membuat headset ini dapat menyajikan suara yang lebih kencang dan soundstage yang lebih kaya dibanding sebelumnya. Dengan menggunakan headset ini Anda dapat merasa seperti Anda tengah berada di dalam game yang dimainkan.\r\n\r\nClear Communication\r\nMenghadirkan mikrofon yang dapat ditarik masuk ke dalam earcup dan disertai pula dengan noise-cancellation aktif (haya tersedia di PC), headset ini dapat memastikan komunikasi sejernih kristal. Dengan begitu Anda tetap dapat menyampaikan pesan atau perintah koordinasi tim secara nyaring dan jelas meskipun Anda berada ditengah pesta gaming LAN hingga turnamen eSport yang sangat berisik.\r\n\r\nLight,Comfortable and Strong\r\nTerbuat dari aliminium Bauxite membuat seluruh frame dari headset Kraken 7.1 V2 ini menjadi sangat ringan, fleksibel, namun tetap memiliki daya tahan tinggi. Headset ini juga telah melalui serangkaian pengujian berat untuk dapat bertahan dari penggunaan profesional sehari-hari. Kemudian, bantalan telinga headset ini juga lebih besar, lebih lembut, dan memberikan isolasi suara yang lebih baik daripada sebelumnya sehingga Anda dapat menggunakannya dengan nyaman sepanjang hari.', 1000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambarartikel`
--

CREATE TABLE `gambarartikel` (
  `id_gambarartikel` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gambarartikel`
--

INSERT INTO `gambarartikel` (`id_gambarartikel`, `id_artikel`, `slug`) VALUES
(14, 51, '14.jpg'),
(15, 52, '15.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambarbarang`
--

CREATE TABLE `gambarbarang` (
  `id_barang` int(11) NOT NULL,
  `id_gambarbarang` int(11) NOT NULL,
  `slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gambarbarang`
--

INSERT INTO `gambarbarang` (`id_barang`, `id_gambarbarang`, `slug`) VALUES
(3, 3, '3.png'),
(4, 4, '4.jpg'),
(5, 5, '5.jpg'),
(6, 6, '6.jpeg'),
(7, 7, '7.jpg'),
(8, 8, '8.jpg'),
(9, 9, '9.png'),
(10, 10, '10.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_user`, `id_barang`, `jumlah_barang`) VALUES
(1, 7, 6, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `komenartikel`
--

CREATE TABLE `komenartikel` (
  `id_komen` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `isi_komen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `password_user` varchar(50) NOT NULL,
  `status_user` tinyint(1) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `email_user`, `password_user`, `status_user`, `username`) VALUES
(6, 'hafidzilkhairi@yahoo.com', 'iniadmin', 1, 'hafidz'),
(7, 'hafidzilkhairi00@gmail.com', 'iniadmin', 1, 'hafidz_khairi'),
(8, 'hafidz@gmail.com', 'as', 0, 'hafidzilkhairi'),
(9, 'khairi@gmail.com', 'iniadmin', 1, 'khairi.hafidz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `gambarartikel`
--
ALTER TABLE `gambarartikel`
  ADD PRIMARY KEY (`id_gambarartikel`),
  ADD KEY `id_artikel` (`id_artikel`);

--
-- Indexes for table `gambarbarang`
--
ALTER TABLE `gambarbarang`
  ADD PRIMARY KEY (`id_gambarbarang`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `komenartikel`
--
ALTER TABLE `komenartikel`
  ADD PRIMARY KEY (`id_komen`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gambarartikel`
--
ALTER TABLE `gambarartikel`
  MODIFY `id_gambarartikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `gambarbarang`
--
ALTER TABLE `gambarbarang`
  MODIFY `id_gambarbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `komenartikel`
--
ALTER TABLE `komenartikel`
  MODIFY `id_komen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `gambarartikel`
--
ALTER TABLE `gambarartikel`
  ADD CONSTRAINT `gambarartikel_ibfk_1` FOREIGN KEY (`id_artikel`) REFERENCES `artikel` (`id_artikel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `gambarbarang`
--
ALTER TABLE `gambarbarang`
  ADD CONSTRAINT `gambarbarang_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `keranjang_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `komenartikel`
--
ALTER TABLE `komenartikel`
  ADD CONSTRAINT `komenartikel_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komenartikel_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
