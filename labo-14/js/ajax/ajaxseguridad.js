

    function Ajax(ruta)
    {
        var pagina=ruta+"/PersonaServlet?op=1";  

        var xmlhttp;

        if(window.XMLHttpRequest)
        {   xmlhttp=new XMLHttpRequest();
        }
        else
        {   xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");  
        }
        xmlhttp.onreadystatechange=function()
        {   
            if(xmlhttp.readyState==4 && xmlhttp.status==200)
            {  
              document.getElementById("contenido").innerHTML=xmlhttp.responseText;

            }                         
        }                 
        xmlhttp.open("GET",pagina,true);
        xmlhttp.send(null); 

    }    
