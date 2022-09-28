<%-- 
    Document   : Index
    Created on : 28-sep-2022, 10:52:19
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
            <h2><h:outputText value="Ejercicio 01 Hoja 02" /></h2>
            <h:form>
            Operando 1: <h:inputText value="#{datos.operando1}" /><br>
            Operando 2: <h:inputText value="#{datos.operando2}" /><br>
            Seleccione operación: <h:selectOneRadio value="#{datos.operacion}">
                <f:selectItems value="#{datos.listaOpcional}"/>
            </h:selectOneRadio>
                <h:commandButton value="Calcular" action="proceso" />
            </h:form>
        </body>
    </html>
</f:view>
