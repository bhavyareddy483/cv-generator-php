<?php
//Start the session
session_start();
$sess = $_SESSION['login'];
//include "conn.php";
$dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "cv1";
 $con = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $con -> error);
//$email=$_GET["disha@gmail.com"];
$NAME='';
$ADDRESS="";
$CITY ="";
$STATE=""; 
$COUNTRY ="";
$BIRTHPLACE="";
$NATIONALITY="";
$EMAIL="";
$MOBILE="";
$SNAME="";
$SPERCENT="";
$PUC="";
$PUPERCENT="";
$COURSE="";
$SKILLS1="";
$POS1="";
$CO1="";
$POS2="";
$CO2="";
$POS3="";
$CO3="";
$BIRTHDAY="";
$COUNTRYCODE ="";
$POSTAL="";

if ($con){
  $query = "SELECT * FROM `ans` WHERE email = '$sess'";
  $res = mysqli_query($con,$query);
  while($row = mysqli_fetch_array($res)){
      // print_r($row);
      $NAME=$row['name'];
      $ADDRESS=$row['address'];
      $CITY=$row['city'];
      $STATE=$row['state'];
      $COUNTRY=$row['country'];
      $BIRTHPLACE=$row['birthPlace'];
      $NATIONALITY=$row['nationality'];
      $EMAIL=$row['email'];
      $MOBILE=$row['mobile'];
      $SNAME=$row['sname'];
      $SPERCENT=$row['spercent'];
      $PUC=$row['puc'];
      $PUPERCENT=$row['pupercent'];
      $COURSE=$row['course'];
      $SKILLS1=$row['skills1'];
      $POS1=$row['pos1'];
      $POS2=$row['pos2'];
      $POS3=$row['pos3'];
      $CO1=$row['co1'];
      $CO2=$row['co2'];
      $CO3=$row['co3'];
      $BIRTHDAY=$row['birthday'];
      $COUNTRYCODE=$row['countryCode'];
      $POSTAL=$row['postal'];

  }
}




?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
    <html class="supernova"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Update Your CV</title>
    <link href="https://cdn.jotfor.ms/static/formCss.css?3.3.16455" rel="stylesheet" type="text/css" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.16455" />
    <link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.16455" />
    <link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?themeRevisionID=5dca5ac9a5e86d17235d90c1"/>
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=Gk80GG7PsDfe53YZlYlrTMoy7yUjOpkbFVafivcKuQKLFL8XozX8jpos_buCbAK8D7A-Ynp7Wp3SK78vcWhd63C-cBlCEypRJtnmvSbDnq1BXQin67aKGZlBxDaOw0qpJe0znAYmyJYQpatpSYeZbaGUY3cpr92ycIGFPjGul78OjWDgwKLsHl11Ry1vOYgBfTfc7qf90h3nKd7W-FCrcUUDYKB0UU6IuNHG8coXezgWBU3pYYneAjPvF_IYBAIK4De68m8jT7P8C0CP0stR6kx2SHfMVf7KutDcs3sR0yhGZcdFZrVdPUoo3IYSZONeONrRUMSQrFPh8fxyqF3x-XecPJEEfxzZsv7XUORbo4NPGotFYwjzgUZX7zPyuWhYlltrD59q4pIQhDN5IKAsX9D7plhWMrToWWFRpHxsc1mMB67nJXzQJgkag0IAuIaFHI1gD7Cnan6BIY5NyYe1608RUqiNsQtY4CVeVucMpN2YB9XQLfi9NgKW27m7r3v85ou5XIkv5FutJ24hLC0Zy5scHOmKP9-7CmOzoCYipFtFvIRPv_xRTjC8a-Ak6N4KN6mgUskD24QXCJgmcuuOCtS7ZzpfI0qdQ9WC_f8P8PJ_Q2EhBNZosRXsTXovTJlKLeHu9VEyXsWplgGfUAE7yP9W8nsg78LdzUTAQvVgW1vTQiwVBXOx96EqdEwEgweu-d6N7gurFa4mG-PZx6LHhFbC8T5dG3KRLpHUzJLQC6SCLs4sIXLInIAk6KfQLwcEsZ_8ARFtCOhQYf6lQPnjuGQbnSzTW1_cZXXMuSkZE-v-w10nfLcP36oPjzzmxZC547NEkM8z_MAGNvQ1VsJsyFhIIL5gsTpLlAMFeVV10hq7yVIAxBgTimsTTcC3zI-bKPQOR83sR19VdDNVLmLmzaF-JuGf3PqP80Hczl32EeuY6kQg-YxCy4TvDwVDB8q4_ZDuRyKjzFbMeFYwst4Dpebql5AOLzhfXtevu1WQdqHVXZcE9mf-HtRWulfHfsuhi2VE9eaM9lsOcI69jFZOBxIINVlCwfHDtRIivKC_z-gLD93iYHifd-vVefn9gd3vbthIHiz2GYG6OT-Pijcfll8NeCzV6Ybvg0XRxJT3erq0WtQBZ646UoqrIVJosPCMkVS1CL-M4bX1qbRKPQWY_dO94mvxG6Qcswwb3plo3LsJo3m0I1kR8X7Ie67RW430sjNQHqfrrSfwtz1NVXHlcw" nonce="8f25a84d650d72b949616eaf4147c3d2" charset="UTF-8"></script><style type="text/css">
        .form-label-left{
            width:150px;
        }
        .form-line{
            padding-top:12px;
            padding-bottom:12px;
        }
        .form-label-right{
            width:150px;
        }
body{
    background-image: url(img/banner-bg.jpg);
}
        body, html{
 
            margin:0;
            padding:0;
        }
        .error{
          color: red;
        }
        .push-right{
          float:right;
        }
        .submit{
          border-radius: 7px;
          height: 50px;
          width: 75px;
        background-color: #ffb3b3;
        }
        .button {
          color: black;
  text-decoration: none;
  background-color: #ffb3b3;
  height: 50px;
  width: 75px;
  border-radius: 7px;
  padding: 2px 6px 2px 6px;
}
        .form-all{
            margin:0px auto;
            padding-top:0px;
            width:690px;
            color:#555 !important;
            font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
            font-size:14px;
        }
        .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
            color: false;
        }

    </style>

   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.min.js"></script>
    </script>
    </head>
    <body>
      <?php
$nameerr = $mobileerr = $emailerr = $birthPlaceerr = $ageerr = $photoerr = $addrerr= $cityerr = $stateerr = $postalerr = $countryerr = $nationalityerr = $edu1err =$skills1err = "";
$name =  $email = $age = $mobile = $birthPlace = $photo = $address = $city = $state = $post = $country = $nationality = $edu1 = $skills1 = "";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameerr = "First Name is required";
  }

   else {
    $name = test_input($_POST["name"]);
  }
  if (ctype_alpha($name) === false) {
            $nameerr = 'Name must only contain letters!';
}
  if (empty($_POST["email"])) {
    $emailerr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["age"])) {
    $ageerr = "age is required";
  } else {
    $age = test_input($_POST["age"]);
  }

  if (empty($_POST["birthPlace"])) {
    $birthPlaceerr = "birth place required";
  } else {
    $birthPlace = test_input($_POST["birthPlace"]);
  }
   if (ctype_alpha($birthPlace) === false) {
            $birthPlaceerr = 'place must only contain letters!';
}
  if (empty($_POST["mobile"])) {
    $mobileerr = "Mobile number is required";
  } else {
    $mobile = test_input($_POST["mobile"]);
  }
    if (empty($_POST["photo"])) {
    $photoerr = "photo is to be chosen";
  } else {
    $photo = test_input($_POST["photo"]);
  }
    if (empty($_POST["address"])) {
    $addrerr = "";
  } else {
    $address = test_input($_POST["address"]);
  }
   
  if (empty($_POST["city"])) {
    $cityerr = "";
  } else {
    $city = test_input($_POST["city"]);
  }
   if (ctype_alpha($city) === false) {
            $cityerr = 'city must only contain letters!';
}
  if (empty($_POST["state"])) {
    $stateerr = "";
  } else {
    $state = test_input($_POST["state"]);
  } if (ctype_alpha($state) === false) {
            $stateerr = 'State must only contain letters!';
}
  if (empty($_POST["postal"])) {
    $postalerr = "";
  } else {
    $postal = test_input($_POST["postal"]);
  }
  if (empty($_POST["edu1"])) {
    $edu1err = "";
  } else {
    $edu1 = test_input($_POST["edu1"]);
  }
   if (ctype_alpha($edu1) === false) {
            $edu1err = 'Education must only contain letters!';
}
  if (empty($_POST["skills1"])) {
    $skills1err = "";
  } else {
    $ski1 = test_input($_POST["skills1"]);
  }
 if (ctype_alpha($skills1) === false) {
            $skills1err = 'skills1 must only contain letters!';
}
}
?>
              <a href="options.html" class="btn btn-primary" style= "border-radius: 25px ;margin-left: 20px;background-color: white;color: black; font-family: cursive;"> <span class="network-name">BACK</span></a>

<form method="post" action="#" >
     <div role="main" class="form-all">
        <ul class="form-section page-section">
          <li id="cid_224" class="form-input-wide" data-type="control_head">
            <div class="form-header-group  header-default">
              <div class="header-text httal htvam">
                <h2 id="header_224" class="form-header" data-component="header">
                  CV DETAILS
                </h2>
                <div id="subHeader_224" class="form-subHeader">
                  Update your CV
                </div>
              </div>
            </div>
          </li>
          </li>
         <!--  <li class="form-line" data-type="control_fullname" id="id_212">
             <label>Name:<span><input type="text" style="width:125px;font-weight: bold;color:black;text-align: left" name="name" size="21" value="<?php echo $NAME; ?>"></span></label>          
            <div id="cid_212" class="form-input">
                 <span class="error">* <?php echo $nameerr;?></span>
                  </div></li>  -->
  <!-- <label>Name:<span><input type="text" style="width:125px;font-weight: bold;color:black;text-align: left" name="name" size="21" value="<?php echo $NAME; ?>"></span></label>           -->

<li class="form-line" data-type="control_fullname" id="id_212">
            <label class="form-label form-label-left form-label-auto" id="label_212" for="first_212"> Full Name </label>
            <div id="cid_212" class="form-input">
                  <input type="text" id="name" name="name" size="10" value="<?php echo $NAME; ?>"/>
                   <!-- <input type="text" id="pu_per" name="pupercent" style="width:100px"  value=""/>  
                   -->
                  <span class="error">* <?php echo $nameerr;?></span>
                  </div></li> 


          <li class="form-line" data-type="control_address" id="id_215">
            <label class="form-label form-label-left form-label-auto" id="label_215" for="input_215undefined" > Address </label>
            <div id="cid_215" class="form-input">
              <table summary="" class="form-address-table">
                <tbody>
                  <tr>
                    <td colSpan="2">
                      <span class="form-sub-label-container " style="vertical-align:top">
                        <input type="text" id="addr" name="address" class="form-textbox form-address-line"  placeholder="house/flat number and stree address" data-component="address_line_1" aria-labelledby="label_215 sublabel_215_addr_line1" value="<?php echo $ADDRESS; ?>"/>
                         <label class="form-sub-label" for="input_215_city" id="sublabel_215_city" style="min-height:13px" aria-hidden="false"> street address </label>
                        <span class="error">* <?php echo $addrerr;?></span>

                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="form-sub-label-container " style="vertical-align:top">
                        <input type="text" id="input_215_city" name="city" class="form-textbox form-address-city" size="21"  data-component="city" aria-labelledby="label_215 sublabel_215_city" value="<?php echo $CITY ; ?>"/>
                       
                        <label class="form-sub-label" for="input_215_city" id="sublabel_215_city" style="min-height:13px" aria-hidden="false"> City </label>
                        <span class="error">* <?php echo $cityerr;?></span>

                      </span>
                    </td>
                    <td>
                      <span class="form-sub-label-container " style="vertical-align:top">
                        <input type="text" id="input_215_state" name="state" class="form-textbox form-address-state" size="22"  data-component="state" aria-labelledby="label_215 sublabel_215_state" value="<?php echo $STATE; ?>" />
            
                        <label class="form-sub-label" for="input_215_state" id="sublabel_215_state" style="min-height:13px" aria-hidden="false"> State / Province </label>
                       <span class="error">* <?php echo $stateerr;?></span>

   </span>
                   </td>
                    </tr>
                    <tr>
                      <td>
                        <span class="form-sub-label-container " style="vertical-align:top">
                          <input type="text" id="input_215_postal" name="postal" class="form-textbox form-address-postal" size="10" placeholder="6 digits"  data-component="zip" aria-labelledby="label_215 sublabel_215_postal" value="<?php echo $POSTAL; ?>"/>

                          <label class="form-sub-label" for="input_215_postal" id="sublabel_215_postal" style="min-height:13px" aria-hidden="false"> Postal / Zip Code </label>
                         <span class="error">* <?php echo $postalerr;?></span>
                        </span>
                      </td>
                      <td>
                        <span class="form-sub-label-container " style="vertical-align:top">
                          <select class="form-dropdown form-address-country noTranslate" name="country" id="input_215_country" data-component="country" required="" aria-labelledby="label_215 sublabel_215_country"  value="<?php echo $COUNTRY ; ?>">
                            <!--<option value=""> Please Select </option> -->
                              <option value="India" Selected>India</option>

                            <option value="United States"> United States </option>
                            <option value="Afghanistan"> Afghanistan </option>
                            <option value="Albania"> Albania </option>
                            <option value="Algeria"> Algeria </option>
                            <option value="American Samoa"> American Samoa </option>
                            <option value="Andorra"> Andorra </option>
                            <option value="Angola"> Angola </option>
                            <option value="Anguilla"> Anguilla </option>
                            <option value="Antigua and Barbuda"> Antigua and Barbuda </option>
                            <option value="Argentina"> Argentina </option>
                            <option value="Armenia"> Armenia </option>
                            <option value="Aruba"> Aruba </option>
                            <option value="Australia"> Australia </option>
                            <option value="Austria"> Austria </option>
                            <option value="Azerbaijan"> Azerbaijan </option>
                            <option value="The Bahamas"> The Bahamas </option>
                            <option value="Bahrain"> Bahrain </option>
                            <option value="Bangladesh"> Bangladesh </option>
                            <option value="Barbados"> Barbados </option>
                            <option value="Belarus"> Belarus </option>
                            <option value="Belgium"> Belgium </option>
                            <option value="Belize"> Belize </option>
                            <option value="Benin"> Benin </option>
                            <option value="Bermuda"> Bermuda </option>
                            <option value="Bhutan"> Bhutan </option>
                            <option value="Bolivia"> Bolivia </option>
                            <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
                            <option value="Botswana"> Botswana </option>
                            <option value="Brazil"> Brazil </option>
                            <option value="Brunei"> Brunei </option>
                            <option value="Bulgaria"> Bulgaria </option>
                            <option value="Burkina Faso"> Burkina Faso </option>
                            <option value="Burundi"> Burundi </option>
                            <option value="Cambodia"> Cambodia </option>
                            <option value="Cameroon"> Cameroon </option>
                            <option value="Canada"> Canada </option>
                            <option value="Cape Verde"> Cape Verde </option>
                            <option value="Cayman Islands"> Cayman Islands </option>
                            <option value="Central African Republic"> Central African Republic </option>
                            <option value="Chad"> Chad </option>
                            <option value="Chile"> Chile </option>
                            <option value="China"> China </option>
                            <option value="Christmas Island"> Christmas Island </option>
                            <option value="Cocos (Keeling) Islands"> Cocos (Keeling) Islands </option>
                            <option value="Colombia"> Colombia </option>
                            <option value="Comoros"> Comoros </option>
                            <option value="Congo"> Congo </option>
                            <option value="Cook Islands"> Cook Islands </option>
                            <option value="Costa Rica"> Costa Rica </option>
                            <option value="Cote d&#x27;Ivoire"> Cote d&#x27;Ivoire </option>
                            <option value="Croatia"> Croatia </option>
                            <option value="Cuba"> Cuba </option>
                            <option value="Cyprus"> Cyprus </option>
                            <option value="Czech Republic"> Czech Republic </option>
                            <option value="Democratic Republic of the Congo"> Democratic Republic of the Congo </option>
                            <option value="Denmark"> Denmark </option>
                            <option value="Djibouti"> Djibouti </option>
                            <option value="Dominica"> Dominica </option>
                            <option value="Dominican Republic"> Dominican Republic </option>
                            <option value="Ecuador"> Ecuador </option>
                            <option value="Egypt"> Egypt </option>
                            <option value="El Salvador"> El Salvador </option>
                            <option value="Equatorial Guinea"> Equatorial Guinea </option>
                            <option value="Eritrea"> Eritrea </option>
                            <option value="Estonia"> Estonia </option>
                            <option value="Ethiopia"> Ethiopia </option>
                            <option value="Falkland Islands"> Falkland Islands </option>
                            <option value="Faroe Islands"> Faroe Islands </option>
                            <option value="Fiji"> Fiji </option>
                            <option value="Finland"> Finland </option>
                            <option value="France"> France </option>
                            <option value="French Polynesia"> French Polynesia </option>
                            <option value="Gabon"> Gabon </option>
                            <option value="The Gambia"> The Gambia </option>
                            <option value="Georgia"> Georgia </option>
                            <option value="Germany"> Germany </option>
                            <option value="Ghana"> Ghana </option>
                            <option value="Gibraltar"> Gibraltar </option>
                            <option value="Greece"> Greece </option>
                            <option value="Greenland"> Greenland </option>
                            <option value="Grenada"> Grenada </option>
                            <option value="Guadeloupe"> Guadeloupe </option>
                            <option value="Guam"> Guam </option>
                            <option value="Guatemala"> Guatemala </option>
                            <option value="Guernsey"> Guernsey </option>
                            <option value="Guinea"> Guinea </option>
                            <option value="Guinea-Bissau"> Guinea-Bissau </option>
                            <option value="Guyana"> Guyana </option>
                            <option value="Haiti"> Haiti </option>
                            <option value="Honduras"> Honduras </option>
                            <option value="Hong Kong"> Hong Kong </option>
                            <option value="Hungary"> Hungary </option>
                            <option value="Iceland"> Iceland </option>
                            <option value="India"> India </option>
                            <option value="Indonesia"> Indonesia </option>
                            <option value="Iran"> Iran </option>
                            <option value="Iraq"> Iraq </option>
                            <option value="Ireland"> Ireland </option>
                            <option value="Israel"> Israel </option>
                            <option value="Italy"> Italy </option>
                            <option value="Jamaica"> Jamaica </option>
                            <option value="Japan"> Japan </option>
                            <option value="Jersey"> Jersey </option>
                            <option value="Jordan"> Jordan </option>
                            <option value="Kazakhstan"> Kazakhstan </option>
                            <option value="Kenya"> Kenya </option>
                            <option value="Kiribati"> Kiribati </option>
                            <option value="North Korea"> North Korea </option>
                            <option value="South Korea"> South Korea </option>
                            <option value="Kosovo"> Kosovo </option>
                            <option value="Kuwait"> Kuwait </option>
                            <option value="Kyrgyzstan"> Kyrgyzstan </option>
                            <option value="Laos"> Laos </option>
                            <option value="Latvia"> Latvia </option>
                            <option value="Lebanon"> Lebanon </option>
                            <option value="Lesotho"> Lesotho </option>
                            <option value="Liberia"> Liberia </option>
                            <option value="Libya"> Libya </option>
                            <option value="Liechtenstein"> Liechtenstein </option>
                            <option value="Lithuania"> Lithuania </option>
                            <option value="Luxembourg"> Luxembourg </option>
                            <option value="Macau"> Macau </option>
                            <option value="Macedonia"> Macedonia </option>
                            <option value="Madagascar"> Madagascar </option>
                            <option value="Malawi"> Malawi </option>
                            <option value="Malaysia"> Malaysia </option>
                            <option value="Maldives"> Maldives </option>
                            <option value="Mali"> Mali </option>
                            <option value="Malta"> Malta </option>
                            <option value="Marshall Islands"> Marshall Islands </option>
                            <option value="Martinique"> Martinique </option>
                            <option value="Mauritania"> Mauritania </option>
                            <option value="Mauritius"> Mauritius </option>
                            <option value="Mayotte"> Mayotte </option>
                            <option value="Mexico"> Mexico </option>
                            <option value="Micronesia"> Micronesia </option>
                            <option value="Moldova"> Moldova </option>
                            <option value="Monaco"> Monaco </option>
                            <option value="Mongolia"> Mongolia </option>
                            <option value="Montenegro"> Montenegro </option>
                            <option value="Montserrat"> Montserrat </option>
                            <option value="Morocco"> Morocco </option>
                            <option value="Mozambique"> Mozambique </option>
                            <option value="Myanmar"> Myanmar </option>
                            <option value="Nagorno-Karabakh"> Nagorno-Karabakh </option>
                            <option value="Namibia"> Namibia </option>
                            <option value="Nauru"> Nauru </option>
                            <option value="Nepal"> Nepal </option>
                            <option value="Netherlands"> Netherlands </option>
                            <option value="Netherlands Antilles"> Netherlands Antilles </option>
                            <option value="New Caledonia"> New Caledonia </option>
                            <option value="New Zealand"> New Zealand </option>
                            <option value="Nicaragua"> Nicaragua </option>
                            <option value="Niger"> Niger </option>
                            <option value="Nigeria"> Nigeria </option>
                            <option value="Niue"> Niue </option>
                            <option value="Norfolk Island"> Norfolk Island </option>
                            <option value="Turkish Republic of Northern Cyprus"> Turkish Republic of Northern Cyprus </option>
                            <option value="Northern Mariana"> Northern Mariana </option>
                            <option value="Norway"> Norway </option>
                            <option value="Oman"> Oman </option>
                            <option value="Pakistan"> Pakistan </option>
                            <option value="Palau"> Palau </option>
                            <option value="Palestine"> Palestine </option>
                            <option value="Panama"> Panama </option>
                            <option value="Papua New Guinea"> Papua New Guinea </option>
                            <option value="Paraguay"> Paraguay </option>
                            <option value="Peru"> Peru </option>
                            <option value="Philippines"> Philippines </option>
                            <option value="Pitcairn Islands"> Pitcairn Islands </option>
                            <option value="Poland"> Poland </option>
                            <option value="Portugal"> Portugal </option>
                            <option value="Puerto Rico"> Puerto Rico </option>
                            <option value="Qatar"> Qatar </option>
                            <option value="Republic of the Congo"> Republic of the Congo </option>
                            <option value="Romania"> Romania </option>
                            <option value="Russia"> Russia </option>
                            <option value="Rwanda"> Rwanda </option>
                            <option value="Saint Barthelemy"> Saint Barthelemy </option>
                            <option value="Saint Helena"> Saint Helena </option>
                            <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis </option>
                            <option value="Saint Lucia"> Saint Lucia </option>
                            <option value="Saint Martin"> Saint Martin </option>
                            <option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon </option>
                            <option value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines </option>
                            <option value="Samoa"> Samoa </option>
                            <option value="San Marino"> San Marino </option>
                            <option value="Sao Tome and Principe"> Sao Tome and Principe </option>
                            <option value="Saudi Arabia"> Saudi Arabia </option>
                            <option value="Senegal"> Senegal </option>
                            <option value="Serbia"> Serbia </option>
                            <option value="Seychelles"> Seychelles </option>
                            <option value="Sierra Leone"> Sierra Leone </option>
                            <option value="Singapore"> Singapore </option>
                            <option value="Slovakia"> Slovakia </option>
                            <option value="Slovenia"> Slovenia </option>
                            <option value="Solomon Islands"> Solomon Islands </option>
                            <option value="Somalia"> Somalia </option>
                            <option value="Somaliland"> Somaliland </option>
                            <option value="South Africa"> South Africa </option>
                            <option value="South Ossetia"> South Ossetia </option>
                            <option value="South Sudan"> South Sudan </option>
                            <option value="Spain"> Spain </option>
                            <option value="Sri Lanka"> Sri Lanka </option>
                            <option value="Sudan"> Sudan </option>
                            <option value="Suriname"> Suriname </option>
                            <option value="Svalbard"> Svalbard </option>
                            <option value="eSwatini"> eSwatini </option>
                            <option value="Sweden"> Sweden </option>
                            <option value="Switzerland"> Switzerland </option>
                            <option value="Syria"> Syria </option>
                            <option value="Taiwan"> Taiwan </option>
                            <option value="Tajikistan"> Tajikistan </option>
                            <option value="Tanzania"> Tanzania </option>
                            <option value="Thailand"> Thailand </option>
                            <option value="Timor-Leste"> Timor-Leste </option>
                            <option value="Togo"> Togo </option>
                            <option value="Tokelau"> Tokelau </option>
                            <option value="Tonga"> Tonga </option>
                            <option value="Transnistria Pridnestrovie"> Transnistria Pridnestrovie </option>
                            <option value="Trinidad and Tobago"> Trinidad and Tobago </option>
                            <option value="Tristan da Cunha"> Tristan da Cunha </option>
                            <option value="Tunisia"> Tunisia </option>
                            <option value="Turkey"> Turkey </option>
                            <option value="Turkmenistan"> Turkmenistan </option>
                            <option value="Turks and Caicos Islands"> Turks and Caicos Islands </option>
                            <option value="Tuvalu"> Tuvalu </option>
                            <option value="Uganda"> Uganda </option>
                            <option value="Ukraine"> Ukraine </option>
                            <option value="United Arab Emirates"> United Arab Emirates </option>
                            <option value="United Kingdom"> United Kingdom </option>
                            <option value="Uruguay"> Uruguay </option>
                            <option value="Uzbekistan"> Uzbekistan </option>
                            <option value="Vanuatu"> Vanuatu </option>
                            <option value="Vatican City"> Vatican City </option>
                            <option value="Venezuela"> Venezuela </option>
                            <option value="Vietnam"> Vietnam </option>
                            <option value="British Virgin Islands"> British Virgin Islands </option>
                            <option value="Isle of Man"> Isle of Man </option>
                            <option value="US Virgin Islands"> US Virgin Islands </option>
                            <option value="Wallis and Futuna"> Wallis and Futuna </option>
                            <option value="Western Sahara"> Western Sahara </option>
                            <option value="Yemen"> Yemen </option>
                            <option value="Zambia"> Zambia </option>
                            <option value="Zimbabwe"> Zimbabwe </option>
                            <option value="other"> Other </option>
                          </select>
                           <span class="error">* <?php echo $countryerr;?></span>


                          <label class="form-sub-label" for="input_215_country" id="sublabel_215_country" style="min-height:13px" aria-hidden="false"> Country </label>
                        </span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </li>
            <li class="form-line" data-type="control_birthdate" id="id_213">
              <label class="form-label form-label-left form-label-auto" id="label_18" for="input_18"> Birth Date </label>
              <input type="date" id="birthday" name="birthday"  value="<?php echo $BIRTHDAY; ?>">
              </li>
            <li class="form-line" data-type="control_textbox" id="id_18">
              <label class="form-label form-label-left form-label-auto" id="label_18" for="input_18"> Birth Place </label>
              <div id="cid_18" class="form-input">
                <input type="text" id="input_18" name="birthPlace" data-type="input-textbox" class="form-textbox" size="20"  placeholder=" " data-component="textbox" aria-labelledby="label_18"  value="<?php echo $BIRTHPLACE; ?>" />
                <span class="error">* <?php echo $birthPlaceerr;?></span>
              </div>
            </li>
            <li class="form-line" data-type="control_dropdown" id="id_225">
              <label class="form-label form-label-left form-label-auto" id="label_225" for="input_225"> Nationality </label>
              <div id="cid_225" class="form-input">
                <select class="form-dropdown" id="input_225" name="nationality" style="width:150px" data-component="dropdown" aria-labelledby="label_225"  value="">
                  <option value="India" Selected>India</option>

                  <option value="United States"> United States </option>
                  <option value="Afghanistan"> Afghanistan </option>
                  <option value="Albania"> Albania </option>
                  <option value="Algeria"> Algeria </option>
                  <option value="American Samoa"> American Samoa </option>
                  <option value="Andorra"> Andorra </option>
                  <option value="Angola"> Angola </option>
                  <option value="Anguilla"> Anguilla </option>
                  <option value="Antigua and Barbuda"> Antigua and Barbuda </option>
                  <option value="Argentina"> Argentina </option>
                  <option value="Armenia"> Armenia </option>
                  <option value="Aruba"> Aruba </option>
                  <option value="Australia"> Australia </option>
                  <option value="Austria"> Austria </option>
                  <option value="Azerbaijan"> Azerbaijan </option>
                  <option value="The Bahamas"> The Bahamas </option>
                  <option value="Bahrain"> Bahrain </option>
                  <option value="Bangladesh"> Bangladesh </option>
                  <option value="Barbados"> Barbados </option>
                  <option value="Belarus"> Belarus </option>
                  <option value="Belgium"> Belgium </option>
                  <option value="Belize"> Belize </option>
                  <option value="Benin"> Benin </option>
                  <option value="Bermuda"> Bermuda </option>
                  <option value="Bhutan"> Bhutan </option>
                  <option value="Bolivia"> Bolivia </option>
                  <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
                  <option value="Botswana"> Botswana </option>
                  <option value="Brazil"> Brazil </option>
                  <option value="Brunei"> Brunei </option>
                  <option value="Bulgaria"> Bulgaria </option>
                  <option value="Burkina Faso"> Burkina Faso </option>
                  <option value="Burundi"> Burundi </option>
                  <option value="Cambodia"> Cambodia </option>
                  <option value="Cameroon"> Cameroon </option>
                  <option value="Canada"> Canada </option>
                  <option value="Cape Verde"> Cape Verde </option>
                  <option value="Cayman Islands"> Cayman Islands </option>
                  <option value="Central African Republic"> Central African Republic </option>
                  <option value="Chad"> Chad </option>
                  <option value="Chile"> Chile </option>
                  <option value="China"> China </option>
                  <option value="Christmas Island"> Christmas Island </option>
                  <option value="Cocos (Keeling) Islands"> Cocos (Keeling) Islands </option>
                  <option value="Colombia"> Colombia </option>
                  <option value="Comoros"> Comoros </option>
                  <option value="Congo"> Congo </option>
                  <option value="Cook Islands"> Cook Islands </option>
                  <option value="Costa Rica"> Costa Rica </option>
                  <option value="Cote d&#x27;Ivoire"> Cote d&#x27;Ivoire </option>
                  <option value="Croatia"> Croatia </option>
                  <option value="Cuba"> Cuba </option>
                  <option value="Cyprus"> Cyprus </option>
                  <option value="Czech Republic"> Czech Republic </option>
                  <option value="Democratic Republic of the Congo"> Democratic Republic of the Congo </option>
                  <option value="Denmark"> Denmark </option>
                  <option value="Djibouti"> Djibouti </option>
                  <option value="Dominica"> Dominica </option>
                  <option value="Dominican Republic"> Dominican Republic </option>
                  <option value="Ecuador"> Ecuador </option>
                  <option value="Egypt"> Egypt </option>
                  <option value="El Salvador"> El Salvador </option>
                  <option value="Equatorial Guinea"> Equatorial Guinea </option>
                  <option value="Eritrea"> Eritrea </option>
                  <option value="Estonia"> Estonia </option>
                  <option value="Ethiopia"> Ethiopia </option>
                  <option value="Falkland Islands"> Falkland Islands </option>
                  <option value="Faroe Islands"> Faroe Islands </option>
                  <option value="Fiji"> Fiji </option>
                  <option value="Finland"> Finland </option>
                  <option value="France"> France </option>
                  <option value="French Polynesia"> French Polynesia </option>
                  <option value="Gabon"> Gabon </option>
                  <option value="The Gambia"> The Gambia </option>
                  <option value="Georgia"> Georgia </option>
                  <option value="Germany"> Germany </option>
                  <option value="Ghana"> Ghana </option>
                  <option value="Gibraltar"> Gibraltar </option>
                  <option value="Greece"> Greece </option>
                  <option value="Greenland"> Greenland </option>
                  <option value="Grenada"> Grenada </option>
                  <option value="Guadeloupe"> Guadeloupe </option>
                  <option value="Guam"> Guam </option>
                  <option value="Guatemala"> Guatemala </option>
                  <option value="Guernsey"> Guernsey </option>
                  <option value="Guinea"> Guinea </option>
                  <option value="Guinea-Bissau"> Guinea-Bissau </option>
                  <option value="Guyana"> Guyana </option>
                  <option value="Haiti"> Haiti </option>
                  <option value="Honduras"> Honduras </option>
                  <option value="Hong Kong"> Hong Kong </option>
                  <option value="Hungary"> Hungary </option>
                  <option value="Iceland"> Iceland </option>
                  <option value="India"> India </option>
                  <option value="Indonesia"> Indonesia </option>
                  <option value="Iran"> Iran </option>
                  <option value="Iraq"> Iraq </option>
                  <option value="Ireland"> Ireland </option>
                  <option value="Israel"> Israel </option>
                  <option value="Italy"> Italy </option>
                  <option value="Jamaica"> Jamaica </option>
                  <option value="Japan"> Japan </option>
                  <option value="Jersey"> Jersey </option>
                  <option value="Jordan"> Jordan </option>
                  <option value="Kazakhstan"> Kazakhstan </option>
                  <option value="Kenya"> Kenya </option>
                  <option value="Kiribati"> Kiribati </option>
                  <option value="North Korea"> North Korea </option>
                  <option value="South Korea"> South Korea </option>
                  <option value="Kosovo"> Kosovo </option>
                  <option value="Kuwait"> Kuwait </option>
                  <option value="Kyrgyzstan"> Kyrgyzstan </option>
                  <option value="Laos"> Laos </option>
                  <option value="Latvia"> Latvia </option>
                  <option value="Lebanon"> Lebanon </option>
                  <option value="Lesotho"> Lesotho </option>
                  <option value="Liberia"> Liberia </option>
                  <option value="Libya"> Libya </option>
                  <option value="Liechtenstein"> Liechtenstein </option>
                  <option value="Lithuania"> Lithuania </option>
                  <option value="Luxembourg"> Luxembourg </option>
                  <option value="Macau"> Macau </option>
                  <option value="Macedonia"> Macedonia </option>
                  <option value="Madagascar"> Madagascar </option>
                  <option value="Malawi"> Malawi </option>
                  <option value="Malaysia"> Malaysia </option>
                  <option value="Maldives"> Maldives </option>
                  <option value="Mali"> Mali </option>
                  <option value="Malta"> Malta </option>
                  <option value="Marshall Islands"> Marshall Islands </option>
                  <option value="Martinique"> Martinique </option>
                  <option value="Mauritania"> Mauritania </option>
                  <option value="Mauritius"> Mauritius </option>
                  <option value="Mayotte"> Mayotte </option>
                  <option value="Mexico"> Mexico </option>
                  <option value="Micronesia"> Micronesia </option>
                  <option value="Moldova"> Moldova </option>
                  <option value="Monaco"> Monaco </option>
                  <option value="Mongolia"> Mongolia </option>
                  <option value="Montenegro"> Montenegro </option>
                  <option value="Montserrat"> Montserrat </option>
                  <option value="Morocco"> Morocco </option>
                  <option value="Mozambique"> Mozambique </option>
                  <option value="Myanmar"> Myanmar </option>
                  <option value="Nagorno-Karabakh"> Nagorno-Karabakh </option>
                  <option value="Namibia"> Namibia </option>
                  <option value="Nauru"> Nauru </option>
                  <option value="Nepal"> Nepal </option>
                  <option value="Netherlands"> Netherlands </option>
                  <option value="Netherlands Antilles"> Netherlands Antilles </option>
                  <option value="New Caledonia"> New Caledonia </option>
                  <option value="New Zealand"> New Zealand </option>
                  <option value="Nicaragua"> Nicaragua </option>
                  <option value="Niger"> Niger </option>
                  <option value="Nigeria"> Nigeria </option>
                  <option value="Niue"> Niue </option>
                  <option value="Norfolk Island"> Norfolk Island </option>
                  <option value="Turkish Republic of Northern Cyprus"> Turkish Republic of Northern Cyprus </option>
                  <option value="Northern Mariana"> Northern Mariana </option>
                  <option value="Norway"> Norway </option>
                  <option value="Oman"> Oman </option>
                  <option value="Pakistan"> Pakistan </option>
                  <option value="Palau"> Palau </option>
                  <option value="Palestine"> Palestine </option>
                  <option value="Panama"> Panama </option>
                  <option value="Papua New Guinea"> Papua New Guinea </option>
                  <option value="Paraguay"> Paraguay </option>
                  <option value="Peru"> Peru </option>
                  <option value="Philippines"> Philippines </option>
                  <option value="Pitcairn Islands"> Pitcairn Islands </option>
                  <option value="Poland"> Poland </option>
                  <option value="Portugal"> Portugal </option>
                  <option value="Puerto Rico"> Puerto Rico </option>
                  <option value="Qatar"> Qatar </option>
                  <option value="Republic of the Congo"> Republic of the Congo </option>
                  <option value="Romania"> Romania </option>
                  <option value="Russia"> Russia </option>
                  <option value="Rwanda"> Rwanda </option>
                  <option value="Saint Barthelemy"> Saint Barthelemy </option>
                  <option value="Saint Helena"> Saint Helena </option>
                  <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis </option>
                  <option value="Saint Lucia"> Saint Lucia </option>
                  <option value="Saint Martin"> Saint Martin </option>
                  <option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon </option>
                  <option value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines </option>
                  <option value="Samoa"> Samoa </option>
                  <option value="San Marino"> San Marino </option>
                  <option value="Sao Tome and Principe"> Sao Tome and Principe </option>
                  <option value="Saudi Arabia"> Saudi Arabia </option>
                  <option value="Senegal"> Senegal </option>
                  <option value="Serbia"> Serbia </option>
                  <option value="Seychelles"> Seychelles </option>
                  <option value="Sierra Leone"> Sierra Leone </option>
                  <option value="Singapore"> Singapore </option>
                  <option value="Slovakia"> Slovakia </option>
                  <option value="Slovenia"> Slovenia </option>
                  <option value="Solomon Islands"> Solomon Islands </option>
                  <option value="Somalia"> Somalia </option>
                  <option value="Somaliland"> Somaliland </option>
                  <option value="South Africa"> South Africa </option>
                  <option value="South Ossetia"> South Ossetia </option>
                  <option value="South Sudan"> South Sudan </option>
                  <option value="Spain"> Spain </option>
                  <option value="Sri Lanka"> Sri Lanka </option>
                  <option value="Sudan"> Sudan </option>
                  <option value="Suriname"> Suriname </option>
                  <option value="Svalbard"> Svalbard </option>
                  <option value="eSwatini"> eSwatini </option>
                  <option value="Sweden"> Sweden </option>
                  <option value="Switzerland"> Switzerland </option>
                  <option value="Syria"> Syria </option>
                  <option value="Taiwan"> Taiwan </option>
                  <option value="Tajikistan"> Tajikistan </option>
                  <option value="Tanzania"> Tanzania </option>
                  <option value="Thailand"> Thailand </option>
                  <option value="Timor-Leste"> Timor-Leste </option>
                  <option value="Togo"> Togo </option>
                  <option value="Tokelau"> Tokelau </option>
                  <option value="Tonga"> Tonga </option>
                  <option value="Transnistria Pridnestrovie"> Transnistria Pridnestrovie </option>
                  <option value="Trinidad and Tobago"> Trinidad and Tobago </option>
                  <option value="Tristan da Cunha"> Tristan da Cunha </option>
                  <option value="Tunisia"> Tunisia </option>
                  <option value="Turkey"> Turkey </option>
                  <option value="Turkmenistan"> Turkmenistan </option>
                  <option value="Turks and Caicos Islands"> Turks and Caicos Islands </option>
                  <option value="Tuvalu"> Tuvalu </option>
                  <option value="Uganda"> Uganda </option>
                  <option value="Ukraine"> Ukraine </option>
                  <option value="United Arab Emirates"> United Arab Emirates </option>
                  <option value="United Kingdom"> United Kingdom </option>
                  <option value="Uruguay"> Uruguay </option>
                  <option value="Uzbekistan"> Uzbekistan </option>
                  <option value="Vanuatu"> Vanuatu </option>
                  <option value="Vatican City"> Vatican City </option>
                  <option value="Venezuela"> Venezuela </option>
                  <option value="Vietnam"> Vietnam </option>
                  <option value="British Virgin Islands"> British Virgin Islands </option>
                  <option value="Isle of Man"> Isle of Man </option>
                  <option value="US Virgin Islands"> US Virgin Islands </option>
                  <option value="Wallis and Futuna"> Wallis and Futuna </option>
                  <option value="Western Sahara"> Western Sahara </option>
                  <option value="Yemen"> Yemen </option>
                  <option value="Zambia"> Zambia </option>
                  <option value="Zimbabwe"> Zimbabwe </option>
                </select>
                  <span class="error">* <?php echo $nationalityerr;?></span>

              </div>
            </li>
            <li class="form-line" data-type="control_phone" id="id_226">
              <label class="form-label form-label-left form-label-auto" id="label_226" for="input_226_area"> Mobile Number </label>
              <div id="cid_226" class="form-input">
                <div data-wrapper-react="true">
                  <span class="form-sub-label-container " style="vertical-align:top" data-input-type="areaCode">
   <select name="countryCode" id=""  value="<?php echo $COUNTRYCODE ; ?>">
  <option data-countryCode="GB" value="44" Selected>UK (+44)</option>
  <option data-countryCode="US" value="1">USA (+1)</option>
  <optgroup label="Other countries">
    <option data-countryCode="DZ" value="213">Algeria (+213)</option>
    <option data-countryCode="AD" value="376">Andorra (+376)</option>
    <option data-countryCode="AO" value="244">Angola (+244)</option>
    <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
    <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
    <option data-countryCode="AR" value="54">Argentina (+54)</option>
    <option data-countryCode="AM" value="374">Armenia (+374)</option>
    <option data-countryCode="AW" value="297">Aruba (+297)</option>
    <option data-countryCode="AU" value="61">Australia (+61)</option>
    <option data-countryCode="AT" value="43">Austria (+43)</option>
    <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
    <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
    <option data-countryCode="BH" value="973">Bahrain (+973)</option>
    <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
    <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
    <option data-countryCode="BY" value="375">Belarus (+375)</option>
    <option data-countryCode="BE" value="32">Belgium (+32)</option>
    <option data-countryCode="BZ" value="501">Belize (+501)</option>
    <option data-countryCode="BJ" value="229">Benin (+229)</option>
    <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
    <option data-countryCode="BT" value="975">Bhutan (+975)</option>
    <option data-countryCode="BO" value="591">Bolivia (+591)</option>
    <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
    <option data-countryCode="BW" value="267">Botswana (+267)</option>
    <option data-countryCode="BR" value="55">Brazil (+55)</option>
    <option data-countryCode="BN" value="673">Brunei (+673)</option>
    <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
    <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
    <option data-countryCode="BI" value="257">Burundi (+257)</option>
    <option data-countryCode="KH" value="855">Cambodia (+855)</option>
    <option data-countryCode="CM" value="237">Cameroon (+237)</option>
    <option data-countryCode="CA" value="1">Canada (+1)</option>
    <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
    <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
    <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
    <option data-countryCode="CL" value="56">Chile (+56)</option>
    <option data-countryCode="CN" value="86">China (+86)</option>
    <option data-countryCode="CO" value="57">Colombia (+57)</option>
    <option data-countryCode="KM" value="269">Comoros (+269)</option>
    <option data-countryCode="CG" value="242">Congo (+242)</option>
    <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
    <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
    <option data-countryCode="HR" value="385">Croatia (+385)</option>
    <option data-countryCode="CU" value="53">Cuba (+53)</option>
    <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
    <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
    <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
    <option data-countryCode="DK" value="45">Denmark (+45)</option>
    <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
    <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
    <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
    <option data-countryCode="EC" value="593">Ecuador (+593)</option>
    <option data-countryCode="EG" value="20">Egypt (+20)</option>
    <option data-countryCode="SV" value="503">El Salvador (+503)</option>
    <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
    <option data-countryCode="ER" value="291">Eritrea (+291)</option>
    <option data-countryCode="EE" value="372">Estonia (+372)</option>
    <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
    <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
    <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
    <option data-countryCode="FJ" value="679">Fiji (+679)</option>
    <option data-countryCode="FI" value="358">Finland (+358)</option>
    <option data-countryCode="FR" value="33">France (+33)</option>
    <option data-countryCode="GF" value="594">French Guiana (+594)</option>
    <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
    <option data-countryCode="GA" value="241">Gabon (+241)</option>
    <option data-countryCode="GM" value="220">Gambia (+220)</option>
    <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
    <option data-countryCode="DE" value="49">Germany (+49)</option>
    <option data-countryCode="GH" value="233">Ghana (+233)</option>
    <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
    <option data-countryCode="GR" value="30">Greece (+30)</option>
    <option data-countryCode="GL" value="299">Greenland (+299)</option>
    <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
    <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
    <option data-countryCode="GU" value="671">Guam (+671)</option>
    <option data-countryCode="GT" value="502">Guatemala (+502)</option>
    <option data-countryCode="GN" value="224">Guinea (+224)</option>
    <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
    <option data-countryCode="GY" value="592">Guyana (+592)</option>
    <option data-countryCode="HT" value="509">Haiti (+509)</option>
    <option data-countryCode="HN" value="504">Honduras (+504)</option>
    <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
    <option data-countryCode="HU" value="36">Hungary (+36)</option>
    <option data-countryCode="IS" value="354">Iceland (+354)</option>
    <option data-countryCode="IN" value="91">India (+91)</option>
    <option data-countryCode="ID" value="62">Indonesia (+62)</option>
    <option data-countryCode="IR" value="98">Iran (+98)</option>
    <option data-countryCode="IQ" value="964">Iraq (+964)</option>
    <option data-countryCode="IE" value="353">Ireland (+353)</option>
    <option data-countryCode="IL" value="972">Israel (+972)</option>
    <option data-countryCode="IT" value="39">Italy (+39)</option>
    <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
    <option data-countryCode="JP" value="81">Japan (+81)</option>
    <option data-countryCode="JO" value="962">Jordan (+962)</option>
    <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
    <option data-countryCode="KE" value="254">Kenya (+254)</option>
    <option data-countryCode="KI" value="686">Kiribati (+686)</option>
    <option data-countryCode="KP" value="850">Korea North (+850)</option>
    <option data-countryCode="KR" value="82">Korea South (+82)</option>
    <option data-countryCode="KW" value="965">Kuwait (+965)</option>
    <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
    <option data-countryCode="LA" value="856">Laos (+856)</option>
    <option data-countryCode="LV" value="371">Latvia (+371)</option>
    <option data-countryCode="LB" value="961">Lebanon (+961)</option>
    <option data-countryCode="LS" value="266">Lesotho (+266)</option>
    <option data-countryCode="LR" value="231">Liberia (+231)</option>
    <option data-countryCode="LY" value="218">Libya (+218)</option>
    <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
    <option data-countryCode="LT" value="370">Lithuania (+370)</option>
    <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
    <option data-countryCode="MO" value="853">Macao (+853)</option>
    <option data-countryCode="MK" value="389">Macedonia (+389)</option>
    <option data-countryCode="MG" value="261">Madagascar (+261)</option>
    <option data-countryCode="MW" value="265">Malawi (+265)</option>
    <option data-countryCode="MY" value="60">Malaysia (+60)</option>
    <option data-countryCode="MV" value="960">Maldives (+960)</option>
    <option data-countryCode="ML" value="223">Mali (+223)</option>
    <option data-countryCode="MT" value="356">Malta (+356)</option>
    <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
    <option data-countryCode="MQ" value="596">Martinique (+596)</option>
    <option data-countryCode="MR" value="222">Mauritania (+222)</option>
    <option data-countryCode="YT" value="269">Mayotte (+269)</option>
    <option data-countryCode="MX" value="52">Mexico (+52)</option>
    <option data-countryCode="FM" value="691">Micronesia (+691)</option>
    <option data-countryCode="MD" value="373">Moldova (+373)</option>
    <option data-countryCode="MC" value="377">Monaco (+377)</option>
    <option data-countryCode="MN" value="976">Mongolia (+976)</option>
    <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
    <option data-countryCode="MA" value="212">Morocco (+212)</option>
    <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
    <option data-countryCode="MN" value="95">Myanmar (+95)</option>
    <option data-countryCode="NA" value="264">Namibia (+264)</option>
    <option data-countryCode="NR" value="674">Nauru (+674)</option>
    <option data-countryCode="NP" value="977">Nepal (+977)</option>
    <option data-countryCode="NL" value="31">Netherlands (+31)</option>
    <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
    <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
    <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
    <option data-countryCode="NE" value="227">Niger (+227)</option>
    <option data-countryCode="NG" value="234">Nigeria (+234)</option>
    <option data-countryCode="NU" value="683">Niue (+683)</option>
    <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
    <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
    <option data-countryCode="NO" value="47">Norway (+47)</option>
    <option data-countryCode="OM" value="968">Oman (+968)</option>
    <option data-countryCode="PW" value="680">Palau (+680)</option>
    <option data-countryCode="PA" value="507">Panama (+507)</option>
    <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
    <option data-countryCode="PY" value="595">Paraguay (+595)</option>
    <option data-countryCode="PE" value="51">Peru (+51)</option>
    <option data-countryCode="PH" value="63">Philippines (+63)</option>
    <option data-countryCode="PL" value="48">Poland (+48)</option>
    <option data-countryCode="PT" value="351">Portugal (+351)</option>
    <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
    <option data-countryCode="QA" value="974">Qatar (+974)</option>
    <option data-countryCode="RE" value="262">Reunion (+262)</option>
    <option data-countryCode="RO" value="40">Romania (+40)</option>
    <option data-countryCode="RU" value="7">Russia (+7)</option>
    <option data-countryCode="RW" value="250">Rwanda (+250)</option>
    <option data-countryCode="SM" value="378">San Marino (+378)</option>
    <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
    <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
    <option data-countryCode="SN" value="221">Senegal (+221)</option>
    <option data-countryCode="CS" value="381">Serbia (+381)</option>
    <option data-countryCode="SC" value="248">Seychelles (+248)</option>
    <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
    <option data-countryCode="SG" value="65">Singapore (+65)</option>
    <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
    <option data-countryCode="SI" value="386">Slovenia (+386)</option>
    <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
    <option data-countryCode="SO" value="252">Somalia (+252)</option>
    <option data-countryCode="ZA" value="27">South Africa (+27)</option>
    <option data-countryCode="ES" value="34">Spain (+34)</option>
    <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
    <option data-countryCode="SH" value="290">St. Helena (+290)</option>
    <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
    <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
    <option data-countryCode="SD" value="249">Sudan (+249)</option>
    <option data-countryCode="SR" value="597">Suriname (+597)</option>
    <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
    <option data-countryCode="SE" value="46">Sweden (+46)</option>
    <option data-countryCode="CH" value="41">Switzerland (+41)</option>
    <option data-countryCode="SI" value="963">Syria (+963)</option>
    <option data-countryCode="TW" value="886">Taiwan (+886)</option>
    <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
    <option data-countryCode="TH" value="66">Thailand (+66)</option>
    <option data-countryCode="TG" value="228">Togo (+228)</option>
    <option data-countryCode="TO" value="676">Tonga (+676)</option>
    <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
    <option data-countryCode="TN" value="216">Tunisia (+216)</option>
    <option data-countryCode="TR" value="90">Turkey (+90)</option>
    <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
    <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
    <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
    <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
    <option data-countryCode="UG" value="256">Uganda (+256)</option>
    <option data-countryCode="GB" value="44">UK (+44)</option>
    <option data-countryCode="UA" value="380">Ukraine (+380)</option>
    <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
    <option data-countryCode="UY" value="598">Uruguay (+598)</option>
    <!-- <option data-countryCode="US" value="1">USA (+1)</option>
    <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
    <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
    <option data-countryCode="VA" value="379">Vatican City (+379)</option>
    <option data-countryCode="VE" value="58">Venezuela (+58)</option>
    <option data-countryCode="VN" value="84">Vietnam (+84)</option>
    <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
    <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
    <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
    <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
    <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
    <option data-countryCode="ZM" value="260">Zambia (+260)</option>
    <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option> -->
  </optgroup>
 </select>

                    <span class="phone-separate" aria-hidden="true">
                       -
                    </span>
                    <label class="form-sub-label" for="input_226_area" id="sublabel_226_area" style="min-height:13px" aria-hidden="false"> Area Code </label>
                  </span>
                  <span class="form-sub-label-container " style="vertical-align:top" data-input-type="phone">
                    <input type="tel" id="input_226_phone" name="mobile" class="form-textbox" size="12"  data-component="phone" maxlength="10" aria-labelledby="label_226 sublabel_226_phone"  value="<?php echo $MOBILE; ?>"/>
                    <span class="error">* <?php echo $mobileerr;?></span>
                    <label class="form-sub-label" for="input_226_phone" id="sublabel_226_phone" style="min-height:13px" aria-hidden="false"> Phone Number </label>
                  </span>
                </div>
              </div>
            </li>
            <li class="form-line" data-type="control_email" id="id_13">
              <label class="form-label form-label-left form-label-auto" id="label_13" for="input_13"> Email Address </label>
              <div id="cid_13" class="form-input">
                <input type="email" id="input_13" name="email" class="form-textbox validate[Email]" size="30"  placeholder="ex: myname@example.com" data-component="email" aria-labelledby="label_13"  value="<?php echo $EMAIL; ?>"/>
                <span class="error">* <?php echo $emailerr;?></span>
              </div>
            </li>
            <!-- <li class="form-line" data-type="control_fileupload" id="id_223">
              
              <label class="form-label form-label-left form-label-auto" id="label_223" for="input_223"> Upload Your Recent Photo </label>
              <div id="cid_223" class="form-input">
                <input type="file" id="input_223" name="file" class="form-upload" data-imagevalidate="yes" data-file-accept="pdf, doc, docx, xls, csv, txt, rtf, html, zip, mp3, wma, mpg, flv, avi, jpg, jpeg, png, gif" data-file-maxsize="10240" data-file-minsize="0" data-file-limit="0" data-component="fileupload" />
                <span class="error">* <?php echo $photoerr;?></span>
              </div>
            </li> -->
        

            <li id="cid_20" class="form-input-wide" data-type="control_head">
              <div class="form-header-group  header-small">
                <div class="header-text httal htvam">
                  <h3 id="header_20" class="form-header" data-component="header">
                    Education Qualification
                  </h3>
                  <div id="subHeader_20" class="form-subHeader">
                    Tell us about your Education
                  </div><br>
                </div>
                <div id="cid_215" class="form-input">

             School(10th) :  
  <select name="sname"  value="<?php echo $SNAME; ?>">  
  <option value="ICSE" selected>ICSE</option>  
  <option value="CBSC">CBSC</option>  
  <option value="CISCE">CISCE</option>  
  <option value="ICSE">ICSE</option>  

  <option value="IB">IB</option>  
  <option value="IGCSE">IGCSE</option>  
  <option value="State Board">State Board</option>  
  </select>

 School percent:
 <input type="text" id="schoolper" style="width:150px" name="spercent"  value="<?php echo $SPERCENT; ?>"/> 
 <br><br>
 PUC(12th) :  
 <select name="puc"  value="<?php echo $PUC; ?>">  
  <option value="Commerce" selected>Commerce</option>  
  <option value="Commerce">Commerce</option>  
  <option value="Arts">Arts</option>  
  <option value="Science">Science</option>  
  <option value="Diploma">Diploma</option>   
  </select> 
  

 pupercent:
    <input type="text" id="pu_per" name="pupercent" style="width:100px"  value="<?php echo $PUPERCENT; ?>"/> 
 <br><br>

 Degree/Diplamo :  
<select name="course"  value="<?php echo $hdegreecrs; ?>">  
  <option value="Bcom" selected>BCOM</option>  
  <option value="Bca">Bca</option>  
  <option value="Bba">BBA</option> 
  <option value="Bba">BBA(Marketing)</option>
  <option value="BMS">BMS</option>
  <option value="Bba">BBA(Finance)</option>
  <option value="Bba">BBA(Human Resource Management)</option>
  <option value="Bba">BBA(Computer Apllication)</option>
  <option value="Bba">BBA(International Business)</option>
  <option value="BTTM">BTTM</option>
  <option value="Bba">BBA(Retail Management)</option>
  <option value="Diploma">Diploma in Business Management</option>
  <option value="Diploma">Diploma in Event Management</option>
  <option value="Diploma">Diploma in Front Office</option>
  <option value="Bba">BBA(Digital Marketing)</option>
  <option value="Bba">BBA(Logistics Management)</option>
  <option value="Bba">BBA(Tourism and Travel Management)</option>
  <option value="Diploma">Diploma(Diploma in Tourism and Travel Managemen)</option>
  <option value="Bba">BBA(Hospital Management)</option>
  <option value="Bba">BBA(Hotel Management)</option>
    <option value="Bba">BBA(Banking & Insurance)</option>
    <option value="Bba">BBA(Hospitality & Tourism)</option>
    <option value="Diploma">Diploma(Diploma in Human Resource Management)</option>
    <option value="BHM">BHM</option>
    
    <option value="BTM">BTM</option>
    <option value="ADBM">ADBM</option>
    <option value="BBA">BBA(Foriegn Trade</option>
    
   <option value="Bba">BBM</option>  
  <option value="Bcom">Bcom(Accountning & Finance)</option>
    <option value="Bcom">Bcom(Banking & Insurance)</option>
  <option value="Bcom">Bcom(Taxation)</option>
    <option value="Bcom">Bcom(Finance)</option>
      <option value="Bcom">Bcom(Accountancy)</option>
        <option value="Bcom">Bcom(Cooperation)</option>
          <option value="Bcom">Bcom(Banking Management)</option>
      <option value="Bcom">Bcom(Computer Science)</option>
        <option value="Bcom">Bcom(Information Technology)</option>
          <option value="Bcom">Bcom(Financial Markets)</option>
        <option value="Bcom">Bcom(Marketing)</option>
          <option value="Bcom">Bcom(E-Commerce)</option>
          <option value="Bcom">Bcom(Taxation And Finance)</option>
            <option value="Bcom">Bcom(Business Administartion)</option>
              <option value="Bcom">Bcom(FInancial Accounting)</option>
           <option value="Bcom">Bcom(Statistics)</option>
             <option value="Bcom">Bcom(Economics)</option>    
        <option value="Bcom">Bcom(Insurance Management)</option>
               
<option value="MBBS">Bachelor of Medicin,Bachelor of Surgery[MBBS]</option>
<option value="BTP">(Bachelor of Physiotherapy)</option>

<option value="BMLT">BMLT</option>
<option value="Diploma">Diploma(Diploma in Business Administration)</option>
<option value="Diploma">Diploma(Diploma in Finance Management)</option>
<option value="Diploma">Diploma(Diploma in Banking & Finance)</option> 
<option value="DMRD">DMRD(Diploma in Medical Radio Diagnosis)</option> 
<option value="DCP">DCP(Diploma in Clinical Pathology)</option>  
<option value="BOT">BOT</option>
<option value="Diploma">Diploma(Diploma in Operation Theatre technology)</option>
<option value="Diploma">Diploma(Diploma in Export and Import Management)</option>
<option value="Diploma">Diploma(Diploma in Accounting & Finance)</option>
<option value="Diploma">Diploma(Diploma in Medical Laboratory Technology)</option>
<option value="Diploma">Diploma(Diploma in Physiotherapy)</option>  
<option value="Diploma">DA(Diploma in Anaesthesia)</option> 
<option value="Diploma">Diploma(Diloma in Nursing)</option>
<option value="Diploma">Diploma(Diloma in Radiography)</option> 
<option value="Diploma">DMRT(Diloma in Radiology Therapy)</option>
<option value="D.ED">D.ED(Diloma in Education)</option>
 <option value="Diplamo">Diplamo in yoga</option> 
 <option value="Diplamo">Diplamo in Physical Education</option> 
  <option value="Diplamo">Diplamo in Textile Design</option>
   <option value="Diplamo">Diplamo in Multimedia & Animation</option>
   <option value="Diplamo">Diplamo in Jewellary Design</option>
    <option value="DCH">DCH(Diploma In Child Health)</option>
 <option value="D.T.ED">D.T.ED(Diplamo in Teacher Education)</option>
 <option value="DCH">DCH(Diploma In Dermatology)</option>
 <option value="DCH">DCH(Diploma In Clinical Research)</option>
<option value="BE">BE</option>  
  <option value="B.sc">B.sc(Physics)</option>
  <option value="B.sc">B.sc(Chemistry)</option>
  <option value="B.sc">B.sc(Computer Science)</option>
  <option value="B.sc">B.sc(Mathematics)</option> 
  <option value="B.sc">B.sc(Zoology)</option>
  <option value="B.sc">B.sc(Biotechnology)</option>
  <option value="B.sc">B.sc(MicroBiology)</option>
  <option value="B.sc">B.sc(Information Technology)</option>
  <option value="B.sc">B.sc(Home Science)</option>
  <option value="B.sc">B.sc(Geography)</option>
  <option value="B.sc">B.sc(Computer Applications)</option>
  <option value="B.sc">B.sc(Medical)</option>
  <option value="Diplamo">Diplamo in Food Production</option> 
  <option value="B.sc">B.sc(Visual Communication)</option>
  <option value="B.sc">B.sc(Optometry)</option>

  <option value="BEd">BEd(English)</option>
  <option value="BEd">BEd(Physical Science)</option> 
  <option value="BEd">BEd(History)</option>
  <option value="BEd">BEd(Biological Science)</option>
  <option value="BEd">BEd(Computer Science)</option>
  <option value="BEd">BEd(Commerce)</option>
  <option value="BEd">BEd(Economics)</option>
  <option value="BEd">BEd(Social Science)</option>
  <option value="BEd">BEd(Geography)</option>
  <option value="BEd">BEd(Physics)</option>
  <option value="BEd">BEd(Chemistry)</option>
   <option value="BEd">BEd(Psychology)</option>
  <option value="BEd">BEd(Political Science)</option>
  <option value="BEd">BEd(Physical Education)</option>
  <option value="BEd">BEd(Social Education)</option>
  <option value="BEd">BEd(Home Science)</option>
  <option value="B.DES">B.DES(Batchelor of Design)</option>
 <option value="B.DES">B.DES(Product Design)</option>
 <option value="B.DES">B.DES(Fashion Communication)</option>
 <option value="B.DES">B.DES(Communication Design)</option>
 <option value="B.DES">B.DES(Industrial Design)</option>
 <option value="B.DES">B.DES(Graphic Design)</option>
 <option value="B.DES">B.DES(Animation)</option>
<option value="Bcom">Bcom</option>  
  <option value="BA">BA(English)</option>
  <option value="BA">BA(Economics)</option>
  <option value="BA">BA(History)</option>
   <option value="BA">BA(Political Science)</option>
   <option value="BA">BA(Sociology)</option>
   <option value="BA">BA(Hindi)</option>
   <option value="BA">BA(Geography)</option>
   <option value="BA">BA(Sanskrit)</option>
   <option value="BA">BA(Physichology)</option>
   <option value="BA">BA(Education)</option>
   <option value="BA">BA(Phylosophy)</option>
   <option value="BA">BA(Home Science)</option>
   <option value="BA">BA(Mathematics)</option>
   <option value="BA">BA(Journalism and mass communucation)</option>
   <option value="BA">BA(Physical Education)</option>
   <option value="BA">BA(Public Administration)</option>
   <option value="BA">BA(Music)</option>
   <option value="BA">BA(Journalism)</option>
   <option value="BA">BA(Kannada)</option>
  <option value="B.TECH">B.TECH(Mechanical Engineering)</option>
  <option value="B.TECH">B.TECH(ComputerScience & Engineering)</option>
  <option value="B.TECH">B.TECH(Electronics&Communication Engineering)</option>
  <option value="BE">BE(Civil Engineering)</option>
  <option value="BE">BE(Mechanical Engineering)</option>
  <option value="B.TECH">B.TECH(Electrical&Electronics Engineering)</option>    
  <option value="BE">BE(Computer Science & Engineering)</option>
  <option value="B.TECH">B.TECH(Electronics&Communication Engineering)</option>
  <option value="B.TECH">B.TECH(Civil Engineering)</option>
  <option value="BE">BE(Information Technology)</option>
  <option value="BE">BE(Electronics&Communication Engineering)</option>
  <option value="BE">BE(Electrical Engineering)</option>
  <option value="BE">BE(Electrical&Electronics Engineering)</option>
  <option value="BE">BE(Electronics & Telecom Engineering)</option>
  <option value="B.TECH">B.TECH(Chemical Engineering)</option>
  <option value="B.TECH">B.TECH(Biotechnology)</option>
  <option value="B.TECH">B.TECH(AutoMobile Engineering)</option>
  <option value="B.TECH">B.TECH(Agricultural Engineering)</option>
  <option value="BE">BE(AutoMobile Engineering)</option>
  <option value="B.TECH">B.TECH(Food Technology)</option>
  <option value="BE">BE(Information Science Engineering)</option>
  <option value="BE">BE(Chemical Engineering)</option>
  <option value="BE">BE(Biomedical Engineering)</option>
   <option value="BE">BE(Auronautical Engineering)</option>
   <option value="B.TECH">B.TCH(Auronautical Engineering)</option>
   <option value="B.TECH">B.TECH(Mining Engineering)</option>
    <option value="B.TECH">B.TECH(Mechatronics Engineering)</option>
     <option value="B.TECH">B.TECH(Biomedical Engineering)</option>
    <option value="B.TECH">B.TECH(Petroleum Engineering)</option>
     <option value="B.TECH">B.TECH(Aerospace Engineering)</option>
    <option value="GNM">GNM(General Nursing & Midwifery)</option>
   <option value="P.B.B.Sc">P.B.B.Sc(Nursing)</option>
  <option value="ANM">ANM(Auxiliary Nursing Midwifery)</option>
 <option value="B.Optom">B.Optom(Batchelor of Optemetry)</option>
 </select>  


              </div>
            
              </div>
            </li>
            </li>
            <li id="cid_20" class="form-input-wide" data-type="control_head">
              <div class="form-header-group  header-small">
                <div class="header-text httal htvam">
                  <h3 id="header_20" class="form-header" data-component="header">
                    Skills And Ability
                  </h3>
                  <h5>List your skills</h5>
                  </div>
                <div class="form-group">
  <label for="comment">skills</label>
  <input type="text" class="form-control" rows="5" name="skills1" value="<?php echo $SKILLS1; ?>"></input> 
<!--  <textarea class="form-control" rows="5" name="skills1" placeholder="Enter the skills "id="skillsnew" value="<?php echo $SKILLS1; ?>"></textarea>-->
</div>

              </div>
    </li>
            <li id="cid_102" class="form-input-wide" data-type="control_head">
              <div class="form-header-group  header-default">
                <div class="header-text httal htvam">
                  <h2 id="header_102" class="form-header" data-component="header">
                    Experience
                  </h2>
                  <div id="subHeader_102" class="form-subHeader">
                    Tell us about your work background
                  </div>
                </div>
<button type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample" style="width:300px;font-weight: bold;text-align: left">
    Work1 <span class="glyphicon glyphicon-menu-hamburger push-right"></span> </button>

<div class="collapse" id="collapseExample1">
  <div class="card card-body">
    <br>
    <label>Position:<span><input type="text" style="width:125px;font-weight: bold;text-align: left" name="pos1" size="21"  value="<?php echo $POS1; ?>"></span></label>
    <label>Company:<span><input type="text" style="width:125px;font-weight: bold;text-align: left" name="co1" size="21"  value="<?php echo $CO1; ?>"></span></label>
  </div>

</div><br>
<button type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample" style="width:300px;font-weight: bold;text-align: left">
    Work2 <span class="glyphicon glyphicon-menu-hamburger push-right"></span>  </button>

<div class="collapse" id="collapseExample2">
  <div class="card card-body">
    <br>
    <label>Position:<span><input type="text" style="width:125px;font-weight: bold;text-align: left" name="pos2" size="21"  value="<?php echo $POS2; ?>"></span></label>
    <label>Company:<span><input type="text" style="width:125px;font-weight: bold;text-align: left" name="co2" size="21"  value="<?php echo $CO2; ?>"></span></label>
  </div>
  
</div><br>
<button type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample" style="width:300px;font-weight: bold;text-align: left">
    Work3  <span class="glyphicon glyphicon-menu-hamburger push-right"></span>  </button>

<div class="collapse" id="collapseExample3">
  <div class="card card-body">
    <br>
    <label>Position:<span><input type="text" style="width:125px;font-weight: bold;text-align: left" name="pos3" size="21"  value="<?php echo $POS3; ?>"></span></label>
    <label>Company:<span><input type="text" style="width:125px;font-weight: bold;text-align: left" name="co3" size="21"  value="<?php echo $CO3; ?>"></span></label>
  </div>
  
</div>

              </div>
            </li>
            </li>
</ul>
<center><p style="color: red;font-family: cursive;font-weight:bolder;font-size: 18px;">Please check the details you have entered</p></center>
        <br>
         <div data-align="auto" class="form-buttons-wrapper  ">
      <center><input class="update" type="submit" name="update"></center>
          <br>

<center>              <a href="templates.php" class="btn btn-primary" style= "border-radius: 25px ;background-color: white;color: black; font-family: cursive;"> <span class="network-name">NEXT</span></a></center>

             </div> </div>
    </form>

    </body>
    </html>
    

<?php
if(isset($_POST["update"]))
{ //taking all post data into varible
  $name = $_POST['name'];
  $address=$_POST['address'];
  $city=$_POST['city'];
  $state=$_POST['state'];
  $country=$_POST['country'];
  $birthPlace=$_POST['birthPlace'];
  $nationality=$_POST['nationality'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $sname=$_POST['sname'];
  $spercent=$_POST['spercent'];
  $puc=$_POST['puc'];
  $pupercent=$_POST['pupercent'];
  $course=$_POST['course'];
  $skills1=$_POST['skills1'];
  $pos1=$_POST['pos1'];
  $co1=$_POST['co1'];
  $pos2=$_POST['pos2'];

  $co2=$_POST['co2'];
  $pos3=$_POST['pos3'];
  $co3=$_POST['co3'];
  $birthday=$_POST['birthday'];
  $countryCode=$_POST['countryCode'];
  $postal=$_POST['postal'];


  // making Query
  $query = "UPDATE `ans` SET name='$name',address='$address',city='$city',state='$state',country='$country',birthPlace='$birthPlace',nationality='$nationality',email='$email',mobile='$mobile',sname='$sname',spercent='$spercent',puc='$puc',pupercent='$pupercent',course='$course',skills1='$skills1',pos1='$pos1',co1='$co1',pos2='$pos2',co2='$co2',pos3='$pos3',co3='$co3',birthday='$birthday',countryCode='$countryCode',postal='$postal' WHERE email='$sess'";
  $conn = mysqli_connect('localhost','root','','cv1');
  if($conn){  //if connection
  mysqli_query($conn ,$query);
  }else{
    echo "Connection is not established";  //if failed to establish conn.
  }
  

}
?>
