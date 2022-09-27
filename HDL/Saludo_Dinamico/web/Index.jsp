<%-- 
    Document   : Index
    Created on : 23-sep-2022, 9:08:56
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
            <h:form>
                <h1>Mi Segundo Proyecto</h1>
                <p>Teclea tu nombre: <h:inputText value="#{datos.nombre}"/></p>
                <p>Teclea tu contraseña:  <h:inputSecret value="#{datos.psswd}"/></p>
                <h:commandButton value="Procesar" action="#{datos.comprobarClave()}" />
            </h:form>
        </body>
    </html>
</f:view>