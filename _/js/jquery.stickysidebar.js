(function (a) {
    a.fn.extend({
        jsticky: function (b) {
            var c = {
                marginTop: 0
            };
            var b = a.extend(c, b);
            return this.each(function () {
                var c = b;
                var d = a(this);
                var e = d.offset();
                var f = e.top;
                var g = d.css("marginTop");
                var h = parseInt(g);
                var i = f - h;
                var e = d.offset();
                var f = e.top;
                var j = e.left;
                var g = d.css("marginTop");
                
                a(window).scroll(function () {
                    var b = a(window).scrollTop();
                    var e = b + c.marginTop;
                    if (e >= f) {
                        d.css({
                            marginTop: c.marginTop,
                            
                            position: "fixed"
                        })
                    }
                    if (e < f) {
                        d.css({
                            marginTop: g,
                            
                            position: "relative"
                        })
                    }
                })
            })
        }
    })
})(jQuery)(function (a) {
    a.fn.extend({
        jsticky: function (b) {
            var c = {
                marginTop: 0
            };
            var b = a.extend(c, b);
            return this.each(function () {
                var c = b;
                var d = a(this);
                var e = d.offset();
                var f = e.top;
                var g = d.css("marginTop");
                var h = parseInt(g);
                var i = f - h;
                var e = d.offset();
                var f = e.top;
                var j = e.left;
                var g = d.css("marginTop");
                var k = d.css("marginLeft");
                a(window).scroll(function () {
                    var b = a(window).scrollTop();
                    var e = b + c.marginTop;
                    if (e >= f) {
                        d.css({
                            marginTop: c.marginTop,
                            marginLeft: j,
                            position: "fixed"
                        })
                    }
                    if (e < f) {
                        d.css({
                            marginTop: g,
                            marginLeft: k,
                            position: "relative"
                        })
                    }
                })
            })
        }
    })
})(jQuery)
