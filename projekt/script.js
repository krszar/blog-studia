var n;
i = 0;
sl = document.getElementsByClassName("fade");
function slide(n)
{
    console.log(i)
 
for(var j = 0; j<3; j++)
{
    sl[j].style.display="none"
}
console.log("n=" + n)

if(n == 1)
{
    if(i < 2)
    {
        i++
      
    }else{
        i=0
    }
}

if(n == 0)
{
    if(i > 0)
    {
     
        i--
    }else{
        i=2
     
    }
}
console.log(i)
sl[i].style.display="block"

}
