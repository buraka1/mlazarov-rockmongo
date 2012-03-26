(function($) {
    
    var getters = ['settings'];
    
    $.fn.texthistory = function(options)
    {
        var otherArgs = Array.prototype.slice.call(arguments, 1);
        
        if ($.inArray(options, getters) > -1)
        {
            return $.texthistory['_' + options].apply($.texthistory, [this[0]].concat(otherArgs));
        }

        return this.each(function()
        {
            if (typeof options === 'string')
            {
                $.texthistory['_' + options].apply($.texthistory, [this].concat(otherArgs)); 
            } 
            else
            {
                $.texthistory._attachTextHistory(this, options || {}); 
            } 
        }); 
    }
    
    function TextHistory()
    {
        this._defaults = {historySize: 50};
    }

    $.extend(TextHistory.prototype, {
        
        setDefaults: function(settings)
        {
            $.extend(this._defaults, settings || {});
            return this;
        },
        
        _attachTextHistory: function(el, settings)
        {
            el = $(el);
            var f = el.closest('form');
            f.submit(function(e)
            {
                var
                    w = window.wrappedJSObject || window,
                    storage = w.localStorage || w.globalStorage,
                    h = $.texthistory._defaults.historySize,
                    path = location.pathname + '#' + (el.attr('name') || el.attr('id')),
                    s = storage[path],
                    c = el.val(),
                    l,
                    len
                ;
                if (typeof s !== "undefined") s = JSON.parse(s);
                if (typeof s !== "object" || s.constructor !== Array) {s = [];}
                l = s.length;
                len = Math.min(h, l);
                if (len === 0 || s.indexOf(c) === -1)
                {
                    s.unshift(c);
                }
                if (s.length > h)
                {
                    s = $(s).slice(0, h);
                }
                storage[path] = JSON.stringify(s);
            })
        },
        
        _prev: function(el)
        {
            $(el).texthistory("go", -1);
        },
        
        _next: function(el)
        {
            $(el).texthistory("go", 1);
        },
        
        _go: function(el, offset)
        {
            el = $(el);
            var
                w = window.wrappedJSObject || window,
                storage = w.localStorage || w.globalStorage,
                path = location.pathname + '#' + (el.attr('name') || el.attr('id')),
                s = storage[path],
                pos = 0
            ;
            if (typeof s !== "undefined") s = JSON.parse(s);
            if (typeof s !== "object" || s.constructor !== Array) {s = [];}
            if (s.length > 0)
            {
                pos = (parseInt(el.attr("data-texthistory-position"), 10) || 0) + offset;
                if (pos > s.length) {pos = 0;}
                else if (pos < 0) {pos = Math.max(s.length - 1, 0);}
                el.val(s[pos]);
            }
            el.attr("data-texthistory-position", pos);
        },
        
        _clear: function(el)
        {
            el = $(el);
            var
                w = window.wrappedJSObject || window,
                storage = w.localStorage || w.globalStorage,
                path = location.pathname + '#' + (el.attr('name') || el.attr('id'))
            ;
            storage[path] = "[]";
        }
    });

    $.texthistory = new TextHistory();

})(jQuery);