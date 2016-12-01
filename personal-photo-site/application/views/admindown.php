<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

</div>

	<footer id="site-footer" role="contentinfo">
	</footer><!-- #site-footer -->

	<!-- js -->
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
	<script src="//cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/script.js') ?>"></script>
<script type=>
  $(function() {
      $('#mytap a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
  });
  </script>
</body>
</html>