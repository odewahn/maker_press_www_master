<?php include "../config.php"; ?>

 <html>
 <head>

 <link rel='stylesheet' href='../styles/styles.css' type='text/css' />
  
 <link rel="exhibit/data"
       type="application/jsonp"
       href="<?php echo $config['data_source']['principles']; ?>"
       ex:converter="googleSpreadsheets" />

    <script type="text/javascript" src="http://api.simile-widgets.org/exhibit/2.2.0/exhibit-api.js"></script>

</head> 
<body>
 
<table id="frame">
   <tr>
<!--
      <td id="sidebar">
         <p>
         <div ex:role="facet" ex:expression=".category" ex:facetLabel="Category"></div>
      </td>
-->
      <td id="content">
         <div id="exhibit-control-panel">
         <div id="exhibit-view-panel">
            <b>Search:</b> <div style""width: 90%" ex:role="facet" ex:facetClass="TextSearch"></div>
            <div class="item" ex:role="exhibit-lens">
<!--
                  <table cellpadding="10" width=100%>
                     <tr>
                     <td width="1">
                        <img ex:src-content=".imageURL" width="80" /></td>
                     </td>
                     <td>
                        <a target="_blank" ex:href-content=".onlineURL"><span ex:content=".label"/></a>
                        <div><span><b>Key tag</b>:<span ex:content=".keyTag"></span></div>
                        <div><span><b>Tags</b>:<span ex:content=".tags"></span></div>
                        <div><span><b>Comments</b>:<span ex:content=".description"></span></div>
                     </td>
                     </tr>
                  </table>
-->
            </div>
            <div ex:role="exhibit-view"
                ex:viewClass="Exhibit.TabularView"
                ex:label="Table"
                ex:columns=".label, .description "
                ex:columnLabels="Name, Description"
                ex:sortColumns= 1
                ex:sortAscending="true"
                >
            </div>
<!--            
            <div ex:role="exhibit-view"
               ex:viewClass="Exhibit.TileView"
               ex:label="Details"
            </div>
-->
         </div>
         </div>    
      </td>

   </tr>
</table>
</body> 
