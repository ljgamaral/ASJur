/*!
 Summernote
 Version: 2.1.1
 (c) 2024 Wappler.io
 @build 2024-12-12 13:00:12
 */
dmx.Component("summernote",{initialData:{disabled:!1,value:""},attributes:{value:{type:String,default:""},disabled:{type:Boolean,default:!1},config:{type:Object,default:{}},height:{type:Number,default:null},minHeight:{type:Number,default:null},maxHeight:{type:Number,default:null},autofocus:{type:Boolean,default:!1},lang:{type:String,default:"en-US"},airMode:{type:Boolean,default:!1},toolbar:{type:Array,default:null},toolbarImage:{type:Array,default:null},toolbarLink:{type:Array,default:null},toolbarTable:{type:Array,default:null},toolbarAir:{type:Array,default:null},blockquoteBreakingLevel:{type:Number,default:2},styleTags:{type:Array,default:null},fontNames:{type:Array,default:null},fontNamesIgnoreCheck:{type:Array,default:null},fontSizeUnits:{type:Array,default:null},lineHeights:{type:Array,default:null},placeholder:{type:String,default:null},dialogsInBody:{type:Boolean,default:!1},dialogsFade:{type:Boolean,default:!1},disableDrop:{type:Boolean,default:!1},disableShortcuts:{type:Boolean,default:!1},disableTab:{type:Boolean,default:!1},disableSpellcheck:{type:Boolean,default:!1},disableGrammar:{type:Boolean,default:!1},codeviewFilter:{type:Boolean,default:!0},codeviewIframeFilter:{type:Boolean,default:!0},plugins:{type:Object,default:{}},buttons:{type:Object,default:{}}},methods:{disable(){this._disable()},empty(){this._empty()},enable(){this._enable()},insertText(t){this._innerText(t)},pasteHTML(t){this._pasteHTML(t)},redo(){this._redo()},reset(){this._reset()},setValue(t){this._setValue(t)},undo(){this._undo()},status(t){this._editor.layoutInfo.editor.find(".note-status-output").html(t)},info(t){this._editor.layoutInfo.editor.find(".note-status-output").html('<div class="alert alert-info">'+t+"</div>")},success(t){this._editor.layoutInfo.editor.find(".note-status-output").html('<div class="alert alert-success">'+t+"</div>")},warning(t){this._editor.layoutInfo.editor.find(".note-status-output").html('<div class="alert alert-warning">'+t+"</div>")},danger(t){this._editor.layoutInfo.editor.find(".note-status-output").html('<div class="alert alert-danger">'+t+"</div>")},invoke(t,e){this._editor.invoke(t,e)}},events:{blur:Event,change:Event,changed:Event,enter:Event,focus:Event,init:Event,input:Event,updated:Event,buttonclick:Event,mediadelete:Event},init(t){this._initEditor=dmx.debounce(this._initEditor.bind(this)),this._blurHandler=this._blurHandler.bind(this),this._changeHandler=this._changeHandler.bind(this),this._enterHandler=this._enterHandler.bind(this),this._focusHandler=this._focusHandler.bind(this),this._initHandler=this._initHandler.bind(this),this._mediaDeleteHandler=this._mediaDeleteHandler.bind(this),this._config={popover:$.summernote.options.popover},this._callbacks={callbacks:{onBlur:this._blurHandler,onChange:this._changeHandler,onEnter:this._enterHandler,onFocus:this._focusHandler,onInit:this._initHandler,onMediaDelete:this._mediaDeleteHandler}}},render(t){this.props.value&&("TEXTAREA"==t.tagName?t.value=this.props.value:t.innerHTML=this.props.value),this._initEditor()},performUpdate(t){this._editor&&(t.has("value")&&this._setValue(this.props.value),t.has("disabled")&&(this._editor.invoke(this.props.disabled?"disable":"enable"),t.delete("disabled"))),t.size&&this._initEditor()},destroy(){this._editor.destroy()},_initEditor(){this._editor&&this._editor.destroy();const t=dmx.clone(this._config);t.height=this.props.height,t.minHeight=this.props.minHeight,t.maxHeight=this.props.maxHeight,t.focus=this.props.autofocus,t.lang=this.props.lang,t.airMode=this.props.airMode,t.placeholder=this.props.placeholder,t.dialogsInBody=this.props.dialogsInBody,t.dialogsFade=this.props.dialogsFade,t.disableDragAndDrop=this.props.disableDrop,t.shortcuts=!this.props.disableShortcuts,t.tabDisable=this.props.disableTab,t.spellCheck=!this.props.disableSpellcheck,t.disableGrammar=this.props.disableGrammar,t.blockquoteBreakingLevel=this.props.blockquoteBreakingLevel,t.codeviewFilter=this.props.codeviewFilter,t.codeviewIframeFilter=this.props.codeviewIframeFilter,Array.isArray(this.props.toolbar)&&(t.toolbar=this.props.toolbar.filter((function(t){return t.length}))),Array.isArray(this.props.toolbarImage)&&(t.popover=t.popover||{},t.popover.image=this.props.toolbarImage.filter((function(t){return t.length}))),Array.isArray(this.props.toolbarLink)&&(t.popover=t.popover||{},t.popover.link=this.props.toolbarLink.filter((function(t){return t.length}))),Array.isArray(this.props.toolbarTable)&&(t.popover=t.popover||{},t.popover.table=this.props.toolbarTable.filter((function(t){return t.length}))),Array.isArray(this.props.toolbarAir)&&(t.popover=t.popover||{},t.popover.air=this.props.toolbarAir.filter((function(t){return t.length}))),Array.isArray(this.props.styleTags)&&(t.styleTags=this.props.styleTags),Array.isArray(this.props.fontNames)&&(t.fontNames=this.props.fontNames),Array.isArray(this.props.fontNamesIgnoreCheck)&&(t.fontNamesIgnoreCheck=this.props.fontNamesIgnoreCheck),Array.isArray(this.props.fontSizeUnits)&&(t.fontSizeUnits=this.props.fontSizeUnits),Array.isArray(this.props.lineHeights)&&(t.lineHeights=this.props.lineHeights),$.summernote.lang[t.lang]||console.error(`Summernote "${t.lang}" lang file must be included.`),$.extend(!0,t,this.props.config,this.props.plugins,{buttons:this.props.buttons},this._callbacks),$(this.$node).summernote(t),this._editor=$(this.$node).data("summernote"),this._editor.layoutInfo.statusbar.find(".note-status-output").remove(),this.props.disabled&&this._disable()},_enable(){this._editor.enable(),this.set("disabled",!1)},_disable(){this._editor.disable(),this.set("disabled",!0)},_empty(){this._editor.invoke("empty")},_innerText(t){this._editor.invoke("insertText",t)},_pasteHTML(t){this._editor.invoke("pasteHTML",t)},_undo(){this._editor.invoke("undo")},_redo(){this._editor.invoke("redo")},_reset(){this._editor.reset()},_setValue(t){this._editor.reset(),t&&this._editor.code(t),this.set("value",t),dmx.nextTick((()=>this.dispatchEvent("updated")))},_initHandler(){this.dispatchEvent("init")},_focusHandler(){this._code=this._editor.code(),this.dispatchEvent("focus")},_blurHandler(){this._code!==this._editor.code()&&(this.dispatchEvent("change"),dmx.nextTick((()=>this.dispatchEvent("changed")))),this.dispatchEvent("blur")},_enterHandler(){this.dispatchEvent("enter")},_changeHandler(){const t=this._editor.invoke("isEmpty")?"":this._editor.code();this.data.value!==t&&(this.set("value",t),dmx.nextTick((()=>this.dispatchEvent("updated")))),this.dispatchEvent("input")},_mediaDeleteHandler(t){const e=$(t[0]).attr("src");this.dispatchEvent("mediadelete",null,{src:e})},_toCamelCase:t=>t.replace(/-(\w)/g,(function(t,e){return e.toUpperCase()})),$parseAttributes(t){dmx.BaseComponent.prototype.$parseAttributes.call(this,t),dmx.dom.getAttributes(t).forEach((t=>{"plugin"==t.name&&this.$watch(t.value,(e=>{const i=this._toCamelCase(t.argument);this.props.plugins={...this.props.plugins,[i]:$.extend({},$.summernote.options[i],e)}})),"button"==t.name&&this.$watch(t.value,(e=>{if(e&&e.icon){const i=this._toCamelCase(t.argument);this.props.buttons={...this.props.buttons,[i]:t=>$.summernote.ui.button({contents:`<i class="${e.icon}"/>`,tooltip:e.tooltip||"",click:()=>{"string"==typeof e.click&&dmx.parse(e.click,this),this.dispatchEvent("buttonclick",null,{editor:this.name,button:i})}}).render()}}}))}))}});
//# sourceMappingURL=dmxSummernote.js.map