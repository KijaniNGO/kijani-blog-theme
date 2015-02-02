function reorderComments() {
	if( $(window).width() <= 1023 ) {
		$('#comments').insertBefore($('.articles'));
		$('.author').insertBefore($('.subscribe'));
	} else {
		$('#comments').insertAfter($('.articles'));
		$('.author').insertAfter($('.subscribe'));
	}
}

jQuery(document).ready(function($){
	$('.cptch_input').replaceWith('<input id="cptch_input" type="number" autocomplete="off" name="cptch_number" required="required" placeholder="?" maxlength="1" size="1">');
	reorderComments();
	$(window).resize(reorderComments);
	$('.post-area').hide();
	$('.abort-button').hide();
	$('.comment-area textarea').focus(function(){
		$('.post-area').slideDown();
		$('.abort-button').fadeIn();
	});
	$('textarea').on('keydown', function(e){
		var that = $(this);
		if (that.scrollTop()) {
			$(this).height(function(i,h){
				return h + 24;
			});
		}
	});
	$('.abort-button').click(function() {
		$('.post-area').slideUp();
		$('.abort-button').fadeOut();
		if ($('#comment-form').prev().is('li.comment') ) {
			$('#comment-parent').val('0');
			$('#comment-form').find('textarea').attr('placeholder', 'Write your comment...');
			$('#comment-form').slideUp(function() {
				$(this).insertBefore($('#comments').children().first()).slideDown();
			});
		};
	});
	$('.reply-link').click(function(){
		var id = $(this).closest('article').attr('id');
		$('#comment-parent').val(id);
		$('#comment-form').find('textarea').attr('placeholder', 'Write your reply...');
		var reply = $(this).closest('li.depth-1');
		if (!reply.is($('#comment-form').prev()) ) {
			$('#comment-form').slideUp(function() {
				$(this).insertAfter(reply).slideDown(function() {
					$(this).find('textarea').focus();
				});
			});
		}
	});
});