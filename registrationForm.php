<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">



    <title>مدرسة براعم الذكر الخيرية</title>


    <link rel="stylesheet" href="./formStyle.css" type="text/css" />

  
</head>

<body bgcolor="#e6e6e6">

<?php
require_once("./formConn.php");
?>

    <div id="content">

        <div id="header">

            <span id="slt">
        <a href="./index.php">
          <img src="pic/sm.png" width="350px" height="150pxs">
        </a>
        <a href="./index.php">
          <img src="pic/sl.png" width="220px" height="150pxs">
        </a>
      </span>


      <br>
      <br>
      <br>


      <table align="center" id="nav" style="font-size: 15pt">
        <tr>
          <td>
            <a href="./index.php">الرئيسية</a>
          </td>

          <td>
            <a href="./eduSys.php">النظام التعليمي</a>
          </td>

          <td>
            <a href="./registrationForm.php">التسجيل و القبول</a>
          </td>

          <td>
            <a href="./communication.php">للتواصل</a>
          </td>

          <td>
            <a href="./schoolNews.php">اخبار المدرسة</a>
          </td>

          <td>
            <a href="./supportUs.php">ادعمنا</a>
          </td>

          <td>
            <a href="./jobForm.php">للعمل لدى المدرسة</a>
          </td>



                </tr>
            </table>

        </div>

        <h2 id="page-title">
            سجل ابنك في المدرسة
        </h2>

        <div class="row">

            <div class="col-md-2"></div>
            <div class="col-md-8">
            
                <div id="resgstration">


                    <form name="regForm" id="rf" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    
                        <div id="student">
                            <table border="1" class="registrationTables">
                                <th colspan="2" class="tableHeader">معلومات الطالب</th>
                                <tr>

                                    <td>المرحلة &nbsp &nbsp
                                        <input type="text" name="grade" required>
                                        <span class="reqq">* </span>
                                    </td>

                                    <td>الصف &nbsp &nbsp
                                        <input type="text" name="class" required>
                                        <span class="reqq">* </span>
                                        <br>
                                    </td>

                                </tr>
                                <tr>

                                    <td>اسم الطالب(الرباعي) &nbsp &nbsp
                                        <input type="text" name="fullName" required>
                                        <span class="reqq">* </span>
                                    </td>

                                    <td>الجنسية &nbsp &nbsp
                                        <input type="text" name="nationality" required>
                                        <span class="reqq">* </span>
                                        <br>
                                    </td>

                                </tr>
                                <tr>
                                    <td> بيانات هوية الطالب:
                                        <br> تاريخ الميلاد الميلادي:&nbsp &nbsp
                                        <input type="date" name="dobM" required min="2000-01-01">
                                        <span class="reqq">* </span>
                                        <br> دولة الميلاد:&nbsp &nbsp
                                        <input type="text" name="birthContry" required>
                                        <span class="reqq">* </span>
                                        <br> مكان الميلاد:&nbsp &nbsp
                                        <input type="text" name="birthCity" required>
                                        <span class="reqq">* </span>
                                        <br>
                                    </td>

                                    <td> بيانات ميلاد الطالب:
                                        <br> نوع الهوية:&nbsp &nbsp
                                        <input type="text" name="idType" required>
                                        <span class="reqq">* </span>
                                        <br> رقم الهوية: &nbsp &nbsp
                                        <input type="text" name="idNum" required minlength="10" maxlength="10">
                                        <span class="reqq">* </span>
                                        <br> محل الاصدار:&nbsp &nbsp
                                        <input type="text" name="idOrigin" required >
                                        <span class="reqq">* </span>
                                        <br> تاريخ انتهاء:&nbsp &nbsp
                                        <input type="date" name="idExp" required min="2017-01-01">
                                        <span class="reqq">* </span>
                                        <br>
                                    </td>

                                </tr>


                            </table>

                            <table border="1" class="registrationTables">

                                <th colspan="2" class="tableHeader">معلومات ولي الامر</th>

                                <tr>
                                    <td>الاسم &nbsp &nbsp
                                        <input type="text" name="fatherName" required>
                                        <span class="reqq">* </span>
                                        <br>
                                    </td>
                                    <td> صلة القرابة &nbsp &nbsp
                                        <input type="text" name="parentRel" required>
                                        <span class="reqq">* </span>
                                        <br>
                                    </td>



                                </tr>
                                <tr>
                                    <td>الجنسية &nbsp &nbsp
                                        <input type="text" name="pNationality" required>
                                        <span class="reqq">* </span>
                                        <br>
                                    </td>
                                    <td>رقم الهوية &nbsp &nbsp
                                        <input type="text" name="pIDnum" required minlength="10" maxlength="10">
                                        <span class="reqq">* </span>
                                        <br>
                                    </td>



                                </tr>
                                <tr>
                                    <td>نوع الهوية &nbsp &nbsp
                                        <input type="text" name="pIDType" required>
                                        <span class="reqq">* </span>
                                        <br>
                                    </td>
                                    <td>مصدرها &nbsp &nbsp
                                        <input type="text" name="pIDorigin" required>
                                        <span class="reqq">* </span>
                                        <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>تاريخ الاصدار &nbsp &nbsp
                                        <input type="date" name="pIDdateOFIssued" required min="1950-01-01">
                                        <span class="reqq">* </span>
                                        <br>
                                    </td>
                                    <td>تاريخ الانتهاء &nbsp &nbsp
                                        <input type="date" name="pIDExp" required min="2017-01-01">
                                        <span class="reqq">* </span>
                                        <br>
                                    </td>



                                </tr>



                            </table>


                            <table border="1" class="registrationTables">

                                <th class="tableHeader" colspan="2">بيانات السكن</th>

                                <tr>

                                    <td>اسم الحي &nbsp &nbsp
                                        <input type="text" name="districtName">
                                    </td>
                                    <td>اسم الشارع &nbsp &nbsp
                                        <input type="text" name="streetName">
                                        <br>
                                    </td>

                                </tr>
                                <tr>

                                    <td>رقم السكن &nbsp &nbsp
                                        <input type="text" name="HomeNum">
                                    </td>
                                    <td>اقرب معلم للسكن &nbsp &nbsp
                                        <input type="text" name="nearestSight">
                                        <br>
                                    </td>

                                </tr>
                                <tr>

                                    <td>بعد السكن عن المدرس بالكيلومتر تقريبا
                                        <input type="number" size="3" name="farDest">
                                    </td>
                                    <td>وسيلة المواصلات الى المدرسة
                                        <br>
                                        <input type="radio" name="schoolBus">مواصلات المدرسة &nbsp &nbsp
                                        <input type="radio" name="privateCar">مواصلات خاصة
                                    </td>

                                </tr>
                            </table>

                            <table border="1" class="registrationTables">

                                <th class="tableHeader" colspan="2">بيانات الاتصال</th>

                                <tr>
                                    <td>رقم جوال 1 &nbsp &nbsp
                                        <input type="text" name="mobile1" id="mobileNum1" placeholder="05xxxxxxxx" required minlength="10" maxlength="10">
                                        <span class="reqq">* </span>
                                    </td>
                                    <td>الصلة &nbsp &nbsp
                                        <input type="text" name="rel1" required>
                                        <span class="reqq">* </span>
                                        <br>
                                    </td>

                                </tr>
                                <tr>
                                    <td>رقم جوال 2 &nbsp &nbsp
                                        <input type="text" name="mobile2" id="mobileNum2" placeholder="05xxxxxxxx" required minlength="10" maxlength="10">
                                        <span class="reqq">* </span>
                                    </td>
                                    <td>الصلة &nbsp &nbsp
                                        <input type="text" name="rel2" required>
                                        <span class="reqq">* </span>
                                        <br>
                                    </td>

                                </tr>
                                <tr>
                                    <td>رقم جوال 3 &nbsp &nbsp
                                        <input type="text" name="mobile3" placeholder="05xxxxxxxx" minlength="10" maxlength="10">
                                    </td>
                                    <td>الصلة &nbsp &nbsp
                                        <input type="text" name="rel3">
                                        <br>
                                    </td>

                                </tr>
                                <tr>
                                    <td>رقم ثابت 1 &nbsp &nbsp
                                        <input type="text" name="telephone" id="tel1" placeholder="012xxxxxxx" required minlength="10" maxlength="10">
                                        <span class="reqq">* </span>
                                    </td>
                                    <td>الصلة &nbsp &nbsp
                                        <input type="text" name="teleRel1">
                                        <br>
                                    </td>

                                </tr>
                                <tr>
                                    <td>رقم ثابت 2 &nbsp &nbsp
                                        <input type="text" name="telephone2" minlength="10" maxlength="10">
                                    </td>
                                    <td>الصلة &nbsp &nbsp
                                        <input type="text" name="teleRel2" >
                                        <br>
                                    </td>

                                </tr>


                            </table>

                            <table class="registrationTables" border="1">

                                <th class="tableHeader">البريد الالكتروني</th>

                                <tr>
                                    <td>ايميل الطالب &nbsp &nbsp
                                        <input type="email" name="studentEmail">
                                        <br>
                                    </td>
                                </tr>

                                <tr>
                                    <td>كلمة السر للطالب &nbsp &nbsp
                                        <input type="password" name="s_pwd">
                                        <br>
                                    </td>
                                </tr>

                                <tr>
                                    <td>ايميل ولي الامر &nbsp &nbsp
                                        <input type="email" name="parentEmail" id="parentEmail" placeholder="example@email.com" required>
                                        <span class="reqq">* </span>
                                        <br>
                                    </td>
                                </tr>

                                <tr>
                                    <td>كلمة السر لولي الامر &nbsp &nbsp
                                        <input type="password" name="p_pwd" >
                                        <br>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>ايميل اخر &nbsp &nbsp
                                        <input type="email" name="otherEmail">
                                        <br>
                                    </td>
                                </tr>

                            </table>


                            <input type="submit" name="submit" id="submit" value="ارسال" >



                        </div>



                    </form>





                </div>


            </div>
            <div class="col-md-2"></div>





        </div>



    </div>


</body>




</html>