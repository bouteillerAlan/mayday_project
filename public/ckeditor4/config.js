/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {

	config.extraPlugins = 'pbckcode','autogrow','tables';

	// The toolbar groups arrangement, optimized for a single toolbar row.
	config.toolbarGroups = [
		{ name: 'pbckcode' },
		{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
		{ name: 'forms' },
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
		{ name: 'links' },
		{ name: 'insert' },
		{ name: 'styles' },
		{ name: 'colors' },
		{ name: 'tools' },
		{ name: 'others' },
		{ name: 'others', groups: [ 'others' ] }
	];


	config.language = 'fr';
	config.autoGrow_onStartup = true;

	// Dialog windows are also simplified.
	config.removeDialogTabs = 'link:advanced';

	config.allowedContent = 'pre[*]{*}(*)';

	// PBCKCODE CUSTOMIZATION
	config.pbckcode = {

		// The syntax highlighter you will use in the output view
		//'HIGHLIGHT' // http://highlightjs.org/
		//'PRETTIFY' // https://code.google.com/p/google-code-prettify/
		//'PRISM' // http://prismjs.com/
		//'SYNTAX_HIGHLIGHTER' // http://alexgorbatchev.com/SyntaxHighlighter/
		highlighter: 'PRISM',

		// An array of the available modes for you plugin.
		// The key corresponds to the string shown in the select tag.
		// The value correspond to the loaded file for ACE Editor.
		modes: [['C/C++'    , 'c_cpp'],
			['C9Search'     , 'c9search'],
			['Clojure'      , 'clojure'],
			['CoffeeScript' , 'coffee'],
			['ColdFusion'   , 'coldfusion'],
			['C#'           , 'csharp'],
			['CSS'          , 'css'],
			['Diff'         , 'diff'],
			['Glsl'         , 'glsl'],
			['Go'           , 'golang'],
			['Groovy'       , 'groovy'],
			['haXe'         , 'haxe'],
			['HTML'         , 'html'],
			['Jade'         , 'jade'],
			['Java'         , 'java'],
			['JavaScript'   , 'javascript'],
			['JSON'         , 'json'],
			['JSP'          , 'jsp'],
			['JSX'          , 'jsx'],
			['LaTeX'        , 'latex'],
			['LESS'         , 'less'],
			['Liquid'       , 'liquid'],
			['Lua'          , 'lua'],
			['LuaPage'      , 'luapage'],
			['Markdown'     , 'markdown'],
			['OCaml'        , 'ocaml'],
			['Perl'         , 'perl'],
			['pgSQL'        , 'pgsql'],
			['PHP'          , 'php'],
			['Powershell'   , 'powershel1'],
			['Python'       , 'python'],
			['R'            , 'ruby'],
			['OpenSCAD'     , 'scad'],
			['Scala'        , 'scala'],
			['SCSS/Sass'    , 'scss'],
			['SH'           , 'sh'],
			['SQL'          , 'sql'],
			['SVG'          , 'svg'],
			['Tcl'          , 'tcl'],
			['Text'         , 'text'],
			['Textile'      , 'textile'],
			['XML'          , 'xml'],
			['XQuery'       , 'xq'],
			['YAML'         , 'yaml']],

		// The theme of the ACE Editor of the plugin.
		theme: 'monokai',

		// Tab indentation (in spaces)
		tab_size: '4'
	};


};
