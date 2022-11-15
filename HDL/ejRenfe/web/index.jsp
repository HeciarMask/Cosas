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
            <h1>Consulta de Trenes</h1><br>
            <h:form>
                Seleccione el tipo de tren:
                <h:selectOneMenu value="#{bean.arrayTrenes()}"></h:selectOneMenu><br>
               
                 Seleccione el criterio de ordenacion:<h:selectOneRadio value="">
                    <f:selectItem itemValue="false" itemLabel="Origen"/>
                    <f:selectItem itemValue="false" itemLabel="Destino"/>
                    <f:selectItem itemValue="false" itemLabel="Salida"/>
                    <f:selectItem itemValue="false" itemLabel="Llegada"/>
                </h:selectOneRadio>
                <h:commandButton value="Enviar" action="aux.jsp" />
            </h:form>
        </body>
    </html>
</f:view>
