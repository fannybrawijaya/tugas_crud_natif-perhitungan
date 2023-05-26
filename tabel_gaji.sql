# Host: localhost  (Version 5.5.5-10.4.24-MariaDB)
# Date: 2023-05-25 16:12:23
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "tabel_gaji"
#

DROP TABLE IF EXISTS `tabel_gaji`;
CREATE TABLE `tabel_gaji` (
  `id_gaji` int(11) NOT NULL AUTO_INCREMENT,
  `nama_karyawan` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `gaji` int(50) NOT NULL,
  `tunjangan` int(50) NOT NULL,
  `total_gaji` int(50) NOT NULL,
  PRIMARY KEY (`id_gaji`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

#
# Data for table "tabel_gaji"
#

INSERT INTO `tabel_gaji` VALUES (1,'fanny brawijaya','IT',2000000,500000,2500000),(2,'firda','Kepala Lembaga',2500000,1500000,0),(3,'agung','Kepala Lembaga Bidang',2000000,1000000,0),(4,'yogi','Staf Lembaga',1500000,500000,0);
