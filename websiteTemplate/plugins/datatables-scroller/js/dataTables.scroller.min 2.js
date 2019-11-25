/*!
 Scroller 2.0.0
 ©2011-2018 SpryMedia Ltd - datatables.net/license
*/
(function(e){"function"===typeof define&&define.amd?define(["jquery","datatables.net"],function(h){return e(h,window,document)}):"object"===typeof exports?module.exports=function(h,i){h||(h=window);if(!i||!i.fn.dataTable)i=require("datatables.net")(h,i).$;return e(i,h,h.document)}:e(jQuery,window,document)})(function(e,h,i,l){var m=e.fn.dataTable,g=function(a,c){if(this instanceof g){c===l&&(c={});var b=e.fn.dataTable.Api(a);this.s={dt:b.settings()[0],dtApi:b,tableTop:0,tableBottom:0,redrawTop:0,
redrawBottom:0,autoHeight:!0,viewportRows:0,stateTO:null,drawTO:null,heights:{jump:null,page:null,virtual:null,scroll:null,row:null,viewport:null,labelFactor:1},topRowFloat:0,scrollDrawDiff:null,loaderVisible:!1,forceReposition:!1,baseRowTop:0,baseScrollTop:0,mousedown:!1,lastScrollTop:0};this.s=e.extend(this.s,g.oDefaults,c);this.s.heights.row=this.s.rowHeight;this.dom={force:i.createElement("div"),label:e('<div class="dts_label">0</div>'),scroller:null,table:null,loader:null};this.s.dt.oScroller||
(this.s.dt.oScroller=this,this.construct())}else alert("Scroller warning: Scroller must be initialised with the 'new' keyword.")};e.extend(g.prototype,{measure:function(a){this.s.autoHeight&&this._calcRowHeight();var c=this.s.heights;c.row&&(c.viewport=e.contains(i,this.dom.scroller)?this.dom.scroller.clientHeight:this._parseHeight(e(this.dom.scroller).css("height")),c.viewport||(c.viewport=this._parseHeight(e(this.dom.scroller).css("max-height"))),this.s.viewportRows=parseInt(c.viewport/c.row,10)+
1,this.s.dt._iDisplayLength=this.s.viewportRows*this.s.displayBuffer);var b=this.dom.label.outerHeight();c.labelFactor=(c.viewport-b)/c.scroll;(a===l||a)&&this.s.dt.oInstance.fnDraw(!1)},pageInfo:function(){var a=this.dom.scroller.scrollTop,c=this.s.dt.fnRecordsDisplay(),b=Math.ceil(this.pixelsToRow(a+this.s.heights.viewport,!1,this.s.ani));return{start:Math.floor(this.pixelsToRow(a,!1,this.s.ani)),end:c<b?c-1:b-1}},pixelsToRow:function(a,c,b){a-=this.s.baseScrollTop;b=b?(this._domain("physicalToVirtual",
this.s.baseScrollTop)+a)/this.s.heights.row:a/this.s.heights.row+this.s.baseRowTop;return c||c===l?parseInt(b,10):b},rowToPixels:function(a,c,b){a-=this.s.baseRowTop;b=b?this._domain("virtualToPhysical",this.s.baseScrollTop):this.s.baseScrollTop;b+=a*this.s.heights.row;return c||c===l?parseInt(b,10):b},scrollToRow:function(a,c){var b=this,d=!1,f=this.rowToPixels(a),k=a-(this.s.displayBuffer-1)/2*this.s.viewportRows;0>k&&(k=0);if((f>this.s.redrawBottom||f<this.s.redrawTop)&&this.s.dt._iDisplayStart!==
k)d=!0,f=this._domain("virtualToPhysical",a*this.s.heights.row),this.s.redrawTop<f&&f<this.s.redrawBottom&&(this.s.forceReposition=!0,c=!1);"undefined"==typeof c||c?(this.s.ani=d,e(this.dom.scroller).animate({scrollTop:f},function(){setTimeout(function(){b.s.ani=!1},25)})):e(this.dom.scroller).scrollTop(f)},construct:function(){var a=this,c=this.s.dtApi;if(this.s.dt.oFeatures.bPaginate){this.dom.force.style.position="relative";this.dom.force.style.top="0px";this.dom.force.style.left="0px";this.dom.force.style.width=
"1px";this.dom.scroller=e("div."+this.s.dt.oClasses.sScrollBody,this.s.dt.nTableWrapper)[0];this.dom.scroller.appendChild(this.dom.force);this.dom.scroller.style.position="relative";this.dom.table=e(">table",this.dom.scroller)[0];this.dom.table.style.position="absolute";this.dom.table.style.top="0px";this.dom.table.style.left="0px";e(c.table().container()).addClass("dts DTS");this.s.loadingIndicator&&(this.dom.loader=e('<div class="dataTables_processing dts_loading">'+this.s.dt.oLanguage.sLoadingRecords+
"</div>").css("display","none"),e(this.dom.scroller.parentNode).css("position","relative").append(this.dom.loader));this.dom.label.appendTo(this.dom.scroller);this.s.heights.row&&"auto"!=this.s.heights.row&&(this.s.autoHeight=!1);this.measure(!1);this.s.ingnoreScroll=!0;this.s.stateSaveThrottle=this.s.dt.oApi._fnThrottle(function(){a.s.dtApi.state.save()},500);e(this.dom.scroller).on("scroll.dt-scroller",function(){a._scroll.call(a)});e(this.dom.scroller).on("touchstart.dt-scroller",function(){a._scroll.call(a)});
e(this.dom.scroller).on("mousedown.dt-scroller",function(){a.s.mousedown=true}).on("mouseup.dt-scroller",function(){a.s.mouseup=false;a.dom.label.css("display","none")});e(h).on("resize.dt-scroller",function(){a.measure(false);a._info()});var b=!0,d=c.state.loaded();c.on("stateSaveParams.scroller",function(c,e,h){h.scroller={topRow:b&&d&&d.scroller?d.scroller.topRow:a.s.topRowFloat,baseScrollTop:a.s.baseScrollTop,baseRowTop:a.s.baseRowTop};b=false});d&&d.scroller&&(this.s.topRowFloat=d.scroller.topRow,
this.s.baseScrollTop=d.scroller.baseScrollTop,this.s.baseRowTop=d.scroller.baseRowTop);c.on("init.scroller",function(){a.measure(false);a._draw();c.on("draw.scroller",function(){a._draw()})});c.on("preDraw.dt.scroller",function(){a._scrollForce()});c.on("destroy.scroller",function(){e(h).off("resize.dt-scroller");e(a.dom.scroller).off(".dt-scroller");e(a.s.dt.nTable).off(".scroller");e(a.s.dt.nTableWrapper).removeClass("DTS");e("div.DTS_Loading",a.dom.scroller.parentNode).remove();a.dom.table.style.position=
"";a.dom.table.style.top="";a.dom.table.style.left=""})}else this.s.dt.oApi._fnLog(this.s.dt,0,"Pagination must be enabled for Scroller")},_calcRowHeight:function(){var a=this.s.dt,c=a.nTable,b=c.cloneNode(!1),d=e("<tbody/>").appendTo(b),f=e('<div class="'+a.oClasses.sWrapper+' DTS"><div class="'+a.oClasses.sScrollWrapper+'"><div class="'+a.oClasses.sScrollBody+'"></div></div></div>');e("tbody tr:lt(4)",c).clone().appendTo(d);var k=e("tr",d).length;if(1===k)d.prepend("<tr><td>&#160;</td></tr>"),d.append("<tr><td>&#160;</td></tr>");
else for(;3>k;k++)d.append("<tr><td>&#160;</td></tr>");e("div."+a.oClasses.sScrollBody,f).append(b);a=this.s.dt.nHolding||c.parentNode;e(a).is(":visible")||(a="body");f.appendTo(a);this.s.heights.row=e("tr",d).eq(1).outerHeight();f.remove()},_draw:function(){var a=this,c=this.s.heights,b=this.dom.scroller.scrollTop,d=e(this.s.dt.nTable).height(),f=this.s.dt._iDisplayStart,k=this.s.dt._iDisplayLength,h=this.s.dt.fnRecordsDisplay();this.s.skip=!0;if((this.s.dt.bSorted||this.s.dt.bFiltered)&&0===f&&
!this.s.dt._drawHold)this.s.topRowFloat=0;b="jump"===this.scrollType?this._domain("physicalToVirtual",this.s.topRowFloat*c.row):b;e(a.dom.scroller).scrollTop(b);this.s.baseScrollTop=b;this.s.baseRowTop=this.s.topRowFloat;var g=b-(this.s.topRowFloat-f)*c.row;0===f?g=0:f+k>=h&&(g=c.scroll-d);this.dom.table.style.top=g+"px";this.s.tableTop=g;this.s.tableBottom=d+this.s.tableTop;d=(b-this.s.tableTop)*this.s.boundaryScale;this.s.redrawTop=b-d;this.s.redrawBottom=b+d>c.scroll-c.viewport-c.row?c.scroll-
c.viewport-c.row:b+d;this.s.skip=!1;this.s.dt.oFeatures.bStateSave&&null!==this.s.dt.oLoadedState&&"undefined"!=typeof this.s.dt.oLoadedState.iScroller?((b=(this.s.dt.sAjaxSource||a.s.dt.ajax)&&!this.s.dt.oFeatures.bServerSide?!0:!1)&&2==this.s.dt.iDraw||!b&&1==this.s.dt.iDraw)&&setTimeout(function(){e(a.dom.scroller).scrollTop(a.s.dt.oLoadedState.iScroller);a.s.redrawTop=a.s.dt.oLoadedState.iScroller-c.viewport/2;setTimeout(function(){a.s.ingnoreScroll=!1},0)},0):a.s.ingnoreScroll=!1;this.s.dt.oFeatures.bInfo&&
setTimeout(function(){a._info.call(a)},0);this.dom.loader&&this.s.loaderVisible&&(this.dom.loader.css("display","none"),this.s.loaderVisible=!1)},_domain:function(a,c){var b=this.s.heights,d;if(b.virtual===b.scroll||1E4>c)return c;if("virtualToPhysical"===a&&c>b.virtual-1E4)return d=b.virtual-c,b.scroll-d;if("physicalToVirtual"===a&&c>b.scroll-1E4)return d=b.scroll-c,b.virtual-d;b=(("virtualToPhysical"===a?b.scroll:b.virtual)-1E4)/(("virtualToPhysical"===a?b.virtual:b.scroll)-1E4);return b*c+(1E4-
1E4*b)},_info:function(){if(this.s.dt.oFeatures.bInfo){var a=this.s.dt,c=a.oLanguage,b=this.dom.scroller.scrollTop,d=Math.floor(this.pixelsToRow(b,!1,this.s.ani)+1),f=a.fnRecordsTotal(),g=a.fnRecordsDisplay(),b=Math.ceil(this.pixelsToRow(b+this.s.heights.viewport,!1,this.s.ani)),b=g<b?g:b,h=a.fnFormatNumber(d),i=a.fnFormatNumber(b),j=a.fnFormatNumber(f),l=a.fnFormatNumber(g),h=0===a.fnRecordsDisplay()&&a.fnRecordsDisplay()==a.fnRecordsTotal()?c.sInfoEmpty+c.sInfoPostFix:0===a.fnRecordsDisplay()?c.sInfoEmpty+
" "+c.sInfoFiltered.replace("_MAX_",j)+c.sInfoPostFix:a.fnRecordsDisplay()==a.fnRecordsTotal()?c.sInfo.replace("_START_",h).replace("_END_",i).replace("_MAX_",j).replace("_TOTAL_",l)+c.sInfoPostFix:c.sInfo.replace("_START_",h).replace("_END_",i).replace("_MAX_",j).replace("_TOTAL_",l)+" "+c.sInfoFiltered.replace("_MAX_",a.fnFormatNumber(a.fnRecordsTotal()))+c.sInfoPostFix;(c=c.fnInfoCallback)&&(h=c.call(a.oInstance,a,d,b,f,g,h));d=a.aanFeatures.i;if("undefined"!=typeof d){f=0;for(g=d.length;f<g;f++)e(d[f]).html(h)}e(a.nTable).triggerHandler("info.dt")}},
_parseHeight:function(a){var c,b=/^([+-]?(?:\d+(?:\.\d+)?|\.\d+))(px|em|rem|vh)$/.exec(a);if(null===b)return 0;a=parseFloat(b[1]);b=b[2];"px"===b?c=a:"vh"===b?c=a/100*e(h).height():"rem"===b?c=a*parseFloat(e(":root").css("font-size")):"em"===b&&(c=a*parseFloat(e("body").css("font-size")));return c?c:0},_scroll:function(){var a=this,c=this.s.heights,b=this.dom.scroller.scrollTop,d;if(!this.s.skip&&!this.s.ingnoreScroll&&b!==this.s.lastScrollTop)if(this.s.dt.bFiltered||this.s.dt.bSorted)this.s.lastScrollTop=
0;else{this._info();clearTimeout(this.s.stateTO);this.s.stateTO=setTimeout(function(){a.s.dtApi.state.save()},250);this.s.scrollType=Math.abs(b-this.s.lastScrollTop)>c.viewport?"jump":"cont";this.s.topRowFloat="cont"===this.s.scrollType?this.pixelsToRow(b,!1,!1):this._domain("physicalToVirtual",b)/c.row;0>this.s.topRowFloat&&(this.s.topRowFloat=0);if(this.s.forceReposition||b<this.s.redrawTop||b>this.s.redrawBottom){var f=Math.ceil((this.s.displayBuffer-1)/2*this.s.viewportRows);d=parseInt(this.s.topRowFloat,
10)-f;this.s.forceReposition=!1;0>=d?d=0:d+this.s.dt._iDisplayLength>this.s.dt.fnRecordsDisplay()?(d=this.s.dt.fnRecordsDisplay()-this.s.dt._iDisplayLength,0>d&&(d=0)):0!==d%2&&d++;if(d!=this.s.dt._iDisplayStart&&(this.s.tableTop=e(this.s.dt.nTable).offset().top,this.s.tableBottom=e(this.s.dt.nTable).height()+this.s.tableTop,f=function(){if(a.s.scrollDrawReq===null)a.s.scrollDrawReq=b;a.s.dt._iDisplayStart=d;a.s.dt.oApi._fnDraw(a.s.dt)},this.s.dt.oFeatures.bServerSide?(clearTimeout(this.s.drawTO),
this.s.drawTO=setTimeout(f,this.s.serverWait)):f(),this.dom.loader&&!this.s.loaderVisible))this.dom.loader.css("display","block"),this.s.loaderVisible=!0}else this.s.topRowFloat=this.pixelsToRow(b,!1,!0);this.s.lastScrollTop=b;this.s.stateSaveThrottle();"jump"===this.s.scrollType&&this.s.mousedown&&this.dom.label.html(this.s.dt.fnFormatNumber(parseInt(this.s.topRowFloat,10)+1)).css("top",b+b*c.labelFactor).css("display","block")}},_scrollForce:function(){var a=this.s.heights;a.virtual=a.row*this.s.dt.fnRecordsDisplay();
a.scroll=a.virtual;1E6<a.scroll&&(a.scroll=1E6);this.dom.force.style.height=a.scroll>this.s.heights.row?a.scroll+"px":this.s.heights.row+"px"}});g.defaults={boundaryScale:0.5,displayBuffer:9,loadingIndicator:!1,rowHeight:"auto",serverWait:200};g.oDefaults=g.defaults;g.version="2.0.0";e(i).on("preInit.dt.dtscroller",function(a,c){if("dt"===a.namespace){var b=c.oInit.scroller,d=m.defaults.scroller;if(b||d)d=e.extend({},b,d),!1!==b&&new g(c,d)}});e.fn.dataTable.Scroller=g;e.fn.DataTable.Scroller=g;var j=
e.fn.dataTable.Api;j.register("scroller()",function(){return this});j.register("scroller().rowToPixels()",function(a,c,b){var d=this.context;if(d.length&&d[0].oScroller)return d[0].oScroller.rowToPixels(a,c,b)});j.register("scroller().pixelsToRow()",function(a,c,b){var d=this.context;if(d.length&&d[0].oScroller)return d[0].oScroller.pixelsToRow(a,c,b)});j.register(["scroller().scrollToRow()","scroller.toPosition()"],function(a,c){this.iterator("table",function(b){b.oScroller&&b.oScroller.scrollToRow(a,
c)});return this});j.register("row().scrollTo()",function(a){var c=this;this.iterator("row",function(b,d){if(b.oScroller){var e=c.rows({order:"applied",search:"applied"}).indexes().indexOf(d);b.oScroller.scrollToRow(e,a)}});return this});j.register("scroller.measure()",function(a){this.iterator("table",function(c){c.oScroller&&c.oScroller.measure(a)});return this});j.register("scroller.page()",function(){var a=this.context;if(a.length&&a[0].oScroller)return a[0].oScroller.pageInfo()});return g});
