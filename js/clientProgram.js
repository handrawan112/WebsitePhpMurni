function cAjax(method,file,id){
var http=new XMLHttpRequest();
http.onreadystatechange=function(){
if(this.readyState==4&&this.status==200){
document.querySelector(id).innerHTML=this.responseText;
}
}
http.open(method,file,true);
http.send();
}
function xTabs(evt,id,x){
var i,kon,lon;
kon=document.getElementsByClassName("konten");
for(i=0;i<kon.length;i++){
kon[i].style.display="none";
}
lon=document.getElementsByClassName("tomMenu");
for(i=0;i<lon.length;i++){
lon[i].className=lon[i].className.replace("active","");
}
document.getElementById(id).style.display="block";
if(x==1){
cAjax("POST","tampilBeritaC.php","#terbaru");
}else if(x==2){
cAjax("POST","tampilBeritaSosial.php","#sosial");
}else if(x==3){
cAjax("POST","tampilBeritaTeknologi.php","#teknologi");
}else if(x==4){
cAjax("POST","tampilBeritaSains.php","#sains");
}
}
cAjax("POST","tampilBeritaC.php","#terbaru");
xTabs(event,'terbaru');
