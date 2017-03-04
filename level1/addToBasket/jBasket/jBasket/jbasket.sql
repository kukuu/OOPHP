/*
MySQL Data Transfer
Source Host: localhost
Source Database: jbasket
Target Host: localhost
Target Database: jbasket
Date: 27.07.2009 09:49:43
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for baskets
-- ----------------------------
CREATE TABLE `baskets` (
  `basketID` int(11) NOT NULL auto_increment,
  `basketSession` varchar(50) default NULL,
  `productID` int(11) default NULL,
  `productPrice` float(7,2) default NULL,
  PRIMARY KEY  (`basketID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for products
-- ----------------------------
CREATE TABLE `products` (
  `productID` int(11) NOT NULL auto_increment,
  `productName` varchar(50) default NULL,
  `productImage` varchar(250) default NULL,
  `productPrice` float(7,2) default NULL,
  PRIMARY KEY  (`productID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `baskets` VALUES ('404', '9397274f4f135c752c880037bc91a42a', '1', '95.00');
INSERT INTO `baskets` VALUES ('405', '9397274f4f135c752c880037bc91a42a', '1', '95.00');
INSERT INTO `baskets` VALUES ('409', '9397274f4f135c752c880037bc91a42a', '2', '38.00');
INSERT INTO `baskets` VALUES ('410', '9397274f4f135c752c880037bc91a42a', '1', '95.00');
INSERT INTO `baskets` VALUES ('412', '9397274f4f135c752c880037bc91a42a', '3', '129.00');
INSERT INTO `baskets` VALUES ('417', 'a7d9a3888f5ec2362bf174e03ad91a3a', '3', '129.00');
INSERT INTO `baskets` VALUES ('420', 'a7d9a3888f5ec2362bf174e03ad91a3a', '2', '38.00');
INSERT INTO `baskets` VALUES ('421', 'a7d9a3888f5ec2362bf174e03ad91a3a', '3', '129.00');
INSERT INTO `baskets` VALUES ('422', 'a7d9a3888f5ec2362bf174e03ad91a3a', '2', '38.00');
INSERT INTO `baskets` VALUES ('424', 'a7d9a3888f5ec2362bf174e03ad91a3a', '1', '95.00');
INSERT INTO `baskets` VALUES ('425', 'a7d9a3888f5ec2362bf174e03ad91a3a', '1', '95.00');
INSERT INTO `baskets` VALUES ('426', 'a7d9a3888f5ec2362bf174e03ad91a3a', '1', '95.00');
INSERT INTO `baskets` VALUES ('427', 'a7d9a3888f5ec2362bf174e03ad91a3a', '1', '95.00');
INSERT INTO `baskets` VALUES ('428', 'a7d9a3888f5ec2362bf174e03ad91a3a', '1', '95.00');
INSERT INTO `baskets` VALUES ('445', 'ea0315721a539ca8bcc4a235c284eb99', '2', '38.00');
INSERT INTO `baskets` VALUES ('450', 'ea0315721a539ca8bcc4a235c284eb99', '1', '95.00');
INSERT INTO `baskets` VALUES ('451', 'ea0315721a539ca8bcc4a235c284eb99', '1', '95.00');
INSERT INTO `baskets` VALUES ('452', 'ea0315721a539ca8bcc4a235c284eb99', '1', '95.00');
INSERT INTO `baskets` VALUES ('453', 'ea0315721a539ca8bcc4a235c284eb99', '1', '95.00');
INSERT INTO `baskets` VALUES ('454', 'ea0315721a539ca8bcc4a235c284eb99', '1', '95.00');
INSERT INTO `baskets` VALUES ('521', 'abd1d8e683ada53ca2b6b685408e403c', '1', '95.00');
INSERT INTO `baskets` VALUES ('522', 'abd1d8e683ada53ca2b6b685408e403c', '1', '95.00');
INSERT INTO `baskets` VALUES ('527', 'abd1d8e683ada53ca2b6b685408e403c', '1', '95.00');
INSERT INTO `baskets` VALUES ('528', 'abd1d8e683ada53ca2b6b685408e403c', '1', '95.00');
INSERT INTO `baskets` VALUES ('529', 'abd1d8e683ada53ca2b6b685408e403c', '1', '95.00');
INSERT INTO `baskets` VALUES ('532', 'abd1d8e683ada53ca2b6b685408e403c', '1', '95.00');
INSERT INTO `baskets` VALUES ('536', 'abd1d8e683ada53ca2b6b685408e403c', '1', '95.00');
INSERT INTO `baskets` VALUES ('541', '20945b3dd530fa982f03fe006c76c5d6', '2', '38.00');
INSERT INTO `baskets` VALUES ('542', '20945b3dd530fa982f03fe006c76c5d6', '3', '129.00');
INSERT INTO `baskets` VALUES ('544', '20945b3dd530fa982f03fe006c76c5d6', '2', '38.00');
INSERT INTO `baskets` VALUES ('545', '20945b3dd530fa982f03fe006c76c5d6', '3', '129.00');
INSERT INTO `baskets` VALUES ('546', '20945b3dd530fa982f03fe006c76c5d6', '2', '38.00');
INSERT INTO `baskets` VALUES ('549', 'abd1d8e683ada53ca2b6b685408e403c', '1', '95.00');
INSERT INTO `baskets` VALUES ('555', 'abd1d8e683ada53ca2b6b685408e403c', '1', '95.00');
INSERT INTO `baskets` VALUES ('557', 'abd1d8e683ada53ca2b6b685408e403c', '1', '95.00');
INSERT INTO `baskets` VALUES ('562', 'abd1d8e683ada53ca2b6b685408e403c', '1', '95.00');
INSERT INTO `baskets` VALUES ('563', 'abd1d8e683ada53ca2b6b685408e403c', '2', '38.00');
INSERT INTO `baskets` VALUES ('564', 'abd1d8e683ada53ca2b6b685408e403c', '2', '38.00');
INSERT INTO `baskets` VALUES ('565', 'abd1d8e683ada53ca2b6b685408e403c', '3', '129.00');
INSERT INTO `baskets` VALUES ('566', 'abd1d8e683ada53ca2b6b685408e403c', '3', '129.00');
INSERT INTO `baskets` VALUES ('567', 'abd1d8e683ada53ca2b6b685408e403c', '1', '95.00');
INSERT INTO `baskets` VALUES ('568', 'abd1d8e683ada53ca2b6b685408e403c', '3', '129.00');
INSERT INTO `baskets` VALUES ('569', '9c5b4008e1b238ae6051f65421149655', '2', '38.00');
INSERT INTO `baskets` VALUES ('571', '9c5b4008e1b238ae6051f65421149655', '2', '38.00');
INSERT INTO `baskets` VALUES ('572', '9c5b4008e1b238ae6051f65421149655', '3', '129.00');
INSERT INTO `baskets` VALUES ('573', '9c5b4008e1b238ae6051f65421149655', '2', '38.00');
INSERT INTO `baskets` VALUES ('576', '9c5b4008e1b238ae6051f65421149655', '3', '129.00');
INSERT INTO `baskets` VALUES ('577', '9c5b4008e1b238ae6051f65421149655', '1', '95.00');
INSERT INTO `baskets` VALUES ('578', '9c5b4008e1b238ae6051f65421149655', '1', '95.00');
INSERT INTO `baskets` VALUES ('579', '9c5b4008e1b238ae6051f65421149655', '2', '38.00');
INSERT INTO `baskets` VALUES ('582', '158ae1530668fd5041e62094530409e2', '3', '129.00');
INSERT INTO `baskets` VALUES ('583', '158ae1530668fd5041e62094530409e2', '3', '129.00');
INSERT INTO `baskets` VALUES ('588', '158ae1530668fd5041e62094530409e2', '3', '129.00');
INSERT INTO `baskets` VALUES ('589', '158ae1530668fd5041e62094530409e2', '3', '129.00');
INSERT INTO `baskets` VALUES ('594', '158ae1530668fd5041e62094530409e2', '2', '38.00');
INSERT INTO `baskets` VALUES ('595', '158ae1530668fd5041e62094530409e2', '3', '129.00');
INSERT INTO `baskets` VALUES ('596', '158ae1530668fd5041e62094530409e2', '3', '129.00');
INSERT INTO `baskets` VALUES ('597', '158ae1530668fd5041e62094530409e2', '3', '129.00');
INSERT INTO `baskets` VALUES ('598', '158ae1530668fd5041e62094530409e2', '2', '38.00');
INSERT INTO `baskets` VALUES ('599', '158ae1530668fd5041e62094530409e2', '3', '129.00');
INSERT INTO `baskets` VALUES ('601', '158ae1530668fd5041e62094530409e2', '2', '38.00');
INSERT INTO `baskets` VALUES ('602', '158ae1530668fd5041e62094530409e2', '3', '129.00');
INSERT INTO `baskets` VALUES ('603', '158ae1530668fd5041e62094530409e2', '3', '129.00');
INSERT INTO `baskets` VALUES ('604', '158ae1530668fd5041e62094530409e2', '2', '38.00');
INSERT INTO `baskets` VALUES ('606', '158ae1530668fd5041e62094530409e2', '2', '38.00');
INSERT INTO `baskets` VALUES ('607', '158ae1530668fd5041e62094530409e2', '3', '129.00');
INSERT INTO `baskets` VALUES ('608', '158ae1530668fd5041e62094530409e2', '1', '95.00');
INSERT INTO `baskets` VALUES ('615', '158ae1530668fd5041e62094530409e2', '3', '129.00');
INSERT INTO `baskets` VALUES ('617', '5b9e04d4c8262d8790917458fea7c040', '3', '129.00');
INSERT INTO `baskets` VALUES ('618', '5b9e04d4c8262d8790917458fea7c040', '2', '38.00');
INSERT INTO `baskets` VALUES ('619', '5b9e04d4c8262d8790917458fea7c040', '1', '95.00');
INSERT INTO `baskets` VALUES ('661', 'ed6b2909f01a393696575d1dcbbd912e', '3', '129.00');
INSERT INTO `baskets` VALUES ('664', 'ed6b2909f01a393696575d1dcbbd912e', '3', '129.00');
INSERT INTO `baskets` VALUES ('666', 'ed6b2909f01a393696575d1dcbbd912e', '3', '129.00');
INSERT INTO `baskets` VALUES ('668', 'ed6b2909f01a393696575d1dcbbd912e', '3', '129.00');
INSERT INTO `baskets` VALUES ('671', 'ed6b2909f01a393696575d1dcbbd912e', '3', '129.00');
INSERT INTO `baskets` VALUES ('673', 'ed6b2909f01a393696575d1dcbbd912e', '1', '95.00');
INSERT INTO `baskets` VALUES ('674', 'ed6b2909f01a393696575d1dcbbd912e', '3', '129.00');
INSERT INTO `baskets` VALUES ('675', 'ed6b2909f01a393696575d1dcbbd912e', '3', '129.00');
INSERT INTO `baskets` VALUES ('677', 'ed6b2909f01a393696575d1dcbbd912e', '1', '95.00');
INSERT INTO `baskets` VALUES ('678', 'ed6b2909f01a393696575d1dcbbd912e', '3', '129.00');
INSERT INTO `baskets` VALUES ('679', 'ed6b2909f01a393696575d1dcbbd912e', '3', '129.00');
INSERT INTO `baskets` VALUES ('680', 'ed6b2909f01a393696575d1dcbbd912e', '3', '129.00');
INSERT INTO `baskets` VALUES ('683', 'ed6b2909f01a393696575d1dcbbd912e', '3', '129.00');
INSERT INTO `baskets` VALUES ('685', '5b9e04d4c8262d8790917458fea7c040', '3', '129.00');
INSERT INTO `baskets` VALUES ('686', '5b9e04d4c8262d8790917458fea7c040', '3', '129.00');
INSERT INTO `baskets` VALUES ('687', '5b9e04d4c8262d8790917458fea7c040', '2', '38.00');
INSERT INTO `baskets` VALUES ('688', 'ed6b2909f01a393696575d1dcbbd912e', '3', '129.00');
INSERT INTO `baskets` VALUES ('689', 'ed6b2909f01a393696575d1dcbbd912e', '2', '38.00');
INSERT INTO `baskets` VALUES ('690', 'e2e636d8c12d1b119e159193d89d5015', '3', '129.00');
INSERT INTO `baskets` VALUES ('691', 'e2e636d8c12d1b119e159193d89d5015', '1', '95.00');
INSERT INTO `baskets` VALUES ('692', 'e2e636d8c12d1b119e159193d89d5015', '3', '129.00');
INSERT INTO `baskets` VALUES ('693', 'e2e636d8c12d1b119e159193d89d5015', '3', '129.00');
INSERT INTO `baskets` VALUES ('694', 'e2e636d8c12d1b119e159193d89d5015', '1', '95.00');
INSERT INTO `baskets` VALUES ('695', 'e2e636d8c12d1b119e159193d89d5015', '1', '95.00');
INSERT INTO `baskets` VALUES ('696', 'e2e636d8c12d1b119e159193d89d5015', '1', '95.00');
INSERT INTO `baskets` VALUES ('697', 'e2e636d8c12d1b119e159193d89d5015', '3', '129.00');
INSERT INTO `baskets` VALUES ('698', 'e2e636d8c12d1b119e159193d89d5015', '3', '129.00');
INSERT INTO `baskets` VALUES ('699', 'e2e636d8c12d1b119e159193d89d5015', '2', '38.00');
INSERT INTO `baskets` VALUES ('700', 'e2e636d8c12d1b119e159193d89d5015', '2', '38.00');
INSERT INTO `baskets` VALUES ('701', 'e2e636d8c12d1b119e159193d89d5015', '2', '38.00');
INSERT INTO `baskets` VALUES ('702', 'e2e636d8c12d1b119e159193d89d5015', '2', '38.00');
INSERT INTO `baskets` VALUES ('703', 'e2e636d8c12d1b119e159193d89d5015', '2', '38.00');
INSERT INTO `baskets` VALUES ('704', 'e2e636d8c12d1b119e159193d89d5015', '2', '38.00');
INSERT INTO `baskets` VALUES ('705', 'e2e636d8c12d1b119e159193d89d5015', '3', '129.00');
INSERT INTO `baskets` VALUES ('706', 'e2e636d8c12d1b119e159193d89d5015', '1', '95.00');
INSERT INTO `baskets` VALUES ('707', 'e2e636d8c12d1b119e159193d89d5015', '3', '129.00');
INSERT INTO `baskets` VALUES ('708', 'e2e636d8c12d1b119e159193d89d5015', '3', '129.00');
INSERT INTO `baskets` VALUES ('709', 'e2e636d8c12d1b119e159193d89d5015', '3', '129.00');
INSERT INTO `baskets` VALUES ('710', 'e2e636d8c12d1b119e159193d89d5015', '2', '38.00');
INSERT INTO `baskets` VALUES ('711', 'e2e636d8c12d1b119e159193d89d5015', '3', '129.00');
INSERT INTO `baskets` VALUES ('712', 'e2e636d8c12d1b119e159193d89d5015', '1', '95.00');
INSERT INTO `baskets` VALUES ('714', '8177025f0664f16f99be96c5f6f95314', '3', '129.00');
INSERT INTO `baskets` VALUES ('715', '8177025f0664f16f99be96c5f6f95314', '1', '95.00');
INSERT INTO `baskets` VALUES ('717', '8177025f0664f16f99be96c5f6f95314', '3', '129.00');
INSERT INTO `baskets` VALUES ('718', '8177025f0664f16f99be96c5f6f95314', '1', '95.00');
INSERT INTO `baskets` VALUES ('720', '8177025f0664f16f99be96c5f6f95314', '2', '38.00');
INSERT INTO `baskets` VALUES ('721', '8177025f0664f16f99be96c5f6f95314', '2', '38.00');
INSERT INTO `baskets` VALUES ('722', '8177025f0664f16f99be96c5f6f95314', '3', '129.00');
INSERT INTO `baskets` VALUES ('723', '8177025f0664f16f99be96c5f6f95314', '3', '129.00');
INSERT INTO `baskets` VALUES ('724', '8177025f0664f16f99be96c5f6f95314', '2', '38.00');
INSERT INTO `baskets` VALUES ('725', '8177025f0664f16f99be96c5f6f95314', '3', '129.00');
INSERT INTO `baskets` VALUES ('842', 'ff41f265faa5d0ee80e93aee23911534', '3', '129.00');
INSERT INTO `baskets` VALUES ('843', 'ff41f265faa5d0ee80e93aee23911534', '2', '38.00');
INSERT INTO `baskets` VALUES ('844', 'ff41f265faa5d0ee80e93aee23911534', '1', '95.00');
INSERT INTO `baskets` VALUES ('845', 'ff41f265faa5d0ee80e93aee23911534', '2', '38.00');
INSERT INTO `baskets` VALUES ('846', 'ff41f265faa5d0ee80e93aee23911534', '2', '38.00');
INSERT INTO `baskets` VALUES ('852', '5693f11eec3a6474c5d42a3f0cacc262', '3', '129.00');
INSERT INTO `baskets` VALUES ('853', '5693f11eec3a6474c5d42a3f0cacc262', '3', '129.00');
INSERT INTO `baskets` VALUES ('854', '5693f11eec3a6474c5d42a3f0cacc262', '2', '38.00');
INSERT INTO `baskets` VALUES ('855', '5693f11eec3a6474c5d42a3f0cacc262', '3', '129.00');
INSERT INTO `baskets` VALUES ('856', '5693f11eec3a6474c5d42a3f0cacc262', '1', '95.00');
INSERT INTO `products` VALUES ('1', 'Krups Coffee Maker', 'product1.jpg', '95.00');
INSERT INTO `products` VALUES ('2', 'Keurig Cup', 'product2.jpg', '38.00');
INSERT INTO `products` VALUES ('3', 'Coffee Pro', 'product3.jpg', '129.00');
