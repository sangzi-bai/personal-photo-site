
<!doctype html>
<html lang="zh">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>图组页</title>
  <link rel="stylesheet" href=" <?php echo  base_url() ?>assets/css/normalize.css">
  <link rel="stylesheet" href="<?php echo  base_url() ?>assets/css/simple.slide.css" type="text/css">
  <link rel="stylesheet" href="<?php echo  base_url() ?>assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="<?php echo  base_url() ?>assets/css/default.css">
  <style type="text/css">
    #gallery-wrapper {
      position: relative;
      max-width: 75%;
      width: 75%;
      margin: 50px auto;
    }
    
    img.thumb {
      width: 100%;
      max-width: 100%;
      height: auto;
    }
    
    .white-panel {
      position: absolute;
      background: white;
      border-radius: 5px;
      box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.3);
      padding: 10px;
    }
    
    .white-panel h1 {
      font-size: 1em;
    }
    
    .white-panel h1 a {
      color: #A92733;
    }
    
    .white-panel:hover {
      box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);
      margin-top: -5px;
      -webkit-transition: all 0.3s ease-in-out;
      -moz-transition: all 0.3s ease-in-out;
      -o-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out;
    }
  </style>
  <!--[if IE]>
    <script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
    <![endif]-->
</head>

<body>
  <section class="htmleaf-container">
    <header class="htmleaf-header">
      <h1></h1>
      <div class="htmleaf-links">
        <a class="htmleaf-icon icon-htmleaf-home-outline" href="/" title="回到主页" ><span> BUG主页</span></a>
        <a class="htmleaf-icon icon-htmleaf-arrow-forward-outline" href="/picshow" title="返回展示页" ><span> 返回展示页</span></a>
      </div>
    </header>
  </section>
  <section id="gallery-wrapper">
    <?php for ( $j = 0; $j < count($picgroup); $j++):?>
    <article class="white-panel">
      <a href="javascript:;" i="<?php echo  base_url() ?>/uploads/picgroup/<?php echo $picgroup[$j]['filename']; ?>" class="Slide Two">
        <img src="<?php echo  base_url() ?>/uploads/picgroup/<?php echo $picgroup[$j]['filename']; ?>" class="thumb">
      </a>
    </article>
    <?php endfor; ?>
  </section>
  <script src="http://libs.useso.com/js/jquery/1.11.0/jquery.min.js" type="text/javascript"></script>
  <script>
    window.jQuery || document.write('<script src="<?php echo  base_url() ?>/assets/js/jquery.min.js"><\/script>')
  </script>
  <script src="<?php echo  base_url() ?>/assets/js/pinterest_grid.js"></script>
  <script type="text/javascript">
    $(function() {
      $("#gallery-wrapper").pinterest_grid({
        no_columns: 1,
        padding_x: 10,
        padding_y: 10,
        margin_bottom: 50,
        single_column_breakpoint: 300,
      });

    });
  </script>
</body>

</html>


<script src="<?php echo  base_url() ?>/assets/js/simple.slide.min.js"></script>

<script type="text/javascript">
  $('.Two').simpleSlide({
    "opacity": 0.5, //背景透明度
    "windowAction": "zoomIn", //窗体进入动画
    "imageAction": "bounceIn", //图片进入动画
    "loadingImage": "<?php echo  base_url() ?>/uploads/picshow/1.gif" //加载图片
  });
</script>
<!--<script src="assets/js/jquery.min.js"></script>-->
