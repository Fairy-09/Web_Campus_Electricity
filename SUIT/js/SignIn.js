function SignInCheck(){
    var s_id=SignInForm.s_id;
    var pwd=SignInForm.pwd;
    if(s_id.value==""){
        alert("学号不能为空！");
        s_id.focus();
        return false; 
        }
        else if(pwd.value==""){
            alert("密码不能为空！");
            pwd.focus();
            return false;
        }
    else{
        return true;
    }
}
function on_return(){                                    //按回车键登录
     if(window.event.keyCode == 13){
     if (document.all('sub')!=null){
    document.all('sub').click();
}
}
}