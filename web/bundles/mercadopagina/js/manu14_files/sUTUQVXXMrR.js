/*1364788835,178142495*/

if (self.CavalryLogger) { CavalryLogger.start_js(["1WFZZ"]); }

__d("OGCollectionBatchAddCuration",["AsyncRequest","OGCollectionAddCuration"],function(a,b,c,d,e,f){var g=b('AsyncRequest'),h=b('OGCollectionAddCuration'),i={loadControls:function(j,k){if(!j||!Array.isArray(j))return;new g('/ajax/collections/batch_add_curation').setData({collectionitemtokens:j.join(),surface:k}).send();},attachControls:function(j,k){for(var l=0;l<j.length;l++)h.insertControl(j[l],k[l]);}};e.exports=i;});