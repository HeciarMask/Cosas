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
                <p>
                    Inserte aqui los datos requeridos:<br>
                    Su nombre es:<br>
                    <h:inputText value="#{datos.nombre}"></h:inputText><br>
                    Su correo es:<br>
                    <h:inputText value="#{datos.correo}"></h:inputText><br>
                    Su dni es:<br>
                    <h:inputText value="#{datos.dni}"></h:inputText><br>
                </p>
                <p>
                    Su cliente es asiduo:<br>
                    <h:selectOneRadio value="#{datos.asiduo}">
                        <f:selectItem itemValue="true" itemLabel="Sí"/>
                        <f:selectItem itemValue="false" itemLabel="No"/>
                    </h:selectOneRadio>
                </p>
                <p>
                    
                </p>
            </h:form>
        </body>
    </html>
</f:view>
