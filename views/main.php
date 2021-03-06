<!-- saved from url=(0013)about:internet -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Proyecto Libertad</title>
<link rel="icon" href="images/favicon.png">
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<link rel="stylesheet" type="text/css" href="CSS/estilos2.css">
<link rel="stylesheet" href="CSS/bootstrap.min.css">
<link href="http://vjs.zencdn.net/6.6.3/video-js.css" rel="stylesheet">
<script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script language="JavaScript" type="text/javascript">
<!--
//v1.7
// Flash Player Version Detection
// Detect Client Browser type
// Copyright 2005-2008 Adobe Systems Incorporated.  All rights reserved.
var isIE  = (navigator.appVersion.indexOf("MSIE") != -1) ? true : false;
var isWin = (navigator.appVersion.toLowerCase().indexOf("win") != -1) ? true : false;
var isOpera = (navigator.userAgent.indexOf("Opera") != -1) ? true : false;
function ControlVersion()
{
	var version;
	var axo;
	var e;
	// NOTE : new ActiveXObject(strFoo) throws an exception if strFoo isn't in the registry
	try {
		// version will be set for 7.X or greater players
		axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.7");
		version = axo.GetVariable("$version");
	} catch (e) {
	}
	if (!version)
	{
		try {
			// version will be set for 6.X players only
			axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.6");
			
			// installed player is some revision of 6.0
			// GetVariable("$version") crashes for versions 6.0.22 through 6.0.29,
			// so we have to be careful. 
			
			// default to the first public version
			version = "WIN 6,0,21,0";
			// throws if AllowScripAccess does not exist (introduced in 6.0r47)		
			axo.AllowScriptAccess = "always";
			// safe to call for 6.0r47 or greater
			version = axo.GetVariable("$version");
		} catch (e) {
		}
	}
	if (!version)
	{
		try {
			// version will be set for 4.X or 5.X player
			axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.3");
			version = axo.GetVariable("$version");
		} catch (e) {
		}
	}
	if (!version)
	{
		try {
			// version will be set for 3.X player
			axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.3");
			version = "WIN 3,0,18,0";
		} catch (e) {
		}
	}
	if (!version)
	{
		try {
			// version will be set for 2.X player
			axo = new ActiveXObject("ShockwaveFlash.ShockwaveFlash");
			version = "WIN 2,0,0,11";
		} catch (e) {
			version = -1;
		}
	}
	
	return version;
}
// JavaScript helper required to detect Flash Player PlugIn version information
function GetSwfVer(){
	// NS/Opera version >= 3 check for Flash plugin in plugin array
	var flashVer = -1;
	
	if (navigator.plugins != null && navigator.plugins.length > 0) {
		if (navigator.plugins["Shockwave Flash 2.0"] || navigator.plugins["Shockwave Flash"]) {
			var swVer2 = navigator.plugins["Shockwave Flash 2.0"] ? " 2.0" : "";
			var flashDescription = navigator.plugins["Shockwave Flash" + swVer2].description;
			var descArray = flashDescription.split(" ");
			var tempArrayMajor = descArray[2].split(".");			
			var versionMajor = tempArrayMajor[0];
			var versionMinor = tempArrayMajor[1];
			var versionRevision = descArray[3];
			if (versionRevision == "") {
				versionRevision = descArray[4];
			}
			if (versionRevision[0] == "d") {
				versionRevision = versionRevision.substring(1);
			} else if (versionRevision[0] == "r") {
				versionRevision = versionRevision.substring(1);
				if (versionRevision.indexOf("d") > 0) {
					versionRevision = versionRevision.substring(0, versionRevision.indexOf("d"));
				}
			}
			var flashVer = versionMajor + "." + versionMinor + "." + versionRevision;
		}
	}
	// MSN/WebTV 2.6 supports Flash 4
	else if (navigator.userAgent.toLowerCase().indexOf("webtv/2.6") != -1) flashVer = 4;
	// WebTV 2.5 supports Flash 3
	else if (navigator.userAgent.toLowerCase().indexOf("webtv/2.5") != -1) flashVer = 3;
	// older WebTV supports Flash 2
	else if (navigator.userAgent.toLowerCase().indexOf("webtv") != -1) flashVer = 2;
	else if ( isIE && isWin && !isOpera ) {
		flashVer = ControlVersion();
	}	
	return flashVer;
}
// When called with reqMajorVer, reqMinorVer, reqRevision returns true if that version or greater is available
function DetectFlashVer(reqMajorVer, reqMinorVer, reqRevision)
{
	versionStr = GetSwfVer();
	if (versionStr == -1 ) {
		return false;
	} else if (versionStr != 0) {
		if(isIE && isWin && !isOpera) {
			// Given "WIN 2,0,0,11"
			tempArray         = versionStr.split(" "); 	// ["WIN", "2,0,0,11"]
			tempString        = tempArray[1];			// "2,0,0,11"
			versionArray      = tempString.split(",");	// ['2', '0', '0', '11']
		} else {
			versionArray      = versionStr.split(".");
		}
		var versionMajor      = versionArray[0];
		var versionMinor      = versionArray[1];
		var versionRevision   = versionArray[2];
        	// is the major.revision >= requested major.revision AND the minor version >= requested minor
		if (versionMajor > parseFloat(reqMajorVer)) {
			return true;
		} else if (versionMajor == parseFloat(reqMajorVer)) {
			if (versionMinor > parseFloat(reqMinorVer))
				return true;
			else if (versionMinor == parseFloat(reqMinorVer)) {
				if (versionRevision >= parseFloat(reqRevision))
					return true;
			}
		}
		return false;
	}
}
function AC_AddExtension(src, ext)
{
  if (src.indexOf('?') != -1)
    return src.replace(/\?/, ext+'?'); 
  else
    return src + ext;
}
function AC_Generateobj(objAttrs, params, embedAttrs) 
{ 
  var str = '';
  if (isIE && isWin && !isOpera)
  {
    str += '<object ';
    for (var i in objAttrs)
    {
      str += i + '="' + objAttrs[i] + '" ';
    }
    str += '>';
    for (var i in params)
    {
      str += '<param name="' + i + '" value="' + params[i] + '" /> ';
    }
    str += '</object>';
  }
  else
  {
    str += '<embed ';
    for (var i in embedAttrs)
    {
      str += i + '="' + embedAttrs[i] + '" ';
    }
    str += '> </embed>';
  }
  document.write(str);
}
function AC_FL_RunContent(){
  var ret = 
    AC_GetArgs
    (  arguments, ".swf", "movie", "clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
     , "application/x-shockwave-flash"
    );
  AC_Generateobj(ret.objAttrs, ret.params, ret.embedAttrs);
}
function AC_SW_RunContent(){
  var ret = 
    AC_GetArgs
    (  arguments, ".dcr", "src", "clsid:166B1BCA-3F9C-11CF-8075-444553540000"
     , null
    );
  AC_Generateobj(ret.objAttrs, ret.params, ret.embedAttrs);
}
function AC_GetArgs(args, ext, srcParamName, classid, mimeType){
  var ret = new Object();
  ret.embedAttrs = new Object();
  ret.params = new Object();
  ret.objAttrs = new Object();
  for (var i=0; i < args.length; i=i+2){
    var currArg = args[i].toLowerCase();    
    switch (currArg){	
      case "classid":
        break;
      case "pluginspage":
        ret.embedAttrs[args[i]] = args[i+1];
        break;
      case "src":
      case "movie":	
        args[i+1] = AC_AddExtension(args[i+1], ext);
        ret.embedAttrs["src"] = args[i+1];
        ret.params[srcParamName] = args[i+1];
        break;
      case "onafterupdate":
      case "onbeforeupdate":
      case "onblur":
      case "oncellchange":
      case "onclick":
      case "ondblclick":
      case "ondrag":
      case "ondragend":
      case "ondragenter":
      case "ondragleave":
      case "ondragover":
      case "ondrop":
      case "onfinish":
      case "onfocus":
      case "onhelp":
      case "onmousedown":
      case "onmouseup":
      case "onmouseover":
      case "onmousemove":
      case "onmouseout":
      case "onkeypress":
      case "onkeydown":
      case "onkeyup":
      case "onload":
      case "onlosecapture":
      case "onpropertychange":
      case "onreadystatechange":
      case "onrowsdelete":
      case "onrowenter":
      case "onrowexit":
      case "onrowsinserted":
      case "onstart":
      case "onscroll":
      case "onbeforeeditfocus":
      case "onactivate":
      case "onbeforedeactivate":
      case "ondeactivate":
      case "type":
      case "codebase":
      case "id":
        ret.objAttrs[args[i]] = args[i+1];
        break;
      case "width":
      case "height":
      case "align":
      case "vspace": 
      case "hspace":
      case "class":
      case "title":
      case "accesskey":
      case "name":
      case "tabindex":
        ret.embedAttrs[args[i]] = ret.objAttrs[args[i]] = args[i+1];
        break;
      default:
        ret.embedAttrs[args[i]] = ret.params[args[i]] = args[i+1];
    }
  }
  ret.objAttrs["classid"] = classid;
  if (mimeType) ret.embedAttrs["type"] = mimeType;
  return ret;
}
// -->
</script>
<script language="JavaScript" type="text/javascript">
<!--
// -----------------------------------------------------------------------------
// Globals
// Major version of Flash required
var requiredMajorVersion = 10;
// Minor version of Flash required
var requiredMinorVersion = 0;
// Revision of Flash required
var requiredRevision = 2;
// -----------------------------------------------------------------------------
// -->
</script>
</head>



<body id="presenta">
<!--url's used in the movie-->
<!--text used in the movie-->

<section class="container-fluid">
	<article class="col-md-2"></article>
	<article class="col-md-8">
		<div id="co" class="row">
			<video id="my-video" class="video-js center-block videox" controls preload="auto" width="800" height="480"
  				poster="images/previa.jpg" data-setup="{}">
   				<source src="Media/FANB.mp4" type='video/mp4'>
    			<source src="MY_VIDEO.webm" type='video/webm'>
    			<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that
      			<a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
    			</p>
  			</video>
		</div>		
	</article>	
	<article class="col-md-2"></article>
</section>
 

<section class="container-fluid sepvide">
	<div class="row">
		<article class="prese">
			<script language="JavaScript" type="text/javascript">
			<!--
			var hasRightVersion = DetectFlashVer(requiredMajorVersion, requiredMinorVersion, requiredRevision);
			if(hasRightVersion) {  // if we've detected an acceptable version
			// embed the flash movie
			AC_FL_RunContent(
				'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,2,0',
				'width', '800',
				'height', '600',
				'src', 'presentacion FANB',
				'quality', 'high',
				'pluginspage', 'http://www.adobe.com/go/getflashplayer',
				'align', 'middle',
				'play', 'false',
				'loop', 'false',
		     	'scale', 'noscale',
				'wmode', 'window',
				'devicefont', 'false',
				'id', 'presentacion FANB',
				'bgcolor', '#999999',
				'name', 'presentacion FANB',
				'menu', 'true',
				'allowFullScreen', 'true',
				'allowScriptAccess','sameDomain',
				'movie', 'presentacion FANB',
				'salign', ''
				); //end AC code
			} else {  // flash is too old or we can't detect the plugin
			var alternateContent = '<div class="container-fluid">	<div class="row"><article class="col-xs-12 col-sm-12 col-md-12">					<section class="carrusel">			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">			  <!-- Indicators -->			  		  <!-- Wrapper for slides -->			  <div class="carousel-inner" role="listbox">			    <div class="item active">			      <img class="img-responsive" src="images/1.jpg">			      <div class="carousel-caption"></div>			    </div>			    <div class="item ">			      <img  class="img-responsive" src="images/2.jpg">			      <div class="carousel-caption"></div>			    </div>			    <div class="item">			      <img class="img-responsive" src="images/3.jpg">			      <div class="carousel-caption"></div>			    </div>			    <div class="item">			      <img class="img-responsive" src="images/4.jpg">			      <div class="carousel-caption"></div>			    </div>			    <div class="item">			      <img class="img-responsive" src="images/5.jpg">			      <div class="carousel-caption"></div>			    </div>			  </div>			  <!-- Controls -->			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">			    <span id="pe1" class="glyphicon glyphicon-chevron-left flet" aria-hidden="true"></span>			    <span class="sr-only">Previous</span>			  </a>			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">			    <span id="pe2" class="glyphicon glyphicon-chevron-right flet" aria-hidden="true"></span>			    <span class="sr-only">Next</span>			  </a>			</div>				</section>	</article>	</div></div>';
			document.write(alternateContent);  // insert non-flash content
			}
			// -->
			</script>
			<noscript>
		  		This content requires the Adobe Flash Player.
		  		<a href="http://www.adobe.com/go/getflashplayer/">Get Flash</a>
			</noscript>
		</article>	
	</div>
</section>

<article class="separacion">
	<p class="text-center test <?php if($_SESSION['user']!='admin') echo 'false'; ?>"><a class="weltext" href="info">Reporte de entradas <i class="fas fa-list-alt"></i></a></p>	
	<p class="text-center test"><a class="weltext" href="logout">Salir <i class="fas fa-power-off"></i></a></p>	
</article>	

<script src="JS/carousel.js"></script>
<script src="JS/bootstrap.min.js"></script>

</body>
</html>


<head>
  
</head>

<body>
 

  <script src="http://vjs.zencdn.net/6.6.3/video.js"></script>
</body>