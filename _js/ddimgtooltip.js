/* Image w/ description tooltip v2.0
* Created: April 23rd, 2010. This notice must stay intact for usage
* Author: Dynamic Drive at http://www.dynamicdrive.com/
* Visit http://www.dynamicdrive.com/ for full source code
*/

var ddimgtooltip={

	tiparray:function(){
		//needed to add code for the different desings and colors to simplify code for tooltips array
		var tooltips=[]

		var designs = new Array ("rioGrande", "willow", "pleasant", /*"palm",*/ "popsicle", "wave", /*"miramar",*/ "capeTown", "kite", "basket", "feather", "frills", /*"madagascar", "leopard",*/ "candy", "eve", "castle", "ashley", "polly", "izzy", "duchess", "kate", "chrissy", "carmen", "sydney", "frances", "lindsay", "andie", "zebra", "jem", "lee", "elle", "kenya", "valley", "leo", "tammy");
		var numberOfDesigns = designs.length;
		var i = 0;
		var tooltipsIndex = 0;
		while ( i < numberOfDesigns ) { // using number of designs as counter, ergo, for each design do the following codes
			var theDesign = designs[i];
			var numberOfColors;
			var category;
			var colors;
			var ii = 0;
			switch (theDesign) {
				case "rioGrande":		// 0 - 7
					var category = "sandals";
					var colors = new Array ("brown", "black");
					var numberOfColors = colors.length;
					break;
				case "willow":			// 8 - 19
					var category = "sandals";
					var colors = new Array ("brown", /*"mocha",*/	 "navy");
					var numberOfColors = colors.length;
					break;
				case "pleasant":		// 20 - 31	20/31 - 32/35
					var category = "sandals";
					var colors = new Array (/*"blue", "black",*/ "red", "white");
					var numberOfColors = colors.length;
					break;
				/*case "palm":			// 32 - 43	36/39 - 40/43 - 44/47
					var category = "sandals";
					var colors = new Array ("tobacco", "navy", "yellow");
					var numberOfColors = colors.length;
					break;*/
				case "popsicle":		// 44 - 55	48/51 - 52/55 - 56/59
					var category = "sandals";
					var colors = new Array ("red", "black"/*, "white"*/);
					var numberOfColors = colors.length;
					break;
				case "wave":			// 60/63 - 64/67 - 68/71 - 72/75 - 76/79 - 80/83 - 84/87
					var category = "wedges";
					var colors = new Array ("camel", "navy", /*"orange",*/ "black", "brown", "maroon", "white");
					var numberOfColors = colors.length;
					break;
				/*case "miramar":			// 84/87 |	88/91
					var category = "flats";
					var colors = new Array ("silver");
					var numberOfColors = colors.length;
					break;*/
				case "capeTown":		// 88/91 |	92/95
					var category = "flats";
					var colors = new Array ("brown");
					var numberOfColors = colors.length;
					break;
				case "kite":			// 96/99 | 100/103 - 104/107 - 108/111
					var category = "sandals";
					var colors = new Array ("white", "blue", "yellow");
					var numberOfColors = colors.length;
					break;
				case "basket":			// 108/111 | 112/115 - 116/119 - 120/123
					var category = "wedges";
					var colors = new Array ("caramel", "black", "bone");
					var numberOfColors = colors.length;
					break;
				case "feather":			// 124/127 - 128/131 - 132/135
					var category = "wedges";
					var colors = new Array (/*"black",*/ "blue", "cream");
					var numberOfColors = colors.length;
					break;
				case "frills":			// 136/139 - 140/143 - 144/147
					var category = "wedges";
					var colors = new Array ("blue", /*"brown",*/ "khaki");
					var numberOfColors = colors.length;
					break;
				/*case "madagascar":		// 124 - 125
					var category = "flats";
					var colors = new Array ("black", "red");
					var numberOfColors = colors.length;
					break;
				case "leopard":			// 126 - 129
					var category = "flats";
					var colors = new Array ("orange","black");
					var numberOfColors = colors.length;
					break;*/
				case "candy":			// 148/151 - 152/155 - 156/159 - 160/163 - 164/167
					var category = "wedges";
					var colors = new Array ("fuchsia","aqua","black","navy","pearl");
					var numberOfColors = colors.length;
					break;
				case "eve":				// 168/171 - 172/175 - 176/179
					var category = "flats";
					var colors = new Array ("black","brown","tan");
					var numberOfColors = colors.length;
					break;
				case "castle":			// 180/183 - 184/187 - 188/191
					var category = "flats";
					var colors = new Array ("tobacco","black","blue");
					var numberOfColors = colors.length;
					break;
				case "ashley":			// 192/195 - 196/199
					var category = "flats";
					var colors = new Array ("peach","mocha");
					var numberOfColors = colors.length;
					break;
				case "polly":			// 200/203 - 204/207 - 208/211 - 212/215
					var category = "flats";
					var colors = new Array ("red","black","blue","brown");
					var numberOfColors = colors.length;
					break;
				case "izzy":			// 216/219 - 220/223 - 224/227 - 228/231
					var category = "flats";
					var colors = new Array ("brown","black","navy","tan");
					var numberOfColors = colors.length;
					break;
				case "duchess":			// 232-235 - 236/239
					var category = "flats";
					var colors = new Array ("gray","red");
					var numberOfColors = colors.length;
					break;
				case "kate":			// 240-243 - 244/247
					var category = "wedges";
					var colors = new Array ("taupe","brown");
					var numberOfColors = colors.length;
					break;
				case "chrissy":
					var category = "sandals";
					var colors = new Array ('brown', 'black', 'gray');
					var numberOfColors = colors.length;
					break;
				case "carmen":
					var category = "wedges";
					var colors = new Array ('black', 'nude', 'red');
					var numberOfColors = colors.length;
					break;
				case "sydney":
					var category = "wedges";
					var colors = new Array ('beige', 'black', 'white');
					var numberOfColors = colors.length;
					break;
				case "frances":
					var category = "wedges";
					var colors = new Array ('beige', 'peach');
					var numberOfColors = colors.length;
					break;
				case "lindsay":
					var category = "wedges";
					var colors = new Array ('brown', 'black', 'navy');
					var numberOfColors = colors.length;
					break;
				case "andie":
					var category = "sandals";
					var colors = new Array ('orange', 'black', 'white');
					var numberOfColors = colors.length;
					break;
				case "zebra":
					var category = "sandals";
					var colors = new Array ('black');
					var numberOfColors = colors.length;
					break;
				case "jem":
					var category = "sandals";
					var colors = new Array ('gold', 'silver');
					var numberOfColors = colors.length;
					break;
				case "lee":
					var category = "sandals";
					var colors = new Array ('cream', 'navy');
					var numberOfColors = colors.length;
					break;
				case "elle":
					var category = "wedges";
					var colors = new Array ('white');
					var numberOfColors = colors.length;
					break;
				case "kenya":
					var category = "flats";
					var colors = new Array ('yellow');
					var numberOfColors = colors.length;
					break;
				case "valley":
					var category = "flats";
					var colors = new Array ('aqua', 'purple', 'tan');
					var numberOfColors = colors.length;
					break;
				case "leo":
					var category = "flats";
					var colors = new Array ('brown', 'maroon');
					var numberOfColors = colors.length;
					break;
				case "tammy":
					var category = "flats";
					var colors = new Array ('pink', 'yellow', 'beige');
					var numberOfColors = colors.length;
					break;
			}
			while ( ii < numberOfColors ) { // for each color, do the following codes
				tooltips[tooltipsIndex]=["./images/"+category+"/"+theDesign+"_"+colors[ii]+"_front.jpg", "", {background:"#FFFFFF", color:colors[ii], border:"5px ridge gray"}];
				tooltipsIndex++;
				tooltips[tooltipsIndex]=["./images/"+category+"/"+theDesign+"_"+colors[ii]+"_side1.jpg", "", {background:"#FFFFFF", color:colors[ii], border:"5px ridge gray"}];
				tooltipsIndex++;
				tooltips[tooltipsIndex]=["./images/"+category+"/"+theDesign+"_"+colors[ii]+"_side2.jpg", "", {background:"#FFFFFF", color:colors[ii], border:"5px ridge gray"}];
				tooltipsIndex++;
				tooltips[tooltipsIndex]=["./images/"+category+"/"+theDesign+"_"+colors[ii]+"_top.jpg", "", {background:"#FFFFFF", color:colors[ii], border:"5px ridge gray"}];
				tooltipsIndex++;
				ii++;
			}
			i++;
		}

		//additional code ends here...

		/*
		var tooltips=[]
		//define each tooltip below: tooltip[inc]=['path_to_image', 'optional desc', optional_CSS_object]
		//For desc parameter, backslash any special characters inside your text such as apotrophes ('). Example: "I\'m the king of the world"
		//For CSS object, follow the syntax: {property1:"cssvalue1", property2:"cssvalue2", etc}

		tooltips[0]=["./images/sandals/rioGrande_black_front.jpg", "", {background:"#FFFFFF", color:"black", border:"5px ridge gray"}]
		tooltips[1]=["./images/sandals/rioGrande_black_side1.jpg", "", {background:"#FFFFFF", color:"black", border:"5px ridge gray"}]
		tooltips[2]=["./images/sandals/rioGrande_black_side2.jpg", "", {background:"#FFFFFF", color:"black", border:"5px ridge gray"}]
		tooltips[3]=["./images/sandals/rioGrande_black_top.jpg", "", {background:"#FFFFFF", color:"black", border:"5px ridge gray"}]

		*/
		return tooltips //do not remove/change this line
	}(),

	tooltipoffsets: [20, -200], //additional x and y offset from mouse cursor for tooltips

	//***** NO NEED TO EDIT BEYOND HERE

	tipprefix: 'imgtip', //tooltip ID prefixes

	createtip:function($, tipid, tipinfo){
		if ($('#'+tipid).length==0){ //if this tooltip doesn't exist yet
			return $('<div id="' + tipid + '" class="ddimgtooltip" />').html(
				'<div style="text-align:center"><img src="' + tipinfo[0] + '" /></div>'
				+ ((tipinfo[1])? '<div style="text-align:left; margin-top:5px">'+tipinfo[1]+'</div>' : '')
				)
			.css(tipinfo[2] || {})
			.appendTo(document.body)
		}
		return null
	},

	positiontooltip:function($, $tooltip, e){
		var x=e.pageX+this.tooltipoffsets[0], y=e.pageY+this.tooltipoffsets[1]
		var tipw=$tooltip.outerWidth(), tiph=$tooltip.outerHeight(),
		x=(x+tipw>$(document).scrollLeft()+$(window).width())? x-tipw-(ddimgtooltip.tooltipoffsets[0]*2) : x
		y=(y+tiph>$(document).scrollTop()+$(window).height())? $(document).scrollTop()+$(window).height()-tiph-10 : y
		$tooltip.css({left:x, top:y})
	},

	showbox:function($, $tooltip, e){
		$tooltip.show()
		this.positiontooltip($, $tooltip, e)
	},

	hidebox:function($, $tooltip){
		$tooltip.hide()
	},


	init:function(targetselector){
		jQuery(document).ready(function($){
			var tiparray=ddimgtooltip.tiparray
			var $targets=$(targetselector)
			if ($targets.length==0)
				return
			var tipids=[]
			$targets.each(function(){
				var $target=$(this)
				$target.attr('rel').match(/\[(\d+)\]/) //match d of attribute rel="imgtip[d]"
				var tipsuffix=parseInt(RegExp.$1) //get d as integer
				var tipid=this._tipid=ddimgtooltip.tipprefix+tipsuffix //construct this tip's ID value and remember it
				var $tooltip=ddimgtooltip.createtip($, tipid, tiparray[tipsuffix])
				$target.mouseenter(function(e){
					var $tooltip=$("#"+this._tipid)
					ddimgtooltip.showbox($, $tooltip, e)
				})
				$target.mouseleave(function(e){
					var $tooltip=$("#"+this._tipid)
					ddimgtooltip.hidebox($, $tooltip)
				})
				$target.mousemove(function(e){
					var $tooltip=$("#"+this._tipid)
					ddimgtooltip.positiontooltip($, $tooltip, e)
				})
				if ($tooltip){ //add mouseenter to this tooltip (only if event hasn't already been added)
					$tooltip.mouseenter(function(){
						ddimgtooltip.hidebox($, $(this))
					})
				}
			})

		}) //end dom ready
	}
}

//ddimgtooltip.init("targetElementSelector")
ddimgtooltip.init("*[rel^=imgtip]")