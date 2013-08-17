/*1364507035,173213215*/

if (self.CavalryLogger) { CavalryLogger.start_js(["aEnvI"]); }

__d("ComposerXStubStatusAttachment",["Class","ComposerXAttachment","ComposerXDragDrop","CSS","Parent","copyProperties","cx"],function(a,b,c,d,e,f){var g=b('Class'),h=b('ComposerXAttachment'),i=b('ComposerXDragDrop'),j=b('CSS'),k=b('Parent'),l=b('copyProperties'),m=b('cx');function n(o,p){this.parent.construct(this);this._root=o;this._config=p;}g.extend(n,h);l(n.prototype,{_dragdrop:null,attachmentClassName:"_4j",getRoot:function(){return this._root;},initWithComponents:function(){if(this._config.plus_version){this._dragdrop=new i(this._root,this._composerID,this._config.targetID);this._dragdrop.enableURLDropping();}},reset:function(){var o=k.byClass(this._root,"child_was_focused");if(o)j.removeClass(o,"child_was_focused");this.getComponent('maininput').instance.setPlaceholder(this._config.mentionsPlaceholder);if(this._dragdrop){this._dragdrop.deactivate();this._dragdrop=null;}},canSwitchAway:function(){return !k.byClass(this._root,'async_saving');}});e.exports=n;});
__d("EntStreamGroupMall",["DOM","$"],function(a,b,c,d,e,f){var g=b('DOM'),h=b('$'),i={replacePager:function(j){g.setContent(h('pagelet_group_pager'),j);},replaceFilesPager:function(j,k){g.setContent(h('group_files_pager_'+k),j);}};e.exports=i;});
__d("GroupMall",["Animation","Arbiter","DOM","LiveTimer","NavigationMessage","Run","Vector","$","copyProperties","ge"],function(a,b,c,d,e,f){var g=b('Animation'),h=b('Arbiter'),i=b('DOM'),j=b('LiveTimer'),k=b('NavigationMessage'),l=b('Run'),m=b('Vector'),n=b('$'),o=b('copyProperties'),p=b('ge'),q={};o(q,{init:function(r,s){this._mallNode=n('group_mall_'+r);this._composerPublishToken=h.subscribe('composer/publish',function(event,t){if(t.composer_id===s&&t.streamStory&&!p(t.streamStory.id))this._addPostToUI(t.streamStory);}.bind(this));l.onLeave(this._onleave.bind(this));this._navigationBeginToken=h.subscribe(k.NAVIGATION_BEGIN,this._onleave.bind(this));},_onleave:function(){this._navigationBeginToken.unsubscribe();this._composerPublishToken.unsubscribe();},_addPostToUI:function(r){var s=m.getElementDimensions(this._mallNode).y;i.prependContent(this._mallNode,r);var t=this._mallNode.firstChild;j.startLoop(0);new g(t).from('opacity',0).to('opacity',1).duration(300).go();}});e.exports=q;});
__d("GroupsMemberCountUpdater",["Arbiter","DOM"],function(a,b,c,d,e,f){var g=b('Arbiter'),h=b('DOM');function i(){}i.subscribeMemberCount=function(j){g.subscribe('GroupsMemberCount/changeText',function(k,l){h.setContent(j,l);});};i.subscribeNewMemberCount=function(j){g.subscribe('GroupsMemberCount/changeNewMembersText',function(k,l){h.setContent(j,l);});};e.exports=i;});
__d("GroupsAddTypeaheadView",["Arbiter","Class","ContextualTypeaheadView","copyProperties"],function(a,b,c,d,e,f){var g=b('Arbiter'),h=b('Class'),i=b('ContextualTypeaheadView'),j=b('copyProperties');function k(l,m){this.parent.construct(this,l,m);}h.extend(k,i);j(k.prototype,{select:function(l){var m=this.results[this.index];g.inform('GroupsMemberSuggestion/remove',m.uid);if(m.is_member){this.reset();}else this.parent.select(l);}});e.exports=k;});
__d("GroupsAddMemberTypeahead",["Arbiter","DOM","Typeahead","copyProperties","ge"],function(a,b,c,d,e,f){var g=b('Arbiter'),h=b('DOM'),i=b('Typeahead'),j=b('copyProperties'),k=b('ge');function l(m,n){if(m&&n)this.init(m,n);}j(l.prototype,{init:function(m,n){m.subscribe('select',function(o,p){g.inform('GroupsAddMemberTypeahead/add',{gid:n,uid:p.selected.uid,name:p.selected.text,photo:p.selected.photo});var q=m.getData().getExclusions();q.push(p.selected.uid);m.getData().setExclusions(q);});g.subscribe('GroupsAddMemberTypeahead/updateGroupToken',this.resetTypeaheadCaches.bind(this));},resetTypeaheadCaches:function(m,n){var o=h.scry(k('pagelet_group_mall'),'.uiTypeahead');for(var p=0;p<o.length;p++){var q=i.getInstance(o[p]);if(q){var r=q.getData();r.updateToken(n.token);q.getCore().subscribe('focus',r.bootstrap.bind(r));}}}});e.exports=l;});
__d("legacy:GroupsAddMemberTypeahead",["GroupsAddMemberTypeahead"],function(a,b,c,d){a.GroupsAddMemberTypeahead=b('GroupsAddMemberTypeahead');},3);
__d("highlight",["Animation","Style"],function(a,b,c,d,e,f){var g=b('Animation'),h=b('Style');function i(j,k,l){new g(j).from('background','#fff9d7').to('background',l||'#fff').ease(g.ease.both).duration(2000).ondone(function(){h.set(j,'background','');k&&k();}).go();}i.highlight=i;e.exports=i;});
__d("ScrollHighlight",["DOMScroll","highlight"],function(a,b,c,d,e,f){var g=b('DOMScroll'),h=b('highlight'),i={actOn:function(j,k){g.scrollTo(j);h(j,null,k);}};e.exports=i;});
__d("CovercardArrow",["ContextualDialogArrow","CSS","DOMQuery","Locale","Style","copyProperties","csx","cx"],function(a,b,c,d,e,f){var g=b('ContextualDialogArrow'),h=b('CSS'),i=b('DOMQuery'),j=b('Locale'),k=b('Style'),l=b('copyProperties'),m=b('csx'),n=b('cx'),o=-45,p=45,q=10;if(j.isRTL()){o=-o;p=-p;}function r(t){this._layer=t;}l(r.prototype,{enable:function(){this._layer.enableBehavior(g);var t=this._layer.getContentRoot();this._arrowWrapper=i.scry(t,"._7lh")[0];if(!this._arrowWrapper)return;this._arrowShadow=i.scry(this._arrowWrapper,"._7li")[0];if(!this._arrowShadow)return;var u=null;if(this._arrowWrapper.style.webkitMaskPosition!==undefined){u=this._renderArrowWithWebkitMask.bind(this);h.addClass(t,"_7ld");}else if(s(this._arrowWrapper)){u=this._renderArrowWithRotate.bind(this);h.addClass(t,"_7le");}if(!u)return;if(j.isRTL())h.addClass(t,"_7lf");this._subscription=this._layer.subscribe('reposition',function(v,w){var x=w.getPosition()=='below';h.conditionClass(t,"_7lg",x);x&&u(w);});},disable:function(){this._subscription&&this._subscription.unsubscribe();this._subscription=null;},_calculateArrowOffset:function(t){var u=g.getOffsetPercent(t),v=g.getOffset(t,u,this._layer),w=k.get(this._layer.getContentRoot(),'width');return parseInt(w,10)*(u/100)+v;},_renderArrowWithWebkitMask:function(t){var u=g.getOffsetSide(t),v=this._calculateArrowOffset(t);if(j.isRTL()){var w=k.get(this._layer.getContentRoot(),'width');v=parseInt(w,10)-v-g.OFFSET;u=u=='left'?'right':'left';}k.set(this._arrowWrapper,'webkitMaskPositionX',v+'px');k.set(this._arrowShadow,u,v+'px');},_renderArrowWithRotate:function(t){var u=i.scry(this._arrowWrapper,"._7lj")[0];if(!u)return;var v=s(this._arrowWrapper);if(!v)return;var w=this._calculateArrowOffset(t),x=q+w;if(j.isRTL())x=-x;this._arrowWrapper.style[v]='translate('+x+'px, -'+q+'px) '+'rotate('+p+'deg)';u.style[v]='rotate('+o+'deg) '+'translate('+(-x)+'px, 0px)';}});function s(t){if(!t)t=document.body;var u=['transform','WebkitTransform','msTransform','MozTransform','OTransform'],v;while(v=u.shift())if(t.style[v]!==undefined)return v;return null;}e.exports=r;});
__d("TypeaheadSubmitOnSelect",["copyProperties","Form"],function(a,b,c,d,e,f){var g=b('copyProperties'),h=b('Form');function i(j){this._typeahead=j;}g(i.prototype,{_subscription:null,enable:function(){this._subscription=this._typeahead.subscribe('select',function(){var j=this._typeahead.getCore().getElement().form;if(j)j.getAttribute('rel')=='async'?h.bootstrap(j):j.submit();}.bind(this));},disable:function(){this._typeahead.unsubscribe(this._subscription);this._subscription=null;}});e.exports=i;});
__d("legacy:SubmitOnSelectTypeaheadBehavior",["TypeaheadSubmitOnSelect"],function(a,b,c,d){var e=b('TypeaheadSubmitOnSelect');if(!a.TypeaheadBehaviors)a.TypeaheadBehaviors={};a.TypeaheadBehaviors.submitOnSelect=function(f){f.enableBehavior(e);};},3);