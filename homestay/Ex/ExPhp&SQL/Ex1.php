<?php
include('./config.php');
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "->>>thanh cong!!";

//1.3 truy vấn lọc và sắp xếp dữ liệu
$sql1 = "SELECT Ten_hang_sua, Dia_chi, Dien_thoai FROM hang_sua";
$sql2 = "SELECT Ten_khach_hang, Dia_chi, Dien_thoai FROM khach_hang ORDER BY Ten_khach_hang ASC";
$sql3 = "SELECT Ten_khach_hang, Dia_chi, Dien_thoai,Phai FROM khach_hang ORDER BY Phai ASC";
$sql4 = "SELECT Ten_sua, Trong_luong, Don_gia FROM sua ORDER BY Ten_sua ASC, Don_gia DESC";
$sql5 = "SELECT Ten_sua, Trong_luong, Don_gia, TP_Dinh_Duong FROM sua WHERE Ten_sua like 'S%'";
$sql6 = "SELECT Ma_hang_sua,Ten_hang_sua,Dia_chi, Dien_thoai FROM hang_sua WHERE Ma_hang_sua like '%M'";
$sql7 = "SELECT * FROM sua WHERE Ten_sua like '%grow%'";
$slq8 = "SELECT Ten_sua, Trong_luong, Don_gia FROM sua WHERE Don_gia > 100000 ORDER BY Ten_sua DESC";
$sql9 = "SELECT Ten_sua, TP_Dinh_Duong, Loi_ich FROM sua WHERE Ma_sua like 'SC' and Ma_hang_sua like ='VNM' ORDER BY Ten_sua ASC";
$sql10 = "SELECT * FROM sua WHERE Trong_luong >=900 OR Ma_hang_sua like 'DS'";
$sql11 = "SELECT * FROM sua WHERE Don_Gia BETWEEN 100000 AND 150000";
$sql12 = "SELECT * FROM sua WHERE Trong_luong >800 AND (Ma_hang_sua like'DM' OR Ma_hang_sua like'DL' OR Ma_hang_sua like'DS')";
$sql13 = "SELECT * FROM sua WHERE Ma_loai_sua like'SD' or Don_gia <=12000";
$sql14 = "SELECT * FROM khach_hang WHERE phai =0 and Ten_khach_hang like 'N%'";
$sql15 = "SELECT Ten_hang_sua FROM hang_sua WHERE Ma_hang_sua not like '%M%'";
$sql16 = "SELECT Ten_sua, TP_Dinh_Duong FROM sua WHERE TP_Dinh_Duong like '%canxi%' and TP_Dinh_Duong like '%vitamin'";
$sql17 = "SELECT * FROM sua WHERE Trong_luong =180 or Trong_luong =200 or Trong_luong =900";
$sql18 = "SELECT * FROM sua WHERE Trong_luong !=400 AND Trong_luong !=800 AND Trong_luong !=900";
$sql19 = "SELECT TOP(10) Ten_sua, Don_gia,TP_Dinh_Duong FROM sua ORDER BY Don_gia DESC";
$sql20 = "SELECT TOP(3) Ten_sua, Trong_luong FROM sua ORDER BY Trong_luong DESC";
$sql21 = "SELECT s.Ten_sua, s.Loi_ich, s.Don_gia FROM sua s,hang_sua hs WHERE hs.Ten_hang_sua like 'Vinamilk' and hs.Ma_hang_sua = s.Ma_hang_sua ORDER BY s.Don_gia DESC";
$sql22 = "SELECT s.Ten_sua, s.Loi_ich, s.Trong_luong FROM sua s,hang_sua hs WHERE hs.Ten_hang_sua like 'Abbott' and s.Ma_hang_sua = hs.Ma_hang_sua ORDER BY s.Trong_luong ASC";


//1.4 Sử dụng hàm và biểu thức cho sẵn trong truy vấn dữ liệu
$sql1 = "SELECT ROUND(AVG(Tri_gia),0) FROM hoa_don";
$sql2 = "SELECT * FROM hoa_don WHERE YEAR(Ngay_HD) =2007 AND MONTH(Ngay_HD)=7";
$sql3 = "SELECT ";
$sql4 = "SELECT * FROM sua where LENGTH(Ten_sua) <=10";
$sql5 = "SELECT UPPER(Ten_hang_sua), Dia_chi,Dien_thoai FROM hang_sua";
$sql6 = "SELECT ";
$sql7 = "SELECT ";
$sql8 = "SELECT CONCAT('Ma_khach_hang','-''Ten_khach_hang') as 'Ma_ten_khach_hang', IIF(Phai=0,'Nam', 'Nữ') FROM khach_hang";
$slq9 = "SELECT ";
$sql10 = "SELECT ";
$sql11 = "SELECT";


//1.5 Truy vấn có nhóm và thống kê dữ liệu
$sql1 = "SELECT Ten_hang_sua, count(s.Ma_hang_sua)as 'So Luong' from sua s JOIN hang_sua hs on s.Ma_hang_sua = hs.Ma_hang_sua  GROUP BY s.Ma_hang_sua order by count(s.Ma_hang_sua) ASC;";
$sql2 = "SELECT hs.Ten_hang_sua, AVG(s.Don_gia) FROM sua s JOIN hang_sua hs on s.Ma_hang_sua= hs.Ma_hang_sua WHERE s.Trong_luong =800 or s.Trong_luong = 900 GROUP BY s.Ma_hang_sua";
$sql3 = "SELECT MIN(s.Trong_luong) from sua s join hang_sua hs on s.Ma_hang_sua= hs.Ma_hang_sua GROUP BY s.Ma_hang_sua";
$sql3b = "SELECT MAX(s.Trong_luong) from sua s join hang_sua hs on s.Ma_hang_sua= hs.Ma_hang_sua GROUP BY s.Ma_hang_sua";
$sql4 = "SELECT sum(s.Don_gia) as 'Giá Tiền', count(s.Ma_hang_sua) as 'Số Sản Phẩm' from sua s join hang_sua hs on s.Ma_hang_sua= hs.Ma_hang_sua WHERE s.Trong_luong BETWEEN 400 and 500 GROUP BY s.Ma_hang_sua";
$sql5 = "SELECT hd.So_hoa_don, hd.Ngay_HD,SUM(ct.So_luong), hd.Tri_gia FROM ct_hoadon ct JOIN hoa_don hd on ct.So_hoa_don = hd.So_hoa_don GROUP BY hd.So_hoa_don";
$sql6 = "SELECT hd.So_hoa_don FROM hoa_don hd WHERE hd.Tri_gia >2000000";
$sql7 = "SELECT s.Ten_sua, count(s.Ma_loai_sua) FROM sua s join loai_sua ls on s.Ma_loai_sua = ls.Ma_loai_sua GROUP BY s.Ma_loai_sua";
$sql8 = "SELECT s.Ten_sua, MAX(s.Don_gia) FROM sua s join loai_sua ls on s.Ma_loai_sua = ls.Ma_loai_sua GROUP BY s.Ma_loai_sua";
$sql9 = "SELECT count(s.Ma_sua) as 'Tổng số' FROM hoa_don hd join ct_hoadon ct on hd.So_hoa_don=ct.So_hoa_don JOIN sua s on ct.Ma_sua= s.Ma_sua WHERE hd.Ngay_HD ='2007-07-10'";
$sql10 = "SELECT hs.Ten_hang_sua, hs.Dia_chi,hs.Dien_thoai FROM hang_sua hs WHERE NOT EXISTS (SELECT s.Ma_hang_sua FROM sua s  WHERE s.Ma_hang_sua= hs.Ma_hang_sua AND s.Don_gia < 50000)";
$sql11 = "SELECT * FROM sua s JOIN hang_sua hs ON s.Ma_hang_sua= hs.Ma_hang_sua GROUP BY s.Ma_hang_sua HAVING count(s.Ma_hang_sua) >10 ";
$sql12 = "SELECT hs.Ten_hang_sua,
            (CASE
            WHEN  count(s.Ma_hang_sua)<5 THEN 'có ít sản phẩm'
            WHEN  count(s.Ma_hang_sua)<10 THEN 'Có khá nhiều sản phẩm'
            ELSE 'Có nhiều sản phẩm'
            END) AS 'Ghi Chú'
            FROM sua s JOIN hang_sua hs on s.Ma_hang_sua = hs.Ma_hang_sua
            GROUP BY s.Ma_hang_sua";

$sql13 = "SELECT ct.So_luong FROM hoa_don hd JOIN ct_hoadon ct on hd.So_hoa_don = ct.So_hoa_don JOIN sua s on ct.Ma_sua= s.Ma_sua JOIN hang_sua hs on s.Ma_hang_sua = hs.Ma_hang_sua WHERE hs.Ten_hang_sua LIKE 'Abbott' and hd.Ngay_HD BETWEEN '2007-07-01' AND '2007-08-31'";
//1.6 Truy vấn con
$sql1 = "SELECT * FROM hang_sua hs WHERE NOT EXISTS ( SELECT s.Ma_hang_sua FROM sua s WHERE hs.Ma_hang_sua=s.Ma_hang_sua AND s.Trong_luong =900)";
$sql2 = "SELECT kh.Ma_khach_hang FROM khach_hang kh WHERE NOT EXISTS (SELECT hd.Ma_khach_hang FROM hoa_don hd WHERE kh.Ma_khach_hang= hd.Ma_khach_hang)";
$sql3 = "SELECT s1.Ma_sua FROM sua s1 WHERE EXISTS (SELECT s2.Ma_hang_sua FROM sua s2 WHERE s1.Ma_hang_sua= s2.Ma_hang_sua AND s2.Ma_sua LIKE 'AB0002')";
$sql4 = "SELECT * FROM hang_sua hs WHERE NOT EXISTS (SELECT * FROM sua s WHERE s.Ma_hang_sua = hs.Ma_hang_sua)";
$sql5 = "SELECT * FROM sua s GROUP BY s.Ma_hang_sua HAVING max(s.Don_gia)";
$sql6 = "SELECT * FROM loai_sua ls WHERE NOT EXISTS (SELECT * FROM sua s WHERE s.Ma_loai_sua= ls.Ma_loai_sua and s.Ma_hang_sua  like 'AB')";
$sql7 = "SELECT * FROM sua s JOIN loai_sua ls on s.Ma_loai_sua = ls.Ma_loai_sua WHERE ls.Ten_loai LIKE '%Sữa bột%' AND s.Don_gia <(
            SELECT s.Don_gia FROM sua s JOIN hang_sua hs on s.Ma_hang_sua= hs.Ma_hang_sua WHERE hs.Ten_hang_sua LIKE 'Vinamilk' HAVING MIN(s.Don_gia))";
$sql8 = "SELECT hs.Ten_hang_sua,s.Ten_sua,s.Trong_luong FROM sua s join hang_sua hs on s.Ma_hang_sua = hs.Ma_hang_sua GROUP BY s.Ma_hang_sua HAVING MAX(s.Trong_luong)";
$sql8b = "SELECT hs.Ten_hang_sua,s.Ten_sua,s.Trong_luong FROM sua s join hang_sua hs on s.Ma_hang_sua = hs.Ma_hang_sua GROUP BY s.Ma_hang_sua HAVING MIN(s.Trong_luong)";
$sql9 = "SELECT hs.Ten_hang_sua,s.Ten_sua,s.Trong_luong FROM sua s JOIN hang_sua hs WHERE s.Ma_loai_sua LIKE 'SB' AND s.Trong_luong >400 GROUP BY s.Ma_hang_sua HAVING MAX(s.Don_gia)";
$sql10 = "";
// 1.7 Truy vấn tạo mới bảng
$sql1 = "Create table bang_tam(
    Ma_sua varchar(6) not null PRIMARY KEY,
    Ten_sua varchar(100) NOT NULL,
    Ma_hang_sua varchar(20) not null,
    Ma_loai_sua varchar(3) not null,
    Trong_luong int(11) not null,
    Don_gia int(11) not null,
    TP_Dinh_Duong text not null,
    Loi_ich text not null,
    Hinh varchar(200) not null,
 
    CONSTRAINT fk_mahs_ma_hang_sua
    FOREIGN KEY (Ma_hang_sua)
    REFERENCES hang_sua (Ma_hang_sua),

    CONSTRAINT fk_mals_ma_loai_sua
    FOREIGN KEY (Ma_loai_sua)
    REFERENCES loai_sua (Ma_loai_sua),
);)";
$sql2 = "Create table bang_vinamilk(
    Ma_sua varchar(6) not null PRIMARY KEY,
    Ten_sua varchar(100) NOT NULL,
    Ma_hang_sua varchar(20) not null,
    Ma_loai_sua varchar(3) not null,
    Trong_luong int(11) not null,
    Don_gia int(11) not null,
    TP_Dinh_Duong text not null,
    Loi_ich text not null,
    Hinh varchar(200) not null,
 
    CONSTRAINT fk_mahs_ma_hang_sua
    FOREIGN KEY (Ma_hang_sua)
    REFERENCES hang_sua (Ma_hang_sua),

    CONSTRAINT fk_mals_ma_loai_sua
    FOREIGN KEY (Ma_loai_sua)
    REFERENCES loai_sua (Ma_loai_sua),
);)";

//1.8 Truy vấn thêm dữ liệu
$sql1 = "INSERT INTO khach_hang values ('KH007','Mai Anh',1,132,'Quang Trung Q.GV TP.HCM',8954671,'mai_anh@hotmail.com')";
$sql2 = "INSERT INTO hang_sua values ('XO','XO','Công ty nhập khẩu Việt Nam',8965874,'xo@xo.com')";
$sql3 = "INSERT INTO bang_tam SELECT * FROM sua";
$sql3 = "INSERT INTO bang_vinamilk SELECT * FROM sua where Ten_sua like ='%vinamilk'";

//1.9 Truy vấn và cập nhập dữ liệu
$sql1 = "UPDATE bang_tam SET Don_gia = 116000 WHERE Ten_sua like 'canximex'";
$sql2 = "UPDATE khach_hang SET Ten_khach_hang = 'Lê Duy Anh' WHERE Ma_khach_hang like 'KH005'";
$sql3 = "UPDATE bang_tam SET Don_gia= Don_gia + 0.03*Don_gia";
$sql4 = "UPDATE bang_tam SET Ten_sua ='yaourt' WHERE Ten_sua like '% Sữa chua%'";
$sql5 = "UPDATE bang_tam SET Don_gia = Don_gia+3000 WHERE Ma_hang_sua like'AB'";
$sql6 = "UPDATE";

//1.10 Truy vấn và xóa dữ liệu
$sql1 = "DELETE FROM Khach_hang WHERE Ma_khach_hang like 'KH001'";
$sql2 = "DELETE FROM bang_tam s , hang_sua hs where hs.Ten_hang_sua like 'Dumex' and s.Ma_hang_sua= hs.Ma_hang_sua";
$sql3 = "DELETE FROM bang_tam WHERE Trong_luong <200 or Don_gia<10000";
$sql4 = "DELETE FROM bang_tam s, hang_sua  where hs.Ten_hang_sua like 'Dumex' and s.Ma_hang_sua= hs.Ma_hang_sua and s.Don_gia >80000";
$sql5 = "DELETE FROM bang_tam where TP_Dinh_Duong like '%canxi%'";
$sql6 = "DELETE FROM hang_sua hs
                WHERE NOT EXISTS( SELECT s.Ma_hang_sua FROM bang_tam s WHERE s.Ma_hang_sua = hs.Ma_hang_sua) ";

?>