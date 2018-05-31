function VAT_BTW() {
  this.btw_ex = 1
  this.btw_deel = 1 / 0.21
  this.btw_inc = 1 / 1.21
}


var btw_data = new VAT_BTW();


function checkNum(str)
{
  for (var i=0; i<str.length; i++)
  {
    var ch = str.substring(i, i + 1)
    
    if (ch!="." && ch!="+" && ch!="-" && ch!="e" && ch!="E" && (ch < "0" || ch > "9"))
    {
      alert("Vul een geldig getal in.");
      return false;
    }
  }
  return true
}


function normalize(what,digits)
{
  var str=""+what;
  
  var pp=Math.max(str.lastIndexOf("+"),str.lastIndexOf("-"));
  
  var idot=str.indexOf(".");
  
  if (idot>=1)
  {
    var ee=(pp>0)?str.substring(pp-1,str.length):"9";
    
    digits+=idot;
    
    if (digits>=str.length)
      return str;
      
    if (pp>0 && digits>=pp)
      digits-=pp;
      
    var c=eval(str.charAt(digits));
    
    var ipos=digits-1;
    
    if (c>=5)
    {
      while (str.charAt(ipos)=="9")
        ipos--;
        
      if (str.charAt(ipos)==".")
      {
        var nc=eval(str.substring(0,idot))+1;
        
        if (nc==10 && ee.length>0)
        {
          nc=1;
          ee="e"+(eval(ee.substring(1,ee.length))+1);
        }
        return ""+nc+ee;
      }
      return str.substring(0,ipos)+(eval(str.charAt(ipos))+1)+ee;
      
    }
    else
      var ret=str.substring(0,digits)+ee;

    for (var i=0; i<ret.length; i++)
        if (ret.charAt(i)>"0" && ret.charAt(i)<="9")
          return ret;

    return str;
  }
  return str;
}


function compute(obj,val,data)
{
  if (obj[val].value)
  {
    var uval=0;
    var to2dec; 
    
    uval = obj[val].value*data[val];
    
    if( (uval >= 0) && (obj[val].value.indexOf("-") != -1) )
    {
      uval = -uval;    
    }

    for (var i in data)
      {obj[i].value=normalize(uval/data[i],4); 
       to2dec=parseFloat(obj[i].value);
       to2dec=(to2dec+0.0001).toFixed(2); 
       obj[i].value=to2dec.toString(); 
      }
  }
}


function resetValues(form,data)    
{
    for (var i in data)
      form[i].value="";
}



//* * * * * * * *   CONVERT SCRIPT - END -  * * * * * * * * *

