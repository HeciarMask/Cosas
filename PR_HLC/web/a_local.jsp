<%-- 
    Document   : a_local
    Created on : 11-ene-2023, 14:12:21
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
            <h3><h:outputText value="Añadir un nueva Encuesta"/></h3>
            <h:form>
            <h:panelGrid columns="2">
                <h:outputText value="Nombre:"/>
                <h:inputText value="#{locales.nombre}"/>
                <h:outputText value="Preferido"/>
                <h:selectOneMenu value="#{locales.zona}">
                    <f:selectItems value="#{locales.listaZonas}"/>
                </h:selectOneMenu>
                <h:outputText value="Edad"/>
                <h:inputText value="#{locales.direccion}"/>
                <h:outputText value="Consume"/>
                <h:inputText value="#{locales.consume}"/>
                <h:outputText value="Postres"/>
                <h:selectManyListbox value="#{locales.formas_pago}">
                    <f:selectItems value="#{locales.listaFPago}"/>
                </h:selectManyListbox>
                
            </h:panelGrid>
                <h:commandButton value="Añadir" action="#{locales.guardar_L}"/>
            </h:form>
        </body>
    </html>
</f:view>
