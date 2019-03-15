function vAjax(metode,file,id){
var http=new XMLHttpRequest();
http.onreadystatechange=function(){
if(this.readyState==4&&this.status==200){
document.querySelector(id).innerHTML=this.responseText;
}
}
http.open(metode,file,true);
http.send();
}
