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
            <h1><h:outputText value="#{datosBD.mensaje}"/></h1>
            <h:dataTable value="#{datosBD.rset}" var = "fila">
                <h:column>
                    <f:facet name="header">
                        <h:outputText value="#{fila.id}"></h:outputText>
                    </f:facet>
                </h:column>
            </h:dataTable>
        </body>
    </html>
</f:view>