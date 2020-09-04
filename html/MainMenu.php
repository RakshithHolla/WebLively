<?php
/*
session_start();

if($_SESSION['loggedIn']=="true"){
    //echo "<h1>".$_SESSION['Id']."</h1>";
    //echo "<h1>".$_SESSION['Email']."</h1>";
}
else{
    header('Location:https://weblively.cf/index.html');
}*/
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lively</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="../css/sc.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="../js/sc.js"></script>

  </head>
  <body>


    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
         <img src="../img/logo-white.png" width="72" height="30" alt="">
    </nav>
    <div class="gap">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center padding txtcolor">
                <h1 class="display-4">Let's Begin With Conversation</h1>
            </div>
        </div>
        <div class="row  ">
            <div class="col-lg-12 col-sm-12  ">
                <div class="row p-5 ">
                    <div class="col-0 col-lg-2  col-md-0 "></div>

                    <div class="col-4  col-lg-3  col-md-4">
                        <button class="btn1" type="button" data-toggle="modal" data-target="#exampleModal" >
                            <img class="btnImg" src="../img/call-button.png"   alt="AUDIO CALL" />
                        </button>
                    </div>

                    <div class="col-4 col-lg-3  col-md-4">
                        <button class="btn1" type="button" data-toggle="modal" data-target="#exampleModal" >
                            <img class="btnImg" src="../img/video-call-button.png"  alt="VIDEO CALL" />
                        </button>
                    </div>

                    <div class="col-4 col-lg-3  col-md-4 ">
                        <button class="btn1" type="button" data-toggle="modal" data-target="#exampleModal1"  >
                            <img class="btnImg" src="../img/add-contact-button.png"alt="ADD CONTACT" />
                        </button>                    
                    </div>
                    <div class="col-0 col-lg-0  col-md-0 "></div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Contact(Mark The Contact And call)</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <ul>
                <li>
                    <div class="container">
                        <div class="row">
                            <div class="col-3 ">
                                <img src="../img/me.jpg" class="ListImage">
                            </div>
                            <div class="col-9  ">
                                <h5 class="UserName">Prasanna J S</h5>
                                <p class="UserMail">prasanna4800@gmail.com</p>
                                <div class="UserCBD">
                                    <input type="checkbox" value="1" class="UserCB" >
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="container">
                        <div class="row">
                            <div class="col-3 ">
                                <img src="../img/me.jpg" class="ListImage">
                            </div>
                            <div class="col-9 ">
                                <h5 class="UserName">Prasanna J S</h5>
                                <p class="UserMail">prasannaacharya38@gmail.com</p>
                                <div class="UserCBD">
                                    <input type="checkbox" value="2" class="UserCB" >
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                
                <li>
                    <div class="container">
                        <div class="row">
                            <div class="col-3 ">
                                <img src="../img/01.jpg" class="ListImage">
                            </div>
                            <div class="col-9 ">
                                <h5 class="UserName">Prasanna J S</h5>
                                <p class="UserMail">rakshithholla31@gmail.com</p>
                                 <div class="UserCBD">
                                    <input type="checkbox" value="3" class="UserCB"  >
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="modal-footer">
            <div  data-dismiss="modal" class="ModelButton">Close</div>
            <div   class="ModelButton" onclick="myFunc()">Call</div>
        </div>
        </div>
    </div>
    </div>
     <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Contact</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="Add Contact">
          <div >
            <input class="ModelInput" id="txtEmail"  placeholder="Enter Mail ID">
            <input class="ModelInput" id="txtPhone" placeholder="Enter Phone">
            <input class="ModelInput" placeholder="Enter Name">
          </div>
        </div>
        <div class="modal-footer">
            <div  data-dismiss="modal" class="ModelButton">Close</div>
            <div   class="ModelButton" onclick="checkEmail()" >Add</div>
        </div>
        </div>
    </div>
    </div>

    


    <script src="../js/MainMenuScript.js"></script>
    </body>
</html>
