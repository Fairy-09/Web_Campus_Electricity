function updatePay(){
    var d_id=pay_frm.d_id;
    var fee=pay_frm.fee;
    if(d_id.value==""){
        alert("寝室号不能为空！");
        d_id.focus();
        return false; 
        }
        else if(fee.value==""){
            alert("缴费金额不能为空！");
            fee.focus();
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