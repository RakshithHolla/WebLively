function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
    console.log('Name: ' + profile.getName());
    console.log('Image URL: ' + profile.getImageUrl());
    console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
    
    var dataString='Id='+profile.getId()+'&Name='+profile.getName()+'&ImgURL='+profile.getImageUrl()+'&Email='+profile.getEmail();

    $.ajax({
        type:"post",
        url:"http://localhost/LivelyProject/php/signin.php",
        data:dataString,
        cache:false,
        success:function successRedirect(){
            window.location="http://localhost/LivelyProject/html/MainMenu.php";
        },

        error:function errorMessage(){
            alert("Sign in error, Please try again later");
            //signOut();
        }
    });

}

function signOut() {

    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
}