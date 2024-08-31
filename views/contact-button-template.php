<div class="giuseart-nav">
    <ul>
        <li><a href="<?php echo $link_order; ?>" rel="nofollow" target="_blank"><i class="ticon-heart"></i>Đặt hàng</a></li>
        <li><a href="https://zalo.me/<?php echo str_replace(['http://', 'https://'], '', $link_zalo); ?>" rel="nofollow" target="_blank"><i class="ticon-zalo-circle2"></i>Chat Zalo</a></li>
        <li class="phone-mobile">
            <a href="tel:<?php echo str_replace(['http://', 'https://'], '', $link_phone); ?>" rel="nofollow" class="button">
                <span class="phone_animation animation-shadow">
                    <i class="icon-phone-w" aria-hidden="true"></i>
                </span>
                <span class="btn_phone_txt">Gọi điện</span>
            </a>
        </li>
        <li><a href="<?php echo $link_messenger; ?>" rel="nofollow" target="_blank"><i class="ticon-messenger"></i>Messenger</a></li>
        <li><a href="sms:<?php echo str_replace(['http://', 'https://'], '', $link_sms); ?>" class="chat_animation">
            <i class="ticon-chat-sms" aria-hidden="true" title="Nhắn tin sms"></i>Nhắn tin SMS</a></li>
        <li class="to-top-pc">
            <a href="#" rel="nofollow">
                <i class="ticon-angle-up" aria-hidden="true" title="Quay lên trên"></i>
            </a>
        </li>
    </ul>
</div>

<script>
(function() {
    const pluginUrl = "<?php echo $plugin_url; ?>";
    const iconMappings = {
        'ticon-heart': 'add-cart-min.png',
        'ticon-zalo-circle2': 'icon-zalo-min.png',
        'ticon-angle-up': 'icon-angle-up-min.png',
        'ticon-messenger': 'icon-messenger-min.png',
        'ticon-chat-sms': 'icon-sms-min.png',
        'icon-phone-w': 'icon-phone-w.png'
    };

    document.querySelectorAll('.giuseart-nav ul>li a i').forEach(icon => {
        const className = icon.className;
        if (iconMappings[className]) {
            icon.style.background = `url(${pluginUrl}${iconMappings[className]}) no-repeat`;
        }
    });
})();
</script>