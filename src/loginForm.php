<?php
//we need to start sesssion to check if user already exists

if (isset($_SESSION['username'])) {


    echo "<form action='processLogout.php' method='post'>";
    echo "<div class='cont-blue-top'>";
    echo "<p class='white top-text'>This is diary of " . $_SESSION['nickname'] . ", if this isn't you, press</p>";
    echo "<button class='btn-small'>Exit</button></div>";
    echo "</div>";
    echo "</form>";
    
} else {
    echo "<div class='cont-blue'>";
    echo " <div class='content1 leftg'>";
    echo "<h3 class='white header1'>Don't have an account?</h3>";
    echo "<hr class='hr1 line1'>";
    echo "<p class='text1 white'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>";
    echo "<button class='btn-blue' name='btn-to-signup' onclick='openSignUp()'>Sign up</button>";
    echo "</div>";
    
    echo "<div class='content2 rightg'>";
    echo "<h3 class='white header1'>Have an account?</h3>";
    echo "<hr class='hr1 line1'>";
    echo "<p class='text1 white'>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>";
    echo "<button class='btn-blue' name='btn-to-login' onclick='openLogIn()'>Login</button>";
    echo "</div>";
    echo "</div>";

    echo "<div class='relative-cont'>";

    echo "<div class='cont-white rightw' id='login' name='login'>";
    echo "<div class='triangle-top'></div>";
    echo "<div class='shadowbox'></div>";
    echo "<div class='triangle-bottom'></div>";

    echo "<form action='processLogin.php' method='post'>";
    echo "<div class='contentw2 margin65'>";

    echo "<h3 class='gray headerw2'>Login</h3>";
    echo "<div class='logow2 bottom'></div>";
    echo "<hr class='hr1 hr-2'>";
    echo "<div class='email2 bottom'>";
    echo "<label for='email2' class='input-label'>E-mail<sup>*</sup></label>";
    echo "<input type='email' class='input'  id='email2' name='username' placeholder='' required>";
    echo "</div>";
    echo "<div class='em_ico2 bottom'></div>";
    echo "<hr class='hr2 gap22'>";
    echo "<div class='pw2 bottom'>";
    echo "<label for='pw2' class='input-label'>Pasword<sup>*</sup></label>";
    echo "<input type='password' class='input' id='pw2' name='password' placeholder='' required>";
    echo "</div>";
    echo "<div class='pw_ico2 bottom'></div>";
    echo "<hr class='hr2 gap32'>";
    echo "<button class='btn-yellow btn-login' type='submit' name='btn-login' id='btn-login'>Login</button>";
    echo "<a href='forgot' class='forgot grey-light'>Forgot?</a>";

    echo "</div>";
    echo "</form>";
    echo "</div>";

    echo "<div class='cont-white leftw ' id='signup' name='signup'>";
    echo "<div class='triangle-top'></div>";
    echo "<div class='triangle-bottom'></div>";
    echo "<form action='processRegister.php' method='post'>";
            
    echo " <div class='contentw1'>";

    echo "<h3 class='gray headerw1'>Sign up</h3>";
    echo "<div class='logow1 bottom'></div>";
    echo "<hr class='hr1 hr-1'>";
    echo "<div class='user1 bottom'>";
    echo "<label for='nickname' class='input-label'>Name<sup>*</sup></label>";
    echo "<input type='text' class='input' id='nickname' name='nickname' placeholder='' required>";
    echo "</div>";
    echo "<div class='us_ico1 bottom'></div>";
    echo "<hr class='hr2 gap11'>";
    echo "<div class='email1 bottom'>";
    echo "<label for='email1' class='input-label'>E-mail<sup>*</sup></label>";
    echo "<input type='email' class='input' id='email1' name='username' placeholder='' required>";
    echo "</div>";
    echo "<div class='em_ico1 bottom'></div>";
    echo "<hr class='hr2 gap21'>";
    echo "<div class='pw1 bottom'>";
    echo "<label for='pw1' class='input-label'>Pasword<sup>*</sup></label>";
    echo "<input type='password' class='input' id='pw1' name='password' placeholder='' required>";
    echo "</div>";
    echo "<div class='pw_ico1 bottom'></div>";
    echo "<hr class='hr2 gap31'>";
    echo "<button class='btn-yellow btn-signup' type='submit' name='btn-signup' id='btn-signup'>Sign up</button>";

    echo "</div>";
    echo " </form>";
    echo "</div>";

    echo "</div>";


    if (isset($_GET['error'])) {
        switch ($_GET['error']) {
            case 'userexists':
                echo "<div class='warnings grey'><h3 class='warnings-text'><strong>Failed!</strong> User with this email already exists!</h3> <button class='warnings-close' type='button' id='close-btn'  >&times;</button></div>";
                break;
 
            case 'badlogin':
                echo "<div class='warnings grey'><h3 class='warnings-text'><strong>Failed!</strong> Incorrect password!</h3> <button class='warnings-close' type='button' id='close-btn'  >&times;</button></div>";
                break; 
            case 'nouser':
                echo "<div class='warnings grey'><h3 class='warnings-text'><strong>Failed!</strong> Incorrect e-mail or user doesn't exist!</h3> <button class='warnings-close' type='button' id='close-btn'  >&times;</button></div>";
                break;               
            default:
                echo "<div class='warnings grey'><h3 class='warnings-text'><strong>Failed! Error: " . $_GET['error'] . "!</h3> <button class='warnings-close' type='button' id='close-btn'  >&times;</button></div>";
                break;
            
        }
    }
    
}


