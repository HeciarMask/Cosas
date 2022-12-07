<%-- 
    Document   : ver_datos
    Created on : 14-nov-2022, 14:51:48
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
            <h3><h:outputText value="Listado de trenes"/></h3>
          
            <h:dataTable border="1" value="#{datosBD.datosViajes}" var="fila">
                <h:column>
                    <f:facet name="header">
                        <h:outputText value="ORIGEN"/>
                    </f:facet>
                    <h:outputText value="#{fila.origen}" />
                </h:column>
                <h:column>
                  <f:facet name="header">
                        <h:outputText value="DESTINO"/>
                    </f:facet>
                    <h:outputText value="#{fila.destino}" />
                </h:column>
                <h:column>
                  <f:facet name="header">
                        <h:outputText value="SALIDA"/>
                    </f:facet>
                    <h:outputText value="#{fila.salida}" />
                </h:column>
                <h:column>
                  <f:facet name="header">
                        <h:outputText value="LLEGADA"/>
                    </f:facet>
                    <h:outputText value="#{fila.llegada}" />
                </h:column>
             </h:dataTable>
             <h:form>
              <h:commandButton value="Otra Consulta" action="otra"/>           
            </h:form>
        </body>
    </html>
</f:view>
