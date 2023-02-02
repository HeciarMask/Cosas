<%-- 
    Document   : m_local
    Created on : 02-feb-2023, 13:30:05
    Author     : alumno
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>m_local</title>
    </head>
    <body>
        <h3><h:outputText value="Añadir un nuevo Local"/></h3>
    <h:form>
        <h:panelGrid columns="2">
            <h:outputText value="Nombre:"/>
            <h:inputText value="#{locales.nombre}"/>
            <h:outputText value="Zona"/>
            <h:selectOneMenu value="#{locales.zona}">
                <f:selectItems value="#{locales.listaZonas}"/>
            </h:selectOneMenu>
            <h:outputText value="Dirección"/>
            <h:inputText value="#{locales.direccion}"/>
            <h:outputText value="Formas de pago"/>
            <h:selectManyListbox value="#{locales.formas_pago}">
                <f:selectItems value="#{locales.listaFPago}"/>
            </h:selectManyListbox>
        </h:panelGrid>
        <h:commandButton value="Añadir" action="#{locales.guardar_L}"/>
    </h:form>
</body>
</html>
