/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100406
 Source Host           : localhost:3306
 Source Schema         : wkroc

 Target Server Type    : MySQL
 Target Server Version : 100406
 File Encoding         : 65001

 Date: 13/09/2020 00:15:08
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for permission
-- ----------------------------
DROP TABLE IF EXISTS `permission`;
CREATE TABLE `permission`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `permissionname` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ico` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `menusubmenu` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `multilevel` bit(1) NULL DEFAULT NULL,
  `separator` bit(1) NULL DEFAULT NULL,
  `order` int(255) NULL DEFAULT NULL,
  `status` bit(1) NULL DEFAULT NULL,
  `AllowMobile` bit(1) NULL DEFAULT NULL,
  `MobileRoute` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `MobileLogo` int(255) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of permission
-- ----------------------------
INSERT INTO `permission` VALUES (2, 'Daftar Alternatif', 'alternatif', 'fa-pencil-square-o', '0', b'0', b'0', 2, b'1', NULL, NULL, NULL);
INSERT INTO `permission` VALUES (3, 'Daftar Nilai', 'nilai', 'fa-pencil-square-o', '0', b'0', b'0', 3, b'1', NULL, NULL, NULL);
INSERT INTO `permission` VALUES (4, 'Nilai', 'nilai', 'fa-check-square-o', '0', b'0', b'0', 5, b'0', NULL, NULL, NULL);
INSERT INTO `permission` VALUES (5, 'Perhitungan Admin', 'proses', 'fa-spinner', '0', b'0', b'0', 6, b'1', NULL, NULL, NULL);
INSERT INTO `permission` VALUES (6, 'Daftar Jenis Usaha', 'jenisusaha', 'fa-bell-o', '0', b'0', b'0', 1, b'0', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for permissionrole
-- ----------------------------
DROP TABLE IF EXISTS `permissionrole`;
CREATE TABLE `permissionrole`  (
  `roleid` int(11) NOT NULL,
  `permissionid` int(11) NOT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of permissionrole
-- ----------------------------
INSERT INTO `permissionrole` VALUES (1, 1);
INSERT INTO `permissionrole` VALUES (1, 2);
INSERT INTO `permissionrole` VALUES (1, 3);
INSERT INTO `permissionrole` VALUES (1, 4);
INSERT INTO `permissionrole` VALUES (1, 5);
INSERT INTO `permissionrole` VALUES (2, 2);
INSERT INTO `permissionrole` VALUES (1, 6);
INSERT INTO `permissionrole` VALUES (2, 6);

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rolename` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'Admin');
INSERT INTO `roles` VALUES (2, 'Operator');

-- ----------------------------
-- Table structure for talternatif
-- ----------------------------
DROP TABLE IF EXISTS `talternatif`;
CREATE TABLE `talternatif`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NamaAlternatif` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of talternatif
-- ----------------------------
INSERT INTO `talternatif` VALUES (1, 'Harga');
INSERT INTO `talternatif` VALUES (2, 'Kondisi fisik');
INSERT INTO `talternatif` VALUES (3, 'Kelengkapan');
INSERT INTO `talternatif` VALUES (4, 'Ukuran layar');
INSERT INTO `talternatif` VALUES (5, 'Daya tahan baterai');
INSERT INTO `talternatif` VALUES (6, 'VGA');
INSERT INTO `talternatif` VALUES (7, 'Prosesor');
INSERT INTO `talternatif` VALUES (8, 'RAM');
INSERT INTO `talternatif` VALUES (9, 'Kapasitas penyimpanan');

-- ----------------------------
-- Table structure for tmerk
-- ----------------------------
DROP TABLE IF EXISTS `tmerk`;
CREATE TABLE `tmerk`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Merk` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `KodeKriteria` int(255) NOT NULL,
  `NamaKriteria` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Nilai` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tmerk
-- ----------------------------

-- ----------------------------
-- Table structure for tnilai
-- ----------------------------
DROP TABLE IF EXISTS `tnilai`;
CREATE TABLE `tnilai`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `batasatas` double(16, 2) NOT NULL,
  `batasbawah` double(16, 2) NOT NULL,
  `kondisilain` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `indexs` int(255) NOT NULL,
  `nilai` double(16, 2) NOT NULL,
  `kodealternatif` int(255) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tnilai
-- ----------------------------
INSERT INTO `tnilai` VALUES (2, 2500000.00, 2999000.00, '', 1, 0.00, 1);
INSERT INTO `tnilai` VALUES (3, 2000000.00, 2499000.00, '', 2, 0.00, 1);
INSERT INTO `tnilai` VALUES (4, 1500000.00, 1999000.00, '', 3, 0.00, 1);
INSERT INTO `tnilai` VALUES (5, 1000000.00, 1499000.00, '', 4, 0.00, 1);
INSERT INTO `tnilai` VALUES (6, 0.00, 0.00, 'lecet parah', 5, 0.00, 2);
INSERT INTO `tnilai` VALUES (7, 0.00, 0.00, 'lecet ringan', 6, 0.00, 2);
INSERT INTO `tnilai` VALUES (8, 0.00, 0.00, 'mulus', 7, 0.00, 2);
INSERT INTO `tnilai` VALUES (9, 0.00, 0.00, 'hanya unit', 8, 0.00, 3);
INSERT INTO `tnilai` VALUES (10, 0.00, 0.00, 'unit + charger', 9, 0.00, 3);
INSERT INTO `tnilai` VALUES (11, 0.00, 0.00, 'fullset', 10, 0.00, 3);
INSERT INTO `tnilai` VALUES (12, 0.00, 0.00, '10', 11, 0.00, 4);
INSERT INTO `tnilai` VALUES (13, 0.00, 0.00, '11.6', 12, 0.00, 4);
INSERT INTO `tnilai` VALUES (14, 0.00, 0.00, '14', 13, 0.00, 4);

-- ----------------------------
-- Table structure for userrole
-- ----------------------------
DROP TABLE IF EXISTS `userrole`;
CREATE TABLE `userrole`  (
  `userid` int(11) NOT NULL,
  `roleid` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`userid`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of userrole
-- ----------------------------
INSERT INTO `userrole` VALUES (14, 1);
INSERT INTO `userrole` VALUES (43, 2);
INSERT INTO `userrole` VALUES (52, 1);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `createdby` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `createdon` datetime(0) NULL DEFAULT NULL,
  `HakAkses` int(255) NULL DEFAULT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `verified` bit(1) NULL DEFAULT NULL,
  `ip` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `browser` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 44 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (14, 'admin', 'admin', 'a9bdd47d7321d4089b3b00561c9c621848bd6f6e2f745a53d54913d613789c23945b66de6ded1eb336a7d526f9349a9d964d6f6c3a40e2ac90b4b16c0121f7895Xg53McbkyQ/NmW60Sf4cu3wJsi/8cyZXxeXV7g6b04=', 'mnl', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (43, 'operator', 'Operator', 'a9bdd47d7321d4089b3b00561c9c621848bd6f6e2f745a53d54913d613789c23945b66de6ded1eb336a7d526f9349a9d964d6f6c3a40e2ac90b4b16c0121f7895Xg53McbkyQ/NmW60Sf4cu3wJsi/8cyZXxeXV7g6b04=', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
