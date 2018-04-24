$(document).ready(function(){
    $('#tombolSignIn').click(function(){
        username = $('#usernameSignIn').val();
        pass = $('#passwordSignIn').val();
        $.getJSON('user.json',function(data){
            var login =false;
            $.each(data,function(i,data){
                if(data.username==username&&pass==data.password){
                    login = true;
                }
            })
            if(login){
                window.open("index.html","_self")
            }else{
                $('#peringatan').show(500);
            }
        })
    })
});
function hilang(){
    $('#peringatan').hide(500);
}