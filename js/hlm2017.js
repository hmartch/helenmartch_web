(function () {
	/* Declare main query variables */
	_document = $(document);

	/* Copyright Year */
	var	copyright = _document.find('#copyright');
	if ( copyright.length ) {
		var now = new Date();
		copyright.text(now.getFullYear());
	};

	/* Email Me Link */
	var	email = _document.find('#email'),
		fname = "helen",
		domain = "helenmartch.com";
	if ( email.length ) {
		email.html('<a href="mailto:' + fname + '@' + domain +'">' + fname + '@' + domain + '</a>');
	};

	/* Nav Highlighting */
	var	pathStr = location.pathname,
		thisPg = pathStr.substring(pathStr.lastIndexOf('/')+1, pathStr.length);
	if ( thisPg.indexOf('family') > -1 ) {
		_document.find('#fam').addClass('on');
	}
	else if ( thisPg.indexOf('interest') > -1 ) {
		_document.find('#int').addClass('on');
	}
	else if ( thisPg.indexOf('portfolio') > -1 ) {
		_document.find('#proj').addClass('on');
	}
	else if ( thisPg.indexOf('resume') > -1 ) {
		_document.find('#res').addClass('on');
	};
	
	_document.find('nav li:last-child').addClass('last-child');

	/* ipad and iphone fix, with thanks to Mark Goddard from http://blog.0100.tv/2010/05/fixing-the-hover-event-on-the-ipadiphoneipod/ */
	var topnavlink = $('nav ul li a');
	if ( (navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPad/i)) ) {
		topnavlink.bind('touchstart', function() {
			//console.log("touch started");
		});
		topnavlink.bind('touchend', function() {
			//console.log("touch ended");
		});
	};

	/* Snowman Video Load*/
	piece = location.search;
	if ( piece.indexOf('death-snowman') > -1 ) {
		var vidcode = '<h3>Video<\/h3>';
		vidcode += '<video controls="controls">';
		vidcode += '<source src="\/videos\/snowman.mp4" type="video\/mp4" \/>';
		vidcode += '<source src="\/videos\/snowman.theora.ogg" type="video\/ogg" \/>';
		vidcode += 'Sorry, but your browser does not support the video tag.';
		vidcode += '<\/video>';
		vidcode += '<p>"The Death of a Snowman"<\/p>';
		_document.find('#side2').html(vidcode);
	}

	/* Toggle Course Lists */
	_document.find('.courses').on('click', function() {
		if ( $(this).children('span').text() == '[+] show' ) {
			$(this).children('span').text('[-] hide');
		}
		else if ( $(this).children('span').text() == '[-] hide' ) {
			$(this).children('span').text('[+] show');
		}
		$(this).siblings('ul').toggle();
	});

	/* Slideshows */
	var thumbs = $('div#thumbs');
	if ( thumbs.length || $('h2.refer').length) {
		var slides = slidesJSON.slides;
		var prevshow = '';
	}
	
	var slideshowList = function (id) {
		_document.find('.side.details').append('<ul class="slides"></ul>');
		$(slides).each(function(i) {
			if ( slides[i].show != prevshow ) {
				$('.side.details ul').append('<li id="listitem' + i + '"><span>' + slides[i].show + '</span></li>');
				return prevshow = slides[i].show;
			}
		});
	}
	
	if ( thumbs.length ) {
		/* Side3 Slideshow List */
		slideshowList();

		/* Slideshow Thumbnails */
		$('div#thumbs').append('<ul></ul>');
		$(slides).each(function(i) {
			$('div#thumbs ul').append('<li><img src="' + slides[i].path + '-50.jpg" alt="' + slides[i].title + '" id="slide' + i + '"/></li>');
		});

		var list = $('#thumbs li');
		var slideSwitch = function (id) {
			var slides = slidesJSON.slides;
			list.css('opacity','.7');
			nid = parseInt(id);
			$('div#main h3:first').text(slides[nid].show);
			$('img#slideimg').attr('src', slides[nid].path + '-530.jpg').attr('alt', slides[nid].title);
			$('h3#slidetitle').text(slides[nid].title);
			$('p#slidedesc').text(slides[nid].description);
			if ( $('p#slideloc').length ) {
				$('p#slideloc').text(slides[nid].location);
			}
			if ( $('p#slidedate').length ) {
				$('p#slidedate').text(slides[nid].date);
			}
			var current = $(list[nid]);
			current.css('opacity','1');
			if ( nid != '0' ) {
				$('span.first').addClass('link');
				$('span.prev').addClass('link');
			}
			if ( nid == '0' ) {
				$('span.first').removeClass('link');
				$('span.prev').removeClass('link');
			}
			if ( nid != list.length-1 ) {
				$('span.next').addClass('link');
				$('span.last').addClass('link');
			}
			if ( nid == list.length-1 ) {
				$('span.next').removeClass('link');
				$('span.last').removeClass('link');
			}
		};

		$('nav.slide').on('click', 'span.link', function() {
			if ( $(this).hasClass('first') ) {
				nid = 0;
			}
			else if ( $(this).hasClass('prev') ) {
				nid = nid-1;
			}
			else if ( $(this).hasClass('next') ) {
				nid = nid+1;
			}
			else if ( $(this).hasClass('last') ) {
				nid = list.length-1;
			}
			thumbs.slideLeft(nid);
		});

		thumbs.on('click', 'img', function() {
			nid = parseInt($(this).attr('id').substring(5, $(this).attr('id').length));
			thumbs.slideLeft(nid);
		});

		$('div#side3').on('click', 'li', function() {
			nid = parseInt($(this).attr('id').substring(8, $(this).attr('id').length));
			thumbs.slideLeft(nid);
		});
		
		$.fn.slideLeft = function(nid, speed) {
			var $this = $(this);
			var left = -53 * nid;
			return $this.animate({
				'left': left + 'px'
			}, speed || 500, slideSwitch(nid));
		};

		if ( window.location.toString().indexOf('slide=') != '-1' ) {
			thumbs.slideLeft(window.location.toString().substr((window.location.toString().indexOf('slide='))+6));
		}
		else {
			slideSwitch('0');
		};
	};

	/* Side3 Slideshow List on Other Pages */
	if ( $('.refer').length ) {
		slideshowList();
	
		$('div#side3').on('click', 'li', function() {
			nid = parseInt($(this).attr('id').substring(8, $(this).attr('id').length));
			name = $(this).children('span').text();
			setStart(nid,name);
		});
	
		var setStart = function(nid,name) {
			var page = $('h2:first').attr('id');
			$(slides).each(function(i) {
				if ( slides[i].show == name ) {
					if ( page == "travel" ) {
						window.location = "family-photos-travel.php?slide=" + i;
					} //end if
					return false;
				} //end if
			}) //end each
		} //end setStart
	};

	/* Video Switching */
	// Thanks to Pipwerks for the detectVideoSupport function - http://pipwerks.com/2010/03/19/html5-video-minus-ogg/
	var detectVideoSupport = function () {
		var detect = document.createElement('video') || false;
		this.html5 = detect && typeof detect.canPlayType !== "undefined";
		this.mp4 = this.html5 && (detect.canPlayType("video/mp4") === "maybe" || detect.canPlayType("video/mp4") === "probably");
		this.ogg = this.html5 && (detect.canPlayType("video/ogg") === "maybe" || detect.canPlayType("video/ogg") === "probably");
		//console.log(this);
		return this;
	};

	if ( $('#main #video').length ) {
		var videos = videosJSON.videos;
		
		var loadVid = function (id) {
			var vid = $('#main #video');
			nid = parseInt(id);
			if ( $('#video').length ) {
				var video = detectVideoSupport();
					if ( video.ogg && !video.mp4 ) {
						vid.attr('src','/videos/' + videos[nid].file + '.theora.ogg');
					}
					else {
						vid.attr('src','/videos/' + videos[nid].file + '.mp4');
					}
					$('#desc').html(videos[nid].description);
					vid.load();
				}
			};
		loadVid(0);

		/* Side3 Video Thumbnail List on Video Page */
		$('div#side3').append('<ul class="videos"></ul>');
		$(videos).each(function(i) {
			$('div#side3 ul').append('<li><img src="' + videos[i].still + '" alt="Click for video" class="thumb" id="video' + i + '"/></li>');
		});
	
		$('div#side3 ul.videos').on('click', 'img', function() {
			$this = $(this);
			nid = parseInt($this.attr('id').substring(5, $this.attr('id').length));
			loadVid(nid);
		});
	};
	
	/* Portfolio Category */
	var showCategory = function(i) {
		$('ul.photos').remove();
		categories = portfolioCategories.categories;
		projects = portfolioProjects.projects;
		thisCat = categories[i].catabbrev;
		//$('title').html('Portfolio: '+categories[i].catname+' - HelenMartch.com');
		//$('#metadesc').attr('content',categories[i].catdesc);
		//$('#metakeys').attr('content',categories[i].catkeys);
		$('.catname').html(categories[i].catname);
		$('.catdesc').html(categories[i].catlongdesc);
		$('#main').append('<ul class="photos"></ul>');
		$(projects).each(function(j) {
			if (projects[j].category == thisCat && projects[j].type == 'main'){
				if (projects[j].groupname == ''){
					$('#main ul').append('<li><a href="portfolio-project.php?piece='+projects[j].pId+'"><img src="images/portfolio/'+projects[j].category+"/"+projects[j].image+'-165.jpg" alt="' + projects[j].piecename + '" title="'+projects[j].piecename+'"/><br/><span class="piecetitle">'+projects[j].piecename+'</span></a></li>');
				}
				else {
					$('#main ul').append('<li><a href="portfolio-project.php?piece='+projects[j].pId+'"><img src="images/portfolio/'+projects[j].category+"/"+projects[j].image+'-165.jpg" alt="' + projects[j].piecename + '" title="'+projects[j].piecename+'"/><br/><span class="piecetitle">'+projects[j].groupname+'</span></a></li>');
				}
			}
		});
	}
	
	var showProject = function(i){
		categories = portfolioCategories.categories;
		projects = portfolioProjects.projects;
		thisProjCat = projects[i].category;
		var x = categories.length;
		while( x-- ) {
    		if( categories[x].catabbrev === thisProjCat ) break;
		}
		//$('title').html('Portfolio: '+projects[i].piecename+' - HelenMartch.com');
		//$('#metadesc').attr('content',projects[i].projdesc);
		//$('#metakeys').attr('content',projects[i].projkeys + categories[x].catkeys);
		if (projects[i].groupname == '') {
			$('h2').html(projects[i].piecename);
			$('.piece h3').hide();
			if (projects[i].type == 'main'){
				$('section.relateds').hide();
			}
		} else {
			$('h2').html(projects[i].groupname);
			$('.piece h3').html(projects[i].piecename);			
			$(projects).each(function(findRel){
				if (projects[findRel].type == 'related' || projects[findRel].type == 'source') {
				if (projects[findRel].groupname == projects[i].groupname) {
					$('#main').append('<section class="relateds '+projects[findRel].pId+'"><figure class="right"><img alt="'+projects[findRel].piecename+'" title="'+projects[findRel].piecename+'" /></figure><h3></h3><p class="years"></p><p class="piecedesc"></p><p class="mat"></p></section>');
					if (projects[findRel].orientation == 'vertical') {
						$('.'+projects[findRel].pId+' figure').addClass('vertical');
					} else {
						$('.'+projects[findRel].pId+' figure').removeClass('vertical');
					}
					$('.'+projects[findRel].pId+' figure img').attr('src','images/portfolio/'+projects[findRel].category+"/"+projects[findRel].image+'-320.jpg');
					$('.'+projects[findRel].pId+' h3').html(projects[findRel].piecename);
					$('.'+projects[findRel].pId+' .years').html(projects[findRel].years);
					$('.'+projects[findRel].pId+' .piecedesc').html(projects[findRel].piecedesc);	
					$('.'+projects[findRel].pId+' .mat').html(projects[findRel].material);
					$('.'+projects[findRel].pId).show();
				}
				}
			});
		}
		if (projects[i].orientation == 'vertical') {
			$('.piece figure').addClass('vertical');
		} else {
			$('.piece figure').removeClass('vertical');
		}
		$('.piece figure').html('<img src="images/portfolio/'+projects[i].category+'/'+projects[i].image+'-320.jpg" title="'+projects[i].piecename+'" alt="'+projects[i].piecename+'"/>');
		$('.piece .years').html(projects[i].years);
		$('.piece .piecedesc').html(projects[i].piecedesc);	
		$('.piece .mat').html(projects[i].material);
		$('#side3 h3').html('More '+categories[x].catname);
		$(projects).each(function(j) {
			if (projects[j].category == thisProjCat && projects[j].type == 'main'){
				$('#side3').append('<a href="portfolio-project.php?piece='+projects[j].pId+'"><img src="images/portfolio/'+projects[j].category+"/"+projects[j].image+'-60.jpg" alt="' + projects[j].piecename + '" title="'+projects[j].piecename+'" class="thumb"/></a>');
			}
		});
	}
	
	if ( window.location.toString().indexOf('portfolio-category.php?cat=') != '-1' ) {
		thisCat = window.location.toString().substr((window.location.toString().indexOf('cat='))+4);
		var i = portfolioCategories.categories.length;
		while( i-- ) {
    		if( portfolioCategories.categories[i].catabbrev === thisCat ) break;
		}
		showCategory(i);
	}
	
	if ( window.location.toString().indexOf('portfolio-project.php?piece=') != '-1' ) {
		thisPiece = window.location.toString().substr((window.location.toString().indexOf('piece='))+6);
		var i = portfolioProjects.projects.length;
		while( i-- ) {
    		if( portfolioProjects.projects[i].pId === thisPiece ) break;
		}
		showProject(i);
	}

	_document.find('.btn-open').on('click', function() {
		_document.find('body').addClass('nav-open nav-animate');
	});

	_document.find('.btn-close').on('click', function() {
		_document.find('body').addClass('nav-animate').removeClass('nav-open');
		_document.find('body').on('transitionend', function(){
			_document.find('body').removeClass('nav-animate');
		})
	});

})();