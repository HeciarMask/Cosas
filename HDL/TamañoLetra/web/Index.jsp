<%-- 
    Document   : Index
    Created on : 28-sep-2022, 12:39:43
    Author     : alumno
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>

<%@taglib prefix="f" uri="http://java.sun.com/jsf/core"%>
<%@taglib prefix="h" uri="http://java.sun.com/jsf/html"%>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<f:view>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
            <title>JSP Page</title>
        </head>
        <body>
            <!
            6. Escriba un Script que introduzca una cadena y, usando bucles, muestre esa cadena en
               los distintos tamaños posibles (tamaños del 1 al 7). >
               <h:form>
                    <h:inputText value="#{data.cadena}" /><br>
                    <h:commandButton value="Enviar" action="proceso" />
               </h:form>
               
        </body>
    </html>
</f:view>
