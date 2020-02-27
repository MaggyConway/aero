{"version":3,"sources":["top_panel.js"],"names":["BX","namespace","removeClass","Landing","Utils","addClass","onCustomEvent","bind","makeFilterablePopupMenu","makeSelectablePopupMenu","style","encodeDataValue","Menu","UI","Tool","Panel","Top","id","data","BasePanel","apply","this","arguments","layout","top","document","querySelector","siteButton","pageButton","undoButton","redoButton","desktopButton","tabletButton","mobileButton","iframeWrapper","iframe","lastActive","loader","onDesktopSizeChange","onTabletSizeChange","onMobileSizeChange","onIframeClick","onSiteButtonClick","onPageButtonClick","onUndo","onRedo","onKeyDown","adjustHistoryButtonsState","contentDocument","window","sitesCount","parseInt","Main","getInstance","options","sites_count","pagesCount","pages_count","History","instance","prototype","constructor","__proto__","superclass","event","key","keyCode","which","navigator","userAgent","match","ctrlKey","metaKey","shiftKey","preventDefault","canUndo","hasAttribute","getLoader","show","undo","then","hide","canRedo","redo","Loader","size","offset","left","stroke-width","margin-top","history","classList","remove","removeAttribute","add","disableHistory","setAttribute","enableHistory","disableDevices","enableDevices","DOM","write","width","dataset","postfix","enableControls","disableControls","siteMenu","bindElement","events","onPopupClose","blur","menuShowDelay","offsetTop","popupWindow","contentContainer","minHeight","minWidth","siteId","site_id","landingId","filter","=TYPE","params","type","Backend","getSites","sites","Promise","resolve","setTimeout","forEach","site","addMenuItem","ID","text","TITLE","items","editMask","sef_url","site_edit","showMask","site_show","push","Loc","getMessage","href","replace","pageMenu","getLandings","landings","landing","FOLDER_ID","IS_AREA","landing_edit","viewMask","landing_view","FOLDER","siteShowMask","addQueryParams","SITE_ID","folderId","requestAnimationFrame","close"],"mappings":"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","file":"top_panel.map.js"}