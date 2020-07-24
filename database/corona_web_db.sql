-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jun 2020 pada 12.21
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
  `id_province` varchar(5) DEFAULT NULL,
  `id_hospital` int(5) NOT NULL,
  `hospital_name` varchar(255) DEFAULT NULL,
  `address_telp` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_hospital`
--

INSERT INTO `data_hospital` (`id_province`, `id_hospital`, `hospital_name`, `address_telp`) VALUES
('P-ACH', 1, 'RSU Dr. Zainoel Abidin Banda Aceh', 'Jl. Teuku Moh. Daud Beureueh No.108, Banda Aceh. Telp: (0651) 34565, 22077, 28148'),
('P-ACH', 2, 'RSU Cut Meutia Lhokseumawe', 'Jl. Banda Aceh-Medan Km.6 Buket Rata, Lhokseumawe. Telp: (0645) 43012'),
('P-BB', 3, 'RSUD Depati Hamzah', 'Jl. Soekarno Hatta, Bukitbesar, Pangkal Pinang. Telp: (0717) 422693'),
('P-BB', 4, 'RSUD dr. H. Marsidi Judono', 'Air Raya, Tj. Pandan, Belitung. Telp: (0719) 21071'),
('P-BKL', 5, 'RSUD M. Yunus Bengkulu', 'Jl. Bhayangkara, Sidomulyo, Bengkulu. Telp: (0736) 52004, 52008, 51111'),
('P-BKL', 6, 'RSUD Arga Makmur', 'Jl. Siti Khadijah No.8, Arga Makmur, Bengkulu Utara. Telp: (0737) 521118'),
('P-BKL', 7, 'RSUD Hasanuddin Damrah Manna', 'Raya Padang Panjang, Manna, Bengkulu Selatan. Telp: (0739) 22870'),
('P-BL', 8, 'RSUP Sanglah', 'Jl. Diponegoro, Denpasar, Bali. Telp: (0361) 227912'),
('P-BL', 9, 'RSUD Sanjiwani Gianyar', 'Jl. Ciung Wanara-Gianyar No.2, Gianyar. Telp: (0361) 943020'),
('P-BL', 10, 'RSUD Tabanan', 'Jl. Pahlawan No.14, Tabanan. Telp: (0361) 811027'),
('P-BL', 11, 'RSUD Kabupaten Buleleng', 'Jl. Ngurah Rai No.30, Astina, Buleleng. Telp: (0362) 22046'),
('P-BTN', 12, 'RSUD Kabupaten Tangerang', 'Jl. Jend. Ahmad Yani No.9. Telp: (021) 5523507'),
('P-BTN', 13, 'RSUD dr. Drajat Prawiranegara Serang', 'Jl. Rumah Sakit Umum No.1, Serang.'),
('P-DIY', 14, 'RSUP dr. Sardjito', 'Jl. Kesehatan No.1, Yogyakarta. Telp: (0274) 631190'),
('P-DIY', 15, 'RSUD Panembahan Senopati Bantul', 'Jl. Dr. Wahidin Sudiro Husodo, Bantul. Telp: (0274) 367381'),
('P-DIY', 16, 'RSUD Kota Yogyakarta', 'Jl. Ki Ageng Pemanahan No.1, Yogyakarta. Telp: (0274) 371195'),
('P-DIY', 17, 'RSUD Wates', 'Jl. Tentara Pelajar Km. 1 No. 5, Kulon Progo. Telp: (0274) 773169'),
('P-GTL', 18, 'RSUD Prof. dr. H. Aloei Saboe', 'Jl. S. Batutihe No.7, Gorontalo. Telp: (0435) 821019'),
('P-JBR', 19, 'RS Hermina Grand Wisata', 'Jl. Festival Boulevard Blok JA I No. 1, Grand Wisata, Bekasi. Telp: (021) 826 512 12'),
('P-JBR', 20, 'RS Sentra Medika ', 'Jl. Raya Industri Pasir Gombong - Cikarang, Bekasi. Telp: (021) 890 416 064'),
('P-JBR', 21, 'RS Siloam Cikarang', 'Jl. MH. Thamrin No.Kav. 105, Cikarang, Bekasi. Telp: (021) 296 369 00'),
('P-JBR', 22, 'RS Omni Cikarang', 'Komp The Oasis Kav No.1, Jl. Raya Cikarang - Cibarusah, Bekasi. Telp: (021) 297 79 999'),
('P-JBR', 23, 'RS Mitra Keluarga Cikarang', 'Jl. Raya Industri No.100, Cikarang, Bekasi. Telp: (021) 898 40 900'),
('P-JBR', 24, 'RS Dokter Adam Thalib', 'Jl. Raya Teuku Umar No.25, Cikarang, Bekasi. Telp: (021) 883 32 305'),
('P-JBR', 25, 'RS Grha MM2100', 'Jl. Kalimantan Blok CB-1 Kawasan Industri MM2100, Cikarang, Bekasi. Telp: (021) 505 70 911'),
('P-JBR', 26, 'RS Cibitung Medika', 'Jl. Bosih Raya No.117, Cibitung, Bekasi. Telp: (021) 883 23 444'),
('P-JBR', 27, 'RS Annisa', 'Jl. Cikarang Baru Raya No.31, Cikarang, Bekasi. Telp: (021) 890 4165'),
('P-JBR', 28, 'RSUP dr. Hasan Sadikin', 'Jl. Pasteur No.38, Pasteur, Bandung. Telp: (022) 2551111'),
('P-JBR', 29, 'RS Paru Dr. H. A. Rotinsulu', 'Jl. Bukit Jarian No.40, Bandung. Telp: (022) 2034446'),
('P-JBR', 30, 'RS Paru dr. M. Goenawan Partowidigdo', 'Jl. Puncak Raya Km. 83, Cisarua, Bogor. Telp: (0251) 8253630'),
('P-JBR', 31, 'RSUD Gunung Jati Cirebon', 'Jl. Kesambi Raya No.56, Cirebon. Telp: (0231) 206330'),
('P-JBR', 32, 'RSUD R. Syamsudin, SH Sukabumi', 'Jl. Rumah Sakit No.1, Sukabumi. Telp: (0266) 245703'),
('P-JBR', 33, 'RSUD dr. Slamet Garut', 'Jl. Rumah Sakit No.10, Garut. Telp: (0262) 232720'),
('P-JBR', 34, 'RSUD Kabupaten Indramayu', 'Jl. Murahnara No.7, Sindang, Indramayu. Telp: (0234) 272655'),
('P-JBR', 35, 'RSU Tk. II Dustira', 'Jl. Dustira No.1, Baros, Cimahi'),
('P-JKT', 36, 'RSPI Prof. Dr. Sulianti Saroso', 'Jl. Sunter Permai Raya, Tanjung Priok, Jakarta Utara. Telp: (021) 6506559'),
('P-JKT', 37, 'RSUP Persahabatan', 'Jl. Persahabatan Raya No.1, Jakarta Timur. Telp: (021) 4891708, 4891745'),
('P-JKT', 38, 'RSUP Fatmawati', 'Jl. TB Simatupang c No.18, Cilandak, Jakarta Selatan. Telp: (021) 7501524'),
('P-JKT', 39, 'RSUD Cengkareng', 'Jl. Bumi Cengkareng Indah No.1, Cengkareng, Jakarta Barat. Telp: (021) 54372882'),
('P-JKT', 40, 'RSUD Pasar Minggu', 'Jl. TB Simatupang No.1, RW.5, Pasar. Minggu, Jakarta Selatan. Telp: (021) 29059999'),
('P-JKT', 41, 'RS Bhayangkara TK. I R. Said Sukanto', 'Jl. Raya Jakarta-Bogor, Kramat Jati, Jakarta Timur. Telp: (021) 8093288'),
('P-JKT', 42, 'RSPAD Gatot Subroto', 'Jl. Abdul Rahman Saleh Raya No.24, Senen, Jakarta Pusat. Telp: (021) 3441008'),
('P-JKT', 43, 'RSAL dr. Mintoharjo', 'Jl. Bendungan Hilir No.17 A, Bendungan Hilir, Jakarta Pusat. Telp: (021) 5703081'),
('P-JKT', 44, 'RS Pertamina Jaya', 'Jl. Jenderal Ahmad Yani No.2, Cempaka Putih Tim, Jakarta Pusat. Telp: (021) 4211911'),
('P-JKT', 45, 'Rumah Sakit Pelni', 'Jl. Ks. Tubun No. 92-94, RT 13 RW 1, Slipi, Palmerah, Jakarta Barat. Telp: (021) 5306901'),
('P-JKT', 46, 'RSKD Duren Sawit', 'Jl. Duren Sawit Baru No. 2, Pondok Bambu, Duren Sawit, Jakarta Timur. Telp: (021) 8615555, 8628686, 8617601'),
('P-JKT', 47, 'RSUD Tarakan', 'Jl. Kyai Caringin No. 7, Cideng, Gambir, Jakarta Pusat. Telp: (021) 3503003 ext 1148'),
('P-JKT', 48, 'RS Darurat Covid-19 Wisma Atlet Kemayoran', 'Jl. Danau Sunter Barat No.1, Sunter Agung, Tj. Priok, Jakarta Utara. Telp: 119 ext 9'),
('P-JKT', 49, 'RSUD Koja', 'Jl. Deli No. 4, Koja, Jakarta Utara. Telp: (021) 43938478'),
('P-JMB', 50, 'RSUD Raden Mattaher Jambi', 'Jl. Letjen Suprapto No.31, Telanaipura, Jambi. Telp: (0741) 61692'),
('P-JTM', 51, 'RSUD dr. Soetomo', 'Jl. Mayjen Prof. Dr. Moestopo No.6 – 8, Surabaya. Telp: (031) 5501078'),
('P-JTM', 52, 'RSUD dr. Soedono Madiun', 'Jl. Dr. Sutomo No.59, Madiun. Telp: (0351) 454657'),
('P-JTM', 53, 'RSUD dr. Saiful Anwar', 'Jl. Jaksa Agung Suprapto No.2, Malang. Telp: (0341) 362101'),
('P-JTM', 54, 'RSUD dr. Soebandi Jember', 'Jl. Dr. Soebandi No.124, Jember. Telp: 0823 0159 8557'),
('P-JTM', 55, 'RSUD Kabupaten Kediri Pare', 'Jl. Pahlawan Kusuma Bangsa No.1, Pare. Telp: (0354) 391718'),
('P-JTM', 56, 'RSUD dr. R. Koesma Tuban', 'Jl. Dr. Wahidin Sudirohusodo No.800, Tuban. Telp: (0356) 321010'),
('P-JTM', 57, 'RSUD Blambangan', 'Jl. Letkol Istiqlah No.49, Banyuwangi. Telp: (0333) 421118'),
('P-JTM', 58, 'RSUD Dr. R. Sosodoro Djatikoesoemo', 'Jl. Dr. Wahidin No.36, Bojonegoro. Telp: (0353) 881193'),
('P-JTM', 59, 'RSUD Dr. Iskak Tulungagung', 'Jl. Dr. Wahidin Sudiro Husodo, Kabupaten Tulungagung. Telp: (0355) 322609'),
('P-JTM', 60, 'RSUD Sidoarjo', 'Jl. Mojopahit No.667, Kabupaten Sidoarjo. Telp: (031) 8961649'),
('P-JTM', 61, 'RS Universitas Airlangga', 'Kampus C Unair, Jl. Mulyorejo, Surabaya. (031) 5961389'),
('P-KBR', 62, 'RSUD dr. Soedarso Pontianak', 'Jl. Dr. Soedarso No.1, Pontianak. Telp: (0561) 737701'),
('P-KBR', 63, 'RSUD dr. Abdul Azis Singkawang', 'Jl. Dr. Soetomo No.28, Singkawang. Telp: (0562) 631748'),
('P-KBR', 64, 'RSUD Ade Mohamad Djoen Sintang', 'Jl. Pattimura No.1, Sintang. Telp: (0565) 22022'),
('P-KBR', 65, 'RSUD dr. Agoesdjam Ketapang', 'Jl. DI Panjaitan No.51, Sampit, Kabupaten Ketapang. Telp: (0534) 3037239'),
('P-KRU', 66, 'RSUD Provinsi Kepulauan Riau Tanjung Pinang', 'Jl. WR. Supratman No.100, Air Raja, Tanjung Pinang. Telp: (0771) 7335202'),
('P-KRU', 67, 'RSUD Embung Fatimah', 'Bukit Tempayan, Batu Aji, Batam. Telp: (0778) 364446'),
('P-KRU', 68, 'RSUD Muhammad Sani Kab. Karimun', 'Jl. Poros No.1, Tanjung Balai, Karimun. Fax: 29611'),
('P-KRU', 69, 'RS Badan Pengusahaan Batam', 'Jl. Cipto Mangunkusumo No.1, Sekupang, Batam. Telp: (0778) 322121'),
('P-KSL', 70, 'RSUD Ulin Banjarmasin', 'Jl. Ahmad Yani No.43, Banjarmasin. Telp: (0511) 3252229'),
('P-KSL', 71, 'RSUD H. Boejasin Pelaihari', 'Jl. A. Syahrani, Pelaihari. Telp: (0512) 21082'),
('P-KTG', 72, 'RSUD dr. Doris Sylvanus Palangkaraya', 'Jl. Tambun Bungai No.4, Palangka Raya. Telp: (0536) 3221717'),
('P-KTG', 73, 'RSUD dr. Murjani Sampit', 'Jl. H. Muhammad Arsyad No.65, Kotawaringin Timur. Telp: (0531) 21010'),
('P-KTG', 74, 'RSUD Sultan Imanuddin Pangkalan Bun', 'Jl. Sutan Syahrir No.17, Kabupaten Kotawaringin Barat. Telp: (0532) 21404'),
('P-KTM', 75, 'RSUD Abdul Wahab Sjahrani', 'Jl. Palang Merah No.1, Samarinda. Telp: (0541) 738118'),
('P-KTM', 76, 'RSUD dr. Kanujoso Djatiwibowo', 'Jl. MT Haryono No.656, Balikpapan. Telp: (0542) 873901'),
('P-KTM', 77, 'RSU Taman Husada Bontang', 'Jl. Letjen S. Parman No.1, Bontang. Telp: (0548) 22111'),
('P-KTM', 78, 'RSUD Panglima Sebaya', 'Jl. Kusuma Bangsa Km.5, Paser. Telp: (0543) 21363'),
('P-KTM', 79, 'RSUD Aji Muhammad Parikesit', 'Jl. Ratu Agung No.1, Tlk. Dalam, Kutai Kartanegara. Telp: (0541) 661015'),
('P-KUT', 80, 'RSUD Kota Tarakan', 'Jl. Pulau Irian No.1, Kp. Satu Skip, Tarakan. Telp: (0551) 21166'),
('P-KUT', 81, 'RSUD Tanjung Selor', 'Jl. Cendrawasih - Tanjung Selor. Telp: (0552)- 21292'),
('P-LPG', 82, 'RSUD Dr. H. Abdul Moeloek', 'Jl. Dr. Rivai No.6, Bandar Lampung. Telp: (0721) 703312'),
('P-LPG', 83, 'RSUD Ahmad Yani Metro', 'Jl. Jend. Ahmad Yani No.13, Imopuro, Metro, Lampung. Telp: (0725) 41820'),
('P-LPG', 84, 'RSUD Dr. H. Bob Bazar, SKM', 'Jl. Batin Tjindar Bumi No.14 B, Kab. Lampung Selatan. Telp: (0727) 322159'),
('P-LPG', 85, 'RSUD Mayjen H.M. Ryacudu', 'Jl. Jend. Sudirman No.24, Kotabumi, Kab. Lampung Utara. Telp: (0724) 22095'),
('P-MLK', 86, 'RSUP dr. J. Leimena', 'Rumah Tiga, Tlk. Ambon, Ambon.'),
('P-MLK', 87, 'RSU Dr. M. Haulussy Ambon', 'Jl. Dr. Kayadoe, Benteng, Ambon. Telp: (0911) 343002'),
('P-MLK', 88, 'RSUD dr. P. P. Magrettti Saumlaki', 'Jl. Ir. Soekarno - Poros Utama, Kabupaten Maluku Tenggara Barat. Telp: (0918) 21113'),
('P-MLU', 89, 'RSUD dr. H. Chasan Boesoirie', 'Jl. Cempaka, Ternate. Telp: (0921) 3121281, 3127159'),
('P-NTB', 90, 'RSUD Dr. R. Sudjono', 'Jl. Prof. M. Yamin SH No.55, Selong. Telp: (0376) 21118'),
('P-NTB', 91, 'RSUD H. L. Manambai Abdul Kadir', 'Jl. Lintas Sumbawa-Bima Km 5, Seketeng, Kabupaten Sumbawa. Telp: (0371) 2628078'),
('P-NTB', 92, 'RSUD NTB', 'Jl. Prabu Rangkasari, Dasan Cermen, Mataram. Telp: (0370) 7502424'),
('P-NTB', 93, 'RSUD Kota Bima', 'Jl. Langsat No.1, Raba, Bima. Telp: (0374) 43142'),
('P-NTT', 94, 'RSUD Prof. dr. W. Z. Johannes', 'Jl. Dr. Moch. Hatta No.19, Kupang. Telp: (0380) 832892'),
('P-NTT', 95, 'RSU dr. TC. Hillers Maumere', 'Jl. Wairklau, No. 1, Kota Baru, Alok Timur, Kabupaten Sikka. (0382) 21314'),
('P-NTT', 96, 'RSUD Komodo Labuan Bajo', 'Jl. Trans Ruteng - Labuan Bajo, Desa Golo Bilas, Komodo'),
('P-PPA', 97, 'RSU Jayapura', 'Jl. Kesehatan No.1, Jayapura. Telp: (0967) 533616'),
('P-PPA', 98, 'RSU Nabire', 'Jl. R.E. Martadinata, Siriwini, Nabire. Telp: (0984) 21846'),
('P-PPA', 99, 'RSU Merauke', 'Jl. Soekarjo Wiryopranoto No.1, Maro, Merauke. Telp: (0971) 321124'),
('P-PPB', 100, 'RSUD Sorong', 'Kp. Baru, Sorong. Telp: (0951) 321850'),
('P-PPB', 101, 'RSUD Manokwari', 'Jl. Siliwangi No.1, Manokwari Barat. Telp: (0986) 215133'),
('P-RU', 102, 'RSU Arifin Achmad', 'Jl. Diponegoro No.2, Pekanbaru. Telp: (0761) 21618'),
('P-RU', 103, 'RSUD Kota Dumai', 'Jl. Tanjung Jati No.4, Dumai. Telp: (0762) 38368, (0765) 440992'),
('P-RU', 104, 'RSUD Puri Husada Tembilahan', 'Jl. Veteran No.52, Hilir Tembilahan. Telp: (0768) 22118'),
('P-SLB', 105, 'RSUD Provinsi Sulawesi Barat', 'Jl. RE Martadinata, Simboro, Kabupaten Mamuju. Telp: 0823 9621 2345'),
('P-SLS', 106, 'RSUP dr. Wahidin Sudirohusodo', 'Jl. Perintis Kemerdekaan Km.11, Makassar. Telp: (0411) 510675'),
('P-SLS', 107, 'RS Dr. Tadjuddin Chalid MPH', 'Jl. Paccerakkang No.67, Makassar. Telp: (0411) 512902'),
('P-SLS', 108, 'RSUD Labuang Baji', 'Jl. Dr. Ratulangi No.81, Makassar. Telp: (0411) 873482'),
('P-SLS', 109, 'RSUD Andi Makkasau Parepare', 'Jl. Nurussamawati No.9, Bumi Harapan, Pare-Pare'),
('P-SLS', 110, 'RSU Lakipadada Toraja', 'Jl. Pongtiku No. 486, Kabupaten Tana Toraja. (0423) 22264'),
('P-SLS', 111, 'RSUD Kabupaten Sinjai', 'Jl. Jend. Sudirman No.47, Sinjai. Telp: (0482) 21132'),
('P-SLS', 112, 'RS Tk. II Pelamonia', 'Jl. Jend. Sudirman No.27, Makassar. Telp: 0811 1782 399'),
('P-SLT', 113, 'RSUD Undata Palu', 'Jl. Trans Sulawesi Tondo, Palu. Telp: (0451) 4908020'),
('P-SLT', 114, 'RSU Anutapura Palu', 'Jl. Kangkung,  Donggala Kodi, Palu. Telp: (0451) 460570'),
('P-SLT', 115, 'RSUD Banggai Luwuk', 'Jl. lmam Bonjol No.14, Luwuk. Telp: (0461) 21820'),
('P-SLT', 116, 'RSU Mokopido Toli-Toli', 'Jl. Lanoni I No.37, Toli-Toli. Telp: (0453) 21300'),
('P-SLT', 117, 'RSUD Kolonedale', 'Jl. W. Monginsidi No.2, Kolonedale. Telp: (0465) 21010'),
('P-SLU', 118, 'RSUP Prof. dr. R. D Kandou', 'Jl. Raya Tanawangko No.56, Manado. Telp: (0431) 8383058'),
('P-SLU', 119, 'RSU Ratatotok Buyat', 'Jl. J. W. Lasut Ratatotok II, Ratatotok,  Minahasa. Telp: (0431) 3177610'),
('P-SLU', 120, 'RSUD Kotamobagu', 'Pobundayan, Kotamobagu. Telp: (0435) 822816'),
('P-SLU', 121, 'RSUD dr. Sam Ratulangi', 'Jl. Suprapto No.123, Luaan, Kabupaten Minahasa. Telp: (0431) 321171'),
('P-SMB', 122, 'RSUP Dr. M. Jamil Padang', 'Jl. Perintis Kemerdekaan, Padang. Telp. (0751) 32372, 37030'),
('P-SMB', 123, 'RSUD Dr. Achmad Mochtar Bukittinggi', 'Jl. Dr. Abdul Rivai No.1, Bukittinggi. Telp: (0752) 21720, 21831'),
('P-SMS', 124, 'RSUP M. Hoesin', 'Jl. Jend. Sudirman Km.3-5, Palembang. Telp: (0711) 30126, 354088'),
('P-SMS', 125, 'RS Dr. Rivai Abdullah', 'Jl. Sungai Kundur Kab. Banyu Asin. Telp: (0711) 7537201'),
('P-SMS', 126, 'RSUD Siti Fatimah Provinsi Sumatera Selatan', 'Jl. Kol. H. Burlian, Suka Bangun, Palembang. Telp: (0711) 5718883'),
('P-SMS', 127, 'RSUD Lahat', 'Jl. Mayor Ruslan No.29, Lahat. Telp: (0731) 321785, 21785'),
('P-SMS', 128, 'RSUD Kayuagung', 'Jl. Raya Lintas Timur, Kayuagung. Telp: (0712) 323889'),
('P-SMU', 129, 'RSUP H. Adam Malik Medan', 'Jl. Bunga Lau No.17. Telp: (061) 8360381'),
('P-SMU', 130, 'RSU Kabanjahe', 'Jl. KS Ketaren 8, Kabanjahe. Telp: (0628) 20550'),
('P-SMU', 131, 'RSU Dr. Djasamen Saragih Pematang Siantar', 'Jl. Sutomo No.230, Pematang Siantar. Telp: (0622) 22959'),
('P-SMU', 132, 'RSUD Tarutung', 'Jl. H. Agus Salim No.1, Tapanuli Utara. Telp: (0633) 21303'),
('P-SMU', 133, 'RSU Padang Sidempuan', 'Jl. Dr. Ferdinand Lumban Tobing No.10, Padang Sidempuan. Telp: (0634) 21780, 21251'),
('P-STG', 134, 'RS Bahtera Mas Kendari', 'Jl. Kapten Piere Tendean, Watubangga, Kendari. Telp: (0401) 3195611'),
('P-TTG', 135, 'RSUP dr. Kariadi', 'Jl. Dr. Sutomo No.16, Semarang. Telp: (024) 8413993, 8413476'),
('P-TTG', 136, 'RS dr. Seoradji Tirtonegoro Klaten', 'Jl. Dr. Soeradji Tirtonegoro No.1, Klaten. Telp: (0272) 321041'),
('P-TTG', 137, 'RS Paru dr. Ario Wirawan', 'Jl. Hasanudin No.806, Mangunsari, Salatiga. Telp: (0298) 326130'),
('P-TTG', 138, 'RSUD Prof. Dr. Margono Soekarjo', 'Jl. Dr. Gumbreg No.1, Purwokerto. Telp: (0281) 632708'),
('P-TTG', 139, 'RSUD dr. Moewardi Surakarta', 'Jl. Kolonel Sutarto No.132, Surakarta. Telp: (0271) 634634'),
('P-TTG', 140, 'RSUD Tidar Magelang', 'Jl. Tidar No.30 A, Magelang. Telp: (0293) 36226'),
('P-TTG', 141, 'RSUD KRMT Wongsonegoro', 'Jl. Fatmawati No.1, Semarang. Telp: (024) 6711500'),
('P-TTG', 142, 'RSUD Kardinah Tegal', 'Jl. Aip. Ks. Tubun No. 4, Tegal. Telp: (0283) 356067'),
('P-TTG', 143, 'RSUD Banyumas', 'Jl. Rumah Sakit No.1, Karangpucung, Kabupaten Banyumas. Telp: (0281) 796031'),
('P-TTG', 144, 'RSU dr. Loekmonohadi', 'Jl. Dr. Lukmonohadi No.19, Kabupaten Kudus. Telp:  (0291) 444001'),
('P-TTG', 145, 'RSUD Kraton', 'Jl. Veteran No.31, Pekalongan. Telp: (0285) 421621'),
('P-TTG', 146, 'RSUD dr. Soeselo Slawi', 'Jl. Dr. Sutomo No.63, Slawi. Telp: (0283) 491016'),
('P-TTG', 147, 'RSUD RAA Soewondo Kendal', 'Jl. Laut No. 21, Kendal. Telp: (0294) 381433');

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
  `date_confirmed` date DEFAULT NULL,
  `time_confirmed` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_statistic`
--

INSERT INTO `data_statistic` (`id_statistic`, `positive`, `dead`, `healed`, `date_confirmed`, `time_confirmed`) VALUES
('ST1', 38277, 2134, 14531, '2020-06-14', '18:00:00'),
('ST2', 1017, 64, 592, '2020-06-15', '17:10:00'),
('ST3', 1106, 33, 580, '2020-06-16', '18:23:06'),
('ST4', 1031, 45, 540, '2020-06-17', '21:20:00'),
('ST5', 1331, 63, 555, '2020-06-18', '18:00:00'),
('ST6', 1041, 34, 551, '2020-06-19', '18:30:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_user`
--

CREATE TABLE `data_user` (
  `id_user` varchar(5) NOT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_user`
--

INSERT INTO `data_user` (`id_user`, `owner`, `username`, `password`) VALUES
('USR1', 'Ilham Shiddiq', 'ilham', 'ilham'),
('USR2', 'User1', 'user', 'user'),
('USR3', 'User2', 'imuser', 'imuser'),
('USR4', 'User4', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_hospital`
--
ALTER TABLE `data_hospital`
  ADD PRIMARY KEY (`id_hospital`),
  ADD KEY `id_province` (`id_province`);

--
-- Indeks untuk tabel `data_province`
--
ALTER TABLE `data_province`
  ADD PRIMARY KEY (`id_province`,`no`) USING BTREE,
  ADD KEY `id_province` (`id_province`);

--
-- Indeks untuk tabel `data_statistic`
--
ALTER TABLE `data_statistic`
  ADD PRIMARY KEY (`id_statistic`);

--
-- Indeks untuk tabel `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id_user`);

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
