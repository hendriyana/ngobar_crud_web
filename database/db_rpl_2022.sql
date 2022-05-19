/*
 Navicat Premium Data Transfer

 Source Server         : LOKAL
 Source Server Type    : MySQL
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : db_rpl_2022

 Target Server Type    : MySQL
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 19/05/2022 08:14:35
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tabel_mahasiswa
-- ----------------------------
DROP TABLE IF EXISTS `tabel_mahasiswa`;
CREATE TABLE `tabel_mahasiswa`  (
  `id_mhs` int(10) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `jenis_kelamin` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nohp` varchar(13) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_mhs`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tabel_mahasiswa
-- ----------------------------
INSERT INTO `tabel_mahasiswa` VALUES (1, 'Afila Ansori', 'Bandung', 'M', '12345');
INSERT INTO `tabel_mahasiswa` VALUES (2, 'Adrian Sugandi', 'Bekasi', 'M', '11122');
INSERT INTO `tabel_mahasiswa` VALUES (3, 'Azzahra Ayu', 'Bandung', 'F', '88899');
INSERT INTO `tabel_mahasiswa` VALUES (4, 'Almira Darma Utami Fadill', 'Bandung', 'F', '99001');
INSERT INTO `tabel_mahasiswa` VALUES (5, 'Cirebon', 'M', '', '8888888888');
INSERT INTO `tabel_mahasiswa` VALUES (6, 'Bang Boril', 'Antapani', 'M', '44444');
INSERT INTO `tabel_mahasiswa` VALUES (7, 'Rivaldi Agustinus', 'Bandung', 'M', '66666');
INSERT INTO `tabel_mahasiswa` VALUES (8, 'Zhofron Al Fajr', 'Bandung', 'M', '5555555');

-- ----------------------------
-- Table structure for tbl_user
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `namalengkap` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES (1, 'salman', 'Salman Alfarizi', '123');
INSERT INTO `tbl_user` VALUES (2, 'afila', 'Afila Ansori', '456');

SET FOREIGN_KEY_CHECKS = 1;
