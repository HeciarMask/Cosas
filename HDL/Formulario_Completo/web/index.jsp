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
                <h1><h:outputText value="Cuestionario Alumnado DAW"/></h1>
                <p>Teclea tu nombre:
                    <h:inputText value="#{datos.nombre}"/>
                </p>
                <p>
                    Marca el motivo por el que te matriculaste en DAW:<br>
                    <h:selectOneRadio value="#{datos.motivo}">
                    <f:selectItem itemValue="Trabajo" itemLabel="Encontrar trabajo"/>
                    <f:selectItem itemValue="Friqui" itemLabel="Siempre me interesó"/>
                    <f:selectItem itemValue="Sueldo" itemLabel="Es un sector en el que pagan bien"/>
                    </h:selectOneRadio>
                </p>
                <p>
                    ¿Qué SO sueles utilizar?<br>
                    <h:selectOneMenu value="#{datos.sistema}">
                        <f:selectItems value="#{datos.listaSistemas}"/>
                    </h:selectOneMenu>
                </p>
                <p>
                    Idiomas:<br>
                    <h:selectManyCheckbox value="#{datos.idiomas}">
                    <f:selectItem itemValue="Francés" itemLabel="Francés"/>
                    <f:selectItem itemValue="Español" itemLabel="Español"/>
                    <f:selectItem itemValue="Alemán" itemLabel="Alemán"/>
                    <f:selectItem itemValue="Húngaro" itemLabel="Húngaro"/>
                    <f:selectItem itemValue="Inglés" itemLabel="Inglés" />
                    </h:selectManyCheckbox>
                </p>
                <p>
                    Lenguajes:<br>
                    <h:selectManyMenu value="#{datos.lenguajes}">
                        <f:selectItems value="#{datos.listaLenguajes}"  />
                    </h:selectManyMenu>
                </p>
                <p>
                    <h:commandButton value="Enviar" action="verDatos" />
                </p>
            </h:form>
        </body>
    </html>
</f:view>
