<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@taglib prefix="f" uri="http://java.sun.com/jsf/core"%>
<%@taglib prefix="h" uri="http://java.sun.com/jsf/html"%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<f:view>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title><h:outputText value="#{g_tablas_aux_pref.stitulo}"/></title>
</head>
<body>
<h1><h:outputText value="#{g_tablas_aux_pref.stitulo}"/></h1>
<h:form>
<h:dataTable border="3" value="#{g_tablas_aux_pref.rsTabla}" binding="#{g_tablas_aux_pref.tabla}"
             var="reg">
    <h:column>
        <f:facet name="header">
            <h:outputText value="Borrar"/>
        </f:facet>
        <h:commandButton value="X" onclick="return confirm('¿Deseas BORRAR esa fila?')"
                         actionListener="#{g_tablas_aux_pref.borrar_Fila}" />
    </h:column>
    <h:column>
        <f:facet name="header">
            <h:outputText value="Id"/>
        </f:facet>
        <h:outputText value="#{reg.ID}"/>
    </h:column>
    <h:column>
        <f:facet name="header">
            <h:outputText value="Nombres"/>
        </f:facet>
        <h:outputText value="#{g_tablas_aux_pref.iterar_Nombre}"/>
        <h:inputText id="mod" size="45" binding="#{g_tablas_aux_pref.nombre_mod}" 
                     required="true" 
                     requiredMessage="No puedes Modificar a Vacio">

        </h:inputText>
        <h:message for="mod" style="color:red"/>
        </h:column>
    <h:column>
        <f:facet name="header">
            <h:outputText value="Modificación"/>
        </f:facet>
        <h:commandButton value="Modificar" 
                         actionListener="#{g_tablas_aux_pref.modificar_Fila}"/>
    </h:column>
</h:dataTable>
</h:form>
<br>
<h:form>
<table border="3">
<tr>
<td> <h:commandButton value="Añadir" actionListener="#{g_tablas_aux_pref.insertar_Fila}"/></td>
<td>
<h:inputText id="nuevo" size="44" value="#{g_tablas_aux_pref.nombre}" 
             required="true" requiredMessage="No puedes Añadir Vacio">
<f:validateLength minimum="2"/>
</h:inputText>
<h:message for="nuevo" style="color:red"/>
</td>
</tr>
</table>
<br><br>
<h:commandButton value="<-- Volver" action="index" immediate="true"/>
</h:form>
</body>
</html>
</f:view>


