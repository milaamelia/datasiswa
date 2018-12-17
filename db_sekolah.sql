# Host: localhost  (Version: 5.5.5-10.1.9-MariaDB)
# Date: 2018-05-27 20:58:45
# Generator: MySQL-Front 5.3  (Build 4.205)

/*!40101 SET NAMES latin1 */;

#
# Structure for table "tb_guru"
#

DROP TABLE IF EXISTS `tb_guru`;
CREATE TABLE `tb_guru` (
  `kode_gru` varchar(11) NOT NULL DEFAULT '',
  `nama_guru` varchar(35) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `alamat` text,
  `no_tlpn` varchar(14) DEFAULT NULL,
  `foto_guru` text,
  PRIMARY KEY (`kode_gru`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tb_guru"
#

INSERT INTO `tb_guru` VALUES ('GU0001','Lala lulu ','lala@gmail.com','jagakarsa','09098989787987','distributor.png'),('GU0002','septiana Putri','septiana@gmail.com','Cilobak V','098767767555','000.jpg'),('GU0003','Guno Sayo','Guno@gmail.com','Gandul','089898','distributor.png'),('GU0004','Gono Yono','Gonu@gmail.com','gandul','09787676887','distributor.png');

#
# Structure for table "tb_kelas"
#

DROP TABLE IF EXISTS `tb_kelas`;
CREATE TABLE `tb_kelas` (
  `id_kelas` varchar(11) NOT NULL DEFAULT '',
  `nama_kelas` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tb_kelas"
#

INSERT INTO `tb_kelas` VALUES ('KTG0001','X   '),('KTG0002','XI a'),('KTG0003','XIb'),('KTG0004','XII a'),('KTG0005','Xiib'),('KTG0006','Xa '),('KTG0007','xc');

#
# Structure for table "tb_login"
#

DROP TABLE IF EXISTS `tb_login`;
CREATE TABLE `tb_login` (
  `Id_login` varchar(11) NOT NULL DEFAULT '',
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `akses` varchar(25) DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`Id_login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tb_login"
#

INSERT INTO `tb_login` VALUES ('US0001','admin','mila','admin','karyawan'),('US0002','Admin','','admin','permanen'),('US0003','Admin','','admin','Karyawan'),('US0004','Admin','','Admin','menager');

#
# Structure for table "tb_mapel"
#

DROP TABLE IF EXISTS `tb_mapel`;
CREATE TABLE `tb_mapel` (
  `id_mapel` varchar(11) NOT NULL DEFAULT '',
  `nama_mapel` varchar(35) NOT NULL,
  PRIMARY KEY (`id_mapel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tb_mapel"
#

INSERT INTO `tb_mapel` VALUES ('MAP0001','Bahasa Inggris'),('MAP0002','Matematika'),('MAP0003','Bahasa Indonesia'),('MAP0004','IPA'),('MAP0005','Bahasa jepang'),('MAP0006','Fisika'),('MAP0007','Bahasa jerman');

#
# Structure for table "tb_nilai"
#

DROP TABLE IF EXISTS `tb_nilai`;
CREATE TABLE `tb_nilai` (
  `id_nilai` varchar(11) NOT NULL DEFAULT '',
  `id_siswa` varchar(11) DEFAULT NULL,
  `id_kelas` varchar(11) DEFAULT NULL,
  `kode_gru` varchar(11) DEFAULT NULL,
  `id_mapel` varchar(11) DEFAULT NULL,
  `uas` decimal(10,0) DEFAULT NULL,
  `uts` decimal(10,0) NOT NULL,
  `harian` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tb_nilai"
#

INSERT INTO `tb_nilai` VALUES ('','','','','',0,0,0),('NIL0001','BK0001','KTG0004','GU0001','MAP0001',8,8,8),('NIL0002','BK0001','KTG0001','GU0001','MAP0001',9,9,9),('NIL0003','BK0002','KTG0002','-Pilih Guru','MAP0002',78,78,78),('NIL0004','BK0001','KTG0002','GU0001','MAP0002',89,89,89),('NIL0005','BK0002','KTG0002','GU0001','MAP0002',89,89,89),('NIL0006','BK0002','KTG0003','GU0001','MAP0002',45,45,45),('NIL0007','BK0003','KTG0001','GU0002','MAP0003',76,78,80),('NIL0008','BK0003','KTG0001','GU0003','MAP0003',80,80,75);

#
# Structure for table "tb_siswa"
#

DROP TABLE IF EXISTS `tb_siswa`;
CREATE TABLE `tb_siswa` (
  `id_siswa` varchar(11) NOT NULL DEFAULT '',
  `nama` varchar(25) NOT NULL,
  `id_kelas` varchar(11) DEFAULT NULL,
  `alamat` text NOT NULL,
  `email_siswa` varchar(30) DEFAULT NULL,
  `kota` varchar(15) DEFAULT NULL,
  `foto` text,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tb_siswa"
#

INSERT INTO `tb_siswa` VALUES ('BK0001','mila','KTG0003','cilobak','mila@gmail.com','Depok','000.jpg'),('BK0002','septi','KTG0001','Cilobak','sosno@gmail.com','Depok','user.png'),('BK0003','sasa Saiyo','KTG0002','gandul Raya','sasa12@gmail.com','Depok','Admin.png');
