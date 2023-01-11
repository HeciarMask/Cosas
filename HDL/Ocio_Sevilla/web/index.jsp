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
            <h3><h:outputText value="Bares deSevilla" /></h3>
            <h:form>
            <h:dataTable value="#{g_ocio.rsOcio}" var="fila" border="1">
                <h:column>
                    <f:facet name="header">
                        <h:outputText value="ID"/>                    
                    </f:facet>
                    <h:outputText value="#{fila.ID}" />
                </h:column>
                <h:column>
                    <f:facet name="header">
                        <h:outputText value="NOMBRE"/>                    
                    </f:facet>
                    <h:outputText value="#{fila.NOMBRE}" />
                </h:column>
                <h:column>
                    <f:facet name="header">
                        <h:outputText value="DIRECCION"/>                    
                    </f:facet>
                    <h:outputText value="#{fila.DIRECCION}" />
                </h:column>
                <h:column>
                    <f:facet name="header">
                        <h:outputText value="ZONA"/>                    
                    </f:facet>
                    <h:outputText value="#{fila.ZONA}" />
                </h:column>
                <h:column>
                    <f:facet name="header">
                        <h:outputText value="Formas de pago" />
                    </f:facet>
                    <h:dataTable value="#{g_ocio.rsFPago}" var="item">
                        <h:column>
                            <h:outputText value="#{item.NOMBRE}"/>
                        </h:column>
                    </h:dataTable>
                </h:column>
            </h:dataTable>
                <h:commandButton value="Añadir Local" action="a_local"/>
            </h:form>
            
        </body>
    </html>
</f:view>
