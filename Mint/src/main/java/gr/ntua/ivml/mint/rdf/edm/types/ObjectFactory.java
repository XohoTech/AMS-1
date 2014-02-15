//
// This file was generated by the JavaTM Architecture for XML Binding(JAXB) Reference Implementation, vJAXB 2.1.10 in JDK 6 
// See <a href="http://java.sun.com/xml/jaxb">http://java.sun.com/xml/jaxb</a> 
// Any modifications to this file will be lost upon recompilation of the source schema. 
// Generated on: 2011.05.04 at 01:49:42 PM EEST 
//


package gr.ntua.ivml.mint.rdf.edm.types;

import javax.xml.bind.JAXBElement;
import javax.xml.bind.annotation.XmlElementDecl;
import javax.xml.bind.annotation.XmlRegistry;
import javax.xml.namespace.QName;


/**
 * This object contains factory methods for each 
 * Java content interface and Java element interface 
 * generated in the gr.ntua.ivml.mint.rdf.edm.types2 package. 
 * <p>An ObjectFactory allows you to programatically 
 * construct new instances of the Java representation 
 * for XML content. The Java representation of XML 
 * content can consist of schema derived interfaces 
 * and classes representing the binding of schema 
 * type definitions, element declarations and model 
 * groups.  Factory methods for each of these are 
 * provided in this class.
 * 
 */
@XmlRegistry
public class ObjectFactory {

    private final static QName _RelatedEDMObject_QNAME = new QName("http://www.example.org/EDMSchemaV9", "RelatedEDMObject");
    private final static QName _Time_QNAME = new QName("http://www.example.org/EDMSchemaV9", "Time");
    private final static QName _AggregatedCHO_QNAME = new QName("http://www.example.org/EDMSchemaV9", "aggregatedCHO");
    private final static QName _DCTerms_QNAME = new QName("http://www.example.org/EDMSchemaV9", "DCTerms");
    private final static QName _EventWrap_QNAME = new QName("http://www.example.org/EDMSchemaV9", "EventWrap");
    private final static QName _RelatedWrap_QNAME = new QName("http://www.example.org/EDMSchemaV9", "RelatedWrap");
    private final static QName _WebResources_QNAME = new QName("http://www.example.org/EDMSchemaV9", "webResources");
    private final static QName _Europeana_QNAME = new QName("http://www.example.org/EDMSchemaV9", "Europeana");
    private final static QName _Place_QNAME = new QName("http://www.example.org/EDMSchemaV9", "Place");
    private final static QName _AggregationWrap_QNAME = new QName("http://www.example.org/EDMSchemaV9", "AggregationWrap");
    private final static QName _Aggregation_QNAME = new QName("http://www.example.org/EDMSchemaV9", "Aggregation");
    private final static QName _Agent_QNAME = new QName("http://www.example.org/EDMSchemaV9", "Agent");
    private final static QName _DC_QNAME = new QName("http://www.example.org/EDMSchemaV9", "DC");

    /**
     * Create a new ObjectFactory that can be used to create new instances of schema derived classes for package: gr.ntua.ivml.mint.rdf.edm.types2
     * 
     */
    public ObjectFactory() {
    }

    /**
     * Create an instance of {@link AgentType }
     * 
     */
    public AgentType createAgentType() {
        return new AgentType();
    }

    /**
     * Create an instance of {@link AggregationWrapType }
     * 
     */
    public AggregationWrapType createAggregationWrapType() {
        return new AggregationWrapType();
    }

    /**
     * Create an instance of {@link EuropeanaType }
     * 
     */
    public EuropeanaType createEuropeanaType() {
        return new EuropeanaType();
    }

    /**
     * Create an instance of {@link Resource }
     * 
     */
    public Resource createResource() {
        return new Resource();
    }

    /**
     * Create an instance of {@link RelatedProxiesType }
     * 
     */
    public RelatedProxiesType createRelatedProxiesType() {
        return new RelatedProxiesType();
    }

    /**
     * Create an instance of {@link SimpleLiteral }
     * 
     */
    public SimpleLiteral createSimpleLiteral() {
        return new SimpleLiteral();
    }

    /**
     * Create an instance of {@link WebResourceType }
     * 
     */
    public WebResourceType createWebResourceType() {
        return new WebResourceType();
    }

    /**
     * Create an instance of {@link DCType }
     * 
     */
    public DCType createDCType() {
        return new DCType();
    }

    /**
     * Create an instance of {@link PhysicalThingType }
     * 
     */
    public PhysicalThingType createPhysicalThingType() {
        return new PhysicalThingType();
    }

    /**
     * Create an instance of {@link InformationResourceType }
     * 
     */
    public InformationResourceType createInformationResourceType() {
        return new InformationResourceType();
    }

    /**
     * Create an instance of {@link EventType }
     * 
     */
    public EventType createEventType() {
        return new EventType();
    }

    /**
     * Create an instance of {@link WebWrapperType }
     * 
     */
    public WebWrapperType createWebWrapperType() {
        return new WebWrapperType();
    }

    /**
     * Create an instance of {@link DCTermsType }
     * 
     */
    public DCTermsType createDCTermsType() {
        return new DCTermsType();
    }

    /**
     * Create an instance of {@link ProxyType }
     * 
     */
    public ProxyType createProxyType() {
        return new ProxyType();
    }

    /**
     * Create an instance of {@link TimeSpanType }
     * 
     */
    public TimeSpanType createTimeSpanType() {
        return new TimeSpanType();
    }

    /**
     * Create an instance of {@link AggregationType }
     * 
     */
    public AggregationType createAggregationType() {
        return new AggregationType();
    }

    /**
     * Create an instance of {@link EventWrapType }
     * 
     */
    public EventWrapType createEventWrapType() {
        return new EventWrapType();
    }

    /**
     * Create an instance of {@link PlaceType }
     * 
     */
    public PlaceType createPlaceType() {
        return new PlaceType();
    }

    /**
     * Create an instance of {@link RelatedProxiesWrapType }
     * 
     */
    public RelatedProxiesWrapType createRelatedProxiesWrapType() {
        return new RelatedProxiesWrapType();
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link String }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://www.example.org/EDMSchemaV9", name = "RelatedEDMObject")
    public JAXBElement<String> createRelatedEDMObject(String value) {
        return new JAXBElement<String>(_RelatedEDMObject_QNAME, String.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link TimeSpanType }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://www.example.org/EDMSchemaV9", name = "Time")
    public JAXBElement<TimeSpanType> createTime(TimeSpanType value) {
        return new JAXBElement<TimeSpanType>(_Time_QNAME, TimeSpanType.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link PhysicalThingType }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://www.example.org/EDMSchemaV9", name = "aggregatedCHO")
    public JAXBElement<PhysicalThingType> createAggregatedCHO(PhysicalThingType value) {
        return new JAXBElement<PhysicalThingType>(_AggregatedCHO_QNAME, PhysicalThingType.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link DCTermsType }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://www.example.org/EDMSchemaV9", name = "DCTerms")
    public JAXBElement<DCTermsType> createDCTerms(DCTermsType value) {
        return new JAXBElement<DCTermsType>(_DCTerms_QNAME, DCTermsType.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link EventWrapType }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://www.example.org/EDMSchemaV9", name = "EventWrap")
    public JAXBElement<EventWrapType> createEventWrap(EventWrapType value) {
        return new JAXBElement<EventWrapType>(_EventWrap_QNAME, EventWrapType.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link RelatedProxiesWrapType }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://www.example.org/EDMSchemaV9", name = "RelatedWrap")
    public JAXBElement<RelatedProxiesWrapType> createRelatedWrap(RelatedProxiesWrapType value) {
        return new JAXBElement<RelatedProxiesWrapType>(_RelatedWrap_QNAME, RelatedProxiesWrapType.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link WebWrapperType }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://www.example.org/EDMSchemaV9", name = "webResources")
    public JAXBElement<WebWrapperType> createWebResources(WebWrapperType value) {
        return new JAXBElement<WebWrapperType>(_WebResources_QNAME, WebWrapperType.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link EuropeanaType }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://www.example.org/EDMSchemaV9", name = "Europeana")
    public JAXBElement<EuropeanaType> createEuropeana(EuropeanaType value) {
        return new JAXBElement<EuropeanaType>(_Europeana_QNAME, EuropeanaType.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link PlaceType }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://www.example.org/EDMSchemaV9", name = "Place")
    public JAXBElement<PlaceType> createPlace(PlaceType value) {
        return new JAXBElement<PlaceType>(_Place_QNAME, PlaceType.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link AggregationWrapType }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://www.example.org/EDMSchemaV9", name = "AggregationWrap")
    public JAXBElement<AggregationWrapType> createAggregationWrap(AggregationWrapType value) {
        return new JAXBElement<AggregationWrapType>(_AggregationWrap_QNAME, AggregationWrapType.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link AggregationType }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://www.example.org/EDMSchemaV9", name = "Aggregation")
    public JAXBElement<AggregationType> createAggregation(AggregationType value) {
        return new JAXBElement<AggregationType>(_Aggregation_QNAME, AggregationType.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link AgentType }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://www.example.org/EDMSchemaV9", name = "Agent")
    public JAXBElement<AgentType> createAgent(AgentType value) {
        return new JAXBElement<AgentType>(_Agent_QNAME, AgentType.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link DCType }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://www.example.org/EDMSchemaV9", name = "DC")
    public JAXBElement<DCType> createDC(DCType value) {
        return new JAXBElement<DCType>(_DC_QNAME, DCType.class, null, value);
    }

}
