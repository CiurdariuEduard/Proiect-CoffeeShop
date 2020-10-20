function showImg(element){
  var images=document.getElementsByClassName("imgs");
  var i;
  for(i=0; i<images.length;i++)
  {
    if(i!=element.value)
    {
      document.getElementById(i).style.display='none';
    }
    else
    {
      document.getElementById(element.value).style.display='block';
    }
  }
}