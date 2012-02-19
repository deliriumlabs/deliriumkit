
function toPrint(el){
    el=$(el);
    var disp_setting="toolbar=yes,location=no,directories=no,menubar=yes,"; 
    disp_setting+="scrollbars=yes,width=650, height=600, left=100, top=25"; 
    var a=window.open("","",disp_setting); 
    a.document.open(); 
    a.document.write('<html><head><title></title>'); 
    //a.document.write('<link rel="stylesheet" type="text/css" href="style/css/default/style.css" />');
    a.document.write('<link rel="stylesheet" type="text/css" href="media/skin/default/style.css" />');
    a.document.write('</head><body onLoad="self.print()"><center>');          
    a.document.write(el.innerHTML);          
    a.document.write('</center></body></html>'); 
    a.document.close(); 
    a.focus(); 
}

function toPrintHTML(html){	
    var disp_setting="toolbar=yes,location=no,directories=no,menubar=yes,"; 
    disp_setting+="scrollbars=yes,width=650, height=600, left=100, top=25"; 
    var a=window.open("","",disp_setting); 
    a.document.open(); 
    a.document.write('<html><head><title></title>'); 
    //a.document.write('<link rel="stylesheet" type="text/css" href="style/css/default/style.css" />');
    a.document.write('<link rel="stylesheet" type="text/css" href="media/skin/default/style.css" />');
    a.document.write('</head><body style="background:#FFFFFF !important" onLoad="self.print()"><center>');          
    a.document.write(html);          
    a.document.write('</center></body></html>'); 
    a.document.close(); 
    a.focus(); 
}
function DateAdd(objDate, intDays){

  var iSecond=1000;	 //Las fechas sse representan en milisegundos

  var iMinute=60*iSecond;

  var iHour=60*iMinute;

  var iDay=24*iHour;

  var objReturnDate=new Date();

  objReturnDate.setTime(objDate.getTime()+(intDays*iDay));

  return objReturnDate;
}
/*
jQuery.fn.hasClass = function(selector) { 
    var ret = false; 
    this.each(function() { 
        if ( (' ' + this.className + ' ').indexOf(' ' + selector + ' ') > -1 ) { 
            ret = true; 
            return false; 
        } 
    }); 
    return ret; 
}; 
*/
jQuery.fn.debug = function (msg) {
    console.log("%s: %o", msg, this);
    return this;
};
