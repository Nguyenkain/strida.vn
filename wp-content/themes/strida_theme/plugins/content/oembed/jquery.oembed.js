(function($) {
    $.fn.oembed = function(url, options, callback) {

        options = $.extend(true, $.fn.oembed.defaults, options);

        return this.each(function() {

            var container = $(this),
				resourceURL = (url != null) ? url : container.attr("href"),
				provider;

            if (!callback) callback = function(container, oembed) {			
				 $.fn.oembed.insertCode(container, options.embedMethod, oembed);
            };

            if (resourceURL != null) {
                provider = getOEmbedProvider(resourceURL);

                if (provider != null) {						
					provider.params = getNormalizedParams(options[provider.name]) || {};
                    provider.maxWidth = options.maxWidth;
                    provider.maxHeight = options.maxHeight;										
                    provider.embedCode(container, resourceURL, callback);
                    return;
                }
            }

            callback(container, null);
        });
    };

    // Plugin defaults
    $.fn.oembed.defaults = {
        maxWidth: null,
        maxHeight: null,
		embedMethod: "replace" // "auto", "append", "fill"
    };
	
	$.fn.oembed.insertCode = function(container, embedMethod, oembed) {
		if (oembed == null)
			return;
		switch(embedMethod)
		{
			case "auto":				
                if (container.attr("href") != null) {
					$.fn.oembed.insertCode(container, "append", oembed);
				}
				else {
					$.fn.oembed.insertCode(container, "replace", oembed);
				};
				break;
			case "replace":	
				container.replaceWith(oembed.code);
				break;
			case "fill":
				container.html(oembed.code);
				break;
			case "append":
                var oembedContainer = container.next();
				if (oembedContainer == null || !oembedContainer.hasClass("oembed-container")) {
					oembedContainer = container
						.after('<div class="oembed-container"></div>')
						.next(".oembed-container");
					if (oembed != null && oembed.provider_name != null)
					    oembedContainer.toggleClass("oembed-container-" + oembed.provider_name);		
				}
				oembedContainer.html(oembed.code);				
				break;			
		}
	};

    $.fn.oembed.getPhotoCode = function(url, data) {
	    var alt = data.title ? data.title : '';
        alt += data.author_name ? ' - ' + data.author_name : '';
        alt += data.provider_name ? ' - ' +data.provider_name : '';
        var code = '<div style=" width:'+maxWidth+'px;height:'+maxHeight+'px;"><a href="' + url + '" target="_blank"><img  width="'+maxWidth+'px" height="'+maxHeight+'px" src="' + data.url + '" alt="' + alt + '"/></a></div>';
        if (data.html)
            code += "<div style='width:"+ maxWidth+";height:"+maxHeight+";'>" + data.html + "</div>";
        return code;
    };

    $.fn.oembed.getVideoCode = function(url, data) {
        var code= data.html ;
        return code;
    };

    $.fn.oembed.getRichCode = function(url, data) {
        var code ;
		code="<div style=\"width:"+maxWidth+"px;height:"+maxHeight+"px;\" >" + data.html + "</div>";
        return code;
    };
    
	/// para proveedores de texto wordpress and wikipedia
    $.fn.oembed.getGenericCode = function(url, data) {
        var title = (data.title != null) ? data.title : url,
			code = '<a href="' + url + '">' + title + '</a>';
        if (data.html)
            code += "<div style=\"width:100%;\" >" + data.html + "</div>";
        return code;
    };

    $.fn.oembed.isAvailable = function(url) {
        var provider = getOEmbedProvider(url);
        return (provider != null);
    };

    /* Private Methods */
    function getOEmbedProvider(url) {
        for (var i = 0; i < providers.length; i++) {
            if (providers[i].matches(url))
                return providers[i];
        }
        return null;
    }
	
	function getNormalizedParams(params) {
		if (params == null)
			return null;
		var normalizedParams = {};
		for (var key in params) {
			if (key != null)
				normalizedParams[key.toLowerCase()] = params[key];
		}
		return normalizedParams;
	}

    var providers = [
        new OEmbedProvider("fivemin", "http://strida.vn/plugins/content/oembed/5min.com"),
        new OEmbedProvider("amazon", "http://strida.vn/plugins/content/oembed/amazon.com"),
        new OEmbedProvider("flickr", "flickr", "http://flickr.com/services/oembed", "jsoncallback"),    
        new OEmbedProvider("googlevideo", "video.google."),
        new OEmbedProvider("hulu", "http://strida.vn/plugins/content/oembed/hulu.com"),
        new OEmbedProvider("imdb", "http://strida.vn/plugins/content/oembed/imdb.com"),
        new OEmbedProvider("metacafe", "http://strida.vn/plugins/content/oembed/metacafe.com"),
        new OEmbedProvider("qik", "http://strida.vn/plugins/content/oembed/qik.com"),
        new OEmbedProvider("revision3", "http://strida.vn/plugins/content/oembed/revision3.com"),
        new OEmbedProvider("slideshare", "http://strida.vn/plugins/content/oembed/slideshare.net"),
        new OEmbedProvider("twitpic", "http://strida.vn/plugins/content/oembed/twitpic.com"),
        new OEmbedProvider("viddler", "http://strida.vn/plugins/content/oembed/viddler.com"),
        new OEmbedProvider("vimeo", "http://strida.vn/plugins/content/oembed/vimeo.com", "http://vimeo.com/api/oembed.json"),
        new OEmbedProvider("wikipedia", "http://strida.vn/plugins/content/oembed/wikipedia.org"),
        new OEmbedProvider("remojon", "http://strida.vn/plugins/content/oembed/remojon.com","http://remojon.com/blog/wp-content/plugins/oembed-provider/oembed-provider.php"),
        new OEmbedProvider("youtube", "http://strida.vn/plugins/content/oembed/youtube.com"),
        new OEmbedProvider("http://strida.vn/plugins/content/oembed/vids.myspace.com", "http://strida.vn/plugins/content/oembed/vids.myspace.com", "http://vids.myspace.com/index.cfm?fuseaction=oembed"),
		new OEmbedProvider("screenr", "http://strida.vn/plugins/content/oembed/screenr.com", "http://screenr.com/api/oembed.json"),
		new OEmbedProvider("bliptv", "http://strida.vn/plugins/content/oembed/pycon.blip.tv"),
		new OEmbedProvider("funnyordye", "http://strida.vn/plugins/content/oembed/www.funnyordie.com"),
		new OEmbedProvider("scribd","http://strida.vn/plugins/content/oembed/www.scribd.com"),
	    new OEmbedProvider("dailymotion","http://strida.vn/plugins/content/oembed/dailymotion.com"),
		new OEmbedProvider("livejournal","http://strida.vn/plugins/content/oembed/livejournal.com"),
	
    ];

    function OEmbedProvider(name, urlPattern, oEmbedUrl, callbackparameter) {
        this.name = name;
        this.urlPattern = urlPattern;
        this.oEmbedUrl = (oEmbedUrl != null) ? oEmbedUrl : "http://oohembed.com/oohembed/";
		
        this.callbackparameter = (callbackparameter != null) ? callbackparameter : "callback";
        this.maxWidth = maxWidth;
        this.maxHeight = maxHeight;

        this.matches = function(externalUrl) {
            // TODO: Convert to Regex
            return externalUrl.indexOf(this.urlPattern) >= 0;
        };

        this.getRequestUrl = function(externalUrl) {

            var url = this.oEmbedUrl;

            if (url.indexOf("?") <= 0)
                url = url + "?";
			else
				url = url + "&";

			var qs = "";
			
			if (this.maxWidth != null && this.params["maxwidth"] == null)
				this.params["maxwidth"] = this.maxWidth;				
				
			if (this.maxHeight != null && this.params["maxheight"] == null)
				this.params["maxheight"] = this.maxHeight;

			for (var i in this.params) {
                // We don't want them to jack everything up by changing the callback parameter
                if (i == this.callbackparameter)
                  continue;
                
				// allows the options to be set to null, don't send null values to the server as parameters
                if (this.params[i] != null)
                	qs += "&" + escape(i) + "=" + this.params[i];
            }			
            
				
			url += "format=json&url=" + escape(externalUrl) +"&maxwidth="+maxWidth+"&maxheight="+maxHeight+ "&"+this.callbackparameter + "=?";
				//alert('OEMBEDURL: '+oEmbedUrl+'URL: '+ url);	
            return url;
        };

        this.embedCode = function(container, externalUrl, callback) {

            var request = this.getRequestUrl(externalUrl);

            $.getJSON(request, function(data) {

                var oembed = $.extend(data);

                var code, type = data.type;

                switch (type) {
                    case "photo":
                        oembed.code = $.fn.oembed.getPhotoCode(externalUrl, data);
                        break;
                    case "video":
                        oembed.code = $.fn.oembed.getVideoCode(externalUrl, data);
                        break;
                    case "rich":
                        oembed.code = $.fn.oembed.getRichCode(externalUrl, data);
                        break;
                    default:
                        oembed.code = $.fn.oembed.getGenericCode(externalUrl, data);
                        break;
                }

                callback(container, oembed);
            });
        };
    }
})(jQuery);