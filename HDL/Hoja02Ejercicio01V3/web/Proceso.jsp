<%-- 
    Document   : Proceso
    Created on : 28-sep-2022, 11:09:59
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
            <h1>Operacion seleccionada: <h:outputText value="#{datos.operacion}"/></h1><br>
            <h1><h:outputText value="#{datos.resultado}" /></h1>
        </body>
    </html>
</f:view>
