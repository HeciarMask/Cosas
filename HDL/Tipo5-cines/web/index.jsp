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
                <h:panelGrid columns="2" border="1">
                    <f:facet name="header">
                        <h:outputText style="font-size:25px" value="Inserte aquí los datos requeridos:"/>
                    </f:facet>
                    Su nombre es:<br>
                    <h:inputText value="#{datos.nombre}"></h:inputText>
                    Su correo es:<br>
                    <h:inputText value="#{datos.correo}"></h:inputText>
                    Su dni es:<br>
                    <h:inputText value="#{datos.dni}"></h:inputText>
                </h:panelGrid>
                <h:panelGrid columns="4" border="1">
                    <f:facet name="header">
                        <h:outputText style="font-size:25px" value="Su cliente es asiduo:"/>
                    </f:facet>
                    <h:selectOneRadio value="#{datos.asiduo}">
                        <f:selectItem itemValue="true" itemLabel="Sí"/>
                        <f:selectItem itemValue="false" itemLabel="No"/>
                    </h:selectOneRadio>
                    <h:selectOneListbox value="#{datos.provincia}">
                        <f:selectItems value="#{datos.provincias}"/>
                    </h:selectOneListbox>
                </h:panelGrid>
                    <br>
                    Seleccione las películas que has visto de las siguientes:<br>
                    <h:selectManyListbox value="#{datos.pelicula}">
                        <f:selectItems value="#{datos.peliculas}"/>
                    </h:selectManyListbox><br>
                    Ha seleccionado que para acompañar la pelicula le gusta:<br>
                    <h:selectManyCheckbox value="#{datos.aperitivos}">
                        <f:selectItem itemValue="Palomitas" itemLabel="Palomitas"/>
                        <f:selectItem itemValue="Refresco" itemLabel="Refresco"/>
                        <f:selectItem itemValue="Chocolatinas" itemLabel="Chocolatinas"/>
                        <f:selectItem itemValue="Gominolas" itemLabel="Gominolas"/>
                        <f:selectItem itemValue="Fritos" itemLabel="Fritos"/>
                        <f:selectItem itemValue="Frutos Secos" itemLabel="Frutos Secos"/>
                    </h:selectManyCheckbox>
                    <h:commandButton value="Enviar" action="pelicula.jsp" />
            </h:form>
        </body>
    </html>
</f:view>
