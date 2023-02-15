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
                <h:panelGrid columns="4" border="1">
                    <f:facet name="header">
                        <h:outputText style="font-size:25px" value="Búsqueda de Encuesta"/>
                    </f:facet>
                    <h:outputText value="Nombre:" />
                    <h:inputText value="#{g_ocio.snombre_Busc}" />
                    <h:outputText value="Preferido:" />
                    <h:selectOneMenu value="#{g_ocio.szona_Busc}">
                        <f:selectItems value="#{g_ocio.listaZonas}" />
                    </h:selectOneMenu>
                     <h:outputText value="Postres:" />
                     <h:selectManyListbox value="#{g_ocio.sfpago_Busc}">
                         <f:selectItems value="#{g_ocio.listaFPago}" />
                    </h:selectManyListbox>
                     <h:outputText value="Edad:" />
                     <h:inputText value="#{g_ocio.sdireccion_Busc}" />
                     <h:outputText value="Consume:" />
                     <h:inputText value="#{g_ocio.sconsume_Busc}" />
                     <h:commandButton value="Buscar" actionListener="#{g_ocio.buscar_local(event)}"  />
                     <h:commandButton value="Limpiar Búsqueda" actionListener="#{g_ocio.limpiar_buscar_local(event)}"/>
                </h:panelGrid>
            <br/><br/>			
                    <h4>Este es el resultado de la búsqueda</h4>
                <h:dataTable value="#{g_ocio.rsOcio}" var="fila" binding="#{g_ocio.tabla}"  border="1">
                <h:column>
                    <f:facet name="header">
                        <h:outputText value="ID"/>
                    </f:facet>
                    <h:outputText value="#{fila.id_encuesta}"/>
                </h:column>
                      <h:column>
                    <f:facet name="header">
                        <h:outputText value="Nombre"/>
                    </f:facet>
                    <h:outputText value="#{fila.nombre}"/>
                </h:column>
                      <h:column>
                    <f:facet name="header">
                        <h:outputText value="Edad"/>
                    </f:facet>
                    <h:outputText value="#{fila.edad}"/>
                </h:column>
                <h:column>
                    <f:facet name="header">
                        <h:outputText value="Preferido"/>
                    </f:facet>
                    <h:outputText value="#{fila.id_preferido}"/>
                </h:column>
                <h:column>
                    <f:facet name="header">
                        <h:outputText value="Consume"/>
                    </f:facet>
                    <h:outputText value="#{fila.consumeMas}"/>
                </h:column>
                <h:column>
                    <f:facet name="header">
                        <h:outputText value="Postres"/>
                    </f:facet>
                    <h:dataTable value="#{g_ocio.rsFPago}" var="item">
                        <h:column>
                            <h:outputText value="#{item.nombre}"/>
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
                    <f:facet name="footer" >
                        <h:outputText value="#{g_ocio.sinfo_Sel}"/>
                    </f:facet>
            </h:dataTable>
                <h:commandButton value="Añadir Encuesta" action="#{g_ocio.nuevoLocal}"/>
                 <h:commandButton value="Gestión Comidas" action="#{g_ocio.gestion_Zonas}"/>
                <h:commandButton value="Gestión Postres" action="#{g_ocio.gestion_FormasPago}"/>
            </h:form>
            <%--<h:outputText value="#{locales.mensaje}"/>--%>
        </body>
    </html>
</f:view>
