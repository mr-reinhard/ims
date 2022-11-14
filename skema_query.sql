CREATE TABLE `inventory_management`.`tbl_customer` ( `id_customer` VARCHAR(8) NOT NULL ,  `nama_customer` VARCHAR(50) NOT NULL ) ENGINE = InnoDB;

-- CREATE TABLE 
CREATE TABLE `inventory_management`.`tbl_customer` ( `id_customer` VARCHAR(8) NOT NULL,`nama_customer` VARCHAR(50) NOT NULL, 
PRIMARY KEY(`id_customer`)) ENGINE = InnoDB;

-- CREATE TABLE CUSTOMER DETAILS
CREATE TABLE `inventory_management`.`tbl_customer_details`(
`id_customer_details` VARCHAR(8) NOT NULL,
`id_customer` VARCHAR(8) NOT NULL,
`alamat_customer` TEXT NOT NULL,
`telfon_customer` CHAR(13) NOT NULL,
`email_customer` VARCHAR(50) NOT NULL,
`fax_customer` VARCHAR(50) NOT NULL,
PRIMARY KEY(`id_customer_details`)) ENGINE = InnoDB;

-- CREATE TABLE VENDOR
CREATE TABLE `inventory_management`.`tbl_vendor`(
`id_vendor` VARCHAR(8) NOT NULL,
`nama_vendor` VARCHAR(50) NOT NULL,
PRIMARY KEY(`id_vendor`)) ENGINE = InnoDB;

-- CREATE TABLE VENDOR DETAILS
CREATE TABLE `inventory_management`.`tbl_vendor_details`(
`id_detail_vendor` VARCHAR(8) NOT NULL,
`id_vendor` VARCHAR(8) NOT NULL,
`alamat_vendor` TEXT NOT NULL,
`telfon_vendor` CHAR(13) NOT NULL,
`email_vendor` VARCHAR(50) NOT NULL,
`fax_vendor` CHAR(13) NOT NULL,
PRIMARY KEY(`id_detail_vendor`)) ENGINE = InnoDB;