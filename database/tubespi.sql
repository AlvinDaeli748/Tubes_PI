-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jul 2021 pada 07.19
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubespi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `pembuka` text NOT NULL,
  `penutup` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_sumbangan`
--

CREATE TABLE `status_sumbangan` (
  `id_status` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sumbangan`
--

CREATE TABLE `sumbangan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sifat` varchar(10) NOT NULL,
  `sumbangan` varchar(10) NOT NULL,
  `keterangan_sumbangan` text NOT NULL,
  `status` enum('Pending','Disetujui','Ditolak','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sumbangan`
--

INSERT INTO `sumbangan` (`id`, `nama`, `email`, `sifat`, `sumbangan`, `keterangan_sumbangan`, `status`) VALUES
(1, 'Tiara  Amalia', 'tiaraamalia18@gmail.com', '1', '1', '', 'Pending'),
(2, 'tes', 'tes@gmail.com', '1', '1', '', 'Pending'),
(3, 'tes', 'tes@gmail.com', '1', '1', '', 'Pending'),
(4, 'Tiara  Amalia', 'tiaraamalia18@gmail.com', '1', '1', 'laptop', 'Pending'),
(5, 'aaaa', '', '1', '1', 'aaaaaa', 'Pending'),
(6, 'aaa', '', 'Pribadi', 'Barang', 'aaaaaaa', 'Pending'),
(7, 'adad', 'adada@gmail.com', 'Pribadi', 'Barang', 'aadad', 'Pending'),
(8, 'Willi Nardo', 'nardowilli@gmail.com', 'Pribadi', 'Barang', 'aaaa', 'Pending'),
(9, 'Willi Nardo', 'nardowilli@gmail.com', 'Pribadi', 'Barang', 'aaaaaaaa', 'Pending'),
(10, 'willi', 'nardowilli@gmail.com', 'Pribadi', 'Barang', 'laptop', 'Pending');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Willi Nardo', 'willi@gmail.com', 'default.jpg', '$2y$10$xtx3PlczoiYapQ4n3d9WF.fUYG0iG/Ee4UrjYjmMg07yjV/0q3YIO', 1, 1, 1623272391),
(2, 'alvin daeli', 'alvin@gmail.com', '1.png', '$2y$10$aX0/NLoDeb0mcfutb8FnCem8g6Iax0E6qcM5FWR5HuVCZbxAg.j1.', 3, 1, 1623272824),
(3, 'Tiara Amalia', 'tiara@gmail.com', 'default.jpg', '$2y$10$rUiKN.pJpOjsKfVu3izwiOTZjIq41oiURZJmyv9SZoj0Kzu.nAtAe', 2, 1, 1623314758),
(4, 'timothy', 'timo@gmail.com', 'default.jpg', '$2y$10$f0KsSEzgu1KilGANwK59DeGWtgWYYqg93.Z9Ub.azlo2ZuWa8oMJO', 3, 1, 1623354506),
(8, 'ruth', 'ruth@gmail.com', 'default.jpg', '$2y$10$pftlJYX8ve/GMQtCI09uGeHrgPrxSkU1FjssQRt9VyW/VZIDfpwBC', 2, 1, 1623434448),
(12, 'willi nardo', 'nardowilli@gmail.com', 'Screenshot_2021-05-19_133310.jpg', '$2y$10$X/HV7chfx7vRa10xoyMCI.429B73t70ID/12GjFpLTgz0LWI9zo92', 3, 1, 1623482690),
(13, 'alvin daeli', 'alvinaa@gmail.com', 'default.jpg', '$2y$10$NCs/RgvauQ6RDEcjsslIROqfev5XiW01yCzTCi5JP98yivxEL/CSi', 2, 1, 1623484257);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `role` enum('admin','petugas','alumni') NOT NULL DEFAULT 'alumni',
  `last_login` timestamp NOT NULL DEFAULT current_timestamp(),
  `photo` varchar(64) NOT NULL DEFAULT 'user_no_image.jpg',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_active` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `full_name`, `phone`, `role`, `last_login`, `photo`, `created_at`, `is_active`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin.com', 'Administrator', '123456789', 'admin', '2021-06-09 13:10:15', 'user_no_image.jpg', '2021-06-09 05:51:35', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(4, 1, 4),
(5, 3, 3),
(7, 3, 5),
(12, 2, 10),
(13, 3, 10),
(18, 2, 3),
(19, 1, 11),
(20, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Petugas'),
(3, 'User'),
(4, 'Menu'),
(5, 'khusus user'),
(6, 'Khusus Petugas'),
(10, 'Semua ada'),
(14, 'khusus admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'petugas'),
(3, 'member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 2, 'Dashboard', 'petugas', 'las la-igloo', 1),
(5, 1, 'Petugas', 'admin/petugas', 'las la-users', 1),
(8, 4, 'Menu Management', 'menu', 'las la-ellipsis-h', 1),
(9, 4, 'Submenu Management', 'menu/submenu', 'las la-folder-open', 1),
(11, 2, 'List Sumbangan', 'petugas/list_sumbangan', 'las la-receipt', 1),
(12, 5, 'Sumbangan', 'user/sumbangan', 'las la-donate', 1),
(13, 5, 'Home', 'user', 'las la-igloo', 1),
(14, 10, 'My Profile', 'user/profile', 'las la-user', 1),
(15, 1, 'Role', 'admin/role', 'las la-user-tie', 1),
(16, 10, 'Edit Profile', 'user/edit', 'las la-user-tie', 1),
(17, 10, 'Change Password', 'user/changepassword', 'las la-key', 1),
(22, 2, 'Laporan', 'petugas/laporan', 'las la-file-invoice', 1),
(23, 14, 'coba', 'admin/coba', 'las la-igloo', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `status_sumbangan`
--
ALTER TABLE `status_sumbangan`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeks untuk tabel `sumbangan`
--
ALTER TABLE `sumbangan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `status_sumbangan`
--
ALTER TABLE `status_sumbangan`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sumbangan`
--
ALTER TABLE `sumbangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
