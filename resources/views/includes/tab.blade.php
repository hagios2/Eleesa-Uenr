
<div>
    <ul class="nav nav-tabs">
        <li class="{{ Request::is('/') ? "active" : "" }}"> <a href="/"><span class="glyphicon glyphicon-home"></span> Academics</a></li>
        <li class="{{ Request::path() == '/news' ? "active" : "" }}"><a href="/news"><span class="glyphicon glyphicon-newspaper"></span> News</a></li>
        <li class="{{ Request::is('/history') ? "active" : "" }}"><a href="/history"><span class="glyphicon glyphicon-newspaper"></span> History</a></li>
    </ul>
</div>
