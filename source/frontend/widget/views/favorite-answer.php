<li>
    <a class="like-btn <?=$isFavorite ? ' active' : ''?>" href="#" data-ajax-id="<?=$id?>">
        <i class="fa fa-heart-o" aria-hidden="true"></i>
        <?= $isFavorite ? 'Đã thích' : 'Yêu thích' ?> | <span class="like-number"> <?=$count?> </span>
    </a>
</li>