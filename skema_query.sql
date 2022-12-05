
-- CREATE TABLE LOGIN
CREATE TABLE `db_mis`.`tbl_login`(
`id_user` VARCHAR(8) NOT NULL,
`user_username` VARCHAR(50) NOT NULL,
`user_password` VARCHAR(50) NOT NULL, 
PRIMARY KEY(`id_user`)) ENGINE = InnoDB;

-- CREATE TABLE LEVEL LOGIN
CREATE TABLE `db_mis`.`tbl_level_login`(
`id_user` VARCHAR(8) NOT NULL,
`id_departemen` VARCHAR(5) NOT NULL) ENGINE = InnoDB;


-- CREATE TABLE CUSTOMER
CREATE TABLE `db_mis`.`tbl_master_customer`(
`id_customer` VARCHAR(8) NOT NULL,
`nama_customer` VARCHAR(50) NOT NULL, 
PRIMARY KEY(`id_customer`)) ENGINE = InnoDB;

-- CREATE TABLE CUSTOMER DETAILS
CREATE TABLE `db_mis`.`tbl_customer_details`(
`id_customer_details` VARCHAR(8) NOT NULL,
`id_customer` VARCHAR(8) NOT NULL,
`alamat_customer` TEXT NOT NULL,
`telfon_customer` CHAR(13) NOT NULL,
`email_customer` VARCHAR(50) NOT NULL,
`fax_customer` VARCHAR(50) NOT NULL,
PRIMARY KEY(`id_customer_details`)) ENGINE = InnoDB;

-- CREATE VIEW vw_customer
CREATE VIEW vw_customer AS SELECT
tbcust.id_customer,
tbcust.nama_customer,
tbcustdetails.alamat_customer,
tbcustdetails.telfon_customer,
tbcustdetails.email_customer,
tbcustdetails.fax_customer
FROM tbl_master_customer tbcust
INNER JOIN tbl_customer_details tbcustdetails ON
tbcust.id_customer = tbcustdetails.id_customer

-- CREATE TABLE VENDOR
CREATE TABLE `db_mis`.`tbl_master_vendor`(
`id_vendor` VARCHAR(8) NOT NULL,
`nama_vendor` VARCHAR(50) NOT NULL,
PRIMARY KEY(`id_vendor`)) ENGINE = InnoDB;

-- CREATE TABLE VENDOR DETAILS
CREATE TABLE `db_mis`.`tbl_vendor_details`(
`id_detail_vendor` VARCHAR(8) NOT NULL,
`id_vendor` VARCHAR(8) NOT NULL,
`alamat_vendor` TEXT NOT NULL,
`telfon_vendor` CHAR(13) NOT NULL,
`email_vendor` VARCHAR(50) NOT NULL,
`fax_vendor` CHAR(13) NOT NULL,
PRIMARY KEY(`id_detail_vendor`)) ENGINE = InnoDB;

-- CREATE VIEW vw_vendor
CREATE VIEW vw_vendor AS SELECT
tblvendor.nama_vendor,
tblvendordetail.alamat_vendor,
tblvendordetail.telfon_vendor,
tblvendordetail.email_vendor,
tblvendordetail.fax_vendor
FROM tbl_master_vendor tblvendor
INNER JOIN tbl_vendor_details tblvendordetail ON
tblvendordetail.id_vendor = tblvendor.id_vendor

-- CREATE TABLE MASTER KARYAWAN
CREATE TABLE `db_mis`.`tbl_master_karyawan`(
`id_karyawan` VARCHAR(8) NOT NULL,
`nama_karyawan` VARCHAR(50) NOT NULL,
PRIMARY KEY(`id_karyawan`)) ENGINE = InnoDB;

-- CREATE TABLE KARYAWAN DETAILS
CREATE TABLE `db_mis`.`tbl_detail_karyawan`(
`id_detail_karyawan` VARCHAR(8) NOT NULL,
`id_karyawan` VARCHAR(8) NOT NULL,
`alamat_karyawan` VARCHAR(150) NOT NULL,
`telfon_karyawan` CHAR(13) NOT NULL,
`email_karyawan` VARCHAR(50) NOT NULL,
PRIMARY KEY(`id_detail_karyawan`)) ENGINE = InnoDB;

-- CREATE VIEW vw_karyawan
CREATE VIEW vw_karyawan AS SELECT
tbkaryawan.id_karyawan,
tbkaryawan.nama_karyawan,
tbkaryawandetail.alamat_karyawan,
tbkaryawandetail.telfon_karyawan,
tbkaryawandetail.email_karyawan
FROM tbl_master_karyawan tbkaryawan
INNER JOIN tbl_detail_karyawan tbkaryawandetail ON
tbkaryawandetail.id_karyawan = tbkaryawan.id_karyawan

-- CREATE TABLE MASTER STATUS KARYAWAN
-- AKTIF
-- TIDAK
CREATE TABLE `db_mis`.`tbl_master_status_karyawan`(
`id_status` VARCHAR(5) NOT NULL,
`nama_status` CHAR(5) NOT NULL,
PRIMARY KEY(`id_status`)) ENGINE = InnoDB;

-- CREATE TABLE PIC
CREATE TABLE `db_mis`.`tbl_master_pic`(
`id_pic` VARCHAR(8) NOT NULL,
`nama_pic` VARCHAR(30) NOT NULL,
PRIMARY KEY(`id_pic`)) ENGINE = InnoDB;

-- CREATE TABLE PIC DETAILS
CREATE TABLE `db_mis`.`tbl_pic_details`(
`id_detail_pic` VARCHAR(8) NOT NULL,
`id_pic` VARCHAR(8) NOT NULL,
`status` CHAR(5) NOT NULL,
`remarks` VARCHAR(50) NOT NULL,
PRIMARY KEY(`id_detail_pic`)) ENGINE = InnoDB;

-- CREATE VIEW vw_pic
CREATE VIEW vw_pic AS SELECT
tbpic.nama_pic,
tbpicdetail.status,
tbpicdetail.remarks
FROM tbl_master_pic
INNER JOIN tbl_pic_details tbpicdetail ON
tbpicdetail.id_pic = tbpic.id_pic

-- CREATE TABLE REGISTER KARYAWAN
CREATE TABLE `db_mis`.`tbl_register_karyawan`(
`id_karyawan` VARCHAR(8) NOT NULL,
`id_departemen` VARCHAR(5) NOT NULL,
`id_status` VARCHAR(5) NOT NULL,
`remarks` VARCHAR(50) NOT NULL) ENGINE = InnoDB;

-- CREATE VIEW vw_register_karyawan
CREATE VIEW vw_register_karyawan AS SELECT
tbmasterkaryawan.nama_karyawan,
tbmasterdepartemen.nama_departemen,
tbmasterstatus.nama_status,
tbregkaryawan.remarks
FROM tbl_register_karyawan tbregkaryawan
INNER JOIN tbl_master_status_karyawan tbmasterkaryawan ON
tbmasterkaryawan.id_karyawan = tbregkaryawan.id_karyawan
INNER JOIN tbl_master_departemen tbmasterdepartemen ON
tbmasterdepartemen.id_departemen = tbregkaryawan.id_departemen
INNER JOIN tbl_master_status_karyawan tbmasterstatus ON
tbmasterstatus.id_status = tbregkaryawan.id_status

-- CREATE TABLE DEPARTEMEN
-- WAREHOUSE
-- PURCHASING
-- PRODUCTION -> stag
-- ENGINEERING -> stag
-- QUALITY CONTROL -> stag
-- SALES -> stag
-- FINANCE -> stag
CREATE TABLE `db_mis`.`tbl_master_departemen`(
`id_departemen` VARCHAR(5) NOT NULL,
`nama_departemen` VARCHAR(30) NOT NULL,
PRIMARY KEY(`id_departemen`)) ENGINE = InnoDB;

-- CREATE TABLE BARANG
CREATE TABLE `db_mis`.`tbl_master_barang`(
`id_barang` VARCHAR(8) NOT NULL,
`nama_barang` VARCHAR(50) NOT NULL,
PRIMARY KEY(`id_barang`)) ENGINE = InnoDB;

-- CREATE TABLE TIPE
CREATE TABLE `db_mis`.`tbl_master_tipe`(
`id_tipe` VARCHAR(8) NOT NULL,
`id_barang` VARCHAR(8) NOT NULL,
`nama_tipe` VARCHAR(50) NOT NULL,
PRIMARY KEY(`id_tipe`)) ENGINE = InnoDB;

-- CREATE TABLE UKURAN
CREATE TABLE `db_mis`.`tbl_master_ukuran`(
`id_ukuran` VARCHAR(8) NOT NULL,
`id_tipe` VARCHAR(8) NOT NULL,
`nama_ukuran` VARCHAR(50) NOT NULL,
PRIMARY KEY(`id_ukuran`)) ENGINE = InnoDB;

-- CREATE TABLE MATERIAL
CREATE TABLE `db_mis`.`tbl_master_material`(
`id_material` VARCHAR(8) NOT NULL,
`id_ukuran` VARCHAR(8) NOT NULL,
`nama_material` VARCHAR(50) NOT NULL,
PRIMARY KEY(`id_material`)) ENGINE = InnoDB;

-- CREATE TABLE INVENTORY
CREATE TABLE `db_mis`.`tbl_inventory`(
`id_inventory` VARCHAR(8) NOT NULL,
`id_barang` VARCHAR(8) NOT NULL,
`id_tipe` VARCHAR(8) NOT NULL,
`id_ukuran` VARCHAR(8) NOT NULL,
`id_material` VARCHAR(8) NOT NULL,
`qty` CHAR(9) NOT NULL,
PRIMARY KEY(`id_inventory`)) ENGINE = InnoDB;

-- CREATE VIEW vw_inventory
CREATE VIEW vw_inventory AS SELECT
tblinventory.id_inventory,
tblbarang.nama_barang,
tbltipe.nama_tipe,
tblukuran.nama_ukuran,
tblmaterial.nama_material,
tblinventory.qty
FROM tbl_inventory tblinventory
INNER JOIN tbl_master_barang tblbarang ON
tblbarang.id_barang = tblinventory.id_barang
INNER JOIN tbl_master_tipe tbltipe ON
tbltipe.id_tipe = tblinventory.id_tipe
INNER JOIN tbl_master_ukuran tblukuran ON
tblukuran.id_ukuran = tblinventory.id_ukuran
INNER JOIN tbl_master_material tblmaterial ON
tblmaterial.id_material = tblinventory.id_material
ORDER BY tblbarang.nama_barang ASC

-- CREATE TABLE RAK
CREATE TABLE `db_mis`.`tbl_master_rak`(
`id_rak` VARCHAR(5) NOT NULL,
`nomor_rak` VARCHAR(7) NOT NULL,
PRIMARY KEY(`id_rak`)) ENGINE = InnoDB;

-- CREATE TABLE BARIS
CREATE TABLE `db_mis`.`tbl_master_baris`(
`id_baris` VARCHAR(5) NOT NULL,
`id_rak` VARCHAR(5) NOT NULL,
`nomor_baris` VARCHAR(7) NOT NULL,
PRIMARY KEY(`id_baris`)) ENGINE = InnoDB;

-- CREATE TABLE KOLOM
CREATE TABLE `db_mis`.`tbl_master_kolom`(
`id_kolom` VARCHAR(5) NOT NULL,
`id_baris` VARCHAR(5) NOT NULL,
`nomor_kolom` VARCHAR(7) NOT NULL,
PRIMARY KEY(`id_kolom`)) ENGINE = InnoDB;

-- CREATE TABLE BIN
CREATE TABLE `db_mis`.`tbl_lokasi_barang`(
`id_lokasi_barang` VARCHAR(5) NOT NULL,
`id_rak` VARCHAR(5) NOT NULL,
`id_baris` VARCHAR(5) NOT NULL,
`id_kolom` VARCHAR(5) NOT NULL,
PRIMARY KEY(`id_bin`)) ENGINE = InnoDB;

-- CREATE TABLE TRACK BARANG
CREATE TABLE `db_mis`.`tbl_track_barang`(
`id_lokasi_barang` VARCHAR(5) NOT NULL,
`id_inventory` VARCHAR(8) NOT NULL) ENGINE = InnoDB;

-- CREATE TABLE BARANG MASUK
CREATE TABLE `db_mis`.`tbl_barang_masuk`(
`id_barang_masuk` VARCHAR(8) NOT NULL,
`id_inventory` VARCHAR(8) NOT NULL,
`tanggal_masuk` DATE NOT NULL,
`id_pic` VARCHAR(8) NOT NULL,
`qty` CHAR(9) NOT NULL,
`remarks` TEXT NOT NULL,
PRIMARY KEY(`id_barang_masuk`)) ENGINE = InnoDB;

-- CREATE VIEW vw_barang_keluar
CREATE VIEW vw_barang_masuk AS SELECT
tbbarangmasuk.id_barang_masuk,
vwinventory.nama_barang,
tbbarangmasuk.tanggal_masuk,
tbmasterpic.nama_pic,
tbbarangmasuk.qty,
tbbarangmasuk.remarks
FROM tbl_barang_masuk tbbarangmasuk
INNER JOIN vw_inventory vwinventory ON
vwinventory.id_inventory = tbbarangmasuk.id_inventory
INNER JOIN tbl_master_pic tbmasterpic ON
tbmasterpic.id_pic = tbbarangmasuk.id_pic

-- CREATE VIEW vw_barang_keluar_detail
CREATE VIEW vw_barang_keluar_detail AS SELECT
vwinventory.nama_barang,
vwinventory.nama_tipe,
vwinventory.nama_ukuran,
vwinventory.nama_material,
tblbarangmasuk.remarks
FROM tbl_barang_masuk tblbarangmasuk
INNER JOIN vw_inventory vwinventory ON
vwinventory.id_inventory = tblbarangmasuk.id_inventory



-- CREATE TABLE BARANG KELUAR
CREATE TABLE `db_mis`.`tbl_barang_keluar`(
`id_barang_keluar` VARCHAR(8) NOT NULL,
`id_inventory` VARCHAR(8) NOT NULL,
`tanggal_keluar` DATE NOT NULL,
`id_pic` VARCHAR(8) NOT NULL,
`qty` CHAR(9) NOT NULL,
`remarks` TEXT NOT NULL,
PRIMARY KEY(`id_barang_keluar`)) ENGINE = InnoDB;

-- CREATE VIEW vw_barang_keluar


-- CREATE TABLE MASTER STATUS PEMBELIAN
-- SUKSES
-- GAGAL
-- TUNDA
CREATE TABLE `db_mis`.`tbl_master_status_pembelian`(
`id_status` VARCHAR(5) NOT NULL,
`nama_status` CHAR(5) NOT NULL,
PRIMARY KEY(`id_status`)) ENGINE = InnoDB;

-- CREATE TABLE STATUS BARANG KELUAR
-- SUKSES
-- TUNDA
-- GAGAL

