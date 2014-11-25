<script>
    window.fbAsyncInit = function () {
        FB.init({
            appId: '577982128970459',
            xfbml: true,
            version: 'v2.2'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<header style='margin-bottom:60px'>
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1"  style="z-index: 10;">
        <br>
        <br>
        <br>
        <a href="#">JOGAR</a>
        <a href="#">CRIAR</a>
        <a href="#">RANKING</a>
        <a href="#">COLAS</a>
        <br>
        <a href="#">CONFIGURAÇÕES</a>
        <a href="#">ATUALIZAÇÕES</a>
        <a href="#">SOBRE</a>
        <a href="#">SEJA PRO!</a>
        <a href="#">FAQ</a>
        <br>
        <a href="#">LOGOUT</a>
    </nav>

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="menu" id="showLeft" style="margin-top:15px">
                    <span class="menu-item"></span>
                    <span class="menu-item"></span>
                    <span class="menu-item"></span>
                </div>
                <a class="navbar-brand" href="#">
                    <img alt="Brand" style="margin-top:-10px; margin-left:60px; height:45px" src="/image/LOGO.png">
                </a>
            </div>
        </div>
    </nav>

    <!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
    <script src="/js/classie.js"></script>
    <script>
var menuLeft = document.getElementById('cbp-spmenu-s1'),
    menuRight = document.getElementById('cbp-spmenu-s2'),
    menuTop = document.getElementById('cbp-spmenu-s3'),
    menuBottom = document.getElementById('cbp-spmenu-s4'),
    showLeft = document.getElementById('showLeft'),
    showRight = document.getElementById('showRight'),
    showTop = document.getElementById('showTop'),
    showBottom = document.getElementById('showBottom'),
    showLeftPush = document.getElementById('showLeftPush'),
    showRightPush = document.getElementById('showRightPush'),
    body = document.body;

showLeft.onclick = function () {
classie.toggle(this, 'active');
classie.toggle(menuLeft, 'cbp-spmenu-open');
disableOther('showLeft');
};
showRight.onclick = function () {
classie.toggle(this, 'active');
classie.toggle(menuRight, 'cbp-spmenu-open');
disableOther('showRight');
};
showTop.onclick = function () {
classie.toggle(this, 'active');
classie.toggle(menuTop, 'cbp-spmenu-open');
disableOther('showTop');
};
showBottom.onclick = function () {
classie.toggle(this, 'active');
classie.toggle(menuBottom, 'cbp-spmenu-open');
disableOther('showBottom');
};
showLeftPush.onclick = function () {
classie.toggle(this, 'active');
classie.toggle(body, 'cbp-spmenu-push-toright');
classie.toggle(menuLeft, 'cbp-spmenu-open');
disableOther('showLeftPush');
};
showRightPush.onclick = function () {
classie.toggle(this, 'active');
classie.toggle(body, 'cbp-spmenu-push-toleft');
classie.toggle(menuRight, 'cbp-spmenu-open');
disableOther('showRightPush');
};

function disableOther(button) {
if (button !== 'showLeft') {
    classie.toggle(showLeft, 'disabled');
}
if (button !== 'showRight') {
    classie.toggle(showRight, 'disabled');
}
if (button !== 'showTop') {
    classie.toggle(showTop, 'disabled');
}
if (button !== 'showBottom') {
    classie.toggle(showBottom, 'disabled');
}
if (button !== 'showLeftPush') {
    classie.toggle(showLeftPush, 'disabled');
}
if (button !== 'showRightPush') {
    classie.toggle(showRightPush, 'disabled');
}
}
    </script>
</header>