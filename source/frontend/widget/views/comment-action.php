<?php 
	// dd($model, false);
?>
<div class="comment-action">
    <ul>
        <li>
        	<a href="javascript:void(0)" data-ajax-id="<?=$model->id?>"" class="sub-reply-click">
        		Trả lời
        	</a>
        </li>
        <li>
        	<a href="javascript:void(0)" data-ajax-id="<?=$model->id?>"" class="sub-like-click">
        		<?= ($model->like) ? 'Bỏ thích' : 'Yêu thích' ?> 
        	</a>
        </li>
        <li>
        	<a href="javascript:void(0)" data-ajax-id="<?=$model->id?>"" class="sub-follow-click">		Theo dõi
        	</a>
        </li>
        <li>
        	<a href="javascript:void(0)" data-ajax-id="<?=$model->id?>"" class="sub-report-click">		Báo cáo
        	</a>
        </li>
    </ul>
</div>