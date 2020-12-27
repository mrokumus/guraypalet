<? get_header()?>
<div class="container" style="margin: 25vh ">
    <div id="success" style="padding: 30px;border-radius: 5px;margin: 5px; font-size: 1.23em; display: none "
         class="alert-success">
        Mesajınız gönderildi. En kısa sürede geri dönüş sağlayacağız. 5 sn içerisinde siteye yönledirileceksiniz.
        Yönlendirme sağlanamaz ise
        <a href="/">buraya</a> tıklayın.
    </div>
    <div id="fail" style="padding: 30px;border-radius: 5px;margin: 5px; font-size: 1.23em;display: none"
         class="alert-danger">
        Mesajınız gönderilemedi. Daha sonra tekrar deneyin. 5 sn içerisinde siteye yönledirileceksiniz. Yönlendirme
        sağlanamaz ise
        <a href="/">buraya</a> tıklayın.
    </div>
    <div id="r" style="padding: 30px;border-radius: 5px;margin: 5px; font-size: 1.23em;display: none"
         class="alert-info">
        Lütfen tüm alanları doldurun. 5 sn içerisinde siteye yönledirileceksiniz.
        Yönlendirme sağlanamaz ise
        <a href="/">buraya</a> tıklayın.
    </div>
    <div id="g" style="padding: 30px;border-radius: 5px;margin: 5px; font-size: 1.23em;display: none"
         class="alert-info">
       Lütfen insan olduğunuzu kanıtlayın. 5 sn içerisinde siteye yönledirileceksiniz.
        Yönlendirme sağlanamaz ise
        <a href="/">buraya</a> tıklayın.
    </div>
</div>
<script>
    const s = "https://guraypalet.com/mail/?r=send";
    const f = "https://guraypalet.com/mail/?r=fail";
    const r = "https://guraypalet.com/mail/?r=r";
    const g = "https://guraypalet.com/mail/?r=g";
    if (window.location.href === s) {
        document.getElementById("success").style.display = "block";
    }
    if (window.location.href === f) {
        document.getElementById("fail").style.display = "block";
    }
    if (window.location.href === r) {
        document.getElementById("r").style.display = "block";
    }
    if (window.location.href === g) {
        document.getElementById("g").style.display = "block";
    }
</script>

<script>
    setTimeout(function () {
        location.href = "https://guraypalet.com#contact"
    }, 5000);
</script>
<?get_footer()?>