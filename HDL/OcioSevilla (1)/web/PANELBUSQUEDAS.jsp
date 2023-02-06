
            <h:form>
                <h:panelGrid columns="4" border="1">
                    <f:facet name="header">
                        <h:outputText style="font-size:25px" value="Búsqueda de Locales de Tapeo"/>
                    </f:facet>
                    <h:outputText value="Nombre:" />
                    <h:inputText value="#{g_ocio.snombre_Busc}" />
                    <h:outputText value="Zona" />
                    <h:selectOneMenu value="#{g_ocio.szona_Busc}">
                        <f:selectItems value="#{g_ocio.listaZonas}" />
                    </h:selectOneMenu>
                     <h:outputText value="Formas de pago:" />
                     <h:selectManyListbox value="#{g_ocio.sfpago_Busc}">
                         <f:selectItems value="#{g_ocio.listaFPago}" />
                    </h:selectManyListbox>
                     <h:outputText value="Dirección:" />
                     <h:inputText value="#{g_ocio.sdireccion_Busc}" />
                     <h:commandButton value="Buscar" actionListener="#{g_ocio.buscar_local(event)}"  />
                     <h:outputText value="" />
                     <h:outputText value="" />
                     <h:commandButton value="Limpiar Búsqueda" actionListener="#{g_ocio.limpiar_buscar_local(event)}"/>
                </h:panelGrid>
            <br/><br/>			
                    <h4>Este es el resultado de la búsqueda</h4>