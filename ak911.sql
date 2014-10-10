-- --------------------------------------------------------
-- 主机:                           127.0.0.1
-- 服务器版本:                        5.5.20-log - MySQL Community Server (GPL)
-- 服务器操作系统:                      Win32
-- HeidiSQL 版本:                  8.2.0.4675
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 导出  表 ak911.xt_access 结构
CREATE TABLE IF NOT EXISTS `xt_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `pid` smallint(6) NOT NULL,
  `module` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在导出表  ak911.xt_access 的数据：136 rows
DELETE FROM `xt_access`;
/*!40000 ALTER TABLE `xt_access` DISABLE KEYS */;
INSERT INTO `xt_access` (`role_id`, `node_id`, `level`, `pid`, `module`) VALUES
	(2, 1, 1, 0, ''),
	(2, 40, 2, 1, ''),
	(2, 30, 2, 1, ''),
	(3, 1, 1, 0, ''),
	(2, 69, 2, 1, ''),
	(2, 50, 3, 40, ''),
	(3, 50, 3, 40, ''),
	(1, 50, 3, 40, ''),
	(3, 7, 2, 1, ''),
	(3, 39, 3, 30, ''),
	(2, 39, 3, 30, ''),
	(2, 49, 3, 30, ''),
	(4, 1, 1, 0, ''),
	(4, 2, 2, 1, ''),
	(4, 3, 2, 1, ''),
	(4, 4, 2, 1, ''),
	(4, 5, 2, 1, ''),
	(4, 6, 2, 1, ''),
	(4, 7, 2, 1, ''),
	(4, 11, 2, 1, ''),
	(5, 25, 1, 0, ''),
	(5, 51, 2, 25, ''),
	(1, 1, 1, 0, ''),
	(1, 39, 3, 30, ''),
	(1, 69, 2, 1, ''),
	(1, 30, 2, 1, ''),
	(1, 40, 2, 1, ''),
	(1, 49, 3, 30, ''),
	(3, 69, 2, 1, ''),
	(3, 30, 2, 1, ''),
	(3, 40, 2, 1, ''),
	(1, 37, 3, 30, ''),
	(1, 36, 3, 30, ''),
	(1, 35, 3, 30, ''),
	(1, 34, 3, 30, ''),
	(1, 33, 3, 30, ''),
	(1, 32, 3, 30, ''),
	(1, 31, 3, 30, ''),
	(2, 32, 3, 30, ''),
	(2, 31, 3, 30, ''),
	(7, 1, 1, 0, ''),
	(7, 69, 2, 1, ''),
	(7, 30, 2, 1, ''),
	(7, 40, 2, 1, ''),
	(7, 50, 3, 40, ''),
	(7, 39, 3, 30, ''),
	(7, 49, 3, 30, ''),
	(7, 84, 1, 0, ''),
	(7, 85, 1, 0, ''),
	(2, 84, 1, 0, ''),
	(2, 85, 1, 0, ''),
	(1, 84, 1, 0, ''),
	(1, 85, 1, 0, ''),
	(1, 7, 2, 1, ''),
	(1, 6, 2, 1, ''),
	(1, 2, 2, 1, ''),
	(1, 83, 2, 1, ''),
	(7, 7, 2, 1, ''),
	(7, 6, 2, 1, ''),
	(7, 2, 2, 1, ''),
	(7, 83, 2, 1, ''),
	(7, 37, 3, 30, ''),
	(7, 36, 3, 30, ''),
	(7, 35, 3, 30, ''),
	(7, 34, 3, 30, ''),
	(7, 33, 3, 30, ''),
	(7, 32, 3, 30, ''),
	(7, 31, 3, 30, ''),
	(2, 1, 1, 0, ''),
	(2, 40, 2, 1, ''),
	(2, 30, 2, 1, ''),
	(3, 1, 1, 0, ''),
	(2, 69, 2, 1, ''),
	(2, 50, 3, 40, ''),
	(3, 50, 3, 40, ''),
	(1, 50, 3, 40, ''),
	(3, 7, 2, 1, ''),
	(3, 39, 3, 30, ''),
	(2, 39, 3, 30, ''),
	(2, 49, 3, 30, ''),
	(4, 1, 1, 0, ''),
	(4, 2, 2, 1, ''),
	(4, 3, 2, 1, ''),
	(4, 4, 2, 1, ''),
	(4, 5, 2, 1, ''),
	(4, 6, 2, 1, ''),
	(4, 7, 2, 1, ''),
	(4, 11, 2, 1, ''),
	(5, 25, 1, 0, ''),
	(5, 51, 2, 25, ''),
	(1, 1, 1, 0, ''),
	(1, 39, 3, 30, ''),
	(1, 69, 2, 1, ''),
	(1, 30, 2, 1, ''),
	(1, 40, 2, 1, ''),
	(1, 49, 3, 30, ''),
	(3, 69, 2, 1, ''),
	(3, 30, 2, 1, ''),
	(3, 40, 2, 1, ''),
	(1, 37, 3, 30, ''),
	(1, 36, 3, 30, ''),
	(1, 35, 3, 30, ''),
	(1, 34, 3, 30, ''),
	(1, 33, 3, 30, ''),
	(1, 32, 3, 30, ''),
	(1, 31, 3, 30, ''),
	(2, 32, 3, 30, ''),
	(2, 31, 3, 30, ''),
	(7, 1, 1, 0, ''),
	(7, 69, 2, 1, ''),
	(7, 30, 2, 1, ''),
	(7, 40, 2, 1, ''),
	(7, 50, 3, 40, ''),
	(7, 39, 3, 30, ''),
	(7, 49, 3, 30, ''),
	(7, 84, 1, 0, ''),
	(7, 85, 1, 0, ''),
	(2, 84, 1, 0, ''),
	(2, 85, 1, 0, ''),
	(1, 84, 1, 0, ''),
	(1, 85, 1, 0, ''),
	(1, 7, 2, 1, ''),
	(1, 6, 2, 1, ''),
	(1, 2, 2, 1, ''),
	(1, 83, 2, 1, ''),
	(7, 7, 2, 1, ''),
	(7, 6, 2, 1, ''),
	(7, 2, 2, 1, ''),
	(7, 83, 2, 1, ''),
	(7, 37, 3, 30, ''),
	(7, 36, 3, 30, ''),
	(7, 35, 3, 30, ''),
	(7, 34, 3, 30, ''),
	(7, 33, 3, 30, ''),
	(7, 32, 3, 30, ''),
	(7, 31, 3, 30, '');
/*!40000 ALTER TABLE `xt_access` ENABLE KEYS */;


-- 导出  表 ak911.xt_address 结构
CREATE TABLE IF NOT EXISTS `xt_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `moren` int(11) NOT NULL COMMENT '是否为默认地址',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在导出表  ak911.xt_address 的数据：1 rows
DELETE FROM `xt_address`;
/*!40000 ALTER TABLE `xt_address` DISABLE KEYS */;
INSERT INTO `xt_address` (`id`, `uid`, `name`, `address`, `tel`, `moren`) VALUES
	(1, 1, '尼玛', '北京市', '13899999999', 0);
/*!40000 ALTER TABLE `xt_address` ENABLE KEYS */;


-- 导出  表 ak911.xt_bonus 结构
CREATE TABLE IF NOT EXISTS `xt_bonus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `user_id` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `did` int(11) NOT NULL,
  `s_date` int(11) NOT NULL,
  `e_date` int(11) NOT NULL,
  `b0` decimal(12,2) NOT NULL,
  `b1` decimal(12,2) NOT NULL,
  `b2` decimal(12,2) NOT NULL,
  `b3` decimal(12,2) NOT NULL,
  `b4` decimal(12,2) NOT NULL,
  `b5` decimal(12,2) NOT NULL,
  `b6` decimal(12,2) NOT NULL,
  `b7` decimal(12,2) NOT NULL,
  `b8` decimal(12,2) NOT NULL,
  `b9` decimal(12,2) NOT NULL,
  `b10` decimal(12,2) NOT NULL,
  `b11` decimal(12,2) NOT NULL,
  `b12` decimal(12,2) NOT NULL,
  `b13` decimal(12,2) NOT NULL,
  `b14` decimal(12,2) NOT NULL,
  `b15` decimal(12,2) NOT NULL,
  `b16` decimal(12,2) NOT NULL,
  `b17` decimal(12,2) NOT NULL,
  `b18` decimal(12,2) NOT NULL,
  `b19` decimal(12,2) NOT NULL,
  `b20` decimal(12,2) NOT NULL,
  `b25` decimal(12,2) NOT NULL,
  `encash_l` int(11) NOT NULL,
  `encash_r` int(11) NOT NULL,
  `encash` int(11) NOT NULL,
  `is_count_b` int(11) NOT NULL,
  `is_count_c` int(11) NOT NULL,
  `is_pay` int(11) NOT NULL,
  `u_level` int(11) NOT NULL,
  `type` smallint(2) NOT NULL DEFAULT '0',
  `additional` varchar(50) NOT NULL COMMENT '额外奖',
  `encourage` varchar(50) NOT NULL COMMENT '阶段鼓励奖',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2274 DEFAULT CHARSET=utf8;

-- 正在导出表  ak911.xt_bonus 的数据：0 rows
DELETE FROM `xt_bonus`;
/*!40000 ALTER TABLE `xt_bonus` DISABLE KEYS */;
/*!40000 ALTER TABLE `xt_bonus` ENABLE KEYS */;


-- 导出  表 ak911.xt_chongzhi 结构
CREATE TABLE IF NOT EXISTS `xt_chongzhi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `user_id` varchar(50) COLLATE utf8_bin NOT NULL,
  `epoint` decimal(12,2) NOT NULL,
  `huikuan` decimal(12,2) NOT NULL,
  `zhuanghao` int(11) NOT NULL,
  `rdt` int(11) NOT NULL,
  `pdt` int(11) NOT NULL DEFAULT '0',
  `is_pay` smallint(2) NOT NULL,
  `stype` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=93 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- 正在导出表  ak911.xt_chongzhi 的数据：0 rows
DELETE FROM `xt_chongzhi`;
/*!40000 ALTER TABLE `xt_chongzhi` DISABLE KEYS */;
/*!40000 ALTER TABLE `xt_chongzhi` ENABLE KEYS */;


-- 导出  表 ak911.xt_cody 结构
CREATE TABLE IF NOT EXISTS `xt_cody` (
  `c_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `cody_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- 正在导出表  ak911.xt_cody 的数据：30 rows
DELETE FROM `xt_cody`;
/*!40000 ALTER TABLE `xt_cody` DISABLE KEYS */;
INSERT INTO `xt_cody` (`c_id`, `cody_name`) VALUES
	(1, 'profile'),
	(2, 'password'),
	(3, 'Jj_FA'),
	(4, '4'),
	(5, '5'),
	(6, '6'),
	(7, '7'),
	(8, '8'),
	(9, '9'),
	(10, '10'),
	(11, '11'),
	(12, '12'),
	(13, '13'),
	(14, '14'),
	(15, '15'),
	(16, '16'),
	(17, '17'),
	(18, '18'),
	(19, '19'),
	(20, '20'),
	(21, '21'),
	(22, '22'),
	(23, '23'),
	(24, '24'),
	(25, '25'),
	(26, '26'),
	(27, '27'),
	(28, '28'),
	(29, '29'),
	(30, '30');
/*!40000 ALTER TABLE `xt_cody` ENABLE KEYS */;


-- 导出  表 ak911.xt_cptype 结构
CREATE TABLE IF NOT EXISTS `xt_cptype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tpname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `b_id` int(11) NOT NULL DEFAULT '0',
  `s_id` int(11) NOT NULL DEFAULT '0',
  `t_pai` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在导出表  ak911.xt_cptype 的数据：3 rows
DELETE FROM `xt_cptype`;
/*!40000 ALTER TABLE `xt_cptype` DISABLE KEYS */;
INSERT INTO `xt_cptype` (`id`, `tpname`, `b_id`, `s_id`, `t_pai`, `status`) VALUES
	(1, '家用电器', 0, 0, 0, 0),
	(2, '食品', 0, 0, 0, 0),
	(3, '生活用品', 0, 0, 0, 0);
/*!40000 ALTER TABLE `xt_cptype` ENABLE KEYS */;


-- 导出  表 ak911.xt_fck 结构
CREATE TABLE IF NOT EXISTS `xt_fck` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account` varchar(64) DEFAULT NULL,
  `bind_account` varchar(50) DEFAULT NULL,
  `new_login_time` int(11) NOT NULL DEFAULT '0',
  `new_login_ip` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_login_time` int(11) unsigned DEFAULT '0',
  `last_login_ip` varchar(40) DEFAULT NULL,
  `login_count` mediumint(8) unsigned DEFAULT '0',
  `verify` varchar(32) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `create_time` int(11) unsigned NOT NULL,
  `update_time` int(11) unsigned DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `type_id` tinyint(2) unsigned DEFAULT '0',
  `info` text,
  `name` varchar(25) DEFAULT NULL,
  `dept_id` smallint(3) DEFAULT NULL,
  `user_id` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL COMMENT '用户编号',
  `user_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL COMMENT '银行开户名',
  `password` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '一级密码',
  `pwd1` varchar(50) DEFAULT NULL COMMENT '一级密码不加密',
  `passopen` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '二级密码',
  `pwd2` varchar(50) DEFAULT NULL COMMENT '二级密码不加密',
  `passopentwo` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL COMMENT '三级密码',
  `pwd3` varchar(50) DEFAULT NULL COMMENT '三级密码不加密',
  `nickname` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '昵称',
  `qq` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'QQ',
  `bank_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '开户银行',
  `bank_card` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '银行卡号',
  `bank_province` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '开户银行所在省',
  `bank_city` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '开户银行所在城市',
  `bank_address` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '支行地址',
  `user_code` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '身份证',
  `user_address` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '联系地址',
  `user_post` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '联系方式',
  `user_tel` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '电话',
  `user_phone` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '手机',
  `rdt` int(11) NOT NULL COMMENT '注册时间',
  `treeplace` int(11) DEFAULT NULL COMMENT '区分左(中)右',
  `father_id` int(11) NOT NULL COMMENT '父节点',
  `father_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '父名',
  `re_id` int(11) NOT NULL COMMENT '推荐ID',
  `re_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '推荐人名称',
  `is_pay` int(11) NOT NULL COMMENT '是否开通(0,1)',
  `is_lock` int(11) NOT NULL COMMENT '是否锁定(0,1)',
  `shoplx` int(11) NOT NULL COMMENT '报单中心ID',
  `shop_a` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '//中心所在省',
  `shop_b` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '//中心所在县',
  `is_agent` int(11) NOT NULL COMMENT '报单中心(0,1,2)',
  `agent_max` decimal(12,2) NOT NULL COMMENT '申请报单总金额',
  `agent_use` decimal(12,2) NOT NULL COMMENT '奖金币',
  `agent_cash` decimal(12,2) NOT NULL COMMENT '报单币',
  `agent_kt` decimal(12,2) NOT NULL DEFAULT '0.00',
  `agent_xf` decimal(12,2) NOT NULL DEFAULT '0.00',
  `agent_cf` decimal(12,2) NOT NULL DEFAULT '0.00',
  `agent_gp` decimal(12,2) NOT NULL DEFAULT '0.00',
  `agent_zz` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '金币',
  `gp_num` int(11) NOT NULL DEFAULT '0',
  `lssq` decimal(12,2) NOT NULL,
  `zsq` decimal(12,2) NOT NULL,
  `adt` int(11) NOT NULL COMMENT '申请成报单中心时间',
  `l` int(11) NOT NULL COMMENT '左边总人数',
  `r` int(11) NOT NULL COMMENT '右边总人数',
  `benqi_l` int(11) NOT NULL COMMENT '本期左区新增',
  `benqi_r` int(11) NOT NULL COMMENT '本期右区新增',
  `shangqi_l` int(11) NOT NULL COMMENT '上期左区剩余',
  `shangqi_r` int(11) NOT NULL COMMENT '上期右区剩余',
  `peng_num` int(11) NOT NULL DEFAULT '0',
  `u_level` int(11) NOT NULL COMMENT '等级(会员级别)',
  `is_boss` int(11) NOT NULL COMMENT '管理人为1,其它为0',
  `idt` int(11) NOT NULL,
  `pdt` int(11) NOT NULL COMMENT '开通时间',
  `re_level` int(11) NOT NULL COMMENT '相对于推的代数',
  `p_level` int(11) NOT NULL COMMENT '绝对层数',
  `re_path` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '推荐的路径',
  `p_path` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '自已的路径',
  `is_del` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL COMMENT '隶属报单ID',
  `shop_name` varchar(50) NOT NULL,
  `b0` decimal(12,2) NOT NULL COMMENT '每期总资金',
  `b1` decimal(12,2) NOT NULL COMMENT '奖1',
  `b2` decimal(12,2) NOT NULL COMMENT '奖2',
  `b3` decimal(12,2) NOT NULL COMMENT '奖3',
  `b4` decimal(12,2) NOT NULL COMMENT '奖4',
  `b5` decimal(12,2) NOT NULL COMMENT '奖5',
  `b6` decimal(12,2) NOT NULL COMMENT '奖6',
  `b7` decimal(12,2) NOT NULL COMMENT '奖7',
  `b8` decimal(12,2) NOT NULL COMMENT '奖8',
  `b9` decimal(12,2) NOT NULL COMMENT '奖9',
  `b10` decimal(12,2) NOT NULL COMMENT '奖10',
  `b11` decimal(12,2) NOT NULL COMMENT '奖11',
  `b12` decimal(12,2) NOT NULL COMMENT '奖12',
  `b13` decimal(12,2) NOT NULL,
  `b14` decimal(12,2) NOT NULL,
  `b15` decimal(12,2) NOT NULL,
  `b16` decimal(12,2) NOT NULL,
  `b17` decimal(12,2) NOT NULL,
  `b18` decimal(12,2) NOT NULL,
  `b19` decimal(12,2) NOT NULL,
  `b20` decimal(12,2) NOT NULL,
  `b25` decimal(12,2) NOT NULL,
  `wlf` int(11) NOT NULL COMMENT '网络费',
  `wlf_money` decimal(12,2) NOT NULL DEFAULT '0.00',
  `cpzj` decimal(12,2) NOT NULL COMMENT '注册金额',
  `zjj` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '总奖金',
  `re_money` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '推荐总注册金额',
  `cz_epoint` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '冲值总金额',
  `lr` int(11) NOT NULL COMMENT '中间总单数',
  `shangqi_lr` int(11) NOT NULL COMMENT '中间上期剩余单数',
  `benqi_lr` int(11) NOT NULL COMMENT '中间本期单数',
  `user_type` varchar(200) NOT NULL COMMENT '多线登录限制',
  `re_peat_money` decimal(12,2) NOT NULL COMMENT 'x',
  `re_nums` smallint(4) NOT NULL DEFAULT '0' COMMENT 'x',
  `duipeng` decimal(12,2) NOT NULL,
  `_times` int(11) NOT NULL,
  `fanli` int(11) NOT NULL,
  `fanli_time` int(11) NOT NULL,
  `fanli_num` int(11) NOT NULL,
  `is_fenh` smallint(2) NOT NULL,
  `open` smallint(2) NOT NULL,
  `f4` int(11) NOT NULL DEFAULT '0',
  `new_agent` smallint(1) NOT NULL DEFAULT '0' COMMENT '//是否新服务中心',
  `day_feng` decimal(12,2) NOT NULL DEFAULT '0.00',
  `get_date` int(11) DEFAULT '0',
  `get_numb` int(11) DEFAULT '0',
  `is_jb` int(11) DEFAULT '0',
  `sq_jb` int(11) DEFAULT '0',
  `jb_sdate` int(11) DEFAULT '0',
  `jb_idate` int(11) DEFAULT '0',
  `man_ceng` int(11) NOT NULL DEFAULT '0' COMMENT '//满层数',
  `prem` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '//权限',
  `wang_j` smallint(1) NOT NULL DEFAULT '0' COMMENT '//结构图',
  `wang_t` smallint(1) NOT NULL DEFAULT '0' COMMENT '//推荐图',
  `get_level` int(11) NOT NULL DEFAULT '0',
  `is_xf` smallint(11) NOT NULL DEFAULT '0',
  `xf_money` decimal(12,2) NOT NULL DEFAULT '0.00',
  `is_zy` int(11) NOT NULL DEFAULT '0',
  `zyi_date` int(11) NOT NULL DEFAULT '0',
  `zyq_date` int(11) NOT NULL DEFAULT '0',
  `mon_get` decimal(12,2) NOT NULL DEFAULT '0.00',
  `xy_money` decimal(12,2) NOT NULL DEFAULT '0.00',
  `down_num` int(11) NOT NULL DEFAULT '0',
  `u_pai` int(11) NOT NULL DEFAULT '0',
  `n_pai` int(11) NOT NULL DEFAULT '0',
  `ok_pay` int(11) NOT NULL DEFAULT '0',
  `wenti` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `wenti_dan` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `is_tj` int(11) NOT NULL DEFAULT '0',
  `re_f4` int(11) NOT NULL DEFAULT '0',
  `rifenhong` smallint(6) NOT NULL DEFAULT '1' COMMENT '日分红开关',
  `jili` smallint(6) NOT NULL DEFAULT '1',
  `live_gupiao` bigint(20) NOT NULL DEFAULT '0',
  `all_in_gupiao` bigint(20) NOT NULL DEFAULT '0',
  `all_out_gupiao` bigint(20) NOT NULL DEFAULT '0',
  `wt1` varchar(255) NOT NULL,
  `wt2` varchar(255) NOT NULL,
  `da1` varchar(255) NOT NULL,
  `da2` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1636 DEFAULT CHARSET=utf8;

-- 正在导出表  ak911.xt_fck 的数据：1 rows
DELETE FROM `xt_fck`;
/*!40000 ALTER TABLE `xt_fck` DISABLE KEYS */;
INSERT INTO `xt_fck` (`id`, `account`, `bind_account`, `new_login_time`, `new_login_ip`, `last_login_time`, `last_login_ip`, `login_count`, `verify`, `email`, `remark`, `create_time`, `update_time`, `status`, `type_id`, `info`, `name`, `dept_id`, `user_id`, `user_name`, `password`, `pwd1`, `passopen`, `pwd2`, `passopentwo`, `pwd3`, `nickname`, `qq`, `bank_name`, `bank_card`, `bank_province`, `bank_city`, `bank_address`, `user_code`, `user_address`, `user_post`, `user_tel`, `user_phone`, `rdt`, `treeplace`, `father_id`, `father_name`, `re_id`, `re_name`, `is_pay`, `is_lock`, `shoplx`, `shop_a`, `shop_b`, `is_agent`, `agent_max`, `agent_use`, `agent_cash`, `agent_kt`, `agent_xf`, `agent_cf`, `agent_gp`, `agent_zz`, `gp_num`, `lssq`, `zsq`, `adt`, `l`, `r`, `benqi_l`, `benqi_r`, `shangqi_l`, `shangqi_r`, `peng_num`, `u_level`, `is_boss`, `idt`, `pdt`, `re_level`, `p_level`, `re_path`, `p_path`, `is_del`, `shop_id`, `shop_name`, `b0`, `b1`, `b2`, `b3`, `b4`, `b5`, `b6`, `b7`, `b8`, `b9`, `b10`, `b11`, `b12`, `b13`, `b14`, `b15`, `b16`, `b17`, `b18`, `b19`, `b20`, `b25`, `wlf`, `wlf_money`, `cpzj`, `zjj`, `re_money`, `cz_epoint`, `lr`, `shangqi_lr`, `benqi_lr`, `user_type`, `re_peat_money`, `re_nums`, `duipeng`, `_times`, `fanli`, `fanli_time`, `fanli_num`, `is_fenh`, `open`, `f4`, `new_agent`, `day_feng`, `get_date`, `get_numb`, `is_jb`, `sq_jb`, `jb_sdate`, `jb_idate`, `man_ceng`, `prem`, `wang_j`, `wang_t`, `get_level`, `is_xf`, `xf_money`, `is_zy`, `zyi_date`, `zyq_date`, `mon_get`, `xy_money`, `down_num`, `u_pai`, `n_pai`, `ok_pay`, `wenti`, `wenti_dan`, `is_tj`, `re_f4`, `rifenhong`, `jili`, `live_gupiao`, `all_in_gupiao`, `all_out_gupiao`, `wt1`, `wt2`, `da1`, `da2`) VALUES
	(1, 'admin', '0', 1412863865, '113.240.84.145', 1412853437, '113.240.84.145', 0, '1', NULL, '00', 0, 0, 1, 0, '0', '100000', 0, '100000', '11111', '9d277cc694bdf3bf2e303dbd11f72d35', 'ylx790629', 'afe5e6ee86844b2fecad066183e39ff8', 'ylx050311', 'd41d8cd98f00b204e9800998ecf8427e', '', '管理员', '11111', '工商银行', '222222', '11111', '11111', '11111', '11111', '88888', 'QQ126163@QQ.com', '633144', '0', 1295884800, 0, 0, '0', 0, '0', 1, 0, 1, '全国总代理', '全国总代理', 2, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 0.00, 1317024831, 0, 0, 0, 0, 0, 0, 0, 5, 2, 0, 0, 0, 0, ',', ',', 0, 0, '0', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0.00, 4800.00, 0.00, 0.00, 0.00, 0, 0, 0, '8bd4ec0a4e78148b4a1ef5914dfcf782', 0.00, 0, 0.00, 0, 0, 1412910948, 0, 0, 0, 16, 0, 0.00, 1412870400, 0, 1, 0, 0, 1323230473, 0, ',1,2,3,4,16,17,5,14,6,7,8,15,9,10,11,12,13,', 0, 0, 0, 0, 0.00, 0, 0, 0, 919379.05, 0.00, 0, 1, 1, 1, '你爱人叫什么名字？', '123', 0, 0, 1, 1, 1000000, 0, 0, '1', '', '1', '');
/*!40000 ALTER TABLE `xt_fck` ENABLE KEYS */;


-- 导出  表 ak911.xt_fck_shop 结构
CREATE TABLE IF NOT EXISTS `xt_fck_shop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `did` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `price` decimal(12,2) NOT NULL,
  `create_time` int(11) NOT NULL,
  `is_pay` smallint(1) NOT NULL DEFAULT '0',
  `pdt` int(11) NOT NULL,
  `type` smallint(2) NOT NULL DEFAULT '0',
  `num` int(11) NOT NULL DEFAULT '1',
  `content` text NOT NULL,
  `p_dt` int(11) NOT NULL COMMENT '退货时间',
  `p_is_pay` smallint(2) NOT NULL DEFAULT '0' COMMENT '状态',
  `out_type` smallint(2) NOT NULL DEFAULT '0' COMMENT '0为未评论，1为已评论',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2533 DEFAULT CHARSET=utf8;

-- 正在导出表  ak911.xt_fck_shop 的数据：3 rows
DELETE FROM `xt_fck_shop`;
/*!40000 ALTER TABLE `xt_fck_shop` DISABLE KEYS */;
INSERT INTO `xt_fck_shop` (`id`, `did`, `uid`, `price`, `create_time`, `is_pay`, `pdt`, `type`, `num`, `content`, `p_dt`, `p_is_pay`, `out_type`) VALUES
	(2527, 33, 4054, 20.00, 1296203686, 1, 1296289294, 2, 1, 'fff', 1296289467, 3, 0),
	(2528, 33, 4054, 20.00, 1296203703, 1, 1296289294, 2, 1, '', 1296289462, 3, 1),
	(2532, 31, 1, 68.00, 1296288802, 1, 1296288969, 2, 3, '44444', 1296289223, 3, 1);
/*!40000 ALTER TABLE `xt_fck_shop` ENABLE KEYS */;


-- 导出  表 ak911.xt_fee 结构
CREATE TABLE IF NOT EXISTS `xt_fee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `i1` int(12) DEFAULT '0',
  `i2` int(12) DEFAULT '0',
  `i3` int(12) DEFAULT '0',
  `i4` int(12) DEFAULT '0',
  `i5` int(12) DEFAULT '0',
  `i6` int(12) DEFAULT '0',
  `i7` int(12) DEFAULT '0',
  `i8` int(12) DEFAULT '0',
  `i9` int(12) DEFAULT '0',
  `i10` int(12) DEFAULT '0',
  `s1` varchar(200) DEFAULT NULL,
  `s2` varchar(200) DEFAULT NULL,
  `s3` varchar(200) DEFAULT NULL,
  `s4` varchar(200) DEFAULT NULL,
  `s5` varchar(200) DEFAULT NULL,
  `s6` varchar(200) DEFAULT NULL,
  `s7` varchar(200) DEFAULT NULL,
  `s8` varchar(200) DEFAULT NULL,
  `s9` varchar(200) DEFAULT NULL,
  `s10` varchar(200) DEFAULT NULL,
  `s11` varchar(200) DEFAULT NULL,
  `s12` varchar(200) DEFAULT NULL,
  `s13` varchar(200) DEFAULT NULL,
  `s14` varchar(200) DEFAULT NULL,
  `s15` varchar(200) DEFAULT NULL,
  `s16` varchar(200) DEFAULT NULL,
  `s17` varchar(200) DEFAULT NULL,
  `s18` varchar(200) DEFAULT NULL,
  `s19` varchar(200) DEFAULT NULL,
  `s20` varchar(200) DEFAULT NULL,
  `str1` varchar(200) DEFAULT NULL,
  `str2` varchar(200) DEFAULT NULL,
  `str3` varchar(200) DEFAULT NULL,
  `str4` varchar(200) DEFAULT NULL,
  `str5` varchar(200) DEFAULT NULL,
  `str6` varchar(200) DEFAULT NULL,
  `str7` varchar(200) DEFAULT NULL,
  `str8` varchar(200) DEFAULT NULL,
  `str9` varchar(200) DEFAULT NULL,
  `str10` varchar(200) DEFAULT NULL,
  `str11` varchar(200) DEFAULT NULL,
  `str12` varchar(200) DEFAULT NULL,
  `str13` varchar(200) DEFAULT NULL,
  `str14` varchar(200) DEFAULT NULL,
  `str15` varchar(200) DEFAULT NULL,
  `str16` varchar(200) DEFAULT NULL,
  `str17` varchar(200) DEFAULT NULL,
  `str18` varchar(200) DEFAULT NULL,
  `str19` varchar(200) DEFAULT NULL,
  `str20` varchar(200) DEFAULT NULL,
  `str21` varchar(200) DEFAULT NULL,
  `str22` varchar(200) DEFAULT NULL,
  `str23` varchar(200) DEFAULT NULL,
  `str24` varchar(200) DEFAULT NULL,
  `str25` varchar(200) DEFAULT NULL,
  `str26` varchar(200) DEFAULT NULL,
  `str27` varchar(200) DEFAULT NULL,
  `str28` varchar(200) DEFAULT NULL,
  `str29` varchar(200) DEFAULT NULL,
  `str30` varchar(200) DEFAULT NULL,
  `str99` text NOT NULL,
  `create_time` int(11) DEFAULT NULL COMMENT '清空数据时间截',
  `gp_one` decimal(10,2) NOT NULL DEFAULT '0.00',
  `gp_kg` smallint(6) NOT NULL DEFAULT '1',
  `fgq` int(11) NOT NULL DEFAULT '0',
  `gp_perc` decimal(5,1) NOT NULL DEFAULT '0.0',
  `zjyl` decimal(10,1) NOT NULL DEFAULT '0.0' COMMENT '总交易量',
  `cha_zjyl` decimal(10,1) NOT NULL DEFAULT '0.0' COMMENT '差值',
  `zl` decimal(10,1) NOT NULL DEFAULT '0.0' COMMENT '总股票数量',
  `zhang_one` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '涨价幅度',
  `gpzjgl` decimal(10,1) NOT NULL DEFAULT '0.0' COMMENT '上涨股票量条件',
  `zhang_nums` smallint(6) NOT NULL DEFAULT '0' COMMENT '涨价次数',
  `open` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- 正在导出表  ak911.xt_fee 的数据：1 rows
DELETE FROM `xt_fee`;
/*!40000 ALTER TABLE `xt_fee` DISABLE KEYS */;
INSERT INTO `xt_fee` (`id`, `i1`, `i2`, `i3`, `i4`, `i5`, `i6`, `i7`, `i8`, `i9`, `i10`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `s9`, `s10`, `s11`, `s12`, `s13`, `s14`, `s15`, `s16`, `s17`, `s18`, `s19`, `s20`, `str1`, `str2`, `str3`, `str4`, `str5`, `str6`, `str7`, `str8`, `str9`, `str10`, `str11`, `str12`, `str13`, `str14`, `str15`, `str16`, `str17`, `str18`, `str19`, `str20`, `str21`, `str22`, `str23`, `str24`, `str25`, `str26`, `str27`, `str28`, `str29`, `str30`, `str99`, `create_time`, `gp_one`, `gp_kg`, `fgq`, `gp_perc`, `zjyl`, `cha_zjyl`, `zl`, `zhang_one`, `gpzjgl`, `zhang_nums`, `open`) VALUES
	(1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, '12|14|16|18|20', '1|2|4|8|16', '10|5|3', '5|10|15|20|25', '3|5|7|9|11', '60', '10', '0', '300|600|1200|2400|4800', '一星|二星|三星|四星|五星', '5|5|5|5|5', '2', '40', '3|5|7|9|11', '10|9|8|7|6', '100', '欧金事业欢迎您！', '分红奖|推荐奖|平衡奖|信任奖|激励奖|见点奖|领导奖|交易奖|服务费|管理费', '农业银行|工商银行', '1|2|3|4|5', '3107356403', '50', '0', '3107356403', '21:00', '0', '10', '财付通QQ', '财付通户名', '直推奖金百分比', '虚拟对碰奖百分比', '对碰奖百分比', '见单奖', '领导奖', '领导奖封顶', 'C网见单金额 1级|2级', '', '实收达到| 税费| 进网平台费', '开户银行', '', '/A136/Public/Images/01.jpg', '/A136/Public/Images/02.jpg', '/A136/Public/Images/03.jpg', '', '', '', '', '恭喜您注册成功！欧金事业，创造梦想的舞台！\r\n', '农业银行|工商银行|建设银行行|财付通|支付宝', '', '你爱人叫什么名字？|你家养有什么宠物？|你的生日是多少？|你最喜欢什么？|你的出生地是？', 1412910948, 1.00, 0, 0, 0.0, 0.0, 0.0, 1000000.0, 0.10, 100000.0, 0, 0);
/*!40000 ALTER TABLE `xt_fee` ENABLE KEYS */;


-- 导出  表 ak911.xt_fenhong 结构
CREATE TABLE IF NOT EXISTS `xt_fenhong` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `user_id` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `f_num` int(11) NOT NULL DEFAULT '0',
  `f_money` decimal(12,2) NOT NULL DEFAULT '0.00',
  `pdt` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在导出表  ak911.xt_fenhong 的数据：0 rows
DELETE FROM `xt_fenhong`;
/*!40000 ALTER TABLE `xt_fenhong` DISABLE KEYS */;
/*!40000 ALTER TABLE `xt_fenhong` ENABLE KEYS */;


-- 导出  表 ak911.xt_form 结构
CREATE TABLE IF NOT EXISTS `xt_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_time` int(11) unsigned NOT NULL,
  `update_time` int(11) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  `baile` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=utf8;

-- 正在导出表  ak911.xt_form 的数据：5 rows
DELETE FROM `xt_form`;
/*!40000 ALTER TABLE `xt_form` DISABLE KEYS */;
INSERT INTO `xt_form` (`id`, `title`, `content`, `user_id`, `create_time`, `update_time`, `status`, `baile`, `type`) VALUES
	(67, '欧金事业启动公告', '<div>&nbsp;<span style="font-size: medium"><span style="font-family: \'Comic Sans MS\'">亲爱的欧金家人们！首先欢迎各位精英加盟欧金事业复利宝股权理财计划，经公司董事会决定于<span style="color: rgb(255,0,0)">2014年10月6日</span>正式启动国内市场。在这里欧金事业项目组的各级成员恭祝各位在欧金事业里创造出更加辉煌的明天！欧金事业，创造梦想的舞台！&nbsp;</span></span></div>\r\n<div><span style="font-size: medium"><span style="font-family: \'Comic Sans MS\'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;欧金事业项目组</span></span></div>\r\n<div><span style="font-size: medium"><span style="font-family: \'Comic Sans MS\'">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;二0一四年十月五日</span></span></div>', 1, 1412438455, 1412573790, 1, 0, '1'),
	(73, '通知', '<p><span style="font-size: x-large;">&nbsp;亲爱的家人们，朋友们：首先感谢大家对公司的信任与支持，由于昨天数据库处理非常大，导致昨天有部分会员分红昨天没有分到，现已经处理，为了防止同样的事情发生，经公司决定：在升级活动期每天报单时间截止到23：30，系统会进行关闭结算，感谢您们的理解！</span></p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="font-size: x-large;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;欧金事业项目组</span></p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="font-size: x-large;">&nbsp; 二0一四年十月九日</span></p>', 1, 1412836102, 0, 1, 0, '1'),
	(70, '欧金事业奖励政策', '<p><span style="background-color: rgb(255,255,255)"><span style="font-size: large">&nbsp;</span><span style="font-size: medium">&nbsp;亲爱的家人们！为感谢大家对我们欧金事业的支持，经公司董事会研究决定推出实物奖励方案！具体奖励如下：<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp;<span style="color: rgb(255,0,0)"> &nbsp; 凡在2014年12月31日前平衡奖达到1万美金奖励价值3000元苹果平板电脑&nbsp;ipad一台，平衡奖达到2万美金奖励价值6000元苹果手机iphone&nbsp;6一台，由报单中心审核购买发放，公司补等额货币；平衡奖达到15万美金奖宝马车一辆，请截图给公司客服审核后，由公司统一购买发放。</span><br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;以上活动最终解释归欧金事业所有。欧金事业，创造梦想的舞台！<br />\r\n</span></span></p>\r\n<p><span style="background-color: rgb(255,255,255)"><span style="font-size: medium">&nbsp;</span></span></p>\r\n<p><span style="background-color: rgb(255,255,255)"><span style="font-size: large">&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: large">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-size: large">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-size: medium"> 欧金事业项目组</span></span></p>\r\n<p><span style="font-size: medium"><span style="background-color: rgb(255,255,255)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 二0一四年十月五日</span></span><span style="background-color: rgb(255,255,255)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>', 1, 1412496344, 1412573930, 1, 0, '1'),
	(69, '关于股票系统上线的通知', '<div>&nbsp;<span style="font-size: xx-large">&nbsp;&nbsp;&nbsp;</span><span style="font-size: large">&nbsp;</span><span style="font-size: medium">亲爱的家人们！感谢您对欧金事业的信任与支持，经公司董事会研究决定！为了同时启动国际市场，欧金事业复利宝股权交易系统于<span style="color: rgb(255,0,0)">2014年10月15日</span>前后对接，感谢各位家人的理解与支持！谢谢！欧金事业，创造梦想的舞台！</span></div>\r\n<div><span style="font-size: medium">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 欧金事业项目组</span></div>\r\n<div><span style="font-size: medium">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;二0一四年十月五日</span></div>', 1, 1412479539, 1412573821, 1, 0, '1'),
	(71, '欧金事业项目启动优惠政策', '<p>&nbsp;<span style="background-color: rgb(244, 244, 244); color: rgb(77, 77, 77); font-family: Verdana, Geneva, sans-serif; line-height: 24px; text-indent: 24px;">&nbsp; &nbsp;&nbsp;</span><span style="color: rgb(77, 77, 77); font-family: Verdana, Geneva, sans-serif; line-height: 24px; text-indent: 24px; margin: 0px; padding: 0px; font-size: xx-large;">&nbsp;&nbsp;</span><span style="color: rgb(77, 77, 77); font-family: Verdana, Geneva, sans-serif; line-height: 24px; text-indent: 24px; margin: 0px; padding: 0px; font-size: medium;"><span style="margin: 0px; padding: 0px; font-family: \'Comic Sans MS\';">亲爱的家人们！朋友们：欢迎您了解欧金事业！为了感谢各位会员对公司的信任与支持，经公司董事会决定公司启动期间给予市场以下优惠：</span></span></p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(77, 77, 77); font-family: Verdana, Geneva, sans-serif; line-height: 24px; text-indent: 24px; background-color: rgb(244, 244, 244);"><span style="margin: 0px; padding: 0px; font-size: medium;"><span style="margin: 0px; padding: 0px; font-family: \'Comic Sans MS\';">&nbsp; &nbsp; &nbsp;&nbsp;<span style="margin: 0px; padding: 0px; color: rgb(255, 0, 0);">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1,2014年10月9日--11日加盟一星享受级为四星所有待遇，加盟二星享受五所有待遇；12日---14日加盟一星享受三星所有待遇，加盟二星享受四星所有待遇，加盟三星享受五星所有待遇。<br style="margin: 0px; padding: 0px;" />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 2.充值1500美金公司开通报单中心同时9日---11日给予2000美金货币，12日---14日给予1800美金货币.</span></span></span><span style="margin: 0px; padding: 0px; font-size: medium;"><span style="margin: 0px; padding: 0px; font-family: \'Comic Sans MS\';"><br style="margin: 0px; padding: 0px;" />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 本活动结束后按照正常报单充值流程，请大家抓住机会，最终解释权归欧金事业所有，谢谢大家的信任与支持！欧金事业，创造梦想的舞台！&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(77, 77, 77); font-family: Verdana, Geneva, sans-serif; line-height: 24px; text-indent: 24px; background-color: rgb(244, 244, 244);"><span style="margin: 0px; padding: 0px; font-size: medium;"><span style="margin: 0px; padding: 0px; font-family: \'Comic Sans MS\';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;欧金事业项目组</span></span></p>\r\n<div style="margin: 0px; padding: 0px; color: rgb(77, 77, 77); font-family: Verdana, Geneva, sans-serif; line-height: 24px; text-indent: 24px; background-color: rgb(244, 244, 244);"><span style="margin: 0px; padding: 0px; font-size: medium;"><span style="margin: 0px; padding: 0px; font-family: \'Comic Sans MS\';">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;二0一四年十月八日</span></span></div>', 1, 1412760338, 0, 1, 0, '1');
/*!40000 ALTER TABLE `xt_form` ENABLE KEYS */;


-- 导出  表 ak911.xt_form_class 结构
CREATE TABLE IF NOT EXISTS `xt_form_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `baile` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在导出表  ak911.xt_form_class 的数据：1 rows
DELETE FROM `xt_form_class`;
/*!40000 ALTER TABLE `xt_form_class` DISABLE KEYS */;
INSERT INTO `xt_form_class` (`id`, `name`, `baile`) VALUES
	(1, '新闻公告', 0);
/*!40000 ALTER TABLE `xt_form_class` ENABLE KEYS */;


-- 导出  表 ak911.xt_gouwu 结构
CREATE TABLE IF NOT EXISTS `xt_gouwu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `lx` int(11) NOT NULL,
  `ispay` smallint(2) NOT NULL,
  `pdt` int(11) NOT NULL,
  `money` decimal(12,2) NOT NULL,
  `shu` int(11) NOT NULL,
  `cprice` decimal(12,2) NOT NULL,
  `pvzhi` decimal(12,2) NOT NULL,
  `guquan` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `s_type` int(11) NOT NULL DEFAULT '0',
  `user_id` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `us_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `us_address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `us_tel` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `isfh` int(11) NOT NULL DEFAULT '0',
  `fhdt` int(11) NOT NULL DEFAULT '0',
  `okdt` int(11) NOT NULL DEFAULT '0',
  `ccxhbz` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在导出表  ak911.xt_gouwu 的数据：0 rows
DELETE FROM `xt_gouwu`;
/*!40000 ALTER TABLE `xt_gouwu` DISABLE KEYS */;
/*!40000 ALTER TABLE `xt_gouwu` ENABLE KEYS */;


-- 导出  表 ak911.xt_gp 结构
CREATE TABLE IF NOT EXISTS `xt_gp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gp_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '股票名称',
  `danhao` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '股票单号',
  `opening` decimal(12,2) NOT NULL COMMENT '开盘价',
  `closing` decimal(12,2) NOT NULL COMMENT '收盘价',
  `today` decimal(12,2) NOT NULL COMMENT '当前报价',
  `most_g` decimal(12,2) NOT NULL COMMENT '最高价',
  `most_d` decimal(12,2) NOT NULL COMMENT '最低价',
  `up` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '涨幅',
  `down` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '跌幅',
  `gp_quantity` int(11) NOT NULL DEFAULT '0' COMMENT '股票数量',
  `cgp_num` int(11) NOT NULL DEFAULT '0',
  `gp_zongji` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '总价',
  `turnover` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0' COMMENT '成交量',
  `f_date` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '发布时间',
  `status` int(11) NOT NULL COMMENT '状态（0关闭1开启）',
  `pao_num` int(11) NOT NULL DEFAULT '0',
  `ca_numb` int(11) NOT NULL DEFAULT '0',
  `all_sell` int(11) NOT NULL DEFAULT '0',
  `day_sell` int(11) NOT NULL DEFAULT '0',
  `yt_sellnum` int(11) NOT NULL DEFAULT '0',
  `buy_num` int(11) NOT NULL DEFAULT '0',
  `sell_num` int(11) NOT NULL DEFAULT '0',
  `fx_num` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在导出表  ak911.xt_gp 的数据：0 rows
DELETE FROM `xt_gp`;
/*!40000 ALTER TABLE `xt_gp` DISABLE KEYS */;
/*!40000 ALTER TABLE `xt_gp` ENABLE KEYS */;


-- 导出  表 ak911.xt_gp1 结构
CREATE TABLE IF NOT EXISTS `xt_gp1` (
  `id` smallint(6) NOT NULL,
  `need_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `after_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `one_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `already_nums` decimal(10,2) NOT NULL DEFAULT '0.00',
  `already_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `time` bigint(20) NOT NULL DEFAULT '0',
  `status` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='time need_money after_price one_price already_nums already_money  status';

-- 正在导出表  ak911.xt_gp1 的数据：~0 rows (大约)
DELETE FROM `xt_gp1`;
/*!40000 ALTER TABLE `xt_gp1` DISABLE KEYS */;
/*!40000 ALTER TABLE `xt_gp1` ENABLE KEYS */;


-- 导出  表 ak911.xt_history 结构
CREATE TABLE IF NOT EXISTS `xt_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `did` int(11) NOT NULL,
  `user_did` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `action_type` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pdt` int(11) NOT NULL,
  `epoints` decimal(12,2) NOT NULL,
  `allp` decimal(12,2) NOT NULL,
  `bz` text NOT NULL,
  `type` smallint(1) NOT NULL COMMENT '充值0明细1',
  `act_pdt` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=582882 DEFAULT CHARSET=utf8;

-- 正在导出表  ak911.xt_history 的数据：0 rows
DELETE FROM `xt_history`;
/*!40000 ALTER TABLE `xt_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `xt_history` ENABLE KEYS */;


-- 导出  表 ak911.xt_huikui 结构
CREATE TABLE IF NOT EXISTS `xt_huikui` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `touzi` varchar(255) NOT NULL,
  `zhuangkuang` varchar(255) NOT NULL,
  `hk` decimal(12,2) NOT NULL,
  `time_hk` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 正在导出表  ak911.xt_huikui 的数据：0 rows
DELETE FROM `xt_huikui`;
/*!40000 ALTER TABLE `xt_huikui` DISABLE KEYS */;
/*!40000 ALTER TABLE `xt_huikui` ENABLE KEYS */;


-- 导出  表 ak911.xt_inout 结构
CREATE TABLE IF NOT EXISTS `xt_inout` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `uid` smallint(6) NOT NULL COMMENT '挂单id',
  `one_price` decimal(6,2) NOT NULL COMMENT '单价',
  `price` decimal(10,2) NOT NULL COMMENT '总价',
  `all_nums` int(11) NOT NULL COMMENT '总量',
  `type` tinyint(4) NOT NULL COMMENT '类型 0:购买 1:出售',
  `status` tinyint(4) NOT NULL COMMENT '该单状态',
  `only_nums` int(11) NOT NULL COMMENT '需求或剩余 （取决于type）',
  `add_time` bigint(20) NOT NULL,
  `is_cancel` tinyint(4) NOT NULL DEFAULT '0',
  `ispay` tinyint(4) NOT NULL DEFAULT '0',
  `buy_s` decimal(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在导出表  ak911.xt_inout 的数据：~0 rows (大约)
DELETE FROM `xt_inout`;
/*!40000 ALTER TABLE `xt_inout` DISABLE KEYS */;
/*!40000 ALTER TABLE `xt_inout` ENABLE KEYS */;


-- 导出  表 ak911.xt_jiadan 结构
CREATE TABLE IF NOT EXISTS `xt_jiadan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `user_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `adt` int(11) NOT NULL,
  `pdt` int(11) NOT NULL,
  `money` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '金额',
  `danshu` smallint(5) NOT NULL DEFAULT '0' COMMENT '单数',
  `is_pay` smallint(3) NOT NULL DEFAULT '0',
  `up_level` smallint(2) NOT NULL DEFAULT '0',
  `out_level` smallint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在导出表  ak911.xt_jiadan 的数据：0 rows
DELETE FROM `xt_jiadan`;
/*!40000 ALTER TABLE `xt_jiadan` DISABLE KEYS */;
/*!40000 ALTER TABLE `xt_jiadan` ENABLE KEYS */;


-- 导出  表 ak911.xt_jydt 结构
CREATE TABLE IF NOT EXISTS `xt_jydt` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `user_id` varchar(50) NOT NULL,
  `agent_use` decimal(10,2) NOT NULL DEFAULT '0.00',
  `zhen_use` decimal(10,2) NOT NULL DEFAULT '0.00',
  `shui_use` decimal(10,2) NOT NULL DEFAULT '0.00',
  `status` smallint(6) NOT NULL DEFAULT '0' COMMENT '状态',
  `before_time` bigint(10) NOT NULL DEFAULT '0' COMMENT '购买时间',
  `after_time` bigint(10) NOT NULL DEFAULT '0' COMMENT '完成时间',
  `time` bigint(10) NOT NULL DEFAULT '0' COMMENT '发行时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='交易大厅';

-- 正在导出表  ak911.xt_jydt 的数据：~0 rows (大约)
DELETE FROM `xt_jydt`;
/*!40000 ALTER TABLE `xt_jydt` DISABLE KEYS */;
/*!40000 ALTER TABLE `xt_jydt` ENABLE KEYS */;


-- 导出  表 ak911.xt_msg 结构
CREATE TABLE IF NOT EXISTS `xt_msg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isid` int(11) DEFAULT NULL,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `msg` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `r_uid` int(11) NOT NULL,
  `r_user_id` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `s_uid` int(11) NOT NULL,
  `s_user_id` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `is_read` smallint(3) NOT NULL,
  `pdt` int(11) DEFAULT NULL,
  `is_type` smallint(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=135 DEFAULT CHARSET=utf8;

-- 正在导出表  ak911.xt_msg 的数据：0 rows
DELETE FROM `xt_msg`;
/*!40000 ALTER TABLE `xt_msg` DISABLE KEYS */;
/*!40000 ALTER TABLE `xt_msg` ENABLE KEYS */;


-- 导出  表 ak911.xt_news_a 结构
CREATE TABLE IF NOT EXISTS `xt_news_a` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `n_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `n_content` text COLLATE utf8_unicode_ci NOT NULL,
  `n_top` int(11) NOT NULL DEFAULT '0',
  `n_status` tinyint(1) NOT NULL DEFAULT '1',
  `n_create_time` int(11) NOT NULL,
  `n_update_time` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在导出表  ak911.xt_news_a 的数据：0 rows
DELETE FROM `xt_news_a`;
/*!40000 ALTER TABLE `xt_news_a` DISABLE KEYS */;
/*!40000 ALTER TABLE `xt_news_a` ENABLE KEYS */;


-- 导出  表 ak911.xt_news_class 结构
CREATE TABLE IF NOT EXISTS `xt_news_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `create_time` int(11) NOT NULL,
  `type` smallint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在导出表  ak911.xt_news_class 的数据：0 rows
DELETE FROM `xt_news_class`;
/*!40000 ALTER TABLE `xt_news_class` DISABLE KEYS */;
/*!40000 ALTER TABLE `xt_news_class` ENABLE KEYS */;


-- 导出  表 ak911.xt_peng 结构
CREATE TABLE IF NOT EXISTS `xt_peng` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(12) NOT NULL,
  `ceng` int(12) NOT NULL,
  `l` int(12) NOT NULL,
  `r` int(12) NOT NULL,
  `l1` int(12) NOT NULL,
  `r1` int(12) NOT NULL,
  `l2` int(12) NOT NULL,
  `r2` int(12) NOT NULL,
  `l3` int(12) NOT NULL,
  `r3` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在导出表  ak911.xt_peng 的数据：0 rows
DELETE FROM `xt_peng`;
/*!40000 ALTER TABLE `xt_peng` DISABLE KEYS */;
/*!40000 ALTER TABLE `xt_peng` ENABLE KEYS */;


-- 导出  表 ak911.xt_plan 结构
CREATE TABLE IF NOT EXISTS `xt_plan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '奖励计划',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在导出表  ak911.xt_plan 的数据：0 rows
DELETE FROM `xt_plan`;
/*!40000 ALTER TABLE `xt_plan` DISABLE KEYS */;
/*!40000 ALTER TABLE `xt_plan` ENABLE KEYS */;


-- 导出  表 ak911.xt_product 结构
CREATE TABLE IF NOT EXISTS `xt_product` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `cid` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cptype` int(11) NOT NULL DEFAULT '0',
  `ccname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `xhname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `money` decimal(12,2) DEFAULT '0.00',
  `a_money` decimal(12,2) NOT NULL DEFAULT '0.00',
  `b_money` decimal(12,2) NOT NULL DEFAULT '0.00',
  `create_time` int(11) DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `yc_cp` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在导出表  ak911.xt_product 的数据：0 rows
DELETE FROM `xt_product`;
/*!40000 ALTER TABLE `xt_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `xt_product` ENABLE KEYS */;


-- 导出  表 ak911.xt_promo 结构
CREATE TABLE IF NOT EXISTS `xt_promo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `money` decimal(12,2) NOT NULL,
  `money_two` decimal(12,2) NOT NULL,
  `u_level` smallint(3) NOT NULL DEFAULT '0' COMMENT '升级前级别',
  `uid` int(11) NOT NULL,
  `create_time` int(11) NOT NULL,
  `up_level` smallint(3) NOT NULL COMMENT '升级后级别',
  `danshu` smallint(2) NOT NULL COMMENT '单数',
  `pdt` int(11) NOT NULL,
  `is_pay` smallint(3) NOT NULL DEFAULT '0',
  `u_bank_name` smallint(2) NOT NULL DEFAULT '0' COMMENT '汇款银行',
  `type` smallint(2) NOT NULL DEFAULT '0' COMMENT '0标示晋级，1标示加单',
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在导出表  ak911.xt_promo 的数据：0 rows
DELETE FROM `xt_promo`;
/*!40000 ALTER TABLE `xt_promo` DISABLE KEYS */;
/*!40000 ALTER TABLE `xt_promo` ENABLE KEYS */;


-- 导出  表 ak911.xt_times 结构
CREATE TABLE IF NOT EXISTS `xt_times` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `benqi` int(11) NOT NULL COMMENT '本期结算日期',
  `shangqi` int(11) NOT NULL COMMENT '上期结算日期',
  `is_count_b` int(11) NOT NULL,
  `is_count_c` int(11) NOT NULL,
  `is_count` int(11) NOT NULL,
  `type` smallint(2) NOT NULL DEFAULT '0' COMMENT '是否已经结算',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=102 DEFAULT CHARSET=utf8;

-- 正在导出表  ak911.xt_times 的数据：0 rows
DELETE FROM `xt_times`;
/*!40000 ALTER TABLE `xt_times` DISABLE KEYS */;
/*!40000 ALTER TABLE `xt_times` ENABLE KEYS */;


-- 导出  表 ak911.xt_tiqu 结构
CREATE TABLE IF NOT EXISTS `xt_tiqu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `user_id` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `rdt` int(11) NOT NULL,
  `money` decimal(12,2) NOT NULL,
  `money_two` decimal(12,2) NOT NULL,
  `epoint` decimal(12,2) NOT NULL,
  `is_pay` int(11) NOT NULL,
  `user_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `bank_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `bank_card` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `x1` varchar(50) DEFAULT NULL,
  `x2` varchar(50) DEFAULT NULL,
  `x3` varchar(50) DEFAULT NULL,
  `x4` varchar(50) DEFAULT NULL,
  `bank_address` varchar(200) NOT NULL,
  `user_tel` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- 正在导出表  ak911.xt_tiqu 的数据：0 rows
DELETE FROM `xt_tiqu`;
/*!40000 ALTER TABLE `xt_tiqu` DISABLE KEYS */;
/*!40000 ALTER TABLE `xt_tiqu` ENABLE KEYS */;


-- 导出  表 ak911.xt_ulevel 结构
CREATE TABLE IF NOT EXISTS `xt_ulevel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `money` decimal(12,2) DEFAULT NULL,
  `u_level` smallint(3) DEFAULT '0' COMMENT '升级前级别',
  `uid` int(11) DEFAULT NULL,
  `user_id` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `create_time` int(11) DEFAULT NULL,
  `up_level` smallint(3) DEFAULT NULL COMMENT '升级后级别',
  `danshu` smallint(2) DEFAULT NULL COMMENT '单数',
  `pdt` int(11) DEFAULT NULL,
  `is_pay` smallint(3) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在导出表  ak911.xt_ulevel 的数据：0 rows
DELETE FROM `xt_ulevel`;
/*!40000 ALTER TABLE `xt_ulevel` DISABLE KEYS */;
/*!40000 ALTER TABLE `xt_ulevel` ENABLE KEYS */;


-- 导出  表 ak911.xt_xiaof 结构
CREATE TABLE IF NOT EXISTS `xt_xiaof` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `user_id` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `rdt` int(11) NOT NULL,
  `money` decimal(12,2) NOT NULL,
  `money_two` int(11) NOT NULL DEFAULT '0',
  `epoint` decimal(12,2) NOT NULL,
  `fh_money` decimal(12,2) NOT NULL DEFAULT '0.00',
  `is_pay` int(11) NOT NULL,
  `user_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `bank_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `bank_card` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `x1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `x2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `x3` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `x4` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在导出表  ak911.xt_xiaof 的数据：0 rows
DELETE FROM `xt_xiaof`;
/*!40000 ALTER TABLE `xt_xiaof` DISABLE KEYS */;
/*!40000 ALTER TABLE `xt_xiaof` ENABLE KEYS */;


-- 导出  表 ak911.xt_zhuanj 结构
CREATE TABLE IF NOT EXISTS `xt_zhuanj` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `in_uid` int(11) DEFAULT NULL,
  `out_uid` int(11) DEFAULT NULL,
  `in_userid` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `out_userid` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `epoint` decimal(12,2) DEFAULT NULL,
  `rdt` int(11) DEFAULT NULL,
  `sm` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `type` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1536 DEFAULT CHARSET=utf8;

-- 正在导出表  ak911.xt_zhuanj 的数据：0 rows
DELETE FROM `xt_zhuanj`;
/*!40000 ALTER TABLE `xt_zhuanj` DISABLE KEYS */;
/*!40000 ALTER TABLE `xt_zhuanj` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
