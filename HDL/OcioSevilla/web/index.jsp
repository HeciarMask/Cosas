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
            <h3><h:outputText value="Bares de Sevilla"/></h3>
            <h:form>
                <h:dataTable value="#{g_ocio.rsOcio}" var="fila" binding="#{g_ocio.tabla}"  border="1">
                    <h:column>
                        <f:facet name="header">
                            <h:outputText value="ID"/>
                        </f:facet>
                        <h:outputText value="#{fila.ID}"/>
                    </h:column>
                    <h:column>
                        <f:facet name="header">
                            <h:outputText value="Nombre"/>
                        </f:facet>
                        <h:outputText value="#{fila.NOMBRE}"/>
                    </h:column>
                    <h:column>
                        <f:facet name="header">
                            <h:outputText value="Dirección"/>
                        </f:facet>
                        <h:outputText value="#{fila.DIRECCION}"/>
                    </h:column>
                    <h:column>
                        <f:facet name="header">
                            <h:outputText value="Zona"/>
                        </f:facet>
                        <h:outputText value="#{fila.ZONA}"/>
                    </h:column>
                    <h:column>
                        <f:facet name="header">
                            <h:outputText value="Formas de Pago"/>
                        </f:facet>
                        <h:dataTable value="#{g_ocio.rsFPago}" var="item">
                            <h:column>
                                <h:outputText value="#{item.NOMBRE}"/>
                            </h:column> 
                        </h:dataTable>
                    </h:column>
                    <h:column>
                        <f:facet name="header">
                            <h:outputText value="Borrar"/>
                        </f:facet>
                        <h:commandButton value="X" 
                                         onclick="return confirm('¿Desea borrar el local?') "             
                                         action="#{g_ocio.seleccionLista_Del}"/>
                    </h:column>
                    <h:column>
                        <f:facet name="header">
                            <h:outputText value="Modificar"/>
                        </f:facet>
                        <h:commandButton value="X" action="#{g_ocio.obtenerDatosLocal}"/>
                    </h:column>
                </h:dataTable>
                <h:commandButton value="Añadir Local" action="#{g_ocio.nuevoLocal}"/>
            </h:form>
            <h:outputText value="#{locales.mensaje}"/>
        </body>
    </html>
</f:view>
