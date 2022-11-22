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
            <h4><h:outputText value="Nuevo Departamento"/></h4>
            <h:form>
            <h:panelGrid columns="2">
                <h:outputText value="Número de Departamento:"/>
                <h:inputText value="#{departamento.txtNumero}"/>
                <h:outputText value="Denominación:"/>
                <h:inputText value="#{departamento.txtNombre}"/>
                <h:outputText value="Localidad:"/>
                <h:inputText value="#{departamento.txtLocalidad}"/>
                <h:commandButton value="Enviar" action="#{departamento.altaDept}"/>
            </h:panelGrid>
            </h:form>
            <h:outputText value="#{departamento.mensaje}"/>
        </body>
    </html>
</f:view>
