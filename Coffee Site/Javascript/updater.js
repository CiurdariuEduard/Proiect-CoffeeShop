function submit(){
    var e=document.getElementById("coffee");
    var cafea=e.options[e.selectedIndex].text;
    var cantitate=document.getElementById("quantity").value;
    document.getElementById("textfile").value=cafea+": "+cantitate;
}