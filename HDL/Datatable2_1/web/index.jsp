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
            <h1><h:outputText value="Lista de objetos persona"/></h1>
            <h:dataTable value="#{datos.personajes}" var="registro" binding="#{datos.tabla}"  border="8">
                <h:column>
                    <f:facet name="header">
                        <h:outputText value="Id"/>
                    </f:facet>
                    <h:outputText value="#{registro.id}"/>
                </h:column>
                 <h:column>
                     <f:facet name="header">
                        <h:outputText value="Nombre"/>
                    </f:facet>
                    <h:outputText value="#{registro.nombre}"/>
                </h:column>
                 <h:column>
                     <f:facet name="header">
                        <h:outputText value="Apellidos"/>
                    </f:facet> 
                    <h:outputText value="#{registro.apellidos}"/>
                </h:column>
                 <h:column>
                     <f:facet name="header">
                        <h:outputText value="Selección"/>
                    </f:facet> 
                     <h:commandButton value="X" action="#{datos.seleccionLista}"/>
                </h:column>
                
            </h:dataTable>
       
                <h:panelGrid columns="2">
                    <h:outputText value="Id"/>
                    <h:inputText value="#{datos.txtId}"/>
                     <h:outputText value="Nombre"/>
                    <h:inputText value="#{datos.txtNombre}"/>
                     <h:outputText value="Apellidos"/>
                     <h:inputText value="#{datos.txtApellidos}"/>
                     <h:commandButton value="Enviar" action="#{datos.cargarLista}"  />
                     <h:commandButton value="Borrar" action="#{datos.borrarLista}"  />
                </h:panelGrid>
            </h:form>
        </body>
    </html>
</f:view>
