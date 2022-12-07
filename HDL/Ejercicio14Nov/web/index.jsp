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
           
            <h:form>
               <h:panelGrid columns="2">
               <h:outputText value="Seleccione tipo de Tren:"/>
               <h:selectOneMenu value="#{datosBD.txtTren }">
                   <f:selectItems value="#{datosBD.listatrenes}"/>                   
                </h:selectOneMenu>
               <h:outputText value="Seleccione el criterio de ordenación:"/>
               <h:selectOneRadio value="#{datosBD.sorden}">
                    <f:selectItem itemValue="origen" itemLabel="Origen"/>
                    <f:selectItem itemValue="destino" itemLabel="Destino"/>
                     <f:selectItem itemValue="salida" itemLabel="Salida"/>
                    <f:selectItem itemValue="llegada" itemLabel="Llegada"/>
                </h:selectOneRadio>
                <h:commandButton value="Consultar" action="consulta"/>
            </h:panelGrid>  
            
            </h:form>
        </body>
    </html>
</f:view>
