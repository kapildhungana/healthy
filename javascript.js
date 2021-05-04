function progress(){
    //console.log("clicked");
    var ch=document.getElementsByClassName(check);
    var c=0;
    for(i=0;i<ch.length;i++){
         if(ch[i].checked==true){
           c+=25;
       }
    }
     document.getElementsByClassName(pb).style.width=str(c)+"%";
}
function Clicked(){
    console.log("clicked!!")
}