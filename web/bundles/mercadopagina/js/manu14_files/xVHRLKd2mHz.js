/*1365026146,178142493*/

if (self.CavalryLogger) { CavalryLogger.start_js(["NSrkG"]); }

__d("EntstreamFullWidthPhoto",["Event","CSS","DOM","Parent","ScrollableArea","Style","csx","cx","queryThenMutateDOM"],function(a,b,c,d,e,f){var g=b('Event'),h=b('CSS'),i=b('DOM'),j=b('Parent'),k=b('ScrollableArea'),l=b('Style'),m=b('csx'),n=b('cx'),o=b('queryThenMutateDOM'),p="_1_vg",q=60,r=100;function s(event){var u=event.getTarget(),v=j.byTag(u,'a');if(v&&!j.byClass(v,'text_exposed_link'))return;var w=j.byClass(u,"_cti"),x=i.scry(w,"._1_vh")[0];if(h.hasClass(w,p)){h.removeClass(w,p);l.set(x,'height','');if(!v){var y=i.find(w,'.text_exposed_root');h.removeClass(y,'text_exposed');}}else if(v){h.addClass(w,p);l.set(x,'height',w.offsetHeight+'px');k.poke(x);}}var t={init:function(u,v){if(v)g.listen(u,'click',s);var w,x;o(function(){w=i.find(u,"._ctk");var y=i.find(u,"._1_vo");x=y.clientHeight;},function(){if(x<=q){h.addClass(w,"_518x");}else if(x>=r)h.addClass(w,"_518y");});}};e.exports=t;});
__d("EntstreamFeedObject",["Parent","cx"],function(a,b,c,d,e,f){var g=b('Parent'),h=b('cx'),i={getRoot:function(j){return g.byClass(j,"_6ns");}};e.exports=i;});
__d("EntstreamFeedObjectFollowup",["CSS","DOM","EntstreamFeedObject","csx","cx","ge"],function(a,b,c,d,e,f){var g=b('CSS'),h=b('DOM'),i=b('EntstreamFeedObject'),j=b('csx'),k=b('cx'),l=b('ge'),m={hasFollowup:function(n){var o=h.scry(n,"._1f84");return (o&&o[0]);},getFollowup:function(n){return h.find(n,"._1f84");},addFollowup:function(n,o,p){var q=h.create('div',{'class':"_1f84"},o||'');if(p)g.addClass(q,p);if(m.hasFollowup(n)){h.replace(m.getFollowup(n),q);}else h.prependContent(n,q);},removeFollowup:function(n){var o=m.getFollowup(n);h.remove(o);},appendToFollowup:function(n,o){var p=i.getRoot(l(n)),q=m.getFollowup(p);h.appendContent(q,o);},setFollowupContent:function(n,o){var p=i.getRoot(l(n)),q=m.getFollowup(p);h.setContent(q,o);}};e.exports=m;});
__d("EntstreamFeedObjectFollow",["EntstreamFeedObject","EntstreamFeedObjectFollowup","Event","Parent","cx","ge"],function(a,b,c,d,e,f){var g=b('EntstreamFeedObject'),h=b('EntstreamFeedObjectFollowup'),i=b('Event'),j=b('Parent'),k=b('cx'),l=b('ge'),m={toggleFollow:function(n,o,p){var q=n.getValue()=='follow_post'?p.follow_post:p.unfollow_post,r=g.getRoot(l(o));if(h.hasFollowup(r)){h.setFollowupContent(o,q);}else{h.addFollowup(r,q,"_521o");var s=h.getFollowup(r);i.listen(s,'click',function(event){var t=event.getTarget(),u="_1f89";if(j.byClass(t,u)){m.toggleFollow(n,o,p);n.toggleMenuItem();}});}}};e.exports=m;});
__d("EntstreamFeedObjectHide",["Event","CSS","EntstreamFeedObject","EntstreamFeedObjectFollowup","cx","ge"],function(a,b,c,d,e,f){var g=b('Event'),h=b('CSS'),i=b('EntstreamFeedObject'),j=b('EntstreamFeedObjectFollowup'),k=b('cx'),l=b('ge'),m={hide:function(n,o){var p=i.getRoot(l(n));j.addFollowup(p,o);h.addClass(p,"_i6m");},registerUnhide:function(n){g.listen(n,'click',function(){m.unhide(i.getRoot(n));});},unhide:function(n){j.removeFollowup(n);h.removeClass(n,"_i6m");}};e.exports=m;});
__d("EntstreamHomeFeedObjectHide",["Event","DOM","EntstreamFeedObjectHide","URI","cx","tx"],function(a,b,c,d,e,f){var g=b('Event'),h=b('DOM'),i=b('EntstreamFeedObjectHide'),j=b('URI'),k=b('cx'),l=b('tx'),m={hide:function(n,o,p,q){var r=p=='hide'?"This story is now hidden from your News Feed.":"This story has been marked as spam.",s=p=='hide'?"Unhide":"Undo",t=h.create('span',{'class':"_1f86"},r),u=h.create('a',{href:'#'},s),v=new j('/ajax/entstream/home/story/unhide');if(o)v.addQueryData({token:o});if(q)v.addQueryData({hideable_token:q});if(o||q)h.setAttributes(u,{ajaxify:v,rel:'async-post'});i.registerUnhide(u);var w=[t,' ',u];i.hide(n,w);},registerHide:function(n,o,p,q){g.listen(n,'click',function(){m.hide(n.getAttribute('id'),o,p,q);});}};e.exports=m;});
__d("EntstreamHomeFeedObjectOptionsMenu",["EntstreamHomeFeedObjectHide","EntstreamFeedObjectFollow"],function(a,b,c,d,e,f){var g=b('EntstreamHomeFeedObjectHide'),h=b('EntstreamFeedObjectFollow');function i(j,k,l,m,n){j.subscribe('itemclick',function(o,p){switch(p.item.getValue()){case 'hide':case 'markspam':g.hide(k,l,p.item.getValue(),n);break;case 'follow_post':case 'unfollow_post':h.toggleFollow(p.item,k,m);break;}}.bind(this));}e.exports=i;});
__d("EntstreamUFI",["Arbiter","Parent","UFICentralUpdates","cx","ge"],function(a,b,c,d,e,f){var g=b('Arbiter'),h=b('Parent'),i=b('UFICentralUpdates'),j=b('cx'),k=b('ge'),l={};i.subscribe('feedback-updated',function(n,o){var p=o.updates;for(var q in p){if(!l[q])continue;l[q].forEach(function(r){if(k(r)){var s=h.byClass(k(r),"_6ns");s&&g.inform('Entstream/StoryUpdated',{story:s});}});}});var m={register:function(n,o){var p=l[o]||(l[o]=[]);p.push(n);}};e.exports=m;});
__d("LitestandMessages",[],function(a,b,c,d,e,f){var g={FILTER_SWITCH_BEGIN:'LitestandMessages/FilterSwitchBegin',NEWSFEED_LOAD:'LitestandMessages/NewsFeedLoad',LEAVE_HOME:'LitestandMessages/LeaveHome',UPDATE_HOME_COUNT:'LitestandMessages/UpdateHomeCount',STORIES_INSERTED:'LitestandMessages/StoriesInserted',STORIES_REMOVED:'LitestandMessages/StoriesRemoved',NEWER_STORIES_INSERTED:'LitestandMessages/NewerStoriesInserted',EXPAND_FILTER_SWITCHER:'LitestandMessages/ExpandFilterSwitcher',RESTORE_FILTER_SWITCHER:'LitestandMessages/RestoreFilterSwitcher',NEW_STORY_BAR_CLICK:'LitestandMessages/NewStoryBarClick',TOUR_BEGIN:'LitestandMessages/TourBegin',TOUR_END:'LitestandMessages/TourEnd',TOUR_SIDEBAR_HIGHLIGHT:'LitestandMessages/TourSidebarHighlight',TOUR_SIDEBAR_UNHIGHLIGHT:'LitestandMessages/TourSidebarUnhighlight',RHC_RELOADED:'LitestandMessages/RHCReloaded'};e.exports=g;});
__d("FeedScrollLogger",["Arbiter","Event","FeedScrollLoggerConfig","LitestandMessages","Run","ScubaSample","SubscriptionsHandler","Vector","throttle"],function(a,b,c,d,e,f){var g=b('Arbiter'),h=b('Event'),i=b('FeedScrollLoggerConfig'),j=b('LitestandMessages'),k=b('Run'),l=b('ScubaSample'),m=b('SubscriptionsHandler'),n=b('Vector'),o=b('throttle'),p=100;function q(){p=100;}function r(){var u=n.getScrollPosition().y;if(u<p)return;s(u);p=u+i.log_spacing;}function s(u){var v=new l('feed_scroll');v.addNormal('qrt_version',i.qrt_version);v.addInteger('y',u);v.flush();}var t={init:function(){var u=new m();u.addSubscriptions(g.subscribe(j.FILTER_SWITCH_BEGIN,q),h.listen(window,'scroll',o(r,250)));k.onLeave(u.release.bind(u));}};e.exports=t;});
__d("LitestandFilterSwitcherLevels",[],function(a,b,c,d,e,f){var g={TOP_LEVEL:'top',ONE_CLICK:'1',TWO_CLICKS:'2'};e.exports=g;});
__d("LitestandFilterImpressionsLogger",["AsyncRequest","LitestandFilterSwitcherLevels"],function(a,b,c,d,e,f){var g=b('AsyncRequest'),h=b('LitestandFilterSwitcherLevels'),i='/ajax/litestand/filter/impressions',j,k={},l={},m,n,o={init:function(p,q,r,s){n=p;k=q;j=r;m=s;},logExpandedFilterImpressions:function(){o.logFilterImpressions(0,m,h.ONE_CLICK);},logSeeAllFilterImpressions:function(){o.logFilterImpressions(m,j.length,h.TWO_CLICKS);},logFilterImpressions:function(p,q,r){if(l[r])return;l[r]=true;var s=[];for(var t=p;t<q;t++){var u=j[t];if(k[u])continue;k[u]=true;var v=n[u];s.push(v.getAttribute('data-gt'));}g.post(i,{filter_gts:s,level:r});}};e.exports=o;});
__d("LitestandKeyboardController",["Class","CSS","DOM","FeedBaseKeyboardController","Parent","copyProperties","csx","cx"],function(a,b,c,d,e,f){var g=b('Class'),h=b('CSS'),i=b('DOM'),j=b('FeedBaseKeyboardController'),k=b('Parent'),l=b('copyProperties'),m=b('csx'),n=b('cx');function o(q){return k.byClass(q,"_4ikz");}function p(q){this.parent.construct(this,q);}g.extend(p,j);l(p,{init:function(q){new p(q);}});l(p.prototype,{getStories:function(q){return i.scry(q||this.root,"div._8ru");},getParentStory:function(q){return k.byClass(q,"_6ns");},isStory:function(q){return h.hasClass(q,"_6ns");},getHeadline:function(q){return i.scry(q,"._6nl")[0];},clickLike:function(){this.click("._6k6");},clickComment:function(){this.click("._6k2");},getScrollOffset:function(){return 5;},setSelected:function(q){this.selected&&this.setTabindexOnHeadline(this.selected,'-1');this.setTabindexOnHeadline(q,'0');this.selected=q;},getPreviousStory:function(q){var r=q.previousSibling;if(r&&this.getParentStory(r))return r;var s=o(q);if(!s)return;while(s.previousSibling){s=s.previousSibling;if(h.hasClass(s,"_4ikz")){if(!h.shown(s.childNodes[0]))return this.selected;var t=this.getStories(s);return t&&t[t.length-1];}}},getNextStory:function(q){var r=q.nextSibling;if(r&&this.getParentStory(r))return r;var s=o(q);if(!s)return;while(s.nextSibling){s=s.nextSibling;if(h.hasClass(s,"_4ikz")){if(!h.shown(s.childNodes[0]))return this.selected;return this.getStories(s)[0];}}}});e.exports=p;});
__d("LitestandOffscreenController",["Arbiter","CSS","DOM","Event","LitestandMessages","LitestandViewportHeight","Parent","Run","Style","SubscriptionsHandler","Vector","cx","queryThenMutateDOM","runAfterScrollingStops","throttle"],function(a,b,c,d,e,f){var g=b('Arbiter'),h=b('CSS'),i=b('DOM'),j=b('Event'),k=b('LitestandMessages'),l=b('LitestandViewportHeight'),m=b('Parent'),n=b('Run'),o=b('Style'),p=b('SubscriptionsHandler'),q=b('Vector'),r=b('cx'),s=b('queryThenMutateDOM'),t=b('runAfterScrollingStops'),u=b('throttle'),v=1,w=4,x=2,y={},z=false,aa,ba,ca,da,ea=[];function fa(){aa&&aa.release();aa=null;z=false;}function ga(){y={};ea=[];}function ha(){for(var ta in y){var ua=y[ta];if(ua.hidden)ua.dirty=true;}}function ia(){if(l.getSize()===l.SMALL)return x;return w;}function ja(){da=da||q.getViewportDimensions().y;ba=q.getScrollPosition().y;ca=ba+da;if(v){ba-=da*v;ca+=da*v;}for(var ta in y){var ua=y[ta];ua.position=q.getElementPosition(ua.element).y;if(!ua.hidden)ua.height=ua.element.offsetHeight;}}function ka(){var ta=[];for(var ua in y){var va=y[ua],wa=va.position,xa=wa+va.height<ba,ya=wa>ca;if(!va.hidden&&(xa||ya)){la(va);}else if(!xa&&!ya){va.pendingHide=false;if(va.hidden){if(va.dirty&&wa<ba){ta.push(ua);h.addClass(ma(va),"_49nu");}else o.apply(va.element,{height:'',marginBottom:''});h.show(ma(va));va.dirty=false;va.hidden=false;}}}if(!ta.length)return;var za=0;s(function(){for(var ab=0,bb=ta.length;ab<bb;ab++){var cb=y[ta[ab]];za+=cb.height-ma(cb).offsetHeight+o.getFloat(cb.element,'marginBottom');}},function(){for(var ab=0,bb=ta.length;ab<bb;ab++){var cb=y[ta[ab]];h.removeClass(ma(cb),"_49nu");o.apply(cb.element,{height:'',marginBottom:''});}za&&(document.body.scrollTop-=za);});}function la(ta){if(!ta.pendingHide){ea.push(ta);ta.pendingHide=true;}}function ma(ta){if(ta.wrapperElement)return ta.wrapperElement;var ua=ta.element;if(ua.firstElementChild)return (ta.wrapperElement=ua.firstElementChild);for(var va=0;va<ua.childNodes.length;va++)if(ua.childNodes[va].tagName)return (ta.wrapperElement=ua.childNodes[va]);}function na(){var ta=ia()+'px';for(var ua=0;ua<ea.length;ua++){var va=ea[ua];if(va.pendingHide&&!va.hidden){o.apply(va.element,{height:va.height+'px',marginBottom:ta});h.hide(ma(va));va.hidden=true;va.pendingHide=false;}}ea=[];}function oa(){t(na,'LitestandOffscreenController/hide');s(ja,ka,'LitestandOffscreenController');}function pa(){for(var ta in y){var ua=y[ta];if(!ma(ua).childNodes.length){i.remove(ua.element);delete y[ta];}}}function qa(ta,ua){var va=m.byClass(ua.story,"_4ikz");if(!va)return;va=y[i.getID(va)];if(va&&va.hidden)va.dirty=true;}function ra(){n.onLeave(fa);aa=new p();aa.addSubscriptions(g.subscribe(k.FILTER_SWITCH_BEGIN,ga),g.subscribe(k.STORIES_REMOVED,pa),g.subscribe('Entstream/StoryUpdated',qa),g.subscribe('ViewportSizeChange',ha),j.listen(window,'scroll',u(oa)),j.listen(window,'resize',u(function(){da=null;oa();})));z=true;}var sa={attachSubstream:function(ta){z||ra();y[i.getID(ta)]={element:ta};}};e.exports=sa;});
__d("runAfterCSSTransition",["BrowserSupport","DataStore","DOM","Event","Run"],function(a,b,c,d,e,f){var g=b('BrowserSupport'),h=b('DataStore'),i=b('DOM'),j=b('Event'),k=b('Run'),l;if(g.hasCSSTransitions()){l=function(m,n){var o=h.get(m,'runAfterCSSTransition');if(o)return o;var p,q=j.listen(m,g.getTransitionEndEvent(),function(event){if(event.getTarget()!==m)return;p&&p();p=null;});if(!n)k.onLeave(function(){q.remove();q=null;p=null;h.remove(m,'runAfterCSSTransition');});var r=i.getID(m);o=function(s){if(!q)return;p=s;};h.set(m,'runAfterCSSTransition',o);return o;};}else l=function(){return function(m){m();};};e.exports=l;});
__d("LitestandSectionNav",["Arbiter","ArbiterMixin","BrowserSupport","CSS","DOM","DOMDimensions","DOMPosition","DOMQuery","Event","LitestandMessages","Parent","Run","Style","SubscriptionsHandler","Vector","copyProperties","csx","cx","queryThenMutateDOM","requestAnimationFrame","runAfterCSSTransition","throttle"],function(a,b,c,d,e,f){var g=b('Arbiter'),h=b('ArbiterMixin'),i=b('BrowserSupport'),j=b('CSS'),k=b('DOM'),l=b('DOMDimensions'),m=b('DOMPosition'),n=b('DOMQuery'),o=b('Event'),p=b('LitestandMessages'),q=b('Parent'),r=b('Run'),s=b('Style'),t=b('SubscriptionsHandler'),u=b('Vector'),v=b('copyProperties'),w=b('csx'),x=b('cx'),y=b('queryThenMutateDOM'),z=b('requestAnimationFrame'),aa=b('runAfterCSSTransition'),ba=b('throttle'),ca=37,da=30,ea={COLLAPSED:0,DEFAULT:1,EXPANDED:2,EXPAND_ALL:3};function fa(ga,ha){this._more=ha.more;this._moreIndex=ha.more&&parseInt(ha.more.getAttribute('data-index'),10);this._seeAll=ha.see_all;this._seeAllIndex=ha.first_see_all;this._selectedIndex=ha.selected;this._currentState=ha.collapsed?ea.COLLAPSED:ea.DEFAULT;this._originalState=this._currentState;this._root=ga;this._wrap=k.find(this._root,"._3ozl");this._layoutRoot=n.find(document.body,"._li");var ia=k.scry(this._root,"._7gb");this._items={};this._itemsCount=ia.length;ia.forEach(function(ka){var la=ka.getAttribute('data-index');this._items[la]={element:ka,index:parseInt(la,10)};}.bind(this));this._runAfterTransition=aa(this._root,true);var ja=new t();ja.addSubscriptions(g.subscribe(p.EXPAND_FILTER_SWITCHER,function(){this.setState(ea.EXPANDED);}.bind(this)),g.subscribe(p.RESTORE_FILTER_SWITCHER,function(){if(this._previousState===ea.DEFAULT){this.setState(ea.DEFAULT);}else this.setState(ea.COLLAPSED);}.bind(this)),this.subscribe('state_change',this.stateChanged.bind(this)),o.listen(ga,'click',this._onClick.bind(this)));if(!ha.has_new_rhc)ja.addSubscriptions(o.listen(window,'scroll',ba(this._onScroll.bind(this))));r.onLeave(ja.release.bind(ja));}v(fa.prototype,h,{_update:function(ga,ha,ia,ja,ka,la){ha=-ha*ca;ga=ga*ca-1;if(this._more&&this._currentState===ea.DEFAULT)ga-=12;var ma=function(){s.set(this._root,'height',ga+'px');s.set(this._wrap,'margin-top',ha+'px');}.bind(this);this.inform(ia,{height:ga});if(ka!==false&&i.hasCSSTransitions()){j.addClass(this._root,'animating');this._runAfterTransition(function(){j.removeClass(this._root,'animating');this.inform(ja,{height:ga});la&&la();}.bind(this));z(ma);}else{ma();this.inform(ja,{height:ga});la&&la();}},_onScroll:function(event){var ga=null;y(function(){var ha=-m.getElementPosition(this._layoutRoot).y;if(this._currentState===ea.EXPAND_ALL){var ia=m.getElementPosition(this._wrap).y,ja=ia+l.getElementDimensions(this._wrap).height,ka=u.getViewportDimensions().y,la=ka/2;if(ia<=la&&ja+la>ka)return;}if(this._currentState===ea.EXPAND_ALL||(this._currentState===ea.EXPANDED&&((this._originalState===ea.DEFAULT&&ha>da)||this._originalState!==ea.DEFAULT))||(this._currentState===ea.DEFAULT&&ha>da)){ga=ea.COLLAPSED;return;}if((this._originalState===ea.DEFAULT)&&((this._currentState===ea.COLLAPSED&&ha<=da)||this._currentState===ea.EXPANDED)){ga=ea.DEFAULT;return;}}.bind(this),function(){this.setState(ga);}.bind(this));},_onClick:function(event){var ga=event.getTarget();if(k.contains(this._more,ga)){this.setState(ea.EXPANDED);return;}if(k.contains(this._seeAll,ga)){this.setState(ea.EXPAND_ALL);return;}var ha=q.byClass(ga,"_7gb");ha&&this.inform('click',{item:ha});if(!ha||event.isDefaultRequested())return;if(this._currentState===ea.COLLAPSED){this.setState(ea.EXPANDED);event.prevent();return;}var ia=parseInt(ha.getAttribute('data-index'),10);if(ia===this._selectedIndex){if(this._currentState===ea.EXPANDED&&this._previousState===ea.DEFAULT){this.setState(ea.DEFAULT);}else if(this._currentState===ea.DEFAULT){this.setState(ea.EXPANDED);}else this.setState(ea.COLLAPSED);event.prevent();return;}},updateSelected:function(ga){if(!ga)return;j.show(ga);var ha=parseInt(ga.getAttribute('data-index'),10);this.select(ha);if(ha&&this._currentState===ea.COLLAPSED){if(this._moreIndex)if(ha>this._moreIndex){j.hide(this._more);ha--;}ha=Math.min(ha,this._seeAllIndex);s.set(this._wrap,'margin-top',-ha*ca+'px');}this.setState(ha?ea.COLLAPSED:ea.DEFAULT);this._originalState=this._currentState;},getRoot:function(){return this._root;},getItemAtIndex:function(ga){return this._items[ga];},getSelected:function(){if(!this._selected)this._selected=this.getItemAtIndex(this._selectedIndex);return this._selected;},getStates:function(){return ea;},isDefaultState:function(){return this._currentState===ea.DEFAULT;},isCollapsed:function(){return this._currentState===ea.COLLAPSED;},hasAllExpanded:function(){return this._currentState===ea.EXPAND_ALL;},previousStateWasDefault:function(){return this._previousState===ea.DEFAULT;},setState:function(ga,ha){if((!ga&&ga!==ea.COLLAPSED)||this._currentState===ga)return;this._previousState=this._currentState;this._currentState=ga;this.inform('state_change',{animate:ha});j.conditionClass(this._root,"_3ozk",ga===ea.COLLAPSED);},stateChanged:function(ga,ha){var ia=ha.animate;switch(this._currentState){case ea.COLLAPSED:this.collapse(ia);break;case ea.DEFAULT:this.expandDefault(ia);break;case ea.EXPANDED:this.expand(ia);break;case ea.EXPAND_ALL:this.expandAll(ia);break;}},select:function(ga){var ha=this.getSelected();if(ha){var ia=ha.element;j.removeClass(ia,"_3ozj");}var ja=this.getItemAtIndex(ga);if(ja){var ka=ja.element;j.addClass(ka,"_3ozj");this._selected=ja;this._selectedIndex=ga;}},expand:function(ga,ha){this.inform('before_expand');for(var ia in this._items){var ja=this._items[ia].element,ka=this._items[ia].index,la=(ja===this._more||(ga&&ja===this._seeAll)||(!ga&&this._seeAllIndex&&ja!==this._seeAll&&ka!==this._selectedIndex&&ka>this._seeAllIndex));j.conditionShow(ja,!la);}var ma;if(ga){ma=this._itemsCount-2;}else{ma=this._seeAllIndex+1;if(this._selectedIndex>this._seeAllIndex)ma+=1;}this._update(ma,0,ga?'expand_all':'expand',ga?'expand_all_end':'expand_end',ha,function(){this.inform('after_expand');}.bind(this));},expandAll:function(){if(!this._seeAll)return;this.expand(true);},expandDefault:function(ga){var ha=function(){for(var ka in this._items){var la=this._items[ka].element,ma=this._items[ka].index;j.conditionShow(la,!this._more||ma<=this._moreIndex);}}.bind(this),ia=null;if(this._previousState===ea.EXPANDED||this._previousState===ea.EXPAND_ALL){ia=ha;}else ha();var ja=this._previousState===ea.EXPANDED||this._previousState===ea.EXPAND_ALL;this._update(this._moreIndex+1,0,'expand','expand_end',ga,function(){ia&&ia();ja&&this.inform('after_collapse');}.bind(this));},collapse:function(ga){this.inform('before_collapse');this._currentState=ea.COLLAPSED;var ha=function(){for(var ja in this._items){var ka=this._items[ja].element,la=this._items[ja].index;if(la===this._selectedIndex)continue;var ma=(ka===this._more&&this._selectedIndex>this._moreIndex)||(this._seeAllIndex&&la>this._seeAllIndex);j.conditionShow(ka,!ma);}this.inform('after_collapse');}.bind(this),ia;if(this._seeAllIndex&&this._selectedIndex>this._seeAllIndex){ia=this._seeAllIndex;}else ia=this._selectedIndex-(this._selectedIndex>this._moreIndex?1:0);this._update(1,ia,'collapse','collapse_end',ga,ha);}});e.exports=fa;});
__d("LitestandStream",["Arbiter","DOM","LitestandMessages","LitestandStreamConfig","copyProperties","csx","ge"],function(a,b,c,d,e,f){var g=b('Arbiter'),h=b('DOM'),i=b('LitestandMessages'),j=b('LitestandStreamConfig'),k=b('copyProperties'),l=b('csx'),m=b('ge'),n,o,p,q,r,s,t={init:function(u,v,w){n=v;p=w;q=u;o=r=0;g.subscribe(i.STORIES_INSERTED,function(x,y){if(!y||!y.substream_id||!n)return;var z=h.scry(m(y.substream_id),t.getStoriesSelector());z.forEach(function(aa){var ba=aa.getAttribute('data-timestamp'),ca=JSON.parse(aa.getAttribute('data-ft')).ei;if(!ca&&ba&&ba<n)o++;r++;});});},getEmptySubstreamsSelector:function(){return "._4ikz:empty";},getStoriesSelector:function(){return "._8ru";},getStreamConfig:function(u){return k({bufferPixels:1000,maxStories:null,oldStoriesDelay:5000,oldStoriesLimit:30,pagerController:'LitestandMoreStoriesPagelet',pagerSelector:t.getPagerSelector(),pollIntervalMS:null,newStoryIdleTime:60000,pollerSelector:t.getPollerSelector()},u);},getPagerSelector:function(){return "._2as";},getPollerSelector:function(){return "._2zo";},getStreamRoot:function(){return q;},getVisibleStoryCount:function(u){var v=h.scry(u,t.getStoriesSelector());return v.length;},hideOffscreenSubstreams:function(){return j.hide_offscreen_substreams;},disableNewStoryBar:function(){return j.disable_new_story_bar;},hasOtherFeedsStoryBar:function(){return j.other_feeds_story_bar;},getOldStoryCount:function(){return o;},getTotalStoryCount:function(){return r;},setHomeloadID:function(u){s=u;},getHomeloadID:function(){return s;},getSectionID:function(){return p;}};e.exports=t;});
__d("LitestandStreamLoader",["Arbiter","AsyncRequest","CSS","DOM","DOMPosition","Event","LitestandMessages","LitestandOffscreenController","LitestandStream","NavigationMessage","OnVisible","Run","UIPagelet","URI","UserActivity","ViewportBounds","$","ge"],function(a,b,c,d,e,f){var g=b('Arbiter'),h=b('AsyncRequest'),i=b('CSS'),j=b('DOM'),k=b('DOMPosition'),l=b('Event'),m=b('LitestandMessages'),n=b('LitestandOffscreenController'),o=b('LitestandStream'),p=b('NavigationMessage'),q=b('OnVisible'),r=b('Run'),s=b('UIPagelet'),t=b('URI'),u=b('UserActivity'),v=b('ViewportBounds'),w=b('$'),x=b('ge'),y=false,z=false,aa,ba,ca,da,ea,fa,ga,ha=0,ia={},ja=[];function ka(){r.onLeave(la);ja=[g.subscribe(p.NAVIGATION_BEGIN,la),g.subscribe(m.FILTER_SWITCH_BEGIN,la),g.subscribe(m.TOUR_BEGIN,function(){z=true;}),g.subscribe(m.TOUR_END,function(){z=false;})];y=true;}function la(){g.inform(m.LEAVE_HOME);ha=0;ja.forEach(g.unsubscribe);ja=[];ba&&ba.remove();ea&&clearTimeout(ea);ea=null;fa=null;y=false;}function ma(){if(ia.pollIntervalMS&&ia.pollIntervalMS>1000)ea=setTimeout(function(){ea=null;oa();},ia.pollIntervalMS);}function na(){var va=j.find(ca,'a');l.listen(va,'click',function(event){ta(da);event.preventDefault();});var wa=o.getVisibleStoryCount(ga),xa=ia.maxStories;if(xa&&wa>=xa)return;ba=new q(va,ta.bind(null,da),false,ia.bufferPixels);}function oa(){if(z||!fa)return;if(!u.isActive(ia.newStoryIdleTime)){u.subscribeOnce(oa);return;}if(o.hasOtherFeedsStoryBar())new h().setURI('/ajax/litestand/other_feed_counts').setData({section_id:o.getSectionID()}).send();if(o.disableNewStoryBar())if(k.getElementPosition(o.getStreamRoot()).y<v.getTop()){ea=setTimeout(function(){ea=null;oa();},ia.pollIntervalMS);return;}var va=j.find(fa,'a'),wa=t(va.getAttribute('ajaxify'));wa.addQueryData({cursor:aa});h.bootstrap(wa,fa);}function pa(va){var wa=j.getID(ca);i.addClass(ca,'async_saving');var xa={cursor:ra(),pager_config:va,pager_id:wa,scroll_count:++ha};if(o.getHomeloadID())xa.homeload_id=o.getHomeloadID();s.loadFromEndpoint(ia.pagerController,j.getID(ga),xa,{append:true,automatic:true,usePipe:true});}function qa(){return sa()[0].getAttribute('data-cursor');}function ra(){var va=sa();return va[va.length-1].getAttribute('data-cursor');}function sa(){var va=j.scry(ga,o.getStoriesSelector()+'[data-cursor]');return va;}function ta(va){pa(va);ba&&ba.remove();ba=null;}var ua={register:function(va,wa,xa,ya){y||ka();ia=o.getStreamConfig(wa);da=xa;ga=w(va);aa=qa();ca=ya;na();fa=j.scry(ga,ia.pollerSelector)[0];fa&&ma();},removeOldPager:function(va,wa){j.remove(w(va));i.show(w(wa));},removeLoadingIndicator:function(va,wa){var xa=x(va);if(xa)j.remove(xa);i.show(wa);},moreStoriesInserted:function(va){g.inform(m.STORIES_INSERTED,{substream_id:va});if(o.hideOffscreenSubstreams())n.attachSubstream(w(va));},attachNewPager:function(va){ca=va;ca&&na();},updatePollerCursor:function(va){aa=va;ma();}};e.exports=ua;});
__d("LitestandStreamUnloader",["Event","Arbiter","DOM","DOMPosition","DOMQuery","LitestandMessages","LitestandStream","Run","$","csx","queryThenMutateDOM","throttle"],function(a,b,c,d,e,f){var g=b('Event'),h=b('Arbiter'),i=b('DOM'),j=b('DOMPosition'),k=b('DOMQuery'),l=b('LitestandMessages'),m=b('LitestandStream'),n=b('Run'),o=b('$'),p=b('csx'),q=b('queryThenMutateDOM'),r=b('throttle'),s=false,t,u,v,w,x={},y=[];function z(){n.onLeave(aa);y=[h.subscribe(l.FILTER_SWITCH_BEGIN,aa),h.subscribe(l.STORIES_INSERTED,ca)];s=true;}function aa(){y.forEach(h.unsubscribe);y=[];s=false;}function ba(){var ea=false,fa=[];clearTimeout(u);u=setTimeout(function(){q(function(){var ga=Math.abs(Math.min(j.getElementPosition(t).y,0));if(ga===0){ea=true;fa=i.scry(v,m.getStoriesSelector());}},function(){if(fa.length>x.oldStoriesLimit){fa.slice(x.oldStoriesLimit).forEach(i.remove);h.inform(l.STORIES_REMOVED);}if(ea){w&&w.remove();w=null;}},'LitestandStreamUnloader/removeOldStories');},x.oldStoriesDelay);}function ca(){ba();if(!w&&m.getVisibleStoryCount(v)>x.oldStoriesLimit)w=g.listen(window,'scroll',r(ba));}var da={register:function(ea,fa){s||z();x=m.getStreamConfig(fa);v=o(ea);t=k.scry(document.body,"._li")[0];}};e.exports=da;});
__d("LitestandSwitcher",["Arbiter","ArbiterMixin","CSS","DocumentTitle","DOM","DOMScroll","LitestandFilterImpressionsLogger","LitestandMessages","PageTransitions","Run","UIPagelet","copyProperties","csx","cx"],function(a,b,c,d,e,f){var g=b('Arbiter'),h=b('ArbiterMixin'),i=b('CSS'),j=b('DocumentTitle'),k=b('DOM'),l=b('DOMScroll'),m=b('LitestandFilterImpressionsLogger'),n=b('LitestandMessages'),o=b('PageTransitions'),p=b('Run'),q=b('UIPagelet'),r=b('copyProperties'),s=b('csx'),t=b('cx'),u,v,w;function x(ba,ca){u.updateSelected(w[ca]);var da=k.find(document.body,"._6d_"),ea=k.find(document.body,"._6di"),fa={className:"_3ozp",src:'/images/litestand/spinner.gif'},ga=da.childNodes,ha=ea.childNodes;for(var ia=0;ia<ga.length;++ia)i.hide(ga[ia]);for(var ja=0;ja<ha.length;++ja)i.hide(ha[ja]);k.appendContent(da,k.create('img',fa));k.appendContent(ea,k.create('img',fa));i.addClass(ea,"_4_8c");q.loadFromEndpoint('LitestandMainColumnPagelet',k.getID(da),v[ba],{automatic:true,usePipe:true});q.loadFromEndpoint('LitestandRHCPagelet',k.getID(ea),v[ba],{automatic:true,constHeight:true,usePipe:true});var ka=v[ba].section_title;ka&&j.set(ka,false);l.scrollToTop(false);}function y(ba){for(var ca=0;ca<v.length;ca++)if(v[ca].section_href==ba.getPath()){g.inform(n.FILTER_SWITCH_BEGIN);x(ca,v[ca].section_id);return true;}return false;}function z(ba){var ca=k.scry(ba,"._3ozq")[0];ca&&k.remove(ca);}var aa={init:function(ba,ca,da){u=ba;v=ca;w=da;aa.inform('init',null,g.BEHAVIOR_PERSISTENT);ba.subscribe(['expand','expand_end','expand_all','expand_all_end','collapse','collapse_end','click'],function(ea,fa){if(ea==='expand'){m.logExpandedFilterImpressions();}else if(ea==='expand_all')m.logSeeAllFilterImpressions();if(ea==='click')z(fa.item);aa.inform(ea,fa);});o.registerHandler(y);p.onLeave(function(){u=null;v=null;w=null;});},getRoot:function(){return u.getRoot();},getNavInstance:function(){return u;},updateListName:function(ba,ca){var da=w&&w[ba];if(da)k.setContent(k.find(da,"._18q_"),ca);}};r(aa,h);e.exports=aa;});
__d("LitestandViewportTracking",["Class","DOM","DOMDimensions","DOMPosition","LitestandStream","Parent","Vector","ViewportTracking","copyProperties","cx","recordTNTreeData"],function(a,b,c,d,e,f){var g=b('Class'),h=b('DOM'),i=b('DOMDimensions'),j=b('DOMPosition'),k=b('LitestandStream'),l=b('Parent'),m=b('Vector'),n=b('ViewportTracking'),o=b('copyProperties'),p=b('cx'),q=b('recordTNTreeData'),r=51;function s(){this.parent.construct(this);}g.extend(s,n);o(s.prototype,{getDataFromConfig:function(t){this.recordTNTree=t.record_tn_tree;this.timeout=t.record_delay;},getTimeout:function(){return this.timeout;},getAllStories:function(){return h.scry(k.getStreamRoot(),k.getStoriesSelector()+'[data-ft]');},_getStoryData:function(t){return JSON.parse(t.getAttribute('data-ft'));},getStoryID:function(t){return this._getStoryData(t).mf_story_key;},getDataToLog:function(t){var u={};if(this.recordTNTree){var v=k.getStreamRoot();u=q(t,v);}u.evt=r;return {ft:u};},isVisible:function(t){var u=this.parent.isVisible(t);if(!this.isLoose||u)return u;var v=l.byClass(t,"_4ikz");if(!v)return false;var w=m.getScrollPosition().y,x=i.getViewportDimensions().height,y=j.getElementPosition(v).y,z=i.getElementDimensions(v).height,aa=x+this.maxScrollPosition-w;return y+z<aa;}});e.exports.init=function(t){(new s()).init(t);};});
__d("LitestandLinkHider",["DataStore","Event","Parent","UserAgent"],function(a,b,c,d,e,f){var g=b('DataStore'),h=b('Event'),i=b('Parent'),j=b('UserAgent');function k(event){var m=event.getTarget(),n=i.byTag(m,'a');if(!n)return;if(event.type==='mouseover'){g.set(n,'href',n.href);n.removeAttribute('href');}else{n.href=g.get(n,'href')||n.href;if(event.type==='mouseout')g.remove(n,'href');}}var l={hideLinks:function(m){if(!j.chrome()&&j.ie()<9)return;h.listen(m,{mouseover:k,mouseout:k,mousedown:k});}};e.exports=l;});
__d("LitestandSidebar",["Arbiter","AsyncRequest","CSS","DOM","DOMDimensions","Event","LitestandLinkHider","LitestandMessages","LitestandSidebarConfig","Parent","ScrollableArea","Style","UserAgent","$","csx","cx","emptyFunction","runAfterCSSTransition","throttle"],function(a,b,c,d,e,f){var g=b('Arbiter'),h=b('AsyncRequest'),i=b('CSS'),j=b('DOM'),k=b('DOMDimensions'),l=b('Event'),m=b('LitestandLinkHider'),n=b('LitestandMessages'),o=b('LitestandSidebarConfig'),p=b('Parent'),q=b('ScrollableArea'),r=b('Style'),s=b('UserAgent'),t=b('$'),u=b('csx'),v=b('cx'),w=b('emptyFunction'),x=b('runAfterCSSTransition'),y=b('throttle'),z,aa,ba,ca,da,ea,fa,ga,ha,ia,ja={},ka,la=false,ma=o.min_collapse_width,na=205,oa=document.documentElement,pa;if(!la){pa=x(j.find(document.body,"._4_37"),true);}else pa=function(db){db();};var qa;function ra(){if(!qa)qa=ba.clientWidth+205;return qa;}function sa(){if(!aa)return;j.setContent(aa,ea?aa.getAttribute('data-openlabel'):aa.getAttribute('data-closelabel'));}function ta(){return j.find(z,"._4g6b");}function ua(){for(var db in ja)if(ja.hasOwnProperty(db)&&ja[db]===false)return false;return true;}function va(){i.addClass(oa,"_4kdq");}function wa(){i.removeClass(oa,"_4kdq");i.removeClass(z,"_4_xo");}function xa(){ha=false;if(cb.isExpanded()||ga||la)return;var db=ca.width>ma;if(!i.hasClass(oa,'tinyViewport')&&document.body.clientWidth<ra()){ka=r.get(da,'overflowX');r.set(da,'overflowX','hidden');}i.conditionClass(z,"_4kds",!db);wa();ga=true;pa(g.inform.curry('reflow'));}function ya(){ha=true;if(!ua())return;va();ga=false;g.inform('LitestandSidebar/closeFromHover');pa(function(){if(typeof ka!=='undefined'){r.set(da,'overflowX',ka);ka=undefined;}i.addClass(z,"_4_xo");g.inform('reflow');});}function za(event){var db=event.getRelatedTarget();if(cb.isExpanded()||db===null||db===oa)return;ya();}function ab(){var db=ba.offsetWidth-k.measureElementBox(ba,'width',true,true);return db+na>ca.width;}function bb(){ca=k.getViewportWithoutScrollbarDimensions();if(!cb.isExpanded()&&fa)return;if(ca.width<=ma){cb.collapse();}else cb.expand();}var cb={init:function(db){z=db;fa=o.is_collapsed;if(p.byClass(z,"_504q"))cb.initLiquidLayout();ba=t('globalContainer');da=j.find(document.body,"._4_37");var eb=i.hasClass(oa,"_4kdq");if(eb){i.addClass(db,"_4kdt");i.addClass(db,"_4_xo");}var fb=j.scry(document.body,"._4i9v");fb[0]&&j.remove(fb[0]);bb();g.inform('LitestandSidebar/initialized',null,g.BEHAVIOR_PERSISTENT);var gb=function(event){if(s.webkit()&&event.screenX===0&&event.screenY===0)return;gb=xa;xa();};l.listen(window,'resize',y(bb));l.listen(db,'mouseenter',gb);l.listen(db,'mouseleave',za);l.listen(db,'scroll',function(){if(db.scrollLeft>0)db.scrollLeft=0;});l.listen(document.body,'mouseenter',function(event){var jb=event.getTarget();if(!ga||j.contains(db,jb))return;ya();});if(!s.ie())l.listen(document.body,'mouseleave',function(event){var jb=l.getPosition(event);if(!cb.isExpanded()&&jb.x<=0)xa();});cb.initScrollableArea.defer();var hb=j.scry(db,".fbChatTypeahead .textInput")[0];if(hb){var ib=p.byClass(hb,"_4oes");ib&&m.hideLinks(ib);l.listen(hb,'focus',function(){cb.allowCollapse(false,'chatsearch');});l.listen(hb,'blur',function(){cb.allowCollapse(true,'chatsearch');});g.subscribe('LitestandSidebarBookmarks/clickToCollapse',function(){hb.focus();});}if(o.chat_scrolls_separately){g.subscribe('LitestandSidebarBookmarks/open',function(){ia=true;var jb=j.find(db,"._53de"),kb=j.find(db,"._53i9");j.appendContent(kb,jb);q.getInstance(ta()).setScrollTop(0,false);g.inform('LitestandSidebar/scrollableAreaSingled');});g.subscribe('LitestandSidebarBookmarks/close',function(){ia=false;var jb=j.find(db,"._53de");j.prependContent(db,jb);g.inform('LitestandSidebar/scrollableAreaRemoved');});}g.subscribe(n.TOUR_SIDEBAR_HIGHLIGHT,function(){cb.allowCollapse(false,'tour');xa();});g.subscribe(n.TOUR_SIDEBAR_UNHIGHLIGHT,function(){if(ga)ya();cb.allowCollapse(true,'tour');});i.addClass(oa,"_4tzn");},initScrollableArea:function(){var db=q.getInstance(ta());db.subscribe('grip_start',cb.allowCollapse.curry(false,'gripper'));db.subscribe('grip_end',cb.allowCollapse.curry(true,'gripper'));},initLiquidLayout:function(){la=true;g.subscribe('LitestandSidebarBookmarks/open',cb.expandWhenSuspended);var db=j.find(z,"._504r");l.listen(db,'click',function(){if(!ga)cb.expandWhenSuspended();});},expandWhenSuspended:function(){la=false;xa();la=true;},registerToggleItem:function(db,eb){aa=eb;l.listen(db,'click',cb.toggle);},isExpanded:function(){if(typeof ea==='undefined')ea=!i.hasClass(oa,"_4kdq");return ea;},allowCollapse:function(db,eb){if(db===false){ja[eb]=db;}else delete ja[eb];if(ua()&&ha&&ga)ya();},toggle:function(){if(cb.isExpanded()){cb.collapse();fa=true;}else{cb.expand();fa=false;}new h('/ajax/litestand/sidebar/settings').setHandler(w).setErrorHandler(w).setData({is_collapsed:fa}).setAllowCrossPageTransition(true).send();},expand:function(){if(cb.isExpanded()||ab()||la)return;sa();i.removeClass(z,"_4kdt");i.removeClass(z,"_4kds");wa();ea=true;ga=false;fa=false;pa(g.inform.curry('reflow'));g.inform('LitestandSidebar/expand');},collapse:function(){if(!cb.isExpanded())return;sa();i.addClass(z,"_4kdt");ea=false;if(ua()){va();pa(function(){i.addClass(z,"_4_xo");g.inform('reflow');});g.inform('LitestandSidebar/collapse');}else ga=true;},isSingleScrollableArea:function(){return ia;},showOnQuickling:function(){qa=undefined;if(z&&la){la=false;i.removeClass(oa,"_4_f0");var db=j.find(z,'.fbChatTypeahead');i.show(p.byClass(db,'uiContextualLayerPositioner'));}},hideOnQuickling:function(){qa=undefined;if(z){la=true;i.addClass(oa,"_4_f0");}}};e.exports=cb;});
__d("MenuXTogglingItem",["Class","DOM","MenuXItem","copyProperties"],function(a,b,c,d,e,f){var g=b('Class'),h=b('DOM'),i=b('MenuXItem'),j=b('copyProperties');function k(l){this.parent.construct(this,l);this._itemText;}g.extend(k,i);j(k.prototype,{handleClick:function(){this.toggleMenuItem();return this.parent.handleClick();},toggleMenuItem:function(){this._swap('ajaxify','toggleAjaxify');this._swap('value','toggleValue');this._toggleItemText();},setValue:function(l){this._data.value=l;},_toggleItemText:function(){var l=this._anchor;this._swap('markup','toggleMarkup');h.replace(l,this._renderItemContent());},_swap:function(l,m){var n=this._data[l];this._data[l]=this._data[m];this._data[m]=n;}});e.exports=k;});
__d("ButtonGroupX",["function-extensions","ArbiterMixin","copyProperties"],function(a,b,c,d,e,f){b('function-extensions');var g=b('ArbiterMixin'),h=b('copyProperties');function i(j,k){k=k||{};this._root=j;this._radioButtons=k.radioButtons||[];this._selected=k.selected;this.initButtonListeners();}h(i.prototype,g,{initButtonListeners:function(){var j=this._radioButtons.length;while(j--){var k=this._radioButtons[j];k.subscribe('select',this.selectButton.bind(this,k));}},getSelected:function(){return this._selected;},getSelectedValue:function(){return this._selected?this._selected.getValue():null;},selectButton:function(j){if(this._selected!==j){this.setSelected(j);this.inform('change',{selected:j});}return this;},setSelected:function(j){if(this._selected!==j){if(this._selected)this._selected.setSelected(false);j.setSelected(true);this._selected=j;}return this;},setSelectedValue:function(j){var k=this._radioButtons.length;while(k--){var l=this._radioButtons[k];if(l.getValue()===j)return this.setSelected(l);}return this;}});e.exports=i;});