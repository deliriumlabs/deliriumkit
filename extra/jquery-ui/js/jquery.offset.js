/**
 * @author Dan Blaisdell
 */
(function($){
	$.fn.extend({
		_offset : $.fn.offset,
		
		offset : function(newOffset){
		    return newOffset ? this.setXY(newOffset) : this._offset();
		},
		
		setXY: function(newOffset){
			return this.each(function(){
				var el = this;
				
				var hide = false;
				
				if($(el).css('display')=='none'){
					hide = true;
					$(el).show();
				}
				
				var style_pos = $(el).css('position');
				
				// default to absolute
				if (style_pos == 'static') {
					$(el).css('position','absolute');
					style_pos = 'absolute';
				}
				
				var offset = $(el).offset();
				
				if (offset){
					var delta = {
						left : parseInt($(el).css('left'), 10),
						top: parseInt($(el).css('top'), 10)
					};
					
					// in case of 'auto'
					if (isNaN(delta.left)) 
						delta.left = (style_pos == 'absolute') ? 0 : el.offsetLeft;
					if (isNaN(delta.top))
						delta.top = (style_pos == 'absolute') ? 0 : el.offsetTop;
					
					if (newOffset.left || newOffset.left===0)
						$(el).css('left',newOffset.left - offset.left + delta.left + 'px');
				
					if (newOffset.top || newOffset.top===0)
						$(el).css('top',newOffset.top - offset.top + delta.top + 'px');
				}
				if(hide) $(el).hide();
			});
		}
	});
})(jQuery);
