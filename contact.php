<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>كلية العلوم - جامعة المنصورة  </title>
    <link rel="stylesheet" href="contact.css">
    <!--bootstrab-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="images/image 4.icon">

    <style>
        .custom-button{
          display: inline-block;
          padding: 10px 20px;
          font-size: 16px;
          font-weight: bold;
          color: #fff;
          background-color: #38c7cc;
          border: none;
          border-radius: 5px;
          cursor: pointer;
          transition: background-color 0.3s ease;
        }
    
        .custom-button:hover {
          background-color: #4ee4d7;
        }
      </style>
</head>
<body >
    <header>



  <!-- الشريط العلوي للتنقل -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-white">
    <div class="container">
      <!-- لوجو -->
      <a class="navbar-brand bg-gradient-light text-dark" href="#">
        <img src="images/image 3.png" alt="لوجو" width="100" height="40" class="d-inline-flex block-top">
      </a>
      <div class="logo">
        <h2 style="color: lightseagreen;" >كلية العلوم</h2>
        <h9>&nbsp; &nbsp;جامعة المنصورة </h9>
      </div>

      <!-- قائمة التنقل -->
      <div class="p-3 mb-2 bg-gradient-primary text-white" id="navbarNav">
      <ul class="navbar-nav .text-dark">
          <li class="nav-item">
            <a class="nav-link active bg-gradient-light text-dark" aria-current="page" href="index.html">الصفحة الرئيسية</a>
          </li>
          <li class="nav-item">
            <a class="nav-link bg-gradient-light text-dark" href="sections.html">الاقسام العلمية والبرامج</a>
          </li>
          <li class="nav-item">
            <a class="nav-link bg-gradient-light text-dark" href="C:\xampp\htdocs\graduation project\Studies.html">الدراسات العليا والبحوث</a>
          </li>
          <li class="nav-item">
            <a class="nav-link bg-gradient-light text-dark" href="contact.php">اتصل بنا</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- تضمين ملفات النصوص الفونت الأساسية من Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    </header>

<div class="body">
    <center><h1>تواصل معنا</h1></center>
    </div>
    <br>
    <br>
    <center>
<div><h4 style="color: #56abb6;">نرحب بمقترحاتكم</h4></div>
<div class="custom-line"></div>
</center>
<br>

<!--login-->

<div class="form-card1">
    <div class="form-card2">
      <form class="form" method="POST" >
        <p class="form-heading"></p>
  
        <div class="form-field">
          <input required="" placeholder="الاسم" class="input-field" type="text"  name="name"/>
        </div>
  
        <div class="form-field">
          <input
            required=""
            placeholder="البريد الالكتروني "
            class="input-field"
            type="email"
            name="email"
          />
        </div>
  
        <div class="form-field">
          <input
            required=""
            placeholder="الموضوع"
            class="input-field"
            type="text"
            name="subject"
          />
        </div>
  
        <div class="form-field">
          <textarea
            required=""
            placeholder="الرساله"
            cols="30"
            rows="3"
            class="input-field"
            name="messge"
          ></textarea>
        </div>
  
        <button class="sendMessage-btn">ارسال</button>
      </form>
    </div>
    <img src="images/image 7.png">
  </div>
  
  <?php
$servername = "localhost"; // اسم خادم قاعدة البيانات
$username = "root"; // اسم مستخدم قاعدة البيانات
$password=""; // كلمة مرور قاعدة البيانات
$dbname = "science"; // اسم قاعدة البيانات

// اتصال بقاعدة البيانات
$conn = mysqli_connect($servername, $username, $password, $dbname);

// التحقق من الاتصال
if (!$conn) {
    die("فشل الاتصال: " . mysqli_connect_error());
}

// الحصول على القيم من النموذج
$name =   $_POST['name'];
$email =  $_POST['email'];
$subject =  $_POST['subject'];
$messge =  $_POST['messge'];

// استعلام SQL لإدراج بيانات داخل الجدول
$query = "INSERT INTO `sci_table`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$messge')";

// تنفيذ الاستعلام
if (mysqli_query($conn, $query)) {
  echo "تم اضافة اقتراحك بنجاح";
} else {
    echo "خطأ في الإضافة: " . mysqli_error($conn);
}

// إغلاق الاتصال
mysqli_close($conn);

?>



  <br>
  <br>
  <!--end-->

<footer>
    <div class="endd">
      <h6>مواقع ذات صلة
      <br>
      <br>
      <br>
        <a href="https://www.mohe.edu.kw/site/">وزارة التعليم العالي</a><br>
        <br>
        <a href="https://scu.eg/"> المجلس الأعلي للجامعات</a><br>
        <br>
        <a href="https://naqaae.eg/ar/">الهيئة القومية لضمان الجودة والتعليم</a> <br>
      </h6>
      <h6>بيانات الاتصال
        <br>
        <br>
        <a href="https://www.google.com.eg/maps/@31.0449837,31.3720198,14z?entry=ttu">المنصورة - شارع الجمهورية, جامعة المنصورة</a>
        <br>
        <br>
        <img src="images/call-calling.png">
        مكتب العميد 2202266 050 <br>
        <br>
        <img src="images/call-calling.png">
        وكيل الكلية لشئون التعليم والطلاب 2202264 050<br>
        <br>
        <img src="images/call-calling.png">
        وكيل الكلية لشئون الدراسات العليا والبحوث 2202271 050<br>
        <br>
        <img src="images/call-calling.png">
        وكيل الكلية لشئون خدمة المجتمع وتنمية البيئة 2202264 050<br>
        <br>
        <img src="images/sms.png">
        itunitsci@mans.edu.eg
      </h6>
  
      <h6> خريطه الوصول
        <br>
        <br>
        <img src="images/خرسطة الكلية.png" width="220" height="200" alt="Planets"
  usemap="#planetmap">
  
  <map name="planetmap">
    <area shape="rect" coords="0,0,82,126" href="https://www.google.com.eg/maps/place/%D8%AC%D8%A7%D9%85%D8%B9%D8%A9+%D8%A7%D9%84%D9%85%D9%86%D8%B5%D9%88%D8%B1%D8%A9%E2%80%AD/@31.0475516,31.3565393,16z/data=!4m6!3m5!1s0x14f79dd4295c80e9:0x29c566a018cecb77!8m2!3d31.0448903!4d31.3536867!16zL20vMDlkeHlu?entry=ttu" alt="Sun">
    <area shape="circle" coords="90,58,3" href="https://www.google.com.eg/maps/place/%D8%AC%D8%A7%D9%85%D8%B9%D8%A9+%D8%A7%D9%84%D9%85%D9%86%D8%B5%D9%88%D8%B1%D8%A9%E2%80%AD/@31.0475516,31.3565393,16z/data=!4m6!3m5!1s0x14f79dd4295c80e9:0x29c566a018cecb77!8m2!3d31.0448903!4d31.3536867!16zL20vMDlkeHlu?entry=ttu" alt="Mercury">
    <area shape="circle" coords="124,58,8" href="https://www.google.com.eg/maps/place/%D8%AC%D8%A7%D9%85%D8%B9%D8%A9+%D8%A7%D9%84%D9%85%D9%86%D8%B5%D9%88%D8%B1%D8%A9%E2%80%AD/@31.0475516,31.3565393,16z/data=!4m6!3m5!1s0x14f79dd4295c80e9:0x29c566a018cecb77!8m2!3d31.0448903!4d31.3536867!16zL20vMDlkeHlu?entry=ttu" alt="Venus">
  </map>
      </h6>
       
    </div>
    <center>
  <div class="foter"><br>
    جميع الحقوق محفوظة © 2024 مركز تقنية الاتصالات والمعلومات - جامعة المنصورة
  <br>
  <br>
  </div>
  </center>
  </footer>

  
  
</body>
</html>