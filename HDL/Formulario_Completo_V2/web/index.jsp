<%-- 
    Document   : index
    Created on : 20-nov-2020, 8:23:22
    Author     : Juan
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
            <form>
                <h1><h:outputText value="Cuestionario Alumnado DAW"/></h1>
                <p>Teclea tu nombre:
                    <h:inputText value="#{datos.nombre}"/>
                </p>
                <p>
                    Marca el motivo por el que te matriculaste en DAW:
                    <h:selectOneRadio value="#{datos.motivo}"/>
                    <f:selectItem itemValue="trabajo" itemLabel="Encontrar trabajo"/>
                    <f:selectItem itemValue="" itemLabel=""/>
                </p>
            </form>
        </body>
    </html>
</f:view>
