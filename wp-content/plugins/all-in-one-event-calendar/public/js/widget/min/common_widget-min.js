timely.require(["scripts/calendar","scripts/calendar/load_views","scripts/event","scripts/common_scripts/frontend/common_frontend","domReady","jquery_timely","ai1ec_calendar","ai1ec_config","libs/utils","libs/gmaps"],function(e,a,t,i,c,n,d,o,r){if(!window.timely.js_widgets_inited){window.timely.js_widgets_inited=1;var s='<h2 class="ai1ec-widget-loading ai1ec-text-center"><small>			<i class="ai1ec-fa ai1ec-fa-lg ai1ec-fa-fw ai1ec-fa-spin				ai1ec-fa-spinner"></i> '+o.calendar_loading+"</small></h2>",l=function(e){e.find(".ai1ec-widget-loading").fadeOut("slow",function(){n(this).remove()})},u=function(e){var a=o.javascript_widgets[e.widget];if(!a)return!1;var t=(e.widget.match(/superwidget/)?d.full_calendar_url:o.site_url)+"?ai1ec_js_widget="+e.widget+"&render=true";n.each(a,function(a,i){void 0!==e[a]&&(t+="&"+a+"="+e[a])});var i=location.hash.match(/^#view\|(.+)/);return i&&e.widget.match(/superwidget/)&&(t=d.calendar_url+"?"+i[1].replace(/\|/g,"&").replace(/\~/g,"="),history.pushState(null,document.title,location.pathname)),t},m=function(e,a,t,i){var c=n(this),a=a||c.attr("href"),d="jsonp",o=c.closest(".timely"),u={request_type:d,ai1ec_doing_ajax:!0,ai1ec:r.create_ai1ec_to_send(o)},m=n("#ai1ec-event-modal"),h=c.closest(".ai1ec-event, .ai1ec-popover").length?c.closest(".ai1ec-event, .ai1ec-popover"):c,t=t||h.attr("class").match(/ai1ec-event-instance-id-(\d+)/)[1],i=i||function(){var e=a.match(/\/event\/([\w-]+)/);return e||(e=a.match(/\?ai1ec_event=([\w-]+)&/)),e?e[1]:void 0},p="#event|"+i()+"|"+t;return m.modal("show").find(".ai1ec-modal-body").html(s),n(".ai1ec-popup").hide(),location.hash!=p&&History.pushState(t,i,p),n.ajax({url:a,dataType:d,data:u,method:"get",crossDomain:!0,success:function(e){m.modal("show").find(".ai1ec-modal-body").append(e.html),n(".ai1ec-subscribe-container",m).hide(),n("a.ai1ec-category, a.ai1ec-tag",m).each(function(){n(this).removeAttr("href")}),n(".ai1ec-calendar-link",m).attr("data-dismiss","ai1ec-modal"),timely.require(["scripts/event"],function(e){e.start()})},complete:function(){l(m)}}),!1},h=function(){n(".ai1ec-load-view, .ai1ec-clear-filter").each(function(){var e=n(this),a=e.closest(".timely-widget").attr("data-widget-type"),t=e.attr("href")||e.attr("data-href"),i=r.add_query_arg(t,["ai1ec_source",a]);e.attr({href:i,"data-href":i})})};c(function(){n("#ai1ec-event-modal").length||n("body").append('<div id="ai1ec-event-modal" class="timely ai1ec-modal ai1ec-fade"					role="dialog" aria-hidden="true" tabindex="-1">					<div class="ai1ec-modal-dialog">						<div class="ai1ec-modal-content">							<button data-dismiss="ai1ec-modal" class="ai1ec-close ai1ec-pull-right">&times;</button>							<div class="ai1ec-modal-body ai1ec-clearfix single-ai1ec_event">							</div>						</div>					</div>				</div>');var a=n('[data-widget^="ai1ec"]').not("[data-added]").map(function(a,t){var i=n(t),c=i.data("widget"),d=n("<div />",{"class":"timely timely-widget"+(c.match(/ai1ec(_|-)superwidget/)?" timely-calendar":"")}).attr("data-widget-type",c).html(s).insertAfter(i).css(-1<n.inArray(c,["ai1ec_superwidget","ai1ecfe_fe_widget"])?{"min-height":"392px"}:{}),o=u(i.data()),h={ai1ec_doing_ajax:!0,request_type:"jsonp",ai1ec:r.create_ai1ec_to_send(t),ai1ec_source:c};return!1===o?(i.remove(),d.remove(),!1):(d.on("click",".ai1ec-cog-item-name a",m),n.ajax({url:o,dataType:"jsonp",data:h,success:function(a){d.append(a.html),i.attr("data-added",1),e.initialize_view(d.find(".ai1ec-calendar"))},error:function(){d.append("<p>An error occurred while retrieving the data.</p>")},complete:function(){l(d)}}))}).get();n.when.apply(n,a).done(function(){i.are_event_listeners_attached()||i.start(),n.each(d.extension_urls,function(e,a){timely.require([a.url])}),h(),top.postMessage("ai1ec-widget-loaded",top.document.URL),n(document).trigger("page_ready.ai1ec").data("ai1ec-widget-loaded",1)});var t=document.title;n(document).on("click","a.ai1ec-load-event",m).on("initialize_view.ai1ec",h).on("hide.bs.modal","#ai1ec-event-modal",function(){location.hash&&history.pushState(null,t,location.pathname)});var c=function(){var e=decodeURIComponent(location.hash),a=e;if(e=e.match(/^#event\|([\w-]+)\|(\d+)/),a=a.match(/^#view\|(.+)/),e){var t=function(){return e[1]},i=e[2];d.permalinks_structure?href=o.site_url+"event/"+t()+"/?instance_id="+i:href=o.site_url+"?ai1ec_event="+t()+"&instance_id="+i,m(null,href,i,t)}else a||n("#ai1ec-event-modal").modal("hide")};c(),History.Adapter.bind(window,"popstate",function(e){e.originalEvent&&c()})})}});