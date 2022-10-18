<%-- 
    Document   : pelicula
    Created on : 13-oct-2022, 19:19:16
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
            <title>Pelicula</title>
        </head>
        <body>
            <h3>Estos son sus datos:</h3>
            <p>
                Nombre:
                <h:outputText value="#{datos.nombre}"/>
            </p>
            <p>
                Correo:
                <h:outputText value="#{datos.correo}"/>
            </p>
            <p>
                Dni
                <h:outputText value="#{datos.dni}"/>
            </p>
            <p>
                Provincia:
                <h:outputText value="#{datos.provincia}"/>
            </p>
            
            <p>
                Peliculas:
                <h:outputText value="#{datos.concadenaPelicula()}"/>
            </p>
            <p>
                Aperitivos:
                <h:outputText value="#{datos.concadenaAperitivo()}"/>
            </p>
        </body>
    </html>
</f:view>
