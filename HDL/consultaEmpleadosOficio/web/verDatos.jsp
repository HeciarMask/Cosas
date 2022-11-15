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
           
            <h:dataTable value="#{empleados.rsEmpleados}" border="1" var="fila">
                <h:column>
                    <f:facet name="header">
                        <h:outputText value="Nombre Empleado"/>
                    </f:facet>
                    <h:outputText value="#{fila.nombreEmpleado}"/>
                </h:column> 
                <h:column>
                    <f:facet name="header">
                        <h:outputText value="Salario"/>
                    </f:facet>
                    <h:outputText value="#{fila.salario1}"/>
                </h:column>
            
                <h:column>
                    <f:facet name="header">
                        <h:outputText value="Nombre Jefe"/>
                    </f:facet>
                    <h:outputText value="#{fila.nombreJefe}"/>
                </h:column>
                 <h:column>
                    <f:facet name="header">
                        <h:outputText value="Salario Jefe"/>
                    </f:facet>
                    <h:outputText value="#{fila.salario2}"/>
                </h:column>
            </h:dataTable>        
         <%--   <h:outputText value="#{empleados.mensaje}"/>--%>
        </body>
    </html>
</f:view>
