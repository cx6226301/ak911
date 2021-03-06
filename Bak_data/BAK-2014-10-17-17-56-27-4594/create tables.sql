-- 表的结构: xt_access --
CREATE TABLE `xt_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `pid` smallint(6) NOT NULL,
  `module` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
-- <fen> --
-- 表的结构: xt_address --
CREATE TABLE `xt_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `moren` int(11) NOT NULL COMMENT '是否为默认地址',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
-- <fen> --
-- 表的结构: xt_bonus --
CREATE TABLE `xt_bonus` (
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
) ENGINE=MyISAM AUTO_INCREMENT=2281 DEFAULT CHARSET=utf8;
-- <fen> --
-- 表的结构: xt_chongzhi --
CREATE TABLE `xt_chongzhi` (
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
-- <fen> --
-- 表的结构: xt_cody --
CREATE TABLE `xt_cody` (
  `c_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `cody_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
-- <fen> --
-- 表的结构: xt_cptype --
CREATE TABLE `xt_cptype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tpname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `b_id` int(11) NOT NULL DEFAULT '0',
  `s_id` int(11) NOT NULL DEFAULT '0',
  `t_pai` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
-- <fen> --
-- 表的结构: xt_fck --
CREATE TABLE `xt_fck` (
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
) ENGINE=InnoDB AUTO_INCREMENT=1641 DEFAULT CHARSET=utf8;
-- <fen> --
-- 表的结构: xt_fck_shop --
CREATE TABLE `xt_fck_shop` (
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
-- <fen> --
-- 表的结构: xt_fee --
CREATE TABLE `xt_fee` (
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
-- <fen> --
-- 表的结构: xt_fenhong --
CREATE TABLE `xt_fenhong` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `user_id` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `f_num` int(11) NOT NULL DEFAULT '0',
  `f_money` decimal(12,2) NOT NULL DEFAULT '0.00',
  `pdt` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
-- <fen> --
-- 表的结构: xt_form --
CREATE TABLE `xt_form` (
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
-- <fen> --
-- 表的结构: xt_form_class --
CREATE TABLE `xt_form_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `baile` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
-- <fen> --
-- 表的结构: xt_gouwu --
CREATE TABLE `xt_gouwu` (
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
-- <fen> --
-- 表的结构: xt_gp --
CREATE TABLE `xt_gp` (
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
-- <fen> --
-- 表的结构: xt_gp1 --
CREATE TABLE `xt_gp1` (
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
-- <fen> --
-- 表的结构: xt_history --
CREATE TABLE `xt_history` (
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
) ENGINE=MyISAM AUTO_INCREMENT=582961 DEFAULT CHARSET=utf8;
-- <fen> --
-- 表的结构: xt_huikui --
CREATE TABLE `xt_huikui` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `touzi` varchar(255) NOT NULL,
  `zhuangkuang` varchar(255) NOT NULL,
  `hk` decimal(12,2) NOT NULL,
  `time_hk` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
-- <fen> --
-- 表的结构: xt_inout --
CREATE TABLE `xt_inout` (
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
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
-- <fen> --
-- 表的结构: xt_jiadan --
CREATE TABLE `xt_jiadan` (
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
-- <fen> --
-- 表的结构: xt_jydt --
CREATE TABLE `xt_jydt` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='交易大厅';
-- <fen> --
-- 表的结构: xt_msg --
CREATE TABLE `xt_msg` (
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
-- <fen> --
-- 表的结构: xt_news_a --
CREATE TABLE `xt_news_a` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `n_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `n_content` text COLLATE utf8_unicode_ci NOT NULL,
  `n_top` int(11) NOT NULL DEFAULT '0',
  `n_status` tinyint(1) NOT NULL DEFAULT '1',
  `n_create_time` int(11) NOT NULL,
  `n_update_time` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
-- <fen> --
-- 表的结构: xt_news_class --
CREATE TABLE `xt_news_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `create_time` int(11) NOT NULL,
  `type` smallint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
-- <fen> --
-- 表的结构: xt_peng --
CREATE TABLE `xt_peng` (
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
-- <fen> --
-- 表的结构: xt_plan --
CREATE TABLE `xt_plan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '奖励计划',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
-- <fen> --
-- 表的结构: xt_product --
CREATE TABLE `xt_product` (
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
-- <fen> --
-- 表的结构: xt_promo --
CREATE TABLE `xt_promo` (
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
-- <fen> --
-- 表的结构: xt_times --
CREATE TABLE `xt_times` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `benqi` int(11) NOT NULL COMMENT '本期结算日期',
  `shangqi` int(11) NOT NULL COMMENT '上期结算日期',
  `is_count_b` int(11) NOT NULL,
  `is_count_c` int(11) NOT NULL,
  `is_count` int(11) NOT NULL,
  `type` smallint(2) NOT NULL DEFAULT '0' COMMENT '是否已经结算',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=108 DEFAULT CHARSET=utf8;
-- <fen> --
-- 表的结构: xt_tiqu --
CREATE TABLE `xt_tiqu` (
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
-- <fen> --
-- 表的结构: xt_ulevel --
CREATE TABLE `xt_ulevel` (
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
-- <fen> --
-- 表的结构: xt_xiaof --
CREATE TABLE `xt_xiaof` (
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
-- <fen> --
-- 表的结构: xt_zhuanj --
CREATE TABLE `xt_zhuanj` (
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
-- <fen> --
