<header class="am-topbar">
    <div class="wrap">
        <h1 class="am-topbar-brand">
            <a href="#">后台管理</a>
        </h1>

        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
                data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span
                    class="am-icon-bars"></span></button>

        <div class="am-collapse am-topbar-collapse" id="doc-topbar-collapse">
            <ul class="am-nav am-nav-pills am-topbar-nav">
                @if (Auth::check())
                    <li @if (Request::is('/')) class="am-active" @endif>
                        <a href="/">首页</a>
                    </li>
                    <li @if (Request::is('/userinfo')) class="am-active" @endif>
                        <a href="/userinfo">用户信息</a>
                    </li>
                    <li @if (Request::is('/do')) class="am-active" @endif>
                        <a href="/do">用户记录</a>
                    </li>
                    <li @if (Request::is('/tag')) class="am-active" @endif>
                        <a href="/do">用户标签</a>
                    </li>
                @endif
            </ul>

            <div class="am-topbar-right">
                <div class="am-dropdown" data-am-dropdown="{boundary: '.am-topbar'}">
                    <button class="am-btn am-btn-secondary am-topbar-btn am-btn-sm am-dropdown-toggle"
                            data-am-dropdown-toggle>用户名 <span class="am-icon-caret-down"></span></button>
                    <ul class="am-dropdown-content">
                        <li><a href="#">注册</a></li>
                        <li><a href="#">随便看看</a></li>
                    </ul>
                </div>
            </div>

            <div class="am-topbar-right">
            </div>
        </div>
    </div>

</header>