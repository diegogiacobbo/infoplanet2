/*1364911474,178142561*/

if (self.CavalryLogger) { CavalryLogger.start_js(["rtMZU"]); }

__d("OGAggregationBling",["ReactDOM","React","NumberFormat","cx"],function(a,b,c,d,e,f){var g=b('ReactDOM'),h=b('React'),i=b('NumberFormat'),j=b('cx'),k=h.createClass({displayName:'OGAggregationBling',render:function(){var l=[];if(this.props.likes)l.push(g.span({className:"_14a_"},[g.i({className:"_4fx"}),g.span(null,i.formatIntegerWithDelimiter(this.props.likes,this.props.numberDelimiter))]));if(this.props.comments){l.push(g.span({className:"_14a_"},[g.i({className:"_4fy"}),g.span(null,i.formatIntegerWithDelimiter(this.props.comments,this.props.numberDelimiter))]));}else{var m=!(this.props.mini&&this.props.likes),n={};n._14a_=true;n._4fz=m;l.push(g.span({classSet:n},g.i({className:"_4fy"})));}return (g.span({className:"_4f-"},l));}});e.exports=k;});
__d("OGAggregationUFI",["ReactDOM","DOM","CSS","OGAggregationBling","React","UFICentralUpdates","UFIComments","UFIConstants","UFIFeedbackTargets","UFILikeLink","UFIUserActions","copyProperties","csx","cx"],function(a,b,c,d,e,f){var g=b('DOM'),h=b('CSS'),i=b('OGAggregationBling'),j=b('React'),k=b('UFICentralUpdates'),l=b('UFIComments'),m=b('UFIConstants'),n=b('UFIFeedbackTargets'),o=b('UFILikeLink'),p=b('UFIUserActions'),q=b('copyProperties'),r=b('csx'),s=b('cx');function t(u,v,w){this._root=u;this._id=v.ftentidentifier;this._source=v.source;this._numberDelimiter=v.numberdelimiter||',';this._mini=v.mini;this._bling=g.scry(this._root,"._4f-")[0];this._initializeLikeLink();k.handleUpdate(m.UFIPayloadSourceType.INITIAL_SERVER,w);k.subscribe('feedback-updated',function(x,y){if(this._id in y.updates)this.render();}.bind(this));this.render();}q(t.prototype,{_initializeLikeLink:function(){if(this._likeLink)throw new Error('OGAggregationUFI attempted to initialize the like link when the like'+' link was already present');var u=g.scry(this._root,'.like_link')[0];if(u){var v=document.createElement('span');u.parentNode.replaceChild(v,u);this._likeLink=v;v.appendChild(u);}},render:function(){n.getFeedbackTarget(this._id,function(u){if(this._likeLink){var v=!u.hasviewerliked,w=function(event){p.changeLike(this._id,v,{source:this._source,target:event.target});}.bind(this),x=o({onClick:w,likeAction:v});j.renderOrUpdateComponent(x,this._likeLink);}if(this._bling){var y=l.getDisplayedCommentCount(this._id);h.conditionClass(this._root,"_93n",this._mini&&(u.likecount||y));var z=i({mini:this._mini,likes:u.likecount,comments:y,numberDelimiter:this._numberDelimiter});j.renderOrUpdateComponent(z,this._bling);}}.bind(this));}});e.exports=t;});
__d("OGHovercardLayerHideOnBlur",["Event","DOM","copyProperties"],function(a,b,c,d,e,f){var g=b('Event'),h=b('DOM'),i=b('copyProperties');function j(k){this._layer=k;}i(j.prototype,{_subscriptions:null,_clickListener:null,enable:function(){this._subscriptions=[this._layer.subscribe('show',this._attach.bind(this)),this._layer.subscribe('hide',this._detach.bind(this))];if(this._layer.isShown())this._attach();},disable:function(){this._detach();while(this._subscriptions.length)this._subscriptions.pop().unsubscribe();this._subscriptions=null;},_detach:function(){this._clickListener&&this._clickListener.remove();this._clickListener=null;},_attach:function(){!function(){this._clickListener=g.listen(document.documentElement,'click',this._maybeHide.bind(this));}.bind(this).defer();},_maybeHide:function(event){var k=event.getTarget();if(h.contains(this._layer.getContent(),k))return;if(this._shouldHide(event))this._layer.hide();},_shouldHide:function(event){return true;}});e.exports=j;});
__d("OGAggregationHovercardTarget",["Event","ArbiterMixin","AsyncRequest","Class","ContextualDialog","ContextualDialogArrow","CSS","DOM","LayerHideOnBlur","LayerHideOnEscape","OGHovercardLayerHideOnBlur","copyProperties","cx","emptyFunction","tx"],function(a,b,c,d,e,f){var g=b('Event'),h=b('ArbiterMixin'),i=b('AsyncRequest'),j=b('Class'),k=b('ContextualDialog'),l=b('ContextualDialogArrow'),m=b('CSS'),n=b('DOM'),o=b('LayerHideOnBlur'),p=b('LayerHideOnEscape'),q=b('OGHovercardLayerHideOnBlur'),r=b('copyProperties'),s=b('cx'),t=b('emptyFunction'),u=b('tx'),v=350,w={},x=function(){var z=new k({addedBehaviors:[o,p],arrowBehavior:l},n.create('div',{className:"_4q1"},"Loading...")).setWidth(v);x=t.thatReturns(z);return z;};r(y,{setHovercard:function(z,aa){var ba=w[z];ba&&ba.setHovercard(aa);}});function y(z,aa,ba,ca,da,ea){w[aa]=this;this._targetID=aa;this._endpoint=ba;this._preventClose=da||[];this.init(z);for(var fa=0,ga=ca.length;fa<ga;fa++){var ha=ca[fa];this.addTrigger(ha.element,ha.trigger_class,ha.context);}if(ea)this.showHovercard(null,null);}r(y.prototype,h,{init:function(z){this._hovercardShown=false;this._hovercardScheduled=false;this._target=z;this._triggers=[];this._hovercard=null;this._fetching=false;this._placeholder=null;this._placeholderListener=null;this._shownClass='hover_shown';this._triggerClass=null;this._currentTrigger=null;this._context=null;return this;},addTrigger:function(z,aa,ba){this._triggers.push(z);g.listen(z,'click',this._onTrigger.bind(this,z,aa,ba));},_onTrigger:function(z,aa,ba){ba=ba||this._target;if((this._hovercardShown&&(this._hovercard.getContext()===ba))||(this._hovercardScheduled&&(this._placeholder.getContext()===ba))||((this._hovercardShown||this._hovercardScheduled)&&(this._currentTrigger===z))){this._currentTrigger=null;this.hideHovercard();return;}this.hideHovercard();this._currentTrigger=z;this.showHovercard(aa,ba);},_fetch:function(){if(this._hovercard!=null||this._fetching)return;this._fetching=true;var z=function(){this._fetching=false;},aa=function(){this.hideHovercard();};new i(this._endpoint).setData({hover_target:this._targetID}).setMethod('GET').setReadOnly(true).setErrorHandler(aa.bind(this)).setTransportErrorHandler(aa.bind(this)).setFinallyHandler(z.bind(this)).send();},setHovercard:function(z){this._hovercard=z;var aa=function(ba){this.parent.construct(this,ba);};j.extend(aa,q);r(aa.prototype,{_shouldHide:function(event){var ba=event.getTarget();for(var ca=0,da=this._preventClose.length;ca<da;ca++)if(n.contains(this._preventClose[ca],ba))return false;return true;}.bind(this)});this._hovercard.setPosition('below').setAlignment('center').enableBehaviors([aa,p]);this._hovercard.subscribe('aftershow',this._onHovercardShow.bind(this));this._hovercard.subscribe('hide',this._onHovercardHide.bind(this));this._hovercard.subscribe('destroy',this._onHovercardDestroy.bind(this));if(this._hovercardScheduled)this.showHovercard(this._triggerClass,this._context);},showHovercard:function(z,aa){m.addClass(this._target,this._shownClass);if(this._triggerClass&&this._triggerClass!==z)m.removeClass(this._target,this._triggerClass);this._triggerClass=z;m.addClass(this._target,this._triggerClass);if(this._hovercard){this._hovercard.setContext(aa||this._target).show();this._hovercardShown=true;this._hovercardScheduled=false;this._hidePlaceholder();}else{this._context=aa;this._hovercardScheduled=true;this._fetch();this._showPlaceholder();}this.inform('showhovercard');},hideHovercard:function(){this._hovercardScheduled=false;this._hidePlaceholder();if(this._hovercard){this._hovercard.hide();}else this._onHovercardHide();},_showPlaceholder:function(){if(!this._placeholder){this._placeholder=x();this._placeholder.setContext(this._context||this._target).setPosition('below').setAlignment('center').show();this._placeholderListener=this._placeholder.subscribe('hide',this._onPlaceholderHide.bind(this));}},_hidePlaceholder:function(){this._placeholder&&this._placeholder.hide();},_onPlaceholderHide:function(){if(this._placeholder){this._hovercardScheduled=false;this._placeholderListener&&this._placeholder.unsubscribe(this._placeholderListener);this._placeholder=null;!this._hovercardShown&&this._removeTriggerClasses();}},_onHovercardShow:function(){var z=this._hovercard.getContent(),aa=n.scry(z,'textarea.mentionsTextarea')[0];aa&&aa.focus();},_onHovercardHide:function(){this._hovercardShown=false;this._removeTriggerClasses();this.inform('hidehovercard');},_onHovercardDestroy:function(){this._hovercard=null;},_removeTriggerClasses:function(){m.removeClass(this._target,this._shownClass);m.removeClass(this._target,this._triggerClass);}});e.exports=y;});
__d("OGAggregationPeek",["Event","Animation","CSS","DOM","Style","Vector","copyProperties","csx","cx"],function(a,b,c,d,e,f){var g=b('Event'),h=b('Animation'),i=b('CSS'),j=b('DOM'),k=b('Style'),l=b('Vector'),m=b('copyProperties'),n=b('csx'),o=b('cx');function p(q){this._root=q;this._wrap=j.find(this._root,"._4dy");this._content=j.find(this._wrap,"._4dz");this._listener=g.listen(q,'click',this._expand.bind(this));}m(p.prototype,{_expand:function(){var q=l.getElementDimensions(this._wrap).y,r=l.getElementDimensions(this._content).y;new h(this._wrap).from('height',q).to('height',r).duration(200).ondone(k.set.curry(this._wrap,'height','')).go();i.removeClass(this._root,"_4dx");this._listener.remove();this._listener=null;}});e.exports=p;});
__d("PhotoCurationControl",["Event","Parent","Toggler"],function(a,b,c,d,e,f){var g=b('Event'),h=b('Parent'),i=b('Toggler'),j={init:function(k){var l=h.byClass(k,'fbPhotoStarGridElement');g.listen(l,'mouseleave',function(){i.hide();});}};e.exports=j;});
__d("PhotoInlineActions",["Event","Arbiter","AsyncRequest","CSS","Nectar","Parent","copyProperties","cx"],function(a,b,c,d,e,f){var g=b('Event'),h=b('Arbiter'),i=b('AsyncRequest'),j=b('CSS'),k=b('Nectar'),l=b('Parent'),m=b('copyProperties'),n=b('cx'),o={init:function(p,q,r,s){h.subscribe(['UFI/CommentAddedActive','UFI/CommentDeletedActive','UFI/LikeActive'],function(t,u){if(parseInt(p.getAttribute('data-fbid'),10)!==u)return;if(t==='UFI/LikeActive')j.toggleClass(p,"_53a");new i().setURI('/ajax/photos/photo/refresh.php').setData({fbid:p.getAttribute('data-fbid')}).setRelativeTo(p).send();});g.listen(p,'click',function(event){var t=event.getTarget();if(!l.byClass(t,"_53b"))return;event.prevent();j.toggleClass(p,"_53a");var u={};k.addModuleData(u,p);new i().setURI('/ajax/photos/photo/like.php').setData(m({fbid:p.getAttribute('data-fbid'),relatedid:q,hovercardendpoint:r,includecommentlink:s},u)).setRelativeTo(p).setErrorHandler(function(){j.toggleClass(p,"_53a");}).send();});}};e.exports=o;});
__d("StarGridLayout",["copyProperties","removeFromArray","Vector"],function(a,b,c,d,e,f){var g=b('copyProperties'),h=b('removeFromArray'),i=b('Vector');function j(k){g(this,k);}g(j.prototype,{getShortestColumn:function(k){return k[0]<=k[1]?0:1;},getDangling:function(k){var l=k.filter(function(m){return !this.isStarred(m);}.bind(this));if(l.length%2===1)return l[l.length-1];return null;},mangleOrder:function(k){if(k.length<3||!(this.isFixed(k[0])&&this.isStarred(k[1])))return k;var l=this.nextNonStarred(k,2);if(!l)return k;var m=k.concat();h(m,l);m.splice(1,0,l);return m;},layout:function(k){var l=[0,0],m=0,n=this.getDangling(k),o=[];k=this.mangleOrder(k);for(var p=0;p<k.length;++p){var q=this.getShortestColumn(l),r=k[p];if(this.isStarred(r)){this.renderStarred(this._grid,l,q,r);l[q]+=2;m=Math.max(m,(q*2)+2);}else{o.push(r);if(o.length===2||r===n){this.renderNonStarred(this._grid,l,q,o);m=Math.max(m,(q*2)+o.length);o=[];l[q]+=1;}}}return new i(m,Math.max.apply(null,l));},inNonStarredBlock:function(k,l,m,n){return l===m[n]&&Math.floor(k/2)===n;},inStarredBlock:function(k,l,m,n){return (l===m[n]||l===m[n]+1)&&Math.floor(k/2)===n;},nextNonStarred:function(k,l){for(;l<k.length;++l)if(!this.isStarred(k[l]))return k[l];return null;},layoutReorder:function(k,l,m,n){k=k.concat();m=Math.max(0,Math.min(3,m));n=Math.max(0,n);h(k,l);k.push(l);var o=[0,0],p=this.getDangling(k),q=false,r=[];for(var s=0;s<k.length;++s){var t=this.getShortestColumn(o),u=k[s];if(this.isStarred(u)){if(u===l)q=true;if(!q&&this.isStarred(l)&&this.inStarredBlock(m,n,o,t)&&this.inNonStarredBlock(m,n,o,t)){h(k,l);this.renderStarred(this._grid,o,t,l);o[t]+=2;t=this.getShortestColumn(o);q=true;}if(!q&&!this.isStarred(l)&&this.inStarredBlock(m,n,o,t)&&this.inNonStarredBlock(m,n,o,t)){h(k,l);if(r.length===1){r.splice(m%2,0,l);}else{var v=this.nextNonStarred(k,s);if(v){h(k,v);r.push(v);r.splice(m%2,0,l);}else r.push(l);}this.renderNonStarred(this._grid,o,t,r);r=[];o[t]+=1;p=this.getDangling(k.slice(s+1));t=this.getShortestColumn(o);q=true;}if(!q&&this.inStarredBlock(m,n,o,t)&&!this.inNonStarredBlock(m,n,o,t)){h(k,l);var v=this.nextNonStarred(k,s);k.push(l);if(v){h(k,v);k.splice(s,0,v);s--;continue;}n-=1;s--;continue;}this.renderStarred(this._grid,o,t,u);o[t]+=2;}else{r.push(u);if(r.length===2||u===p){if(!q&&!this.isStarred(l)&&this.inNonStarredBlock(m,n,o,t)){h(r,l);h(k,l);r.splice(m%2,0,l);if(r.length===3){h(k,r[2]);k.splice(s,0,r[2]);s=k.indexOf(r[2])-1;r.pop();}p=this.getDangling(k.slice(s+1));q=true;}if(!q&&this.isStarred(l)&&this.inNonStarredBlock(m,n,o,t)){h(k,l);this.renderStarred(this._grid,o,t,l);o[t]+=2;t=this.getShortestColumn(o);q=true;}this.renderNonStarred(this._grid,o,t,r);r=[];o[t]+=1;}}}},getStoringLayout:function(k){return new j({grid:this._grid,isStarred:this.isStarred,isFixed:this.isFixed,renderStarred:function(l,m,n,o){k.push(o);},renderNonStarred:function(l,m,n,o){k.push(o[0]);if(o.length>1)k.push(o[1]);}});},reorder:function(k,l,m,n){var o=[];this.getStoringLayout(o).layoutReorder(k,l,m,n);return o;},canonicalize:function(k){var l=[];this.getStoringLayout(l).layout(k);return l;}});e.exports=j;});
__d("StarGrid",["Event","Arbiter","AsyncRequest","CSS","DataStore","DOM","ImageUtils","Locale","Parent","Style","StarGridLayout","copyProperties","removeFromArray"],function(a,b,c,d,e,f){var g=b('Event'),h=b('Arbiter'),i=b('AsyncRequest'),j=b('CSS'),k=b('DataStore'),l=b('DOM'),m=b('ImageUtils'),n=b('Locale'),o=b('Parent'),p=b('Style'),q=b('StarGridLayout'),r=b('copyProperties'),s=b('removeFromArray'),t={MARGIN:5,isStarred:function(u){return j.hasClass(u,'fbPhotoStarGridStarred');},isFixed:function(u){return j.hasClass(u,'fbPhotoStarGridFixed');},setPosition:function(u,v,w){var x=n.isRTL()?'margin-right':'margin-left';p.set(u,'position','absolute');p.set(u,'margin-top',v+'px');p.set(u,x,w+'px');},renderNonStarred:function(u,v,w,x){for(var y=0;y<x.length;++y){var z=v[w]*t.getSize(u),aa=(w*2+y)*t.getSize(u);t.setPosition(x[y],z,aa);}},renderStarred:function(u,v,w,x){var y=v[w]*t.getSize(u),z=w*2*t.getSize(u);t.setPosition(x,y,z);},mergeWithPreviousGrid:function(u){var v=u.previousSibling;if(v&&j.hasClass(v,'fbStarGrid')){j.addClass(v,'fbStarGridAppendedTo');while(u.firstChild)v.appendChild(u.firstChild);l.remove(u);u=v;}return u;},removePhoto:function(u){var v=l.scry(document.body,'.fbPhotoStarGridElement[data-fbid="'+u+'"]')[0],w=o.byClass(v,'fbStarGrid'),x=t.getElements(w);s(x.remove,v);l.remove(v);t.layoutGrid(w,x);h.inform('StarGrid/UPDATE',w);},layoutGrid:function(u,v){var w=new q({_grid:u,isStarred:t.isStarred,isFixed:t.isFixed,renderNonStarred:t.renderNonStarred,renderStarred:t.renderStarred});t.setElements(u,v);var x=w.layout(v);p.set(u,'width',(x.x*t.getSize(u))+'px');p.set(u,'height',(x.y*t.getSize(u))+'px');},mergeAndLayoutGrid:function(u,v){var w=l.scry(u,'.fbPhotoStarGridElement'),x=t.mergeWithPreviousGrid(u),y=w;if(u!==x)y=t.getElements(x).concat(w);t.setElements(u,y);k.set(u,'size',v);t.layoutGrid(x,y);h.inform('StarGrid/UPDATE',u);},getSize:function(u){return k.get(u,'size');},updateBackground:function(u,v){var w;function x(){p.set(u,'backgroundImage','url('+v+')');window.clearTimeout(w);}var y=new Image();y.onload=x;y.src=v;function z(){if(m.hasLoaded(y)){x();}else z.defer(100);}w=z.defer();},setStarred:function(u,v,w,x){var y=o.byClass(v,'fbPhotoStarGridElement');j.conditionClass(y,'fbPhotoStarGridStarred',x);j.conditionClass(y,'fbPhotoStarGridNonStarred',!x);var z=l.scry(y,'.uiMediaThumb i')[0]||l.scry(y,'.uiVideoLink i')[0],aa=y.getAttribute(x?'data-starred-src':'data-non-starred-src');this.updateBackground(z,aa);var ba=t.getSize(u)*(x?2:1)-t.MARGIN;p.set(z,'width',ba+'px');p.set(z,'height',ba+'px');var u=o.byClass(y,'fbStarGrid');t.layoutGrid(u,t.getElements(u));h.inform('StarGrid/UPDATE',u);},addClickListener:function(u){g.listen(u,'click',function(event){var v=o.byClass(event.target||event.srcElement,'fbPhotoStarButton');if(!v)return;var w=o.byClass(v,'fbPhotoStarGridElement'),x=o.byClass(w,'fbStarGrid'),y=w.getAttribute('data-fbid'),z=t.isStarred(w);t.setStarred(x,v,y,!z);new i().setMethod('POST').setURI('/ajax/photos/photo/star.php').setData({fbid:y,value:!z}).setErrorHandler(function(){t.setStarred(x,v,y,z);}).send();return false;});h.subscribe('BulkTagger.SHOW',function(){j.addClass(u,'uiMediaThumbNoOverlay');});h.subscribe('BulkTagger.HIDE',function(){j.removeClass(u,'uiMediaThumbNoOverlay');});}};r(t,{getElements:function(u){var v=k.get(u,'elements');if(!v){v=l.scry(u,'div.fbPhotoStarGridElement');t.setElements(u,v);}return v;},setElements:function(u,v){k.set(u,'elements',v);}});e.exports=t;});