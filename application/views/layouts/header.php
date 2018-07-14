<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= base_url() ?>">MP3 Download</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

            <ul class="nav navbar-nav navbar-right">
                <li <? if ($this->uri->segment(2) == 'home') { echo 'class="active"';} ?>><a href="<?= base_url('site/home') ?>">Home</a></li>
                <li <? if ($this->uri->segment(2) == 'news') { echo 'class="active"';} ?>><a href="<?= base_url('site/news')?>">News</a></li>
                <li <? if ($this->uri->segment(2) == 'faq') { echo 'class="active"';} ?>><a href="#">FAQ</a></li>
                <li <? if ($this->uri->segment(2) == 'about') { echo 'class="active"';} ?>><a href="about.html">DMCA</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
