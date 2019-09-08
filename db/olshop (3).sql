-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Sep 2019 pada 09.49
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olshop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `acc_hp`
--

CREATE TABLE `acc_hp` (
  `id` int(250) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `kategori` varchar(1000) NOT NULL,
  `merek` varchar(1000) NOT NULL,
  `warna` varchar(1000) NOT NULL,
  `harga` varchar(1000) NOT NULL,
  `deskripsi` varchar(50000) NOT NULL,
  `label` varchar(1000) NOT NULL,
  `link_tokped` varchar(1000) NOT NULL,
  `link_shopee` varchar(1000) NOT NULL,
  `link_lazada` varchar(1000) NOT NULL,
  `file_name` varchar(1000) NOT NULL,
  `file_size` int(250) NOT NULL,
  `file_type` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `acc_hp`
--

INSERT INTO `acc_hp` (`id`, `name`, `kategori`, `merek`, `warna`, `harga`, `deskripsi`, `label`, `link_tokped`, `link_shopee`, `link_lazada`, `file_name`, `file_size`, `file_type`) VALUES
(10, 'Charger Samsung S8/S8+ kabel data mikro', 'Charger', 'Samsung', 'Putih', '55000', '- Output : 15W 9.0V/1.67A or 5.0V/2.0A\r\n- Optimal Safely\r\n- Superior Speed\r\n- USB3.0 Compatible Cable\r\n- panjang kabel 1.2 meter', 'Baru', 'https://www.tokopedia.com/flecoacc/cas-charger-samsung-s8-s8-kabel-data-mikro', '', '', '26082019121459samsung adapter S8.jpg', 27705, 'jpg'),
(11, 'Adaptor batok charger Fleco KO55 plus kabel Original', 'Adapter', 'Fleco', 'Putih / Hitam', '60000', 'Compatible Brand: All Type/Merk Smartphone\r\nType: Fast Charging Adaptor (FLECO Quallcomm 3.0)\r\nBrand Name: FLECO Quick Charge Quallcomm 3.0\r\nColor: Black And White ', 'Baru', 'https://www.tokopedia.com/flecoacc/adaptor-batok-charger-fleco-ko55-plus-kabel-original', '', '', '26082019122318adaptor fleco.png', 571331, 'png'),
(12, 'charger samsung 15W ( BT )', 'Adapter', 'Samsung', 'Putih', '35000', '- Samsung Travel Adapter ORIGINAL 100%\r\n- Model : EP-TA20EWE\r\n- Year : 2017\r\n- Input : 100-240 Volt / 50-60Hz \r\n- Output : 15W \r\n9.0V == 1.67A or\r\n5.0V == 2.1A\r\n- PLUG : EU type\r\n- 1 port USB 3.0\r\n- Adaptive Fast Charging\r\n- Qualcomm Quick Charge\r\n- Superior Speed\r\n- Optimal Safety\r\n- USB3.0 Compatible Cable\r\n- panjang kabel 1.2 meter\r\n- Warranty : 30 Hari', 'Baru', 'https://www.tokopedia.com/flecoacc/cas-charger-samsung-15w-bt', '', '', '26082019122523charger samsung 15W ( BT ).jpg', 39888, 'jpg'),
(13, 'charger cage 3usb 2,4A', 'Charger', 'Cage', 'Putih', '35000', 'charger cage 3 usb 2,4A\r\n\r\nuntuk 1 usb - 2,4A', 'Baru', 'https://www.tokopedia.com/flecoacc/cas-charger-cage-3usb-2-4a', '', '', '26082019122727charger cage 3usb 2,4A.jpg', 46015, 'jpg'),
(14, 'charger cage qualcom 3.0A', 'Adapter', 'Cage', 'Putih', '40000', 'charger cage qualcom 3.0A\r\nsupport fast charging', 'Baru', 'https://www.tokopedia.com/flecoacc/cas-charger-cage-qualcom-3-0a', '', '', '26082019122841charger cage qualcom 3.0A.jpg', 46571, 'jpg'),
(15, 'travel charger, cas, adapter, charger samsung S4', 'Adapter', 'Samsung', 'Putih', '17000', '* connector interface : mikro usb\r\n* input - 100 - 200V / 50-60Hz 0,35A\r\n* output : 5.0V ==== 2.0A\r\n* package : retail pack', 'Baru', 'https://www.tokopedia.com/flecoacc/travel-charger-cas-adapter-charger-samsung-s4', '', '', '26082019122954travel charger, cas, adapter, charger samsung S4.jpg', 61226, 'jpg'),
(16, 'adaptor LDNIO 6usb 7A A6702', 'Adapter', 'LDNIO', 'Putih', '110000', 'General Specification\r\nBrand	LDNIO\r\nModel	A6702\r\nColor	White\r\nUSB Port 6 USB Port\r\nPlug	US EU AU UK Plug\r\nDimensions 96.5*95.5*54.5mm\r\nInput	100V-240V\r\nOutput	5V 7.0A (Max)\r\nLength	4.92ft/1.5m', 'Baru', 'https://www.tokopedia.com/flecoacc/adaptor-ldnio-6usb-7ampere-a6702', '', '', '26082019123136adaptor LDNIO 6usb 7ampere A6702.png', 205022, 'png'),
(17, 'Adaptor 2usb fleco F004 real 2ampere bonus kabel', 'Adapter', 'Fleco', 'Putih', '25000', 'Adaptor 2 usb fleco F004 real 2A, bonus kabel', 'Baru', 'https://www.tokopedia.com/flecoacc/adaptor-2usb-fleco-f004-real-2ampere-bonus-kabel', '', '', '26082019123237Adaptor 2usb fleco F004 real 2ampere bonus kabel.jpg', 29744, 'jpg'),
(18, 'Adaptor Charger Fleco F-050 Dual Port usb 4.8A Original', 'Adapter', 'Fleco', 'Putih', '35000', 'Model: F-050\r\nType: USB Home/Travel Charger\r\n\r\nSpecification\r\nInput: AC100-240V\r\nOutput: 5V 4.8A\r\nUSB port: 3 port\r\nColor: White', 'Baru', 'https://www.tokopedia.com/flecoacc/adaptor-charger-fleco-f-050-dual-port-usb-4-8a-original-termurah', '', '', '26082019123459Adaptor Charger Fleco F-050 Dual Port usb 4.8A Original.png', 541177, 'png'),
(19, 'Travel Charger, adapter, cas FLECO F-060 2usb 3.1A Real Capacity', 'Adapter', 'Fleco', 'Putih', '35000', 'charger fleco F-060 2 usb + kabel langsungan kualitas jamin mantap, fast charger real capacity', 'Baru', 'https://www.tokopedia.com/flecoacc/travel-charger-adapter-cas-fleco-f-060-2usb-3-1a-real-capacity', '', '', '26082019123604Travel Charger, adapter, cas FLECO F-060 2usb 3.1A Real Capacity.png', 315100, 'png'),
(21, 'adapter 2.0A', 'Adapter', 'Samsung', 'Putih / Hitam', '25000', 'cas branded samsung, oppo, lenovo real 2.0A', 'Baru', 'https://www.tokopedia.com/flecoacc/adapter-branded-2-0a', '', '', '26082019123819adapter branded 2,0A.png', 303666, 'png'),
(22, 'handfree fleco bluetooth sport fl-318bt', 'Handsfree', 'Fleco', 'Hitam', '85000', 'handfree fleco bluetooth sport fl-318', 'Baru', 'https://www.tokopedia.com/flecoacc/handfree-fleco-bluetooth-sport-fl-318bt', '', '', '26082019130603handfree fleco bluetooth sport fl-318bt.jpg', 37065, 'jpg'),
(23, 'Earphone/headset/headphone bluetooth TWS I7S wireless', 'Handsfree', 'i7S tws', 'Putih', '55000', '- Twins, True Wireless Stereo\r\n- Chipeset : CSR from UK\r\n- Wireless Version : 4.2\r\n- Frequency : 2.4 Ghz\r\n- Wireless Range : one about 15m, and a set for about 10m\r\n- Receiive Sensitivity : -90dBm\r\n- Battery capacity : 85 mAh for earphone - Worktime: one for 12 H and a set for 6 H\r\n- Stanby time : 240 H and a set for 120 H\r\n- Charging time (for Earphone and Charging CASE) : 2 H\r\n- Support one match two, connect 2 device\r\n- Adopt the advanced CVC 6.0 active Noise Canceling\r\n- Support A2DP 1.3 / HFP 1.2 /AVRCP 1.6 / DI 1.3\r\n- Build-in superior HD micophone, Provide clear and loud sound', 'Baru', 'https://www.tokopedia.com/flecoacc/earphone-headset-headphone-bluetooth-tws-i7s-wireless', '', '', '26082019130727Earphone headset headphone bluetooth TWS I7S wireless.jpg', 27099, 'jpg'),
(24, 'handfree fleco bluetooth sport FL318BT vol2', 'Handsfree', 'Fleco', 'Hitam', '85000', 'handfree bluetooth fleco fl318bt vol 2', 'Baru', 'https://www.tokopedia.com/flecoacc/handfree-fleco-bluetooth-sport-fl318bt-vol2', '', '', '26082019130931handfree fleco bluetooth sport FL318BT vol2.jpg', 33122, 'jpg'),
(25, 'handsfree headset zbox universal', 'Handsfree', 'Zbox', 'Random', '275000', 'handsfree zbox universal suara bass\r\n1 toples isi 50pcs', 'Baru', 'https://www.tokopedia.com/flecoacc/hf-headset-zbox-universal', '', '', '26082019131126hf headset zbox universal.jpg', 67445, 'jpg'),
(26, '  Headset Handsfree Bluetooth Magnet Metal Fleco FL-138BT Mega Bass', 'Handsfree', 'Fleco', 'Hitam', '75000', 'handfree sport magnet blutooth fleco FL138 BT ', 'Baru', 'https://www.tokopedia.com/flecoacc/headset-handsfree-bluetooth-magnet-metal-fleco-fl-138bt-mega-bass', '', '', '26082019131247Headset Handsfree Bluetooth Magnet Metal Fleco FL-138BT Mega Bass.png', 268860, 'png'),
(27, 'Headset Handsfree Fleco U36 Mega Bass Termurah', 'Handsfree', 'Fleco', 'Merah Muda/Hitam/Putih/Kuning', '20000', 'handfree fleco superbass tipe u36', 'Baru', 'https://www.tokopedia.com/flecoacc/headset-handsfree-fleco-u36-mega-bass-termurah', '', '', '26082019132055Headset Handsfree Fleco U36 Mega Bass Termurah.png', 317736, 'png'),
(28, 'HandsFree HK BASS', 'Handsfree', 'HK', 'Putih / Hitam', '25000', 'APPLIES TO 3.5 FOOT INTERFACE SMARTPHONE (UNUVERSAL\r\nROUND ANTI WRAP\r\nBUILT IN MICROPHONE HADNS FREE CALL\r\nMULTIFUNCTION BUTTON\r\nMEGA BASS\r\nFASHION COLOUR\r\nCLEAR HUMAN VOICE\r\nCRISP CLEAR AUDIO\r\n', 'Baru', 'https://www.tokopedia.com/flecoacc/hf-hk-bass', '', '', '26082019132503HF HK BASS.jpg', 57103, 'jpg'),
(29, 'HandsFree PAPADA PA200 SUPERBASS', 'Handsfree', 'Papada', 'Putih / Merah / Biru', '25000', 'DRIVE 10MM\r\nPUG TYPE 3.5MM\r\nFREQUENCY RESPONSE 20-20000HZ\r\nSENSITIVITY 95DB 3DB CORD LENGTH 1.2M\r\nAPPLIES TO 3.5 FOOT INTERFACE SMARTPHONE (UNUVERSAL\r\nROUND ANTI WRAP\r\nBUILT IN MICROPHONE HADNS FREE CALL\r\nMULTIFUNCTION BUTTON\r\nMEGA BASS\r\nFASHION COLOUR\r\nCLEAR HUMAN VOICE\r\nCRISP CLEAR AUDIO', 'Baru', 'https://www.tokopedia.com/flecoacc/hf-papada-pa200-superbass', '', '', '26082019132840hF PAPADA PA200 SUPERBASS.jpg', 59422, 'jpg'),
(30, 'Kabel aux cage 3,5 1M', 'Audio', 'Cage', 'Hitam', '25000', '- Model Jack 3.5mm\r\n- Warna black only\r\n- Kualitas Baik\r\n- Kualitas suara jauh lebih bagus dibandingkan yg biasa\r\n- Konek hp smartphone anda ke speaker / salon yg sudah support jack 3.5mm / untuk di mobil yg uda support jack 3.5mm', 'Baru', 'https://www.tokopedia.com/flecoacc/kabel-aux-cage-3-5-1m', '', '', '26082019134222kabel aux cage 3,5 1M.jpg', 44343, 'jpg'),
(31, 'speaker bluetooth mini (motif retak)', 'Audio', '-', 'hitam, biru, putih, hijau', '30000', 'Bluetooth Versi 4.0 - Portable dan kecil\r\n- Hasil Suara bagus\r\n- Lampu LED yang berkedip pada saat dinyalakan\r\n- Fungsi FM radio dan bisa dipasangkan MMC untuk dengar Lagu\r\n. Support Phone/Laptop/Tablet PC Suppory TF Card(Mini Micro Sd)\r\n. Modular Buddy Jack Design.\r\n. Expanded Bxs ( Bass Xpansion System) Drives a fuller,richer low-end response\r\n. New larger 45mm driver delivers precise highs for superb sound\r\n\r\n1. Support A2DP,AVRCP,headset,handsfree profile\r\n2. Bluetooth version : V2.1\r\n3. Working Range : Up to 10m\r\n4. Working Time : 5 Hours\r\n5. Dimension : 60x60x50mm\r\n6. Net Weight : 230g\r\n7. Battery Charge Time : 2 Hours\r\n8. Battery Voltage/Capacity : 520mAh', 'Baru', 'https://www.tokopedia.com/flecoacc/speaker-spiker-bluetooth-mini-motif-retak', '', '', '26082019135118spiker bluetooth mini ( motif retak).jpg', 50612, 'jpg'),
(33, 'speaker bluetooth JBL T5 ', 'Audio', 'JBL', 'Biru / Merah / Kuning / Hitam', '45000', 'Bluetooth: V 4.2\r\nWorking Distance: Up to 10M\r\nVoltage: DC 5V', 'Baru', 'https://www.tokopedia.com/flecoacc/speaker-spiker-bluetooth-jbl-t5-ngebass', '', '', '26082019141150spiker bluetooth JBL T5 ngebass.jpg', 47014, 'jpg'),
(35, 'speaker bluetooth JBL T5s', 'Audio', 'JBL', 'Biru / Merah / Kuning', '50000', 'Bluetooth: V 4.2\r\nWorking Distance: Up to 10M\r\nVoltage: DC 5V\r\nBatt Charge Time: 2-3H', 'Baru', 'https://www.tokopedia.com/flecoacc/speaker-spiker-bluetooth-jbl-t5s-ngebass', '', '', '26082019141857spiker bluetooth JBL T5s ngebass.jpg', 24400, 'jpg'),
(37, 'SAVER ROKER APPOLO 3.4A AUTO ID', 'Saver', 'Roker Appolo', 'Putih', '60000', '-', 'Baru', 'https://www.tokopedia.com/flecoacc/saver-roker-appolo-3-4a-auto-id?m_id=7796274', '', '', '28082019023148SAVER ROKER APPOLO 3,4A AUTO ID.jpg', 47232, 'jpg'),
(38, 'Kabel data cage emerald mikro 1M', 'Kabel', 'Cage', 'Putih', '15000', 'Kabel USB C.A.G.E dengan material kabel berkualitas. Bentuk kabel menggunakan design Noodle sehingga tidak mudah putus dan mudah untuk disimpan karena tidak akan kusut.\r\n\r\nFeatures\r\nCharging & Sync Cable\r\nKabel ini dapat digunakan untuk mengisi baterai smartphone dan mentransfer data.\r\n\r\nHigh Quality Material\r\nKabel terbuat dari silicon dan memiliki bentuk noodle sehingga tidak mudah putus dan kusut.\r\n\r\nCompatibility\r\nKompatibel untuk semua smartphone yang menggunakan Mikro USB port.', 'Baru', 'https://www.tokopedia.com/flecoacc/kabel-data-cage-emerald-mikro-1m', '', '', '28082019023356kabel data cage emerald mikro 1m.jpg', 30642, 'jpg'),
(39, 'Kabel data cage onyx mikro', 'Kabel', 'Cage ', 'Hitam', '20000', 'Kabel USB C.A.G.E dengan material kabel berkualitas. Bentuk kabel menggunakan design Noodle sehingga tidak mudah putus dan mudah untuk disimpan karena tidak akan kusut.\r\n\r\nFeatures\r\nCharging & Sync Cable\r\nKabel ini dapat digunakan untuk mengisi baterai smartphone dan mentransfer data.\r\n\r\nHigh Quality Material\r\nKabel terbuat dari silicon dan memiliki bentuk noodle sehingga tidak mudah putus dan kusut.\r\n\r\nCompatibility\r\nKompatibel untuk semua smartphone yang menggunakan Mikro USB port.', 'Baru', 'https://www.tokopedia.com/flecoacc/kabel-data-cage-onyx-mikro', '', '', '28082019023508cage onyx.jpg', 41602, 'jpg'),
(40, 'Kabel cage gaming mikro 1M', 'Kabel', 'Cage', 'Hitam', '25000', 'Kabel USB C.A.G.E dengan material kabel berkualitas. Bentuk kabel menggunakan design Noodle sehingga tidak mudah putus dan mudah untuk disimpan karena tidak akan kusut.\r\n\r\nFeatures\r\nCharging & Sync Cable\r\nKabel ini dapat digunakan untuk mengisi baterai smartphone dan mentransfer data.\r\n\r\nHigh Quality Material\r\nKabel terbuat dari silicon dan memiliki bentuk noodle sehingga tidak mudah putus dan kusut.\r\n\r\nCompatibility\r\nKompatibel untuk semua smartphone yang menggunakan Mikro USB port.', 'Baru', 'https://www.tokopedia.com/flecoacc/kabel-cage-gaming-mikro-1m', '', '', '28082019023611kabel cage gaming mikro 1m.jpg', 31917, 'jpg'),
(41, ' kabel gaming Cage mikro 1m', 'Kabel', 'Cage', 'Hitam', '25000', 'Current : 2.4A Max\r\nUSB Plug Time : 10000 times\r\nMicro Plug Time : 10000 times\r\nSalt Spray Test : 24H\r\nBending Test : 4000 times\r\nHigh Temperature : 70 C\r\nLow Temperature : -20 C\r\nLength : 100CM', 'Baru', 'https://www.tokopedia.com/flecoacc/kabel-gaming-cage-mikro-1m', '', '', '28082019024156kabel gaming Cage mikro 1m.jpg', 40996, 'jpg'),
(42, 'Kabel data usb charge warna warni micro v8 kwetiau toples isi 50', 'Kabel', 'Kwetiau', 'Random', '155000', 'Kabel data kwetiau warna warni flat tipe micro v8 toples isi 50biji', 'Baru', 'https://www.tokopedia.com/flecoacc/kabel-data-usb-charge-warna-warni-micro-v8-kwetiau-toples-isi-50', '', '', '28082019024658kabel data usb charge warna warni micro v8 kwetiau toples isi 50.png', 634101, 'png'),
(43, 'Kabel data usb v8 micro toples isi 50biji support 3a fast charging', 'Kabel', 'USB V8', 'Random', '180000', 'Kabel data usb v8 micro super charge 3amper toples isi 50pcs', 'Baru', 'https://www.tokopedia.com/flecoacc/kabel-data-usb-v8-micro-toples-isi-50biji-support-3a-fast-charging', '', '', '28082019025539kabel data usb v8 micro toples isi 50biji support 3a fast charging.png', 522476, 'png'),
(44, 'Kabel Audio Aux Fleco 1in1 toples isi 50pcs', 'Kabel', 'Fleco', 'Random', '180000', 'Kabel data usb v8 micro super charge 3amper toples isi 50pcs\r\n', 'Baru', 'https://www.tokopedia.com/flecoacc/kabel-data-usb-v8-micro-toples-isi-50biji-support-3a-fast-charging', '', '', '28082019030253Kabel Audio Aux Fleco 1in1 toples isi 50pcs.png', 306996, 'png'),
(45, 'kabel charger / kabel usb / kabel data samsung original', 'Kabel', 'Samsung', 'Hitam', '10000', '- kabel data USB mikro\r\n- kompatible model : samsung S8/S8+/S9/S9+/note 8\r\n- enable charging from laptop and PC USB port\r\n- terbuat dari bahan yang berkualitas\r\n- pengiriman cepat', 'Baru', 'https://www.tokopedia.com/flecoacc/kabel-charger-kabel-usb-kabel-data-samsung-original', '', '', '28082019030447kabel charger kabel usb kabel data samsung original.jpg', 35524, 'jpg'),
(46, 'kabel fleco gepeng 1meter fullspeed', 'Kabel', 'Fleco', 'Biru / Putih / Hijau / Hitam / Orange', '15000', 'USB CABLE\r\n\r\nSpecification :\r\nElectric conduction no short circuit,open circuit,dislecatio,leakage\r\ninsert pull test:andi oxidation III level Processing \r\nIntemal resistance:<0.65 (singte core)\r\nData transmission:2.0+tamper-proof processing\r\nSync Data\r\nConnects Two devices To effortlessly sync\r\nOr transfer data with no interference\r\nUSB Charging \r\nCharger your devices with any USB port At home or on-The-Go.\r\nStrong Cable and cool Design\r\nCREATIVE FASHION USB CABLE FLAT SERIES', 'Baru', 'https://www.tokopedia.com/flecoacc/kabel-fleco-gepeng-1meter-fullspeed', '', '', '28082019030751kabel fleco gepeng 1meter fullspeed.png', 278240, 'png'),
(47, 'Kabel ruber fleco tipe c', 'Kabel', 'Fleco', 'Random', '20000', 'kabel rubber fleco tipe c panjang 1.2meter support fast charging', 'Baru', 'https://www.tokopedia.com/flecoacc/kabel-ruber-fleco-tipe-c', '', '', '28082019030858kabel ruber fleco tipe c.png', 581717, 'png'),
(48, 'Kabel data original tablet P1000', 'Kabel', '-', 'Hitam', '30000', 'Warna: hitam\r\nPanjang: 1 meter\r\nKegunaan: transfer data dan pengisian baterai\r\n\r\nKOMPATIBEL UNTUK:\r\nGalaxy Tab 7\" GT-P1000\r\nGalaxy Tab 7\" WiFi GT-P1010\r\nGalaxy Tab 2 7\" GT-P3100\r\nGalaxy Tab 2 7\" GT-P3113\r\nGalaxy Tab 2 10.1\" GT-P5100\r\nGalaxy Tab 2 10.1\" GT-P5110\r\nGalaxy Tab 7\" plus GT-P6200\r\nGalaxy Tab 7.7\" GT-P6800\r\nGalaxy Tab 8.9\" GT-P7300\r\nGalaxy Tab 2 7\" GT-P7500\r\nGalaxy Note 10.1\" N8000\r\nGalaxy Note 10.1\" N8010\r\nGalaxy Note 10.1\" LTE N8020\r\nGalaxy Tab 10.1\" P7510', 'Baru', 'https://www.tokopedia.com/flecoacc/kabel-data-original-tablet-p1000', '', '', '28082019031046kabel data original tablet P1000.png', 135932, 'png'),
(49, 'Kabel data indoku 30cm putih', 'Kabel', 'Indoku', 'Putih', '10000', 'Spesifikasi :\r\nIndoku Cable Data Micro USB adalah kabel data dimana biasanya dipergunakan untuk menghubungkan perangkat Anda dari Kabel USB 2.0 ke konektor Micro USB.\r\nDapat digunakan untuk sinkronisasi data bersamaan dengan pengisian ulang baterai perangkat ketika dihubungkan ke komputer, atau dapat digunakan untuk pengisian ulang baterai ketika dihubungkan ke adaptor power.\r\n\r\nHigh Light :\r\n-Konektor Micro USB ke USB\r\n-Panjang 30 cm ( wanna tersedia Black and White )\r\n-Universal buat semua perangkat yang menggunakan kepala Micro USB\r\n-Terbuat dari bahan pilihan dengan kualitas yang lentur dan flexible\r\n-Charging dan Transfer Data lebih cepat max 2A', 'Baru', 'https://www.tokopedia.com/flecoacc/kabel-data-indoku-30cm-putih', '', '', '28082019031142kabel data indoku 30cm putih.png', 74517, 'png'),
(50, 'kabel data type c super fast', 'Kabel', 'SCHAFFSEN', 'Random', '35000', 'PRODUCT FEATURES\r\n- Safe and flexible ,tensile ,bending.\r\n- Effective anti-winding.\r\n- High speed transmission fast charging\r\n', 'Baru', 'tokopedia.com/flecoacc/kabel-data-type-c-super-fast', '', '', '28082019031420kabel data type c super fast.png', 474261, 'png'),
(51, 'Kabel Data Hippo Teleport Micro Usb 2.4A 120cm ORIGINAL', 'Kabel', 'Hippo', 'Hijau / Biru / Merah', '35000', '- High Speed Charging\r\n- 4x Faster Charging \r\n- Support Fast Charging\r\n- TPE material ( bahan kabel )\r\n- ABS material ( Bahan USB)\r\n- High-tech Chipset\r\n- Excellent Performance\r\n- Panjang 120cm', 'Baru', 'https://www.tokopedia.com/flecoacc/kabel-data-hippo-teleport-micro-usb-2-4a-120cm-original', '', '', '28082019031559Kabel Data Hippo Teleport Micro Usb 2.4A 120cm ORIGINAL.jpg', 61015, 'jpg'),
(52, 'Kabel data toples hippo caby 2 iphone 6 iphone 7 iphone 8 iphone x', 'Kabel', '', 'Green, Pink, Orange, Blue, White', '510000', 'Hippo Caby 2 Lightning kabel USB yg dibuat khusus untuk mengisi dan sinkronisasi data. Hadir dengan upgrade terbaru seperti upgrade IC. Dengan panjang 100 cm, bentuk yang pipih dan penuh dengan warna menjadi daya tarik tersendiri dari kabel USB ini. Support untuk mengisi dan sinkronisasi kecuali warna putih hanya untuk mengisi saja. Dengan output 2A yang ada pada kabel ini membuat pengisian daya pada gadget anda menjadi lebih cepat. Cocok dan kompatible pada semua IOS Device.\r\n\r\nCharging dan Data\r\nKabel Data ini memungkinkan untuk mengisi dan sinkronisasi data dengan smartphone yang menggunakan koneksi USB. Dengan panjang 100cm, jadikan USB ini kompatibel memungkinkan untuk charger cepat dan data trasnfer data lebih cepat. Dengan kualitas material yang bagus menjadikan kabel data ini kuat dan tidak mudah rusak.', 'Baru', 'https://www.tokopedia.com/flecoacc/kabel-data-toples-hippo-caby-2-iphone-6-iphone-7-iphone-8-iphone-x', '', '', '28082019031709Kabel data toples hippo caby 2 iphone 6 iphone 7 iphone 8 iphone x.jpg', 10141, 'jpg'),
(53, 'Kabel data toples fleco 1m warna flat support QC 3.0 fast charging', 'Kabel', 'Fleco', 'Random', '155000', 'Kabel data toples fleco 1m warna flat support QC 3.0 fast charging', 'Baru', 'https://www.tokopedia.com/flecoacc/kabel-data-toples-fleco-1m-warna-flat-support-qc-3-0-fast-charging', '', '', '28082019031851Kabel data toples fleco 1m warna flat support QC 3.0 fast charging.jpg', 46123, 'jpg'),
(54, 'kabel data usb Vivan XM100 micro', 'Kabel', 'Vivan', 'Putih', '45000', 'Feature:\r\n1. Two length of cable(1M+0.3M), convenient for using in different scenes\r\n2. High-quality core, through 2.4A current, fast charge and data transmission\r\n3. TPE material,anti-knot, easy to storage\r\n4. Long tail small head design, better protection of the wire, not easy to break, longer using life.5. High-grade iron box package\r\n\r\nPackage included:\r\n1 x 1M Micro USB Cable\r\n1 x 0.3M Micro USB Cable', 'Baru', 'https://www.tokopedia.com/flecoacc/kabel-data-usb-vivan-xm100-micro', '', '', '28082019032039kabel data usb Vivan XM100 micro.jpg', 20929, 'jpg'),
(55, 'temperglass 9D full cover samsung A8 plus', 'Temperglass', 'Samsung', '-', '15000', '* Temperglass Round EDGE 5D Full Cover 0.3mm pinggiran cembung\r\n* Japan glue material\r\n* easy to install pemasangan mudah\r\n* Paket penjualan : temperglass + tissue pembersih + kemasan\r\n* Packing menggunakan buble wrap + karton jadi aman tidak pecah saat pengiriman\r\n* Tidak ada garansi\r\n\r\n\r\n\r\nFeatures :\r\n* 9H strenght\r\n* Oleophobic Coated\r\n* Protection from drop\r\n* Fingerprint proof\r\n* Blade proof', 'Baru', 'https://www.tokopedia.com/flecoacc/temperglass-9d-full-cover-samsung-a8-plus', '', '', 'gambar-tg.jpg', 35048, 'jpg'),
(56, 'temperglass 9D full cover samsung A90', 'Temperglass', 'Samsung', '-', '15000', '* Temperglass Round EDGE 5D Full Cover 0.3mm pinggiran cembung\r\n* Japan glue material\r\n* easy to install pemasangan mudah\r\n* Paket penjualan : temperglass + tissue pembersih + kemasan\r\n* Packing menggunakan buble wrap + karton jadi aman tidak pecah saat pengiriman\r\n* Tidak ada garansi\r\n\r\n\r\n\r\nFeatures :\r\n* 9H strenght\r\n* Oleophobic Coated\r\n* Protection from drop\r\n* Fingerprint proof\r\n* Blade proof', 'Baru', 'https://www.tokopedia.com/flecoacc/temperglass-9d-full-cover-samsung-a90', '', '', 'gambar-tg.jpg', 35048, 'jpg'),
(57, 'temperglass 9D full cover samsung A70', 'Temperglass', '-', 'Hitam', '15000', '* Temperglass Round EDGE 5D Full Cover 0.3mm pinggiran cembung\r\n* Japan glue material\r\n* easy to install pemasangan mudah\r\n* Paket penjualan : temperglass + tissue pembersih + kemasan\r\n* Packing menggunakan buble wrap + karton jadi aman tidak pecah saat pengiriman\r\n* Tidak ada garansi', 'Baru', 'https://www.tokopedia.com/flecoacc/temperglass-9d-full-cover-samsung-a70', '', '', 'gambar-tg.jpg', 35048, 'jpg'),
(58, 'temperglass 9D full cover samsung A60', 'Temperglass', '-', '-', '15000', '* Temperglass Round EDGE 5D Full Cover 0.3mm pinggiran cembung\r\n* Japan glue material\r\n* easy to install pemasangan mudah\r\n* Paket penjualan : temperglass + tissue pembersih + kemasan\r\n* Packing menggunakan buble wrap + karton jadi aman tidak pecah saat pengiriman\r\n* Tidak ada garansi\r\n\r\n\r\n\r\nFeatures :\r\n* 9H strenght\r\n* Oleophobic Coated\r\n* Protection from drop\r\n* Fingerprint proof\r\n* Blade proof', 'Baru', 'https://www.tokopedia.com/flecoacc/temperglass-9d-full-cover-samsung-a60', '', '', 'gambar-tg.jpg', 35048, 'jpg'),
(59, 'temperglass 9D full cover samsung A50', 'Temperglass', '-', '-', '15000', '* Temperglass Round EDGE 5D Full Cover 0.3mm pinggiran cembung\r\n* Japan glue material\r\n* easy to install pemasangan mudah\r\n* Paket penjualan : temperglass + tissue pembersih + kemasan\r\n* Packing menggunakan buble wrap + karton jadi aman tidak pecah saat pengiriman\r\n* Tidak ada garansi\r\n\r\n\r\n\r\nFeatures :\r\n* 9H strenght\r\n* Oleophobic Coated\r\n* Protection from drop\r\n* Fingerprint proof\r\n* Blade proof', 'Baru', 'https://www.tokopedia.com/flecoacc/temperglass-9d-full-cover-samsung-a50', '', '', 'gambar-tg.jpg', 35048, 'jpg'),
(60, 'temperglass 9D full cover samsung A40', 'Temperglass', '-', '-', '15000', '* Temperglass Round EDGE 5D Full Cover 0.3mm pinggiran cembung\r\n* Japan glue material\r\n* easy to install pemasangan mudah\r\n* Paket penjualan : temperglass + tissue pembersih + kemasan\r\n* Packing menggunakan buble wrap + karton jadi aman tidak pecah saat pengiriman\r\n* Tidak ada garansi\r\n\r\n\r\n\r\nFeatures :\r\n* 9H strenght\r\n* Oleophobic Coated\r\n* Protection from drop\r\n* Fingerprint proof\r\n* Blade proof', 'Baru', 'https://www.tokopedia.com/flecoacc/temperglass-9d-full-cover-samsung-a40', '', '', 'gambar-tg.jpg', 35048, 'jpg'),
(61, 'temperglass 9D full cover samsung A30', 'Temperglass', '-', '-', '15000', '* Temperglass Round EDGE 5D Full Cover 0.3mm pinggiran cembung\r\n* Japan glue material\r\n* easy to install pemasangan mudah\r\n* Paket penjualan : temperglass + tissue pembersih + kemasan\r\n* Packing menggunakan buble wrap + karton jadi aman tidak pecah saat pengiriman\r\n* Tidak ada garansi\r\n\r\n\r\n\r\nFeatures :\r\n* 9H strenght\r\n* Oleophobic Coated\r\n* Protection from drop\r\n* Fingerprint proof\r\n* Blade proof', 'Baru', 'https://www.tokopedia.com/flecoacc/temperglass-9d-full-cover-samsung-a30', '', '', 'gambar-tg.jpg', 35048, 'jpg'),
(62, 'temperglass 9D full cover samsung A10', 'Temperglass', '-', '-', '15000', '* Temperglass Round EDGE 5D Full Cover 0.3mm pinggiran cembung\r\n* Japan glue material\r\n* easy to install pemasangan mudah\r\n* Paket penjualan : temperglass + tissue pembersih + kemasan\r\n* Packing menggunakan buble wrap + karton jadi aman tidak pecah saat pengiriman\r\n* Tidak ada garansi\r\n\r\n\r\n\r\nFeatures :\r\n* 9H strenght\r\n* Oleophobic Coated\r\n* Protection from drop\r\n* Fingerprint proof\r\n* Blade proof', 'Baru', 'https://www.tokopedia.com/flecoacc/temperglass-9d-full-cover-samsung-a10', '', '', 'gambar-tg.jpg', 35048, 'jpg'),
(63, 'temperglass 9D full cover samsung M20', 'Temperglass', '-', '-', '15000', '* Temperglass Round EDGE 5D Full Cover 0.3mm pinggiran cembung\r\n* Japan glue material\r\n* easy to install pemasangan mudah\r\n* Paket penjualan : temperglass + tissue pembersih + kemasan\r\n* Packing menggunakan buble wrap + karton jadi aman tidak pecah saat pengiriman\r\n* Tidak ada garansi\r\n\r\n\r\n\r\nFeatures :\r\n* 9H strenght\r\n* Oleophobic Coated\r\n* Protection from drop\r\n* Fingerprint proof\r\n* Blade proof', 'Baru', 'https://www.tokopedia.com/flecoacc/temperglass-9d-full-cover-samsung-m20', '', '', 'gambar-tg.jpg', 35048, 'jpg'),
(64, 'temperglass 9D full cover samsung M10', 'Temperglass', '-', '-', '15000', '* Temperglass Round EDGE 5D Full Cover 0.3mm pinggiran cembung\r\n* Japan glue material\r\n* easy to install pemasangan mudah\r\n* Paket penjualan : temperglass + tissue pembersih + kemasan\r\n* Packing menggunakan buble wrap + karton jadi aman tidak pecah saat pengiriman\r\n* Tidak ada garansi\r\n\r\n\r\n\r\nFeatures :\r\n* 9H strenght\r\n* Oleophobic Coated\r\n* Protection from drop\r\n* Fingerprint proof\r\n* Blade proof', 'Baru', 'https://www.tokopedia.com/flecoacc/temperglass-9d-full-cover-samsung-m10', '', '', 'gambar-tg.jpg', 35048, 'jpg'),
(65, 'case auto fokus samsung a10 / silikon auto fokus kulit jeruk', 'Accesoris Handphone', 'Auto Focus', 'Hitam', '10000', 'Motif kulit jeruk Terbuat dari Full karet lentur (bukan kulit sintetis) kualitas premium\r\n- Proteksi dari jatuh dan benturan ringan (Shockproof)\r\n- Design Exclusive, Slim, Fit & mudah dipasang ( Anti Fingerprint )\r\n- Presisi dan tidak mengurangi kemudahan akses ke segala tombol\r\n- Jenis softcase lentur dan nyaman di genggam\r\n\r\n\r\n\r\n3 Kelebihan yang kamu harus tahu tentang casing ini?\r\n1. Mudah dipasang\r\n2. Membuat tampilan handphone semakin elegan\r\n3. Meminimalisir lecet pada handphone kamu akibat goresan', 'Baru', 'https://www.tokopedia.com/flecoacc/case-auto-fokus-samsung-a10-silikon-auto-fokus-kulit-jeruk', '', '', 'autofokus.jpg', 44437, 'jpg'),
(66, 'case auto fokus samsung A20 / silikon auto fokus kulit jeruk', 'Accesoris Handphone', 'Auto Fokus', 'Hitam', '10000', 'Motif kulit jeruk Terbuat dari Full karet lentur (bukan kulit sintetis) kualitas premium\r\n- Proteksi dari jatuh dan benturan ringan (Shockproof)\r\n- Design Exclusive, Slim, Fit & mudah dipasang ( Anti Fingerprint )\r\n- Presisi dan tidak mengurangi kemudahan akses ke segala tombol\r\n- Jenis softcase lentur dan nyaman di genggam\r\n\r\n\r\n\r\n3 Kelebihan yang kamu harus tahu tentang casing ini?\r\n1. Mudah dipasang\r\n2. Membuat tampilan handphone semakin elegan\r\n3. Meminimalisir lecet pada handphone kamu akibat goresan', 'Baru', 'https://www.tokopedia.com/flecoacc/case-auto-fokus-samsung-a20-silikon-auto-fokus-kulit-jeruk', '', '', 'autofokus.jpg', 44437, 'jpg'),
(67, 'case auto fokus samsung A50 / silikon auto fokus kulit jeruk', 'Accesoris Handphone', 'Auto Fokus', 'Hitam', '10000', 'Motif kulit jeruk Terbuat dari Full karet lentur (bukan kulit sintetis) kualitas premium\r\n- Proteksi dari jatuh dan benturan ringan (Shockproof)\r\n- Design Exclusive, Slim, Fit & mudah dipasang ( Anti Fingerprint )\r\n- Presisi dan tidak mengurangi kemudahan akses ke segala tombol\r\n- Jenis softcase lentur dan nyaman di genggam\r\n\r\n\r\n\r\n3 Kelebihan yang kamu harus tahu tentang casing ini?\r\n1. Mudah dipasang\r\n2. Membuat tampilan handphone semakin elegan\r\n3. Meminimalisir lecet pada handphone kamu akibat goresan', 'Baru', 'https://www.tokopedia.com/flecoacc/case-auto-fokus-samsung-a50-silikon-auto-fokus-kulit-jeruk', '', '', 'autofokus.jpg', 44437, 'jpg'),
(68, 'case auto fokus samsung A30 / silikon auto fokus kulit jeruk', 'Accesoris Handphone', 'Auto Fokus', 'Hitam', '10000', 'Motif kulit jeruk Terbuat dari Full karet lentur (bukan kulit sintetis) kualitas premium\r\n- Proteksi dari jatuh dan benturan ringan (Shockproof)\r\n- Design Exclusive, Slim, Fit & mudah dipasang ( Anti Fingerprint )\r\n- Presisi dan tidak mengurangi kemudahan akses ke segala tombol\r\n- Jenis softcase lentur dan nyaman di genggam\r\n\r\n\r\n\r\n3 Kelebihan yang kamu harus tahu tentang casing ini?\r\n1. Mudah dipasang\r\n2. Membuat tampilan handphone semakin elegan\r\n3. Meminimalisir lecet pada handphone kamu akibat goresan', 'Baru', 'https://www.tokopedia.com/flecoacc/case-auto-fokus-samsung-a30-silikon-auto-fokus-kulit-jeruk', '', '', 'autofokus.jpg', 44437, 'jpg'),
(69, 'xiaomi redmi note 5 case auto fokus carbon', 'Accesoris Handphone', 'Auto Fokus', 'Hitam', '10000', 'Mohon Baca Deskripsi Terlebih Dahulu Sebelum Order!!!!!\r\n\r\n1. Di Wajibkan Setiap Pembukaan Packing Melakukan Video , Jika Barang Rusak/Kekurangan Barang Akan Di Validasi Melalui Video , Jika Tidak Ada Bukti Video Maka Di Anggap Tidak Sah Untuk Komplain Maupun Resolusi\r\n\r\n2. PERHATIAN: Kami Tidak Menerima Komplain Pada Saat Barang Sampai Di Anda Rusak / Pecah / Kerusakan Pada Saat Pengiriman. Jadi Mohon Kerja Samanya Untuk Membeli Kardus Pengaman. STOK READY\r\nLANGSUNG ORDER AJA YA\r\n\r\nREADY :\r\nHITAM\r\n\r\nKeterangan Produk:\r\n- Motif KarbonTerbuat dari Full karet lentur (bukan kulit sintetis) kualitas\r\npremium\r\n- Proteksi dari jatuh dan benturan ringan (Shockproof)\r\n- Design Exclusive, Slim, Fit & mudah dipasang ( Anti Fingerprint )\r\n- Presisi dan tidak mengurangi kemudahan akses ke segala tombol\r\n- Jenis softcase lentur dan nyaman di genggam', 'Baru', '', '', '', 'acc redmi 5 note.jpg', 44698, 'jpg'),
(70, 'vivo y91 case auto fokus carbon', 'Accesoris Handphone', 'Auto Fokus', 'Hitam', '10000', 'Mohon Baca Deskripsi Terlebih Dahulu Sebelum Order!!!!!\r\n\r\n1. Di Wajibkan Setiap Pembukaan Packing Melakukan Video , Jika Barang Rusak/Kekurangan Barang Akan Di Validasi Melalui Video , Jika Tidak Ada Bukti Video Maka Di Anggap Tidak Sah Untuk Komplain Maupun Resolusi\r\n\r\n2. PERHATIAN: Kami Tidak Menerima Komplain Pada Saat Barang Sampai Di Anda Rusak / Pecah / Kerusakan Pada Saat Pengiriman. Jadi Mohon Kerja Samanya Untuk Membeli Kardus Pengaman. STOK READY\r\nLANGSUNG ORDER AJA YA\r\n\r\nREADY :\r\nHITAM\r\n\r\n\r\nKeterangan Produk:\r\n- Motif KarbonTerbuat dari Full karet lentur (bukan kulit sintetis) kualitas\r\npremium\r\n- Proteksi dari jatuh dan benturan ringan (Shockproof)\r\n- Design Exclusive, Slim, Fit & mudah dipasang ( Anti Fingerprint )\r\n- Presisi dan tidak mengurangi kemudahan akses ke segala tombol\r\n- Jenis softcase lentur dan nyaman di genggam', 'Baru', 'https://www.tokopedia.com/flecoacc/vivo-y91-case-auto-fokus-carbon', '', '', '1. vivo.jpg', 52028, 'jpg'),
(71, 'xiaomi pocophone F1 case auto fokus carbon', 'Accesoris Handphone', 'Auto Fokus', 'Hitam', '10000', 'Mohon Baca Deskripsi Terlebih Dahulu Sebelum Order!!!!!\r\n\r\n1. Di Wajibkan Setiap Pembukaan Packing Melakukan Video , Jika Barang Rusak/Kekurangan Barang Akan Di Validasi Melalui Video , Jika Tidak Ada Bukti Video Maka Di Anggap Tidak Sah Untuk Komplain Maupun Resolusi\r\n\r\n2. PERHATIAN: Kami Tidak Menerima Komplain Pada Saat Barang Sampai Di Anda Rusak / Pecah / Kerusakan Pada Saat Pengiriman. Jadi Mohon Kerja Samanya Untuk Membeli Kardus Pengaman. STOK READY\r\nLANGSUNG ORDER AJA YA\r\n\r\nREADY :\r\nHITAM\r\n\r\nKeterangan Produk:\r\n- Motif KarbonTerbuat dari Full karet lentur (bukan kulit sintetis) kualitas\r\npremium\r\n- Proteksi dari jatuh dan benturan ringan (Shockproof)\r\n- Design Exclusive, Slim, Fit & mudah dipasang ( Anti Fingerprint )\r\n- Presisi dan tidak mengurangi kemudahan akses ke segala tombol\r\n- Jenis softcase lentur dan nyaman di genggam', 'Baru', 'https://www.tokopedia.com/flecoacc/xiaomi-pocophone-f1-case-auto-fokus-carbon', '', '', '2250788_6dd172d1-176a-4d1f-8343-d854c90ac754_700_700.jpg', 63188, 'jpg'),
(72, 'trtripod kamera gorillapod holder U ukuran XL', 'Accesoris Handphone', '', '-', '45000', 'Tripod Gorilla Large plus holder flexible pod kamera action cam smartphone\r\n\r\nDESKRIPSI\r\nOctopus Gorilla LARGE SIZE Tripod didesain portable dan memiliki konstruksi fleksibel sehingga dapat membantu Anda mengambil gambar dari sudut yang sulit sekalipun. Tripod ini dapat ditempelkan ke ranting pohon, bebatuan, stang sepeda, dan berbagai macam kontur sulit lainya. Tripod ini mudah dibawa kemana saja dan sangat membantu kegiatan perekaman gambar saat Anda berpergian.\r\n\r\nFEATURE\r\nComplete flexibility, made of hard plastic\r\nEmovable link attachment with lock release button\r\nGray rubberized rings, feet, and link cushion\r\n\r\n\r\nEach leg has nine black ball and socket joints that each have 360 rotational range\r\nThe link attachment screws into most digital camera sizes and is removeable\r\nAllowing it to level out a camera on the most uneven surfaces\r\nIt firmly ensure that your camera can be used anywhere and everywhere\r\nSpecial lock button, make sure the camera is firmly mounted on tripod\r\nMovable connector, 360 degrees of freedom bending or rotation, can reach the best shape of the force\r\nFastening ring and foot seat, providing a powerful grip on any surface\r\n\r\nSPESIFICATIONS\r\nType : Gorilla Tripod Large Size\r\nSize : 250 x 60 x 60 mm\r\nMax Weight Load : 3000g\r\nMaterial : Premium ABS plastic\r\nStandard 1/4\" standard knob\r\nTripod weight : 212 grams\r\nApplies to : Medium and Big size camera\r\nFlexible joints, and can rotate 360 to form the desired shape\r\nThe ring and foot clamp provide additional grip for most of the surface\r\nLink attachment lock your camera tripod to make it safe\r\nYour camera can be used anywhere with this tripod\r\n\r\nPACKAGE INCLUDE\r\n1 x Octopus Gorilla LARGE SIZE Tripod\r\n1 x Holder U for Smartphone / HP', 'Baru', 'https://www.tokopedia.com/flecoacc/trtripod-kamera-gorillapod-holder-u-ukuran-xl', '', '', '2250788_9de94ccc-0a61-4921-910d-c717c386159c_700_700.jpg', 32081, 'jpg'),
(73, 'case auto fokus motif carbon', 'Accesoris Handphone', 'Samsung', 'Hitam', '20000', 'AUTOFOKUS FIBER CARBON.\r\nBarang Di Jamin Bagus, Lebih Tebal, Lebih Presisi, dan Rapi.\r\n\r\nReady tipe :\r\n\r\nA2 CORE, A70, J2 PRIME, REAL ME 3 PRO, Y17, REDMI 7 LENGKAP.\r\n\r\n-SAMSUNG :\r\nA2 CORE (Hot)\r\nA70 (Hot)\r\nA50 (Hot)\r\nA10 (Hot)\r\nM20 (Hot)\r\nM10 (Hot)\r\nJ2 CORE\r\nS10+ (Hot)\r\nS10 LITE (Hot)\r\nS10 (Hot)\r\nS9+\r\nS9 (Hot)\r\nA9 2018\r\nA7 2018\r\nJ6+\r\nJ4+\r\nJ8 2018\r\nJ6 2018\r\nJ4 2018\r\nA8+ 2018\r\nA8 2018\r\nA6+ 2018\r\nA6 2018\r\nJ2 PRO 2018\r\nS8\r\nJ7 CORE\r\nJ3 2016\r\nNOTE 9\r\nNOTE 4\r\nNOTE 3\r\nJ2 CORE\r\nJ7 PRIME\r\nJ5 PRIME\r\nJ2 PRIME (Hot)\r\nJ7 CORE\r\nJ2\r\nJ1 MINI\r\n\r\n-OPPO :\r\nOPPO REAL ME 3 PRO (Hot)\r\nOPPO REAL ME 2 PRO\r\nOPPO REAL ME C1 ( Hot)\r\nOPPO REAL ME 2\r\nOPPO F11 (Hot)\r\nOPPO F11 PRO (Hot)\r\nOPPO A5S (Hot)\r\nOPPO A7 (Hot)\r\nOPPO F9 (Hot)\r\nOPPO A3S (Hot)\r\nOPPO A83\r\nOPPO A71\r\nOPPO F7\r\nOPPO F3+\r\n\r\n-VIVO :\r\nVIVO Y17 (Hot)\r\nVIVO V15 PRO (Hot)\r\nVIVO V15 (Hot)\r\nVIVO V11 PRO (Hot)\r\nVIVO V11 (Hot)\r\nVIVO V9\r\nVIVO Y83\r\nVIVO Y81\r\nVIVO Y71\r\n\r\n-XIAOMI :\r\nREDMI 7\r\nREDMI NOTE 7\r\nPOCOPHONE F1\r\nMi8 LITE\r\nREDMI GO (Hot)\r\nREDMI NOTE 6 PRO (Hot)\r\nREDMI 6 PRO\r\nREDMI 6X\r\nREDMI 6\r\nREDMI GO\r\nREDMI S2\r\nREDMI 5+\r\nREDMI 4A\r\n', 'Baru', 'https://www.tokopedia.com/flecoacc/case-auto-fokus-motif-carbon', '', '', '2250788_0239662b-8e64-48fa-a559-293b29522ad2_700_700.jpg', 30368, 'jpg'),
(74, 'soft case auto fokus motif kulit', 'Accesoris Handphone', 'Auto Fokus', 'Hitam', '10000', 'AUTO FOKUS KULIT\r\nKualitas lebih bagus , lebih tebal, lebih rapi.\r\n\r\nREAL ME C2, A2 CORE, A10, A70, P20 LITE LE, A50, A30, J2 PRIME LENGKAP !!!!\r\n\r\nReady tipe :\r\n\r\nSAMSUNG :\r\nA2 CORE (Hot)\r\nA70 (Hot)\r\nA50 (Hot)\r\nA30 (Hot)\r\nA20 (Hot)\r\nA10 (Hot)\r\nS10 LITE (Hot)\r\nS10+ (Hot)\r\nM20 (Hot)\r\nM10 (Hot)\r\nS9+\r\nA9 2018\r\nA7 2018\r\nJ6+\r\nJ4+\r\nNOTE 9\r\nJ2 CORE\r\nA8 STAR\r\nA6 2018\r\nA6+ 2018\r\nJ7 Prime (Hot)\r\nJ2 Prime (Hot)\r\nJ8 2018\r\nJ6 2018\r\nJ4 2018\r\nJ7 PRO\r\nJ5 PRO\r\nJ3 PRO\r\nJ2 PRO 2018\r\nJ7 CORE\r\n\r\nXIAOMI :\r\nREDMI 7 (Hot)\r\nREDMI NOTE 7 (Hot)\r\nREDMI GO (Hot)\r\nREDMI NOTE 6 PRO (Hot)\r\nPOCOPHONE F1\r\nMiA2 - REDMI 6X\r\nREDMI 6 PRO\r\nREDMI 6\r\nREDMI 6A\r\nREDMI NOTE 5A PRIME\r\nREDMI 5A\r\nREDMI S2\r\n\r\nVIVO :\r\nVIVO V15 PRO (Hot)\r\nVIVO V15 (Hot)\r\nVIVO V11 PRO\r\nVIVO V11\r\nVIVO Y95\r\nVIVO Y93\r\nVIVO Y91\r\nVIVO Y83\r\nVIVO Y81\r\nVIVO Y71 (Hot)\r\nVIVO V9\r\n\r\nOPPO :\r\nOPPO REAL ME C2 (Hot)\r\nOPPO REAL ME 2 PRO\r\nOPPO REAL ME 2\r\nOPPO F11 PRO (Hot)\r\nOPPO F11 (Hot)\r\nOPPO F9 (Hot)\r\nOPPO F7 YOUTH\r\nOPPO F7\r\nOPPO F5\r\nOPPO A83\r\nOPPO A71\r\n\r\nHUAWEI :\r\nHUAWEI P20 LITE\r\nHUAWEI P20 PRO\r\nHUAWEI NOVA 3i', 'Baru', 'https://www.tokopedia.com/flecoacc/soft-case-auto-fokus-motif-kulit', '', '', '2250788_f2fb45b7-a142-407d-be2e-8ca78905917f_700_700.jpg', 54695, 'jpg'),
(75, 'case anti crack redmi 7A', 'Accesoris Handphone', '-', '-', '20000', 'case utk hp xiaomi redmi 7A', 'Baru', 'https://www.tokopedia.com/flecoacc/case-amti-crack-redmi-7a', '', '', '2250788_de86b76e-07e5-485f-b8cd-d1b69de89a44_1728_1728.jpg', 41213, 'jpg'),
(76, 'senter tongkat lampu parkir / tongkat lalu lintas', 'Accesoris Handphone', '-', '-', '40000', 'Ref Baton Besar / Stik Parkir Polisi Lalu Lintas / Senter Tongkat\r\n\r\nWarna Orange Menyala\r\nPegangan Kuat\r\nTerdapat Tali di Ujung Pegangan\r\nbiasa untuk pengatur lalulintas\r\ntidak mudah rusak\r\ndapat menyala sangat terang berwarna orange\r\nTop Quality\r\nbest seller', 'Baru', 'https://www.tokopedia.com/flecoacc/senter-tongkat-lampu-parkir-tongkat-lalu-lintas', '', '', '2250788_d2110909-4f47-494d-ab80-9ff071a60fec_678_678.jpg', 13785, 'jpg'),
(77, 'kipas angin karakter votre sf-06', 'Accesoris Handphone', '-', '-', '40000', 'Kini Hadir Kipas model karakter lucu dari votre dengan type SF-06. Kipas ini dibuat model duduk yang bisa kita letakkan diatas meja. Dilengkapi dengan battery internal yang bisa dicharge memudahkan kita dalam pemakaian. Kipas ini juga dilengkapi tombol on/off dan 2 speed pengaturan kecepatan kipas.\r\n\r\nkecepatan : 2 jenis kecepatan untuk disetel\r\nbahan : ABS / resin PP\r\nwaktu kerja : 3-5 jam\r\ntegangan input : dc5v - 1000mA\r\ntegangan output : dc5v - 1000mA\r\ntegangan baterai : 3.7v\r\njenis baterai : li-ion 18650 (bisa lepas - pasang)\r\ndimensi : 140*120*65 mm', 'Baru', 'https://www.tokopedia.com/flecoacc/kipas-angin-karakter-votre-sf-06', '', '', '2250788_8e5920ed-b6f8-416f-aca9-b7db077815cb_1728_1728.jpg', 44969, 'jpg'),
(78, 'TONGSIS YUNTENG BLUETOTH YT-1288', 'Accesoris Handphone', 'YUNTENG ', '', '55000', 'Tongsis Premium Yunteng YT-1188 ORIGINAL PRODUCT & HIGH QUALITY\r\n\r\nDesign yang praktis untuk memperpanjang / memperpendek tongsis. Ekstra kokoh bahkan untuk menahan kamera DSLR Entry Level\r\nDilengkapi dengan Cable AUX Shutter compatible untuk iOS dan Android 4.3. Anti Karat, Grip dari Karet berkualitas dan nyaman di pegang.\r\n\r\nKELEBIHAN Tongsis Yunteng Cable YT-1188:\r\n1. Tongsis dilengkapi dengan Cable AUX Shutter untuk mempermudah saat mengambil foto / Selfie.\r\n2. Lebih panjang dari tongsis lainnya, panjangnya 125CM\r\n3. Kualitas jauh lebih bagus daripada monopod biasa.\r\n4. Dijamin tidak melintir. anti selip anti muter-muter.\r\n5. Tongkat ada penguncinya / bisa dilock\r\n6. Tongkat lebih kokoh dan kuat.\r\n7. Bahan berkualitas.\r\n8. Terdapat Cermin untuk selfie.\r\n9. Sudah termasuk holder U untuk HP\r\n10. Pegangan ada grip sesuai kontur jari.\r\n11. Sangat cocok untuk semua perangkat HP tablet. kamera saku. DSLR. Camera action sejenis Go Pro, Xiaomi Yi,Kogan dll\r\n\r\nSudah termasuk Holder U untuk semua Gadget / Perangkat Portable lain nya dengan Maksimal ukuran 5,8\"', 'Baru', 'https://www.tokopedia.com/flecoacc/tongsis-yunteng-bluetoth-yt-1288', '', '', '2250788_fb2bb9fe-0c0d-4c6d-8175-b3c1ceeb6f88_700_700.jpg', 47023, 'jpg'),
(80, 'RAKIPANDA BATRAI liquid Z250 / A12 4800mah', 'Accesoris Handphone', 'RAKIPANDA ', '', '80000', 'Baterai Evercoss A12 Double IC Protection\r\nSafety & High Quality\r\nControl 2IC | Switches | Temperature Fuse\r\n\r\nSpecification:\r\n- Battery Code: A12 ( Perhatikan Kode Yg tertulis di baterai anda).\r\n- Voltage Ranges: 3.7-3.8V / LCV 4.2V.\r\n- Capacity Label: 3000mAh.\r\n- Merk: Rakkipanda.\r\n- Warranty: 12 Months.\r\n- Compatible: Evercoss A12,..Others.\r\n\r\nBattery Status:\r\n- Bisa Langsung Charger di HP ( Tidak perlu pakai Desktop ).\r\n- No Pairing ( Langsung pakai ).\r\n- No Back Door Cover ( Tidak perlu ganti casing belakang ).\r\n- Ukuran, Ketebalan & Capacity (+-)= Battery Original ( Bundling HP).', 'Baru', 'https://www.tokopedia.com/flecoacc/rakipanda-batrai-liquid-z250-a12-4800mah', '', '', '2250788_ce4350cb-48da-486d-8a13-45e4103ef28a_1728_1728.jpg', 71375, 'jpg'),
(81, 'RAKIPANDA batrai Evercross S45 3500mah', 'Accesoris Handphone', 'RAKIPANDA ', '', '80000', 'Ready stok slihakan diorder\r\nSpesifikasi : Untuk EVERCROSS A25\r\n\r\nHarga Akan Kami Prioritaskan Untuk Anda..\r\n*Khusus Grosir Silahkan Ajukan Harga yang tidak masuk..khusus pengambilan qty..silahkan kirim pesan ke kami dengan format', 'Baru', 'https://www.tokopedia.com/flecoacc/rakipanda-batrai-evercross-s45-3500mah', '', '', '2250788_4c5d15de-eb11.jpg', 62832, 'jpg'),
(82, 'battery batrai xiaomi redmi note 2 / BM45', 'Accesoris Handphone', '', '', '90000', 'Kualitas Terjamin\r\nPengiriman Cepat\r\nKapasitas 3020mAh\r\nBattery Type : Lithium Polymer\r\n\r\nDetail produk dari Xiaomi Redmi Note 2 Baterai BM45 Untuk Redmi Note 2 - Original\r\n\r\nBaterai untuk Xiaomi Note 2 dengan kapasitas 3020mAh. Anda dapat menggunakan baterai ini sebagai baterai cadangan sehingga tidak perlu cemas Xiaomi Anda kehabisan tenaga.\r\nFeatures\r\n\r\nVoltage : 3.8V\r\nBattery Capacity : 3020mAh\r\nCharging Limited Voltage : 4.4V\r\nCompatible Brand : Xiaomi Note 2\r\nBattery Type : Lithium polymer\r\n\r\nImage result for desktop xiaomi bm45\r\n\r\nSpesifikasi Xiaomi Redmi Note 2 Baterai BM45 Untuk Redmi Note 2 - Original', 'Belum Dipilih', 'https://www.tokopedia.com/flecoacc/battery-batrai-xiaomi-redmi-note-2-bm45', '', '', '2250788_5e1ad3b2-5036-4d4f-9e4d-43d844b96a1f_1728_1728.jpg', 45994, 'jpg'),
(83, 'battery batrai xiaomi note 3 / BM46 ORI', 'Accesoris Handphone', '', '', '90000', '', 'Baru', 'https://www.tokopedia.com/flecoacc/battery-batrai-xiaomi-note-3-bm46-ori', '', '', '2250788_dca28c09-fc54-4723-b949-34c040a433d9_1728_1728.jpg', 40481, 'jpg'),
(84, 'battery batrai xiaomi Mi5s / BM37 ORI', 'Accesoris Handphone', '', '', '90000', 'READY STOCK \r\nbaterai xiaomi Mi5s plus / BM37\r\naman dan berkualitas\r\n\r\nSpecification:\r\n\r\n- tipe baterai: standar original\r\n- bahan: Li-polymer baterai cell dengan battery label\r\n- kualitas cell: original\r\n- Kode Baterai: BM37\r\n- Voltage: 3.7\r\n- kapasitas: 3700/3800mAh.\r\n- Merek: xiaomi\r\n- Limited Charge Voltage : 4.2 V\r\n- bekerja dalam suhu (-10~50)Degrees Celsius\r\n- Compatible: xiaomi Mi5s plus', 'Baru', 'https://www.tokopedia.com/flecoacc/battery-batrai-xiaomi-mi5s-bm37-ori', '', '', '2250788_dca28c09-fc54-4723-b949-34c040a433d9_1728_1728.jpg', 40481, 'jpg'),
(85, 'battery baterai xiaomi BM33 ORI', 'Accesoris Handphone', '', '', '90000', '', 'Baru', 'https://www.tokopedia.com/flecoacc/battery-baterai-xiaomi-bm33-ori', '', '', '2250788_a0d77332-222c-4e87-9e1b-08e06ffedf09_1728_1728.jpg', 34150, 'jpg'),
(86, 'battery baterai xiaomi BM 31 ORI', 'Belum Dipilih', '', '', '90000', 'FEATURES\r\n\r\nVoltage : 4.35V\r\n\r\nBattery Capacity : 3050mAh\r\n\r\nCharging Limited Voltage : 4.35V\r\n\r\nBattery Type : Lithium polymer\r\n\r\nCOMPATIBLE SMARTPHONE\r\n\r\nXiaomi Mi3\r\n\r\nCOMPATIBLE PART NUMBER\r\n\r\nBM31\r\n\r\nProduk lainn', 'Belum Dipilih', 'https://www.tokopedia.com/flecoacc/battery-baterai-xiaomi-bm-31-ori', '', '', '2250788_8fcca63c-82ca-45b2-8265-f6bf5081ec06_1728_1728.jpg', 37659, 'jpg'),
(87, 'case auto fokus redmi note 7', 'Accesoris Handphone', '', '', '15000', 'ï¿½ case auto fokus carbon redmi note 7\r\nï¿½ Harga Rp 15.000\r\nï¿½ Inbox atau WA : 085236668889\r\n\r\nputat jaya c barat gg x no 33', 'Baru', 'https://www.tokopedia.com/flecoacc/case-auto-fokus-redmi-note-7', '', '', '2250788_ffce8f3d-946f-477e-ba76-6a37f751d66d_1728_1728.jpg', 47211, 'jpg'),
(88, 'handfree earphone stereo fleco FL17', 'Handsfree', '', '', '28000', 'Handfree fleco FL17 suara bass super stereo jamin mantap bosku', 'Baru', 'https://www.tokopedia.com/flecoacc/handfree-earphone-stereo-fleco-fl17', '', '', '19096250_ab46d784-8bc6-4c57-83d9-510f7f620a6f_700_700.png', 275709, 'png'),
(89, 'car charger Hippo Lance fast charging 3.0 2slot usb', 'Accesoris Handphone', 'Hippo', '', '95000', 'Hippo Lance\r\nCar Charger Fast Charging 3.0\r\n\r\nMenjawab kebutuhan charger masa kini , terutama bagi anda yang mobilitas sangat tinggi , support fast charging 3.0 , Hippo Kini menghadirkan car charger 2 output dimana salah satu portnya support Quick Charge 3.0 , cocok untuk smartphone anda yang sudah support fast charging / Quick Charging\r\n\r\nTahu HP kita support fast charging dari mana sih gan ?\r\nLihat adaptor charger anda , bagian tulisan output , apakah tertera 9V / 12V , jika sudah ada berarti sudah support\r\n\r\nGan , kalau HP saya belum support 9V/12V apakah bisa dipakai ?\r\nBisa gan, tapi untuk fitur Quick Chargingnya tidak berfungsi aja.\r\n\r\nUntuk paket pembelian Simple Pack :\r\n* 1 Car Charger Lance\r\n\r\nSpesification :\r\nInput : DC 12-24V\r\nOutput Fast Charging : DC 3.6-6.5V~3A , 6.5-9V~2A , 9V-12V~1.5A\r\nOutput USB biasa : DC 5V~2.4A (Max)\r\nSize : 62*28*26.5mm\r\nLED INDICATOR', 'Baru', 'https://www.tokopedia.com/flecoacc/car-charger-hippo-lance-fast-charging-3-0-2slot-usb', '', '', '19096250_9ce6f1be-03db-433f-a89e-c168e67ba833_540_1110.png', 202947, 'png'),
(90, 'Car Holder Fleco Mobile Phone Mobil Silicone Sucker', 'Accesoris Handphone', 'Fleco', '', '35000', 'Sebelum Order, Mohon untuk membaca dulu ya, karena kami tidak ingin mengecewakan costumer kami. Selama barang masih terpajang berarti stock barang tersebut ready, jadi dapat di order lansung. Untuk pemesanan jika ada pilihan warna dimohon untuk menuliskan keterangan warna dan opsi jika warna kosong atau (Hubungi CS). Terima Kasih\r\n\r\n\r\n------------------------------------------------------------------------------------------------------------------------------------------------------------\r\nTentang Produk:\r\n\r\nCar Holder Fleco Mobile Phone Mobil Silicone Sucker\r\n\r\nHolder Mobil yg ini bisa di pasang di Kaca Mobil maupun di Dashboard mobil\r\nBagian penahan atau penjepit hp bisa di lebar sempitkan untk menyesuaikan posisi hp agar bisa terlihat jelas.\r\nBisa di kunci di bagian leher sehingga tidak mudah goyang..\r\n\r\nWarna: Hitamâ€¢abu2â€¢hijauâ€¢biruâ€¢merahâ€¢orange..Stock trbatas..sediakan min 5 warna cadangan sprti dipromo atau dikirim sesuai stock yg ada..ORDER QTY WAJIB RANDOM.\r\n\r\nGOOD PRODUCT..GOOD QUALITY..100% Premium Quality FLECO\r\n\r\nNote: Sblm dikirim di cek OK.\r\nTidak terima komplain brg rusak/pecah belah dll..sebaik ny tambahkan PACKING EKSTRA AMAN dalam daftar belanja anda...dan asuransikan dlm pengiriman ny..harap dipahami.\r\n\r\nORDER = SETUJU\r\n\r\n\r\nNB : Mohon untuk konfirmasikan atau menambahkan ulasan jika barang sudah sampai ditangan pelanggan. Terima kasih!', 'Belum Dipilih', 'https://www.tokopedia.com/flecoacc/car-holder-fleco-mobile-phone-mobil-silicone-sucker', '', '', '19096250_c4e77dcc-6c65-48d7-b87a-3d87130cd31f_700_393.png', 283218, 'png'),
(91, 'baterai logon double power huawei Y3 ii', 'Accesoris Handphone', 'Logon', '', '80000', 'baterai logon double power huawei Y3 ii', 'Baru', 'https://www.tokopedia.com/flecoacc/baterai-logon-double-power-huawei-y3-ii', '', '', '19096250_7b93a7c4-74d4-4a3a-8ed2-ca88e63f63b8_700_700.jpg', 48765, 'jpg'),
(92, 'baterai double power logon brandcode B81', 'Accesoris Handphone', 'Logon', '', '95000', 'Baterai logon brndcode B81 12000mah', 'Baru', 'https://www.tokopedia.com/flecoacc/baterai-double-power-logon-brandcode-b81', '', '', '19096250_e8fdbca8-13bb-4e85-ae83-9f79027fec2a_700_700.jpg', 43478, 'jpg'),
(93, 'baterai logon double power lenovo A6000', 'Accesoris Handphone', '', '', '80000', 'baterai logon double power lenovo A6000', 'Baru', 'tokopedia.com/flecoacc/baterai-logon-double-power-lenovo-a6000', '', '', '19096250_84c37dc5-87e7-47c0-8e43-143ee03cdd8f_700_700.jpg', 57482, 'jpg'),
(94, 'baterai logon samsung note4 double power', 'Accesoris Handphone', '', '', '155000', 'baterai logon samsung note4 double power', 'Baru', 'https://www.tokopedia.com/flecoacc/baterai-logon-samsung-note4-double-power', '', '', '19096250_56e4d358-1471-4c48-96cb-ce1055b7b8b9_700_700.jpg', 51144, 'jpg');
INSERT INTO `acc_hp` (`id`, `name`, `kategori`, `merek`, `warna`, `harga`, `deskripsi`, `label`, `link_tokped`, `link_shopee`, `link_lazada`, `file_name`, `file_size`, `file_type`) VALUES
(95, 'kabel toples fleco 1meter bulat warna tipe c isi 40bj', 'Kabel Data', 'Fleco', '', '310000', 'Kabel data usb fleco bulat warna panjang 1meter support 3.1a fast charging 1toples isi 40pcs', 'Baru', 'https://www.tokopedia.com/flecoacc/kabel-toples-fleco-1meter-bulat-warna-tipe-c-isi-40bj', '', '', '19096250_671e4ddc-f31d-4223-8d92-121a15ce3bbd_700_700.jpg', 37127, 'jpg'),
(96, 'kabel data usb merk brann tipe C support 3.1a fast charging', 'Kabel Data', 'Brann', '', '25000', 'kabel data usb merk brann tipe C support 3.1a fast charging', 'Belum Dipilih', 'https://www.tokopedia.com/flecoacc/kabel-data-usb-merk-brann-tipe-c-support-3-1a-fast-charging', '', '', '19096250_8a33b858-5a6c-4dee-8f89-e359ca3102a4_700_700.jpg', 50764, 'jpg'),
(97, 'car holder paket fleco FL18 bonus plugin dan kabel data usb', 'Belum Dipilih', 'Fleco', '', '60000', 'Car holder paketan dari fleco kode FL18 bonus plugin mobil 2usb dan kabel data usb', 'Baru', 'https://www.tokopedia.com/flecoacc/car-holder-paket-fleco-fl18-bonus-plugin-dan-kabel-data-usb', '', '', '19096250_170c291a-a24a-4d70-957e-b6131edd1936_700_700.jpg', 37923, 'jpg'),
(98, 'card reader mini fleco metal micro', 'Accesoris Handphone', 'Fleco', '', '15000', 'Card reader fleco metal mini micro plus gantungan faster data', 'Baru', 'https://www.tokopedia.com/flecoacc/card-reader-mini-fleco-metal-micro', '', '', '19096250_9f3d8d22-f616-4c19-ac4d-11a084bafcbe_700_700.jpg', 72829, 'jpg'),
(99, 'Syma X8PRO GPS Dengan 720P WIFI FPV Camera Altitude Tahan RC Drone', 'RC Drone', 'Syma ', '', '1400000', 'NOTE : datang langsung beli ke toko, harga lebih mahal\r\n\r\nnama produk : rc drone\r\nbrand : SYMA model no : SYMA X8 PRO GPS\r\nbrushed motor\r\nfrekuensi 2.4ghz 4 channel\r\nbaterai lipo : 2S (2 cell) 7.4V 2000mAH, waktu terbang sekitar 10 menit, wakt charger 150 menit\r\nradius terbang 200 meter\r\ndimensi produk : 50 * 50 * 19cm (setelah di pasang propeller + propeller guard + landing skid)\r\nkamera wifi (bisa saksikan video live dari HP smartphone) , kualitas video 720P HD, resolusi kamera 0.3 dari HP, resolusi kamera dari memory card 1MP.\r\n\r\nfitur2 : GPS fixed point, headless mode, 360 derajat rolling, one key return, altitude hold (terbang diam di udara), kamera bisa digerakkan 90 derajat dari remote, one key take-off, one key landing.\r\n\r\nkelengkapan : 1x unit drone, 1x baterai, 1x remote, 2 set propeller (total 8pcs), 1 set propeller guard, 1x landing skid, card reader, charger, 1 obeng, 1x holder smartphone, 1x buku manual bahasa inggris,', 'Baru', 'https://www.tokopedia.com/flecoacc/syma-x8pro-gps-dengan-720p-wifi-fpv-camera-altitude-tahan-rc-drone', '', '', '19096250_f0ed6745-4615-4bcf-aa98-ab852dcb5520_361_361.jpg', 16366, 'jpg'),
(100, 'powerbank hippo smore 24000mah 2usb real capacity original', 'Powerbank', 'Hippo', '', '310000', 'Powerbank hippo smore 24000mah real capacity original produk hippo 2usb indikator led', 'Baru', 'https://www.tokopedia.com/flecoacc/powerbank-hippo-smore-24000mah-2usb-real-capacity-original', '', '', '19096250_9183638c-b6f6-4031-beee-4cb982a3967b_700_700.jpg', 23288, 'jpg'),
(101, 'mcdodo powerbank wireless 8000mah', 'Belum Dipilih', 'Mcdodo', '', '275000', 'Mcdodo powerbank 8000mah\r\nWith wireless charging\r\nWarna sisa white only', 'Baru', 'https://www.tokopedia.com/flecoacc/mcdodo-powerbank-wireless-8000mah', '', '', '2250788_89d085db-3b6d-49b6-8dd2-0f1914943114_1536_1536.jpg', 34809, 'jpg'),
(102, 'Mcdodo powerbank wireless 10.000mah', 'Powerbank', 'Mcdodo', '', '295000', 'PB2 Wireless Powerbank 10000mAh\"\r\n\r\n*Capacity: 10000mAh\r\n*Input: Micro DC5V-2A\r\n*Input: Type-C DC5V-2A\r\n*USB output: 5V-2A\r\n*Wireless output: 5V-1A\r\n*Dual USB Output 2A\r\n*LED indicator light to show the remaining power\r\n*Arc edge, smooth and safe to use', 'Baru', 'https://www.tokopedia.com/flecoacc/mcdodo-powerbank-wireless-10-000mah', '', '', '2250788_3a65a1d9-bc13-43bb-a7ba-e3633adb2b70_700_700.jpg', 21331, 'jpg'),
(103, 'powerbank hippo titan 6000mah', 'Powerbank', 'Hippo', '', '155000', 'powerbank hippo titan 6000mah metal real capacity garansi resmi hippo', 'Baru', 'https://www.tokopedia.com/flecoacc/powerbank-hippo-titan-6000mah', '', '', '19096250_acb7a70c-0aed-4339-a2d8-8d7f9355719a_540_1110.png', 168038, 'png'),
(104, 'powerbank hippo titan 12000mah metal', 'Powerbank', 'Hippo', '', '230000', 'powerbank hippo titan 12000mah metal', 'Baru', 'https://www.tokopedia.com/flecoacc/powerbank-hippo-titan-12000mah-metal', '', '', '19096250_9b5ec0cb-724f-4b56-ab68-6ec6fd9e7e32_540_1110.png', 29075, 'png'),
(105, 'Powerbank vivan vpb-m20 20400mah quick charge 3.0 qualcom', 'Powerbank', 'Vivan', '', '535000', '', 'Baru', 'https://www.tokopedia.com/flecoacc/powerbank-vivan-vpb-m20-20400mah-quick-charge-3-0-qualcom', '', '', '19096250_36c1af48-fc1d-4ca2-a66f-74f0db02c925_540_1110.png', 90192, 'png'),
(106, 'Powerbank Hippo Viure 20000mah 2usb', 'Powerbank', 'Hippo', '', '285000', 'Garansi 1 tahun RESMI HIPPO (Unit only)\r\n\r\nKelengkapan produk :\r\n* 1 Unit Power Bank Viure 20rb\r\n* 1 Kabel Caby Micro 50cm\r\n* 1 warranty card , 1 Manual Card\r\n\r\nReady Warna :\r\nKasih keterangan warna dan opsinya ya gan (kalau tidak ada keterangan kami kirim random)\r\n* Black List Gold\r\n* Dark Blue List Gold\r\n\r\nPowerbank Viure 20000 mAh dengan kapasitas 20000 mAh yang dapat diandalkan dan berkualitas untuk membantu mengisi daya baterai smartphone Anda. Tak perlu khawatir lagi kehabisan baterai. Powerbank Viure hadir dengan fitur yang menawan dan dengan bentuk minimalis dan elegan.\r\n\r\nDual Output 2.4A\r\nHadir dengan dual output sebesar DC 5V/2.4A, cukup untuk konsumsi tablet PC seperti iPad, serta smartphone, perangkat GPS, konsol game portabel, perangkat Bluetooth, dan banyak lagi.\r\n\r\nCompact And Stylish Design\r\nPower bank ini memiliki bentuk yang ringkas, sehingga sangat memudahkan Anda untuk membawanya kemana saja tanpa harus mengkhawatirkan berat dan juga ukuran. Power Bank ini akan sangat berguna bagi Anda yang mempunyai kesibukan padat', 'Baru', 'https://www.tokopedia.com/flecoacc/powerbank-hippo-viure-20000mah-2usb', '', '', '19096250_c71d0987-8d71-4756-a7a8-57248d92e51f_700_700.png', 363375, 'png'),
(107, 'powerbank Hippo eve plus SE 11000mah new', 'Belum Dipilih', '', '', '160000', 'Eve Plus SE 11000 mAh\r\nColor : Black , Blue ,Green\r\n( Sertakan keterangan warna pilihan dan cadangan , tidak ada keterangan kami kirim random )\r\nGaransi 1 tahun (RESMI HIPPO)\r\n\r\nPaket Simple Pack\r\n* 1 Unit Hippo Powerbank Eve 11000 mAh.\r\n* 1pc Caby Micro\r\n* Warranty Card + Manual.\r\n\r\nSpecifications\r\nCapacity 11000 mAh\r\nBaterai Lithium Cell 18650\r\nDimension (mm) : 148 x 64 x 21\r\nWeight : 238g\r\nInput : DC5V / 1.5A\r\nOutput : DC5V / 2.1A (Dual Output, Shared)\r\n\r\nHippo Powerbank Eve Plus SE 11000 mAh dengan kapasitas 11000 mAh yang dapat diandalkan dan berkualitas untuk membantu mengisi daya baterai smartphone Anda. Tak perlu khawatir lagi kehabisan baterai. Hippo Powerbank Marse hadir dalam balutan body yang terbuat dari ABS membuatnya tampil dengan bentuk elegan.', 'Belum Dipilih', 'https://www.tokopedia.com/flecoacc/powerbank-hippo-eve-plus-se-11000mah-new', '', '', '19096250_14314989-afcc-4f6b-86e7-1011c8a4f47d_540_1110.png', 262023, 'png'),
(108, 'Powerbank Hippo Fury 6600mah 2slot usb', 'Powerbank', 'Hippo', '', '110000', 'Hippo Powerbank Fury 6600 mAh\r\n\r\nSpesifikasi\r\nKapasitas 6600 mAh\r\nBattery Cell\r\nDimensi (mm) 95 x 65 x 22 mm\r\nBerat 180 g\r\nInput DC5V / 2A\r\nOutput DC5V / 2.1A (Max)\r\nGaransi 1 Tahun\r\n\r\nPaket Pembelian\r\nSimple Pack\r\n- 1 Unit Hippo Powerbank Fury 6600 mAh\r\n- 1pc Caby Micro\r\n- Kartu Garansi + Manual', 'Baru', 'https://www.tokopedia.com/flecoacc/powerbank-hippo-fury-6600mah-2slot-usb', '', '', '19096250_0cb25bad-d719-42b0-a922-43779cec3b6f_700_596.png', 187922, 'png'),
(109, 'Powerbank Hippo kei 10000mah dual output slim', 'Powerbank', 'Hippo', '', '175000', 'Dual Port USB Output\r\nDapat mengecas dua gadget sekaligus dengan output maksimum 5V/2.4A, cukup untuk konsumsi tablet PC seperti iPad, serta smartphone, perangkat GPS, konsol game portabel, perangkat Bluetooth, dan banyak lagi.\r\n\r\nPowerbank ini juga dapat digunakan untuk mengisi daya 2 handphone sekaligus, dan outputnya akan sharing daya secara otomatis.\r\n\r\nKompatibel untuk bermacam gadget\r\nHippo Power Bank mengatur output daya secara otomatis ketika gadget atau smartphone tersambung. Mengecas smartphone dan tablet seperti Apple, Samsung, HTC, Google Blackberry dan lain-lain, juga bermacam kamera digital dan gadget game portable dengan mudah\r\n\r\nStylish dan Elegan\r\nPower bank ini memiliki bentuk yang ringkas, sehingga sangat memudahkan Anda untuk membawanya kemana saja. Power Bank ini akan sangat berguna bagi Anda yang mempunyai kesibukan padat dan juga memiliki intensitas cukup sering memainkan perangkat mobile.\r\n\r\nSPESIFIKASI\r\nPAKET PEMBELIAN\r\nKapasitas 10000 mAh\r\nBattery Li-Polymer\r\n\r\nWarna Hitam & Navy Blue\r\n( mohon cantumkan warna yang di order atau di krim randaom )\r\n\r\nDimensi (mm) 155.6 x 71.7 x 16.45 mm\r\nBerat 197 g\r\nInput DC5V / 2.1A\r\nOutput DC5V / 2.4A (Max)\r\nGaransi 1 Tahun\r\n\r\nPAKET PEMBELIAN\r\nSimple Pack\r\n1 Unit Hippo Powerbank Kei 10000 mAh\r\n1pc Caby Micro\r\nKartu Garansi + Manual\r\nDiskusi Terbaru', 'Baru', 'https://www.tokopedia.com/flecoacc/powerbank-hippo-kei-10000mah-dual-output-slim', '', '', '19096250_b6688274-2804-4370-9394-02c5650e7cca_700_700.png', 286545, 'png'),
(110, 'Power Bank Hippo Hiro 6000 MAH Garansi Resmi Hippo 1 Tahun Perak', 'Powerbank', 'Hippo', '', '165000', 'Info Penting : kami adalah official partner HIPPO , Terdaftar di Wesite resmi HIPPO Bagian menu Where to buy\r\n\r\nHippo Power Bank 6000 MAH Hiro Simple Pack\r\nGaransi Resmi Hippo 1 Tahun ( untuk UNIT POWER BANK )\r\nBerlaku di HIPPO Care seluruh Indonesia\r\n\r\nApa itu Simple pack ? Pack dengan aksesoris lebih minim (ekonomis)\r\n\r\nKelengkapan Paket (Apa saja yang di dapat) :\r\n* 1 Unit Hippo Power Bank 6000 MAH Hiro\r\n* 1 Unit Kabel Micro 50cm\r\n* Manual &amp;amp; Kartu Garansi\r\n\r\nSpecifications\r\nCapacity 12000 mAh\r\nBattery Cell Li-Polymer\r\nDigital Led Indicator\r\nInput DC5V / 2A\r\nOutput DC5V / 2.1A (Max)\r\n\r\nKenapa berbelanja di sini gan ?\r\n* Kami adalah distributor RESMI HIPPO untuk area Bekasi\r\n* Kami terdaftar RESMI di HIPPO , sehingga untuk klaim garansi / after sales lebih aman\r\n* Kami memiliki alamat jelas (toko offline) , dimana bisa di lakukan transaksi secara langsung di toko\r\n\r\nWhy Hippo ?\r\n* HIPPO Brand Ternama bertahun-tahun di percaya untuk Produk-Produk unggulan seperti Baterai , Power Bank , Charger-Charger (Travel Charger , Car Charger)\r\n* HIPPO memiliki HIPPO CARE ( Layanan Purna Jual / AFTER SALES ) yang jelas dan tersebar di Banyak kota-kota besar di SELURUH INDONESIA\r\n* HIPPO memiliki OWNER yang Jelas , Berkewarganegaraa', 'Baru', 'https://www.tokopedia.com/flecoacc/power-bank-hippo-hiro-6000-mah-garansi-resmi-hippo-1-tahun-perak', '', '', '19096250_67f8abc0-ae9e-48d3-bf7f-09a3605cb67d_700_700.png', 246303, 'png'),
(111, 'Powerbank Vivan BB64 62400mah real capacity garansi vivan 1tahun', 'Powerbank', 'Vivan', '', '1600000', 'Model BB64\r\nBattery Type Lithium-ion\r\nBattery Capacity 230Wh/ 62400mAh\r\nInput 12~20V 42W\r\nOutput DC Car Port: 13.3V 33W\r\nDC Port: 12V 3A\r\nType-C Port: 5V 3A\r\nUSB Port: (4x)5V 2.4A(4.8A Max)\r\nWeight 1.88Kg\r\nSize 210x161x48.5mm\r\nPengenalan Produk\r\nFeature\r\n1. 60400 mAh large capacity, can charge many devices\r\n2. Can charge DJI battery, car fridge, computer, tablet, samrtphone and other electric devices\r\n3. Multi-fuctional port, support smartphone and tablet charging at the same time\r\n4. Intelligent eight protection functions: overcharge, over discharge, overvoltage, overcurrent, over power, temperature, short circuit and recovery protection\r\n\r\nPackage included:\r\n1 x Vivan BB64 60400mAh Power Bank\r\nAftersales\r\n1. Garansi 1 tahun\r\n2. Garansi tidak berlaku jika :\r\n- Tidak ditemukan adanya kerusakan\r\n- Kerusakan disebabkan oleh faktor luar / diluar kuasa\r\n- Kerusakan akibat dari kesalahan pemakaian (terjatuh, tergores, ternoda, pecah, terkena air dan lain lain)', 'Baru', 'https://www.tokopedia.com/flecoacc/powerbank-vivan-bb64-62400mah-real-capacity-garansi-vivan-1tahun', '', '', 'download (5).jpg', 3308, 'jpg'),
(112, 'powerbank hippo smore 24000mah 2usb real capacity original', 'Powerbank', 'Hippo', '', '310000', 'Powerbank hippo smore 24000mah real capacity original produk hippo 2usb indikator led', 'Belum Dipilih', 'https://www.tokopedia.com/flecoacc/powerbank-hippo-smore-24000mah-2usb-real-capacity-original', '', '', '19096250_9183638c-b6f6-4031-beee-4cb982a3967b_700_700 (1).jpg', 23288, 'jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `uname` varchar(1000) NOT NULL,
  `pass` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pass`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'dila', '35862fcf105f1aaa0b4f29ca71b96236'),
(3, 'rian', 'cb2b28afc2cc836b33eb7ed86f99e65a'),
(4, 'Roberto', '315eb115d98fcbad39ffc5edebd669c9'),
(5, '', 'd41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Struktur dari tabel `info_toko`
--

CREATE TABLE `info_toko` (
  `id` int(2) NOT NULL,
  `nama_toko` varchar(500) NOT NULL,
  `desk_toko` varchar(500) NOT NULL,
  `alamat_toko` varchar(500) NOT NULL,
  `no_telp` varchar(500) NOT NULL,
  `no_wa` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `link_tokopedia` varchar(500) NOT NULL,
  `link_shopee` varchar(500) NOT NULL,
  `link_lazada` varchar(500) NOT NULL,
  `link_ig` varchar(500) NOT NULL,
  `link_facebook` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `info_toko`
--

INSERT INTO `info_toko` (`id`, `nama_toko`, `desk_toko`, `alamat_toko`, `no_telp`, `no_wa`, `email`, `link_tokopedia`, `link_shopee`, `link_lazada`, `link_ig`, `link_facebook`) VALUES
(1, 'WK ACCESSORIS', 'Toko Elektronik', 'Jl. Putat Jaya C Bar. Gg. X No.2, RT.004/RW.13, Putat Jaya, Kec. Sawahan, Surabaya, Jawa Timur 60255  ', '085236668889 / 087817667788', '087817667788', 'wkaccessoris@gmail.com', 'https://www.tokopedia.com/flecoacc', 'https://shopee.co.id/shop/176207286/', 'https://www.lazada.co.id/shop/wk-accessoris/', 'https://www.instagram.com/wk.acc/', 'https://www.facebook.com/wira.raja.758');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(100) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Accesoris Handphone'),
(2, 'RC Drone'),
(3, 'Kabel Data'),
(4, 'Charger'),
(5, 'Powerbank'),
(6, 'Temperglass'),
(7, 'Adapter'),
(8, 'Saver'),
(9, 'Handsfree'),
(10, 'Kabel'),
(11, 'Audio');

-- --------------------------------------------------------

--
-- Struktur dari tabel `label`
--

CREATE TABLE `label` (
  `id_label` varchar(300) NOT NULL,
  `nama_label` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `label`
--

INSERT INTO `label` (`id_label`, `nama_label`) VALUES
('LBL001', 'Baru'),
('LBL002', 'Bekas'),
('LBL003', 'Preorder'),
('LBL004', 'Terbatas'),
('LBL005', 'Habis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `merek`
--

CREATE TABLE `merek` (
  `id_merek` int(100) NOT NULL,
  `nama_merek` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `merek`
--

INSERT INTO `merek` (`id_merek`, `nama_merek`) VALUES
(1, 'Samsung'),
(2, 'Xiaomi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `promo`
--

CREATE TABLE `promo` (
  `id_promo` varchar(300) NOT NULL,
  `judul_promo` varchar(1000) NOT NULL,
  `keterangan` varchar(5000) NOT NULL,
  `berlaku_mulai` date NOT NULL,
  `sampai_dengan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `promo`
--

INSERT INTO `promo` (`id_promo`, `judul_promo`, `keterangan`, `berlaku_mulai`, `sampai_dengan`) VALUES
('PRM001', 'Charger Samsung S8/S8+ kabel data mikro', 'dfdfdfdfdfdf', '2019-09-07', '2019-09-09'),
('PRM002', 'charger cage qualcom 3.0A', 'lklklll', '2019-09-05', '2019-09-16'),
('PRM003', 'BUY 1 GET 2', 'Dapatkan 1 buah headset JBL dengan cara membeli 1 Headseat JBL Tipe apapun hehehehe', '2019-09-15', '2019-10-07'),
('PRM004', 'DISKON 50% UNTUK SPEAKER BLUETOOTH', 'AKSKKKKSKSKSKSKDJSKDJSKD', '2019-09-19', '2019-10-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `smartphone`
--

CREATE TABLE `smartphone` (
  `id` int(255) NOT NULL,
  `merk` varchar(255) DEFAULT NULL,
  `brand` varchar(1000) NOT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `spek` text,
  `link` varchar(1000) NOT NULL,
  `ram` varchar(1000) NOT NULL,
  `internal` varchar(1000) NOT NULL,
  `label` varchar(1000) NOT NULL,
  `gambar` text NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_size` int(20) NOT NULL,
  `file_type` varchar(10) NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `smartphone`
--

INSERT INTO `smartphone` (`id`, `merk`, `brand`, `harga`, `spek`, `link`, `ram`, `internal`, `label`, `gambar`, `file_name`, `file_size`, `file_type`, `tgl_upload`) VALUES
(13, 'Galaxy S10+', 'Samsung', '5900000', '', '', '4', '32', 'BARU', '', 'Realme_3.jpg', 36920, '', '2019-08-10'),
(14, 'J2 Prime', 'Samsung', '1200000', '-', '', '2', '16', 'BARU', '', 'Samsung_j2_prime.jpg', 7654, 'jpg', '2019-08-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_size` int(20) NOT NULL,
  `file_type` text NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `uploads`
--

INSERT INTO `uploads` (`id`, `file_name`, `file_size`, `file_type`, `tgl_upload`) VALUES
(0, '54167', 0, '2019-08-10', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `acc_hp`
--
ALTER TABLE `acc_hp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `info_toko`
--
ALTER TABLE `info_toko`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `label`
--
ALTER TABLE `label`
  ADD PRIMARY KEY (`id_label`);

--
-- Indeks untuk tabel `merek`
--
ALTER TABLE `merek`
  ADD PRIMARY KEY (`id_merek`);

--
-- Indeks untuk tabel `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id_promo`);

--
-- Indeks untuk tabel `smartphone`
--
ALTER TABLE `smartphone`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `acc_hp`
--
ALTER TABLE `acc_hp`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `merek`
--
ALTER TABLE `merek`
  MODIFY `id_merek` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `smartphone`
--
ALTER TABLE `smartphone`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
