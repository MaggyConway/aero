{"version":3,"sources":["form.js"],"names":["BX","namespace","UI","Form","this","_id","_settings","_elementNode","prototype","initialize","id","setting","type","isNotEmptyString","isPlainObject","prop","getElementNode","doInitialize","getId","submit","options","eventArgs","cancel","onCustomEvent","doSubmit","AjaxForm","superclass","constructor","apply","_config","extend","getObject","getString","getUrl","setUrl","url","addUrlParams","params","Object","keys","length","util","add_url_param","ajax","submitAjax","create","settings","self","ComponentAjax","_className","_actionName","_signedParameters","_callbacks","runComponentAction","mode","signedParameters","data","prepareForm","then","response","callback","getFunction","window","bind","catch","messages","errors","i","push","ERRORS"],"mappings":"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","file":"form.map.js"}