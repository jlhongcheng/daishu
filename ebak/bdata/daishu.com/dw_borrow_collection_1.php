<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dw_borrow_collection`;");
E_C("CREATE TABLE `dw_borrow_collection` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` int(11) DEFAULT '0' COMMENT '所属站点',
  `status` int(2) DEFAULT '0',
  `order` int(2) DEFAULT NULL,
  `tender_id` int(11) DEFAULT '0' COMMENT '借款id',
  `repay_time` varchar(50) DEFAULT NULL COMMENT '估计还款时间',
  `repay_yestime` varchar(50) DEFAULT NULL COMMENT '已经还款时间',
  `repay_account` varchar(50) DEFAULT '0' COMMENT '预还金额',
  `repay_yesaccount` varchar(50) DEFAULT '0' COMMENT '实还金额',
  `interest` varchar(50) DEFAULT '0',
  `capital` varchar(50) DEFAULT '0',
  `late_days` int(11) NOT NULL DEFAULT '0',
  `late_interest` varchar(11) NOT NULL DEFAULT '0',
  `addtime` varchar(50) DEFAULT NULL,
  `addip` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=450 DEFAULT CHARSET=gbk");
E_D("replace into `dw_borrow_collection` values('447','0','0','11','238','1352628789',NULL,'27.93','0','0.48','27.45','0','0','1321006302','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('446','0','0','10','238','1349950389',NULL,'27.93','0','0.95','26.98','0','0','1321006302','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('445','0','0','9','238','1347358389',NULL,'27.93','0','1.42','26.51','0','0','1321006302','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('444','0','0','8','238','1344679989',NULL,'27.93','0','1.87','26.06','0','0','1321006302','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('443','0','0','7','238','1342001589',NULL,'27.93','0','2.32','25.61','0','0','1321006302','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('442','0','0','6','238','1339409589',NULL,'27.93','0','2.76','25.17','0','0','1321006302','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('441','0','0','5','238','1336731189',NULL,'27.93','0','3.19','24.74','0','0','1321006302','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('440','0','0','4','238','1334139189',NULL,'27.93','0','3.62','24.31','0','0','1321006302','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('439','0','0','3','238','1331460789',NULL,'27.93','0','4.04','23.89','0','0','1321006302','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('438','0','0','2','238','1328955189',NULL,'27.93','0','4.45','23.48','0','0','1321006302','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('437','0','0','1','238','1326276789',NULL,'27.93','0','4.85','23.08','0','0','1321006302','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('436','0','0','0','238','1323598389',NULL,'27.93','0','5.25','22.68','0','0','1321006302','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('435','0','0','11','237','1352628085',NULL,'9.46','0','0.18','9.28','0','0','1321005685','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('434','0','0','10','237','1349949685',NULL,'9.46','0','0.37','9.09','0','0','1321005685','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('433','0','0','9','237','1347357685',NULL,'9.46','0','0.54','8.92','0','0','1321005685','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('432','0','0','8','237','1344679285',NULL,'9.46','0','0.72','8.74','0','0','1321005685','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('431','0','0','7','237','1342000885',NULL,'9.46','0','0.89','8.57','0','0','1321005685','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('430','0','0','6','237','1339408885',NULL,'9.46','0','1.06','8.4','0','0','1321005685','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('429','0','0','5','237','1336730485',NULL,'9.46','0','1.22','8.24','0','0','1321005685','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('428','0','0','4','237','1334138485',NULL,'9.46','0','1.39','8.07','0','0','1321005685','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('427','0','0','3','237','1331460085',NULL,'9.46','0','1.54','7.92','0','0','1321005685','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('426','0','0','2','237','1328954485',NULL,'9.46','0','1.7','7.76','0','0','1321005685','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('425','0','0','1','237','1326276085',NULL,'9.46','0','1.85','7.61','0','0','1321005685','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('424','0','0','0','237','1323597685',NULL,'9.46','0','2','7.46','0','0','1321005685','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('423','0','0','11','236','1352628044',NULL,'4.73','0','0.09','4.64','0','0','1321005644','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('422','0','0','10','236','1349949644',NULL,'4.73','0','0.18','4.55','0','0','1321005644','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('421','0','0','9','236','1347357644',NULL,'4.73','0','0.27','4.46','0','0','1321005644','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('420','0','0','8','236','1344679244',NULL,'4.73','0','0.36','4.37','0','0','1321005644','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('419','0','0','7','236','1342000844',NULL,'4.73','0','0.45','4.28','0','0','1321005644','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('418','0','0','6','236','1339408844',NULL,'4.73','0','0.53','4.2','0','0','1321005644','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('417','0','0','5','236','1336730444',NULL,'4.73','0','0.61','4.12','0','0','1321005644','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('416','0','0','4','236','1334138444',NULL,'4.73','0','0.69','4.04','0','0','1321005644','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('415','0','0','3','236','1331460044',NULL,'4.73','0','0.77','3.96','0','0','1321005644','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('414','0','0','2','236','1328954444',NULL,'4.73','0','0.85','3.88','0','0','1321005644','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('413','0','0','1','236','1326276044',NULL,'4.73','0','0.93','3.8','0','0','1321005644','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('412','0','0','0','236','1323597644',NULL,'4.73','0','1','3.73','0','0','1321005644','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('346','0','1','0','216','1322977777','1320386397','203','203','3','200','0','0','1320335794','127.0.0.1');");
E_D("replace into `dw_borrow_collection` values('347','0','1','0','217','1322977777','1320386397','812','812','12','800','0','0','1320385738','127.0.0.1');");
E_D("replace into `dw_borrow_collection` values('348','0','1','0','218','1322979710','1320478687','203.87','203.87','3.87','200','0','0','1320387567','127.0.0.1');");
E_D("replace into `dw_borrow_collection` values('349','0','1','0','219','1322979710','1320478687','1019.37','1019.37','19.37','1000','0','0','1320387629','127.0.0.1');");
E_D("replace into `dw_borrow_collection` values('350','0','0','0','220','1323442043',NULL,'203','0','3','200','0','0','1320850043','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('351','0','0','0','221','1323442172',NULL,'507.5','0','7.5','500','0','0','1320850172','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('352','0','0','0','222','1323443589',NULL,'50.75','0','0.75','50','0','0','1320851589','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('353','0','0','0','223','1323443609',NULL,'152.37','0','2.38','149.99','0','0','1320851609','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('354','0','0','0','224','1323443638',NULL,'101.67','0','1.67','100','0','0','1320851638','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('355','0','0','0','225','1323598389',NULL,'18.62','0','3.5','15.12','0','0','1320851673','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('356','0','0','1','225','1326276789',NULL,'18.62','0','3.24','15.38','0','0','1320851673','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('357','0','0','2','225','1328955189',NULL,'18.62','0','2.97','15.65','0','0','1320851673','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('358','0','0','3','225','1331460789',NULL,'18.62','0','2.69','15.93','0','0','1320851673','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('359','0','0','4','225','1334139189',NULL,'18.62','0','2.41','16.21','0','0','1320851673','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('360','0','0','5','225','1336731189',NULL,'18.62','0','2.13','16.49','0','0','1320851673','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('361','0','0','6','225','1339409589',NULL,'18.62','0','1.84','16.78','0','0','1320851673','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('362','0','0','7','225','1342001589',NULL,'18.62','0','1.55','17.07','0','0','1320851673','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('363','0','0','8','225','1344679989',NULL,'18.62','0','1.25','17.37','0','0','1320851673','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('364','0','0','9','225','1347358389',NULL,'18.62','0','0.94','17.68','0','0','1320851673','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('365','0','0','10','225','1349950389',NULL,'18.62','0','0.64','17.98','0','0','1320851673','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('366','0','0','11','225','1352628789',NULL,'18.62','0','0.32','18.3','0','0','1320851673','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('367','0','0','0','226','1323489184',NULL,'18.43','0','3.17','15.26','0','0','1320897184','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('368','0','0','1','226','1326167584',NULL,'18.43','0','2.92','15.51','0','0','1320897184','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('369','0','0','2','226','1328845984',NULL,'18.43','0','2.68','15.75','0','0','1320897184','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('370','0','0','3','226','1331351584',NULL,'18.43','0','2.43','16','0','0','1320897184','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('371','0','0','4','226','1334029984',NULL,'18.43','0','2.18','16.25','0','0','1320897184','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('372','0','0','5','226','1336621984',NULL,'18.43','0','1.92','16.51','0','0','1320897184','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('373','0','0','6','226','1339300384',NULL,'18.43','0','1.66','16.77','0','0','1320897184','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('374','0','0','7','226','1341892384',NULL,'18.43','0','1.39','17.04','0','0','1320897184','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('375','0','0','8','226','1344570784',NULL,'18.43','0','1.12','17.31','0','0','1320897184','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('376','0','0','9','226','1347249184',NULL,'18.43','0','0.85','17.58','0','0','1320897184','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('377','0','0','10','226','1349841184',NULL,'18.43','0','0.57','17.86','0','0','1320897184','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('378','0','0','11','226','1352519584',NULL,'18.43','0','0.29','18.14','0','0','1320897184','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('379','0','0','0','227','1323489199',NULL,'50.67','0','0.67','50','0','0','1320897199','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('380','0','0','0','228','1323598389',NULL,'46.56','0','8.75','37.81','0','0','1320897221','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('381','0','0','1','228','1326276789',NULL,'46.56','0','8.09','38.47','0','0','1320897221','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('382','0','0','2','228','1328955189',NULL,'46.56','0','7.42','39.14','0','0','1320897221','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('383','0','0','3','228','1331460789',NULL,'46.56','0','6.73','39.83','0','0','1320897221','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('384','0','0','4','228','1334139189',NULL,'46.56','0','6.03','40.53','0','0','1320897221','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('385','0','0','5','228','1336731189',NULL,'46.56','0','5.32','41.24','0','0','1320897221','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('386','0','0','6','228','1339409589',NULL,'46.56','0','4.6','41.96','0','0','1320897221','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('387','0','0','7','228','1342001589',NULL,'46.56','0','3.87','42.69','0','0','1320897221','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('388','0','0','8','228','1344679989',NULL,'46.56','0','3.12','43.44','0','0','1320897221','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('389','0','0','9','228','1347358389',NULL,'46.56','0','2.36','44.2','0','0','1320897221','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('390','0','0','10','228','1349950389',NULL,'46.56','0','1.59','44.97','0','0','1320897221','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('391','0','0','11','228','1352628789',NULL,'46.56','0','0.8','45.76','0','0','1320897221','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('392','0','0','0','229','1323489239',NULL,'152.25','0','2.25','150','0','0','1320897239','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('393','0','0','0','230','1323489261',NULL,'456.75','0','6.75','450','0','0','1320897261','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('394','0','0','0','231','1323489278',NULL,'50.79','0','0.79','50','0','0','1320897278','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('395','0','0','0','232','1323489297',NULL,'101.75','0','1.75','100','0','0','1320897297','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('396','0','0','0','233','1323489408',NULL,'17.23','0','0.83','16.4','0','0','1320897408','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('397','0','0','1','233','1326167808',NULL,'17.23','0','0.56','16.67','0','0','1320897408','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('398','0','0','2','233','1328846208',NULL,'17.23','0','0.28','16.95','0','0','1320897408','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('399','0','0','0','234','1323489434',NULL,'506.67','0','6.67','500','0','0','1320897434','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('400','0','0','0','235','1323595692',NULL,'94.56','0','20','74.56','0','0','1321003692','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('401','0','0','1','235','1326274092',NULL,'94.56','0','18.51','76.05','0','0','1321003692','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('402','0','0','2','235','1328952492',NULL,'94.56','0','16.99','77.57','0','0','1321003692','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('403','0','0','3','235','1331458092',NULL,'94.56','0','15.44','79.12','0','0','1321003692','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('404','0','0','4','235','1334136492',NULL,'94.56','0','13.85','80.71','0','0','1321003692','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('405','0','0','5','235','1336728492',NULL,'94.56','0','12.24','82.32','0','0','1321003692','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('406','0','0','6','235','1339406892',NULL,'94.56','0','10.59','83.97','0','0','1321003692','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('407','0','0','7','235','1341998892',NULL,'94.56','0','8.91','85.65','0','0','1321003692','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('408','0','0','8','235','1344677292',NULL,'94.56','0','7.2','87.36','0','0','1321003692','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('409','0','0','9','235','1347355692',NULL,'94.56','0','5.45','89.11','0','0','1321003692','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('410','0','0','10','235','1349947692',NULL,'94.56','0','3.67','90.89','0','0','1321003692','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('411','0','0','11','235','1352626092',NULL,'94.56','0','1.85','92.71','0','0','1321003692','27.47.118.133');");
E_D("replace into `dw_borrow_collection` values('448','0','0','0','239','1323703486',NULL,'1015','0','15','1000','0','0','1321111486','120.84.98.127');");
E_D("replace into `dw_borrow_collection` values('449','0','0','0','240','1324014262',NULL,'50.83','0','0.83','50','0','0','1321422262','120.84.100.162');");

require("../../inc/footer.php");
?>