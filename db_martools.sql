/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100316
 Source Host           : localhost:3306
 Source Schema         : db_martools

 Target Server Type    : MySQL
 Target Server Version : 100316
 File Encoding         : 65001

 Date: 25/07/2019 06:38:15
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for m_barang
-- ----------------------------
DROP TABLE IF EXISTS `m_barang`;
CREATE TABLE `m_barang`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_kategori` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_sub_kategori` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `qty_subang` int(11) NULL DEFAULT NULL,
  `qty_jkt` int(11) NULL DEFAULT NULL,
  `keterangan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of m_barang
-- ----------------------------
INSERT INTO `m_barang` VALUES (1, 'Minyak Angin Cap Kapak', '3', '1', 10, 10, 'OK');
INSERT INTO `m_barang` VALUES (2, 'Minyak Bimoli', '3', '1', 200, 690, 'OKS');
INSERT INTO `m_barang` VALUES (3, 'LC Cool V8', '4', '3', 40, 31, 'OKES');

-- ----------------------------
-- Table structure for m_instansi
-- ----------------------------
DROP TABLE IF EXISTS `m_instansi`;
CREATE TABLE `m_instansi`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_kategori_instansi` int(10) NULL DEFAULT NULL,
  `nama_instansi` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `telp` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `pic` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of m_instansi
-- ----------------------------
INSERT INTO `m_instansi` VALUES (2, 2, 'PT.Pindad', 'Jl.Nangka', '021345446', 'Putra');

-- ----------------------------
-- Table structure for m_jabatan
-- ----------------------------
DROP TABLE IF EXISTS `m_jabatan`;
CREATE TABLE `m_jabatan`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of m_jabatan
-- ----------------------------
INSERT INTO `m_jabatan` VALUES (1, 'IT Head');
INSERT INTO `m_jabatan` VALUES (3, 'HR Manager');
INSERT INTO `m_jabatan` VALUES (4, 'IT Staff');

-- ----------------------------
-- Table structure for m_kategori
-- ----------------------------
DROP TABLE IF EXISTS `m_kategori`;
CREATE TABLE `m_kategori`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of m_kategori
-- ----------------------------
INSERT INTO `m_kategori` VALUES (3, 'Minyak');
INSERT INTO `m_kategori` VALUES (4, 'Cairan');
INSERT INTO `m_kategori` VALUES (5, 'Padat');

-- ----------------------------
-- Table structure for m_kategori_instansi
-- ----------------------------
DROP TABLE IF EXISTS `m_kategori_instansi`;
CREATE TABLE `m_kategori_instansi`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama_kategori_instansi` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of m_kategori_instansi
-- ----------------------------
INSERT INTO `m_kategori_instansi` VALUES (2, 'Pemerintahan');
INSERT INTO `m_kategori_instansi` VALUES (3, 'Pendidikan');
INSERT INTO `m_kategori_instansi` VALUES (5, 'Sosial');

-- ----------------------------
-- Table structure for m_pegawai
-- ----------------------------
DROP TABLE IF EXISTS `m_pegawai`;
CREATE TABLE `m_pegawai`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `telp` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_jabatan` int(10) NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of m_pegawai
-- ----------------------------
INSERT INTO `m_pegawai` VALUES (1, '9999999', 'Admin', '0', '-', '-', 0, 'admin.png');
INSERT INTO `m_pegawai` VALUES (2, '8786724', 'Okki', '021843854', 'Jl.A', 'ok@mail.com', 3, '439429-download-free-my-chemical-romance-background-1920x1080.jpg');
INSERT INTO `m_pegawai` VALUES (3, '278424', 'Muryan', '02184375', 'Jl.Nangka', 'ryan@mail.com', 4, '19181952d241.jpg');

-- ----------------------------
-- Table structure for m_sub_kategori
-- ----------------------------
DROP TABLE IF EXISTS `m_sub_kategori`;
CREATE TABLE `m_sub_kategori`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(10) NULL DEFAULT NULL,
  `nama_sub_kategori` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of m_sub_kategori
-- ----------------------------
INSERT INTO `m_sub_kategori` VALUES (1, 3, 'Minyak Angin');
INSERT INTO `m_sub_kategori` VALUES (3, 4, 'LC Cool');
INSERT INTO `m_sub_kategori` VALUES (4, 5, 'Box');

-- ----------------------------
-- Table structure for m_user
-- ----------------------------
DROP TABLE IF EXISTS `m_user`;
CREATE TABLE `m_user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_pegawai` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `level` int(10) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of m_user
-- ----------------------------
INSERT INTO `m_user` VALUES (1, 'admin', 'YQ==', '1', 1);
INSERT INTO `m_user` VALUES (7, 'okki', 'YQ==', '2', 1);
INSERT INTO `m_user` VALUES (8, 'muryan', 'YQ==', '3', 2);

-- ----------------------------
-- Table structure for t_pengeluaran
-- ----------------------------
DROP TABLE IF EXISTS `t_pengeluaran`;
CREATE TABLE `t_pengeluaran`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `no_transaksi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_instansi` int(10) NULL DEFAULT NULL,
  `keterangan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `id_pegawai` int(10) NULL DEFAULT NULL,
  `date_assign` date NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 150 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_pengeluaran
-- ----------------------------
INSERT INTO `t_pengeluaran` VALUES (1, '201907230000002', 2, 'OK', 1, '2019-07-23');

-- ----------------------------
-- Table structure for t_pengeluaran_detail
-- ----------------------------
DROP TABLE IF EXISTS `t_pengeluaran_detail`;
CREATE TABLE `t_pengeluaran_detail`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `no_transaksi` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_barang` int(10) NULL DEFAULT NULL,
  `qty` int(10) NULL DEFAULT NULL,
  `source` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `keterangan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 36 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_pengeluaran_detail
-- ----------------------------
INSERT INTO `t_pengeluaran_detail` VALUES (1, '201907230000002', 1, 10, 'jkt', 'Buat make up');
INSERT INTO `t_pengeluaran_detail` VALUES (2, '201907230000002', 2, 10, 'jkt', 'Buat touch up');

SET FOREIGN_KEY_CHECKS = 1;
