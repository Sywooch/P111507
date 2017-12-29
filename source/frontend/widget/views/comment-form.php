<img class="comment-avatar avatar" src="<?=cuser()->getAvatar()?>" alt="">
<form action="#">
    <input
    	type="text"
    	placeholder="Viết bình luận của bạn..."
    	data-ajax-id="<?=$id?>"
    	data-ajax-type="<?=$type?>"
    	data-ajax-parent="<?=$parent_id?>"
    >
    <input class="btn-comment" type="submit" value="Bình luận">
</form>