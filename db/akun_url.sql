-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.28-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for akun_url
CREATE DATABASE IF NOT EXISTS `akun_url` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `akun_url`;

-- Dumping structure for table akun_url.login
CREATE TABLE IF NOT EXISTS `login` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table akun_url.login: ~1 rows (approximately)
DELETE FROM `login`;
INSERT INTO `login` (`iduser`, `username`, `password`) VALUES
	(1, 'Admin', '1234');

-- Dumping structure for table akun_url.site_akun
CREATE TABLE IF NOT EXISTS `site_akun` (
  `idakun` int(11) NOT NULL AUTO_INCREMENT,
  `situs` varchar(100) DEFAULT NULL,
  `userakun` varchar(60) DEFAULT NULL,
  `passkun` varchar(15) DEFAULT NULL,
  `nama_lembaga` varchar(50) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp(),
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idakun`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table akun_url.site_akun: ~12 rows (approximately)
DELETE FROM `site_akun`;
INSERT INTO `site_akun` (`idakun`, `situs`, `userakun`, `passkun`, `nama_lembaga`, `jabatan`, `tanggal`, `email`) VALUES
	(1, 'https://sihapims2.kemkes.go.id/login', 'RR RSMP', 'mph12345', 'Pelayanan HIV/AIDS (PROGNAS)', 'Akun RR', '2023-09-18 10:42:23', 'rrmarinapermata@gmail.com'),
	(19, 'https://sihapims2.kemkes.go.id/login', 'Dokter RSMP ', 'mph12345', 'Pelayanan HIV/AIDS (PROGNAS)', 'Akun Dokter', '2023-09-26 08:40:01', ''),
	(20, 'https://sihapims2.kemkes.go.id/login', 'Lab RSMP', 'mph12345', 'Pelayanan HIV/AIDS (PROGNAS)', 'Akun Laboratorium', '2023-09-26 08:44:42', ''),
	(21, 'https://sihapims2.kemkes.go.id/login', 'Apotek RSMP', 'mph12345', 'Pelayanan HIV/AIDS (PROGNAS)', 'Akun Petugas Apotek', '2023-09-26 09:44:24', ''),
	(22, 'https://sihapims2.kemkes.go.id/login', 'Farmasi RSMP', 'mph12345', 'Pelayanan HIV/AIDS (PROGNAS)', 'Akun staff Farmasi', '2023-10-19 08:13:05', ''),
	(23, 'https://sihapims2.kemkes.go.id/login', 'Kepala Farmasi RSMP', 'mph12345', 'Pelayanan HIV/AIDS (PROGNAS)', 'Akun Kepala Farmasi', '2023-10-19 08:14:20', ''),
	(24, 'https://sihapims2.kemkes.go.id/login', 'Manajemen UPK RSMP', 'mph12345', 'Pelayanan HIV/AIDS (PROGNAS)', 'Akun Manajemen UPK', '2023-10-19 08:15:46', ''),
	(25, 'https://www.lab.com', 'Musdalifah96', 'RSMP16', 'Laboratorium', 'Akun Laboratorium', '2023-10-19 08:17:25', ''),
	(26, 'https://sigiziterpadu.kemkes.go.id/login_sisfo', 'marinapermata01', 'marinapermata01', 'kemkes gizi terpadu', 'akun utama gizi', '2023-10-19 08:19:14', ''),
	(27, 'https://mpdn.kemkes.go.id/masuk', 'rs.6310018.neo', '6310018', 'Pelayanan AMP/MPDN', 'Akun utama  AMP', '2023-10-19 08:21:39', ''),
	(28, 'https://siga.bkkbn.go.id/#/login', 'rsmarinapermata', '123456', 'Pelayanan PKBRS (New SIGA)', 'Kebidanan RSMP', '2023-10-19 08:22:56', ''),
	(29, 'https://linktr.ee/', 'rsumarinapermata@gmail.com', '@Rsmp2019', 'Instagram RS Marina Permata', 'Unit Marketing', '2023-11-02 11:34:31', 'rsumarinapermata@gmail.com');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
