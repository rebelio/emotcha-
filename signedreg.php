<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);
$servername = "localhost";
$username = "root";
$password = "limboda";
$length = 30;
$appid = substr(str_shuffle("012345fdsfsfsf6789aaaaaabcdefghijklmasdadadnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
$appsecret = substr(str_shuffle("0123ssdaasdadasdad456789abcdefghasdada2342ijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
$uid = rand();
$calls=500;
$conn = mysqli_connect ($servername, $username, $password, "emotcha_db");
  $userName = $_POST['uname'];
  $email = $_POST['email'];
  $password =  $_POST['pass'];
  $cpassword =  $_POST['cpass'];
  $query = "INSERT INTO user_cred(username,email,password,appid,appsecret,uid,calls) VALUES ('$userName','$email','$password','$appid','$appsecret','$uid','$calls')";
  $data = mysqli_query($conn, $query);
  if($data)
  {
  
  }


echo "<html class=\"no-js\" lang=\"\">\n"; 
echo "    <head>\n"; 
echo "        <meta charset=\"utf-8\">\n"; 
echo "        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">\n"; 
echo "        <title></title>\n"; 
echo "        <meta name=\"description\" content=\"\">\n"; 
echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n"; 
echo "\n"; 
echo "        <link rel=\"apple-touch-icon\" href=\"apple-touch-icon.png\">\n"; 
echo "        <!-- Place favicon.ico in the root directory -->\n"; 
echo "\n"; 
echo "        <link rel=\"stylesheet\" href=\"css/normalize.css\">\n"; 
echo "        <link rel=\"stylesheet\" href=\"css/main.css\">\n"; 
echo "        <script src=\"js/vendor/modernizr-2.8.3.min.js\"></script>\n"; 
echo "        <style>\n"; 
echo "        * { box-sizing:border-box; }\n"; 
echo "\n"; 
echo "body {\n"; 
echo "    font-family: Helvetica;\n"; 
echo "    background: #eee;\n"; 
echo "  -webkit-font-smoothing: antialiased;\n"; 
echo "}\n"; 
echo ".header {\n"; 
echo "  position: fixed;\n"; 
echo "  left: 0;\n"; 
echo "  right: 0;\n"; 
echo "  height: 66px;\n"; 
echo "  top:0px;\n"; 
echo "  line-height: 66px;\n"; 
echo "  color: #fff;\n"; 
echo "  font-family: Helvetica;\n"; 
echo "  background-color: #4183D7;\n"; 
echo "}\n"; 
echo "\n"; 
echo "a {\n"; 
echo "  text-decoration: none;\n"; 
echo "  color: inherit;\n"; 
echo "}\n"; 
echo "\n"; 
echo ".header__logo {\n"; 
echo "  font-weight: 700;\n"; 
echo "  padding: 0 25px;\n"; 
echo "  float: left;\n"; 
echo "}\n"; 
echo "\n"; 
echo "/* MENU */\n"; 
echo ".menu {\n"; 
echo "  float: right;\n"; 
echo "  }\n"; 
echo "  .menu a {\n"; 
echo "    padding: 0 15px;\n"; 
echo "    margin-right: 15px;\n"; 
echo "    font-size: 14.3px;\n"; 
echo "    font-weight: 550;\n"; 
echo "  }\n"; 
echo "  \n"; 
echo "  a:hover {\n"; 
echo "    color: #c5cae9;\n"; 
echo "  }\n"; 
echo "\n"; 
echo "\n"; 
echo "\n"; 
echo "hgroup { \n"; 
echo "    text-align:center;\n"; 
echo "    margin-top: 1em;\n"; 
echo "}\n"; 
echo "\n"; 
echo "h1, h2 { font-weight: 300; }\n"; 
echo "\n"; 
echo "h1 { color: #636363; }\n"; 
echo "\n"; 
echo "h2 { color: #4a89dc; }\n"; 
echo "\n"; 
echo "form {\n"; 
echo "    width: 480px;\n"; 
echo "    margin: 1em auto;\n"; 
echo "    padding: 3em 2em 2em 2em;\n"; 
echo "    background: #fafafa;\n"; 
echo "    border: 1px solid #ebebeb;\n"; 
echo "    box-shadow: rgba(0,0,0,0.14902) 0px 1px 1px 0px,rgba(0,0,0,0.09804) 0px 1px 2px 0px;\n"; 
echo "}\n"; 
echo "\n"; 
echo ".group { \n"; 
echo "    position: relative; \n"; 
echo "    margin-bottom: 45px; \n"; 
echo "}\n"; 
echo "\n"; 
echo "input {\n"; 
echo "    font-size: 18px;\n"; 
echo "    padding: 10px 10px 10px 5px;\n"; 
echo "    -webkit-appearance: none;\n"; 
echo "    display: block;\n"; 
echo "    background: #fafafa;\n"; 
echo "    color: #636363;\n"; 
echo "    width: 100%;\n"; 
echo "    border: none;\n"; 
echo "    border-radius: 0;\n"; 
echo "    border-bottom: 1px solid #757575;\n"; 
echo "}\n"; 
echo "\n"; 
echo "input:focus { outline: none; }\n"; 
echo "\n"; 
echo "\n"; 
echo "/* Label */\n"; 
echo "\n"; 
echo "label {\n"; 
echo "    color: #999; \n"; 
echo "    font-size: 18px;\n"; 
echo "    font-weight: normal;\n"; 
echo "    position: absolute;\n"; 
echo "    pointer-events: none;\n"; 
echo "    left: 5px;\n"; 
echo "    top: 10px;\n"; 
echo "    transition: all 0.2s ease;\n"; 
echo "}\n"; 
echo "\n"; 
echo "\n"; 
echo "/* active */\n"; 
echo "\n"; 
echo "input:focus ~ label, input.used ~ label {\n"; 
echo "    top: -20px;\n"; 
echo "  transform: scale(.75); left: -2px;\n"; 
echo "    /* font-size: 14px; */\n"; 
echo "    color: #4a89dc;\n"; 
echo "}\n"; 
echo "\n"; 
echo "\n"; 
echo "/* Underline */\n"; 
echo "\n"; 
echo ".bar {\n"; 
echo "    position: relative;\n"; 
echo "    display: block;\n"; 
echo "    width: 100%;\n"; 
echo "}\n"; 
echo "\n"; 
echo ".bar:before, .bar:after {\n"; 
echo "    content: '';\n"; 
echo "    height: 2px; \n"; 
echo "    width: 0;\n"; 
echo "    bottom: 1px; \n"; 
echo "    position: absolute;\n"; 
echo "    background: #4a89dc; \n"; 
echo "    transition: all 0.2s ease;\n"; 
echo "}\n"; 
echo "\n"; 
echo ".bar:before { left: 50%; }\n"; 
echo "\n"; 
echo ".bar:after { right: 50%; }\n"; 
echo "\n"; 
echo "\n"; 
echo "/* active */\n"; 
echo "\n"; 
echo "input:focus ~ .bar:before, input:focus ~ .bar:after { width: 50%; }\n"; 
echo "\n"; 
echo "\n"; 
echo "/* Highlight */\n"; 
echo "\n"; 
echo ".highlight {\n"; 
echo "    position: absolute;\n"; 
echo "    height: 60%; \n"; 
echo "    width: 100px; \n"; 
echo "    top: 25%; \n"; 
echo "    left: 0;\n"; 
echo "    pointer-events: none;\n"; 
echo "    opacity: 0.5;\n"; 
echo "}\n"; 
echo "\n"; 
echo "\n"; 
echo "/* active */\n"; 
echo "\n"; 
echo "input:focus ~ .highlight {\n"; 
echo "    animation: inputHighlighter 0.3s ease;\n"; 
echo "}\n"; 
echo "\n"; 
echo "\n"; 
echo "/* Animations */\n"; 
echo "\n"; 
echo "@keyframes inputHighlighter {\n"; 
echo "    from { background: #4a89dc; }\n"; 
echo "    to  { width: 0; background: transparent; }\n"; 
echo "}\n"; 
echo "\n"; 
echo "\n"; 
echo "/* Button */\n"; 
echo "\n"; 
echo ".button {\n"; 
echo "  position: relative;\n"; 
echo "  display: inline-block;\n"; 
echo "  padding: 12px 24px;\n"; 
echo "  margin: .3em 0 1em 0;\n"; 
echo "  width: 100%;\n"; 
echo "  vertical-align: middle;\n"; 
echo "  color: #fff;\n"; 
echo "  font-size: 16px;\n"; 
echo "  line-height: 20px;\n"; 
echo "  -webkit-font-smoothing: antialiased;\n"; 
echo "  text-align: center;\n"; 
echo "  letter-spacing: 1px;\n"; 
echo "  background: transparent;\n"; 
echo "  border: 0;\n"; 
echo "  border-bottom: 2px solid #3160B6;\n"; 
echo "  cursor: pointer;\n"; 
echo "  transition: all 0.15s ease;\n"; 
echo "}\n"; 
echo ".button:focus { outline: 0; }\n"; 
echo "\n"; 
echo "\n"; 
echo "/* Button modifiers */\n"; 
echo "\n"; 
echo ".buttonBlue {\n"; 
echo "  background: #4a89dc;\n"; 
echo "  text-shadow: 2px 2px 0 rgba(39, 110, 204, .5);\n"; 
echo "}\n"; 
echo "\n"; 
echo ".buttonBlue:hover { background: #357bd8; }\n"; 
echo "\n"; 
echo "\n"; 
echo "/* Ripples container */\n"; 
echo "\n"; 
echo ".ripples {\n"; 
echo "  position: absolute;\n"; 
echo "  top: 0;\n"; 
echo "  left: 0;\n"; 
echo "  width: 100%;\n"; 
echo "  height: 100%;\n"; 
echo "  overflow: hidden;\n"; 
echo "  background: transparent;\n"; 
echo "}\n"; 
echo "\n"; 
echo "\n"; 
echo "/* Ripples circle */\n"; 
echo "\n"; 
echo ".ripplesCircle {\n"; 
echo "  position: absolute;\n"; 
echo "  top: 50%;\n"; 
echo "  left: 50%;\n"; 
echo "  transform: translate(-50%, -50%);\n"; 
echo "  opacity: 0;\n"; 
echo "  width: 0;\n"; 
echo "  height: 0;\n"; 
echo "  border-radius: 50%;\n"; 
echo "  background: rgba(255, 255, 255, 0.25);\n"; 
echo "}\n"; 
echo "\n"; 
echo ".ripples.is-active .ripplesCircle {\n"; 
echo "  animation: ripples .4s ease-in;\n"; 
echo "}\n"; 
echo "\n"; 
echo "\n"; 
echo "/* Ripples animation */\n"; 
echo "\n"; 
echo "@keyframes ripples {\n"; 
echo "  0% { opacity: 0; }\n"; 
echo "\n"; 
echo "  25% { opacity: 1; }\n"; 
echo "\n"; 
echo "  100% {\n"; 
echo "    width: 200%;\n"; 
echo "    padding-bottom: 200%;\n"; 
echo "    opacity: 0;\n"; 
echo "  }\n"; 
echo "}\n"; 
echo "\n"; 
echo "footer { text-align: center; }\n"; 
echo "\n"; 
echo "footer p {\n"; 
echo "    color: #888;\n"; 
echo "    font-size: 13px;\n"; 
echo "    letter-spacing: .4px;\n"; 
echo "}\n"; 
echo "\n"; 
echo "footer a {\n"; 
echo "    color: #4a89dc;\n"; 
echo "    text-decoration: none;\n"; 
echo "    transition: all .2s ease;\n"; 
echo "}\n"; 
echo "\n"; 
echo "footer a:hover {\n"; 
echo "    color: #666;\n"; 
echo "    text-decoration: underline;\n"; 
echo "}\n"; 
echo "\n"; 
echo "footer img {\n"; 
echo "    width: 80px;\n"; 
echo "    transition: all .2s ease;\n"; 
echo "}\n"; 
echo "\n"; 
echo "footer img:hover { opacity: .83; }\n"; 
echo "\n"; 
echo "footer img:focus , footer a:focus { outline: none; }\n"; 
echo "\n"; 
echo "        </style>\n"; 
echo "    </head>\n"; 
echo "    <body>\n"; 
echo "      <header class=\"header\">\n"; 
echo "      \n"; 
echo "      <a href=\"#\" class=\"header__icon\" id=\"header__icon\"></a>\n"; 
echo "      <a href=\"#\" class=\"header__logo\">EMOTCHA</a>\n"; 
echo "      \n"; 
echo "       <nav class=\"menu\">\n"; 
echo "        <a href=\"index.html \">HOME</a>\n"; 
echo "        <a href=\"docs.html\">DOCS</a>\n"; 
echo "        <a href=\"sample.html\">SAMPLE</a>\n"; 
echo "        <a href=\"signed.html\"><b>DASHBOARD</b></a>\n"; 
echo "        <a href=\"#\">LOGOUT</a>\n"; 
echo "      </nav>\n"; 
echo "      \n"; 
echo "    </header>\n"; 
echo "        <!--[if lt IE 8]>\n"; 
echo "            <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>\n"; 
echo "        <![endif]-->\n"; 
echo "\n"; 
echo "        <!-- Add your site or application content here -->\n"; 
echo "        <hgroup>\n"; 
echo "  <h1>A</h1>\n"; 
echo "  <h2>Howdy ".$userName."</h2>\n"; 
echo "</hgroup>\n"; 
echo "<form>\n"; 
echo "  <center><img src=\"super.png\" style=\"border-radius: 100px;\n"; 
echo "    border: 4px solid #4183D7;width:150px; height:150px; background-color:#89C4F4\"/></center><br><br>\n"; 
echo "  <div class=\"group\">\n"; 
echo "    <input type=\"text\" disabled value=\"username :".$userName."\"><span class=\"highlight\"></span><span class=\"bar\"></span>\n"; 
echo "    \n"; 
echo "  </div>\n"; 
echo "  <div class=\"group\">\n"; 
echo "    <input type=\"email\" disabled value=\"email : ".$email."\"><span class=\"highlight\"></span><span class=\"bar\"></span>\n"; 
echo "   \n"; 
echo "  </div>\n"; 
echo "   <div class=\"group\">\n"; 
echo "    <input type=\"text\" disabled value=\"apikey : ".$appkey."\"><span class=\"highlight\"></span><span class=\"bar\"></span>\n"; 
echo "    \n"; 
echo "  </div>\n"; 
echo "  <div class=\"group\">\n"; 
echo "    <input type=\"text\" disabled value=\"apisecret : ".$appsecret."\"><span class=\"highlight\"></span><span class=\"bar\"></span>\n"; 
echo "    \n"; 
echo "  </div>\n"; 
echo "  <div class=\"group\">\n"; 
echo "    <input type=\"text\" disabled value=\"number of calls remaining : ".$calls."\"><span class=\"highlight\"></span><span class=\"bar\"></span>\n"; 
echo "    \n"; 
echo "  </div>\n"; 
echo " \n"; 
echo "  \n"; 
echo "</form>\n"; 
echo "<footer><a href=\"http://www.polymer-project.org/\" target=\"_blank\"><img src=\"https://www.polymer-project.org/images/logos/p-logo.svg\"></a>\n"; 
echo "  <p>Secure forms? Delivered.  <a href=\"http://www.tudlr.com/\" target=\"_blank\">EMOTCHA</a></p>\n"; 
echo "</footer>\n"; 
echo "\n"; 
echo "        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>\n"; 
echo "        <script>window.jQuery || document.write('<script src=\"js/vendor/jquery-1.11.2.min.js\"><\/script>')</script>\n"; 
echo "        <script src=\"js/plugins.js\"></script>\n"; 
echo "        <script src=\"js/main.js\"></script>\n"; 
echo "        <script type=\"text/javascript\">\n"; 
echo "         $(window, document, undefined).ready(function() {\n"; 
echo "\n"; 
echo "  $('input').blur(function() {\n"; 
echo "    var $this = $(this);\n"; 
echo "    if ($this.val())\n"; 
echo "      $this.addClass('used');\n"; 
echo "    else\n"; 
echo "      $this.removeClass('used');\n"; 
echo "  });\n"; 
echo "\n"; 
echo "  var $ripples = $('.ripples');\n"; 
echo "\n"; 
echo "  $ripples.on('click.Ripples', function(e) {\n"; 
echo "\n"; 
echo "    var $this = $(this);\n"; 
echo "    var $offset = $this.parent().offset();\n"; 
echo "    var $circle = $this.find('.ripplesCircle');\n"; 
echo "\n"; 
echo "    var x = e.pageX - $offset.left;\n"; 
echo "    var y = e.pageY - $offset.top;\n"; 
echo "\n"; 
echo "    $circle.css({\n"; 
echo "      top: y + 'px',\n"; 
echo "      left: x + 'px'\n"; 
echo "    });\n"; 
echo "\n"; 
echo "    $this.addClass('is-active');\n"; 
echo "\n"; 
echo "  });\n"; 
echo "\n"; 
echo "  $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {\n"; 
echo "    $(this).removeClass('is-active');\n"; 
echo "  });\n"; 
echo "\n"; 
echo "});\n"; 
echo "        </script>\n"; 
?>

