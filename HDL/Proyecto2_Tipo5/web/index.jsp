
<%@page contentType="text/html" pageEncoding="UTF-8"%>

<%@taglib prefix="f" uri="http://java.sun.com/jsf/core"%>
<%@taglib prefix="h" uri="http://java.sun.com/jsf/html"%>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<f:view>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
            <title>Proyecto 2</title>
        </head>
        <body>
            <h:form>
                <h:outputText value="Seleccione tipo de Comida:"/>
                <h:selectOneMenu value="#{datosBD.txtComida }">
                   <f:selectItems value="#{datosBD.listaComida}"/>                   
                </h:selectOneMenu><br>
                <h:commandButton value="Consultar" action="consultar"/>
            </h:form>
        </body>
    </html>
</f:view>
