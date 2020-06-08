-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jun 2020 pada 14.58
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corona_web_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_hospital`
--

CREATE TABLE `data_hospital` (
  `no` int(11) NOT NULL,
  `id_province` varchar(5) DEFAULT NULL,
  `id_hospital` varchar(5) NOT NULL,
  `hospital_name` varchar(255) DEFAULT NULL,
  `address_telp` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_hospital`
--

INSERT INTO `data_hospital` (`no`, `id_province`, `id_hospital`, `hospital_name`, `address_telp`) VALUES
(0, 'P-ACH', 'H-1', 'RSU Dr. Zainoel Abidin Banda Aceh', 'Jl. Teuku Moh. Daud Beureueh No.108, Banda Aceh. Telp: (0651) 34565, 22077, 28148'),
(0, 'P-RU', 'H-10', 'RSU Arifin Achmad', 'Jl. Diponegoro No.2, Pekanbaru. Telp: (0761) 21618'),
(0, 'P-NTB', 'H-100', 'RSUD Dr. R. Sudjono', 'Jl. Prof. M. Yamin SH No.55, Selong. Telp: (0376) 21118'),
(0, 'P-NTB', 'H-101', 'RSUD H. L. Manambai Abdul Kadir', 'Jl. Lintas Sumbawa-Bima Km 5, Seketeng, Kabupaten Sumbawa. Telp: (0371) 2628078'),
(0, 'P-NTT', 'H-102', 'RSUD Prof. dr. W. Z. Johannes', 'Jl. Dr. Moch. Hatta No.19, Kupang. Telp: (0380) 832892'),
(0, 'P-NTT', 'H-103', 'RSU dr. TC. Hillers Maumere', 'Jl. Wairklau, No. 1, Kota Baru, Alok Timur, Kabupaten Sikka. (0382) 21314'),
(0, 'P-NTT', 'H-104', 'RSUD Komodo Labuan Bajo', 'Jl. Trans Ruteng - Labuan Bajo, Desa Golo Bilas, Komodo'),
(0, 'P-KBR', 'H-105', 'RSUD dr. Soedarso Pontianak', 'Jl. Dr. Soedarso No.1, Pontianak. Telp: (0561) 737701'),
(0, 'P-KBR', 'H-106', 'RSUD dr. Abdul Azis Singkawang', 'Jl. Dr. Soetomo No.28, Singkawang. Telp: (0562) 631748'),
(0, 'P-KBR', 'H-107', 'RSUD Ade Mohamad Djoen Sintang', 'Jl. Pattimura No.1, Sintang. Telp: (0565) 22022'),
(0, 'P-KBR', 'H-108', 'RSUD dr. Agoesdjam Ketapang', 'Jl. DI Panjaitan No.51, Sampit, Kabupaten Ketapang. Telp: (0534) 3037239'),
(0, 'P-KTG', 'H-109', 'RSUD dr. Doris Sylvanus Palangkaraya', 'Jl. Tambun Bungai No.4, Palangka Raya. Telp: (0536) 3221717'),
(0, 'P-RU', 'H-11', 'RSUD Kota Dumai', 'Jl. Tanjung Jati No.4, Dumai. Telp: (0762) 38368, (0765) 440992'),
(0, 'P-KTG', 'H-110', 'RSUD dr. Murjani Sampit', 'Jl. H. Muhammad Arsyad No.65, Kotawaringin Timur. Telp: (0531) 21010'),
(0, 'P-KTG', 'H-111', 'RSUD Sultan Imanuddin Pangkalan Bun', 'Jl. Sutan Syahrir No.17, Kabupaten Kotawaringin Barat. Telp: (0532) 21404'),
(0, 'P-KSL', 'H-112', 'RSUD Ulin Banjarmasin', 'Jl. Ahmad Yani No.43, Banjarmasin. Telp: (0511) 3252229'),
(0, 'P-KSL', 'H-113', 'RSUD H. Boejasin Pelaihari', 'Jl. A. Syahrani, Pelaihari. Telp: (0512) 21082'),
(0, 'P-KTM', 'H-114', 'RSUD Abdul Wahab Sjahrani', 'Jl. Palang Merah No.1, Samarinda. Telp: (0541) 738118'),
(0, 'P-KTM', 'H-115', 'RSUD dr. Kanujoso Djatiwibowo', 'Jl. MT Haryono No.656, Balikpapan. Telp: (0542) 873901'),
(0, 'P-KTM', 'H-116', 'RSU Taman Husada Bontang', 'Jl. Letjen S. Parman No.1, Bontang. Telp: (0548) 22111'),
(0, 'P-KTM', 'H-117', 'RSUD Panglima Sebaya', 'Jl. Kusuma Bangsa Km.5, Paser. Telp: (0543) 21363'),
(0, 'P-KTM', 'H-118', 'RSUD Aji Muhammad Parikesit', 'Jl. Ratu Agung No.1, Tlk. Dalam, Kutai Kartanegara. Telp: (0541) 661015'),
(0, 'P-KUT', 'H-119', 'RSUD Kota Tarakan', 'Jl. Pulau Irian No.1, Kp. Satu Skip, Tarakan. Telp: (0551) 21166'),
(0, 'P-RU', 'H-12', 'RSUD Puri Husada Tembilahan', 'Jl. Veteran No.52, Hilir Tembilahan. Telp: (0768) 22118'),
(0, 'P-KUT', 'H-120', 'RSUD Tanjung Selor', 'Jl. Cendrawasih - Tanjung Selor. Telp: (0552)- 21292'),
(0, 'P-GTL', 'H-121', 'RSUD Prof. dr. H. Aloei Saboe', 'Jl. S. Batutihe No.7, Gorontalo. Telp: (0435) 821019'),
(0, 'P-SLU', 'H-122', 'RSUP Prof. dr. R. D Kandou', 'Jl. Raya Tanawangko No.56, Manado. Telp: (0431) 8383058'),
(0, 'P-SLU', 'H-123', 'RSU Ratatotok Buyat', 'Jl. J. W. Lasut Ratatotok II, Ratatotok,  Minahasa. Telp: (0431) 3177610'),
(0, 'P-SLU', 'H-124', 'RSUD Kotamobagu', 'Pobundayan, Kotamobagu. Telp: (0435) 822816'),
(0, 'P-SLU', 'H-125', 'RSUD dr. Sam Ratulangi', 'Jl. Suprapto No.123, Luaan, Kabupaten Minahasa. Telp: (0431) 321171'),
(0, 'P-SLB', 'H-126', 'RSUD Provinsi Sulawesi Barat', 'Jl. RE Martadinata, Simboro, Kabupaten Mamuju. Telp: 0823 9621 2345'),
(0, 'P-SLT', 'H-127', 'RSUD Undata Palu', 'Jl. Trans Sulawesi Tondo, Palu. Telp: (0451) 4908020'),
(0, 'P-SLT', 'H-128', 'RSU Anutapura Palu', 'Jl. Kangkung,  Donggala Kodi, Palu. Telp: (0451) 460570'),
(0, 'P-SLT', 'H-129', 'RSUD Banggai Luwuk', 'Jl. lmam Bonjol No.14, Luwuk. Telp: (0461) 21820'),
(0, 'P-KRU', 'H-13', 'RSUD Provinsi Kepulauan Riau Tanjung Pinang', 'Jl. WR. Supratman No.100, Air Raja, Tanjung Pinang. Telp: (0771) 7335202'),
(0, 'P-SLT', 'H-130', 'RSU Mokopido Toli-Toli', 'Jl. Lanoni I No.37, Toli-Toli. Telp: (0453) 21300'),
(0, 'P-SLT', 'H-131', 'RSUD Kolonedale', 'Jl. W. Monginsidi No.2, Kolonedale. Telp: (0465) 21010'),
(0, 'P-SLS', 'H-132', 'RSUP dr. Wahidin Sudirohusodo', 'Jl. Perintis Kemerdekaan Km.11, Makassar. Telp: (0411) 510675'),
(0, 'P-SLS', 'H-133', 'RS Dr. Tadjuddin Chalid MPH', 'Jl. Paccerakkang No.67, Makassar. Telp: (0411) 512902'),
(0, 'P-SLS', 'H-134', 'RSUD Labuang Baji', 'Jl. Dr. Ratulangi No.81, Makassar. Telp: (0411) 873482'),
(0, 'P-SLS', 'H-135', 'RSUD Andi Makkasau Parepare', 'Jl. Nurussamawati No.9, Bumi Harapan, Pare-Pare'),
(0, 'P-SLS', 'H-136', 'RSU Lakipadada Toraja', 'Jl. Pongtiku No. 486, Kabupaten Tana Toraja. (0423) 22264'),
(0, 'P-SLS', 'H-137', 'RSUD Kabupaten Sinjai', 'Jl. Jend. Sudirman No.47, Sinjai. Telp: (0482) 21132'),
(0, 'P-SLS', 'H-138', 'RS Tk. II Pelamonia', 'Jl. Jend. Sudirman No.27, Makassar. Telp: 0811 1782 399'),
(0, 'P-STG', 'H-139', 'RS Bahtera Mas Kendari', 'Jl. Kapten Piere Tendean, Watubangga, Kendari. Telp: (0401) 3195611'),
(0, 'P-KRU', 'H-14', 'RSUD Embung Fatimah', 'Bukit Tempayan, Batu Aji, Batam. Telp: (0778) 364446'),
(0, 'P-MLK', 'H-140', 'RSUP dr. J. Leimena', 'Rumah Tiga, Tlk. Ambon, Ambon.'),
(0, 'P-MLK', 'H-141', 'RSU Dr. M. Haulussy Ambon', 'Jl. Dr. Kayadoe, Benteng, Ambon. Telp: (0911) 343002'),
(0, 'P-MLK', 'H-142', 'RSUD dr. P. P. Magrettti Saumlaki', 'Jl. Ir. Soekarno - Poros Utama, Kabupaten Maluku Tenggara Barat. Telp: (0918) 21113'),
(0, 'P-MLU', 'H-143', 'RSUD dr. H. Chasan Boesoirie', 'Jl. Cempaka, Ternate. Telp: (0921) 3121281, 3127159'),
(0, 'P-PPA', 'H-144', 'RSU Jayapura', 'Jl. Kesehatan No.1, Jayapura. Telp: (0967) 533616'),
(0, 'P-PPA', 'H-145', 'RSU Nabire', 'Jl. R.E. Martadinata, Siriwini, Nabire. Telp: (0984) 21846'),
(0, 'P-PPA', 'H-146', 'RSU Merauke', 'Jl. Soekarjo Wiryopranoto No.1, Maro, Merauke. Telp: (0971) 321124'),
(0, 'P-PPB', 'H-147', 'RSUD Sorong', 'Kp. Baru, Sorong. Telp: (0951) 321850'),
(0, 'P-PPB', 'H-148', 'RSUD Manokwari', 'Jl. Siliwangi No.1, Manokwari Barat. Telp: (0986) 215133'),
(0, 'P-KRU', 'H-15', 'RSUD Muhammad Sani Kab. Karimun', 'Jl. Poros No.1, Tanjung Balai, Karimun. Fax: 29611'),
(0, 'P-KRU', 'H-16', 'RS Badan Pengusahaan Batam', 'Jl. Cipto Mangunkusumo No.1, Sekupang, Batam. Telp: (0778) 322121'),
(0, 'P-JMB', 'H-17', 'RSUD Raden Mattaher Jambi', 'Jl. Letjen Suprapto No.31, Telanaipura, Jambi. Telp: (0741) 61692'),
(0, 'P-SMS', 'H-18', 'RSUP M. Hoesin', 'Jl. Jend. Sudirman Km.3-5, Palembang. Telp: (0711) 30126, 354088'),
(0, 'P-SMS', 'H-19', 'RS Dr. Rivai Abdullah', 'Jl. Sungai Kundur Kab. Banyu Asin. Telp: (0711) 7537201'),
(0, 'P-ACH', 'H-2', 'RSU Cut Meutia Lhokseumawe', 'Jl. Banda Aceh-Medan Km.6 Buket Rata, Lhokseumawe. Telp: (0645) 43012'),
(0, 'P-SMS', 'H-20', 'RSUD Siti Fatimah Provinsi Sumatera Selatan', 'Jl. Kol. H. Burlian, Suka Bangun, Palembang. Telp: (0711) 5718883'),
(0, 'P-SMS', 'H-21', 'RSUD Lahat', 'Jl. Mayor Ruslan No.29, Lahat. Telp: (0731) 321785, 21785'),
(0, 'P-SMS', 'H-22', 'RSUD Kayuagung', 'Jl. Raya Lintas Timur, Kayuagung. Telp: (0712) 323889'),
(0, 'P-BB', 'H-23', 'RSUD Depati Hamzah', 'Jl. Soekarno Hatta, Bukitbesar, Pangkal Pinang. Telp: (0717) 422693'),
(0, 'P-BB', 'H-24', 'RSUD dr. H. Marsidi Judono', 'Air Raya, Tj. Pandan, Belitung. Telp: (0719) 21071'),
(0, 'P-BKL', 'H-25', 'RSUD M. Yunus Bengkulu', 'Jl. Bhayangkara, Sidomulyo, Bengkulu. Telp: (0736) 52004, 52008, 51111'),
(0, 'P-BKL', 'H-26', 'RSUD Arga Makmur', 'Jl. Siti Khadijah No.8, Arga Makmur, Bengkulu Utara. Telp: (0737) 521118'),
(0, 'P-BKL', 'H-27', 'RSUD Hasanuddin Damrah Manna', 'Raya Padang Panjang, Manna, Bengkulu Selatan. Telp: (0739) 22870'),
(0, 'P-LPG', 'H-28', 'RSUD Dr. H. Abdul Moeloek', 'Jl. Dr. Rivai No.6, Bandar Lampung. Telp: (0721) 703312'),
(0, 'P-LPG', 'H-29', 'RSUD Ahmad Yani Metro', 'Jl. Jend. Ahmad Yani No.13, Imopuro, Metro, Lampung. Telp: (0725) 41820'),
(0, 'P-SMU', 'H-3', 'RSUP H. Adam Malik Medan', 'Jl. Bunga Lau No.17. Telp: (061) 8360381'),
(0, 'P-LPG', 'H-30', 'RSUD Dr. H. Bob Bazar, SKM', 'Jl. Batin Tjindar Bumi No.14 B, Kab. Lampung Selatan. Telp: (0727) 322159'),
(0, 'P-LPG', 'H-31', 'RSUD Mayjen H.M. Ryacudu', 'Jl. Jend. Sudirman No.24, Kotabumi, Kab. Lampung Utara. Telp: (0724) 22095'),
(0, 'P-JKT', 'H-32', 'RSPI Prof. Dr. Sulianti Saroso', 'Jl. Sunter Permai Raya, Tanjung Priok, Jakarta Utara. Telp: (021) 6506559'),
(0, 'P-JKT', 'H-33', 'RSUP Persahabatan', 'Jl. Persahabatan Raya No.1, Jakarta Timur. Telp: (021) 4891708, 4891745'),
(0, 'P-JKT', 'H-34', 'RSUP Fatmawati', 'Jl. TB Simatupang c No.18, Cilandak, Jakarta Selatan. Telp: (021) 7501524'),
(0, 'P-JKT', 'H-35', 'RSUD Cengkareng', 'Jl. Bumi Cengkareng Indah No.1, Cengkareng, Jakarta Barat. Telp: (021) 54372882'),
(0, 'P-JKT', 'H-36', 'RSUD Pasar Minggu', 'Jl. TB Simatupang No.1, RW.5, Pasar. Minggu, Jakarta Selatan. Telp: (021) 29059999'),
(0, 'P-JKT', 'H-37', 'RS Bhayangkara TK. I R. Said Sukanto', 'Jl. Raya Jakarta-Bogor, Kramat Jati, Jakarta Timur. Telp: (021) 8093288'),
(0, 'P-JKT', 'H-38', 'RSPAD Gatot Subroto', 'Jl. Abdul Rahman Saleh Raya No.24, Senen, Jakarta Pusat. Telp: (021) 3441008'),
(0, 'P-JKT', 'H-39', 'RSAL dr. Mintoharjo', 'Jl. Bendungan Hilir No.17 A, Bendungan Hilir, Jakarta Pusat. Telp: (021) 5703081'),
(0, 'P-SMU', 'H-4', 'RSU Kabanjahe', 'Jl. KS Ketaren 8, Kabanjahe. Telp: (0628) 20550'),
(0, 'P-JKT', 'H-40', 'RS Pertamina Jaya', 'Jl. Jenderal Ahmad Yani No.2, Cempaka Putih Tim, Jakarta Pusat. Telp: (021) 4211911'),
(0, 'P-JKT', 'H-41', 'Rumah Sakit Pelni', 'Jl. Ks. Tubun No. 92-94, RT 13 RW 1, Slipi, Palmerah, Jakarta Barat. Telp: (021) 5306901'),
(0, 'P-JKT', 'H-42', 'RSKD Duren Sawit', 'Jl. Duren Sawit Baru No. 2, Pondok Bambu, Duren Sawit, Jakarta Timur. Telp: (021) 8615555, 8628686, 8617601'),
(0, 'P-JKT', 'H-43', 'RSUD Tarakan', 'Jl. Kyai Caringin No. 7, Cideng, Gambir, Jakarta Pusat. Telp: (021) 3503003 ext 1148'),
(0, 'P-JKT', 'H-44', 'RS Darurat Covid-19 Wisma Atlet Kemayoran', 'Jl. Danau Sunter Barat No.1, Sunter Agung, Tj. Priok, Jakarta Utara. Telp: 119 ext 9'),
(0, 'P-JKT', 'H-45', 'RSUD Koja', 'Jl. Deli No. 4, Koja, Jakarta Utara. Telp: (021) 43938478'),
(0, 'P-JBR', 'H-47', 'RS Hermina Grand Wisata', 'Jl. Festival Boulevard Blok JA I No. 1, Grand Wisata, Bekasi. Telp: (021) 826 512 12'),
(0, 'P-JBR', 'H-48', 'RS Sentra Medika ', 'Jl. Raya Industri Pasir Gombong - Cikarang, Bekasi. Telp: (021) 890 416 064'),
(0, 'P-JBR', 'H-49', 'RS Siloam Cikarang', 'Jl. MH. Thamrin No.Kav. 105, Cikarang, Bekasi. Telp: (021) 296 369 00'),
(0, 'P-SMU', 'H-5', 'RSU Dr. Djasamen Saragih Pematang Siantar', 'Jl. Sutomo No.230, Pematang Siantar. Telp: (0622) 22959'),
(0, 'P-JBR', 'H-50', 'RS Omni Cikarang', 'Komp The Oasis Kav No.1, Jl. Raya Cikarang - Cibarusah, Bekasi. Telp: (021) 297 79 999'),
(0, 'P-JBR', 'H-51', 'RS Mitra Keluarga Cikarang', 'Jl. Raya Industri No.100, Cikarang, Bekasi. Telp: (021) 898 40 900'),
(0, 'P-JBR', 'H-52', 'RS Dokter Adam Thalib', 'Jl. Raya Teuku Umar No.25, Cikarang, Bekasi. Telp: (021) 883 32 305'),
(0, 'P-JBR', 'H-53', 'RS Grha MM2100', 'Jl. Kalimantan Blok CB-1 Kawasan Industri MM2100, Cikarang, Bekasi. Telp: (021) 505 70 911'),
(0, 'P-JBR', 'H-54', 'RS Cibitung Medika', 'Jl. Bosih Raya No.117, Cibitung, Bekasi. Telp: (021) 883 23 444'),
(0, 'P-JBR', 'H-55', 'RS Annisa', 'Jl. Cikarang Baru Raya No.31, Cikarang, Bekasi. Telp: (021) 890 4165'),
(0, 'P-JBR', 'H-56', 'RSUP dr. Hasan Sadikin', 'Jl. Pasteur No.38, Pasteur, Bandung. Telp: (022) 2551111'),
(0, 'P-JBR', 'H-57', 'RS Paru Dr. H. A. Rotinsulu', 'Jl. Bukit Jarian No.40, Bandung. Telp: (022) 2034446'),
(0, 'P-JBR', 'H-58', 'RS Paru dr. M. Goenawan Partowidigdo', 'Jl. Puncak Raya Km. 83, Cisarua, Bogor. Telp: (0251) 8253630'),
(0, 'P-JBR', 'H-59', 'RSUD Gunung Jati Cirebon', 'Jl. Kesambi Raya No.56, Cirebon. Telp: (0231) 206330'),
(0, 'P-SMU', 'H-6', 'RSUD Tarutung', 'Jl. H. Agus Salim No.1, Tapanuli Utara. Telp: (0633) 21303'),
(0, 'P-JBR', 'H-60', 'RSUD R. Syamsudin, SH Sukabumi', 'Jl. Rumah Sakit No.1, Sukabumi. Telp: (0266) 245703'),
(0, 'P-JBR', 'H-61', 'RSUD dr. Slamet Garut', 'Jl. Rumah Sakit No.10, Garut. Telp: (0262) 232720'),
(0, 'P-JBR', 'H-62', 'RSUD Kabupaten Indramayu', 'Jl. Murahnara No.7, Sindang, Indramayu. Telp: (0234) 272655'),
(0, 'P-JBR', 'H-63', 'RSU Tk. II Dustira', 'Jl. Dustira No.1, Baros, Cimahi'),
(0, 'P-BTN', 'H-64', 'RSUD Kabupaten Tangerang', 'Jl. Jend. Ahmad Yani No.9. Telp: (021) 5523507'),
(0, 'P-BTN', 'H-65', 'RSUD dr. Drajat Prawiranegara Serang', 'Jl. Rumah Sakit Umum No.1, Serang.'),
(0, 'P-TTG', 'H-66', 'RSUP dr. Kariadi', 'Jl. Dr. Sutomo No.16, Semarang. Telp: (024) 8413993, 8413476'),
(0, 'P-TTG', 'H-67', 'RS dr. Seoradji Tirtonegoro Klaten', 'Jl. Dr. Soeradji Tirtonegoro No.1, Klaten. Telp: (0272) 321041'),
(0, 'P-TTG', 'H-68', 'RS Paru dr. Ario Wirawan', 'Jl. Hasanudin No.806, Mangunsari, Salatiga. Telp: (0298) 326130'),
(0, 'P-TTG', 'H-69', 'RSUD Prof. Dr. Margono Soekarjo', 'Jl. Dr. Gumbreg No.1, Purwokerto. Telp: (0281) 632708'),
(0, 'P-SMU', 'H-7', 'RSU Padang Sidempuan', 'Jl. Dr. Ferdinand Lumban Tobing No.10, Padang Sidempuan. Telp: (0634) 21780, 21251'),
(0, 'P-TTG', 'H-70', 'RSUD dr. Moewardi Surakarta', 'Jl. Kolonel Sutarto No.132, Surakarta. Telp: (0271) 634634'),
(0, 'P-TTG', 'H-71', 'RSUD Tidar Magelang', 'Jl. Tidar No.30 A, Magelang. Telp: (0293) 36226'),
(0, 'P-TTG', 'H-72', 'RSUD KRMT Wongsonegoro', 'Jl. Fatmawati No.1, Semarang. Telp: (024) 6711500'),
(0, 'P-TTG', 'H-73', 'RSUD Kardinah Tegal', 'Jl. Aip. Ks. Tubun No. 4, Tegal. Telp: (0283) 356067'),
(0, 'P-TTG', 'H-74', 'RSUD Banyumas', 'Jl. Rumah Sakit No.1, Karangpucung, Kabupaten Banyumas. Telp: (0281) 796031'),
(0, 'P-TTG', 'H-75', 'RSU dr. Loekmonohadi', 'Jl. Dr. Lukmonohadi No.19, Kabupaten Kudus. Telp:  (0291) 444001'),
(0, 'P-TTG', 'H-76', 'RSUD Kraton', 'Jl. Veteran No.31, Pekalongan. Telp: (0285) 421621'),
(0, 'P-TTG', 'H-77', 'RSUD dr. Soeselo Slawi', 'Jl. Dr. Sutomo No.63, Slawi. Telp: (0283) 491016'),
(0, 'P-TTG', 'H-78', 'RSUD RAA Soewondo Kendal', 'Jl. Laut No.21, Kendal. Telp: (0294) 381433'),
(0, 'P-DIY', 'H-79', 'RSUP dr. Sardjito', 'Jl. Kesehatan No.1, Yogyakarta. Telp: (0274) 631190'),
(0, 'P-SMB', 'H-8', 'RSUP Dr. M. Jamil Padang', 'Jl. Perintis Kemerdekaan, Padang. Telp. (0751) 32372, 37030'),
(0, 'P-DIY', 'H-80', 'RSUD Panembahan Senopati Bantul', 'Jl. Dr. Wahidin Sudiro Husodo, Bantul. Telp: (0274) 367381'),
(0, 'P-DIY', 'H-81', 'RSUD Kota Yogyakarta', 'Jl. Ki Ageng Pemanahan No.1, Yogyakarta. Telp: (0274) 371195'),
(0, 'P-DIY', 'H-82', 'RSUD Wates', 'Jl. Tentara Pelajar Km. 1 No. 5, Kulon Progo. Telp: (0274) 773169'),
(0, 'P-JTM', 'H-83', 'RSUD dr. Soetomo', 'Jl. Mayjen Prof. Dr. Moestopo No.6 – 8, Surabaya. Telp: (031) 5501078'),
(0, 'P-JTM', 'H-84', 'RSUD dr. Soedono Madiun', 'Jl. Dr. Sutomo No.59, Madiun. Telp: (0351) 454657'),
(0, 'P-JTM', 'H-85', 'RSUD dr. Saiful Anwar', 'Jl. Jaksa Agung Suprapto No.2, Malang. Telp: (0341) 362101'),
(0, 'P-JTM', 'H-86', 'RSUD dr. Soebandi Jember', 'Jl. Dr. Soebandi No.124, Jember. Telp: 0823 0159 8557'),
(0, 'P-JTM', 'H-87', 'RSUD Kabupaten Kediri Pare', 'Jl. Pahlawan Kusuma Bangsa No.1, Pare. Telp: (0354) 391718'),
(0, 'P-JTM', 'H-88', 'RSUD dr. R. Koesma Tuban', 'Jl. Dr. Wahidin Sudirohusodo No.800, Tuban. Telp: (0356) 321010'),
(0, 'P-JTM', 'H-89', 'RSUD Blambangan', 'Jl. Letkol Istiqlah No.49, Banyuwangi. Telp: (0333) 421118'),
(0, 'P-SMB', 'H-9', 'RSUD Dr. Achmad Mochtar Bukittinggi', 'Jl. Dr. Abdul Rivai No.1, Bukittinggi. Telp: (0752) 21720, 21831'),
(0, 'P-JTM', 'H-90', 'RSUD Dr. R. Sosodoro Djatikoesoemo', 'Jl. Dr. Wahidin No.36, Bojonegoro. Telp: (0353) 881193'),
(0, 'P-JTM', 'H-91', 'RSUD Dr. Iskak Tulungagung', 'Jl. Dr. Wahidin Sudiro Husodo, Kabupaten Tulungagung. Telp: (0355) 322609'),
(0, 'P-JTM', 'H-92', 'RSUD Sidoarjo', 'Jl. Mojopahit No.667, Kabupaten Sidoarjo. Telp: (031) 8961649'),
(0, 'P-JTM', 'H-93', 'RS Universitas Airlangga', 'Kampus C Unair, Jl. Mulyorejo, Surabaya. (031) 5961389'),
(0, 'P-BL', 'H-94', 'RSUP Sanglah', 'Jl. Diponegoro, Denpasar, Bali. Telp: (0361) 227912'),
(0, 'P-BL', 'H-95', 'RSUD Sanjiwani Gianyar', 'Jl. Ciung Wanara-Gianyar No.2, Gianyar. Telp: (0361) 943020'),
(0, 'P-BL', 'H-96', 'RSUD Tabanan', 'Jl. Pahlawan No.14, Tabanan. Telp: (0361) 811027'),
(0, 'P-BL', 'H-97', 'RSUD Kabupaten Buleleng', 'Jl. Ngurah Rai No.30, Astina, Buleleng. Telp: (0362) 22046'),
(0, 'P-NTB', 'H-98', 'RSUD NTB', 'Jl. Prabu Rangkasari, Dasan Cermen, Mataram. Telp: (0370) 7502424'),
(0, 'P-NTB', 'H-99', 'RSUD Kota Bima', 'Jl. Langsat No.1, Raba, Bima. Telp: (0374) 43142');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_province`
--

CREATE TABLE `data_province` (
  `no` int(11) NOT NULL,
  `id_province` varchar(5) NOT NULL,
  `province` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_province`
--

INSERT INTO `data_province` (`no`, `id_province`, `province`) VALUES
(1, 'P-ACH', 'Aceh'),
(8, 'P-BB', 'Bangka Belitung'),
(9, 'P-BKL', 'Bengkulu'),
(17, 'P-BL', 'Bali'),
(13, 'P-BTN', 'Banten'),
(15, 'P-DIY', 'D.I Yogyakarta'),
(25, 'P-GTL', 'Gorontalo'),
(12, 'P-JBR', 'Jawa Barat'),
(11, 'P-JKT', 'DKI Jakarta'),
(6, 'P-JMB', 'Jambi'),
(16, 'P-JTM', 'Jawa Timur'),
(20, 'P-KBR', 'Kalimantan Barat'),
(5, 'P-KRU', 'Kepulauan Riau'),
(22, 'P-KSL', 'Kalimantan Selatan'),
(21, 'P-KTG', 'Kalimantan Tengah'),
(23, 'P-KTM', 'Kalimantan Timur'),
(24, 'P-KUT', 'Kalimantan Utara'),
(10, 'P-LPG', 'Lampung'),
(31, 'P-MLK', 'Maluku'),
(32, 'P-MLU', 'Maluku Utara'),
(18, 'P-NTB', 'Nusa Tenggara Barat'),
(19, 'P-NTT', 'Nusa Tenggara Timur'),
(33, 'P-PPA', 'Papua'),
(34, 'P-PPB', 'Papua Barat'),
(4, 'P-RU', 'Riau'),
(27, 'P-SLB', 'Sulawesi Barat'),
(29, 'P-SLS', 'Sulawesi Selatan'),
(28, 'P-SLT', 'Sulawesi Tengah'),
(26, 'P-SLU', 'Sulawesi Utara'),
(3, 'P-SMB', 'Sumatera Barat'),
(7, 'P-SMS', 'Sumatera Selatan'),
(2, 'P-SMU', 'Sumatera Utara'),
(30, 'P-STG', 'Sulawesi Tenggara'),
(14, 'P-TTG', 'Jawa Tengah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_statistic`
--

CREATE TABLE `data_statistic` (
  `id_statistic` varchar(5) NOT NULL,
  `positive` int(11) DEFAULT NULL,
  `dead` int(11) DEFAULT NULL,
  `healed` int(11) DEFAULT NULL,
  `date_confirmed` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_statistic`
--

INSERT INTO `data_statistic` (`id_statistic`, `positive`, `dead`, `healed`, `date_confirmed`) VALUES
('ST1', 14265, 991, 2881, '2020-05-11 16:30:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_hospital`
--
ALTER TABLE `data_hospital`
  ADD PRIMARY KEY (`id_hospital`) USING BTREE,
  ADD KEY `id_province` (`id_province`);

--
-- Indeks untuk tabel `data_province`
--
ALTER TABLE `data_province`
  ADD PRIMARY KEY (`id_province`,`no`) USING BTREE;

--
-- Indeks untuk tabel `data_statistic`
--
ALTER TABLE `data_statistic`
  ADD PRIMARY KEY (`id_statistic`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_hospital`
--
ALTER TABLE `data_hospital`
  ADD CONSTRAINT `data_hospital_ibfk_1` FOREIGN KEY (`id_province`) REFERENCES `data_province` (`id_province`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
