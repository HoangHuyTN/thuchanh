<?php if (session_id() == '' || !isset($_SESSION)) {
  session_start();
} ?>
<!DOCTYPE html>
<html>
<head>
<!--     <link rel="stylesheet" href="css/qlbh.css" /> -->
    <title>ADMIN</title>
</head>
<body>
  <div>
    <style type="text/css">
      * {
  margin: 0;
  padding: 0;
}
.button {
  -moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
  -webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
  box-shadow:inset 0px 1px 0px 0px #ffffff;
  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf) );
  background:-moz-linear-gradient( center top, #ededed 5%, #dfdfdf 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf');
  background-color:#ededed;
  -webkit-border-top-left-radius:6px;
  -moz-border-radius-topleft:6px;
  border-top-left-radius:6px;
  -webkit-border-top-right-radius:6px;
  -moz-border-radius-topright:6px;
  border-top-right-radius:6px;
  -webkit-border-bottom-right-radius:6px;
  -moz-border-radius-bottomright:6px;
  border-bottom-right-radius:6px;
  -webkit-border-bottom-left-radius:6px;
  -moz-border-radius-bottomleft:6px;
  border-bottom-left-radius:6px;
  text-indent:0;
  border:1px solid #dcdcdc;
  display:inline-block;
  color:#777777;
  font-family:Times New Roman;
  font-size:15px;
  font-weight:normal;
  font-style:normal;
  height:25px;
  line-height:25px;
  width:100px;
  text-decoration:none;
  text-align:center;
  text-shadow:1px 1px 0px #ffffff;
}
.button:hover {
  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed) );
  background:-moz-linear-gradient( center top, #dfdfdf 5%, #ededed 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed');
  background-color:#dfdfdf;
}.button:active {
  position:relative;
  top:1px;
}
/* This button was generated using http://tools.ngoisaoso.vn/css3button/ */


#menu {
        font-size: 15px;
    color: white;
    padding: 5px 5px 0 5px;
    background-color: #FF6600;
    height: 30px;
    top: 89px;
    right: 0px;
   text-align: right;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
}
#menu a{
  color: white;
  padding: 5px;
  text-decoration: none;
  text-align: center;
  
  right: 5px;

}
.h1{
  font-family: arial;
  width: 300px;
  height: 50px;
  padding-left: 10px;
  font-size: 20px;
  font-weight: bold;
  text-align: justify;
}
.h2{
    font-family: arial;
  width: 700px;
  height: 150px;
  padding-left: 10px;
  font-size: 18px;
  text-align: justify;
  padding-top: 5px;
}
#news-block-title {
    font-size: 18px;
        border-bottom: 1px solid #cd2122;
        position: relative;
        left: 300px;
        font-size: 30px;
        top: 50px;

}
p{
  padding-top: 10px;
  font-size: 16px;
  font-weight: normal;
}
.a3{
  font-size: 20px;
  text-decoration: none;
  font-style: bold;
  color: black;
  font-size: 20px;
}
.a3:hover{
  color: #CD2122;
}
.tr{
      margin: 0 0 30px;
    overflow: hidden;
    list-style-type: none;
}
    </style>
    <div align="center">
        <a href="">
            <img src="img/logo.png">
        </a>
    </div>
<div id="menu">
    
    <a href="trangchu2.php">Trang Ch???</a>
    |
    <a href="view/quanlysinhvien.php">Qu???n l?? sinh vi??n</a>
    |
     <a href="view/quanlymonhoc.php">Qu???n l?? m??n h???c</a>
    |
    
      B???n l?? ADMIN -
    <a href="login.php">tho??t</a>
    

</div>
</div>
<div >
<span style="z-index: -1; " id="news-block-title">TIN T???C S??? KI???N</span>

<div align="center" style="padding-top: 20px">
  <table style="position: relative; top: 80px;" width="1000px">

     <tr>
      <td class="" rowspan="2"><img height="250px" src="http://utt.edu.vn/uploads/file-manager/images/BOTT0572(1).jpg" alt=""></td>
      <td class="h1"><a class="a3" href="https://utt.edu.vn/utt/tin-tuc/hoat-dong-sinh-vien/co-mot-utt-than-thuong-nhu-the-a14252.html">
      C?? m???t UTT th??n th????ng nh?? th???...!</a>
        
                      <p>24/06/2022</p>
</td >
      <tr><td class="h2" >M???t ng??y n???ng ?????p, ta mu???n quay l???i c???m gi??c m???t ng??y l??m sinh vi??n n??m ???y. Nh???ng k??? ni???m, nh???ng k?? ???c v??? kho???ng tr???i t????i ?????p, tr???n v???n trong nh???ng cung b???c c???m x??c. C??c b???n c?? th???y th???i sinh vi??n c???a m??nh trong t???ng b???c ???nh kh??ng? M???t ??i???u duy nh???t ch??ng m??nh mu???n chia s??? v???i c??c b???n r???ng, h??y tr??n tr???ng...</td></tr>
    </tr>
    <tr class="tr">
      <td class="" rowspan="2"><img height="250px" src="https://utt.edu.vn/uploads/file-manager/images/gap-mat-hsg-2022-03.jpg" alt=""></td>
      <td class="h1"><a class="a3" href="https://utt.edu.vn/utt/tin-tuc/cong-doan-truong/tin-tuc-cong-doan/gap-mat-tuyen-duong-khen-thuong-cac-chau-la-con-cbvcnld-nha-truong-dat-thanh-tich-cao-trong-hoc-tap-nam-hoc-2021-2022-a14243.html">
      G???p m???t tuy??n d????ng khen th?????ng c??c ch??u l?? con CB,VC,NL?? Nh?? tr?????ng ?????t th??nh t??ch cao trong h???c t???p n??m h???c 2021-2022</a>
        
                      <p>22/06/2022</p>
</td >
      <tr><td class="h2" >S??ng ng??y 22/6/2022, C??ng ??o??n Tr?????ng ?????i h???c C??ng ngh??? GTVT ???? t??? ch???c bu???i g???p m???t tuy??n d????ng, khen th?????ng c??c ch??u l?? con c??n b???, vi??n ch???c, ng?????i lao ?????ng Nh?? tr?????ng ???? ?????t th??nh t??ch cao trong h???c t???p n??m h???c 2021-2022...</td></tr>
    </tr>

   
<tr>
      <td class="" rowspan="2"><img height="250px" src="http://utt.edu.vn/uploads/file-manager/images/ra-mat-clb-logistic-2022-01.jpg" alt=""></td>
      <td class="h1"><a class="a3" href="https://utt.edu.vn/utt/tin-tuc/hoat-dong-sinh-vien/le-ra-mat-cau-lac-bo-logistics-va-toa-dam-cung-doanh-nghiep-ve-thuong-mai-dien-tu-a14211.html">
      L??? ra m???t C??u l???c b??? Logistics v?? To??? ????m c??ng doanh nghi???p v??? th????ng m???i ??i???n t???</a>
        
                      <p>05/06/2022</p>
</td >
      <tr><td class="h2" >Ng??y 4/6/2022, Tr?????ng ?????i h???c C??ng ngh??? GTVT ???? t??? ch???c l??? ra m???t C??u l???c b??? Logistics (LCU). ????y l?? s??? ki???n n???m trong chu???i ho???t ?????ng m???ng l?????i C??u l???c b??? Logistics Sinh vi??n Vi???t Nam (LCN) nh???m g???n k???t c??c b???n sinh vi??n c?? c??ng ni???m ??am m?? v??? Logistics v?? Chu???i cung ???ng...</td></tr>
    </tr>

<tr>
      <td class="" rowspan="2"><img height="250px" src="http://utt.edu.vn/uploads/file-manager/images/doi-thoai-sv-utt-2022-00.jpg" alt=""></td>
      <td class="h1"><a class="a3" href="https://utt.edu.vn/utt/tin-tuc/hoi-nghi-gap-go-doi-thoai-giua-sinh-vien-voi-lanh-dao-nha-truong-nam-hoc-2021-2022-a14174.html">
      H???i ngh??? g???p g??? ?????i tho???i gi???a sinh vi??n v???i L??nh ?????o Nh?? tr?????ng n??m h???c 2021-2022</a>
        
                      <p>31/05/2022</p>
</td >
      <tr><td class="h2" >S??ng 31/5, Tr?????ng ?????i h???c C??ng ngh??? GTVT ???? t??? ch???c H???i ngh??? g???p g??? ?????i tho???i gi???a sinh vi??n v???i L??nh ?????o Nh?? tr?????ng n??m h???c 2021-2022. PGS.TS Nguy???n Ho??ng Long, Hi???u tr?????ng Nh?? tr?????ng ch??? tr?? H???i ngh???...</td></tr>
    </tr>
  </table>
</div>
</div>
</body>
</html>