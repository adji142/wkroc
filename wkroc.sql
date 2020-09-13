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

 Date: 13/09/2020 07:26:06
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
) ENGINE = InnoDB AUTO_INCREMENT = 99 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tnilai
-- ----------------------------
INSERT INTO `tnilai` VALUES (2, 2500000.00, 2999000.00, '', 1, 0.00, 1);
INSERT INTO `tnilai` VALUES (3, 2000000.00, 2499000.00, '', 2, 0.00, 1);
INSERT INTO `tnilai` VALUES (4, 1500000.00, 1999000.00, '', 3, 0.00, 1);
INSERT INTO `tnilai` VALUES (5, 1000000.00, 1499000.00, '', 4, 0.00, 1);
INSERT INTO `tnilai` VALUES (6, 0.00, 0.00, 'lecet parah', 1, 0.00, 2);
INSERT INTO `tnilai` VALUES (7, 0.00, 0.00, 'lecet ringan', 2, 0.00, 2);
INSERT INTO `tnilai` VALUES (8, 0.00, 0.00, 'mulus', 3, 0.00, 2);
INSERT INTO `tnilai` VALUES (9, 0.00, 0.00, 'hanya unit', 1, 0.00, 3);
INSERT INTO `tnilai` VALUES (10, 0.00, 0.00, 'unit + charger', 2, 0.00, 3);
INSERT INTO `tnilai` VALUES (11, 0.00, 0.00, 'fullset', 3, 0.00, 3);
INSERT INTO `tnilai` VALUES (12, 0.00, 0.00, '10', 1, 0.00, 4);
INSERT INTO `tnilai` VALUES (13, 0.00, 0.00, '11.6', 2, 0.00, 4);
INSERT INTO `tnilai` VALUES (14, 0.00, 0.00, '14', 3, 0.00, 4);
INSERT INTO `tnilai` VALUES (15, 0.00, 0.00, 'drop', 1, 0.00, 5);
INSERT INTO `tnilai` VALUES (16, 0.00, 0.00, '<1jam', 2, 0.00, 5);
INSERT INTO `tnilai` VALUES (17, 0.00, 0.00, '1jam-2jam', 3, 0.00, 5);
INSERT INTO `tnilai` VALUES (18, 0.00, 0.00, '2jam-3jam', 4, 0.00, 5);
INSERT INTO `tnilai` VALUES (19, 0.00, 0.00, '>3jam', 5, 0.00, 5);
INSERT INTO `tnilai` VALUES (20, 0.00, 0.00, 'single (intelHD)', 1, 0.00, 6);
INSERT INTO `tnilai` VALUES (21, 0.00, 0.00, 'dual (nvdia/radeon)', 2, 0.00, 6);
INSERT INTO `tnilai` VALUES (22, 0.00, 0.00, 'Intel Pentium G540', 1, 1.00, 7);
INSERT INTO `tnilai` VALUES (23, 0.00, 0.00, 'Intel Pentium G620', 1, 1.00, 7);
INSERT INTO `tnilai` VALUES (24, 0.00, 0.00, 'Intel Pentium G630', 1, 1.00, 7);
INSERT INTO `tnilai` VALUES (25, 0.00, 0.00, 'Intel Pentium G645', 1, 1.00, 7);
INSERT INTO `tnilai` VALUES (26, 0.00, 0.00, 'Intel Pentium G840', 1, 1.00, 7);
INSERT INTO `tnilai` VALUES (27, 0.00, 0.00, 'Intel Pentium G850', 1, 1.00, 7);
INSERT INTO `tnilai` VALUES (28, 0.00, 0.00, 'Intel Pentium G860', 1, 1.00, 7);
INSERT INTO `tnilai` VALUES (29, 0.00, 0.00, 'Intel Pentium G870', 1, 1.00, 7);
INSERT INTO `tnilai` VALUES (30, 0.00, 0.00, 'Intel Pentium G2010', 1, 1.00, 7);
INSERT INTO `tnilai` VALUES (31, 0.00, 0.00, 'Intel Pentium G2120', 1, 1.00, 7);
INSERT INTO `tnilai` VALUES (32, 0.00, 0.00, 'Intel Dual Core', 1, 1.00, 7);
INSERT INTO `tnilai` VALUES (33, 0.00, 0.00, 'Intel Core 2 Duo', 1, 1.00, 7);
INSERT INTO `tnilai` VALUES (34, 0.00, 0.00, 'Intel Celeron', 1, 1.00, 7);
INSERT INTO `tnilai` VALUES (35, 0.00, 0.00, 'Intel Core i3 2100', 2, 2.00, 7);
INSERT INTO `tnilai` VALUES (36, 0.00, 0.00, 'Intel Core i3 2120', 2, 2.00, 7);
INSERT INTO `tnilai` VALUES (37, 0.00, 0.00, 'Intel Core i3 3210', 2, 2.00, 7);
INSERT INTO `tnilai` VALUES (38, 0.00, 0.00, 'Intel Core i3 3220', 2, 2.00, 7);
INSERT INTO `tnilai` VALUES (39, 0.00, 0.00, 'Intel Core i3 540', 3, 3.00, 7);
INSERT INTO `tnilai` VALUES (40, 0.00, 0.00, 'Intel Core i3 550', 3, 3.00, 7);
INSERT INTO `tnilai` VALUES (41, 0.00, 0.00, 'Intel Core i5 2310', 3, 3.00, 7);
INSERT INTO `tnilai` VALUES (42, 0.00, 0.00, 'Intel Core i5 2320', 3, 3.00, 7);
INSERT INTO `tnilai` VALUES (43, 0.00, 0.00, 'Intel Core i5 2400', 3, 3.00, 7);
INSERT INTO `tnilai` VALUES (44, 0.00, 0.00, 'Intel Core i5 2500', 3, 3.00, 7);
INSERT INTO `tnilai` VALUES (45, 0.00, 0.00, 'Intel Core i5 2500K', 3, 3.00, 7);
INSERT INTO `tnilai` VALUES (46, 0.00, 0.00, 'Intel Core i5 3330', 3, 3.00, 7);
INSERT INTO `tnilai` VALUES (47, 0.00, 0.00, 'Intel Core i5 3450', 3, 3.00, 7);
INSERT INTO `tnilai` VALUES (48, 0.00, 0.00, 'Intel Core i5 3470', 3, 3.00, 7);
INSERT INTO `tnilai` VALUES (49, 0.00, 0.00, 'Intel Core i5 3550', 3, 3.00, 7);
INSERT INTO `tnilai` VALUES (50, 0.00, 0.00, 'Intel Core i5 3570', 3, 3.00, 7);
INSERT INTO `tnilai` VALUES (51, 0.00, 0.00, 'Intel Core i5 3570K', 3, 3.00, 7);
INSERT INTO `tnilai` VALUES (52, 0.00, 0.00, 'Intel Core i5 760', 3, 3.00, 7);
INSERT INTO `tnilai` VALUES (53, 0.00, 0.00, 'Intel Core i7 2600', 3, 3.00, 7);
INSERT INTO `tnilai` VALUES (54, 0.00, 0.00, 'Intel Core i7 2600K', 3, 3.00, 7);
INSERT INTO `tnilai` VALUES (55, 0.00, 0.00, 'Intel Core i7 2700K', 3, 3.00, 7);
INSERT INTO `tnilai` VALUES (56, 0.00, 0.00, 'Intel Core i7 3770', 3, 3.00, 7);
INSERT INTO `tnilai` VALUES (57, 0.00, 0.00, 'Intel Core i7 3770K', 3, 3.00, 7);
INSERT INTO `tnilai` VALUES (58, 0.00, 0.00, 'Intel Core i7 3820', 3, 3.00, 7);
INSERT INTO `tnilai` VALUES (59, 0.00, 0.00, 'Intel Core i7 3930K', 1, 1.00, 7);
INSERT INTO `tnilai` VALUES (60, 0.00, 0.00, 'Intel Core i7 3960X', 1, 1.00, 7);
INSERT INTO `tnilai` VALUES (61, 0.00, 0.00, 'AMD Sempron 140', 1, 1.00, 7);
INSERT INTO `tnilai` VALUES (62, 0.00, 0.00, 'AMD Sempron 145', 1, 1.00, 7);
INSERT INTO `tnilai` VALUES (63, 0.00, 0.00, 'AMD Sempron 190', 1, 1.00, 7);
INSERT INTO `tnilai` VALUES (64, 0.00, 0.00, 'AMD Sempron 130', 1, 1.00, 7);
INSERT INTO `tnilai` VALUES (65, 0.00, 0.00, 'AMD Liano Athlon II X4 631', 1, 1.00, 7);
INSERT INTO `tnilai` VALUES (66, 0.00, 0.00, 'AMD Athlon II X2 260', 1, 1.00, 7);
INSERT INTO `tnilai` VALUES (67, 0.00, 0.00, 'AMD Athlon II X2 270', 1, 1.00, 7);
INSERT INTO `tnilai` VALUES (68, 0.00, 0.00, 'AMD Athlon II X3 455', 1, 1.00, 7);
INSERT INTO `tnilai` VALUES (69, 0.00, 0.00, 'AMD Athlon II X4 641', 1, 1.00, 7);
INSERT INTO `tnilai` VALUES (70, 0.00, 0.00, 'AMD Athlon II X4 651', 1, 1.00, 7);
INSERT INTO `tnilai` VALUES (71, 0.00, 0.00, 'AMD Liano A4-X2 3300', 2, 2.00, 7);
INSERT INTO `tnilai` VALUES (72, 0.00, 0.00, 'AMD Liano A4-X2 3400', 2, 2.00, 7);
INSERT INTO `tnilai` VALUES (73, 0.00, 0.00, 'AMD Liano A6-3500', 2, 2.00, 7);
INSERT INTO `tnilai` VALUES (74, 0.00, 0.00, 'AMD Liano A6-3650', 2, 2.00, 7);
INSERT INTO `tnilai` VALUES (75, 0.00, 0.00, 'AMD Liano A6-3670K', 2, 2.00, 7);
INSERT INTO `tnilai` VALUES (76, 0.00, 0.00, 'AMD Liano A8-3850', 2, 2.00, 7);
INSERT INTO `tnilai` VALUES (77, 0.00, 0.00, 'AMD Liano A8-3870K', 2, 2.00, 7);
INSERT INTO `tnilai` VALUES (78, 0.00, 0.00, 'AMD Phenom II X2 555 BE', 2, 2.00, 7);
INSERT INTO `tnilai` VALUES (79, 0.00, 0.00, 'AMD A10-5800 K', 3, 3.00, 7);
INSERT INTO `tnilai` VALUES (80, 0.00, 0.00, 'AMD A4-5300', 3, 3.00, 7);
INSERT INTO `tnilai` VALUES (81, 0.00, 0.00, 'AMD A6-5400B', 3, 3.00, 7);
INSERT INTO `tnilai` VALUES (82, 0.00, 0.00, 'AMD A6-5400K', 3, 3.00, 7);
INSERT INTO `tnilai` VALUES (83, 0.00, 0.00, 'AMD A8-5600K', 3, 3.00, 7);
INSERT INTO `tnilai` VALUES (84, 0.00, 0.00, 'AMD FX 4100', 3, 3.00, 7);
INSERT INTO `tnilai` VALUES (85, 0.00, 0.00, 'AMD FX 4130', 3, 3.00, 7);
INSERT INTO `tnilai` VALUES (86, 0.00, 0.00, 'AMD FX 6100', 3, 3.00, 7);
INSERT INTO `tnilai` VALUES (87, 0.00, 0.00, 'AMD FX 8120', 3, 3.00, 7);
INSERT INTO `tnilai` VALUES (88, 0.00, 0.00, 'AMD FX 8150', 3, 3.00, 7);
INSERT INTO `tnilai` VALUES (89, 0.00, 0.00, 'AMD FX 4300', 3, 3.00, 7);
INSERT INTO `tnilai` VALUES (90, 0.00, 0.00, 'AMD FX 6300', 3, 3.00, 7);
INSERT INTO `tnilai` VALUES (91, 0.00, 0.00, 'AMD FX 8350', 3, 3.00, 7);
INSERT INTO `tnilai` VALUES (92, 0.00, 0.00, '<2GB', 1, 0.00, 8);
INSERT INTO `tnilai` VALUES (93, 0.00, 0.00, '2GB', 2, 0.00, 8);
INSERT INTO `tnilai` VALUES (94, 0.00, 0.00, '4GB', 3, 0.00, 8);
INSERT INTO `tnilai` VALUES (95, 0.00, 0.00, '8GB', 4, 0.00, 8);
INSERT INTO `tnilai` VALUES (96, 0.00, 0.00, '320GB', 1, 0.00, 9);
INSERT INTO `tnilai` VALUES (97, 0.00, 0.00, '500GB', 2, 0.00, 9);
INSERT INTO `tnilai` VALUES (98, 0.00, 0.00, '1000GB', 3, 0.00, 9);

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
