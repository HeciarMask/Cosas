<%-- 
    Document   : mostrar
    Created on : 01-dic-2022, 13:30:48
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
            <h3><h:outputText value="Listado de Locales"/></h3>
          
            <h:dataTable border="1" value="#{datosBD.listaLocales}" var="fila">
                <h:column>
                    <f:facet name="header">
                        <h:outputText value="Nombre"/>
                    </f:facet>
                    <h:outputText value="#{fila.nombre}" />
                </h:column>
                <h:column>
                    <f:facet name="header">
                        <h:outputText value="Direccion"/>
                    </f:facet>
                    <h:outputText value="#{fila.direccion}" />
                </h:column>
                <h:column>
                  <f:facet name="header">
                        <h:outputText value="Carac Ppal"/>
                    </f:facet>
                    <h:outputText value="#{fila.cNombre}" />
                </h:column>
             </h:dataTable>
             <h:form>
                 <p><h:commandButton value="Otra Consulta" action="otra"/></p>
            </h:form>
        </body>
    </html>
</f:view>
