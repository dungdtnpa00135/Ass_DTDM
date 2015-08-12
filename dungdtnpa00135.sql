-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2015-07-24 04:10:50.766




-- tables
-- Table Khachhang
CREATE TABLE Khachhang (
    id_kh varchar(10)    NOT NULL ,
    ten_kh varchar(50)    NOT NULL ,
    sdt varchar(11)    NOT NULL ,
    diachi varchar(200)    NOT NULL ,
	email varchar(250) NOT NULL,
    CONSTRAINT Khachhang_pk PRIMARY KEY (id_kh)
);

-- Table chitiethoadon
CREATE TABLE chitiethoadon (
    id_cthd varchar(10)    NOT NULL ,
    id_hd varchar(10)    NOT NULL ,
    id_sp varchar(10)    NOT NULL ,
    soluong int    NOT NULL ,
    CONSTRAINT chitiethoadon_pk PRIMARY KEY (id_cthd)
);

-- Table hoadon
CREATE TABLE hoadon (
    id_hd varchar(10)    NOT NULL ,
    id_kh varchar(10)    NOT NULL ,
    ngaymua date    NOT NULL ,
    CONSTRAINT hoadon_pk PRIMARY KEY (id_hd)
);


-- Table loaisanpham
CREATE TABLE loaisanpham (
    id_lsp varchar(10)   NOT NULL ,
    ten_loai varchar(100)    NOT NULL ,
    CONSTRAINT loaisanpham_pk PRIMARY KEY (id_lsp)
);

-- Table sanpham
CREATE TABLE sanpham (
    id_sp varchar(10)    NOT NULL ,
    id_lsp int    NOT NULL ,
    ten_sp varchar(50)    NOT NULL ,
    gia varchar(20)    NOT NULL ,
    mota varchar(250)    NOT NULL ,
    CONSTRAINT sanpham_pk PRIMARY KEY (id_sp)
);





-- foreign keys
-- Reference:  chitiethoadon_hoadon (table: chitiethoadon)


ALTER TABLE chitiethoadon ADD CONSTRAINT chitiethoadon_hoadon FOREIGN KEY chitiethoadon_hoadon (id_hd)
    REFERENCES hoadon (id_hd);
-- Reference:  chitiethoadon_sanpham (table: chitiethoadon)


ALTER TABLE chitiethoadon ADD CONSTRAINT chitiethoadon_sanpham FOREIGN KEY chitiethoadon_sanpham (id_sp)
    REFERENCES sanpham (id_sp);
-- Reference:  hoadon_Khachhang (table: hoadon)


ALTER TABLE hoadon ADD CONSTRAINT hoadon_Khachhang FOREIGN KEY hoadon_Khachhang (id_kh)
    REFERENCES Khachhang (id_kh);
-- Reference:  sanpham_loaisanpham (table: sanpham)


ALTER TABLE sanpham ADD CONSTRAINT sanpham_loaisanpham FOREIGN KEY sanpham_loaisanpham (id_lsp)
    REFERENCES loaisanpham (id_lsp);

INSERT INTO `hoadon` (`id_hd`, `id_kh`, `ngaymua`) VALUES
('d01', 'kh01', '2015-07-10'),
('d02', 'kh02', '2014-07-05'),
('d03', 'kh03', '2014-07-06'),
('d04', 'kh04', '2013-07-05' ),
('d05', 'kh05', '2014-08-09' );

INSERT INTO `khachhang` (`id_kh`, `ten_kh`, `sdt`, `diachi`, `email`) VALUES
('kh01', 'Le van s',01649449266, 'thanh hoa', 'levans@gmail.com'),
('kh02', 'Le Van Sang',01629301328, ' hoa binh',  'levansang@gmail.com'),
('kh03', 'Le Van Hai',0148442849, ' Ha Noi',  'levanhai@gmail.com'),
('kh04', 'Le thu ha',129329444, 'ha noi',  'lethuha@gmail.com'),
('kh05', 'Le hai anh',9039429813, 'thanh hoa', 'lehaianh@gmail.com');
INSERT INTO `sanpham` (`id_sp`, `id_lsp`, `ten_sp`, `gia`, `mota`) VALUES
('s01', 'l01', 'sach1','20.000','sach hay'),
('s02', 'l02', 'sach2','20.000','sach hay'),
('s03', 'l03', 'sach3','20.000','sach hay'),
('s04', 'l04', 'sach4','20.000','sach hay'),
('s05', 'l05', 'sach5','20.000','sach hay');

INSERT INTO `loaisanpham` (`id_lsp`, `ten_loai`) VALUES
('l01', 'tiểu thuyết'),
('l02','trinh thám'),
('l03','ngôn tình'),
('l04', 'hiện đại'),
('l05', 'xuyên không');


-- End of file.

