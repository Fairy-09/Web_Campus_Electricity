function Register(){
    var s_name=RNfrm.s_name;
    var s_id=RNfrm.s_id;
    var d_id=RNfrm.d_id;
    var tel=RNfrm.tel;
    var pwd=RNfrm.pwd;
    var re_pwd=RNfrm.re_pwd;
    if(s_name.value==""){
        alert("姓名不能为空！");
        s_name.focus();
        return false; 
        }
        else if(s_id.value==""){
            alert("学号不能为空！");
            s_id.focus();
            return false;
        }
        else if(d_id.value==""){
            alert("寝室号不能为空！");
            d_id.focus();
            return false;
        }
        else if(tel.value==""){
            alert("电话不能为空！");
            tel.focus();
            return false;
        }
        else if(pwd.value==""){
            alert("密码不能为空！");
            pwd.focus();
            return false;
        }
        else if(re_pwd.value==""){
            alert("确认密码不能为空！");
            re_pwd.focus();
            return false;
        }
        else if(pwd.value!=re_pwd.value){
            alert("两次密码输入不一致！");
            pwd.focus();
            return false;
        }
    else{
        return true;
    }
}