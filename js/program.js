function ajaxs(method,file,id){
var http=new XMLHttpRequest();
http.onreadystatechange=function(){
if(this.readyState==4&&this.status==200){
document.querySelector(id).innerHTML=this.responseText;
}
}
http.open(method,file,true);
http.send();
}
function openTabs(evt,id,x){
var i,konten,links;
konten=document.getElementsByClassName("konten");
for(i=0;i<konten.length;i++){
konten[i].style.display="none";
}
links=document.getElementsByClassName("links");
for(i=0;i<links.length;i++){
links[i].className=links[i].className.replace("active","");
}
document.getElementById(id).style.display="block";
if(x==1){
ajaxs("POST","tulisBerita.php","#dataTB");
}else if(x==2){
ajaxs("POST","tampilKomentar.php","#dataKomen");
}else if(x==3){
ajaxs("POST","tampilBerita.php","#artikels");
}
}
function tutupTabs(){
var i,konten,links;
konten=document.getElementsByClassName("konten");
for(i=0;i<konten.length;i++){
konten[i].style.display="none";
}
links=document.getElementsByClassName("links");
for(i=0;i<links.length;i++){
links[i].className=links[i].className.replace("active","");
}
}
function waktuT(id){
var date=new Date();
var hari=["Ahad","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu","Minggu"];
var tanggal=[];
for(var i=1;i<=31;i++){
tanggal.push(i);
}
var bulan=[];
for(var i=0;i<=12;i++){
bulan.push(i);
}
document.querySelector(id).innerHTML=hari[date.getDay()]+" "+tanggal[date.getDate()]+", "+bulan[date.getMonth()+1]+" - "+date.getFullYear()+"  "+date.toLocaleTimeString();
}
function hK(a,b){
var nil=1;
var c=document.querySelector(b);
for(var i=0;i<a.length;i++){
if(a[i]==" "){
nil=nil+1;
}
}
c.innerHTML=nil;
}
function tulis(id,ket){
document.querySelector(id).innerHTML=ket;
}
tutupTabs();
openTabs(event,'tulisBerita',1);
