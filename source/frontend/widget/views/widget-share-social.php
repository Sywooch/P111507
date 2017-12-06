<?php
    use yii\helpers\Url;

    $social = [
        [
            'class' => 'fb-icon',
            'link' => 'http://www.facebook.com/share.php?u='
        ],
        [
            'class' => 'tt-icon',
            'link' => 'http://twitter.com/home?status='
        ]
    ];

    foreach ($social as $key => $value) { ?>
    <a target="_blank" href="javascript:;" 
		data-link="<?=$value['link'].$siteUrl?>"
        class="<?= $value['class'] ?>"
        onclick = "
        window.open($(this).data('link'), 'SocialShareWindow', 'height=450, width=550, top=' 
        + ($(window).height() / 2 - 275) 
        + ', left=' + ($(window).width() / 2 - 225) 
        + ', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');"

    ></a>
<?php
    }
?>
<a href="#" class="share-icon"></a>