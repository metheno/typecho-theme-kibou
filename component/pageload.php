<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php if (($this->options->enableTransparent == 1) && (UACheck::isSafari() == true)): ?>
  <?php if ((UACheck::isMobile() == false)): ?>
  <link href="<?php $this->options->themeUrl('css/transparent.css'); ?>" rel="stylesheet">
  <style>
    @supports (-webkit-backdrop-filter: blur(20px)) or (backdrop-filter: blur(20px)) {
      body {
        background-image: url('<?php if ($this->options->enableTransparentBg): $this->options->enableTransparentBg(); endif; ?>');
        background-position: <?php if ($this->options->enableTransparentBgPosition): $this->options->enableTransparentBgPosition(); endif; ?>;
      }
    }
  </style>
  <?php endif; ?>
<?php endif; ?>

<?php if (($this->options->themeColor) and (UACheck::isSafari() == false)): ?>
  <style>
    a, a:hover, a:active,
    .pagination > .active > a,.pagination > .active > a:focus,.pagination > .active > a:hover,
    .pagination > .active > span,.pagination > .active > span:focus,.pagination > .active > span:hover,
    .pagination > li > a, .pagination > li > a:focus, .pagination > li > a:hover, .pagination > li > span,
    h2.blog-post-title a {
      color: <?php $this->options->themeColor(); ?>;
      border-color: <?php $this->options->themeColor(); ?>;
    }
    .blog-masthead {
      background-color: <?php $this->options->themeColor(); ?>;
    }
  </style>
<?php endif; ?>

<?php if ($this->options->enableSerifFont == 1): ?>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto Slab', serif;
    }
  </style>
<?php else: ?>
  <link href="https://fonts.googleapis.com/css?family=Roboto:100italic,300italic,400italic,600italic,700italic,100,300,400,600,700" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', 'Pingfang SC', 'Microsoft Yahei', sans-serif;
    }
  </style>
<?php endif; ?>
